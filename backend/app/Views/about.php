<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Mario's Pizza Palace</title>
    <link rel="stylesheet" href="<?= base_url('css/about.css'); ?>">

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
                    <li><a href="<?= site_url('home'); ?>">Home</a></li>
                    <li><a href="<?= site_url('menu'); ?>">Menu</a></li>
                    <li><a href="<?= site_url('about'); ?>" class="active">About</a></li>
                    <li><a href="<?= site_url('contact'); ?>">Contact</a></li>
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

    <!-- Hero Section -->
    <section class="about-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">
                    Our <span class="title-accent">Story</span>
                    <br>Since <span class="title-accent">1985</span>
                </h1>
                <p class="hero-subtitle">
                    From a small family kitchen to the heart of the community, Mario's Pizza Palace has been serving
                    authentic Italian flavors with love and passion for nearly four decades.
                </p>
            </div>
            <div class="hero-image">
                <div class="story-visual">
                    <div class="chef-icon">👨‍🍳</div>
                    <div class="story-glow"></div>
                </div>
            </div>
        </div>
        <div class="hero-bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>
    </section>

    <!-- Story Timeline -->
    <section class="story-timeline">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our <span class="text-accent">Journey</span></h2>
                <p class="section-subtitle">Four decades of passion, tradition, and incredible pizza</p>
            </div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">1985</div>
                    <div class="timeline-content">
                        <h3>The Beginning</h3>
                        <p>Mario Rossi opened the first Mario's Pizza Palace in a small storefront with just two tables and a dream to bring authentic Italian pizza to our community.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">1992</div>
                    <div class="timeline-content">
                        <h3>Family Tradition</h3>
                        <p>Mario's son, Giuseppe, joined the business, bringing new recipes passed down through generations and expanding our menu with traditional Italian dishes.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2005</div>
                    <div class="timeline-content">
                        <h3>Community Favorite</h3>
                        <p>Named "Best Pizza in Town" for the fifth consecutive year. We expanded to our current location and introduced our famous wood-fired oven.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2024</div>
                    <div class="timeline-content">
                        <h3>Award Winning</h3>
                        <p>Awarded "Best Pizza 2024" and now serving over 50,000 happy customers. We've embraced technology while preserving our traditional cooking methods.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="values">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our <span class="text-accent">Values</span></h2>
                <p class="section-subtitle">What drives us every single day</p>
            </div>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Made with Love</h3>
                    <p>Every pizza is crafted with passion and care, just like Nonna used to make. We put our heart into every dish we serve.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Fresh & Natural</h3>
                    <p>We source the finest ingredients daily from local suppliers, ensuring every bite is bursting with fresh, natural flavors.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Community First</h3>
                    <p>We're not just a restaurant; we're part of the community. Supporting local events and bringing people together over great food.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Excellence</h3>
                    <p>From our secret sauce recipe to our perfectly baked crusts, we never compromise on quality and strive for perfection in every pizza.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet the Team -->
    <section class="team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Meet Our <span class="text-accent">Family</span></h2>
                <p class="section-subtitle">The passionate people behind your favorite pizza</p>
            </div>
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-image">
                        <div class="member-emoji">👨‍🍳</div>
                        <div class="member-glow"></div>
                    </div>
                    <div class="member-info">
                        <h3>Mario Rossi</h3>
                        <p class="member-title">Founder & Head Chef</p>
                        <p class="member-description">With over 40 years of experience, Mario brings authentic Italian flavors from his hometown of Naples to every pizza.</p>
                    </div>
                </div>
                <div class="team-member">
                    <div class="member-image">
                        <div class="member-emoji">👨‍💼</div>
                        <div class="member-glow"></div>
                    </div>
                    <div class="member-info">
                        <h3>Giuseppe Rossi</h3>
                        <p class="member-title">General Manager</p>
                        <p class="member-description">Giuseppe oversees daily operations and ensures every customer leaves with a smile and a satisfied appetite.</p>
                    </div>
                </div>
                <div class="team-member">
                    <div class="member-image">
                        <div class="member-emoji">👩‍🍳</div>
                        <div class="member-glow"></div>
                    </div>
                    <div class="member-info">
                        <h3>Sofia Martinez</h3>
                        <p class="member-title">Sous Chef</p>
                        <p class="member-description">Sofia brings creativity and innovation to our kitchen while respecting traditional Italian cooking techniques.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards & Recognition -->
    <section class="awards">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Awards & <span class="text-accent">Recognition</span></h2>
                <p class="section-subtitle">Celebrating our achievements and community support</p>
            </div>
            <div class="awards-grid">
                <div class="award-item">
                    <div class="award-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3>Best Pizza 2024</h3>
                    <p>City Food Awards</p>
                </div>
                <div class="award-item">
                    <div class="award-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3>Excellence in Service</h3>
                    <p>Restaurant Association</p>
                </div>
                <div class="award-item">
                    <div class="award-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Community Choice</h3>
                    <p>Local Business Awards</p>
                </div>
                <div class="award-item">
                    <div class="award-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>4.9 Rating</h3>
                    <p>Customer Reviews</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Visit Us CTA -->
    <section class="visit-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Experience Our Story?</h2>
                <p>Come visit us and taste the tradition that has been 40 years in the making</p>
                <div class="cta-buttons">
                    <button class="btn btn-primary btn-large">
                        <i class="fas fa-utensils"></i>
                        Reserve a Table
                    </button>
                    <button class="btn btn-secondary btn-large">
                        <i class="fas fa-phone"></i>
                        Call Us Now
                    </button>
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
                        <li><a href="<?= site_url('menu'); ?>">Menu</a></li>
                        <li><a href="<?= site_url('about'); ?>">About Us</a></li>
                        <li><a href="<?= site_url('contact'); ?>">Contact</a></li>
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

    <script>
        // Mobile menu toggle
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Smooth scrolling
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

        // Add scroll effect to navbar
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Timeline animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, observerOptions);

        // Observe timeline items
        document.querySelectorAll('.timeline-item').forEach(item => {
            observer.observe(item);
        });

        // Observe value cards
        document.querySelectorAll('.value-card').forEach(card => {
            observer.observe(card);
        });

        // Observe team members
        document.querySelectorAll('.team-member').forEach(member => {
            observer.observe(member);
        });
    </script>
</body>

</html>