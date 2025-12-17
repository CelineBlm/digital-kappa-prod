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
 * Helper function to create a section
 */
function dk_section($id, $content, $settings = array()) {
    $default_settings = array(
        'background_background' => '',
        'padding' => array('top' => '80', 'bottom' => '80', 'unit' => 'px'),
    );

    return array(
        'id' => $id,
        'elType' => 'section',
        'settings' => array_merge($default_settings, $settings),
        'elements' => $content,
    );
}

/**
 * Helper function to create a column
 */
function dk_column($id, $content, $size = 100) {
    return array(
        'id' => $id,
        'elType' => 'column',
        'settings' => array('_column_size' => $size),
        'elements' => $content,
    );
}

/**
 * Helper function to create a heading widget
 */
function dk_heading($id, $title, $settings = array()) {
    $default_settings = array(
        'title' => $title,
        'header_size' => 'h2',
        'align' => 'left',
    );

    return array(
        'id' => $id,
        'elType' => 'widget',
        'widgetType' => 'heading',
        'settings' => array_merge($default_settings, $settings),
    );
}

/**
 * Helper function to create a text widget
 */
function dk_text($id, $content, $settings = array()) {
    return array(
        'id' => $id,
        'elType' => 'widget',
        'widgetType' => 'text-editor',
        'settings' => array_merge(array('editor' => $content), $settings),
    );
}

/**
 * Helper function to create a button widget
 */
function dk_button($id, $text, $link = '#', $settings = array()) {
    $default_settings = array(
        'text' => $text,
        'link' => array('url' => $link),
        'button_type' => 'default',
    );

    return array(
        'id' => $id,
        'elType' => 'widget',
        'widgetType' => 'button',
        'settings' => array_merge($default_settings, $settings),
    );
}

/**
 * Helper function to create an image widget
 */
function dk_image($id, $url, $settings = array()) {
    return array(
        'id' => $id,
        'elType' => 'widget',
        'widgetType' => 'image',
        'settings' => array_merge(array(
            'image' => array('url' => $url),
        ), $settings),
    );
}

/**
 * Generate unique ID for Elementor elements
 */
function dk_uid() {
    return substr(md5(uniqid(mt_rand(), true)), 0, 7);
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
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Marketplace de<br><span style="color: #d2a30b; font-style: italic;">produits digitaux</span>', array(
                    'header_size' => 'h1',
                    'align' => 'left',
                )),
                dk_text(dk_uid(), '<p>Découvrez une sélection de produits digitaux de qualité : applications mobiles, ebooks et templates pour booster votre productivité. Achat simple en un clic, téléchargement immédiat, accès à vie.</p>'),
                dk_button(dk_uid(), 'Explorer les produits', '/tous-nos-produits/', array(
                    'button_type' => 'default',
                    'background_color' => '#d2a30b',
                )),
            ), 50),
            dk_column(dk_uid(), array(
                dk_image(dk_uid(), 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=800&q=80'),
            ), 50),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#fdf8f0',
        )),

        // Benefits Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Simplicité', array('header_size' => 'h4')),
                dk_text(dk_uid(), '<p>Interface intuitive pour trouver rapidement le produit idéal</p>'),
            ), 25),
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Fiabilité', array('header_size' => 'h4')),
                dk_text(dk_uid(), '<p>Produits testés et vérifiés avant chaque publication</p>'),
            ), 25),
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Rapidité', array('header_size' => 'h4')),
                dk_text(dk_uid(), '<p>Accès instantané à vos achats immédiatement après paiement</p>'),
            ), 25),
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Qualité', array('header_size' => 'h4')),
                dk_text(dk_uid(), '<p>Sélection rigoureuse de produits premium uniquement</p>'),
            ), 25),
        )),

        // Products Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Nos produits populaires', array('align' => 'center')),
                dk_text(dk_uid(), '<p style="text-align: center;">Découvrez notre sélection de produits digitaux : applications, ebooks et templates de qualité professionnelle pour vos projets</p>'),
            ), 100),
        )),

        // Categories Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Catégories de produits', array('align' => 'center')),
                dk_text(dk_uid(), '<p style="text-align: center;">Explorez notre sélection organisée par types de produits digitaux dans trois catégories principales</p>'),
            ), 100),
        ), array('background_color' => '#f8f4ed')),

        // Why Choose Us Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Pourquoi choisir Digital Kappa', array('align' => 'center')),
                dk_text(dk_uid(), '<p style="text-align: center;">En tant que marketplace de confiance depuis 2024, nous nous engageons à offrir une expérience d\'achat de qualité</p>'),
            ), 100),
        )),

        // CTA Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Prêt à découvrir nos produits digitaux ?', array(
                    'align' => 'center',
                    'title_color' => '#ffffff',
                )),
                dk_text(dk_uid(), '<p style="text-align: center; color: #ffffff;">Explorez nos meilleures ressources et commencez dès aujourd\'hui à accélérer vos projets avec Digital Kappa.</p>'),
                dk_button(dk_uid(), 'Explorer le catalogue', '/tous-nos-produits/', array(
                    'align' => 'center',
                )),
            ), 100),
        ), array(
            'background_background' => 'classic',
            'background_color' => '#1a1a1a',
        )),
    );
}

/**
 * About page Elementor template
 */
function digital_kappa_elementor_about() {
    return array(
        // Hero Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_text(dk_uid(), '<span style="background: rgba(210, 163, 11, 0.1); color: #d2a30b; padding: 4px 12px; border-radius: 20px; font-size: 14px;">À propos de nous</span>'),
                dk_heading(dk_uid(), 'Digital Kappa, votre<br>partenaire digital', array('header_size' => 'h1')),
                dk_text(dk_uid(), '<p>Nous proposons des ressources numériques simples, efficaces et de qualité pour aider les créateurs, entrepreneurs et passionnés à accomplir plus en moins de temps.</p>'),
            ), 100),
        ), array('background_color' => '#fdf8f0')),

        // Stats Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), '2026', array('align' => 'center', 'header_size' => 'h2')),
                dk_text(dk_uid(), '<p style="text-align: center;">Année de lancement</p>'),
            ), 25),
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), '100%', array('align' => 'center', 'header_size' => 'h2')),
                dk_text(dk_uid(), '<p style="text-align: center;">Engagement qualité</p>'),
            ), 25),
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), '14 jours', array('align' => 'center', 'header_size' => 'h2')),
                dk_text(dk_uid(), '<p style="text-align: center;">Garantie satisfait ou remboursé</p>'),
            ), 25),
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), '24h', array('align' => 'center', 'header_size' => 'h2')),
                dk_text(dk_uid(), '<p style="text-align: center;">Support réactif</p>'),
            ), 25),
        )),

        // Notre Histoire Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Notre histoire'),
                dk_text(dk_uid(), '<p>Digital Kappa est né d\'une idée simple : rendre accessible des ressources numériques de qualité à tous ceux qui veulent gagner du temps et de l\'efficacité dans leurs projets.</p><p>En tant qu\'entrepreneurs nous-mêmes, nous avons souvent cherché des outils fiables, des templates bien conçus ou des applications prêtes à l\'emploi. Mais entre les produits de mauvaise qualité, les descriptions trompeuses et les plateformes peu fiables, trouver la perle rare était un vrai parcours du combattant.</p>'),
            ), 50),
            dk_column(dk_uid(), array(
                dk_image(dk_uid(), 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&q=80'),
            ), 50),
        ), array('background_color' => '#f8f4ed')),

        // Nos Valeurs Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Nos valeurs', array('align' => 'center')),
            ), 100),
        )),
    );
}

/**
 * FAQ page Elementor template
 */
function digital_kappa_elementor_faq() {
    return array(
        // Hero Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Questions fréquentes', array('header_size' => 'h1', 'align' => 'center')),
                dk_text(dk_uid(), '<p style="text-align: center;">Retrouvez les réponses aux questions les plus fréquentes posées par nos clients. Si vous ne trouvez pas la réponse à votre question, n\'hésitez pas à nous contacter.</p>'),
            ), 100),
        ), array('background_color' => '#fdf8f0')),

        // FAQ Content
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Général', array('header_size' => 'h3')),
                dk_text(dk_uid(), '<h4>Qu\'est-ce que Digital Kappa ?</h4><p>Digital Kappa est une marketplace française de produits digitaux premium. Nous proposons des applications mobiles, des ebooks et des templates soigneusement sélectionnés pour leur qualité.</p>'),
                dk_text(dk_uid(), '<h4>Comment fonctionne l\'achat ?</h4><p>L\'achat est simple : choisissez votre produit, procédez au paiement sécurisé via Stripe, et recevez immédiatement vos liens de téléchargement par email.</p>'),
            ), 100),
        )),

        // Paiement Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Paiement', array('header_size' => 'h3')),
                dk_text(dk_uid(), '<h4>Quels moyens de paiement acceptez-vous ?</h4><p>Nous acceptons les cartes bancaires (Visa, Mastercard, American Express) via notre partenaire de paiement sécurisé Stripe.</p>'),
                dk_text(dk_uid(), '<h4>Le paiement est-il sécurisé ?</h4><p>Oui, tous les paiements sont 100% sécurisés. Nous utilisons Stripe, un leader mondial du paiement en ligne, qui garantit la protection de vos données bancaires.</p>'),
            ), 100),
        ), array('background_color' => '#f8f4ed')),

        // CTA Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Vous avez d\'autres questions ?', array('align' => 'center', 'title_color' => '#ffffff')),
                dk_text(dk_uid(), '<p style="text-align: center; color: #ffffff;">Notre équipe est disponible pour répondre à toutes vos questions.</p>'),
                dk_button(dk_uid(), 'Nous contacter', '/contact/', array('align' => 'center')),
            ), 100),
        ), array('background_color' => '#1a1a1a')),
    );
}

/**
 * How It Works page Elementor template
 */
function digital_kappa_elementor_how_it_works() {
    return array(
        // Hero Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_text(dk_uid(), '<span style="background: rgba(210, 163, 11, 0.1); color: #d2a30b; padding: 4px 12px; border-radius: 20px; font-size: 14px;">Simple et rapide</span>'),
                dk_heading(dk_uid(), 'Comment ça marche ?', array('header_size' => 'h1', 'align' => 'center')),
                dk_text(dk_uid(), '<p style="text-align: center;">Découvrez comment acheter et télécharger vos produits digitaux en quelques minutes seulement.</p>'),
            ), 100),
        ), array('background_color' => '#fdf8f0')),

        // Steps Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), '1. Choisissez', array('header_size' => 'h3')),
                dk_text(dk_uid(), '<p>Parcourez notre catalogue et sélectionnez le produit qui correspond à vos besoins.</p>'),
            ), 33),
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), '2. Payez', array('header_size' => 'h3')),
                dk_text(dk_uid(), '<p>Procédez au paiement sécurisé via Stripe en quelques clics.</p>'),
            ), 33),
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), '3. Téléchargez', array('header_size' => 'h3')),
                dk_text(dk_uid(), '<p>Recevez instantanément vos liens de téléchargement par email.</p>'),
            ), 33),
        )),

        // CTA Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Prêt à commencer ?', array('align' => 'center', 'title_color' => '#ffffff')),
                dk_button(dk_uid(), 'Explorer les produits', '/tous-nos-produits/', array('align' => 'center')),
            ), 100),
        ), array('background_color' => '#1a1a1a')),
    );
}

/**
 * Contact page Elementor template
 */
function digital_kappa_elementor_contact() {
    return array(
        // Hero Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Contactez-nous', array('header_size' => 'h1', 'align' => 'center')),
                dk_text(dk_uid(), '<p style="text-align: center;">Une question, une suggestion ou besoin d\'aide ? Notre équipe est là pour vous répondre.</p>'),
            ), 100),
        ), array('background_color' => '#fdf8f0')),

        // Contact Info + Form
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Informations de contact', array('header_size' => 'h3')),
                dk_text(dk_uid(), '<p><strong>Email</strong><br>contact@digitalkappa.com</p>'),
                dk_text(dk_uid(), '<p><strong>Horaires</strong><br>Lundi - Vendredi : 9h - 18h</p>'),
                dk_text(dk_uid(), '<p><strong>Délai de réponse</strong><br>Sous 24h ouvrées</p>'),
            ), 40),
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Envoyez-nous un message', array('header_size' => 'h3')),
                dk_text(dk_uid(), '<p>Utilisez le formulaire ci-dessous pour nous contacter. Nous vous répondrons dans les plus brefs délais.</p>'),
            ), 60),
        )),
    );
}

/**
 * All Products page Elementor template
 */
function digital_kappa_elementor_all_products() {
    return array(
        // Hero Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Tous nos produits', array('header_size' => 'h1', 'align' => 'center')),
                dk_text(dk_uid(), '<p style="text-align: center;">Découvrez notre sélection complète de produits digitaux premium : applications mobiles, ebooks et templates professionnels.</p>'),
            ), 100),
        ), array('background_color' => '#fdf8f0')),

        // Products Grid placeholder
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_text(dk_uid(), '<p style="text-align: center;">Les produits seront affichés ici via WooCommerce ou un système personnalisé.</p>'),
            ), 100),
        )),
    );
}

/**
 * CGV page Elementor template
 */
function digital_kappa_elementor_cgv() {
    return array(
        // Hero Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Conditions Générales de Vente', array('header_size' => 'h1', 'align' => 'center')),
                dk_text(dk_uid(), '<p style="text-align: center;">Dernière mise à jour : Janvier 2025</p>'),
            ), 100),
        ), array('background_color' => '#fdf8f0')),

        // Content
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), '1. Objet', array('header_size' => 'h2')),
                dk_text(dk_uid(), '<p>Les présentes Conditions Générales de Vente (CGV) régissent les ventes de produits digitaux effectuées sur le site Digital Kappa. Toute commande implique l\'acceptation sans réserve des présentes CGV.</p>'),

                dk_heading(dk_uid(), '2. Produits', array('header_size' => 'h2')),
                dk_text(dk_uid(), '<p>Digital Kappa propose des produits digitaux téléchargeables : applications mobiles, ebooks et templates. Les caractéristiques essentielles des produits sont présentées sur chaque fiche produit.</p>'),

                dk_heading(dk_uid(), '3. Prix', array('header_size' => 'h2')),
                dk_text(dk_uid(), '<p>Les prix sont indiqués en euros TTC. Digital Kappa se réserve le droit de modifier ses prix à tout moment. Les produits sont facturés sur la base des tarifs en vigueur au moment de la validation de la commande.</p>'),

                dk_heading(dk_uid(), '4. Paiement', array('header_size' => 'h2')),
                dk_text(dk_uid(), '<p>Le paiement s\'effectue en ligne par carte bancaire via notre prestataire de paiement sécurisé Stripe. Le débit est effectué au moment de la validation de la commande.</p>'),

                dk_heading(dk_uid(), '5. Livraison', array('header_size' => 'h2')),
                dk_text(dk_uid(), '<p>Les produits digitaux sont livrés par téléchargement immédiat après paiement. Un email de confirmation contenant les liens de téléchargement est envoyé à l\'adresse email fournie lors de la commande.</p>'),

                dk_heading(dk_uid(), '6. Droit de rétractation', array('header_size' => 'h2')),
                dk_text(dk_uid(), '<p>Conformément à l\'article L221-28 du Code de la consommation, le droit de rétractation ne peut être exercé pour les contenus numériques fournis sur un support immatériel dont l\'exécution a commencé avec l\'accord du consommateur.</p><p>Toutefois, Digital Kappa offre une garantie satisfait ou remboursé de 14 jours. Contactez-nous si vous n\'êtes pas satisfait de votre achat.</p>'),
            ), 100),
        )),
    );
}

/**
 * Privacy page Elementor template
 */
function digital_kappa_elementor_privacy() {
    return array(
        // Hero Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Politique de confidentialité', array('header_size' => 'h1', 'align' => 'center')),
                dk_text(dk_uid(), '<p style="text-align: center;">Dernière mise à jour : Janvier 2025</p>'),
            ), 100),
        ), array('background_color' => '#fdf8f0')),

        // Content
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), '1. Collecte des données', array('header_size' => 'h2')),
                dk_text(dk_uid(), '<p>Nous collectons les données que vous nous fournissez directement : nom, prénom, adresse email lors de vos achats ou de votre inscription à notre newsletter.</p>'),

                dk_heading(dk_uid(), '2. Utilisation des données', array('header_size' => 'h2')),
                dk_text(dk_uid(), '<p>Vos données sont utilisées pour :<br>- Traiter vos commandes et vous envoyer vos produits<br>- Vous contacter concernant vos achats<br>- Vous envoyer notre newsletter (avec votre consentement)<br>- Améliorer nos services</p>'),

                dk_heading(dk_uid(), '3. Protection des données', array('header_size' => 'h2')),
                dk_text(dk_uid(), '<p>Nous mettons en œuvre des mesures de sécurité appropriées pour protéger vos données personnelles contre tout accès non autorisé, modification, divulgation ou destruction.</p>'),

                dk_heading(dk_uid(), '4. Vos droits', array('header_size' => 'h2')),
                dk_text(dk_uid(), '<p>Conformément au RGPD, vous disposez des droits suivants :<br>- Droit d\'accès à vos données<br>- Droit de rectification<br>- Droit à l\'effacement<br>- Droit à la portabilité<br>- Droit d\'opposition</p><p>Pour exercer ces droits, contactez-nous à : contact@digitalkappa.com</p>'),
            ), 100),
        )),
    );
}

/**
 * Mentions légales page Elementor template
 */
function digital_kappa_elementor_mentions_legales() {
    return array(
        // Hero Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Mentions légales', array('header_size' => 'h1', 'align' => 'center')),
            ), 100),
        ), array('background_color' => '#fdf8f0')),

        // Content
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Éditeur du site', array('header_size' => 'h2')),
                dk_text(dk_uid(), '<p><strong>Digital Kappa</strong><br>Adresse : [Votre adresse]<br>Email : contact@digitalkappa.com<br>SIRET : [Votre numéro SIRET]</p>'),

                dk_heading(dk_uid(), 'Hébergement', array('header_size' => 'h2')),
                dk_text(dk_uid(), '<p>Le site est hébergé par :<br>[Nom de l\'hébergeur]<br>[Adresse de l\'hébergeur]</p>'),

                dk_heading(dk_uid(), 'Propriété intellectuelle', array('header_size' => 'h2')),
                dk_text(dk_uid(), '<p>L\'ensemble du contenu de ce site (textes, images, vidéos, logos) est protégé par le droit d\'auteur. Toute reproduction, même partielle, est interdite sans autorisation préalable.</p>'),
            ), 100),
        )),
    );
}

/**
 * Product Detail page Elementor template
 */
function digital_kappa_elementor_product_detail() {
    return array(
        // Product Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_image(dk_uid(), 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80'),
            ), 50),
            dk_column(dk_uid(), array(
                dk_text(dk_uid(), '<span style="background: rgba(210, 163, 11, 0.1); color: #d2a30b; padding: 4px 12px; border-radius: 20px; font-size: 14px;">Template</span>'),
                dk_heading(dk_uid(), 'Dashboard Analytics Pro', array('header_size' => 'h1')),
                dk_text(dk_uid(), '<p>Un template complet pour créer des tableaux de bord analytiques professionnels. Inclut plus de 50 composants, graphiques et widgets prêts à l\'emploi.</p>'),
                dk_heading(dk_uid(), '149 €', array('header_size' => 'h2', 'title_color' => '#d2a30b')),
                dk_button(dk_uid(), 'Acheter maintenant', '/checkout/', array(
                    'background_color' => '#d2a30b',
                )),
                dk_text(dk_uid(), '<p style="font-size: 14px; color: #666;">Garantie satisfait ou remboursé 14 jours</p>'),
            ), 50),
        ), array('background_color' => '#f8f4ed')),

        // Description Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Description complète', array('header_size' => 'h2')),
                dk_text(dk_uid(), '<p>Dashboard Analytics Pro est un template premium conçu pour les professionnels qui souhaitent créer des interfaces d\'analyse de données modernes et performantes.</p><p>Ce template inclut tous les composants nécessaires pour construire un tableau de bord complet : graphiques, tableaux, cartes de statistiques, formulaires, et bien plus encore.</p>'),
            ), 100),
        )),

        // Features Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Fonctionnalités principales', array('header_size' => 'h2')),
                dk_text(dk_uid(), '<ul><li>Plus de 50 composants prêts à l\'emploi</li><li>Design responsive (mobile, tablette, desktop)</li><li>Mode sombre inclus</li><li>Graphiques interactifs</li><li>Documentation complète</li><li>Mises à jour gratuites à vie</li></ul>'),
            ), 100),
        ), array('background_color' => '#f8f4ed')),
    );
}

/**
 * Checkout page Elementor template
 */
function digital_kappa_elementor_checkout() {
    return array(
        // Checkout Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Finaliser votre achat', array('header_size' => 'h1')),
                dk_text(dk_uid(), '<p><strong>Informations de contact</strong></p><p>Le formulaire de paiement sera intégré ici via WooCommerce ou Stripe.</p>'),
            ), 60),
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Récapitulatif de commande', array('header_size' => 'h3')),
                dk_text(dk_uid(), '<p><strong>Dashboard Analytics Pro</strong><br>149 €</p><hr><p><strong>Total : 149 €</strong></p>'),
            ), 40),
        ), array('background_color' => '#f8f4ed')),
    );
}

/**
 * Confirmation page Elementor template
 */
function digital_kappa_elementor_confirmation() {
    return array(
        // Success Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_text(dk_uid(), '<div style="text-align: center; font-size: 64px; color: #16a34a;">✓</div>'),
                dk_heading(dk_uid(), 'Commande confirmée !', array('header_size' => 'h1', 'align' => 'center')),
                dk_text(dk_uid(), '<p style="text-align: center;">Merci pour votre achat. Votre commande a été traitée avec succès.</p>'),
            ), 100),
        ), array('background_color' => '#fdf8f0')),

        // Details Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Vos produits', array('header_size' => 'h3')),
                dk_text(dk_uid(), '<p>Les liens de téléchargement ont été envoyés à votre adresse email.</p>'),
                dk_button(dk_uid(), 'Télécharger', '#', array('background_color' => '#d2a30b')),
            ), 60),
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Récapitulatif', array('header_size' => 'h3')),
                dk_text(dk_uid(), '<p>Commande n° : DK-123456<br>Date : [Date]<br>Total : 149 €</p>'),
            ), 40),
        )),

        // Next Steps Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Prochaines étapes', array('header_size' => 'h3')),
                dk_text(dk_uid(), '<ol><li><strong>Consultez votre email</strong> - Un email de confirmation vous a été envoyé</li><li><strong>Téléchargez vos produits</strong> - Utilisez les liens de téléchargement</li><li><strong>Commencez à utiliser</strong> - Suivez la documentation incluse</li></ol>'),
            ), 100),
        ), array('background_color' => '#f8f4ed')),

        // CTA Section
        dk_section(dk_uid(), array(
            dk_column(dk_uid(), array(
                dk_heading(dk_uid(), 'Découvrez nos autres produits', array('align' => 'center', 'title_color' => '#ffffff')),
                dk_button(dk_uid(), 'Voir tous les produits', '/tous-nos-produits/', array('align' => 'center')),
            ), 100),
        ), array('background_color' => '#1a1a1a')),
    );
}
