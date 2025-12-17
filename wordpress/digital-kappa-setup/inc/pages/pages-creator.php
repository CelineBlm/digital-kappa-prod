<?php
/**
 * Pages Creator
 *
 * @package DigitalKappaSetup
 */

if (!defined('ABSPATH')) {
    exit;
}

class DK_Pages_Creator {

    /**
     * Create all pages
     */
    public function create_all_pages() {
        $pages = array(
            'accueil' => $this->get_homepage_data(),
            'tous-les-produits' => $this->get_products_page_data(),
            'comment-ca-marche' => $this->get_how_it_works_data(),
            'faq' => $this->get_faq_page_data(),
            'a-propos' => $this->get_about_page_data(),
            'cgv' => $this->get_cgv_page_data(),
            'confidentialite' => $this->get_privacy_page_data(),
            'checkout' => $this->get_checkout_page_data(),
            'confirmation-commande' => $this->get_confirmation_page_data(),
            'mon-compte' => $this->get_account_page_data(),
        );

        $count = 0;
        foreach ($pages as $slug => $data) {
            if ($this->create_page($slug, $data)) {
                $count++;
            }
        }

        // Set homepage
        $homepage = get_page_by_path('accueil');
        if ($homepage) {
            update_option('show_on_front', 'page');
            update_option('page_on_front', $homepage->ID);
        }

        return array('count' => $count);
    }

    /**
     * Create a single page
     */
    private function create_page($slug, $data) {
        // Check if page exists
        $existing = get_page_by_path($slug);
        if ($existing) {
            return false;
        }

        // Create page
        $page_id = wp_insert_post(array(
            'post_title' => $data['title'],
            'post_name' => $slug,
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_content' => '',
        ));

        if (is_wp_error($page_id)) {
            return false;
        }

        // Set Elementor data
        $this->set_elementor_data($page_id, $data['elementor']);

        return true;
    }

    /**
     * Set Elementor data for page
     */
    private function set_elementor_data($page_id, $sections) {
        if (!did_action('elementor/loaded')) {
            return;
        }

        $data = $this->build_elementor_structure($sections);

        update_post_meta($page_id, '_elementor_edit_mode', 'builder');
        update_post_meta($page_id, '_elementor_template_type', 'wp-page');
        update_post_meta($page_id, '_wp_page_template', 'elementor_header_footer');
        update_post_meta($page_id, '_elementor_data', wp_slash(wp_json_encode($data)));

        // Clear Elementor cache
        if (class_exists('\Elementor\Plugin')) {
            \Elementor\Plugin::$instance->files_manager->clear_cache();
        }
    }

    /**
     * Build Elementor structure
     */
    private function build_elementor_structure($sections) {
        $data = array();

        foreach ($sections as $section) {
            $section_data = array(
                'id' => $this->generate_id(),
                'elType' => 'section',
                'settings' => isset($section['settings']) ? $section['settings'] : array(),
                'elements' => array()
            );

            // Single column by default
            $column_data = array(
                'id' => $this->generate_id(),
                'elType' => 'column',
                'settings' => array('_column_size' => 100),
                'elements' => array()
            );

            // Add widget
            if (isset($section['widget'])) {
                $column_data['elements'][] = array(
                    'id' => $this->generate_id(),
                    'elType' => 'widget',
                    'widgetType' => $section['widget'],
                    'settings' => isset($section['widget_settings']) ? $section['widget_settings'] : array()
                );
            }

            $section_data['elements'][] = $column_data;
            $data[] = $section_data;
        }

        return $data;
    }

    /**
     * Generate unique ID
     */
    private function generate_id() {
        return substr(md5(uniqid(mt_rand(), true)), 0, 8);
    }

    /**
     * Homepage data
     */
    private function get_homepage_data() {
        return array(
            'title' => 'Accueil',
            'elementor' => array(
                array(
                    'widget' => 'dk_hero_section',
                    'settings' => array(
                        'structure' => '10',
                    ),
                    'widget_settings' => array(
                        'badge_text' => 'Marketplace de produits digitaux',
                        'title_part1' => 'Accélérez vos projets avec des',
                        'title_highlight' => 'ressources digitales',
                        'title_part2' => 'de qualité',
                        'subtitle' => 'Découvrez notre collection d\'applications, ebooks et templates soigneusement sélectionnés pour booster votre productivité.',
                        'btn_primary_text' => 'Explorer le catalogue',
                        'btn_primary_link' => array('url' => '/tous-les-produits/'),
                        'btn_secondary_text' => 'Comment ça marche',
                        'btn_secondary_link' => array('url' => '/comment-ca-marche/'),
                        'image' => array('url' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop'),
                    )
                ),
                array(
                    'widget' => 'dk_features_section',
                    'widget_settings' => array(
                        'features' => array(
                            array('icon' => 'download', 'title' => 'Téléchargement instantané', 'description' => 'Accédez immédiatement à vos produits après l\'achat'),
                            array('icon' => 'shield', 'title' => 'Paiement sécurisé', 'description' => 'Transactions cryptées et données protégées'),
                            array('icon' => 'headphones', 'title' => 'Support 24/7', 'description' => 'Notre équipe est disponible pour vous aider'),
                            array('icon' => 'refresh', 'title' => 'Mises à jour gratuites', 'description' => 'Bénéficiez des dernières versions sans frais'),
                        )
                    )
                ),
                array(
                    'widget' => 'dk_product_grid',
                    'widget_settings' => array(
                        'title' => 'Nos produits digitaux',
                        'subtitle' => 'Des ressources soigneusement sélectionnées pour vous',
                        'products_count' => 6,
                        'columns' => '3',
                        'show_view_all' => 'yes',
                        'view_all_link' => array('url' => '/tous-les-produits/'),
                    )
                ),
                array(
                    'widget' => 'dk_testimonials',
                    'widget_settings' => array(
                        'title' => 'Ce que disent nos clients',
                    )
                ),
                array(
                    'widget' => 'dk_cta_section',
                    'widget_settings' => array(
                        'title' => 'Prêt à découvrir nos produits ?',
                        'subtitle' => 'Rejoignez des centaines de créateurs qui utilisent nos ressources',
                        'btn_primary_text' => 'Explorer le catalogue',
                        'btn_primary_link' => array('url' => '/tous-les-produits/'),
                        'btn_secondary_text' => 'Nous contacter',
                        'btn_secondary_link' => array('url' => 'mailto:contact@digitalkappa.com'),
                        'style' => 'dark',
                    )
                ),
            )
        );
    }

    /**
     * Products page data
     */
    private function get_products_page_data() {
        return array(
            'title' => 'Tous nos produits',
            'elementor' => array(
                array(
                    'widget' => 'dk_page_header',
                    'widget_settings' => array(
                        'badge_text' => 'Notre catalogue',
                        'title' => 'Tous nos produits',
                        'subtitle' => 'Explorez notre sélection de ressources digitales de qualité',
                        'show_badge' => 'yes',
                    )
                ),
                array(
                    'widget' => 'dk_product_grid',
                    'widget_settings' => array(
                        'products_count' => 12,
                        'columns' => '3',
                        'show_view_all' => '',
                    )
                ),
            )
        );
    }

    /**
     * How it works page data
     */
    private function get_how_it_works_data() {
        return array(
            'title' => 'Comment ça marche',
            'elementor' => array(
                array(
                    'widget' => 'dk_page_header',
                    'widget_settings' => array(
                        'badge_text' => 'Simple et sécurisé',
                        'title' => 'Comment ça marche ?',
                        'subtitle' => 'Achetez et téléchargez vos produits digitaux en quelques clics.',
                        'show_badge' => 'yes',
                    )
                ),
                array(
                    'widget' => 'dk_process_steps',
                    'widget_settings' => array(
                        'steps' => array(
                            array('icon' => 'search', 'title' => 'Parcourez', 'description' => 'Explorez notre catalogue de produits digitaux : applications, ebooks et templates.'),
                            array('icon' => 'credit-card', 'title' => 'Achetez en un clic', 'description' => 'Pas de compte requis. Réglez en toute sécurité via notre système de paiement.'),
                            array('icon' => 'download', 'title' => 'Téléchargez', 'description' => 'Accédez immédiatement à votre produit avec un lien valable à vie.'),
                        )
                    )
                ),
                array(
                    'widget' => 'dk_cta_section',
                    'widget_settings' => array(
                        'title' => 'Prêt à découvrir nos produits ?',
                        'subtitle' => 'Rejoignez des centaines de créateurs',
                        'btn_primary_text' => 'Explorer le catalogue',
                        'btn_primary_link' => array('url' => '/tous-les-produits/'),
                        'style' => 'dark',
                    )
                ),
            )
        );
    }

    /**
     * FAQ page data
     */
    private function get_faq_page_data() {
        return array(
            'title' => 'FAQ',
            'elementor' => array(
                array(
                    'widget' => 'dk_page_header',
                    'widget_settings' => array(
                        'badge_text' => 'Aide & Support',
                        'title' => 'Questions Fréquentes',
                        'subtitle' => 'Trouvez rapidement les réponses à vos questions',
                        'show_badge' => 'yes',
                    )
                ),
                array(
                    'widget' => 'dk_faq_accordion',
                    'widget_settings' => array(
                        'show_categories' => 'yes',
                    )
                ),
                array(
                    'widget' => 'dk_cta_section',
                    'widget_settings' => array(
                        'title' => 'Vous ne trouvez pas votre réponse ?',
                        'subtitle' => 'Notre équipe est là pour vous aider',
                        'btn_primary_text' => 'Contacter l\'équipe',
                        'btn_primary_link' => array('url' => 'mailto:support@digitalkappa.com'),
                        'btn_secondary_text' => 'Chat en direct',
                        'btn_secondary_link' => array('url' => '#'),
                        'style' => 'dark',
                    )
                ),
            )
        );
    }

    /**
     * About page data
     */
    private function get_about_page_data() {
        return array(
            'title' => 'À propos',
            'elementor' => array(
                array(
                    'widget' => 'dk_page_header',
                    'widget_settings' => array(
                        'badge_text' => 'À propos de nous',
                        'title' => 'Digital Kappa, votre partenaire digital',
                        'subtitle' => 'Nous proposons des ressources numériques simples, efficaces et de qualité.',
                        'show_badge' => 'yes',
                    )
                ),
                array(
                    'widget' => 'dk_stats_section',
                    'widget_settings' => array(
                        'stats' => array(
                            array('value' => '2026', 'label' => 'Année de lancement'),
                            array('value' => '100%', 'label' => 'Engagement qualité'),
                            array('value' => '14 jours', 'label' => 'Garantie satisfait'),
                            array('value' => '24h', 'label' => 'Support réactif'),
                        )
                    )
                ),
            )
        );
    }

    /**
     * CGV page data
     */
    private function get_cgv_page_data() {
        return array(
            'title' => 'Conditions Générales de Vente',
            'elementor' => array(
                array(
                    'widget' => 'dk_page_header',
                    'widget_settings' => array(
                        'badge_text' => 'Mentions légales',
                        'title' => 'Conditions générales de vente',
                        'subtitle' => 'Dernière mise à jour : 1er décembre 2024',
                        'show_badge' => 'yes',
                    )
                ),
            )
        );
    }

    /**
     * Privacy page data
     */
    private function get_privacy_page_data() {
        return array(
            'title' => 'Politique de confidentialité',
            'elementor' => array(
                array(
                    'widget' => 'dk_page_header',
                    'widget_settings' => array(
                        'badge_text' => 'Vie privée',
                        'title' => 'Politique de confidentialité',
                        'subtitle' => 'Dernière mise à jour : 1er décembre 2024',
                        'show_badge' => 'yes',
                    )
                ),
            )
        );
    }

    /**
     * Checkout page data
     */
    private function get_checkout_page_data() {
        return array(
            'title' => 'Paiement',
            'elementor' => array(
                array(
                    'widget' => 'shortcode',
                    'widget_settings' => array(
                        'shortcode' => '[woocommerce_checkout]',
                    )
                ),
            )
        );
    }

    /**
     * Order confirmation page data
     */
    private function get_confirmation_page_data() {
        return array(
            'title' => 'Confirmation de commande',
            'elementor' => array(
                array(
                    'widget' => 'dk_page_header',
                    'widget_settings' => array(
                        'badge_text' => '',
                        'title' => 'Commande confirmée !',
                        'subtitle' => 'Merci pour votre achat. Votre commande a été traitée avec succès.',
                        'show_badge' => '',
                    )
                ),
            )
        );
    }

    /**
     * Account page data
     */
    private function get_account_page_data() {
        return array(
            'title' => 'Mon compte',
            'elementor' => array(
                array(
                    'widget' => 'shortcode',
                    'widget_settings' => array(
                        'shortcode' => '[woocommerce_my_account]',
                    )
                ),
            )
        );
    }
}
