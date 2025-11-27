<?php

/**
 * Contact Form Handler
 * Handles form submissions and sends emails using PHPMailer
 */

// Include configuration
require_once 'config.php';

// Include Composer autoloader
if (file_exists('vendor/autoload.php')) {
    require_once 'vendor/autoload.php';
} else {
    // Fallback if composer not used (should not happen based on user context)
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Erreur système : Autoloader manquant']);
    exit;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Set response header to JSON
header('Content-Type: application/json');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée']);
    exit;
}

// Get JSON input
$json = file_get_contents('php://input');
$data = json_decode($json, true);

// Check if data is valid
if (!$data) {
    $data = $_POST;
}

// Initialize response
$response = ['success' => false, 'message' => ''];

// Validate inputs
$name = isset($data['name']) ? sanitize($data['name']) : '';
$email = isset($data['email']) ? sanitize($data['email']) : '';
$phone = isset($data['phone']) ? sanitize($data['phone']) : '';
$service = isset($data['service']) ? sanitize($data['service']) : '';
$message = isset($data['message']) ? sanitize($data['message']) : '';
$privacy = isset($data['privacy']) ? $data['privacy'] : false;

// Validation checks
$errors = [];

if (empty($name) || strlen($name) < 2) {
    $errors[] = "Le nom est requis (2 caractères minimum)";
}

if (empty($email) || !validate_email($email)) {
    $errors[] = "L'adresse email n'est pas valide";
}

if (empty($message) || strlen($message) < 10) {
    $errors[] = "Le message est requis (10 caractères minimum)";
}

if (!$privacy) {
    $errors[] = "Vous devez accepter la politique de confidentialité";
}

// Check for default configuration
if (defined('SMTP_HOST') && (SMTP_HOST === 'smtp.example.com' || SMTP_HOST === '')) {
    $errors[] = "Configuration serveur incomplète. Veuillez configurer les paramètres SMTP dans config.php.";
    log_message("Tentative d'envoi avec configuration SMTP par défaut", 'error');
}

// If there are errors, return them
if (!empty($errors)) {
    echo json_encode(['success' => false, 'message' => implode('. ', $errors)]);
    exit;
}

// Get Service Name
$serviceName = 'Non spécifié';
if (!empty($service) && isset($services[$service])) {
    $serviceName = $services[$service]['name'];
} elseif ($service === 'autre') {
    $serviceName = 'Autre demande';
}

// HTML Email Template
$emailBody = "
<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        .header { background-color: #1e90ff; color: white; padding: 15px; text-align: center; border-radius: 5px 5px 0 0; }
        .content { padding: 20px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #555; }
        .value { margin-top: 5px; }
        .footer { margin-top: 20px; font-size: 12px; color: #888; text-align: center; border-top: 1px solid #eee; padding-top: 10px; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>Nouveau Message de Contact</h2>
        </div>
        <div class='content'>
            <p>Vous avez reçu un nouveau message via le formulaire de contact du site <strong>" . SITE_NAME . "</strong>.</p>
            
            <div class='field'>
                <span class='label'>Nom : </span>
                <span class='value'>$name</span>
            </div>
            
            <div class='field'>
                <span class='label'>Email : </span>
                <span class='value'><a href='mailto:$email'>$email</a></span>
            </div>
            
            <div class='field'>
                <span class='label'>Téléphone : </span>
                <span class='value'>" . ($phone ? $phone : 'Non renseigné') . "</span>
            </div>
            
            <div class='field'>
                <span class='label'>Service concerné : </span>
                <span class='value'>$serviceName</span>
            </div>
            
            <div class='field'>
                <div class='label'>Message : </div>
                <div class='value' style='background-color: #f9f9f9; padding: 10px; border-radius: 4px;'>" . nl2br($message) . "</div>
            </div>
        </div>
        <div class='footer'>
            <p>Cet email a été envoyé automatiquement depuis le site " . SITE_URL . "</p>
            <p>" . date('d/m/Y H:i:s') . "</p>
        </div>
    </div>
</body>
</html>
";

// Send Email using PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;

    // Only enable auth if username is provided
    if (defined('SMTP_USERNAME') && SMTP_USERNAME !== '') {
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USERNAME;
        $mail->Password   = SMTP_PASSWORD;
    } else {
        $mail->SMTPAuth   = false;
    }

    if (defined('SMTP_ENCRYPTION') && SMTP_ENCRYPTION === 'tls') {
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    } elseif (defined('SMTP_ENCRYPTION') && SMTP_ENCRYPTION === 'ssl') {
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    } else {
        $mail->SMTPSecure = false;
        $mail->SMTPAutoTLS = false;
    }

    $mail->Port       = SMTP_PORT;
    $mail->CharSet    = 'UTF-8';

    // Recipients
    // If no SMTP user, use a default sender address
    $senderEmail = (defined('SMTP_USERNAME') && SMTP_USERNAME !== '') ? SMTP_USERNAME : 'noreply@aero-synergy.com';
    $mail->setFrom($senderEmail, SITE_NAME);
    $mail->addAddress(SITE_EMAIL);            // Add a recipient
    $mail->addReplyTo($email, $name);

    // Content
    $mail->isHTML(true);
    $mail->Subject = "Nouveau message de $name - " . SITE_NAME;
    $mail->Body    = $emailBody;
    $mail->AltBody = strip_tags($emailBody);

    $mail->send();

    $response['success'] = true;
    $response['message'] = 'Votre message a été envoyé avec succès. Nous vous recontacterons bientôt.';
    log_message("Email envoyé avec succès (PHPMailer) de $email");
} catch (Exception $e) {
    $response['message'] = "Erreur lors de l'envoi : " . $mail->ErrorInfo;
    log_message("Erreur PHPMailer : " . $mail->ErrorInfo, 'error');
}

echo json_encode($response);
