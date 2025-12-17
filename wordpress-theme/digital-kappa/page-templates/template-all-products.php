<?php
/**
 * Template Name: Tous nos produits
 * Template Post Type: page
 *
 * @package Digital_Kappa
 */

get_header();
?>

<!-- Hero Section -->
<section class="dk-section dk-hero dk-hero-light" style="padding-top: var(--dk-space-12); padding-bottom: var(--dk-space-8);">
    <div class="dk-container">
        <div class="dk-hero-content">
            <span class="dk-badge dk-badge-gold-light dk-mb-4" style="padding: var(--dk-space-2) var(--dk-space-6); border-radius: var(--dk-radius-full);">
                Catalogue
            </span>
            <h1>Tous nos produits</h1>
            <p class="dk-text-secondary" style="font-size: var(--dk-text-lg); max-width: 768px; margin: 0 auto;">
                Découvrez notre sélection complète de produits digitaux premium. Utilisez les filtres pour trouver exactement ce dont vous avez besoin.
            </p>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="dk-section dk-section-light">
    <div class="dk-container">
        <div class="dk-products-layout" style="display: grid; gap: var(--dk-space-8);">

            <!-- Mobile Filters Toggle -->
            <div class="dk-filters-toggle" style="display: block;">
                <button class="dk-btn dk-btn-secondary dk-btn-full" id="dk-filters-toggle-btn" style="margin-bottom: var(--dk-space-6);">
                    <i data-lucide="sliders-horizontal"></i>
                    Filtrer les produits
                </button>
            </div>

            <div class="dk-products-grid" style="display: grid; grid-template-columns: 1fr; gap: var(--dk-space-8);">

                <!-- Sidebar Filters -->
                <aside class="dk-filters" id="dk-filters-sidebar">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: var(--dk-space-6);">
                        <h3 class="dk-filters-title" style="margin-bottom: 0;">Filtres</h3>
                        <button class="dk-btn dk-btn-sm" id="dk-filters-close" style="display: none;">
                            <i data-lucide="x"></i>
                        </button>
                    </div>

                    <!-- Category Filter -->
                    <div class="dk-filters-group">
                        <h4 class="dk-filters-title">Catégorie</h4>
                        <div class="dk-filters-options">
                            <label class="dk-checkbox">
                                <input type="checkbox" name="category" value="all" checked>
                                <span>Tous les produits</span>
                            </label>
                            <label class="dk-checkbox">
                                <input type="checkbox" name="category" value="ebook">
                                <span>Ebooks</span>
                            </label>
                            <label class="dk-checkbox">
                                <input type="checkbox" name="category" value="application">
                                <span>Applications</span>
                            </label>
                            <label class="dk-checkbox">
                                <input type="checkbox" name="category" value="template">
                                <span>Templates</span>
                            </label>
                        </div>
                    </div>

                    <!-- Price Filter -->
                    <div class="dk-filters-group">
                        <h4 class="dk-filters-title">Prix</h4>
                        <div class="dk-filters-options">
                            <label class="dk-radio">
                                <input type="radio" name="price" value="all" checked>
                                <span>Tous les prix</span>
                            </label>
                            <label class="dk-radio">
                                <input type="radio" name="price" value="0-50">
                                <span>Moins de 50 €</span>
                            </label>
                            <label class="dk-radio">
                                <input type="radio" name="price" value="50-100">
                                <span>50 € - 100 €</span>
                            </label>
                            <label class="dk-radio">
                                <input type="radio" name="price" value="100-200">
                                <span>100 € - 200 €</span>
                            </label>
                            <label class="dk-radio">
                                <input type="radio" name="price" value="200+">
                                <span>Plus de 200 €</span>
                            </label>
                        </div>
                    </div>

                    <!-- Rating Filter -->
                    <div class="dk-filters-group">
                        <h4 class="dk-filters-title">Note minimum</h4>
                        <div class="dk-filters-options">
                            <label class="dk-radio">
                                <input type="radio" name="rating" value="all" checked>
                                <span>Toutes les notes</span>
                            </label>
                            <label class="dk-radio">
                                <input type="radio" name="rating" value="4">
                                <span>4 étoiles et plus</span>
                            </label>
                            <label class="dk-radio">
                                <input type="radio" name="rating" value="4.5">
                                <span>4.5 étoiles et plus</span>
                            </label>
                        </div>
                    </div>

                    <!-- Reset Filters -->
                    <button class="dk-btn dk-btn-secondary dk-btn-full dk-mt-6" id="dk-reset-filters">
                        <i data-lucide="rotate-ccw"></i>
                        Réinitialiser les filtres
                    </button>
                </aside>

                <!-- Products Grid -->
                <div class="dk-products-list">
                    <!-- Sort Bar -->
                    <div class="dk-sort-bar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: var(--dk-space-6); flex-wrap: wrap; gap: var(--dk-space-4);">
                        <p class="dk-text-secondary" style="margin: 0;">
                            <span id="dk-products-count">12</span> produits trouvés
                        </p>
                        <select class="dk-input" style="width: auto; padding: var(--dk-space-2) var(--dk-space-4);" id="dk-sort-select">
                            <option value="popular">Les plus populaires</option>
                            <option value="newest">Les plus récents</option>
                            <option value="price-asc">Prix croissant</option>
                            <option value="price-desc">Prix décroissant</option>
                            <option value="rating">Meilleures notes</option>
                        </select>
                    </div>

                    <!-- Products Grid -->
                    <div class="dk-grid dk-grid-3" id="dk-products-grid">
                        <!-- Product Card 1 -->
                        <div class="dk-card-product" data-category="ebook" data-price="59" data-rating="4.8">
                            <img src="https://images.unsplash.com/photo-1675495277087-10598bf7bcd1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=800&q=80" alt="Guide du développeur moderne" class="dk-card-product-image">
                            <div class="dk-card-product-content">
                                <span class="dk-card-product-category">
                                    <i data-lucide="book-open" style="width: 12px; height: 12px;"></i>
                                    Ebook
                                </span>
                                <h3 class="dk-card-product-title">Guide du développeur moderne</h3>
                                <p class="dk-card-product-description">Ebook complet pour maîtriser les outils et pratiques du développement moderne.</p>
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
                        <div class="dk-card-product" data-category="template" data-price="149" data-rating="4.9">
                            <img src="https://images.unsplash.com/photo-1698440050363-1697e5f0277c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=800&q=80" alt="Design System Pro" class="dk-card-product-image">
                            <div class="dk-card-product-content">
                                <span class="dk-card-product-category">
                                    <i data-lucide="layout" style="width: 12px; height: 12px;"></i>
                                    Template
                                </span>
                                <h3 class="dk-card-product-title">Design System Pro</h3>
                                <p class="dk-card-product-description">Système de design complet avec composants React, Figma et documentation.</p>
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
                        <div class="dk-card-product" data-category="ebook" data-price="79" data-rating="4.7">
                            <img src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?w=800&q=80" alt="Masterclass UI/UX Design" class="dk-card-product-image">
                            <div class="dk-card-product-content">
                                <span class="dk-card-product-category">
                                    <i data-lucide="book-open" style="width: 12px; height: 12px;"></i>
                                    Ebook
                                </span>
                                <h3 class="dk-card-product-title">Masterclass UI/UX Design</h3>
                                <p class="dk-card-product-description">Formation complète en design d'interfaces et expérience utilisateur.</p>
                                <div class="dk-card-product-footer">
                                    <span class="dk-card-product-price">79 €</span>
                                    <span class="dk-card-product-rating">
                                        <i data-lucide="star"></i>
                                        4.7 (203)
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 4 -->
                        <div class="dk-card-product" data-category="application" data-price="199" data-rating="4.6">
                            <img src="https://images.unsplash.com/photo-1461896836934-ffe607ba8211?w=800&q=80" alt="Fitness Tracker Pro" class="dk-card-product-image">
                            <div class="dk-card-product-content">
                                <span class="dk-card-product-category">
                                    <i data-lucide="smartphone" style="width: 12px; height: 12px;"></i>
                                    Application
                                </span>
                                <h3 class="dk-card-product-title">Fitness Tracker Pro</h3>
                                <p class="dk-card-product-description">Application mobile complète de suivi fitness. Code source React Native inclus.</p>
                                <div class="dk-card-product-footer">
                                    <span class="dk-card-product-price">199 €</span>
                                    <span class="dk-card-product-rating">
                                        <i data-lucide="star"></i>
                                        4.6 (56)
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 5 -->
                        <div class="dk-card-product" data-category="template" data-price="49" data-rating="4.9">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80" alt="Landing Page SaaS" class="dk-card-product-image">
                            <div class="dk-card-product-content">
                                <span class="dk-card-product-category">
                                    <i data-lucide="layout" style="width: 12px; height: 12px;"></i>
                                    Template
                                </span>
                                <h3 class="dk-card-product-title">Landing Page SaaS</h3>
                                <p class="dk-card-product-description">Template de landing page moderne pour SaaS. Next.js 14, TypeScript, Tailwind CSS.</p>
                                <div class="dk-card-product-footer">
                                    <span class="dk-card-product-price">49 €</span>
                                    <span class="dk-card-product-rating">
                                        <i data-lucide="star"></i>
                                        4.9 (312)
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 6 -->
                        <div class="dk-card-product" data-category="ebook" data-price="39" data-rating="4.8">
                            <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=800&q=80" alt="IA pour le Marketing Digital" class="dk-card-product-image">
                            <div class="dk-card-product-content">
                                <span class="dk-card-product-category">
                                    <i data-lucide="book-open" style="width: 12px; height: 12px;"></i>
                                    Ebook
                                </span>
                                <h3 class="dk-card-product-title">IA pour le Marketing Digital</h3>
                                <p class="dk-card-product-description">Guide pratique pour utiliser l'IA dans vos campagnes marketing.</p>
                                <div class="dk-card-product-footer">
                                    <span class="dk-card-product-price">39 €</span>
                                    <span class="dk-card-product-rating">
                                        <i data-lucide="star"></i>
                                        4.8 (167)
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 7 -->
                        <div class="dk-card-product" data-category="template" data-price="129" data-rating="4.7">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&q=80" alt="Dashboard Admin Pro" class="dk-card-product-image">
                            <div class="dk-card-product-content">
                                <span class="dk-card-product-category">
                                    <i data-lucide="layout" style="width: 12px; height: 12px;"></i>
                                    Template
                                </span>
                                <h3 class="dk-card-product-title">Dashboard Admin Pro</h3>
                                <p class="dk-card-product-description">Template de tableau de bord admin complet. React + TypeScript + Chart.js.</p>
                                <div class="dk-card-product-footer">
                                    <span class="dk-card-product-price">129 €</span>
                                    <span class="dk-card-product-rating">
                                        <i data-lucide="star"></i>
                                        4.7 (94)
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 8 -->
                        <div class="dk-card-product" data-category="application" data-price="249" data-rating="4.9">
                            <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?w=800&q=80" alt="E-commerce Starter Kit" class="dk-card-product-image">
                            <div class="dk-card-product-content">
                                <span class="dk-card-product-category">
                                    <i data-lucide="smartphone" style="width: 12px; height: 12px;"></i>
                                    Application
                                </span>
                                <h3 class="dk-card-product-title">E-commerce Starter Kit</h3>
                                <p class="dk-card-product-description">Kit complet pour créer votre boutique en ligne. Next.js + Stripe + CMS.</p>
                                <div class="dk-card-product-footer">
                                    <span class="dk-card-product-price">249 €</span>
                                    <span class="dk-card-product-rating">
                                        <i data-lucide="star"></i>
                                        4.9 (71)
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 9 -->
                        <div class="dk-card-product" data-category="ebook" data-price="45" data-rating="4.6">
                            <img src="https://images.unsplash.com/photo-1590602847861-f357a9332bbc?w=800&q=80" alt="Guide Production Podcast" class="dk-card-product-image">
                            <div class="dk-card-product-content">
                                <span class="dk-card-product-category">
                                    <i data-lucide="book-open" style="width: 12px; height: 12px;"></i>
                                    Ebook
                                </span>
                                <h3 class="dk-card-product-title">Guide Production Podcast</h3>
                                <p class="dk-card-product-description">Guide complet pour lancer et monétiser votre podcast.</p>
                                <div class="dk-card-product-footer">
                                    <span class="dk-card-product-price">45 €</span>
                                    <span class="dk-card-product-rating">
                                        <i data-lucide="star"></i>
                                        4.6 (138)
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 10 -->
                        <div class="dk-card-product" data-category="template" data-price="89" data-rating="4.8">
                            <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=800&q=80" alt="Mobile UI Kit Premium" class="dk-card-product-image">
                            <div class="dk-card-product-content">
                                <span class="dk-card-product-category">
                                    <i data-lucide="layout" style="width: 12px; height: 12px;"></i>
                                    Template
                                </span>
                                <h3 class="dk-card-product-title">Mobile UI Kit Premium</h3>
                                <p class="dk-card-product-description">Kit UI mobile avec 150+ écrans pour iOS et Android. Figma + React Native.</p>
                                <div class="dk-card-product-footer">
                                    <span class="dk-card-product-price">89 €</span>
                                    <span class="dk-card-product-rating">
                                        <i data-lucide="star"></i>
                                        4.8 (156)
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 11 -->
                        <div class="dk-card-product" data-category="ebook" data-price="69" data-rating="4.9">
                            <img src="https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?w=800&q=80" alt="SEO - Le Guide Ultime" class="dk-card-product-image">
                            <div class="dk-card-product-content">
                                <span class="dk-card-product-category">
                                    <i data-lucide="book-open" style="width: 12px; height: 12px;"></i>
                                    Ebook
                                </span>
                                <h3 class="dk-card-product-title">SEO - Le Guide Ultime 2024</h3>
                                <p class="dk-card-product-description">Formation SEO complète et à jour. Stratégies on-page, off-page, technique.</p>
                                <div class="dk-card-product-footer">
                                    <span class="dk-card-product-price">69 €</span>
                                    <span class="dk-card-product-rating">
                                        <i data-lucide="star"></i>
                                        4.9 (245)
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Product Card 12 -->
                        <div class="dk-card-product" data-category="template" data-price="79" data-rating="4.7">
                            <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?w=800&q=80" alt="Portfolio Créatif Animé" class="dk-card-product-image">
                            <div class="dk-card-product-content">
                                <span class="dk-card-product-category">
                                    <i data-lucide="layout" style="width: 12px; height: 12px;"></i>
                                    Template
                                </span>
                                <h3 class="dk-card-product-title">Portfolio Créatif Animé</h3>
                                <p class="dk-card-product-description">Template portfolio avec animations impressionnantes. Next.js + Three.js.</p>
                                <div class="dk-card-product-footer">
                                    <span class="dk-card-product-price">79 €</span>
                                    <span class="dk-card-product-rating">
                                        <i data-lucide="star"></i>
                                        4.7 (103)
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@media (min-width: 1024px) {
    .dk-products-grid {
        grid-template-columns: 280px 1fr !important;
    }
    .dk-filters-toggle {
        display: none !important;
    }
}

@media (max-width: 1023px) {
    .dk-filters {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1000;
        border-radius: 0;
        overflow-y: auto;
    }
    .dk-filters.active {
        display: block;
    }
    #dk-filters-close {
        display: flex !important;
    }
}
</style>

<?php
get_footer();
