<?php
/**
 * Script de test pour Aero Synergy
 * Vérifiez que toutes les fonctionnalités fonctionnent correctement
 *
 * Usage: Accédez à ce fichier via votre navigateur
 * IMPORTANT: Supprimez ce fichier en production!
 */

// Activer l'affichage des erreurs pour les tests
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tests - Aero Synergy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Tests Aero Synergy</h1>
            <p class="text-gray-600 mb-8">Vérification des configurations et fonctionnalités</p>

            <div class="space-y-6">

                <!-- PHP Version -->
                <div class="border-l-4 border-blue-500 pl-4">
                    <h2 class="text-xl font-semibold mb-2">Version PHP</h2>
                    <p class="text-gray-700">
                        <?php
                        $phpVersion = phpversion();
                        $phpVersionOk = version_compare($phpVersion, '7.4.0', '>=');
                        echo "PHP Version: <strong>$phpVersion</strong> ";
                        echo $phpVersionOk ?
                            '<span class="text-green-600">✓ Compatible</span>' :
                            '<span class="text-red-600">✗ Incompatible (7.4+ requis)</span>';
                        ?>
                    </p>
                </div>

                <!-- Extensions PHP -->
                <div class="border-l-4 border-green-500 pl-4">
                    <h2 class="text-xl font-semibold mb-2">Extensions PHP</h2>
                    <?php
                    $extensions = ['mbstring', 'json', 'curl', 'fileinfo'];
                    foreach ($extensions as $ext) {
                        $loaded = extension_loaded($ext);
                        $status = $loaded ?
                            '<span class="text-green-600">✓ Activé</span>' :
                            '<span class="text-red-600">✗ Désactivé</span>';
                        echo "<p class='text-gray-700'>$ext: $status</p>";
                    }
                    ?>
                </div>

                <!-- Fichiers requis -->
                <div class="border-l-4 border-purple-500 pl-4">
                    <h2 class="text-xl font-semibold mb-2">Fichiers Requis</h2>
                    <?php
                    $requiredFiles = [
                        'index.php',
                        'contact.php',
                        'contact_handler.php',
                        'config.php',
                        '.htaccess',
                        'css/style.css',
                        'js/main.js',
                        'js/contact.js',
                        'includes/header.php',
                        'includes/footer.php'
                    ];

                    foreach ($requiredFiles as $file) {
                        $exists = file_exists($file);
                        $status = $exists ?
                            '<span class="text-green-600">✓ Trouvé</span>' :
                            '<span class="text-red-600">✗ Manquant</span>';
                        echo "<p class='text-gray-700 text-sm'>$file: $status</p>";
                    }
                    ?>
                </div>

                <!-- Permissions -->
                <div class="border-l-4 border-yellow-500 pl-4">
                    <h2 class="text-xl font-semibold mb-2">Permissions</h2>
                    <?php
                    // Créer le dossier logs s'il n'existe pas
                    if (!file_exists('logs')) {
                        mkdir('logs', 0755, true);
                    }

                    $logsWritable = is_writable('logs');
                    echo "<p class='text-gray-700'>Dossier logs: ";
                    echo $logsWritable ?
                        '<span class="text-green-600">✓ Écriture autorisée</span>' :
                        '<span class="text-red-600">✗ Écriture refusée</span>';
                    echo "</p>";

                    // Test d'écriture
                    $testFile = 'logs/test_' . time() . '.txt';
                    $writeTest = @file_put_contents($testFile, 'Test');
                    echo "<p class='text-gray-700'>Test d'écriture: ";
                    echo $writeTest !== false ?
                        '<span class="text-green-600">✓ Réussi</span>' :
                        '<span class="text-red-600">✗ Échec</span>';
                    echo "</p>";

                    // Nettoyer le fichier de test
                    if ($writeTest !== false) {
                        @unlink($testFile);
                    }
                    ?>
                </div>

                <!-- Fonction mail() -->
                <div class="border-l-4 border-red-500 pl-4">
                    <h2 class="text-xl font-semibold mb-2">Fonction mail()</h2>
                    <p class="text-gray-700">
                        <?php
                        $mailEnabled = function_exists('mail');
                        echo $mailEnabled ?
                            '<span class="text-green-600">✓ Disponible</span>' :
                            '<span class="text-red-600">✗ Non disponible</span>';
                        ?>
                    </p>
                    <p class="text-sm text-gray-500 mt-2">
                        Note: La disponibilité de la fonction ne garantit pas que les emails seront envoyés.
                        Testez l'envoi réel via le formulaire de contact.
                    </p>
                </div>

                <!-- Configuration du serveur -->
                <div class="border-l-4 border-indigo-500 pl-4">
                    <h2 class="text-xl font-semibold mb-2">Configuration Serveur</h2>
                    <?php
                    $configs = [
                        'post_max_size' => ini_get('post_max_size'),
                        'upload_max_filesize' => ini_get('upload_max_filesize'),
                        'max_execution_time' => ini_get('max_execution_time'),
                        'memory_limit' => ini_get('memory_limit'),
                        'display_errors' => ini_get('display_errors') ? 'On' : 'Off'
                    ];

                    foreach ($configs as $key => $value) {
                        echo "<p class='text-gray-700 text-sm'>$key: <strong>$value</strong></p>";
                    }
                    ?>
                </div>

                <!-- Variables d'environnement -->
                <div class="border-l-4 border-pink-500 pl-4">
                    <h2 class="text-xl font-semibold mb-2">Variables d'Environnement</h2>
                    <p class="text-gray-700 text-sm">
                        Document Root: <strong><?php echo $_SERVER['DOCUMENT_ROOT'] ?? 'N/A'; ?></strong>
                    </p>
                    <p class="text-gray-700 text-sm">
                        Server Software: <strong><?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'N/A'; ?></strong>
                    </p>
                    <p class="text-gray-700 text-sm">
                        Protocol: <strong><?php echo $_SERVER['SERVER_PROTOCOL'] ?? 'N/A'; ?></strong>
                    </p>
                </div>

                <!-- Images -->
                <div class="border-l-4 border-teal-500 pl-4">
                    <h2 class="text-xl font-semibold mb-2">Ressources Images</h2>
                    <?php
                    $imageDir = 'resource/images';
                    if (is_dir($imageDir)) {
                        $images = glob($imageDir . '/*.{png,jpg,jpeg,webp}', GLOB_BRACE);
                        echo "<p class='text-gray-700'><span class='text-green-600'>✓</span> Dossier images trouvé</p>";
                        echo "<p class='text-gray-700 text-sm'>Nombre d'images: <strong>" . count($images) . "</strong></p>";
                    } else {
                        echo "<p class='text-red-600'>✗ Dossier images non trouvé</p>";
                    }
                    ?>
                </div>

                <!-- Checklist finale -->
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4">Checklist de Déploiement</h2>
                    <div class="space-y-2 text-sm">
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2">
                            <span>Modifier l'email dans config.php et contact_handler.php</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2">
                            <span>Désactiver display_errors en production (config.php)</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2">
                            <span>Configurer HTTPS/SSL</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2">
                            <span>Tester le formulaire de contact</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2">
                            <span>Ajouter Google reCAPTCHA</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2">
                            <span>Configurer Google Analytics (optionnel)</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2">
                            <span>Vérifier sur mobile et tablette</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2">
                            <span>Supprimer ce fichier test.php en production!</span>
                        </label>
                    </div>
                </div>

                <!-- Actions de test -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4">Actions de Test</h2>
                    <div class="flex flex-wrap gap-4">
                        <a href="index.php" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                            Tester la Page d'Accueil
                        </a>
                        <a href="contact.php" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">
                            Tester la Page Contact
                        </a>
                        <a href="404.php" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700 transition">
                            Tester la Page 404
                        </a>
                        <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="bg-gray-600 text-white px-6 py-2 rounded hover:bg-gray-700 transition">
                            Rafraîchir les Tests
                        </a>
                    </div>
                </div>

            </div>

            <div class="mt-8 pt-8 border-t border-gray-200">
                <p class="text-sm text-gray-600 text-center">
                    <strong>⚠️ IMPORTANT:</strong> Supprimez ce fichier test.php avant de mettre en production!
                </p>
            </div>
        </div>
    </div>
</body>
</html>
