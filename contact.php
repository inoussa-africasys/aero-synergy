<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Aero Synergy</title>
    <meta name="description" content="Contactez Aero Synergy pour tous vos besoins aéronautiques.">
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
<body class="font-sans antialiased bg-gray-50">
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-br from-blue-600 via-cyan-500 to-blue-400">
        <div class="container mx-auto px-4">
            <div class="text-center text-white">
                <h1 class="text-5xl md:text-6xl font-bold mb-4">Contactez-nous</h1>
                <p class="text-xl max-w-2xl mx-auto">
                    Notre équipe est à votre disposition pour répondre à toutes vos questions
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <!-- Contact Information -->
                <div class="space-y-8">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Nos Coordonnées</h2>
                        <p class="text-gray-600 text-lg mb-8">
                            N'hésitez pas à nous contacter pour toute demande d'information ou de devis.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <!-- Address -->
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Adresse</h3>
                                <p class="text-gray-600">200 rue de la Croix Nivert<br>75015 Paris, France</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Téléphone</h3>
                                <a href="tel:+33766355564" class="text-blue-600 hover:text-blue-800 transition-colors">
                                    +33 7 66 35 55 64
                                </a>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Email</h3>
                                <a href="mailto:contact@aero-synergy.com" class="text-blue-600 hover:text-blue-800 transition-colors">
                                    contact@aero-synergy.com
                                </a>
                            </div>
                        </div>

                        <!-- SIRET -->
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">SIRET</h3>
                                <p class="text-gray-600">977 462 852 00012</p>
                            </div>
                        </div>
                    </div>

                    <!-- Business Hours -->
                    <div class="bg-blue-50 rounded-xl p-6 mt-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Horaires d'ouverture</h3>
                        <div class="space-y-2 text-gray-600">
                            <div class="flex justify-between">
                                <span>Lundi - Vendredi</span>
                                <span class="font-semibold">9h00 - 18h00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Samedi</span>
                                <span class="font-semibold">10h00 - 16h00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Dimanche</span>
                                <span class="font-semibold">Fermé</span>
                            </div>
                            <div class="mt-4 pt-4 border-t border-blue-200">
                                <p class="text-sm text-blue-800 font-medium">
                                    ⚕ Urgences Medevac disponibles 24/7
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Envoyez-nous un message</h2>

                    <form id="contactForm" class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nom complet *</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                placeholder="Votre nom">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email *</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                placeholder="votre.email@exemple.com">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Téléphone</label>
                            <input type="tel" id="phone" name="phone"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                placeholder="+33 X XX XX XX XX">
                        </div>

                        <div>
                            <label for="service" class="block text-sm font-semibold text-gray-700 mb-2">Service concerné</label>
                            <select id="service" name="service"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                                <option value="">Sélectionnez un service</option>
                                <option value="achat-vente">Achat & Vente</option>
                                <option value="affretement-prive">Affrètement Privé</option>
                                <option value="affretement-commercial">Affrètement Commercial</option>
                                <option value="affretement-cargo">Affrètement Cargo</option>
                                <option value="location">Location d'aéronefs</option>
                                <option value="medevac">Evacuation Sanitaire (Medevac)</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all resize-none"
                                placeholder="Décrivez votre projet ou votre demande..."></textarea>
                        </div>

                        <div class="flex items-start">
                            <input type="checkbox" id="privacy" name="privacy" required
                                class="mt-1 w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="privacy" class="ml-2 text-sm text-gray-600">
                                J'accepte que mes données soient utilisées pour me recontacter *
                            </label>
                        </div>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 to-cyan-500 text-white py-4 rounded-lg font-semibold text-lg hover:from-blue-700 hover:to-cyan-600 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                            Envoyer le message
                        </button>
                    </form>

                    <div id="formMessage" class="hidden mt-4 p-4 rounded-lg"></div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="js/main.js"></script>
    <script src="js/contact.js"></script>
</body>
</html>
