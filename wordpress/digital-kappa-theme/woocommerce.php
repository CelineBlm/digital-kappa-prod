<?php
/**
 * WooCommerce Template
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="dk-main">
    <?php woocommerce_content(); ?>
</main>

<?php
get_footer();
