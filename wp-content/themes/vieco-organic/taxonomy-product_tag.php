<?php

/**
 * Template for displaying product tag archives
 * 
 * @package Vieco_Organic
 */

get_header(); ?>

<div class="container">
  <div class="content-area">
    <main class="site-main">

      <header class="taxonomy-header">
        <?php $term = get_queried_object(); ?>
        <h1 class="taxonomy-title">
          <span class="tag-icon">#</span><?php echo esc_html($term->name); ?>
        </h1>
        <?php if (!empty($term->description)) : ?>
          <div class="taxonomy-description">
            <?php echo wp_kses_post($term->description); ?>
          </div>
        <?php endif; ?>

        <div class="taxonomy-meta">
          <span class="product-count">
            <?php
            printf(
              _n(
                '%s product tagged',
                '%s products tagged',
                $term->count,
                'vieco-organic'
              ),
              number_format_i18n($term->count)
            );
            ?>
          </span>
        </div>
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
          <h2><?php _e('No products found with this tag', 'vieco-organic'); ?></h2>
          <p><?php _e('Sorry, no products were found with this tag. Please try browsing our product categories.', 'vieco-organic'); ?></p>
          <a href="<?php echo get_post_type_archive_link('product'); ?>" class="btn-primary">
            <?php _e('View All Products', 'vieco-organic'); ?>
          </a>
        </div>

      <?php endif; ?>

    </main>
  </div>
</div>

<style>
  .taxonomy-header {
    text-align: center;
    margin-bottom: 3rem;
    padding: 2rem 0;
    background: linear-gradient(135deg, #fff3e0 0%, #fce4ec 100%);
    border-radius: 12px;
  }

  .taxonomy-title {
    font-size: 2.5rem;
    color: #2e7d32;
    margin-bottom: 1rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
  }

  .tag-icon {
    font-size: 2rem;
    color: #ff7043;
    font-weight: bold;
  }

  .taxonomy-description {
    font-size: 1.125rem;
    color: #666;
    max-width: 600px;
    margin: 0 auto 1rem;
    line-height: 1.6;
  }

  .taxonomy-meta {
    font-size: 1rem;
    color: #888;
  }

  .products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
  }

  .product-card {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
  }

  .product-image {
    position: relative;
    overflow: hidden;
    height: 250px;
  }

  .product-image img {
    width: 100%;
    height: 100%;
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

  .no-products {
    text-align: center;
    padding: 3rem 0;
  }

  .btn-primary {
    display: inline-block;
    background: #2e7d32;
    color: white;
    padding: 1rem 2rem;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 500;
    margin-top: 1rem;
    transition: background-color 0.3s ease;
  }

  .btn-primary:hover {
    background: #1b5e20;
  }

  @media (max-width: 768px) {
    .taxonomy-title {
      font-size: 2rem;
      flex-direction: column;
      gap: 0.25rem;
    }

    .products-grid {
      grid-template-columns: 1fr;
      gap: 1.5rem;
    }
  }
</style>

<?php get_footer(); ?>