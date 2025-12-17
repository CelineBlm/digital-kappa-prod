<?php
/**
 * Page Header Widget
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

class DK_Page_Header extends \Elementor\Widget_Base {

    public function get_name() {
        return 'dk_page_header';
    }

    public function get_title() {
        return __('DK - Page Header', 'digital-kappa');
    }

    public function get_icon() {
        return 'eicon-header';
    }

    public function get_categories() {
        return ['digital-kappa'];
    }

    protected function register_controls() {
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
                'default' => 'Aide & Support',
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __('Titre', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Questions Fréquentes',
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => __('Sous-titre', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Trouvez rapidement les réponses à vos questions',
            ]
        );

        $this->add_control(
            'show_badge',
            [
                'label' => __('Afficher le badge', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'yes',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="bg-gray-50 py-12 lg:py-20 px-4 lg:px-20 border-b border-gray-100">
            <div class="max-w-4xl mx-auto text-center">
                <?php if ($settings['show_badge'] === 'yes' && !empty($settings['badge_text'])) : ?>
                <div class="inline-flex items-center gap-2 bg-[rgba(210,163,11,0.1)] rounded-full px-6 py-2 mb-6">
                    <p class="text-sm text-[#d2a30b] font-['Montserrat',sans-serif]"><?php echo esc_html($settings['badge_text']); ?></p>
                </div>
                <?php endif; ?>
                <h1 class="text-[#1a1a1a] font-['Merriweather',serif] mb-4"><?php echo esc_html($settings['title']); ?></h1>
                <p class="text-[#4a5565] text-lg lg:text-xl font-['Montserrat',sans-serif]">
                    <?php echo esc_html($settings['subtitle']); ?>
                </p>
            </div>
        </section>
        <?php
    }
}
