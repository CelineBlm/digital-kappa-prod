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
                'default' => 'Lancement officiel - Nouveaux produits disponibles',
            ]
        );

        $this->add_control(
            'title_part1',
            [
                'label' => __('Titre (partie 1)', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Marketplace de',
            ]
        );

        $this->add_control(
            'title_highlight',
            [
                'label' => __('Titre (highlight)', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'produits digitaux',
            ]
        );

        $this->add_control(
            'title_part2',
            [
                'label' => __('Titre (partie 2)', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '',
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => __('Sous-titre', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Découvrez une sélection de produits digitaux de qualité : applications mobiles, ebooks et templates pour booster votre productivité. Achat simple en un clic, téléchargement immédiat, accès à vie.',
            ]
        );

        $this->add_control(
            'btn_primary_text',
            [
                'label' => __('Bouton primaire', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Explorer les produits',
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
        <section class="bg-gray-50 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 lg:px-20 py-6">
                <div class="grid lg:grid-cols-2 gap-12 items-start">
                    <!-- Content -->
                    <div class="space-y-6 lg:space-y-8 pt-8">
                        <!-- Badge pill -->
                        <div class="inline-flex items-center gap-4 bg-white border border-gray-100 rounded-full px-4 py-2 shadow-sm">
                            <div class="w-2 h-2 bg-dk-primary rounded-full"></div>
                            <p class="text-sm text-gray-900 font-body"><?php echo esc_html($settings['badge_text']); ?></p>
                        </div>

                        <!-- Title with two lines -->
                        <h1 class="font-heading leading-tight">
                            <span class="block text-4xl lg:text-6xl text-gray-900"><?php echo esc_html($settings['title_part1']); ?></span>
                            <span class="block text-4xl lg:text-6xl text-dk-primary"><?php echo esc_html($settings['title_highlight']); ?></span>
                            <?php if (!empty($settings['title_part2'])) : ?>
                            <span class="block text-4xl lg:text-6xl text-gray-900"><?php echo esc_html($settings['title_part2']); ?></span>
                            <?php endif; ?>
                        </h1>

                        <!-- Subtitle -->
                        <p class="text-lg font-body leading-relaxed max-w-xl" style="color: rgba(13, 20, 33, 0.7);">
                            <?php echo esc_html($settings['subtitle']); ?>
                        </p>

                        <!-- Buttons -->
                        <div class="flex flex-col sm:flex-row gap-3">
                            <a href="<?php echo esc_url($settings['btn_primary_link']['url']); ?>" class="bg-dk-primary text-white px-6 py-3.5 rounded-lg hover:bg-dk-primary-hover transition-colors text-center font-body font-semibold">
                                <?php echo esc_html($settings['btn_primary_text']); ?>
                            </a>
                            <a href="<?php echo esc_url($settings['btn_secondary_link']['url']); ?>" class="bg-white border border-dk-primary text-dk-primary px-6 py-3.5 rounded-lg hover:bg-gray-50 transition-colors text-center font-body font-semibold">
                                <?php echo esc_html($settings['btn_secondary_text']); ?>
                            </a>
                        </div>
                    </div>

                    <!-- Image Cards Grid -->
                    <div class="relative hidden lg:block">
                        <!-- Main card - Applications mobiles -->
                        <div class="relative rounded-2xl overflow-hidden shadow-xl mb-4" style="border: 1px solid #f0f2f5;">
                            <?php if (!empty($settings['image']['url'])) : ?>
                            <img src="<?php echo esc_url($settings['image']['url']); ?>" alt="Applications mobiles" class="w-full h-48 object-cover">
                            <?php else : ?>
                            <div class="w-full h-48 bg-gradient-to-br from-blue-500 to-purple-600"></div>
                            <?php endif; ?>
                            <!-- Gradient overlay -->
                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/60 via-gray-900/15 to-transparent"></div>
                            <!-- Badge -->
                            <div class="absolute top-4 left-4 bg-dk-primary text-white text-xs font-body font-semibold px-3 py-1.5 rounded-lg">
                                Populaire
                            </div>
                            <!-- Text -->
                            <div class="absolute bottom-4 left-4">
                                <h3 class="text-white font-heading text-base">Applications mobiles</h3>
                                <p class="text-white/70 text-xs font-body">Applications prêtes à l'emploi</p>
                            </div>
                        </div>

                        <!-- Two smaller cards -->
                        <div class="grid grid-cols-2 gap-4">
                            <!-- Ebooks card -->
                            <div class="relative rounded-2xl overflow-hidden shadow-xl h-56" style="border: 1px solid #f0f2f5;">
                                <div class="w-full h-full bg-gradient-to-br from-amber-400 to-orange-500"></div>
                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/60 via-gray-900/15 to-transparent"></div>
                                <div class="absolute bottom-3 left-3">
                                    <h4 class="text-white font-heading text-sm">Ebooks</h4>
                                    <p class="text-white/70 text-xs font-body">Guides & formations</p>
                                </div>
                            </div>
                            <!-- Templates card -->
                            <div class="relative rounded-2xl overflow-hidden shadow-xl h-56" style="border: 1px solid #f0f2f5;">
                                <div class="w-full h-full bg-gradient-to-br from-teal-400 to-cyan-500"></div>
                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/60 via-gray-900/15 to-transparent"></div>
                                <div class="absolute bottom-3 left-3">
                                    <h4 class="text-white font-heading text-sm">Templates</h4>
                                    <p class="text-white/70 text-xs font-body">Design & code</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Background blur decoration -->
            <div class="absolute top-0 left-1/2 w-80 h-80 bg-dk-primary/10 rounded-full blur-3xl -z-10"></div>
        </section>
        <?php
    }
}
