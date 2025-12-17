<?php
/**
 * Template Name: Mentions légales
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
<section class="dk-section dk-hero dk-hero-light" style="padding-top: var(--dk-space-12); padding-bottom: var(--dk-space-8);">
    <div class="dk-container" style="max-width: 900px;">
        <div class="dk-text-center">
            <span class="dk-badge dk-badge-gold-light dk-mb-4" style="padding: var(--dk-space-2) var(--dk-space-6); border-radius: var(--dk-radius-full);">
                Informations légales
            </span>
            <h1>Mentions légales</h1>
            <p class="dk-text-secondary">Dernière mise à jour : 1er décembre 2024</p>
        </div>
    </div>
</section>

<!-- Content -->
<section class="dk-section dk-section-light">
    <div class="dk-container dk-legal-content" style="max-width: 800px;">

        <h2>1. Éditeur du site</h2>
        <p>Le site digitalkappa.com est édité par :</p>
        <ul>
            <li><strong>Raison sociale :</strong> Digital Kappa</li>
            <li><strong>Forme juridique :</strong> Entreprise individuelle</li>
            <li><strong>Adresse :</strong> France</li>
            <li><strong>Email :</strong> contact@digitalkappa.com</li>
            <li><strong>Directeur de la publication :</strong> Digital Kappa</li>
        </ul>

        <h2>2. Hébergement</h2>
        <p>Le site est hébergé par :</p>
        <ul>
            <li><strong>Hébergeur :</strong> [Nom de l'hébergeur]</li>
            <li><strong>Adresse :</strong> [Adresse de l'hébergeur]</li>
            <li><strong>Téléphone :</strong> [Téléphone de l'hébergeur]</li>
        </ul>

        <h2>3. Propriété intellectuelle</h2>
        <p>L'ensemble des éléments figurant sur le site digitalkappa.com (textes, graphismes, logiciels, images, vidéos, sons, plans, logos, marques, bases de données, etc.) sont la propriété exclusive de Digital Kappa ou de ses partenaires.</p>
        <p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de Digital Kappa.</p>
        <p>Toute exploitation non autorisée du site ou de l'un quelconque des éléments qu'il contient sera considérée comme constitutive d'une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de la propriété intellectuelle.</p>

        <h2>4. Protection des données personnelles</h2>
        <p>Conformément à la loi n° 78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés, et au Règlement Général sur la Protection des Données (RGPD), vous disposez d'un droit d'accès, de rectification, de suppression et d'opposition aux données personnelles vous concernant.</p>
        <p>Pour exercer ces droits, vous pouvez nous contacter :</p>
        <ul>
            <li>Par email : privacy@digitalkappa.com</li>
            <li>Par courrier : Digital Kappa - France</li>
        </ul>
        <p>Pour plus d'informations, consultez notre <a href="<?php echo esc_url(home_url('/politique-de-confidentialite/')); ?>" class="dk-text-gold">Politique de confidentialité</a>.</p>

        <h2>5. Cookies</h2>
        <p>Le site digitalkappa.com utilise des cookies pour améliorer l'expérience utilisateur et analyser le trafic. En continuant à naviguer sur ce site, vous acceptez l'utilisation de cookies conformément à notre politique de cookies.</p>
        <p>Vous pouvez configurer votre navigateur pour refuser les cookies ou être averti lorsqu'un cookie est envoyé. Toutefois, certaines fonctionnalités du site peuvent ne pas fonctionner correctement sans cookies.</p>

        <h2>6. Liens hypertextes</h2>
        <p>Le site digitalkappa.com peut contenir des liens hypertextes vers d'autres sites web. Digital Kappa n'exerce aucun contrôle sur ces sites et décline toute responsabilité quant à leur contenu.</p>
        <p>La mise en place d'un lien hypertexte vers le site digitalkappa.com nécessite une autorisation préalable écrite de Digital Kappa.</p>

        <h2>7. Limitation de responsabilité</h2>
        <p>Digital Kappa s'efforce d'assurer l'exactitude et la mise à jour des informations diffusées sur ce site, dont elle se réserve le droit de corriger le contenu à tout moment et sans préavis.</p>
        <p>Digital Kappa décline toute responsabilité :</p>
        <ul>
            <li>Pour toute interruption du site</li>
            <li>Pour toute survenance de bugs</li>
            <li>Pour toute inexactitude ou omission portant sur des informations disponibles sur le site</li>
            <li>Pour tout dommage résultant d'une intrusion frauduleuse d'un tiers</li>
        </ul>

        <h2>8. Droit applicable</h2>
        <p>Les présentes mentions légales sont régies par le droit français. En cas de litige, les tribunaux français seront seuls compétents.</p>

        <h2>9. Contact</h2>
        <p>Pour toute question relative aux mentions légales, vous pouvez nous contacter :</p>
        <ul>
            <li><strong>Email :</strong> contact@digitalkappa.com</li>
            <li><strong>Adresse :</strong> Digital Kappa - France</li>
        </ul>

    </div>
</section>

<?php endif; ?>

<?php
get_footer();
