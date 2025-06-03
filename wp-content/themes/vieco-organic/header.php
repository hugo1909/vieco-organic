<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?> <!-- Header -->
    <header class="site-header">
        <div class="container mx-auto px-6">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <!-- Logo -->
                <?php if (has_custom_logo()) : ?>
                    <div class="site-logo">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php else : ?>
                    <a href="<?php echo home_url(); ?>" class="site-logo flex items-center space-x-2">
                        <span class="logo-icon text-2xl">🌿</span>
                        <span class="logo-text font-bold text-xl text-gray-800">Vieco Organic</span>
                    </a>
                <?php endif; ?>

                <!-- Navigation Menu (Desktop) -->
                <nav class="main-navigation hidden md:flex">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'fallback_cb'    => 'vieco_organic_fallback_menu',
                        'menu_class'     => 'nav-menu flex space-x-8',
                    ));
                    ?>
                </nav> <!-- Header Actions -->
                <div class="header-actions flex items-center">
                    <a href="tel:<?php echo vieco_get_theme_option('contact_phone', '0123456789'); ?>" class="btn btn-secondary hotline-btn hidden md:inline-flex items-center space-x-2 text-green-600 hover:text-green-700 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-4 h-4 mr-2" data-lov-id="src/components/Navigation.tsx:72:14" data-lov-name="Phone" data-component-path="src/components/Navigation.tsx" data-component-line="72" data-component-file="Navigation.tsx" data-component-name="Phone" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-2%22%7D">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        Hotline
                    </a>
                    <a href="#contact" class="btn order-btn hidden md:inline-flex bg-green-600 text-white px-6 py-2 rounded-full hover:bg-green-700 transition-colors font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart w-4 h-4 mr-2" data-lov-id="src/components/Navigation.tsx:79:14" data-lov-name="ShoppingCart" data-component-path="src/components/Navigation.tsx" data-component-line="79" data-component-file="Navigation.tsx" data-component-name="ShoppingCart" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-2%22%7D">
                            <circle cx="8" cy="21" r="1"></circle>
                            <circle cx="19" cy="21" r="1"></circle>
                            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                        </svg>
                        Đặt hàng
                    </a>
                    <button class="mobile-menu-toggle md:hidden flex flex-col space-y-1" aria-label="Toggle navigation">
                        <span class="bugger-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu w-6 h-6 text-gray-700" data-lov-id="src/components/Navigation.tsx:92:14" data-lov-name="Menu" data-component-path="src/components/Navigation.tsx" data-component-line="92" data-component-file="Navigation.tsx" data-component-name="Menu" data-component-content="%7B%22className%22%3A%22w-6%20h-6%20text-gray-700%22%7D">
                                <line x1="4" x2="20" y1="12" y2="12"></line>
                                <line x1="4" x2="20" y1="6" y2="6"></line>
                                <line x1="4" x2="20" y1="18" y2="18"></line>
                            </svg>
                        </span>
                        <span class="close-icon hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x w-6 h-6 text-gray-700" data-lov-id="src/components/Navigation.tsx:90:14" data-lov-name="X" data-component-path="src/components/Navigation.tsx" data-component-line="90" data-component-file="Navigation.tsx" data-component-name="X" data-component-content="%7B%22className%22%3A%22w-6%20h-6%20text-gray-700%22%7D">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
            <!-- Mobile Navigation -->
            <div class="mobile-navigation md:hidden">
                <div class="mobile-menu-overlay"></div>
                <div class="mobile-menu-content">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'fallback_cb'    => 'vieco_organic_fallback_menu',
                        'menu_class'     => 'mobile-nav-menu',
                    ));
                    ?>
                    <div class="mobile-menu-actions">
                        <a href="tel:<?php echo vieco_get_theme_option('contact_phone', '0123456789'); ?>" class="mobile-action-btn btn mobile-hotline">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-4 h-4 mr-2" data-lov-id="src/components/Navigation.tsx:72:14" data-lov-name="Phone" data-component-path="src/components/Navigation.tsx" data-component-line="72" data-component-file="Navigation.tsx" data-component-name="Phone" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-2%22%7D">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            Hotline: 0123 456 789
                        </a>
                        <a href="#contact" class="mobile-action-btn btn mobile-order">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart w-4 h-4 mr-2" data-lov-id="src/components/Navigation.tsx:79:14" data-lov-name="ShoppingCart" data-component-path="src/components/Navigation.tsx" data-component-line="79" data-component-file="Navigation.tsx" data-component-name="ShoppingCart" data-component-content="%7B%22className%22%3A%22w-4%20h-4%20mr-2%22%7D">
                                <circle cx="8" cy="21" r="1"></circle>
                                <circle cx="19" cy="21" r="1"></circle>
                                <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                            </svg>
                            Đặt hàng ngay
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>