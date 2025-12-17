<?php
/**
 * Features Section Widget
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

class DK_Features_Section extends \Elementor\Widget_Base {

    public function get_name() {
        return 'dk_features_section';
    }

    public function get_title() {
        return __('DK - Features Section', 'digital-kappa');
    }

    public function get_icon() {
        return 'eicon-featured-image';
    }

    public function get_categories() {
        return ['digital-kappa'];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Fonctionnalités', 'digital-kappa'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'icon',
            [
                'label' => __('Icône', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'download',
                'options' => [
                    'download' => 'Téléchargement',
                    'shield' => 'Bouclier',
                    'headphones' => 'Support',
                    'refresh' => 'Mise à jour',
                ],
            ]
        );

        $repeater->add_control(
            'title',
            [
                'label' => __('Titre', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Fonctionnalité',
            ]
        );

        $repeater->add_control(
            'description',
            [
                'label' => __('Description', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Description de la fonctionnalité',
            ]
        );

        $this->add_control(
            'features',
            [
                'label' => __('Fonctionnalités', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'icon' => 'download',
                        'title' => 'Téléchargement instantané',
                        'description' => 'Accédez immédiatement à vos produits après l\'achat',
                    ],
                    [
                        'icon' => 'shield',
                        'title' => 'Paiement sécurisé',
                        'description' => 'Transactions cryptées et données protégées',
                    ],
                    [
                        'icon' => 'headphones',
                        'title' => 'Support 24/7',
                        'description' => 'Notre équipe est disponible pour vous aider',
                    ],
                    [
                        'icon' => 'refresh',
                        'title' => 'Mises à jour gratuites',
                        'description' => 'Bénéficiez des dernières versions sans frais',
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $icons = [
            'download' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>',
            'shield' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>',
            'headphones' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>',
            'refresh' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>',
        ];
        ?>
        <section class="bg-white py-12 lg:py-16 px-4 lg:px-20 border-b border-gray-100">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                    <?php foreach ($settings['features'] as $feature) : ?>
                    <div class="text-center lg:text-left">
                        <div class="w-12 h-12 bg-dk-primary/10 rounded-xl flex items-center justify-center mx-auto lg:mx-0 mb-4 text-dk-primary">
                            <?php echo $icons[$feature['icon']] ?? $icons['download']; ?>
                        </div>
                        <h3 class="font-heading text-gray-900 text-base lg:text-lg mb-2"><?php echo esc_html($feature['title']); ?></h3>
                        <p class="text-sm text-gray-500 font-body"><?php echo esc_html($feature['description']); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php
    }
}
