</main><!-- #main-content -->

<footer class="dk-footer">
    <div class="dk-footer-inner">
        <div class="dk-footer-grid">
            <!-- Column 1: Logo & Description -->
            <div class="dk-footer-column">
                <div class="dk-footer-logo">
                    <?php
                    $footer_logo_id = get_theme_mod('dk_logo_footer');
                    if ($footer_logo_id) {
                        echo wp_get_attachment_image($footer_logo_id, 'full', false, array('alt' => get_bloginfo('name'), 'class' => 'dk-footer-logo-img'));
                    } elseif (file_exists(get_template_directory() . '/assets/images/logo-digital-kappa.svg')) {
                        ?>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-digital-kappa.svg'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="dk-footer-logo-img" style="filter: brightness(0) invert(1);">
                        <?php
                    } else {
                        ?>
                        <div class="dk-footer-logo-icon">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="40" height="40" rx="8" fill="#d2a30b"/>
                                <text x="50%" y="55%" dominant-baseline="middle" text-anchor="middle" fill="white" font-family="Montserrat, sans-serif" font-weight="600" font-size="16">DK</text>
                            </svg>
                        </div>
                        <span class="dk-footer-logo-text"><?php bloginfo('name'); ?></span>
                        <?php
                    }
                    ?>
                </div>
                <p class="dk-footer-description">
                    <?php echo esc_html(get_theme_mod('dk_footer_description', 'Des ressources numériques simples et de qualité pour créateurs, entrepreneurs et passionnés.')); ?>
                </p>
            </div>

            <!-- Column 2: Pages -->
            <div class="dk-footer-column">
                <h4 class="dk-footer-title"><?php esc_html_e('Pages', 'digital-kappa'); ?></h4>
                <ul class="dk-footer-links">
                    <?php
                    if (has_nav_menu('footer')) {
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'container'      => false,
                            'items_wrap'     => '%3$s',
                            'walker'         => new Digital_Kappa_Footer_Walker(),
                        ));
                    } else {
                        $footer_pages = array(
                            'Accueil' => home_url('/'),
                            'Tous nos produits' => home_url('/tous-nos-produits/'),
                            'À propos' => home_url('/a-propos/'),
                        );
                        foreach ($footer_pages as $title => $url) {
                            echo '<li><a href="' . esc_url($url) . '" class="dk-footer-link">' . esc_html($title) . '</a></li>';
                        }
                    }
                    ?>
                </ul>
            </div>

            <!-- Column 3: Categories -->
            <div class="dk-footer-column">
                <h4 class="dk-footer-title"><?php esc_html_e('Catégories', 'digital-kappa'); ?></h4>
                <ul class="dk-footer-links">
                    <?php
                    if (has_nav_menu('categories')) {
                        wp_nav_menu(array(
                            'theme_location' => 'categories',
                            'container'      => false,
                            'items_wrap'     => '%3$s',
                            'walker'         => new Digital_Kappa_Footer_Walker(),
                        ));
                    } else {
                        $categories = array(
                            'Ebooks' => home_url('/tous-nos-produits/?category=ebook'),
                            'Applications' => home_url('/tous-nos-produits/?category=application'),
                            'Templates' => home_url('/tous-nos-produits/?category=template'),
                        );
                        foreach ($categories as $title => $url) {
                            echo '<li><a href="' . esc_url($url) . '" class="dk-footer-link">' . esc_html($title) . '</a></li>';
                        }
                    }
                    ?>
                </ul>
            </div>

            <!-- Column 4: Legal & Contact -->
            <div class="dk-footer-column">
                <h4 class="dk-footer-title"><?php esc_html_e('Légal', 'digital-kappa'); ?></h4>
                <ul class="dk-footer-links">
                    <?php
                    if (has_nav_menu('legal')) {
                        wp_nav_menu(array(
                            'theme_location' => 'legal',
                            'container'      => false,
                            'items_wrap'     => '%3$s',
                            'walker'         => new Digital_Kappa_Footer_Walker(),
                        ));
                    } else {
                        $legal_pages = array(
                            'CGV' => home_url('/cgv/'),
                            'Politique de confidentialité' => home_url('/politique-de-confidentialite/'),
                            'Mentions légales' => home_url('/mentions-legales/'),
                        );
                        foreach ($legal_pages as $title => $url) {
                            echo '<li><a href="' . esc_url($url) . '" class="dk-footer-link">' . esc_html($title) . '</a></li>';
                        }
                    }
                    ?>
                </ul>

                <!-- Contact Info -->
                <div class="dk-footer-contact" style="margin-top: 1.5rem;">
                    <div class="dk-footer-contact-item">
                        <i data-lucide="mail" class="dk-footer-contact-icon"></i>
                        <div>
                            <p class="dk-footer-contact-label"><?php esc_html_e('Email', 'digital-kappa'); ?></p>
                            <p class="dk-footer-contact-value"><?php echo esc_html(get_theme_mod('dk_contact_email', 'contact@digitalkappa.com')); ?></p>
                        </div>
                    </div>
                    <div class="dk-footer-contact-item">
                        <i data-lucide="map-pin" class="dk-footer-contact-icon"></i>
                        <div>
                            <p class="dk-footer-contact-label"><?php esc_html_e('Localisation', 'digital-kappa'); ?></p>
                            <p class="dk-footer-contact-value"><?php esc_html_e('En ligne, partout', 'digital-kappa'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="dk-footer-bottom">
            <p class="dk-footer-copyright">
                <?php echo wp_kses_post(get_theme_mod('dk_copyright', '© ' . date('Y') . ' Digital Kappa. Tous droits réservés.')); ?>
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
// Initialize Lucide icons
document.addEventListener('DOMContentLoaded', function() {
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
});
</script>
</body>
</html>
