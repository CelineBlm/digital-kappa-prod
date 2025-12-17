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
    <!-- Fallback Footer (matches React original) -->
    <footer class="bg-dk-dark font-body">
        <div class="max-w-7xl mx-auto px-4 lg:px-28 pt-16 pb-0">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Brand -->
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-14 h-10 flex items-center justify-center">
                            <svg class="w-14 h-8" viewBox="0 0 48 32" fill="none">
                                <path d="M0 0H28.6V32H0V0Z" fill="white"/>
                                <path d="M31.4 0H48V32H31.4V0Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-base leading-relaxed" style="color: #99a1af;">
                        Des ressources numériques simples et de qualité pour créateurs, entrepreneurs et passionnés.
                    </p>
                </div>

                <!-- Légal -->
                <div>
                    <h4 class="text-white font-heading text-lg mb-4">Légal</h4>
                    <ul class="space-y-3">
                        <li><a href="<?php echo esc_url(home_url('/a-propos/')); ?>" class="text-base hover:text-white transition-colors" style="color: #99a1af;">À propos</a></li>
                        <li><a href="<?php echo esc_url(home_url('/cgv/')); ?>" class="text-base hover:text-white transition-colors" style="color: #99a1af;">CGV</a></li>
                        <li><a href="<?php echo esc_url(home_url('/confidentialite/')); ?>" class="text-base hover:text-white transition-colors" style="color: #99a1af;">Confidentialité</a></li>
                    </ul>
                </div>

                <!-- Catégories -->
                <div>
                    <h4 class="text-white font-heading text-lg mb-4">Catégories</h4>
                    <ul class="space-y-3">
                        <li><a href="<?php echo esc_url(home_url('/categorie-produit/ebooks/')); ?>" class="text-base hover:text-white transition-colors" style="color: #99a1af;">Ebooks</a></li>
                        <li><a href="<?php echo esc_url(home_url('/categorie-produit/applications/')); ?>" class="text-base hover:text-white transition-colors" style="color: #99a1af;">Applications</a></li>
                        <li><a href="<?php echo esc_url(home_url('/categorie-produit/templates/')); ?>" class="text-base hover:text-white transition-colors" style="color: #99a1af;">Templates</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-white font-heading text-lg mb-4">Contact</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 mt-1 flex-shrink-0" fill="none" stroke="#d2a30b" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.67" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <div>
                                <p class="text-white text-base">Email</p>
                                <a href="mailto:contact@digitalkappa.com" class="text-base hover:text-white transition-colors" style="color: #99a1af;">contact@digitalkappa.com</a>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 mt-1 flex-shrink-0" fill="none" stroke="#d2a30b" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.67" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.67" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div>
                                <p class="text-white text-base">Localisation</p>
                                <p class="text-base" style="color: #99a1af;">En ligne, partout</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom -->
            <div class="border-t mt-12 pt-8 pb-8 text-center" style="border-color: #364153;">
                <p class="text-sm" style="color: #99a1af;">&copy; <?php echo date('Y'); ?> Digital Kappa. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
    <?php endif; ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
