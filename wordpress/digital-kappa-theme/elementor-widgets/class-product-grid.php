<?php
/**
 * Product Grid Widget
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

class DK_Product_Grid extends \Elementor\Widget_Base {

    public function get_name() {
        return 'dk_product_grid';
    }

    public function get_title() {
        return __('DK - Product Grid', 'digital-kappa');
    }

    public function get_icon() {
        return 'eicon-products';
    }

    public function get_categories() {
        return ['digital-kappa'];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Produits', 'digital-kappa'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __('Titre', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Nos produits digitaux',
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => __('Sous-titre', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Des ressources soigneusement sélectionnées pour vous',
            ]
        );

        $this->add_control(
            'category',
            [
                'label' => __('Catégorie', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    '' => 'Toutes',
                    'ebooks' => 'Ebooks',
                    'applications' => 'Applications',
                    'templates' => 'Templates',
                ],
            ]
        );

        $this->add_control(
            'products_count',
            [
                'label' => __('Nombre de produits', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 6,
                'min' => 1,
                'max' => 12,
            ]
        );

        $this->add_control(
            'columns',
            [
                'label' => __('Colonnes', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '3',
                'options' => [
                    '2' => '2 colonnes',
                    '3' => '3 colonnes',
                    '4' => '4 colonnes',
                ],
            ]
        );

        $this->add_control(
            'show_view_all',
            [
                'label' => __('Afficher "Voir tout"', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'view_all_link',
            [
                'label' => __('Lien "Voir tout"', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '/tous-les-produits/',
                ],
                'condition' => [
                    'show_view_all' => 'yes',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        // Query products
        $args = [
            'post_type' => 'product',
            'post_status' => 'publish',
            'posts_per_page' => intval($settings['products_count']),
            'orderby' => 'date',
            'order' => 'DESC',
        ];

        if (!empty($settings['category'])) {
            $args['tax_query'] = [
                [
                    'taxonomy' => 'product_cat',
                    'field' => 'slug',
                    'terms' => $settings['category'],
                ],
            ];
        }

        $products = new WP_Query($args);
        $columns_class = 'lg:grid-cols-' . $settings['columns'];
        ?>
        <section class="bg-white py-12 lg:py-20 px-4 lg:px-20">
            <div class="max-w-7xl mx-auto">
                <!-- Header -->
                <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between mb-8 lg:mb-12">
                    <div>
                        <h2 class="text-[#0d1421] font-['Merriweather',serif] mb-3"><?php echo esc_html($settings['title']); ?></h2>
                        <p class="text-[rgba(13,20,33,0.7)] font-['Montserrat',sans-serif]"><?php echo esc_html($settings['subtitle']); ?></p>
                    </div>
                    <?php if ($settings['show_view_all'] === 'yes') : ?>
                    <a href="<?php echo esc_url($settings['view_all_link']['url']); ?>" class="mt-4 lg:mt-0 inline-flex items-center gap-2 text-[#d2a30b] hover:text-[#b8900a] font-['Montserrat',sans-serif] font-medium">
                        Voir tous les produits
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <?php endif; ?>
                </div>

                <!-- Products Grid -->
                <div class="grid sm:grid-cols-2 <?php echo esc_attr($columns_class); ?> gap-6">
                    <?php
                    if ($products->have_posts()) :
                        while ($products->have_posts()) : $products->the_post();
                            global $product;
                            $rating = get_field('rating', get_the_ID()) ?: 4.5;
                            $review_count = get_field('review_count', get_the_ID()) ?: 0;

                            // Get category
                            $terms = get_the_terms(get_the_ID(), 'product_cat');
                            $category = $terms && !is_wp_error($terms) ? $terms[0]->name : '';
                    ?>
                    <article class="dk-product-card">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>" alt="<?php the_title_attribute(); ?>" class="product-image">
                            <?php endif; ?>
                        </a>
                        <div class="product-content">
                            <span class="product-category"><?php echo esc_html($category); ?></span>
                            <h3 class="product-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="product-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                            <div class="product-footer">
                                <span class="product-price"><?php echo $product->get_price_html(); ?></span>
                                <div class="product-rating">
                                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                                        <?php if ($i <= floor($rating)) : ?>
                                        <svg class="w-4 h-4 text-[#d2a30b]" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <?php else : ?>
                                        <svg class="w-4 h-4 text-[#d2a30b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                    <span class="text-sm text-gray-500 ml-1">(<?php echo esc_html($review_count); ?>)</span>
                                </div>
                            </div>
                        </div>
                    </article>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                    ?>
                    <p class="col-span-full text-center text-gray-500 py-8">Aucun produit trouvé</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php
    }
}
