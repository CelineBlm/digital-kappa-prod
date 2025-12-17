<?php
/**
 * Footer Template
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

    </div><!-- #content -->

    <?php
    // Elementor Footer
    if (function_exists('elementor_theme_do_location')) {
        elementor_theme_do_location('footer');
    } else {
        // Fallback Footer
        ?>
        <footer id="colophon" class="dk-footer">
            <div class="dk-footer-container">
                <div class="dk-footer-grid">
                    <div>
                        <div class="flex items-center gap-2 mb-4">
                            <div class="w-8 h-8 bg-[#d2a30b] rounded flex items-center justify-center">
                                <span class="text-white font-bold text-sm">DK</span>
                            </div>
                            <h4 class="text-white font-['Montserrat',sans-serif]"><?php bloginfo('name'); ?></h4>
                        </div>
                        <p class="text-sm text-gray-400">
                            Marketplace de produits digitaux de qualité pour gagner du temps dans vos projets.
                        </p>
                    </div>

                    <div>
                        <h4 class="dk-footer-title">Légal</h4>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer-legal',
                            'menu_class'     => 'dk-footer-list',
                            'fallback_cb'    => false,
                        ));
                        ?>
                    </div>

                    <div>
                        <h4 class="dk-footer-title">Catégories</h4>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer-categories',
                            'menu_class'     => 'dk-footer-list',
                            'fallback_cb'    => false,
                        ));
                        ?>
                    </div>

                    <div>
                        <h4 class="dk-footer-title">Contact</h4>
                        <ul class="dk-footer-list">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-[#d2a30b]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <span class="text-white text-sm">Email</span>
                            </li>
                            <li class="text-gray-400 text-sm">support@digitalkappa.com</li>
                        </ul>
                    </div>
                </div>

                <div class="dk-footer-bottom">
                    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Tous droits réservés.</p>
                </div>
            </div>
        </footer>
        <?php
    }
    ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
