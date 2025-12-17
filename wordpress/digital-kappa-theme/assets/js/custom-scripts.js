/**
 * Digital Kappa Custom Scripts
 *
 * @package DigitalKappa
 */

(function($) {
    'use strict';

    // DOM Ready
    $(document).ready(function() {
        initFAQAccordion();
        initMobileMenu();
        initStickyHeader();
        initSmoothScroll();
        initProductGallery();
        initTabs();
    });

    /**
     * FAQ Accordion
     */
    function initFAQAccordion() {
        $('.dk-faq-question').on('click', function() {
            const $item = $(this).closest('.dk-faq-item');
            const $answer = $item.find('.dk-faq-answer');
            const $icon = $(this).find('.dk-faq-icon');

            // Close other items
            $('.dk-faq-item').not($item).find('.dk-faq-answer').slideUp(300);
            $('.dk-faq-item').not($item).find('.dk-faq-icon').html(`
                <svg width="20" height="20" fill="none" viewBox="0 0 20 20">
                    <path d="M4.166 10h11.667" stroke="#D2A30B" stroke-width="1.667" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10 4.166v11.667" stroke="#D2A30B" stroke-width="1.667" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            `);

            // Toggle current item
            $answer.slideToggle(300);

            if ($answer.is(':visible')) {
                $icon.html(`
                    <svg width="20" height="20" fill="none" viewBox="0 0 20 20">
                        <path d="M4.166 10h11.667" stroke="#D2A30B" stroke-width="1.667" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                `);
            } else {
                $icon.html(`
                    <svg width="20" height="20" fill="none" viewBox="0 0 20 20">
                        <path d="M4.166 10h11.667" stroke="#D2A30B" stroke-width="1.667" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10 4.166v11.667" stroke="#D2A30B" stroke-width="1.667" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                `);
            }
        });
    }

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        $('.dk-mobile-menu-toggle').on('click', function() {
            $(this).toggleClass('active');
            $('.dk-mobile-menu').slideToggle(300);
        });

        // Close menu on link click
        $('.dk-mobile-menu a').on('click', function() {
            $('.dk-mobile-menu').slideUp(300);
            $('.dk-mobile-menu-toggle').removeClass('active');
        });
    }

    /**
     * Sticky Header
     */
    function initStickyHeader() {
        const $header = $('.dk-header');
        const headerOffset = $header.offset()?.top || 0;

        $(window).on('scroll', function() {
            if ($(window).scrollTop() > headerOffset + 50) {
                $header.addClass('dk-header-sticky');
            } else {
                $header.removeClass('dk-header-sticky');
            }
        });
    }

    /**
     * Smooth Scroll
     */
    function initSmoothScroll() {
        $('a[href^="#"]:not([href="#"])').on('click', function(e) {
            const target = $($(this).attr('href'));

            if (target.length) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 500);
            }
        });
    }

    /**
     * Product Gallery
     */
    function initProductGallery() {
        $('.dk-product-gallery-thumb').on('click', function() {
            const $thumb = $(this);
            const mainImage = $thumb.find('img').attr('src');

            // Update active state
            $('.dk-product-gallery-thumb').removeClass('active');
            $thumb.addClass('active');

            // Update main image
            $('.dk-product-gallery-main img').fadeOut(200, function() {
                $(this).attr('src', mainImage).fadeIn(200);
            });
        });
    }

    /**
     * Tabs
     */
    function initTabs() {
        $('.dk-tab').on('click', function() {
            const $tab = $(this);
            const tabId = $tab.data('tab');

            // Update active tab
            $('.dk-tab').removeClass('active');
            $tab.addClass('active');

            // Show corresponding content
            $('.dk-tab-content').hide();
            $(`#${tabId}`).fadeIn(200);
        });
    }

    /**
     * Filter Products (AJAX)
     */
    window.dkFilterProducts = function(filters) {
        const $container = $('.dk-products-grid');

        $container.addClass('dk-loading');

        $.ajax({
            url: dk_ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'dk_filter_products',
                security: dk_ajax.nonce,
                filters: filters
            },
            success: function(response) {
                if (response.success) {
                    $container.html(response.data);
                }
            },
            complete: function() {
                $container.removeClass('dk-loading');
            }
        });
    };

})(jQuery);
