<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affrètement Commercial - Aero Synergy</title>
    <meta name="description" content="Solutions pour événements, séminaires, transport gouvernemental et voyages de groupe.">
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
            <img src="../resource/images/image (2).png" alt="Affrètement Commercial"
                class="w-full h-full object-cover opacity-20">
        </div>

        <div class="container mx-auto px-4 h-full flex items-center relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                    Affrètement Commercial
                </h1>
                <p class="text-white text-xl leading-relaxed">
                    Des solutions sur-mesure pour vos événements et voyages de groupe
                </p>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <p class="text-lg text-gray-700 leading-relaxed mb-8">
                    Vous organisez un événement, un séminaire d'entreprise, un déplacement gouvernemental ou
                    un transport de groupe ?
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Notre service d'affrètement commercial met à votre disposition des appareils adaptés :
                    <strong>avions régionaux, turbopropulseurs, appareils à fuselage étroit</strong>, ou encore
                    <strong>gros porteurs VIP</strong>.
                </p>
            </div>
        </div>
    </section>

    <!-- Avantages Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Avantages</h2>

            <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Solution sur-mesure -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Solution sur-mesure</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Adaptez la capacité de l'appareil à votre groupe (de 20 à 300 passagers).
                    </p>
                </div>

                <!-- Gestion complète -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Gestion complète</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Autorisations, créneaux aéroportuaires, coordination handling et catering.
                    </p>
                </div>

                <!-- Fiabilité -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Fiabilité</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Une équipe dédiée qui sécurise le bon déroulement du vol du début à la fin.
                    </p>
                </div>

                <!-- Expérience VIP -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Expérience VIP</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Branding à bord (menus, accueil personnalisé, staff dédié).
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Types d'appareils Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Appareils disponibles</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
                <!-- Avions régionaux -->
                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-4xl mb-4">✈️</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Avions régionaux</h3>
                    <p class="text-sm text-gray-600">Courts et moyens courriers</p>
                </div>

                <!-- Turbopropulseurs -->
                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-4xl mb-4">🛩️</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Turbopropulseurs</h3>
                    <p class="text-sm text-gray-600">Flexibilité maximale</p>
                </div>

                <!-- Fuselage étroit -->
                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-4xl mb-4">🛫</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Fuselage étroit</h3>
                    <p class="text-sm text-gray-600">Groupes moyens</p>
                </div>

                <!-- Gros porteurs VIP -->
                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-4xl mb-4">🛬</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Gros porteurs VIP</h3>
                    <p class="text-sm text-gray-600">Grands groupes luxe</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Use Cases Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Cas d'utilisation</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Événements d'entreprise -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Événements d'entreprise</h3>
                    <p class="text-gray-600">Séminaires, team building, conventions</p>
                </div>

                <!-- Transports gouvernementaux -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Transports gouvernementaux</h3>
                    <p class="text-gray-600">Délégations officielles, missions diplomatiques</p>
                </div>

                <!-- Voyages de groupe -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Voyages de groupe</h3>
                    <p class="text-gray-600">Pèlerinages, excursions, événements sportifs</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-blue-600 via-cyan-500 to-blue-400">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-8">
                Organisez votre événement
            </h2>
            <p class="text-white text-xl mb-12 max-w-2xl mx-auto">
                Contactez-nous pour une solution sur-mesure adaptée à vos besoins
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