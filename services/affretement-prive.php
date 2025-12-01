<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affrètement Privé - Aero Synergy</title>
    <meta name="description" content="Voyagez en toute liberté avec nos services d'affrètement privé personnalisés.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e90ff',
                        secondary: '#2c5aa0',
                        accent: '#00bcd4'
                    }
                }
            }
        }
    </script>
</head>

<body class="font-sans antialiased">
    <?php include '../includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="relative h-[60vh] bg-gradient-to-br from-blue-600 via-cyan-500 to-blue-400 overflow-hidden">
        <div class="absolute inset-0">
            <img src="../images/affretement (1).png" alt="Affrètement Privé"
                class="w-full h-full object-cover opacity-20">
        </div>

        <div class="container mx-auto px-4 h-full flex items-center relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                    Affrètement Privé
                </h1>
                <p class="text-white text-xl leading-relaxed">
                    La liberté ultime de voyager selon vos propres conditions
                </p>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <p class="text-lg text-gray-700 leading-relaxed mb-8">
                    Chez <strong>Aero-Synergy</strong>, nous vous offrons la liberté ultime de voyager selon vos propres conditions.
                    Que vous choisissiez un <strong>hélicoptère</strong> pour un déplacement rapide en zone urbaine, un <strong>jet privé</strong>
                    pour un vol d'affaires express, un <strong>avion de ligne corporate VIP</strong> pour un voyage de groupe
                    luxueux, ou encore un <strong>appareil plus léger</strong> pour accéder à des destinations isolées, notre
                    équipe saura répondre à vos besoins spécifiques.
                </p>
            </div>
        </div>
    </section>

    <!-- Nos points forts Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Nos points forts</h2>

            <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Flexibilité totale -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Flexibilité totale</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Choisissez vos horaires, vos itinéraires et vos aéroports de départ/arrivée.
                    </p>
                </div>

                <!-- Confidentialité & confort -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Confidentialité & confort</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Cabines luxueuses, équipages discrets, ambiance sur mesure.
                    </p>
                </div>

                <!-- Accès exclusif -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Accès exclusif</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Nous vous donnons accès à des milliers d'aéroports non desservis par les lignes régulières.
                    </p>
                </div>

                <!-- Large flotte -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Large flotte</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Jets légers, intermédiaires, long-courriers, hélicoptères VIP.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Types d'appareils Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Notre flotte d'appareils</h2>

            <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                <!-- Hélicoptère -->
                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl overflow-hidden text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="h-64 overflow-hidden">
                        <img src="/images/v2/Helicoptère.webp" alt="Hélicoptère" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Hélicoptère</h3>
                        <p class="text-sm text-gray-600">Déplacement rapide en zone urbaine</p>
                    </div>
                </div>

                <!-- Jet Privé -->
                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl overflow-hidden text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="h-64 overflow-hidden">
                        <img src="/images/v2/JET PRIVE (1).jpg" alt="Jet Privé" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Jet Privé</h3>
                        <p class="text-sm text-gray-600">Vol d'affaires express</p>
                    </div>
                </div>
                <!-- Avion Corporate VIP -->
                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl overflow-hidden text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="h-64 overflow-hidden">
                        <img src="/images/v2/corporate VIP.jpg" alt="Avion Corporate VIP" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Avion Corporate VIP</h3>
                        <p class="text-sm text-gray-600">Voyage de groupe luxueux</p>
                    </div>
                </div>
                <!-- Appareil Léger -->
                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl overflow-hidden text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="h-64 overflow-hidden">
                        <img src="/images/v2/Avion leger.avif" alt="Appareil Léger" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Appareil Léger</h3>
                        <p class="text-sm text-gray-600">Destinations isolées</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Destinations Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="relative">
                        <img src="/images/affretement (2).png" alt="Destinations"
                            class="w-full h-auto rounded-2xl shadow-2xl">
                    </div>

                    <div>
                        <h2 class="text-4xl font-bold text-gray-900 mb-8">Voyagez où vous voulez, quand vous voulez</h2>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Avec notre service d'affrètement privé, vous avez la liberté de choisir votre destination et vos horaires.
                            Que ce soit pour un voyage d'affaires, des vacances en famille ou un événement spécial, nous sommes là pour vous.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <svg class="w-6 h-6 text-green-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-gray-700">Vols vers toutes les destinations mondiales</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-6 h-6 text-green-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-gray-700">Départ et arrivée dans des aéroports privés</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-6 h-6 text-green-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-gray-700">Service personnalisé à bord</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-blue-600 via-cyan-500 to-blue-400">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-8">
                Réservez votre vol privé
            </h2>
            <p class="text-white text-xl mb-12 max-w-2xl mx-auto">
                Contactez-nous pour obtenir un devis personnalisé
            </p>
            <a href="../contact.php"
                class="inline-flex items-center gap-3 bg-white text-blue-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-50 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:scale-105">
                <span>Demander un devis</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?>

    <script src="../js/main.js"></script>
</body>

</html>