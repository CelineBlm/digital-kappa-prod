<?php
/**
 * Template Name: À propos
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
<section class="dk-about-hero">
    <div class="dk-container">
        <div class="dk-about-hero-content">
            <span class="dk-about-badge">À propos de nous</span>
            <h1>Digital Kappa, votre<br>partenaire digital</h1>
            <p>Nous proposons des ressources numériques simples, efficaces et de qualité pour aider les créateurs, entrepreneurs et passionnés à accomplir plus en moins de temps.</p>
        </div>

        <!-- Stats -->
        <div class="dk-about-stats">
            <div class="dk-about-stat">
                <span class="dk-about-stat-value">2026</span>
                <span class="dk-about-stat-label">Année de lancement</span>
            </div>
            <div class="dk-about-stat">
                <span class="dk-about-stat-value">100%</span>
                <span class="dk-about-stat-label">Engagement qualité</span>
            </div>
            <div class="dk-about-stat">
                <span class="dk-about-stat-value">14 jours</span>
                <span class="dk-about-stat-label">Garantie satisfait ou remboursé</span>
            </div>
            <div class="dk-about-stat">
                <span class="dk-about-stat-value">24h</span>
                <span class="dk-about-stat-label">Support réactif</span>
            </div>
        </div>
    </div>
</section>

<!-- Notre histoire Section -->
<section class="dk-about-story">
    <div class="dk-container">
        <div class="dk-about-story-grid">
            <div class="dk-about-story-content">
                <h2>Notre histoire</h2>
                <p>Digital Kappa naît de l'envie de proposer des ressources numériques simples, efficaces et de qualité pour aider les créateurs, entrepreneurs et passionnés à accomplir plus en moins de temps.</p>
                <p>Le projet vise à rendre l'accès aux outils digitaux plus rapide, plus clair et plus fiable. Contrairement aux marketplaces géantes où il est difficile de s'y retrouver, nous proposons une sélection organisée qui évite la confusion.</p>
                <p>Notre mission est de vous faire gagner du temps en vous proposant des produits prêts à l'emploi, pensés pour être directement utilisables dans vos projets personnels ou professionnels.</p>
            </div>
            <div class="dk-about-story-image">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/about-story.jpg'); ?>" alt="Notre histoire - Digital Kappa">
            </div>
        </div>
    </div>
</section>

<!-- Nos valeurs Section -->
<section class="dk-about-values">
    <div class="dk-container">
        <div class="dk-about-values-header">
            <h2>Nos valeurs</h2>
            <p>Ce qui nous guide au quotidien</p>
        </div>

        <div class="dk-about-values-grid">
            <div class="dk-about-value-card">
                <div class="dk-about-value-icon">
                    <i data-lucide="zap"></i>
                </div>
                <h4>Simplicité</h4>
                <p>Des produits faciles à comprendre et à utiliser, sans complexité inutile.</p>
            </div>

            <div class="dk-about-value-card">
                <div class="dk-about-value-icon">
                    <i data-lucide="users"></i>
                </div>
                <h4>Accessibilité</h4>
                <p>Des ressources accessibles à tous, quel que soit votre niveau.</p>
            </div>

            <div class="dk-about-value-card">
                <div class="dk-about-value-icon">
                    <i data-lucide="award"></i>
                </div>
                <h4>Qualité</h4>
                <p>Une sélection rigoureuse garantissant l'excellence de chaque produit.</p>
            </div>

            <div class="dk-about-value-card">
                <div class="dk-about-value-icon">
                    <i data-lucide="layers"></i>
                </div>
                <h4>Modernité</h4>
                <p>Des outils et designs à la pointe des tendances actuelles.</p>
            </div>

            <div class="dk-about-value-card">
                <div class="dk-about-value-icon">
                    <i data-lucide="shield-check"></i>
                </div>
                <h4>Fiabilité</h4>
                <p>Des produits testés et approuvés par notre communauté.</p>
            </div>

            <div class="dk-about-value-card">
                <div class="dk-about-value-icon">
                    <i data-lucide="heart"></i>
                </div>
                <h4>Satisfaction client</h4>
                <p>Votre réussite est notre priorité absolue.</p>
            </div>
        </div>
    </div>
</section>

<!-- Ce qui nous différencie Section -->
<section class="dk-about-difference">
    <div class="dk-container">
        <h2>Ce qui nous différencie</h2>

        <div class="dk-about-difference-grid">
            <div class="dk-about-difference-item">
                <span class="dk-about-difference-check"><i data-lucide="check"></i></span>
                <div>
                    <h4>Téléchargement instantané</h4>
                    <p>Accédez immédiatement à vos produits dès l'achat, sans attente.</p>
                </div>
            </div>

            <div class="dk-about-difference-item">
                <span class="dk-about-difference-check"><i data-lucide="check"></i></span>
                <div>
                    <h4>Organisation claire et intuitive</h4>
                    <p>Trouvez facilement ce que vous cherchez grâce à notre système de catégorisation simple.</p>
                </div>
            </div>

            <div class="dk-about-difference-item">
                <span class="dk-about-difference-check"><i data-lucide="check"></i></span>
                <div>
                    <h4>Qualité constante</h4>
                    <p>Chaque produit est sélectionné selon des critères rigoureux de qualité.</p>
                </div>
            </div>

            <div class="dk-about-difference-item">
                <span class="dk-about-difference-check"><i data-lucide="check"></i></span>
                <div>
                    <h4>Interface moderne et épurée</h4>
                    <p>Une expérience utilisateur fluide, sans complexité technique inutile.</p>
                </div>
            </div>

            <div class="dk-about-difference-item">
                <span class="dk-about-difference-check"><i data-lucide="check"></i></span>
                <div>
                    <h4>Éviter la confusion des marketplaces géantes</h4>
                    <p>Une sélection organisée qui vous fait gagner un temps précieux.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Info Section -->
<section class="dk-about-info">
    <div class="dk-container">
        <div class="dk-about-info-header">
            <h2>À propos de Digital Kappa : Mission, valeurs et engagement qualité</h2>
        </div>

        <div class="dk-info-grid">
            <div class="dk-info-block">
                <div class="dk-info-icon">
                    <span>1</span>
                </div>
                <div>
                    <p>Digital Kappa est née d'un constat simple : trouver rapidement des produits digitaux de qualité dans les grandes marketplaces est devenu difficile. Notre équipe de développeurs, designers et entrepreneurs a créé cette plateforme française pour offrir une alternative claire et fiable.</p>
                </div>
            </div>

            <div class="dk-info-block">
                <div class="dk-info-icon">
                    <span>2</span>
                </div>
                <div>
                    <p>Contrairement aux marketplaces géantes, Digital Kappa propose une sélection rigoureuse. Chaque ebook, application ou template est testé selon des critères stricts de qualité, pertinence et utilité pratique avant mise en ligne.</p>
                </div>
            </div>

            <div class="dk-info-block">
                <div class="dk-info-icon">
                    <span>3</span>
                </div>
                <div>
                    <p>Nos valeurs fondamentales : simplicité, accessibilité, qualité, modernité et fiabilité. Acheter un produit digital doit être simple, c'est pourquoi nous avons adopté un système d'achat direct sans panier ni compte obligatoire.</p>
                </div>
            </div>

            <div class="dk-info-block">
                <div class="dk-info-icon">
                    <span>4</span>
                </div>
                <div>
                    <p>Basée en France et pleinement conforme au RGPD, Digital Kappa garantit la protection de vos données personnelles et la transparence. Support client réactif disponible pour répondre à toutes vos questions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
