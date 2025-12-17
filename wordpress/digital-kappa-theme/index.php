<?php
/**
 * Main Template File
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="dk-main">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('dk-article'); ?>>
                <header class="dk-article-header">
                    <?php the_title('<h1 class="dk-article-title">', '</h1>'); ?>
                </header>

                <div class="dk-article-content">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'digital-kappa'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
            </article>
            <?php
        endwhile;

        the_posts_navigation();
    else :
        ?>
        <section class="dk-no-results">
            <header>
                <h1><?php esc_html_e('Rien trouvé', 'digital-kappa'); ?></h1>
            </header>
            <p><?php esc_html_e('Il semble que nous ne trouvions pas ce que vous recherchez.', 'digital-kappa'); ?></p>
        </section>
        <?php
    endif;
    ?>
</main>

<?php
get_footer();
