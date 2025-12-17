<?php
/**
 * The template for displaying all pages
 *
 * @package Digital_Kappa
 */

get_header();
?>

<div class="dk-page-content">
    <?php while (have_posts()) : the_post(); ?>
        <article id="page-<?php the_ID(); ?>" <?php post_class('dk-article'); ?>>
            <?php the_content(); ?>
        </article>
    <?php endwhile; ?>
</div>

<?php
get_footer();
