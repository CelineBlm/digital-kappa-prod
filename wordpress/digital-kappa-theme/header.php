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
    <!-- Fallback Header -->
    <header id="masthead" class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <!-- Logo -->
                <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2 flex-shrink-0">
                    <div class="w-10 h-10 bg-amber-500 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-lg">DK</span>
                    </div>
                    <span class="font-semibold text-gray-900 text-lg hidden sm:block" style="font-family: 'Montserrat', sans-serif;">Digital Kappa</span>
                </a>

                <!-- Search Bar - Desktop -->
                <div class="hidden lg:flex flex-1 max-w-md mx-8">
                    <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="w-full relative">
                        <input type="hidden" name="post_type" value="product">
                        <svg class="w-5 h-5 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <input type="text" name="s" placeholder="Rechercher un produit..." class="w-full pl-10 pr-4 py-2.5 bg-gray-100 border-0 rounded-lg text-sm focus:bg-white focus:ring-2 focus:ring-amber-500 transition-all" style="font-family: 'Montserrat', sans-serif;">
                    </form>
                </div>

                <!-- Navigation - Desktop -->
                <nav class="hidden lg:flex items-center gap-6">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="text-gray-600 hover:text-amber-600 text-sm font-medium transition-colors" style="font-family: 'Montserrat', sans-serif;">Accueil</a>
                    <a href="<?php echo esc_url(home_url('/tous-les-produits/')); ?>" class="text-gray-600 hover:text-amber-600 text-sm font-medium transition-colors" style="font-family: 'Montserrat', sans-serif;">Produits</a>
                    <a href="<?php echo esc_url(home_url('/comment-ca-marche/')); ?>" class="text-gray-600 hover:text-amber-600 text-sm font-medium transition-colors" style="font-family: 'Montserrat', sans-serif;">Comment ça marche</a>
                    <a href="<?php echo esc_url(home_url('/faq/')); ?>" class="text-gray-600 hover:text-amber-600 text-sm font-medium transition-colors" style="font-family: 'Montserrat', sans-serif;">FAQ</a>
                </nav>

                <!-- Mobile Menu Button -->
                <button type="button" class="lg:hidden p-2 text-gray-600 hover:text-amber-600" id="mobile-menu-toggle">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="lg:hidden hidden pb-4">
                <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="mb-4">
                    <input type="hidden" name="post_type" value="product">
                    <input type="text" name="s" placeholder="Rechercher..." class="w-full px-4 py-2.5 bg-gray-100 rounded-lg text-sm">
                </form>
                <nav class="flex flex-col gap-2">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg text-sm font-medium">Accueil</a>
                    <a href="<?php echo esc_url(home_url('/tous-les-produits/')); ?>" class="px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg text-sm font-medium">Produits</a>
                    <a href="<?php echo esc_url(home_url('/comment-ca-marche/')); ?>" class="px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg text-sm font-medium">Comment ça marche</a>
                    <a href="<?php echo esc_url(home_url('/faq/')); ?>" class="px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg text-sm font-medium">FAQ</a>
                </nav>
            </div>
        </div>
    </header>

    <script>
    document.getElementById('mobile-menu-toggle')?.addEventListener('click', function() {
        document.getElementById('mobile-menu')?.classList.toggle('hidden');
    });
    </script>
    <?php endif; ?>

    <div id="content" class="site-content flex-1">
