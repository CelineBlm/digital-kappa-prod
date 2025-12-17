<?php
/**
 * Custom template tags for this theme
 *
 * @package Digital_Kappa
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Display the site logo or site title
 */
function digital_kappa_site_logo() {
    $logo_id = get_theme_mod('dk_logo');

    if ($logo_id) {
        echo wp_get_attachment_image($logo_id, 'full', false, array(
            'alt' => get_bloginfo('name'),
            'class' => 'dk-logo-img',
        ));
    } elseif (file_exists(get_template_directory() . '/assets/images/logo-digital-kappa.svg')) {
        echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/logo-digital-kappa.svg') . '" alt="' . esc_attr(get_bloginfo('name')) . '" class="dk-logo-img">';
    } else {
        echo '<span class="dk-logo-text">' . esc_html(get_bloginfo('name')) . '</span>';
    }
}

/**
 * Display footer logo (white version)
 */
function digital_kappa_footer_logo() {
    $footer_logo_id = get_theme_mod('dk_logo_footer');

    if ($footer_logo_id) {
        echo wp_get_attachment_image($footer_logo_id, 'full', false, array(
            'alt' => get_bloginfo('name'),
            'class' => 'dk-footer-logo-img',
        ));
    } elseif (file_exists(get_template_directory() . '/assets/images/logo-digital-kappa.svg')) {
        echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/logo-digital-kappa.svg') . '" alt="' . esc_attr(get_bloginfo('name')) . '" class="dk-footer-logo-img" style="filter: brightness(0) invert(1);">';
    } else {
        echo '<span class="dk-footer-logo-text">' . esc_html(get_bloginfo('name')) . '</span>';
    }
}

/**
 * Display post meta
 */
function digital_kappa_post_meta() {
    $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

    $time_string = sprintf(
        $time_string,
        esc_attr(get_the_date(DATE_W3C)),
        esc_html(get_the_date())
    );

    echo '<span class="dk-post-date">' . $time_string . '</span>';

    if (get_the_author_meta('ID')) {
        echo '<span class="dk-post-author">';
        echo '<span class="dk-post-author-prefix">' . esc_html__('par', 'digital-kappa') . '</span> ';
        echo '<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a>';
        echo '</span>';
    }
}

/**
 * Display categories for a post
 */
function digital_kappa_post_categories() {
    $categories = get_the_category();

    if (!empty($categories)) {
        echo '<div class="dk-post-categories">';
        foreach ($categories as $category) {
            echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="dk-badge dk-badge-gold-light">';
            echo esc_html($category->name);
            echo '</a>';
        }
        echo '</div>';
    }
}

/**
 * Display social share buttons
 */
function digital_kappa_social_share() {
    $url = urlencode(get_permalink());
    $title = urlencode(get_the_title());

    echo '<div class="dk-social-share">';
    echo '<span class="dk-social-share-label">' . esc_html__('Partager :', 'digital-kappa') . '</span>';

    // Facebook
    echo '<a href="https://www.facebook.com/sharer/sharer.php?u=' . $url . '" target="_blank" rel="noopener noreferrer" class="dk-social-share-link">';
    echo '<i data-lucide="facebook"></i>';
    echo '</a>';

    // Twitter
    echo '<a href="https://twitter.com/intent/tweet?url=' . $url . '&text=' . $title . '" target="_blank" rel="noopener noreferrer" class="dk-social-share-link">';
    echo '<i data-lucide="twitter"></i>';
    echo '</a>';

    // LinkedIn
    echo '<a href="https://www.linkedin.com/shareArticle?mini=true&url=' . $url . '&title=' . $title . '" target="_blank" rel="noopener noreferrer" class="dk-social-share-link">';
    echo '<i data-lucide="linkedin"></i>';
    echo '</a>';

    echo '</div>';
}

/**
 * Display a product card
 *
 * @param array $product Product data
 */
function digital_kappa_product_card($product) {
    ?>
    <div class="dk-card-product" data-category="<?php echo esc_attr(strtolower($product['category'])); ?>" data-price="<?php echo esc_attr($product['price']); ?>" data-rating="<?php echo esc_attr($product['rating']); ?>">
        <img src="<?php echo esc_url($product['image']); ?>" alt="<?php echo esc_attr($product['title']); ?>" class="dk-card-product-image">
        <div class="dk-card-product-content">
            <span class="dk-card-product-category">
                <?php echo digital_kappa_get_category_icon($product['category']); ?>
                <?php echo esc_html($product['category']); ?>
            </span>
            <h3 class="dk-card-product-title"><?php echo esc_html($product['title']); ?></h3>
            <p class="dk-card-product-description"><?php echo esc_html($product['description']); ?></p>
            <div class="dk-card-product-footer">
                <span class="dk-card-product-price"><?php echo esc_html($product['price']); ?> €</span>
                <?php echo digital_kappa_rating($product['rating'], $product['review_count']); ?>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Get category icon
 *
 * @param string $category Category name
 * @return string Icon HTML
 */
function digital_kappa_get_category_icon($category) {
    $icons = array(
        'Ebook' => 'book-open',
        'Application' => 'smartphone',
        'Template' => 'layout',
    );

    $icon = isset($icons[$category]) ? $icons[$category] : 'package';

    return '<i data-lucide="' . esc_attr($icon) . '" style="width: 12px; height: 12px;"></i>';
}

/**
 * Display feature card
 *
 * @param string $icon Lucide icon name
 * @param string $title Card title
 * @param string $description Card description
 */
function digital_kappa_feature_card($icon, $title, $description) {
    ?>
    <div class="dk-card-feature">
        <div class="dk-card-feature-icon">
            <i data-lucide="<?php echo esc_attr($icon); ?>"></i>
        </div>
        <h3 class="dk-card-feature-title"><?php echo esc_html($title); ?></h3>
        <p class="dk-card-feature-description"><?php echo esc_html($description); ?></p>
    </div>
    <?php
}

/**
 * Display process step
 *
 * @param int $number Step number
 * @param string $icon Lucide icon name
 * @param string $title Step title
 * @param string $description Step description
 */
function digital_kappa_step($number, $icon, $title, $description) {
    ?>
    <div class="dk-step">
        <div class="dk-step-icon">
            <i data-lucide="<?php echo esc_attr($icon); ?>"></i>
        </div>
        <div class="dk-step-number"><?php echo esc_html($number); ?></div>
        <h3 class="dk-step-title"><?php echo esc_html($title); ?></h3>
        <p class="dk-step-description"><?php echo esc_html($description); ?></p>
    </div>
    <?php
}

/**
 * Display CTA section
 *
 * @param string $title CTA title
 * @param string $description CTA description
 * @param array $buttons Array of button configs
 */
function digital_kappa_cta($title, $description, $buttons = array()) {
    ?>
    <section class="dk-cta">
        <div class="dk-cta-content">
            <h2><?php echo esc_html($title); ?></h2>
            <p><?php echo esc_html($description); ?></p>
            <?php if (!empty($buttons)) : ?>
                <div class="dk-cta-buttons">
                    <?php foreach ($buttons as $button) : ?>
                        <a href="<?php echo esc_url($button['url']); ?>" class="dk-btn <?php echo esc_attr($button['class']); ?>">
                            <?php if (isset($button['icon'])) : ?>
                                <i data-lucide="<?php echo esc_attr($button['icon']); ?>"></i>
                            <?php endif; ?>
                            <?php echo esc_html($button['text']); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php
}
