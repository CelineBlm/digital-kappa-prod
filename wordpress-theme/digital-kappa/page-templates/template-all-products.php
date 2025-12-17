<?php
/**
 * Template Name: Tous nos produits
 * Template Post Type: page
 *
 * @package Digital_Kappa
 */

get_header();
?>

<div id="primary" class="dk-content-area">
    <main id="main" class="dk-site-main">
        <?php
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="dk-entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
        ?>
    </main>
</div>

<!-- Products Section -->
<section class="dk-products-page">
    <div class="dk-container">
        <div class="dk-products-layout">
            <!-- Sidebar Filters -->
            <aside class="dk-filters-sidebar" id="dk-filters-sidebar">
                <div class="dk-filters-header">
                    <h3>Filtres</h3>
                    <button class="dk-filters-close" id="dk-filters-close">
                        <i data-lucide="x"></i>
                    </button>
                </div>

                <!-- Category Filter -->
                <div class="dk-filter-group">
                    <h4>Catégorie</h4>
                    <div class="dk-filter-options">
                        <label class="dk-filter-checkbox">
                            <input type="checkbox" name="category" value="ebook">
                            <span class="dk-filter-label">Ebook</span>
                            <span class="dk-filter-count">3</span>
                        </label>
                        <label class="dk-filter-checkbox">
                            <input type="checkbox" name="category" value="application">
                            <span class="dk-filter-label">Application</span>
                            <span class="dk-filter-count">3</span>
                        </label>
                        <label class="dk-filter-checkbox">
                            <input type="checkbox" name="category" value="template">
                            <span class="dk-filter-label">Template</span>
                            <span class="dk-filter-count">3</span>
                        </label>
                    </div>
                </div>

                <!-- Promotion Toggle -->
                <div class="dk-filter-group">
                    <div class="dk-filter-toggle-row">
                        <span>En promotion</span>
                        <label class="dk-toggle">
                            <input type="checkbox" name="promotion">
                            <span class="dk-toggle-slider"></span>
                        </label>
                    </div>
                </div>

                <!-- Format Filter -->
                <div class="dk-filter-group">
                    <h4>Format</h4>
                    <div class="dk-filter-options">
                        <label class="dk-filter-checkbox">
                            <input type="checkbox" name="format" value="web">
                            <span class="dk-filter-label">Web</span>
                        </label>
                        <label class="dk-filter-checkbox">
                            <input type="checkbox" name="format" value="ios">
                            <span class="dk-filter-label">iOS</span>
                        </label>
                        <label class="dk-filter-checkbox">
                            <input type="checkbox" name="format" value="android">
                            <span class="dk-filter-label">Android</span>
                        </label>
                        <label class="dk-filter-checkbox">
                            <input type="checkbox" name="format" value="pdf">
                            <span class="dk-filter-label">PDF</span>
                        </label>
                    </div>
                    <button class="dk-filter-more">Voir plus +</button>
                </div>

                <!-- Rating Filter -->
                <div class="dk-filter-group">
                    <h4>Notes clients</h4>
                    <div class="dk-filter-options">
                        <label class="dk-filter-radio">
                            <input type="radio" name="rating" value="5">
                            <span class="dk-stars">★★★★★</span>
                            <span class="dk-filter-label">& plus</span>
                        </label>
                        <label class="dk-filter-radio">
                            <input type="radio" name="rating" value="4">
                            <span class="dk-stars">★★★★☆</span>
                            <span class="dk-filter-label">& plus</span>
                        </label>
                        <label class="dk-filter-radio">
                            <input type="radio" name="rating" value="3">
                            <span class="dk-stars">★★★☆☆</span>
                            <span class="dk-filter-label">& plus</span>
                        </label>
                        <label class="dk-filter-radio">
                            <input type="radio" name="rating" value="2">
                            <span class="dk-stars">★★☆☆☆</span>
                            <span class="dk-filter-label">& plus</span>
                        </label>
                        <label class="dk-filter-radio">
                            <input type="radio" name="rating" value="1">
                            <span class="dk-stars">★☆☆☆☆</span>
                            <span class="dk-filter-label">& plus</span>
                        </label>
                    </div>
                </div>

                <!-- Price Filter -->
                <div class="dk-filter-group">
                    <h4>Prix</h4>
                    <div class="dk-filter-options">
                        <label class="dk-filter-checkbox">
                            <input type="checkbox" name="price" value="0-30">
                            <span class="dk-filter-label">Moins de 30€</span>
                        </label>
                        <label class="dk-filter-checkbox">
                            <input type="checkbox" name="price" value="30-50">
                            <span class="dk-filter-label">30€ - 50€</span>
                        </label>
                        <label class="dk-filter-checkbox">
                            <input type="checkbox" name="price" value="50-100">
                            <span class="dk-filter-label">50€ - 100€</span>
                        </label>
                        <label class="dk-filter-checkbox">
                            <input type="checkbox" name="price" value="100+">
                            <span class="dk-filter-label">Plus de 100€</span>
                        </label>
                    </div>
                </div>

                <!-- Filter Actions -->
                <div class="dk-filter-actions">
                    <button class="dk-btn dk-btn-primary dk-btn-full">
                        Afficher les résultats
                    </button>
                    <button class="dk-filter-reset">
                        <i data-lucide="x"></i>
                        Effacer les filtres
                    </button>
                </div>
            </aside>

            <!-- Products Content -->
            <div class="dk-products-content">
                <!-- Page Header -->
                <div class="dk-products-header">
                    <h1>Tous nos produits</h1>
                    <p>Explorez l'ensemble de notre catalogue : ebooks, applications et templates de qualité professionnelle</p>
                </div>

                <!-- Mobile Filter Toggle -->
                <button class="dk-filter-toggle-btn" id="dk-filter-toggle">
                    <i data-lucide="sliders-horizontal"></i>
                    Filtres
                </button>

                <!-- Products Grid -->
                <div class="dk-products-grid" id="dk-products-grid">
                    <!-- Product Card 1 -->
                    <a href="<?php echo esc_url(home_url('/fiche-produit/')); ?>" class="dk-product-card" data-category="ebook" data-price="59" data-rating="4.8">
                        <div class="dk-product-card-image">
                            <img src="https://images.unsplash.com/photo-1675495277087-10598bf7bcd1?w=400&q=80" alt="Guide du Développeur Moderne">
                            <button class="dk-product-favorite" onclick="event.preventDefault();">
                                <i data-lucide="heart"></i>
                            </button>
                        </div>
                        <div class="dk-product-card-body">
                            <h3>Guide du Développeur Moderne</h3>
                            <span class="dk-product-category">Ebook</span>
                            <div class="dk-product-price">
                                <span class="dk-price-current">59 €</span>
                            </div>
                            <div class="dk-product-rating">
                                <span class="dk-stars-small">★★★★★</span>
                                <span>(234)</span>
                            </div>
                        </div>
                    </a>

                    <!-- Product Card 2 -->
                    <a href="<?php echo esc_url(home_url('/fiche-produit/')); ?>" class="dk-product-card" data-category="ebook" data-price="39" data-rating="4.7">
                        <div class="dk-product-card-image">
                            <img src="https://images.unsplash.com/photo-1553484771-371a605b060b?w=400&q=80" alt="Marketing Digital - Stratégies complètes">
                            <button class="dk-product-favorite" onclick="event.preventDefault();">
                                <i data-lucide="heart"></i>
                            </button>
                        </div>
                        <div class="dk-product-card-body">
                            <h3>Marketing Digital - Stratégies complètes</h3>
                            <span class="dk-product-category">Ebook</span>
                            <div class="dk-product-price">
                                <span class="dk-price-old">59 €</span>
                                <span class="dk-price-current">39 €</span>
                            </div>
                            <div class="dk-product-rating">
                                <span class="dk-stars-small">★★★★★</span>
                                <span>(189)</span>
                            </div>
                        </div>
                    </a>

                    <!-- Product Card 3 -->
                    <a href="<?php echo esc_url(home_url('/fiche-produit/')); ?>" class="dk-product-card" data-category="ebook" data-price="44" data-rating="4.9">
                        <div class="dk-product-card-image">
                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=400&q=80" alt="Réussir en Freelance - Guide complet">
                            <button class="dk-product-favorite" onclick="event.preventDefault();">
                                <i data-lucide="heart"></i>
                            </button>
                        </div>
                        <div class="dk-product-card-body">
                            <h3>Réussir en Freelance - Guide complet</h3>
                            <span class="dk-product-category">Ebook</span>
                            <div class="dk-product-price">
                                <span class="dk-price-current">44 €</span>
                            </div>
                            <div class="dk-product-rating">
                                <span class="dk-stars-small">★★★★★</span>
                                <span>(156)</span>
                            </div>
                        </div>
                    </a>

                    <!-- Product Card 4 -->
                    <a href="<?php echo esc_url(home_url('/fiche-produit/')); ?>" class="dk-product-card" data-category="ebook" data-price="49" data-rating="4.6">
                        <div class="dk-product-card-image">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&q=80" alt="Créer un Startup - De l'idée au succès">
                            <button class="dk-product-favorite" onclick="event.preventDefault();">
                                <i data-lucide="heart"></i>
                            </button>
                        </div>
                        <div class="dk-product-card-body">
                            <h3>Créer un Startup - De l'idée au succès</h3>
                            <span class="dk-product-category">Ebook</span>
                            <div class="dk-product-price">
                                <span class="dk-price-current">49 €</span>
                            </div>
                            <div class="dk-product-rating">
                                <span class="dk-stars-small">★★★★☆</span>
                                <span>(89)</span>
                            </div>
                        </div>
                    </a>

                    <!-- Product Card 5 -->
                    <a href="<?php echo esc_url(home_url('/fiche-produit/')); ?>" class="dk-product-card" data-category="ebook" data-price="54" data-rating="4.8">
                        <div class="dk-product-card-image">
                            <img src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?w=400&q=80" alt="UI/UX Design - De zéro à expert">
                            <button class="dk-product-favorite" onclick="event.preventDefault();">
                                <i data-lucide="heart"></i>
                            </button>
                        </div>
                        <div class="dk-product-card-body">
                            <h3>UI/UX Design - De zéro à expert</h3>
                            <span class="dk-product-category">Ebook</span>
                            <div class="dk-product-price">
                                <span class="dk-price-old">79 €</span>
                                <span class="dk-price-current">54 €</span>
                            </div>
                            <div class="dk-product-rating">
                                <span class="dk-stars-small">★★★★★</span>
                                <span>(178)</span>
                            </div>
                        </div>
                    </a>

                    <!-- Product Card 6 -->
                    <a href="<?php echo esc_url(home_url('/fiche-produit/')); ?>" class="dk-product-card" data-category="application" data-price="59" data-rating="4.7">
                        <div class="dk-product-card-image">
                            <img src="https://images.unsplash.com/photo-1461896836934-ffe607ba8211?w=400&q=80" alt="App Fitness Premium">
                            <button class="dk-product-favorite" onclick="event.preventDefault();">
                                <i data-lucide="heart"></i>
                            </button>
                        </div>
                        <div class="dk-product-card-body">
                            <h3>App Fitness Premium</h3>
                            <span class="dk-product-category">Application</span>
                            <div class="dk-product-price">
                                <span class="dk-price-current">59 €</span>
                            </div>
                            <div class="dk-product-rating">
                                <span class="dk-stars-small">★★★★★</span>
                                <span>(123)</span>
                            </div>
                        </div>
                    </a>

                    <!-- Product Card 7 -->
                    <a href="<?php echo esc_url(home_url('/fiche-produit/')); ?>" class="dk-product-card" data-category="application" data-price="79" data-rating="4.9">
                        <div class="dk-product-card-image">
                            <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=400&q=80" alt="E-commerce App Starter Kit">
                            <button class="dk-product-favorite" onclick="event.preventDefault();">
                                <i data-lucide="heart"></i>
                            </button>
                        </div>
                        <div class="dk-product-card-body">
                            <h3>E-commerce App Starter Kit</h3>
                            <span class="dk-product-category">Application</span>
                            <div class="dk-product-price">
                                <span class="dk-price-current">79 €</span>
                            </div>
                            <div class="dk-product-rating">
                                <span class="dk-stars-small">★★★★★</span>
                                <span>(245)</span>
                            </div>
                        </div>
                    </a>

                    <!-- Product Card 8 -->
                    <a href="<?php echo esc_url(home_url('/fiche-produit/')); ?>" class="dk-product-card" data-category="application" data-price="89" data-rating="4.6">
                        <div class="dk-product-card-image">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&q=80" alt="App Livraison - Clone Uber Eats">
                            <button class="dk-product-favorite" onclick="event.preventDefault();">
                                <i data-lucide="heart"></i>
                            </button>
                        </div>
                        <div class="dk-product-card-body">
                            <h3>App Livraison - Clone Uber Eats</h3>
                            <span class="dk-product-category">Application</span>
                            <div class="dk-product-price">
                                <span class="dk-price-current">89 €</span>
                            </div>
                            <div class="dk-product-rating">
                                <span class="dk-stars-small">★★★★★</span>
                                <span>(167)</span>
                            </div>
                        </div>
                    </a>

                    <!-- Product Card 9 -->
                    <a href="<?php echo esc_url(home_url('/fiche-produit/')); ?>" class="dk-product-card" data-category="application" data-price="69" data-rating="4.8">
                        <div class="dk-product-card-image">
                            <img src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?w=400&q=80" alt="App Réseau Social - Starter Kit">
                            <button class="dk-product-favorite" onclick="event.preventDefault();">
                                <i data-lucide="heart"></i>
                            </button>
                        </div>
                        <div class="dk-product-card-body">
                            <h3>App Réseau Social - Starter Kit</h3>
                            <span class="dk-product-category">Application</span>
                            <div class="dk-product-price">
                                <span class="dk-price-current">69 €</span>
                            </div>
                            <div class="dk-product-rating">
                                <span class="dk-stars-small">★★★★★</span>
                                <span>(198)</span>
                            </div>
                        </div>
                    </a>

                    <!-- Product Card 10 -->
                    <a href="<?php echo esc_url(home_url('/fiche-produit/')); ?>" class="dk-product-card" data-category="application" data-price="64" data-rating="4.7">
                        <div class="dk-product-card-image">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&q=80" alt="CRM Mobile - Gestion clients Pro">
                            <button class="dk-product-favorite" onclick="event.preventDefault();">
                                <i data-lucide="heart"></i>
                            </button>
                        </div>
                        <div class="dk-product-card-body">
                            <h3>CRM Mobile - Gestion clients Pro</h3>
                            <span class="dk-product-category">Application</span>
                            <div class="dk-product-price">
                                <span class="dk-price-old">89 €</span>
                                <span class="dk-price-current">64 €</span>
                            </div>
                            <div class="dk-product-rating">
                                <span class="dk-stars-small">★★★★★</span>
                                <span>(134)</span>
                            </div>
                        </div>
                    </a>

                    <!-- Product Card 11 -->
                    <a href="<?php echo esc_url(home_url('/fiche-produit/')); ?>" class="dk-product-card" data-category="template" data-price="59" data-rating="4.8">
                        <div class="dk-product-card-image">
                            <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?w=400&q=80" alt="Dashboard Analytics Pro">
                            <button class="dk-product-favorite" onclick="event.preventDefault();">
                                <i data-lucide="heart"></i>
                            </button>
                        </div>
                        <div class="dk-product-card-body">
                            <h3>Dashboard Analytics Pro</h3>
                            <span class="dk-product-category">Template</span>
                            <div class="dk-product-price">
                                <span class="dk-price-current">59 €</span>
                            </div>
                            <div class="dk-product-rating">
                                <span class="dk-stars-small">★★★★★</span>
                                <span>(289)</span>
                            </div>
                        </div>
                    </a>

                    <!-- Product Card 12 -->
                    <a href="<?php echo esc_url(home_url('/fiche-produit/')); ?>" class="dk-product-card" data-category="template" data-price="89" data-rating="4.9">
                        <div class="dk-product-card-image">
                            <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?w=400&q=80" alt="Landing Pages Bundle - 30 Templates">
                            <button class="dk-product-favorite" onclick="event.preventDefault();">
                                <i data-lucide="heart"></i>
                            </button>
                        </div>
                        <div class="dk-product-card-body">
                            <h3>Landing Pages Bundle - 30 Templates</h3>
                            <span class="dk-product-category">Template</span>
                            <div class="dk-product-price">
                                <span class="dk-price-old">129 €</span>
                                <span class="dk-price-current">89 €</span>
                            </div>
                            <div class="dk-product-rating">
                                <span class="dk-stars-small">★★★★★</span>
                                <span>(312)</span>
                            </div>
                        </div>
                    </a>

                    <!-- Product Card 13 -->
                    <a href="<?php echo esc_url(home_url('/fiche-produit/')); ?>" class="dk-product-card" data-category="template" data-price="44" data-rating="4.6">
                        <div class="dk-product-card-image">
                            <img src="https://images.unsplash.com/photo-1586281380349-632531db7ed4?w=400&q=80" alt="Pack 50 Templates Email Marketing">
                            <button class="dk-product-favorite" onclick="event.preventDefault();">
                                <i data-lucide="heart"></i>
                            </button>
                        </div>
                        <div class="dk-product-card-body">
                            <h3>Pack 50 Templates Email Marketing</h3>
                            <span class="dk-product-category">Template</span>
                            <div class="dk-product-price">
                                <span class="dk-price-current">44 €</span>
                            </div>
                            <div class="dk-product-rating">
                                <span class="dk-stars-small">★★★★★</span>
                                <span>(256)</span>
                            </div>
                        </div>
                    </a>

                    <!-- Product Card 14 -->
                    <a href="<?php echo esc_url(home_url('/fiche-produit/')); ?>" class="dk-product-card" data-category="template" data-price="54" data-rating="4.7">
                        <div class="dk-product-card-image">
                            <img src="https://images.unsplash.com/photo-1618761714954-0b8cd0026356?w=400&q=80" alt="UI Kit Modern - Components Library">
                            <button class="dk-product-favorite" onclick="event.preventDefault();">
                                <i data-lucide="heart"></i>
                            </button>
                        </div>
                        <div class="dk-product-card-body">
                            <h3>UI Kit Modern - Components Library</h3>
                            <span class="dk-product-category">Template</span>
                            <div class="dk-product-price">
                                <span class="dk-price-current">54 €</span>
                            </div>
                            <div class="dk-product-rating">
                                <span class="dk-stars-small">★★★★★</span>
                                <span>(167)</span>
                            </div>
                        </div>
                    </a>

                    <!-- Product Card 15 -->
                    <a href="<?php echo esc_url(home_url('/fiche-produit/')); ?>" class="dk-product-card" data-category="template" data-price="49" data-rating="4.8">
                        <div class="dk-product-card-image">
                            <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?w=400&q=80" alt="Portfolio Templates - Creative Pro">
                            <button class="dk-product-favorite" onclick="event.preventDefault();">
                                <i data-lucide="heart"></i>
                            </button>
                        </div>
                        <div class="dk-product-card-body">
                            <h3>Portfolio Templates - Creative Pro</h3>
                            <span class="dk-product-category">Template</span>
                            <div class="dk-product-price">
                                <span class="dk-price-old">69 €</span>
                                <span class="dk-price-current">49 €</span>
                            </div>
                            <div class="dk-product-rating">
                                <span class="dk-stars-small">★★★★★</span>
                                <span>(278)</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Load More Button -->
                <div class="dk-load-more">
                    <button class="dk-btn dk-btn-outline-dark">
                        Charger plus de produits
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="dk-section dk-section-white">
    <div class="dk-container" style="max-width: 800px;">
        <div class="dk-section-header">
            <h2>Questions fréquentes</h2>
            <p>Retrouvez les réponses aux questions les plus courantes</p>
        </div>

        <div class="dk-faq-list">
            <div class="dk-accordion-item">
                <button class="dk-accordion-trigger">
                    <span>Comment fonctionne l'achat sur Digital Kappa ?</span>
                    <i data-lucide="plus"></i>
                </button>
                <div class="dk-accordion-content">
                    <div class="dk-accordion-content-inner">
                        <p>Notre système d'achat est simple et rapide : cliquez sur un produit, consultez les détails et achetez en un clic. Pas besoin de créer un compte ou un panier.</p>
                    </div>
                </div>
            </div>

            <div class="dk-accordion-item">
                <button class="dk-accordion-trigger">
                    <span>Quels moyens de paiement acceptez-vous ?</span>
                    <i data-lucide="plus"></i>
                </button>
                <div class="dk-accordion-content">
                    <div class="dk-accordion-content-inner">
                        <p>Nous acceptons les cartes bancaires (Visa, Mastercard, American Express) et PayPal. Tous les paiements sont sécurisés via Stripe.</p>
                    </div>
                </div>
            </div>

            <div class="dk-accordion-item">
                <button class="dk-accordion-trigger">
                    <span>Puis-je essayer avant d'acheter ?</span>
                    <i data-lucide="plus"></i>
                </button>
                <div class="dk-accordion-content">
                    <div class="dk-accordion-content-inner">
                        <p>Certains produits proposent des démos ou versions d'essai. Dans tous les cas, nous offrons une garantie satisfait ou remboursé de 14 jours.</p>
                    </div>
                </div>
            </div>

            <div class="dk-accordion-item">
                <button class="dk-accordion-trigger">
                    <span>Que faire si j'ai un problème avec un produit ?</span>
                    <i data-lucide="plus"></i>
                </button>
                <div class="dk-accordion-content">
                    <div class="dk-accordion-content-inner">
                        <p>Contactez notre support par email à support@digitalkappa.com. Nous répondons sous 24h et vous aidons à résoudre tout problème technique.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="dk-text-center dk-mt-8">
            <a href="<?php echo esc_url(home_url('/faq/')); ?>" class="dk-btn dk-btn-outline-gold">
                Voir toutes les questions →
            </a>
        </div>
    </div>
</section>

<!-- Info Section -->
<section class="dk-section dk-section-light">
    <div class="dk-container">
        <h2 class="dk-text-center dk-mb-12">Catalogue Digital Kappa : Ebooks, applications web et templates professionnels</h2>

        <div class="dk-info-grid">
            <div class="dk-info-block">
                <div class="dk-info-icon">
                    <i data-lucide="search"></i>
                </div>
                <p>Explorez le catalogue complet Digital Kappa : plus de 15 produits digitaux professionnels en trois catégories principales. Ebooks pour apprendre et se former, applications mobiles et web prêtes à l'emploi, templates pour accélérer vos projets.</p>
            </div>

            <div class="dk-info-block">
                <div class="dk-info-icon">
                    <i data-lucide="book-open"></i>
                </div>
                <p>Nos ebooks couvrent développement web (React, Node.js, JavaScript, TypeScript), design UI/UX, marketing digital et entrepreneuriat. Format PDF téléchargeable immédiatement, avec exercices pratiques inclus.</p>
            </div>

            <div class="dk-info-block">
                <div class="dk-info-icon">
                    <i data-lucide="smartphone"></i>
                </div>
                <p>Applications fonctionnelles et personnalisables disponibles pour iOS, Android ou web. Support technique et mises à jour régulières inclus. Technologies (React, Vue.js, Figma, Sketch) 100% personnalisables et responsive.</p>
            </div>

            <div class="dk-info-block">
                <div class="dk-info-icon">
                    <i data-lucide="filter"></i>
                </div>
                <p>Utilisez nos filtres pour affiner votre recherche par catégorie, format ou niveau. Chaque produit dispose d'une fiche détaillée avec description complète et garantie de remboursement 14 jours. Paiement sécurisé par carte bancaire ou PayPal.</p>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
