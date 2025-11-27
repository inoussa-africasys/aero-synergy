<!-- Navigation Header -->
<header class="fixed top-0 left-0 right-0 z-50 bg-gradient-to-br from-blue-600 via-cyan-500 to-blue-400 overflow-hidden backdrop-blur-sm shadow-md">
    <nav class="container mx-auto px-4">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="index.php" class="flex items-center space-x-3 group">
                <img src="resource/images/LOGO.png" alt="Aero Synergy Logo" class="h-12 w-auto transition-transform group-hover:scale-105">
                <span class="text-xl font-bold text-gray-100 hidden sm:block">Aero Synergy</span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8 ">
                <a href="/index.php" class="nav-link text-gray-100 hover:text-blue-600 font-medium transition-colors">
                    Accueil
                </a>
                <a href="/services.php" class="nav-link text-gray-100 hover:text-blue-600 font-medium transition-colors">
                    Services
                </a>
                <a href="/contact.php" class="nav-link text-gray-100 hover:text-blue-600 font-medium transition-colors">
                    Contact
                </a>
                <a href="tel:+33766355564" class="flex items-center space-x-2 text-blue-100 hover:text-blue-300 font-semibold transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>+33 7 66 35 55 64</span>
                </a>
            </div>

            <!-- Mobile menu button -->
            <button id="mobileMenuBtn" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors" aria-label="Menu">
                <svg id="menuIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg id="closeIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobileMenu" class="mobile-menu closed md:hidden">
            <div class="py-4 space-y-4 border-t border-gray-200">
                <a href="index.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors font-medium">
                    Accueil
                </a>
                <a href="index.php#services" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors font-medium">
                    Services
                </a>
                <a href="contact.php" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors font-medium">
                    Contact
                </a>
                <a href="tel:+33766355564" class="block px-4 py-2 bg-blue-50 text-blue-600 rounded-lg font-semibold">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span>+33 7 66 35 55 64</span>
                    </div>
                </a>
            </div>
        </div>
    </nav>
</header>

<!-- Spacer to prevent content from hiding under fixed header -->
<div class="h-20"></div>
