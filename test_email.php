<?php
/**
 * Script de test pour l'envoi d'emails via MailDev
 * Exécutez ce fichier pour tester la configuration SMTP
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
} else {
    die("❌ PHPMailer n'est pas installé. Exécutez : composer install\n");
}

// Load configuration
if (!file_exists(__DIR__ . '/config_mail.php')) {
    die("❌ Le fichier config_mail.php n'existe pas\n");
}

$config = require __DIR__ . '/config_mail.php';

echo "🧪 Test de configuration MailDev\n";
echo "================================\n\n";

// Vérifier la connexion à MailDev
echo "📡 Vérification de la connexion MailDev...\n";
echo "   Host: {$config['smtp_host']}\n";
echo "   Port SMTP: {$config['smtp_port']}\n";
echo "   Interface Web: {$config['maildev_web']}\n\n";

// Test de connexion socket
$connection = @fsockopen($config['smtp_host'], $config['smtp_port'], $errno, $errstr, 5);
if (!$connection) {
    echo "❌ Impossible de se connecter au serveur SMTP\n";
    echo "   Erreur: $errstr ($errno)\n";
    echo "   Assurez-vous que MailDev est démarré avec : maildev\n";
    exit(1);
}
fclose($connection);
echo "✅ Connexion SMTP OK\n\n";

// Test d'envoi d'email
echo "📧 Envoi d'un email de test...\n";

$mail = new PHPMailer(true);

try {
    // Configuration du serveur SMTP
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Afficher les détails de debug
    $mail->isSMTP();
    $mail->Host       = $config['smtp_host'];
    $mail->Port       = $config['smtp_port'];
    $mail->SMTPAuth   = $config['smtp_auth'];

    if ($config['smtp_auth']) {
        $mail->Username = $config['smtp_username'];
        $mail->Password = $config['smtp_password'];
    }

    // Destinataires
    $mail->setFrom($config['from_email'], $config['from_name']);
    $mail->addAddress('test@example.com', 'Test User');
    $mail->addReplyTo($config['from_email'], $config['from_name']);

    // Contenu
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Email de test - MailDev Configuration';
    $mail->Body    = '
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #1e90ff 0%, #00bcd4 100%); color: white; padding: 20px; text-align: center; }
            .content { background: #f9f9f9; padding: 20px; border: 1px solid #ddd; margin-top: 20px; }
            .success { background: #d4edda; border-left: 4px solid #28a745; padding: 15px; margin: 20px 0; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>✅ Test MailDev Réussi!</h1>
            </div>
            <div class="content">
                <div class="success">
                    <strong>Félicitations!</strong> Votre configuration MailDev fonctionne correctement.
                </div>
                <p><strong>Configuration testée:</strong></p>
                <ul>
                    <li>Host: ' . htmlspecialchars($config['smtp_host']) . '</li>
                    <li>Port: ' . htmlspecialchars($config['smtp_port']) . '</li>
                    <li>From: ' . htmlspecialchars($config['from_email']) . '</li>
                </ul>
                <p><strong>Date du test:</strong> ' . date('d/m/Y à H:i:s') . '</p>
                <hr>
                <p><em>Aero Synergy - Système de contact</em></p>
            </div>
        </div>
    </body>
    </html>
    ';
    $mail->AltBody = 'Test MailDev - Configuration OK - ' . date('d/m/Y à H:i:s');

    $mail->send();
    echo "\n✅ Email envoyé avec succès!\n\n";
    echo "🌐 Consultez l'interface MailDev pour voir l'email:\n";
    echo "   {$config['maildev_web']}\n\n";

} catch (Exception $e) {
    echo "\n❌ Erreur lors de l'envoi de l'email\n";
    echo "   Message: {$mail->ErrorInfo}\n\n";
    exit(1);
}

echo "================================\n";
echo "✅ Tous les tests sont passés!\n";
echo "================================\n\n";

echo "📝 Prochaines étapes:\n";
echo "   1. Ouvrez {$config['maildev_web']} dans votre navigateur\n";
echo "   2. Vérifiez que l'email de test apparaît\n";
echo "   3. Testez le formulaire de contact avec contact_handler_smtp.php\n\n";
?>
