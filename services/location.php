<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location d'Aéronefs - Aero Synergy</title>
    <meta name="description" content="Services de location d'aéronefs flexibles adaptés à vos besoins spécifiques.">
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
            <img src="../resource/images/v2/AVIONS REGIONAUX.jpg" alt="Location d'Aéronefs"
                class="w-full h-full object-cover opacity-20">
        </div>

        <div class="container mx-auto px-4 h-full flex items-center relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                    Location d'Aéronefs
                </h1>
                <p class="text-white text-xl leading-relaxed">
                    Solutions flexibles de location adaptées à vos besoins
                </p>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <p class="text-lg text-gray-700 leading-relaxed mb-8">
                    Chez <strong>Aero-Synergy</strong>, nous comprenons que chaque opérateur ou entreprise a des besoins
                    spécifiques en matière de flotte.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    C'est pourquoi nous proposons des <strong>solutions flexibles de location</strong> adaptées aux compagnies
                    aériennes, sociétés, gouvernements et opérateurs privés.
                </p>
            </div>
        </div>
    </section>

    <!-- Nos formules de location Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Nos formules de location</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Dry Lease -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Dry Lease</h3>
                    <p class="text-sm text-gray-500 mb-4">(Location sèche)</p>
                    <p class="text-gray-600 leading-relaxed">
                        Mise à disposition d'un aéronef sans équipage, adapté aux compagnies disposant déjà de leurs propres pilotes et maintenance.
                    </p>
                </div>

                <!-- Wet Lease / ACMI -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-2 border-blue-400">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <div class="bg-blue-500 text-white text-xs px-3 py-1 rounded-full inline-block mb-4">POPULAIRE</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Wet Lease / ACMI</h3>
                    <p class="text-sm text-gray-500 mb-4">Aircraft, Crew, Maintenance & Insurance</p>
                    <p class="text-gray-600 leading-relaxed">
                        Solution idéale pour une capacité temporaire, un pic de demande saisonnier ou un vol spécifique.
                    </p>
                </div>

                <!-- Damp Lease -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Damp Lease</h3>
                    <p class="text-sm text-gray-500 mb-4">(Location partielle)</p>
                    <p class="text-gray-600 leading-relaxed">
                        Location avec équipage partiel, selon vos besoins spécifiques.
                    </p>
                </div>

                <!-- Location court terme -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Location court terme</h3>
                    <p class="text-sm text-gray-500 mb-4">(Flexible)</p>
                    <p class="text-gray-600 leading-relaxed">
                        Renfort ponctuel pour missions urgentes ou opérations spéciales.
                    </p>
                </div>

                <!-- Location long terme -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Location long terme</h3>
                    <p class="text-sm text-gray-500 mb-4">(Durable)</p>
                    <p class="text-gray-600 leading-relaxed">
                        Solution durable pour développer votre flotte sans immobiliser votre trésorerie.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Avantages de la location Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Avantages de la location avec Aero-Synergy</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Flexibilité financière -->
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Flexibilité financière</h3>
                        <p class="text-gray-600">Pas d'investissement initial lourd, paiement étalé</p>
                    </div>
                </div>

                <!-- Disponibilité rapide -->
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Disponibilité rapide</h3>
                        <p class="text-gray-600">Avions prêts à intégrer vos opérations en quelques jours</p>
                    </div>
                </div>

                <!-- Équipages qualifiés -->
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Équipages qualifiés</h3>
                        <p class="text-gray-600">Pilotes, PNC et équipes techniques expérimentés (si ACMI)</p>
                    </div>
                </div>

                <!-- Maintenance & support -->
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Maintenance & support</h3>
                        <p class="text-gray-600">Suivi CAMO, MRO et documentation réglementaire assurés</p>
                    </div>
                </div>

                <!-- Large gamme d'appareils -->
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Large gamme d'appareils</h3>
                        <p class="text-gray-600">Jets privés, turbopropulseurs, avions régionaux, gros porteurs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pourquoi choisir Section -->
    <section class="py-20 bg-gradient-to-br from-blue-50 to-cyan-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold text-center text-gray-900 mb-12">Pourquoi choisir Aero-Synergy ?</h2>

                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
                    <p class="text-lg text-gray-700 leading-relaxed mb-8">
                        Nous ne sommes pas de simples courtier : nous sommes un <strong>partenaire stratégique</strong> qui vous
                        aide à :
                    </p>

                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                            <span class="text-gray-700">Optimiser vos coûts d'exploitation</span>
                        </div>

                        <div class="flex items-center space-x-3">
                            <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            <span class="text-gray-700">Répondre rapidement aux pics de demande</span>
                        </div>

                        <div class="flex items-center space-x-3">
                            <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                            </svg>
                            <span class="text-gray-700">Développer vos routes et projets sans risque financier excessif</span>
                        </div>

                        <div class="flex items-center space-x-3">
                            <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-gray-700">Bénéficier de notre réseau mondial de propriétaires et opérateurs</span>
                        </div>
                    </div>

                    <div class="mt-8 p-6 bg-blue-50 rounded-xl">
                        <p class="text-xl text-gray-800 text-center font-semibold">
                            Avec Aero-Synergy, la location d'un aéronef devient simple, sécurisée et adaptée à vos objectifs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-blue-600 via-cyan-500 to-blue-400">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-8">
                Louez votre aéronef
            </h2>
            <p class="text-white text-xl mb-12 max-w-2xl mx-auto">
                Contactez-nous pour discuter de vos besoins en location
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