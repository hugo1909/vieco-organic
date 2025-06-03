<?php get_header(); ?>

<!-- Post Header -->
<section class="hero-section" style="padding: 120px 0 60px; background: linear-gradient(135deg, #f1f8e9 0%, #e8f5e8 100%);">
    <div class="container">
        <div class="hero-content">
            <?php while (have_posts()) : the_post(); ?>
                <h1 class="hero-title" style="font-size: 2.5rem;"><?php the_title(); ?></h1>
                <div class="post-meta" style="color: #2e7d32; font-size: 1rem; margin-top: 1rem;">
                    <span>📅 <?php echo get_the_date(); ?></span>
                    <span style="margin: 0 1rem;">•</span>
                    <span>👤 <?php the_author(); ?></span>
                    <?php if (has_category()) : ?>
                        <span style="margin: 0 1rem;">•</span>
                        <span>🏷️ <?php the_category(', '); ?></span>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<!-- Post Content -->
<section class="post-content" style="padding: 80px 0; background: white;">
    <div class="container">
        <div class="content-wrapper" style="max-width: 800px; margin: 0 auto;">
            <?php while (have_posts()) : the_post(); ?>
                <article class="post-article">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-featured-image" style="margin-bottom: 2rem; text-align: center;">
                            <?php the_post_thumbnail('large', array('style' => 'max-width: 100%; height: auto; border-radius: 15px; box-shadow: 0 10px 30px rgba(46, 125, 50, 0.15);')); ?>
                        </div>
                    <?php endif; ?>

                    <div class="post-text" style="font-size: 1.1rem; line-height: 1.8; color: #555;">
                        <?php the_content(); ?>
                    </div>

                    <?php if (has_tag()) : ?>
                        <div class="post-tags" style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #e8f5e8;">
                            <h4 style="color: #2e7d32; margin-bottom: 1rem;">Tags:</h4>
                            <?php the_tags('<span class="tag" style="display: inline-block; background: #f1f8e9; color: #2e7d32; padding: 0.5rem 1rem; border-radius: 20px; margin: 0.25rem; font-size: 0.9rem;">', '</span><span class="tag" style="display: inline-block; background: #f1f8e9; color: #2e7d32; padding: 0.5rem 1rem; border-radius: 20px; margin: 0.25rem; font-size: 0.9rem;">', '</span>'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="post-navigation" style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid #e8f5e8;">
                        <div style="display: flex; justify-content: space-between; gap: 2rem;">
                            <div class="nav-previous">
                                <?php previous_post_link('%link', '← Previous Post'); ?>
                            </div>
                            <div class="nav-next">
                                <?php next_post_link('%link', 'Next Post →'); ?>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<!-- Related Posts -->
<?php
$related_posts = get_posts(array(
    'category__in' => wp_get_post_categories(get_the_ID()),
    'numberposts'  => 3,
    'post__not_in' => array(get_the_ID())
));

if ($related_posts) :
?>
    <section class="related-posts" style="padding: 80px 0; background: #f1f8e9;">
        <div class="container">
            <h2 class="section-title">Related Posts</h2>
            <div class="features-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 2rem;">
                <?php foreach ($related_posts as $post) : setup_postdata($post); ?>
                    <article class="feature-card" style="text-align: left;">
                        <?php if (has_post_thumbnail()) : ?>
                            <div style="margin-bottom: 1rem;">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium', array('style' => 'width: 100%; height: 200px; object-fit: cover; border-radius: 10px;')); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <h3 class="feature-title" style="font-size: 1.2rem; margin-bottom: 0.5rem;">
                            <a href="<?php the_permalink(); ?>" style="color: #1b5e20; text-decoration: none;"><?php the_title(); ?></a>
                        </h3>
                        <p style="font-size: 0.9rem; color: #2e7d32; margin-bottom: 1rem;"><?php echo get_the_date(); ?></p>
                        <p class="feature-description"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn-secondary" style="margin-top: 1rem; padding: 0.5rem 1rem; font-size: 0.9rem;">Read More</a>
                    </article>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>