<?php
/**
 * Header Search Widget
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

class DK_Header_Search extends \Elementor\Widget_Base {

    public function get_name() {
        return 'dk_header_search';
    }

    public function get_title() {
        return __('DK - Header Search', 'digital-kappa');
    }

    public function get_icon() {
        return 'eicon-search';
    }

    public function get_categories() {
        return ['digital-kappa'];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Recherche', 'digital-kappa'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'placeholder',
            [
                'label' => __('Placeholder', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Rechercher un produit...',
            ]
        );

        $this->add_control(
            'show_autocomplete',
            [
                'label' => __('Autocomplétion', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'yes',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="dk-search-container relative flex-1 max-w-md">
            <svg class="dk-search-icon w-5 h-5 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="w-full">
                <input type="hidden" name="post_type" value="product">
                <input type="text" name="s" class="dk-search-input w-full pl-10 pr-4 py-2.5 bg-gray-50 border border-transparent rounded-lg text-sm font-body focus:bg-white focus:border-dk-primary focus:ring-2 focus:ring-dk-primary/20 transition-all" placeholder="<?php echo esc_attr($settings['placeholder']); ?>">
            </form>
            <div class="dk-search-results-container absolute top-full left-0 right-0 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg z-50 hidden"></div>
        </div>
        <?php
    }
}
