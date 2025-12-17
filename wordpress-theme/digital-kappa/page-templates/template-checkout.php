<?php
/**
 * Template Name: Checkout
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

<!-- Checkout Section -->
<section class="dk-checkout-section">
    <div class="dk-container dk-container-checkout">
        <!-- Back Link -->
        <a href="javascript:history.back()" class="dk-checkout-back">
            <i data-lucide="arrow-left"></i>
            <span>Retour au produit</span>
        </a>

        <div class="dk-checkout-grid">
            <!-- Left Column - Form -->
            <div class="dk-checkout-form-card">
                <h1 class="dk-checkout-title">Finaliser votre achat</h1>

                <!-- Contact Information -->
                <div class="dk-checkout-section-group">
                    <h2 class="dk-checkout-section-title">Informations de contact</h2>

                    <div class="dk-form-group">
                        <label class="dk-form-label" for="checkout-email">Adresse email *</label>
                        <input type="email" id="checkout-email" name="email" class="dk-form-input" placeholder="votre@email.com" required>
                        <p class="dk-form-help">Le lien de téléchargement sera envoyé à cette adresse</p>
                    </div>

                    <div class="dk-checkout-name-row">
                        <div class="dk-form-group">
                            <label class="dk-form-label" for="checkout-firstname">Prénom</label>
                            <input type="text" id="checkout-firstname" name="firstname" class="dk-form-input" placeholder="Jean">
                        </div>
                        <div class="dk-form-group">
                            <label class="dk-form-label" for="checkout-lastname">Nom</label>
                            <input type="text" id="checkout-lastname" name="lastname" class="dk-form-input" placeholder="Dupont">
                        </div>
                    </div>
                </div>

                <!-- Payment Section -->
                <div class="dk-checkout-payment">
                    <h2 class="dk-checkout-section-title">Paiement</h2>

                    <div class="dk-checkout-stripe-placeholder">
                        <p>Le module de paiement Stripe sera intégré ici</p>
                    </div>
                </div>

                <!-- Pay Button -->
                <button class="dk-btn dk-btn-primary dk-btn-lg dk-btn-full dk-checkout-pay-btn" id="dk-pay-btn">
                    Payer 59 €
                </button>

                <!-- Terms -->
                <p class="dk-checkout-terms">
                    En cliquant sur "Payer", vous acceptez nos <a href="<?php echo esc_url(home_url('/cgv/')); ?>">conditions générales de vente</a>
                </p>

                <!-- Security Notice -->
                <div class="dk-checkout-security">
                    <i data-lucide="circle" class="dk-checkout-security-icon"></i>
                    <span>Paiement 100% sécurisé par Stripe</span>
                </div>
            </div>

            <!-- Right Column - Order Summary -->
            <div class="dk-checkout-summary-wrapper">
                <div class="dk-checkout-summary-card">
                    <h2 class="dk-checkout-summary-title">Récapitulatif de commande</h2>

                    <!-- Product -->
                    <div class="dk-checkout-product">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=200&q=80" alt="Dashboard Analytics Pro" class="dk-checkout-product-image">
                        <div class="dk-checkout-product-info">
                            <span class="dk-checkout-product-badge">Template</span>
                            <h3 class="dk-checkout-product-name">Dashboard Analytics Pro</h3>
                            <span class="dk-checkout-product-price">59 €</span>
                        </div>
                    </div>

                    <!-- Price Breakdown -->
                    <div class="dk-checkout-prices">
                        <div class="dk-checkout-price-row">
                            <span class="dk-checkout-price-label">Sous-total</span>
                            <span class="dk-checkout-price-value">59 €</span>
                        </div>
                        <div class="dk-checkout-price-row">
                            <span class="dk-checkout-price-label">TVA (20%)</span>
                            <span class="dk-checkout-price-value">11.80 €</span>
                        </div>
                    </div>

                    <!-- Total -->
                    <div class="dk-checkout-total">
                        <span class="dk-checkout-total-label">Total</span>
                        <span class="dk-checkout-total-value">59 €</span>
                    </div>

                    <!-- Benefits -->
                    <div class="dk-checkout-benefits">
                        <p class="dk-checkout-benefits-title">Ce que vous obtenez :</p>
                        <ul class="dk-checkout-benefits-list">
                            <li>
                                <i data-lucide="check"></i>
                                <span>Accès instantané au produit</span>
                            </li>
                            <li>
                                <i data-lucide="check"></i>
                                <span>Téléchargement immédiat</span>
                            </li>
                            <li>
                                <i data-lucide="check"></i>
                                <span>Garantie 14 jours satisfait ou remboursé</span>
                            </li>
                            <li>
                                <i data-lucide="check"></i>
                                <span>Support technique inclus</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const payBtn = document.getElementById('dk-pay-btn');
    if (payBtn) {
        payBtn.addEventListener('click', function() {
            const email = document.getElementById('checkout-email').value;
            if (!email) {
                alert('Veuillez entrer votre adresse email.');
                return;
            }

            payBtn.innerHTML = '<i data-lucide="loader-2" class="dk-spinner"></i> Traitement en cours...';
            payBtn.disabled = true;
            lucide.createIcons();

            setTimeout(function() {
                window.location.href = '<?php echo esc_url(home_url('/confirmation/')); ?>';
            }, 1500);
        });
    }
});
</script>

<?php endif; ?>

<?php
get_footer();
