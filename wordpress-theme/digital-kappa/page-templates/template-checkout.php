<?php
/**
 * Template Name: Checkout
 * Template Post Type: page
 *
 * @package Digital_Kappa
 */

get_header();
?>

<!-- Main Checkout Section -->
<section class="dk-section dk-section-light">
    <div class="dk-container" style="max-width: 1100px;">
        <!-- Back Button -->
        <a href="javascript:history.back()" class="dk-flex dk-items-center dk-gap-2 dk-text-secondary dk-mb-6" style="text-decoration: none;">
            <i data-lucide="chevron-left" style="width: 20px; height: 20px;"></i>
            <span style="font-size: var(--dk-text-sm);">Retour au produit</span>
        </a>

        <div class="dk-checkout-grid">
            <!-- Left Column - Form -->
            <div style="background: var(--dk-bg-white); border: 1px solid rgba(0,0,0,0.05); border-radius: var(--dk-radius-2xl); padding: var(--dk-space-8); box-shadow: var(--dk-shadow-sm);">
                <h1 style="font-size: var(--dk-text-2xl); margin-bottom: var(--dk-space-8);">Finaliser votre achat</h1>

                <!-- Contact Information -->
                <div class="dk-mb-8">
                    <h2 style="font-size: var(--dk-text-lg); margin-bottom: var(--dk-space-4);">Informations de contact</h2>

                    <div class="dk-form-group">
                        <label class="dk-label" for="checkout-email">Adresse email *</label>
                        <input type="email" id="checkout-email" name="email" class="dk-input" placeholder="votre@email.com" required>
                        <p class="dk-help-text">Le lien de téléchargement sera envoyé à cette adresse</p>
                    </div>

                    <div class="dk-grid dk-grid-2" style="gap: var(--dk-space-4);">
                        <div class="dk-form-group">
                            <label class="dk-label" for="checkout-firstname">Prénom</label>
                            <input type="text" id="checkout-firstname" name="firstname" class="dk-input" placeholder="Jean">
                        </div>
                        <div class="dk-form-group">
                            <label class="dk-label" for="checkout-lastname">Nom</label>
                            <input type="text" id="checkout-lastname" name="lastname" class="dk-input" placeholder="Dupont">
                        </div>
                    </div>
                </div>

                <!-- Payment Section -->
                <div style="border-top: 1px solid var(--dk-border-gray); padding-top: var(--dk-space-6);">
                    <h2 style="font-size: var(--dk-text-lg); margin-bottom: var(--dk-space-4);">Paiement</h2>

                    <div style="background: var(--dk-bg-gray-50); border: 1px solid var(--dk-border-input); border-radius: var(--dk-radius-lg); padding: var(--dk-space-4); text-align: center;">
                        <p class="dk-text-secondary" style="font-size: var(--dk-text-sm); margin: 0;">
                            Le module de paiement Stripe sera intégré ici
                        </p>
                    </div>
                </div>

                <!-- Pay Button -->
                <button class="dk-btn dk-btn-primary dk-btn-lg dk-btn-full dk-mt-6" id="dk-pay-btn">
                    Payer 59 €
                </button>

                <!-- Terms -->
                <p class="dk-text-center dk-text-secondary" style="font-size: var(--dk-text-xs); margin-top: var(--dk-space-4);">
                    En cliquant sur "Payer", vous acceptez nos
                    <a href="<?php echo esc_url(home_url('/cgv/')); ?>" class="dk-text-gold">conditions générales de vente</a>
                </p>

                <!-- Security Notice -->
                <div class="dk-flex dk-items-center dk-justify-center dk-gap-3" style="border-top: 1px solid var(--dk-border-gray); padding-top: var(--dk-space-6); margin-top: var(--dk-space-6);">
                    <i data-lucide="shield-check" style="width: 20px; height: 20px; color: var(--dk-text-footer);"></i>
                    <p class="dk-text-secondary" style="font-size: var(--dk-text-sm); margin: 0;">
                        Paiement 100% sécurisé par Stripe
                    </p>
                </div>
            </div>

            <!-- Right Column - Order Summary -->
            <div style="position: sticky; top: 100px; align-self: start;">
                <div style="background: var(--dk-bg-white); border: 1px solid rgba(0,0,0,0.05); border-radius: var(--dk-radius-2xl); padding: var(--dk-space-8); box-shadow: var(--dk-shadow-sm);">
                    <h2 style="font-size: var(--dk-text-lg); margin-bottom: var(--dk-space-6);">Récapitulatif de commande</h2>

                    <!-- Product -->
                    <div class="dk-flex dk-gap-4" style="padding-bottom: var(--dk-space-6); border-bottom: 1px solid var(--dk-border-gray);">
                        <img src="https://images.unsplash.com/photo-1675495277087-10598bf7bcd1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=200&q=80" alt="Guide du développeur moderne" style="width: 80px; height: 80px; border-radius: var(--dk-radius-lg); object-fit: cover;">
                        <div style="flex: 1;">
                            <p class="dk-text-gold" style="font-size: var(--dk-text-xs); margin-bottom: var(--dk-space-1);">Ebook</p>
                            <h3 style="font-size: var(--dk-text-base); margin-bottom: var(--dk-space-2);">Guide du développeur moderne</h3>
                            <p style="font-weight: 500;">59 €</p>
                        </div>
                    </div>

                    <!-- Price Breakdown -->
                    <div style="padding: var(--dk-space-6) 0; border-bottom: 1px solid var(--dk-border-gray);">
                        <div class="dk-flex dk-justify-between dk-mb-3">
                            <span class="dk-text-secondary" style="font-size: var(--dk-text-sm);">Sous-total</span>
                            <span style="font-size: var(--dk-text-sm);">59 €</span>
                        </div>
                        <div class="dk-flex dk-justify-between">
                            <span class="dk-text-secondary" style="font-size: var(--dk-text-sm);">TVA (20%)</span>
                            <span style="font-size: var(--dk-text-sm);">11,80 €</span>
                        </div>
                    </div>

                    <!-- Total -->
                    <div class="dk-flex dk-justify-between" style="padding: var(--dk-space-6) 0; border-bottom: 1px solid var(--dk-border-gray);">
                        <span style="font-family: var(--dk-font-heading); font-size: var(--dk-text-lg);">Total</span>
                        <span style="font-weight: 600; font-size: var(--dk-text-2xl);">59 €</span>
                    </div>

                    <!-- Benefits -->
                    <div style="padding-top: var(--dk-space-6);">
                        <p class="dk-text-secondary" style="font-size: var(--dk-text-sm); margin-bottom: var(--dk-space-4);">Ce que vous obtenez :</p>
                        <ul style="list-style: none; padding: 0;">
                            <li class="dk-flex dk-items-center dk-gap-2 dk-mb-3">
                                <i data-lucide="check" style="width: 20px; height: 20px; color: var(--dk-gold);"></i>
                                <span class="dk-text-secondary" style="font-size: var(--dk-text-sm);">Accès instantané au produit</span>
                            </li>
                            <li class="dk-flex dk-items-center dk-gap-2 dk-mb-3">
                                <i data-lucide="check" style="width: 20px; height: 20px; color: var(--dk-gold);"></i>
                                <span class="dk-text-secondary" style="font-size: var(--dk-text-sm);">Téléchargement immédiat</span>
                            </li>
                            <li class="dk-flex dk-items-center dk-gap-2 dk-mb-3">
                                <i data-lucide="check" style="width: 20px; height: 20px; color: var(--dk-gold);"></i>
                                <span class="dk-text-secondary" style="font-size: var(--dk-text-sm);">Garantie 14 jours satisfait ou remboursé</span>
                            </li>
                            <li class="dk-flex dk-items-center dk-gap-2">
                                <i data-lucide="check" style="width: 20px; height: 20px; color: var(--dk-gold);"></i>
                                <span class="dk-text-secondary" style="font-size: var(--dk-text-sm);">Support technique inclus</span>
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
            // Simulate payment and redirect to confirmation
            const email = document.getElementById('checkout-email').value;
            if (!email) {
                alert('Veuillez entrer votre adresse email.');
                return;
            }

            payBtn.innerHTML = '<i data-lucide="loader-2"></i> Traitement en cours...';
            payBtn.disabled = true;

            setTimeout(function() {
                window.location.href = '<?php echo esc_url(home_url('/confirmation/')); ?>';
            }, 1500);
        });
    }
});
</script>

<?php
get_footer();
