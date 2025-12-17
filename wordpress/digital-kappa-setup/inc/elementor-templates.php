<?php
/**
 * Elementor Templates Creator (Header/Footer)
 *
 * @package DigitalKappaSetup
 */

if (!defined('ABSPATH')) {
    exit;
}

class DK_Elementor_Templates {

    /**
     * Create Header Template
     */
    public function create_header() {
        $existing = get_page_by_title('Digital Kappa Header', OBJECT, 'elementor_library');
        if ($existing) {
            return;
        }

        $header_id = wp_insert_post(array(
            'post_title' => 'Digital Kappa Header',
            'post_status' => 'publish',
            'post_type' => 'elementor_library',
        ));

        if (is_wp_error($header_id)) {
            return;
        }

        // Set template type
        update_post_meta($header_id, '_elementor_template_type', 'header');
        update_post_meta($header_id, '_elementor_edit_mode', 'builder');

        // Set header data
        $header_data = $this->get_header_structure();
        update_post_meta($header_id, '_elementor_data', wp_slash(wp_json_encode($header_data)));

        // Set display conditions (all pages)
        update_post_meta($header_id, '_elementor_conditions', array(
            array(
                'type' => 'include',
                'name' => 'general',
                'sub' => 'site',
            )
        ));

        // Add term for Elementor
        wp_set_object_terms($header_id, 'header', 'elementor_library_type');
    }

    /**
     * Create Footer Template
     */
    public function create_footer() {
        $existing = get_page_by_title('Digital Kappa Footer', OBJECT, 'elementor_library');
        if ($existing) {
            return;
        }

        $footer_id = wp_insert_post(array(
            'post_title' => 'Digital Kappa Footer',
            'post_status' => 'publish',
            'post_type' => 'elementor_library',
        ));

        if (is_wp_error($footer_id)) {
            return;
        }

        // Set template type
        update_post_meta($footer_id, '_elementor_template_type', 'footer');
        update_post_meta($footer_id, '_elementor_edit_mode', 'builder');

        // Set footer data
        $footer_data = $this->get_footer_structure();
        update_post_meta($footer_id, '_elementor_data', wp_slash(wp_json_encode($footer_data)));

        // Set display conditions (all pages)
        update_post_meta($footer_id, '_elementor_conditions', array(
            array(
                'type' => 'include',
                'name' => 'general',
                'sub' => 'site',
            )
        ));

        // Add term for Elementor
        wp_set_object_terms($footer_id, 'footer', 'elementor_library_type');
    }

    /**
     * Get Header Structure
     */
    private function get_header_structure() {
        return array(
            array(
                'id' => $this->generate_id(),
                'elType' => 'section',
                'settings' => array(
                    'structure' => '30',
                    'padding' => array(
                        'unit' => 'px',
                        'top' => '15',
                        'right' => '80',
                        'bottom' => '15',
                        'left' => '80',
                    ),
                    'background_color' => '#FFFFFF',
                    'border_border' => 'solid',
                    'border_width' => array(
                        'unit' => 'px',
                        'top' => '0',
                        'right' => '0',
                        'bottom' => '1',
                        'left' => '0',
                    ),
                    'border_color' => '#E5E7EB',
                ),
                'elements' => array(
                    // Logo Column
                    array(
                        'id' => $this->generate_id(),
                        'elType' => 'column',
                        'settings' => array('_column_size' => 25),
                        'elements' => array(
                            array(
                                'id' => $this->generate_id(),
                                'elType' => 'widget',
                                'widgetType' => 'dk_header_logo',
                                'settings' => array()
                            )
                        )
                    ),
                    // Search Column
                    array(
                        'id' => $this->generate_id(),
                        'elType' => 'column',
                        'settings' => array('_column_size' => 50),
                        'elements' => array(
                            array(
                                'id' => $this->generate_id(),
                                'elType' => 'widget',
                                'widgetType' => 'dk_header_search',
                                'settings' => array(
                                    'placeholder' => 'Rechercher un produit...'
                                )
                            )
                        )
                    ),
                    // Navigation Column
                    array(
                        'id' => $this->generate_id(),
                        'elType' => 'column',
                        'settings' => array('_column_size' => 25),
                        'elements' => array(
                            array(
                                'id' => $this->generate_id(),
                                'elType' => 'widget',
                                'widgetType' => 'nav-menu',
                                'settings' => array(
                                    'menu' => 'menu-header',
                                    'layout' => 'horizontal',
                                    'align_items' => 'flex-end',
                                    'pointer' => 'none',
                                    'text_color' => '#4a5565',
                                    'text_color_hover' => '#d2a30b',
                                    'typography_typography' => 'custom',
                                    'typography_font_family' => 'Montserrat',
                                    'typography_font_size' => array('unit' => 'px', 'size' => 14),
                                )
                            )
                        )
                    )
                )
            )
        );
    }

    /**
     * Get Footer Structure
     */
    private function get_footer_structure() {
        return array(
            // Main Footer Section
            array(
                'id' => $this->generate_id(),
                'elType' => 'section',
                'settings' => array(
                    'structure' => '40',
                    'padding' => array(
                        'unit' => 'px',
                        'top' => '60',
                        'right' => '80',
                        'bottom' => '40',
                        'left' => '80',
                    ),
                    'background_color' => '#1a1a1a',
                ),
                'elements' => array(
                    // Logo Column
                    array(
                        'id' => $this->generate_id(),
                        'elType' => 'column',
                        'settings' => array('_column_size' => 25),
                        'elements' => array(
                            array(
                                'id' => $this->generate_id(),
                                'elType' => 'widget',
                                'widgetType' => 'dk_footer_logo',
                                'settings' => array(
                                    'description' => 'Marketplace de produits digitaux de qualité pour gagner du temps dans vos projets.'
                                )
                            )
                        )
                    ),
                    // Legal Column
                    array(
                        'id' => $this->generate_id(),
                        'elType' => 'column',
                        'settings' => array('_column_size' => 25),
                        'elements' => array(
                            array(
                                'id' => $this->generate_id(),
                                'elType' => 'widget',
                                'widgetType' => 'heading',
                                'settings' => array(
                                    'title' => 'Légal',
                                    'header_size' => 'h4',
                                    'title_color' => '#FFFFFF',
                                    'typography_typography' => 'custom',
                                    'typography_font_family' => 'Merriweather',
                                    'typography_font_size' => array('unit' => 'px', 'size' => 16),
                                )
                            ),
                            array(
                                'id' => $this->generate_id(),
                                'elType' => 'widget',
                                'widgetType' => 'nav-menu',
                                'settings' => array(
                                    'menu' => 'menu-footer-legal',
                                    'layout' => 'vertical',
                                    'pointer' => 'none',
                                    'text_color' => '#9CA3AF',
                                    'text_color_hover' => '#d2a30b',
                                    'typography_typography' => 'custom',
                                    'typography_font_family' => 'Montserrat',
                                    'typography_font_size' => array('unit' => 'px', 'size' => 14),
                                )
                            )
                        )
                    ),
                    // Categories Column
                    array(
                        'id' => $this->generate_id(),
                        'elType' => 'column',
                        'settings' => array('_column_size' => 25),
                        'elements' => array(
                            array(
                                'id' => $this->generate_id(),
                                'elType' => 'widget',
                                'widgetType' => 'heading',
                                'settings' => array(
                                    'title' => 'Catégories',
                                    'header_size' => 'h4',
                                    'title_color' => '#FFFFFF',
                                    'typography_typography' => 'custom',
                                    'typography_font_family' => 'Merriweather',
                                    'typography_font_size' => array('unit' => 'px', 'size' => 16),
                                )
                            ),
                            array(
                                'id' => $this->generate_id(),
                                'elType' => 'widget',
                                'widgetType' => 'nav-menu',
                                'settings' => array(
                                    'menu' => 'menu-footer-categories',
                                    'layout' => 'vertical',
                                    'pointer' => 'none',
                                    'text_color' => '#9CA3AF',
                                    'text_color_hover' => '#d2a30b',
                                    'typography_typography' => 'custom',
                                    'typography_font_family' => 'Montserrat',
                                    'typography_font_size' => array('unit' => 'px', 'size' => 14),
                                )
                            )
                        )
                    ),
                    // Contact Column
                    array(
                        'id' => $this->generate_id(),
                        'elType' => 'column',
                        'settings' => array('_column_size' => 25),
                        'elements' => array(
                            array(
                                'id' => $this->generate_id(),
                                'elType' => 'widget',
                                'widgetType' => 'heading',
                                'settings' => array(
                                    'title' => 'Contact',
                                    'header_size' => 'h4',
                                    'title_color' => '#FFFFFF',
                                    'typography_typography' => 'custom',
                                    'typography_font_family' => 'Merriweather',
                                    'typography_font_size' => array('unit' => 'px', 'size' => 16),
                                )
                            ),
                            array(
                                'id' => $this->generate_id(),
                                'elType' => 'widget',
                                'widgetType' => 'text-editor',
                                'settings' => array(
                                    'editor' => '<p style="color: #9CA3AF; font-family: Montserrat, sans-serif; font-size: 14px;"><strong style="color: #d2a30b;">Email</strong><br>support@digitalkappa.com</p>',
                                )
                            )
                        )
                    )
                )
            ),
            // Copyright Section
            array(
                'id' => $this->generate_id(),
                'elType' => 'section',
                'settings' => array(
                    'padding' => array(
                        'unit' => 'px',
                        'top' => '20',
                        'right' => '80',
                        'bottom' => '20',
                        'left' => '80',
                    ),
                    'background_color' => '#1a1a1a',
                    'border_border' => 'solid',
                    'border_width' => array(
                        'unit' => 'px',
                        'top' => '1',
                        'right' => '0',
                        'bottom' => '0',
                        'left' => '0',
                    ),
                    'border_color' => '#374151',
                ),
                'elements' => array(
                    array(
                        'id' => $this->generate_id(),
                        'elType' => 'column',
                        'settings' => array('_column_size' => 100),
                        'elements' => array(
                            array(
                                'id' => $this->generate_id(),
                                'elType' => 'widget',
                                'widgetType' => 'text-editor',
                                'settings' => array(
                                    'editor' => '<p style="text-align: center; color: #9CA3AF; font-family: Montserrat, sans-serif; font-size: 14px;">&copy; 2025 Digital Kappa. Tous droits réservés.</p>',
                                )
                            )
                        )
                    )
                )
            )
        );
    }

    /**
     * Generate unique ID
     */
    private function generate_id() {
        return substr(md5(uniqid(mt_rand(), true)), 0, 8);
    }
}
