<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Mario's Pizza Palace</title>
    <link rel="stylesheet" href="<?= base_url('css/contact.css'); ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header class="header">
        <nav class="navbar">
            <div class="nav-container">
                <div class="logo">
                    <i class="fas fa-pizza-slice"></i>
                    <span>Mario's Pizza Palace</span>
                </div>
                <ul class="nav-menu">
                    <li><a href="<?= base_url('landing'); ?>">Home</a></li>

                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact" class="active">Contact</a></li>
                    <li><a href="#" class="order-btn">Order Now</a></li>
                </ul>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>

    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="contact-hero-content">
                <h1 class="contact-hero-title">
                    Get In <span class="title-accent">Touch</span>
                </h1>
                <p class="contact-hero-subtitle">
                    Have questions, feedback, or want to place a special order?
                    We'd love to hear from you! Our team is here to help.
                </p>
                <div class="quick-contact-buttons">
                    <a href="tel:5551234567" class="btn btn-primary pulse">
                        <i class="fas fa-phone"></i>
                        Call Now
                    </a>
                    <a href="#contact-form" class="btn btn-secondary">
                        <i class="fas fa-envelope"></i>
                        Send Message
                    </a>
                </div>
            </div>
        </div>
        <div class="hero-bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="floating-pizza">🍕</div>
        </div>
    </section>

    <!-- Contact Information Cards -->
    <section class="contact-info">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Multiple Ways to <span class="text-accent">Reach Us</span></h2>
                <p class="section-subtitle">Choose the most convenient way for you</p>
            </div>
            <div class="contact-cards">
                <div class="contact-card hover-lift">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Call Us</h3>
                    <p>Speak directly with our team</p>
                    <div class="contact-detail">
                        <a href="tel:5551234567">(555) 123-PIZZA</a>
                    </div>
                    <div class="contact-hours">
                        <span>Daily: 11:00 AM - 11:00 PM</span>
                    </div>
                </div>

                <div class="contact-card hover-lift">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Us</h3>
                    <p>Send us your questions or feedback</p>
                    <div class="contact-detail">
                        <a href="mailto:hello@mariospizza.com">hello@mariospizza.com</a>
                    </div>
                    <div class="contact-hours">
                        <span>Response within 24 hours</span>
                    </div>
                </div>

                <div class="contact-card hover-lift">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Visit Us</h3>
                    <p>Come see our kitchen in action</p>
                    <div class="contact-detail">
                        <span>123 Pizza Street<br>Food City, FC 12345</span>
                    </div>
                    <div class="contact-hours">
                        <span>Dine-in & Takeout Available</span>
                    </div>
                </div>

                <div class="contact-card hover-lift">
                    <div class="contact-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Live Chat</h3>
                    <p>Instant support for urgent needs</p>
                    <div class="contact-detail">
                        <button class="chat-btn" onclick="openChat()">Start Chat</button>
                    </div>
                    <div class="contact-hours">
                        <span>Available during business hours</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact-form" class="contact-form-section">
        <div class="container">
            <div class="form-wrapper">
                <div class="form-content">
                    <div class="form-header">
                        <h2>Send Us a <span class="text-accent">Message</span></h2>
                        <p>Fill out the form below and we'll get back to you as soon as possible</p>
                    </div>

                    <form class="contact-form" id="contactForm" method="POST" action="process_contact.php">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name *</label>
                                <input type="text" id="firstName" name="firstName" required>
                                <i class="fas fa-user form-icon"></i>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name *</label>
                                <input type="text" id="lastName" name="lastName" required>
                                <i class="fas fa-user form-icon"></i>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" required>
                                <i class="fas fa-envelope form-icon"></i>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone">
                                <i class="fas fa-phone form-icon"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="order">Order Issues</option>
                                <option value="catering">Catering Services</option>
                                <option value="feedback">Feedback</option>
                                <option value="complaint">Complaint</option>
                                <option value="other">Other</option>
                            </select>
                            <i class="fas fa-chevron-down form-icon"></i>
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="6" placeholder="Tell us how we can help you..." required></textarea>
                            <i class="fas fa-comment form-icon"></i>
                        </div>

                        <div class="checkbox-group form-group">
                            <input type="checkbox" id="newsletter" name="newsletter" value="yes">
                            <label for="newsletter">
                                <span class="checkbox-custom"></span>
                                Subscribe to our newsletter for exclusive offers and updates
                            </label>
                        </div>

                        <div class="checkbox-group form-group">
                            <input type="checkbox" id="privacy" name="privacy" required>
                            <label for="privacy">
                                <span class="checkbox-custom"></span>
                                I agree to the <a href="#" class="privacy-link">Privacy Policy</a> *
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-large submit-btn">
                            <i class="fas fa-paper-plane"></i>
                            <span>Send Message</span>
                            <div class="btn-loader"></div>
                        </button>
                    </form>
                </div>

                <div class="form-sidebar">
                    <div class="sidebar-card">
                        <div class="sidebar-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3>Quick Response</h3>
                        <p>We typically respond to all inquiries within 2-4 hours during business hours.</p>
                    </div>

                    <div class="sidebar-card">
                        <div class="sidebar-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3>24/7 Support</h3>
                        <p>For urgent matters, our customer support is available around the clock.</p>
                    </div>

                    <div class="sidebar-card">
                        <div class="sidebar-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Privacy Protected</h3>
                        <p>Your information is secure and will never be shared with third parties.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Find Our <span class="text-accent">Location</span></h2>
                <p class="section-subtitle">Visit us for the full Mario's Pizza Palace experience</p>
            </div>
        </div>
        <div class="map-container">
            <div class="map-placeholder">
                <div class="map-content">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Mario's Pizza Palace</h3>
                    <p>123 Pizza Street, Food City, FC 12345</p>
                    <button class="btn-outline btn get-directions-btn">
                        <i class="fas fa-directions"></i>
                        Get Directions
                    </button>
                </div>
            </div>
            <div class="location-details">
                <h3>Store Information</h3>
                <div class="location-info">
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <strong>Hours of Operation</strong>
                            <p>Monday - Sunday: 11:00 AM - 11:00 PM</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-parking"></i>
                        <div>
                            <strong>Parking</strong>
                            <p>Free parking available in our lot</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-wheelchair"></i>
                        <div>
                            <strong>Accessibility</strong>
                            <p>Wheelchair accessible entrance and seating</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-wifi"></i>
                        <div>
                            <strong>Free WiFi</strong>
                            <p>Complimentary WiFi for all customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Frequently Asked <span class="text-accent">Questions</span></h2>
                <p class="section-subtitle">Quick answers to common questions</p>
            </div>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>What are your delivery hours?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We deliver daily from 11:00 AM to 10:30 PM. Orders placed after 10:00 PM will be delivered the next day.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>Do you offer gluten-free options?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes! We offer gluten-free pizza crusts and have several gluten-free menu options. Please inform us of any allergies when ordering.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>How long does delivery usually take?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Our standard delivery time is 25-35 minutes. During peak hours (Friday-Sunday evenings), it may take up to 45 minutes.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>Do you cater events?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Absolutely! We offer catering services for events of all sizes. Contact us at least 24 hours in advance for catering orders.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFAQ(this)">
                        <h3>What payment methods do you accept?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We accept all major credit cards, debit cards, cash, and digital payments including PayPal, Apple Pay, and Google Pay.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="logo">
                        <i class="fas fa-pizza-slice"></i>
                        <span>Mario's Pizza Palace</span>
                    </div>
                    <p>Serving authentic Italian pizza since 1985. Made with love, served with pride.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contact Info</h3>
                    <p><i class="fas fa-phone"></i> (555) 123-PIZZA</p>
                    <p><i class="fas fa-envelope"></i> hello@mariospizza.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Pizza Street, Food City</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Mario's Pizza Palace. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Success Modal -->
    <div id="successModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fas fa-check-circle"></i>
                <h3>Message Sent Successfully!</h3>
            </div>
            <div class="modal-body">
                <p>Thank you for contacting Mario's Pizza Palace. We've received your message and will get back to you within 24 hours.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" onclick="closeModal()">Got it!</button>
            </div>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Form validation and submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const submitBtn = document.querySelector('.submit-btn');
            const btnText = submitBtn.querySelector('span');
            const btnLoader = submitBtn.querySelector('.btn-loader');

            // Show loading state
            submitBtn.disabled = true;
            btnText.style.display = 'none';
            btnLoader.style.display = 'block';

            // Simulate form submission
            setTimeout(() => {
                // Reset button
                submitBtn.disabled = false;
                btnText.style.display = 'inline';
                btnLoader.style.display = 'none';

                // Show success modal
                document.getElementById('successModal').style.display = 'flex';

                // Reset form
                this.reset();
            }, 2000);
        });

        // FAQ Toggle
        function toggleFAQ(element) {
            const faqItem = element.parentElement;
            const answer = faqItem.querySelector('.faq-answer');
            const icon = element.querySelector('i');

            faqItem.classList.toggle('active');

            if (faqItem.classList.contains('active')) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                icon.style.transform = 'rotate(180deg)';
            } else {
                answer.style.maxHeight = '0';
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // Modal functions
        function closeModal() {
            document.getElementById('successModal').style.display = 'none';
        }

        function openChat() {
            alert('Live chat feature will be implemented with your preferred chat service!');
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Form field focus effects
        const formInputs = document.querySelectorAll('.form-group input, .form-group select, .form-group textarea');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });

            input.addEventListener('blur', function() {
                if (this.value === '') {
                    this.parentElement.classList.remove('focused');
                }
            });
        });

        // Close modal when clicking outside
        window.addEventListener('click', function(e) {
            const modal = document.getElementById('successModal');
            if (e.target === modal) {
                closeModal();
            }
        });
    </script>
</body>

</html>