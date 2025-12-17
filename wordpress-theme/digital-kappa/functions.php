<?php
/**
 * Digital Kappa Theme Functions
 *
 * @package Digital_Kappa
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

// Theme version
define('DIGITAL_KAPPA_VERSION', '1.0.0');
define('DIGITAL_KAPPA_DIR', get_template_directory());
define('DIGITAL_KAPPA_URI', get_template_directory_uri());

/**
 * Theme Setup
 */
function digital_kappa_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Add support for full and wide align images
    add_theme_support('align-wide');

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Add support for HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add support for custom backgrounds
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
    ));

    // Add support for editor styles
    add_theme_support('editor-styles');

    // Add support for Elementor
    add_theme_support('elementor');

    // Register navigation menus
    register_nav_menus(array(
        'primary'   => __('Menu Principal', 'digital-kappa'),
        'footer'    => __('Menu Footer', 'digital-kappa'),
        'legal'     => __('Menu Légal', 'digital-kappa'),
        'categories' => __('Menu Catégories', 'digital-kappa'),
    ));

    // Set content width
    if (!isset($content_width)) {
        $content_width = 1280;
    }

    // Load textdomain for translations
    load_theme_textdomain('digital-kappa', DIGITAL_KAPPA_DIR . '/languages');
}
add_action('after_setup_theme', 'digital_kappa_setup');

/**
 * Enqueue scripts and styles
 */
function digital_kappa_scripts() {
    // Google Fonts - Merriweather & Montserrat
    wp_enqueue_style(
        'digital-kappa-google-fonts',
        'https://fonts.googleapis.com/css2?family=Merriweather:wght@400;500;700&family=Montserrat:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Lucide Icons CDN
    wp_enqueue_script(
        'lucide-icons',
        'https://unpkg.com/lucide@latest',
        array(),
        null,
        true
    );

    // Main theme stylesheet
    wp_enqueue_style(
        'digital-kappa-style',
        get_stylesheet_uri(),
        array('digital-kappa-google-fonts'),
        DIGITAL_KAPPA_VERSION
    );

    // Custom CSS
    wp_enqueue_style(
        'digital-kappa-custom',
        DIGITAL_KAPPA_URI . '/assets/css/custom.css',
        array('digital-kappa-style'),
        DIGITAL_KAPPA_VERSION
    );

    // Main JS
    wp_enqueue_script(
        'digital-kappa-main',
        DIGITAL_KAPPA_URI . '/assets/js/main.js',
        array('lucide-icons'),
        DIGITAL_KAPPA_VERSION,
        true
    );

    // Localize script for AJAX
    wp_localize_script('digital-kappa-main', 'digitalKappa', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('digital_kappa_nonce'),
        'siteUrl' => home_url(),
    ));
}
add_action('wp_enqueue_scripts', 'digital_kappa_scripts');

/**
 * Register widget areas
 */
function digital_kappa_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar Produits', 'digital-kappa'),
        'id'            => 'sidebar-products',
        'description'   => __('Widgets affichés sur la page des produits.', 'digital-kappa'),
        'before_widget' => '<div id="%1$s" class="dk-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="dk-widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget 1', 'digital-kappa'),
        'id'            => 'footer-1',
        'description'   => __('Première colonne du footer.', 'digital-kappa'),
        'before_widget' => '<div id="%1$s" class="dk-footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="dk-footer-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget 2', 'digital-kappa'),
        'id'            => 'footer-2',
        'description'   => __('Deuxième colonne du footer.', 'digital-kappa'),
        'before_widget' => '<div id="%1$s" class="dk-footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="dk-footer-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget 3', 'digital-kappa'),
        'id'            => 'footer-3',
        'description'   => __('Troisième colonne du footer.', 'digital-kappa'),
        'before_widget' => '<div id="%1$s" class="dk-footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="dk-footer-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget 4', 'digital-kappa'),
        'id'            => 'footer-4',
        'description'   => __('Quatrième colonne du footer.', 'digital-kappa'),
        'before_widget' => '<div id="%1$s" class="dk-footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="dk-footer-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'digital_kappa_widgets_init');

/**
 * Add Elementor support
 */
function digital_kappa_elementor_support() {
    // Register Elementor locations
    if (did_action('elementor/loaded')) {
        add_action('elementor/theme/register_locations', function($elementor_theme_manager) {
            $elementor_theme_manager->register_all_core_location();
        });
    }
}
add_action('after_setup_theme', 'digital_kappa_elementor_support');

/**
 * Create pages on theme activation
 */
function digital_kappa_create_pages() {
    // Check if pages already exist
    if (get_option('digital_kappa_pages_created')) {
        return;
    }

    $pages = array(
        'accueil' => array(
            'title' => 'Accueil',
            'template' => 'page-templates/template-home.php',
            'content' => digital_kappa_get_page_content('home'),
        ),
        'tous-nos-produits' => array(
            'title' => 'Tous nos produits',
            'template' => 'page-templates/template-all-products.php',
            'content' => digital_kappa_get_page_content('all-products'),
        ),
        'comment-ca-marche' => array(
            'title' => 'Comment ça marche',
            'template' => 'page-templates/template-how-it-works.php',
            'content' => digital_kappa_get_page_content('how-it-works'),
        ),
        'faq' => array(
            'title' => 'FAQ',
            'template' => 'page-templates/template-faq.php',
            'content' => digital_kappa_get_page_content('faq'),
        ),
        'a-propos' => array(
            'title' => 'À propos',
            'template' => 'page-templates/template-about.php',
            'content' => digital_kappa_get_page_content('about'),
        ),
        'contact' => array(
            'title' => 'Contact',
            'template' => 'page-templates/template-contact.php',
            'content' => digital_kappa_get_page_content('contact'),
        ),
        'fiche-produit' => array(
            'title' => 'Fiche produit',
            'template' => 'page-templates/template-product-detail.php',
            'content' => digital_kappa_get_page_content('product-detail'),
        ),
        'checkout' => array(
            'title' => 'Checkout',
            'template' => 'page-templates/template-checkout.php',
            'content' => digital_kappa_get_page_content('checkout'),
        ),
        'confirmation' => array(
            'title' => 'Confirmation de commande',
            'template' => 'page-templates/template-confirmation.php',
            'content' => digital_kappa_get_page_content('confirmation'),
        ),
        'cgv' => array(
            'title' => 'Conditions Générales de Vente',
            'template' => 'page-templates/template-cgv.php',
            'content' => digital_kappa_get_page_content('cgv'),
        ),
        'mentions-legales' => array(
            'title' => 'Mentions Légales',
            'template' => 'page-templates/template-mentions-legales.php',
            'content' => digital_kappa_get_page_content('mentions-legales'),
        ),
        'politique-de-confidentialite' => array(
            'title' => 'Politique de confidentialité',
            'template' => 'page-templates/template-privacy.php',
            'content' => digital_kappa_get_page_content('privacy'),
        ),
    );

    foreach ($pages as $slug => $page_data) {
        // Check if page exists
        $existing_page = get_page_by_path($slug);

        if (!$existing_page) {
            $page_id = wp_insert_post(array(
                'post_title'     => $page_data['title'],
                'post_name'      => $slug,
                'post_content'   => $page_data['content'],
                'post_status'    => 'publish',
                'post_type'      => 'page',
                'post_author'    => 1,
                'comment_status' => 'closed',
            ));

            if ($page_id && !is_wp_error($page_id)) {
                update_post_meta($page_id, '_wp_page_template', $page_data['template']);

                // Set home page as front page
                if ($slug === 'accueil') {
                    update_option('page_on_front', $page_id);
                    update_option('show_on_front', 'page');
                }
            }
        }
    }

    // Create primary menu
    digital_kappa_create_menus();

    // Mark pages as created
    update_option('digital_kappa_pages_created', true);
}
add_action('after_switch_theme', 'digital_kappa_create_pages');

/**
 * Create navigation menus
 */
function digital_kappa_create_menus() {
    // Create Primary Menu
    $menu_name = 'Menu Principal';
    $menu_exists = wp_get_nav_menu_object($menu_name);

    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menu_name);

        // Add menu items
        $menu_items = array(
            'Accueil' => 'accueil',
            'Tous nos produits' => 'tous-nos-produits',
            'Comment ça marche' => 'comment-ca-marche',
            'FAQ' => 'faq',
            'À propos' => 'a-propos',
            'Contact' => 'contact',
        );

        $order = 1;
        foreach ($menu_items as $title => $slug) {
            $page = get_page_by_path($slug);
            if ($page) {
                wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title'     => $title,
                    'menu-item-object'    => 'page',
                    'menu-item-object-id' => $page->ID,
                    'menu-item-type'      => 'post_type',
                    'menu-item-status'    => 'publish',
                    'menu-item-position'  => $order,
                ));
                $order++;
            }
        }

        // Assign menu to location
        $locations = get_theme_mod('nav_menu_locations');
        $locations['primary'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }

    // Create Footer Legal Menu
    $footer_menu_name = 'Menu Légal';
    $footer_menu_exists = wp_get_nav_menu_object($footer_menu_name);

    if (!$footer_menu_exists) {
        $footer_menu_id = wp_create_nav_menu($footer_menu_name);

        $legal_items = array(
            'À propos' => 'a-propos',
            'CGV' => 'cgv',
            'Confidentialité' => 'politique-de-confidentialite',
            'Mentions légales' => 'mentions-legales',
        );

        $order = 1;
        foreach ($legal_items as $title => $slug) {
            $page = get_page_by_path($slug);
            if ($page) {
                wp_update_nav_menu_item($footer_menu_id, 0, array(
                    'menu-item-title'     => $title,
                    'menu-item-object'    => 'page',
                    'menu-item-object-id' => $page->ID,
                    'menu-item-type'      => 'post_type',
                    'menu-item-status'    => 'publish',
                    'menu-item-position'  => $order,
                ));
                $order++;
            }
        }

        $locations = get_theme_mod('nav_menu_locations');
        $locations['legal'] = $footer_menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}

/**
 * Get page content for Elementor
 */
function digital_kappa_get_page_content($page_type) {
    // Return placeholder content that Elementor can edit
    // The actual content will be added via Elementor

    $contents = array(
        'home' => '<!-- wp:paragraph -->
<p>Bienvenue sur Digital Kappa, votre marketplace de produits digitaux premium.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Cette page est optimisée pour être modifiée avec Elementor. Cliquez sur "Modifier avec Elementor" pour personnaliser le contenu.</p>
<!-- /wp:paragraph -->',

        'all-products' => '<!-- wp:paragraph -->
<p>Découvrez notre catalogue complet de produits digitaux : ebooks, applications et templates.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Utilisez les filtres pour trouver exactement ce dont vous avez besoin.</p>
<!-- /wp:paragraph -->',

        'how-it-works' => '<!-- wp:paragraph -->
<p>Achetez et téléchargez vos produits digitaux en quelques clics. Notre processus simplifié vous garantit un accès immédiat à vos achats.</p>
<!-- /wp:paragraph -->',

        'faq' => '<!-- wp:paragraph -->
<p>Trouvez rapidement les réponses à vos questions sur Digital Kappa.</p>
<!-- /wp:paragraph -->',

        'about' => '<!-- wp:paragraph -->
<p>Digital Kappa, votre partenaire digital. Nous proposons des ressources numériques simples, efficaces et de qualité.</p>
<!-- /wp:paragraph -->',

        'contact' => '<!-- wp:paragraph -->
<p>Contactez-nous pour toute question. Notre équipe est à votre disposition.</p>
<!-- /wp:paragraph -->',

        'product-detail' => '<!-- wp:paragraph -->
<p>Page de détail produit. Cette page affiche les informations complètes d\'un produit.</p>
<!-- /wp:paragraph -->',

        'checkout' => '<!-- wp:paragraph -->
<p>Finalisez votre achat en toute sécurité.</p>
<!-- /wp:paragraph -->',

        'confirmation' => '<!-- wp:paragraph -->
<p>Commande confirmée ! Merci pour votre achat.</p>
<!-- /wp:paragraph -->',

        'cgv' => '<!-- wp:paragraph -->
<p>Conditions Générales de Vente de Digital Kappa.</p>
<!-- /wp:paragraph -->',

        'mentions-legales' => '<!-- wp:paragraph -->
<p>Mentions légales de Digital Kappa.</p>
<!-- /wp:paragraph -->',

        'privacy' => '<!-- wp:paragraph -->
<p>Politique de confidentialité de Digital Kappa.</p>
<!-- /wp:paragraph -->',
    );

    return isset($contents[$page_type]) ? $contents[$page_type] : '';
}

/**
 * Add theme customizer options
 */
function digital_kappa_customize_register($wp_customize) {
    // Add Digital Kappa section
    $wp_customize->add_section('digital_kappa_options', array(
        'title'       => __('Options Digital Kappa', 'digital-kappa'),
        'priority'    => 30,
        'description' => __('Personnalisez les options du thème Digital Kappa.', 'digital-kappa'),
    ));

    // Logo option
    $wp_customize->add_setting('dk_logo', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'dk_logo', array(
        'label'     => __('Logo', 'digital-kappa'),
        'section'   => 'digital_kappa_options',
        'mime_type' => 'image',
    )));

    // Footer logo (white version)
    $wp_customize->add_setting('dk_logo_footer', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'dk_logo_footer', array(
        'label'       => __('Logo Footer (version blanche)', 'digital-kappa'),
        'section'     => 'digital_kappa_options',
        'mime_type'   => 'image',
        'description' => __('Utilisé dans le footer sur fond sombre.', 'digital-kappa'),
    )));

    // Contact email
    $wp_customize->add_setting('dk_contact_email', array(
        'default'           => 'contact@digitalkappa.com',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('dk_contact_email', array(
        'label'   => __('Email de contact', 'digital-kappa'),
        'section' => 'digital_kappa_options',
        'type'    => 'email',
    ));

    // Support email
    $wp_customize->add_setting('dk_support_email', array(
        'default'           => 'support@digitalkappa.com',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('dk_support_email', array(
        'label'   => __('Email de support', 'digital-kappa'),
        'section' => 'digital_kappa_options',
        'type'    => 'email',
    ));

    // Footer description
    $wp_customize->add_setting('dk_footer_description', array(
        'default'           => 'Des ressources numériques simples et de qualité pour créateurs, entrepreneurs et passionnés.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('dk_footer_description', array(
        'label'   => __('Description Footer', 'digital-kappa'),
        'section' => 'digital_kappa_options',
        'type'    => 'textarea',
    ));

    // Copyright text
    $wp_customize->add_setting('dk_copyright', array(
        'default'           => '© ' . date('Y') . ' Digital Kappa. Tous droits réservés.',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('dk_copyright', array(
        'label'   => __('Texte de copyright', 'digital-kappa'),
        'section' => 'digital_kappa_options',
        'type'    => 'text',
    ));
}
add_action('customize_register', 'digital_kappa_customize_register');

/**
 * Helper function to get theme option
 */
function digital_kappa_get_option($option, $default = '') {
    return get_theme_mod($option, $default);
}

/**
 * Add body classes
 */
function digital_kappa_body_classes($classes) {
    // Add class for pages
    if (is_page()) {
        $classes[] = 'dk-page';
        $classes[] = 'dk-page-' . get_post_field('post_name', get_post());
    }

    // Add class if Elementor is editing
    if (class_exists('Elementor\Plugin') && \Elementor\Plugin::$instance->preview->is_preview_mode()) {
        $classes[] = 'dk-elementor-preview';
    }

    return $classes;
}
add_filter('body_class', 'digital_kappa_body_classes');

/**
 * Custom excerpt length
 */
function digital_kappa_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'digital_kappa_excerpt_length');

/**
 * Custom excerpt more
 */
function digital_kappa_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'digital_kappa_excerpt_more');

/**
 * Remove WordPress admin bar margin
 */
function digital_kappa_admin_bar_fix() {
    if (is_admin_bar_showing()) {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
}
add_action('get_header', 'digital_kappa_admin_bar_fix');

/**
 * Add admin notice for required plugins
 */
function digital_kappa_admin_notice() {
    if (!did_action('elementor/loaded')) {
        ?>
        <div class="notice notice-warning is-dismissible">
            <p><?php _e('Le thème Digital Kappa fonctionne de manière optimale avec Elementor. <a href="' . admin_url('plugin-install.php?s=elementor&tab=search&type=term') . '">Installer Elementor</a>', 'digital-kappa'); ?></p>
        </div>
        <?php
    }
}
add_action('admin_notices', 'digital_kappa_admin_notice');

/**
 * Theme activation hook
 */
function digital_kappa_activation() {
    // Flush rewrite rules
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'digital_kappa_activation', 20);

/**
 * Allow SVG uploads
 */
function digital_kappa_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'digital_kappa_mime_types');

/**
 * Include additional files
 */
require_once DIGITAL_KAPPA_DIR . '/inc/template-functions.php';
require_once DIGITAL_KAPPA_DIR . '/inc/template-tags.php';

// Include Elementor integration if Elementor is active
if (did_action('elementor/loaded')) {
    require_once DIGITAL_KAPPA_DIR . '/inc/elementor-integration.php';
}
