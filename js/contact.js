// Contact Form Handler for Aero Synergy

document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    const formMessage = document.getElementById('formMessage');

    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(contactForm);
            const data = Object.fromEntries(formData.entries());

            // Validate form
            if (!validateForm(data)) {
                return;
            }

            // Show loading state
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = `
                <div class="flex items-center justify-center space-x-2">
                    <div class="spinner border-white"></div>
                    <span>Envoi en cours...</span>
                </div>
            `;

            // Simulate form submission (replace with actual AJAX call)
            setTimeout(() => {
                // For now, we'll just show a success message
                // In production, you would send this to contact_handler.php

                fetch('contact_handler.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(result => {
                    if (result.success) {
                        showFormMessage('Merci pour votre message! Nous vous recontacterons dans les plus brefs délais.', 'success');
                        contactForm.reset();
                        window.showNotification('Message envoyé avec succès!', 'success');
                    } else {
                        showFormMessage(result.message || 'Une erreur est survenue. Veuillez réessayer.', 'error');
                        window.showNotification('Erreur lors de l\'envoi du message', 'error');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showFormMessage('Une erreur est survenue. Veuillez nous contacter directement par téléphone.', 'error');
                    window.showNotification('Erreur lors de l\'envoi du message', 'error');
                })
                .finally(() => {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                });

            }, 1500);
        });
    }

    function validateForm(data) {
        // Reset previous errors
        clearErrors();

        let isValid = true;

        // Validate name
        if (!data.name || data.name.trim().length < 2) {
            showError('name', 'Veuillez entrer un nom valide');
            isValid = false;
        }

        // Validate email
        if (!data.email || !window.validateEmail(data.email)) {
            showError('email', 'Veuillez entrer une adresse email valide');
            isValid = false;
        }

        // Validate phone (optional but if provided, must be valid)
        if (data.phone && !window.validatePhone(data.phone)) {
            showError('phone', 'Veuillez entrer un numéro de téléphone valide');
            isValid = false;
        }

        // Validate message
        if (!data.message || data.message.trim().length < 10) {
            showError('message', 'Veuillez entrer un message d\'au moins 10 caractères');
            isValid = false;
        }

        // Validate privacy checkbox
        if (!data.privacy) {
            showError('privacy', 'Vous devez accepter la politique de confidentialité');
            isValid = false;
        }

        return isValid;
    }

    function showError(fieldName, message) {
        const field = document.getElementById(fieldName);
        if (!field) return;

        field.classList.add('border-red-500');

        const errorDiv = document.createElement('div');
        errorDiv.className = 'text-red-500 text-sm mt-1 error-message';
        errorDiv.textContent = message;

        if (fieldName === 'privacy') {
            field.parentElement.appendChild(errorDiv);
        } else {
            field.parentElement.appendChild(errorDiv);
        }
    }

    function clearErrors() {
        // Remove error classes
        const fields = contactForm.querySelectorAll('input, textarea, select');
        fields.forEach(field => {
            field.classList.remove('border-red-500');
        });

        // Remove error messages
        const errorMessages = contactForm.querySelectorAll('.error-message');
        errorMessages.forEach(msg => msg.remove());
    }

    function showFormMessage(message, type) {
        if (!formMessage) return;

        formMessage.className = `mt-4 p-4 rounded-lg ${
            type === 'success' ? 'bg-green-50 text-green-800 border border-green-200' : 'bg-red-50 text-red-800 border border-red-200'
        }`;

        formMessage.innerHTML = `
            <div class="flex items-start space-x-3">
                <svg class="w-6 h-6 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    ${type === 'success' ?
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>' :
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>'
                    }
                </svg>
                <div>
                    <p class="font-semibold">${type === 'success' ? 'Succès!' : 'Erreur'}</p>
                    <p class="mt-1">${message}</p>
                </div>
            </div>
        `;

        formMessage.classList.remove('hidden');

        // Scroll to message
        formMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });

        // Auto-hide success messages after 10 seconds
        if (type === 'success') {
            setTimeout(() => {
                formMessage.classList.add('hidden');
            }, 10000);
        }
    }

    // Real-time validation
    const inputs = contactForm.querySelectorAll('input, textarea');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            const errorMessage = this.parentElement.querySelector('.error-message');
            if (errorMessage) {
                errorMessage.remove();
                this.classList.remove('border-red-500');
            }
        });

        input.addEventListener('input', function() {
            if (this.classList.contains('border-red-500')) {
                const errorMessage = this.parentElement.querySelector('.error-message');
                if (errorMessage) {
                    errorMessage.remove();
                }
                this.classList.remove('border-red-500');
            }
        });
    });

    // Character counter for message field
    const messageField = document.getElementById('message');
    if (messageField) {
        const counter = document.createElement('div');
        counter.className = 'text-sm text-gray-500 mt-1 text-right';
        messageField.parentElement.appendChild(counter);

        messageField.addEventListener('input', function() {
            const length = this.value.length;
            const minLength = 10;
            const maxLength = 1000;

            if (length < minLength) {
                counter.textContent = `${minLength - length} caractères minimum requis`;
                counter.className = 'text-sm text-red-500 mt-1 text-right';
            } else if (length > maxLength) {
                counter.textContent = `${length - maxLength} caractères en trop`;
                counter.className = 'text-sm text-red-500 mt-1 text-right';
                this.value = this.value.substring(0, maxLength);
            } else {
                counter.textContent = `${length}/${maxLength} caractères`;
                counter.className = 'text-sm text-gray-500 mt-1 text-right';
            }
        });
    }

    // Service selection auto-fill based on URL parameter
    const urlParams = new URLSearchParams(window.location.search);
    const serviceParam = urlParams.get('service');
    if (serviceParam) {
        const serviceSelect = document.getElementById('service');
        if (serviceSelect) {
            serviceSelect.value = serviceParam;
        }
    }
});
