/**
 * Premium Landing Page JavaScript
 * IntersectionObserver for scroll animations
 * Parallax effects and form handling
 */

(function() {
    'use strict';

    // ============================================
    // IntersectionObserver for Fade-in Animations
    // ============================================
    
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                // Unobserve after animation to improve performance
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all fade-in elements
    document.addEventListener('DOMContentLoaded', function() {
        const fadeElements = document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right');
        fadeElements.forEach(el => observer.observe(el));
    });

    // ============================================
    // Parallax Scroll Effect
    // ============================================
    
    let parallaxElements = document.querySelectorAll('.parallax-slow');
    
    function updateParallax() {
        const scrollY = window.pageYOffset;
        
        parallaxElements.forEach(element => {
            const rect = element.getBoundingClientRect();
            const elementTop = rect.top + scrollY;
            const elementHeight = rect.height;
            const windowHeight = window.innerHeight;
            
            // Only apply parallax when element is in viewport
            if (rect.top < windowHeight && rect.bottom > 0) {
                const scrolled = scrollY - (elementTop - windowHeight);
                const parallaxSpeed = 0.1;
                const translateY = scrolled * parallaxSpeed;
                
                element.style.transform = `translateY(${translateY}px)`;
            }
        });
    }
    
    // Throttle scroll events for performance
    let ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                updateParallax();
                ticking = false;
            });
            ticking = true;
        }
    });

    // ============================================
    // Smooth Scroll for CTA Button
    // ============================================
    
    document.addEventListener('DOMContentLoaded', function() {
        const ctaButton = document.querySelector('.btn-cta');
        if (ctaButton) {
            ctaButton.addEventListener('click', function(e) {
                e.preventDefault();
                const waitlistSection = document.getElementById('waitlist');
                if (waitlistSection) {
                    const offset = 80;
                    const elementPosition = waitlistSection.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - offset;
                    
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        }
    });

    // ============================================
    // Waitlist Form Handler
    // ============================================
    
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('waitlistForm');
        if (!form) return;

        const submitBtn = form.querySelector('.btn-submit');
        const btnText = submitBtn.querySelector('.btn-text');
        const btnLoader = submitBtn.querySelector('.btn-loader');
        const formMessage = document.getElementById('formMessage');

        // Email validation regex
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        // Form validation
        function validateForm() {
            let isValid = true;
            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const role = document.getElementById('role');

            // Reset previous states
            form.classList.remove('was-validated');
            formMessage.textContent = '';
            formMessage.className = '';

            // Validate name
            if (name.value.trim() === '') {
                showFieldError(name, 'Please enter your name');
                isValid = false;
            } else if (name.value.trim().length < 2) {
                showFieldError(name, 'Name must be at least 2 characters');
                isValid = false;
            } else {
                showFieldSuccess(name);
            }

            // Validate email
            if (email.value.trim() === '') {
                showFieldError(email, 'Please enter your email address');
                isValid = false;
            } else if (!emailRegex.test(email.value.trim())) {
                showFieldError(email, 'Please enter a valid email address');
                isValid = false;
            } else {
                showFieldSuccess(email);
            }

            // Validate role
            if (role.value === '') {
                showFieldError(role, 'Please select your role');
                isValid = false;
            } else {
                showFieldSuccess(role);
            }

            return isValid;
        }

        function showFieldError(field, message) {
            field.classList.add('is-invalid');
            field.classList.remove('is-valid');
            const feedback = field.parentElement.querySelector('.invalid-feedback');
            if (feedback) {
                feedback.textContent = message;
            }
        }

        function showFieldSuccess(field) {
            field.classList.add('is-valid');
            field.classList.remove('is-invalid');
        }

        // Form submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            if (!validateForm()) {
                form.classList.add('was-validated');
                return;
            }

            // Show loading state
            setLoadingState(true);

            // Prepare form data
            const formData = new FormData(form);
            formData.append('action', 'submit_waitlist');

            // AJAX request
            fetch('submit.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                setLoadingState(false);
                
                if (data.success) {
                    showMessage('Thank you! You\'ve been added to the waitlist.', 'success');
                    form.reset();
                    form.classList.remove('was-validated');
                    // Remove validation classes
                    form.querySelectorAll('.is-valid, .is-invalid').forEach(el => {
                        el.classList.remove('is-valid', 'is-invalid');
                    });
                } else {
                    showMessage(data.message || 'An error occurred. Please try again.', 'error');
                }
            })
            .catch(error => {
                setLoadingState(false);
                showMessage('Network error. Please check your connection and try again.', 'error');
                console.error('Error:', error);
            });
        });

        function setLoadingState(loading) {
            if (loading) {
                submitBtn.disabled = true;
                btnText.classList.add('d-none');
                btnLoader.classList.remove('d-none');
            } else {
                submitBtn.disabled = false;
                btnText.classList.remove('d-none');
                btnLoader.classList.add('d-none');
            }
        }

        function showMessage(message, type) {
            formMessage.textContent = message;
            formMessage.className = `message-${type}`;
            
            // Scroll to message if needed
            if (formMessage.getBoundingClientRect().top < 0) {
                formMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
            
            // Clear message after 5 seconds for success
            if (type === 'success') {
                setTimeout(() => {
                    formMessage.textContent = '';
                    formMessage.className = '';
                }, 5000);
            }
        }

        // Real-time validation on blur
        const inputs = form.querySelectorAll('input, select');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (form.classList.contains('was-validated')) {
                    validateForm();
                }
            });
        });
    });

    // ============================================
    // Micro-interactions for Cards
    // ============================================
    
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.feature-card, .flow-card');
        
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transition = 'all 0.4s cubic-bezier(0.4, 0, 0.2, 1)';
            });
        });
    });

    // ============================================
    // Performance: Lazy load images
    // ============================================
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                    }
                    imageObserver.unobserve(img);
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const lazyImages = document.querySelectorAll('img[data-src]');
            lazyImages.forEach(img => imageObserver.observe(img));
        });
    }

})();
