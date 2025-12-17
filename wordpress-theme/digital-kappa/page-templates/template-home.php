<?php
/**
 * Template Name: Accueil
 * Template Post Type: page
 *
 * @package Digital_Kappa
 */

get_header();
?>

<!-- Hero Section -->
<section class="dk-section dk-hero dk-hero-light">
    <div class="dk-hero-blur" style="top: 20%; left: 10%;"></div>
    <div class="dk-hero-blur" style="bottom: 20%; right: 10%;"></div>

    <div class="dk-container">
        <div class="dk-hero-content" style="padding: var(--dk-space-16) 0;">
            <div class="dk-pill dk-mb-6" style="display: inline-flex;">
                <span class="dk-pill-dot"></span>
                <span>La marketplace des créateurs digitaux</span>
            </div>

            <h1 style="margin-bottom: var(--dk-space-6);">
                Vos ressources digitales, prêtes à l'emploi
            </h1>

            <p class="dk-text-secondary" style="font-size: var(--dk-text-lg); max-width: 768px; margin: 0 auto var(--dk-space-8);">
                Découvrez notre sélection de produits numériques premium : ebooks, applications et templates. Des ressources de qualité pour accélérer vos projets.
            </p>

            <div class="dk-cta-buttons">
                <a href="<?php echo esc_url(home_url('/tous-nos-produits/')); ?>" class="dk-btn dk-btn-primary dk-btn-lg">
                    <i data-lucide="search"></i>
                    Découvrir les produits
                </a>
                <a href="<?php echo esc_url(home_url('/comment-ca-marche/')); ?>" class="dk-btn dk-btn-secondary dk-btn-lg">
                    Comment ça marche
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="dk-section dk-section-light">
    <div class="dk-container">
        <div class="dk-section-header">
            <span class="dk-badge dk-badge-gold-light dk-mb-4" style="padding: var(--dk-space-2) var(--dk-space-6); border-radius: var(--dk-radius-full);">
                Nos catégories
            </span>
            <h2>Explorez notre catalogue</h2>
            <p>Trouvez les ressources adaptées à vos besoins</p>
        </div>

        <div class="dk-grid dk-grid-3">
            <!-- Ebooks -->
            <div class="dk-card-feature">
                <div class="dk-card-feature-icon">
                    <i data-lucide="book-open"></i>
                </div>
                <h3 class="dk-card-feature-title">Ebooks</h3>
                <p class="dk-card-feature-description">
                    Guides complets et formations pour développer vos compétences en développement, design et marketing digital.
                </p>
                <a href="<?php echo esc_url(home_url('/tous-nos-produits/?category=ebook')); ?>" class="dk-btn dk-btn-sm dk-btn-secondary dk-mt-4">
                    Voir les ebooks
                    <i data-lucide="arrow-right"></i>
                </a>
            </div>

            <!-- Applications -->
            <div class="dk-card-feature">
                <div class="dk-card-feature-icon">
                    <i data-lucide="smartphone"></i>
                </div>
                <h3 class="dk-card-feature-title">Applications</h3>
                <p class="dk-card-feature-description">
                    Applications mobiles et web complètes avec code source. Démarrez votre projet sur des bases solides.
                </p>
                <a href="<?php echo esc_url(home_url('/tous-nos-produits/?category=application')); ?>" class="dk-btn dk-btn-sm dk-btn-secondary dk-mt-4">
                    Voir les applications
                    <i data-lucide="arrow-right"></i>
                </a>
            </div>

            <!-- Templates -->
            <div class="dk-card-feature">
                <div class="dk-card-feature-icon">
                    <i data-lucide="layout"></i>
                </div>
                <h3 class="dk-card-feature-title">Templates</h3>
                <p class="dk-card-feature-description">
                    Designs professionnels et systèmes de design prêts à l'emploi pour vos projets web et mobile.
                </p>
                <a href="<?php echo esc_url(home_url('/tous-nos-produits/?category=template')); ?>" class="dk-btn dk-btn-sm dk-btn-secondary dk-mt-4">
                    Voir les templates
                    <i data-lucide="arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="dk-section dk-section-gray">
    <div class="dk-container">
        <div class="dk-section-header">
            <span class="dk-badge dk-badge-gold-light dk-mb-4" style="padding: var(--dk-space-2) var(--dk-space-6); border-radius: var(--dk-radius-full);">
                Sélection
            </span>
            <h2>Produits populaires</h2>
            <p>Découvrez les produits les plus appréciés par notre communauté</p>
        </div>

        <div class="dk-grid dk-grid-3">
            <!-- Product Card 1 -->
            <div class="dk-card-product">
                <img src="https://images.unsplash.com/photo-1675495277087-10598bf7bcd1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=800&q=80" alt="Guide du développeur moderne" class="dk-card-product-image">
                <div class="dk-card-product-content">
                    <span class="dk-card-product-category">
                        <i data-lucide="book-open" style="width: 12px; height: 12px;"></i>
                        Ebook
                    </span>
                    <h3 class="dk-card-product-title">Guide du développeur moderne</h3>
                    <p class="dk-card-product-description">Ebook complet pour maîtriser les outils et pratiques du développement moderne. 250+ pages de contenu pratique.</p>
                    <div class="dk-card-product-footer">
                        <span class="dk-card-product-price">59 €</span>
                        <span class="dk-card-product-rating">
                            <i data-lucide="star"></i>
                            4.8 (127)
                        </span>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="dk-card-product">
                <img src="https://images.unsplash.com/photo-1698440050363-1697e5f0277c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=800&q=80" alt="Design System Pro" class="dk-card-product-image">
                <div class="dk-card-product-content">
                    <span class="dk-card-product-category">
                        <i data-lucide="layout" style="width: 12px; height: 12px;"></i>
                        Template
                    </span>
                    <h3 class="dk-card-product-title">Design System Pro</h3>
                    <p class="dk-card-product-description">Système de design complet avec composants React, Figma et documentation. Plus de 200 composants.</p>
                    <div class="dk-card-product-footer">
                        <span class="dk-card-product-price">149 €</span>
                        <span class="dk-card-product-rating">
                            <i data-lucide="star"></i>
                            4.9 (89)
                        </span>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="dk-card-product">
                <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?w=800&q=80" alt="E-commerce Starter Kit" class="dk-card-product-image">
                <div class="dk-card-product-content">
                    <span class="dk-card-product-category">
                        <i data-lucide="smartphone" style="width: 12px; height: 12px;"></i>
                        Application
                    </span>
                    <h3 class="dk-card-product-title">E-commerce Starter Kit</h3>
                    <p class="dk-card-product-description">Kit complet pour créer votre boutique en ligne. Next.js + Stripe + CMS headless. Prêt à déployer.</p>
                    <div class="dk-card-product-footer">
                        <span class="dk-card-product-price">249 €</span>
                        <span class="dk-card-product-rating">
                            <i data-lucide="star"></i>
                            4.9 (71)
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="dk-text-center dk-mt-12">
            <a href="<?php echo esc_url(home_url('/tous-nos-produits/')); ?>" class="dk-btn dk-btn-primary dk-btn-lg">
                Voir tous les produits
                <i data-lucide="arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="dk-section dk-section-light">
    <div class="dk-container">
        <div class="dk-section-header">
            <span class="dk-badge dk-badge-gold-light dk-mb-4" style="padding: var(--dk-space-2) var(--dk-space-6); border-radius: var(--dk-radius-full);">
                Simple et rapide
            </span>
            <h2>Comment ça marche ?</h2>
            <p>Achetez et téléchargez vos produits en quelques clics</p>
        </div>

        <div class="dk-steps">
            <div class="dk-step">
                <div class="dk-step-number">1</div>
                <h3 class="dk-step-title">Parcourez le catalogue</h3>
                <p class="dk-step-description">Explorez notre sélection de produits digitaux premium et trouvez ce qui correspond à vos besoins.</p>
            </div>

            <div class="dk-step">
                <div class="dk-step-number">2</div>
                <h3 class="dk-step-title">Effectuez votre achat</h3>
                <p class="dk-step-description">Paiement 100% sécurisé par carte bancaire ou PayPal. Vos données sont protégées.</p>
            </div>

            <div class="dk-step">
                <div class="dk-step-number">3</div>
                <h3 class="dk-step-title">Téléchargez instantanément</h3>
                <p class="dk-step-description">Recevez immédiatement votre produit par email. Accès à vie et mises à jour gratuites.</p>
            </div>
        </div>
    </div>
</section>

<!-- Trust Section -->
<section class="dk-section dk-section-gray">
    <div class="dk-container">
        <div class="dk-section-header">
            <span class="dk-badge dk-badge-gold-light dk-mb-4" style="padding: var(--dk-space-2) var(--dk-space-6); border-radius: var(--dk-radius-full);">
                Pourquoi nous choisir
            </span>
            <h2>Vos garanties Digital Kappa</h2>
            <p>Nous nous engageons à vous offrir la meilleure expérience</p>
        </div>

        <div class="dk-grid dk-grid-4">
            <div class="dk-card-feature dk-text-center">
                <div class="dk-card-feature-icon" style="margin: 0 auto var(--dk-space-4);">
                    <i data-lucide="download"></i>
                </div>
                <h4 class="dk-card-feature-title">Téléchargement instantané</h4>
                <p class="dk-card-feature-description">Accès immédiat à vos produits dès la confirmation du paiement.</p>
            </div>

            <div class="dk-card-feature dk-text-center">
                <div class="dk-card-feature-icon" style="margin: 0 auto var(--dk-space-4);">
                    <i data-lucide="shield-check"></i>
                </div>
                <h4 class="dk-card-feature-title">Paiement sécurisé</h4>
                <p class="dk-card-feature-description">Transactions cryptées et conformes aux normes bancaires internationales.</p>
            </div>

            <div class="dk-card-feature dk-text-center">
                <div class="dk-card-feature-icon" style="margin: 0 auto var(--dk-space-4);">
                    <i data-lucide="refresh-cw"></i>
                </div>
                <h4 class="dk-card-feature-title">Garantie 14 jours</h4>
                <p class="dk-card-feature-description">Satisfait ou remboursé pendant 14 jours, sans condition.</p>
            </div>

            <div class="dk-card-feature dk-text-center">
                <div class="dk-card-feature-icon" style="margin: 0 auto var(--dk-space-4);">
                    <i data-lucide="headphones"></i>
                </div>
                <h4 class="dk-card-feature-title">Support réactif</h4>
                <p class="dk-card-feature-description">Une équipe disponible pour répondre à toutes vos questions.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="dk-cta">
    <div class="dk-cta-content">
        <h2>Prêt à booster vos projets ?</h2>
        <p>Rejoignez des milliers de créateurs qui font confiance à Digital Kappa pour leurs ressources digitales.</p>
        <div class="dk-cta-buttons">
            <a href="<?php echo esc_url(home_url('/tous-nos-produits/')); ?>" class="dk-btn dk-btn-primary dk-btn-lg">
                Découvrir les produits
            </a>
            <a href="<?php echo esc_url(home_url('/a-propos/')); ?>" class="dk-btn dk-btn-outline-white dk-btn-lg">
                En savoir plus
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
