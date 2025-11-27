// Main JavaScript for Aero Synergy website

// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {

    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            const isOpen = mobileMenu.classList.contains('open');

            if (isOpen) {
                mobileMenu.classList.remove('open');
                mobileMenu.classList.add('closed');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            } else {
                mobileMenu.classList.remove('closed');
                mobileMenu.classList.add('open');
                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            }
        });

        // Close mobile menu when clicking on a link
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.remove('open');
                mobileMenu.classList.add('closed');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            });
        });
    }

    // Back to Top Button
    const backToTopBtn = document.getElementById('backToTop');

    if (backToTopBtn) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.remove('opacity-0', 'invisible');
                backToTopBtn.classList.add('opacity-100', 'visible');
            } else {
                backToTopBtn.classList.remove('opacity-100', 'visible');
                backToTopBtn.classList.add('opacity-0', 'invisible');
            }
        });

        backToTopBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // Smooth Scroll for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');

            // Ignore if href is just "#"
            if (href === '#') return;

            e.preventDefault();

            const targetId = href.substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                const headerOffset = 80; // Height of fixed header
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Active Navigation Link Highlighting
    const navLinks = document.querySelectorAll('.nav-link');
    const currentPage = window.location.pathname.split('/').pop() || 'index.php';

    navLinks.forEach(link => {
        const linkPage = link.getAttribute('href').split('/').pop().split('#')[0];
        if (linkPage === currentPage) {
            link.classList.add('active');
        }
    });

    // Intersection Observer for Fade-in Animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all service cards and sections
    const animatedElements = document.querySelectorAll('.service-card, section > div');
    animatedElements.forEach(el => {
        observer.observe(el);
    });

    // Lazy Loading Images
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src || img.src;
                img.classList.remove('lazy');
                img.classList.add('loaded');
                imageObserver.unobserve(img);
            }
        });
    });

    const lazyImages = document.querySelectorAll('img.lazy');
    lazyImages.forEach(img => imageObserver.observe(img));

    // Form Validation Helper
    window.validateEmail = function(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    };

    window.validatePhone = function(phone) {
        const re = /^[\d\s\+\-\(\)]+$/;
        return re.test(phone);
    };

    // Show/Hide Loading Spinner
    window.showLoader = function(element) {
        const loader = document.createElement('div');
        loader.className = 'spinner mx-auto';
        loader.id = 'loader';
        element.appendChild(loader);
    };

    window.hideLoader = function() {
        const loader = document.getElementById('loader');
        if (loader) {
            loader.remove();
        }
    };

    // Alert/Notification System
    window.showNotification = function(message, type = 'success') {
        const notification = document.createElement('div');
        const bgColor = type === 'success' ? 'bg-green-500' : type === 'error' ? 'bg-red-500' : 'bg-blue-500';

        notification.className = `fixed top-24 right-4 ${bgColor} text-white px-6 py-4 rounded-lg shadow-lg z-50 transition-all duration-300 transform translate-x-0`;
        notification.innerHTML = `
            <div class="flex items-center space-x-3">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    ${type === 'success' ?
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>' :
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>'
                    }
                </svg>
                <span>${message}</span>
            </div>
        `;

        document.body.appendChild(notification);

        // Auto remove after 5 seconds
        setTimeout(() => {
            notification.classList.add('translate-x-full', 'opacity-0');
            setTimeout(() => notification.remove(), 300);
        }, 5000);

        // Click to dismiss
        notification.addEventListener('click', function() {
            notification.classList.add('translate-x-full', 'opacity-0');
            setTimeout(() => notification.remove(), 300);
        });
    };

    // Phone Number Formatter
    const phoneInputs = document.querySelectorAll('input[type="tel"]');
    phoneInputs.forEach(input => {
        input.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 0) {
                // Format: +33 X XX XX XX XX
                if (value.startsWith('33')) {
                    value = '+33 ' + value.slice(2).match(/.{1,2}/g)?.join(' ') || value.slice(2);
                } else if (value.startsWith('0')) {
                    value = '+33 ' + value.slice(1).match(/.{1,2}/g)?.join(' ') || value.slice(1);
                }
            }
            e.target.value = value;
        });
    });

    // Header Scroll Effect
    let lastScroll = 0;
    const header = document.querySelector('header');

    if (header) {
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 100) {
                header.classList.add('shadow-lg');
            } else {
                header.classList.remove('shadow-lg');
            }

            // Hide/show header on scroll
            if (currentScroll > lastScroll && currentScroll > 500) {
                header.style.transform = 'translateY(-100%)';
            } else {
                header.style.transform = 'translateY(0)';
            }

            lastScroll = currentScroll;
        });
    }

    // Service Card Hover Effect Enhancement
    const serviceCards = document.querySelectorAll('.service-card, .group');
    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    // Performance: Preload critical images
    const criticalImages = [
        'resource/images/LOGO.png',
        'resource/images/image (1).png'
    ];

    criticalImages.forEach(src => {
        const link = document.createElement('link');
        link.rel = 'preload';
        link.as = 'image';
        link.href = src;
        document.head.appendChild(link);
    });

    // Console welcome message
    console.log('%cAero Synergy', 'font-size: 24px; font-weight: bold; color: #1e90ff;');
    console.log('%cVotre partenaire aéronautique de confiance', 'font-size: 14px; color: #666;');
    console.log('%c🚀 Site développé avec PHP, JavaScript & Tailwind CSS', 'font-size: 12px; color: #00bcd4;');

});

// Utility Functions

// Debounce function for performance
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Throttle function for scroll events
function throttle(func, limit) {
    let inThrottle;
    return function(...args) {
        if (!inThrottle) {
            func.apply(this, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}

// Check if element is in viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Export functions for use in other scripts
window.AeroSynergy = {
    debounce,
    throttle,
    isInViewport,
    validateEmail: window.validateEmail,
    validatePhone: window.validatePhone,
    showLoader: window.showLoader,
    hideLoader: window.hideLoader,
    showNotification: window.showNotification
};
