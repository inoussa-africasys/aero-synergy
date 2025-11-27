# Aero Synergy - Site Web Officiel

Site web professionnel pour Aero Synergy, spécialiste en services aéronautiques (vente, affrètement et évacuation sanitaire).

## 🚀 Technologies Utilisées

- **PHP** - Backend et traitement des formulaires
- **JavaScript (Vanilla)** - Interactions et animations
- **Tailwind CSS** - Framework CSS moderne et responsive
- **HTML5** - Structure sémantique

## 📁 Structure du Projet

```
aero-synergy/
├── index.php              # Page d'accueil
├── contact.php            # Page de contact
├── contact_handler.php    # Traitement du formulaire de contact
├── css/
│   └── style.css         # Styles personnalisés et animations
├── js/
│   ├── main.js           # JavaScript principal
│   └── contact.js        # JavaScript pour le formulaire de contact
├── includes/
│   ├── header.php        # En-tête de navigation
│   └── footer.php        # Pied de page
├── resource/
│   └── images/           # Images et logos
└── README.md             # Documentation
```

## ⚙️ Installation

### Prérequis

- Serveur web (Apache, Nginx)
- PHP 7.4 ou supérieur
- Composer (optionnel)

### Installation Locale

1. **Cloner ou télécharger le projet**
   ```bash
   cd /chemin/vers/votre/serveur/web
   ```

2. **Configuration Apache (exemple avec XAMPP/MAMP)**
   - Placer le dossier dans `htdocs/` ou équivalent
   - Accéder à `http://localhost/aero-synergy/`

3. **Configuration Nginx (exemple)**
   ```nginx
   server {
       listen 80;
       server_name aero-synergy.local;
       root /var/www/aero-synergy;
       index index.php index.html;

       location / {
           try_files $uri $uri/ /index.php?$query_string;
       }

       location ~ \.php$ {
           fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
           fastcgi_index index.php;
           fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
           include fastcgi_params;
       }
   }
   ```

4. **Configuration de l'email (contact_handler.php)**
   - Modifier l'adresse email de destination ligne 72:
     ```php
     $to = 'votre-email@aero-synergy.com';
     ```

5. **Créer le dossier logs (optionnel)**
   ```bash
   mkdir logs
   chmod 755 logs
   ```

## 🎨 Fonctionnalités

### Page d'Accueil
- Hero section avec animation
- Présentation des 6 services principaux:
  - Achat & Vente d'aéronefs
  - Affrètement Privé
  - Affrètement Commercial
  - Affrètement Cargo
  - Location d'aéronefs
  - Evacuation Sanitaire (Medevac 24/7)
- Section partenaires
- CTA (Call-to-Action) vers la page contact

### Page Contact
- Formulaire de contact complet avec validation
- Affichage des coordonnées complètes
- Horaires d'ouverture
- Badge urgence Medevac 24/7
- Validation côté client et serveur

### Navigation
- Menu responsive avec version mobile
- Navigation fixe avec effet au scroll
- Liens d'ancrage smooth scroll

### Footer
- Informations complètes de l'entreprise
- Liens rapides
- Liste des services
- Coordonnées
- Logos des partenaires
- Bouton "retour en haut"

## 🎯 Personnalisation

### Couleurs
Les couleurs principales sont définies dans Tailwind CSS config (index.php et contact.php):

```javascript
tailwind.config = {
    theme: {
        extend: {
            colors: {
                primary: '#1e90ff',    // Bleu principal
                secondary: '#2c5aa0',   // Bleu secondaire
                accent: '#00bcd4'       // Cyan accent
            }
        }
    }
}
```

### Images
Remplacer les images dans `resource/images/`:
- `LOGO.png` - Logo de l'entreprise
- `image (1).png` - Image hero section
- `achat vente (1).png` - Service achat & vente
- `affretement (1).png` - Service affrètement
- etc.

### Contenu
Modifier le contenu dans les fichiers PHP correspondants:
- `index.php` - Contenu de la page d'accueil
- `contact.php` - Informations de contact
- `includes/footer.php` - Pied de page

## 📧 Configuration Email

Le formulaire de contact utilise la fonction `mail()` de PHP. Pour un environnement de production, considérez:

### Option 1: Configuration PHP mail()
Configurer votre serveur SMTP dans `php.ini`

### Option 2: Utiliser PHPMailer (recommandé)
```bash
composer require phpmailer/phpmailer
```

Puis modifier `contact_handler.php` pour utiliser PHPMailer.

### Option 3: Service Email (SendGrid, Mailgun, etc.)
Intégrer un service email professionnel via leur API.

## 🔒 Sécurité

### Mesures Implémentées
- Validation et sanitisation des inputs
- Protection contre XSS
- Protection contre les injections
- CSRF protection (à ajouter en production)
- Limitation des uploads (à configurer)

### Recommandations Production
1. Activer HTTPS
2. Configurer les en-têtes de sécurité
3. Implémenter un système de captcha (Google reCAPTCHA)
4. Limiter le taux de soumission des formulaires
5. Logger les tentatives suspectes

## 📱 Responsive Design

Le site est entièrement responsive et testé sur:
- Desktop (1920px+)
- Laptop (1024px - 1919px)
- Tablet (768px - 1023px)
- Mobile (320px - 767px)

## 🌐 Navigateurs Supportés

- Chrome (dernières versions)
- Firefox (dernières versions)
- Safari (dernières versions)
- Edge (dernières versions)
- Opera (dernières versions)

## 🚀 Déploiement

### Sur un hébergement partagé (cPanel)
1. Compresser le projet en ZIP
2. Uploader via File Manager ou FTP
3. Extraire dans `public_html/`
4. Configurer les permissions (755 pour dossiers, 644 pour fichiers)
5. Tester le site

### Sur un VPS (Ubuntu/Debian)
```bash
# Installer Apache et PHP
sudo apt update
sudo apt install apache2 php libapache2-mod-php

# Copier les fichiers
sudo cp -r aero-synergy/ /var/www/html/

# Configurer les permissions
sudo chown -R www-data:www-data /var/www/html/aero-synergy
sudo chmod -R 755 /var/www/html/aero-synergy

# Redémarrer Apache
sudo systemctl restart apache2
```

## 🔧 Maintenance

### Logs
Les logs de contact sont enregistrés dans `logs/contact.log`

### Backup
Sauvegarder régulièrement:
- Tous les fichiers PHP
- Le dossier `resource/`
- Le fichier `css/style.css`
- Les logs

### Mises à jour
- Vérifier les mises à jour de sécurité PHP
- Maintenir Tailwind CSS à jour si version locale
- Tester régulièrement le formulaire de contact

## 📞 Support

Pour toute question technique:
- Email: contact@aero-synergy.com
- Téléphone: +33 7 66 35 55 64

## 📄 License

© 2024 Aero Synergy. Tous droits réservés.

## 🎨 Crédits

- Design: Inspiré du site original aero-synergy.com
- Développement: Full-stack PHP, JavaScript, Tailwind CSS
- Images: Fournies par le client

---

**SIRET**: 977 462 852 00012
**Adresse**: 200 rue de la Croix Nivert, 75015 Paris, France
