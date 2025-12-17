<?php
/**
 * Elementor Setup Functions
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Check if Elementor is active
 */
function dk_is_elementor_active() {
    return did_action('elementor/loaded');
}

/**
 * Generate unique Elementor ID
 */
function dk_generate_elementor_id() {
    return substr(md5(uniqid()), 0, 8);
}

/**
 * Create Elementor page structure
 */
function dk_create_elementor_structure($sections) {
    $data = array();

    foreach ($sections as $section) {
        $section_data = array(
            'id' => dk_generate_elementor_id(),
            'elType' => 'section',
            'settings' => isset($section['settings']) ? $section['settings'] : array(),
            'elements' => array()
        );

        if (isset($section['columns'])) {
            foreach ($section['columns'] as $column) {
                $column_data = array(
                    'id' => dk_generate_elementor_id(),
                    'elType' => 'column',
                    'settings' => isset($column['settings']) ? $column['settings'] : array('_column_size' => 100),
                    'elements' => array()
                );

                if (isset($column['widgets'])) {
                    foreach ($column['widgets'] as $widget) {
                        $widget_data = array(
                            'id' => dk_generate_elementor_id(),
                            'elType' => 'widget',
                            'widgetType' => $widget['type'],
                            'settings' => isset($widget['settings']) ? $widget['settings'] : array()
                        );
                        $column_data['elements'][] = $widget_data;
                    }
                }

                $section_data['elements'][] = $column_data;
            }
        }

        $data[] = $section_data;
    }

    return $data;
}

/**
 * Save Elementor data to post
 */
function dk_save_elementor_data($post_id, $data) {
    update_post_meta($post_id, '_elementor_edit_mode', 'builder');
    update_post_meta($post_id, '_elementor_template_type', 'wp-page');
    update_post_meta($post_id, '_wp_page_template', 'elementor_header_footer');
    update_post_meta($post_id, '_elementor_data', wp_slash(wp_json_encode($data)));
    update_post_meta($post_id, '_elementor_version', ELEMENTOR_VERSION);
    update_post_meta($post_id, '_elementor_css', '');
}

/**
 * Register Elementor Theme Locations
 */
function dk_register_elementor_locations($elementor_theme_manager) {
    $elementor_theme_manager->register_location('header');
    $elementor_theme_manager->register_location('footer');
    $elementor_theme_manager->register_location('single');
    $elementor_theme_manager->register_location('archive');
}
add_action('elementor/theme/register_locations', 'dk_register_elementor_locations');

/**
 * Set Elementor default settings
 */
function dk_elementor_defaults() {
    // Set default container width
    update_option('elementor_container_width', 1200);

    // Set default fonts
    update_option('elementor_default_generic_fonts', 'Montserrat, sans-serif');

    // Enable inline CSS
    update_option('elementor_css_print_method', 'internal');

    // Disable default colors
    update_option('elementor_disable_color_schemes', 'yes');

    // Disable default fonts
    update_option('elementor_disable_typography_schemes', 'yes');
}

/**
 * Add Elementor support for products
 */
function dk_elementor_support_for_products($post_types) {
    $post_types[] = 'product';
    return $post_types;
}
add_filter('elementor/utils/get_public_post_types', 'dk_elementor_support_for_products');
