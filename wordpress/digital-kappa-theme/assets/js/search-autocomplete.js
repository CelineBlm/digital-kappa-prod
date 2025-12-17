/**
 * Search Autocomplete
 *
 * @package DigitalKappa
 */

(function($) {
    'use strict';

    $(document).ready(function() {
        initSearchAutocomplete();
    });

    /**
     * Initialize Search Autocomplete
     */
    function initSearchAutocomplete() {
        const $searchInput = $('.dk-search-input');
        const $resultsContainer = $('.dk-search-results-container');
        let searchTimeout;

        // Create results container if not exists
        if ($resultsContainer.length === 0) {
            $searchInput.after('<div class="dk-search-results-container absolute top-full left-0 right-0 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg z-50 hidden"></div>');
        }

        $searchInput.on('input', function() {
            const query = $(this).val();

            // Clear previous timeout
            clearTimeout(searchTimeout);

            // Hide results if query is too short
            if (query.length < 2) {
                hideResults();
                return;
            }

            // Debounce search
            searchTimeout = setTimeout(function() {
                performSearch(query);
            }, 300);
        });

        // Hide results on click outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.dk-search-container').length) {
                hideResults();
            }
        });

        // Navigate results with keyboard
        $searchInput.on('keydown', function(e) {
            const $results = $('.dk-search-results-container a');
            const $focused = $results.filter('.focused');

            switch (e.keyCode) {
                case 40: // Down arrow
                    e.preventDefault();
                    if ($focused.length === 0) {
                        $results.first().addClass('focused bg-gray-50');
                    } else {
                        $focused.removeClass('focused bg-gray-50');
                        $focused.next().addClass('focused bg-gray-50');
                    }
                    break;

                case 38: // Up arrow
                    e.preventDefault();
                    if ($focused.length) {
                        $focused.removeClass('focused bg-gray-50');
                        $focused.prev().addClass('focused bg-gray-50');
                    }
                    break;

                case 13: // Enter
                    if ($focused.length) {
                        e.preventDefault();
                        window.location.href = $focused.attr('href');
                    }
                    break;

                case 27: // Escape
                    hideResults();
                    $searchInput.blur();
                    break;
            }
        });

        /**
         * Perform AJAX Search
         */
        function performSearch(query) {
            $.ajax({
                url: dk_ajax.ajax_url,
                type: 'POST',
                data: {
                    action: 'dk_search_products',
                    security: dk_ajax.nonce,
                    search: query
                },
                beforeSend: function() {
                    showLoading();
                },
                success: function(response) {
                    if (response.success) {
                        showResults(response.data);
                    } else {
                        showNoResults();
                    }
                },
                error: function() {
                    hideResults();
                }
            });
        }

        /**
         * Show Results
         */
        function showResults(html) {
            const $container = $searchInput.siblings('.dk-search-results-container');
            $container.html(html).removeClass('hidden');
        }

        /**
         * Show Loading
         */
        function showLoading() {
            const $container = $searchInput.siblings('.dk-search-results-container');
            $container.html(`
                <div class="p-4 text-center">
                    <div class="dk-animate-pulse">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gray-200 rounded-lg"></div>
                            <div class="flex-1">
                                <div class="h-4 bg-gray-200 rounded w-3/4 mb-2"></div>
                                <div class="h-3 bg-gray-200 rounded w-1/4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            `).removeClass('hidden');
        }

        /**
         * Show No Results
         */
        function showNoResults() {
            const $container = $searchInput.siblings('.dk-search-results-container');
            $container.html(`
                <div class="p-4 text-center text-gray-500 text-sm">
                    Aucun produit trouvé
                </div>
            `).removeClass('hidden');
        }

        /**
         * Hide Results
         */
        function hideResults() {
            const $container = $searchInput.siblings('.dk-search-results-container');
            $container.addClass('hidden');
        }
    }

})(jQuery);
