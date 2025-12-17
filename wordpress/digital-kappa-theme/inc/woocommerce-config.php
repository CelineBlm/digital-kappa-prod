<?php
/**
 * WooCommerce Configuration
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Check if WooCommerce is active
 */
function dk_is_woocommerce_active() {
    return class_exists('WooCommerce');
}

/**
 * Remove default WooCommerce styles
 */
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

/**
 * Remove WooCommerce breadcrumb
 */
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

/**
 * Change products per page
 */
function dk_products_per_page($cols) {
    return 12;
}
add_filter('loop_shop_per_page', 'dk_products_per_page');

/**
 * Change products columns
 */
function dk_loop_columns() {
    return 3;
}
add_filter('loop_shop_columns', 'dk_loop_columns');

/**
 * Change related products columns
 */
function dk_related_products_columns($args) {
    $args['posts_per_page'] = 4;
    $args['columns'] = 4;
    return $args;
}
add_filter('woocommerce_output_related_products_args', 'dk_related_products_columns');

/**
 * Add custom product data tabs
 */
function dk_product_tabs($tabs) {
    global $product;

    // Remove default tabs
    unset($tabs['additional_information']);

    // Rename description tab
    if (isset($tabs['description'])) {
        $tabs['description']['title'] = __('Description', 'digital-kappa');
        $tabs['description']['priority'] = 10;
    }

    // Add "Ce qui est inclus" tab
    $tabs['included'] = array(
        'title'    => __('Ce qui est inclus', 'digital-kappa'),
        'priority' => 20,
        'callback' => 'dk_included_tab_content'
    );

    // Add "Prérequis" tab
    $tabs['requirements'] = array(
        'title'    => __('Prérequis', 'digital-kappa'),
        'priority' => 30,
        'callback' => 'dk_requirements_tab_content'
    );

    // Rename reviews tab
    if (isset($tabs['reviews'])) {
        $tabs['reviews']['title'] = __('Avis', 'digital-kappa');
        $tabs['reviews']['priority'] = 40;
    }

    return $tabs;
}
add_filter('woocommerce_product_tabs', 'dk_product_tabs');

/**
 * Included tab content
 */
function dk_included_tab_content() {
    global $product;
    $included = get_field('included', $product->get_id());

    if ($included) {
        echo '<div class="dk-included-list">';
        echo '<ul class="space-y-3">';
        foreach ($included as $item) {
            echo '<li class="flex items-start gap-3">';
            echo '<svg class="w-5 h-5 text-green-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">';
            echo '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
            echo '</svg>';
            echo '<span class="text-[#4a5565]">' . esc_html($item['included_item']) . '</span>';
            echo '</li>';
        }
        echo '</ul>';
        echo '</div>';
    } else {
        echo '<p class="text-[#4a5565]">' . __('Aucune information disponible.', 'digital-kappa') . '</p>';
    }
}

/**
 * Requirements tab content
 */
function dk_requirements_tab_content() {
    global $product;
    $requirements = get_field('requirements', $product->get_id());

    if ($requirements) {
        echo '<div class="dk-requirements-list">';
        echo '<ul class="space-y-3">';
        foreach ($requirements as $item) {
            echo '<li class="flex items-start gap-3">';
            echo '<svg class="w-5 h-5 text-blue-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">';
            echo '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>';
            echo '</svg>';
            echo '<span class="text-[#4a5565]">' . esc_html($item['requirement_text']) . '</span>';
            echo '</li>';
        }
        echo '</ul>';
        echo '</div>';
    } else {
        echo '<p class="text-[#4a5565]">' . __('Aucun prérequis spécifique.', 'digital-kappa') . '</p>';
    }
}

/**
 * Configure WooCommerce for digital products
 */
function dk_configure_woocommerce_digital() {
    // Set default product type to simple
    add_filter('woocommerce_product_type_default', function() {
        return 'simple';
    });

    // Default to virtual and downloadable
    add_action('woocommerce_product_options_general_product_data', function() {
        global $post;
        $product = wc_get_product($post->ID);
        if (!$product || !$product->get_virtual()) {
            echo '<script>jQuery(function($){ $("#_virtual").prop("checked", true).change(); $("#_downloadable").prop("checked", true).change(); });</script>';
        }
    });
}
add_action('admin_init', 'dk_configure_woocommerce_digital');

/**
 * Custom add to cart text
 */
function dk_add_to_cart_text($text, $product) {
    if ($product->is_type('simple')) {
        return __('Acheter maintenant', 'digital-kappa');
    }
    return $text;
}
add_filter('woocommerce_product_single_add_to_cart_text', 'dk_add_to_cart_text', 10, 2);
add_filter('woocommerce_product_add_to_cart_text', 'dk_add_to_cart_text', 10, 2);

/**
 * Redirect to checkout after add to cart
 */
function dk_redirect_to_checkout($url) {
    return wc_get_checkout_url();
}
add_filter('woocommerce_add_to_cart_redirect', 'dk_redirect_to_checkout');

/**
 * Skip cart page
 */
add_filter('woocommerce_add_to_cart_sold_individually_quantity', '__return_true');

/**
 * Custom product categories
 */
function dk_register_product_categories() {
    $categories = array(
        'ebooks' => array(
            'name' => 'Ebooks',
            'slug' => 'ebooks',
            'description' => 'Guides et formations au format numérique'
        ),
        'applications' => array(
            'name' => 'Applications',
            'slug' => 'applications',
            'description' => 'Applications mobiles et web'
        ),
        'templates' => array(
            'name' => 'Templates',
            'slug' => 'templates',
            'description' => 'Modèles de design et code'
        )
    );

    foreach ($categories as $cat) {
        if (!term_exists($cat['slug'], 'product_cat')) {
            wp_insert_term(
                $cat['name'],
                'product_cat',
                array(
                    'slug' => $cat['slug'],
                    'description' => $cat['description']
                )
            );
        }
    }
}
add_action('init', 'dk_register_product_categories', 20);

/**
 * Format price with Euro symbol
 */
function dk_format_price($price) {
    return number_format($price, 0, ',', ' ') . ' €';
}
