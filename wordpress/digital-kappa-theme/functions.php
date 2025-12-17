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

    // Tailwind CSS (CDN)
    wp_enqueue_style(
        'dk-tailwind',
        'https://cdn.jsdelivr.net/npm/tailwindcss@3.4.0/dist/tailwind.min.css',
        array(),
        '3.4.0'
    );

    // Digital Kappa Custom Styles
    wp_enqueue_style(
        'dk-custom-styles',
        DK_THEME_URI . '/assets/css/digital-kappa-styles.css',
        array('dk-tailwind'),
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
        $html .= '<p class="text-sm font-medium text-[#1a1a1a]">' . get_the_title() . '</p>';
        $html .= '<p class="text-sm text-[#d2a30b] font-semibold">' . $product->get_price_html() . '</p>';
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
