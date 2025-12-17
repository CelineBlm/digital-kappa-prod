<?php
/**
 * CTA Section Widget
 *
 * @package DigitalKappa
 */

if (!defined('ABSPATH')) {
    exit;
}

class DK_Cta_Section extends \Elementor\Widget_Base {

    public function get_name() {
        return 'dk_cta_section';
    }

    public function get_title() {
        return __('DK - CTA Section', 'digital-kappa');
    }

    public function get_icon() {
        return 'eicon-call-to-action';
    }

    public function get_categories() {
        return ['digital-kappa'];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Contenu', 'digital-kappa'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __('Titre', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Vous ne trouvez pas votre réponse ?',
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => __('Sous-titre', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Notre équipe est là pour vous aider',
            ]
        );

        $this->add_control(
            'btn_primary_text',
            [
                'label' => __('Bouton primaire', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => "Contacter l'équipe",
            ]
        );

        $this->add_control(
            'btn_primary_link',
            [
                'label' => __('Lien bouton primaire', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => 'mailto:support@digitalkappa.com',
                ],
            ]
        );

        $this->add_control(
            'btn_secondary_text',
            [
                'label' => __('Bouton secondaire', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Chat en direct',
            ]
        );

        $this->add_control(
            'btn_secondary_link',
            [
                'label' => __('Lien bouton secondaire', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => '#',
                ],
            ]
        );

        $this->add_control(
            'style',
            [
                'label' => __('Style', 'digital-kappa'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'dark',
                'options' => [
                    'dark' => 'Fond sombre',
                    'light' => 'Fond clair',
                    'primary' => 'Fond primaire',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $bg_class = 'bg-[#2c3340]';
        $text_class = 'text-white';
        $subtitle_class = 'text-gray-300';

        if ($settings['style'] === 'light') {
            $bg_class = 'bg-gray-50';
            $text_class = 'text-[#1a1a1a]';
            $subtitle_class = 'text-[#4a5565]';
        } elseif ($settings['style'] === 'primary') {
            $bg_class = 'bg-[#d2a30b]';
            $text_class = 'text-white';
            $subtitle_class = 'text-white/80';
        }
        ?>
        <section class="py-12 lg:py-16 px-4 lg:px-20">
            <div class="max-w-4xl mx-auto">
                <div class="<?php echo esc_attr($bg_class); ?> rounded-3xl p-8 lg:p-12 text-center">
                    <h2 class="<?php echo esc_attr($text_class); ?> font-['Merriweather',serif] mb-3">
                        <?php echo esc_html($settings['title']); ?>
                    </h2>
                    <p class="<?php echo esc_attr($subtitle_class); ?> mb-8 font-['Montserrat',sans-serif]">
                        <?php echo esc_html($settings['subtitle']); ?>
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="<?php echo esc_url($settings['btn_primary_link']['url']); ?>" class="bg-[#d2a30b] text-white px-8 py-4 rounded-xl hover:bg-[#b8900a] transition-colors font-['Montserrat',sans-serif] flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <?php echo esc_html($settings['btn_primary_text']); ?>
                        </a>
                        <a href="<?php echo esc_url($settings['btn_secondary_link']['url']); ?>" class="bg-white/10 border border-white/20 text-white px-8 py-4 rounded-xl hover:bg-white/20 transition-colors font-['Montserrat',sans-serif] flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                            <?php echo esc_html($settings['btn_secondary_text']); ?>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}
