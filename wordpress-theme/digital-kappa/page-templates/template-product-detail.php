<?php
/**
 * Template Name: Fiche produit
 * Template Post Type: page
 *
 * @package Digital_Kappa
 */

get_header();

// Check if page is built with Elementor
$is_elementor = digital_kappa_is_elementor_page();
?>

<?php if ($is_elementor) : ?>
    <div id="primary" class="dk-content-area">
        <main id="main" class="dk-site-main">
            <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
        </main>
    </div>
<?php else : ?>

<!-- Product Hero Section -->
<section class="dk-product-hero">
    <div class="dk-container">
        <div class="dk-product-grid">
            <!-- Product Gallery -->
            <div class="dk-product-gallery">
                <div class="dk-product-thumbnails">
                    <button class="dk-product-thumb active">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=100&q=80" alt="Vue 1">
                    </button>
                    <button class="dk-product-thumb">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=100&q=80" alt="Vue 2">
                    </button>
                    <button class="dk-product-thumb">
                        <img src="https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?w=100&q=80" alt="Vue 3">
                    </button>
                    <button class="dk-product-thumb">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=100&q=80" alt="Vue 4">
                    </button>
                </div>
                <div class="dk-product-main-image">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&q=80" alt="Dashboard analytics" id="mainProductImage">
                    <div class="dk-product-nav">
                        <button class="dk-product-nav-btn dk-product-nav-prev">
                            <i data-lucide="chevron-left"></i>
                        </button>
                        <button class="dk-product-nav-btn dk-product-nav-next">
                            <i data-lucide="chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Info -->
            <div class="dk-product-info">
                <span class="dk-product-category-badge">Template</span>

                <h1 class="dk-product-title">Dashboard analytics</h1>

                <p class="dk-product-description">
                    Template de dashboard moderne avec graphiques interactifs et composants réutilisables. Parfait pour vos projets d'analytics.
                </p>

                <div class="dk-product-price-block">
                    <span class="dk-product-price-label">Prix</span>
                    <span class="dk-product-price">59 €</span>
                </div>

                <button class="dk-btn dk-btn-primary dk-btn-lg dk-btn-full dk-product-buy-btn">
                    <i data-lucide="shopping-cart"></i>
                    Ajouter au panier
                </button>

                <p class="dk-product-guarantee">
                    Accès instantané après paiement - Garantie satisfait ou remboursé 14 jours
                </p>

                <!-- Features Icons -->
                <div class="dk-product-features">
                    <div class="dk-product-feature">
                        <i data-lucide="download"></i>
                        <span>Téléchargement instantané</span>
                    </div>
                    <div class="dk-product-feature">
                        <i data-lucide="shield"></i>
                        <span>Paiement sécurisé</span>
                    </div>
                    <div class="dk-product-feature">
                        <i data-lucide="refresh-cw"></i>
                        <span>Garantie 14 jours</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Description Section -->
<section class="dk-product-section">
    <div class="dk-container dk-container-narrow">
        <h2 class="dk-product-section-title">Description complète</h2>
        <p class="dk-product-text">
            Template de dashboard professionnel avec composants modulaires, graphiques interactifs et design moderne. Idéal pour créer rapidement des interfaces d'analytics et de monitoring.
        </p>
    </div>
</section>

<!-- Features Section -->
<section class="dk-product-section">
    <div class="dk-container dk-container-narrow">
        <h2 class="dk-product-section-title">Fonctionnalités principales</h2>

        <div class="dk-product-features-grid">
            <div class="dk-product-feature-item">
                <i data-lucide="check"></i>
                <span>20+ composants réutilisables</span>
            </div>
            <div class="dk-product-feature-item">
                <i data-lucide="check"></i>
                <span>Graphiques interactifs (Recharts)</span>
            </div>
            <div class="dk-product-feature-item">
                <i data-lucide="check"></i>
                <span>Design responsive complet</span>
            </div>
            <div class="dk-product-feature-item">
                <i data-lucide="check"></i>
                <span>Mode sombre/clair</span>
            </div>
            <div class="dk-product-feature-item">
                <i data-lucide="check"></i>
                <span>TypeScript inclus</span>
            </div>
            <div class="dk-product-feature-item">
                <i data-lucide="check"></i>
                <span>Tailwind CSS 4.0</span>
            </div>
            <div class="dk-product-feature-item">
                <i data-lucide="check"></i>
                <span>Code bien documenté</span>
            </div>
            <div class="dk-product-feature-item">
                <i data-lucide="check"></i>
                <span>Performances optimisées</span>
            </div>
        </div>
    </div>
</section>

<!-- What's Included Section -->
<section class="dk-product-section">
    <div class="dk-container dk-container-narrow">
        <h2 class="dk-product-section-title">Ce qui est inclus</h2>

        <div class="dk-product-included-card">
            <div class="dk-product-included-item">
                <i data-lucide="check"></i>
                <span>Code source complet React + TypeScript</span>
            </div>
            <div class="dk-product-included-item">
                <i data-lucide="check"></i>
                <span>Tous les composants UI</span>
            </div>
            <div class="dk-product-included-item">
                <i data-lucide="check"></i>
                <span>Exemples d'intégration</span>
            </div>
            <div class="dk-product-included-item">
                <i data-lucide="check"></i>
                <span>Documentation complète</span>
            </div>
            <div class="dk-product-included-item">
                <i data-lucide="check"></i>
                <span>Support par email</span>
            </div>
        </div>
    </div>
</section>

<!-- Prerequisites Section -->
<section class="dk-product-section">
    <div class="dk-container dk-container-narrow">
        <h2 class="dk-product-section-title">Prérequis</h2>

        <ul class="dk-product-prerequisites">
            <li>Connaissances React/TypeScript</li>
            <li>Node.js 18+ installé</li>
        </ul>
    </div>
</section>

<!-- FAQ Section -->
<section class="dk-product-faq">
    <div class="dk-container dk-container-narrow">
        <div class="dk-product-faq-header">
            <h2>Questions fréquentes</h2>
            <p>Retrouvez les réponses aux questions les plus courantes</p>
        </div>

        <div class="dk-faq-accordion">
            <div class="dk-faq-item active">
                <button class="dk-faq-trigger">
                    <span>Comment recevoir mon produit après l'achat ?</span>
                    <i data-lucide="plus"></i>
                </button>
                <div class="dk-faq-answer">
                    <p>Immédiatement après le paiement, vous recevez un email avec le lien de téléchargement et votre licence. L'accès est instantané.</p>
                </div>
            </div>

            <div class="dk-faq-item">
                <button class="dk-faq-trigger">
                    <span>Le paiement est-il sécurisé ?</span>
                    <i data-lucide="plus"></i>
                </button>
                <div class="dk-faq-answer">
                    <p>Oui, tous nos paiements sont traités via Stripe, un prestataire certifié PCI-DSS. Vos données bancaires sont entièrement cryptées et ne transitent jamais par nos serveurs.</p>
                </div>
            </div>

            <div class="dk-faq-item">
                <button class="dk-faq-trigger">
                    <span>Puis-je obtenir une facture ?</span>
                    <i data-lucide="plus"></i>
                </button>
                <div class="dk-faq-answer">
                    <p>Oui, une facture est automatiquement générée et envoyée par email après chaque achat. Vous pouvez également la télécharger depuis votre espace.</p>
                </div>
            </div>

            <div class="dk-faq-item">
                <button class="dk-faq-trigger">
                    <span>Que faire si le téléchargement échoue ?</span>
                    <i data-lucide="plus"></i>
                </button>
                <div class="dk-faq-answer">
                    <p>Contactez notre support à support@digitalkappa.com avec votre numéro de commande. Nous vous renverrons un nouveau lien de téléchargement dans les plus brefs délais.</p>
                </div>
            </div>
        </div>

        <div class="dk-product-faq-link">
            <a href="<?php echo esc_url(home_url('/faq/')); ?>">Voir toutes les questions »</a>
        </div>
    </div>
</section>

<!-- Info Section -->
<section class="dk-product-info-section">
    <div class="dk-container">
        <h2 class="dk-product-info-title">Achat sécurisé et téléchargement immédiat - Garantie 14 jours</h2>

        <div class="dk-info-grid">
            <div class="dk-info-block">
                <p>Digital Kappa garantit une expérience d'achat simple, rapide et sécurisée. Système d'achat en un clic sans création de compte ni panier. Consultez la fiche produit, cliquez sur "Acheter maintenant" et recevez instantanément votre produit par email.</p>
            </div>

            <div class="dk-info-block">
                <p>Paiements sécurisés et cryptés selon les normes strictes de l'industrie. Nous acceptons Visa, Mastercard, American Express et PayPal pour votre tranquillité. Facture automatiquement générée et envoyée après chaque transaction.</p>
            </div>

            <div class="dk-info-block">
                <p>Immédiatement après paiement, vous recevez un email avec lien de téléchargement, licence d'utilisation et facture. Le lien reste valide 30 jours pour télécharger à tout moment. Accès à vie à vos achats.</p>
            </div>

            <div class="dk-info-block">
                <p>Garantie de remboursement 14 jours sur tous nos produits. Pas satisfait ? Contactez support@digitalkappa.com pour remboursement intégral. Votre satisfaction est notre priorité absolue.</p>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // FAQ Accordion functionality
    const faqItems = document.querySelectorAll('.dk-faq-item');
    faqItems.forEach(item => {
        const trigger = item.querySelector('.dk-faq-trigger');
        trigger.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            const accordion = item.closest('.dk-faq-accordion');
            accordion.querySelectorAll('.dk-faq-item').forEach(i => i.classList.remove('active'));
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });

    // Product gallery functionality
    const thumbnails = document.querySelectorAll('.dk-product-thumb');
    const mainImage = document.getElementById('mainProductImage');

    thumbnails.forEach(thumb => {
        thumb.addEventListener('click', () => {
            thumbnails.forEach(t => t.classList.remove('active'));
            thumb.classList.add('active');
            const thumbImg = thumb.querySelector('img');
            if (thumbImg && mainImage) {
                mainImage.src = thumbImg.src.replace('w=100', 'w=800');
            }
        });
    });
});
</script>

<?php endif; ?>

<?php
get_footer();
