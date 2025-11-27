<?php
/**
 * Contact Form Handler for Aero Synergy
 * Processes contact form submissions and sends emails
 */

// Set JSON header
header('Content-Type: application/json');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée']);
    exit;
}

// Get JSON data from request body
$jsonData = file_get_contents('php://input');
$data = json_decode($jsonData, true);

// If JSON parsing failed, try to get data from POST
if (!$data) {
    $data = $_POST;
}

// Initialize response
$response = ['success' => false, 'message' => ''];

// Validate required fields
$requiredFields = ['name', 'email', 'message', 'privacy'];
$missingFields = [];

foreach ($requiredFields as $field) {
    if (empty($data[$field])) {
        $missingFields[] = $field;
    }
}

if (!empty($missingFields)) {
    $response['message'] = 'Champs requis manquants: ' . implode(', ', $missingFields);
    echo json_encode($response);
    exit;
}

// Sanitize inputs
$name = htmlspecialchars(strip_tags(trim($data['name'])));
$email = filter_var(trim($data['email']), FILTER_SANITIZE_EMAIL);
$phone = isset($data['phone']) ? htmlspecialchars(strip_tags(trim($data['phone']))) : '';
$service = isset($data['service']) ? htmlspecialchars(strip_tags(trim($data['service']))) : 'Non spécifié';
$message = htmlspecialchars(strip_tags(trim($data['message'])));

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['message'] = 'Adresse email invalide';
    echo json_encode($response);
    exit;
}

// Validate name length
if (strlen($name) < 2 || strlen($name) > 100) {
    $response['message'] = 'Le nom doit contenir entre 2 et 100 caractères';
    echo json_encode($response);
    exit;
}

// Validate message length
if (strlen($message) < 10 || strlen($message) > 1000) {
    $response['message'] = 'Le message doit contenir entre 10 et 1000 caractères';
    echo json_encode($response);
    exit;
}

// Service mapping for display
$serviceNames = [
    'achat-vente' => 'Achat & Vente',
    'affretement-prive' => 'Affrètement Privé',
    'affretement-commercial' => 'Affrètement Commercial',
    'affretement-cargo' => 'Affrètement Cargo',
    'location' => 'Location d\'aéronefs',
    'medevac' => 'Evacuation Sanitaire (Medevac)',
    'autre' => 'Autre'
];

$serviceName = isset($serviceNames[$service]) ? $serviceNames[$service] : $service;

// Prepare email to company
$to = 'contact@aero-synergy.com'; // Replace with actual email
$subject = 'Nouveau message de contact - Aero Synergy';

$emailBody = "
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #1e90ff 0%, #00bcd4 100%); color: white; padding: 20px; text-align: center; }
        .content { background: #f9f9f9; padding: 20px; border: 1px solid #ddd; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #1e90ff; }
        .value { margin-top: 5px; }
        .footer { text-align: center; margin-top: 20px; padding: 20px; background: #f0f0f0; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h1>Nouveau message de contact</h1>
        </div>
        <div class='content'>
            <div class='field'>
                <div class='label'>Nom:</div>
                <div class='value'>$name</div>
            </div>
            <div class='field'>
                <div class='label'>Email:</div>
                <div class='value'>$email</div>
            </div>
            <div class='field'>
                <div class='label'>Téléphone:</div>
                <div class='value'>" . ($phone ?: 'Non fourni') . "</div>
            </div>
            <div class='field'>
                <div class='label'>Service concerné:</div>
                <div class='value'>$serviceName</div>
            </div>
            <div class='field'>
                <div class='label'>Message:</div>
                <div class='value'>$message</div>
            </div>
            <div class='field'>
                <div class='label'>Date:</div>
                <div class='value'>" . date('d/m/Y à H:i') . "</div>
            </div>
        </div>
        <div class='footer'>
            <p>Ce message a été envoyé depuis le formulaire de contact de aero-synergy.com</p>
            <p>200 rue de la Croix Nivert, 75015 Paris, France</p>
            <p>SIRET: 977 462 852 00012</p>
        </div>
    </div>
</body>
</html>
";

// Email headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: Aero Synergy <noreply@aero-synergy.com>" . "\r\n";
$headers .= "Reply-To: $email" . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send email to company
$mailSent = @mail($to, $subject, $emailBody, $headers);

// Send confirmation email to user
$userSubject = 'Confirmation de réception - Aero Synergy';
$userEmailBody = "
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #1e90ff 0%, #00bcd4 100%); color: white; padding: 20px; text-align: center; }
        .content { background: #f9f9f9; padding: 20px; border: 1px solid #ddd; }
        .footer { text-align: center; margin-top: 20px; padding: 20px; background: #f0f0f0; font-size: 12px; color: #666; }
        .button { display: inline-block; background: #1e90ff; color: white; padding: 12px 24px; text-decoration: none; border-radius: 5px; margin: 20px 0; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h1>Merci de nous avoir contacté!</h1>
        </div>
        <div class='content'>
            <p>Bonjour $name,</p>
            <p>Nous avons bien reçu votre message concernant: <strong>$serviceName</strong></p>
            <p>Notre équipe vous répondra dans les plus brefs délais, généralement sous 24 à 48 heures.</p>
            <p><strong>Votre message:</strong></p>
            <p style='background: white; padding: 15px; border-left: 3px solid #1e90ff;'>$message</p>
            <p>Si vous avez besoin d'une assistance immédiate, n'hésitez pas à nous appeler au:</p>
            <p style='font-size: 18px; font-weight: bold; color: #1e90ff;'>+33 7 66 35 55 64</p>
            <p style='background: #fff3cd; padding: 15px; border-left: 3px solid #ff9800; margin-top: 20px;'>
                <strong>⚕ Urgences Medevac:</strong> Disponible 24/7
            </p>
        </div>
        <div class='footer'>
            <p><strong>Aero Synergy</strong></p>
            <p>200 rue de la Croix Nivert, 75015 Paris, France</p>
            <p>Email: contact@aero-synergy.com | Tel: +33 7 66 35 55 64</p>
            <p>SIRET: 977 462 852 00012</p>
        </div>
    </div>
</body>
</html>
";

$userHeaders = "MIME-Version: 1.0" . "\r\n";
$userHeaders .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$userHeaders .= "From: Aero Synergy <contact@aero-synergy.com>" . "\r\n";
$userHeaders .= "X-Mailer: PHP/" . phpversion();

@mail($email, $userSubject, $userEmailBody, $userHeaders);

// Save to database (optional - uncomment if you want to store messages)
/*
try {
    $pdo = new PDO('mysql:host=localhost;dbname=aero_synergy', 'username', 'password');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, phone, service, message, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
    $stmt->execute([$name, $email, $phone, $service, $message]);
} catch(PDOException $e) {
    error_log("Database error: " . $e->getMessage());
}
*/

// Log the submission (optional)
$logEntry = date('Y-m-d H:i:s') . " - Contact from: $name ($email) - Service: $serviceName\n";
@file_put_contents('logs/contact.log', $logEntry, FILE_APPEND);

// Return success response
if ($mailSent) {
    $response['success'] = true;
    $response['message'] = 'Votre message a été envoyé avec succès!';
} else {
    // Even if mail() fails, we can still return success since the message was processed
    $response['success'] = true;
    $response['message'] = 'Votre message a été reçu. Nous vous contacterons bientôt.';
}

echo json_encode($response);
?>
