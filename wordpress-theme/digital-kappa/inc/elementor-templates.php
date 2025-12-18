<?php
/**
 * Elementor Templates Data for Elementor 3.x (Container-based)
 * Complete templates matching the React design
 *
 * @package Digital_Kappa
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get Elementor template data for a specific page
 */
function digital_kappa_get_elementor_template($page_type) {
    $templates = array(
        'home' => digital_kappa_elementor_home(),
        'about' => digital_kappa_elementor_about(),
        'faq' => digital_kappa_elementor_faq(),
        'how-it-works' => digital_kappa_elementor_how_it_works(),
        'contact' => digital_kappa_elementor_contact(),
        'all-products' => digital_kappa_elementor_all_products(),
        'cgv' => digital_kappa_elementor_cgv(),
        'privacy' => digital_kappa_elementor_privacy(),
        'mentions-legales' => digital_kappa_elementor_mentions_legales(),
        'product-detail' => digital_kappa_elementor_product_detail(),
        'checkout' => digital_kappa_elementor_checkout(),
        'confirmation' => digital_kappa_elementor_confirmation(),
    );

    return isset($templates[$page_type]) ? $templates[$page_type] : array();
}

/**
 * Generate unique ID for Elementor elements (8 characters)
 */
function dk_uid() {
    return substr(md5(uniqid(mt_rand(), true)), 0, 8);
}

/**
 * Create a container element (Elementor 3.x Flexbox Container)
 */
function dk_container($elements, $settings = array()) {
    $default_settings = array(
        'content_width' => 'boxed',
        'container_type' => 'flex',
        'flex_direction' => 'column',
        'flex_align_items' => 'stretch',
    );

    return array(
        'id' => dk_uid(),
        'elType' => 'container',
        'settings' => array_merge($default_settings, $settings),
        'elements' => $elements,
        'isInner' => false,
    );
}

/**
 * Create a row container (horizontal flex)
 */
function dk_row($elements, $settings = array()) {
    $default_settings = array(
        'content_width' => 'boxed',
        'container_type' => 'flex',
        'flex_direction' => 'row',
        'flex_gap' => array('column' => '30', 'row' => '30', 'unit' => 'px'),
        'flex_wrap' => 'wrap',
    );

    return array(
        'id' => dk_uid(),
        'elType' => 'container',
        'settings' => array_merge($default_settings, $settings),
        'elements' => $elements,
        'isInner' => false,
    );
}

/**
 * Create a column container
 */
function dk_col($elements, $width = 50, $settings = array()) {
    $default_settings = array(
        'content_width' => 'full',
        'container_type' => 'flex',
        'flex_direction' => 'column',
        'width' => array('size' => $width, 'unit' => '%'),
    );

    return array(
        'id' => dk_uid(),
        'elType' => 'container',
        'settings' => array_merge($default_settings, $settings),
        'elements' => $elements,
        'isInner' => true,
    );
}

/**
 * Create a heading widget
 */
function dk_heading($title, $tag = 'h2', $settings = array()) {
    $default_settings = array(
        'title' => $title,
        'header_size' => $tag,
        'align' => 'left',
    );

    return array(
        'id' => dk_uid(),
        'elType' => 'widget',
        'settings' => array_merge($default_settings, $settings),
        'elements' => array(),
        'widgetType' => 'heading',
    );
}

/**
 * Create a text editor widget
 */
function dk_text($content, $settings = array()) {
    return array(
        'id' => dk_uid(),
        'elType' => 'widget',
        'settings' => array_merge(array('editor' => $content), $settings),
        'elements' => array(),
        'widgetType' => 'text-editor',
    );
}

/**
 * Create a button widget
 */
function dk_button($text, $link = '#', $settings = array()) {
    $default_settings = array(
        'text' => $text,
        'link' => array('url' => $link, 'is_external' => '', 'nofollow' => ''),
    );

    return array(
        'id' => dk_uid(),
        'elType' => 'widget',
        'settings' => array_merge($default_settings, $settings),
        'elements' => array(),
        'widgetType' => 'button',
    );
}

/**
 * Create an image widget
 */
function dk_image($url, $settings = array()) {
    return array(
        'id' => dk_uid(),
        'elType' => 'widget',
        'settings' => array_merge(array(
            'image' => array('url' => $url, 'id' => ''),
            'image_size' => 'full',
        ), $settings),
        'elements' => array(),
        'widgetType' => 'image',
    );
}

/**
 * Create a spacer widget
 */
function dk_spacer($size = 30) {
    return array(
        'id' => dk_uid(),
        'elType' => 'widget',
        'settings' => array('space' => array('unit' => 'px', 'size' => $size)),
        'elements' => array(),
        'widgetType' => 'spacer',
    );
}

/**
 * Create an icon widget
 */
function dk_icon($icon = 'fas fa-check', $settings = array()) {
    $default_settings = array(
        'selected_icon' => array('value' => $icon, 'library' => 'fa-solid'),
        'primary_color' => '#d2a30b',
    );

    return array(
        'id' => dk_uid(),
        'elType' => 'widget',
        'settings' => array_merge($default_settings, $settings),
        'elements' => array(),
        'widgetType' => 'icon',
    );
}

// ============================================
// HOME PAGE TEMPLATE
// ============================================

function digital_kappa_elementor_home() {
    return array(
        // ===== HERO SECTION =====
        dk_container(array(
            dk_row(array(
                // Left Column - Text
                dk_col(array(
                    // Badge
                    dk_text('<div style="display: inline-flex; align-items: center; background: #fff; border: 1px solid #e5e7eb; border-radius: 50px; padding: 8px 16px; margin-bottom: 24px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                        <span style="width: 8px; height: 8px; background: #d2a30b; border-radius: 50%; margin-right: 12px;"></span>
                        <span style="font-size: 14px; color: #0d1421;">Lancement officiel - Nouveaux produits disponibles</span>
                    </div>'),

                    // Main Title
                    dk_text('<h1 style="font-family: Merriweather, serif; font-size: 48px; line-height: 1.2; margin-bottom: 24px; color: #0d1421;">
                        Marketplace de<br>
                        <span style="color: #d2a30b;">produits digitaux</span>
                    </h1>'),

                    // Description
                    dk_text('<p style="font-size: 18px; line-height: 1.6; color: rgba(13,20,33,0.7); margin-bottom: 32px; max-width: 580px;">
                        Découvrez une sélection de produits digitaux de qualité : applications mobiles, ebooks et templates pour booster votre productivité. Achat simple en un clic, téléchargement immédiat, accès à vie.
                    </p>'),

                    // Buttons
                    dk_text('<div style="display: flex; gap: 12px; flex-wrap: wrap;">
                        <a href="/tous-nos-produits/" style="display: inline-block; background: #d2a30b; color: white; padding: 16px 32px; border-radius: 10px; text-decoration: none; font-weight: 600; font-size: 16px;">Explorer les produits</a>
                        <a href="/comment-ca-marche/" style="display: inline-block; background: white; color: #d2a30b; padding: 16px 32px; border-radius: 10px; text-decoration: none; font-weight: 600; font-size: 16px; border: 2px solid #d2a30b;">Comment ça marche</a>
                    </div>'),
                ), 50),

                // Right Column - Images
                dk_col(array(
                    dk_text('<div style="display: grid; grid-template-columns: 2fr 1fr; gap: 16px;">
                        <!-- Main Image -->
                        <div style="grid-column: 1 / -1; position: relative; border-radius: 16px; overflow: hidden; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1);">
                            <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&q=80" style="width: 100%; height: 200px; object-fit: cover;">
                            <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(180deg, rgba(13,20,33,0.6) 0%, transparent 50%);"></div>
                            <div style="position: absolute; top: 16px; left: 16px;">
                                <span style="background: #d2a30b; color: white; padding: 6px 12px; border-radius: 8px; font-size: 12px; font-weight: 600;">Populaire</span>
                            </div>
                            <div style="position: absolute; bottom: 16px; left: 16px; color: white;">
                                <h3 style="font-family: Merriweather, serif; font-size: 16px; margin: 0 0 4px 0;">Applications mobiles</h3>
                                <p style="font-size: 12px; opacity: 0.7; margin: 0;">Applications prêtes à l\'emploi</p>
                            </div>
                        </div>

                        <!-- Ebooks -->
                        <div style="position: relative; border-radius: 16px; overflow: hidden; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1);">
                            <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=300&q=80" style="width: 100%; height: 200px; object-fit: cover;">
                            <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(180deg, rgba(13,20,33,0.6) 0%, transparent 50%);"></div>
                            <div style="position: absolute; bottom: 12px; left: 12px; color: white;">
                                <h4 style="font-family: Merriweather, serif; font-size: 14px; margin: 0 0 4px 0;">Ebooks</h4>
                                <p style="font-size: 12px; opacity: 0.7; margin: 0;">Guides &amp; formations</p>
                            </div>
                        </div>

                        <!-- Templates -->
                        <div style="position: relative; border-radius: 16px; overflow: hidden; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1);">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=300&q=80" style="width: 100%; height: 200px; object-fit: cover;">
                            <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(180deg, rgba(13,20,33,0.6) 0%, transparent 50%);"></div>
                            <div style="position: absolute; bottom: 12px; left: 12px; color: white;">
                                <h4 style="font-family: Merriweather, serif; font-size: 14px; margin: 0 0 4px 0;">Templates</h4>
                                <p style="font-size: 12px; opacity: 0.7; margin: 0;">Design &amp; code</p>
                            </div>
                        </div>
                    </div>'),
                ), 50),
            ), array(
                'flex_gap' => array('column' => '60', 'row' => '40', 'unit' => 'px'),
            )),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        // ===== WHY CHOOSE US SECTION =====
        dk_container(array(
            dk_heading('Pourquoi choisir Digital Kappa', 'h2', array('align' => 'center')),
            dk_text('<p style="text-align: center; color: #666; max-width: 600px; margin: 0 auto 48px auto;">Une plateforme conçue pour vous offrir la meilleure expérience d\'achat de produits digitaux</p>'),

            dk_row(array(
                // Simplicité
                dk_col(array(
                    dk_text('<div style="text-align: center; padding: 24px;">
                        <div style="width: 64px; height: 64px; background: rgba(210,163,11,0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px auto;">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                        </div>
                        <h4 style="font-family: Merriweather, serif; font-size: 18px; margin-bottom: 8px; color: #0d1421;">Simplicité</h4>
                        <p style="font-size: 14px; color: #666; line-height: 1.6;">Interface intuitive pour trouver rapidement ce dont vous avez besoin</p>
                    </div>'),
                ), 25),

                // Fiabilité
                dk_col(array(
                    dk_text('<div style="text-align: center; padding: 24px;">
                        <div style="width: 64px; height: 64px; background: rgba(210,163,11,0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px auto;">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <h4 style="font-family: Merriweather, serif; font-size: 18px; margin-bottom: 8px; color: #0d1421;">Fiabilité</h4>
                        <p style="font-size: 14px; color: #666; line-height: 1.6;">Produits vérifiés et transactions sécurisées</p>
                    </div>'),
                ), 25),

                // Rapidité
                dk_col(array(
                    dk_text('<div style="text-align: center; padding: 24px;">
                        <div style="width: 64px; height: 64px; background: rgba(210,163,11,0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px auto;">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                        </div>
                        <h4 style="font-family: Merriweather, serif; font-size: 18px; margin-bottom: 8px; color: #0d1421;">Rapidité</h4>
                        <p style="font-size: 14px; color: #666; line-height: 1.6;">Achat en un clic, téléchargement instantané</p>
                    </div>'),
                ), 25),

                // Support
                dk_col(array(
                    dk_text('<div style="text-align: center; padding: 24px;">
                        <div style="width: 64px; height: 64px; background: rgba(210,163,11,0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px auto;">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                        </div>
                        <h4 style="font-family: Merriweather, serif; font-size: 18px; margin-bottom: 8px; color: #0d1421;">Support</h4>
                        <p style="font-size: 14px; color: #666; line-height: 1.6;">Assistance disponible pour tous vos achats</p>
                    </div>'),
                ), 25),
            )),
        ), array(
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        // ===== PRODUCTS SECTION =====
        dk_container(array(
            dk_heading('Découvrez nos produits', 'h2', array('align' => 'center')),
            dk_text('<p style="text-align: center; color: #666; max-width: 600px; margin: 0 auto 48px auto;">Une sélection de produits digitaux de haute qualité pour développeurs et créateurs</p>'),

            dk_row(array(
                // Product 1
                dk_col(array(
                    dk_text('<div style="background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); border: 1px solid #f0f2f5;">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=400&q=80" style="width: 100%; height: 200px; object-fit: cover;">
                        <div style="padding: 20px;">
                            <h3 style="font-family: Merriweather, serif; font-size: 18px; margin-bottom: 8px; color: #0d1421;">App Fitness Premium</h3>
                            <p style="color: #d2a30b; font-weight: 600; font-size: 18px; margin-bottom: 12px;">49 €</p>
                            <a href="/fiche-produit/" style="color: #d2a30b; text-decoration: none; font-size: 14px; display: flex; align-items: center;">Voir le produit →</a>
                        </div>
                    </div>'),
                ), 33),

                // Product 2
                dk_col(array(
                    dk_text('<div style="background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); border: 1px solid #f0f2f5;">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&q=80" style="width: 100%; height: 200px; object-fit: cover;">
                        <div style="padding: 20px;">
                            <h3 style="font-family: Merriweather, serif; font-size: 18px; margin-bottom: 8px; color: #0d1421;">Dashboard Analytics Pro</h3>
                            <p style="color: #d2a30b; font-weight: 600; font-size: 18px; margin-bottom: 12px;">39 €</p>
                            <a href="/fiche-produit/" style="color: #d2a30b; text-decoration: none; font-size: 14px; display: flex; align-items: center;">Voir le produit →</a>
                        </div>
                    </div>'),
                ), 33),

                // Product 3
                dk_col(array(
                    dk_text('<div style="background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); border: 1px solid #f0f2f5;">
                        <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=400&q=80" style="width: 100%; height: 200px; object-fit: cover;">
                        <div style="padding: 20px;">
                            <h3 style="font-family: Merriweather, serif; font-size: 18px; margin-bottom: 8px; color: #0d1421;">Guide du Développeur Moderne</h3>
                            <p style="color: #d2a30b; font-weight: 600; font-size: 18px; margin-bottom: 12px;">29 €</p>
                            <a href="/fiche-produit/" style="color: #d2a30b; text-decoration: none; font-size: 14px; display: flex; align-items: center;">Voir le produit →</a>
                        </div>
                    </div>'),
                ), 33),
            )),

            dk_spacer(32),

            dk_text('<div style="text-align: center;">
                <a href="/tous-nos-produits/" style="display: inline-block; background: #d2a30b; color: white; padding: 14px 28px; border-radius: 10px; text-decoration: none; font-weight: 600;">Voir tous les produits →</a>
            </div>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#f8f9fa',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        // ===== CATEGORIES SECTION =====
        dk_container(array(
            dk_heading('Catégories de produits', 'h2', array('align' => 'center')),
            dk_text('<p style="text-align: center; color: #666; max-width: 600px; margin: 0 auto 48px auto;">Explorez notre sélection organisée de produits digitaux dans trois catégories principales</p>'),

            dk_row(array(
                // Applications
                dk_col(array(
                    dk_text('<div style="text-align: center; padding: 32px; background: #fff; border-radius: 16px; border: 1px solid #f0f2f5;">
                        <div style="width: 64px; height: 64px; background: rgba(210,163,11,0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto;">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
                        </div>
                        <h4 style="font-family: Merriweather, serif; font-size: 20px; margin-bottom: 12px; color: #0d1421;">Applications mobiles</h4>
                        <p style="font-size: 14px; color: #666; line-height: 1.6; margin-bottom: 20px;">Apps prêtes à l\'emploi pour iOS et Android</p>
                        <a href="/applications/" style="color: #d2a30b; text-decoration: none; font-weight: 600;">Explorer →</a>
                    </div>'),
                ), 33),

                // Ebooks
                dk_col(array(
                    dk_text('<div style="text-align: center; padding: 32px; background: #fff; border-radius: 16px; border: 1px solid #f0f2f5;">
                        <div style="width: 64px; height: 64px; background: rgba(210,163,11,0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto;">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
                        </div>
                        <h4 style="font-family: Merriweather, serif; font-size: 20px; margin-bottom: 12px; color: #0d1421;">Ebooks</h4>
                        <p style="font-size: 14px; color: #666; line-height: 1.6; margin-bottom: 20px;">Guides et formations pour développer vos compétences</p>
                        <a href="/ebooks/" style="color: #d2a30b; text-decoration: none; font-weight: 600;">Explorer →</a>
                    </div>'),
                ), 33),

                // Templates
                dk_col(array(
                    dk_text('<div style="text-align: center; padding: 32px; background: #fff; border-radius: 16px; border: 1px solid #f0f2f5;">
                        <div style="width: 64px; height: 64px; background: rgba(210,163,11,0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto;">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>
                        </div>
                        <h4 style="font-family: Merriweather, serif; font-size: 20px; margin-bottom: 12px; color: #0d1421;">Templates</h4>
                        <p style="font-size: 14px; color: #666; line-height: 1.6; margin-bottom: 20px;">Designs professionnels pour vos projets web</p>
                        <a href="/templates/" style="color: #d2a30b; text-decoration: none; font-weight: 600;">Explorer →</a>
                    </div>'),
                ), 33),
            )),
        ), array(
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        // ===== ABOUT SECTION =====
        dk_container(array(
            dk_row(array(
                // Left - Text
                dk_col(array(
                    dk_text('<h2 style="font-family: Merriweather, serif; font-size: 36px; line-height: 1.3; color: #0d1421; margin-bottom: 20px;">Digital Kappa, votre partenaire digital</h2>'),
                    dk_text('<p style="font-size: 16px; color: #666; line-height: 1.7; margin-bottom: 24px;">Chez Digital Kappa, nous créons et sélectionnons avec soin chaque produit digital pour répondre aux besoins des entrepreneurs, développeurs et créateurs modernes.</p>'),
                    dk_text('<p style="font-size: 16px; color: #666; line-height: 1.7; margin-bottom: 32px;">Notre mission est de vous faire gagner du temps en vous proposant des solutions prêtes à l\'emploi, testées et documentées.</p>'),

                    // Checklist
                    dk_text('<div style="display: flex; flex-direction: column; gap: 16px;">
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <div style="width: 24px; height: 24px; background: rgba(210,163,11,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <span style="font-size: 15px; color: #0d1421;">Produits testés et validés</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <div style="width: 24px; height: 24px; background: rgba(210,163,11,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <span style="font-size: 15px; color: #0d1421;">Documentation complète incluse</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <div style="width: 24px; height: 24px; background: rgba(210,163,11,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <span style="font-size: 15px; color: #0d1421;">Mises à jour régulières</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <div style="width: 24px; height: 24px; background: rgba(210,163,11,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <span style="font-size: 15px; color: #0d1421;">Support communautaire actif</span>
                        </div>
                    </div>'),
                ), 50),

                // Right - Image
                dk_col(array(
                    dk_text('<img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&q=80" style="width: 100%; border-radius: 16px; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1);">'),
                ), 50),
            ), array(
                'flex_gap' => array('column' => '60', 'row' => '40', 'unit' => 'px'),
            )),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#f8f9fa',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        // ===== FAQ SECTION =====
        dk_container(array(
            dk_heading('Questions fréquentes', 'h2', array('align' => 'center')),
            dk_text('<p style="text-align: center; color: #666; max-width: 600px; margin: 0 auto 48px auto;">Tout ce que vous devez savoir sur Digital Kappa</p>'),

            dk_text('<div style="max-width: 700px; margin: 0 auto;">
                <!-- FAQ Item 1 -->
                <div style="background: #fff; border: 1px solid #e5e7eb; border-radius: 12px; margin-bottom: 16px; overflow: hidden;">
                    <div style="padding: 20px 24px; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                        <span style="font-weight: 500; color: #0d1421;">Comment acheter un produit ?</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div style="background: #fff; border: 1px solid #e5e7eb; border-radius: 12px; margin-bottom: 16px; overflow: hidden;">
                    <div style="padding: 20px 24px; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                        <span style="font-weight: 500; color: #0d1421;">Puis-je obtenir un remboursement ?</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div style="background: #fff; border: 1px solid #e5e7eb; border-radius: 12px; overflow: hidden;">
                    <div style="padding: 20px 24px; display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                        <span style="font-weight: 500; color: #0d1421;">Les produits sont-ils régulièrement mis à jour ?</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </div>
                </div>
            </div>'),
        ), array(
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        // ===== CTA SECTION =====
        dk_container(array(
            dk_text('<h2 style="font-family: Merriweather, serif; font-size: 36px; color: white; text-align: center; margin-bottom: 16px;">Prêt à découvrir nos produits digitaux ?</h2>'),
            dk_text('<p style="text-align: center; color: rgba(255,255,255,0.8); margin-bottom: 32px; max-width: 600px; margin-left: auto; margin-right: auto;">Rejoignez des centaines de développeurs et créateurs qui utilisent nos produits pour accélérer leurs projets</p>'),

            dk_text('<div style="text-align: center; margin-bottom: 40px;">
                <a href="/tous-nos-produits/" style="display: inline-block; background: #d2a30b; color: white; padding: 16px 32px; border-radius: 10px; text-decoration: none; font-weight: 600; font-size: 16px;">Explorer le catalogue</a>
            </div>'),

            // Badges
            dk_text('<div style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap;">
                <div style="display: flex; align-items: center; gap: 8px; color: rgba(255,255,255,0.8);">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    <span style="font-size: 14px;">Paiement sécurisé</span>
                </div>
                <div style="display: flex; align-items: center; gap: 8px; color: rgba(255,255,255,0.8);">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                    <span style="font-size: 14px;">Téléchargement instantané</span>
                </div>
                <div style="display: flex; align-items: center; gap: 8px; color: rgba(255,255,255,0.8);">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    <span style="font-size: 14px;">Support 24/7</span>
                </div>
            </div>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#0d1421',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

// ============================================
// ABOUT PAGE TEMPLATE
// ============================================

function digital_kappa_elementor_about() {
    return array(
        // Hero
        dk_container(array(
            dk_text('<span style="display: inline-block; background: rgba(210,163,11,0.1); color: #d2a30b; padding: 8px 16px; border-radius: 50px; font-size: 14px; margin-bottom: 24px;">À propos de nous</span>'),
            dk_text('<h1 style="font-family: Merriweather, serif; font-size: 48px; line-height: 1.2; color: #0d1421; margin-bottom: 24px;">Digital Kappa, votre<br>partenaire digital</h1>'),
            dk_text('<p style="font-size: 18px; color: #666; max-width: 600px; line-height: 1.7;">Nous proposons des ressources numériques simples, efficaces et de qualité pour aider les créateurs, entrepreneurs et passionnés à accomplir plus en moins de temps.</p>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array('top' => '100', 'bottom' => '100', 'unit' => 'px', 'isLinked' => false),
        )),

        // Stats
        dk_container(array(
            dk_row(array(
                dk_col(array(
                    dk_text('<div style="text-align: center;"><h3 style="font-family: Merriweather, serif; font-size: 48px; color: #d2a30b; margin-bottom: 8px;">2026</h3><p style="color: #666;">Année de lancement</p></div>'),
                ), 25),
                dk_col(array(
                    dk_text('<div style="text-align: center;"><h3 style="font-family: Merriweather, serif; font-size: 48px; color: #d2a30b; margin-bottom: 8px;">100%</h3><p style="color: #666;">Engagement qualité</p></div>'),
                ), 25),
                dk_col(array(
                    dk_text('<div style="text-align: center;"><h3 style="font-family: Merriweather, serif; font-size: 48px; color: #d2a30b; margin-bottom: 8px;">14j</h3><p style="color: #666;">Garantie remboursement</p></div>'),
                ), 25),
                dk_col(array(
                    dk_text('<div style="text-align: center;"><h3 style="font-family: Merriweather, serif; font-size: 48px; color: #d2a30b; margin-bottom: 8px;">24h</h3><p style="color: #666;">Support réactif</p></div>'),
                ), 25),
            )),
        ), array(
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),

        // Notre Histoire
        dk_container(array(
            dk_row(array(
                dk_col(array(
                    dk_text('<h2 style="font-family: Merriweather, serif; font-size: 36px; color: #0d1421; margin-bottom: 24px;">Notre histoire</h2>'),
                    dk_text('<p style="font-size: 16px; color: #666; line-height: 1.8; margin-bottom: 20px;">Digital Kappa est né d\'une idée simple : rendre accessible des ressources numériques de qualité à tous ceux qui veulent gagner du temps et de l\'efficacité dans leurs projets.</p>'),
                    dk_text('<p style="font-size: 16px; color: #666; line-height: 1.8;">En tant qu\'entrepreneurs nous-mêmes, nous avons souvent cherché des outils fiables, des templates bien conçus ou des applications prêtes à l\'emploi. Mais entre les produits de mauvaise qualité, les descriptions trompeuses et les plateformes peu fiables, trouver la perle rare était un vrai parcours du combattant.</p>'),
                ), 50),
                dk_col(array(
                    dk_text('<img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&q=80" style="width: 100%; border-radius: 16px; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1);">'),
                ), 50),
            )),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#f8f4ed',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        // Nos Valeurs
        dk_container(array(
            dk_heading('Nos valeurs', 'h2', array('align' => 'center')),
            dk_spacer(48),
            dk_row(array(
                dk_col(array(
                    dk_text('<div style="text-align: center; padding: 24px;">
                        <div style="width: 64px; height: 64px; background: rgba(210,163,11,0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px auto;">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </div>
                        <h4 style="font-family: Merriweather, serif; font-size: 18px; margin-bottom: 8px;">Qualité</h4>
                        <p style="color: #666; font-size: 14px;">Chaque produit est testé et validé avant publication</p>
                    </div>'),
                ), 33),
                dk_col(array(
                    dk_text('<div style="text-align: center; padding: 24px;">
                        <div style="width: 64px; height: 64px; background: rgba(210,163,11,0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px auto;">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                        </div>
                        <h4 style="font-family: Merriweather, serif; font-size: 18px; margin-bottom: 8px;">Transparence</h4>
                        <p style="color: #666; font-size: 14px;">Prix clairs, pas de frais cachés ni d\'abonnements forcés</p>
                    </div>'),
                ), 33),
                dk_col(array(
                    dk_text('<div style="text-align: center; padding: 24px;">
                        <div style="width: 64px; height: 64px; background: rgba(210,163,11,0.1); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px auto;">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </div>
                        <h4 style="font-family: Merriweather, serif; font-size: 18px; margin-bottom: 8px;">Communauté</h4>
                        <p style="color: #666; font-size: 14px;">Un support réactif et une communauté active</p>
                    </div>'),
                ), 33),
            )),
        ), array(
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

// ============================================
// FAQ PAGE TEMPLATE
// ============================================

function digital_kappa_elementor_faq() {
    return array(
        // Hero
        dk_container(array(
            dk_text('<h1 style="font-family: Merriweather, serif; font-size: 48px; text-align: center; color: #0d1421; margin-bottom: 24px;">Questions fréquentes</h1>'),
            dk_text('<p style="text-align: center; font-size: 18px; color: #666; max-width: 600px; margin: 0 auto;">Retrouvez les réponses aux questions les plus fréquentes. Si vous ne trouvez pas la réponse, n\'hésitez pas à nous contacter.</p>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array('top' => '100', 'bottom' => '100', 'unit' => 'px', 'isLinked' => false),
        )),

        // FAQ Content
        dk_container(array(
            dk_text('<div style="max-width: 800px; margin: 0 auto;">
                <h3 style="font-family: Merriweather, serif; font-size: 24px; color: #0d1421; margin-bottom: 24px;">Général</h3>

                <div style="background: #fff; border: 1px solid #e5e7eb; border-radius: 12px; margin-bottom: 16px; padding: 24px;">
                    <h4 style="font-weight: 600; color: #0d1421; margin-bottom: 12px;">Qu\'est-ce que Digital Kappa ?</h4>
                    <p style="color: #666; line-height: 1.7;">Digital Kappa est une marketplace française de produits digitaux premium. Nous proposons des applications mobiles, des ebooks et des templates soigneusement sélectionnés pour leur qualité.</p>
                </div>

                <div style="background: #fff; border: 1px solid #e5e7eb; border-radius: 12px; margin-bottom: 16px; padding: 24px;">
                    <h4 style="font-weight: 600; color: #0d1421; margin-bottom: 12px;">Comment fonctionne l\'achat ?</h4>
                    <p style="color: #666; line-height: 1.7;">L\'achat est simple : choisissez votre produit, procédez au paiement sécurisé via Stripe, et recevez immédiatement vos liens de téléchargement par email.</p>
                </div>

                <div style="background: #fff; border: 1px solid #e5e7eb; border-radius: 12px; margin-bottom: 16px; padding: 24px;">
                    <h4 style="font-weight: 600; color: #0d1421; margin-bottom: 12px;">Les produits sont-ils mis à jour ?</h4>
                    <p style="color: #666; line-height: 1.7;">Oui, tous nos produits bénéficient de mises à jour régulières. Une fois acheté, vous avez accès à vie aux mises à jour du produit.</p>
                </div>
            </div>'),

            dk_spacer(40),

            dk_text('<div style="max-width: 800px; margin: 0 auto;">
                <h3 style="font-family: Merriweather, serif; font-size: 24px; color: #0d1421; margin-bottom: 24px;">Paiement</h3>

                <div style="background: #fff; border: 1px solid #e5e7eb; border-radius: 12px; margin-bottom: 16px; padding: 24px;">
                    <h4 style="font-weight: 600; color: #0d1421; margin-bottom: 12px;">Quels moyens de paiement acceptez-vous ?</h4>
                    <p style="color: #666; line-height: 1.7;">Nous acceptons les cartes bancaires (Visa, Mastercard, American Express) via notre partenaire de paiement sécurisé Stripe.</p>
                </div>

                <div style="background: #fff; border: 1px solid #e5e7eb; border-radius: 12px; margin-bottom: 16px; padding: 24px;">
                    <h4 style="font-weight: 600; color: #0d1421; margin-bottom: 12px;">Le paiement est-il sécurisé ?</h4>
                    <p style="color: #666; line-height: 1.7;">Oui, tous les paiements sont 100% sécurisés. Nous utilisons Stripe, un leader mondial du paiement en ligne, qui garantit la protection de vos données bancaires.</p>
                </div>

                <div style="background: #fff; border: 1px solid #e5e7eb; border-radius: 12px; padding: 24px;">
                    <h4 style="font-weight: 600; color: #0d1421; margin-bottom: 12px;">Puis-je obtenir un remboursement ?</h4>
                    <p style="color: #666; line-height: 1.7;">Oui, nous offrons une garantie satisfait ou remboursé de 14 jours. Si vous n\'êtes pas satisfait de votre achat, contactez-nous et nous vous rembourserons intégralement.</p>
                </div>
            </div>'),
        ), array(
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),

        // CTA
        dk_container(array(
            dk_text('<h2 style="font-family: Merriweather, serif; font-size: 36px; color: white; text-align: center; margin-bottom: 16px;">Vous avez d\'autres questions ?</h2>'),
            dk_text('<p style="text-align: center; color: rgba(255,255,255,0.8); margin-bottom: 32px;">Notre équipe est disponible pour répondre à toutes vos questions.</p>'),
            dk_text('<div style="text-align: center;"><a href="/contact/" style="display: inline-block; background: #d2a30b; color: white; padding: 16px 32px; border-radius: 10px; text-decoration: none; font-weight: 600;">Nous contacter</a></div>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#0d1421',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

// ============================================
// HOW IT WORKS PAGE TEMPLATE
// ============================================

function digital_kappa_elementor_how_it_works() {
    return array(
        // Hero
        dk_container(array(
            dk_text('<span style="display: inline-block; background: rgba(210,163,11,0.1); color: #d2a30b; padding: 8px 16px; border-radius: 50px; font-size: 14px; margin-bottom: 24px;">Simple et rapide</span>'),
            dk_text('<h1 style="font-family: Merriweather, serif; font-size: 48px; text-align: center; color: #0d1421; margin-bottom: 24px;">Comment ça marche ?</h1>'),
            dk_text('<p style="text-align: center; font-size: 18px; color: #666; max-width: 600px; margin: 0 auto;">Découvrez comment acheter et télécharger vos produits digitaux en quelques minutes seulement.</p>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array('top' => '100', 'bottom' => '100', 'unit' => 'px', 'isLinked' => false),
        )),

        // Steps
        dk_container(array(
            dk_row(array(
                dk_col(array(
                    dk_text('<div style="text-align: center; padding: 32px;">
                        <div style="width: 80px; height: 80px; background: #d2a30b; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 24px auto;">
                            <span style="font-family: Merriweather, serif; font-size: 32px; color: white;">1</span>
                        </div>
                        <h3 style="font-family: Merriweather, serif; font-size: 24px; margin-bottom: 16px; color: #0d1421;">Choisissez</h3>
                        <p style="color: #666; line-height: 1.6;">Parcourez notre catalogue et sélectionnez le produit qui correspond à vos besoins.</p>
                    </div>'),
                ), 33),
                dk_col(array(
                    dk_text('<div style="text-align: center; padding: 32px;">
                        <div style="width: 80px; height: 80px; background: #d2a30b; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 24px auto;">
                            <span style="font-family: Merriweather, serif; font-size: 32px; color: white;">2</span>
                        </div>
                        <h3 style="font-family: Merriweather, serif; font-size: 24px; margin-bottom: 16px; color: #0d1421;">Payez</h3>
                        <p style="color: #666; line-height: 1.6;">Procédez au paiement sécurisé via Stripe en quelques clics.</p>
                    </div>'),
                ), 33),
                dk_col(array(
                    dk_text('<div style="text-align: center; padding: 32px;">
                        <div style="width: 80px; height: 80px; background: #d2a30b; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 24px auto;">
                            <span style="font-family: Merriweather, serif; font-size: 32px; color: white;">3</span>
                        </div>
                        <h3 style="font-family: Merriweather, serif; font-size: 24px; margin-bottom: 16px; color: #0d1421;">Téléchargez</h3>
                        <p style="color: #666; line-height: 1.6;">Recevez instantanément vos liens de téléchargement par email.</p>
                    </div>'),
                ), 33),
            )),
        ), array(
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        // CTA
        dk_container(array(
            dk_text('<h2 style="font-family: Merriweather, serif; font-size: 36px; color: white; text-align: center; margin-bottom: 32px;">Prêt à commencer ?</h2>'),
            dk_text('<div style="text-align: center;"><a href="/tous-nos-produits/" style="display: inline-block; background: #d2a30b; color: white; padding: 16px 32px; border-radius: 10px; text-decoration: none; font-weight: 600;">Explorer les produits</a></div>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#0d1421',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

// ============================================
// ALL PRODUCTS PAGE TEMPLATE
// ============================================

function digital_kappa_elementor_all_products() {
    return array(
        // Hero
        dk_container(array(
            dk_text('<h1 style="font-family: Merriweather, serif; font-size: 48px; text-align: center; color: #0d1421; margin-bottom: 24px;">Tous nos produits</h1>'),
            dk_text('<p style="text-align: center; font-size: 18px; color: #666; max-width: 600px; margin: 0 auto;">Découvrez notre sélection complète de produits digitaux premium : applications mobiles, ebooks et templates professionnels.</p>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array('top' => '100', 'bottom' => '100', 'unit' => 'px', 'isLinked' => false),
        )),

        // Products Grid
        dk_container(array(
            dk_row(array(
                dk_col(array(
                    dk_text('<div style="background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); border: 1px solid #f0f2f5;">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=400&q=80" style="width: 100%; height: 200px; object-fit: cover;">
                        <div style="padding: 20px;">
                            <span style="background: rgba(210,163,11,0.1); color: #d2a30b; padding: 4px 12px; border-radius: 50px; font-size: 12px;">Application</span>
                            <h3 style="font-family: Merriweather, serif; font-size: 18px; margin: 12px 0 8px 0; color: #0d1421;">App Fitness Premium</h3>
                            <p style="color: #666; font-size: 14px; margin-bottom: 12px;">Application complète de fitness avec suivi des entraînements</p>
                            <p style="color: #d2a30b; font-weight: 600; font-size: 20px;">49 €</p>
                        </div>
                    </div>'),
                ), 33),
                dk_col(array(
                    dk_text('<div style="background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); border: 1px solid #f0f2f5;">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&q=80" style="width: 100%; height: 200px; object-fit: cover;">
                        <div style="padding: 20px;">
                            <span style="background: rgba(210,163,11,0.1); color: #d2a30b; padding: 4px 12px; border-radius: 50px; font-size: 12px;">Template</span>
                            <h3 style="font-family: Merriweather, serif; font-size: 18px; margin: 12px 0 8px 0; color: #0d1421;">Dashboard Analytics Pro</h3>
                            <p style="color: #666; font-size: 14px; margin-bottom: 12px;">Template de dashboard avec graphiques et statistiques</p>
                            <p style="color: #d2a30b; font-weight: 600; font-size: 20px;">39 €</p>
                        </div>
                    </div>'),
                ), 33),
                dk_col(array(
                    dk_text('<div style="background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); border: 1px solid #f0f2f5;">
                        <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=400&q=80" style="width: 100%; height: 200px; object-fit: cover;">
                        <div style="padding: 20px;">
                            <span style="background: rgba(210,163,11,0.1); color: #d2a30b; padding: 4px 12px; border-radius: 50px; font-size: 12px;">Ebook</span>
                            <h3 style="font-family: Merriweather, serif; font-size: 18px; margin: 12px 0 8px 0; color: #0d1421;">Guide du Développeur Moderne</h3>
                            <p style="color: #666; font-size: 14px; margin-bottom: 12px;">Guide complet pour les développeurs modernes</p>
                            <p style="color: #d2a30b; font-weight: 600; font-size: 20px;">29 €</p>
                        </div>
                    </div>'),
                ), 33),
            )),
        ), array(
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

// ============================================
// CONTACT PAGE TEMPLATE
// ============================================

function digital_kappa_elementor_contact() {
    return array(
        dk_container(array(
            dk_text('<h1 style="font-family: Merriweather, serif; font-size: 48px; text-align: center; color: #0d1421; margin-bottom: 24px;">Contactez-nous</h1>'),
            dk_text('<p style="text-align: center; font-size: 18px; color: #666; max-width: 600px; margin: 0 auto;">Une question, une suggestion ou besoin d\'aide ? Notre équipe est là pour vous répondre.</p>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array('top' => '100', 'bottom' => '100', 'unit' => 'px', 'isLinked' => false),
        )),

        dk_container(array(
            dk_row(array(
                dk_col(array(
                    dk_text('<h3 style="font-family: Merriweather, serif; font-size: 24px; color: #0d1421; margin-bottom: 32px;">Informations de contact</h3>'),
                    dk_text('<div style="margin-bottom: 24px;">
                        <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 20px;">
                            <div style="width: 48px; height: 48px; background: rgba(210,163,11,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            </div>
                            <div>
                                <p style="font-weight: 600; color: #0d1421; margin-bottom: 4px;">Email</p>
                                <p style="color: #666;">contact@digitalkappa.com</p>
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 20px;">
                            <div style="width: 48px; height: 48px; background: rgba(210,163,11,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            </div>
                            <div>
                                <p style="font-weight: 600; color: #0d1421; margin-bottom: 4px;">Horaires</p>
                                <p style="color: #666;">Lundi - Vendredi : 9h - 18h</p>
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; gap: 16px;">
                            <div style="width: 48px; height: 48px; background: rgba(210,163,11,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                            </div>
                            <div>
                                <p style="font-weight: 600; color: #0d1421; margin-bottom: 4px;">Délai de réponse</p>
                                <p style="color: #666;">Sous 24h ouvrées</p>
                            </div>
                        </div>
                    </div>'),
                ), 40),
                dk_col(array(
                    dk_text('<h3 style="font-family: Merriweather, serif; font-size: 24px; color: #0d1421; margin-bottom: 32px;">Envoyez-nous un message</h3>'),
                    dk_text('<p style="color: #666; margin-bottom: 24px;">Utilisez le formulaire ci-dessous pour nous contacter. Nous vous répondrons dans les plus brefs délais.</p>'),
                    dk_text('<p style="color: #999; font-style: italic; background: #f8f9fa; padding: 40px; border-radius: 12px; text-align: center;">[Ajoutez un widget de formulaire de contact ici avec Elementor ou Contact Form 7]</p>'),
                ), 60),
            )),
        ), array(
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

// ============================================
// CGV PAGE TEMPLATE
// ============================================

function digital_kappa_elementor_cgv() {
    return array(
        dk_container(array(
            dk_text('<h1 style="font-family: Merriweather, serif; font-size: 48px; text-align: center; color: #0d1421; margin-bottom: 16px;">Conditions Générales de Vente</h1>'),
            dk_text('<p style="text-align: center; color: #666;">Dernière mise à jour : Janvier 2025</p>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        dk_container(array(
            dk_text('<div style="max-width: 800px; margin: 0 auto;">
                <h2 style="font-family: Merriweather, serif; font-size: 24px; color: #0d1421; margin-bottom: 16px;">1. Objet</h2>
                <p style="color: #666; line-height: 1.8; margin-bottom: 32px;">Les présentes Conditions Générales de Vente (CGV) régissent les ventes de produits digitaux effectuées sur le site Digital Kappa. Toute commande implique l\'acceptation sans réserve des présentes CGV.</p>

                <h2 style="font-family: Merriweather, serif; font-size: 24px; color: #0d1421; margin-bottom: 16px;">2. Produits</h2>
                <p style="color: #666; line-height: 1.8; margin-bottom: 32px;">Digital Kappa propose des produits digitaux téléchargeables : applications mobiles, ebooks et templates. Les caractéristiques essentielles des produits sont présentées sur chaque fiche produit.</p>

                <h2 style="font-family: Merriweather, serif; font-size: 24px; color: #0d1421; margin-bottom: 16px;">3. Prix</h2>
                <p style="color: #666; line-height: 1.8; margin-bottom: 32px;">Les prix sont indiqués en euros TTC. Digital Kappa se réserve le droit de modifier ses prix à tout moment. Les produits sont facturés sur la base des tarifs en vigueur au moment de la validation de la commande.</p>

                <h2 style="font-family: Merriweather, serif; font-size: 24px; color: #0d1421; margin-bottom: 16px;">4. Paiement</h2>
                <p style="color: #666; line-height: 1.8; margin-bottom: 32px;">Le paiement s\'effectue en ligne par carte bancaire via notre prestataire de paiement sécurisé Stripe. Le débit est effectué au moment de la validation de la commande.</p>

                <h2 style="font-family: Merriweather, serif; font-size: 24px; color: #0d1421; margin-bottom: 16px;">5. Livraison</h2>
                <p style="color: #666; line-height: 1.8; margin-bottom: 32px;">Les produits digitaux sont livrés par téléchargement immédiat après paiement. Un email de confirmation contenant les liens de téléchargement est envoyé à l\'adresse email fournie lors de la commande.</p>

                <h2 style="font-family: Merriweather, serif; font-size: 24px; color: #0d1421; margin-bottom: 16px;">6. Droit de rétractation</h2>
                <p style="color: #666; line-height: 1.8;">Conformément à l\'article L221-28 du Code de la consommation, le droit de rétractation ne peut être exercé pour les contenus numériques fournis sur un support immatériel dont l\'exécution a commencé avec l\'accord du consommateur. Toutefois, Digital Kappa offre une garantie satisfait ou remboursé de 14 jours.</p>
            </div>'),
        ), array(
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

// ============================================
// PRIVACY PAGE TEMPLATE
// ============================================

function digital_kappa_elementor_privacy() {
    return array(
        dk_container(array(
            dk_text('<h1 style="font-family: Merriweather, serif; font-size: 48px; text-align: center; color: #0d1421; margin-bottom: 16px;">Politique de confidentialité</h1>'),
            dk_text('<p style="text-align: center; color: #666;">Dernière mise à jour : Janvier 2025</p>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        dk_container(array(
            dk_text('<div style="max-width: 800px; margin: 0 auto;">
                <h2 style="font-family: Merriweather, serif; font-size: 24px; color: #0d1421; margin-bottom: 16px;">1. Collecte des données</h2>
                <p style="color: #666; line-height: 1.8; margin-bottom: 32px;">Nous collectons les données que vous nous fournissez directement : nom, prénom, adresse email lors de vos achats ou de votre inscription à notre newsletter.</p>

                <h2 style="font-family: Merriweather, serif; font-size: 24px; color: #0d1421; margin-bottom: 16px;">2. Utilisation des données</h2>
                <p style="color: #666; line-height: 1.8; margin-bottom: 32px;">Vos données sont utilisées pour traiter vos commandes, vous envoyer vos produits, vous contacter concernant vos achats et améliorer nos services.</p>

                <h2 style="font-family: Merriweather, serif; font-size: 24px; color: #0d1421; margin-bottom: 16px;">3. Protection des données</h2>
                <p style="color: #666; line-height: 1.8; margin-bottom: 32px;">Nous mettons en œuvre des mesures de sécurité appropriées pour protéger vos données personnelles contre tout accès non autorisé, modification, divulgation ou destruction.</p>

                <h2 style="font-family: Merriweather, serif; font-size: 24px; color: #0d1421; margin-bottom: 16px;">4. Vos droits</h2>
                <p style="color: #666; line-height: 1.8;">Conformément au RGPD, vous disposez des droits d\'accès, de rectification, d\'effacement, de portabilité et d\'opposition. Pour exercer ces droits, contactez-nous à : contact@digitalkappa.com</p>
            </div>'),
        ), array(
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

// ============================================
// MENTIONS LEGALES PAGE TEMPLATE
// ============================================

function digital_kappa_elementor_mentions_legales() {
    return array(
        dk_container(array(
            dk_text('<h1 style="font-family: Merriweather, serif; font-size: 48px; text-align: center; color: #0d1421;">Mentions légales</h1>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        dk_container(array(
            dk_text('<div style="max-width: 800px; margin: 0 auto;">
                <h2 style="font-family: Merriweather, serif; font-size: 24px; color: #0d1421; margin-bottom: 16px;">Éditeur du site</h2>
                <p style="color: #666; line-height: 1.8; margin-bottom: 32px;"><strong>Digital Kappa</strong><br>Email : contact@digitalkappa.com<br>SIRET : [Votre numéro SIRET]</p>

                <h2 style="font-family: Merriweather, serif; font-size: 24px; color: #0d1421; margin-bottom: 16px;">Hébergement</h2>
                <p style="color: #666; line-height: 1.8; margin-bottom: 32px;">Le site est hébergé par : [Nom de l\'hébergeur]</p>

                <h2 style="font-family: Merriweather, serif; font-size: 24px; color: #0d1421; margin-bottom: 16px;">Propriété intellectuelle</h2>
                <p style="color: #666; line-height: 1.8;">L\'ensemble du contenu de ce site (textes, images, vidéos, logos) est protégé par le droit d\'auteur. Toute reproduction, même partielle, est interdite sans autorisation préalable.</p>
            </div>'),
        ), array(
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

// ============================================
// PRODUCT DETAIL PAGE TEMPLATE
// ============================================

function digital_kappa_elementor_product_detail() {
    return array(
        dk_container(array(
            dk_row(array(
                dk_col(array(
                    dk_text('<img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80" style="width: 100%; border-radius: 16px; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1);">'),
                ), 50),
                dk_col(array(
                    dk_text('<span style="display: inline-block; background: rgba(210,163,11,0.1); color: #d2a30b; padding: 8px 16px; border-radius: 50px; font-size: 14px; margin-bottom: 16px;">Template</span>'),
                    dk_text('<h1 style="font-family: Merriweather, serif; font-size: 36px; color: #0d1421; margin-bottom: 16px;">Dashboard Analytics Pro</h1>'),
                    dk_text('<p style="font-size: 16px; color: #666; line-height: 1.7; margin-bottom: 24px;">Un template complet pour créer des tableaux de bord analytiques professionnels. Inclut plus de 50 composants, graphiques et widgets prêts à l\'emploi.</p>'),
                    dk_text('<p style="font-family: Merriweather, serif; font-size: 36px; color: #d2a30b; margin-bottom: 24px;">149 €</p>'),
                    dk_text('<a href="/checkout/" style="display: inline-block; background: #d2a30b; color: white; padding: 16px 32px; border-radius: 10px; text-decoration: none; font-weight: 600; margin-bottom: 16px;">Acheter maintenant</a>'),
                    dk_text('<p style="font-size: 14px; color: #999;">✓ Garantie satisfait ou remboursé 14 jours</p>'),
                ), 50),
            )),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#f8f4ed',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        dk_container(array(
            dk_text('<h2 style="font-family: Merriweather, serif; font-size: 28px; color: #0d1421; margin-bottom: 24px;">Description complète</h2>'),
            dk_text('<p style="color: #666; line-height: 1.8; margin-bottom: 16px;">Dashboard Analytics Pro est un template premium conçu pour les professionnels qui souhaitent créer des interfaces d\'analyse de données modernes et performantes.</p>'),
            dk_text('<p style="color: #666; line-height: 1.8;">Ce template inclut tous les composants nécessaires pour construire un tableau de bord complet : graphiques, tableaux, cartes de statistiques, formulaires, et bien plus encore.</p>'),
        ), array(
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),

        dk_container(array(
            dk_text('<h2 style="font-family: Merriweather, serif; font-size: 28px; color: #0d1421; margin-bottom: 24px;">Fonctionnalités principales</h2>'),
            dk_text('<ul style="color: #666; line-height: 2; list-style: none; padding: 0;">
                <li style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                    Plus de 50 composants prêts à l\'emploi
                </li>
                <li style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                    Design responsive (mobile, tablette, desktop)
                </li>
                <li style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                    Mode sombre inclus
                </li>
                <li style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                    Documentation complète
                </li>
                <li style="display: flex; align-items: center; gap: 12px;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d2a30b" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                    Mises à jour gratuites à vie
                </li>
            </ul>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#f8f4ed',
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

// ============================================
// CHECKOUT PAGE TEMPLATE
// ============================================

function digital_kappa_elementor_checkout() {
    return array(
        dk_container(array(
            dk_row(array(
                dk_col(array(
                    dk_text('<h1 style="font-family: Merriweather, serif; font-size: 36px; color: #0d1421; margin-bottom: 32px;">Finaliser votre achat</h1>'),
                    dk_text('<h3 style="font-size: 20px; color: #0d1421; margin-bottom: 24px;">Informations de contact</h3>'),
                    dk_text('<p style="color: #999; font-style: italic; background: #f8f9fa; padding: 40px; border-radius: 12px; text-align: center;">[Le formulaire de paiement sera intégré ici via WooCommerce ou Stripe]</p>'),
                ), 60),
                dk_col(array(
                    dk_text('<div style="background: #fff; padding: 32px; border-radius: 16px; border: 1px solid #e5e7eb;">
                        <h3 style="font-size: 20px; color: #0d1421; margin-bottom: 24px;">Récapitulatif de commande</h3>
                        <div style="display: flex; justify-content: space-between; margin-bottom: 16px; padding-bottom: 16px; border-bottom: 1px solid #e5e7eb;">
                            <span style="color: #0d1421; font-weight: 500;">Dashboard Analytics Pro</span>
                            <span style="color: #666;">149 €</span>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <span style="color: #0d1421; font-weight: 600; font-size: 18px;">Total</span>
                            <span style="color: #d2a30b; font-weight: 600; font-size: 18px;">149 €</span>
                        </div>
                    </div>'),
                ), 40),
            )),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#f8f4ed',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

// ============================================
// CONFIRMATION PAGE TEMPLATE
// ============================================

function digital_kappa_elementor_confirmation() {
    return array(
        dk_container(array(
            dk_text('<div style="text-align: center; margin-bottom: 24px;">
                <div style="width: 80px; height: 80px; background: #dcfce7; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
            </div>'),
            dk_text('<h1 style="font-family: Merriweather, serif; font-size: 48px; text-align: center; color: #0d1421; margin-bottom: 16px;">Commande confirmée !</h1>'),
            dk_text('<p style="text-align: center; font-size: 18px; color: #666;">Merci pour votre achat. Votre commande a été traitée avec succès.</p>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        dk_container(array(
            dk_row(array(
                dk_col(array(
                    dk_text('<h3 style="font-family: Merriweather, serif; font-size: 24px; color: #0d1421; margin-bottom: 16px;">Vos produits</h3>'),
                    dk_text('<p style="color: #666; margin-bottom: 24px;">Les liens de téléchargement ont été envoyés à votre adresse email.</p>'),
                    dk_text('<a href="#" style="display: inline-block; background: #d2a30b; color: white; padding: 14px 28px; border-radius: 10px; text-decoration: none; font-weight: 600;">Télécharger</a>'),
                ), 60),
                dk_col(array(
                    dk_text('<div style="background: #fff; padding: 24px; border-radius: 12px; border: 1px solid #e5e7eb;">
                        <h4 style="font-size: 18px; color: #0d1421; margin-bottom: 16px;">Récapitulatif</h4>
                        <p style="color: #666; margin-bottom: 8px;"><strong>Commande n° :</strong> DK-123456</p>
                        <p style="color: #666; margin-bottom: 8px;"><strong>Date :</strong> ' . date('d/m/Y') . '</p>
                        <p style="color: #666;"><strong>Total :</strong> 149 €</p>
                    </div>'),
                ), 40),
            )),
        ), array(
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),

        dk_container(array(
            dk_text('<h3 style="font-family: Merriweather, serif; font-size: 24px; color: #0d1421; margin-bottom: 24px;">Prochaines étapes</h3>'),
            dk_text('<ol style="color: #666; line-height: 2.2; padding-left: 20px;">
                <li><strong>Consultez votre email</strong> - Un email de confirmation vous a été envoyé</li>
                <li><strong>Téléchargez vos produits</strong> - Utilisez les liens de téléchargement</li>
                <li><strong>Commencez à utiliser</strong> - Suivez la documentation incluse</li>
            </ol>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#f8f4ed',
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),

        dk_container(array(
            dk_text('<h2 style="font-family: Merriweather, serif; font-size: 36px; color: white; text-align: center; margin-bottom: 32px;">Découvrez nos autres produits</h2>'),
            dk_text('<div style="text-align: center;"><a href="/tous-nos-produits/" style="display: inline-block; background: #d2a30b; color: white; padding: 16px 32px; border-radius: 10px; text-decoration: none; font-weight: 600;">Voir tous les produits</a></div>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#0d1421',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}
