<?php
/**
 * Single Post Template
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="dk-main py-12 px-4 lg:px-20">
    <div class="max-w-4xl mx-auto">
        <?php
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('dk-single-post'); ?>>
                <header class="dk-post-header mb-8">
                    <?php the_title('<h1 class="text-[#1a1a1a] font-[\'Merriweather\',serif] text-3xl lg:text-4xl mb-4">', '</h1>'); ?>

                    <div class="flex items-center gap-4 text-sm text-gray-500 font-['Montserrat',sans-serif]">
                        <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                        <span>•</span>
                        <span><?php echo get_the_author(); ?></span>
                    </div>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                <div class="dk-post-thumbnail mb-8 rounded-2xl overflow-hidden">
                    <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
                </div>
                <?php endif; ?>

                <div class="dk-post-content prose prose-lg max-w-none">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'digital-kappa'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>

                <footer class="dk-post-footer mt-12 pt-8 border-t border-gray-200">
                    <?php
                    $categories_list = get_the_category_list(', ');
                    if ($categories_list) :
                        ?>
                        <span class="cat-links text-sm text-gray-500">
                            <?php echo esc_html__('Catégories:', 'digital-kappa') . ' ' . $categories_list; ?>
                        </span>
                    <?php endif; ?>
                </footer>
            </article>

            <?php
            // Navigation
            the_post_navigation(array(
                'prev_text' => '<span class="nav-subtitle text-sm text-gray-500">' . esc_html__('Précédent:', 'digital-kappa') . '</span> <span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-subtitle text-sm text-gray-500">' . esc_html__('Suivant:', 'digital-kappa') . '</span> <span class="nav-title">%title</span>',
            ));

            // Comments
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();
