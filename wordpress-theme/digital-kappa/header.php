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
    <div class="dk-header-inner">
        <!-- Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="dk-logo">
            <?php
            $logo_id = get_theme_mod('dk_logo');
            if ($logo_id) {
                echo wp_get_attachment_image($logo_id, 'full', false, array('alt' => get_bloginfo('name')));
            } elseif (file_exists(get_template_directory() . '/assets/images/logo-digital-kappa.svg')) {
                ?>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-digital-kappa.svg'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                <?php
            } else {
                ?>
                <div class="dk-logo-icon">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="40" height="40" rx="8" fill="#d2a30b"/>
                        <text x="50%" y="55%" dominant-baseline="middle" text-anchor="middle" fill="white" font-family="Montserrat, sans-serif" font-weight="600" font-size="16">DK</text>
                    </svg>
                </div>
                <span class="dk-logo-text"><?php bloginfo('name'); ?></span>
                <?php
            }
            ?>
        </a>

        <!-- Desktop Navigation -->
        <nav class="dk-nav">
            <?php
            if (has_nav_menu('primary')) {
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => '',
                    'items_wrap'     => '%3$s',
                    'walker'         => new Digital_Kappa_Nav_Walker(),
                ));
            } else {
                // Default navigation links
                $nav_links = array(
                    'Accueil' => home_url('/'),
                    'Tous nos produits' => home_url('/tous-nos-produits/'),
                    'Comment ça marche' => home_url('/comment-ca-marche/'),
                    'FAQ' => home_url('/faq/'),
                    'À propos' => home_url('/a-propos/'),
                    'Contact' => home_url('/contact/'),
                );

                foreach ($nav_links as $title => $url) {
                    $is_active = (get_permalink() === $url) ? ' active' : '';
                    echo '<a href="' . esc_url($url) . '" class="dk-nav-link' . $is_active . '">' . esc_html($title) . '</a>';
                }
            }
            ?>
        </nav>

        <!-- Mobile Menu Button -->
        <button class="dk-mobile-menu-btn" id="dk-mobile-menu-toggle" aria-label="<?php esc_attr_e('Menu', 'digital-kappa'); ?>">
            <i data-lucide="menu" class="dk-icon-menu"></i>
            <i data-lucide="x" class="dk-icon-close" style="display: none;"></i>
        </button>
    </div>

    <!-- Mobile Navigation -->
    <nav class="dk-mobile-menu" id="dk-mobile-menu">
        <?php
        if (has_nav_menu('primary')) {
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'dk-mobile-nav-list',
                'walker'         => new Digital_Kappa_Nav_Walker(),
            ));
        } else {
            foreach ($nav_links as $title => $url) {
                $is_active = (get_permalink() === $url) ? ' active' : '';
                echo '<a href="' . esc_url($url) . '" class="dk-nav-link' . $is_active . '">' . esc_html($title) . '</a>';
            }
        }
        ?>
    </nav>
</header>

<main id="main-content" class="dk-main">
