<?php
/**
 * Header Logo Widget
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

class DK_Header_Logo extends \Elementor\Widget_Base {

    public function get_name() {
        return 'dk_header_logo';
    }

    public function get_title() {
        return __('DK - Header Logo', 'digital-kappa');
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
                'label' => __('Logo', 'digital-kappa'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'logo',
            [
                'label' => __('Logo', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '',
                ],
            ]
        );

        $this->add_control(
            'logo_height',
            [
                'label' => __('Hauteur', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 20,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 40,
                ],
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __('Lien', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '/',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $logo_url = !empty($settings['logo']['url']) ? $settings['logo']['url'] : DK_THEME_URI . '/assets/images/logo-digital-kappa.svg';
        $height = $settings['logo_height']['size'] . $settings['logo_height']['unit'];
        ?>
        <a href="<?php echo esc_url($settings['link']['url']); ?>" class="dk-logo flex items-center gap-2">
            <?php if (!empty($settings['logo']['url'])) : ?>
            <img src="<?php echo esc_url($logo_url); ?>" alt="Digital Kappa" style="height: <?php echo esc_attr($height); ?>; width: auto;">
            <?php else : ?>
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-[#d2a30b] rounded flex items-center justify-center">
                    <span class="text-white font-bold text-sm">DK</span>
                </div>
                <span class="font-['Montserrat',sans-serif] font-semibold text-[#1a1a1a]">Digital Kappa</span>
            </div>
            <?php endif; ?>
        </a>
        <?php
    }
}
