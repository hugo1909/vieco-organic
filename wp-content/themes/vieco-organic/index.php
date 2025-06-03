<?php get_header(); ?>

<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title"><?php echo vieco_get_theme_option('hero_title', 'Pure. Natural. Organic.'); ?></h1>
            <p class="hero-subtitle"><?php echo vieco_get_theme_option('hero_subtitle', 'Discover the finest organic products that nourish your body and respect our planet. From farm to table, we bring you nature\'s best.'); ?></p>
            <div class="hero-buttons">
                <a href="#products" class="btn-primary">Explore Products</a>
                <a href="#about" class="btn-secondary">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <h2 class="section-title">Why Choose Organic?</h2>
        <p class="section-subtitle">Experience the difference that pure, natural ingredients make in your daily life</p>

        <div class="features-grid">
            <div class="feature-card">
                <span class="feature-icon">🌱</span>
                <h3 class="feature-title">100% Organic</h3>
                <p class="feature-description">All our products are certified organic, free from harmful chemicals and pesticides.</p>
            </div>

            <div class="feature-card">
                <span class="feature-icon">🌍</span>
                <h3 class="feature-title">Eco-Friendly</h3>
                <p class="feature-description">Sustainable farming practices that protect our environment for future generations.</p>
            </div>

            <div class="feature-card">
                <span class="feature-icon">❤️</span>
                <h3 class="feature-title">Health First</h3>
                <p class="feature-description">Nutrient-rich foods that support your health and wellbeing naturally.</p>
            </div>

            <div class="feature-card">
                <span class="feature-icon">🚚</span>
                <h3 class="feature-title">Fresh Delivery</h3>
                <p class="feature-description">Farm-fresh products delivered directly to your doorstep with care.</p>
            </div>

            <div class="feature-card">
                <span class="feature-icon">👨‍🌾</span>
                <h3 class="feature-title">Local Farmers</h3>
                <p class="feature-description">Supporting local farming communities and fair trade practices.</p>
            </div>

            <div class="feature-card">
                <span class="feature-icon">✨</span>
                <h3 class="feature-title">Premium Quality</h3>
                <p class="feature-description">Hand-selected products that meet the highest quality standards.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2>Our Organic Journey</h2>
                <p>For over a decade, we've been passionate about bringing you the purest, most nutritious organic products. Our journey began with a simple belief: that what we eat should nourish our bodies and respect our planet.</p>
                <p>Working directly with certified organic farmers, we ensure that every product meets our strict quality standards. From fresh produce to pantry staples, we're committed to providing you with the best that nature has to offer.</p>
                <a href="#contact" class="btn-primary">Get In Touch</a>
            </div>
            <div class="about-image">
                <div style="width: 100%; height: 400px; background: linear-gradient(45deg, #c8e6c9, #a5d6a7); border-radius: 20px; display: flex; align-items: center; justify-content: center; font-size: 4rem;">🌿</div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>