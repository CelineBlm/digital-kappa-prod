<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="dk-header">
    <div class="dk-container">
        <div class="dk-header-inner">
            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="dk-logo">
                <div class="dk-logo-icon">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 8h8c8.837 0 16 7.163 16 16s-7.163 16-16 16H8V8z" fill="#d2a30b"/>
                        <path d="M8 8v32" stroke="#d2a30b" stroke-width="4" stroke-linecap="round"/>
                    </svg>
                </div>
                <span class="dk-logo-text">Digital Kappa</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="dk-nav">
                <?php
                $nav_links = array(
                    'Accueil' => home_url('/'),
                    'Tous nos produits' => home_url('/tous-nos-produits/'),
                    'Ebooks' => home_url('/tous-nos-produits/?category=ebook'),
                    'Applications' => home_url('/tous-nos-produits/?category=application'),
                    'Templates' => home_url('/tous-nos-produits/?category=template'),
                    'Comment ça marche' => home_url('/comment-ca-marche/'),
                    'FAQ' => home_url('/faq/'),
                );

                foreach ($nav_links as $title => $url) {
                    $current_url = home_url($_SERVER['REQUEST_URI']);
                    $is_active = (rtrim($current_url, '/') === rtrim($url, '/')) ? ' active' : '';
                    echo '<a href="' . esc_url($url) . '" class="dk-nav-link' . $is_active . '">' . esc_html($title) . '</a>';
                }
                ?>
            </nav>

            <!-- Mobile Menu Button -->
            <button class="dk-mobile-menu-btn" id="dk-mobile-menu-toggle" aria-label="<?php esc_attr_e('Menu', 'digital-kappa'); ?>">
                <i data-lucide="menu" class="dk-icon-menu"></i>
                <i data-lucide="x" class="dk-icon-close" style="display: none;"></i>
            </button>
        </div>

        <!-- Search Bar -->
        <div class="dk-search-bar">
            <form role="search" method="get" action="<?php echo esc_url(home_url('/tous-nos-produits/')); ?>" class="dk-search-form">
                <i data-lucide="search" class="dk-search-icon"></i>
                <input type="search" class="dk-search-input" placeholder="Rechercher un produit, ebook, template..." name="search" value="<?php echo get_search_query(); ?>">
            </form>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <nav class="dk-mobile-menu" id="dk-mobile-menu">
        <div class="dk-mobile-menu-header">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="dk-logo">
                <div class="dk-logo-icon">
                    <svg width="32" height="32" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 8h8c8.837 0 16 7.163 16 16s-7.163 16-16 16H8V8z" fill="#d2a30b"/>
                        <path d="M8 8v32" stroke="#d2a30b" stroke-width="4" stroke-linecap="round"/>
                    </svg>
                </div>
                <span class="dk-logo-text">Digital Kappa</span>
            </a>
            <button class="dk-mobile-menu-close" id="dk-mobile-menu-close" aria-label="<?php esc_attr_e('Fermer', 'digital-kappa'); ?>">
                <i data-lucide="x"></i>
            </button>
        </div>
        <div class="dk-mobile-menu-nav">
            <?php
            foreach ($nav_links as $title => $url) {
                echo '<a href="' . esc_url($url) . '" class="dk-mobile-nav-link">' . esc_html($title) . '</a>';
            }
            ?>
        </div>
    </nav>
</header>

<main id="main-content" class="dk-main">
