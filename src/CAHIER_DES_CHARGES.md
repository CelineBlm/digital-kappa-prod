# Cahier des charges - Digital Kappa WordPress + WooCommerce + Widgets Elementor Custom

## 1. PRÉSENTATION DU PROJET

### 1.1 Contexte
Digital Kappa est une marketplace de produits digitaux (ebooks, applications, templates) actuellement développée en React + Tailwind CSS. L'objectif est de créer une version WordPress + WooCommerce **strictement identique** visuellement et fonctionnellement pour permettre la vente réelle de produits numériques.

### 1.2 Objectifs
- Site e-commerce 100% fonctionnel
- Vente de produits numériques téléchargeables
- Design pixel-perfect par rapport à la version React
- **Pages éditables via Elementor GRATUIT** (pas Pro)
- **Widgets custom qui reproduisent EXACTEMENT le design React**
- **Header et Footer en PHP classique** (menus WordPress éditables)
- Approche mobile-first
- Performance optimale
- SEO-friendly

### 1.3 Contraintes techniques
- WordPress 6.4+
- **Elementor GRATUIT** (PAS Pro - juste pour l'édition des pages)
- WooCommerce 8.0+
- PHP 8.0+
- **Thème WordPress custom** (header.php, footer.php classiques)
- **12 widgets Elementor custom** (sections pré-stylées)
- Tailwind CSS intégré dans les widgets
- Compatible navigateurs modernes (Chrome, Firefox, Safari, Edge)

### 1.4 Philosophie du projet

⚠️ **APPROCHE HYBRIDE** : Thème WordPress custom + Widgets Elementor custom

**Ce qui est éditable** :
- ✅ Textes (titres, descriptions, boutons)
- ✅ Images (via Elementor)
- ✅ Liens et URLs
- ✅ Menus (Apparence > Menus WordPress)
- ✅ Ordre des sections (drag & drop Elementor)

**Ce qui est FIXE (design)** :
- 🔒 Couleurs (#d2a30b, etc.)
- 🔒 Typographies (Merriweather + Montserrat, tailles fixes)
- 🔒 Espacements (padding, margins, gaps)
- 🔒 Structure HTML des composants
- 🔒 Animations et transitions
- 🔒 Layout et grilles

**Avantage** : Le client peut modifier le **contenu** facilement via Elementor, mais le **design reste pixel-perfect** car intégré dans les widgets custom.

---

## 2. LES 12 WIDGETS ELEMENTOR CUSTOM À CRÉER

Chaque widget doit reproduire EXACTEMENT le design et la structure HTML du composant React correspondant, avec le CSS Tailwind intégré.

### Widget 1 : DK - Hero Section
- **Fichier** : `class-dk-hero.php`
- **Reproduit** : Hero de `HomePage.tsx`
- **Éditable** : Badge, titre, description, 2 boutons
- **Fixe** : Layout 2 col, 3 cards droite, couleurs, typo

### Widget 2 : DK - Value Propositions
- **Fichier** : `class-dk-value-props.php`
- **Reproduit** : "Pourquoi choisir" (4 blocs)
- **Éditable** : Titre, 4 valeurs (icône, titre, desc)
- **Fixe** : Grid 4 col responsive, couleurs

### Widget 3 : DK - Products Grid
- **Fichier** : `class-dk-products-grid.php`
- **Reproduit** : Grille produits WooCommerce
- **Éditable** : Nb produits, catégorie, tri, colonnes
- **Fixe** : Design ProductCard, gaps

### Widget 4 : DK - Product Card
- **Fichier** : `class-dk-product-card.php`
- **Reproduit** : `ProductCard.tsx` exact
- **Éditable** : Product ID
- **Fixe** : Image 4/3, badge, rating, prix, hover

### Widget 5 : DK - Categories
- **Fichier** : `class-dk-categories.php`
- **Reproduit** : 3 blocs catégories colorés
- **Éditable** : 3 catégories (couleur, titre, desc, lien)
- **Fixe** : Grid 3 col, backgrounds colorés

### Widget 6 : DK - Digital Partner
- **Fichier** : `class-dk-digital-partner.php`
- **Reproduit** : Section partenaire
- **Éditable** : Titre, desc, 4 features, image
- **Fixe** : Layout 2 col, checkmarks verts

### Widget 7 : DK - FAQ Accordion
- **Fichier** : `class-dk-faq-accordion.php`
- **Reproduit** : Accordion FAQ
- **Éditable** : Questions/réponses (repeater)
- **Fixe** : Animation, couleurs, icône rotation

### Widget 8 : DK - CTA Section
- **Fichier** : `class-dk-cta-section.php`
- **Reproduit** : CTA fond sombre
- **Éditable** : Titre, desc, bouton, 3 garanties
- **Fixe** : Background #2b2d31, centré

### Widget 9 : DK - How Steps
- **Fichier** : `class-dk-how-steps.php`
- **Reproduit** : 3 étapes (How it works)
- **Éditable** : 3 étapes (numéro, icône, titre, desc)
- **Fixe** : Grid 3 col, numéros dorés, flèches

### Widget 10 : DK - Guarantees
- **Fichier** : `class-dk-guarantees.php`
- **Reproduit** : 3 garanties
- **Éditable** : 3 garanties (icône, titre, desc)
- **Fixe** : Grid 3 col, icônes circulaires

### Widget 11 : DK - Product Filters
- **Fichier** : `class-dk-product-filters.php`
- **Reproduit** : Sidebar filtres (Ajax)
- **Éditable** : Titre, toggle sections
- **Fixe** : Checkboxes, radios, étoiles, Ajax

### Widget 12 : DK - Product Carousel
- **Fichier** : `class-dk-product-carousel.php`
- **Reproduit** : Carousel images produit
- **Éditable** : Galerie images (ACF)
- **Fixe** : Layout, thumbnails, navigation, swipe

---

## 3. CHARTE GRAPHIQUE (à intégrer dans les widgets)

### Couleurs
```css
--gold: #d2a30b;
--gold-hover: #b8900a;
--gold-light: rgba(210, 163, 11, 0.1);
--text-primary: #1a1a1a;
--text-secondary: #4a5565;
--gray-50: #f9fafb;
--gray-100: #f0f2f5;
--gray-200: #e5e7eb;
--bg-dark: #2b2d31;
```

### Typographies
```css
h1 { font-family: 'Merriweather', serif; font-size: 3rem; font-weight: 700; line-height: 1.2; }
h2 { font-family: 'Merriweather', serif; font-size: 2rem; font-weight: 700; line-height: 1.3; }
h3 { font-family: 'Merriweather', serif; font-size: 1.25rem; font-weight: 600; line-height: 1.4; }
body, p { font-family: 'Montserrat', sans-serif; font-size: 1rem; line-height: 1.6; }
```

### Classes Tailwind communes
```css
.btn-primary: bg-[#d2a30b] text-white px-6 py-3 rounded-lg hover:bg-[#b8900a]
.badge-category: bg-[rgba(210,163,11,0.1)] text-[#d2a30b] px-3 py-1 rounded-full text-xs
.product-card: bg-white rounded-2xl border border-[#f0f2f5] shadow-sm hover:shadow-xl
.section-padding: px-4 py-12 lg:px-28 lg:py-20
```

---

## 4. HEADER & FOOTER (PHP classique)

### Header (header.php)
**Structure** :
- Desktop : Logo + Search centrée + Nav horizontale
- Mobile : Logo + Burger + Search en dessous + Menu overlay
- Sticky top, border-bottom #e5e7eb
- Menus WordPress natifs (Apparence > Menus)

**5 menus à créer** :
1. Primary Menu (Header desktop)
2. Mobile Menu (Header mobile)
3. Footer - Produits
4. Footer - Informations
5. Footer - Légal

### Footer (footer.php)
**Structure** :
- Background #1a1a1a, texte blanc
- Grid 4 colonnes (responsive)
- 3 menus WordPress (Produits, Infos, Légal)
- Copyright bottom bar

---

## 5. WOOCOMMERCE

### Configuration produits
- Type : Virtuel + Téléchargeable
- Téléchargement : Illimité, jamais expire
- Pas de stock

### 3 catégories
1. Ebook (slug: ebook, couleur: #00A63E)
2. Application (slug: application, couleur: #155DFC)
3. Template (slug: template, couleur: #9810FA)

### Champs ACF custom
- rating (number 0-5)
- review_count (number)
- images (gallery pour carousel)
- features (repeater)
- included (repeater)
- requirements (repeater)

### Templates WooCommerce custom
- `archive-product.php` : Page catalogue avec Widget "Product Filters"
- `single-product.php` : Page produit avec Widget "Product Carousel"
- `content-product.php` : Design ProductCard.tsx exact

---

## 6. PAGES AVEC ELEMENTOR

### Page d'accueil
Widgets dans l'ordre :
1. DK - Hero Section
2. DK - Value Propositions
3. DK - Products Grid (3 produits)
4. DK - Categories
5. DK - Digital Partner
6. DK - FAQ Accordion (3 questions)
7. DK - CTA Section

### Page "Tous nos produits"
Layout 2 colonnes :
- 30% : DK - Product Filters
- 70% : DK - Products Grid (12 produits, pagination)

### Page "Comment ça marche"
Widgets :
1. DK - Hero Section (badge "Simple et sécurisé")
2. DK - How Steps
3. DK - Guarantees

### Page "FAQ"
Widgets :
1. Titre + intro (Elementor natif)
2. DK - FAQ Accordion (8-10 questions)

### Pages légales
- À propos : Texte + images (Elementor natif)
- CGV : Texte structuré (Elementor natif)
- Politique de confidentialité : Texte (Elementor natif)

---

## 7. DÉVELOPPEMENT TECHNIQUE

### Structure fichiers
```
theme-digital-kappa/
├── style.css
├── functions.php
├── header.php
├── footer.php
├── index.php
├── front-page.php
├── page.php
├── woocommerce/
│   ├── archive-product.php
│   ├── single-product.php
│   └── content-product.php
├── elementor-widgets/
│   ├── class-dk-hero.php
│   ├── class-dk-value-props.php
│   ├── ... (10 autres)
├── inc/
│   ├── elementor-setup.php
│   ├── woocommerce-setup.php
│   ├── filters-ajax.php
│   ├── svg-icons.php
│   ├── menus.php
│   └── helpers.php
├── assets/
│   ├── css/main.css
│   ├── js/
│   │   ├── filters.js
│   │   ├── mobile-menu.js
│   │   └── main.js
│   └── images/
└── languages/
```

### Enregistrement widgets (inc/elementor-setup.php)
```php
function dk_register_elementor_widgets($widgets_manager) {
    require_once(__DIR__ . '/../elementor-widgets/class-dk-hero.php');
    // ... require 11 autres widgets
    
    $widgets_manager->register(new \DK_Elementor_Widgets\DK_Hero());
    // ... register 11 autres
}
add_action('elementor/widgets/register', 'dk_register_elementor_widgets');
```

### Enregistrement menus (inc/menus.php)
```php
register_nav_menus(array(
    'primary' => 'Menu Principal (Header)',
    'mobile' => 'Menu Mobile',
    'footer-products' => 'Footer - Produits',
    'footer-info' => 'Footer - Informations',
    'footer-legal' => 'Footer - Légal',
));
```

### CSS Tailwind (assets/css/main.css)
Copier INTÉGRALEMENT `/styles/globals.css` du React + compiler avec PostCSS.

### JavaScript Ajax Filtres (assets/js/filters.js)
```js
document.querySelectorAll('[data-filter-checkbox]').forEach(checkbox => {
    checkbox.addEventListener('change', () => {
        // Ajax call
        fetch(ajax_url, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Update products grid
            document.querySelector('[data-products-grid]').innerHTML = data.html;
        });
    });
});
```

---

## 8. RESPONSIVE

### Breakpoints
- Mobile : < 640px
- Tablet : 640px - 1023px
- Desktop : ≥ 1024px

### Points critiques
- Header : Menu burger < 1024px, nav inline ≥ 1024px
- Grilles : 1 col mobile, 2 tablette, 3-4 desktop
- Hero : 1 col mobile, 2 col desktop
- Footer : 1 col mobile, 4 col desktop

---

## 9. PERFORMANCE

- Minification CSS/JS
- Lazy loading images
- Caching (WP Super Cache)
- CDN pour fonts Google
- Lighthouse > 80/100

---

## 10. CHECKLIST VALIDATION

**Widgets** :
- [ ] 12 widgets créés et fonctionnels
- [ ] Design pixel-perfect du React
- [ ] Enregistrés dans Elementor
- [ ] Catégorie "Digital Kappa" visible

**Pages** :
- [ ] Accueil éditable Elementor
- [ ] Tous nos produits avec filtres
- [ ] Comment ça marche
- [ ] FAQ
- [ ] 3 pages légales

**Header/Footer** :
- [ ] Header PHP classique responsive
- [ ] Footer PHP 4 colonnes
- [ ] 5 menus WordPress créés
- [ ] Éditable via Apparence > Menus

**WooCommerce** :
- [ ] 3 catégories créées
- [ ] 5+ produits de démo
- [ ] ACF configuré
- [ ] Templates custom
- [ ] Filtres Ajax fonctionnels

**Design** :
- [ ] Couleurs exactes
- [ ] Typographies identiques
- [ ] Espacements identiques
- [ ] Animations 300ms
- [ ] Responsive parfait

---

## 11. BUDGET & PLANNING

### Temps estimé : 60 heures

**Phase 1 - Setup (8h)** :
- Thème WordPress structure : 2h
- WooCommerce config : 2h
- Tailwind setup : 2h
- ACF setup : 2h

**Phase 2 - Widgets (20h)** :
- 12 widgets × 1.5h chacun : 18h
- Enregistrement + tests : 2h

**Phase 3 - Header/Footer (6h)** :
- header.php : 3h
- footer.php : 2h
- Menus : 1h

**Phase 4 - Pages (8h)** :
- HomePage Elementor : 2h
- AllProducts : 2h
- HowItWorks : 1h
- FAQ : 1h
- Pages légales : 2h

**Phase 5 - WooCommerce (10h)** :
- Templates custom : 4h
- Filtres Ajax : 3h
- Produits démo : 3h

**Phase 6 - Tests & Optimisation (8h)** :
- Responsive : 3h
- Cross-browser : 2h
- Performance : 2h
- Bugs fixes : 1h

### Budget plugins
- ACF Pro : $49/an
- Total : ~$50/an (Elementor gratuit, WooCommerce gratuit)

---

## CONCLUSION

**Approche finale** : Thème WordPress custom + 12 widgets Elementor custom

✅ **Client peut éditer** : Textes, images, liens, menus, ordre des sections
🔒 **Design verrouillé** : Couleurs, typos, espacements, structure HTML

Le site sera **pixel-perfect** par rapport au React, tout en étant **facilement éditable** par le client via l'interface visuelle d'Elementor.

**Pas besoin d'Elementor Pro** - La version gratuite + les widgets custom suffisent amplement.

Bonne chance ! 🚀
