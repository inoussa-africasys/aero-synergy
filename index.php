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
                    },
                    animation: {
                        'loop-scroll': 'loop-scroll 50s linear infinite',
                    },
                    keyframes: {
                        'loop-scroll': {
                            from: {
                                transform: 'translateX(0)'
                            },
                            to: {
                                transform: 'translateX(-100%)'
                            },
                        }
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

    <!-- Partner Section -->
    <section class="relative py-20 bg-gradient-to-br from-blue-50 via-cyan-50 to-blue-100 overflow-hidden">
        <!-- Decorative Wave Top -->
        <div class="absolute top-0 left-0 w-full">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"
                class="w-full h-16 md:h-24">
                <path fill="#f9fafb"
                    d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z" />
            </svg>
        </div>

        <div class="container mx-auto px-4 pt-16">
            <div class="grid md:grid-cols-5 gap-12 items-center">
                <!-- Left: Image with decorative shapes -->
                <div class="md:col-span-2 relative slide-in-left">
                    <!-- Large light blue oval -->
                    <div
                        class="absolute -top-10 -left-10 w-80 h-80 bg-blue-200 rounded-full opacity-30 blur-3xl animate-float">
                    </div>
                    <!-- Small purple/pink oval -->
                    <div class="absolute -bottom-10 -right-10 w-60 h-60 bg-purple-200 rounded-full opacity-20 blur-2xl animate-float"
                        style="animation-delay: 1s; animation-duration: 8s;">
                    </div>

                    <!-- Pilot image -->
                    <div class="relative z-10">
                        <img src="resource/images/pilot.jpg" alt="Professional Pilot"
                            class="w-full h-auto rounded-[3rem] shadow-2xl object-cover">
                    </div>
                </div>

                <!-- Right: Text Content -->
                <div class="md:col-span-3 space-y-6 slide-in-right">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 leading-tight">
                        Votre partenaire privilégié dans les Airs et sur Terre
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Notre équipe professionnelle est toujours présente pour vous accompagner dans vos projets
                        aéronautiques.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-row items-center mb-12 justify-between gap-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Explorez nos services</h2>
                    <p class=" text-gray-600 max-w-2xl mx-auto">
                        Des solutions complètes pour tous vos besoins aéronautiques
                    </p>
                </div>
                <a href="services.php"
                    class="inline-flex items-center gap-2
          bg-gradient-to-br from-blue-600 via-cyan-500 to-blue-400 overflow-hidden
          text-white px-7 py-3 rounded-xl font-semibold text-lg
          shadow-lg hover:shadow-2xl transition-all duration-300
          transform hover:-translate-y-1 hover:brightness-110">
                    Tous nos services
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>




            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Achat & Vente -->
                <div
                    class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2 flex flex-col">
                    <div class="h-64 overflow-hidden">
                        <img src="resource/images/achat vente (1).png" alt="Achat & Vente"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Achat & Vente</h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Nous vous accompagnons dans l'achat et la vente d'aéronefs avec expertise et transparence.
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
                <div
                    class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2 flex flex-col">
                    <div class="h-64 overflow-hidden">
                        <img src="resource/images/affretement (1).png" alt="Affrètement Privé"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Affrètement Privé</h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Voyagez en toute liberté avec nos services d'affrètement privé personnalisés.
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
                <div
                    class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2 flex flex-col">
                    <div class="h-64 overflow-hidden">
                        <img src="resource/images/image (2).png" alt="Affrètement Commercial"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Affrètement Commercial</h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Solutions pour événements, séminaires, transport gouvernemental et voyages de groupe.
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
                <div
                    class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2 flex flex-col">
                    <div class="h-64 overflow-hidden">
                        <img src="resource/images/image (3).png" alt="Affrètement Cargo"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Affrètement Cargo</h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Transport de fret aérien reconnu pour son efficacité et sa réactivité.
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
                <div
                    class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2 flex flex-col">
                    <div class="h-64 overflow-hidden">
                        <img src="resource/images/image (4).png" alt="Location"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Location d'aéronefs</h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Services de location d'aéronefs flexibles adaptés à vos besoins spécifiques.
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
                <div
                    class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2 flex flex-col">
                    <div class="h-64 overflow-hidden">
                        <img src="resource/images/image (5).png" alt="Evacuation Sanitaire"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Evacuation Sanitaire (Medevac)</h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Services d'évacuation médicale d'urgence disponibles 24/7.
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
    </section>

    <!-- Partners Section -->
    <section class="py-20 bg-white overflow-hidden">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Nos Partenaires</h2>

            <?php
            $dir = 'resource/images/partenaires';
            $images = [];
            if (is_dir($dir)) {
                $files = scandir($dir);
                $images = array_filter($files, function ($file) {
                    return !in_array($file, ['.', '..', '.DS_Store']) && !str_starts_with($file, '.');
                });
            }
            ?>

            <div class="flex overflow-hidden space-x-16 group">
                <!-- First set of images -->
                <div class="flex space-x-16 animate-loop-scroll group-hover:paused">
                    <?php foreach ($images as $image): ?>
                        <div class="flex-shrink-0 w-48 h-32 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="<?php echo $dir . '/' . $image; ?>" alt="Partner" class="max-h-full max-w-full object-contain">
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Duplicate set for seamless scrolling -->
                <div class="flex space-x-16 animate-loop-scroll group-hover:paused" aria-hidden="true">
                    <?php foreach ($images as $image): ?>
                        <div class="flex-shrink-0 w-48 h-32 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-300">
                            <img src="<?php echo $dir . '/' . $image; ?>" alt="Partner" class="max-h-full max-w-full object-contain">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative py-8 bg-gradient-to-br from-blue-600 via-cyan-500 to-blue-400 overflow-hidden">
        <!-- Diagonal Shape -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-full">
                <svg class="absolute top-0 left-0 w-full h-full" viewBox="0 0 1440 600" preserveAspectRatio="none">
                    <path fill="#2b7a9e" d="M0,0 L1440,0 L900,600 L0,600 Z" opacity="0.3" />
                </svg>
            </div>
        </div>

        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left: Text Content -->
                <div class="relative z-10">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-light text-white mb-10 leading-tight font-bold">
                        Prêt à faire décoller votre projet
                    </h2>
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

                <!-- Right: Image with organic shape -->
                <div class="relative z-10 hidden lg:block">
                    <div class="relative">
                        <!-- Organic rounded shape container -->
                        <div class="relative overflow-hidden  shadow-2xl rounded-tl-[14rem] rounded-r-[3rem] rounded-b-[3rem]"
                            style="clip-path: ellipse(85% 90% at 50% 50%);">
                            <img src="resource/images/CTA-Home-page-New.png" alt="Team working together"
                                class="w-full h-auto object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="js/main.js"></script>
</body>

</html>