<?php
/**
 * Template Name: Confirmation de commande
 * Template Post Type: page
 *
 * @package Digital_Kappa
 */

get_header();
?>

<!-- Header de confirmation -->
<section style="background: var(--dk-bg-white); border-bottom: 1px solid rgba(0,0,0,0.05);">
    <div class="dk-container" style="max-width: 900px; padding: var(--dk-space-12) var(--dk-space-4);">
        <div class="dk-text-center">
            <!-- Success Icon -->
            <div class="dk-success-icon">
                <i data-lucide="check-circle"></i>
            </div>

            <!-- Title -->
            <h1 style="margin-bottom: var(--dk-space-2);">Commande confirmée !</h1>

            <!-- Message -->
            <p class="dk-text-secondary" style="font-size: var(--dk-text-lg);">
                Merci pour votre achat. Votre commande a été traitée avec succès.
            </p>

            <!-- Order Number -->
            <div style="display: inline-flex; align-items: center; gap: var(--dk-space-2); background: rgba(210, 163, 11, 0.1); padding: var(--dk-space-2) var(--dk-space-4); border-radius: var(--dk-radius-lg); margin-top: var(--dk-space-6);">
                <i data-lucide="file-text" style="width: 20px; height: 20px; color: var(--dk-gold);"></i>
                <span style="font-size: var(--dk-text-sm); font-weight: 600; color: var(--dk-gold);">
                    Commande n° DK-<?php echo time(); ?>
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="dk-section dk-section-gray">
    <div class="dk-container" style="max-width: 900px;">
        <div class="dk-grid" style="grid-template-columns: 2fr 1fr; gap: var(--dk-space-8);">

            <!-- Main Column -->
            <div style="display: flex; flex-direction: column; gap: var(--dk-space-8);">

                <!-- Email Confirmation -->
                <div style="background: var(--dk-bg-white); border: 1px solid rgba(0,0,0,0.05); border-radius: var(--dk-radius-2xl); padding: var(--dk-space-6); box-shadow: var(--dk-shadow-sm);">
                    <div class="dk-flex dk-items-center dk-gap-4">
                        <div style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; background: #dbeafe; border-radius: var(--dk-radius-xl);">
                            <i data-lucide="mail" style="width: 24px; height: 24px; color: #2563eb;"></i>
                        </div>
                        <div style="flex: 1;">
                            <h3 style="margin-bottom: var(--dk-space-1);">Email de confirmation envoyé</h3>
                            <p class="dk-text-secondary" style="font-size: var(--dk-text-sm); margin: 0;">
                                Un email de confirmation a été envoyé à <strong>client@example.com</strong> avec le récapitulatif de votre commande et les liens de téléchargement.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Products -->
                <div style="background: var(--dk-bg-white); border: 1px solid rgba(0,0,0,0.05); border-radius: var(--dk-radius-2xl); padding: var(--dk-space-6); box-shadow: var(--dk-shadow-sm);">
                    <h2 style="font-size: var(--dk-text-lg); margin-bottom: var(--dk-space-6);">Vos produits</h2>

                    <div style="background: var(--dk-bg-gray-50); border: 1px solid rgba(0,0,0,0.05); border-radius: var(--dk-radius-xl); padding: var(--dk-space-4);">
                        <div class="dk-flex dk-items-center dk-justify-between">
                            <div>
                                <h3 style="margin-bottom: var(--dk-space-1);">Guide du développeur moderne</h3>
                                <p class="dk-text-secondary" style="font-size: var(--dk-text-sm); margin: 0;">Prix : 59 €</p>
                            </div>
                            <a href="#" class="dk-btn dk-btn-primary dk-btn-sm">
                                <i data-lucide="download" style="width: 16px; height: 16px;"></i>
                                Télécharger
                            </a>
                        </div>
                    </div>

                    <!-- Download Info -->
                    <div style="background: #dbeafe; border-radius: var(--dk-radius-lg); padding: var(--dk-space-4); margin-top: var(--dk-space-6);">
                        <div class="dk-flex dk-gap-3">
                            <i data-lucide="download" style="width: 20px; height: 20px; color: #2563eb; flex-shrink: 0;"></i>
                            <div style="font-size: var(--dk-text-sm); color: #1e3a5f;">
                                <p style="font-weight: 600; margin-bottom: var(--dk-space-1);">Accès à vie à vos téléchargements</p>
                                <p style="margin: 0; color: #1e40af;">
                                    Vous pouvez télécharger vos produits autant de fois que vous le souhaitez. Les liens n'expirent jamais et vous recevrez toutes les futures mises à jour gratuitement.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Next Steps -->
                <div style="background: var(--dk-bg-white); border: 1px solid rgba(0,0,0,0.05); border-radius: var(--dk-radius-2xl); padding: var(--dk-space-6); box-shadow: var(--dk-shadow-sm);">
                    <h2 style="font-size: var(--dk-text-lg); margin-bottom: var(--dk-space-6);">Prochaines étapes</h2>

                    <div style="display: flex; flex-direction: column; gap: var(--dk-space-4);">
                        <div class="dk-flex dk-gap-4">
                            <div style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: var(--dk-gold); color: #fff; border-radius: var(--dk-radius-full); font-weight: 600; font-size: var(--dk-text-sm); flex-shrink: 0;">
                                1
                            </div>
                            <div>
                                <h3 style="margin-bottom: var(--dk-space-1);">Consultez votre email</h3>
                                <p class="dk-text-secondary" style="font-size: var(--dk-text-sm); margin: 0;">
                                    Un email de confirmation avec tous les détails et liens de téléchargement vous a été envoyé.
                                </p>
                            </div>
                        </div>

                        <div class="dk-flex dk-gap-4">
                            <div style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: var(--dk-gold); color: #fff; border-radius: var(--dk-radius-full); font-weight: 600; font-size: var(--dk-text-sm); flex-shrink: 0;">
                                2
                            </div>
                            <div>
                                <h3 style="margin-bottom: var(--dk-space-1);">Téléchargez vos produits</h3>
                                <p class="dk-text-secondary" style="font-size: var(--dk-text-sm); margin: 0;">
                                    Cliquez sur les boutons de téléchargement ci-dessus ou utilisez les liens dans votre email.
                                </p>
                            </div>
                        </div>

                        <div class="dk-flex dk-gap-4">
                            <div style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: var(--dk-gold); color: #fff; border-radius: var(--dk-radius-full); font-weight: 600; font-size: var(--dk-text-sm); flex-shrink: 0;">
                                3
                            </div>
                            <div>
                                <h3 style="margin-bottom: var(--dk-space-1);">Commencez à utiliser</h3>
                                <p class="dk-text-secondary" style="font-size: var(--dk-text-sm); margin: 0;">
                                    Suivez la documentation incluse pour démarrer rapidement avec vos nouveaux produits.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div style="display: flex; flex-direction: column; gap: var(--dk-space-6);">

                <!-- Order Summary -->
                <div style="background: var(--dk-bg-white); border: 1px solid rgba(0,0,0,0.05); border-radius: var(--dk-radius-2xl); padding: var(--dk-space-6); box-shadow: var(--dk-shadow-sm);">
                    <h3 style="margin-bottom: var(--dk-space-4);">Récapitulatif</h3>

                    <div style="border-bottom: 1px solid var(--dk-border-gray); padding-bottom: var(--dk-space-4); margin-bottom: var(--dk-space-4);">
                        <div class="dk-flex dk-justify-between dk-mb-3" style="font-size: var(--dk-text-sm);">
                            <span class="dk-text-secondary">Commande n°</span>
                            <span style="font-weight: 600;">DK-<?php echo time(); ?></span>
                        </div>
                        <div class="dk-flex dk-justify-between dk-mb-3" style="font-size: var(--dk-text-sm);">
                            <span class="dk-text-secondary">Date</span>
                            <span style="font-weight: 600;"><?php echo date_i18n('j F Y, H:i'); ?></span>
                        </div>
                        <div class="dk-flex dk-justify-between" style="font-size: var(--dk-text-sm);">
                            <span class="dk-text-secondary">Email</span>
                            <span style="font-weight: 600; max-width: 150px; overflow: hidden; text-overflow: ellipsis;">client@example.com</span>
                        </div>
                    </div>

                    <div class="dk-flex dk-justify-between">
                        <span style="font-weight: 600;">Total</span>
                        <span style="font-size: var(--dk-text-2xl); font-weight: 700; color: var(--dk-gold);">59 €</span>
                    </div>
                </div>

                <!-- Support -->
                <div style="background: var(--dk-bg-white); border: 1px solid rgba(0,0,0,0.05); border-radius: var(--dk-radius-2xl); padding: var(--dk-space-6); box-shadow: var(--dk-shadow-sm);">
                    <div style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; background: #f3e8ff; border-radius: var(--dk-radius-xl); margin-bottom: var(--dk-space-4);">
                        <i data-lucide="help-circle" style="width: 24px; height: 24px; color: #9333ea;"></i>
                    </div>

                    <h3 style="margin-bottom: var(--dk-space-2);">Besoin d'aide ?</h3>
                    <p class="dk-text-secondary" style="font-size: var(--dk-text-sm); margin-bottom: var(--dk-space-4);">
                        Notre équipe support est là pour vous aider.
                    </p>

                    <a href="mailto:support@digitalkappa.com" class="dk-btn dk-btn-secondary dk-btn-sm dk-btn-full">
                        <i data-lucide="mail" style="width: 16px; height: 16px;"></i>
                        Contacter le support
                    </a>
                </div>

                <!-- Guarantees -->
                <div style="background: var(--dk-bg-gray-50); border: 1px solid rgba(0,0,0,0.05); border-radius: var(--dk-radius-2xl); padding: var(--dk-space-6);">
                    <h3 style="font-size: var(--dk-text-sm); font-weight: 600; margin-bottom: var(--dk-space-4);">Vos garanties</h3>

                    <div style="display: flex; flex-direction: column; gap: var(--dk-space-3); font-size: var(--dk-text-sm); color: var(--dk-text-secondary);">
                        <div class="dk-flex dk-items-center dk-gap-2">
                            <i data-lucide="check-circle" style="width: 16px; height: 16px; color: #16a34a;"></i>
                            <span>Téléchargements illimités</span>
                        </div>
                        <div class="dk-flex dk-items-center dk-gap-2">
                            <i data-lucide="check-circle" style="width: 16px; height: 16px; color: #16a34a;"></i>
                            <span>Mises à jour gratuites</span>
                        </div>
                        <div class="dk-flex dk-items-center dk-gap-2">
                            <i data-lucide="check-circle" style="width: 16px; height: 16px; color: #16a34a;"></i>
                            <span>Support technique inclus</span>
                        </div>
                        <div class="dk-flex dk-items-center dk-gap-2">
                            <i data-lucide="check-circle" style="width: 16px; height: 16px; color: #16a34a;"></i>
                            <span>Satisfait ou remboursé 14 jours</span>
                        </div>
                    </div>
                </div>

                <!-- Return Button -->
                <a href="<?php echo esc_url(home_url('/')); ?>" class="dk-btn dk-btn-primary dk-btn-full">
                    <i data-lucide="home" style="width: 20px; height: 20px;"></i>
                    Retour à l'accueil
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="dk-cta">
    <div class="dk-cta-content">
        <h2>Découvrez nos autres produits</h2>
        <p>Explorez notre catalogue complet de produits digitaux premium</p>
        <a href="<?php echo esc_url(home_url('/tous-nos-produits/')); ?>" class="dk-btn dk-btn-outline-white dk-btn-lg">
            Voir tous les produits
        </a>
    </div>
</section>

<style>
@media (max-width: 1023px) {
    .dk-grid[style*="grid-template-columns: 2fr 1fr"] {
        grid-template-columns: 1fr !important;
    }
}
</style>

<?php
get_footer();
