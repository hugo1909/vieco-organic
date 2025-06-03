<?php get_header(); ?>

<!-- Page Header -->
<section class="hero-section" style="padding: 120px 0 60px; background: linear-gradient(135deg, #f1f8e9 0%, #e8f5e8 100%);">
    <div class="container">
        <div class="hero-content">
            <?php while (have_posts()) : the_post(); ?>
                <h1 class="hero-title" style="font-size: 2.5rem;"><?php the_title(); ?></h1>
                <?php if (get_the_excerpt()) : ?>
                    <p class="hero-subtitle"><?php echo get_the_excerpt(); ?></p>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<!-- Page Content -->
<section class="page-content" style="padding: 80px 0; background: white;">
    <div class="container">
        <div class="content-wrapper" style="max-width: 800px; margin: 0 auto;">
            <?php while (have_posts()) : the_post(); ?>
                <div class="page-content-inner">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="page-featured-image" style="margin-bottom: 2rem; text-align: center;">
                            <?php the_post_thumbnail('large', array('style' => 'max-width: 100%; height: auto; border-radius: 15px; box-shadow: 0 10px 30px rgba(46, 125, 50, 0.15);')); ?>
                        </div>
                    <?php endif; ?>

                    <div class="page-text" style="font-size: 1.1rem; line-height: 1.8; color: #555;">
                        <?php the_content(); ?>
                    </div>

                    <?php
                    wp_link_pages(array(
                        'before' => '<div class="page-links" style="margin-top: 2rem; text-align: center;">',
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>