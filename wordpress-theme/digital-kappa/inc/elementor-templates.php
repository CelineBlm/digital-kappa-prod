<?php
/**
 * Elementor Templates Data
 *
 * Contains the Elementor JSON data for each page template
 *
 * @package Digital_Kappa
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get Elementor template data for a specific page
 *
 * @param string $page_type The page type identifier
 * @return array Elementor data array
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
 * Generate unique ID for Elementor elements (7 characters)
 */
function dk_uid() {
    return substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789'), 0, 7);
}

/**
 * Create a section element
 */
function dk_section($elements, $settings = array()) {
    $default_settings = array(
        'layout' => 'boxed',
        'content_width' => array('unit' => 'px', 'size' => 1200),
    );

    return array(
        'id' => dk_uid(),
        'elType' => 'section',
        'settings' => array_merge($default_settings, $settings),
        'elements' => $elements,
        'isInner' => false,
    );
}

/**
 * Create a column element
 */
function dk_column($elements, $width = 100) {
    return array(
        'id' => dk_uid(),
        'elType' => 'column',
        'settings' => array(
            '_column_size' => $width,
            '_inline_size' => $width,
        ),
        'elements' => $elements,
        'isInner' => false,
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
    $default_settings = array(
        'editor' => $content,
    );

    return array(
        'id' => dk_uid(),
        'elType' => 'widget',
        'settings' => array_merge($default_settings, $settings),
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
        'button_type' => 'default',
        'background_color' => '#d2a30b',
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
    $default_settings = array(
        'image' => array(
            'url' => $url,
            'id' => '',
        ),
        'image_size' => 'full',
    );

    return array(
        'id' => dk_uid(),
        'elType' => 'widget',
        'settings' => array_merge($default_settings, $settings),
        'elements' => array(),
        'widgetType' => 'image',
    );
}

/**
 * Create a spacer widget
 */
function dk_spacer($size = 50) {
    return array(
        'id' => dk_uid(),
        'elType' => 'widget',
        'settings' => array(
            'space' => array(
                'unit' => 'px',
                'size' => $size,
            ),
        ),
        'elements' => array(),
        'widgetType' => 'spacer',
    );
}

/**
 * Create a divider widget
 */
function dk_divider($settings = array()) {
    return array(
        'id' => dk_uid(),
        'elType' => 'widget',
        'settings' => $settings,
        'elements' => array(),
        'widgetType' => 'divider',
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
        dk_section(array(
            dk_column(array(
                dk_heading('Marketplace de produits digitaux', 'h1', array(
                    'title_color' => '#1a1a1a',
                )),
                dk_text('<p style="font-size: 18px; color: #666; line-height: 1.8;">Découvrez une sélection de produits digitaux de qualité : applications mobiles, ebooks et templates pour booster votre productivité. Achat simple en un clic, téléchargement immédiat, accès à vie.</p>'),
                dk_spacer(20),
                dk_button('Explorer les produits', '/tous-nos-produits/'),
            ), 50),
            dk_column(array(
                dk_image('https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=800&q=80'),
            ), 50),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array(
                'unit' => 'px',
                'top' => '100',
                'right' => '0',
                'bottom' => '100',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // Benefits Section
        dk_section(array(
            dk_column(array(
                dk_heading('Simplicité', 'h4', array('align' => 'center')),
                dk_text('<p style="text-align: center;">Interface intuitive pour trouver rapidement le produit idéal</p>'),
            ), 25),
            dk_column(array(
                dk_heading('Fiabilité', 'h4', array('align' => 'center')),
                dk_text('<p style="text-align: center;">Produits testés et vérifiés avant chaque publication</p>'),
            ), 25),
            dk_column(array(
                dk_heading('Rapidité', 'h4', array('align' => 'center')),
                dk_text('<p style="text-align: center;">Accès instantané à vos achats immédiatement après paiement</p>'),
            ), 25),
            dk_column(array(
                dk_heading('Qualité', 'h4', array('align' => 'center')),
                dk_text('<p style="text-align: center;">Sélection rigoureuse de produits premium uniquement</p>'),
            ), 25),
        ), array(
            'padding' => array(
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // Products Section
        dk_section(array(
            dk_column(array(
                dk_heading('Nos produits populaires', 'h2', array('align' => 'center')),
                dk_text('<p style="text-align: center; color: #666;">Découvrez notre sélection de produits digitaux : applications, ebooks et templates de qualité professionnelle</p>'),
                dk_spacer(40),
                dk_text('<p style="text-align: center; color: #999;">[Les produits seront affichés ici via WooCommerce]</p>'),
            ), 100),
        ), array(
            'padding' => array(
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // Categories Section
        dk_section(array(
            dk_column(array(
                dk_heading('Catégories de produits', 'h2', array('align' => 'center')),
                dk_text('<p style="text-align: center; color: #666;">Explorez notre sélection organisée par types de produits digitaux</p>'),
            ), 100),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#f8f4ed',
            'padding' => array(
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // CTA Section
        dk_section(array(
            dk_column(array(
                dk_heading('Prêt à découvrir nos produits digitaux ?', 'h2', array(
                    'align' => 'center',
                    'title_color' => '#ffffff',
                )),
                dk_text('<p style="text-align: center; color: rgba(255,255,255,0.8);">Explorez nos meilleures ressources et commencez dès aujourd\'hui à accélérer vos projets.</p>'),
                dk_spacer(20),
                dk_button('Explorer le catalogue', '/tous-nos-produits/', array('align' => 'center')),
            ), 100),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#1a1a1a',
            'padding' => array(
                'unit' => 'px',
                'top' => '100',
                'right' => '0',
                'bottom' => '100',
                'left' => '0',
                'isLinked' => false,
            ),
        )),
    );
}

/**
 * About page Elementor template
 */
function digital_kappa_elementor_about() {
    return array(
        // Hero Section
        dk_section(array(
            dk_column(array(
                dk_text('<span style="background: rgba(210, 163, 11, 0.1); color: #d2a30b; padding: 8px 16px; border-radius: 20px; font-size: 14px; display: inline-block;">À propos de nous</span>'),
                dk_spacer(20),
                dk_heading('Digital Kappa, votre partenaire digital', 'h1'),
                dk_text('<p style="font-size: 18px; color: #666; line-height: 1.8;">Nous proposons des ressources numériques simples, efficaces et de qualité pour aider les créateurs, entrepreneurs et passionnés à accomplir plus en moins de temps.</p>'),
            ), 100),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array(
                'unit' => 'px',
                'top' => '100',
                'right' => '0',
                'bottom' => '100',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // Stats Section
        dk_section(array(
            dk_column(array(
                dk_heading('2026', 'h2', array('align' => 'center', 'title_color' => '#d2a30b')),
                dk_text('<p style="text-align: center; color: #666;">Année de lancement</p>'),
            ), 25),
            dk_column(array(
                dk_heading('100%', 'h2', array('align' => 'center', 'title_color' => '#d2a30b')),
                dk_text('<p style="text-align: center; color: #666;">Engagement qualité</p>'),
            ), 25),
            dk_column(array(
                dk_heading('14 jours', 'h2', array('align' => 'center', 'title_color' => '#d2a30b')),
                dk_text('<p style="text-align: center; color: #666;">Garantie satisfait ou remboursé</p>'),
            ), 25),
            dk_column(array(
                dk_heading('24h', 'h2', array('align' => 'center', 'title_color' => '#d2a30b')),
                dk_text('<p style="text-align: center; color: #666;">Support réactif</p>'),
            ), 25),
        ), array(
            'padding' => array(
                'unit' => 'px',
                'top' => '60',
                'right' => '0',
                'bottom' => '60',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // Notre Histoire Section
        dk_section(array(
            dk_column(array(
                dk_heading('Notre histoire', 'h2'),
                dk_text('<p style="font-size: 16px; line-height: 1.8;">Digital Kappa est né d\'une idée simple : rendre accessible des ressources numériques de qualité à tous ceux qui veulent gagner du temps et de l\'efficacité dans leurs projets.</p><p style="font-size: 16px; line-height: 1.8;">En tant qu\'entrepreneurs nous-mêmes, nous avons souvent cherché des outils fiables, des templates bien conçus ou des applications prêtes à l\'emploi. Mais entre les produits de mauvaise qualité, les descriptions trompeuses et les plateformes peu fiables, trouver la perle rare était un vrai parcours du combattant.</p>'),
            ), 50),
            dk_column(array(
                dk_image('https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&q=80'),
            ), 50),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#f8f4ed',
            'padding' => array(
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // Nos Valeurs Section
        dk_section(array(
            dk_column(array(
                dk_heading('Nos valeurs', 'h2', array('align' => 'center')),
                dk_spacer(40),
            ), 100),
        ), array(
            'padding' => array(
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false,
            ),
        )),
    );
}

/**
 * FAQ page Elementor template
 */
function digital_kappa_elementor_faq() {
    return array(
        // Hero Section
        dk_section(array(
            dk_column(array(
                dk_heading('Questions fréquentes', 'h1', array('align' => 'center')),
                dk_text('<p style="text-align: center; font-size: 18px; color: #666;">Retrouvez les réponses aux questions les plus fréquentes. Si vous ne trouvez pas la réponse, n\'hésitez pas à nous contacter.</p>'),
            ), 100),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array(
                'unit' => 'px',
                'top' => '100',
                'right' => '0',
                'bottom' => '100',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // FAQ Content - General
        dk_section(array(
            dk_column(array(
                dk_heading('Général', 'h3'),
                dk_spacer(20),
                dk_text('<h4 style="margin-bottom: 10px;">Qu\'est-ce que Digital Kappa ?</h4><p style="color: #666; margin-bottom: 30px;">Digital Kappa est une marketplace française de produits digitaux premium. Nous proposons des applications mobiles, des ebooks et des templates soigneusement sélectionnés pour leur qualité.</p>'),
                dk_text('<h4 style="margin-bottom: 10px;">Comment fonctionne l\'achat ?</h4><p style="color: #666;">L\'achat est simple : choisissez votre produit, procédez au paiement sécurisé via Stripe, et recevez immédiatement vos liens de téléchargement par email.</p>'),
            ), 100),
        ), array(
            'padding' => array(
                'unit' => 'px',
                'top' => '60',
                'right' => '0',
                'bottom' => '60',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // FAQ Content - Paiement
        dk_section(array(
            dk_column(array(
                dk_heading('Paiement', 'h3'),
                dk_spacer(20),
                dk_text('<h4 style="margin-bottom: 10px;">Quels moyens de paiement acceptez-vous ?</h4><p style="color: #666; margin-bottom: 30px;">Nous acceptons les cartes bancaires (Visa, Mastercard, American Express) via notre partenaire de paiement sécurisé Stripe.</p>'),
                dk_text('<h4 style="margin-bottom: 10px;">Le paiement est-il sécurisé ?</h4><p style="color: #666;">Oui, tous les paiements sont 100% sécurisés. Nous utilisons Stripe, un leader mondial du paiement en ligne, qui garantit la protection de vos données bancaires.</p>'),
            ), 100),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#f8f4ed',
            'padding' => array(
                'unit' => 'px',
                'top' => '60',
                'right' => '0',
                'bottom' => '60',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // CTA Section
        dk_section(array(
            dk_column(array(
                dk_heading('Vous avez d\'autres questions ?', 'h2', array('align' => 'center', 'title_color' => '#ffffff')),
                dk_text('<p style="text-align: center; color: rgba(255,255,255,0.8);">Notre équipe est disponible pour répondre à toutes vos questions.</p>'),
                dk_spacer(20),
                dk_button('Nous contacter', '/contact/', array('align' => 'center')),
            ), 100),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#1a1a1a',
            'padding' => array(
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false,
            ),
        )),
    );
}

/**
 * How It Works page Elementor template
 */
function digital_kappa_elementor_how_it_works() {
    return array(
        // Hero Section
        dk_section(array(
            dk_column(array(
                dk_text('<span style="background: rgba(210, 163, 11, 0.1); color: #d2a30b; padding: 8px 16px; border-radius: 20px; font-size: 14px; display: inline-block;">Simple et rapide</span>'),
                dk_spacer(20),
                dk_heading('Comment ça marche ?', 'h1', array('align' => 'center')),
                dk_text('<p style="text-align: center; font-size: 18px; color: #666;">Découvrez comment acheter et télécharger vos produits digitaux en quelques minutes.</p>'),
            ), 100),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array(
                'unit' => 'px',
                'top' => '100',
                'right' => '0',
                'bottom' => '100',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // Steps Section
        dk_section(array(
            dk_column(array(
                dk_heading('1', 'h2', array('align' => 'center', 'title_color' => '#d2a30b')),
                dk_heading('Choisissez', 'h3', array('align' => 'center')),
                dk_text('<p style="text-align: center; color: #666;">Parcourez notre catalogue et sélectionnez le produit qui correspond à vos besoins.</p>'),
            ), 33),
            dk_column(array(
                dk_heading('2', 'h2', array('align' => 'center', 'title_color' => '#d2a30b')),
                dk_heading('Payez', 'h3', array('align' => 'center')),
                dk_text('<p style="text-align: center; color: #666;">Procédez au paiement sécurisé via Stripe en quelques clics.</p>'),
            ), 33),
            dk_column(array(
                dk_heading('3', 'h2', array('align' => 'center', 'title_color' => '#d2a30b')),
                dk_heading('Téléchargez', 'h3', array('align' => 'center')),
                dk_text('<p style="text-align: center; color: #666;">Recevez instantanément vos liens de téléchargement par email.</p>'),
            ), 33),
        ), array(
            'padding' => array(
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // CTA Section
        dk_section(array(
            dk_column(array(
                dk_heading('Prêt à commencer ?', 'h2', array('align' => 'center', 'title_color' => '#ffffff')),
                dk_spacer(20),
                dk_button('Explorer les produits', '/tous-nos-produits/', array('align' => 'center')),
            ), 100),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#1a1a1a',
            'padding' => array(
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false,
            ),
        )),
    );
}

/**
 * Contact page Elementor template
 */
function digital_kappa_elementor_contact() {
    return array(
        // Hero Section
        dk_section(array(
            dk_column(array(
                dk_heading('Contactez-nous', 'h1', array('align' => 'center')),
                dk_text('<p style="text-align: center; font-size: 18px; color: #666;">Une question, une suggestion ou besoin d\'aide ? Notre équipe est là pour vous répondre.</p>'),
            ), 100),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array(
                'unit' => 'px',
                'top' => '100',
                'right' => '0',
                'bottom' => '100',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // Contact Info + Form
        dk_section(array(
            dk_column(array(
                dk_heading('Informations de contact', 'h3'),
                dk_spacer(20),
                dk_text('<p><strong>Email</strong><br><span style="color: #666;">contact@digitalkappa.com</span></p>'),
                dk_spacer(15),
                dk_text('<p><strong>Horaires</strong><br><span style="color: #666;">Lundi - Vendredi : 9h - 18h</span></p>'),
                dk_spacer(15),
                dk_text('<p><strong>Délai de réponse</strong><br><span style="color: #666;">Sous 24h ouvrées</span></p>'),
            ), 40),
            dk_column(array(
                dk_heading('Envoyez-nous un message', 'h3'),
                dk_spacer(20),
                dk_text('<p style="color: #666;">Utilisez le formulaire ci-dessous pour nous contacter. Nous vous répondrons dans les plus brefs délais.</p>'),
                dk_spacer(20),
                dk_text('<p style="color: #999; font-style: italic;">[Ajoutez un widget de formulaire de contact ici avec Elementor ou WPForms]</p>'),
            ), 60),
        ), array(
            'padding' => array(
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false,
            ),
        )),
    );
}

/**
 * All Products page Elementor template
 */
function digital_kappa_elementor_all_products() {
    return array(
        // Hero Section
        dk_section(array(
            dk_column(array(
                dk_heading('Tous nos produits', 'h1', array('align' => 'center')),
                dk_text('<p style="text-align: center; font-size: 18px; color: #666;">Découvrez notre sélection complète de produits digitaux premium : applications mobiles, ebooks et templates professionnels.</p>'),
            ), 100),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array(
                'unit' => 'px',
                'top' => '100',
                'right' => '0',
                'bottom' => '100',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // Products Grid
        dk_section(array(
            dk_column(array(
                dk_text('<p style="text-align: center; color: #999; padding: 60px 0;">[Les produits seront affichés ici via WooCommerce ou un shortcode personnalisé]</p>'),
            ), 100),
        ), array(
            'padding' => array(
                'unit' => 'px',
                'top' => '60',
                'right' => '0',
                'bottom' => '60',
                'left' => '0',
                'isLinked' => false,
            ),
        )),
    );
}

/**
 * CGV page Elementor template
 */
function digital_kappa_elementor_cgv() {
    return array(
        // Hero Section
        dk_section(array(
            dk_column(array(
                dk_heading('Conditions Générales de Vente', 'h1', array('align' => 'center')),
                dk_text('<p style="text-align: center; color: #666;">Dernière mise à jour : Janvier 2025</p>'),
            ), 100),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array(
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // Content
        dk_section(array(
            dk_column(array(
                dk_heading('1. Objet', 'h2'),
                dk_text('<p style="color: #666; line-height: 1.8;">Les présentes Conditions Générales de Vente (CGV) régissent les ventes de produits digitaux effectuées sur le site Digital Kappa. Toute commande implique l\'acceptation sans réserve des présentes CGV.</p>'),
                dk_spacer(30),

                dk_heading('2. Produits', 'h2'),
                dk_text('<p style="color: #666; line-height: 1.8;">Digital Kappa propose des produits digitaux téléchargeables : applications mobiles, ebooks et templates. Les caractéristiques essentielles des produits sont présentées sur chaque fiche produit.</p>'),
                dk_spacer(30),

                dk_heading('3. Prix', 'h2'),
                dk_text('<p style="color: #666; line-height: 1.8;">Les prix sont indiqués en euros TTC. Digital Kappa se réserve le droit de modifier ses prix à tout moment. Les produits sont facturés sur la base des tarifs en vigueur au moment de la validation de la commande.</p>'),
                dk_spacer(30),

                dk_heading('4. Paiement', 'h2'),
                dk_text('<p style="color: #666; line-height: 1.8;">Le paiement s\'effectue en ligne par carte bancaire via notre prestataire de paiement sécurisé Stripe. Le débit est effectué au moment de la validation de la commande.</p>'),
                dk_spacer(30),

                dk_heading('5. Livraison', 'h2'),
                dk_text('<p style="color: #666; line-height: 1.8;">Les produits digitaux sont livrés par téléchargement immédiat après paiement. Un email de confirmation contenant les liens de téléchargement est envoyé à l\'adresse email fournie lors de la commande.</p>'),
                dk_spacer(30),

                dk_heading('6. Droit de rétractation', 'h2'),
                dk_text('<p style="color: #666; line-height: 1.8;">Conformément à l\'article L221-28 du Code de la consommation, le droit de rétractation ne peut être exercé pour les contenus numériques fournis sur un support immatériel dont l\'exécution a commencé avec l\'accord du consommateur.</p><p style="color: #666; line-height: 1.8;">Toutefois, Digital Kappa offre une garantie satisfait ou remboursé de 14 jours. Contactez-nous si vous n\'êtes pas satisfait de votre achat.</p>'),
            ), 100),
        ), array(
            'padding' => array(
                'unit' => 'px',
                'top' => '60',
                'right' => '0',
                'bottom' => '60',
                'left' => '0',
                'isLinked' => false,
            ),
        )),
    );
}

/**
 * Privacy page Elementor template
 */
function digital_kappa_elementor_privacy() {
    return array(
        // Hero Section
        dk_section(array(
            dk_column(array(
                dk_heading('Politique de confidentialité', 'h1', array('align' => 'center')),
                dk_text('<p style="text-align: center; color: #666;">Dernière mise à jour : Janvier 2025</p>'),
            ), 100),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array(
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // Content
        dk_section(array(
            dk_column(array(
                dk_heading('1. Collecte des données', 'h2'),
                dk_text('<p style="color: #666; line-height: 1.8;">Nous collectons les données que vous nous fournissez directement : nom, prénom, adresse email lors de vos achats ou de votre inscription à notre newsletter.</p>'),
                dk_spacer(30),

                dk_heading('2. Utilisation des données', 'h2'),
                dk_text('<p style="color: #666; line-height: 1.8;">Vos données sont utilisées pour :</p><ul style="color: #666; line-height: 1.8;"><li>Traiter vos commandes et vous envoyer vos produits</li><li>Vous contacter concernant vos achats</li><li>Vous envoyer notre newsletter (avec votre consentement)</li><li>Améliorer nos services</li></ul>'),
                dk_spacer(30),

                dk_heading('3. Protection des données', 'h2'),
                dk_text('<p style="color: #666; line-height: 1.8;">Nous mettons en œuvre des mesures de sécurité appropriées pour protéger vos données personnelles contre tout accès non autorisé, modification, divulgation ou destruction.</p>'),
                dk_spacer(30),

                dk_heading('4. Vos droits', 'h2'),
                dk_text('<p style="color: #666; line-height: 1.8;">Conformément au RGPD, vous disposez des droits suivants :</p><ul style="color: #666; line-height: 1.8;"><li>Droit d\'accès à vos données</li><li>Droit de rectification</li><li>Droit à l\'effacement</li><li>Droit à la portabilité</li><li>Droit d\'opposition</li></ul><p style="color: #666; line-height: 1.8;">Pour exercer ces droits, contactez-nous à : contact@digitalkappa.com</p>'),
            ), 100),
        ), array(
            'padding' => array(
                'unit' => 'px',
                'top' => '60',
                'right' => '0',
                'bottom' => '60',
                'left' => '0',
                'isLinked' => false,
            ),
        )),
    );
}

/**
 * Mentions légales page Elementor template
 */
function digital_kappa_elementor_mentions_legales() {
    return array(
        // Hero Section
        dk_section(array(
            dk_column(array(
                dk_heading('Mentions légales', 'h1', array('align' => 'center')),
            ), 100),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array(
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // Content
        dk_section(array(
            dk_column(array(
                dk_heading('Éditeur du site', 'h2'),
                dk_text('<p style="color: #666; line-height: 1.8;"><strong>Digital Kappa</strong><br>Adresse : [Votre adresse]<br>Email : contact@digitalkappa.com<br>SIRET : [Votre numéro SIRET]</p>'),
                dk_spacer(30),

                dk_heading('Hébergement', 'h2'),
                dk_text('<p style="color: #666; line-height: 1.8;">Le site est hébergé par :<br>[Nom de l\'hébergeur]<br>[Adresse de l\'hébergeur]</p>'),
                dk_spacer(30),

                dk_heading('Propriété intellectuelle', 'h2'),
                dk_text('<p style="color: #666; line-height: 1.8;">L\'ensemble du contenu de ce site (textes, images, vidéos, logos) est protégé par le droit d\'auteur. Toute reproduction, même partielle, est interdite sans autorisation préalable.</p>'),
            ), 100),
        ), array(
            'padding' => array(
                'unit' => 'px',
                'top' => '60',
                'right' => '0',
                'bottom' => '60',
                'left' => '0',
                'isLinked' => false,
            ),
        )),
    );
}

/**
 * Product Detail page Elementor template
 */
function digital_kappa_elementor_product_detail() {
    return array(
        // Product Section
        dk_section(array(
            dk_column(array(
                dk_image('https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80'),
            ), 50),
            dk_column(array(
                dk_text('<span style="background: rgba(210, 163, 11, 0.1); color: #d2a30b; padding: 8px 16px; border-radius: 20px; font-size: 14px; display: inline-block;">Template</span>'),
                dk_spacer(15),
                dk_heading('Dashboard Analytics Pro', 'h1'),
                dk_text('<p style="font-size: 16px; color: #666; line-height: 1.8;">Un template complet pour créer des tableaux de bord analytiques professionnels. Inclut plus de 50 composants, graphiques et widgets prêts à l\'emploi.</p>'),
                dk_spacer(20),
                dk_heading('149 €', 'h2', array('title_color' => '#d2a30b')),
                dk_spacer(20),
                dk_button('Acheter maintenant', '/checkout/'),
                dk_spacer(15),
                dk_text('<p style="font-size: 14px; color: #999;">Garantie satisfait ou remboursé 14 jours</p>'),
            ), 50),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#f8f4ed',
            'padding' => array(
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // Description Section
        dk_section(array(
            dk_column(array(
                dk_heading('Description complète', 'h2'),
                dk_spacer(20),
                dk_text('<p style="color: #666; line-height: 1.8;">Dashboard Analytics Pro est un template premium conçu pour les professionnels qui souhaitent créer des interfaces d\'analyse de données modernes et performantes.</p><p style="color: #666; line-height: 1.8;">Ce template inclut tous les composants nécessaires pour construire un tableau de bord complet : graphiques, tableaux, cartes de statistiques, formulaires, et bien plus encore.</p>'),
            ), 100),
        ), array(
            'padding' => array(
                'unit' => 'px',
                'top' => '60',
                'right' => '0',
                'bottom' => '60',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // Features Section
        dk_section(array(
            dk_column(array(
                dk_heading('Fonctionnalités principales', 'h2'),
                dk_spacer(20),
                dk_text('<ul style="color: #666; line-height: 2;"><li>Plus de 50 composants prêts à l\'emploi</li><li>Design responsive (mobile, tablette, desktop)</li><li>Mode sombre inclus</li><li>Graphiques interactifs</li><li>Documentation complète</li><li>Mises à jour gratuites à vie</li></ul>'),
            ), 100),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#f8f4ed',
            'padding' => array(
                'unit' => 'px',
                'top' => '60',
                'right' => '0',
                'bottom' => '60',
                'left' => '0',
                'isLinked' => false,
            ),
        )),
    );
}

/**
 * Checkout page Elementor template
 */
function digital_kappa_elementor_checkout() {
    return array(
        // Checkout Section
        dk_section(array(
            dk_column(array(
                dk_heading('Finaliser votre achat', 'h1'),
                dk_spacer(30),
                dk_heading('Informations de contact', 'h3'),
                dk_text('<p style="color: #999; font-style: italic;">[Le formulaire de paiement sera intégré ici via WooCommerce ou Stripe]</p>'),
            ), 60),
            dk_column(array(
                dk_heading('Récapitulatif de commande', 'h3'),
                dk_spacer(20),
                dk_text('<div style="background: #fff; padding: 20px; border-radius: 8px; border: 1px solid #eee;"><p style="margin-bottom: 10px;"><strong>Dashboard Analytics Pro</strong></p><p style="color: #666;">149 €</p><hr style="margin: 15px 0; border: none; border-top: 1px solid #eee;"><p><strong>Total : 149 €</strong></p></div>'),
            ), 40),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#f8f4ed',
            'padding' => array(
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false,
            ),
        )),
    );
}

/**
 * Confirmation page Elementor template
 */
function digital_kappa_elementor_confirmation() {
    return array(
        // Success Section
        dk_section(array(
            dk_column(array(
                dk_text('<div style="text-align: center; font-size: 80px; color: #16a34a;">✓</div>'),
                dk_heading('Commande confirmée !', 'h1', array('align' => 'center')),
                dk_text('<p style="text-align: center; font-size: 18px; color: #666;">Merci pour votre achat. Votre commande a été traitée avec succès.</p>'),
            ), 100),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
            'padding' => array(
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // Details Section
        dk_section(array(
            dk_column(array(
                dk_heading('Vos produits', 'h3'),
                dk_text('<p style="color: #666;">Les liens de téléchargement ont été envoyés à votre adresse email.</p>'),
                dk_spacer(20),
                dk_button('Télécharger', '#'),
            ), 60),
            dk_column(array(
                dk_heading('Récapitulatif', 'h3'),
                dk_spacer(10),
                dk_text('<div style="background: #fff; padding: 20px; border-radius: 8px; border: 1px solid #eee;"><p><strong>Commande n° :</strong> DK-123456</p><p><strong>Date :</strong> [Date]</p><p><strong>Total :</strong> 149 €</p></div>'),
            ), 40),
        ), array(
            'padding' => array(
                'unit' => 'px',
                'top' => '60',
                'right' => '0',
                'bottom' => '60',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // Next Steps Section
        dk_section(array(
            dk_column(array(
                dk_heading('Prochaines étapes', 'h3'),
                dk_spacer(20),
                dk_text('<ol style="color: #666; line-height: 2;"><li><strong>Consultez votre email</strong> - Un email de confirmation vous a été envoyé</li><li><strong>Téléchargez vos produits</strong> - Utilisez les liens de téléchargement</li><li><strong>Commencez à utiliser</strong> - Suivez la documentation incluse</li></ol>'),
            ), 100),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#f8f4ed',
            'padding' => array(
                'unit' => 'px',
                'top' => '60',
                'right' => '0',
                'bottom' => '60',
                'left' => '0',
                'isLinked' => false,
            ),
        )),

        // CTA Section
        dk_section(array(
            dk_column(array(
                dk_heading('Découvrez nos autres produits', 'h2', array('align' => 'center', 'title_color' => '#ffffff')),
                dk_spacer(20),
                dk_button('Voir tous les produits', '/tous-nos-produits/', array('align' => 'center')),
            ), 100),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#1a1a1a',
            'padding' => array(
                'unit' => 'px',
                'top' => '80',
                'right' => '0',
                'bottom' => '80',
                'left' => '0',
                'isLinked' => false,
            ),
        )),
    );
}
