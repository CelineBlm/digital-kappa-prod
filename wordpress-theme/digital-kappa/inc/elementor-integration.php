<?php
/**
 * Elementor Integration
 *
 * @package Digital_Kappa
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Check if Elementor is active
 *
 * @return bool
 */
function digital_kappa_is_elementor_active() {
    return did_action('elementor/loaded');
}

/**
 * Register Elementor widgets
 */
function digital_kappa_register_elementor_widgets($widgets_manager) {
    // Product Card Widget
    require_once get_template_directory() . '/inc/elementor/widgets/product-card.php';
    $widgets_manager->register(new \Digital_Kappa_Product_Card_Widget());

    // Feature Card Widget
    require_once get_template_directory() . '/inc/elementor/widgets/feature-card.php';
    $widgets_manager->register(new \Digital_Kappa_Feature_Card_Widget());

    // Step Widget
    require_once get_template_directory() . '/inc/elementor/widgets/step.php';
    $widgets_manager->register(new \Digital_Kappa_Step_Widget());

    // FAQ Accordion Widget
    require_once get_template_directory() . '/inc/elementor/widgets/faq-accordion.php';
    $widgets_manager->register(new \Digital_Kappa_FAQ_Accordion_Widget());
}
// Uncomment when widgets are created
// add_action('elementor/widgets/register', 'digital_kappa_register_elementor_widgets');

/**
 * Register Elementor categories
 */
function digital_kappa_register_elementor_categories($elements_manager) {
    $elements_manager->add_category(
        'digital-kappa',
        array(
            'title' => __('Digital Kappa', 'digital-kappa'),
            'icon' => 'fa fa-plug',
        )
    );
}
add_action('elementor/elements/categories_registered', 'digital_kappa_register_elementor_categories');

/**
 * Add theme colors to Elementor
 */
function digital_kappa_elementor_kit_settings($settings) {
    $settings['custom_colors'] = array(
        array(
            '_id' => 'dk_gold',
            'title' => __('Gold', 'digital-kappa'),
            'color' => '#d2a30b',
        ),
        array(
            '_id' => 'dk_gold_hover',
            'title' => __('Gold Hover', 'digital-kappa'),
            'color' => '#b8900a',
        ),
        array(
            '_id' => 'dk_text',
            'title' => __('Text Primary', 'digital-kappa'),
            'color' => '#1a1a1a',
        ),
        array(
            '_id' => 'dk_text_secondary',
            'title' => __('Text Secondary', 'digital-kappa'),
            'color' => '#666666',
        ),
        array(
            '_id' => 'dk_bg_dark',
            'title' => __('Background Dark', 'digital-kappa'),
            'color' => '#1a1a1a',
        ),
        array(
            '_id' => 'dk_bg_light',
            'title' => __('Background Light', 'digital-kappa'),
            'color' => '#fafafa',
        ),
    );

    return $settings;
}
add_filter('elementor/kit/get_template_settings', 'digital_kappa_elementor_kit_settings');

/**
 * Enqueue Elementor editor styles
 */
function digital_kappa_elementor_editor_styles() {
    wp_enqueue_style(
        'digital-kappa-elementor-editor',
        get_template_directory_uri() . '/assets/css/elementor-editor.css',
        array(),
        DIGITAL_KAPPA_VERSION
    );
}
add_action('elementor/editor/after_enqueue_styles', 'digital_kappa_elementor_editor_styles');

/**
 * Register custom Elementor controls
 */
function digital_kappa_register_elementor_controls($controls_manager) {
    // Add custom controls here if needed
}
add_action('elementor/controls/register', 'digital_kappa_register_elementor_controls');

/**
 * Modify Elementor default settings
 */
function digital_kappa_elementor_settings($settings) {
    $settings['default_generic_fonts'] = 'Montserrat, sans-serif';
    $settings['container_width'] = array(
        'size' => 1200,
        'unit' => 'px',
    );

    return $settings;
}
add_filter('elementor/frontend/default_settings', 'digital_kappa_elementor_settings');

/**
 * Add Elementor support for custom post types
 */
function digital_kappa_elementor_cpt_support() {
    $cpt_support = get_option('elementor_cpt_support', array('page', 'post'));

    if (!in_array('dk_product', $cpt_support)) {
        $cpt_support[] = 'dk_product';
        update_option('elementor_cpt_support', $cpt_support);
    }
}
add_action('after_switch_theme', 'digital_kappa_elementor_cpt_support');

/**
 * Register dynamic tags for Elementor Pro
 */
function digital_kappa_register_dynamic_tags($dynamic_tags_manager) {
    // Product Price Tag
    // $dynamic_tags_manager->register(new \Digital_Kappa_Product_Price_Tag());
}
add_action('elementor/dynamic_tags/register', 'digital_kappa_register_dynamic_tags');

/**
 * Add theme templates to Elementor template library
 */
function digital_kappa_add_elementor_templates() {
    // This would add pre-designed templates to Elementor's library
    // For now, we use page templates instead
}

/**
 * Disable default Elementor colors and fonts (use theme's)
 */
function digital_kappa_elementor_disable_defaults() {
    add_filter('elementor/schemes/enabled_schemes', '__return_empty_array');
}
add_action('elementor/loaded', 'digital_kappa_elementor_disable_defaults');
