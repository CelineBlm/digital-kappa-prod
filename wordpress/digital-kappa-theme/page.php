<?php
/**
 * Page Template
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
    while (have_posts()) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('dk-page'); ?>>
            <?php
            // Check if built with Elementor
            if (!\Elementor\Plugin::$instance->db->is_built_with_elementor(get_the_ID())) :
            ?>
            <header class="dk-page-header bg-gray-50 py-12 px-4 lg:px-20">
                <div class="max-w-4xl mx-auto text-center">
                    <?php the_title('<h1 class="text-[#1a1a1a] font-[\'Merriweather\',serif] text-3xl lg:text-4xl">', '</h1>'); ?>
                </div>
            </header>
            <?php endif; ?>

            <div class="dk-page-content">
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
    ?>
</main>

<?php
get_footer();
