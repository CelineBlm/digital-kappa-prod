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
                    } else {
                        ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="dk-footer-logo-link">
                            <div class="dk-footer-logo-icon">
                                <svg width="48" height="32" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <!-- D part -->
                                    <path d="M28.6087 15.9951C28.6087 16.3125 28.6006 16.6284 28.5839 16.9412C28.4047 20.3619 27.2625 23.5019 25.4605 26.0195C25.1419 26.4635 24.8039 26.8882 24.4461 27.292C21.8774 30.1907 18.3347 31.9905 14.4377 31.9905H0V22.7776C0 18.9166 2.85774 15.7866 6.279 15.7866V24.2821C6.279 24.5501 6.47317 24.769 6.71037 24.769H12.6275C16.8524 24.769 20.3092 20.8671 20.3092 16.0979V15.7578C20.3092 10.989 16.8522 7.08728 12.6275 7.08728H0.029386C0.029386 7.02679 0.0299622 6.96696 0.0316908 6.90647C0.0357241 6.72632 0.0455195 6.54812 0.0616529 6.37144C0.0662625 6.31486 0.0720245 6.25892 0.0783626 6.20299C0.0789388 6.19649 0.079515 6.19064 0.0800912 6.18478C0.0933437 6.07097 0.108325 5.95845 0.126187 5.84594C0.135406 5.78871 0.145201 5.73083 0.155573 5.67359C0.164792 5.62221 0.174587 5.57018 0.184959 5.51881C0.186111 5.511 0.18784 5.5032 0.189568 5.49539C0.202245 5.43166 0.216073 5.36857 0.230478 5.30613V5.30548C0.243155 5.2502 0.256407 5.19557 0.270236 5.14094C0.271964 5.13379 0.274269 5.12598 0.276574 5.11818C0.290979 5.06225 0.30596 5.00632 0.321517 4.95103C0.325551 4.93543 0.329584 4.91982 0.33477 4.90421C0.348598 4.85543 0.363003 4.80665 0.377984 4.75853C0.381442 4.74617 0.384899 4.73381 0.389508 4.7221C0.399304 4.68894 0.410251 4.65512 0.421199 4.62195C0.429842 4.59463 0.439061 4.56797 0.448856 4.54065C0.45289 4.52699 0.457499 4.51334 0.462109 4.49968C0.475361 4.46261 0.488614 4.42554 0.502443 4.38847C0.507628 4.37351 0.512814 4.35855 0.518576 4.34359C0.532405 4.30587 0.547386 4.2675 0.562367 4.22978C0.566977 4.21612 0.572162 4.20311 0.577924 4.18945C0.598091 4.13872 0.618834 4.088 0.640153 4.03727C0.662049 3.98524 0.68452 3.93451 0.706992 3.88313C0.73004 3.8324 0.753664 3.78232 0.777288 3.73159C0.825112 3.63144 0.874665 3.53258 0.926523 3.43503C0.944961 3.39991 0.963975 3.36544 0.983566 3.33097C0.996242 3.3069 1.00949 3.28349 1.02275 3.26008C1.036 3.23536 1.0504 3.21065 1.06481 3.18659C1.07691 3.16512 1.08959 3.14431 1.10169 3.1235C1.11667 3.09814 1.13165 3.07277 1.14778 3.04806C1.16103 3.02595 1.17429 3.00448 1.18812 2.98302C1.39209 2.65914 1.62007 2.35498 1.86841 2.07467C3.00467 0.793449 4.57442 0 6.30838 0H14.4377C17.5692 0 20.4713 1.16199 22.8239 3.12307C24.1361 4.21677 25.2767 5.55869 26.191 7.08749C26.3909 7.42113 26.5793 7.76366 26.7566 8.11486C27.6034 9.78912 28.1898 11.6513 28.4531 13.6287C28.5557 14.4011 28.6087 15.1917 28.6087 15.9954V15.9951Z" fill="white"/>
                                    <!-- K part -->
                                    <path d="M16.8727 30.0887C14.3669 32.7181 10.3857 32.6218 8.05675 29.7934L0.543928 20.6709L0.476515 20.5896C0.793423 19.0929 0.952835 17.5563 0.952835 15.9952C0.952835 13.811 0.637081 11.6668 0.0242004 9.63156C0.0161337 9.60489 0.00864293 9.57888 0 9.55221L4.39983 2.80963C6.42861 -0.29956 10.374 -0.907004 13.1288 1.38251L4.33299 14.8633L16.8725 30.0887H16.8727Z" fill="white" transform="translate(31, 0)"/>
                                </svg>
                            </div>
                            <span class="dk-footer-logo-text">Digital Kappa</span>
                        </a>
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
