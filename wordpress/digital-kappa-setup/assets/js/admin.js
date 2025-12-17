/**
 * Digital Kappa Setup - Admin Scripts
 */

(function($) {
    'use strict';

    $(document).ready(function() {
        // Start Setup
        $('#dk-start-setup').on('click', function() {
            var $btn = $(this);
            $btn.prop('disabled', true).text(dk_setup.messages.running);

            $('.dk-setup-intro').hide();
            $('.dk-setup-progress').show();

            runSetupStep(1);
        });

        // Reset Setup
        $('#dk-reset-setup').on('click', function() {
            if (confirm('Êtes-vous sûr de vouloir réinitialiser l\'installation ? Cette action est irréversible.')) {
                $.ajax({
                    url: dk_setup.ajax_url,
                    type: 'POST',
                    data: {
                        action: 'dk_reset_setup',
                        nonce: dk_setup.nonce
                    },
                    success: function() {
                        location.reload();
                    }
                });
            }
        });
    });

    /**
     * Run Setup Step
     */
    function runSetupStep(step) {
        var steps = [
            { step: 1, message: 'Création des pages...', progress: 20 },
            { step: 2, message: 'Création des menus...', progress: 35 },
            { step: 3, message: 'Import des produits...', progress: 55 },
            { step: 4, message: 'Configuration WooCommerce...', progress: 70 },
            { step: 5, message: 'Création Header/Footer...', progress: 85 },
            { step: 6, message: 'Finalisation...', progress: 100 }
        ];

        var currentStep = steps.find(function(s) { return s.step === step; });

        if (!currentStep) {
            return;
        }

        updateProgress(currentStep.progress, currentStep.message);

        $.ajax({
            url: dk_setup.ajax_url,
            type: 'POST',
            data: {
                action: 'dk_run_setup',
                nonce: dk_setup.nonce,
                step: step
            },
            success: function(response) {
                if (response.success !== false) {
                    if (response.next_step) {
                        setTimeout(function() {
                            runSetupStep(response.next_step);
                        }, 500);
                    } else {
                        // Complete
                        updateProgress(100, dk_setup.messages.success);
                        setTimeout(function() {
                            location.reload();
                        }, 1500);
                    }
                } else {
                    showError(response.message || dk_setup.messages.error);
                }
            },
            error: function() {
                showError(dk_setup.messages.error);
            }
        });
    }

    /**
     * Update Progress
     */
    function updateProgress(percent, message) {
        $('.dk-progress-fill').css('width', percent + '%');
        $('.dk-progress-status').text(message);
    }

    /**
     * Show Error
     */
    function showError(message) {
        $('.dk-progress-status').html('<span style="color: #dc2626;">' + message + '</span>');
        $('#dk-start-setup').prop('disabled', false).text('Réessayer');
    }

})(jQuery);
