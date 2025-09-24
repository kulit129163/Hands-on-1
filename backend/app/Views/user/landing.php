<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mario's Pizza Palace - Authentic Italian Pizza</title>
    <link rel="stylesheet" href="css/style.css">
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
                    <li><a href="#home">Home</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="<?= site_url('about'); ?>">About</a></li>
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
    <section id="home" class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">
                    <span class="title-accent">Fresh</span> Hot Pizza
                    <br>Delivered in <span class="title-accent">30 Minutes</span>
                </h1>
                <p class="hero-subtitle">
                    Experience the authentic taste of Italy with our hand-tossed pizzas made from the finest ingredients.
                    Crispy crust, melted cheese, and flavors that will transport you straight to Naples.
                </p>
                <div class="hero-buttons">
                    <button class="btn btn-primary pulse">
                        <i class="fas fa-shopping-cart"></i>
                        Order Now - $12.99
                    </button>
                    <button class="btn btn-secondary">
                        <i class="fas fa-play"></i>
                        Watch Our Story
                    </button>
                </div>
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">50K+</span>
                        <span class="stat-label">Happy Customers</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">4.9</span>
                        <span class="stat-label">Rating</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">30min</span>
                        <span class="stat-label">Delivery</span>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <div class="pizza-container">
                    <div class="pizza-glow"></div>
                    <div class="floating pizza-slice">🍕</div>
                </div>
            </div>
        </div>
        <div class="hero-bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>
    </section>

    <!-- Special Offers -->
    <section class="offers">
        <div class="container">
            <div class="offer-banner">
                <div class="offer-content">
                    <h2>🔥 Limited Time Offer!</h2>
                    <p>Buy 2 Large Pizzas and Get 1 FREE - Use Code: PIZZA3FREE</p>
                </div>
                <div class="offer-timer">
                    <div class="timer-box">
                        <span class="timer-number" id="hours">12</span>
                        <span class="timer-label">Hours</span>
                    </div>
                    <div class="timer-box">
                        <span class="timer-number" id="minutes">45</span>
                        <span class="timer-label">Minutes</span>
                    </div>
                    <div class="timer-box">
                        <span class="timer-number" id="seconds">30</span>
                        <span class="timer-label">Seconds</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Pizzas -->
    <section id="menu" class="menu">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our <span class="text-accent">Signature</span> Pizzas</h2>
                <p class="section-subtitle">Crafted with love, served with pride</p>
            </div>
            <div class="pizza-grid">
                <div class="pizza-card hover-lift">
                    <div class="pizza-image">
                        <div class="pizza-emoji">🍕</div>
                        <div class="pizza-badge">Best Seller</div>
                    </div>
                    <div class="pizza-content">
                        <h3>Margherita Supreme</h3>
                        <p>Fresh mozzarella, basil, tomato sauce, and a touch of olive oil on our signature crust</p>
                        <div class="pizza-price">
                            <span class="price">$16.99</span>
                            <span class="old-price">$19.99</span>
                        </div>
                        <button class="btn-outline btn">Add to Cart</button>
                    </div>
                </div>

                <div class="pizza-card hover-lift">
                    <div class="pizza-image">
                        <div class="pizza-emoji">🍕</div>
                        <div class="pizza-badge hot">🔥 Spicy</div>
                    </div>
                    <div class="pizza-content">
                        <h3>Pepperoni Explosion</h3>
                        <p>Double pepperoni, mozzarella cheese, and our secret spice blend</p>
                        <div class="pizza-price">
                            <span class="price">$18.99</span>
                        </div>
                        <button class="btn-outline btn">Add to Cart</button>
                    </div>
                </div>

                <div class="pizza-card hover-lift">
                    <div class="pizza-image">
                        <div class="pizza-emoji">🍕</div>
                        <div class="pizza-badge new">New!</div>
                    </div>
                    <div class="pizza-content">
                        <h3>Truffle Deluxe</h3>
                        <p>Truffle oil, wild mushrooms, arugula, and parmesan on thin crust</p>
                        <div class="pizza-price">
                            <span class="price">$24.99</span>
                        </div>
                        <button class="btn-outline btn">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Why <span class="text-accent">Mario's</span>?</h2>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>30-Min Guarantee</h3>
                    <p>Hot and fresh pizza delivered to your door in 30 minutes or less, guaranteed!</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Fresh Ingredients</h3>
                    <p>We source the finest ingredients daily to ensure maximum freshness and flavor</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Award Winning</h3>
                    <p>Winner of "Best Pizza 2024" - recognized for excellence in taste and quality</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Experience Heaven?</h2>
                <p>Join thousands of satisfied customers who choose Mario's Pizza Palace</p>
                <div class="cta-buttons">
                    <button class="btn btn-primary btn-large">
                        <i class="fas fa-phone"></i>
                        Call Now: (555) 123-PIZZA
                    </button>
                    <button class="btn btn-secondary btn-large">
                        <i class="fas fa-map-marker-alt"></i>
                        Find Location
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

    <script>
        // Mobile menu toggle
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Timer countdown
        function updateTimer() {
            const hours = document.getElementById('hours');
            const minutes = document.getElementById('minutes');
            const seconds = document.getElementById('seconds');

            let h = parseInt(hours.textContent);
            let m = parseInt(minutes.textContent);
            let s = parseInt(seconds.textContent);

            s--;
            if (s < 0) {
                s = 59;
                m--;
                if (m < 0) {
                    m = 59;
                    h--;
                    if (h < 0) {
                        h = 23;
                    }
                }
            }

            hours.textContent = h.toString().padStart(2, '0');
            minutes.textContent = m.toString().padStart(2, '0');
            seconds.textContent = s.toString().padStart(2, '0');
        }

        setInterval(updateTimer, 1000);

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
    </script>
</body>

</html>