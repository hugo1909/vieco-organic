<?php get_header(); ?>

<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="hero-background">
        <div class="hero-point-1"></div>
        <div class="hero-point-2"></div>
        <div class="hero-point-3"></div>
    </div>
    <?php
    $hero_banner = get_field('hero_banner',);

    if ($hero_banner): ?>
        <?php
        $subtitle = $hero_banner['subtitle'];
        $title = $hero_banner['title'];
        $content = $hero_banner['content'];
        $button_1 = $hero_banner['button_1'];
        $button_2 = $hero_banner['button_2'];
        $image = $hero_banner['image'];
        $qr_image = $hero_banner['qr_image'];
        $media = $hero_banner['media'];
        $info = $hero_banner['info'];
        ?>
        <div class="container hero-container">
            <div class="hero-wrapper">
                <div class="hero-block-text animate-in">
                    <div class="hero-block-content">
                        <?php if ($subtitle): ?>
                            <div class="hero-tag">
                                <span><?php echo esc_html($subtitle); ?></span>
                            </div>
                        <?php endif; ?>
                        <?php if ($title): ?>
                            <h1 class="hero-title">
                                <?php echo $title; ?>
                            </h1>
                        <?php endif; ?>
                        <?php if ($content): ?>
                            <p class="hero-text"><?php echo esc_html($content); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="hero-block-actions">
                        <?php if ($button_1): ?>
                            <a href="<?php echo $button_1['button_action']; ?>" class="btn btn-<?php echo $button_1['button_type']; ?> btn-larger btn-scale">
                                <?php echo file_get_contents($button_1['icon']); ?>
                                <?php echo $button_1['button_label']; ?>
                            </a>
                        <?php endif; ?>
                        <?php if ($button_2): ?>
                            <a href="<?php echo $button_2['button_action']; ?>" class="btn btn-<?php echo $button_2['button_type']; ?> btn-larger btn-scale">
                                <?php echo file_get_contents($button_2['icon']); ?>
                                <?php echo $button_2['button_label']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <?php if ($info): ?>
                        <div class="hero-block-info">
                            <?php if ($info['title_1'] && $info['text_1']): ?>
                                <div class="hero-block-info-item">
                                    <span class="hero-block-info-number"><?php echo $info['title_1']; ?></span>
                                    <span class="hero-block-info-text"><?php echo $info['text_1']; ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if ($info['title_2'] && $info['text_2']): ?>
                                <div class="hero-block-info-item">
                                    <span class="hero-block-info-number"><?php echo $info['title_2']; ?></span>
                                    <span class="hero-block-info-text"><?php echo $info['text_2']; ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if ($info['title_3'] && $info['text_3']): ?>
                                <div class="hero-block-info-item">
                                    <span class="hero-block-info-number"><?php echo $info['title_3']; ?></span>
                                    <span class="hero-block-info-text"><?php echo $info['text_3']; ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="hero-block-media animate-in">
                    <div class="block-media-wrapper">
                        <div class="block-media-image">
                            <img src="<?php echo $image; ?>" alt="">
                            <div class="block-media-button">
                                <div class="block-media-button-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play w-8 h-8 text-green-600 ml-1" data-lov-id="src/components/Hero.tsx:100:20" data-lov-name="Play" data-component-path="src/components/Hero.tsx" data-component-line="100" data-component-file="Hero.tsx" data-component-name="Play" data-component-content="%7B%22className%22%3A%22w-8%20h-8%20text-green-600%20ml-1%22%7D">
                                        <polygon points="6 3 20 12 6 21 6 3"></polygon>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="block-media-qr">
                            <div class="block-media-qr-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text w-8 h-8 text-gray-400" data-lov-id="src/components/Hero.tsx:108:18" data-lov-name="FileText" data-component-path="src/components/Hero.tsx" data-component-line="108" data-component-file="Hero.tsx" data-component-name="FileText" data-component-content="%7B%22className%22%3A%22w-8%20h-8%20text-gray-400%22%7D">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="M10 9H8"></path>
                                    <path d="M16 13H8"></path>
                                    <path d="M16 17H8"></path>
                                </svg>
                            </div>
                            <p class="block-media-qr-text">QR Truy xuất</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="hero-icon">
        <div class="hero-icon-content">
            <span></span>
        </div>
    </div>
</section>

<!-- Story Section -->
<?php $story = get_field('story'); ?>

<?php if ($story): ?>
    <?php
    $heading = $story['heading'];
    $section_text = $story['section_text'];
    $title = $story['title'];
    $content = $story['content'];
    $story_info = $story['story'];
    $gallery = $story['gallery'];
    $story_blocks = $story['story_blocks'];
    ?>
    <section class="story-section">
        <div class="container">
            <div class="story-header animate-in">
                <?php if ($heading): ?>
                    <h2 class="section-title"><?php echo $heading; ?></h2>
                <?php endif; ?>
                <?php if ($section_text): ?>
                    <div class="section-text"><?php echo $section_text; ?></div>
                <?php endif; ?>
            </div>
            <div class="story-wrapper">
                <div class="story-content animate-in">
                    <?php if ($title): ?>
                        <h3 class="story-content-title"><?php echo $title; ?></h3>
                    <?php endif; ?>
                    <?php if ($content): ?>
                        <p class="story-content-text"><?php echo $content; ?></p>
                    <?php endif; ?>
                    <?php if ($story_info): ?>
                        <div class="story-content-list">
                            <?php if ($story_info['block_title_1'] || $story_info['block_content_1']): ?>
                                <div class="story-content-item">
                                    <span class="story-content-icon"></span>
                                    <div class="story-content-info">
                                        <h4><?php echo $story_info['block_title_1']; ?></h4>
                                        <p><?php echo $story_info['block_content_1']; ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($story_info['block_title_2'] || $story_info['block_content_2']): ?>
                                <div class="story-content-item">
                                    <span class="story-content-icon"></span>
                                    <div class="story-content-info">
                                        <h4><?php echo $story_info['block_title_2']; ?></h4>
                                        <p><?php echo $story_info['block_content_2']; ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($story_info['block_title_3'] || $story_info['block_content_3']): ?>
                                <div class="story-content-item">
                                    <span class="story-content-icon"></span>
                                    <div class="story-content-info">
                                        <h4><?php echo $story_info['block_title_3']; ?></h4>
                                        <p><?php echo $story_info['block_content_3']; ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($story_info['block_title_4'] || $story_info['block_content_4']): ?>
                                <div class="story-content-item">
                                    <span class="story-content-icon"></span>
                                    <div class="story-content-info">
                                        <h4><?php echo $story_info['block_title_4']; ?></h4>
                                        <p><?php echo $story_info['block_content_4']; ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="story-media animate-in">
                    <?php if ($gallery): ?>
                        <div class="story-media-list">
                            <?php if ($gallery['image_1']): ?>
                                <img src="<?php echo esc_url($gallery['image_1']); ?>" alt="">
                            <?php endif; ?>
                            <?php if ($gallery['image_2']): ?>
                                <img src="<?php echo esc_url($gallery['image_2']); ?>" alt="">
                            <?php endif; ?>
                            <?php if ($gallery['image_3']): ?>
                                <img src="<?php echo esc_url($gallery['image_3']); ?>" alt="">
                            <?php endif; ?>
                            <?php if ($gallery['image_4']): ?>
                                <img src="<?php echo esc_url($gallery['image_4']); ?>" alt="">
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ($story_blocks): ?>
                <div class="story-blocks">
                    <?php if ($story_blocks['icon_1'] && $story_blocks['block_title_1'] && $story_blocks['content_1']): ?>
                        <div class="story-block animate-in">
                            <div class="story-block-icon">
                                <?php echo file_get_contents($story_blocks['icon_1']); ?>
                            </div>
                            <h3><?php echo $story_blocks['block_title_1']; ?></h3>
                            <p><?php echo $story_blocks['content_1']; ?></p>
                        </div>
                    <?php endif; ?>
                    <div class="story-block animate-in">
                        <div class="story-block-icon">
                            <?php echo file_get_contents($story_blocks['icon_2']); ?>
                        </div>
                        <h3><?php echo $story_blocks['block_title_2']; ?></h3>
                        <p><?php echo $story_blocks['content_2']; ?></p>
                    </div>
                    <div class="story-block animate-in">
                        <div class="story-block-icon">
                            <?php echo file_get_contents($story_blocks['icon_3']); ?>
                        </div>
                        <h3><?php echo $story_blocks['block_title_3']; ?></h3>
                        <p><?php echo $story_blocks['content_3']; ?></p>
                    </div>
                    <div class="story-block animate-in">
                        <div class="story-block-icon">
                            <?php echo file_get_contents($story_blocks['icon_4']); ?>
                        </div>
                        <h3><?php echo $story_blocks['block_title_4']; ?></h3>
                        <p><?php echo $story_blocks['content_4']; ?></p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

<!-- Products Section -->
<?php $product_section = get_field('product'); ?>
<?php if ($product_section): ?>
    <?php
    $heading = $product_section['heading'];
    $content = $product_section['content'];
    $feature_block = $product_section['feature_block'];
    ?>
    <section id="products" class="feature-products-section">
        <div class="container">
            <div class="section-header animate-in">
                <h2 class="section-title"><?php echo $heading; ?></h2>
                <div class="section-text"><?php echo $content; ?></div>
            </div>
            <div class="feature-products-tabs">
                <div class="products-tabs-wrapper">
                    <div class="products-tabs-block">
                        <div class="products-tabs-list">
                            <button class="btn btn-secondary active" data-target="#all-products">Tất cả</button>
                            <button class="btn btn-secondary" data-target="#egg-products">Trứng gà</button>
                            <button class="btn btn-secondary" data-target="#chicken-products">Gà thảo dược</button>
                            <button class="btn btn-secondary" data-target="#medicinal-products">Dược liệu</button>
                        </div>
                    </div>
                    <div class="products-tabs-filter">
                        <select class="products-filter-select">
                            <option value="all">Tất cả giá</option>
                            <option value="under-100k">Dưới 100k</option>
                            <option value="100k-300k">100k - 300k</option>
                            <option value="over-300k">Trên 300k</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="feature-products-box">
                <div class="feature-products-content active" id="all-products">
                    <div class="feature-products-list swiper swiper-slider">
                        <div class="swiper-wrapper">
                            <div class="product-card animate-in swiper-slide">
                                <div class="product-card-media">
                                    <div class="product-card-image">
                                        <img src="https://images.unsplash.com/photo-1582722872445-44dc5f7e3c8f?w=400&h=300&fit=crop" alt="">
                                    </div>
                                    <span class="product-card-qr">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-qr-code w-full h-full text-green-600" data-lov-id="src/components/ui/qr-code.tsx:39:6" data-lov-name="QrCode" data-component-path="src/components/ui/qr-code.tsx" data-component-line="39" data-component-file="qr-code.tsx" data-component-name="QrCode" data-component-content="%7B%22className%22%3A%22w-full%20h-full%20text-green-600%22%7D">
                                                <rect width="5" height="5" x="3" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="16" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="3" y="16" rx="1"></rect>
                                                <path d="M21 16h-3a2 2 0 0 0-2 2v3"></path>
                                                <path d="M21 21v.01"></path>
                                                <path d="M12 7v3a2 2 0 0 1-2 2H7"></path>
                                                <path d="M3 12h.01"></path>
                                                <path d="M12 3h.01"></path>
                                                <path d="M12 16v.01"></path>
                                                <path d="M16 12h1"></path>
                                                <path d="M21 12v.01"></path>
                                                <path d="M12 21v-1"></path>
                                            </svg>
                                        </a>
                                    </span>
                                    <span class="sale-label">20%</span>
                                    <span class="cate-lable">Trứng gà</span>
                                </div>
                                <div class="product-card-info">
                                    <div class="product-card-review">
                                        <div class="product-card-review-stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <span class="star-count">(189)</span>
                                        </div>
                                    </div>
                                    <h3 class="product-card-title"><a href="#">Trứng gà thảo dược tươi</a></h3>
                                    <div class="product-card-description">
                                        <ul>
                                            <li>Giàu protein</li>
                                            <li>Tăng cường miễn dịch</li>
                                        </ul>
                                    </div>
                                    <div class="product-card-price">
                                        <span class="product-card-price-current">8.000đ</span>
                                        <span class="product-card-price-old">10.000đ</span>
                                    </div>
                                    <div class="product-card-actions">
                                        <a href="#" class="btn btn-primary btn-scale">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart w-4 h-4 mr-2" data-lov-id="src/components/ProductCard.tsx:121:10" data-lov-name="ShoppingCart" data-component-path="src/components/ProductCard.tsx" data-component-line="121" data-component-file="ProductCard.tsx" data-component-name="ShoppingCart" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-2%22%7D">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                                            </svg>
                                            Thêm vào giỏ
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card animate-in swiper-slide">
                                <div class="product-card-media">
                                    <div class="product-card-image">
                                        <img src="https://images.unsplash.com/photo-1548550023-2bdb3c5beed7?w=400&h=300&fit=crop" alt="">
                                    </div>
                                    <span class="product-card-qr">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-qr-code w-full h-full text-green-600" data-lov-id="src/components/ui/qr-code.tsx:39:6" data-lov-name="QrCode" data-component-path="src/components/ui/qr-code.tsx" data-component-line="39" data-component-file="qr-code.tsx" data-component-name="QrCode" data-component-content="%7B%22className%22%3A%22w-full%20h-full%20text-green-600%22%7D">
                                                <rect width="5" height="5" x="3" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="16" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="3" y="16" rx="1"></rect>
                                                <path d="M21 16h-3a2 2 0 0 0-2 2v3"></path>
                                                <path d="M21 21v.01"></path>
                                                <path d="M12 7v3a2 2 0 0 1-2 2H7"></path>
                                                <path d="M3 12h.01"></path>
                                                <path d="M12 3h.01"></path>
                                                <path d="M12 16v.01"></path>
                                                <path d="M16 12h1"></path>
                                                <path d="M21 12v.01"></path>
                                                <path d="M12 21v-1"></path>
                                            </svg>
                                        </a>
                                    </span>
                                    <span class="sale-label">20%</span>
                                    <span class="cate-lable">Gà thảo dược</span>
                                </div>
                                <div class="product-card-info">
                                    <div class="product-card-review">
                                        <div class="product-card-review-stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <span class="star-count">(67)</span>
                                        </div>
                                    </div>
                                    <h3 class="product-card-title"><a href="#">Gà thảo dược nguyên con</a></h3>
                                    <div class="product-card-description">
                                        <ul>
                                            <li>Thịt chắc ngọt</li>
                                            <li>Không chất bảo quản</li>
                                        </ul>
                                    </div>
                                    <div class="product-card-price">
                                        <span class="product-card-price-current">280.000đ</span>
                                        <span class="product-card-price-old">320.000đ</span>
                                    </div>
                                    <div class="product-card-actions">
                                        <a href="#" class="btn btn-primary btn-scale">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart w-4 h-4 mr-2" data-lov-id="src/components/ProductCard.tsx:121:10" data-lov-name="ShoppingCart" data-component-path="src/components/ProductCard.tsx" data-component-line="121" data-component-file="ProductCard.tsx" data-component-name="ShoppingCart" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-2%22%7D">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                                            </svg>
                                            Thêm vào giỏ
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card animate-in swiper-slide">
                                <div class="product-card-media">
                                    <div class="product-card-image">
                                        <img src="https://images.unsplash.com/photo-1582722872445-44dc5f7e3c8f?w=400&h=300&fit=crop" alt="">
                                    </div>
                                    <span class="product-card-qr">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-qr-code w-full h-full text-green-600" data-lov-id="src/components/ui/qr-code.tsx:39:6" data-lov-name="QrCode" data-component-path="src/components/ui/qr-code.tsx" data-component-line="39" data-component-file="qr-code.tsx" data-component-name="QrCode" data-component-content="%7B%22className%22%3A%22w-full%20h-full%20text-green-600%22%7D">
                                                <rect width="5" height="5" x="3" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="16" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="3" y="16" rx="1"></rect>
                                                <path d="M21 16h-3a2 2 0 0 0-2 2v3"></path>
                                                <path d="M21 21v.01"></path>
                                                <path d="M12 7v3a2 2 0 0 1-2 2H7"></path>
                                                <path d="M3 12h.01"></path>
                                                <path d="M12 3h.01"></path>
                                                <path d="M12 16v.01"></path>
                                                <path d="M16 12h1"></path>
                                                <path d="M21 12v.01"></path>
                                                <path d="M12 21v-1"></path>
                                            </svg>
                                        </a>
                                    </span>
                                    <span class="sale-label">20%</span>
                                    <span class="cate-lable">Trứng gà</span>
                                </div>
                                <div class="product-card-info">
                                    <div class="product-card-review">
                                        <div class="product-card-review-stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <span class="star-count">(189)</span>
                                        </div>
                                    </div>
                                    <h3 class="product-card-title"><a href="#">Trứng gà thảo dược tươi</a></h3>
                                    <div class="product-card-description">
                                        <ul>
                                            <li>Giàu protein</li>
                                            <li>Tăng cường miễn dịch</li>
                                        </ul>
                                    </div>
                                    <div class="product-card-price">
                                        <span class="product-card-price-current">8.000đ</span>
                                        <span class="product-card-price-old">10.000đ</span>
                                    </div>
                                    <div class="product-card-actions">
                                        <a href="#" class="btn btn-primary btn-scale">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart w-4 h-4 mr-2" data-lov-id="src/components/ProductCard.tsx:121:10" data-lov-name="ShoppingCart" data-component-path="src/components/ProductCard.tsx" data-component-line="121" data-component-file="ProductCard.tsx" data-component-name="ShoppingCart" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-2%22%7D">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                                            </svg>
                                            Thêm vào giỏ
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card animate-in swiper-slide">
                                <div class="product-card-media">
                                    <div class="product-card-image">
                                        <img src="https://images.unsplash.com/photo-1548550023-2bdb3c5beed7?w=400&h=300&fit=crop" alt="">
                                    </div>
                                    <span class="product-card-qr">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-qr-code w-full h-full text-green-600" data-lov-id="src/components/ui/qr-code.tsx:39:6" data-lov-name="QrCode" data-component-path="src/components/ui/qr-code.tsx" data-component-line="39" data-component-file="qr-code.tsx" data-component-name="QrCode" data-component-content="%7B%22className%22%3A%22w-full%20h-full%20text-green-600%22%7D">
                                                <rect width="5" height="5" x="3" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="16" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="3" y="16" rx="1"></rect>
                                                <path d="M21 16h-3a2 2 0 0 0-2 2v3"></path>
                                                <path d="M21 21v.01"></path>
                                                <path d="M12 7v3a2 2 0 0 1-2 2H7"></path>
                                                <path d="M3 12h.01"></path>
                                                <path d="M12 3h.01"></path>
                                                <path d="M12 16v.01"></path>
                                                <path d="M16 12h1"></path>
                                                <path d="M21 12v.01"></path>
                                                <path d="M12 21v-1"></path>
                                            </svg>
                                        </a>
                                    </span>
                                    <span class="sale-label">20%</span>
                                    <span class="cate-lable">Gà thảo dược</span>
                                </div>
                                <div class="product-card-info">
                                    <div class="product-card-review">
                                        <div class="product-card-review-stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <span class="star-count">(67)</span>
                                        </div>
                                    </div>
                                    <h3 class="product-card-title"><a href="#">Gà thảo dược nguyên con</a></h3>
                                    <div class="product-card-description">
                                        <ul>
                                            <li>Thịt chắc ngọt</li>
                                            <li>Không chất bảo quản</li>
                                        </ul>
                                    </div>
                                    <div class="product-card-price">
                                        <span class="product-card-price-current">280.000đ</span>
                                        <span class="product-card-price-old">320.000đ</span>
                                    </div>
                                    <div class="product-card-actions">
                                        <a href="#" class="btn btn-primary btn-scale">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart w-4 h-4 mr-2" data-lov-id="src/components/ProductCard.tsx:121:10" data-lov-name="ShoppingCart" data-component-path="src/components/ProductCard.tsx" data-component-line="121" data-component-file="ProductCard.tsx" data-component-name="ShoppingCart" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-2%22%7D">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                                            </svg>
                                            Thêm vào giỏ
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-buttons feature-products-buttons">
                            <div class="swiper-button-prev swiper-button"></div>
                            <div class="swiper-button-next swiper-button"></div>
                        </div>
                    </div>
                </div>
                <div class="feature-products-content" id="egg-products">
                    <div class="feature-products-list swiper swiper-slider">
                        <div class="swiper-wrapper">
                            <div class="product-card animate-in swiper-slide">
                                <div class="product-card-media">
                                    <div class="product-card-image">
                                        <img src="https://images.unsplash.com/photo-1582722872445-44dc5f7e3c8f?w=400&h=300&fit=crop" alt="">
                                    </div>
                                    <span class="product-card-qr">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-qr-code w-full h-full text-green-600" data-lov-id="src/components/ui/qr-code.tsx:39:6" data-lov-name="QrCode" data-component-path="src/components/ui/qr-code.tsx" data-component-line="39" data-component-file="qr-code.tsx" data-component-name="QrCode" data-component-content="%7B%22className%22%3A%22w-full%20h-full%20text-green-600%22%7D">
                                                <rect width="5" height="5" x="3" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="16" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="3" y="16" rx="1"></rect>
                                                <path d="M21 16h-3a2 2 0 0 0-2 2v3"></path>
                                                <path d="M21 21v.01"></path>
                                                <path d="M12 7v3a2 2 0 0 1-2 2H7"></path>
                                                <path d="M3 12h.01"></path>
                                                <path d="M12 3h.01"></path>
                                                <path d="M12 16v.01"></path>
                                                <path d="M16 12h1"></path>
                                                <path d="M21 12v.01"></path>
                                                <path d="M12 21v-1"></path>
                                            </svg>
                                        </a>
                                    </span>
                                    <span class="sale-label">20%</span>
                                    <span class="cate-lable">Trứng gà</span>
                                </div>
                                <div class="product-card-info">
                                    <div class="product-card-review">
                                        <div class="product-card-review-stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <span class="star-count">(189)</span>
                                        </div>
                                    </div>
                                    <h3 class="product-card-title"><a href="#">Trứng gà thảo dược tươi</a></h3>
                                    <div class="product-card-description">
                                        <ul>
                                            <li>Giàu protein</li>
                                            <li>Tăng cường miễn dịch</li>
                                        </ul>
                                    </div>
                                    <div class="product-card-price">
                                        <span class="product-card-price-current">8.000đ</span>
                                        <span class="product-card-price-old">10.000đ</span>
                                    </div>
                                    <div class="product-card-actions">
                                        <a href="#" class="btn btn-primary btn-scale">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart w-4 h-4 mr-2" data-lov-id="src/components/ProductCard.tsx:121:10" data-lov-name="ShoppingCart" data-component-path="src/components/ProductCard.tsx" data-component-line="121" data-component-file="ProductCard.tsx" data-component-name="ShoppingCart" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-2%22%7D">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                                            </svg>
                                            Thêm vào giỏ
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card animate-in swiper-slide">
                                <div class="product-card-media">
                                    <div class="product-card-image">
                                        <img src="https://images.unsplash.com/photo-1582722872445-44dc5f7e3c8f?w=400&h=300&fit=crop" alt="">
                                    </div>
                                    <span class="product-card-qr">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-qr-code w-full h-full text-green-600" data-lov-id="src/components/ui/qr-code.tsx:39:6" data-lov-name="QrCode" data-component-path="src/components/ui/qr-code.tsx" data-component-line="39" data-component-file="qr-code.tsx" data-component-name="QrCode" data-component-content="%7B%22className%22%3A%22w-full%20h-full%20text-green-600%22%7D">
                                                <rect width="5" height="5" x="3" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="16" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="3" y="16" rx="1"></rect>
                                                <path d="M21 16h-3a2 2 0 0 0-2 2v3"></path>
                                                <path d="M21 21v.01"></path>
                                                <path d="M12 7v3a2 2 0 0 1-2 2H7"></path>
                                                <path d="M3 12h.01"></path>
                                                <path d="M12 3h.01"></path>
                                                <path d="M12 16v.01"></path>
                                                <path d="M16 12h1"></path>
                                                <path d="M21 12v.01"></path>
                                                <path d="M12 21v-1"></path>
                                            </svg>
                                        </a>
                                    </span>
                                    <span class="sale-label">20%</span>
                                    <span class="cate-lable">Trứng gà</span>
                                </div>
                                <div class="product-card-info">
                                    <div class="product-card-review">
                                        <div class="product-card-review-stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <span class="star-count">(189)</span>
                                        </div>
                                    </div>
                                    <h3 class="product-card-title"><a href="#">Trứng gà thảo dược tươi</a></h3>
                                    <div class="product-card-description">
                                        <ul>
                                            <li>Giàu protein</li>
                                            <li>Tăng cường miễn dịch</li>
                                        </ul>
                                    </div>
                                    <div class="product-card-price">
                                        <span class="product-card-price-current">8.000đ</span>
                                        <span class="product-card-price-old">10.000đ</span>
                                    </div>
                                    <div class="product-card-actions">
                                        <a href="#" class="btn btn-primary btn-scale">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart w-4 h-4 mr-2" data-lov-id="src/components/ProductCard.tsx:121:10" data-lov-name="ShoppingCart" data-component-path="src/components/ProductCard.tsx" data-component-line="121" data-component-file="ProductCard.tsx" data-component-name="ShoppingCart" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-2%22%7D">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                                            </svg>
                                            Thêm vào giỏ
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card animate-in swiper-slide">
                                <div class="product-card-media">
                                    <div class="product-card-image">
                                        <img src="https://images.unsplash.com/photo-1582722872445-44dc5f7e3c8f?w=400&h=300&fit=crop" alt="">
                                    </div>
                                    <span class="product-card-qr">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-qr-code w-full h-full text-green-600" data-lov-id="src/components/ui/qr-code.tsx:39:6" data-lov-name="QrCode" data-component-path="src/components/ui/qr-code.tsx" data-component-line="39" data-component-file="qr-code.tsx" data-component-name="QrCode" data-component-content="%7B%22className%22%3A%22w-full%20h-full%20text-green-600%22%7D">
                                                <rect width="5" height="5" x="3" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="16" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="3" y="16" rx="1"></rect>
                                                <path d="M21 16h-3a2 2 0 0 0-2 2v3"></path>
                                                <path d="M21 21v.01"></path>
                                                <path d="M12 7v3a2 2 0 0 1-2 2H7"></path>
                                                <path d="M3 12h.01"></path>
                                                <path d="M12 3h.01"></path>
                                                <path d="M12 16v.01"></path>
                                                <path d="M16 12h1"></path>
                                                <path d="M21 12v.01"></path>
                                                <path d="M12 21v-1"></path>
                                            </svg>
                                        </a>
                                    </span>
                                    <span class="sale-label">20%</span>
                                    <span class="cate-lable">Trứng gà</span>
                                </div>
                                <div class="product-card-info">
                                    <div class="product-card-review">
                                        <div class="product-card-review-stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <span class="star-count">(189)</span>
                                        </div>
                                    </div>
                                    <h3 class="product-card-title"><a href="#">Trứng gà thảo dược tươi</a></h3>
                                    <div class="product-card-description">
                                        <ul>
                                            <li>Giàu protein</li>
                                            <li>Tăng cường miễn dịch</li>
                                        </ul>
                                    </div>
                                    <div class="product-card-price">
                                        <span class="product-card-price-current">8.000đ</span>
                                        <span class="product-card-price-old">10.000đ</span>
                                    </div>
                                    <div class="product-card-actions">
                                        <a href="#" class="btn btn-primary btn-scale">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart w-4 h-4 mr-2" data-lov-id="src/components/ProductCard.tsx:121:10" data-lov-name="ShoppingCart" data-component-path="src/components/ProductCard.tsx" data-component-line="121" data-component-file="ProductCard.tsx" data-component-name="ShoppingCart" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-2%22%7D">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                                            </svg>
                                            Thêm vào giỏ
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card animate-in swiper-slide">
                                <div class="product-card-media">
                                    <div class="product-card-image">
                                        <img src="https://images.unsplash.com/photo-1582722872445-44dc5f7e3c8f?w=400&h=300&fit=crop" alt="">
                                    </div>
                                    <span class="product-card-qr">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-qr-code w-full h-full text-green-600" data-lov-id="src/components/ui/qr-code.tsx:39:6" data-lov-name="QrCode" data-component-path="src/components/ui/qr-code.tsx" data-component-line="39" data-component-file="qr-code.tsx" data-component-name="QrCode" data-component-content="%7B%22className%22%3A%22w-full%20h-full%20text-green-600%22%7D">
                                                <rect width="5" height="5" x="3" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="16" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="3" y="16" rx="1"></rect>
                                                <path d="M21 16h-3a2 2 0 0 0-2 2v3"></path>
                                                <path d="M21 21v.01"></path>
                                                <path d="M12 7v3a2 2 0 0 1-2 2H7"></path>
                                                <path d="M3 12h.01"></path>
                                                <path d="M12 3h.01"></path>
                                                <path d="M12 16v.01"></path>
                                                <path d="M16 12h1"></path>
                                                <path d="M21 12v.01"></path>
                                                <path d="M12 21v-1"></path>
                                            </svg>
                                        </a>
                                    </span>
                                    <span class="sale-label">20%</span>
                                    <span class="cate-lable">Trứng gà</span>
                                </div>
                                <div class="product-card-info">
                                    <div class="product-card-review">
                                        <div class="product-card-review-stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <span class="star-count">(189)</span>
                                        </div>
                                    </div>
                                    <h3 class="product-card-title"><a href="#">Trứng gà thảo dược tươi</a></h3>
                                    <div class="product-card-description">
                                        <ul>
                                            <li>Giàu protein</li>
                                            <li>Tăng cường miễn dịch</li>
                                        </ul>
                                    </div>
                                    <div class="product-card-price">
                                        <span class="product-card-price-current">8.000đ</span>
                                        <span class="product-card-price-old">10.000đ</span>
                                    </div>
                                    <div class="product-card-actions">
                                        <a href="#" class="btn btn-primary btn-scale">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart w-4 h-4 mr-2" data-lov-id="src/components/ProductCard.tsx:121:10" data-lov-name="ShoppingCart" data-component-path="src/components/ProductCard.tsx" data-component-line="121" data-component-file="ProductCard.tsx" data-component-name="ShoppingCart" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-2%22%7D">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                                            </svg>
                                            Thêm vào giỏ
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-buttons feature-products-buttons">
                            <div class="swiper-button-prev swiper-button"></div>
                            <div class="swiper-button-next swiper-button"></div>
                        </div>
                    </div>
                </div>
                <div class="feature-products-content" id="chicken-products">
                    <div class="feature-products-list swiper swiper-slider">
                        <div class="swiper-wrapper">
                            <div class="product-card animate-in swiper-slide">
                                <div class="product-card-media">
                                    <div class="product-card-image">
                                        <img src="https://images.unsplash.com/photo-1548550023-2bdb3c5beed7?w=400&h=300&fit=crop" alt="">
                                    </div>
                                    <span class="product-card-qr">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-qr-code w-full h-full text-green-600" data-lov-id="src/components/ui/qr-code.tsx:39:6" data-lov-name="QrCode" data-component-path="src/components/ui/qr-code.tsx" data-component-line="39" data-component-file="qr-code.tsx" data-component-name="QrCode" data-component-content="%7B%22className%22%3A%22w-full%20h-full%20text-green-600%22%7D">
                                                <rect width="5" height="5" x="3" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="16" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="3" y="16" rx="1"></rect>
                                                <path d="M21 16h-3a2 2 0 0 0-2 2v3"></path>
                                                <path d="M21 21v.01"></path>
                                                <path d="M12 7v3a2 2 0 0 1-2 2H7"></path>
                                                <path d="M3 12h.01"></path>
                                                <path d="M12 3h.01"></path>
                                                <path d="M12 16v.01"></path>
                                                <path d="M16 12h1"></path>
                                                <path d="M21 12v.01"></path>
                                                <path d="M12 21v-1"></path>
                                            </svg>
                                        </a>
                                    </span>
                                    <span class="sale-label">20%</span>
                                    <span class="cate-lable">Gà thảo dược</span>
                                </div>
                                <div class="product-card-info">
                                    <div class="product-card-review">
                                        <div class="product-card-review-stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <span class="star-count">(67)</span>
                                        </div>
                                    </div>
                                    <h3 class="product-card-title"><a href="#">Gà thảo dược nguyên con</a></h3>
                                    <div class="product-card-description">
                                        <ul>
                                            <li>Thịt chắc ngọt</li>
                                            <li>Không chất bảo quản</li>
                                        </ul>
                                    </div>
                                    <div class="product-card-price">
                                        <span class="product-card-price-current">280.000đ</span>
                                        <span class="product-card-price-old">320.000đ</span>
                                    </div>
                                    <div class="product-card-actions">
                                        <a href="#" class="btn btn-primary btn-scale">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart w-4 h-4 mr-2" data-lov-id="src/components/ProductCard.tsx:121:10" data-lov-name="ShoppingCart" data-component-path="src/components/ProductCard.tsx" data-component-line="121" data-component-file="ProductCard.tsx" data-component-name="ShoppingCart" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-2%22%7D">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                                            </svg>
                                            Thêm vào giỏ
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card animate-in swiper-slide">
                                <div class="product-card-media">
                                    <div class="product-card-image">
                                        <img src="https://images.unsplash.com/photo-1548550023-2bdb3c5beed7?w=400&h=300&fit=crop" alt="">
                                    </div>
                                    <span class="product-card-qr">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-qr-code w-full h-full text-green-600" data-lov-id="src/components/ui/qr-code.tsx:39:6" data-lov-name="QrCode" data-component-path="src/components/ui/qr-code.tsx" data-component-line="39" data-component-file="qr-code.tsx" data-component-name="QrCode" data-component-content="%7B%22className%22%3A%22w-full%20h-full%20text-green-600%22%7D">
                                                <rect width="5" height="5" x="3" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="16" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="3" y="16" rx="1"></rect>
                                                <path d="M21 16h-3a2 2 0 0 0-2 2v3"></path>
                                                <path d="M21 21v.01"></path>
                                                <path d="M12 7v3a2 2 0 0 1-2 2H7"></path>
                                                <path d="M3 12h.01"></path>
                                                <path d="M12 3h.01"></path>
                                                <path d="M12 16v.01"></path>
                                                <path d="M16 12h1"></path>
                                                <path d="M21 12v.01"></path>
                                                <path d="M12 21v-1"></path>
                                            </svg>
                                        </a>
                                    </span>
                                    <span class="sale-label">20%</span>
                                    <span class="cate-lable">Gà thảo dược</span>
                                </div>
                                <div class="product-card-info">
                                    <div class="product-card-review">
                                        <div class="product-card-review-stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <span class="star-count">(67)</span>
                                        </div>
                                    </div>
                                    <h3 class="product-card-title"><a href="#">Gà thảo dược nguyên con</a></h3>
                                    <div class="product-card-description">
                                        <ul>
                                            <li>Thịt chắc ngọt</li>
                                            <li>Không chất bảo quản</li>
                                        </ul>
                                    </div>
                                    <div class="product-card-price">
                                        <span class="product-card-price-current">280.000đ</span>
                                        <span class="product-card-price-old">320.000đ</span>
                                    </div>
                                    <div class="product-card-actions">
                                        <a href="#" class="btn btn-primary btn-scale">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart w-4 h-4 mr-2" data-lov-id="src/components/ProductCard.tsx:121:10" data-lov-name="ShoppingCart" data-component-path="src/components/ProductCard.tsx" data-component-line="121" data-component-file="ProductCard.tsx" data-component-name="ShoppingCart" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-2%22%7D">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                                            </svg>
                                            Thêm vào giỏ
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card animate-in swiper-slide">
                                <div class="product-card-media">
                                    <div class="product-card-image">
                                        <img src="https://images.unsplash.com/photo-1548550023-2bdb3c5beed7?w=400&h=300&fit=crop" alt="">
                                    </div>
                                    <span class="product-card-qr">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-qr-code w-full h-full text-green-600" data-lov-id="src/components/ui/qr-code.tsx:39:6" data-lov-name="QrCode" data-component-path="src/components/ui/qr-code.tsx" data-component-line="39" data-component-file="qr-code.tsx" data-component-name="QrCode" data-component-content="%7B%22className%22%3A%22w-full%20h-full%20text-green-600%22%7D">
                                                <rect width="5" height="5" x="3" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="16" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="3" y="16" rx="1"></rect>
                                                <path d="M21 16h-3a2 2 0 0 0-2 2v3"></path>
                                                <path d="M21 21v.01"></path>
                                                <path d="M12 7v3a2 2 0 0 1-2 2H7"></path>
                                                <path d="M3 12h.01"></path>
                                                <path d="M12 3h.01"></path>
                                                <path d="M12 16v.01"></path>
                                                <path d="M16 12h1"></path>
                                                <path d="M21 12v.01"></path>
                                                <path d="M12 21v-1"></path>
                                            </svg>
                                        </a>
                                    </span>
                                    <span class="sale-label">20%</span>
                                    <span class="cate-lable">Gà thảo dược</span>
                                </div>
                                <div class="product-card-info">
                                    <div class="product-card-review">
                                        <div class="product-card-review-stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <span class="star-count">(67)</span>
                                        </div>
                                    </div>
                                    <h3 class="product-card-title"><a href="#">Gà thảo dược nguyên con</a></h3>
                                    <div class="product-card-description">
                                        <ul>
                                            <li>Thịt chắc ngọt</li>
                                            <li>Không chất bảo quản</li>
                                        </ul>
                                    </div>
                                    <div class="product-card-price">
                                        <span class="product-card-price-current">280.000đ</span>
                                        <span class="product-card-price-old">320.000đ</span>
                                    </div>
                                    <div class="product-card-actions">
                                        <a href="#" class="btn btn-primary btn-scale">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart w-4 h-4 mr-2" data-lov-id="src/components/ProductCard.tsx:121:10" data-lov-name="ShoppingCart" data-component-path="src/components/ProductCard.tsx" data-component-line="121" data-component-file="ProductCard.tsx" data-component-name="ShoppingCart" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-2%22%7D">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                                            </svg>
                                            Thêm vào giỏ
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card animate-in swiper-slide">
                                <div class="product-card-media">
                                    <div class="product-card-image">
                                        <img src="https://images.unsplash.com/photo-1548550023-2bdb3c5beed7?w=400&h=300&fit=crop" alt="">
                                    </div>
                                    <span class="product-card-qr">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-qr-code w-full h-full text-green-600" data-lov-id="src/components/ui/qr-code.tsx:39:6" data-lov-name="QrCode" data-component-path="src/components/ui/qr-code.tsx" data-component-line="39" data-component-file="qr-code.tsx" data-component-name="QrCode" data-component-content="%7B%22className%22%3A%22w-full%20h-full%20text-green-600%22%7D">
                                                <rect width="5" height="5" x="3" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="16" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="3" y="16" rx="1"></rect>
                                                <path d="M21 16h-3a2 2 0 0 0-2 2v3"></path>
                                                <path d="M21 21v.01"></path>
                                                <path d="M12 7v3a2 2 0 0 1-2 2H7"></path>
                                                <path d="M3 12h.01"></path>
                                                <path d="M12 3h.01"></path>
                                                <path d="M12 16v.01"></path>
                                                <path d="M16 12h1"></path>
                                                <path d="M21 12v.01"></path>
                                                <path d="M12 21v-1"></path>
                                            </svg>
                                        </a>
                                    </span>
                                    <span class="sale-label">20%</span>
                                    <span class="cate-lable">Gà thảo dược</span>
                                </div>
                                <div class="product-card-info">
                                    <div class="product-card-review">
                                        <div class="product-card-review-stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <span class="star-count">(67)</span>
                                        </div>
                                    </div>
                                    <h3 class="product-card-title"><a href="#">Gà thảo dược nguyên con</a></h3>
                                    <div class="product-card-description">
                                        <ul>
                                            <li>Thịt chắc ngọt</li>
                                            <li>Không chất bảo quản</li>
                                        </ul>
                                    </div>
                                    <div class="product-card-price">
                                        <span class="product-card-price-current">280.000đ</span>
                                        <span class="product-card-price-old">320.000đ</span>
                                    </div>
                                    <div class="product-card-actions">
                                        <a href="#" class="btn btn-primary btn-scale">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart w-4 h-4 mr-2" data-lov-id="src/components/ProductCard.tsx:121:10" data-lov-name="ShoppingCart" data-component-path="src/components/ProductCard.tsx" data-component-line="121" data-component-file="ProductCard.tsx" data-component-name="ShoppingCart" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-2%22%7D">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                                            </svg>
                                            Thêm vào giỏ
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-buttons feature-products-buttons">
                            <div class="swiper-button-prev swiper-button"></div>
                            <div class="swiper-button-next swiper-button"></div>
                        </div>
                    </div>
                </div>
                <div class="feature-products-content" id="medicinal-products">
                    <div class="feature-products-list swiper swiper-slider">
                        <div class="swiper-wrapper">
                            <div class="product-card animate-in swiper-slide">
                                <div class="product-card-media">
                                    <div class="product-card-image">
                                        <img src="https://images.unsplash.com/photo-1582722872445-44dc5f7e3c8f?w=400&h=300&fit=crop" alt="">
                                    </div>
                                    <span class="product-card-qr">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-qr-code w-full h-full text-green-600" data-lov-id="src/components/ui/qr-code.tsx:39:6" data-lov-name="QrCode" data-component-path="src/components/ui/qr-code.tsx" data-component-line="39" data-component-file="qr-code.tsx" data-component-name="QrCode" data-component-content="%7B%22className%22%3A%22w-full%20h-full%20text-green-600%22%7D">
                                                <rect width="5" height="5" x="3" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="16" y="3" rx="1"></rect>
                                                <rect width="5" height="5" x="3" y="16" rx="1"></rect>
                                                <path d="M21 16h-3a2 2 0 0 0-2 2v3"></path>
                                                <path d="M21 21v.01"></path>
                                                <path d="M12 7v3a2 2 0 0 1-2 2H7"></path>
                                                <path d="M3 12h.01"></path>
                                                <path d="M12 3h.01"></path>
                                                <path d="M12 16v.01"></path>
                                                <path d="M16 12h1"></path>
                                                <path d="M21 12v.01"></path>
                                                <path d="M12 21v-1"></path>
                                            </svg>
                                        </a>
                                    </span>
                                    <span class="sale-label">20%</span>
                                    <span class="cate-lable">Trứng gà</span>
                                </div>
                                <div class="product-card-info">
                                    <div class="product-card-review">
                                        <div class="product-card-review-stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star star-filled fill-current" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 star" data-lov-id="src/components/ProductCard.tsx:74:14" data-lov-name="Star" data-component-path="src/components/ProductCard.tsx" data-component-line="74" data-component-file="ProductCard.tsx" data-component-name="Star" data-component-content="%7B%7D">
                                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                            </svg>
                                            <span class="star-count">(189)</span>
                                        </div>
                                    </div>
                                    <h3 class="product-card-title"><a href="#">Trứng gà thảo dược tươi</a></h3>
                                    <div class="product-card-description">
                                        <ul>
                                            <li>Giàu protein</li>
                                            <li>Tăng cường miễn dịch</li>
                                        </ul>
                                    </div>
                                    <div class="product-card-price">
                                        <span class="product-card-price-current">8.000đ</span>
                                        <span class="product-card-price-old">10.000đ</span>
                                    </div>
                                    <div class="product-card-actions">
                                        <a href="#" class="btn btn-primary btn-scale">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart w-4 h-4 mr-2" data-lov-id="src/components/ProductCard.tsx:121:10" data-lov-name="ShoppingCart" data-component-path="src/components/ProductCard.tsx" data-component-line="121" data-component-file="ProductCard.tsx" data-component-name="ShoppingCart" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-2%22%7D">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                                            </svg>
                                            Thêm vào giỏ
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-buttons feature-products-buttons">
                            <div class="swiper-button-prev swiper-button"></div>
                            <div class="swiper-button-next swiper-button"></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($feature_block) : ?>
                <div class="feature-products-showcase animate-in">
                    <?php if ($feature_block['title']) : ?>
                        <h3><?php echo esc_html($feature_block['title']); ?></h3>
                    <?php endif; ?>
                    <?php if ($feature_block['text']) : ?>
                        <p><?php echo esc_html($feature_block['text']); ?></p>
                    <?php endif; ?>
                    <div class="showcase-actions">
                        <?php if ($feature_block['button_1']) : ?>
                            <a href="<?php echo esc_url($feature_block['button_1_link']); ?>" class="btn btn-white btn-larger btn-scale">
                                <?php echo esc_html($feature_block['button_1']); ?>
                            </a>
                        <?php endif; ?>
                        <?php if ($feature_block['button_2']) : ?>
                            <a href="<?php echo esc_url($feature_block['button_2_link']); ?>" class="btn btn-white btn-larger btn-scale">
                                <?php echo esc_html($feature_block['button_2']); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

<!-- Blog sections -->
<?php $blogs = get_field('blog'); ?>
<?php if ($blogs): ?>
    <?php
    $subtitle = $blogs['subtitle'];
    $heading = $blogs['heading'];
    $content = $blogs['content'];
    $button_label = $blogs['button_label'];
    $button_url = $blogs['button_url'];
    $feature_post = $blogs['feature_post'];
    ?>
    <section id="blog-section" class="blog-section">
        <div class="container">
            <div class="section-header animate-in">
                <?php if ($subtitle): ?>
                    <span class="section-subtitle"><?php echo esc_html($subtitle); ?></span>
                <?php endif; ?>
                <?php if ($heading): ?>
                    <h2 class="section-title"><?php echo $heading; ?></h2>
                <?php endif; ?>
                <?php if ($content): ?>
                    <div class="section-text"><?php echo $content; ?></div>
                <?php endif; ?>
            </div>
            <?php if ($feature_post): ?>
                <div class="section-feature-blog animate-in">
                    <?php
                    $title = get_the_title($feature_post);
                    $permalink = get_permalink($feature_post);
                    $date = get_the_date('d/m/Y', $feature_post);
                    $author = get_the_author_meta('display_name', get_post_field('post_author', $feature_post));
                    ?>
                    <div class="feature-blog-item">
                        <div class="feature-blog-card">
                            <div class="feature-blog-card-info">
                                <span class="blog-tag">Nổi bật</span>
                                <span class="blog-info-item date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar w-4 h-4" data-lov-id="src/components/BlogSection.tsx:69:18" data-lov-name="Calendar" data-component-path="src/components/BlogSection.tsx" data-component-line="69" data-component-file="BlogSection.tsx" data-component-name="Calendar" data-component-content="%7B%22className%22%3A%22w-4%20h-4%22%7D">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>
                                    <?php echo esc_html($date); ?>
                                </span>
                                <span class="blog-info-item time">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open w-4 h-4" data-lov-id="src/components/BlogSection.tsx:73:18" data-lov-name="BookOpen" data-component-path="src/components/BlogSection.tsx" data-component-line="73" data-component-file="BlogSection.tsx" data-component-name="BookOpen" data-component-content="%7B%22className%22%3A%22w-4%20h-4%22%7D">
                                        <path d="M12 7v14"></path>
                                        <path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path>
                                    </svg>
                                    5 phút đọc
                                </span>
                            </div>
                            <h3 class="feature-blog-title"><?php echo $title; ?></h3>
                            <div class="feature-blog-description">
                                <p>
                                    <?php echo get_the_excerpt($feature_post); ?>
                                </p>
                            </div>
                            <div class="feature-blog-cate">
                                <span class="blog-cate-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user w-4 h-4" data-lov-id="src/components/BlogSection.tsx:90:18" data-lov-name="User" data-component-path="src/components/BlogSection.tsx" data-component-line="90" data-component-file="BlogSection.tsx" data-component-name="User" data-component-content="%7B%22className%22%3A%22w-4%20h-4%22%7D">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <?php echo esc_html($author); ?>
                                </span>
                                <span class="blog-cate-item">
                                    <span class="point">•</span>
                                    Sống xanh
                                </span>
                            </div>
                            <a href="<?php echo esc_url($permalink); ?>" class="btn feature-read-more">
                                Đọc bài viết
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 ml-2" data-lov-id="src/components/BlogSection.tsx:101:16" data-lov-name="ArrowRight" data-component-path="src/components/BlogSection.tsx" data-component-line="101" data-component-file="BlogSection.tsx" data-component-name="ArrowRight" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20ml-2%22%7D">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="feature-blog-image">
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url($feature_post)); ?>" alt="Blog Post 1">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="blog-list animate-in">
                <article class="blog-item">
                    <div class="blog-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 animate-fade-in">
                        <div class="blog-card-image">
                            <img src="https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?w=500&h=350&fit=crop" alt="Blog Post 2">
                            <span class="blog-card-tag">Mới nhất</span>
                        </div>
                        <div class="blog-card-info">
                            <div class="blog-card-meta">
                                <span class="blog-info-item date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar w-4 h-4" data-lov-id="src/components/BlogSection.tsx:69:18" data-lov-name="Calendar" data-component-path="src/components/BlogSection.tsx" data-component-line="69" data-component-file="BlogSection.tsx" data-component-name="Calendar" data-component-content="%7B%22className%22%3A%22w-4%20h-4%22%7D">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>
                                    15/12/2024
                                </span>
                                <span class="blog-info-item time">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open w-4 h-4" data-lov-id="src/components/BlogSection.tsx:73:18" data-lov-name="BookOpen" data-component-path="src/components/BlogSection.tsx" data-component-line="73" data-component-file="BlogSection.tsx" data-component-name="BookOpen" data-component-content="%7B%22className%22%3A%22w-4%20h-4%22%7D">
                                        <path d="M12 7v14"></path>
                                        <path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path>
                                    </svg>
                                    5 phút đọc
                                </span>
                            </div>
                            <h3 class="blog-title"><a href="#">Hướng dẫn sử dụng trứng thảo dược hiệu quả nhất</a></h3>
                            <p class="blog-description">Cách chế biến và sử dụng trứng thảo dược để đạt hiệu quả dinh dưỡng tối ưu cho cả gia đình</p>
                            <div class="blog-author">
                                <span class="blog-author-name">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user w-4 h-4" data-lov-id="src/components/BlogSection.tsx:90:18" data-lov-name="User" data-component-path="src/components/BlogSection.tsx" data-component-line="90" data-component-file="BlogSection.tsx" data-component-name="User" data-component-content="%7B%22className%22%3A%22w-4%20h-4%22%7D">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    Bác sĩ Nguyễn Thu
                                </span>
                                <a href="#" class="blog-read-more">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 ml-2" data-lov-id="src/components/BlogSection.tsx:101:16" data-lov-name="ArrowRight" data-component-path="src/components/BlogSection.tsx" data-component-line="101" data-component-file="BlogSection.tsx" data-component-name="ArrowRight" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20ml-2%22%7D">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="blog-item animate-in">
                    <div class="blog-card bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 animate-fade-in">
                        <div class="blog-card-image">
                            <img src="https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?w=500&h=350&fit=crop" alt="Blog Post 2">
                            <span class="blog-card-tag">Mới nhất</span>
                        </div>
                        <div class="blog-card-info">
                            <div class="blog-card-meta">
                                <span class="blog-info-item date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar w-4 h-4" data-lov-id="src/components/BlogSection.tsx:69:18" data-lov-name="Calendar" data-component-path="src/components/BlogSection.tsx" data-component-line="69" data-component-file="BlogSection.tsx" data-component-name="Calendar" data-component-content="%7B%22className%22%3A%22w-4%20h-4%22%7D">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>
                                    15/12/2024
                                </span>
                                <span class="blog-info-item time">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open w-4 h-4" data-lov-id="src/components/BlogSection.tsx:73:18" data-lov-name="BookOpen" data-component-path="src/components/BlogSection.tsx" data-component-line="73" data-component-file="BlogSection.tsx" data-component-name="BookOpen" data-component-content="%7B%22className%22%3A%22w-4%20h-4%22%7D">
                                        <path d="M12 7v14"></path>
                                        <path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path>
                                    </svg>
                                    5 phút đọc
                                </span>
                            </div>
                            <h3 class="blog-title"><a href="#">Mô hình nuôi gà thả vườn tại nhà</a></h3>
                            <p class="blog-description">Chia sẻ kinh nghiệm nuôi gà sạch tại nhà, từ việc chọn giống đến chăm sóc hàng ngày</p>
                            <div class="blog-author">
                                <span class="blog-author-name">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user w-4 h-4" data-lov-id="src/components/BlogSection.tsx:90:18" data-lov-name="User" data-component-path="src/components/BlogSection.tsx" data-component-line="90" data-component-file="BlogSection.tsx" data-component-name="User" data-component-content="%7B%22className%22%3A%22w-4%20h-4%22%7D">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    Nông dân Vieco
                                </span>
                                <a href="#" class="blog-read-more">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 ml-2" data-lov-id="src/components/BlogSection.tsx:101:16" data-lov-name="ArrowRight" data-component-path="src/components/BlogSection.tsx" data-component-line="101" data-component-file="BlogSection.tsx" data-component-name="ArrowRight" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20ml-2%22%7D">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="animate-in blog-actions">
                <a href="<?php echo esc_url($button_url); ?>" class="btn btn-secondary btn-larger btn-scale load-more">
                    <?php echo esc_html($button_label); ?>
                    <!-- Arrow icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-5 h-5 ml-2" data-lov-id="src/components/BlogSection.tsx:184:12" data-lov-name="ArrowRight" data-component-path="src/components/BlogSection.tsx" data-component-line="184" data-component-file="BlogSection.tsx" data-component-name="ArrowRight" data-component-content="%7B%22className%22%3A%22w-5%20h-5%20ml-2%22%7D">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg></a>
            </div>
    </section>
<?php endif; ?>

<!-- Contact Section -->
<?php $about = get_field('about'); ?>
<?php if ($about): ?>
    <?php
    $heading = $about['heading'];
    $content = $about['content'];
    $social = $about['social'];
    $note = $about['note'];
    ?>
    <section id="contact" class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-header">
                    <?php if ($heading): ?>
                        <h2 class="about-title"><?php echo $heading; ?></h2>
                    <?php endif; ?>
                    <?php if ($content): ?>
                        <div class="about-text"><?php echo $content; ?></div>
                    <?php endif; ?>
                </div>
                <?php if ($social): ?>
                    <div class="about-actions">
                        <?php if ($social['text_1']): ?>
                            <?php $link_1 = $social['link_1'] ? $social['link_1'] : '#'; ?>
                            <a href="tel:<?php echo $link_1; ?>" class="phone-action">
                                <?php echo file_get_contents($social['icon_1']); ?>
                                <div class="text">
                                    <?php echo $social['text_1']; ?>
                                </div>
                            </a>
                        <?php endif; ?>
                        <?php if ($social['text_2']): ?>
                            <?php $link_2 = $social['link_2'] ? $social['link_2'] : '#'; ?>
                            <a href="<?php echo $link_2; ?>" class="zalo-action">
                                <?php echo file_get_contents($social['icon_2']); ?>
                                <div class="text">
                                    <?php echo $social['text_2']; ?>
                                </div>
                            </a>
                        <?php endif; ?>
                        <?php if ($social['text_3']): ?>
                            <?php $link_3 = $social['link_3'] ? $social['link_3'] : '#'; ?>
                            <a href="<?php echo $link_3; ?>" class="order-action">
                                <?php echo file_get_contents($social['icon_3']); ?>
                                <div class="text">
                                    <?php echo $social['text_3']; ?>
                                </div>
                            </a>
                        <?php endif; ?>
                        <?php if ($social['text_4']): ?>
                            <?php $link_4 = $social['link_4'] ? $social['link_4'] : '#'; ?>
                            <a href="<?php echo $link_4; ?>" class="partnership-action">
                                <?php echo file_get_contents($social['icon_4']); ?>
                                <div class="text">
                                    <?php echo $social['text_4']; ?>
                                </div>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if ($note): ?>
                    <div class="about-note">
                        <div class="note-list">
                            <p><span></span>Miễn phí giao hàng từ 500k</p>
                            <p><span></span>Cam kết 100% tự nhiên</p>
                            <p><span></span>Đổi trả trong 7 ngày</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>