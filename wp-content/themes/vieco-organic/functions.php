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
 * Register Custom Post Type: Product
 */
function vieco_organic_register_product_post_type()
{
    $labels = array(
        'name'                  => _x('Products', 'Post Type General Name', 'vieco-organic'),
        'singular_name'         => _x('Product', 'Post Type Singular Name', 'vieco-organic'),
        'menu_name'             => __('Products', 'vieco-organic'),
        'name_admin_bar'        => __('Product', 'vieco-organic'),
        'archives'              => __('Product Archives', 'vieco-organic'),
        'attributes'            => __('Product Attributes', 'vieco-organic'),
        'parent_item_colon'     => __('Parent Product:', 'vieco-organic'),
        'all_items'             => __('All Products', 'vieco-organic'),
        'add_new_item'          => __('Add New Product', 'vieco-organic'),
        'add_new'               => __('Add New', 'vieco-organic'),
        'new_item'              => __('New Product', 'vieco-organic'),
        'edit_item'             => __('Edit Product', 'vieco-organic'),
        'update_item'           => __('Update Product', 'vieco-organic'),
        'view_item'             => __('View Product', 'vieco-organic'),
        'view_items'            => __('View Products', 'vieco-organic'),
        'search_items'          => __('Search Product', 'vieco-organic'),
        'not_found'             => __('Not found', 'vieco-organic'),
        'not_found_in_trash'    => __('Not found in Trash', 'vieco-organic'),
        'featured_image'        => __('Product Image', 'vieco-organic'),
        'set_featured_image'    => __('Set product image', 'vieco-organic'),
        'remove_featured_image' => __('Remove product image', 'vieco-organic'),
        'use_featured_image'    => __('Use as product image', 'vieco-organic'),
        'insert_into_item'      => __('Insert into product', 'vieco-organic'),
        'uploaded_to_this_item' => __('Uploaded to this product', 'vieco-organic'),
        'items_list'            => __('Products list', 'vieco-organic'),
        'items_list_navigation' => __('Products list navigation', 'vieco-organic'),
        'filter_items_list'     => __('Filter products list', 'vieco-organic'),
    );

    $args = array(
        'label'                 => __('Product', 'vieco-organic'),
        'description'           => __('Organic products for the store', 'vieco-organic'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions'),
        'taxonomies'            => array('product_category', 'product_tag'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-products',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rewrite'               => array(
            'slug'              => 'products',
            'with_front'        => false,
        ),
    );

    register_post_type('product', $args);
}
add_action('init', 'vieco_organic_register_product_post_type', 0);

/**
 * Register Custom Taxonomies for Product Post Type
 */
function vieco_organic_register_product_taxonomies()
{
    // Product Categories
    $category_labels = array(
        'name'                       => _x('Product Categories', 'Taxonomy General Name', 'vieco-organic'),
        'singular_name'              => _x('Product Category', 'Taxonomy Singular Name', 'vieco-organic'),
        'menu_name'                  => __('Categories', 'vieco-organic'),
        'all_items'                  => __('All Categories', 'vieco-organic'),
        'parent_item'                => __('Parent Category', 'vieco-organic'),
        'parent_item_colon'          => __('Parent Category:', 'vieco-organic'),
        'new_item_name'              => __('New Category Name', 'vieco-organic'),
        'add_new_item'               => __('Add New Category', 'vieco-organic'),
        'edit_item'                  => __('Edit Category', 'vieco-organic'),
        'update_item'                => __('Update Category', 'vieco-organic'),
        'view_item'                  => __('View Category', 'vieco-organic'),
        'separate_items_with_commas' => __('Separate categories with commas', 'vieco-organic'),
        'add_or_remove_items'        => __('Add or remove categories', 'vieco-organic'),
        'choose_from_most_used'      => __('Choose from the most used', 'vieco-organic'),
        'popular_items'              => __('Popular Categories', 'vieco-organic'),
        'search_items'               => __('Search Categories', 'vieco-organic'),
        'not_found'                  => __('Not Found', 'vieco-organic'),
        'no_terms'                   => __('No categories', 'vieco-organic'),
        'items_list'                 => __('Categories list', 'vieco-organic'),
        'items_list_navigation'      => __('Categories list navigation', 'vieco-organic'),
    );

    $category_args = array(
        'labels'                     => $category_labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
        'rewrite'                    => array(
            'slug'                   => 'product-category',
            'with_front'             => false,
        ),
    );

    register_taxonomy('product_category', array('product'), $category_args);

    // Product Tags
    $tag_labels = array(
        'name'                       => _x('Product Tags', 'Taxonomy General Name', 'vieco-organic'),
        'singular_name'              => _x('Product Tag', 'Taxonomy Singular Name', 'vieco-organic'),
        'menu_name'                  => __('Tags', 'vieco-organic'),
        'all_items'                  => __('All Tags', 'vieco-organic'),
        'parent_item'                => __('Parent Tag', 'vieco-organic'),
        'parent_item_colon'          => __('Parent Tag:', 'vieco-organic'),
        'new_item_name'              => __('New Tag Name', 'vieco-organic'),
        'add_new_item'               => __('Add New Tag', 'vieco-organic'),
        'edit_item'                  => __('Edit Tag', 'vieco-organic'),
        'update_item'                => __('Update Tag', 'vieco-organic'),
        'view_item'                  => __('View Tag', 'vieco-organic'),
        'separate_items_with_commas' => __('Separate tags with commas', 'vieco-organic'),
        'add_or_remove_items'        => __('Add or remove tags', 'vieco-organic'),
        'choose_from_most_used'      => __('Choose from the most used', 'vieco-organic'),
        'popular_items'              => __('Popular Tags', 'vieco-organic'),
        'search_items'               => __('Search Tags', 'vieco-organic'),
        'not_found'                  => __('Not Found', 'vieco-organic'),
        'no_terms'                   => __('No tags', 'vieco-organic'),
        'items_list'                 => __('Tags list', 'vieco-organic'),
        'items_list_navigation'      => __('Tags list navigation', 'vieco-organic'),
    );

    $tag_args = array(
        'labels'                     => $tag_labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
        'rewrite'                    => array(
            'slug'                   => 'product-tag',
            'with_front'             => false,
        ),
    );

    register_taxonomy('product_tag', array('product'), $tag_args);
}
add_action('init', 'vieco_organic_register_product_taxonomies', 0);

/**
 * Add custom meta fields for products
 */
function vieco_organic_add_product_meta_boxes()
{
    add_meta_box(
        'product-details',
        __('Product Details', 'vieco-organic'),
        'vieco_organic_product_details_callback',
        'product',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'vieco_organic_add_product_meta_boxes');

/**
 * Product details meta box callback
 */
function vieco_organic_product_details_callback($post)
{
    // Add nonce for security
    wp_nonce_field('vieco_organic_product_meta', 'vieco_organic_product_meta_nonce');

    // Get existing values
    $price = get_post_meta($post->ID, '_product_price', true);
    $sku = get_post_meta($post->ID, '_product_sku', true);
    $weight = get_post_meta($post->ID, '_product_weight', true);
    $ingredients = get_post_meta($post->ID, '_product_ingredients', true);
    $benefits = get_post_meta($post->ID, '_product_benefits', true);
    $advantage = get_post_meta($post->ID, '_product_advantage', true);
    $guides = get_post_meta($post->ID, '_product_guides', true);

    echo '<table class="form-table">';

    // Price
    echo '<tr>';
    echo '<th><label for="product_price">' . __('Price ', 'vieco-organic') . '</label></th>';
    echo '<td><input type="number" step="0.01" id="product_price" name="product_price" value="' . esc_attr($price) . '" style="width: 100px;" /></td>';
    echo '</tr>';

    // SKU
    echo '<tr>';
    echo '<th><label for="product_sku">' . __('SKU', 'vieco-organic') . '</label></th>';
    echo '<td><input type="text" id="product_sku" name="product_sku" value="' . esc_attr($sku) . '" style="width: 200px;" /></td>';
    echo '</tr>';

    // Weight
    echo '<tr>';
    echo '<th><label for="product_weight">' . __('Weight', 'vieco-organic') . '</label></th>';
    echo '<td><input type="text" id="product_weight" name="product_weight" value="' . esc_attr($weight) . '" style="width: 200px;" placeholder="e.g., 500g, 1kg" /></td>';
    echo '</tr>';

    // Ingredients
    echo '<tr>';
    echo '<th><label for="product_ingredients">' . __('Ingredients', 'vieco-organic') . '</label></th>';
    echo '<td><textarea id="product_ingredients" name="product_ingredients" rows="3" style="width: 100%;">' . esc_textarea($ingredients) . '</textarea></td>';
    echo '</tr>';

    // Benefits
    echo '<tr>';
    echo '<th><label for="product_benefits">' . __('Benefits', 'vieco-organic') . '</label></th>';
    echo '<td><textarea id="product_benefits" name="product_benefits" rows="3" style="width: 100%;">' . esc_textarea($benefits) . '</textarea></td>';
    echo '</tr>';

    // Advantages
    echo '<tr>';
    echo '<th><label for="product_advantage">' . __('Advantages', 'vieco-organic') . '</label></th>';
    echo '<td><textarea id="product_advantage" name="product_advantage" rows="3" style="width: 100%;">' . esc_textarea($advantage) . '</textarea></td>';
    echo '</tr>';

    // Guides
    echo '<tr>';
    echo '<th><label for="product_guides">' . __('Guides', 'vieco-organic') . '</label></th>';
    echo '<td><textarea id="product_guides" name="product_guides" rows="3" style="width: 100%;">' . esc_textarea($guides) . '</textarea></td>';
    echo '</tr>';

    echo '</table>';
}

/**
 * Save product meta fields
 */
function vieco_organic_save_product_meta($post_id)
{
    // Check if nonce is valid
    if (!isset($_POST['vieco_organic_product_meta_nonce']) || !wp_verify_nonce($_POST['vieco_organic_product_meta_nonce'], 'vieco_organic_product_meta')) {
        return;
    }

    // Check if user has permission to edit
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Check if not an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Save meta fields
    $fields = array('product_price', 'product_sku', 'product_weight', 'product_ingredients', 'product_benefits', 'product_certification');

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post_product', 'vieco_organic_save_product_meta');

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

/**
 * Allow SVG uploads in WordPress
 * Note: Ensure you trust the source of SVG files as they can contain malicious code.
 */
function allow_svg_upload($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');
