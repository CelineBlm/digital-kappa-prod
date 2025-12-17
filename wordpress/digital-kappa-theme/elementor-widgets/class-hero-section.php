<?php
/**
 * Hero Section Widget
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

class DK_Hero_Section extends \Elementor\Widget_Base {

    public function get_name() {
        return 'dk_hero_section';
    }

    public function get_title() {
        return __('DK - Hero Section', 'digital-kappa');
    }

    public function get_icon() {
        return 'eicon-banner';
    }

    public function get_categories() {
        return ['digital-kappa'];
    }

    protected function register_controls() {
        // Content Section
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Contenu', 'digital-kappa'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'badge_text',
            [
                'label' => __('Badge', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Marketplace de produits digitaux',
            ]
        );

        $this->add_control(
            'title_part1',
            [
                'label' => __('Titre (partie 1)', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Accélérez vos projets avec des',
            ]
        );

        $this->add_control(
            'title_highlight',
            [
                'label' => __('Titre (highlight)', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'ressources digitales',
            ]
        );

        $this->add_control(
            'title_part2',
            [
                'label' => __('Titre (partie 2)', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'de qualité',
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => __('Sous-titre', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Découvrez notre collection d\'applications, ebooks et templates soigneusement sélectionnés pour booster votre productivité.',
            ]
        );

        $this->add_control(
            'btn_primary_text',
            [
                'label' => __('Bouton primaire', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Explorer le catalogue',
            ]
        );

        $this->add_control(
            'btn_primary_link',
            [
                'label' => __('Lien bouton primaire', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '/tous-les-produits/',
                ],
            ]
        );

        $this->add_control(
            'btn_secondary_text',
            [
                'label' => __('Bouton secondaire', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Comment ça marche',
            ]
        );

        $this->add_control(
            'btn_secondary_link',
            [
                'label' => __('Lien bouton secondaire', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '/comment-ca-marche/',
                ],
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => __('Image', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="bg-gray-50 relative overflow-hidden px-4 lg:px-20 py-12 lg:py-20">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Content -->
                    <div class="space-y-6 lg:space-y-8">
                        <div class="inline-flex items-center gap-2 bg-white border border-gray-100 rounded-full px-4 py-2 shadow-sm">
                            <div class="w-2 h-2 bg-[#d2a30b] rounded-full"></div>
                            <p class="text-sm text-[#0d1421] font-['Montserrat',sans-serif]"><?php echo esc_html($settings['badge_text']); ?></p>
                        </div>

                        <h1 class="text-[#0d1421] font-['Merriweather',serif] text-3xl lg:text-5xl leading-tight">
                            <?php echo esc_html($settings['title_part1']); ?>
                            <span class="text-[#d2a30b]"> <?php echo esc_html($settings['title_highlight']); ?></span>
                            <?php echo esc_html($settings['title_part2']); ?>
                        </h1>

                        <p class="text-[rgba(13,20,33,0.7)] text-lg font-['Montserrat',sans-serif]">
                            <?php echo esc_html($settings['subtitle']); ?>
                        </p>

                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="<?php echo esc_url($settings['btn_primary_link']['url']); ?>" class="bg-[#d2a30b] text-white px-8 py-4 rounded-xl hover:bg-[#b8900a] transition-colors text-center font-['Montserrat',sans-serif] font-semibold">
                                <?php echo esc_html($settings['btn_primary_text']); ?>
                            </a>
                            <a href="<?php echo esc_url($settings['btn_secondary_link']['url']); ?>" class="bg-white border border-gray-200 text-[#0d1421] px-8 py-4 rounded-xl hover:border-[#d2a30b] hover:text-[#d2a30b] transition-colors text-center font-['Montserrat',sans-serif]">
                                <?php echo esc_html($settings['btn_secondary_text']); ?>
                            </a>
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="relative">
                        <div class="rounded-2xl overflow-hidden shadow-2xl">
                            <img src="<?php echo esc_url($settings['image']['url']); ?>" alt="Digital Kappa Hero" class="w-full h-auto">
                        </div>
                        <!-- Decorative elements -->
                        <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-[#d2a30b] rounded-2xl -z-10 opacity-20"></div>
                        <div class="absolute -top-6 -right-6 w-32 h-32 bg-[#d2a30b] rounded-full -z-10 opacity-10"></div>
                    </div>
                </div>
            </div>

            <!-- Background decorations -->
            <div class="absolute top-0 right-0 lg:right-1/4 w-64 h-64 bg-[rgba(210,163,11,0.05)] rounded-full blur-3xl -z-10"></div>
        </section>
        <?php
    }
}
