<?php
/**
 * Template Name: FAQ
 * Template Post Type: page
 *
 * @package Digital_Kappa
 */

get_header();

// Check if page is built with Elementor
$is_elementor = digital_kappa_is_elementor_page();
?>

<!-- Elementor Content Area (always present for Elementor detection) -->
<div id="primary" class="dk-content-area">
    <main id="main" class="dk-site-main">
        <?php
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
        ?>
    </main>
</div>

<?php if (!$is_elementor) : ?>
<!-- Default Theme Content (shown only when NOT using Elementor) -->

<!-- Hero Section -->
<section class="dk-faq-hero">
    <div class="dk-container">
        <div class="dk-faq-hero-content">
            <span class="dk-faq-badge">Aide & Support</span>
            <h1>Questions fréquentes</h1>
            <p>Trouvez rapidement les réponses à vos questions</p>
        </div>

        <!-- Filter Tabs -->
        <div class="dk-faq-tabs">
            <button class="dk-faq-tab active" data-filter="all">Toutes</button>
            <button class="dk-faq-tab" data-filter="general">Général</button>
            <button class="dk-faq-tab" data-filter="paiement">Paiement</button>
            <button class="dk-faq-tab" data-filter="produits">Produits</button>
            <button class="dk-faq-tab" data-filter="support">Support</button>
        </div>
    </div>
</section>

<!-- FAQ Content -->
<section class="dk-faq-content">
    <div class="dk-container dk-container-narrow">

        <!-- Général Section -->
        <div class="dk-faq-section" data-category="general">
            <h3 class="dk-faq-section-title">Général</h3>

            <div class="dk-faq-accordion">
                <div class="dk-faq-item active">
                    <button class="dk-faq-trigger">
                        <span>Qu'est-ce que Digital Kappa ?</span>
                        <i data-lucide="plus"></i>
                    </button>
                    <div class="dk-faq-answer">
                        <p>Digital Kappa est une marketplace de produits digitaux proposant des applications mobiles, des ebooks et des templates. Notre mission est de vous fournir des ressources numériques de qualité, simples et prêtes à l'emploi pour gagner du temps dans vos projets.</p>
                    </div>
                </div>

                <div class="dk-faq-item">
                    <button class="dk-faq-trigger">
                        <span>Comment fonctionne le téléchargement ?</span>
                        <i data-lucide="plus"></i>
                    </button>
                    <div class="dk-faq-answer">
                        <p>Après votre achat, vous recevez instantanément un email contenant un lien de téléchargement sécurisé. Cliquez sur le lien pour télécharger votre produit. Ce lien reste valable à vie et vous pouvez télécharger votre produit autant de fois que nécessaire.</p>
                    </div>
                </div>

                <div class="dk-faq-item">
                    <button class="dk-faq-trigger">
                        <span>Puis-je télécharger mes produits plusieurs fois ?</span>
                        <i data-lucide="plus"></i>
                    </button>
                    <div class="dk-faq-answer">
                        <p>Oui, absolument ! Vos liens de téléchargement n'ont pas de limite. Vous pouvez télécharger vos produits autant de fois que vous le souhaitez, sur n'importe quel appareil.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paiement Section -->
        <div class="dk-faq-section" data-category="paiement">
            <h3 class="dk-faq-section-title">Paiement</h3>

            <div class="dk-faq-accordion">
                <div class="dk-faq-item active">
                    <button class="dk-faq-trigger">
                        <span>Quels moyens de paiement acceptez-vous ?</span>
                        <i data-lucide="plus"></i>
                    </button>
                    <div class="dk-faq-answer">
                        <p>Nous acceptons les cartes bancaires (Visa, Mastercard, American Express), PayPal, et les virements bancaires. Tous les paiements sont sécurisés via notre plateforme de paiement certifiée.</p>
                    </div>
                </div>

                <div class="dk-faq-item">
                    <button class="dk-faq-trigger">
                        <span>Les prix sont-ils TTC ?</span>
                        <i data-lucide="plus"></i>
                    </button>
                    <div class="dk-faq-answer">
                        <p>Oui, tous les prix affichés sur Digital Kappa sont TTC (Toutes Taxes Comprises). Le montant de la TVA est détaillé sur votre facture.</p>
                    </div>
                </div>

                <div class="dk-faq-item">
                    <button class="dk-faq-trigger">
                        <span>Puis-je obtenir une facture ?</span>
                        <i data-lucide="plus"></i>
                    </button>
                    <div class="dk-faq-answer">
                        <p>Oui, une facture est automatiquement générée et envoyée par email après chaque achat. Si vous avez besoin d'informations spécifiques sur la facture, contactez notre support.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Produits Section -->
        <div class="dk-faq-section" data-category="produits">
            <h3 class="dk-faq-section-title">Produits</h3>

            <div class="dk-faq-accordion">
                <div class="dk-faq-item active">
                    <button class="dk-faq-trigger">
                        <span>Vos produits sont-ils compatibles avec Mac et PC ?</span>
                        <i data-lucide="plus"></i>
                    </button>
                    <div class="dk-faq-answer">
                        <p>La majorité de nos produits sont compatibles avec les deux systèmes. Les spécifications de compatibilité sont clairement indiquées sur chaque fiche produit.</p>
                    </div>
                </div>

                <div class="dk-faq-item">
                    <button class="dk-faq-trigger">
                        <span>Proposez-vous des mises à jour pour les produits ?</span>
                        <i data-lucide="plus"></i>
                    </button>
                    <div class="dk-faq-answer">
                        <p>Oui, toutes les mises à jour mineures sont incluses gratuitement. Vous recevrez un email lorsqu'une nouvelle version de votre produit est disponible avec un nouveau lien de téléchargement.</p>
                    </div>
                </div>

                <div class="dk-faq-item">
                    <button class="dk-faq-trigger">
                        <span>Puis-je utiliser les produits à des fins commerciales ?</span>
                        <i data-lucide="plus"></i>
                    </button>
                    <div class="dk-faq-answer">
                        <p>Cela dépend de la licence du produit. Chaque produit indique clairement si une licence commerciale est incluse ou disponible. Consultez les détails de la licence sur la page du produit.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Support Section -->
        <div class="dk-faq-section" data-category="support">
            <h3 class="dk-faq-section-title">Support</h3>

            <div class="dk-faq-accordion">
                <div class="dk-faq-item active">
                    <button class="dk-faq-trigger">
                        <span>Comment obtenir de l'aide ?</span>
                        <i data-lucide="plus"></i>
                    </button>
                    <div class="dk-faq-answer">
                        <p>Notre équipe support est disponible par email à support@digitalkappa.com. Nous répondons généralement sous 24h ouvrées. Vous pouvez également consulter notre documentation en ligne.</p>
                    </div>
                </div>

                <div class="dk-faq-item">
                    <button class="dk-faq-trigger">
                        <span>Proposez-vous un support technique ?</span>
                        <i data-lucide="plus"></i>
                    </button>
                    <div class="dk-faq-answer">
                        <p>Oui, tous nos produits incluent un support technique par email. Nous vous aidons pour les questions d'installation, de compatibilité et d'utilisation du produit.</p>
                    </div>
                </div>

                <div class="dk-faq-item">
                    <button class="dk-faq-trigger">
                        <span>Quelle est votre politique de remboursement ?</span>
                        <i data-lucide="plus"></i>
                    </button>
                    <div class="dk-faq-answer">
                        <p>Nous offrons une garantie satisfait ou remboursé de 14 jours sur tous nos produits. Si vous n'êtes pas satisfait, contactez notre support pour obtenir un remboursement intégral.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact CTA -->
        <div class="dk-faq-cta">
            <h3>Vous ne trouvez pas votre réponse ?</h3>
            <p>Notre équipe est là pour vous aider</p>
            <a href="mailto:contact@digitalkappa.com" class="dk-btn dk-btn-primary">
                <i data-lucide="mail"></i>
                Envoyer un email
            </a>
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
            // Close all items in same accordion
            const accordion = item.closest('.dk-faq-accordion');
            accordion.querySelectorAll('.dk-faq-item').forEach(i => i.classList.remove('active'));
            // Open clicked item if it wasn't active
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });

    // Filter tabs functionality
    const tabs = document.querySelectorAll('.dk-faq-tab');
    const sections = document.querySelectorAll('.dk-faq-section');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Update active tab
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            // Filter sections
            const filter = tab.dataset.filter;
            sections.forEach(section => {
                if (filter === 'all' || section.dataset.category === filter) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php endif; ?>

<?php
get_footer();
