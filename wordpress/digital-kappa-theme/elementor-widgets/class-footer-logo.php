<?php
/**
 * Footer Logo Widget
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

class DK_Footer_Logo extends \Elementor\Widget_Base {

    public function get_name() {
        return 'dk_footer_logo';
    }

    public function get_title() {
        return __('DK - Footer Logo', 'digital-kappa');
    }

    public function get_icon() {
        return 'eicon-logo';
    }

    public function get_categories() {
        return ['digital-kappa'];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Footer Logo', 'digital-kappa'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => __('Description', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Marketplace de produits digitaux de qualité pour gagner du temps dans vos projets.',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="dk-footer-brand">
            <div class="flex items-center gap-2 mb-4">
                <div class="w-8 h-8 bg-dk-primary rounded flex items-center justify-center">
                    <span class="text-white font-bold text-sm">DK</span>
                </div>
                <h4 class="text-white font-body font-semibold">Digital Kappa</h4>
            </div>
            <p class="text-sm text-gray-400 font-body">
                <?php echo esc_html($settings['description']); ?>
            </p>
        </div>
        <?php
    }
}
