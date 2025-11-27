<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achat & Vente d'Aéronefs - Aero Synergy</title>
    <meta name="description" content="Aero Synergy vous accompagne dans l'achat et la vente d'aéronefs avec expertise et transparence.">
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
            <img src="../resource/images/achat vente (1).png" alt="Achat & Vente"
                class="w-full h-full object-cover opacity-20">
        </div>

        <div class="container mx-auto px-4 h-full flex items-center relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                    Achat & Vente d'Aéronefs
                </h1>
                <p class="text-white text-xl leading-relaxed">
                    Laissez Aero-Synergy travailler pour vous
                </p>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <p class="text-lg text-gray-700 leading-relaxed mb-8">
                    Chez <strong>Aero-Synergy</strong>, nous sommes passionnés par l'aviation. Notre mission est simple : faciliter
                    et sécuriser vos transactions aéronautiques, qu'il s'agisse d'acheter ou de vendre un avion, des
                    pièces de rechange Aéronautique ou d'assurer la gestion de votre flotte.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Nous mettons un point d'honneur sur <strong>l'intégrité, la transparence, la sécurité et la
                        satisfaction client</strong>.
                </p>
            </div>
        </div>
    </section>

    <!-- Pourquoi nous choisir Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Pourquoi nous choisir ?</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Experience & Expertise -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Expérience & Expertise</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Plus de 10 ans dans le domaine de l'aviation et un réseau mondial de partenaires fiables.
                    </p>
                </div>

                <!-- Transactions simples & sécurisées -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Transactions simples & sécurisées</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Nous vous accompagnons dans chaque étape, de la recherche à la livraison.
                    </p>
                </div>

                <!-- Inspections & Qualité -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Inspections & Qualité</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Chaque aéronef est rigoureusement contrôlé avant toute transaction.
                    </p>
                </div>

                <!-- Équipe dédiée -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Équipe dédiée</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Des professionnels passionnés, disponibles et réactifs pour répondre à toutes vos questions.
                    </p>
                </div>

                <!-- Gain de temps -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Gain de temps</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Nous gérons les aspects administratifs, contractuels et techniques pour que vous vous concentriez sur l'essentiel.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Acheter avec Aero-Synergy Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-4xl font-bold text-gray-900 mb-12">Acheter avec Aero-Synergy</h2>

                <div class="grid md:grid-cols-2 gap-12 items-center mb-12">
                    <div>
                        <p class="text-lg text-gray-700 leading-relaxed mb-8">
                            Vous cherchez votre premier avion ou un nouvel appareil pour renforcer votre flotte ?
                            <strong>Nous vous guidons pas à pas :</strong>
                        </p>

                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">
                                    1
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Analyse de vos besoins</h4>
                                    <p class="text-gray-600">(budget, type d'appareil, missions)</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">
                                    2
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Recherche ciblée</h4>
                                    <p class="text-gray-600">Grâce à notre réseau mondial de vendeurs et courtiers aéronautiques</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">
                                    3
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Visites & inspections techniques</h4>
                                    <p class="text-gray-600">Pour garantir un appareil conforme et sûr</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">
                                    4
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Négociations & contrats</h4>
                                    <p class="text-gray-600">Rédigés dans vos intérêts</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">
                                    5
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Livraison & suivi CAMO/Maintenance</h4>
                                    <p class="text-gray-600">Après acquisition</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative">
                        <img src="../resource/images/achat vente (2).png" alt="Acheter avec Aero-Synergy"
                            class="w-full h-auto rounded-2xl shadow-2xl">
                    </div>
                </div>

                <div class="bg-blue-50 rounded-xl p-8 text-center">
                    <p class="text-xl text-gray-800 leading-relaxed">
                        <strong>Avec Aero-Synergy, vous achetez en toute sérénité, avec la garantie de faire le bon choix.</strong>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vendre avec Aero-Synergy Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-4xl font-bold text-gray-900 mb-12">Vendre avec Aero-Synergy</h2>

                <div class="grid md:grid-cols-2 gap-12 items-center mb-12">
                    <div class="relative order-2 md:order-1">
                        <img src="../resource/images/achat vente (3).png" alt="Vendre avec Aero-Synergy"
                            class="w-full h-auto rounded-2xl shadow-2xl">
                    </div>

                    <div class="order-1 md:order-2">
                        <p class="text-lg text-gray-700 leading-relaxed mb-8">
                            Vendre un aéronef peut être long et complexe. Avec Aero-Synergy, <strong>tout devient simple :</strong>
                        </p>

                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Évaluation réaliste</h4>
                                    <p class="text-gray-600">De la valeur de votre avion selon le marché</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Visibilité internationale</h4>
                                    <p class="text-gray-600">Via notre réseau, plateformes spécialisées (Avinode, JetNet, AMSTAT, Controller, etc.)</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Gestion complète</h4>
                                    <p class="text-gray-600">Des annonces, des prospects, des visites et de la documentation</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Négociation & closing sécurisés</h4>
                                    <p class="text-gray-600">Pour maximiser votre retour financier</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-blue-600 text-white rounded-xl p-8 text-center">
                    <p class="text-xl leading-relaxed">
                        Nous faisons le travail à votre place, tout en vous tenant informé à chaque étape.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-blue-600 via-cyan-500 to-blue-400">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-8">
                Prêt à concrétiser votre projet ?
            </h2>
            <p class="text-white text-xl mb-12 max-w-2xl mx-auto">
                Contactez-nous dès aujourd'hui pour une consultation gratuite
            </p>
            <a href="../contact.php"
                class="inline-flex items-center gap-3 bg-white text-blue-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-50 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:scale-105">
                <span>Contactez-nous</span>
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