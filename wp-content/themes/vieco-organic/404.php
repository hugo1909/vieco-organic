<?php get_header(); ?>

<!-- 404 Section -->
<section class="hero-section" style="padding: 120px 0 80px; background: linear-gradient(135deg, #f1f8e9 0%, #e8f5e8 100); min-height: 60vh; display: flex; align-items: center;">
    <div class="container">
        <div class="hero-content" style="text-align: center;">
            <div style="font-size: 8rem; margin-bottom: 1rem;">🌱</div>
            <h1 class="hero-title" style="font-size: 3rem; margin-bottom: 1rem;">Oops! Page Not Found</h1>
            <p class="hero-subtitle" style="font-size: 1.2rem; margin-bottom: 2rem;">
                It looks like this page got lost in our organic garden. Let's help you find your way back to fresh content!
            </p>

            <div class="search-form" style="margin: 2rem 0; max-width: 500px; margin-left: auto; margin-right: auto;">
                <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
                    <input type="search"
                        placeholder="Search for organic goodness..."
                        value="<?php echo get_search_query(); ?>"
                        name="s"
                        style="flex: 1; min-width: 250px; padding: 1rem; border: 2px solid #2e7d32; border-radius: 25px; font-size: 1rem; outline: none;">
                    <button type="submit" class="btn-primary" style="padding: 1rem 2rem;">Search</button>
                </form>
            </div>

            <div class="hero-buttons" style="margin-top: 2rem;">
                <a href="<?php echo home_url(); ?>" class="btn-primary">Go Home</a>
                <a href="#suggestions" class="btn-secondary">Browse Suggestions</a>
            </div>
        </div>
    </div>
</section>

<!-- Suggestions Section -->
<section id="suggestions" class="features-section">
    <div class="container">
        <h2 class="section-title">Maybe You're Looking For...</h2>
        <p class="section-subtitle">Here are some popular pages that might interest you</p>

        <div class="features-grid">
            <div class="feature-card">
                <span class="feature-icon">🏠</span>
                <h3 class="feature-title">Home</h3>
                <p class="feature-description">Return to our homepage and explore all our organic offerings.</p>
                <a href="<?php echo home_url(); ?>" class="btn-secondary" style="margin-top: 1rem; padding: 0.5rem 1rem;">Visit Home</a>
            </div>

            <div class="feature-card">
                <span class="feature-icon">🛒</span>
                <h3 class="feature-title">Shop</h3>
                <p class="feature-description">Browse our collection of fresh, organic products.</p>
                <a href="<?php echo home_url('/shop'); ?>" class="btn-secondary" style="margin-top: 1rem; padding: 0.5rem 1rem;">Start Shopping</a>
            </div>

            <div class="feature-card">
                <span class="feature-icon">📝</span>
                <h3 class="feature-title">Blog</h3>
                <p class="feature-description">Read our latest articles about organic living and health tips.</p>
                <a href="<?php echo home_url('/blog'); ?>" class="btn-secondary" style="margin-top: 1rem; padding: 0.5rem 1rem;">Read Blog</a>
            </div>

            <div class="feature-card">
                <span class="feature-icon">ℹ️</span>
                <h3 class="feature-title">About Us</h3>
                <p class="feature-description">Learn more about our organic journey and mission.</p>
                <a href="<?php echo home_url('/about'); ?>" class="btn-secondary" style="margin-top: 1rem; padding: 0.5rem 1rem;">About Us</a>
            </div>

            <div class="feature-card">
                <span class="feature-icon">📞</span>
                <h3 class="feature-title">Contact</h3>
                <p class="feature-description">Get in touch with our friendly customer service team.</p>
                <a href="<?php echo home_url('/contact'); ?>" class="btn-secondary" style="margin-top: 1rem; padding: 0.5rem 1rem;">Contact Us</a>
            </div>

            <div class="feature-card">
                <span class="feature-icon">❓</span>
                <h3 class="feature-title">FAQ</h3>
                <p class="feature-description">Find answers to commonly asked questions about organic products.</p>
                <a href="<?php echo home_url('/faq'); ?>" class="btn-secondary" style="margin-top: 1rem; padding: 0.5rem 1rem;">View FAQ</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>