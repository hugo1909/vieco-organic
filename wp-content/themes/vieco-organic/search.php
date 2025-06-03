<?php get_header(); ?>

<!-- Search Results Header -->
<section class="hero-section" style="padding: 120px 0 60px; background: linear-gradient(135deg, #f1f8e9 0%, #e8f5e8 100%);">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title" style="font-size: 2.5rem;">
                <?php if (have_posts()) : ?>
                    Search Results for: "<?php echo get_search_query(); ?>"
                <?php else : ?>
                    No Results Found
                <?php endif; ?>
            </h1>
            <p class="hero-subtitle">
                <?php if (have_posts()) : ?>
                    We found <?php echo $wp_query->found_posts; ?> result(s) for your search.
                <?php else : ?>
                    Sorry, we couldn't find any results for "<?php echo get_search_query(); ?>". Try searching for something else!
                <?php endif; ?>
            </p>

            <!-- Search Form -->
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
        </div>
    </div>
</section>

<?php if (have_posts()) : ?>
    <!-- Search Results -->
    <section class="search-results" style="padding: 80px 0; background: white;">
        <div class="container">
            <div class="search-results-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="search-result-item feature-card" style="text-align: left;">
                        <?php if (has_post_thumbnail()) : ?>
                            <div style="margin-bottom: 1rem;">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium', array('style' => 'width: 100%; height: 200px; object-fit: cover; border-radius: 10px;')); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <h3 class="feature-title" style="font-size: 1.3rem; margin-bottom: 0.5rem;">
                            <a href="<?php the_permalink(); ?>" style="color: #1b5e20; text-decoration: none;"><?php the_title(); ?></a>
                        </h3>

                        <div class="post-meta" style="color: #2e7d32; font-size: 0.9rem; margin-bottom: 1rem;">
                            <span><?php echo get_post_type(); ?></span>
                            <span style="margin: 0 0.5rem;">•</span>
                            <span><?php echo get_the_date(); ?></span>
                            <?php if (get_post_type() == 'post' && has_category()) : ?>
                                <span style="margin: 0 0.5rem;">•</span>
                                <span><?php the_category(', '); ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="feature-description">
                            <?php
                            $excerpt = get_the_excerpt();
                            if ($excerpt) {
                                echo wp_trim_words($excerpt, 20);
                            } else {
                                echo wp_trim_words(get_the_content(), 20);
                            }
                            ?>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="btn-secondary" style="margin-top: 1rem; padding: 0.5rem 1rem; font-size: 0.9rem;">
                            Read More
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="pagination" style="margin-top: 3rem; text-align: center;">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => '← Previous',
                    'next_text' => 'Next →',
                ));
                ?>
            </div>
        </div>
    </section>

<?php else : ?>
    <!-- No Results -->
    <section class="no-results" style="padding: 80px 0; background: white;">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <span class="feature-icon">🔍</span>
                    <h3 class="feature-title">Try Different Keywords</h3>
                    <p class="feature-description">Use more general terms or try different spelling variations.</p>
                </div>

                <div class="feature-card">
                    <span class="feature-icon">🏠</span>
                    <h3 class="feature-title">Browse Categories</h3>
                    <p class="feature-description">Explore our main sections to find what you're looking for.</p>
                    <a href="<?php echo home_url(); ?>" class="btn-secondary" style="margin-top: 1rem; padding: 0.5rem 1rem;">Go Home</a>
                </div>

                <div class="feature-card">
                    <span class="feature-icon">📞</span>
                    <h3 class="feature-title">Contact Us</h3>
                    <p class="feature-description">Can't find what you need? Our team is here to help!</p>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-secondary" style="margin-top: 1rem; padding: 0.5rem 1rem;">Get Help</a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>