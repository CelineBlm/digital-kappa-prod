<?php
/**
 * Template Name: Contact
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
                Contact
            </span>
            <h1>Contactez-nous</h1>
            <p class="dk-text-secondary" style="font-size: var(--dk-text-lg); max-width: 768px; margin: 0 auto;">
                Une question, une suggestion ou besoin d'aide ? Notre équipe est à votre disposition pour vous accompagner.
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="dk-section dk-section-light">
    <div class="dk-container">
        <div class="dk-grid dk-grid-2" style="max-width: 1100px; margin: 0 auto; gap: var(--dk-space-12);">

            <!-- Contact Form -->
            <div>
                <h2>Envoyez-nous un message</h2>
                <p class="dk-text-secondary dk-mb-8">Remplissez le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais.</p>

                <form class="dk-contact-form" id="dk-contact-form">
                    <div class="dk-form-group">
                        <label class="dk-label" for="contact-name">Nom complet *</label>
                        <input type="text" id="contact-name" name="name" class="dk-input" placeholder="Jean Dupont" required>
                    </div>

                    <div class="dk-form-group">
                        <label class="dk-label" for="contact-email">Adresse email *</label>
                        <input type="email" id="contact-email" name="email" class="dk-input" placeholder="votre@email.com" required>
                    </div>

                    <div class="dk-form-group">
                        <label class="dk-label" for="contact-subject">Sujet *</label>
                        <select id="contact-subject" name="subject" class="dk-input" required>
                            <option value="">Sélectionnez un sujet</option>
                            <option value="question">Question sur un produit</option>
                            <option value="support">Support technique</option>
                            <option value="refund">Demande de remboursement</option>
                            <option value="partnership">Partenariat</option>
                            <option value="other">Autre</option>
                        </select>
                    </div>

                    <div class="dk-form-group">
                        <label class="dk-label" for="contact-message">Message *</label>
                        <textarea id="contact-message" name="message" class="dk-textarea" placeholder="Décrivez votre demande en détail..." rows="6" required></textarea>
                    </div>

                    <div class="dk-form-group">
                        <label class="dk-checkbox">
                            <input type="checkbox" name="privacy" required>
                            <span>J'accepte la <a href="<?php echo esc_url(home_url('/politique-de-confidentialite/')); ?>" class="dk-text-gold">politique de confidentialité</a> *</span>
                        </label>
                    </div>

                    <button type="submit" class="dk-btn dk-btn-primary dk-btn-lg dk-btn-full">
                        <i data-lucide="send"></i>
                        Envoyer le message
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div>
                <h2>Autres moyens de contact</h2>
                <p class="dk-text-secondary dk-mb-8">Vous pouvez également nous contacter directement via les moyens suivants.</p>

                <div style="display: flex; flex-direction: column; gap: var(--dk-space-6);">
                    <!-- Email Support -->
                    <div class="dk-card-feature">
                        <div class="dk-flex dk-items-center dk-gap-4">
                            <div class="dk-card-feature-icon" style="margin-bottom: 0;">
                                <i data-lucide="mail"></i>
                            </div>
                            <div>
                                <h4 style="margin-bottom: var(--dk-space-1);">Email Support</h4>
                                <p class="dk-text-secondary" style="margin: 0; font-size: var(--dk-text-sm);">Pour le support technique et les questions</p>
                                <a href="mailto:support@digitalkappa.com" class="dk-text-gold" style="font-weight: 500;">support@digitalkappa.com</a>
                            </div>
                        </div>
                    </div>

                    <!-- Email Contact -->
                    <div class="dk-card-feature">
                        <div class="dk-flex dk-items-center dk-gap-4">
                            <div class="dk-card-feature-icon" style="margin-bottom: 0;">
                                <i data-lucide="at-sign"></i>
                            </div>
                            <div>
                                <h4 style="margin-bottom: var(--dk-space-1);">Email Général</h4>
                                <p class="dk-text-secondary" style="margin: 0; font-size: var(--dk-text-sm);">Pour les demandes commerciales et partenariats</p>
                                <a href="mailto:contact@digitalkappa.com" class="dk-text-gold" style="font-weight: 500;">contact@digitalkappa.com</a>
                            </div>
                        </div>
                    </div>

                    <!-- Response Time -->
                    <div class="dk-card-feature">
                        <div class="dk-flex dk-items-center dk-gap-4">
                            <div class="dk-card-feature-icon" style="margin-bottom: 0;">
                                <i data-lucide="clock"></i>
                            </div>
                            <div>
                                <h4 style="margin-bottom: var(--dk-space-1);">Délai de réponse</h4>
                                <p class="dk-text-secondary" style="margin: 0; font-size: var(--dk-text-sm);">Nous répondons généralement dans un délai de</p>
                                <span class="dk-text-gold" style="font-weight: 500;">24-48 heures ouvrées</span>
                            </div>
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="dk-card-feature">
                        <div class="dk-flex dk-items-center dk-gap-4">
                            <div class="dk-card-feature-icon" style="margin-bottom: 0;">
                                <i data-lucide="map-pin"></i>
                            </div>
                            <div>
                                <h4 style="margin-bottom: var(--dk-space-1);">Localisation</h4>
                                <p class="dk-text-secondary" style="margin: 0; font-size: var(--dk-text-sm);">Digital Kappa est une entreprise 100% en ligne</p>
                                <span class="dk-text-gold" style="font-weight: 500;">France - En ligne, partout</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Link -->
                <div style="background: var(--dk-bg-gray-50); border-radius: var(--dk-radius-xl); padding: var(--dk-space-6); margin-top: var(--dk-space-8);">
                    <h4 style="margin-bottom: var(--dk-space-2);">Consultez notre FAQ</h4>
                    <p class="dk-text-secondary" style="margin-bottom: var(--dk-space-4); font-size: var(--dk-text-sm);">Vous trouverez peut-être la réponse à votre question dans notre foire aux questions.</p>
                    <a href="<?php echo esc_url(home_url('/faq/')); ?>" class="dk-btn dk-btn-secondary dk-btn-sm">
                        Voir la FAQ
                        <i data-lucide="arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust Section -->
<section class="dk-section dk-section-gray">
    <div class="dk-container">
        <div class="dk-section-header">
            <h2>Vos garanties</h2>
            <p>Ce qui fait la différence chez Digital Kappa</p>
        </div>

        <div class="dk-grid dk-grid-3" style="max-width: 900px; margin: 0 auto;">
            <div class="dk-card-feature dk-text-center">
                <div class="dk-card-feature-icon" style="margin: 0 auto var(--dk-space-4);">
                    <i data-lucide="shield-check"></i>
                </div>
                <h4 class="dk-card-feature-title">Paiement sécurisé</h4>
                <p class="dk-card-feature-description">Transactions 100% sécurisées via Stripe</p>
            </div>

            <div class="dk-card-feature dk-text-center">
                <div class="dk-card-feature-icon" style="margin: 0 auto var(--dk-space-4);">
                    <i data-lucide="refresh-cw"></i>
                </div>
                <h4 class="dk-card-feature-title">Garantie 14 jours</h4>
                <p class="dk-card-feature-description">Satisfait ou remboursé, sans condition</p>
            </div>

            <div class="dk-card-feature dk-text-center">
                <div class="dk-card-feature-icon" style="margin: 0 auto var(--dk-space-4);">
                    <i data-lucide="headphones"></i>
                </div>
                <h4 class="dk-card-feature-title">Support réactif</h4>
                <p class="dk-card-feature-description">Réponse sous 24-48h ouvrées</p>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('dk-contact-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // Simulate form submission
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i data-lucide="loader-2" class="animate-spin"></i> Envoi en cours...';
            submitBtn.disabled = true;

            setTimeout(function() {
                alert('Merci pour votre message ! Nous vous répondrons dans les plus brefs délais.');
                form.reset();
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                if (typeof lucide !== 'undefined') {
                    lucide.createIcons();
                }
            }, 1500);
        });
    }
});
</script>

<?php
get_footer();
