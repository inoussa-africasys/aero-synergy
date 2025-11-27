<?php
/**
 * Configuration pour l'envoi d'emails - EXEMPLE
 *
 * INSTRUCTIONS :
 * 1. Copiez ce fichier vers config_mail.php
 * 2. Modifiez les valeurs selon votre environnement
 * 3. Ne commitez JAMAIS config_mail.php (il est dans .gitignore)
 */

return [
    // ==========================================
    // CONFIGURATION MAILDEV (DÉVELOPPEMENT)
    // ==========================================
    // Utilisez ces paramètres en développement
    'smtp_host' => 'localhost',
    'smtp_port' => 1025,
    'smtp_username' => '',
    'smtp_password' => '',
    'smtp_secure' => false,
    'smtp_auth' => false,

    // ==========================================
    // CONFIGURATION GMAIL (PRODUCTION)
    // ==========================================
    // Décommentez et configurez pour Gmail
    /*
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 587,
    'smtp_username' => 'votre-email@gmail.com',
    'smtp_password' => 'votre-mot-de-passe-application', // Pas votre mot de passe Gmail !
    'smtp_secure' => true,
    'smtp_auth' => true,
    */

    // ==========================================
    // CONFIGURATION SENDGRID (PRODUCTION)
    // ==========================================
    // Décommentez et configurez pour SendGrid
    /*
    'smtp_host' => 'smtp.sendgrid.net',
    'smtp_port' => 587,
    'smtp_username' => 'apikey',
    'smtp_password' => 'SG.votre-clé-api-sendgrid',
    'smtp_secure' => true,
    'smtp_auth' => true,
    */

    // ==========================================
    // CONFIGURATION SERVEUR SMTP PERSONNALISÉ
    // ==========================================
    // Décommentez et configurez pour votre serveur
    /*
    'smtp_host' => 'mail.aero-synergy.com',
    'smtp_port' => 587,
    'smtp_username' => 'contact@aero-synergy.com',
    'smtp_password' => 'votre-mot-de-passe',
    'smtp_secure' => true,  // ou false selon votre serveur
    'smtp_auth' => true,
    */

    // ==========================================
    // CONFIGURATION GÉNÉRALE
    // ==========================================

    // Expéditeur par défaut
    'from_email' => 'noreply@aero-synergy.com',
    'from_name' => 'Aero Synergy',

    // Destinataire principal (email de l'entreprise)
    'to_email' => 'contact@aero-synergy.com',

    // Interface web MailDev (développement seulement)
    'maildev_web' => 'http://localhost:1080',

    // Mode debug
    // true = affiche les détails SMTP dans la réponse
    // false = mode production (recommandé)
    'debug' => true,

    // ==========================================
    // NOTES IMPORTANTES
    // ==========================================
    /*
     * Pour Gmail :
     * - Activez l'authentification à 2 facteurs
     * - Créez un "Mot de passe d'application" dans votre compte Google
     * - Utilisez ce mot de passe d'application, pas votre mot de passe Gmail
     *
     * Pour SendGrid :
     * - Créez un compte sur sendgrid.com
     * - Générez une clé API dans Settings > API Keys
     * - Utilisez 'apikey' comme username
     *
     * Pour un serveur SMTP personnalisé :
     * - Vérifiez le port (587 pour STARTTLS, 465 pour SSL, 25 pour non-crypté)
     * - Vérifiez si l'authentification est requise
     * - Vérifiez le type de sécurité (TLS/SSL)
     */
];
