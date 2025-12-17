<?php
/**
 * FAQ Accordion Widget
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

class DK_Faq_Accordion extends \Elementor\Widget_Base {

    public function get_name() {
        return 'dk_faq_accordion';
    }

    public function get_title() {
        return __('DK - FAQ Accordion', 'digital-kappa');
    }

    public function get_icon() {
        return 'eicon-accordion';
    }

    public function get_categories() {
        return ['digital-kappa'];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('FAQ', 'digital-kappa'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'question',
            [
                'label' => __('Question', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Question fréquente',
            ]
        );

        $repeater->add_control(
            'answer',
            [
                'label' => __('Réponse', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Réponse détaillée à la question.',
            ]
        );

        $repeater->add_control(
            'category',
            [
                'label' => __('Catégorie', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'general',
                'options' => [
                    'general' => 'Général',
                    'payment' => 'Paiement',
                    'products' => 'Produits',
                    'support' => 'Support',
                ],
            ]
        );

        $this->add_control(
            'faqs',
            [
                'label' => __('Questions', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'question' => "Qu'est-ce que Digital Kappa ?",
                        'answer' => "Digital Kappa est une marketplace de produits digitaux proposant des applications mobiles, des ebooks et des templates. Notre mission est de vous fournir des ressources numériques de qualité, simples et prêtes à l'emploi pour gagner du temps dans vos projets.",
                        'category' => 'general',
                    ],
                    [
                        'question' => "Comment fonctionne le téléchargement ?",
                        'answer' => "Une fois votre achat effectué, vous recevez immédiatement un email avec un lien de téléchargement sécurisé. Vous pouvez également retrouver tous vos produits dans votre compte utilisateur, accessible à tout moment. Les téléchargements sont illimités et sans date d'expiration.",
                        'category' => 'general',
                    ],
                    [
                        'question' => "Quels moyens de paiement acceptez-vous ?",
                        'answer' => "Nous acceptons les cartes bancaires (Visa, Mastercard, American Express), PayPal, et les virements bancaires. Tous les paiements sont sécurisés via notre plateforme de paiement certifiée.",
                        'category' => 'payment',
                    ],
                    [
                        'question' => "Les prix sont-ils TTC ?",
                        'answer' => "Oui, tous les prix affichés sur Digital Kappa sont TTC (Toutes Taxes Comprises). Il n'y a aucun frais caché. Le prix que vous voyez est le prix final que vous payez.",
                        'category' => 'payment',
                    ],
                    [
                        'question' => "Vos produits sont-ils compatibles avec Mac et PC ?",
                        'answer' => "La majorité de nos produits sont compatibles avec les deux systèmes. Les ebooks sont au format PDF universel, les templates sont basés sur des technologies web standards, et pour les applications, nous précisons toujours les systèmes compatibles sur chaque fiche produit.",
                        'category' => 'products',
                    ],
                    [
                        'question' => "Comment obtenir de l'aide ?",
                        'answer' => "Notre équipe support est disponible par email à support@digitalkappa.com. Nous répondons généralement sous 24h en semaine. Vous pouvez également consulter notre documentation en ligne ou utiliser le chat en direct pour une assistance immédiate.",
                        'category' => 'support',
                    ],
                    [
                        'question' => "Quelle est votre politique de remboursement ?",
                        'answer' => "Nous offrons une garantie satisfait ou remboursé de 30 jours sur tous nos produits. Si vous n'êtes pas satisfait, contactez-nous et nous vous rembourserons intégralement, sans poser de questions.",
                        'category' => 'support',
                    ],
                ],
                'title_field' => '{{{ question }}}',
            ]
        );

        $this->add_control(
            'show_categories',
            [
                'label' => __('Afficher les filtres de catégorie', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'yes',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $faqs = $settings['faqs'];
        ?>
        <div class="dk-faq-container">
            <?php if ($settings['show_categories'] === 'yes') : ?>
            <div class="flex gap-3 flex-wrap justify-center mb-8">
                <button class="dk-tab active" data-filter="all">Toutes</button>
                <button class="dk-tab" data-filter="general">Général</button>
                <button class="dk-tab" data-filter="payment">Paiement</button>
                <button class="dk-tab" data-filter="products">Produits</button>
                <button class="dk-tab" data-filter="support">Support</button>
            </div>
            <?php endif; ?>

            <div class="space-y-4">
                <?php foreach ($faqs as $index => $faq) : ?>
                <div class="dk-faq-item" data-category="<?php echo esc_attr($faq['category']); ?>">
                    <button class="dk-faq-question">
                        <span class="font-['Montserrat',sans-serif] text-[#0d1421] pr-4"><?php echo esc_html($faq['question']); ?></span>
                        <div class="dk-faq-icon flex-shrink-0">
                            <svg width="20" height="20" fill="none" viewBox="0 0 20 20">
                                <path d="M4.166 10h11.667" stroke="#D2A30B" stroke-width="1.667" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M10 4.166v11.667" stroke="#D2A30B" stroke-width="1.667" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                    </button>
                    <div class="dk-faq-answer" style="display: <?php echo $index === 0 ? 'block' : 'none'; ?>">
                        <p class="text-[#0d1421]/70 leading-relaxed"><?php echo esc_html($faq['answer']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <script>
        jQuery(document).ready(function($) {
            // Filter by category
            $('.dk-tab[data-filter]').on('click', function() {
                var filter = $(this).data('filter');

                $('.dk-tab[data-filter]').removeClass('active');
                $(this).addClass('active');

                if (filter === 'all') {
                    $('.dk-faq-item').show();
                } else {
                    $('.dk-faq-item').hide();
                    $('.dk-faq-item[data-category="' + filter + '"]').show();
                }
            });
        });
        </script>
        <?php
    }
}
