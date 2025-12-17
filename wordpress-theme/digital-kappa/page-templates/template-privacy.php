<?php
/**
 * Template Name: Politique de confidentialité
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
<section class="dk-section dk-hero dk-hero-light" style="padding-top: var(--dk-space-12); padding-bottom: var(--dk-space-8);">
    <div class="dk-container" style="max-width: 900px;">
        <div class="dk-text-center">
            <span class="dk-badge dk-badge-gold-light dk-mb-4" style="padding: var(--dk-space-2) var(--dk-space-6); border-radius: var(--dk-radius-full);">
                Vie privée
            </span>
            <h1>Politique de confidentialité</h1>
            <p class="dk-text-secondary">Dernière mise à jour : 1er décembre 2024</p>
        </div>
    </div>
</section>

<!-- Highlights -->
<section class="dk-section dk-section-light" style="padding-top: 0;">
    <div class="dk-container" style="max-width: 900px;">
        <div class="dk-grid dk-grid-3" style="gap: var(--dk-space-6);">
            <div class="dk-card-feature dk-text-center">
                <div class="dk-card-feature-icon" style="margin: 0 auto var(--dk-space-4);">
                    <i data-lucide="shield"></i>
                </div>
                <h3 class="dk-card-feature-title">Protection RGPD</h3>
                <p class="dk-card-feature-description">Conformité totale au règlement européen</p>
            </div>

            <div class="dk-card-feature dk-text-center">
                <div class="dk-card-feature-icon" style="margin: 0 auto var(--dk-space-4);">
                    <i data-lucide="lock"></i>
                </div>
                <h3 class="dk-card-feature-title">Données sécurisées</h3>
                <p class="dk-card-feature-description">Cryptage SSL et serveurs sécurisés</p>
            </div>

            <div class="dk-card-feature dk-text-center">
                <div class="dk-card-feature-icon" style="margin: 0 auto var(--dk-space-4);">
                    <i data-lucide="eye"></i>
                </div>
                <h3 class="dk-card-feature-title">Transparence</h3>
                <p class="dk-card-feature-description">Utilisation claire de vos informations</p>
            </div>
        </div>
    </div>
</section>

<!-- Content -->
<section class="dk-section dk-section-light">
    <div class="dk-container dk-legal-content" style="max-width: 800px;">

        <h2><i data-lucide="chevron-right" style="width: 24px; height: 24px; color: var(--dk-gold); display: inline; vertical-align: middle; margin-right: 8px;"></i>1. Introduction</h2>
        <p>Digital Kappa, exploitant de la plateforme digitalkappa.com, accorde une importance particulière à la protection de vos données personnelles et au respect de votre vie privée.</p>
        <p>La présente Politique de confidentialité a pour objectif de vous informer de manière transparente sur les données personnelles que nous collectons, les raisons de cette collecte, la manière dont nous les utilisons, les protégeons et vos droits en la matière.</p>
        <p>Cette politique s'applique à tous les utilisateurs de notre site web et clients ayant effectué un achat sur Digital Kappa. En utilisant notre site, vous acceptez les termes de cette politique.</p>

        <h2><i data-lucide="chevron-right" style="width: 24px; height: 24px; color: var(--dk-gold); display: inline; vertical-align: middle; margin-right: 8px;"></i>2. Responsable du traitement</h2>
        <p>Le responsable du traitement des données personnelles collectées sur digitalkappa.com est Digital Kappa, joignable à l'adresse email : privacy@digitalkappa.com.</p>
        <p>Pour toute question relative à cette politique de confidentialité ou pour exercer vos droits, vous pouvez nous contacter à l'adresse indiquée ci-dessus.</p>

        <h2><i data-lucide="chevron-right" style="width: 24px; height: 24px; color: var(--dk-gold); display: inline; vertical-align: middle; margin-right: 8px;"></i>3. Données collectées</h2>

        <h3>3.1. Données fournies directement par vous</h3>
        <p>Lors de votre achat sur Digital Kappa, nous collectons les informations suivantes :</p>
        <ul>
            <li>Nom et prénom</li>
            <li>Adresse email</li>
            <li>Adresse de facturation (optionnelle selon le pays)</li>
            <li>Informations de paiement (traitées par notre prestataire tiers sécurisé)</li>
        </ul>

        <h3>3.2. Données collectées automatiquement</h3>
        <p>Lors de votre navigation sur notre site, nous collectons automatiquement :</p>
        <ul>
            <li>Adresse IP</li>
            <li>Type et version de navigateur</li>
            <li>Système d'exploitation</li>
            <li>Pages visitées et durée de visite</li>
            <li>Données de navigation (via cookies analytiques)</li>
        </ul>

        <h3>3.3. Données non collectées</h3>
        <p>Nous ne collectons JAMAIS les données suivantes : numéros de carte bancaire complets (traités uniquement par notre prestataire de paiement sécurisé), données sensibles (religion, opinions politiques, santé), données biométriques, ou tout autre donnée non nécessaire à notre activité.</p>

        <h2><i data-lucide="chevron-right" style="width: 24px; height: 24px; color: var(--dk-gold); display: inline; vertical-align: middle; margin-right: 8px;"></i>4. Finalités du traitement</h2>
        <p>Vos données personnelles sont collectées et utilisées pour les finalités suivantes :</p>

        <div style="border-left: 2px solid var(--dk-border-gray); padding-left: var(--dk-space-4); margin: var(--dk-space-4) 0;">
            <h4>Traitement des commandes</h4>
            <p style="font-size: var(--dk-text-sm);">Validation de votre achat, envoi du produit digital, génération de facture</p>

            <h4>Communication client</h4>
            <p style="font-size: var(--dk-text-sm);">Envoi des liens de téléchargement, support technique, réponses à vos questions</p>

            <h4>Amélioration du service</h4>
            <p style="font-size: var(--dk-text-sm);">Analyse statistique de navigation, optimisation de l'expérience utilisateur</p>

            <h4>Obligations légales</h4>
            <p style="font-size: var(--dk-text-sm);">Conservation des factures, respect des obligations comptables et fiscales</p>

            <h4>Newsletter (avec consentement)</h4>
            <p style="font-size: var(--dk-text-sm);">Envoi d'informations sur les nouveaux produits et offres spéciales (opt-in uniquement)</p>
        </div>

        <h2><i data-lucide="chevron-right" style="width: 24px; height: 24px; color: var(--dk-gold); display: inline; vertical-align: middle; margin-right: 8px;"></i>5. Base légale du traitement</h2>
        <p>Le traitement de vos données personnelles repose sur plusieurs bases légales :</p>
        <ul>
            <li><strong>Exécution du contrat :</strong> traitement des commandes et livraison des produits</li>
            <li><strong>Obligation légale :</strong> conservation des factures et données fiscales</li>
            <li><strong>Intérêt légitime :</strong> amélioration de nos services et prévention de la fraude</li>
            <li><strong>Consentement :</strong> newsletter et communications marketing (opt-in)</li>
        </ul>

        <h2><i data-lucide="chevron-right" style="width: 24px; height: 24px; color: var(--dk-gold); display: inline; vertical-align: middle; margin-right: 8px;"></i>6. Durée de conservation</h2>
        <p>Vos données personnelles sont conservées pour les durées suivantes :</p>
        <ul>
            <li><strong>Données de commande :</strong> 10 ans (obligation légale comptable)</li>
            <li><strong>Données de navigation :</strong> 13 mois maximum</li>
            <li><strong>Newsletter :</strong> jusqu'à votre désinscription</li>
            <li><strong>Support client :</strong> 3 ans après la dernière interaction</li>
        </ul>

        <h2><i data-lucide="chevron-right" style="width: 24px; height: 24px; color: var(--dk-gold); display: inline; vertical-align: middle; margin-right: 8px;"></i>7. Partage des données</h2>
        <p>Nous ne vendons ni ne louons jamais vos données personnelles. Vos données peuvent être partagées uniquement avec :</p>
        <ul>
            <li><strong>Prestataire de paiement :</strong> pour traiter les transactions (Stripe, PayPal)</li>
            <li><strong>Hébergeur web :</strong> pour le stockage sécurisé des données</li>
            <li><strong>Service d'emailing :</strong> pour l'envoi des liens de téléchargement et newsletters</li>
            <li><strong>Autorités légales :</strong> en cas d'obligation légale uniquement</li>
        </ul>
        <p>Tous nos prestataires sont soumis à des obligations strictes de sécurité et de confidentialité conformément au RGPD.</p>

        <h2><i data-lucide="chevron-right" style="width: 24px; height: 24px; color: var(--dk-gold); display: inline; vertical-align: middle; margin-right: 8px;"></i>8. Sécurité des données</h2>
        <p>Nous mettons en œuvre toutes les mesures techniques et organisationnelles appropriées pour protéger vos données personnelles :</p>
        <ul>
            <li>Cryptage SSL/TLS de toutes les communications</li>
            <li>Serveurs sécurisés et régulièrement mis à jour</li>
            <li>Accès restreint aux données personnelles (principe du moindre privilège)</li>
            <li>Sauvegardes régulières et chiffrées</li>
            <li>Surveillance et détection des tentatives d'intrusion</li>
        </ul>

        <h2><i data-lucide="chevron-right" style="width: 24px; height: 24px; color: var(--dk-gold); display: inline; vertical-align: middle; margin-right: 8px;"></i>9. Vos droits</h2>
        <p>Conformément au RGPD, vous disposez des droits suivants concernant vos données personnelles :</p>
        <ul>
            <li><strong>Droit d'accès :</strong> obtenir une copie de vos données personnelles</li>
            <li><strong>Droit de rectification :</strong> corriger vos données inexactes ou incomplètes</li>
            <li><strong>Droit à l'effacement :</strong> supprimer vos données dans certaines conditions</li>
            <li><strong>Droit à la limitation :</strong> restreindre le traitement de vos données</li>
            <li><strong>Droit à la portabilité :</strong> recevoir vos données dans un format structuré</li>
            <li><strong>Droit d'opposition :</strong> vous opposer au traitement de vos données</li>
            <li><strong>Droit de retrait du consentement :</strong> retirer votre consentement à tout moment</li>
        </ul>
        <p>Pour exercer ces droits, contactez-nous à privacy@digitalkappa.com. Nous répondrons dans un délai maximum de 30 jours.</p>

        <h2><i data-lucide="chevron-right" style="width: 24px; height: 24px; color: var(--dk-gold); display: inline; vertical-align: middle; margin-right: 8px;"></i>10. Cookies</h2>
        <p>Notre site utilise des cookies pour améliorer votre expérience de navigation :</p>
        <ul>
            <li><strong>Cookies essentiels :</strong> nécessaires au fonctionnement du site (panier, session)</li>
            <li><strong>Cookies analytiques :</strong> mesure d'audience et statistiques (Google Analytics)</li>
            <li><strong>Cookies de préférence :</strong> mémorisation de vos choix (langue, devise)</li>
        </ul>
        <p>Vous pouvez configurer vos préférences de cookies ou les refuser via les paramètres de votre navigateur. Notez que certaines fonctionnalités du site peuvent être limitées.</p>

        <h2><i data-lucide="chevron-right" style="width: 24px; height: 24px; color: var(--dk-gold); display: inline; vertical-align: middle; margin-right: 8px;"></i>11. Modifications</h2>
        <p>Nous nous réservons le droit de modifier cette politique de confidentialité à tout moment. Toute modification sera publiée sur cette page avec une nouvelle date de mise à jour.</p>
        <p>En cas de modification substantielle, nous vous informerons par email ou via une notification sur le site.</p>

        <h2><i data-lucide="chevron-right" style="width: 24px; height: 24px; color: var(--dk-gold); display: inline; vertical-align: middle; margin-right: 8px;"></i>12. Contact</h2>
        <p>Pour toute question concernant cette politique de confidentialité :</p>
        <p>Email : privacy@digitalkappa.com</p>
        <p>Adresse : Digital Kappa - France</p>
        <p>Vous pouvez également contacter la CNIL (Commission Nationale de l'Informatique et des Libertés) si vous estimez que vos droits ne sont pas respectés.</p>

    </div>
</section>

<?php
get_footer();
