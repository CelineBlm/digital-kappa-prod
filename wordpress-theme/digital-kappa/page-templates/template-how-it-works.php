<?php
/**
 * Template Name: Comment ça marche
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

<!-- Hero Section -->
<section class="dk-section dk-hero dk-hero-light">
    <div class="dk-container">
        <div class="dk-hero-content">
            <span class="dk-badge dk-badge-gold-light dk-mb-4" style="padding: var(--dk-space-2) var(--dk-space-6); border-radius: var(--dk-radius-full);">
                Guide
            </span>
            <h1>Comment ça marche ?</h1>
            <p class="dk-text-secondary" style="font-size: var(--dk-text-lg); max-width: 768px; margin: 0 auto;">
                Achetez et téléchargez vos produits digitaux en quelques clics. Notre processus simplifié vous garantit un accès immédiat à vos achats.
            </p>
        </div>
    </div>
</section>

<!-- Process Steps Section -->
<section class="dk-section dk-section-light">
    <div class="dk-container">
        <div class="dk-section-header">
            <h2>Un processus simple en 3 étapes</h2>
            <p>De la découverte au téléchargement, tout est pensé pour vous simplifier la vie.</p>
        </div>

        <div class="dk-steps" style="max-width: 1000px; margin: 0 auto;">
            <!-- Step 1 -->
            <div class="dk-step">
                <div class="dk-step-icon">
                    <i data-lucide="search"></i>
                </div>
                <div class="dk-step-number">1</div>
                <h3 class="dk-step-title">Parcourez le catalogue</h3>
                <p class="dk-step-description">
                    Explorez notre sélection de produits digitaux premium. Utilisez les filtres pour trouver exactement ce qui correspond à vos besoins : ebooks, applications ou templates.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="dk-step">
                <div class="dk-step-icon">
                    <i data-lucide="credit-card"></i>
                </div>
                <div class="dk-step-number">2</div>
                <h3 class="dk-step-title">Effectuez votre achat</h3>
                <p class="dk-step-description">
                    Paiement 100% sécurisé par carte bancaire ou PayPal. Vos données sont protégées et nous ne stockons jamais vos informations de paiement.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="dk-step">
                <div class="dk-step-icon">
                    <i data-lucide="download"></i>
                </div>
                <div class="dk-step-number">3</div>
                <h3 class="dk-step-title">Téléchargez instantanément</h3>
                <p class="dk-step-description">
                    Recevez immédiatement votre produit par email avec un lien de téléchargement sécurisé. Accès à vie et mises à jour gratuites incluses.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="dk-section dk-section-gray">
    <div class="dk-container">
        <div class="dk-section-header">
            <span class="dk-badge dk-badge-gold-light dk-mb-4" style="padding: var(--dk-space-2) var(--dk-space-6); border-radius: var(--dk-radius-full);">
                Avantages
            </span>
            <h2>Pourquoi choisir Digital Kappa ?</h2>
            <p>Des avantages exclusifs pour une expérience d'achat optimale</p>
        </div>

        <div class="dk-grid dk-grid-2" style="max-width: 900px; margin: 0 auto;">
            <div class="dk-card-feature">
                <div class="dk-card-feature-icon">
                    <i data-lucide="zap"></i>
                </div>
                <h3 class="dk-card-feature-title">Accès instantané</h3>
                <p class="dk-card-feature-description">
                    Dès que votre paiement est confirmé, vous recevez un email avec le lien de téléchargement. Pas d'attente, accès immédiat à votre produit.
                </p>
            </div>

            <div class="dk-card-feature">
                <div class="dk-card-feature-icon">
                    <i data-lucide="shield-check"></i>
                </div>
                <h3 class="dk-card-feature-title">Paiement sécurisé</h3>
                <p class="dk-card-feature-description">
                    Toutes les transactions sont cryptées via SSL et traitées par des prestataires de confiance conformes aux normes PCI-DSS.
                </p>
            </div>

            <div class="dk-card-feature">
                <div class="dk-card-feature-icon">
                    <i data-lucide="refresh-cw"></i>
                </div>
                <h3 class="dk-card-feature-title">Garantie 14 jours</h3>
                <p class="dk-card-feature-description">
                    Nous offrons une garantie satisfait ou remboursé de 14 jours. Si le produit ne répond pas à vos attentes, contactez-nous pour un remboursement.
                </p>
            </div>

            <div class="dk-card-feature">
                <div class="dk-card-feature-icon">
                    <i data-lucide="infinity"></i>
                </div>
                <h3 class="dk-card-feature-title">Accès à vie</h3>
                <p class="dk-card-feature-description">
                    Vos liens de téléchargement n'expirent jamais. Vous pouvez re-télécharger vos produits à tout moment, autant de fois que nécessaire.
                </p>
            </div>

            <div class="dk-card-feature">
                <div class="dk-card-feature-icon">
                    <i data-lucide="gift"></i>
                </div>
                <h3 class="dk-card-feature-title">Mises à jour gratuites</h3>
                <p class="dk-card-feature-description">
                    Toutes les mises à jour mineures sont incluses gratuitement. Vous recevez automatiquement les nouvelles versions par email.
                </p>
            </div>

            <div class="dk-card-feature">
                <div class="dk-card-feature-icon">
                    <i data-lucide="headphones"></i>
                </div>
                <h3 class="dk-card-feature-title">Support technique</h3>
                <p class="dk-card-feature-description">
                    Une équipe dédiée répond à vos questions dans un délai de 48h. Nous vous accompagnons dans l'utilisation de vos produits.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Preview Section -->
<section class="dk-section dk-section-light">
    <div class="dk-container">
        <div class="dk-section-header">
            <span class="dk-badge dk-badge-gold-light dk-mb-4" style="padding: var(--dk-space-2) var(--dk-space-6); border-radius: var(--dk-radius-full);">
                Support
            </span>
            <h2>Questions fréquentes</h2>
            <p>Les réponses aux questions les plus courantes</p>
        </div>

        <div class="dk-accordion" style="max-width: 800px; margin: 0 auto;">
            <div class="dk-accordion-item active">
                <button class="dk-accordion-trigger">
                    Comment vais-je recevoir mon produit ?
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
                    Les mises à jour sont-elles incluses ?
                    <i data-lucide="chevron-down"></i>
                </button>
                <div class="dk-accordion-content">
                    <p>Oui, toutes les mises à jour mineures (corrections de bugs, améliorations) sont incluses gratuitement et envoyées automatiquement par email. Les mises à jour majeures peuvent faire l'objet d'un tarif préférentiel.</p>
                </div>
            </div>
        </div>

        <div class="dk-text-center dk-mt-8">
            <a href="<?php echo esc_url(home_url('/faq/')); ?>" class="dk-btn dk-btn-secondary">
                Voir toutes les questions
                <i data-lucide="arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="dk-cta">
    <div class="dk-cta-content">
        <h2>Prêt à vous lancer ?</h2>
        <p>Découvrez notre catalogue de produits digitaux premium et trouvez ce qu'il vous faut.</p>
        <div class="dk-cta-buttons">
            <a href="<?php echo esc_url(home_url('/tous-nos-produits/')); ?>" class="dk-btn dk-btn-primary dk-btn-lg">
                Découvrir les produits
            </a>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="dk-btn dk-btn-outline-white dk-btn-lg">
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
            // Close all items
            accordionItems.forEach(i => i.classList.remove('active'));
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
