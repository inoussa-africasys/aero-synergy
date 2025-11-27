<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Client Aéronautique - Aero Synergy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="font-sans antialiased">
    <?php include '../includes/header.php'; ?>

    <section class="relative h-[60vh] bg-gradient-to-br from-purple-600 via-pink-500 to-purple-400">
        <div class="container mx-auto px-4 h-full flex items-center relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">Support Client Aéronautique</h1>
                <p class="text-white text-xl">Disponible 24h/24 et 7j/7</p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-4xl">
            <p class="text-lg mb-6">Chez <strong>Aero-Synergy</strong>, nous croyons que la qualité d'un service aéronautique ne se mesure pas uniquement par l'avion fourni, mais par l'accompagnement et le support client de bout en bout.</p>
            <p class="text-lg">Nous mettons à votre disposition une équipe dédiée, disponible <strong>24h/24 et 7j/7</strong>, pour répondre à toutes vos demandes.</p>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16">Nos services de support</h2>
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-xl font-bold mb-4">Gestion de vos vols</h3>
                    <p>Planification, autorisations, coordination handling</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-xl font-bold mb-4">Suivi technique</h3>
                    <p>Maintenance, CAMO, conformité réglementaire</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-xl font-bold mb-4">Logistique passagers & équipages</h3>
                    <p>Catering, hôtels, transferts</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-xl font-bold mb-4">Support opérationnel</h3>
                    <p>Contrats, assurances, documents de vol</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-8 md:col-span-2">
                    <h3 class="text-xl font-bold mb-4">Assistance en situation d'urgence</h3>
                    <p>AOG, évacuation, rerouting - disponible 24/7</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-br from-purple-600 via-pink-500 to-purple-400 text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-white mb-8">Besoin d'assistance ?</h2>
            <p class="text-white text-xl mb-8">Notre équipe est disponible 24/7</p>
            <a href="../contact.php" class="inline-block bg-white text-purple-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-50">Contactez-nous</a>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?>
    <script src="../js/main.js"></script>
</body>
</html>
