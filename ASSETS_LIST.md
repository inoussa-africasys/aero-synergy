# Liste Complète des Assets - Aero Synergy

## 📋 Vue d'ensemble
Ce document liste **TOUS** les assets (images, CSS, JavaScript) utilisés dans l'ensemble des fichiers PHP du site Aero Synergy.

---

## 🎨 CSS

### Fichiers CSS Locaux
- `css/style.css` - Utilisé dans tous les fichiers PHP

### CDN CSS
- `https://cdn.tailwindcss.com` - Framework CSS Tailwind (tous les fichiers)

---

## 📜 JavaScript

### Fichiers JavaScript Locaux
- `js/main.js` - Utilisé dans tous les fichiers principaux
- `js/contact.js` - Utilisé uniquement dans `contact.php`

---

## 🖼️ Images

### 1. LOGOS

#### Logo Principal
- `/resource/images/LOGO/logo-white.png`
  - Utilisé dans: `header.php`, `footer.php`

- `resource/images/LOGO/forground.png`
  - Utilisé dans: `index.php` (hero section background)

---

### 2. PAGE D'ACCUEIL (index.php)

#### Section Hero
- `resource/images/LOGO/forground.png` (background)

#### Section Partenaires
- `resource/images/pilot.jpg`

#### Section Services
- `resource/images/achat vente (1).png` - Service Achat & Vente
- `resource/images/affretement (1).png` - Service Affrètement Privé
- `resource/images/v2/voyageurs-de-groupe.webp` - Service Affrètement Commercial
- `resource/images/image (2).png` - Service Affrètement Cargo
- `resource/images/v2/AVIONS REGIONAUX.jpg` - Service Location d'aéronefs
- `resource/images/v2/Evacuation sanitaire.png` - Service Evacuation Sanitaire

#### Section Autres
- `resource/images/avion-1.png` - Avion en vol
- `resource/images/CTA-Home-page-New.png` - Section CTA

#### Section Partenaires (Carousel)
Tous les fichiers du dossier:
- `resource/images/partenaires/*` - Images des partenaires (lecture dynamique PHP)

---

### 3. PAGE SERVICES (services.php)

#### Services Principaux (même structure que index.php)
- `resource/images/achat vente (1).png`
- `resource/images/affretement (1).png`
- `resource/images/v2/voyageurs-de-groupe.webp`
- `resource/images/image (2).png`
- `resource/images/v2/AVIONS REGIONAUX.jpg`
- `resource/images/v2/Evacuation sanitaire.png`

#### Services Complémentaires
- `resource/images/v2/GESTION D_exploitation.png` - Gestion & Exploitation
- `resource/images/pieces rechange (1).png` - Pièces de Rechange
- `resource/images/v2/Support client aero.png` - Support Client

---

### 4. PAGE CONTACT (contact.php)

**Aucune image spécifique** - Utilise uniquement le logo du header

---

### 5. SERVICES DÉTAILLÉS

#### A. Achat & Vente (`services/achat-vente.php`)
- `../resource/images/achat vente (1).png` - Hero section
- `../resource/images/achat vente (2).png` - Section "Acheter avec Aero-Synergy"
- `../resource/images/achat vente (3).png` - Section "Vendre avec Aero-Synergy"

#### B. Affrètement Privé (`services/affretement-prive.php`)
- `../resource/images/affretement (1).png` - Hero section
- `/resource/images/v2/Helicoptère.webp` - Type d'appareil: Hélicoptère
- `/resource/images/v2/JET PRIVE (1).jpg` - Type d'appareil: Jet Privé
- `/resource/images/v2/corporate VIP.jpg` - Type d'appareil: Avion Corporate VIP
- `/resource/images/v2/Avion leger.avif` - Type d'appareil: Appareil Léger
- `/resource/images/affretement (2).png` - Section Destinations

#### C. Affrètement Commercial (`services/affretement-commercial.php`)
- `../resource/images/v2/voyageurs-de-groupe.webp` - Hero section

#### D. Affrètement Cargo (`services/affretement-cargo.php`)
- `../resource/images/v2/CARGO.png` - Hero section

#### E. Location d'Aéronefs (`services/location.php`)
- `../resource/images/v2/AVIONS REGIONAUX.jpg` - Hero section

#### F. Évacuation Sanitaire - Medevac (`services/medevac.php`)
- `../resource/images/v2/Evacuation sanitaire.png` - Hero section

#### G. Gestion & Exploitation (`services/gestion-exploitation.php`)
- `../resource/images/v2/GESTION D_exploitation.png` - Hero section
- `../resource/images/image (9).png` - Section "Pourquoi confier votre flotte"

#### H. Pièces de Rechange (`services/pieces-rechange.php`)
- `../resource/images/pieces rechange (1).png` - Hero section

#### I. Support Client (`services/support-client.php`)
- `../resource/images/v2/Support client aero.png` - Hero section
- `../resource/images/image (11).png` - Section "Pourquoi choisir"

---

### 6. FOOTER (footer.php)

#### Images des Partenaires (Section Commentée)
Ces images sont présentes dans le code mais commentées:
- `resource/images/image (6).webp` - Air Burkina
- `resource/images/image (7).webp` - Air Sarada
- `resource/images/image (1).webp` - ANAC
- `resource/images/image (2).webp` - IPAG

---

## 📊 Statistiques

### Total des Assets par Type
- **Fichiers CSS locaux:** 1
- **Fichiers JavaScript locaux:** 2
- **CDN externe:** 1 (Tailwind CSS)
- **Images uniques:** ~30+

### Répertoires d'Images
- `resource/images/` - Images générales
- `resource/images/v2/` - Images version 2
- `resource/images/LOGO/` - Logos
- `resource/images/partenaires/` - Logos des partenaires

---

## 📝 Notes Importantes

### Conventions de Chemins
- Pages racine (index.php, services.php, contact.php):
  - Utilisent des chemins relatifs: `resource/images/...`
  - Ou chemins absolus: `/resource/images/...`

- Pages dans le dossier services:
  - Utilisent des chemins relatifs avec remontée: `../resource/images/...`

### Images Dupliquées
Certaines images sont utilisées dans plusieurs pages:
- `achat vente (1).png` - index.php, services.php, achat-vente.php
- `affretement (1).png` - index.php, services.php, affretement-prive.php
- `v2/voyageurs-de-groupe.webp` - index.php, services.php, affretement-commercial.php
- `image (2).png` - index.php, services.php
- `v2/AVIONS REGIONAUX.jpg` - index.php, services.php, location.php
- `v2/Evacuation sanitaire.png` - index.php, services.php, medevac.php

### Assets Dynamiques
- **Partenaires:** Les images du dossier `resource/images/partenaires/` sont chargées dynamiquement via PHP (scandir)

---

## ✅ Liste de Vérification

### Fichiers Essentiels
- [x] css/style.css
- [x] js/main.js
- [x] js/contact.js

### Images Critiques
- [x] Logo principal
- [x] Images des services (6 services principaux)
- [x] Images des services complémentaires (3 services)
- [x] Images détaillées des 9 pages de services
- [x] Images des partenaires

---

## 🔄 Mise à Jour

**Date de création:** 2025-12-01
**Dernière mise à jour:** 2025-12-01
**Version:** 1.0

---

## 📞 Contact

Pour toute question concernant cette documentation, contactez l'équipe de développement.
