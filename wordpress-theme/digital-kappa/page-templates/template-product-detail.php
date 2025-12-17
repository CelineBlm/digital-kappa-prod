<?php
/**
 * Template Name: Fiche produit
 * Template Post Type: page
 *
 * @package Digital_Kappa
 */

get_header();
?>

<!-- Breadcrumbs -->
<div class="dk-breadcrumbs">
    <a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a>
    <span class="dk-breadcrumbs-separator">/</span>
    <a href="<?php echo esc_url(home_url('/tous-nos-produits/')); ?>">Produits</a>
    <span class="dk-breadcrumbs-separator">/</span>
    <span class="dk-breadcrumbs-current">Guide du développeur moderne</span>
</div>

<!-- Product Hero Section -->
<section class="dk-section" style="background: linear-gradient(180deg, var(--dk-bg-gray-50) 0%, var(--dk-bg-white) 100%); padding-top: var(--dk-space-8);">
    <div class="dk-container">
        <div class="dk-grid dk-grid-2" style="gap: var(--dk-space-16); align-items: start;">
            <!-- Product Image Gallery -->
            <div>
                <div style="background: var(--dk-bg-white); border-radius: var(--dk-radius-2xl); overflow: hidden; box-shadow: var(--dk-shadow-lg);">
                    <img src="https://images.unsplash.com/photo-1675495277087-10598bf7bcd1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=800&q=80" alt="Guide du développeur moderne" style="width: 100%; aspect-ratio: 4/3; object-fit: cover;">
                </div>
                <div class="dk-flex dk-items-center dk-gap-2 dk-mt-4" style="color: var(--dk-text-secondary); font-size: var(--dk-text-sm);">
                    <i data-lucide="lock" style="width: 16px; height: 16px; color: var(--dk-gold);"></i>
                    <p style="margin: 0;">Paiement sécurisé • Téléchargement instantané</p>
                </div>
            </div>

            <!-- Product Info -->
            <div>
                <span class="dk-badge dk-badge-gold-light dk-mb-4" style="padding: var(--dk-space-1) var(--dk-space-4); border-radius: var(--dk-radius-full);">
                    Ebook
                </span>

                <h1 style="margin-bottom: var(--dk-space-4);">Guide du développeur moderne</h1>

                <p class="dk-text-secondary" style="font-size: var(--dk-text-lg); margin-bottom: var(--dk-space-6);">
                    Ebook complet pour maîtriser les outils et pratiques du développement moderne. 250+ pages de contenu pratique.
                </p>

                <!-- Price & CTA -->
                <div style="border-top: 1px solid var(--dk-border-gray); border-bottom: 1px solid var(--dk-border-gray); padding: var(--dk-space-6) 0; margin-bottom: var(--dk-space-6);">
                    <p class="dk-text-secondary" style="font-size: var(--dk-text-sm); margin-bottom: var(--dk-space-1);">Prix</p>
                    <p style="font-size: var(--dk-text-4xl); font-weight: 600; margin-bottom: var(--dk-space-6);">59 €</p>

                    <button class="dk-btn dk-btn-primary dk-btn-lg dk-btn-full">
                        Acheter maintenant
                    </button>

                    <p class="dk-text-center dk-text-secondary" style="font-size: var(--dk-text-xs); margin-top: var(--dk-space-4);">
                        Accès instantané après paiement • Garantie satisfait ou remboursé 14 jours
                    </p>
                </div>

                <!-- Features Grid -->
                <div class="dk-grid dk-grid-3" style="gap: var(--dk-space-6);">
                    <div class="dk-text-center">
                        <i data-lucide="download" style="width: 24px; height: 24px; color: var(--dk-gold); margin: 0 auto var(--dk-space-3); display: block;"></i>
                        <p style="font-size: var(--dk-text-xs); color: var(--dk-text-secondary); margin: 0;">Téléchargement instantané</p>
                    </div>
                    <div class="dk-text-center">
                        <i data-lucide="shield-check" style="width: 24px; height: 24px; color: var(--dk-gold); margin: 0 auto var(--dk-space-3); display: block;"></i>
                        <p style="font-size: var(--dk-text-xs); color: var(--dk-text-secondary); margin: 0;">Paiement sécurisé</p>
                    </div>
                    <div class="dk-text-center">
                        <i data-lucide="refresh-cw" style="width: 24px; height: 24px; color: var(--dk-gold); margin: 0 auto var(--dk-space-3); display: block;"></i>
                        <p style="font-size: var(--dk-text-xs); color: var(--dk-text-secondary); margin: 0;">Garantie 14 jours</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Description Section -->
<section class="dk-section dk-section-light">
    <div class="dk-container" style="max-width: 900px;">
        <h2>Description complète</h2>
        <p class="dk-text-secondary" style="line-height: 1.8;">
            Guide complet de 250+ pages couvrant les outils, pratiques et méthodologies du développement moderne. Des bases aux techniques avancées, avec exemples pratiques et projets réels.
        </p>
    </div>
</section>

<!-- Features Section -->
<section class="dk-section dk-section-gray">
    <div class="dk-container" style="max-width: 900px;">
        <h2>Fonctionnalités principales</h2>

        <div class="dk-grid dk-grid-2" style="gap: var(--dk-space-4);">
            <div class="dk-flex dk-items-center dk-gap-3">
                <i data-lucide="check-circle" style="width: 20px; height: 20px; color: var(--dk-gold); flex-shrink: 0;"></i>
                <span>250+ pages de contenu</span>
            </div>
            <div class="dk-flex dk-items-center dk-gap-3">
                <i data-lucide="check-circle" style="width: 20px; height: 20px; color: var(--dk-gold); flex-shrink: 0;"></i>
                <span>10 chapitres détaillés</span>
            </div>
            <div class="dk-flex dk-items-center dk-gap-3">
                <i data-lucide="check-circle" style="width: 20px; height: 20px; color: var(--dk-gold); flex-shrink: 0;"></i>
                <span>Exemples de code pratiques</span>
            </div>
            <div class="dk-flex dk-items-center dk-gap-3">
                <i data-lucide="check-circle" style="width: 20px; height: 20px; color: var(--dk-gold); flex-shrink: 0;"></i>
                <span>Projets réels inclus</span>
            </div>
            <div class="dk-flex dk-items-center dk-gap-3">
                <i data-lucide="check-circle" style="width: 20px; height: 20px; color: var(--dk-gold); flex-shrink: 0;"></i>
                <span>Formats PDF, EPUB, MOBI</span>
            </div>
            <div class="dk-flex dk-items-center dk-gap-3">
                <i data-lucide="check-circle" style="width: 20px; height: 20px; color: var(--dk-gold); flex-shrink: 0;"></i>
                <span>Mises à jour gratuites à vie</span>
            </div>
            <div class="dk-flex dk-items-center dk-gap-3">
                <i data-lucide="check-circle" style="width: 20px; height: 20px; color: var(--dk-gold); flex-shrink: 0;"></i>
                <span>Ressources téléchargeables</span>
            </div>
            <div class="dk-flex dk-items-center dk-gap-3">
                <i data-lucide="check-circle" style="width: 20px; height: 20px; color: var(--dk-gold); flex-shrink: 0;"></i>
                <span>Accès à la communauté</span>
            </div>
        </div>
    </div>
</section>

<!-- What's Included Section -->
<section class="dk-section dk-section-light">
    <div class="dk-container" style="max-width: 900px;">
        <h2>Ce qui est inclus</h2>

        <div style="background: var(--dk-bg-gray-50); border-radius: var(--dk-radius-2xl); padding: var(--dk-space-8);">
            <div style="display: flex; flex-direction: column; gap: var(--dk-space-4);">
                <div class="dk-flex dk-items-center dk-gap-3">
                    <i data-lucide="check" style="width: 20px; height: 20px; color: var(--dk-gold); flex-shrink: 0;"></i>
                    <span>Ebook complet (PDF, EPUB, MOBI)</span>
                </div>
                <div class="dk-flex dk-items-center dk-gap-3">
                    <i data-lucide="check" style="width: 20px; height: 20px; color: var(--dk-gold); flex-shrink: 0;"></i>
                    <span>Code source des exemples</span>
                </div>
                <div class="dk-flex dk-items-center dk-gap-3">
                    <i data-lucide="check" style="width: 20px; height: 20px; color: var(--dk-gold); flex-shrink: 0;"></i>
                    <span>Fiches récapitulatives PDF</span>
                </div>
                <div class="dk-flex dk-items-center dk-gap-3">
                    <i data-lucide="check" style="width: 20px; height: 20px; color: var(--dk-gold); flex-shrink: 0;"></i>
                    <span>Accès communauté Discord</span>
                </div>
                <div class="dk-flex dk-items-center dk-gap-3">
                    <i data-lucide="check" style="width: 20px; height: 20px; color: var(--dk-gold); flex-shrink: 0;"></i>
                    <span>Mises à jour gratuites</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Prerequisites Section -->
<section class="dk-section dk-section-gray">
    <div class="dk-container" style="max-width: 900px;">
        <h2>Prérequis</h2>

        <ul style="list-style: none; padding: 0;">
            <li class="dk-flex dk-items-center dk-gap-3 dk-mb-3">
                <span class="dk-text-gold" style="font-size: var(--dk-text-lg);">•</span>
                <span>Connaissances de base en programmation</span>
            </li>
            <li class="dk-flex dk-items-center dk-gap-3">
                <span class="dk-text-gold" style="font-size: var(--dk-text-lg);">•</span>
                <span>Motivation pour apprendre</span>
            </li>
        </ul>
    </div>
</section>

<!-- FAQ Section -->
<section class="dk-section dk-section-light">
    <div class="dk-container" style="max-width: 800px;">
        <div class="dk-section-header">
            <span class="dk-badge dk-badge-gold-light dk-mb-4" style="padding: var(--dk-space-2) var(--dk-space-6); border-radius: var(--dk-radius-full);">
                Support
            </span>
            <h2>Questions fréquentes</h2>
            <p>Retrouvez les réponses aux questions les plus courantes sur ce produit</p>
        </div>

        <div class="dk-accordion">
            <div class="dk-accordion-item active">
                <button class="dk-accordion-trigger">
                    Comment vais-je recevoir mon ebook ?
                    <i data-lucide="chevron-down"></i>
                </button>
                <div class="dk-accordion-content">
                    <p>Immédiatement après votre paiement, vous recevrez un email avec un lien de téléchargement sécurisé. Le lien restera valable à vie et vous pourrez télécharger le produit autant de fois que nécessaire.</p>
                </div>
            </div>

            <div class="dk-accordion-item">
                <button class="dk-accordion-trigger">
                    Le paiement est-il sécurisé ?
                    <i data-lucide="chevron-down"></i>
                </button>
                <div class="dk-accordion-content">
                    <p>Absolument. Tous nos paiements sont traités via des systèmes sécurisés conformes aux normes PCI-DSS. Nous n'avons jamais accès à vos données bancaires qui sont entièrement cryptées.</p>
                </div>
            </div>

            <div class="dk-accordion-item">
                <button class="dk-accordion-trigger">
                    Puis-je obtenir un remboursement ?
                    <i data-lucide="chevron-down"></i>
                </button>
                <div class="dk-accordion-content">
                    <p>Oui, nous offrons une garantie satisfait ou remboursé de 14 jours. Si le produit ne répond pas à vos attentes, contactez notre support pour obtenir un remboursement intégral.</p>
                </div>
            </div>

            <div class="dk-accordion-item">
                <button class="dk-accordion-trigger">
                    Dans quel format vais-je recevoir ce produit ?
                    <i data-lucide="chevron-down"></i>
                </button>
                <div class="dk-accordion-content">
                    <p>Cet ebook est disponible en trois formats : PDF (pour lecture sur ordinateur), EPUB (pour liseuses et tablettes) et MOBI (pour Kindle). Vous recevrez les trois formats dans votre email.</p>
                </div>
            </div>
        </div>

        <div class="dk-text-center dk-mt-8">
            <a href="<?php echo esc_url(home_url('/faq/')); ?>" class="dk-text-gold" style="font-weight: 500;">
                Voir toutes les questions →
            </a>
        </div>
    </div>
</section>

<!-- Security CTA Section -->
<section class="dk-section dk-section-dark">
    <div class="dk-container" style="max-width: 900px;">
        <h2 class="dk-text-center">Achat sécurisé et téléchargement immédiat de vos produits digitaux</h2>

        <div style="color: rgba(255,255,255,0.8); line-height: 1.8;">
            <p>Digital Kappa vous offre une expérience sécurisée lors de vos achats de produits digitaux. Que vous achetiez des applications mobiles, des ebooks ou des templates, vos transactions sont protégées par les meilleurs standards de sécurité du marché.</p>

            <p>Chaque fois que vous finalisez votre achat, vous êtes redirigé vers une page de paiement entièrement cryptée. Les informations bancaires ne transitent jamais par nos serveurs et votre confidentialité est garantie.</p>

            <p>Nous proposons une garantie satisfait ou remboursé sur l'ensemble de nos produits. Si un article ne correspond pas à vos attentes, notre équipe support interviendra pour trouver la meilleure solution.</p>
        </div>

        <div class="dk-text-center dk-mt-8">
            <button class="dk-btn dk-btn-primary dk-btn-lg">
                Acheter maintenant
            </button>
        </div>
    </div>
</section>

<!-- Similar Products Section -->
<section class="dk-section dk-section-gray">
    <div class="dk-container" style="max-width: 1100px;">
        <h2>Produits similaires</h2>

        <div class="dk-grid dk-grid-3">
            <div class="dk-card-product">
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

            <div class="dk-card-product">
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

            <div class="dk-card-product">
                <img src="https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?w=800&q=80" alt="SEO - Le Guide Ultime" class="dk-card-product-image">
                <div class="dk-card-product-content">
                    <span class="dk-card-product-category">
                        <i data-lucide="book-open" style="width: 12px; height: 12px;"></i>
                        Ebook
                    </span>
                    <h3 class="dk-card-product-title">SEO - Le Guide Ultime 2024</h3>
                    <p class="dk-card-product-description">Formation SEO complète et à jour.</p>
                    <div class="dk-card-product-footer">
                        <span class="dk-card-product-price">69 €</span>
                        <span class="dk-card-product-rating">
                            <i data-lucide="star"></i>
                            4.9 (245)
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Accordion functionality
    const accordionItems = document.querySelectorAll('.dk-accordion-item');
    accordionItems.forEach(item => {
        const trigger = item.querySelector('.dk-accordion-trigger');
        trigger.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            const accordion = item.closest('.dk-accordion');
            accordion.querySelectorAll('.dk-accordion-item').forEach(i => i.classList.remove('active'));
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
});
</script>

<?php
get_footer();
