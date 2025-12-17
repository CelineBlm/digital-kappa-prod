<?php
/**
 * Product Filters Widget
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

class DK_Product_Filters extends \Elementor\Widget_Base {

    public function get_name() {
        return 'dk_product_filters';
    }

    public function get_title() {
        return __('DK - Product Filters', 'digital-kappa');
    }

    public function get_icon() {
        return 'eicon-filter';
    }

    public function get_categories() {
        return ['digital-kappa'];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Filtres', 'digital-kappa'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_categories',
            [
                'label' => __('Afficher les catégories', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'show_price_filter',
            [
                'label' => __('Afficher le filtre de prix', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'show_rating_filter',
            [
                'label' => __('Afficher le filtre de note', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'yes',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        // Get categories with counts
        $categories = get_terms([
            'taxonomy' => 'product_cat',
            'hide_empty' => true,
        ]);
        ?>
        <aside class="dk-filters lg:sticky lg:top-24">
            <?php if ($settings['show_categories'] === 'yes') : ?>
            <!-- Categories -->
            <div class="mb-8">
                <h4 class="font-['Montserrat',sans-serif] font-semibold text-[#1a1a1a] mb-4">Catégories</h4>
                <div class="space-y-3">
                    <?php foreach ($categories as $category) : ?>
                    <label class="dk-filter-option">
                        <input type="checkbox" name="category[]" value="<?php echo esc_attr($category->slug); ?>" class="dk-filter-checkbox w-4 h-4 rounded border-gray-300 text-[#d2a30b] focus:ring-[#d2a30b]">
                        <span class="text-sm text-[#4a5565] group-hover:text-[#1a1a1a]">
                            <?php echo esc_html($category->name); ?> <span class="text-gray-400">(<?php echo esc_html($category->count); ?>)</span>
                        </span>
                    </label>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($settings['show_price_filter'] === 'yes') : ?>
            <!-- Price Range -->
            <div class="mb-8">
                <h4 class="font-['Montserrat',sans-serif] font-semibold text-[#1a1a1a] mb-4">Prix</h4>
                <div class="space-y-3">
                    <label class="dk-filter-option">
                        <input type="radio" name="price_range" value="under50" class="w-4 h-4 border-gray-300 text-[#d2a30b] focus:ring-[#d2a30b]">
                        <span class="text-sm text-[#4a5565]">Moins de 50 €</span>
                    </label>
                    <label class="dk-filter-option">
                        <input type="radio" name="price_range" value="50to100" class="w-4 h-4 border-gray-300 text-[#d2a30b] focus:ring-[#d2a30b]">
                        <span class="text-sm text-[#4a5565]">50 € - 100 €</span>
                    </label>
                    <label class="dk-filter-option">
                        <input type="radio" name="price_range" value="100to200" class="w-4 h-4 border-gray-300 text-[#d2a30b] focus:ring-[#d2a30b]">
                        <span class="text-sm text-[#4a5565]">100 € - 200 €</span>
                    </label>
                    <label class="dk-filter-option">
                        <input type="radio" name="price_range" value="over200" class="w-4 h-4 border-gray-300 text-[#d2a30b] focus:ring-[#d2a30b]">
                        <span class="text-sm text-[#4a5565]">Plus de 200 €</span>
                    </label>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($settings['show_rating_filter'] === 'yes') : ?>
            <!-- Rating -->
            <div class="mb-8">
                <h4 class="font-['Montserrat',sans-serif] font-semibold text-[#1a1a1a] mb-4">Note minimale</h4>
                <div class="space-y-3">
                    <?php for ($rating = 5; $rating >= 3; $rating--) : ?>
                    <label class="dk-filter-option">
                        <input type="radio" name="rating" value="<?php echo $rating; ?>" class="w-4 h-4 border-gray-300 text-[#d2a30b] focus:ring-[#d2a30b]">
                        <div class="flex items-center gap-1">
                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <svg class="w-4 h-4 <?php echo $i <= $rating ? 'text-[#d2a30b]' : 'text-gray-300'; ?>" <?php echo $i <= $rating ? 'fill="currentColor"' : 'fill="none" stroke="currentColor"'; ?> viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <?php endfor; ?>
                            <span class="text-sm text-[#4a5565] ml-1">& plus</span>
                        </div>
                    </label>
                    <?php endfor; ?>
                </div>
            </div>
            <?php endif; ?>

            <!-- Reset button -->
            <button type="button" class="w-full bg-gray-50 text-[#1a1a1a] border border-gray-200 px-4 py-2 rounded-lg hover:bg-gray-100 transition-colors text-sm font-['Montserrat',sans-serif]" onclick="window.location.reload();">
                Réinitialiser les filtres
            </button>
        </aside>
        <?php
    }
}
