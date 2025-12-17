<?php
/**
 * Plugin Name: Digital Kappa Setup
 * Plugin URI: https://digitalkappa.com
 * Description: Plugin d'installation automatique pour Digital Kappa. Active ce plugin pour créer automatiquement toutes les pages, menus et produits.
 * Version: 1.0.0
 * Author: Digital Kappa
 * Author URI: https://digitalkappa.com
 * Text Domain: digital-kappa-setup
 * Requires at least: 6.0
 * Requires PHP: 8.0
 * WC requires at least: 8.0
 * WC tested up to: 8.4
 */

if (!defined('ABSPATH')) {
    exit;
}

// Plugin Constants
define('DK_SETUP_VERSION', '1.0.0');
define('DK_SETUP_DIR', plugin_dir_path(__FILE__));
define('DK_SETUP_URI', plugin_dir_url(__FILE__));

/**
 * Main Plugin Class
 */
class Digital_Kappa_Setup {

    private static $instance = null;
    private $setup_complete = false;

    public static function get_instance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function __construct() {
        // Check dependencies on activation
        register_activation_hook(__FILE__, array($this, 'activate'));
        register_deactivation_hook(__FILE__, array($this, 'deactivate'));

        // Admin menu
        add_action('admin_menu', array($this, 'add_admin_menu'));

        // Admin notices
        add_action('admin_notices', array($this, 'admin_notices'));

        // AJAX handlers
        add_action('wp_ajax_dk_run_setup', array($this, 'ajax_run_setup'));
        add_action('wp_ajax_dk_import_products', array($this, 'ajax_import_products'));

        // Enqueue admin scripts
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_scripts'));
    }

    /**
     * Plugin Activation
     */
    public function activate() {
        // Check WooCommerce
        if (!class_exists('WooCommerce')) {
            deactivate_plugins(plugin_basename(__FILE__));
            wp_die(
                __('Ce plugin nécessite WooCommerce. Veuillez installer et activer WooCommerce avant d\'activer ce plugin.', 'digital-kappa-setup'),
                __('Plugin Activation Error', 'digital-kappa-setup'),
                array('back_link' => true)
            );
        }

        // Check Elementor
        if (!did_action('elementor/loaded')) {
            deactivate_plugins(plugin_basename(__FILE__));
            wp_die(
                __('Ce plugin nécessite Elementor. Veuillez installer et activer Elementor avant d\'activer ce plugin.', 'digital-kappa-setup'),
                __('Plugin Activation Error', 'digital-kappa-setup'),
                array('back_link' => true)
            );
        }

        // Set transient for admin notice
        set_transient('dk_setup_activated', true, 60);

        // Flush rewrite rules
        flush_rewrite_rules();
    }

    /**
     * Plugin Deactivation
     */
    public function deactivate() {
        flush_rewrite_rules();
    }

    /**
     * Add Admin Menu
     */
    public function add_admin_menu() {
        add_menu_page(
            __('Digital Kappa Setup', 'digital-kappa-setup'),
            __('DK Setup', 'digital-kappa-setup'),
            'manage_options',
            'digital-kappa-setup',
            array($this, 'render_admin_page'),
            'dashicons-store',
            30
        );
    }

    /**
     * Admin Notices
     */
    public function admin_notices() {
        if (get_transient('dk_setup_activated')) {
            delete_transient('dk_setup_activated');
            ?>
            <div class="notice notice-success is-dismissible">
                <p>
                    <strong><?php _e('Digital Kappa Setup activé !', 'digital-kappa-setup'); ?></strong>
                    <?php _e('Rendez-vous dans le menu "DK Setup" pour créer automatiquement votre site.', 'digital-kappa-setup'); ?>
                    <a href="<?php echo admin_url('admin.php?page=digital-kappa-setup'); ?>"><?php _e('Lancer la configuration', 'digital-kappa-setup'); ?></a>
                </p>
            </div>
            <?php
        }
    }

    /**
     * Enqueue Admin Scripts
     */
    public function enqueue_admin_scripts($hook) {
        if ($hook !== 'toplevel_page_digital-kappa-setup') {
            return;
        }

        wp_enqueue_style('dk-admin-style', DK_SETUP_URI . 'assets/css/admin.css', array(), DK_SETUP_VERSION);
        wp_enqueue_script('dk-admin-script', DK_SETUP_URI . 'assets/js/admin.js', array('jquery'), DK_SETUP_VERSION, true);

        wp_localize_script('dk-admin-script', 'dk_setup', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('dk_setup_nonce'),
            'messages' => array(
                'running' => __('Installation en cours...', 'digital-kappa-setup'),
                'success' => __('Installation terminée avec succès !', 'digital-kappa-setup'),
                'error' => __('Une erreur est survenue.', 'digital-kappa-setup'),
            )
        ));
    }

    /**
     * Render Admin Page
     */
    public function render_admin_page() {
        $setup_complete = get_option('dk_setup_complete', false);
        ?>
        <div class="wrap dk-setup-wrap">
            <h1><?php _e('Digital Kappa - Installation', 'digital-kappa-setup'); ?></h1>

            <div class="dk-setup-container">
                <?php if ($setup_complete) : ?>
                <div class="dk-setup-complete">
                    <span class="dashicons dashicons-yes-alt"></span>
                    <h2><?php _e('Installation complète !', 'digital-kappa-setup'); ?></h2>
                    <p><?php _e('Votre site Digital Kappa est prêt à être utilisé.', 'digital-kappa-setup'); ?></p>
                    <div class="dk-setup-links">
                        <a href="<?php echo home_url(); ?>" class="button button-primary" target="_blank"><?php _e('Voir le site', 'digital-kappa-setup'); ?></a>
                        <a href="<?php echo admin_url('edit.php?post_type=product'); ?>" class="button"><?php _e('Gérer les produits', 'digital-kappa-setup'); ?></a>
                        <a href="<?php echo admin_url('edit.php?post_type=page'); ?>" class="button"><?php _e('Gérer les pages', 'digital-kappa-setup'); ?></a>
                    </div>
                    <hr>
                    <p class="dk-reset-notice">
                        <button type="button" id="dk-reset-setup" class="button button-link-delete"><?php _e('Réinitialiser l\'installation', 'digital-kappa-setup'); ?></button>
                    </p>
                </div>
                <?php else : ?>
                <div class="dk-setup-intro">
                    <h2><?php _e('Bienvenue !', 'digital-kappa-setup'); ?></h2>
                    <p><?php _e('Ce plugin va créer automatiquement :', 'digital-kappa-setup'); ?></p>
                    <ul>
                        <li>✓ <?php _e('10 pages avec structure Elementor', 'digital-kappa-setup'); ?></li>
                        <li>✓ <?php _e('13 produits digitaux', 'digital-kappa-setup'); ?></li>
                        <li>✓ <?php _e('3 menus de navigation', 'digital-kappa-setup'); ?></li>
                        <li>✓ <?php _e('Header et Footer personnalisés', 'digital-kappa-setup'); ?></li>
                        <li>✓ <?php _e('Configuration WooCommerce', 'digital-kappa-setup'); ?></li>
                    </ul>
                </div>

                <div class="dk-setup-progress" style="display: none;">
                    <div class="dk-progress-bar">
                        <div class="dk-progress-fill" style="width: 0%;"></div>
                    </div>
                    <p class="dk-progress-status"><?php _e('Préparation...', 'digital-kappa-setup'); ?></p>
                </div>

                <div class="dk-setup-actions">
                    <button type="button" id="dk-start-setup" class="button button-primary button-hero">
                        <?php _e('Lancer l\'installation', 'digital-kappa-setup'); ?>
                    </button>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php
    }

    /**
     * AJAX: Run Setup
     */
    public function ajax_run_setup() {
        check_ajax_referer('dk_setup_nonce', 'nonce');

        if (!current_user_can('manage_options')) {
            wp_send_json_error(__('Permission refusée', 'digital-kappa-setup'));
        }

        $step = isset($_POST['step']) ? intval($_POST['step']) : 1;

        switch ($step) {
            case 1:
                $result = $this->create_pages();
                break;
            case 2:
                $result = $this->create_menus();
                break;
            case 3:
                $result = $this->import_products();
                break;
            case 4:
                $result = $this->configure_woocommerce();
                break;
            case 5:
                $result = $this->create_elementor_templates();
                break;
            case 6:
                update_option('dk_setup_complete', true);
                $result = array('success' => true, 'message' => __('Installation terminée !', 'digital-kappa-setup'));
                break;
            default:
                $result = array('success' => false, 'message' => __('Étape inconnue', 'digital-kappa-setup'));
        }

        wp_send_json($result);
    }

    /**
     * Create Pages
     */
    private function create_pages() {
        require_once DK_SETUP_DIR . 'inc/pages/pages-creator.php';

        $creator = new DK_Pages_Creator();
        $result = $creator->create_all_pages();

        return array(
            'success' => true,
            'message' => sprintf(__('%d pages créées', 'digital-kappa-setup'), $result['count']),
            'next_step' => 2
        );
    }

    /**
     * Create Menus
     */
    private function create_menus() {
        // Menu Header
        $header_menu_id = wp_create_nav_menu('Menu Header');
        if (!is_wp_error($header_menu_id)) {
            $menu_items = array(
                array('title' => 'Accueil', 'url' => home_url('/')),
                array('title' => 'Produits', 'url' => home_url('/tous-les-produits/')),
                array('title' => 'Comment ça marche', 'url' => home_url('/comment-ca-marche/')),
                array('title' => 'FAQ', 'url' => home_url('/faq/')),
                array('title' => 'À propos', 'url' => home_url('/a-propos/')),
            );

            foreach ($menu_items as $item) {
                wp_update_nav_menu_item($header_menu_id, 0, array(
                    'menu-item-title' => $item['title'],
                    'menu-item-url' => $item['url'],
                    'menu-item-status' => 'publish',
                ));
            }

            // Assign to location
            $locations = get_theme_mod('nav_menu_locations');
            $locations['header-menu'] = $header_menu_id;
            set_theme_mod('nav_menu_locations', $locations);
        }

        // Menu Footer Categories
        $footer_cat_menu_id = wp_create_nav_menu('Menu Footer Catégories');
        if (!is_wp_error($footer_cat_menu_id)) {
            $cat_items = array(
                array('title' => 'Ebooks', 'url' => home_url('/categorie/ebooks/')),
                array('title' => 'Applications', 'url' => home_url('/categorie/applications/')),
                array('title' => 'Templates', 'url' => home_url('/categorie/templates/')),
            );

            foreach ($cat_items as $item) {
                wp_update_nav_menu_item($footer_cat_menu_id, 0, array(
                    'menu-item-title' => $item['title'],
                    'menu-item-url' => $item['url'],
                    'menu-item-status' => 'publish',
                ));
            }

            $locations = get_theme_mod('nav_menu_locations');
            $locations['footer-categories'] = $footer_cat_menu_id;
            set_theme_mod('nav_menu_locations', $locations);
        }

        // Menu Footer Legal
        $footer_legal_menu_id = wp_create_nav_menu('Menu Footer Légal');
        if (!is_wp_error($footer_legal_menu_id)) {
            $legal_items = array(
                array('title' => 'CGV', 'url' => home_url('/cgv/')),
                array('title' => 'Confidentialité', 'url' => home_url('/confidentialite/')),
                array('title' => 'À propos', 'url' => home_url('/a-propos/')),
            );

            foreach ($legal_items as $item) {
                wp_update_nav_menu_item($footer_legal_menu_id, 0, array(
                    'menu-item-title' => $item['title'],
                    'menu-item-url' => $item['url'],
                    'menu-item-status' => 'publish',
                ));
            }

            $locations = get_theme_mod('nav_menu_locations');
            $locations['footer-legal'] = $footer_legal_menu_id;
            set_theme_mod('nav_menu_locations', $locations);
        }

        return array(
            'success' => true,
            'message' => __('3 menus créés', 'digital-kappa-setup'),
            'next_step' => 3
        );
    }

    /**
     * Import Products
     */
    private function import_products() {
        require_once DK_SETUP_DIR . 'inc/products-importer.php';

        $importer = new DK_Products_Importer();
        $result = $importer->import_all();

        return array(
            'success' => true,
            'message' => sprintf(__('%d produits importés', 'digital-kappa-setup'), $result['count']),
            'next_step' => 4
        );
    }

    /**
     * Configure WooCommerce
     */
    private function configure_woocommerce() {
        // Set currency
        update_option('woocommerce_currency', 'EUR');

        // Enable guest checkout
        update_option('woocommerce_enable_guest_checkout', 'yes');

        // Skip cart
        update_option('woocommerce_cart_redirect_after_add', 'yes');

        // Enable downloadable products
        update_option('woocommerce_downloads_require_login', 'no');

        // Set shop page
        $shop_page = get_page_by_path('tous-les-produits');
        if ($shop_page) {
            update_option('woocommerce_shop_page_id', $shop_page->ID);
        }

        // Set checkout page
        $checkout_page = get_page_by_path('checkout');
        if ($checkout_page) {
            update_option('woocommerce_checkout_page_id', $checkout_page->ID);
        }

        // Set terms page
        $terms_page = get_page_by_path('cgv');
        if ($terms_page) {
            update_option('woocommerce_terms_page_id', $terms_page->ID);
        }

        return array(
            'success' => true,
            'message' => __('WooCommerce configuré', 'digital-kappa-setup'),
            'next_step' => 5
        );
    }

    /**
     * Create Elementor Templates (Header/Footer)
     */
    private function create_elementor_templates() {
        require_once DK_SETUP_DIR . 'inc/elementor-templates.php';

        $templates = new DK_Elementor_Templates();
        $templates->create_header();
        $templates->create_footer();

        return array(
            'success' => true,
            'message' => __('Header/Footer créés', 'digital-kappa-setup'),
            'next_step' => 6
        );
    }
}

// Initialize plugin
Digital_Kappa_Setup::get_instance();
