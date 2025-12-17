<?php
/**
 * Header Template
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <?php
    // Elementor Header
    if (function_exists('elementor_theme_do_location')) {
        elementor_theme_do_location('header');
    } else {
        // Fallback Header
        ?>
        <header id="masthead" class="dk-header">
            <div class="dk-header-container">
                <div class="dk-logo">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-[#d2a30b] rounded flex items-center justify-center">
                                <span class="text-white font-bold text-sm">DK</span>
                            </div>
                            <span class="font-['Montserrat',sans-serif] font-semibold text-[#1a1a1a]"><?php bloginfo('name'); ?></span>
                        </a>
                    <?php endif; ?>
                </div>

                <nav id="site-navigation" class="dk-nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'dk-nav-menu flex items-center gap-8',
                        'fallback_cb'    => false,
                    ));
                    ?>
                </nav>
            </div>
        </header>
        <?php
    }
    ?>

    <div id="content" class="site-content">
