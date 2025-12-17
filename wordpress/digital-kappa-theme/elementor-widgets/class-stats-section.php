<?php
/**
 * Stats Section Widget
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

class DK_Stats_Section extends \Elementor\Widget_Base {

    public function get_name() {
        return 'dk_stats_section';
    }

    public function get_title() {
        return __('DK - Stats Section', 'digital-kappa');
    }

    public function get_icon() {
        return 'eicon-number-field';
    }

    public function get_categories() {
        return ['digital-kappa'];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Statistiques', 'digital-kappa'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'value',
            [
                'label' => __('Valeur', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '100%',
            ]
        );

        $repeater->add_control(
            'label',
            [
                'label' => __('Label', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Statistique',
            ]
        );

        $this->add_control(
            'stats',
            [
                'label' => __('Statistiques', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'value' => '2026',
                        'label' => 'Année de lancement',
                    ],
                    [
                        'value' => '100%',
                        'label' => 'Engagement qualité',
                    ],
                    [
                        'value' => '14 jours',
                        'label' => 'Garantie satisfait ou remboursé',
                    ],
                    [
                        'value' => '24h',
                        'label' => 'Support réactif',
                    ],
                ],
                'title_field' => '{{{ label }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="mt-12 lg:mt-16 grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-8 max-w-6xl mx-auto">
            <?php foreach ($settings['stats'] as $stat) : ?>
            <div class="text-center">
                <p class="text-[#d2a30b] text-2xl lg:text-4xl font-['Montserrat',sans-serif] font-semibold mb-2">
                    <?php echo esc_html($stat['value']); ?>
                </p>
                <p class="text-[#4a5565] text-sm lg:text-base font-['Montserrat',sans-serif]"><?php echo esc_html($stat['label']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
        <?php
    }
}
