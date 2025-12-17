<?php
/**
 * Template Name: Confirmation de commande
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

<!-- Confirmation Hero -->
<section class="dk-confirm-hero">
    <div class="dk-container dk-container-confirm">
        <div class="dk-confirm-hero-content">
            <!-- Success Icon -->
            <div class="dk-confirm-success-icon">
                <i data-lucide="check"></i>
            </div>

            <!-- Title -->
            <h1 class="dk-confirm-title">Commande confirmée !</h1>

            <!-- Subtitle -->
            <p class="dk-confirm-subtitle">Merci pour votre achat. Votre commande a été traitée avec succès.</p>

            <!-- Order Number Badge -->
            <div class="dk-confirm-order-badge">
                <i data-lucide="file-text"></i>
                <span>Commande n° DK-1766007372378</span>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="dk-confirm-main">
    <div class="dk-container dk-container-confirm">
        <div class="dk-confirm-grid">
            <!-- Left Column -->
            <div class="dk-confirm-left">
                <!-- Email Confirmation Card -->
                <div class="dk-confirm-card">
                    <div class="dk-confirm-email-row">
                        <div class="dk-confirm-email-icon">
                            <i data-lucide="mail"></i>
                        </div>
                        <div class="dk-confirm-email-content">
                            <h3 class="dk-confirm-email-title">Email de confirmation envoyé</h3>
                            <p class="dk-confirm-email-text">Un email de confirmation a été envoyé à <strong>client@example.com</strong> avec le récapitulatif de votre commande et les liens de téléchargement.</p>
                        </div>
                    </div>
                </div>

                <!-- Products Card -->
                <div class="dk-confirm-card">
                    <h2 class="dk-confirm-card-title">Vos produits</h2>

                    <div class="dk-confirm-product-row">
                        <div class="dk-confirm-product-info">
                            <h3 class="dk-confirm-product-name">Design System Pro</h3>
                            <p class="dk-confirm-product-price">Prix : 149 €</p>
                        </div>
                        <a href="#" class="dk-btn dk-btn-primary dk-btn-sm">
                            <i data-lucide="download"></i>
                            Télécharger
                        </a>
                    </div>

                    <!-- Download Info Box -->
                    <div class="dk-confirm-download-info">
                        <i data-lucide="cloud-download"></i>
                        <div class="dk-confirm-download-text">
                            <p class="dk-confirm-download-title">Accès à vie à vos téléchargements</p>
                            <p class="dk-confirm-download-desc">Vous pouvez télécharger vos produits autant de fois que vous le souhaitez. Les liens n'expirent jamais et vous recevrez toutes les futures mises à jour gratuitement.</p>
                        </div>
                    </div>
                </div>

                <!-- Next Steps Card -->
                <div class="dk-confirm-card">
                    <h2 class="dk-confirm-card-title">Prochaines étapes</h2>

                    <div class="dk-confirm-steps">
                        <div class="dk-confirm-step">
                            <div class="dk-confirm-step-number">1</div>
                            <div class="dk-confirm-step-content">
                                <h3 class="dk-confirm-step-title">Consultez votre email</h3>
                                <p class="dk-confirm-step-text">Un email de confirmation avec tous les détails et liens de téléchargement vous a été envoyé.</p>
                            </div>
                        </div>

                        <div class="dk-confirm-step">
                            <div class="dk-confirm-step-number">2</div>
                            <div class="dk-confirm-step-content">
                                <h3 class="dk-confirm-step-title">Téléchargez vos produits</h3>
                                <p class="dk-confirm-step-text">Cliquez sur les boutons de téléchargement ci-dessus ou utilisez les liens dans votre email.</p>
                            </div>
                        </div>

                        <div class="dk-confirm-step">
                            <div class="dk-confirm-step-number">3</div>
                            <div class="dk-confirm-step-content">
                                <h3 class="dk-confirm-step-title">Commencez à utiliser</h3>
                                <p class="dk-confirm-step-text">Suivez la documentation incluse pour démarrer rapidement avec vos nouveaux produits.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="dk-confirm-right">
                <!-- Order Summary Card -->
                <div class="dk-confirm-card">
                    <h3 class="dk-confirm-summary-title">Récapitulatif</h3>

                    <div class="dk-confirm-summary-rows">
                        <div class="dk-confirm-summary-row">
                            <span class="dk-confirm-summary-label">Commande n°</span>
                            <span class="dk-confirm-summary-value">DK-176600737<br>2378</span>
                        </div>
                        <div class="dk-confirm-summary-row">
                            <span class="dk-confirm-summary-label">Date</span>
                            <span class="dk-confirm-summary-value">17 décembre 2025 à<br>22:36</span>
                        </div>
                        <div class="dk-confirm-summary-row">
                            <span class="dk-confirm-summary-label">Email</span>
                            <span class="dk-confirm-summary-value"></span>
                        </div>
                    </div>

                    <div class="dk-confirm-summary-total">
                        <span class="dk-confirm-total-label">Total</span>
                        <span class="dk-confirm-total-value">149 €</span>
                    </div>
                </div>

                <!-- Support Card -->
                <div class="dk-confirm-card dk-confirm-support-card">
                    <div class="dk-confirm-support-icon">
                        <i data-lucide="help-circle"></i>
                    </div>
                    <h3 class="dk-confirm-support-title">Besoin d'aide ?</h3>
                    <p class="dk-confirm-support-text">Notre équipe support est là pour vous aider.</p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="dk-btn dk-btn-outline dk-btn-sm dk-btn-full">
                        <i data-lucide="mail"></i>
                        Contacter le support
                    </a>
                </div>

                <!-- Guarantees -->
                <div class="dk-confirm-guarantees">
                    <h3 class="dk-confirm-guarantees-title">Vos garanties</h3>
                    <ul class="dk-confirm-guarantees-list">
                        <li>
                            <i data-lucide="check"></i>
                            <span>Téléchargements illimités</span>
                        </li>
                        <li>
                            <i data-lucide="check"></i>
                            <span>Mises à jour gratuites</span>
                        </li>
                        <li>
                            <i data-lucide="check"></i>
                            <span>Support technique inclus</span>
                        </li>
                        <li>
                            <i data-lucide="check"></i>
                            <span>Satisfait ou remboursé 14 jours</span>
                        </li>
                    </ul>
                </div>

                <!-- Return Button -->
                <a href="<?php echo esc_url(home_url('/')); ?>" class="dk-btn dk-btn-primary dk-btn-full dk-confirm-return-btn">
                    <i data-lucide="home"></i>
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
        <a href="<?php echo esc_url(home_url('/tous-nos-produits/')); ?>" class="dk-btn dk-btn-outline-white">
            Voir tous les produits
        </a>
    </div>
</section>

<?php endif; ?>

<?php
get_footer();
