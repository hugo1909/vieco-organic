<?php

/**
 * Vieco Organic Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup
 */
function vieco_organic_setup()
{
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add custom image sizes
    add_image_size('vieco-featured', 800, 600, true);
    add_image_size('vieco-thumbnail', 300, 200, true);

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'vieco-organic'),
        'footer' => __('Footer Menu', 'vieco-organic'),
    ));
}
add_action('after_setup_theme', 'vieco_organic_setup');

/**
 * Enqueue scripts and styles
 */
function vieco_organic_scripts()
{
    // Enqueue main stylesheet
    wp_enqueue_style(
        'vieco-organic-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );    // Enqueue Google Fonts
    wp_enqueue_style(
        'vieco-organic-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // Enqueue Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css',
        array(),
        '6.0.0'
    );

    // Enqueue custom JavaScript
    wp_enqueue_script(
        'vieco-organic-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array('jquery'),
        wp_get_theme()->get('Version'),
        true
    );

    // Smooth scrolling script
    wp_add_inline_script('vieco-organic-main', '
        jQuery(document).ready(function($) {
            // Smooth scrolling for anchor links
            $("a[href^=\"#\"]").on("click", function(e) {
                e.preventDefault();
                var target = $(this.hash);
                if (target.length) {
                    $("html, body").animate({
                        scrollTop: target.offset().top - 80
                    }, 800);
                }
            });
            
            // Header scroll effect
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll >= 50) {
                    $(".site-header").addClass("scrolled");
                } else {
                    $(".site-header").removeClass("scrolled");
                }
            });
        });
    ');

    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0');

    // Thêm Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true);
}
add_action('wp_enqueue_scripts', 'vieco_organic_scripts');

/**
 * Add custom CSS for scrolled header
 */
function vieco_organic_custom_css()
{
    echo '<style>
        .site-header.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 2px 20px rgba(46, 125, 50, 0.1);
        }
        
        .site-header.scrolled .site-logo {
            color: #1b5e20;
        }
    </style>';
}
add_action('wp_head', 'vieco_organic_custom_css');

/**
 * Register widget areas
 */
function vieco_organic_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Footer Widget Area 1', 'vieco-organic'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in the first footer column.', 'vieco-organic'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget Area 2', 'vieco-organic'),
        'id'            => 'footer-2',
        'description'   => __('Add widgets here to appear in the second footer column.', 'vieco-organic'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget Area 3', 'vieco-organic'),
        'id'            => 'footer-3',
        'description'   => __('Add widgets here to appear in the third footer column.', 'vieco-organic'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'vieco_organic_widgets_init');

/**
 * Customizer additions
 */
function vieco_organic_customize_register($wp_customize)
{
    // Hero section settings
    $wp_customize->add_section('vieco_hero_section', array(
        'title'    => __('Hero Section', 'vieco-organic'),
        'priority' => 30,
    ));

    // Hero title
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Pure. Natural. Organic.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_title', array(
        'label'   => __('Hero Title', 'vieco-organic'),
        'section' => 'vieco_hero_section',
        'type'    => 'text',
    ));

    // Hero subtitle
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'Discover the finest organic products that nourish your body and respect our planet.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Hero Subtitle', 'vieco-organic'),
        'section' => 'vieco_hero_section',
        'type'    => 'textarea',
    ));

    // Contact section
    $wp_customize->add_section('vieco_contact_section', array(
        'title'    => __('Contact Information', 'vieco-organic'),
        'priority' => 35,
    ));

    // Email
    $wp_customize->add_setting('contact_email', array(
        'default'           => 'hello@viecoorganic.com',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('contact_email', array(
        'label'   => __('Contact Email', 'vieco-organic'),
        'section' => 'vieco_contact_section',
        'type'    => 'email',
    ));

    // Phone
    $wp_customize->add_setting('contact_phone', array(
        'default'           => '(555) 123-4567',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contact_phone', array(
        'label'   => __('Contact Phone', 'vieco-organic'),
        'section' => 'vieco_contact_section',
        'type'    => 'text',
    ));

    // Address
    $wp_customize->add_setting('contact_address', array(
        'default'           => '123 Organic Lane, Green City',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contact_address', array(
        'label'   => __('Contact Address', 'vieco-organic'),
        'section' => 'vieco_contact_section',
        'type'    => 'text',
    ));
}
add_action('customize_register', 'vieco_organic_customize_register');

/**
 * Get customizer values with defaults
 */
function vieco_get_theme_option($option, $default = '')
{
    return get_theme_mod($option, $default);
}

/**
 * Fallback menu for when no menu is assigned
 */
function vieco_organic_fallback_menu()
{
    echo '<ul class="nav-menu">';
    echo '<li><a href="' . home_url() . '">Home</a></li>';
    echo '<li><a href="#about">About</a></li>';
    echo '<li><a href="#products">Products</a></li>';
    echo '<li><a href="#contact">Contact</a></li>';
    echo '</ul>';
}

/**
 * Add custom body classes
 */
function vieco_organic_body_classes($classes)
{
    // Add page slug to body class
    if (is_page()) {
        $classes[] = 'page-' . sanitize_html_class(get_post_field('post_name'));
    }

    // Add custom class for front page
    if (is_front_page()) {
        $classes[] = 'is-front-page';
    }

    return $classes;
}
add_filter('body_class', 'vieco_organic_body_classes');

/**
 * Excerpt length customization
 */
function vieco_organic_excerpt_length($length)
{
    return is_admin() ? $length : 25;
}
add_filter('excerpt_length', 'vieco_organic_excerpt_length', 999);

/**
 * Custom excerpt more text
 */
function vieco_organic_excerpt_more($more)
{
    return is_admin() ? $more : '...';
}
add_filter('excerpt_more', 'vieco_organic_excerpt_more');

/**
 * Add support for WooCommerce if installed
 */
function vieco_organic_woocommerce_support()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'vieco_organic_woocommerce_support');

/**
 * Disable WordPress admin bar for non-admins
 */
function vieco_organic_admin_bar()
{
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'vieco_organic_admin_bar');

/**
 * Add theme version to admin footer
 */
function vieco_organic_admin_footer_text($footer_text)
{
    $theme = wp_get_theme();
    return 'Vieco Organic Theme v' . $theme->get('Version');
}
add_filter('admin_footer_text', 'vieco_organic_admin_footer_text');
