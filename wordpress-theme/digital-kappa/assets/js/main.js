/**
 * Digital Kappa - Main JavaScript
 *
 * @package Digital_Kappa
 */

(function() {
    'use strict';

    // Wait for DOM to be ready
    document.addEventListener('DOMContentLoaded', function() {
        initMobileMenu();
        initAccordions();
        initFilters();
        initScrollTop();
        initStickyHeader();
        initSmoothScroll();
        initFormValidation();
        initLucideIcons();
    });

    /**
     * Initialize Lucide Icons
     */
    function initLucideIcons() {
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    }

    /**
     * Mobile Menu
     */
    function initMobileMenu() {
        const menuToggle = document.querySelector('.dk-mobile-menu-toggle');
        const mobileMenu = document.querySelector('.dk-mobile-menu');
        const menuClose = document.querySelector('.dk-mobile-menu-close');

        if (!menuToggle) return;

        menuToggle.addEventListener('click', function() {
            mobileMenu.classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        if (menuClose) {
            menuClose.addEventListener('click', function() {
                mobileMenu.classList.remove('active');
                document.body.style.overflow = '';
            });
        }

        // Close on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
                mobileMenu.classList.remove('active');
                document.body.style.overflow = '';
            }
        });

        // Close when clicking outside
        mobileMenu.addEventListener('click', function(e) {
            if (e.target === mobileMenu) {
                mobileMenu.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }

    /**
     * Accordion functionality
     */
    function initAccordions() {
        const accordionTriggers = document.querySelectorAll('.dk-accordion-trigger');

        accordionTriggers.forEach(function(trigger) {
            trigger.addEventListener('click', function() {
                const item = this.closest('.dk-accordion-item');
                const content = item.querySelector('.dk-accordion-content');
                const isActive = item.classList.contains('active');

                // Close all other accordions in the same group
                const parent = item.parentElement;
                const siblings = parent.querySelectorAll('.dk-accordion-item');

                siblings.forEach(function(sibling) {
                    if (sibling !== item) {
                        sibling.classList.remove('active');
                        const siblingContent = sibling.querySelector('.dk-accordion-content');
                        if (siblingContent) {
                            siblingContent.style.maxHeight = '0';
                        }
                    }
                });

                // Toggle current accordion
                if (isActive) {
                    item.classList.remove('active');
                    content.style.maxHeight = '0';
                } else {
                    item.classList.add('active');
                    content.style.maxHeight = content.scrollHeight + 'px';
                }

                // Reinitialize Lucide icons in case new content is visible
                if (typeof lucide !== 'undefined') {
                    lucide.createIcons();
                }
            });
        });
    }

    /**
     * Product filters
     */
    function initFilters() {
        const filterToggle = document.querySelector('.dk-filter-toggle-btn');
        const filterSidebar = document.querySelector('.dk-filter-sidebar');
        const filterClose = document.querySelector('.dk-filter-close');
        const filterCheckboxes = document.querySelectorAll('.dk-filter-checkbox');
        const sortSelect = document.querySelector('.dk-sort-select');
        const productCards = document.querySelectorAll('.dk-card-product');

        // Mobile filter toggle
        if (filterToggle && filterSidebar) {
            filterToggle.addEventListener('click', function() {
                filterSidebar.classList.add('active');
                document.body.style.overflow = 'hidden';
            });

            if (filterClose) {
                filterClose.addEventListener('click', function() {
                    filterSidebar.classList.remove('active');
                    document.body.style.overflow = '';
                });
            }
        }

        // Filter functionality
        if (filterCheckboxes.length > 0 && productCards.length > 0) {
            filterCheckboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', applyFilters);
            });
        }

        // Sort functionality
        if (sortSelect && productCards.length > 0) {
            sortSelect.addEventListener('change', function() {
                sortProducts(this.value);
            });
        }

        function applyFilters() {
            const activeCategories = [];
            const activePrices = [];
            const activeRatings = [];

            filterCheckboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    const filterType = checkbox.getAttribute('data-filter-type');
                    const filterValue = checkbox.getAttribute('data-filter-value');

                    if (filterType === 'category') {
                        activeCategories.push(filterValue.toLowerCase());
                    } else if (filterType === 'price') {
                        activePrices.push(filterValue);
                    } else if (filterType === 'rating') {
                        activeRatings.push(parseFloat(filterValue));
                    }
                }
            });

            productCards.forEach(function(card) {
                const category = card.getAttribute('data-category').toLowerCase();
                const price = parseFloat(card.getAttribute('data-price'));
                const rating = parseFloat(card.getAttribute('data-rating'));

                let showCard = true;

                // Category filter
                if (activeCategories.length > 0 && !activeCategories.includes(category)) {
                    showCard = false;
                }

                // Price filter
                if (showCard && activePrices.length > 0) {
                    let matchesPrice = false;
                    activePrices.forEach(function(priceRange) {
                        if (priceRange === '0-30' && price >= 0 && price <= 30) matchesPrice = true;
                        if (priceRange === '30-50' && price > 30 && price <= 50) matchesPrice = true;
                        if (priceRange === '50+' && price > 50) matchesPrice = true;
                    });
                    if (!matchesPrice) showCard = false;
                }

                // Rating filter
                if (showCard && activeRatings.length > 0) {
                    let matchesRating = false;
                    activeRatings.forEach(function(minRating) {
                        if (rating >= minRating) matchesRating = true;
                    });
                    if (!matchesRating) showCard = false;
                }

                // Show/hide card
                card.style.display = showCard ? '' : 'none';
            });

            updateProductCount();
        }

        function sortProducts(sortBy) {
            const productsContainer = document.querySelector('.dk-products-grid');
            if (!productsContainer) return;

            const cards = Array.from(productCards);

            cards.sort(function(a, b) {
                switch (sortBy) {
                    case 'price-low':
                        return parseFloat(a.getAttribute('data-price')) - parseFloat(b.getAttribute('data-price'));
                    case 'price-high':
                        return parseFloat(b.getAttribute('data-price')) - parseFloat(a.getAttribute('data-price'));
                    case 'rating':
                        return parseFloat(b.getAttribute('data-rating')) - parseFloat(a.getAttribute('data-rating'));
                    case 'newest':
                    default:
                        return 0;
                }
            });

            cards.forEach(function(card) {
                productsContainer.appendChild(card);
            });
        }

        function updateProductCount() {
            const countElement = document.querySelector('.dk-products-count');
            if (!countElement) return;

            const visibleCount = document.querySelectorAll('.dk-card-product:not([style*="display: none"])').length;
            countElement.textContent = visibleCount + ' produits';
        }
    }

    /**
     * Scroll to top button
     */
    function initScrollTop() {
        const scrollTopBtn = document.querySelector('.dk-scroll-top');
        if (!scrollTopBtn) return;

        // Show/hide button based on scroll position
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollTopBtn.classList.add('visible');
            } else {
                scrollTopBtn.classList.remove('visible');
            }
        });

        // Scroll to top on click
        scrollTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    /**
     * Sticky header
     */
    function initStickyHeader() {
        const header = document.querySelector('.dk-header');
        if (!header) return;

        let lastScroll = 0;

        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            if (currentScroll <= 0) {
                header.classList.remove('dk-header-hidden');
                return;
            }

            if (currentScroll > lastScroll && currentScroll > 100) {
                // Scrolling down
                header.classList.add('dk-header-hidden');
            } else {
                // Scrolling up
                header.classList.remove('dk-header-hidden');
            }

            lastScroll = currentScroll;
        });
    }

    /**
     * Smooth scroll for anchor links
     */
    function initSmoothScroll() {
        const anchorLinks = document.querySelectorAll('a[href^="#"]');

        anchorLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (!targetElement) return;

                e.preventDefault();

                const headerHeight = document.querySelector('.dk-header')?.offsetHeight || 0;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight - 20;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            });
        });
    }

    /**
     * Form validation
     */
    function initFormValidation() {
        const forms = document.querySelectorAll('.dk-form');

        forms.forEach(function(form) {
            form.addEventListener('submit', function(e) {
                let isValid = true;
                const requiredFields = form.querySelectorAll('[required]');

                requiredFields.forEach(function(field) {
                    const errorMessage = field.parentElement.querySelector('.dk-form-error');

                    if (!field.value.trim()) {
                        isValid = false;
                        field.classList.add('dk-form-input-error');
                        if (errorMessage) errorMessage.style.display = 'block';
                    } else {
                        field.classList.remove('dk-form-input-error');
                        if (errorMessage) errorMessage.style.display = 'none';
                    }

                    // Email validation
                    if (field.type === 'email' && field.value.trim()) {
                        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (!emailRegex.test(field.value)) {
                            isValid = false;
                            field.classList.add('dk-form-input-error');
                            if (errorMessage) {
                                errorMessage.textContent = 'Veuillez entrer une adresse email valide';
                                errorMessage.style.display = 'block';
                            }
                        }
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                }
            });

            // Real-time validation
            const inputs = form.querySelectorAll('.dk-form-input, .dk-form-textarea');
            inputs.forEach(function(input) {
                input.addEventListener('blur', function() {
                    validateField(this);
                });

                input.addEventListener('input', function() {
                    if (this.classList.contains('dk-form-input-error')) {
                        validateField(this);
                    }
                });
            });
        });

        function validateField(field) {
            const errorMessage = field.parentElement.querySelector('.dk-form-error');

            if (field.hasAttribute('required') && !field.value.trim()) {
                field.classList.add('dk-form-input-error');
                if (errorMessage) errorMessage.style.display = 'block';
                return false;
            }

            if (field.type === 'email' && field.value.trim()) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(field.value)) {
                    field.classList.add('dk-form-input-error');
                    if (errorMessage) {
                        errorMessage.textContent = 'Veuillez entrer une adresse email valide';
                        errorMessage.style.display = 'block';
                    }
                    return false;
                }
            }

            field.classList.remove('dk-form-input-error');
            if (errorMessage) errorMessage.style.display = 'none';
            return true;
        }
    }

    /**
     * Toast notification
     */
    window.showToast = function(message, type) {
        type = type || 'default';

        // Remove existing toast
        const existingToast = document.querySelector('.dk-toast');
        if (existingToast) {
            existingToast.remove();
        }

        // Create toast
        const toast = document.createElement('div');
        toast.className = 'dk-toast dk-toast-' + type;
        toast.textContent = message;
        document.body.appendChild(toast);

        // Show toast
        setTimeout(function() {
            toast.classList.add('show');
        }, 100);

        // Hide toast after 3 seconds
        setTimeout(function() {
            toast.classList.remove('show');
            setTimeout(function() {
                toast.remove();
            }, 300);
        }, 3000);
    };

    /**
     * Image gallery
     */
    window.initGallery = function(container) {
        const mainImage = container.querySelector('.dk-gallery-main img');
        const thumbs = container.querySelectorAll('.dk-gallery-thumb');

        if (!mainImage || thumbs.length === 0) return;

        thumbs.forEach(function(thumb) {
            thumb.addEventListener('click', function() {
                const newSrc = this.querySelector('img').src;
                mainImage.src = newSrc;

                // Update active state
                thumbs.forEach(function(t) {
                    t.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    };

    /**
     * Quantity selector
     */
    window.initQuantitySelector = function(container) {
        const minusBtn = container.querySelector('.dk-quantity-minus');
        const plusBtn = container.querySelector('.dk-quantity-plus');
        const input = container.querySelector('.dk-quantity-input');

        if (!minusBtn || !plusBtn || !input) return;

        const min = parseInt(input.getAttribute('min')) || 1;
        const max = parseInt(input.getAttribute('max')) || 99;

        minusBtn.addEventListener('click', function() {
            let value = parseInt(input.value) - 1;
            if (value < min) value = min;
            input.value = value;
            input.dispatchEvent(new Event('change'));
        });

        plusBtn.addEventListener('click', function() {
            let value = parseInt(input.value) + 1;
            if (value > max) value = max;
            input.value = value;
            input.dispatchEvent(new Event('change'));
        });

        input.addEventListener('change', function() {
            let value = parseInt(this.value);
            if (isNaN(value) || value < min) value = min;
            if (value > max) value = max;
            this.value = value;
        });
    };

})();
