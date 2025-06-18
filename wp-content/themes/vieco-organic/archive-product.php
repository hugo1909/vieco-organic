<?php
/**
 * Template for displaying product archives
 * 
 * @package Vieco_Organic
 */

get_header(); ?>

<div class="container">
    <div class="content-area">
        <main class="site-main">
            
            <header class="page-header">
                <h1 class="page-title">
                    <?php
                    if (is_tax()) {
                        $term = get_queried_object();
                        echo esc_html($term->name);
                    } else {
                        _e('Our Products', 'vieco-organic');
                    }
                    ?>
                </h1>
                <?php if (is_tax() && !empty(get_queried_object()->description)) : ?>
                    <div class="archive-description">
                        <?php echo wp_kses_post(get_queried_object()->description); ?>
                    </div>
                <?php endif; ?>
            </header>

            <?php if (have_posts()) : ?>
                
                <div class="products-grid">
                    <?php while (have_posts()) : the_post(); ?>
                        
                        <article id="post-<?php the_ID(); ?>" <?php post_class('product-card'); ?>>
                            
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="product-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('vieco-featured', array('alt' => get_the_title())); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <div class="product-content">
                                <h2 class="product-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                
                                <?php 
                                $price = get_post_meta(get_the_ID(), '_product_price', true);
                                if ($price) : ?>
                                    <div class="product-price">
                                        $<?php echo esc_html(number_format($price, 2)); ?>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="product-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                                
                                <?php
                                $categories = get_the_terms(get_the_ID(), 'product_category');
                                if ($categories && !is_wp_error($categories)) : ?>
                                    <div class="product-categories">
                                        <?php foreach ($categories as $category) : ?>
                                            <a href="<?php echo esc_url(get_term_link($category)); ?>" class="product-category">
                                                <?php echo esc_html($category->name); ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                                
                                <a href="<?php the_permalink(); ?>" class="product-link">
                                    <?php _e('View Product', 'vieco-organic'); ?>
                                </a>
                                
                            </div>
                            
                        </article>
                        
                    <?php endwhile; ?>
                </div>
                
                <?php
                // Pagination
                the_posts_pagination(array(
                    'prev_text' => __('Previous', 'vieco-organic'),
                    'next_text' => __('Next', 'vieco-organic'),
                ));
                ?>
                
            <?php else : ?>
                
                <div class="no-products">
                    <h2><?php _e('No products found', 'vieco-organic'); ?></h2>
                    <p><?php _e('Sorry, no products were found. Please check back later.', 'vieco-organic'); ?></p>
                </div>
                
            <?php endif; ?>
            
        </main>
    </div>
</div>

<style>
.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.product-card {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.15);
}

.product-image {
    position: relative;
    overflow: hidden;
}

.product-image img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.product-card:hover .product-image img {
    transform: scale(1.05);
}

.product-content {
    padding: 1.5rem;
}

.product-title {
    font-size: 1.25rem;
    font-weight: 600;
    margin: 0 0 0.5rem 0;
}

.product-title a {
    text-decoration: none;
    color: #2e7d32;
    transition: color 0.3s ease;
}

.product-title a:hover {
    color: #1b5e20;
}

.product-price {
    font-size: 1.5rem;
    font-weight: 700;
    color: #2e7d32;
    margin-bottom: 1rem;
}

.product-excerpt {
    color: #666;
    line-height: 1.6;
    margin-bottom: 1rem;
}

.product-categories {
    margin-bottom: 1rem;
}

.product-category {
    display: inline-block;
    background: #e8f5e8;
    color: #2e7d32;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.875rem;
    text-decoration: none;
    margin-right: 0.5rem;
    margin-bottom: 0.5rem;
    transition: background-color 0.3s ease;
}

.product-category:hover {
    background: #2e7d32;
    color: white;
}

.product-link {
    display: inline-block;
    background: #2e7d32;
    color: white;
    padding: 0.75rem 1.5rem;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 500;
    transition: background-color 0.3s ease;
}

.product-link:hover {
    background: #1b5e20;
}

.page-header {
    text-align: center;
    margin-bottom: 2rem;
}

.page-title {
    font-size: 2.5rem;
    color: #2e7d32;
    margin-bottom: 1rem;
}

.archive-description {
    font-size: 1.125rem;
    color: #666;
    max-width: 600px;
    margin: 0 auto;
}

.no-products {
    text-align: center;
    padding: 3rem 0;
}

@media (max-width: 768px) {
    .products-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .page-title {
        font-size: 2rem;
    }
}
</style>

<?php get_footer(); ?>
