<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aero Synergy - Votre partenaire aéronautique</title>
    <meta name="description" content="Spécialisé dans la vente, l'affrètement et l'évacuation sanitaire.">
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
    <section class="relative h-screen bg-gradient-to-br from-blue-600 via-cyan-500 to-blue-400 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-1/4 right-0 w-2/3 h-2/3 opacity-20">
                <svg class="w-full h-full" viewBox="0 0 200 200">
                    <ellipse cx="100" cy="100" rx="80" ry="60" fill="#ffffff" opacity="0.4" />
                </svg>
            </div>

            <img src="resource/images/LOGO/forground.png" alt="Aero Synergy Logo"
                class="w-full h-full object-cover opacity-10">
        </div>

        <div class="container mx-auto px-4 h-full flex items-center">
            <div class="max-w-2xl z-10">
                <p class="text-white text-lg mb-4 font-light tracking-wide">Voyagez au delà de vos rêves</p>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                    Votre partenaire aéronautique
                </h1>
                <p class="text-white text-xl mb-8 max-w-xl leading-relaxed">
                    Nous sommes spécialisé dans la vente, l'affrètement et l'évacuation sanitaire.
                </p>
                <a href="contact.php"
                    class="inline-block bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Contactez nous
                </a>
            </div>

            <div class="hidden lg:block absolute right-0 bottom-0 w-1/2 h-3/4">
                <img src="resource/images/avion-1.png" alt="Aircraft"
                    class="absolute bottom-0 right-0 w-full h-auto object-contain animate-float">
            </div>
            <div class="absolute bottom-0 left-0 w-full rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 400" preserveAspectRatio="none"
                    class="w-full h-24 md:h-32">
                    <path fill="#f9fafb"
                        d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7 c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4 c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z" />
                </svg>
            </div>
        </div>

    </section>

    <!-- Services Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Nos Services</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Des solutions complètes pour tous vos besoins aéronautiques
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Achat & Vente -->
                <div
                    class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="resource/images/achat vente (1).png" alt="Achat & Vente"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Achat & Vente</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Nous vous accompagnons dans l'achat et la vente d'aéronefs avec expertise et transparence.
                        </p>
                    </div>
                </div>

                <!-- Affrètement Privé -->
                <div
                    class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="resource/images/affretement (1).png" alt="Affrètement Privé"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Affrètement Privé</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Voyagez en toute liberté avec nos services d'affrètement privé personnalisés.
                        </p>
                    </div>
                </div>

                <!-- Affrètement Commercial -->
                <div
                    class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="resource/images/image (2).png" alt="Affrètement Commercial"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Affrètement Commercial</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Solutions pour événements, séminaires, transport gouvernemental et voyages de groupe.
                        </p>
                    </div>
                </div>

                <!-- Affrètement Cargo -->
                <div
                    class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="resource/images/image (3).png" alt="Affrètement Cargo"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Affrètement Cargo</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Transport de fret aérien reconnu pour son efficacité et sa réactivité.
                        </p>
                    </div>
                </div>

                <!-- Location d'aéronefs -->
                <div
                    class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="resource/images/image (4).png" alt="Location"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Location d'aéronefs</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Services de location d'aéronefs flexibles adaptés à vos besoins spécifiques.
                        </p>
                    </div>
                </div>

                <!-- Evacuation Sanitaire -->
                <div
                    class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="resource/images/image (5).png" alt="Evacuation Sanitaire"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Evacuation Sanitaire (Medevac)</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Services d'évacuation médicale d'urgence disponibles 24/7.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Nos Partenaires</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
                <div
                    class="flex items-center justify-center p-6 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="resource/images/image (6).webp" alt="Air Burkina" class="max-h-20 w-auto">
                </div>
                <div
                    class="flex items-center justify-center p-6 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="resource/images/image (7).webp" alt="Air Sarada" class="max-h-20 w-auto">
                </div>
                <div
                    class="flex items-center justify-center p-6 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="resource/images/image (1).webp" alt="ANAC" class="max-h-20 w-auto">
                </div>
                <div
                    class="flex items-center justify-center p-6 grayscale hover:grayscale-0 transition-all duration-300">
                    <img src="resource/images/image (2).webp" alt="IPAG" class="max-h-20 w-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-cyan-500">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Prêt à décoller?</h2>
            <p class="text-xl text-white mb-8 max-w-2xl mx-auto">
                Contactez-nous dès aujourd'hui pour discuter de vos besoins aéronautiques
            </p>
            <a href="contact.php"
                class="inline-block bg-white text-blue-600 px-10 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                Contactez nous maintenant
            </a>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="js/main.js"></script>
</body>

</html>