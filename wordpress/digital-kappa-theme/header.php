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

<div id="page" class="site min-h-screen flex flex-col">
    <?php
    // Check if Elementor header exists
    $header_done = false;
    if (function_exists('elementor_theme_do_location')) {
        $header_done = elementor_theme_do_location('header');
    }

    if (!$header_done) :
    ?>
    <!-- Fallback Header - Two Row Design (matches React original) -->
    <header id="masthead" class="bg-white sticky top-0 z-50">
        <!-- Row 1: Logo + Search -->
        <div class="border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 lg:px-28 py-4">
                <div class="flex items-center justify-between gap-8">
                    <!-- Logo -->
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 flex-shrink-0">
                        <div class="w-12 h-8 flex items-center justify-center">
                            <svg class="w-12 h-8" viewBox="0 0 48 32" fill="none">
                                <path d="M0 0H28.6V32H0V0Z" fill="#d2a30b"/>
                                <path d="M31.4 0H48V32H31.4V0Z" fill="#d2a30b"/>
                            </svg>
                        </div>
                        <span class="text-xl text-gray-900 font-body">Digital Kappa</span>
                    </a>

                    <!-- Search Bar - Desktop -->
                    <div class="hidden lg:flex flex-1 max-w-2xl">
                        <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="w-full relative">
                            <input type="hidden" name="post_type" value="product">
                            <svg class="w-5 h-5 absolute left-4 top-1/2 -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <input type="text" name="s" placeholder="Rechercher un produit, ebook, template..." class="w-full pl-11 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg text-sm font-body focus:bg-white focus:border-dk-primary focus:ring-2 focus:ring-dk-primary/20 transition-all">
                        </form>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button type="button" class="lg:hidden p-2 text-gray-600 hover:text-dk-primary" id="mobile-menu-toggle">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Row 2: Navigation -->
        <div class="bg-white border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 lg:px-28">
                <nav class="hidden lg:flex items-center">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="py-3 pr-6 text-sm text-gray-700 hover:text-dk-primary font-body transition-colors">Accueil</a>
                    <a href="<?php echo esc_url(home_url('/tous-les-produits/')); ?>" class="py-3 px-6 text-sm text-gray-700 hover:text-dk-primary font-body transition-colors">Tous nos produits</a>
                    <a href="<?php echo esc_url(home_url('/categorie-produit/ebooks/')); ?>" class="py-3 px-6 text-sm text-gray-700 hover:text-dk-primary font-body transition-colors">Ebooks</a>
                    <a href="<?php echo esc_url(home_url('/categorie-produit/applications/')); ?>" class="py-3 px-6 text-sm text-gray-700 hover:text-dk-primary font-body transition-colors">Applications</a>
                    <a href="<?php echo esc_url(home_url('/categorie-produit/templates/')); ?>" class="py-3 px-6 text-sm text-gray-700 hover:text-dk-primary font-body transition-colors">Templates</a>
                    <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="py-3 px-6 text-sm text-gray-700 hover:text-dk-primary font-body transition-colors">Blog</a>
                    <a href="<?php echo esc_url(home_url('/faq/')); ?>" class="py-3 pl-6 text-sm text-gray-700 hover:text-dk-primary font-body transition-colors">FAQ</a>
                </nav>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden bg-white border-b border-gray-200 px-4 py-4">
            <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="mb-4">
                <input type="hidden" name="post_type" value="product">
                <input type="text" name="s" placeholder="Rechercher un produit..." class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-lg text-sm font-body">
            </form>
            <nav class="flex flex-col gap-1">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-dk-primary rounded-lg text-sm font-body">Accueil</a>
                <a href="<?php echo esc_url(home_url('/tous-les-produits/')); ?>" class="px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-dk-primary rounded-lg text-sm font-body">Tous nos produits</a>
                <a href="<?php echo esc_url(home_url('/categorie-produit/ebooks/')); ?>" class="px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-dk-primary rounded-lg text-sm font-body">Ebooks</a>
                <a href="<?php echo esc_url(home_url('/categorie-produit/applications/')); ?>" class="px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-dk-primary rounded-lg text-sm font-body">Applications</a>
                <a href="<?php echo esc_url(home_url('/categorie-produit/templates/')); ?>" class="px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-dk-primary rounded-lg text-sm font-body">Templates</a>
                <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-dk-primary rounded-lg text-sm font-body">Blog</a>
                <a href="<?php echo esc_url(home_url('/faq/')); ?>" class="px-3 py-2 text-gray-700 hover:bg-gray-50 hover:text-dk-primary rounded-lg text-sm font-body">FAQ</a>
            </nav>
        </div>
    </header>

    <script>
    document.getElementById('mobile-menu-toggle')?.addEventListener('click', function() {
        document.getElementById('mobile-menu')?.classList.toggle('hidden');
    });
    </script>
    <?php endif; ?>

    <div id="content" class="site-content flex-1">
