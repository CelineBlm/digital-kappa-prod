<?php
/**
 * The main template file
 *
 * @package Digital_Kappa
 */

get_header();
?>

<div class="dk-section dk-section-light">
    <div class="dk-container">
        <?php if (have_posts()) : ?>
            <div class="dk-grid dk-grid-3">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('dk-card'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="dk-card-image">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="dk-card-product-content">
                            <h2 class="dk-card-product-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="dk-card-product-description">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="dk-btn dk-btn-primary dk-btn-sm">
                                <?php esc_html_e('Lire la suite', 'digital-kappa'); ?>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <?php the_posts_pagination(array(
                'prev_text' => '<i data-lucide="chevron-left"></i> ' . __('Précédent', 'digital-kappa'),
                'next_text' => __('Suivant', 'digital-kappa') . ' <i data-lucide="chevron-right"></i>',
                'class'     => 'dk-pagination',
            )); ?>

        <?php else : ?>
            <div class="dk-text-center dk-py-12">
                <p><?php esc_html_e('Aucun contenu trouvé.', 'digital-kappa'); ?></p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
