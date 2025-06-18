<?php

/**
 * Template for displaying single product
 * 
 * @package Vieco_Organic
 */

get_header(); ?>

<div class="page-container">
  <div class="content-area">
    <main class="site-main">

      <?php while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('single-product'); ?>>

          <!-- Hero Section -->
          <section class="hero">
            <div class="container">
              <div class="hero-content">
                <!-- Product Info -->
                <div class="hero-text">
                  <div class="badge">
                    🏆 Sản phẩm bán chạy #1
                  </div>
                  <h1>
                    <?php the_title(); ?>
                  </h1>
                  <?php if (has_excerpt()) : ?>
                    <div class="product-short-description">
                      <?php the_excerpt(); ?>
                    </div>
                  <?php endif; ?>

                  <!-- Rating -->
                  <div class="rating">
                    <div class="stars">
                      <span class="star">★</span>
                      <span class="star">★</span>
                      <span class="star">★</span>
                      <span class="star">★</span>
                      <span class="star">★</span>
                    </div>
                    <span>4.9 (234 đánh giá)</span>
                  </div>

                  <!-- Price -->
                  <?php
                  $price = get_post_meta(get_the_ID(), '_product_price', true);
                  if ($price) : ?>
                    <div class="price">
                      <span class="price-main"><?php echo esc_html(number_format($price, 2)); ?>₫</span>
                      <!-- <p class="price-desc">Giá cho 1kg thịt gà tươi</p> -->
                    </div>
                  <?php endif; ?>

                  <!-- Action Buttons -->
                  <div class="buttons">
                    <a href="tel:0123456789" class="btn btn-primary">
                      📱 Liên hệ đặt hàng
                    </a>
                    <a href="https://zalo.me/0123456789" class="btn btn-outline">
                      💬 Chat Zalo
                    </a>
                  </div>

                  <!-- Contact Info -->
                  <div class="contact-info">
                    <h3>Thông tin liên hệ:</h3>
                    <p>📱 Hotline: <span class="phone">0123 456 789</span></p>
                    <p>🕐 Thời gian: 8:00 - 20:00 hàng ngày</p>
                  </div>
                </div>

                <!-- Product Image -->
                <div class="hero-image">
                  <div class="product-details-card">
                    <div class="product-image">🐔</div>
                    <div class="floating-badge badge-top">Tươi 100%</div>
                    <div class="floating-badge badge-bottom">Organic</div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Product Tabs -->
          <section class="tabs-section">
            <div class="container">
              <div class="tabs-container">
                <!-- Tab Navigation -->
                <div class="tabs-nav">
                  <button class="tab-button active" onclick="showTab('description')">Mô tả</button>
                  <button class="tab-button" onclick="showTab('nutrition')">Dinh dưỡng</button>
                  <button class="tab-button" onclick="showTab('shipping')">Vận chuyển</button>
                  <button class="tab-button" onclick="showTab('warranty')">Bảo hành</button>
                </div>

                <!-- Tab Contents -->
                <div id="description" class="tab-content active">
                  <div class="tab-card">
                    <h3>Thông tin sản phẩm</h3>
                    <p style="font-size: 1.125rem; color: #6b7280; line-height: 1.7; margin-bottom: 1.5rem;">
                      Thịt gà organic của chúng tôi được nuôi trong môi trường tự nhiên,
                      không sử dụng hormone hay kháng sinh. Đàn gà được chăn thả tự do
                      trên những đồng cỏ xanh mướt, ăn thức ăn tự nhiên.
                    </p>

                    <div class="features-grid">
                      <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Không sử dụng hormone tăng trưởng</span>
                      </div>
                      <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Nuôi tự nhiên trên đồng cỏ xanh</span>
                      </div>
                      <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Giàu protein và vitamin</span>
                      </div>
                      <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Đạt chứng nhận VietGAP</span>
                      </div>
                    </div>

                    <div class="stats-grid">
                      <div class="stat-item">
                        <span class="stat-emoji">🏆</span>
                        <div class="stat-text">Chất lượng A+</div>
                      </div>
                      <div class="stat-item">
                        <span class="stat-emoji">🌱</span>
                        <div class="stat-text">100% Tự nhiên</div>
                      </div>
                      <div class="stat-item">
                        <span class="stat-emoji">❄️</span>
                        <div class="stat-text">Tươi mỗi ngày</div>
                      </div>
                      <div class="stat-item">
                        <span class="stat-emoji">🚚</span>
                        <div class="stat-text">Giao hàng nhanh</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="nutrition" class="tab-content">
                  <div class="tab-card">
                    <h3>Thông tin dinh dưỡng</h3>
                    <div class="nutrition-item">
                      <span class="nutrition-label">Protein</span>
                      <div class="nutrition-values">
                        <span class="nutrition-amount">25g</span>
                        <span class="nutrition-percentage">50%</span>
                      </div>
                    </div>
                    <div class="nutrition-item">
                      <span class="nutrition-label">Chất béo</span>
                      <div class="nutrition-values">
                        <span class="nutrition-amount">15g</span>
                        <span class="nutrition-percentage">23%</span>
                      </div>
                    </div>
                    <div class="nutrition-item">
                      <span class="nutrition-label">Carbohydrate</span>
                      <div class="nutrition-values">
                        <span class="nutrition-amount">0g</span>
                        <span class="nutrition-percentage">0%</span>
                      </div>
                    </div>
                    <div class="nutrition-item">
                      <span class="nutrition-label">Calories</span>
                      <div class="nutrition-values">
                        <span class="nutrition-amount">250</span>
                        <span class="nutrition-percentage">12%</span>
                      </div>
                    </div>
                    <div class="nutrition-note">
                      <p>* Giá trị dinh dưỡng dựa trên khẩu phần ăn 100g thịt gà</p>
                    </div>
                  </div>
                </div>

                <div id="shipping" class="tab-content">
                  <div class="tab-card">
                    <h3>Thông tin vận chuyển</h3>
                    <div class="shipping-item shipping-fast">
                      <span class="shipping-icon icon-fast">🚚</span>
                      <div class="shipping-content">
                        <h4>Giao hàng nhanh</h4>
                        <p>Giao hàng trong vòng 2-4 giờ tại TP.HCM và Hà Nội</p>
                      </div>
                    </div>
                    <div class="shipping-item shipping-safe">
                      <span class="shipping-icon icon-safe">🛡️</span>
                      <div class="shipping-content">
                        <h4>Đóng gói an toàn</h4>
                        <p>Sử dụng hộp xốp và túi giữ lạnh chuyên dụng</p>
                      </div>
                    </div>
                    <div class="shipping-item shipping-free">
                      <span class="shipping-icon icon-free">🏆</span>
                      <div class="shipping-content">
                        <h4>Miễn phí giao hàng</h4>
                        <p>Đơn hàng từ 500,000₫ được miễn phí vận chuyển</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="warranty" class="tab-content">
                  <div class="tab-card">
                    <h3>Chính sách bảo hành</h3>
                    <div class="warranty-item warranty-quality">
                      <h4>Cam kết chất lượng</h4>
                      <p>Hoàn tiền 100% nếu sản phẩm không đạt chất lượng cam kết</p>
                    </div>
                    <div class="warranty-item warranty-return">
                      <h4>Đổi trả dễ dàng</h4>
                      <p>Đổi trả trong vòng 24h kể từ khi nhận hàng</p>
                    </div>
                    <div class="warranty-item warranty-support">
                      <h4>Hỗ trợ 24/7</h4>
                      <p>Đội ngũ chăm sóc khách hàng luôn sẵn sàng hỗ trợ</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Related Products -->
          <section class="related-section">
            <div class="container">
              <div class="section-header">
                <div class="badge">Sản phẩm liên quan</div>
                <h2>Có thể bạn <span class="highlight">quan tâm</span></h2>
                <p>Khám phá thêm các sản phẩm chất lượng khác từ trang trại của chúng tôi</p>
              </div>

              <!-- Slider -->
              <div class="slider-container">
                <div class="slider">
                  <div class="slider-track" id="sliderTrack">
                    <!-- Product 1 -->
                    <div class="product-slide">
                      <div class="product-item">
                        <div class="product-item-image">
                          <span class="emoji">🥚</span>
                          <div class="product-badge">Bán chạy</div>
                        </div>
                        <div class="product-info">
                          <h3 class="product-name">Trứng gà tự nhiên</h3>
                          <div class="product-rating">
                            <div class="stars">
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star">★</span>
                            </div>
                            <span class="rating-text">4.8 (156)</span>
                          </div>
                          <div class="product-price">99,000₫</div>
                          <a href="tel:0123456789" class="btn btn-primary product-button">
                            📱 Liên hệ đặt hàng
                          </a>
                        </div>
                      </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="product-slide">
                      <div class="product-item">
                        <div class="product-item-image">
                          <span class="emoji">🐓</span>
                          <div class="product-badge">Mới</div>
                        </div>
                        <div class="product-info">
                          <h3 class="product-name">Thịt gà ta</h3>
                          <div class="product-rating">
                            <div class="stars">
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star">★</span>
                            </div>
                            <span class="rating-text">4.9 (89)</span>
                          </div>
                          <div class="product-price">380,000₫</div>
                          <a href="tel:0123456789" class="btn btn-primary product-button">
                            📱 Liên hệ đặt hàng
                          </a>
                        </div>
                      </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="product-slide">
                      <div class="product-item">
                        <div class="product-item-image">
                          <span class="emoji">🥩</span>
                          <div class="product-badge">Organic</div>
                        </div>
                        <div class="product-info">
                          <h3 class="product-name">Ức gà fillet</h3>
                          <div class="product-rating">
                            <div class="stars">
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star">☆</span>
                            </div>
                            <span class="rating-text">4.7 (234)</span>
                          </div>
                          <div class="product-price">200,000₫</div>
                          <a href="tel:0123456789" class="btn btn-primary product-button">
                            📱 Liên hệ đặt hàng
                          </a>
                        </div>
                      </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="product-slide">
                      <div class="product-item">
                        <div class="product-item-image">
                          <span class="emoji">🍗</span>
                          <div class="product-badge">Khuyến mãi</div>
                        </div>
                        <div class="product-info">
                          <h3 class="product-name">Cánh gà tươi</h3>
                          <div class="product-rating">
                            <div class="stars">
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star">☆</span>
                            </div>
                            <span class="rating-text">4.6 (78)</span>
                          </div>
                          <div class="product-price">170,000₫</div>
                          <a href="tel:0123456789" class="btn btn-primary product-button">
                            📱 Liên hệ đặt hàng
                          </a>
                        </div>
                      </div>
                    </div>

                    <!-- Product 5 -->
                    <div class="product-slide">
                      <div class="product-item">
                        <div class="product-item-image">
                          <span class="emoji">🍖</span>
                          <div class="product-badge">Hot</div>
                        </div>
                        <div class="product-info">
                          <h3 class="product-name">Đùi gà tươi</h3>
                          <div class="product-rating">
                            <div class="stars">
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star">★</span>
                            </div>
                            <span class="rating-text">4.8 (145)</span>
                          </div>
                          <div class="product-price">180,000₫</div>
                          <a href="tel:0123456789" class="btn btn-primary product-button">
                            📱 Liên hệ đặt hàng
                          </a>
                        </div>
                      </div>
                    </div>

                    <!-- Product 6 -->
                    <div class="product-slide">
                      <div class="product-item">
                        <div class="product-item-image">
                          <span class="emoji">🐔</span>
                          <div class="product-badge">Premium</div>
                        </div>
                        <div class="product-info">
                          <h3 class="product-name">Gà nguyên con</h3>
                          <div class="product-rating">
                            <div class="stars">
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star">★</span>
                              <span class="star">★</span>
                            </div>
                            <span class="rating-text">4.9 (67)</span>
                          </div>
                          <div class="product-price">450,000₫</div>
                          <a href="tel:0123456789" class="btn btn-primary product-button">
                            📱 Liên hệ đặt hàng
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Navigation Buttons -->
                <button class="slider-nav slider-prev" onclick="prevSlide()">‹</button>
                <button class="slider-nav slider-next" onclick="nextSlide()">›</button>
              </div>

              <!-- Contact Info -->
              <div class="contact-final">
                <div class="contact-card">
                  <h3>Liên hệ đặt hàng ngay:</h3>
                  <p class="phone-large">📱 0123 456 789</p>
                  <p class="hours">Thời gian: 8:00 - 20:00 hàng ngày</p>
                </div>
              </div>
            </div>
          </section>

        </article>

        <?php
        // Navigation to next/previous product
        $prev_post = get_previous_post(true, '', 'product_category');
        $next_post = get_next_post(true, '', 'product_category');

        if ($prev_post || $next_post) : ?>
          <nav class="product-navigation">
            <?php if ($prev_post) : ?>
              <div class="nav-previous">
                <a href="<?php echo get_permalink($prev_post->ID); ?>">
                  <span class="nav-subtitle"><?php _e('Previous Product', 'vieco-organic'); ?></span>
                  <span class="nav-title"><?php echo get_the_title($prev_post->ID); ?></span>
                </a>
              </div>
            <?php endif; ?>

            <?php if ($next_post) : ?>
              <div class="nav-next">
                <a href="<?php echo get_permalink($next_post->ID); ?>">
                  <span class="nav-subtitle"><?php _e('Next Product', 'vieco-organic'); ?></span>
                  <span class="nav-title"><?php echo get_the_title($next_post->ID); ?></span>
                </a>
              </div>
            <?php endif; ?>
          </nav>
        <?php endif; ?>

      <?php endwhile; ?>

    </main>
  </div>
</div>

<!-- <style>
  .single-product {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem 0;
  }

  .product-header {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    margin-bottom: 3rem;
  }

  .product-gallery {
    position: sticky;
    top: 2rem;
    height: fit-content;
  }

  .product-featured-image img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  }

  .product-title {
    font-size: 2.5rem;
    color: #2e7d32;
    margin-bottom: 1rem;
    line-height: 1.2;
  }

  .product-price {
    font-size: 2rem;
    font-weight: 700;
    color: #2e7d32;
    margin-bottom: 1.5rem;
  }

  .product-price .currency {
    font-size: 1.5rem;
  }

  .product-short-description {
    font-size: 1.125rem;
    color: #666;
    line-height: 1.6;
    margin-bottom: 2rem;
  }

  .product-meta {
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    padding: 1.5rem;
    margin-bottom: 2rem;
  }

  .meta-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.5rem 0;
    border-bottom: 1px solid #f0f0f0;
  }

  .meta-item:last-child {
    border-bottom: none;
  }

  .certification-badge {
    background: #e8f5e8;
    color: #2e7d32;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 500;
  }

  .product-categories,
  .product-tags {
    margin-bottom: 1rem;
  }

  .product-category,
  .product-tag {
    display: inline-block;
    background: #e8f5e8;
    color: #2e7d32;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    text-decoration: none;
    margin-right: 0.5rem;
    margin-bottom: 0.5rem;
    transition: all 0.3s ease;
  }

  .product-category:hover,
  .product-tag:hover {
    background: #2e7d32;
    color: white;
  }

  .product-tabs {
    margin-top: 3rem;
  }

  .tabs-nav {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
    border-bottom: 2px solid #e0e0e0;
  }

  .tabs-nav li {
    margin-right: 2rem;
  }

  .tabs-nav a {
    display: block;
    padding: 1rem 0;
    text-decoration: none;
    color: #666;
    font-weight: 500;
    border-bottom: 2px solid transparent;
    transition: all 0.3s ease;
  }

  .tabs-nav li.active a,
  .tabs-nav a:hover {
    color: #2e7d32;
    border-bottom-color: #2e7d32;
  }

  .tabs-content {
    padding: 2rem 0;
  }

  .tab-panel {
    display: none;
  }

  .tab-panel.active {
    display: block;
  }

  .product-navigation {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    margin-top: 3rem;
    padding-top: 3rem;
    border-top: 1px solid #e0e0e0;
  }

  .nav-previous,
  .nav-next {
    padding: 1.5rem;
    background: #f8f8f8;
    border-radius: 8px;
    transition: background-color 0.3s ease;
  }

  .nav-next {
    text-align: right;
  }

  .nav-previous:hover,
  .nav-next:hover {
    background: #e8f5e8;
  }

  .nav-previous a,
  .nav-next a {
    text-decoration: none;
    color: inherit;
    display: block;
  }

  .nav-subtitle {
    display: block;
    font-size: 0.875rem;
    color: #666;
    margin-bottom: 0.5rem;
  }

  .nav-title {
    display: block;
    font-weight: 600;
    color: #2e7d32;
  }

  @media (max-width: 768px) {
    .product-header {
      grid-template-columns: 1fr;
      gap: 2rem;
    }

    .product-title {
      font-size: 2rem;
    }

    .product-navigation {
      grid-template-columns: 1fr;
    }

    .nav-next {
      text-align: left;
    }

    .tabs-nav {
      flex-wrap: wrap;
    }

    .tabs-nav li {
      margin-right: 1rem;
      margin-bottom: 0.5rem;
    }
  }
</style> -->

<script>
  // Tab functionality
  function showTab(tabName) {
    // Hide all tab contents
    const tabContents = document.querySelectorAll('.tab-content');
    tabContents.forEach(content => {
      content.classList.remove('active');
    });

    // Remove active class from all buttons
    const tabButtons = document.querySelectorAll('.tab-button');
    tabButtons.forEach(button => {
      button.classList.remove('active');
    });

    // Show selected tab content
    document.getElementById(tabName).classList.add('active');

    // Add active class to clicked button
    event.target.classList.add('active');
  }

  // Slider functionality
  let currentSlide = 0;
  const totalSlides = 6;
  const slidesPerView = window.innerWidth > 1024 ? 4 : window.innerWidth > 768 ? 2 : 1;
  const maxSlide = totalSlides - slidesPerView;

  function updateSlider() {
    const sliderTrack = document.getElementById('sliderTrack');
    const slideWidth = 100 / slidesPerView;
    const translateX = -(currentSlide * slideWidth);
    sliderTrack.style.transform = `translateX(${translateX}%)`;
  }

  function nextSlide() {
    if (currentSlide < maxSlide) {
      currentSlide++;
    } else {
      currentSlide = 0;
    }
    updateSlider();
  }

  function prevSlide() {
    if (currentSlide > 0) {
      currentSlide--;
    } else {
      currentSlide = maxSlide;
    }
    updateSlider();
  }

  // Auto-slide functionality
  setInterval(nextSlide, 4000);

  // Update slider on window resize
  window.addEventListener('resize', () => {
    const newSlidesPerView = window.innerWidth > 1024 ? 4 : window.innerWidth > 768 ? 2 : 1;
    if (newSlidesPerView !== slidesPerView) {
      location.reload(); // Simple approach to handle responsive changes
    }
  });

  // Smooth scrolling for anchor links
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

  // Add animation on scroll
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.animationPlayState = 'running';
      }
    });
  }, observerOptions);

  // Observe all animated elements
  document.querySelectorAll('[class*="animate-"]').forEach(el => {
    observer.observe(el);
  });
</script>

<?php get_footer(); ?>