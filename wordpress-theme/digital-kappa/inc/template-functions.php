<?php
/**
 * Template Functions
 *
 * @package Digital_Kappa
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Custom Navigation Walker for Desktop Menu
 */
class Digital_Kappa_Nav_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $is_current = in_array('current-menu-item', $classes) || in_array('current_page_item', $classes);
        $active_class = $is_current ? ' active' : '';

        $output .= '<a href="' . esc_url($item->url) . '" class="dk-nav-link' . $active_class . '">';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }

    public function end_el(&$output, $item, $depth = 0, $args = null) {
        // No closing tag needed for inline links
    }

    public function start_lvl(&$output, $depth = 0, $args = null) {
        // No submenu wrapper for now
    }

    public function end_lvl(&$output, $depth = 0, $args = null) {
        // No submenu wrapper for now
    }
}

/**
 * Custom Navigation Walker for Footer Menu
 */
class Digital_Kappa_Footer_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $output .= '<li>';
        $output .= '<a href="' . esc_url($item->url) . '" class="dk-footer-link">';
        $output .= esc_html($item->title);
        $output .= '</a>';
        $output .= '</li>';
    }

    public function end_el(&$output, $item, $depth = 0, $args = null) {
        // Closing tag is in start_el
    }
}

/**
 * Get page URL by slug
 *
 * @param string $slug The page slug
 * @return string The page URL or home URL if page not found
 */
function digital_kappa_get_page_url($slug) {
    $page = get_page_by_path($slug);
    if ($page) {
        return get_permalink($page->ID);
    }
    return home_url('/');
}

/**
 * Check if current page has a specific template
 *
 * @param string $template The template name
 * @return bool
 */
function digital_kappa_is_template($template) {
    return is_page_template('page-templates/template-' . $template . '.php');
}

/**
 * Get SVG icon from Lucide
 *
 * @param string $name Icon name
 * @param array $attrs Additional attributes
 * @return string SVG HTML
 */
function digital_kappa_icon($name, $attrs = array()) {
    $default_attrs = array(
        'class' => 'dk-icon',
        'width' => '24',
        'height' => '24',
    );

    $attrs = wp_parse_args($attrs, $default_attrs);

    $attr_string = '';
    foreach ($attrs as $key => $value) {
        $attr_string .= ' ' . esc_attr($key) . '="' . esc_attr($value) . '"';
    }

    return '<i data-lucide="' . esc_attr($name) . '"' . $attr_string . '></i>';
}

/**
 * Format price
 *
 * @param float $price The price value
 * @param string $currency Currency symbol
 * @return string Formatted price
 */
function digital_kappa_format_price($price, $currency = '€') {
    return number_format($price, 2, ',', ' ') . ' ' . $currency;
}

/**
 * Truncate text with ellipsis
 *
 * @param string $text Text to truncate
 * @param int $length Maximum length
 * @param string $suffix Suffix to add
 * @return string Truncated text
 */
function digital_kappa_truncate($text, $length = 150, $suffix = '...') {
    if (strlen($text) <= $length) {
        return $text;
    }

    return substr($text, 0, $length) . $suffix;
}

/**
 * Get star rating HTML
 *
 * @param float $rating Rating value (0-5)
 * @param int $count Number of reviews
 * @return string Rating HTML
 */
function digital_kappa_rating($rating, $count = 0) {
    $output = '<span class="dk-card-product-rating">';
    $output .= '<i data-lucide="star"></i>';
    $output .= esc_html(number_format($rating, 1));

    if ($count > 0) {
        $output .= ' (' . esc_html($count) . ')';
    }

    $output .= '</span>';

    return $output;
}

/**
 * Add theme support for Elementor header and footer locations
 */
function digital_kappa_register_elementor_locations($elementor_theme_manager) {
    $elementor_theme_manager->register_location('header', array(
        'label' => __('Header', 'digital-kappa'),
        'multiple' => true,
    ));

    $elementor_theme_manager->register_location('footer', array(
        'label' => __('Footer', 'digital-kappa'),
        'multiple' => true,
    ));
}
add_action('elementor/theme/register_locations', 'digital_kappa_register_elementor_locations');

/**
 * Check if we should display the theme header/footer or use Elementor's
 *
 * @param string $location The location (header or footer)
 * @return bool
 */
function digital_kappa_should_use_elementor_location($location) {
    if (!did_action('elementor/loaded')) {
        return false;
    }

    if (!function_exists('elementor_theme_do_location')) {
        return false;
    }

    return elementor_theme_do_location($location);
}

/**
 * Generate breadcrumb navigation
 *
 * @return string Breadcrumb HTML
 */
function digital_kappa_breadcrumbs() {
    if (is_front_page()) {
        return '';
    }

    $output = '<div class="dk-breadcrumbs">';
    $output .= '<a href="' . esc_url(home_url('/')) . '">' . __('Accueil', 'digital-kappa') . '</a>';

    if (is_page()) {
        $ancestors = get_post_ancestors(get_the_ID());

        if ($ancestors) {
            $ancestors = array_reverse($ancestors);
            foreach ($ancestors as $ancestor) {
                $output .= '<span class="dk-breadcrumbs-separator">/</span>';
                $output .= '<a href="' . esc_url(get_permalink($ancestor)) . '">' . esc_html(get_the_title($ancestor)) . '</a>';
            }
        }

        $output .= '<span class="dk-breadcrumbs-separator">/</span>';
        $output .= '<span class="dk-breadcrumbs-current">' . esc_html(get_the_title()) . '</span>';
    }

    $output .= '</div>';

    return $output;
}

/**
 * Add custom body classes based on page template
 */
function digital_kappa_template_body_classes($classes) {
    if (is_page_template('page-templates/template-home.php')) {
        $classes[] = 'dk-template-home';
    }

    if (is_page_template('page-templates/template-all-products.php')) {
        $classes[] = 'dk-template-products';
    }

    if (is_page_template('page-templates/template-checkout.php')) {
        $classes[] = 'dk-template-checkout';
    }

    if (is_page_template('page-templates/template-confirmation.php')) {
        $classes[] = 'dk-template-confirmation';
    }

    return $classes;
}
add_filter('body_class', 'digital_kappa_template_body_classes');
