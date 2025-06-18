<?php

/**
 * Template for displaying product category archives
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
          <?php echo esc_html($term->name); ?>
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
                '%s product found',
                '%s products found',
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

        <div class="products-filter">
          <div class="filter-item">
            <label for="product-sort"><?php _e('Sort by:', 'vieco-organic'); ?></label>
            <select id="product-sort">
              <option value="date"><?php _e('Latest', 'vieco-organic'); ?></option>
              <option value="title"><?php _e('Name', 'vieco-organic'); ?></option>
              <option value="price-low"><?php _e('Price: Low to High', 'vieco-organic'); ?></option>
              <option value="price-high"><?php _e('Price: High to Low', 'vieco-organic'); ?></option>
            </select>
          </div>
        </div>

        <div class="products-grid">
          <?php while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('product-card'); ?>>

              <?php if (has_post_thumbnail()) : ?>
                <div class="product-image">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('vieco-featured', array('alt' => get_the_title())); ?>
                  </a>

                  <?php
                  $certification = get_post_meta(get_the_ID(), '_product_certification', true);
                  if ($certification) : ?>
                    <div class="product-badge">
                      <?php
                      $cert_labels = array(
                        'usda-organic' => __('USDA Organic', 'vieco-organic'),
                        'eu-organic' => __('EU Organic', 'vieco-organic'),
                        'fair-trade' => __('Fair Trade', 'vieco-organic'),
                        'non-gmo' => __('Non-GMO', 'vieco-organic'),
                      );
                      echo isset($cert_labels[$certification]) ? esc_html($cert_labels[$certification]) : esc_html($certification);
                      ?>
                    </div>
                  <?php endif; ?>
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
                $weight = get_post_meta(get_the_ID(), '_product_weight', true);
                if ($weight) : ?>
                  <div class="product-weight">
                    <i class="fa fa-weight"></i> <?php echo esc_html($weight); ?>
                  </div>
                <?php endif; ?>

                <?php
                $tags = get_the_terms(get_the_ID(), 'product_tag');
                if ($tags && !is_wp_error($tags)) : ?>
                  <div class="product-tags">
                    <?php foreach (array_slice($tags, 0, 3) as $tag) : ?>
                      <span class="product-tag">
                        <?php echo esc_html($tag->name); ?>
                      </span>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>

                <a href="<?php the_permalink(); ?>" class="product-link">
                  <?php _e('View Details', 'vieco-organic'); ?>
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
          <h2><?php _e('No products found in this category', 'vieco-organic'); ?></h2>
          <p><?php _e('Sorry, no products were found in this category. Please try browsing other categories.', 'vieco-organic'); ?></p>
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
    background: linear-gradient(135deg, #e8f5e8 0%, #f1f8e9 100%);
    border-radius: 12px;
  }

  .taxonomy-title {
    font-size: 3rem;
    color: #2e7d32;
    margin-bottom: 1rem;
    font-weight: 700;
  }

  .taxonomy-description {
    font-size: 1.25rem;
    color: #666;
    max-width: 600px;
    margin: 0 auto 1rem;
    line-height: 1.6;
  }

  .taxonomy-meta {
    font-size: 1rem;
    color: #888;
  }

  .products-filter {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    margin-bottom: 2rem;
    padding: 1rem;
    background: #f8f8f8;
    border-radius: 8px;
  }

  .filter-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  .filter-item label {
    font-weight: 500;
    color: #333;
  }

  .filter-item select {
    padding: 0.5rem 1rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 0.875rem;
  }

  .products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
  }

  .product-card {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    transition: all 0.3s ease;
    position: relative;
  }

  .product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
  }

  .product-image {
    position: relative;
    overflow: hidden;
    height: 280px;
  }

  .product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
  }

  .product-card:hover .product-image img {
    transform: scale(1.08);
  }

  .product-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: rgba(46, 125, 50, 0.9);
    color: white;
    padding: 0.5rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  .product-content {
    padding: 2rem;
  }

  .product-title {
    font-size: 1.375rem;
    font-weight: 600;
    margin: 0 0 0.75rem 0;
    line-height: 1.3;
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
    font-size: 1.75rem;
    font-weight: 700;
    color: #2e7d32;
    margin-bottom: 1rem;
  }

  .product-excerpt {
    color: #666;
    line-height: 1.6;
    margin-bottom: 1rem;
    font-size: 0.95rem;
  }

  .product-weight {
    color: #888;
    font-size: 0.9rem;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  .product-tags {
    margin-bottom: 1.5rem;
  }

  .product-tag {
    display: inline-block;
    background: #f0f0f0;
    color: #666;
    padding: 0.25rem 0.75rem;
    border-radius: 15px;
    font-size: 0.8rem;
    margin-right: 0.5rem;
    margin-bottom: 0.25rem;
  }

  .product-link {
    display: inline-block;
    background: #2e7d32;
    color: white;
    padding: 0.875rem 2rem;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    text-align: center;
    width: 100%;
  }

  .product-link:hover {
    background: #1b5e20;
    transform: translateY(-2px);
  }

  .no-products {
    text-align: center;
    padding: 4rem 2rem;
    background: #f8f8f8;
    border-radius: 12px;
  }

  .no-products h2 {
    color: #2e7d32;
    margin-bottom: 1rem;
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
      font-size: 2.25rem;
    }

    .products-grid {
      grid-template-columns: 1fr;
      gap: 1.5rem;
    }

    .products-filter {
      justify-content: center;
    }

    .filter-item {
      flex-direction: column;
      text-align: center;
    }
  }
</style>

<?php get_footer(); ?>