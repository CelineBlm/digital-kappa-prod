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

        $this->end_controls_section();

        // Images Section for Category Cards
        $this->start_controls_section(
            'images_section',
            [
                'label' => __('Images des catégories', 'digital-kappa'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'image_applications',
            [
                'label' => __('Image Applications', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop',
                ],
            ]
        );

        $this->add_control(
            'label_applications',
            [
                'label' => __('Label Applications', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Applications mobiles',
            ]
        );

        $this->add_control(
            'sublabel_applications',
            [
                'label' => __('Sous-label Applications', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Applications prêtes à l\'emploi',
            ]
        );

        $this->add_control(
            'image_ebooks',
            [
                'label' => __('Image Ebooks', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=400&h=300&fit=crop',
                ],
            ]
        );

        $this->add_control(
            'label_ebooks',
            [
                'label' => __('Label Ebooks', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Ebooks',
            ]
        );

        $this->add_control(
            'sublabel_ebooks',
            [
                'label' => __('Sous-label Ebooks', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Guides & formations',
            ]
        );

        $this->add_control(
            'image_templates',
            [
                'label' => __('Image Templates', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=300&fit=crop',
                ],
            ]
        );

        $this->add_control(
            'label_templates',
            [
                'label' => __('Label Templates', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Templates',
            ]
        );

        $this->add_control(
            'sublabel_templates',
            [
                'label' => __('Sous-label Templates', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Design & code',
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
                        <!-- Main card - Applications -->
                        <a href="<?php echo esc_url(home_url('/categorie-produit/applications/')); ?>" class="block relative rounded-2xl overflow-hidden shadow-xl mb-4 group" style="border: 1px solid #f0f2f5;">
                            <?php if (!empty($settings['image_applications']['url'])) : ?>
                            <img src="<?php echo esc_url($settings['image_applications']['url']); ?>" alt="<?php echo esc_attr($settings['label_applications']); ?>" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
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
                                <h3 class="text-white font-heading text-base"><?php echo esc_html($settings['label_applications']); ?></h3>
                                <p class="text-white/70 text-xs font-body"><?php echo esc_html($settings['sublabel_applications']); ?></p>
                            </div>
                        </a>

                        <!-- Two smaller cards -->
                        <div class="grid grid-cols-2 gap-4">
                            <!-- Ebooks card -->
                            <a href="<?php echo esc_url(home_url('/categorie-produit/ebooks/')); ?>" class="block relative rounded-2xl overflow-hidden shadow-xl h-56 group" style="border: 1px solid #f0f2f5;">
                                <?php if (!empty($settings['image_ebooks']['url'])) : ?>
                                <img src="<?php echo esc_url($settings['image_ebooks']['url']); ?>" alt="<?php echo esc_attr($settings['label_ebooks']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <?php else : ?>
                                <div class="w-full h-full bg-gradient-to-br from-amber-400 to-orange-500"></div>
                                <?php endif; ?>
                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/60 via-gray-900/15 to-transparent"></div>
                                <div class="absolute bottom-3 left-3">
                                    <h4 class="text-white font-heading text-sm"><?php echo esc_html($settings['label_ebooks']); ?></h4>
                                    <p class="text-white/70 text-xs font-body"><?php echo esc_html($settings['sublabel_ebooks']); ?></p>
                                </div>
                            </a>
                            <!-- Templates card -->
                            <a href="<?php echo esc_url(home_url('/categorie-produit/templates/')); ?>" class="block relative rounded-2xl overflow-hidden shadow-xl h-56 group" style="border: 1px solid #f0f2f5;">
                                <?php if (!empty($settings['image_templates']['url'])) : ?>
                                <img src="<?php echo esc_url($settings['image_templates']['url']); ?>" alt="<?php echo esc_attr($settings['label_templates']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                <?php else : ?>
                                <div class="w-full h-full bg-gradient-to-br from-teal-400 to-cyan-500"></div>
                                <?php endif; ?>
                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/60 via-gray-900/15 to-transparent"></div>
                                <div class="absolute bottom-3 left-3">
                                    <h4 class="text-white font-heading text-sm"><?php echo esc_html($settings['label_templates']); ?></h4>
                                    <p class="text-white/70 text-xs font-body"><?php echo esc_html($settings['sublabel_templates']); ?></p>
                                </div>
                            </a>
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
