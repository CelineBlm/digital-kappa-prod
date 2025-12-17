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
    // Check if Elementor footer exists
    $footer_done = false;
    if (function_exists('elementor_theme_do_location')) {
        $footer_done = elementor_theme_do_location('footer');
    }

    if (!$footer_done) :
    ?>
    <!-- Fallback Footer -->
    <footer class="bg-gray-900 text-gray-400" style="font-family: 'Montserrat', sans-serif;">
        <div class="max-w-7xl mx-auto px-4 lg:px-8 py-12 lg:py-16">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
                <!-- Brand -->
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-10 h-10 bg-amber-500 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-lg">DK</span>
                        </div>
                        <span class="text-white font-semibold text-lg">Digital Kappa</span>
                    </div>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Marketplace de produits digitaux de qualité pour gagner du temps dans vos projets.
                    </p>
                </div>

                <!-- Pages -->
                <div>
                    <h4 class="text-white font-semibold mb-4" style="font-family: 'Merriweather', serif;">Pages</h4>
                    <ul class="space-y-3">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>" class="text-gray-400 hover:text-amber-500 text-sm transition-colors">Accueil</a></li>
                        <li><a href="<?php echo esc_url(home_url('/tous-les-produits/')); ?>" class="text-gray-400 hover:text-amber-500 text-sm transition-colors">Tous les produits</a></li>
                        <li><a href="<?php echo esc_url(home_url('/comment-ca-marche/')); ?>" class="text-gray-400 hover:text-amber-500 text-sm transition-colors">Comment ça marche</a></li>
                        <li><a href="<?php echo esc_url(home_url('/faq/')); ?>" class="text-gray-400 hover:text-amber-500 text-sm transition-colors">FAQ</a></li>
                    </ul>
                </div>

                <!-- Catégories -->
                <div>
                    <h4 class="text-white font-semibold mb-4" style="font-family: 'Merriweather', serif;">Catégories</h4>
                    <ul class="space-y-3">
                        <li><a href="<?php echo esc_url(home_url('/categorie/ebooks/')); ?>" class="text-gray-400 hover:text-amber-500 text-sm transition-colors">Ebooks</a></li>
                        <li><a href="<?php echo esc_url(home_url('/categorie/applications/')); ?>" class="text-gray-400 hover:text-amber-500 text-sm transition-colors">Applications</a></li>
                        <li><a href="<?php echo esc_url(home_url('/categorie/templates/')); ?>" class="text-gray-400 hover:text-amber-500 text-sm transition-colors">Templates</a></li>
                    </ul>
                </div>

                <!-- Légal -->
                <div>
                    <h4 class="text-white font-semibold mb-4" style="font-family: 'Merriweather', serif;">Légal</h4>
                    <ul class="space-y-3">
                        <li><a href="<?php echo esc_url(home_url('/cgv/')); ?>" class="text-gray-400 hover:text-amber-500 text-sm transition-colors">CGV</a></li>
                        <li><a href="<?php echo esc_url(home_url('/confidentialite/')); ?>" class="text-gray-400 hover:text-amber-500 text-sm transition-colors">Confidentialité</a></li>
                        <li><a href="<?php echo esc_url(home_url('/a-propos/')); ?>" class="text-gray-400 hover:text-amber-500 text-sm transition-colors">À propos</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom -->
            <div class="border-t border-gray-700 mt-12 pt-8 text-center">
                <p class="text-sm text-gray-500">&copy; <?php echo date('Y'); ?> Digital Kappa. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
    <?php endif; ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
