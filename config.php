<?php

/**
 * Configuration File for Aero Synergy
 */

// Error Reporting (set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Timezone
date_default_timezone_set('Europe/Paris');

// Site Configuration
define('SITE_NAME', 'Aero Synergy');
define('SITE_URL', 'https://aero-synergy.com');
define('SITE_EMAIL', 'contact@aero-synergy.com');
define('SITE_PHONE', '+33 7 66 35 55 64');
define('SITE_ADDRESS', '200 rue de la Croix Nivert, 75015 Paris, France');
define('SIRET', '977 462 852 00012');

// Social Media Links (add your actual links)
define('FACEBOOK_URL', '#');
define('TWITTER_URL', '#');
define('LINKEDIN_URL', '#');
define('INSTAGRAM_URL', '#');

// Email Configuration
// Email Configuration (MailDev)
define('SMTP_HOST', '127.0.0.1');
define('SMTP_PORT', 1025);
define('SMTP_USERNAME', '');
define('SMTP_PASSWORD', '');
define('SMTP_ENCRYPTION', ''); // No encryption for MailDev

// Database Configuration (if needed in future)
define('DB_HOST', 'localhost');
define('DB_NAME', 'aero_synergy');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

// Paths
define('BASE_PATH', __DIR__);
define('INCLUDES_PATH', BASE_PATH . '/includes');
define('RESOURCES_PATH', BASE_PATH . '/resource');
define('LOGS_PATH', BASE_PATH . '/logs');

// Security
define('ENABLE_CSRF', true);
define('SESSION_TIMEOUT', 3600); // 1 hour

// Contact Form Settings
define('MAX_MESSAGE_LENGTH', 1000);
define('MIN_MESSAGE_LENGTH', 10);
define('ENABLE_CAPTCHA', false); // Set to true when implementing reCAPTCHA

// reCAPTCHA (if using)
define('RECAPTCHA_SITE_KEY', '');
define('RECAPTCHA_SECRET_KEY', '');

// Services List
$services = [
    'achat-vente' => [
        'name' => 'Achat & Vente',
        'description' => 'Nous vous accompagnons dans l\'achat et la vente d\'aéronefs avec expertise et transparence.',
        'image' => 'achat vente (1).png',
        'icon' => '✈️'
    ],
    'affretement-prive' => [
        'name' => 'Affrètement Privé',
        'description' => 'Voyagez en toute liberté avec nos services d\'affrètement privé personnalisés.',
        'image' => 'affretement (1).png',
        'icon' => '🛩️'
    ],
    'affretement-commercial' => [
        'name' => 'Affrètement Commercial',
        'description' => 'Solutions pour événements, séminaires, transport gouvernemental et voyages de groupe.',
        'image' => 'image (2).png',
        'icon' => '🛫'
    ],
    'affretement-cargo' => [
        'name' => 'Affrètement Cargo',
        'description' => 'Transport de fret aérien reconnu pour son efficacité et sa réactivité.',
        'image' => 'image (3).png',
        'icon' => '📦'
    ],
    'location' => [
        'name' => 'Location d\'aéronefs',
        'description' => 'Services de location d\'aéronefs flexibles adaptés à vos besoins spécifiques.',
        'image' => 'image (4).png',
        'icon' => '🔑'
    ],
    'medevac' => [
        'name' => 'Evacuation Sanitaire (Medevac)',
        'description' => 'Services d\'évacuation médicale d\'urgence disponibles 24/7.',
        'image' => 'image (5).png',
        'icon' => '⚕️',
        'emergency' => true
    ]
];

// Partners List
$partners = [
    [
        'name' => 'Air Burkina',
        'logo' => 'image (6).webp',
        'url' => '#'
    ],
    [
        'name' => 'Air Sarada',
        'logo' => 'image (7).webp',
        'url' => '#'
    ],
    [
        'name' => 'ANAC',
        'logo' => 'image (1).webp',
        'url' => '#'
    ],
    [
        'name' => 'IPAG',
        'logo' => 'image (2).webp',
        'url' => '#'
    ]
];

// Business Hours
$business_hours = [
    'monday' => ['open' => '09:00', 'close' => '18:00'],
    'tuesday' => ['open' => '09:00', 'close' => '18:00'],
    'wednesday' => ['open' => '09:00', 'close' => '18:00'],
    'thursday' => ['open' => '09:00', 'close' => '18:00'],
    'friday' => ['open' => '09:00', 'close' => '18:00'],
    'saturday' => ['open' => '10:00', 'close' => '16:00'],
    'sunday' => ['open' => 'closed', 'close' => 'closed']
];

// Utility Functions

/**
 * Sanitize input data
 */
function sanitize($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Validate email
 */
function validate_email($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Generate CSRF token
 */
function generate_csrf_token()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Verify CSRF token
 */
function verify_csrf_token($token)
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Log message
 */
function log_message($message, $type = 'info')
{
    $logFile = LOGS_PATH . '/' . date('Y-m-d') . '.log';
    $timestamp = date('Y-m-d H:i:s');
    $logEntry = "[$timestamp] [$type] $message" . PHP_EOL;

    if (!file_exists(LOGS_PATH)) {
        mkdir(LOGS_PATH, 0755, true);
    }

    file_put_contents($logFile, $logEntry, FILE_APPEND);
}

/**
 * Get current page
 */
function get_current_page()
{
    $page = basename($_SERVER['PHP_SELF'], '.php');
    return $page ?: 'index';
}

/**
 * Check if current page
 */
function is_current_page($page)
{
    return get_current_page() === $page;
}

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set session timeout
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > SESSION_TIMEOUT)) {
    session_unset();
    session_destroy();
    session_start();
}
$_SESSION['LAST_ACTIVITY'] = time();
