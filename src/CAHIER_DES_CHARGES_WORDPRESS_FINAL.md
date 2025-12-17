# CAHIER DES CHARGES - Conversion Digital Kappa vers WordPress/WooCommerce

## 📋 INFORMATIONS GÉNÉRALES

**Projet :** Digital Kappa - Marketplace de produits digitaux  
**Type :** Site e-commerce WordPress + WooCommerce  
**Produits :** Produits digitaux dématérialisés (Ebooks, Applications, Templates)  
**Source :** Projet React complet fourni sur GitHub (branch main)  
**Objectif :** Conversion pixel-perfect du design React vers WordPress avec Elementor

---

## 🎯 OBJECTIFS PRINCIPAUX

### 1. Import automatique complet
- **10 pages** importées automatiquement en JSON Elementor
- **13 produits** importés automatiquement avec toutes leurs métadonnées
- **Header et Footer** importés en JSON Elementor
- **Template produit** importé en JSON Elementor
- Configuration complète automatique (menus, pages WooCommerce, etc.)

### 2. Reproduction pixel-perfect du React
- **Textes** : Copier-coller exact depuis les fichiers React
- **Images** : Mêmes URLs Unsplash que le React
- **Sections** : Ordre identique au React
- **Styles** : Reproduction exacte de `/styles/globals.css`
- **Couleurs** : Charte graphique respectée (#d2a30b, #1a1a1a)
- **Typographies** : Montserrat + Merriweather

### 3. Édition complète avec Elementor
- **ZÉRO template PHP** avec HTML en dur
- **100% JSON Elementor** pour toutes les pages et templates
- Header/Footer modifiables visuellement
- Toutes les pages éditables après import
- Menus WordPress éditables depuis l'admin

---

## 🛠️ STACK TECHNIQUE

### Technologies obligatoires

**WordPress :** Version 6.4+  
**WooCommerce :** Version 8.5+  
**Elementor :** Version gratuite 3.18+  
**ACF (Advanced Custom Fields) :** Version gratuite  
**PHP :** 8.0+  
**MySQL :** 5.7+

### Librairies CSS/JS

- **Tailwind CSS** : Framework CSS (via CDN)
- **Google Fonts** : Montserrat + Merriweather
- **Lucide Icons** : Icônes (équivalent Lucide React)
- **jQuery** : AJAX et interactions

---

## 📐 ARCHITECTURE DU SITE

### Pages à importer automatiquement (JSON Elementor)

```
Digital Kappa (WordPress)
│
├── 📄 Accueil (homepage.json)
│   Source React : /App.tsx → HomePage
│   Définir comme : Page d'accueil
│
├── 📄 Comment ça marche (how-it-works.json)
│   Source React : /HowItWorks.tsx
│
├── 📄 FAQ (faq.json)
│   Source React : /FAQ.tsx
│
├── 📄 À propos (about.json)
│   Source React : /About.tsx
│
├── 📄 CGV (cgv.json)
│   Source React : /TermsOfSale.tsx
│
├── 📄 Politique de confidentialité (privacy.json)
│   Source React : /PrivacyPolicy.tsx
│
├── 🛍️ Tous nos produits (all-products.json)
│   Source React : /AllProducts.tsx
│   Définir comme : Page boutique WooCommerce
│
├── 🛒 Commande (checkout.json)
│   Source React : /Checkout.tsx
│   Définir comme : Page checkout WooCommerce
│
├── ✅ Confirmation de commande (order-confirmation.json)
│   Source React : /OrderConfirmation.tsx
│
└── 📦 Template Produit (product-detail-template.json)
    Source React : /ProductDetail.tsx
    Assigner via : Elementor Theme Builder → Single Product
```

### Templates Elementor

```
Templates Elementor
│
├── 🎨 Header (header-digital-kappa.json)
│   Assigner : Tout le site
│
├── 🎨 Footer (footer-digital-kappa.json)
│   Assigner : Tout le site
│
└── 🎨 Single Product (product-detail-template.json)
    Assigner : Tous les produits WooCommerce
```

---

## 🎨 CHARTE GRAPHIQUE

### Couleurs principales

| Nom             | Code HEX  | Usage                                    |
|-----------------|-----------|------------------------------------------|
| Or Digital Kappa| `#d2a30b` | Éléments clés, CTAs, accents             |
| Or foncé        | `#b8900a` | Hover sur boutons dorés                  |
| Noir principal  | `#1a1a1a` | Titres, textes importants                |
| Gris foncé      | `#2b2d31` | Fonds sombres, sections alternées        |
| Gris moyen      | `#364153` | Textes secondaires                       |
| Gris clair      | `#9ca3af` | Textes footer, infos secondaires         |
| Blanc           | `#ffffff` | Arrière-plans principaux                 |
| Gris bg         | `#f9fafb` | Arrière-plans sections alternées         |
| Vert check      | `#10b981` | Icônes Check (features)                  |
| Bleu info       | `#3b82f6` | Icônes Info (prérequis)                  |

### Typographies

**Montserrat (Sans-serif)** - Textes courants
- Regular (400) : Paragraphes
- Medium (500) : Sous-titres
- SemiBold (600) : Boutons, labels
- Bold (700) : Éléments importants

**Merriweather (Serif)** - Titres
- Regular (400) : Titres secondaires
- Bold (700) : Titres principaux (H1, H2)

### Reproduction des styles globaux

**Fichier source :** `/styles/globals.css` du projet React (branch main)

**Fichier destination :** `/assets/css/digital-kappa-styles.css` du thème WordPress

**⚠️ RÈGLE ABSOLUE :** Copier EXACTEMENT tous les styles de `globals.css`.

---

## 📄 SPÉCIFICATIONS DES PAGES PRINCIPALES

### 1. PAGE ACCUEIL

**Fichier React source :** `/App.tsx` → `HomePage.tsx`  
**Fichier JSON Elementor :** `/elementor-templates/pages/homepage.json`  
**URL WordPress :** `/`

#### Sections à reproduire (ordre exact) :

1. **Hero Section** (Grid 2 colonnes 60/40)
2. **Features Section** (3 colonnes, background `#f9fafb`)
3. **Stats Section** (3 colonnes)
4. **Produits Vedettes** (Grid 3 colonnes)
5. **Section Process** (4 étapes timeline)
6. **Témoignages** (Carousel)
7. **FAQ** (Accordéon)
8. **CTA Final** (Background `#2b2d31`)

---

### 2. PAGE LISTING PRODUITS

**Fichier React source :** `/AllProducts.tsx`  
**Fichier JSON Elementor :** `/elementor-templates/pages/all-products.json`  
**URL WordPress :** `/produits` (page boutique WooCommerce)

#### Layout :

**Layout 2 colonnes :**
- **Sidebar gauche (25%)** : Filtres (catégories, prix, note)
- **Content droite (75%)** : Grid produits (3 colonnes)

---

### 3. TEMPLATE PRODUIT

**Fichier React source :** `/ProductDetail.tsx`  
**Fichier JSON Elementor :** `/elementor-templates/product/product-detail-template.json`  
**Assignation :** Elementor Theme Builder → Single Product

#### Structure (PIXEL-PERFECT du React) :

**1. Header produit**
- Breadcrumb
- Badge catégorie (doré)

**2. Section principale - Layout 2 colonnes 50/50**

**Colonne gauche :**
- Carousel images (4-5 images)
- Thumbnails cliquables
- Lightbox

**Colonne droite :**
- Titre H1
- Prix (grand, `#d2a30b`, 48px)
- Note + avis
- Description courte
- Bouton "Acheter maintenant" (doré, full-width)
- **Liste features** (ACF `features` - Check verts)
- **4 badges garanties** (Download, Shield, RefreshCw, Headphones)

**3. Section Tabs (4 onglets)**
- **Description** : Contenu WooCommerce
- **Ce qui est inclus** : ACF `included` (CheckCircle verts)
- **Prérequis** : ACF `requirements` (Info bleus)
- **Avis** : Commentaires WooCommerce + FAQ (ACF `faq` - Accordéon)

**4. Produits similaires**
- Carousel 4 produits (même catégorie)

---

## 🎨 HEADER & FOOTER

### Header Digital Kappa

**Fichier JSON :** `/elementor-templates/header/header-digital-kappa.json`  
**Type :** Elementor Theme Builder → Header  
**Assignation :** Tout le site

#### Structure :

```
┌──────────────────────────────────────────────────────────┐
│ [Logo SVG + Sous-titre]  [Search Bar]  [Menu]  [☰]     │
└──────────────────────────────────────────────────────────┘
```

**Éléments :**
- Logo `logo-digital-kappa.svg` coloré + sous-titre "PRODUITS DIGITAUX PREMIUM"
- Search Bar AJAX (autocomplete)
- Menu WordPress `header-menu`
- Hamburger mobile

**Settings :**
- Background : `#ffffff`
- Border-bottom : 1px `#e5e7eb`
- Padding : 16px 112px (desktop), 16px (mobile)
- Position : Sticky, top 0, z-index 40

---

### Footer Digital Kappa

**Fichier JSON :** `/elementor-templates/footer/footer-digital-kappa.json`  
**Type :** Elementor Theme Builder → Footer  
**Assignation :** Tout le site

#### Structure :

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

**Éléments :**
- Logo `logo-digital-kappa.svg` **blanc** (CSS `filter: brightness(0) invert(1)`)
- Menu `footer-categories`
- Menu `footer-legal`
- Copyright

**Settings :**
- Background : `#1a1a1a`
- Color : `#9ca3af`
- Padding : 48px 112px (desktop), 32px 16px (mobile)

---

## 🛍️ IMPORT AUTOMATIQUE DES PRODUITS

### Fichier CSV

**Emplacement :** `/data/products-import.csv`

**Structure CSV obligatoire :**

```csv
ID,Type,SKU,Name,Published,Is featured?,Short description,Description,Categories,Images,Regular price,Sale price,Meta: features,Meta: included,Meta: requirements,Meta: faq,Meta: rating,Meta: review_count
```

### Données obligatoires par produit

1. **Informations de base**
   - ID, Type (simple), SKU, Name, Published, Is featured?
   - Categories (Ebook, Application, Template)
   - Regular price, Sale price

2. **Descriptions**
   - Short description (2-3 lignes, HTML autorisé)
   - Description (HTML complet : titres, listes, paragraphes)

3. **Images** (4-5 par produit)
   - Format : URLs séparées par pipe `|`
   - Exemple : `https://img1.jpg|https://img2.jpg|https://img3.jpg`

4. **Métadonnées ACF**

   **`Meta: features`** - Fonctionnalités principales
   - Format : `Feature 1|Feature 2|Feature 3|Feature 4`
   - Affichage : Liste à puces avec Check verts (#10b981)

   **`Meta: included`** - Ce qui est inclus
   - Format : `Item 1|Item 2|Item 3|Item 4`
   - Affichage : Onglet avec CheckCircle verts

   **`Meta: requirements`** - Prérequis
   - Format : `Req 1|Req 2|Req 3`
   - Affichage : Onglet avec Info bleus (#3b82f6)

   **`Meta: faq`** - FAQ produit
   - Format : `Question 1::Réponse 1||Question 2::Réponse 2`
   - Affichage : Accordéon dans onglet Avis

   **`Meta: rating`** - Note moyenne (ex: 4.8)
   
   **`Meta: review_count`** - Nombre d'avis (ex: 127)

### Fonction d'import automatique

**Fichier :** `digital-kappa-setup.php` (plugin)

**Fonction :** `dk_import_products()`

**Résultat attendu :**
- 13 produits créés automatiquement
- Toutes les images présentes (upload automatique)
- Tous les champs ACF remplis
- Produits configurés (téléchargeables, virtuels, featured)

---

## 🔧 CONFIGURATION ACF

### Groupe de champs "Product Details"

**Assignation :** Type de contenu = Produits

**Champs obligatoires :**

```php
// 1. features (Repeater)
'features' => array(
    'type' => 'repeater',
    'sub_fields' => array(
        'feature_text' => array('type' => 'text')
    )
)

// 2. included (Repeater)
'included' => array(
    'type' => 'repeater',
    'sub_fields' => array(
        'included_item' => array('type' => 'text')
    )
)

// 3. requirements (Repeater)
'requirements' => array(
    'type' => 'repeater',
    'sub_fields' => array(
        'requirement_text' => array('type' => 'text')
    )
)

// 4. faq (Repeater)
'faq' => array(
    'type' => 'repeater',
    'sub_fields' => array(
        'question' => array('type' => 'text'),
        'answer' => array('type' => 'wysiwyg')
    )
)

// 5. rating (Number)
'rating' => array('type' => 'number', 'min' => 0, 'max' => 5, 'step' => 0.1)

// 6. review_count (Number)
'review_count' => array('type' => 'number')
```

---

## 🧩 WIDGETS ELEMENTOR CUSTOM

### Liste des 12 widgets obligatoires

| Widget                     | Nom technique                  | Usage                                    |
|----------------------------|--------------------------------|------------------------------------------|
| Product Card               | `dk_product_card`              | Carte produit réutilisable               |
| Product Grid               | `dk_product_grid`              | Grille de produits WooCommerce           |
| Hero Section               | `dk_hero_section`              | Section hero page d'accueil              |
| Features Section           | `dk_features_section`          | Section 3 features (icônes + texte)      |
| Stats Section              | `dk_stats_section`             | Section statistiques (3 chiffres)        |
| CTA Section                | `dk_cta_section`               | Section call-to-action                   |
| Testimonials               | `dk_testimonials`              | Carousel témoignages                     |
| FAQ Accordion              | `dk_faq_accordion`             | Accordéon FAQ personnalisé               |
| Product Filters            | `dk_product_filters`           | Sidebar filtres produits                 |
| Product Carousel           | `dk_product_carousel`          | Carousel produits similaires             |
| Pricing Table              | `dk_pricing_table`             | Table de prix (si besoin)                |
| Order Confirmation         | `dk_order_confirmation`        | Layout page confirmation                 |

**Catégorie Elementor :** "Digital Kappa"

---

## 🔍 SEARCH BAR DYNAMIQUE

### Fonctionnalités

- **Autocomplete temps réel** (après 2 caractères)
- **Debounce** : 300ms
- **Résultats limités** : 5 produits
- **Affichage** : Image miniature + Nom + Prix (doré)
- **Navigation clavier** : ↑ ↓ Enter Escape
- **Click outside** : Ferme les résultats

### Implémentation

**Fichier JS :** `/assets/js/search-autocomplete.js`

**Handler AJAX :** `functions.php` → `dk_ajax_search_products()`

---

## 🎛️ MENUS WORDPRESS

### 3 menus à créer automatiquement

**1. Menu Header** (`header-menu`)
- Accueil
- Tous nos produits
- Ebooks
- Applications
- Templates
- FAQ
- Comment ça marche

**2. Menu Footer Catégories** (`footer-categories`)
- Applications
- Ebooks
- Templates

**3. Menu Footer Légal** (`footer-legal`)
- À propos
- Conditions générales de vente
- Politique de confidentialité

---

## 📦 STRUCTURE DU THÈME

```
digital-kappa-theme/
├── style.css
├── functions.php
├── screenshot.png
│
├── header.php (minimal)
├── footer.php (minimal)
├── index.php (minimal)
├── page.php (minimal)
│
├── elementor-templates/
│   ├── header/
│   │   └── header-digital-kappa.json
│   ├── footer/
│   │   └── footer-digital-kappa.json
│   ├── pages/
│   │   ├── homepage.json
│   │   ├── how-it-works.json
│   │   ├── faq.json
│   │   ├── about.json
│   │   ├── cgv.json
│   │   ├── privacy.json
│   │   ├── all-products.json
│   │   ├── checkout.json
│   │   └── order-confirmation.json
│   └── product/
│       └── product-detail-template.json
│
├── elementor-widgets/
│   └── (12 widgets PHP)
│
├── inc/
│   ├── theme-setup.php
│   ├── elementor-setup.php
│   ├── woocommerce-config.php
│   └── elementor-import.php
│
├── assets/
│   ├── css/
│   │   └── digital-kappa-styles.css
│   ├── js/
│   │   ├── custom-scripts.js
│   │   └── search-autocomplete.js
│   └── images/
│       └── logo-digital-kappa.svg
│
└── data/
    └── products-import.csv
```

---

## ⚙️ PLUGIN D'ACTIVATION

**Nom :** Digital Kappa Setup  
**Fichier :** `digital-kappa-setup.php`

### Actions à l'activation

```php
function dk_auto_setup() {
    // 1. Import Header/Footer JSON
    dk_import_header_footer();
    
    // 2. Import Pages JSON
    dk_import_elementor_pages();
    
    // 3. Import Template Produit JSON
    dk_import_product_template();
    
    // 4. Import Produits CSV
    dk_import_products();
    
    // 5. Créer les menus
    dk_create_menus();
    
    // 6. Configurer WooCommerce
    dk_setup_woocommerce();
    
    // 7. Message de succès
    set_transient('dk_setup_complete', true, 60);
}
```

---

## 🚀 CHECKLIST DE LIVRAISON

### Import automatique des pages
- [ ] 10 pages créées en JSON Elementor
- [ ] Textes EXACTS du React
- [ ] Images EXACTES du React
- [ ] Ordre des sections EXACT
- [ ] Styles identiques à `globals.css`
- [ ] Page d'accueil définie
- [ ] Toutes les pages éditables avec Elementor

### Logo
- [ ] `logo-digital-kappa.svg` dans `/assets/images/`
- [ ] Logo coloré header
- [ ] Logo blanc footer

### Import automatique des produits
- [ ] 13 produits créés
- [ ] Images uploadées
- [ ] Métadonnées ACF remplies
- [ ] Produits téléchargeables + virtuels

### Templates JSON Elementor
- [ ] Header JSON importé
- [ ] Footer JSON importé
- [ ] Template produit JSON assigné
- [ ] ZÉRO PHP dur

### Menus WordPress
- [ ] 3 menus créés
- [ ] Menus assignés
- [ ] Menus éditables

### Styles
- [ ] `digital-kappa-styles.css` = `globals.css`
- [ ] Tailwind CSS chargé
- [ ] Google Fonts chargées
- [ ] Couleurs exactes

---

## 🎯 CRITÈRES DE RÉUSSITE

✅ **Import automatique** : Site 100% opérationnel après activation

✅ **Édition Elementor** : 100% modifiable visuellement

✅ **Reproduction pixel-perfect** : Textes/Images/Sections identiques

✅ **Menus WordPress** : Éditables depuis l'admin

✅ **Logo** : Fichier unique (blanc en CSS)

---

**Site livré clé en main, prêt à vendre des produits digitaux immédiatement après activation du plugin.**

---

**Version finale - Décembre 2024**
