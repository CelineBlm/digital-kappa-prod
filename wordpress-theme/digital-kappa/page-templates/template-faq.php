<?php
/**
 * Template Name: FAQ
 * Template Post Type: page
 *
 * @package Digital_Kappa
 */

get_header();
?>

<!-- Hero Section -->
<section class="dk-section dk-hero dk-hero-light">
    <div class="dk-container">
        <div class="dk-hero-content">
            <span class="dk-badge dk-badge-gold-light dk-mb-4" style="padding: var(--dk-space-2) var(--dk-space-6); border-radius: var(--dk-radius-full);">
                Support
            </span>
            <h1>Questions fréquentes</h1>
            <p class="dk-text-secondary" style="font-size: var(--dk-text-lg); max-width: 768px; margin: 0 auto;">
                Trouvez rapidement les réponses à vos questions sur Digital Kappa, nos produits et notre service client.
            </p>
        </div>
    </div>
</section>

<!-- FAQ Categories -->
<section class="dk-section dk-section-light" style="padding-top: 0;">
    <div class="dk-container">
        <div class="dk-grid dk-grid-4" style="max-width: 900px; margin: 0 auto var(--dk-space-12);">
            <a href="#achat" class="dk-card-feature dk-text-center" style="text-decoration: none;">
                <div class="dk-card-feature-icon" style="margin: 0 auto var(--dk-space-3);">
                    <i data-lucide="shopping-cart"></i>
                </div>
                <h4 style="font-size: var(--dk-text-sm); margin: 0;">Achat</h4>
            </a>
            <a href="#telechargement" class="dk-card-feature dk-text-center" style="text-decoration: none;">
                <div class="dk-card-feature-icon" style="margin: 0 auto var(--dk-space-3);">
                    <i data-lucide="download"></i>
                </div>
                <h4 style="font-size: var(--dk-text-sm); margin: 0;">Téléchargement</h4>
            </a>
            <a href="#paiement" class="dk-card-feature dk-text-center" style="text-decoration: none;">
                <div class="dk-card-feature-icon" style="margin: 0 auto var(--dk-space-3);">
                    <i data-lucide="credit-card"></i>
                </div>
                <h4 style="font-size: var(--dk-text-sm); margin: 0;">Paiement</h4>
            </a>
            <a href="#support" class="dk-card-feature dk-text-center" style="text-decoration: none;">
                <div class="dk-card-feature-icon" style="margin: 0 auto var(--dk-space-3);">
                    <i data-lucide="headphones"></i>
                </div>
                <h4 style="font-size: var(--dk-text-sm); margin: 0;">Support</h4>
            </a>
        </div>
    </div>
</section>

<!-- FAQ Sections -->
<section class="dk-section dk-section-gray">
    <div class="dk-container" style="max-width: 900px;">

        <!-- Achat Section -->
        <div id="achat" class="dk-mb-12">
            <div class="dk-flex dk-items-center dk-gap-4 dk-mb-6">
                <div class="dk-card-feature-icon">
                    <i data-lucide="shopping-cart"></i>
                </div>
                <h2 style="margin: 0;">Achat et commande</h2>
            </div>

            <div class="dk-accordion">
                <div class="dk-accordion-item active">
                    <button class="dk-accordion-trigger">
                        Comment passer une commande ?
                        <i data-lucide="chevron-down"></i>
                    </button>
                    <div class="dk-accordion-content">
                        <p>Pour passer commande, cliquez sur le bouton "Acheter maintenant" sur la page du produit qui vous intéresse. Vous serez redirigé vers notre page de paiement sécurisée où vous pourrez entrer vos informations (email, nom) et procéder au paiement. Aucune création de compte n'est nécessaire.</p>
                    </div>
                </div>

                <div class="dk-accordion-item">
                    <button class="dk-accordion-trigger">
                        Dois-je créer un compte pour acheter ?
                        <i data-lucide="chevron-down"></i>
                    </button>
                    <div class="dk-accordion-content">
                        <p>Non, aucune création de compte n'est requise. Vous pouvez effectuer votre achat en tant qu'invité en fournissant simplement votre adresse email (pour recevoir le lien de téléchargement) et vos informations de paiement.</p>
                    </div>
                </div>

                <div class="dk-accordion-item">
                    <button class="dk-accordion-trigger">
                        Comment savoir si ma commande a été validée ?
                        <i data-lucide="chevron-down"></i>
                    </button>
                    <div class="dk-accordion-content">
                        <p>Dès que votre paiement est confirmé, vous recevez automatiquement un email de confirmation à l'adresse fournie lors de l'achat. Cet email contient le récapitulatif de votre commande et le lien de téléchargement de votre produit.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Téléchargement Section -->
        <div id="telechargement" class="dk-mb-12">
            <div class="dk-flex dk-items-center dk-gap-4 dk-mb-6">
                <div class="dk-card-feature-icon">
                    <i data-lucide="download"></i>
                </div>
                <h2 style="margin: 0;">Téléchargement</h2>
            </div>

            <div class="dk-accordion">
                <div class="dk-accordion-item">
                    <button class="dk-accordion-trigger">
                        Comment télécharger mon produit ?
                        <i data-lucide="chevron-down"></i>
                    </button>
                    <div class="dk-accordion-content">
                        <p>Après votre achat, vous recevez un email contenant un lien de téléchargement sécurisé. Cliquez simplement sur ce lien pour télécharger votre produit. Le lien reste valable indéfiniment.</p>
                    </div>
                </div>

                <div class="dk-accordion-item">
                    <button class="dk-accordion-trigger">
                        Combien de fois puis-je télécharger mon produit ?
                        <i data-lucide="chevron-down"></i>
                    </button>
                    <div class="dk-accordion-content">
                        <p>Vous pouvez télécharger votre produit autant de fois que vous le souhaitez. Les liens de téléchargement n'ont pas de limite de nombre de téléchargements et n'expirent jamais.</p>
                    </div>
                </div>

                <div class="dk-accordion-item">
                    <button class="dk-accordion-trigger">
                        Je n'ai pas reçu mon email de téléchargement, que faire ?
                        <i data-lucide="chevron-down"></i>
                    </button>
                    <div class="dk-accordion-content">
                        <p>Vérifiez d'abord votre dossier spam/indésirables. Si vous ne trouvez pas l'email après quelques minutes, contactez notre support à support@digitalkappa.com avec votre numéro de commande ou l'adresse email utilisée lors de l'achat. Nous vous renverrons le lien dans les plus brefs délais.</p>
                    </div>
                </div>

                <div class="dk-accordion-item">
                    <button class="dk-accordion-trigger">
                        Dans quels formats sont disponibles les produits ?
                        <i data-lucide="chevron-down"></i>
                    </button>
                    <div class="dk-accordion-content">
                        <p>Les formats varient selon le type de produit. Les ebooks sont généralement disponibles en PDF, EPUB et MOBI. Les templates incluent les fichiers sources (Figma, code source). Les applications incluent le code source complet et la documentation. Les formats disponibles sont toujours indiqués sur la page du produit.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paiement Section -->
        <div id="paiement" class="dk-mb-12">
            <div class="dk-flex dk-items-center dk-gap-4 dk-mb-6">
                <div class="dk-card-feature-icon">
                    <i data-lucide="credit-card"></i>
                </div>
                <h2 style="margin: 0;">Paiement et facturation</h2>
            </div>

            <div class="dk-accordion">
                <div class="dk-accordion-item">
                    <button class="dk-accordion-trigger">
                        Le paiement est-il sécurisé ?
                        <i data-lucide="chevron-down"></i>
                    </button>
                    <div class="dk-accordion-content">
                        <p>Absolument. Tous nos paiements sont traités via des systèmes sécurisés conformes aux normes PCI-DSS (Stripe). Nous n'avons jamais accès à vos données bancaires qui sont entièrement cryptées via SSL.</p>
                    </div>
                </div>

                <div class="dk-accordion-item">
                    <button class="dk-accordion-trigger">
                        Quels moyens de paiement acceptez-vous ?
                        <i data-lucide="chevron-down"></i>
                    </button>
                    <div class="dk-accordion-content">
                        <p>Nous acceptons les cartes bancaires (Visa, Mastercard, American Express) et PayPal. Tous les paiements sont traités de manière sécurisée via notre partenaire Stripe.</p>
                    </div>
                </div>

                <div class="dk-accordion-item">
                    <button class="dk-accordion-trigger">
                        Puis-je obtenir une facture ?
                        <i data-lucide="chevron-down"></i>
                    </button>
                    <div class="dk-accordion-content">
                        <p>Oui, une facture est automatiquement générée et envoyée avec l'email de confirmation de commande. Si vous avez besoin d'une facture avec des informations spécifiques (nom d'entreprise, TVA), contactez notre support.</p>
                    </div>
                </div>

                <div class="dk-accordion-item">
                    <button class="dk-accordion-trigger">
                        Les prix incluent-ils la TVA ?
                        <i data-lucide="chevron-down"></i>
                    </button>
                    <div class="dk-accordion-content">
                        <p>Oui, tous les prix affichés sur Digital Kappa incluent la TVA applicable au taux en vigueur (20% pour la France). Le montant de la TVA est détaillé sur votre facture.</p>
                    </div>
                </div>

                <div class="dk-accordion-item">
                    <button class="dk-accordion-trigger">
                        Comment obtenir un remboursement ?
                        <i data-lucide="chevron-down"></i>
                    </button>
                    <div class="dk-accordion-content">
                        <p>Nous offrons une garantie satisfait ou remboursé de 14 jours. Si le produit ne correspond pas à vos attentes, envoyez un email à support@digitalkappa.com avec votre numéro de commande et les raisons de votre insatisfaction. Le remboursement sera effectué dans un délai de 7 jours ouvrés.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Support Section -->
        <div id="support">
            <div class="dk-flex dk-items-center dk-gap-4 dk-mb-6">
                <div class="dk-card-feature-icon">
                    <i data-lucide="headphones"></i>
                </div>
                <h2 style="margin: 0;">Support et assistance</h2>
            </div>

            <div class="dk-accordion">
                <div class="dk-accordion-item">
                    <button class="dk-accordion-trigger">
                        Comment contacter le support ?
                        <i data-lucide="chevron-down"></i>
                    </button>
                    <div class="dk-accordion-content">
                        <p>Vous pouvez nous contacter par email à support@digitalkappa.com ou via notre page de contact. Notre équipe répond généralement dans un délai de 48 heures ouvrées.</p>
                    </div>
                </div>

                <div class="dk-accordion-item">
                    <button class="dk-accordion-trigger">
                        Le support technique est-il inclus ?
                        <i data-lucide="chevron-down"></i>
                    </button>
                    <div class="dk-accordion-content">
                        <p>Oui, tous nos produits incluent un support technique par email. Nous vous aidons pour les questions d'installation, de compatibilité et d'utilisation du produit. La durée du support varie selon le produit (généralement 3 à 6 mois).</p>
                    </div>
                </div>

                <div class="dk-accordion-item">
                    <button class="dk-accordion-trigger">
                        Les mises à jour sont-elles gratuites ?
                        <i data-lucide="chevron-down"></i>
                    </button>
                    <div class="dk-accordion-content">
                        <p>Oui, toutes les mises à jour mineures (corrections de bugs, améliorations) sont incluses gratuitement et envoyées automatiquement par email. Les mises à jour majeures (nouvelles versions) peuvent faire l'objet d'un tarif préférentiel pour les clients existants.</p>
                    </div>
                </div>

                <div class="dk-accordion-item">
                    <button class="dk-accordion-trigger">
                        Quelle est la licence d'utilisation des produits ?
                        <i data-lucide="chevron-down"></i>
                    </button>
                    <div class="dk-accordion-content">
                        <p>Chaque achat vous confère une licence d'utilisation non exclusive et non transférable. Selon le produit, la licence peut être personnelle (usage personnel uniquement) ou commerciale (utilisation dans des projets clients). Les détails de la licence sont indiqués sur chaque page produit.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Contact CTA -->
<section class="dk-section dk-section-light">
    <div class="dk-container">
        <div style="background: linear-gradient(135deg, var(--dk-bg-dark), #3a3d42); border-radius: var(--dk-radius-2xl); padding: var(--dk-space-12); text-align: center; max-width: 800px; margin: 0 auto;">
            <div class="dk-card-feature-icon" style="margin: 0 auto var(--dk-space-4); background: rgba(210, 163, 11, 0.2);">
                <i data-lucide="message-circle" style="color: var(--dk-gold);"></i>
            </div>
            <h2 style="color: #fff; margin-bottom: var(--dk-space-4);">Vous n'avez pas trouvé votre réponse ?</h2>
            <p style="color: rgba(255,255,255,0.7); margin-bottom: var(--dk-space-6);">Notre équipe est disponible pour répondre à toutes vos questions.</p>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="dk-btn dk-btn-primary dk-btn-lg">
                <i data-lucide="mail"></i>
                Nous contacter
            </a>
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
            // Close all items in same accordion
            const accordion = item.closest('.dk-accordion');
            accordion.querySelectorAll('.dk-accordion-item').forEach(i => i.classList.remove('active'));
            // Open clicked item if it wasn't active
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
});
</script>

<?php
get_footer();
