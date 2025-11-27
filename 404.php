<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Non Trouvée | Aero Synergy</title>
    <meta name="description" content="La page que vous recherchez n'existe pas.">
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
<body class="font-sans antialiased bg-gradient-to-br from-blue-600 via-cyan-500 to-blue-400 min-h-screen flex items-center justify-center">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto text-center">
            <!-- Animated Plane -->
            <div class="mb-8 relative">
                <svg class="w-64 h-64 mx-auto animate-float" viewBox="0 0 200 200" fill="none">
                    <circle cx="100" cy="100" r="90" fill="white" opacity="0.1"/>
                    <path d="M100 40 L120 100 L180 110 L120 120 L100 180 L80 120 L20 110 L80 100 Z" fill="white" opacity="0.8"/>
                </svg>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <p class="text-9xl font-bold text-white opacity-50">404</p>
                </div>
            </div>

            <!-- Error Message -->
            <div class="bg-white rounded-2xl shadow-2xl p-8 md:p-12">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Page Non Trouvée
                </h1>
                <p class="text-xl text-gray-600 mb-8">
                    Désolé, la page que vous recherchez semble avoir décollé sans laisser de plan de vol.
                </p>

                <!-- Search Suggestions -->
                <div class="bg-blue-50 rounded-xl p-6 mb-8">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Peut-être recherchez-vous :</h2>
                    <div class="grid md:grid-cols-2 gap-4 text-left">
                        <a href="index.php" class="flex items-center space-x-3 p-3 bg-white rounded-lg hover:shadow-md transition-all duration-300">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            <span class="text-gray-700 font-medium">Page d'accueil</span>
                        </a>

                        <a href="index.php#services" class="flex items-center space-x-3 p-3 bg-white rounded-lg hover:shadow-md transition-all duration-300">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-gray-700 font-medium">Nos Services</span>
                        </a>

                        <a href="contact.php" class="flex items-center space-x-3 p-3 bg-white rounded-lg hover:shadow-md transition-all duration-300">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-gray-700 font-medium">Contact</span>
                        </a>

                        <a href="tel:+33766355564" class="flex items-center space-x-3 p-3 bg-white rounded-lg hover:shadow-md transition-all duration-300">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span class="text-gray-700 font-medium">Appelez-nous</span>
                        </a>
                    </div>
                </div>

                <!-- Emergency Medevac Notice -->
                <div class="bg-red-50 border-2 border-red-200 rounded-xl p-4 mb-8">
                    <p class="text-red-800 font-semibold">
                        ⚕️ Urgence Medevac ? Nous sommes disponibles 24/7
                    </p>
                    <a href="tel:+33766355564" class="text-red-600 font-bold text-lg hover:text-red-800 transition-colors">
                        +33 7 66 35 55 64
                    </a>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="index.php" class="inline-flex items-center justify-center space-x-2 bg-gradient-to-r from-blue-600 to-cyan-500 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:from-blue-700 hover:to-cyan-600 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        <span>Retour à l'accueil</span>
                    </a>

                    <button onclick="history.back()" class="inline-flex items-center justify-center space-x-2 bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg border-2 border-blue-600 hover:bg-blue-50 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        <span>Page précédente</span>
                    </button>
                </div>

                <!-- Help Text -->
                <p class="text-gray-500 text-sm mt-8">
                    Si vous pensez qu'il s'agit d'une erreur, veuillez
                    <a href="contact.php" class="text-blue-600 hover:text-blue-800 font-semibold underline">nous contacter</a>.
                </p>
            </div>

            <!-- Company Info -->
            <div class="mt-8 text-white">
                <p class="text-lg font-semibold mb-2">Aero Synergy</p>
                <p class="text-sm opacity-80">200 rue de la Croix Nivert, 75015 Paris, France</p>
                <p class="text-sm opacity-80">SIRET: 977 462 852 00012</p>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>
