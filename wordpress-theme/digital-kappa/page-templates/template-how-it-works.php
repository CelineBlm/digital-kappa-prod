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
<section class="dk-hiw-hero">
    <div class="dk-container">
        <div class="dk-hiw-hero-content">
            <span class="dk-hiw-badge">Simple et sécurisé</span>
            <h1>Comment ça marche ?</h1>
            <p>Achetez et téléchargez vos produits digitaux en quelques clics. Notre processus simplifié vous garantit un accès immédiat à vos achats.</p>
        </div>

        <!-- Steps Cards -->
        <div class="dk-hiw-steps-grid">
            <div class="dk-hiw-step-card">
                <div class="dk-hiw-step-icon">
                    <i data-lucide="search"></i>
                </div>
                <h3>Parcourez</h3>
                <p>Explorez notre catalogue riche. Cliquez sur "Acheter maintenant", renseignez votre email et réglez en toute sécurité via notre système de paiement sécurisé.</p>
            </div>

            <div class="dk-hiw-step-card">
                <div class="dk-hiw-step-icon">
                    <i data-lucide="mouse-pointer-click"></i>
                </div>
                <h3>Achetez en un clic</h3>
                <p>Pas de compte requis. Cliquez sur "Acheter maintenant", renseignez votre email et réglez en toute sécurité via notre système de paiement sécurisé.</p>
            </div>

            <div class="dk-hiw-step-card">
                <div class="dk-hiw-step-icon">
                    <i data-lucide="download"></i>
                </div>
                <h3>Téléchargez</h3>
                <p>Accédez immédiatement à votre produit après le paiement. Recevez un email de confirmation avec un lien de téléchargement valable à vie.</p>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="dk-hiw-process">
    <div class="dk-container">
        <div class="dk-hiw-process-grid">
            <div class="dk-hiw-process-content">
                <h2>Un processus d'achat<br><span class="dk-gold-italic">ultra-simplifié</span></h2>
                <p class="dk-hiw-process-intro">Nous avons conçu notre plateforme pour éliminer toute friction entre vous et vos produits digitaux. Pas de création de compte fastidieuse, pas de panier compliqué.</p>

                <ul class="dk-hiw-checklist">
                    <li>
                        <span class="dk-hiw-check-icon"><i data-lucide="check"></i></span>
                        <div>
                            <strong>Sans création de compte</strong>
                            <p>Achetez en un clic pour finaliser votre achat</p>
                        </div>
                    </li>
                    <li>
                        <span class="dk-hiw-check-icon"><i data-lucide="check"></i></span>
                        <div>
                            <strong>Accès instantané</strong>
                            <p>Téléchargez votre produit immédiatement après le paiement</p>
                        </div>
                    </li>
                    <li>
                        <span class="dk-hiw-check-icon"><i data-lucide="check"></i></span>
                        <div>
                            <strong>Paiement 100% sécurisé</strong>
                            <p>Vos données sont protégées par un cryptage de niveau bancaire</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="dk-hiw-process-image">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/process-image.jpg'); ?>" alt="Processus d'achat simplifié">
            </div>
        </div>
    </div>
</section>

<!-- Security Section -->
<section class="dk-hiw-security">
    <div class="dk-container">
        <div class="dk-hiw-security-header">
            <h2>Vos achats en toute <span class="dk-gold-italic">sécurité</span></h2>
            <p>Nous prenons la sécurité de vos transactions très au sérieux.</p>
        </div>

        <div class="dk-hiw-security-grid">
            <div class="dk-hiw-security-card">
                <div class="dk-hiw-security-icon">
                    <i data-lucide="lock"></i>
                </div>
                <h4>Cryptage SSL</h4>
                <p>Toutes vos données sont cryptées et sécurisées lors de la transaction.</p>
            </div>

            <div class="dk-hiw-security-card">
                <div class="dk-hiw-security-icon">
                    <i data-lucide="shield"></i>
                </div>
                <h4>Paiements sécurisés</h4>
                <p>Nous ne stockons aucune information de carte bancaire sur nos serveurs.</p>
            </div>

            <div class="dk-hiw-security-card">
                <div class="dk-hiw-security-icon">
                    <i data-lucide="headphones"></i>
                </div>
                <h4>Support réactif</h4>
                <p>Une question ? Notre équipe est disponible pour vous aider.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="dk-hiw-faq">
    <div class="dk-container dk-container-narrow">
        <div class="dk-hiw-faq-header">
            <h2>Questions fréquentes</h2>
            <p>Tout ce que vous devez savoir sur notre processus d'achat.</p>
        </div>

        <div class="dk-accordion">
            <div class="dk-accordion-item active">
                <button class="dk-accordion-trigger">
                    <span>Dois-je créer un compte pour acheter ?</span>
                    <i data-lucide="plus"></i>
                </button>
                <div class="dk-accordion-content">
                    <p>Non ! Notre système d'achat est conçu pour être ultra-simple. Il vous suffit de renseigner votre adresse email lors du paiement. Vous recevrez ensuite un lien de téléchargement directement par email.</p>
                </div>
            </div>

            <div class="dk-accordion-item">
                <button class="dk-accordion-trigger">
                    <span>Combien de temps ai-je accès à mes produits ?</span>
                    <i data-lucide="plus"></i>
                </button>
                <div class="dk-accordion-content">
                    <p>Vous avez un accès à vie à tous vos produits achetés. Le lien de téléchargement que vous recevez reste valide indéfiniment.</p>
                </div>
            </div>

            <div class="dk-accordion-item">
                <button class="dk-accordion-trigger">
                    <span>Quels moyens de paiement acceptez-vous ?</span>
                    <i data-lucide="plus"></i>
                </button>
                <div class="dk-accordion-content">
                    <p>Nous acceptons les cartes bancaires (Visa, Mastercard, American Express) ainsi que PayPal pour votre confort.</p>
                </div>
            </div>

            <div class="dk-accordion-item">
                <button class="dk-accordion-trigger">
                    <span>Puis-je obtenir un remboursement ?</span>
                    <i data-lucide="plus"></i>
                </button>
                <div class="dk-accordion-content">
                    <p>Oui, nous offrons une garantie satisfait ou remboursé de 14 jours sur tous nos produits. Si vous n'êtes pas satisfait, contactez notre support.</p>
                </div>
            </div>

            <div class="dk-accordion-item">
                <button class="dk-accordion-trigger">
                    <span>Que se passe-t-il après mon achat ?</span>
                    <i data-lucide="plus"></i>
                </button>
                <div class="dk-accordion-content">
                    <p>Immédiatement après le paiement, vous recevez un email avec le lien de téléchargement. Vous pouvez télécharger votre produit autant de fois que vous le souhaitez.</p>
                </div>
            </div>

            <div class="dk-accordion-item">
                <button class="dk-accordion-trigger">
                    <span>Les produits reçoivent-ils des mises à jour ?</span>
                    <i data-lucide="plus"></i>
                </button>
                <div class="dk-accordion-content">
                    <p>Oui, toutes les mises à jour mineures sont incluses gratuitement. Vous recevrez un email lorsqu'une nouvelle version est disponible.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="dk-cta-section">
    <div class="dk-container">
        <div class="dk-cta-content">
            <h2>Prêt à découvrir nos produits digitaux ?</h2>
            <p>Rejoignez les milliers de créateurs et entrepreneurs qui utilisent Digital Kappa pour gagner du temps et accéder à des ressources de qualité.</p>

            <div class="dk-cta-buttons">
                <a href="<?php echo esc_url(home_url('/tous-nos-produits/')); ?>" class="dk-btn dk-btn-primary dk-btn-lg">
                    Explorer le catalogue
                    <i data-lucide="arrow-right"></i>
                </a>
                <a href="<?php echo esc_url(home_url('/a-propos/')); ?>" class="dk-btn dk-btn-outline-white dk-btn-lg">
                    En savoir plus
                </a>
            </div>

            <div class="dk-cta-features">
                <div class="dk-cta-feature">
                    <i data-lucide="check"></i>
                    <span>Téléchargement instantané</span>
                    <small>Accès immédiat à vos produits</small>
                </div>
                <div class="dk-cta-feature">
                    <i data-lucide="check"></i>
                    <span>Qualité garantie</span>
                    <small>Satisfait ou remboursé</small>
                </div>
                <div class="dk-cta-feature">
                    <i data-lucide="check"></i>
                    <span>Support réactif</span>
                    <small>Assistance disponible</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Info Section -->
<section class="dk-hiw-info">
    <div class="dk-container">
        <div class="dk-hiw-info-header">
            <h2>Acheter des produits digitaux en toute simplicité</h2>
        </div>

        <div class="dk-info-grid">
            <div class="dk-info-block">
                <div class="dk-info-icon">
                    <span>1</span>
                </div>
                <div>
                    <p>Notre marketplace Digital Kappa révolutionne l'achat de produits digitaux en proposant un processus d'achat ultra-simplifié inspiré de Gumroad. Sans création de compte fastidieuse ni panier compliqué, vous accédez directement à vos applications mobiles, ebooks et templates en quelques clics seulement.</p>
                </div>
            </div>

            <div class="dk-info-block">
                <div class="dk-info-icon">
                    <span>2</span>
                </div>
                <div>
                    <p>Le système d'achat en un clic garantit une expérience utilisateur fluide et sécurisée. Chaque transaction est protégée par un cryptage SSL de niveau bancaire, et vos informations de paiement ne sont jamais stockées sur nos serveurs. Après le paiement, vous recevez instantanément un email de confirmation avec votre lien de téléchargement valable à vie.</p>
                </div>
            </div>

            <div class="dk-info-block">
                <div class="dk-info-icon">
                    <span>3</span>
                </div>
                <div>
                    <p>Que vous recherchiez des applications mobiles professionnelles, des ebooks de formation ou des templates de design, notre catalogue propose une sélection rigoureuse de produits digitaux de qualité. Chaque produit est accompagné d'une description détaillée, de captures d'écran et de spécifications techniques pour vous aider à faire le bon choix.</p>
                </div>
            </div>

            <div class="dk-info-block">
                <div class="dk-info-icon">
                    <span>4</span>
                </div>
                <div>
                    <p>Notre engagement : simplicité, accessibilité et qualité. Nous offrons une garantie satisfait ou remboursé de 14 jours sur tous nos produits, un support client réactif et un accès permanent à vos achats. Découvrez dès maintenant notre marketplace et profitez d'une expérience d'achat digital moderne et sans friction.</p>
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
