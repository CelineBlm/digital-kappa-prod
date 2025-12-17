<?php
/**
 * Elementor Templates Data for Elementor 3.x (Container-based)
 *
 * Uses the new Flexbox Container system instead of Section/Column
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
 * Create an inner container (for columns layout)
 */
function dk_inner_container($elements, $settings = array()) {
    $default_settings = array(
        'content_width' => 'full',
        'container_type' => 'flex',
        'flex_direction' => 'column',
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
        'flex_grow' => '1',
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
        'link' => array(
            'url' => $link,
            'is_external' => '',
            'nofollow' => '',
        ),
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
        'settings' => array(
            'space' => array('unit' => 'px', 'size' => $size),
        ),
        'elements' => array(),
        'widgetType' => 'spacer',
    );
}

// ============================================
// PAGE TEMPLATES
// ============================================

/**
 * Home page Elementor template
 */
function digital_kappa_elementor_home() {
    return array(
        // Hero Section
        dk_container(array(
            dk_row(array(
                dk_col(array(
                    dk_heading('Marketplace de produits digitaux', 'h1'),
                    dk_text('<p style="font-size: 18px; color: #666; line-height: 1.8;">Découvrez une sélection de produits digitaux de qualité : applications mobiles, ebooks et templates pour booster votre productivité.</p>'),
                    dk_spacer(20),
                    dk_button('Explorer les produits', '/tous-nos-produits/'),
                ), 50),
                dk_col(array(
                    dk_image('https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=800&q=80'),
                ), 50),
            )),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array('top' => '100', 'bottom' => '100', 'unit' => 'px', 'isLinked' => false),
        )),

        // Benefits Section
        dk_container(array(
            dk_row(array(
                dk_col(array(
                    dk_heading('Simplicité', 'h4', array('align' => 'center')),
                    dk_text('<p style="text-align: center;">Interface intuitive pour trouver rapidement le produit idéal</p>'),
                ), 25),
                dk_col(array(
                    dk_heading('Fiabilité', 'h4', array('align' => 'center')),
                    dk_text('<p style="text-align: center;">Produits testés et vérifiés avant chaque publication</p>'),
                ), 25),
                dk_col(array(
                    dk_heading('Rapidité', 'h4', array('align' => 'center')),
                    dk_text('<p style="text-align: center;">Accès instantané après paiement</p>'),
                ), 25),
                dk_col(array(
                    dk_heading('Qualité', 'h4', array('align' => 'center')),
                    dk_text('<p style="text-align: center;">Sélection rigoureuse de produits premium</p>'),
                ), 25),
            )),
        ), array(
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        // Products Section
        dk_container(array(
            dk_heading('Nos produits populaires', 'h2', array('align' => 'center')),
            dk_text('<p style="text-align: center; color: #666;">Découvrez notre sélection de produits digitaux de qualité professionnelle</p>'),
        ), array(
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        // CTA Section
        dk_container(array(
            dk_heading('Prêt à découvrir nos produits digitaux ?', 'h2', array('align' => 'center', 'title_color' => '#ffffff')),
            dk_text('<p style="text-align: center; color: rgba(255,255,255,0.8);">Explorez nos meilleures ressources dès aujourd\'hui.</p>'),
            dk_spacer(20),
            dk_button('Explorer le catalogue', '/tous-nos-produits/', array('align' => 'center')),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#1a1a1a',
            'padding' => array('top' => '100', 'bottom' => '100', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

/**
 * About page Elementor template
 */
function digital_kappa_elementor_about() {
    return array(
        // Hero Section
        dk_container(array(
            dk_text('<span style="background: rgba(210, 163, 11, 0.1); color: #d2a30b; padding: 8px 16px; border-radius: 20px; font-size: 14px;">À propos de nous</span>'),
            dk_spacer(20),
            dk_heading('Digital Kappa, votre partenaire digital', 'h1'),
            dk_text('<p style="font-size: 18px; color: #666;">Nous proposons des ressources numériques simples, efficaces et de qualité.</p>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array('top' => '100', 'bottom' => '100', 'unit' => 'px', 'isLinked' => false),
        )),

        // Stats Section
        dk_container(array(
            dk_row(array(
                dk_col(array(
                    dk_heading('2026', 'h2', array('align' => 'center', 'title_color' => '#d2a30b')),
                    dk_text('<p style="text-align: center; color: #666;">Année de lancement</p>'),
                ), 25),
                dk_col(array(
                    dk_heading('100%', 'h2', array('align' => 'center', 'title_color' => '#d2a30b')),
                    dk_text('<p style="text-align: center; color: #666;">Engagement qualité</p>'),
                ), 25),
                dk_col(array(
                    dk_heading('14 jours', 'h2', array('align' => 'center', 'title_color' => '#d2a30b')),
                    dk_text('<p style="text-align: center; color: #666;">Garantie remboursement</p>'),
                ), 25),
                dk_col(array(
                    dk_heading('24h', 'h2', array('align' => 'center', 'title_color' => '#d2a30b')),
                    dk_text('<p style="text-align: center; color: #666;">Support réactif</p>'),
                ), 25),
            )),
        ), array(
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),

        // Notre Histoire Section
        dk_container(array(
            dk_row(array(
                dk_col(array(
                    dk_heading('Notre histoire', 'h2'),
                    dk_text('<p style="line-height: 1.8;">Digital Kappa est né d\'une idée simple : rendre accessible des ressources numériques de qualité à tous ceux qui veulent gagner du temps et de l\'efficacité dans leurs projets.</p>'),
                ), 50),
                dk_col(array(
                    dk_image('https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&q=80'),
                ), 50),
            )),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#f8f4ed',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

/**
 * FAQ page Elementor template
 */
function digital_kappa_elementor_faq() {
    return array(
        // Hero Section
        dk_container(array(
            dk_heading('Questions fréquentes', 'h1', array('align' => 'center')),
            dk_text('<p style="text-align: center; font-size: 18px; color: #666;">Retrouvez les réponses aux questions les plus fréquentes.</p>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array('top' => '100', 'bottom' => '100', 'unit' => 'px', 'isLinked' => false),
        )),

        // FAQ General
        dk_container(array(
            dk_heading('Général', 'h3'),
            dk_spacer(20),
            dk_text('<h4>Qu\'est-ce que Digital Kappa ?</h4><p style="color: #666;">Digital Kappa est une marketplace française de produits digitaux premium.</p>'),
            dk_spacer(20),
            dk_text('<h4>Comment fonctionne l\'achat ?</h4><p style="color: #666;">Choisissez votre produit, procédez au paiement sécurisé via Stripe, et recevez vos liens de téléchargement par email.</p>'),
        ), array(
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),

        // FAQ Paiement
        dk_container(array(
            dk_heading('Paiement', 'h3'),
            dk_spacer(20),
            dk_text('<h4>Quels moyens de paiement acceptez-vous ?</h4><p style="color: #666;">Nous acceptons les cartes bancaires (Visa, Mastercard, American Express) via Stripe.</p>'),
            dk_spacer(20),
            dk_text('<h4>Le paiement est-il sécurisé ?</h4><p style="color: #666;">Oui, tous les paiements sont 100% sécurisés via Stripe.</p>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#f8f4ed',
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),

        // CTA
        dk_container(array(
            dk_heading('Vous avez d\'autres questions ?', 'h2', array('align' => 'center', 'title_color' => '#ffffff')),
            dk_text('<p style="text-align: center; color: rgba(255,255,255,0.8);">Notre équipe est disponible pour vous aider.</p>'),
            dk_spacer(20),
            dk_button('Nous contacter', '/contact/', array('align' => 'center')),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#1a1a1a',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

/**
 * How It Works page Elementor template
 */
function digital_kappa_elementor_how_it_works() {
    return array(
        // Hero Section
        dk_container(array(
            dk_text('<span style="background: rgba(210, 163, 11, 0.1); color: #d2a30b; padding: 8px 16px; border-radius: 20px; font-size: 14px;">Simple et rapide</span>'),
            dk_spacer(20),
            dk_heading('Comment ça marche ?', 'h1', array('align' => 'center')),
            dk_text('<p style="text-align: center; font-size: 18px; color: #666;">Achetez et téléchargez vos produits digitaux en quelques minutes.</p>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array('top' => '100', 'bottom' => '100', 'unit' => 'px', 'isLinked' => false),
        )),

        // Steps
        dk_container(array(
            dk_row(array(
                dk_col(array(
                    dk_heading('1', 'h2', array('align' => 'center', 'title_color' => '#d2a30b')),
                    dk_heading('Choisissez', 'h3', array('align' => 'center')),
                    dk_text('<p style="text-align: center; color: #666;">Parcourez notre catalogue et sélectionnez votre produit.</p>'),
                ), 33),
                dk_col(array(
                    dk_heading('2', 'h2', array('align' => 'center', 'title_color' => '#d2a30b')),
                    dk_heading('Payez', 'h3', array('align' => 'center')),
                    dk_text('<p style="text-align: center; color: #666;">Paiement sécurisé via Stripe en quelques clics.</p>'),
                ), 33),
                dk_col(array(
                    dk_heading('3', 'h2', array('align' => 'center', 'title_color' => '#d2a30b')),
                    dk_heading('Téléchargez', 'h3', array('align' => 'center')),
                    dk_text('<p style="text-align: center; color: #666;">Recevez vos liens de téléchargement par email.</p>'),
                ), 33),
            )),
        ), array(
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        // CTA
        dk_container(array(
            dk_heading('Prêt à commencer ?', 'h2', array('align' => 'center', 'title_color' => '#ffffff')),
            dk_spacer(20),
            dk_button('Explorer les produits', '/tous-nos-produits/', array('align' => 'center')),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#1a1a1a',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

/**
 * Contact page Elementor template
 */
function digital_kappa_elementor_contact() {
    return array(
        // Hero Section
        dk_container(array(
            dk_heading('Contactez-nous', 'h1', array('align' => 'center')),
            dk_text('<p style="text-align: center; font-size: 18px; color: #666;">Notre équipe est là pour vous répondre.</p>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array('top' => '100', 'bottom' => '100', 'unit' => 'px', 'isLinked' => false),
        )),

        // Contact Info
        dk_container(array(
            dk_row(array(
                dk_col(array(
                    dk_heading('Informations de contact', 'h3'),
                    dk_spacer(20),
                    dk_text('<p><strong>Email</strong><br>contact@digitalkappa.com</p>'),
                    dk_spacer(15),
                    dk_text('<p><strong>Horaires</strong><br>Lundi - Vendredi : 9h - 18h</p>'),
                    dk_spacer(15),
                    dk_text('<p><strong>Délai de réponse</strong><br>Sous 24h ouvrées</p>'),
                ), 40),
                dk_col(array(
                    dk_heading('Envoyez-nous un message', 'h3'),
                    dk_spacer(20),
                    dk_text('<p style="color: #666;">Utilisez le formulaire ci-dessous pour nous contacter.</p>'),
                    dk_text('<p style="color: #999; font-style: italic;">[Ajoutez un widget de formulaire ici]</p>'),
                ), 60),
            )),
        ), array(
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

/**
 * All Products page Elementor template
 */
function digital_kappa_elementor_all_products() {
    return array(
        // Hero Section
        dk_container(array(
            dk_heading('Tous nos produits', 'h1', array('align' => 'center')),
            dk_text('<p style="text-align: center; font-size: 18px; color: #666;">Découvrez notre sélection complète de produits digitaux premium.</p>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array('top' => '100', 'bottom' => '100', 'unit' => 'px', 'isLinked' => false),
        )),

        // Products Grid
        dk_container(array(
            dk_text('<p style="text-align: center; color: #999; padding: 60px 0;">[Les produits seront affichés ici via WooCommerce]</p>'),
        ), array(
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

/**
 * CGV page Elementor template
 */
function digital_kappa_elementor_cgv() {
    return array(
        // Hero Section
        dk_container(array(
            dk_heading('Conditions Générales de Vente', 'h1', array('align' => 'center')),
            dk_text('<p style="text-align: center; color: #666;">Dernière mise à jour : Janvier 2025</p>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        // Content
        dk_container(array(
            dk_heading('1. Objet', 'h2'),
            dk_text('<p style="color: #666; line-height: 1.8;">Les présentes CGV régissent les ventes de produits digitaux sur Digital Kappa.</p>'),
            dk_spacer(30),
            dk_heading('2. Produits', 'h2'),
            dk_text('<p style="color: #666; line-height: 1.8;">Digital Kappa propose des produits digitaux téléchargeables : applications, ebooks et templates.</p>'),
            dk_spacer(30),
            dk_heading('3. Prix', 'h2'),
            dk_text('<p style="color: #666; line-height: 1.8;">Les prix sont indiqués en euros TTC.</p>'),
            dk_spacer(30),
            dk_heading('4. Paiement', 'h2'),
            dk_text('<p style="color: #666; line-height: 1.8;">Le paiement s\'effectue via Stripe.</p>'),
            dk_spacer(30),
            dk_heading('5. Livraison', 'h2'),
            dk_text('<p style="color: #666; line-height: 1.8;">Les produits sont livrés par téléchargement immédiat après paiement.</p>'),
            dk_spacer(30),
            dk_heading('6. Droit de rétractation', 'h2'),
            dk_text('<p style="color: #666; line-height: 1.8;">Digital Kappa offre une garantie satisfait ou remboursé de 14 jours.</p>'),
        ), array(
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

/**
 * Privacy page Elementor template
 */
function digital_kappa_elementor_privacy() {
    return array(
        // Hero Section
        dk_container(array(
            dk_heading('Politique de confidentialité', 'h1', array('align' => 'center')),
            dk_text('<p style="text-align: center; color: #666;">Dernière mise à jour : Janvier 2025</p>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        // Content
        dk_container(array(
            dk_heading('1. Collecte des données', 'h2'),
            dk_text('<p style="color: #666; line-height: 1.8;">Nous collectons les données que vous nous fournissez lors de vos achats.</p>'),
            dk_spacer(30),
            dk_heading('2. Utilisation des données', 'h2'),
            dk_text('<p style="color: #666; line-height: 1.8;">Vos données sont utilisées pour traiter vos commandes et vous envoyer vos produits.</p>'),
            dk_spacer(30),
            dk_heading('3. Protection des données', 'h2'),
            dk_text('<p style="color: #666; line-height: 1.8;">Nous mettons en œuvre des mesures de sécurité appropriées pour protéger vos données.</p>'),
            dk_spacer(30),
            dk_heading('4. Vos droits', 'h2'),
            dk_text('<p style="color: #666; line-height: 1.8;">Conformément au RGPD, vous disposez des droits d\'accès, de rectification, et de suppression.</p>'),
        ), array(
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

/**
 * Mentions légales page Elementor template
 */
function digital_kappa_elementor_mentions_legales() {
    return array(
        // Hero Section
        dk_container(array(
            dk_heading('Mentions légales', 'h1', array('align' => 'center')),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        // Content
        dk_container(array(
            dk_heading('Éditeur du site', 'h2'),
            dk_text('<p style="color: #666; line-height: 1.8;"><strong>Digital Kappa</strong><br>Email : contact@digitalkappa.com</p>'),
            dk_spacer(30),
            dk_heading('Hébergement', 'h2'),
            dk_text('<p style="color: #666; line-height: 1.8;">[Nom de l\'hébergeur]</p>'),
            dk_spacer(30),
            dk_heading('Propriété intellectuelle', 'h2'),
            dk_text('<p style="color: #666; line-height: 1.8;">L\'ensemble du contenu de ce site est protégé par le droit d\'auteur.</p>'),
        ), array(
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

/**
 * Product Detail page Elementor template
 */
function digital_kappa_elementor_product_detail() {
    return array(
        // Product Section
        dk_container(array(
            dk_row(array(
                dk_col(array(
                    dk_image('https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80'),
                ), 50),
                dk_col(array(
                    dk_text('<span style="background: rgba(210, 163, 11, 0.1); color: #d2a30b; padding: 8px 16px; border-radius: 20px; font-size: 14px;">Template</span>'),
                    dk_spacer(15),
                    dk_heading('Dashboard Analytics Pro', 'h1'),
                    dk_text('<p style="color: #666; line-height: 1.8;">Un template complet pour créer des tableaux de bord analytiques professionnels.</p>'),
                    dk_spacer(20),
                    dk_heading('149 €', 'h2', array('title_color' => '#d2a30b')),
                    dk_spacer(20),
                    dk_button('Acheter maintenant', '/checkout/'),
                    dk_spacer(15),
                    dk_text('<p style="font-size: 14px; color: #999;">Garantie satisfait ou remboursé 14 jours</p>'),
                ), 50),
            )),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#f8f4ed',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        // Description
        dk_container(array(
            dk_heading('Description complète', 'h2'),
            dk_spacer(20),
            dk_text('<p style="color: #666; line-height: 1.8;">Dashboard Analytics Pro est un template premium pour créer des interfaces d\'analyse de données modernes.</p>'),
        ), array(
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),

        // Features
        dk_container(array(
            dk_heading('Fonctionnalités principales', 'h2'),
            dk_spacer(20),
            dk_text('<ul style="color: #666; line-height: 2;"><li>Plus de 50 composants prêts à l\'emploi</li><li>Design responsive</li><li>Mode sombre inclus</li><li>Documentation complète</li></ul>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#f8f4ed',
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

/**
 * Checkout page Elementor template
 */
function digital_kappa_elementor_checkout() {
    return array(
        // Checkout Section
        dk_container(array(
            dk_row(array(
                dk_col(array(
                    dk_heading('Finaliser votre achat', 'h1'),
                    dk_spacer(30),
                    dk_heading('Informations de contact', 'h3'),
                    dk_text('<p style="color: #999; font-style: italic;">[Le formulaire de paiement sera intégré ici via WooCommerce ou Stripe]</p>'),
                ), 60),
                dk_col(array(
                    dk_heading('Récapitulatif de commande', 'h3'),
                    dk_spacer(20),
                    dk_text('<div style="background: #fff; padding: 20px; border-radius: 8px; border: 1px solid #eee;"><p><strong>Dashboard Analytics Pro</strong></p><p style="color: #666;">149 €</p><hr style="margin: 15px 0;"><p><strong>Total : 149 €</strong></p></div>'),
                ), 40),
            )),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#f8f4ed',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}

/**
 * Confirmation page Elementor template
 */
function digital_kappa_elementor_confirmation() {
    return array(
        // Success Section
        dk_container(array(
            dk_text('<div style="text-align: center; font-size: 80px; color: #16a34a;">✓</div>'),
            dk_heading('Commande confirmée !', 'h1', array('align' => 'center')),
            dk_text('<p style="text-align: center; font-size: 18px; color: #666;">Merci pour votre achat. Votre commande a été traitée avec succès.</p>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),

        // Details
        dk_container(array(
            dk_row(array(
                dk_col(array(
                    dk_heading('Vos produits', 'h3'),
                    dk_text('<p style="color: #666;">Les liens de téléchargement ont été envoyés à votre adresse email.</p>'),
                    dk_spacer(20),
                    dk_button('Télécharger', '#'),
                ), 60),
                dk_col(array(
                    dk_heading('Récapitulatif', 'h3'),
                    dk_spacer(10),
                    dk_text('<div style="background: #fff; padding: 20px; border-radius: 8px; border: 1px solid #eee;"><p><strong>Commande n° :</strong> DK-123456</p><p><strong>Total :</strong> 149 €</p></div>'),
                ), 40),
            )),
        ), array(
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),

        // Next Steps
        dk_container(array(
            dk_heading('Prochaines étapes', 'h3'),
            dk_spacer(20),
            dk_text('<ol style="color: #666; line-height: 2;"><li><strong>Consultez votre email</strong></li><li><strong>Téléchargez vos produits</strong></li><li><strong>Commencez à utiliser</strong></li></ol>'),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#f8f4ed',
            'padding' => array('top' => '60', 'bottom' => '60', 'unit' => 'px', 'isLinked' => false),
        )),

        // CTA
        dk_container(array(
            dk_heading('Découvrez nos autres produits', 'h2', array('align' => 'center', 'title_color' => '#ffffff')),
            dk_spacer(20),
            dk_button('Voir tous les produits', '/tous-nos-produits/', array('align' => 'center')),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#1a1a1a',
            'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px', 'isLinked' => false),
        )),
    );
}
