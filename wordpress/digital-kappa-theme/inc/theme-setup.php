<?php
/**
 * Theme Setup Functions
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Custom excerpt length
 */
function dk_custom_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'dk_custom_excerpt_length');

/**
 * Custom excerpt more
 */
function dk_custom_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'dk_custom_excerpt_more');

/**
 * Add SVG support
 */
function dk_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'dk_mime_types');

/**
 * Remove WordPress version from header
 */
remove_action('wp_head', 'wp_generator');

/**
 * Disable emoji scripts
 */
function dk_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'dk_disable_emojis');

/**
 * Register ACF Fields for Products
 */
function dk_register_acf_fields() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    // Product Features
    acf_add_local_field_group(array(
        'key' => 'group_product_features',
        'title' => 'Fonctionnalités du produit',
        'fields' => array(
            array(
                'key' => 'field_features',
                'label' => 'Fonctionnalités',
                'name' => 'features',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_feature_text',
                        'label' => 'Fonctionnalité',
                        'name' => 'feature_text',
                        'type' => 'text',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'product',
                ),
            ),
        ),
    ));

    // Product Included Items
    acf_add_local_field_group(array(
        'key' => 'group_product_included',
        'title' => 'Ce qui est inclus',
        'fields' => array(
            array(
                'key' => 'field_included',
                'label' => 'Éléments inclus',
                'name' => 'included',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_included_item',
                        'label' => 'Élément',
                        'name' => 'included_item',
                        'type' => 'text',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'product',
                ),
            ),
        ),
    ));

    // Product Requirements
    acf_add_local_field_group(array(
        'key' => 'group_product_requirements',
        'title' => 'Prérequis',
        'fields' => array(
            array(
                'key' => 'field_requirements',
                'label' => 'Prérequis',
                'name' => 'requirements',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_requirement_text',
                        'label' => 'Prérequis',
                        'name' => 'requirement_text',
                        'type' => 'text',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'product',
                ),
            ),
        ),
    ));

    // Product FAQ
    acf_add_local_field_group(array(
        'key' => 'group_product_faq',
        'title' => 'FAQ Produit',
        'fields' => array(
            array(
                'key' => 'field_faq',
                'label' => 'Questions fréquentes',
                'name' => 'faq',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_faq_question',
                        'label' => 'Question',
                        'name' => 'question',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_faq_answer',
                        'label' => 'Réponse',
                        'name' => 'answer',
                        'type' => 'textarea',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'product',
                ),
            ),
        ),
    ));

    // Product Rating (manual)
    acf_add_local_field_group(array(
        'key' => 'group_product_rating',
        'title' => 'Note et avis',
        'fields' => array(
            array(
                'key' => 'field_rating',
                'label' => 'Note (sur 5)',
                'name' => 'rating',
                'type' => 'number',
                'min' => 0,
                'max' => 5,
                'step' => 0.1,
                'default_value' => 4.5,
            ),
            array(
                'key' => 'field_review_count',
                'label' => 'Nombre d\'avis',
                'name' => 'review_count',
                'type' => 'number',
                'default_value' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'product',
                ),
            ),
        ),
    ));
}
add_action('acf/init', 'dk_register_acf_fields');
