<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Client Aéronautique - Aero Synergy</title>
    <meta name="description" content="Équipe dédiée disponible 24h/24 et 7j/7 pour la gestion de vos vols, suivi technique, logistique et assistance d'urgence.">
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
            <img src="../resource/images/v2/Support client aero.png" alt="Support Client"
                class="w-full h-full object-cover opacity-20">
        </div>

        <div class="container mx-auto px-4 h-full flex items-center relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                    Support Client Aéronautique
                </h1>
                <p class="text-white text-xl leading-relaxed">
                    Un accompagnement de bout en bout, disponible 24h/24 et 7j/7
                </p>
            </div>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <p class="text-lg text-gray-700 leading-relaxed mb-8">
                    Chez <strong>Aero-Synergy</strong>, nous croyons que la qualité d'un service aéronautique ne se mesure pas
                    uniquement par l'avion fourni, mais par <strong>l'accompagnement et le support client de bout en bout</strong>.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Nous mettons à votre disposition une <strong>équipe dédiée, disponible 24h/24 et 7j/7</strong>, pour répondre à
                    toutes vos demandes, que ce soit pour la gestion de vos vols, le suivi technique, la logistique ou l'assistance d'urgence.
                </p>
            </div>
        </div>
    </section>

    <!-- Services de support Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Nos services de support</h2>

            <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Gestion de vos vols -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Gestion de vos vols</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Planification complète, autorisations de survol, coordination handling et gestion des créneaux aéroportuaires.
                    </p>
                </div>

                <!-- Suivi technique -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Suivi technique</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Maintenance préventive et corrective, gestion CAMO, conformité réglementaire et audits techniques.
                    </p>
                </div>

                <!-- Logistique passagers & équipages -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Logistique passagers & équipages</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Organisation des catering, réservation d'hôtels, transferts au sol et gestion des rotations équipages.
                    </p>
                </div>

                <!-- Support opérationnel et administratif -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Support opérationnel et administratif</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Gestion des contrats, coordination des assurances, préparation des documents de vol et facturation.
                    </p>
                </div>
            </div>

            <!-- Assistance urgence -->
            <div class="max-w-5xl mx-auto mt-8">
                <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-xl shadow-lg p-8 md:p-12 border-l-4 border-blue-600">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="flex-shrink-0 w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900">Assistance en situation d'urgence</h3>
                    </div>
                    <p class="text-lg text-gray-700 mb-4">
                        <strong>AOG, évacuation sanitaire, rerouting - notre équipe est disponible 24/7</strong>
                    </p>
                    <p class="text-gray-600">
                        En cas d'urgence, nous activons immédiatement nos protocoles d'intervention pour résoudre la situation dans les plus brefs délais.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Nos atouts Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Nos atouts</h2>

            <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-12">
                <div class="flex items-start space-x-6">
                    <div class="flex-shrink-0 w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center text-2xl font-bold">
                        1
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Disponibilité 24/7</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Une hotline opérationnelle disponible en permanence, avec suivi en temps réel de vos demandes et interventions.
                        </p>
                    </div>
                </div>

                <div class="flex items-start space-x-6">
                    <div class="flex-shrink-0 w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center text-2xl font-bold">
                        2
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Expertise technique et réglementaire</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Chaque demande est traitée par un professionnel certifié ayant une expertise approfondie du domaine aéronautique.
                        </p>
                    </div>
                </div>

                <div class="flex items-start space-x-6">
                    <div class="flex-shrink-0 w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center text-2xl font-bold">
                        3
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Réseau international</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Partenaires dans les aéroports, centres MRO et autorités de l'aviation civile partout dans le monde.
                        </p>
                    </div>
                </div>

                <div class="flex items-start space-x-6">
                    <div class="flex-shrink-0 w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center text-2xl font-bold">
                        4
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Transparence totale</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Reporting clair, suivi détaillé des coûts et communication régulière sur l'avancement de vos dossiers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pourquoi choisir Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="relative">
                        <img src="../resource/images/image (11).png" alt="Support Client"
                            class="w-full h-auto rounded-2xl shadow-2xl">
                    </div>

                    <div>
                        <h2 class="text-4xl font-bold text-gray-900 mb-8">Pourquoi choisir le support Aero-Synergy ?</h2>

                        <p class="text-lg text-gray-700 leading-relaxed mb-8">
                            Parce que nous savons que dans l'aviation, <strong>chaque minute compte</strong>.
                        </p>

                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <svg class="w-6 h-6 text-green-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Réactivité exemplaire</h4>
                                    <p class="text-gray-600">Réponse immédiate à vos demandes urgentes, activation rapide de nos protocoles d'intervention.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <svg class="w-6 h-6 text-green-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Interlocuteur unique</h4>
                                    <p class="text-gray-600">Un contact dédié qui connaît votre dossier et coordonne toutes les interventions.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <svg class="w-6 h-6 text-green-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Solutions proactives</h4>
                                    <p class="text-gray-600">Nous anticipons vos besoins et proposons des solutions avant que les problèmes ne surviennent.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <svg class="w-6 h-6 text-green-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-2">Sérénité garantie</h4>
                                    <p class="text-gray-600">Concentrez-vous sur vos missions, nous gérons tous les aspects opérationnels.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services inclus Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-8">Notre support vous apporte sérénité et efficacité</h2>
            <p class="text-center text-gray-600 mb-16 max-w-2xl mx-auto">
                Avec Aero-Synergy, vous bénéficiez non seulement d'un avion, mais d'un partenaire de confiance
            </p>

            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Coordination globale -->
                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 text-center">
                        <div class="w-20 h-20 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Coordination globale</h3>
                        <p class="text-gray-600">
                            Nous gérons tous les aspects de vos opérations aériennes de A à Z
                        </p>
                    </div>

                    <!-- Suivi en temps réel -->
                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 text-center">
                        <div class="w-20 h-20 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Suivi en temps réel</h3>
                        <p class="text-gray-600">
                            Visibilité complète sur l'état de vos vols et interventions en cours
                        </p>
                    </div>

                    <!-- Expertise multilingue -->
                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 text-center">
                        <div class="w-20 h-20 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Expertise multilingue</h3>
                        <p class="text-gray-600">
                            Communication en français, anglais et autres langues selon vos besoins
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Témoignages ou Stats Section -->
    <section class="py-20 bg-gradient-to-br from-blue-600 via-cyan-500 to-blue-400">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center text-white">
                <h2 class="text-4xl font-bold mb-8">Un support qui fait la différence</h2>
                <div class="grid md:grid-cols-3 gap-8 mb-12">
                    <div>
                        <div class="text-5xl font-bold mb-2">24/7</div>
                        <p class="text-lg">Disponibilité permanente</p>
                    </div>
                    <div>
                        <div class="text-5xl font-bold mb-2">&lt;15min</div>
                        <p class="text-lg">Temps de réponse moyen</p>
                    </div>
                    <div>
                        <div class="text-5xl font-bold mb-2">100%</div>
                        <p class="text-lg">Satisfaction client</p>
                    </div>
                </div>
                <p class="text-xl leading-relaxed">
                    "Dans l'aviation, chaque minute compte. Notre support client est conçu pour vous apporter sérénité et efficacité,
                    afin que vous puissiez vous concentrer sur vos missions, pendant que nous gérons tous les aspects opérationnels."
                </p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8">
                Besoin d'assistance ?
            </h2>
            <p class="text-gray-600 text-xl mb-12 max-w-2xl mx-auto">
                Notre équipe est disponible 24/7 pour répondre à toutes vos questions et vous accompagner dans vos opérations
            </p>
            <a href="../contact.php"
                class="inline-flex items-center gap-3 bg-gradient-to-r from-blue-600 to-cyan-500 text-white px-8 py-4 rounded-full font-semibold text-lg hover:from-blue-700 hover:to-cyan-600 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:scale-105">
                <span>Contactez notre support</span>
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