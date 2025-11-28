<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Services - Aero Synergy</title>
    <meta name="description" content="Découvrez tous les services aéronautiques d'Aero Synergy : achat/vente, affrètement, location, évacuation sanitaire et plus encore.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
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
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="relative py-24 bg-gradient-to-br from-blue-600 via-cyan-500 to-blue-400 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-1/4 right-0 w-2/3 h-2/3 opacity-20">
                <svg class="w-full h-full" viewBox="0 0 200 200">
                    <ellipse cx="100" cy="100" rx="80" ry="60" fill="#ffffff" opacity="0.4" />
                </svg>
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                    Nos Services Aéronautiques
                </h1>
                <p class="text-white text-xl mb-8 max-w-2xl mx-auto leading-relaxed">
                    Des solutions complètes et professionnelles pour tous vos besoins dans le domaine de l'aviation
                </p>
            </div>
        </div>

        <!-- Wave Divider -->
        <div class="absolute bottom-0 left-0 w-full rotate-180">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 400" preserveAspectRatio="none"
                class="w-full h-24 md:h-32">
                <path fill="#f9fafb"
                    d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7 c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4 c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z" />
            </svg>
        </div>
    </section>

    <!-- Services Grid Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">

            <!-- Main Services -->
            <div class="mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4 text-center">Services Principaux</h2>
                <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
                    Nos services essentiels pour répondre à vos besoins aéronautiques
                </p>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Achat & Vente -->
                    <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2 flex flex-col">
                        <div class="h-64 overflow-hidden">
                            <img src="resource/images/achat vente (1).png" alt="Achat & Vente"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Achat & Vente d'Aéronefs</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Nous vous accompagnons dans l'achat et la vente d'aéronefs avec expertise et transparence. Plus de 10 ans d'expérience dans le domaine.
                            </p>
                            <a href="services/achat-vente.php"
                                class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-300 group/link mt-auto">
                                <span>En savoir plus</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor"
                                    class="w-5 h-5 group-hover/link:translate-x-1 transition-transform duration-300">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Affrètement Privé -->
                    <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2 flex flex-col">
                        <div class="h-64 overflow-hidden">
                            <img src="resource/images/affretement (1).png" alt="Affrètement Privé"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Affrètement Privé</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Voyagez en toute liberté avec nos services d'affrètement privé personnalisés. Jets privés, hélicoptères VIP et plus encore.
                            </p>
                            <a href="services/affretement-prive.php"
                                class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-300 group/link mt-auto">
                                <span>En savoir plus</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor"
                                    class="w-5 h-5 group-hover/link:translate-x-1 transition-transform duration-300">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Affrètement Commercial -->
                    <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2 flex flex-col">
                        <div class="h-64 overflow-hidden">
                            <img src="resource/images/v2/voyageurs-de-groupe.webp" alt="Affrètement Commercial"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Affrètement Commercial</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Solutions pour événements, séminaires, transport gouvernemental et voyages de groupe. De 20 à 300 passagers.
                            </p>
                            <a href="services/affretement-commercial.php"
                                class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-300 group/link mt-auto">
                                <span>En savoir plus</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor"
                                    class="w-5 h-5 group-hover/link:translate-x-1 transition-transform duration-300">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Affrètement Cargo -->
                    <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2 flex flex-col">
                        <div class="h-64 overflow-hidden">
                            <img src="resource/images/image (2).png" alt="Affrètement Cargo"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Affrètement Cargo</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Transport de fret aérien reconnu pour son efficacité et sa réactivité. Livraison express, fret industriel et marchandises dangereuses.
                            </p>
                            <a href="services/affretement-cargo.php"
                                class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-300 group/link mt-auto">
                                <span>En savoir plus</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor"
                                    class="w-5 h-5 group-hover/link:translate-x-1 transition-transform duration-300">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Location d'aéronefs -->
                    <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2 flex flex-col">
                        <div class="h-64 overflow-hidden">
                            <img src="resource/images/v2/AVIONS REGIONAUX.jpg" alt="Location"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Location d'Aéronefs</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Services de location d'aéronefs flexibles adaptés à vos besoins. Dry Lease, Wet Lease/ACMI, court et long terme.
                            </p>
                            <a href="services/location.php"
                                class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-300 group/link mt-auto">
                                <span>En savoir plus</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor"
                                    class="w-5 h-5 group-hover/link:translate-x-1 transition-transform duration-300">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Evacuation Sanitaire -->
                    <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2 flex flex-col">
                        <div class="h-64 overflow-hidden">
                            <img src="resource/images/v2/Evacuation sanitaire.png" alt="Evacuation Sanitaire"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Evacuation Sanitaire (Medevac)</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Services d'évacuation médicale d'urgence disponibles 24/7. Cabines médicalisées et équipes spécialisées.
                            </p>
                            <a href="services/medevac.php"
                                class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-300 group/link mt-auto">
                                <span>En savoir plus</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor"
                                    class="w-5 h-5 group-hover/link:translate-x-1 transition-transform duration-300">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Services -->
            <div class="mt-20">
                <h2 class="text-4xl font-bold text-gray-900 mb-4 text-center">Services Complémentaires</h2>
                <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
                    Des services additionnels pour une prise en charge complète
                </p>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Gestion & Exploitation -->
                    <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2 flex flex-col">
                        <div class="h-64 overflow-hidden">
                            <img src="resource/images/v2/GESTION D_exploitation.png" alt="Gestion & Exploitation"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Gestion & Exploitation d'Aéronefs</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Gestion complète de votre flotte : exploitation opérationnelle, maintenance CAMO, conformité réglementaire et recrutement d'équipages.
                            </p>
                            <a href="services/gestion-exploitation.php"
                                class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-300 group/link mt-auto">
                                <span>En savoir plus</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor"
                                    class="w-5 h-5 group-hover/link:translate-x-1 transition-transform duration-300">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Pièces de Rechange -->
                    <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2 flex flex-col">
                        <div class="h-64 overflow-hidden">
                            <img src="resource/images/pieces rechange (1).png" alt="Pièces de Rechange"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Pièces de Rechange Aéronautiques</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Sourcing global de pièces détachées avec livraison express. Support AOG 24/7 partout dans le monde.
                            </p>
                            <a href="services/pieces-rechange.php"
                                class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-300 group/link mt-auto">
                                <span>En savoir plus</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor"
                                    class="w-5 h-5 group-hover/link:translate-x-1 transition-transform duration-300">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Support Client -->
                    <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2 flex flex-col">
                        <div class="h-64 overflow-hidden">
                            <img src="resource/images/v2/Support client aero.png" alt="Support Client"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Support Client Aéronautique</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Équipe dédiée disponible 24h/24 et 7j/7 pour la gestion de vos vols, suivi technique, logistique et assistance d'urgence.
                            </p>
                            <a href="services/support-client.php"
                                class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-300 group/link mt-auto">
                                <span>En savoir plus</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor"
                                    class="w-5 h-5 group-hover/link:translate-x-1 transition-transform duration-300">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative py-20 bg-gradient-to-br from-blue-600 via-cyan-500 to-blue-400 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-full">
                <svg class="absolute top-0 left-0 w-full h-full" viewBox="0 0 1440 600" preserveAspectRatio="none">
                    <path fill="#2b7a9e" d="M0,0 L1440,0 L900,600 L0,600 Z" opacity="0.3" />
                </svg>
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-8 leading-tight">
                    Besoin d'une solution sur mesure ?
                </h2>
                <p class="text-white text-xl mb-10 leading-relaxed">
                    Contactez-nous pour discuter de votre projet et découvrir comment nous pouvons vous accompagner
                </p>
                <a href="contact.php"
                    class="inline-flex items-center gap-3 bg-white text-[#2b7a9e] px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-50 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:scale-105">
                    <span>Contactez nous</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="js/main.js"></script>
</body>

</html>