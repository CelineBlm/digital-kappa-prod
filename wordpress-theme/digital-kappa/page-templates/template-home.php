<?php
/**
 * Template Name: Accueil
 * Template Post Type: page
 *
 * @package Digital_Kappa
 */

get_header();

// Check if page is built with Elementor
$is_elementor = digital_kappa_is_elementor_page();
?>

<?php if ($is_elementor) : ?>
    <!-- Elementor Content -->
    <div id="primary" class="dk-content-area">
        <main id="main" class="dk-site-main">
            <?php
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
            ?>
        </main>
    </div>
<?php else : ?>
    <!-- Default Theme Content -->

    <!-- Hero Section -->
    <section class="dk-hero-home">
        <div class="dk-container">
            <div class="dk-hero-grid">
                <!-- Left Content -->
                <div class="dk-hero-left">
                    <h1 class="dk-hero-title">
                        Marketplace de<br>
                        <span class="dk-hero-title-gold">produits digitaux</span>
                    </h1>

                    <p class="dk-hero-description">
                        Découvrez une sélection de produits digitaux de qualité : applications mobiles, ebooks et templates pour booster votre productivité. Achat simple en un clic, téléchargement immédiat, accès à vie.
                    </p>

                    <div class="dk-hero-buttons">
                        <a href="<?php echo esc_url(home_url('/tous-nos-produits/')); ?>" class="dk-btn dk-btn-primary dk-btn-lg">
                            Explorer les produits
                        </a>
                        <a href="<?php echo esc_url(home_url('/comment-ca-marche/')); ?>" class="dk-btn dk-btn-outline-gold dk-btn-lg">
                            Comment ça marche
                        </a>
                    </div>
                </div>

                <!-- Right Content - Category Images -->
                <div class="dk-hero-right">
                    <a href="<?php echo esc_url(home_url('/tous-nos-produits/?category=application')); ?>" class="dk-hero-category-card dk-hero-category-large">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=800&q=80" alt="Applications mobiles">
                        <div class="dk-hero-category-overlay">
                            <h3 class="dk-hero-category-title">Applications mobiles</h3>
                            <p class="dk-hero-category-subtitle">Applications prêtes à l'emploi</p>
                        </div>
                    </a>

                    <div class="dk-hero-category-row">
                        <a href="<?php echo esc_url(home_url('/tous-nos-produits/?category=ebook')); ?>" class="dk-hero-category-card">
                            <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=600&q=80" alt="Ebooks">
                            <div class="dk-hero-category-overlay">
                                <h3 class="dk-hero-category-title">Ebooks</h3>
                                <p class="dk-hero-category-subtitle">Guides & formations</p>
                            </div>
                        </a>
                        <a href="<?php echo esc_url(home_url('/tous-nos-produits/?category=template')); ?>" class="dk-hero-category-card">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=80" alt="Templates">
                            <div class="dk-hero-category-overlay">
                                <h3 class="dk-hero-category-title">Templates</h3>
                                <p class="dk-hero-category-subtitle">Design & code</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Bar -->
    <section class="dk-benefits-bar">
        <div class="dk-container">
            <div class="dk-benefits-grid">
                <div class="dk-benefit-item">
                    <div class="dk-benefit-icon">
                        <i data-lucide="zap"></i>
                    </div>
                    <div class="dk-benefit-text">
                        <h4>Simplicité</h4>
                        <p>Interface intuitive pour trouver rapidement le produit idéal</p>
                    </div>
                </div>
                <div class="dk-benefit-item">
                    <div class="dk-benefit-icon">
                        <i data-lucide="shield-check"></i>
                    </div>
                    <div class="dk-benefit-text">
                        <h4>Fiabilité</h4>
                        <p>Produits testés et vérifiés avant chaque publication</p>
                    </div>
                </div>
                <div class="dk-benefit-item">
                    <div class="dk-benefit-icon">
                        <i data-lucide="rocket"></i>
                    </div>
                    <div class="dk-benefit-text">
                        <h4>Rapidité</h4>
                        <p>Accès instantané à vos achats immédiatement après paiement</p>
                    </div>
                </div>
                <div class="dk-benefit-item">
                    <div class="dk-benefit-icon">
                        <i data-lucide="award"></i>
                    </div>
                    <div class="dk-benefit-text">
                        <h4>Qualité</h4>
                        <p>Sélection rigoureuse de produits premium uniquement</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Products Section -->
    <section class="dk-section dk-section-white">
        <div class="dk-container">
            <div class="dk-section-header">
                <h2>Nos produits populaires</h2>
                <p>Découvrez notre sélection de produits digitaux : applications, ebooks et templates de qualité professionnelle pour vos projets</p>
            </div>

            <div class="dk-products-scroll">
                <!-- Product Card 1 -->
                <a href="<?php echo esc_url(home_url('/fiche-produit/')); ?>" class="dk-product-card-home">
                    <div class="dk-product-card-image">
                        <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?w=400&q=80" alt="AppFitness Premium">
                    </div>
                    <div class="dk-product-card-content">
                        <h3>AppFitness Premium</h3>
                        <p class="dk-product-card-price">79 €</p>
                        <span class="dk-product-card-link">Voir le produit →</span>
                    </div>
                </a>

                <!-- Product Card 2 -->
                <a href="<?php echo esc_url(home_url('/fiche-produit/')); ?>" class="dk-product-card-home">
                    <div class="dk-product-card-image">
                        <img src="https://images.unsplash.com/photo-1586281380349-632531db7ed4?w=400&q=80" alt="Business Analytics Pro">
                    </div>
                    <div class="dk-product-card-content">
                        <h3>Business Analytics Pro</h3>
                        <p class="dk-product-card-price">49 €</p>
                        <span class="dk-product-card-link">Voir le produit →</span>
                    </div>
                </a>

                <!-- Product Card 3 -->
                <a href="<?php echo esc_url(home_url('/fiche-produit/')); ?>" class="dk-product-card-home">
                    <div class="dk-product-card-image">
                        <img src="https://images.unsplash.com/photo-1675495277087-10598bf7bcd1?w=400&q=80" alt="Guide du Développeur Moderne">
                    </div>
                    <div class="dk-product-card-content">
                        <h3>Guide du Développeur Moderne</h3>
                        <p class="dk-product-card-price">59 €</p>
                        <span class="dk-product-card-link">Voir le produit →</span>
                    </div>
                </a>

                <!-- Product Card 4 -->
                <a href="<?php echo esc_url(home_url('/fiche-produit/')); ?>" class="dk-product-card-home">
                    <div class="dk-product-card-image">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&q=80" alt="Pack UI Templates SaaS Marketing">
                    </div>
                    <div class="dk-product-card-content">
                        <h3>Pack UI Templates SaaS Marketing</h3>
                        <p class="dk-product-card-price">79 €</p>
                        <span class="dk-product-card-link">Voir le produit →</span>
                    </div>
                </a>

                <!-- Product Card 5 -->
                <a href="<?php echo esc_url(home_url('/fiche-produit/')); ?>" class="dk-product-card-home">
                    <div class="dk-product-card-image">
                        <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?w=400&q=80" alt="E-commerce App Complete">
                    </div>
                    <div class="dk-product-card-content">
                        <h3>E-commerce App Complete</h3>
                        <p class="dk-product-card-price">79 €</p>
                        <span class="dk-product-card-link">Voir le produit →</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="dk-section dk-section-light">
        <div class="dk-container">
            <div class="dk-section-header">
                <h2>Catégories de produits</h2>
                <p>Explorez notre sélection organisée par types de produits digitaux dans trois catégories principales</p>
            </div>

            <div class="dk-grid dk-grid-3">
                <div class="dk-category-card">
                    <div class="dk-category-icon">
                        <i data-lucide="smartphone"></i>
                    </div>
                    <h3>Applications mobiles</h3>
                    <p>Applications iOS & Android prêtes à l'emploi pour lancer votre activité sur mobile rapidement</p>
                    <a href="<?php echo esc_url(home_url('/tous-nos-produits/?category=application')); ?>" class="dk-category-link">
                        Explorer <i data-lucide="arrow-right"></i>
                    </a>
                </div>

                <div class="dk-category-card">
                    <div class="dk-category-icon">
                        <i data-lucide="book-open"></i>
                    </div>
                    <h3>Ebooks</h3>
                    <p>Guides PDF complets pour développer vos compétences et booster votre carrière</p>
                    <a href="<?php echo esc_url(home_url('/tous-nos-produits/?category=ebook')); ?>" class="dk-category-link">
                        Explorer <i data-lucide="arrow-right"></i>
                    </a>
                </div>

                <div class="dk-category-card">
                    <div class="dk-category-icon">
                        <i data-lucide="layout"></i>
                    </div>
                    <h3>Templates</h3>
                    <p>Designs professionnels prêts pour vos projets web et applications mobiles</p>
                    <a href="<?php echo esc_url(home_url('/tous-nos-produits/?category=template')); ?>" class="dk-category-link">
                        Explorer <i data-lucide="arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="dk-section dk-section-white">
        <div class="dk-container">
            <div class="dk-section-header">
                <span class="dk-badge dk-badge-gold-light">Nos avantages</span>
                <h2>Pourquoi choisir Digital Kappa</h2>
                <p>En tant que marketplace de confiance depuis 2024, nous nous engageons à offrir une expérience d'achat de qualité</p>
            </div>

            <div class="dk-grid dk-grid-4">
                <div class="dk-advantage-card">
                    <div class="dk-advantage-icon">
                        <i data-lucide="check-circle"></i>
                    </div>
                    <h4>Sélection rigoureuse</h4>
                    <p>Chaque produit est vérifié et testé avant publication</p>
                </div>

                <div class="dk-advantage-card">
                    <div class="dk-advantage-icon">
                        <i data-lucide="download"></i>
                    </div>
                    <h4>Téléchargement instantané</h4>
                    <p>Accès immédiat après paiement, sans délai d'attente</p>
                </div>

                <div class="dk-advantage-card">
                    <div class="dk-advantage-icon">
                        <i data-lucide="lock"></i>
                    </div>
                    <h4>Paiement sécurisé</h4>
                    <p>Transactions 100% sécurisées via Stripe</p>
                </div>

                <div class="dk-advantage-card">
                    <div class="dk-advantage-icon">
                        <i data-lucide="clock"></i>
                    </div>
                    <h4>Gain de temps</h4>
                    <p>Évitez des heures de développement grâce à nos produits prêts à l'emploi</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner Section -->
    <section class="dk-section dk-section-light">
        <div class="dk-container">
            <div class="dk-partner-grid">
                <div class="dk-partner-content">
                    <h2>Digital Kappa, votre partenaire digital</h2>
                    <p class="dk-partner-intro">
                        Digital Kappa a été créé avec l'envie de proposer des ressources numériques simples, efficaces et de qualité pour aider les créateurs, entrepreneurs et passionnés à accomplir plus en moins de temps.
                    </p>
                    <p>
                        Notre mission : rendre l'accès aux outils digitaux plus rapide, plus simple et plus fiable. Contrairement à une marketplace généraliste, nous ne cherchons pas à multiplier les références, nous proposons une sélection restreinte mais soigneusement vérifiée pour vous faire gagner un temps précieux.
                    </p>

                    <ul class="dk-partner-checklist">
                        <li>
                            <i data-lucide="check"></i>
                            <span>Téléchargement instantané</span>
                        </li>
                        <li>
                            <i data-lucide="check"></i>
                            <span>Compatibilité vérifiée et testée</span>
                        </li>
                        <li>
                            <i data-lucide="check"></i>
                            <span>Qualité contrôlée sur tous les produits</span>
                        </li>
                        <li>
                            <i data-lucide="check"></i>
                            <span>Assistance réactive et fiable</span>
                        </li>
                    </ul>

                    <p class="dk-partner-note">
                        <em>Simplicité – Accessibilité – Qualité – Modernité – Fiabilité</em>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="dk-section dk-section-white">
        <div class="dk-container" style="max-width: 800px;">
            <div class="dk-section-header">
                <h2>Questions fréquentes</h2>
                <p>Retrouvez les réponses aux questions les plus fréquentes posées par nos clients</p>
            </div>

            <div class="dk-faq-list">
                <div class="dk-accordion-item">
                    <button class="dk-accordion-trigger">
                        <span>Comment fonctionne le téléchargement après achat ?</span>
                        <i data-lucide="chevron-down"></i>
                    </button>
                    <div class="dk-accordion-content">
                        <div class="dk-accordion-content-inner">
                            <p>Après votre achat, vous recevez instantanément un lien de téléchargement par e-mail. Vous pouvez également accéder à tous vos achats depuis votre espace client à tout moment.</p>
                        </div>
                    </div>
                </div>

                <div class="dk-accordion-item">
                    <button class="dk-accordion-trigger">
                        <span>Les produits sont-ils compatibles avec tous les appareils ?</span>
                        <i data-lucide="chevron-down"></i>
                    </button>
                    <div class="dk-accordion-content">
                        <div class="dk-accordion-content-inner">
                            <p>Chaque fiche produit détaille les compatibilités. Nos ebooks sont en PDF universel, nos templates sont compatibles avec les principaux logiciels, et nos applications précisent les versions iOS/Android supportées.</p>
                        </div>
                    </div>
                </div>

                <div class="dk-accordion-item">
                    <button class="dk-accordion-trigger">
                        <span>Puis-je obtenir un remboursement ?</span>
                        <i data-lucide="chevron-down"></i>
                    </button>
                    <div class="dk-accordion-content">
                        <div class="dk-accordion-content-inner">
                            <p>Oui, nous offrons une garantie satisfait ou remboursé de 14 jours. Si le produit ne correspond pas à vos attentes, contactez notre support pour obtenir un remboursement complet.</p>
                        </div>
                    </div>
                </div>

                <div class="dk-accordion-item">
                    <button class="dk-accordion-trigger">
                        <span>Y a-t-il une licence d'utilisation ?</span>
                        <i data-lucide="chevron-down"></i>
                    </button>
                    <div class="dk-accordion-content">
                        <div class="dk-accordion-content-inner">
                            <p>Oui, chaque produit est livré avec une licence d'utilisation personnelle ou commerciale selon le produit. Les détails de la licence sont indiqués sur chaque fiche produit.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dk-text-center dk-mt-8">
                <a href="<?php echo esc_url(home_url('/faq/')); ?>" class="dk-btn dk-btn-outline-gold">
                    Voir toutes les questions
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="dk-cta-section">
        <div class="dk-container">
            <div class="dk-cta-content">
                <h2>Prêt à découvrir nos produits digitaux ?</h2>
                <p>Explorez nos meilleures ressources et commencez dès aujourd'hui à accélérer vos projets avec Digital Kappa pour gagner du temps et accéder à des ressources de qualité.</p>

                <div class="dk-cta-buttons">
                    <a href="<?php echo esc_url(home_url('/tous-nos-produits/')); ?>" class="dk-btn dk-btn-primary dk-btn-lg">
                        Explorer le catalogue
                    </a>
                    <a href="<?php echo esc_url(home_url('/a-propos/')); ?>" class="dk-btn dk-btn-outline-white dk-btn-lg">
                        En savoir plus
                    </a>
                </div>

                <div class="dk-cta-features">
                    <div class="dk-cta-feature">
                        <i data-lucide="download"></i>
                        <span>Téléchargement instantané</span>
                        <small>Accès immédiat à vos achats</small>
                    </div>
                    <div class="dk-cta-feature">
                        <i data-lucide="shield-check"></i>
                        <span>Qualité garantie</span>
                        <small>Produits vérifiés et approuvés</small>
                    </div>
                    <div class="dk-cta-feature">
                        <i data-lucide="headphones"></i>
                        <span>Support réactif</span>
                        <small>Assistance disponible par email</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="dk-section dk-section-light">
        <div class="dk-container">
            <h2 class="dk-text-center dk-mb-12">Digital Kappa : Marketplace française de produits digitaux professionnels</h2>

            <div class="dk-info-grid">
                <div class="dk-info-block">
                    <div class="dk-info-icon">
                        <i data-lucide="store"></i>
                    </div>
                    <p>Digital Kappa est la marketplace française qui vous permet d'acheter des ressources numériques prêtes à l'emploi et professionnelles. Notre catalogue propose des applications mobiles iOS et Android, des ebooks au format PDF, templates et packs graphiques. Nous sélectionnons chaque produit avec soin pour garantir une expérience simple et efficace.</p>
                </div>

                <div class="dk-info-block">
                    <div class="dk-info-icon">
                        <i data-lucide="target"></i>
                    </div>
                    <p>Notre mission : vous faire gagner des centaines d'heures de travail tout en vous offrant des ressources fiables et qualifiées. L'objectif : vous permettre de vous concentrer sur ce qui compte vraiment pour votre business, pendant que nous vous fournissons les outils.</p>
                </div>

                <div class="dk-info-block">
                    <div class="dk-info-icon">
                        <i data-lucide="file-check"></i>
                    </div>
                    <p>Si vous cherchez des templates Web pour créer des sites efficaces, des applications mobiles ou des applications web performantes, Digital Kappa est la solution. Nous mettons à votre disposition des produits testés et prêts à l'emploi qui s'adaptent à votre structure et à vos besoins professionnels.</p>
                </div>

                <div class="dk-info-block">
                    <div class="dk-info-icon">
                        <i data-lucide="globe"></i>
                    </div>
                    <p>Basée en France et conforme au RGPD, Digital Kappa s'engage pour la transparence, la sécurité des transactions et la qualité constante de son catalogue de produits digitaux professionnels.</p>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

<?php
get_footer();
