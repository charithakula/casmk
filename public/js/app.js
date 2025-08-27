// MAIN APPLICATION JAVASCRIPT - public/js/app.js

// Utility Functions
const Utils = {
    // Debounce function for performance optimization
    debounce: function(func, wait, immediate) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                timeout = null;
                if (!immediate) func(...args);
            };
            const callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func(...args);
        };
    },

    // Throttle function
    throttle: function(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    },

    // Format phone number
    formatPhoneNumber: function(phoneNumber) {
        const cleaned = ('' + phoneNumber).replace(/\D/g, '');
        const match = cleaned.match(/^(\d{2})(\d{5})(\d{5})$/);
        if (match) {
            return '+91 ' + match[1] + ' ' + match[2] + ' ' + match[3];
        }
        return phoneNumber;
    },

    // Validate email
    isValidEmail: function(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    },

    // Show notification
    showNotification: function(message, type = 'info', duration = 3000) {
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.innerHTML = `
            <div class="notification-content">
                <span class="notification-message">${message}</span>
                <button class="notification-close">&times;</button>
            </div>
        `;

        // Add to body
        document.body.appendChild(notification);

        // Show notification
        setTimeout(() => {
            notification.classList.add('show');
        }, 100);

        // Auto remove
        const removeNotification = () => {
            notification.classList.remove('show');
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 300);
        };

        // Remove on click
        const closeBtn = notification.querySelector('.notification-close');
        closeBtn.addEventListener('click', removeNotification);

        // Auto remove after duration
        setTimeout(removeNotification, duration);
    }
};

// Animation Observer for scroll animations
const AnimationObserver = {
    init: function() {
        if (typeof IntersectionObserver === 'undefined') {
            return; // Fallback for older browsers
        }

        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);

        // Observe elements with animation classes
        const animatedElements = document.querySelectorAll(
            '.service-card, .feature-card, .stat-card, .hero-card, .about-card'
        );
        
        animatedElements.forEach(el => {
            el.classList.add('animate-on-scroll');
            observer.observe(el);
        });
    }
};

// Form Handler
const FormHandler = {
    init: function() {
        // Contact forms
        const contactForms = document.querySelectorAll('form[action*="contact"]');
        contactForms.forEach(form => {
            form.addEventListener('submit', this.handleContactForm);
        });

        // Newsletter forms
        const newsletterForms = document.querySelectorAll('.newsletter-form');
        newsletterForms.forEach(form => {
            form.addEventListener('submit', this.handleNewsletterForm);
        });

        // Quote request forms
        const quoteForms = document.querySelectorAll('form[action*="quote"]');
        quoteForms.forEach(form => {
            form.addEventListener('submit', this.handleQuoteForm);
        });

        // Real-time form validation
        this.initFormValidation();
    },

    handleContactForm: function(e) {
        e.preventDefault();
        
        const form = e.target;
        const formData = new FormData(form);
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;

        // Show loading state
        submitBtn.textContent = 'Sending...';
        submitBtn.disabled = true;

        // Submit form
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Utils.showNotification('Message sent successfully! We\'ll get back to you soon.', 'success');
                form.reset();
            } else {
                throw new Error(data.message || 'Failed to send message');
            }
        })
        .catch(error => {
            console.error('Contact form error:', error);
            Utils.showNotification('Failed to send message. Please try again.', 'error');
        })
        .finally(() => {
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        });
    },

    handleNewsletterForm: function(e) {
        e.preventDefault();
        
        const form = e.target;
        const emailInput = form.querySelector('input[type="email"]');
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;

        if (!Utils.isValidEmail(emailInput.value)) {
            Utils.showNotification('Please enter a valid email address.', 'error');
            return;
        }

        // Show loading state
        submitBtn.textContent = 'Subscribing...';
        submitBtn.disabled = true;

        const formData = new FormData(form);

        fetch(form.action || '/newsletter/subscribe', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Utils.showNotification('Successfully subscribed to our newsletter!', 'success');
                form.reset();
            } else {
                throw new Error(data.message || 'Subscription failed');
            }
        })
        .catch(error => {
            console.error('Newsletter subscription error:', error);
            Utils.showNotification('Subscription failed. Please try again.', 'error');
        })
        .finally(() => {
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        });
    },

    handleQuoteForm: function(e) {
        e.preventDefault();
        
        const form = e.target;
        const formData = new FormData(form);
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;

        // Show loading state
        submitBtn.textContent = 'Sending Request...';
        submitBtn.disabled = true;

        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Utils.showNotification('Quote request sent! We\'ll contact you with details.', 'success');
                form.reset();
            } else {
                throw new Error(data.message || 'Failed to send quote request');
            }
        })
        .catch(error => {
            console.error('Quote form error:', error);
            Utils.showNotification('Failed to send request. Please try again.', 'error');
        })
        .finally(() => {
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        });
    },

    initFormValidation: function() {
        const forms = document.querySelectorAll('form');
        
        forms.forEach(form => {
            const inputs = form.querySelectorAll('input, textarea, select');
            
            inputs.forEach(input => {
                // Real-time validation
                input.addEventListener('blur', this.validateField);
                input.addEventListener('input', Utils.debounce(this.validateField, 300));
            });
        });
    },

    validateField: function(e) {
        const field = e.target;
        const value = field.value.trim();
        const fieldType = field.type;
        const isRequired = field.hasAttribute('required');

        // Remove existing validation classes
        field.classList.remove('is-valid', 'is-invalid');

        // Check if field is required and empty
        if (isRequired && !value) {
            field.classList.add('is-invalid');
            return false;
        }

        // Skip validation if field is empty and not required
        if (!value && !isRequired) {
            return true;
        }

        // Type-specific validation
        let isValid = true;

        switch (fieldType) {
            case 'email':
                isValid = Utils.isValidEmail(value);
                break;
            case 'tel':
                isValid = /^\+?[\d\s-()]{10,}$/.test(value);
                break;
            case 'url':
                try {
                    new URL(value);
                    isValid = true;
                } catch {
                    isValid = false;
                }
                break;
            default:
                // Text fields
                if (field.minLength && value.length < field.minLength) {
                    isValid = false;
                }
                break;
        }

        // Apply validation class
        field.classList.add(isValid ? 'is-valid' : 'is-invalid');
        return isValid;
    }
};

// Phone number click-to-call
const PhoneHandler = {
    init: function() {
        const phoneLinks = document.querySelectorAll('a[href^="tel:"]');
        
        phoneLinks.forEach(link => {
            // Format display text
            const phoneText = link.textContent.replace(/\D/g, '');
            if (phoneText.length === 10) {
                link.textContent = Utils.formatPhoneNumber(phoneText);
            }

            // Add click tracking
            link.addEventListener('click', function() {
                // Track phone call event (Google Analytics, etc.)
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'phone_call', {
                        'phone_number': this.href.replace('tel:', '')
                    });
                }
            });
        });
    }
};

// Loading States
const LoadingStates = {
    show: function(element, text = 'Loading...') {
        if (element) {
            element.style.position = 'relative';
            element.style.pointerEvents = 'none';
            
            const loader = document.createElement('div');
            loader.className = 'loading-overlay';
            loader.innerHTML = `
                <div class="loading-spinner">
                    <div class="spinner"></div>
                    <span>${text}</span>
                </div>
            `;
            
            element.appendChild(loader);
        }
    },

    hide: function(element) {
        if (element) {
            const loader = element.querySelector('.loading-overlay');
            if (loader) {
                loader.remove();
                element.style.pointerEvents = '';
            }
        }
    }
};

// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Initialize modules
    AnimationObserver.init();
    FormHandler.init();
    PhoneHandler.init();

    // Add smooth scroll behavior
    document.documentElement.style.scrollBehavior = 'smooth';

    // Handle external links
    const externalLinks = document.querySelectorAll('a[href^="http"]');
    externalLinks.forEach(link => {
        if (!link.href.includes(window.location.hostname)) {
            link.setAttribute('target', '_blank');
            link.setAttribute('rel', 'noopener noreferrer');
        }
    });

    // Performance monitoring
    if ('performance' in window) {
        window.addEventListener('load', function() {
            const loadTime = performance.timing.loadEventEnd - performance.timing.navigationStart;
            console.log(`Page load time: ${loadTime}ms`);
        });
    }

    // Service Worker registration (if available)
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/sw.js')
            .then(registration => {
                console.log('ServiceWorker registered:', registration.scope);
            })
            .catch(error => {
                console.log('ServiceWorker registration failed:', error);
            });
    }
});

// Export utilities for use in other scripts
window.CAUtils = Utils;
window.LoadingStates = LoadingStates;