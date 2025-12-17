<?php
/**
 * Products Importer
 *
 * @package DigitalKappaSetup
 */

if (!defined('ABSPATH')) {
    exit;
}

class DK_Products_Importer {

    private $products_data = array();

    public function __construct() {
        $this->products_data = $this->get_products_data();
    }

    /**
     * Get products data from React
     */
    private function get_products_data() {
        return array(
            // === APPLICATIONS (4) ===
            array(
                'title' => 'BudgetPro - Finance Personnelle',
                'description' => "Application de gestion de budget personnel avec suivi des dépenses, catégorisation automatique, graphiques de tendances, et alertes de dépassement. Interface intuitive et synchronisation cloud.",
                'price' => 49,
                'category' => 'applications',
                'image' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=600&h=400&fit=crop',
                'rating' => 4.8,
                'review_count' => 127,
                'features' => array(
                    'Suivi des dépenses en temps réel',
                    'Catégorisation automatique',
                    'Graphiques et statistiques',
                    'Alertes personnalisables',
                    'Synchronisation cloud',
                    'Export des données'
                ),
                'included' => array(
                    'Application web complète',
                    'Code source React',
                    'Documentation technique',
                    'Mises à jour gratuites 1 an'
                ),
                'requirements' => array(
                    'Node.js 18+',
                    'Navigateur moderne',
                    'Connexion internet'
                )
            ),
            array(
                'title' => 'FitTracker - Suivi Sportif',
                'description' => "Application complète de suivi d'activités sportives avec tracking GPS, statistiques de performance, plans d'entraînement personnalisés et intégration avec les montres connectées.",
                'price' => 69,
                'category' => 'applications',
                'image' => 'https://images.unsplash.com/photo-1476480862126-209bfaa8edc8?w=600&h=400&fit=crop',
                'rating' => 4.7,
                'review_count' => 89,
                'features' => array(
                    'Tracking GPS précis',
                    'Statistiques de performance',
                    'Plans d\'entraînement',
                    'Suivi de progression',
                    'Intégration montres connectées'
                ),
                'included' => array(
                    'Application mobile React Native',
                    'Backend Node.js',
                    'Documentation complète'
                ),
                'requirements' => array(
                    'iOS 14+ ou Android 10+',
                    'Node.js pour le backend'
                )
            ),
            array(
                'title' => 'TaskMaster - Gestion de Projets',
                'description' => "Outil de gestion de projets agile avec tableaux Kanban, diagrammes de Gantt, collaboration en temps réel, et intégrations avec les outils populaires.",
                'price' => 89,
                'category' => 'applications',
                'image' => 'https://images.unsplash.com/photo-1507925921958-8a62f3d1a50d?w=600&h=400&fit=crop',
                'rating' => 4.9,
                'review_count' => 156,
                'features' => array(
                    'Tableaux Kanban personnalisables',
                    'Diagrammes de Gantt',
                    'Collaboration temps réel',
                    'Intégrations multiples',
                    'Rapports et analytics'
                ),
                'included' => array(
                    'Application web SaaS-ready',
                    'Code source complet',
                    'API documentation'
                ),
                'requirements' => array(
                    'Node.js 18+',
                    'PostgreSQL ou MongoDB'
                )
            ),
            array(
                'title' => 'MindFlow - Méditation',
                'description' => "Application de méditation guidée avec bibliothèque de séances, musiques relaxantes, suivi de progression et rappels personnalisés. Parfait pour débuter ou approfondir sa pratique.",
                'price' => 39,
                'category' => 'applications',
                'image' => 'https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=600&h=400&fit=crop',
                'rating' => 4.6,
                'review_count' => 203,
                'features' => array(
                    'Bibliothèque de méditations',
                    'Musiques relaxantes',
                    'Suivi de progression',
                    'Rappels personnalisés'
                ),
                'included' => array(
                    'Application React Native',
                    'Fichiers audio inclus',
                    'Documentation'
                ),
                'requirements' => array(
                    'iOS 13+ ou Android 9+'
                )
            ),

            // === EBOOKS (5) ===
            array(
                'title' => 'React Mastery Guide',
                'description' => "Guide complet pour maîtriser React.js de A à Z. Inclut hooks avancés, patterns de design, optimisation des performances et meilleures pratiques utilisées par les experts.",
                'price' => 39,
                'category' => 'ebooks',
                'image' => 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=600&h=400&fit=crop',
                'rating' => 4.9,
                'review_count' => 234,
                'features' => array(
                    '15 chapitres détaillés',
                    'Exemples de code pratiques',
                    'Projets complets',
                    'Mises à jour gratuites'
                ),
                'included' => array(
                    'Ebook PDF 320 pages',
                    'Code source des exemples',
                    'Accès communauté Discord'
                ),
                'requirements' => array(
                    'Connaissances JavaScript de base',
                    'Lecteur PDF'
                )
            ),
            array(
                'title' => 'Productivité Maximale',
                'description' => "Méthodes et techniques éprouvées pour booster votre productivité. Gestion du temps, automatisation, routines efficaces et outils indispensables pour les professionnels.",
                'price' => 29,
                'category' => 'ebooks',
                'image' => 'https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?w=600&h=400&fit=crop',
                'rating' => 4.7,
                'review_count' => 178,
                'features' => array(
                    'Techniques de productivité',
                    'Gestion du temps',
                    'Automatisation',
                    'Templates inclus'
                ),
                'included' => array(
                    'Ebook PDF 180 pages',
                    'Workbook interactif',
                    'Templates Notion'
                ),
                'requirements' => array(
                    'Lecteur PDF'
                )
            ),
            array(
                'title' => 'Design System Handbook',
                'description' => "Créez des design systems cohérents et scalables. Ce guide couvre la théorie, les outils, l'implémentation et la documentation pour des interfaces utilisateur professionnelles.",
                'price' => 49,
                'category' => 'ebooks',
                'image' => 'https://images.unsplash.com/photo-1558655146-9f40138edfeb?w=600&h=400&fit=crop',
                'rating' => 4.8,
                'review_count' => 145,
                'features' => array(
                    'Méthodologie complète',
                    'Exemples concrets',
                    'Outils recommandés',
                    'Templates Figma'
                ),
                'included' => array(
                    'Ebook PDF 250 pages',
                    'Fichiers Figma',
                    'Checklist design system'
                ),
                'requirements' => array(
                    'Figma (gratuit)',
                    'Lecteur PDF'
                )
            ),
            array(
                'title' => 'Freelance Success Blueprint',
                'description' => "Le guide ultime pour réussir en freelance. Trouver des clients, fixer ses tarifs, gérer son temps, créer des contrats et développer son activité durablement.",
                'price' => 35,
                'category' => 'ebooks',
                'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=400&fit=crop',
                'rating' => 4.6,
                'review_count' => 267,
                'features' => array(
                    'Stratégies d\'acquisition',
                    'Modèles de tarification',
                    'Gestion administrative',
                    'Templates de contrats'
                ),
                'included' => array(
                    'Ebook PDF 200 pages',
                    'Templates de contrats',
                    'Calculateur de tarifs Excel'
                ),
                'requirements' => array(
                    'Lecteur PDF'
                )
            ),
            array(
                'title' => 'TypeScript Avancé',
                'description' => "Maîtrisez TypeScript avec ce guide avancé. Types génériques, utility types, patterns avancés et intégration avec React, Node.js et les frameworks modernes.",
                'price' => 45,
                'category' => 'ebooks',
                'image' => 'https://images.unsplash.com/photo-1516116216624-53e697fedbea?w=600&h=400&fit=crop',
                'rating' => 4.8,
                'review_count' => 189,
                'features' => array(
                    'Types génériques avancés',
                    'Utility types',
                    'Patterns TypeScript',
                    'Intégrations frameworks'
                ),
                'included' => array(
                    'Ebook PDF 280 pages',
                    'Repository GitHub',
                    'Exercices pratiques'
                ),
                'requirements' => array(
                    'JavaScript intermédiaire',
                    'TypeScript bases'
                )
            ),

            // === TEMPLATES (4) ===
            array(
                'title' => 'SaaS Dashboard Pro',
                'description' => "Template dashboard complet pour applications SaaS. Inclut tableaux de bord, analytics, gestion utilisateurs, facturation et paramètres. Construit avec React et Tailwind CSS.",
                'price' => 149,
                'category' => 'templates',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop',
                'rating' => 4.9,
                'review_count' => 312,
                'features' => array(
                    '40+ composants UI',
                    '15+ pages pré-construites',
                    'Mode sombre inclus',
                    'Responsive design',
                    'Code propre et documenté'
                ),
                'included' => array(
                    'Code source React/Next.js',
                    'Composants Tailwind CSS',
                    'Documentation complète',
                    'Support 6 mois'
                ),
                'requirements' => array(
                    'Node.js 18+',
                    'npm ou yarn'
                )
            ),
            array(
                'title' => 'Portfolio Créatif',
                'description' => "Template portfolio moderne et élégant pour créatifs. Animations fluides, galerie projets, section témoignages et formulaire de contact. Parfait pour designers et développeurs.",
                'price' => 79,
                'category' => 'templates',
                'image' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=600&h=400&fit=crop',
                'rating' => 4.7,
                'review_count' => 198,
                'features' => array(
                    'Animations GSAP',
                    'Galerie projets',
                    'Section témoignages',
                    'Formulaire contact',
                    'SEO optimisé'
                ),
                'included' => array(
                    'Code source HTML/CSS/JS',
                    'Version React disponible',
                    'Fichiers Figma'
                ),
                'requirements' => array(
                    'Hébergement web',
                    'Connaissances HTML/CSS basiques'
                )
            ),
            array(
                'title' => 'E-commerce Starter Kit',
                'description' => "Kit de démarrage e-commerce complet avec catalogue produits, panier, checkout, paiement Stripe et tableau de bord admin. Prêt à être déployé en production.",
                'price' => 199,
                'category' => 'templates',
                'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&h=400&fit=crop',
                'rating' => 4.8,
                'review_count' => 276,
                'features' => array(
                    'Catalogue produits',
                    'Panier et checkout',
                    'Paiement Stripe',
                    'Dashboard admin',
                    'Gestion commandes'
                ),
                'included' => array(
                    'Frontend Next.js',
                    'Backend Node.js',
                    'Base de données PostgreSQL',
                    'Documentation déploiement'
                ),
                'requirements' => array(
                    'Node.js 18+',
                    'PostgreSQL',
                    'Compte Stripe'
                )
            ),
            array(
                'title' => 'Landing Page Pack',
                'description' => "Collection de 10 landing pages modernes et convertissantes. Idéal pour SaaS, apps mobiles, agences et produits. Optimisé pour la conversion et le SEO.",
                'price' => 99,
                'category' => 'templates',
                'image' => 'https://images.unsplash.com/photo-1559028012-481c04fa702d?w=600&h=400&fit=crop',
                'rating' => 4.6,
                'review_count' => 421,
                'features' => array(
                    '10 landing pages',
                    'Sections modulaires',
                    'Formulaires intégrés',
                    'Animations scroll',
                    'Mobile-first'
                ),
                'included' => array(
                    'Code HTML/CSS/JS',
                    'Versions React et Vue',
                    'Fichiers Figma'
                ),
                'requirements' => array(
                    'Hébergement web'
                )
            )
        );
    }

    /**
     * Import all products
     */
    public function import_all() {
        $count = 0;

        // Ensure categories exist
        $this->ensure_categories();

        foreach ($this->products_data as $product_data) {
            $result = $this->create_product($product_data);
            if ($result) {
                $count++;
            }
        }

        return array('count' => $count);
    }

    /**
     * Ensure categories exist
     */
    private function ensure_categories() {
        $categories = array(
            'ebooks' => 'Ebooks',
            'applications' => 'Applications',
            'templates' => 'Templates'
        );

        foreach ($categories as $slug => $name) {
            if (!term_exists($slug, 'product_cat')) {
                wp_insert_term($name, 'product_cat', array('slug' => $slug));
            }
        }
    }

    /**
     * Create a single product
     */
    private function create_product($data) {
        // Check if product already exists
        $existing = get_page_by_title($data['title'], OBJECT, 'product');
        if ($existing) {
            return false;
        }

        // Create product
        $product = new WC_Product_Simple();
        $product->set_name($data['title']);
        $product->set_description($data['description']);
        $product->set_short_description(wp_trim_words($data['description'], 25));
        $product->set_regular_price($data['price']);
        $product->set_status('publish');
        $product->set_catalog_visibility('visible');
        $product->set_virtual(true);
        $product->set_downloadable(true);

        // Set category
        $term = get_term_by('slug', $data['category'], 'product_cat');
        if ($term) {
            $product->set_category_ids(array($term->term_id));
        }

        // Save product
        $product_id = $product->save();

        if ($product_id) {
            // Set featured image from URL
            $this->set_product_image($product_id, $data['image']);

            // Set ACF fields
            if (function_exists('update_field')) {
                // Rating
                update_field('rating', $data['rating'], $product_id);
                update_field('review_count', $data['review_count'], $product_id);

                // Features
                if (!empty($data['features'])) {
                    $features = array();
                    foreach ($data['features'] as $feature) {
                        $features[] = array('feature_text' => $feature);
                    }
                    update_field('features', $features, $product_id);
                }

                // Included
                if (!empty($data['included'])) {
                    $included = array();
                    foreach ($data['included'] as $item) {
                        $included[] = array('included_item' => $item);
                    }
                    update_field('included', $included, $product_id);
                }

                // Requirements
                if (!empty($data['requirements'])) {
                    $requirements = array();
                    foreach ($data['requirements'] as $req) {
                        $requirements[] = array('requirement_text' => $req);
                    }
                    update_field('requirements', $requirements, $product_id);
                }
            }

            return true;
        }

        return false;
    }

    /**
     * Set product image from URL
     */
    private function set_product_image($product_id, $image_url) {
        require_once(ABSPATH . 'wp-admin/includes/media.php');
        require_once(ABSPATH . 'wp-admin/includes/file.php');
        require_once(ABSPATH . 'wp-admin/includes/image.php');

        // Download image
        $tmp = download_url($image_url);

        if (is_wp_error($tmp)) {
            return false;
        }

        $file_array = array(
            'name' => basename($image_url),
            'tmp_name' => $tmp
        );

        // Sideload image
        $attachment_id = media_handle_sideload($file_array, $product_id);

        if (is_wp_error($attachment_id)) {
            @unlink($tmp);
            return false;
        }

        // Set as featured image
        set_post_thumbnail($product_id, $attachment_id);

        return true;
    }
}
