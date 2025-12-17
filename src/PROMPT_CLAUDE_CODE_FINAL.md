# PROMPT POUR CLAUDE CODE - Conversion React vers WordPress/WooCommerce

## 🎯 OBJECTIF PRINCIPAL

Tu dois convertir ce projet React (Digital Kappa) en un site WordPress + WooCommerce 100% fonctionnel pour vendre des produits digitaux dématérialisés.

**RÈGLE ABSOLUE N°1** : TOUTES les pages ET templates doivent être créés en **JSON ELEMENTOR** (exportables/importables). AUCUN template PHP custom avec du HTML en dur. Tout doit être modifiable visuellement via Elementor.

**RÈGLE ABSOLUE N°2** : Tu dois reproduire EXACTEMENT le design, les textes, les images et l'ordre des sections du projet React (branch main). Les styles doivent correspondre pixel-perfect à la feuille `/styles/globals.css`.

---

## 📋 PAGES À IMPORTER AUTOMATIQUEMENT

### ⚠️ IMPORT AUTOMATIQUE OBLIGATOIRE

Le plugin `digital-kappa-setup.php` doit importer **AUTOMATIQUEMENT** toutes ces pages au format **JSON Elementor** lors de l'activation :

1. **Page Accueil** (`/App.tsx` → HomePage)
2. **Page Comment ça marche** (`/HowItWorks.tsx`)
3. **Page FAQ** (`/FAQ.tsx`)
4. **Page À propos** (`/About.tsx`)
5. **Page CGV** (`/TermsOfSale.tsx`)
6. **Page Politique de confidentialité** (`/PrivacyPolicy.tsx`)
7. **Page Listing produits** (`/AllProducts.tsx`)
8. **Page Produit (template)** (`/ProductDetail.tsx`)
9. **Page Checkout** (`/Checkout.tsx`)
10. **Page Confirmation de commande** (`/OrderConfirmation.tsx`)

### 📝 MÉTHODOLOGIE D'IMPORT DES PAGES

Pour CHAQUE page, tu dois :

#### Étape 1 : Analyser le fichier React source
- Ouvrir le fichier `.tsx` correspondant (ex: `/HomePage.tsx`)
- Identifier TOUTES les sections dans l'ordre
- Noter les textes exacts (titres, descriptions, boutons)
- Noter les images utilisées (Unsplash URLs ou imports)
- Noter les couleurs et styles depuis `/styles/globals.css`

#### Étape 2 : Créer la page Elementor
- Créer une nouvelle page WordPress
- Construire la page avec Elementor en reproduisant EXACTEMENT :
  - L'ordre des sections
  - Les textes (copier-coller depuis React)
  - Les images (mêmes URLs Unsplash)
  - Les couleurs (#d2a30b, #1a1a1a, etc.)
  - Les espacements (padding, margin)
  - Les typographies (Montserrat, Merriweather)

#### Étape 3 : Exporter en JSON Elementor
- Elementor > Outils > Export de template
- Sélectionner la page
- Exporter en JSON
- Placer dans `/elementor-templates/pages/`

#### Étape 4 : Importer automatiquement

Dans le plugin `digital-kappa-setup.php`, créer la fonction :

```php
function dk_import_elementor_pages() {
    $pages_to_import = array(
        'homepage' => array(
            'title' => 'Accueil',
            'template' => get_template_directory() . '/elementor-templates/pages/homepage.json',
            'set_as_home' => true
        ),
        'how-it-works' => array(
            'title' => 'Comment ça marche',
            'template' => get_template_directory() . '/elementor-templates/pages/how-it-works.json'
        ),
        'faq' => array(
            'title' => 'FAQ',
            'template' => get_template_directory() . '/elementor-templates/pages/faq.json'
        ),
        'about' => array(
            'title' => 'À propos',
            'template' => get_template_directory() . '/elementor-templates/pages/about.json'
        ),
        'cgv' => array(
            'title' => 'Conditions générales de vente',
            'template' => get_template_directory() . '/elementor-templates/pages/cgv.json'
        ),
        'privacy' => array(
            'title' => 'Politique de confidentialité',
            'template' => get_template_directory() . '/elementor-templates/pages/privacy.json'
        ),
        'all-products' => array(
            'title' => 'Tous nos produits',
            'template' => get_template_directory() . '/elementor-templates/pages/all-products.json',
            'set_as_shop' => true
        ),
        'checkout' => array(
            'title' => 'Commande',
            'template' => get_template_directory() . '/elementor-templates/pages/checkout.json',
            'set_as_checkout' => true
        ),
        'order-confirmation' => array(
            'title' => 'Confirmation de commande',
            'template' => get_template_directory() . '/elementor-templates/pages/order-confirmation.json'
        )
    );
    
    foreach ($pages_to_import as $slug => $page_data) {
        // Créer la page WordPress
        $page_id = wp_insert_post(array(
            'post_title' => $page_data['title'],
            'post_name' => $slug,
            'post_status' => 'publish',
            'post_type' => 'page'
        ));
        
        // Importer le template Elementor JSON
        if (file_exists($page_data['template'])) {
            $json_content = file_get_contents($page_data['template']);
            $template_data = json_decode($json_content, true);
            
            // Appliquer le template Elementor
            update_post_meta($page_id, '_elementor_data', $template_data);
            update_post_meta($page_id, '_elementor_edit_mode', 'builder');
            update_post_meta($page_id, '_elementor_template_type', 'wp-page');
        }
        
        // Définir comme page d'accueil si nécessaire
        if (isset($page_data['set_as_home']) && $page_data['set_as_home']) {
            update_option('page_on_front', $page_id);
            update_option('show_on_front', 'page');
        }
        
        // Définir comme page boutique WooCommerce
        if (isset($page_data['set_as_shop']) && $page_data['set_as_shop']) {
            update_option('woocommerce_shop_page_id', $page_id);
        }
        
        // Définir comme page checkout WooCommerce
        if (isset($page_data['set_as_checkout']) && $page_data['set_as_checkout']) {
            update_option('woocommerce_checkout_page_id', $page_id);
        }
    }
}
```

---

## 🎨 REPRODUCTION EXACTE DES STYLES

### Fichier de référence : `/styles/globals.css`

Tu dois reprendre **TOUS** les styles de ce fichier et les intégrer dans le thème WordPress.

#### Création du fichier `/assets/css/digital-kappa-styles.css`

Copier EXACTEMENT le contenu de `/styles/globals.css` du projet React :

```css
/* === COPIE COMPLÈTE DE /styles/globals.css === */

:root {
  --color-gold: #d2a30b;
  --color-gold-dark: #b8900a;
  --color-dark: #1a1a1a;
  --color-dark-alt: #2b2d31;
  --color-gray: #364153;
  --color-gray-light: #9ca3af;
  --color-gray-bg: #f9fafb;
  
  --font-montserrat: 'Montserrat', sans-serif;
  --font-merriweather: 'Merriweather', serif;
}

/* Reprendre TOUS les styles : typographie, boutons, cards, animations, etc. */
```

**Enqueue dans `functions.php` :**

```php
function digital_kappa_enqueue_styles() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Montserrat:wght@400;500;600;700&display=swap');
    
    // Tailwind CSS
    wp_enqueue_style('tailwind', 'https://cdn.jsdelivr.net/npm/tailwindcss@3.4.0/dist/tailwind.min.css');
    
    // Styles Digital Kappa (globals.css adapté)
    wp_enqueue_style('digital-kappa-styles', get_template_directory_uri() . '/assets/css/digital-kappa-styles.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'digital_kappa_enqueue_styles');
```

---

## 🖼️ LOGO DIGITAL KAPPA

### Fichier logo : `logo-digital-kappa.svg`

**Emplacement dans le thème :** `/assets/images/logo-digital-kappa.svg`

### Utilisation du logo

#### Dans le Header (logo coloré)

```html
<a href="<?php echo home_url(); ?>" class="flex items-center gap-3">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-digital-kappa.svg" 
         alt="Digital Kappa" 
         class="h-8 w-auto">
    <div class="flex flex-col items-start">
        <span class="font-['Montserrat',sans-serif] text-[#1a1a1a]">Digital Kappa</span>
        <span class="text-[10px] font-['Montserrat',sans-serif] text-[#d2a30b] tracking-wide">PRODUITS DIGITAUX PREMIUM</span>
    </div>
</a>
```

#### Dans le Footer (logo blanc)

```html
<a href="<?php echo home_url(); ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-digital-kappa.svg" 
         alt="Digital Kappa" 
         class="h-8 w-auto footer-logo">
</a>
```

**CSS pour rendre le logo blanc :**

```css
.footer-logo {
    filter: brightness(0) invert(1);
}
```

---

## 🏗️ HEADER & FOOTER ELEMENTOR (JSON)

### Header Digital Kappa

**Fichier :** `/elementor-templates/header/header-digital-kappa.json`

**Création du Header :**

1. **Elementor > Theme Builder > Header**
2. **Créer un nouveau header "Header Digital Kappa"**
3. **Structure Elementor :**

```
┌─────────────────────────────────────────────────────────────┐
│ [Logo + Sous-titre]  [Search Bar]  [Menu]  [Hamburger]     │
└─────────────────────────────────────────────────────────────┘
```

**Widgets utilisés :**
- Widget HTML pour le logo
- Widget HTML pour la search bar (avec AJAX)
- Widget Nav Menu pour le menu principal (menu WordPress `header-menu`)
- Widget Icon pour le hamburger mobile

**Settings du Container :**
- Background : `#ffffff`
- Border-bottom : 1px solid `#e5e7eb`
- Padding : `16px 112px` (desktop), `16px 16px` (mobile)
- Position : Sticky, Top 0, Z-index 40

4. **Exporter en JSON**
5. **Placer dans `/elementor-templates/header/header-digital-kappa.json`**

**Import automatique dans le plugin :**

```php
function dk_import_header_footer() {
    // Import Header
    $header_json = get_template_directory() . '/elementor-templates/header/header-digital-kappa.json';
    
    if (file_exists($header_json)) {
        $header_id = wp_insert_post(array(
            'post_title' => 'Header Digital Kappa',
            'post_type' => 'elementor_library',
            'post_status' => 'publish'
        ));
        
        $json_content = file_get_contents($header_json);
        $template_data = json_decode($json_content, true);
        
        update_post_meta($header_id, '_elementor_data', $template_data);
        update_post_meta($header_id, '_elementor_template_type', 'header');
        
        // Assigner le header à tout le site
        update_option('elementor_header_location', $header_id);
    }
    
    // Import Footer (code identique)
}
```

---

### Footer Digital Kappa

**Fichier :** `/elementor-templates/footer/footer-digital-kappa.json`

**Structure :**

```
┌────────────────────────────────────────────────────┐
│ Grid 3 colonnes                                    │
│ ┌──────────┐ ┌──────────┐ ┌────────────────────┐  │
│ │Logo blanc│ │Catégories│ │Légal               │  │
│ └──────────┘ └──────────┘ └────────────────────┘  │
├────────────────────────────────────────────────────┤
│ © 2024 Digital Kappa. Tous droits réservés.       │
└────────────────────────────────────────────────────┘
```

**Widgets utilisés :**
- Widget HTML pour le logo blanc (avec classe `.footer-logo`)
- Widget Nav Menu pour "Catégories" (menu WordPress `footer-categories`)
- Widget Nav Menu pour "Légal" (menu WordPress `footer-legal`)
- Widget Texte pour le copyright

---

## 🛍️ PAGE PRODUIT (TEMPLATE JSON ELEMENTOR)

### Fichier : `/elementor-templates/product/product-detail-template.json`

**⚠️ RÈGLE ABSOLUE : Pas de template PHP custom**

Au lieu de créer `single-product.php`, tu dois :

1. **Créer un template Elementor "Product Detail"**
2. **Construire la page produit avec Elementor** en respectant EXACTEMENT `/ProductDetail.tsx`
3. **Exporter en JSON**
4. **Utiliser Elementor Theme Builder pour l'assigner à "Single Product"**

**Structure du template produit (JSON Elementor) :**

### Section 1 : Header produit
- Widget Breadcrumb (WooCommerce)
- Widget HTML pour le badge catégorie

### Section 2 : Layout 2 colonnes (50/50)

**Colonne gauche :**
- Widget "Product Images" WooCommerce (carousel + thumbnails)

**Colonne droite :**
- Widget Product Title (H1)
- Widget Product Price (style : grand, doré, 48px)
- Widget Product Rating
- Widget Product Short Description
- Widget Add to Cart Button (personnalisé : doré, full-width)
- Widget HTML pour la liste des features (ACF)
- Widget HTML pour les 4 badges garanties

### Section 3 : Tabs (pleine largeur)

**Widget Tabs Elementor avec 4 onglets :**

1. **Description** : Contenu WooCommerce
2. **Ce qui est inclus** : ACF `included`
3. **Prérequis** : ACF `requirements`
4. **Avis + FAQ** : Commentaires WooCommerce + ACF `faq`

### Section 4 : Produits similaires
- Widget Related Products WooCommerce

---

## 📦 IMPORT AUTOMATIQUE DES PRODUITS

### Fichier CSV : `/data/products-import.csv`

**Structure complète du CSV :**

```csv
ID,Type,SKU,Name,Published,Is featured?,Short description,Description,Categories,Images,Regular price,Sale price,Meta: features,Meta: included,Meta: requirements,Meta: faq,Meta: rating,Meta: review_count
```

**Fonction d'import complète dans le plugin :**

```php
function dk_import_products() {
    $csv_file = get_template_directory() . '/data/products-import.csv';
    
    if (!file_exists($csv_file)) {
        return false;
    }
    
    $products = array_map('str_getcsv', file($csv_file));
    $header = array_shift($products);
    
    foreach ($products as $row) {
        $product_data = array_combine($header, $row);
        
        // Créer le produit WooCommerce
        $product = new WC_Product_Simple();
        $product->set_name($product_data['Name']);
        $product->set_sku($product_data['SKU']);
        $product->set_regular_price($product_data['Regular price']);
        $product->set_sale_price($product_data['Sale price']);
        $product->set_short_description($product_data['Short description']);
        $product->set_description($product_data['Description']);
        $product->set_downloadable(true);
        $product->set_virtual(true);
        
        if ($product_data['Is featured?'] == '1') {
            $product->set_featured(true);
        }
        
        // Catégorie
        $category = term_exists($product_data['Categories'], 'product_cat');
        if ($category) {
            $product->set_category_ids([$category['term_id']]);
        }
        
        // Images
        $images = explode('|', $product_data['Images']);
        $image_ids = [];
        foreach ($images as $image_url) {
            $image_id = dk_upload_image_from_url(trim($image_url), $product_data['Name']);
            if ($image_id) {
                $image_ids[] = $image_id;
            }
        }
        if (!empty($image_ids)) {
            $product->set_image_id($image_ids[0]);
            $product->set_gallery_image_ids(array_slice($image_ids, 1));
        }
        
        $product_id = $product->save();
        
        // Métadonnées ACF
        if ($product_id) {
            // Features
            $features = explode('|', $product_data['Meta: features']);
            $features_array = array();
            foreach ($features as $f) {
                $features_array[] = array('feature_text' => trim($f));
            }
            update_field('features', $features_array, $product_id);
            
            // Included
            $included = explode('|', $product_data['Meta: included']);
            $included_array = array();
            foreach ($included as $i) {
                $included_array[] = array('included_item' => trim($i));
            }
            update_field('included', $included_array, $product_id);
            
            // Requirements
            $requirements = explode('|', $product_data['Meta: requirements']);
            $requirements_array = array();
            foreach ($requirements as $r) {
                $requirements_array[] = array('requirement_text' => trim($r));
            }
            update_field('requirements', $requirements_array, $product_id);
            
            // FAQ
            if (!empty($product_data['Meta: faq'])) {
                $faq_items = explode('||', $product_data['Meta: faq']);
                $faq_array = array();
                foreach ($faq_items as $item) {
                    $parts = explode('::', $item);
                    if (count($parts) == 2) {
                        $faq_array[] = array(
                            'question' => trim($parts[0]),
                            'answer' => trim($parts[1])
                        );
                    }
                }
                update_field('faq', $faq_array, $product_id);
            }
            
            // Rating et review count
            update_post_meta($product_id, 'rating', $product_data['Meta: rating']);
            update_post_meta($product_id, 'review_count', $product_data['Meta: review_count']);
        }
    }
    
    return true;
}

function dk_upload_image_from_url($image_url, $title) {
    require_once(ABSPATH . 'wp-admin/includes/file.php');
    require_once(ABSPATH . 'wp-admin/includes/media.php');
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    
    $tmp = download_url($image_url);
    if (is_wp_error($tmp)) return false;
    
    $file_array = array(
        'name' => basename($image_url),
        'tmp_name' => $tmp
    );
    
    $id = media_handle_sideload($file_array, 0, $title);
    
    if (is_wp_error($id)) {
        @unlink($file_array['tmp_name']);
        return false;
    }
    
    return $id;
}
```

---

## 🔧 WIDGETS ELEMENTOR CUSTOM

### Liste des 12 widgets obligatoires :

1. **Product Card** (`dk_product_card`)
2. **Product Grid** (`dk_product_grid`)
3. **Hero Section** (`dk_hero_section`)
4. **Features Section** (`dk_features_section`)
5. **Stats Section** (`dk_stats_section`)
6. **CTA Section** (`dk_cta_section`)
7. **Testimonials** (`dk_testimonials`)
8. **FAQ Accordion** (`dk_faq_accordion`)
9. **Product Filters** (`dk_product_filters`)
10. **Product Carousel** (`dk_product_carousel`)
11. **Pricing Table** (`dk_pricing_table`)
12. **Order Confirmation** (`dk_order_confirmation`)

**Tous ces widgets doivent être enregistrés dans la catégorie "Digital Kappa"**

---

## 🔍 SEARCH BAR DYNAMIQUE (AJAX)

### Fichier JS : `/assets/js/search-autocomplete.js`

```javascript
jQuery(document).ready(function($) {
    let searchTimeout;
    const $searchInput = $('#product-search');
    const $results = $('#search-results');
    
    $searchInput.on('keyup', function() {
        clearTimeout(searchTimeout);
        
        const term = $(this).val().trim();
        
        if (term.length < 2) {
            $results.addClass('hidden').empty();
            return;
        }
        
        searchTimeout = setTimeout(function() {
            $.ajax({
                url: dk_ajax.ajax_url,
                type: 'POST',
                data: {
                    action: 'dk_search_products',
                    security: dk_ajax.nonce,
                    search: term
                },
                beforeSend: function() {
                    $results.html('<p class="p-4 text-sm text-gray-500">Recherche...</p>').removeClass('hidden');
                },
                success: function(response) {
                    if (response.success) {
                        $results.html(response.data).removeClass('hidden');
                    } else {
                        $results.html('<p class="p-4 text-sm text-gray-500">Aucun résultat</p>');
                    }
                }
            });
        }, 300);
    });
    
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.search-container').length) {
            $results.addClass('hidden');
        }
    });
});
```

**Handler AJAX dans `functions.php` :**

```php
add_action('wp_ajax_dk_search_products', 'dk_ajax_search_products');
add_action('wp_ajax_nopriv_dk_search_products', 'dk_ajax_search_products');

function dk_ajax_search_products() {
    check_ajax_referer('dk_search_nonce', 'security');
    
    $search_term = sanitize_text_field($_POST['search']);
    
    $args = array(
        'post_type' => 'product',
        's' => $search_term,
        'posts_per_page' => 5
    );
    
    $query = new WP_Query($args);
    
    if ($query->have_posts()) {
        $html = '<div class="divide-y divide-gray-100">';
        
        while ($query->have_posts()) {
            $query->the_post();
            $product = wc_get_product(get_the_ID());
            
            $html .= sprintf(
                '<a href="%s" class="flex items-center gap-3 p-3 hover:bg-gray-50 transition">
                    <img src="%s" alt="%s" class="w-12 h-12 rounded object-cover">
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-gray-900">%s</p>
                        <p class="text-xs text-[#d2a30b]">%s</p>
                    </div>
                </a>',
                get_permalink(),
                get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'),
                get_the_title(),
                get_the_title(),
                $product->get_price_html()
            );
        }
        
        $html .= '</div>';
        
        wp_send_json_success($html);
    } else {
        wp_send_json_error();
    }
    
    wp_reset_postdata();
}
```

---

## 📋 MENUS WORDPRESS

### 3 menus à créer automatiquement

**Dans le plugin `digital-kappa-setup.php` :**

```php
function dk_create_menus() {
    // Créer les menus
    $header_menu_id = wp_create_nav_menu('Menu Header');
    $footer_cat_id = wp_create_nav_menu('Menu Footer Catégories');
    $footer_legal_id = wp_create_nav_menu('Menu Footer Légal');
    
    // Assigner les emplacements
    $locations = array(
        'header-menu' => $header_menu_id,
        'footer-categories' => $footer_cat_id,
        'footer-legal' => $footer_legal_id
    );
    set_theme_mod('nav_menu_locations', $locations);
    
    // Ajouter automatiquement les items aux menus
    // ...
}
```

---

## ✅ CHECKLIST FINALE

### Import automatique des pages
- [ ] 10 pages créées automatiquement en JSON Elementor
- [ ] Textes EXACTS du React (copier-coller)
- [ ] Images EXACTES du React (mêmes URLs)
- [ ] Ordre des sections EXACT du React
- [ ] Styles identiques à `/styles/globals.css`
- [ ] Page d'accueil définie automatiquement
- [ ] Toutes les pages éditables avec Elementor

### Logo
- [ ] Logo `logo-digital-kappa.svg` dans `/assets/images/`
- [ ] Logo coloré dans le header
- [ ] Logo blanc dans le footer (CSS filter)

### Import automatique des produits
- [ ] 13 produits créés automatiquement
- [ ] Images uploadées (4-5 par produit)
- [ ] Métadonnées ACF remplies (features, included, requirements, FAQ)
- [ ] Produits téléchargeables + virtuels

### Templates JSON Elementor
- [ ] Header en JSON Elementor
- [ ] Footer en JSON Elementor
- [ ] Template produit en JSON Elementor (via Theme Builder)
- [ ] Toutes les pages en JSON Elementor
- [ ] ZÉRO template PHP custom avec HTML dur

### Menus WordPress
- [ ] 3 menus créés automatiquement
- [ ] Menus assignés aux emplacements
- [ ] Menus éditables depuis Apparence > Menus

### Styles
- [ ] Fichier `digital-kappa-styles.css` reprend TOUT le `globals.css`
- [ ] Tailwind CSS chargé
- [ ] Google Fonts chargées (Montserrat + Merriweather)
- [ ] Couleurs exactes (#d2a30b, #1a1a1a, etc.)

---

## 🚀 LIVRAISON

**Fichiers à fournir :**

1. `digital-kappa-theme.zip` (thème complet avec tous les JSON Elementor)
2. `digital-kappa-setup.zip` (plugin d'activation)
3. `README-INSTALLATION.md` (instructions)

**Le site doit être 100% opérationnel en moins de 5 minutes après installation.**

---

**Bon développement ! 🎨**
