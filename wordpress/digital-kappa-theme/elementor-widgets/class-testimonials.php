<?php
/**
 * Testimonials Widget
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

class DK_Testimonials extends \Elementor\Widget_Base {

    public function get_name() {
        return 'dk_testimonials';
    }

    public function get_title() {
        return __('DK - Testimonials', 'digital-kappa');
    }

    public function get_icon() {
        return 'eicon-testimonial';
    }

    public function get_categories() {
        return ['digital-kappa'];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Témoignages', 'digital-kappa'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __('Titre', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Ce que disent nos clients',
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'content',
            [
                'label' => __('Témoignage', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Un témoignage client',
            ]
        );

        $repeater->add_control(
            'author',
            [
                'label' => __('Auteur', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Nom du client',
            ]
        );

        $repeater->add_control(
            'role',
            [
                'label' => __('Rôle', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Développeur',
            ]
        );

        $repeater->add_control(
            'rating',
            [
                'label' => __('Note', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 5,
                'min' => 1,
                'max' => 5,
            ]
        );

        $this->add_control(
            'testimonials',
            [
                'label' => __('Témoignages', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'content' => 'Les templates sont de très bonne qualité et m\'ont fait gagner beaucoup de temps sur mes projets. Le support est également très réactif.',
                        'author' => 'Marie L.',
                        'role' => 'Designer freelance',
                        'rating' => 5,
                    ],
                    [
                        'content' => 'Excellent rapport qualité-prix. Les ebooks sont très bien documentés et faciles à suivre. Je recommande vivement !',
                        'author' => 'Thomas D.',
                        'role' => 'Entrepreneur',
                        'rating' => 5,
                    ],
                    [
                        'content' => 'Interface claire et intuitive. Le téléchargement est instantané et les produits correspondent parfaitement à leur description.',
                        'author' => 'Sophie M.',
                        'role' => 'Développeuse web',
                        'rating' => 5,
                    ],
                ],
                'title_field' => '{{{ author }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="bg-gray-50 py-12 lg:py-20 px-4 lg:px-20">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-center text-gray-900 font-heading mb-12"><?php echo esc_html($settings['title']); ?></h2>

                <div class="grid md:grid-cols-3 gap-6">
                    <?php foreach ($settings['testimonials'] as $testimonial) : ?>
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                        <div class="flex gap-1 mb-4">
                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <svg class="w-5 h-5 <?php echo $i <= $testimonial['rating'] ? 'text-dk-primary' : 'text-gray-300'; ?>" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <?php endfor; ?>
                        </div>
                        <p class="text-gray-600 mb-6 font-body text-sm leading-relaxed">"<?php echo esc_html($testimonial['content']); ?>"</p>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-dk-primary rounded-full flex items-center justify-center text-white font-semibold">
                                <?php echo esc_html(substr($testimonial['author'], 0, 1)); ?>
                            </div>
                            <div>
                                <p class="font-body font-semibold text-gray-900 text-sm"><?php echo esc_html($testimonial['author']); ?></p>
                                <p class="font-body text-gray-500 text-xs"><?php echo esc_html($testimonial['role']); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php
    }
}
