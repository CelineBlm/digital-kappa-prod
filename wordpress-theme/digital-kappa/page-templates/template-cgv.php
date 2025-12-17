<?php
/**
 * Template Name: CGV
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

<!-- Hero Section -->
<section class="dk-legal-hero">
    <div class="dk-container">
        <div class="dk-legal-hero-content">
            <span class="dk-legal-badge">Mentions légales</span>
            <h1>Conditions générales de vente</h1>
            <p>Dernière mise à jour : 1er décembre 2024</p>
        </div>

        <!-- Highlights -->
        <div class="dk-legal-highlights">
            <div class="dk-legal-highlight-card">
                <div class="dk-legal-highlight-icon">
                    <i data-lucide="file-text"></i>
                </div>
                <h4>Produits digitaux</h4>
                <p>Tous nos produits sont 100% numériques et téléchargeables instantanément</p>
            </div>

            <div class="dk-legal-highlight-card">
                <div class="dk-legal-highlight-icon">
                    <i data-lucide="lock"></i>
                </div>
                <h4>Paiement sécurisé</h4>
                <p>Transactions cryptées et conformes aux normes bancaires</p>
            </div>

            <div class="dk-legal-highlight-card">
                <div class="dk-legal-highlight-icon">
                    <i data-lucide="shield"></i>
                </div>
                <h4>Licence d'utilisation</h4>
                <p>Chaque achat inclut une licence personnelle ou commerciale</p>
            </div>

            <div class="dk-legal-highlight-card">
                <div class="dk-legal-highlight-icon">
                    <i data-lucide="refresh-cw"></i>
                </div>
                <h4>Garantie 14 jours</h4>
                <p>Remboursement intégral si le produit ne correspond pas</p>
            </div>
        </div>
    </div>
</section>

<!-- Content -->
<section class="dk-legal-content-section">
    <div class="dk-container dk-container-narrow">
        <div class="dk-legal-text">

            <h2>1. Objet et champ d'application</h2>
            <p>Les présentes Conditions Générales de Vente (CGV) régissent les relations contractuelles entre Digital Kappa, société exploitant la plateforme digitalkappa.com, et tout client souhaitant effectuer un achat de produits digitaux sur le site.</p>
            <p>En effectuant une commande sur Digital Kappa, le client reconnaît avoir pris connaissance des présentes CGV et les accepter sans réserve. Ces conditions prévalent sur tout autre document, sauf accord écrit préalable.</p>

            <h2>2. Produits et services</h2>
            <p>Digital Kappa commercialise exclusivement des produits digitaux sous forme de fichiers téléchargeables : ebooks (format PDF), applications mobiles et web (fichiers d'installation ou code source), et templates de design (fichiers compatibles avec divers logiciels).</p>
            <p>Chaque produit fait l'objet d'une description détaillée sur sa page dédiée, incluant le contenu, les prérequis techniques, la licence d'utilisation, les formats disponibles et les mises à jour incluses. Il appartient au client de s'assurer de la compatibilité du produit avec son matériel et ses besoins.</p>
            <p>Digital Kappa s'efforce de présenter les produits avec la plus grande exactitude possible. Cependant, en cas d'erreur manifeste entre la description et le produit livré, le client dispose d'un droit de rétractation conformément à l'article 6.</p>

            <h2>3. Commande et tarifs</h2>
            <p>Tous les prix affichés sur Digital Kappa sont en euros (€) et incluent la TVA applicable au taux en vigueur. Les prix sont fermes et non révisables pendant leur période de validité, telle qu'indiquée sur le site.</p>
            <p>Pour passer commande, le client doit cliquer sur le bouton "Acheter maintenant" de la page produit, renseigner ses coordonnées (nom, prénom, email) et procéder au paiement. Aucune création de compte n'est nécessaire. La validation de la commande vaut acceptation des prix et des CGV.</p>
            <p>Digital Kappa se réserve le droit de refuser toute commande d'un client avec lequel il existerait un litige relatif au paiement d'une commande antérieure, ou en cas de comportement frauduleux avéré.</p>

            <h2>4. Paiement</h2>
            <p>Le paiement s'effectue en ligne au moment de la commande par carte bancaire (Visa, Mastercard, American Express) ou via PayPal. Les informations de paiement sont transmises directement à notre prestataire de paiement sécurisé et ne transitent jamais par nos serveurs.</p>
            <p>Toutes les transactions sont cryptées selon le protocole SSL et conformes aux normes PCI-DSS. Le débit de la carte bancaire intervient immédiatement lors de la validation de la commande.</p>
            <p>En cas de refus d'autorisation de paiement par la banque du client, la commande est automatiquement annulée et le client en est informé par email. Digital Kappa ne saurait être tenu responsable des refus d'autorisation émanant des organismes bancaires.</p>

            <h2>5. Livraison et accès aux produits</h2>
            <p>La livraison des produits digitaux s'effectue immédiatement après confirmation du paiement. Le client reçoit par email un lien de téléchargement sécurisé valable 30 jours, permettant de télécharger le produit acheté ainsi que sa facture.</p>
            <p>Il est de la responsabilité du client de vérifier que l'adresse email renseignée lors de la commande est correcte et valide. Digital Kappa ne saurait être tenu responsable d'une non-réception due à une erreur de saisie ou à un filtre anti-spam.</p>
            <p>En cas de problème technique lors du téléchargement, le client peut contacter le support à l'adresse support@digitalkappa.com. Un nouveau lien sera généré dans les plus brefs délais.</p>

            <h2>6. Droit de rétractation et remboursement</h2>
            <p>Conformément à l'article L221-28 du Code de la consommation, le droit de rétractation ne peut être exercé pour les contrats de fourniture d'un contenu numérique non fourni sur un support matériel dont l'exécution a commencé avec l'accord préalable exprès du consommateur.</p>
            <p>Néanmoins, Digital Kappa offre une garantie satisfait ou remboursé de 14 jours. Si le produit ne correspond pas à vos attentes ou présente un défaut non mentionné dans la description, vous pouvez demander un remboursement intégral dans les 14 jours suivant l'achat.</p>
            <p>Pour exercer ce droit, le client doit envoyer une demande motivée à support@digitalkappa.com en indiquant son numéro de commande et les raisons de son insatisfaction. Le remboursement sera effectué dans un délai de 7 jours ouvrés sur le moyen de paiement utilisé lors de l'achat.</p>

            <h2>7. Licence d'utilisation</h2>
            <p>Chaque achat sur Digital Kappa confère au client une licence d'utilisation non exclusive et non transférable du produit digital. Cette licence peut être de type "Personnel" (usage personnel uniquement) ou "Commercial" (autorisation d'utiliser le produit dans des projets commerciaux), selon le produit acheté.</p>
            <p>Le client est autorisé à utiliser le produit pour ses propres besoins, à le modifier selon ses besoins (pour les templates et applications incluant le code source), mais ne peut en aucun cas le revendre, le redistribuer ou le partager avec des tiers.</p>
            <p>Digital Kappa conserve l'intégralité des droits de propriété intellectuelle sur les produits vendus. Toute utilisation non conforme à la licence accordée expose le client à des poursuites judiciaires.</p>

            <h2>8. Garantie et support</h2>
            <p>Digital Kappa garantit que les produits vendus sont conformes à leur description et exempts de défauts majeurs au moment de l'achat. Chaque produit a été testé en conditions réelles avant sa mise en vente.</p>
            <p>Un support technique par email est disponible pour tous les clients ayant effectué un achat. Le délai de réponse moyen est de 48 heures ouvrées. Le support couvre les questions d'installation, de compatibilité et de fonctionnement du produit.</p>
            <p>Les mises à jour mineures (corrections de bugs, améliorations) sont incluses gratuitement et envoyées automatiquement par email aux clients concernés. Les mises à jour majeures (nouvelles versions) peuvent faire l'objet d'un supplément tarifaire.</p>

            <h2>9. Données personnelles</h2>
            <p>Les données personnelles collectées lors de la commande (nom, prénom, email, adresse de facturation) sont nécessaires au traitement de la commande et à l'envoi des produits. Elles sont conservées de manière sécurisée et ne sont jamais partagées avec des tiers sans consentement.</p>
            <p>Conformément au RGPD, le client dispose d'un droit d'accès, de rectification et de suppression de ses données. Pour exercer ces droits, il peut contacter privacy@digitalkappa.com.</p>
            <p>Pour plus de détails, consultez notre <a href="<?php echo esc_url(home_url('/politique-de-confidentialite/')); ?>">politique de confidentialité</a>.</p>

            <h2>10. Responsabilité</h2>
            <p>Digital Kappa s'engage à fournir des produits de qualité et conformes à leur description. Toutefois, sa responsabilité ne saurait être engagée en cas d'utilisation non conforme du produit, d'incompatibilité technique non mentionnée par le client, ou de dommages indirects résultant de l'utilisation du produit.</p>
            <p>La responsabilité de Digital Kappa est limitée au montant payé par le client pour le produit concerné. En aucun cas, Digital Kappa ne pourra être tenu responsable de pertes de profits, de données ou de tout autre dommage indirect.</p>

            <h2>11. Litiges et médiation</h2>
            <p>En cas de litige, le client est invité à contacter en priorité le service client à l'adresse support@digitalkappa.com afin de rechercher une solution amiable.</p>
            <p>Conformément aux dispositions des articles L.611-1 et R.616-1 du Code de la consommation, nous proposons un dispositif de médiation de la consommation. L'entité de médiation retenue est : CNPM - Médiation de la Consommation (www.cnpm-mediation-consommation.eu).</p>
            <p>Les présentes CGV sont régies par le droit français. Tout litige sera interprété selon cette exécution, relevé des tribunaux français compétents.</p>

            <!-- Contact -->
            <div class="dk-legal-contact">
                <h3>Contact</h3>
                <p><strong>Digital Kappa</strong></p>
                <p>Email : <a href="mailto:contact@digitalkappa.com">contact@digitalkappa.com</a></p>
                <p>Support : <a href="mailto:support@digitalkappa.com">support@digitalkappa.com</a></p>
            </div>

        </div>
    </div>
</section>

<?php endif; ?>

<?php
get_footer();
