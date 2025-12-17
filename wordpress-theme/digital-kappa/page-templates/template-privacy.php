<?php
/**
 * Template Name: Politique de confidentialité
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
<section class="dk-legal-hero">
    <div class="dk-container">
        <div class="dk-legal-hero-content">
            <span class="dk-legal-badge">Juridique</span>
            <h1 class="dk-privacy-title">Politique de confidentialité</h1>
            <p>Dernière mise à jour : 1er décembre 2024</p>
        </div>

        <!-- Highlights -->
        <div class="dk-legal-highlights dk-legal-highlights-3">
            <div class="dk-legal-highlight-card">
                <div class="dk-legal-highlight-icon">
                    <i data-lucide="shield"></i>
                </div>
                <h4>Protection RGPD</h4>
                <p>Conformité totale au règlement européen sur la protection des données</p>
            </div>

            <div class="dk-legal-highlight-card">
                <div class="dk-legal-highlight-icon">
                    <i data-lucide="lock"></i>
                </div>
                <h4>Données sécurisées</h4>
                <p>Cryptage SSL et serveurs sécurisés en France</p>
            </div>

            <div class="dk-legal-highlight-card">
                <div class="dk-legal-highlight-icon">
                    <i data-lucide="eye"></i>
                </div>
                <h4>Transparence</h4>
                <p>Utilisation claire et limitée de vos informations</p>
            </div>
        </div>
    </div>
</section>

<!-- Content -->
<section class="dk-legal-content-section">
    <div class="dk-container dk-container-narrow">
        <div class="dk-legal-text">

            <!-- 1. Introduction -->
            <h2 class="dk-legal-section-title">
                <span class="dk-legal-section-icon"><i data-lucide="file-text"></i></span>
                1. Introduction
            </h2>
            <p>Digital Kappa, exploitant de la plateforme digitalkappa.com, accorde une importance particulière à la protection de vos données personnelles et au respect de votre vie privée.</p>
            <p>La présente Politique de confidentialité a pour objectif de vous informer de manière transparente sur les données personnelles que nous collectons, les raisons de cette collecte, la manière dont nous les utilisons, les protégeons et vos droits en la matière.</p>
            <p>Cette politique s'applique à tous les utilisateurs de notre site web et clients ayant effectué un achat sur Digital Kappa. En utilisant notre site, vous acceptez les termes de cette politique.</p>

            <!-- 2. Responsable du traitement -->
            <h2 class="dk-legal-section-title">
                <span class="dk-legal-section-icon"><i data-lucide="user"></i></span>
                2. Responsable du traitement
            </h2>
            <p>Le responsable du traitement des données personnelles collectées sur digitalkappa.com est Digital Kappa, joignable à l'adresse email : <a href="mailto:privacy@digitalkappa.com">privacy@digitalkappa.com</a>.</p>
            <p>Pour toute question relative à cette politique de confidentialité ou pour exercer vos droits, vous pouvez nous contacter à l'adresse indiquée ci-dessus.</p>

            <!-- 3. Données collectées -->
            <h2 class="dk-legal-section-title">
                <span class="dk-legal-section-icon"><i data-lucide="database"></i></span>
                3. Données collectées
            </h2>

            <h3 class="dk-legal-subsection">3.1. Données fournies directement par vous</h3>
            <p>Lors de votre achat sur Digital Kappa, nous collectons les informations suivantes :</p>
            <ul>
                <li>Nom et prénom</li>
                <li>Adresse email</li>
                <li>Adresse de facturation (optionnelle selon le pays)</li>
                <li>Informations de paiement (traitées par notre prestataire tiers sécurisé)</li>
            </ul>

            <h3 class="dk-legal-subsection">3.2. Données collectées automatiquement</h3>
            <p>Lors de votre navigation sur notre site, nous collectons automatiquement :</p>
            <ul>
                <li>Adresse IP</li>
                <li>Type et version de navigateur</li>
                <li>Système d'exploitation</li>
                <li>Pages visitées et durée de visite</li>
                <li>Données de navigation et les cookies analytiques</li>
            </ul>

            <h3 class="dk-legal-subsection">3.3. Données non collectées</h3>
            <p>Nous ne collectons JAMAIS les données suivantes :</p>
            <ul>
                <li>Numéros de carte bancaire complets (traités uniquement par notre prestataire de paiement sécurisé)</li>
                <li>Données sensibles (religion, opinions politiques, santé)</li>
                <li>Données biométriques</li>
                <li>Toute autre donnée non nécessaire à notre activité</li>
            </ul>

            <!-- 4. Finalités du traitement -->
            <h2 class="dk-legal-section-title">
                <span class="dk-legal-section-icon"><i data-lucide="target"></i></span>
                4. Finalités du traitement
            </h2>
            <p>Vos données personnelles sont collectées et utilisées pour les finalités suivantes :</p>

            <div class="dk-legal-list-block">
                <div class="dk-legal-list-item">
                    <strong>Traitement des commandes</strong>
                    <p>Validation de votre achat, envoi du produit digital, génération de facture</p>
                </div>
                <div class="dk-legal-list-item">
                    <strong>Communication client</strong>
                    <p>Envoi des liens de téléchargement, support technique, réponses à vos questions</p>
                </div>
                <div class="dk-legal-list-item">
                    <strong>Amélioration du service</strong>
                    <p>Analyse statistique de navigation, optimisation de l'expérience utilisateur</p>
                </div>
                <div class="dk-legal-list-item">
                    <strong>Obligations légales</strong>
                    <p>Conservation des factures, respect des obligations comptables et fiscales</p>
                </div>
                <div class="dk-legal-list-item">
                    <strong>Newsletter (avec consentement)</strong>
                    <p>Envoi d'informations sur les nouveaux produits et offres spéciales (opt-in uniquement)</p>
                </div>
            </div>
            <p>Vos données personnelles ne sont jamais utilisées à des fins incompatibles avec celles décrites. Aucune décision automatisée, ni profilage n'est effectué sur la base de vos données.</p>

            <!-- 5. Base légale du traitement -->
            <h2 class="dk-legal-section-title">
                <span class="dk-legal-section-icon"><i data-lucide="scale"></i></span>
                5. Base légale du traitement
            </h2>
            <p>Conformément au RGPD, nos traitements de données reposent sur les bases légales suivantes :</p>
            <ul>
                <li><strong>Exécution du contrat :</strong> traitement des commandes et livraison des produits</li>
                <li><strong>Obligation légale :</strong> conservation des factures et données fiscales</li>
                <li><strong>Intérêt légitime :</strong> amélioration de nos services et prévention de la fraude</li>
                <li><strong>Consentement :</strong> envoi de la newsletter et communications marketing</li>
            </ul>

            <!-- 6. Partage et destinataires des données -->
            <h2 class="dk-legal-section-title">
                <span class="dk-legal-section-icon"><i data-lucide="share-2"></i></span>
                6. Partage et destinataires des données
            </h2>
            <p>Vos données personnelles ne sont jamais vendues ni louées. Elles peuvent être partagées uniquement avec les prestataires suivants, exclusivement :</p>

            <div class="dk-legal-list-block">
                <div class="dk-legal-list-item">
                    <strong>Prestataire de paiement</strong>
                    <p>Stripe/PayPal pour le traitement sécurisé des paiements</p>
                </div>
                <div class="dk-legal-list-item">
                    <strong>Hébergeur web</strong>
                    <p>Pour le stockage sécurisé des données en France/Europe</p>
                </div>
                <div class="dk-legal-list-item">
                    <strong>Service d'emailing</strong>
                    <p>Pour l'envoi des liens de téléchargement et newsletters</p>
                </div>
                <div class="dk-legal-list-item">
                    <strong>Outil d'analyse</strong>
                    <p>Pour les statistiques anonymisées</p>
                </div>
            </div>

            <p>À l'exception de ces prestataires, vos données personnelles ne sont partagées avec aucun tiers sauf obligation légale.</p>

            <!-- 7. Durée de conservation -->
            <h2 class="dk-legal-section-title">
                <span class="dk-legal-section-icon"><i data-lucide="clock"></i></span>
                7. Durée de conservation
            </h2>
            <p>Vos données personnelles sont conservées pendant les durées suivantes :</p>
            <ul>
                <li><strong>Données de commande :</strong> 10 ans (obligation légale comptable)</li>
                <li><strong>Données de navigation :</strong> 13 mois maximum</li>
                <li><strong>Newsletter :</strong> jusqu'à désinscription ou 3 ans après la dernière interaction</li>
                <li><strong>Support client :</strong> 3 ans après la dernière interaction</li>
            </ul>
            <p>À l'issue de ces périodes, vos données sont supprimées ou anonymisées de manière irréversible.</p>

            <!-- 8. Sécurité des données -->
            <h2 class="dk-legal-section-title">
                <span class="dk-legal-section-icon"><i data-lucide="shield-check"></i></span>
                8. Sécurité des données
            </h2>
            <p>Digital Kappa met en place toutes les mesures techniques et organisationnelles appropriées pour assurer la sécurité de vos données personnelles :</p>
            <ul>
                <li>Cryptage SSL/TLS pour toutes les communications</li>
                <li>Serveurs sécurisés et régulièrement mis à jour</li>
                <li>Accès aux données limité aux personnes autorisées</li>
                <li>Sauvegardes régulières et chiffrées</li>
                <li>Audits de sécurité réguliers</li>
            </ul>
            <p>Conformité à la protection et la confidentialité des données.</p>
            <p>Malgré nos efforts, aucun système n'est infaillible face à 100%. En cas de violation de données, nous vous informerons dans les 72 heures conformément au RGPD.</p>

            <!-- 9. Vos droits -->
            <h2 class="dk-legal-section-title">
                <span class="dk-legal-section-icon"><i data-lucide="user-check"></i></span>
                9. Vos droits
            </h2>
            <p>Conformément au RGPD et à la loi Informatique et Libertés, vous disposez des droits suivants concernant vos données personnelles :</p>

            <div class="dk-legal-rights-grid">
                <div class="dk-legal-right-item">
                    <strong>Droit d'accès</strong>
                    <p>Obtenir une copie de toutes vos données personnelles que nous détenons</p>
                </div>
                <div class="dk-legal-right-item">
                    <strong>Droit de rectification</strong>
                    <p>Corriger des données inexactes ou incomplètes</p>
                </div>
                <div class="dk-legal-right-item">
                    <strong>Droit à l'effacement</strong>
                    <p>Demander la suppression de vos données (droit "à l'oubli et droit de suppression")</p>
                </div>
                <div class="dk-legal-right-item">
                    <strong>Droit à la limitation</strong>
                    <p>Limiter le traitement de vos données dans certaines circonstances</p>
                </div>
                <div class="dk-legal-right-item">
                    <strong>Droit à la portabilité</strong>
                    <p>Recevoir vos données dans un format structuré pour les transférer</p>
                </div>
                <div class="dk-legal-right-item">
                    <strong>Droit d'opposition</strong>
                    <p>Vous opposer au traitement de vos données pour motifs légitimes</p>
                </div>
                <div class="dk-legal-right-item">
                    <strong>Droit de retrait du consentement</strong>
                    <p>Retirer votre consentement à tout moment (newsletter notamment)</p>
                </div>
            </div>

            <p>Pour exercer l'un de ces droits, contactez-nous à <a href="mailto:privacy@digitalkappa.com">privacy@digitalkappa.com</a>. Vos demandes seront traitées et nous y répondrons sous 30 jours maximum.</p>
            <p>Vous disposez également d'un droit d'introduire une réclamation auprès de la CNIL (Commission Nationale de l'Informatique et des Libertés) si vous estimez que vos droits ne sont pas respectés.</p>

            <!-- 10. Cookies -->
            <h2 class="dk-legal-section-title">
                <span class="dk-legal-section-icon"><i data-lucide="cookie"></i></span>
                10. Cookies
            </h2>
            <p>Notre site utilise des cookies pour améliorer votre expérience de navigation. Un cookie est un petit fichier texte déposé sur votre appareil.</p>
            <ul>
                <li><strong>Cookies strictement nécessaires :</strong> indispensables au fonctionnement du site (panier, session, sécurité), ils ne nécessitent pas de consentement</li>
                <li><strong>Cookies analytiques :</strong> nous permettent de comprendre comment vous utilisez notre site pour l'améliorer (Google Analytics ou équivalent conforme au RGPD)</li>
                <li><strong>Cookies fonctionnels :</strong> mémorisent vos préférences pour vous offrir une expérience personnalisée</li>
            </ul>
            <p>Vous pouvez gérer vos préférences concernant les cookies en modifiant les paramètres de votre navigateur ou via notre bandeau de consentement.</p>

            <!-- 11. Modifications de la politique -->
            <h2 class="dk-legal-section-title">
                <span class="dk-legal-section-icon"><i data-lucide="edit"></i></span>
                11. Modifications de la politique
            </h2>
            <p>Digital Kappa se réserve le droit de modifier cette Politique de confidentialité à tout moment. Toute modification sera reflétée sur cette page, les modifications de fond porteront la date de mise à jour révisée.</p>
            <p>Toute modification substantielle vous sera notifiée par email ou via un bandeau sur le site internet. Nous vous invitons à consulter régulièrement cette page pour être informé de nos pratiques en matière de protection des données.</p>
            <p>Nous vous encourageons à consulter régulièrement cette page pour rester informé de nos pratiques en matière de protection des données.</p>

            <!-- Contact -->
            <div class="dk-legal-contact">
                <h3>Nous contacter</h3>
                <p>Pour toute question relative à cette politique de confidentialité et à vos données, vous pouvez nous écrire à :</p>
                <p><strong>Digital Kappa</strong></p>
                <p>Email : <a href="mailto:privacy@digitalkappa.com">privacy@digitalkappa.com</a></p>
                <p>Support général : <a href="mailto:support@digitalkappa.com">support@digitalkappa.com</a></p>
            </div>

        </div>
    </div>
</section>

<?php endif; ?>

<?php
get_footer();
