<?php
/**
 * Digital Kappa Theme Functions
 *
 * @package DigitalKappa
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

// Theme Constants
define('DK_THEME_VERSION', '1.0.0');
define('DK_THEME_DIR', get_template_directory());
define('DK_THEME_URI', get_template_directory_uri());

/**
 * Theme Setup
 */
function digital_kappa_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // WooCommerce Support
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    // Elementor Support
    add_theme_support('elementor');

    // Register Nav Menus
    register_nav_menus(array(
        'header-menu'       => __('Menu Header', 'digital-kappa'),
        'footer-categories' => __('Menu Footer Catégories', 'digital-kappa'),
        'footer-legal'      => __('Menu Footer Légal', 'digital-kappa'),
    ));
}
add_action('after_setup_theme', 'digital_kappa_setup');

/**
 * Enqueue Scripts and Styles
 */
function digital_kappa_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style(
        'dk-google-fonts',
        'https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Montserrat:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Tailwind Play CDN with custom config
    wp_enqueue_script(
        'dk-tailwind-cdn',
        'https://cdn.tailwindcss.com',
        array(),
        null,
        false
    );

    // Digital Kappa Custom Styles
    wp_enqueue_style(
        'dk-custom-styles',
        DK_THEME_URI . '/assets/css/digital-kappa-styles.css',
        array(),
        DK_THEME_VERSION
    );

    // Custom Scripts
    wp_enqueue_script(
        'dk-custom-scripts',
        DK_THEME_URI . '/assets/js/custom-scripts.js',
        array('jquery'),
        DK_THEME_VERSION,
        true
    );

    // Search Autocomplete
    wp_enqueue_script(
        'dk-search-autocomplete',
        DK_THEME_URI . '/assets/js/search-autocomplete.js',
        array('jquery'),
        DK_THEME_VERSION,
        true
    );

    // Localize script for AJAX
    wp_localize_script('dk-search-autocomplete', 'dk_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('dk_search_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'digital_kappa_enqueue_assets');

/**
 * Add Tailwind config inline
 */
function digital_kappa_tailwind_config() {
    ?>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dk-primary': '#d2a30b',
                        'dk-primary-hover': '#b8900a',
                        'dk-dark': '#1a1a1a',
                        'dk-dark-card': '#2b2d31',
                        'dk-text': '#4a5565',
                        'dk-text-muted': '#6a7282',
                    },
                    fontFamily: {
                        'heading': ['Merriweather', 'serif'],
                        'body': ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <?php
}
add_action('wp_head', 'digital_kappa_tailwind_config', 1);

/**
 * Register Elementor Widgets
 */
function digital_kappa_register_elementor_widgets($widgets_manager) {
    // Require widget files
    $widgets = array(
        'hero-section',
        'features-section',
        'stats-section',
        'product-grid',
        'process-section',
        'testimonials',
        'faq-accordion',
        'cta-section',
        'page-header',
        'process-steps',
        'product-filters',
        'product-listing',
        'product-gallery',
        'product-info',
        'product-features',
        'product-tabs',
        'product-related',
        'checkout-form',
        'order-summary',
        'order-confirmation',
        'header-logo',
        'header-search',
        'footer-logo'
    );

    foreach ($widgets as $widget) {
        $file = DK_THEME_DIR . '/elementor-widgets/class-' . $widget . '.php';
        if (file_exists($file)) {
            require_once $file;
            $class_name = 'DK_' . str_replace('-', '_', ucwords($widget, '-'));
            $class_name = str_replace('_', '_', $class_name);
            // Convert to proper class name format
            $parts = explode('-', $widget);
            $class_name = 'DK';
            foreach ($parts as $part) {
                $class_name .= '_' . ucfirst($part);
            }
            if (class_exists($class_name)) {
                $widgets_manager->register(new $class_name());
            }
        }
    }
}
add_action('elementor/widgets/register', 'digital_kappa_register_elementor_widgets');

/**
 * Register Elementor Category
 */
function digital_kappa_add_elementor_category($elements_manager) {
    $elements_manager->add_category(
        'digital-kappa',
        array(
            'title' => __('Digital Kappa', 'digital-kappa'),
            'icon'  => 'fa fa-plug',
        )
    );
}
add_action('elementor/elements/categories_registered', 'digital_kappa_add_elementor_category');

/**
 * AJAX Search Handler
 */
function dk_ajax_search_products() {
    check_ajax_referer('dk_search_nonce', 'security');

    $search = sanitize_text_field($_POST['search']);

    if (strlen($search) < 2) {
        wp_send_json_error();
    }

    $args = array(
        'post_type'      => 'product',
        'post_status'    => 'publish',
        's'              => $search,
        'posts_per_page' => 5,
    );

    $query = new WP_Query($args);

    if (!$query->have_posts()) {
        wp_send_json_error();
    }

    $html = '<div class="dk-search-results">';

    while ($query->have_posts()) {
        $query->the_post();
        $product = wc_get_product(get_the_ID());

        $html .= '<a href="' . get_permalink() . '" class="flex items-center gap-3 p-3 hover:bg-gray-50 transition-colors border-b border-gray-100 last:border-0">';
        $html .= '<img src="' . wp_get_attachment_image_url($product->get_image_id(), 'thumbnail') . '" alt="' . esc_attr(get_the_title()) . '" class="w-12 h-12 rounded-lg object-cover">';
        $html .= '<div class="flex-1">';
        $html .= '<p class="text-sm font-medium text-gray-900">' . get_the_title() . '</p>';
        $html .= '<p class="text-sm text-dk-primary font-semibold">' . $product->get_price_html() . '</p>';
        $html .= '</div>';
        $html .= '</a>';
    }

    $html .= '</div>';

    wp_reset_postdata();

    wp_send_json_success($html);
}
add_action('wp_ajax_dk_search_products', 'dk_ajax_search_products');
add_action('wp_ajax_nopriv_dk_search_products', 'dk_ajax_search_products');

/**
 * Include additional files
 */
require_once DK_THEME_DIR . '/inc/theme-setup.php';
require_once DK_THEME_DIR . '/inc/elementor-setup.php';
require_once DK_THEME_DIR . '/inc/woocommerce-config.php';

/**
 * Disable default Elementor fonts
 */
add_filter('elementor/frontend/print_google_fonts', '__return_false');

/**
 * Add body classes
 */
function dk_body_classes($classes) {
    $classes[] = 'digital-kappa';
    return $classes;
}
add_filter('body_class', 'dk_body_classes');

/**
 * Create default pages on theme activation
 */
function dk_create_default_pages() {
    $pages = array(
        'tous-les-produits' => array(
            'title'   => 'Tous les produits',
            'content' => '[dk_product_grid]',
        ),
        'comment-ca-marche' => array(
            'title'   => 'Comment ça marche',
            'content' => '<!-- Elementor widget: DK Process Steps -->',
        ),
        'faq' => array(
            'title'   => 'FAQ',
            'content' => '<!-- Elementor widget: DK FAQ Accordion -->',
        ),
        'a-propos' => array(
            'title'   => 'À propos',
            'content' => '<p>Bienvenue sur Digital Kappa, votre marketplace de produits digitaux de qualité.</p>',
        ),
        'cgv' => array(
            'title'   => 'Conditions Générales de Vente',
            'content' => '<h2>Conditions Générales de Vente</h2><p>Veuillez lire attentivement ces conditions.</p>',
        ),
        'confidentialite' => array(
            'title'   => 'Politique de Confidentialité',
            'content' => '<h2>Politique de Confidentialité</h2><p>Votre vie privée est importante pour nous.</p>',
        ),
        'blog' => array(
            'title'   => 'Blog',
            'content' => '<!-- Blog posts will appear here -->',
        ),
    );

    foreach ($pages as $slug => $page_data) {
        // Check if page already exists
        $existing_page = get_page_by_path($slug);

        if (!$existing_page) {
            wp_insert_post(array(
                'post_title'   => $page_data['title'],
                'post_name'    => $slug,
                'post_content' => $page_data['content'],
                'post_status'  => 'publish',
                'post_type'    => 'page',
            ));
        }
    }

    // Create WooCommerce product categories
    if (function_exists('wc_get_product')) {
        $categories = array(
            'ebooks' => 'Ebooks',
            'applications' => 'Applications',
            'templates' => 'Templates',
        );

        foreach ($categories as $slug => $name) {
            if (!term_exists($slug, 'product_cat')) {
                wp_insert_term($name, 'product_cat', array('slug' => $slug));
            }
        }
    }
}
add_action('after_switch_theme', 'dk_create_default_pages');

/**
 * Also run on init once if pages don't exist (for existing installs)
 */
function dk_maybe_create_pages() {
    if (get_option('dk_pages_created') !== 'yes') {
        dk_create_default_pages();
        update_option('dk_pages_created', 'yes');
    }
}
add_action('init', 'dk_maybe_create_pages', 20);

/**
 * Setup WooCommerce shop page
 */
function dk_setup_woocommerce_pages() {
    // Set "Tous les produits" as the shop page if WooCommerce is active
    if (class_exists('WooCommerce')) {
        $shop_page = get_page_by_path('tous-les-produits');
        if ($shop_page && get_option('woocommerce_shop_page_id') != $shop_page->ID) {
            update_option('woocommerce_shop_page_id', $shop_page->ID);
        }
    }
}
add_action('init', 'dk_setup_woocommerce_pages', 25);
