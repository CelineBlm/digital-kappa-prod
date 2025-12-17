<?php
/**
 * Process Steps Widget
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

class DK_Process_Steps extends \Elementor\Widget_Base {

    public function get_name() {
        return 'dk_process_steps';
    }

    public function get_title() {
        return __('DK - Process Steps', 'digital-kappa');
    }

    public function get_icon() {
        return 'eicon-flow';
    }

    public function get_categories() {
        return ['digital-kappa'];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Étapes', 'digital-kappa'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'icon',
            [
                'label' => __('Icône', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'search',
                'options' => [
                    'search' => 'Recherche',
                    'credit-card' => 'Carte bancaire',
                    'download' => 'Téléchargement',
                ],
            ]
        );

        $repeater->add_control(
            'title',
            [
                'label' => __('Titre', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Étape',
            ]
        );

        $repeater->add_control(
            'description',
            [
                'label' => __('Description', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Description de l\'étape',
            ]
        );

        $this->add_control(
            'steps',
            [
                'label' => __('Étapes', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'icon' => 'search',
                        'title' => 'Parcourez',
                        'description' => "Explorez notre catalogue de produits digitaux : applications, ebooks et templates. Utilisez les filtres pour trouver exactement ce dont vous avez besoin.",
                    ],
                    [
                        'icon' => 'credit-card',
                        'title' => 'Achetez en un clic',
                        'description' => "Pas de compte requis. Cliquez sur \"Acheter maintenant\", renseignez votre email et réglez en toute sécurité via notre système de paiement sécurisé.",
                    ],
                    [
                        'icon' => 'download',
                        'title' => 'Téléchargez',
                        'description' => "Accédez immédiatement à votre produit après le paiement. Recevez un email de confirmation avec un lien de téléchargement valable à vie.",
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $steps = $settings['steps'];

        $icons = [
            'search' => '<svg class="w-10 h-10" fill="none" viewBox="0 0 40 40"><path d="M18.333 31.667c7.364 0 13.334-5.97 13.334-13.334 0-7.363-5.97-13.333-13.334-13.333-7.363 0-13.333 5.97-13.333 13.333 0 7.364 5.97 13.334 13.333 13.334zM35 35l-7.25-7.25" stroke="#D2A30B" stroke-width="3.333" stroke-linecap="round" stroke-linejoin="round"></path></svg>',
            'credit-card' => '<svg class="w-10 h-10" fill="none" viewBox="0 0 40 40"><path d="M35 6.667H5c-1.841 0-3.333 1.492-3.333 3.333v20c0 1.84 1.492 3.333 3.333 3.333h30c1.84 0 3.333-1.492 3.333-3.333V10c0-1.841-1.492-3.333-3.333-3.333zM1.667 16.667h36.666" stroke="#D2A30B" stroke-width="3.333" stroke-linecap="round" stroke-linejoin="round"></path></svg>',
            'download' => '<svg class="w-10 h-10" fill="none" viewBox="0 0 40 40"><path d="M20 25V5M11.667 16.667L20 25l8.333-8.333M5 30v3.333c0 .884.351 1.732.976 2.357a3.332 3.332 0 002.357.977h23.334c.884 0 1.732-.352 2.357-.977.625-.625.976-1.473.976-2.357V30" stroke="#D2A30B" stroke-width="3.333" stroke-linecap="round" stroke-linejoin="round"></path></svg>',
        ];
        ?>
        <section class="bg-white py-12 lg:py-20 px-4 lg:px-20">
            <div class="max-w-7xl mx-auto">
                <div class="grid md:grid-cols-3 gap-8 lg:gap-12 relative">
                    <?php foreach ($steps as $index => $step) : ?>
                    <div class="relative">
                        <!-- Connector line - desktop only -->
                        <?php if ($index < count($steps) - 1) : ?>
                        <div class="hidden md:block absolute top-10 left-full w-full h-0.5 bg-gradient-to-r from-[#d2a30b] to-transparent -translate-x-1/2 z-0"></div>
                        <?php endif; ?>

                        <div class="relative z-10 text-center">
                            <div class="bg-white border border-gray-100 rounded-2xl p-1.5 w-20 h-20 flex items-center justify-center mx-auto mb-6 shadow-sm">
                                <?php echo $icons[$step['icon']] ?? $icons['search']; ?>
                            </div>

                            <div class="bg-[#d2a30b] w-8 h-8 rounded-full flex items-center justify-center mx-auto mb-6">
                                <span class="text-white font-['Montserrat',sans-serif]"><?php echo $index + 1; ?></span>
                            </div>

                            <h3 class="font-['Merriweather',serif] text-[#0d1421] mb-4"><?php echo esc_html($step['title']); ?></h3>

                            <p class="text-[rgba(13,20,33,0.7)] font-['Montserrat',sans-serif]"><?php echo esc_html($step['description']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php
    }
}
