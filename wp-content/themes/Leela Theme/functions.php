<?php
/**
 * Theme Functions.
 * 
 * @package leelaHoldings
 */


// Enable dynamic title support
function leela_theme_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'leela_theme_setup' );


function leelaHoldings_enqueue_scripts() {
    // Register styles 
    wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all' );
    wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all' );
  
    // Register scripts 
    wp_register_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);
    wp_register_script( 'cards-js', get_template_directory_uri() . '/assets/cards.js', [], filemtime(get_template_directory() . '/assets/cards.js'), true );

    // Enqueue styles 
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');

    // Enqueue scripts 
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
    wp_enqueue_script('cards-js');
}
add_action( 'wp_enqueue_scripts', 'leelaHoldings_enqueue_scripts');
// Enqueue SCSS compiled main.css
function leela_theme_enqueue_styles() {
    wp_enqueue_style(
        'leela-main',
        get_stylesheet_directory_uri() . '/styles/css/main.css',
        array(),
        filemtime(get_stylesheet_directory() . '/styles/css/main.css')
    );
}
add_action('wp_enqueue_scripts', 'leela_theme_enqueue_styles');

// Sass end


// Main Menus
function custom_theme_main_menu(){
    register_nav_menus(
        array(
            'main-menu'=> __('Main Menu'),
            'footer-menu-1'=> __('Footer Menu 1'),
            'footer-menu-2'=>__('Footer Menu 2'),
        )
    );
}
add_action('init', 'custom_theme_main_menu');



// Hide admin bar only for subscribers
function hide_admin_bar_for_subscribers() {
    if (current_user_can('subscriber')) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'hide_admin_bar_for_subscribers');



// Shortcode for clickable phone number
add_shortcode('site_phone_number', function () {
    return '<a href="tel:+917018950221">+91-70189-50221</a>';
});

// Shortcode for clickable site URL
add_shortcode('site_url', function () {
    $url = get_site_url();
    return '<a href="' . $url . '">' . $url . '</a>';
});



function leela_enqueue_swiper() {
    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], null);

    // Swiper JS (web component version)
    wp_enqueue_script('swiper-element', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js', [], null, true);

    // Initialize Swiper after DOM load
    wp_add_inline_script('swiper-element', "
        document.addEventListener('DOMContentLoaded', function() {
            const swipers = document.querySelectorAll('swiper-container');
            swipers.forEach(swiperEl => swiperEl.initialize());
        });
    ");
}
add_action('wp_enqueue_scripts', 'leela_enqueue_swiper');


// Register Sidebar
function leela_infotech_sidebar() {
    register_sidebar(array(
        'name'          => __('Main Sidebar', 'leela-infotech'),
        'id'            => 'main-sidebar',
        'description'   => __('Widgets in this area will be shown on the sidebar.', 'leela-infotech'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'leela_infotech_sidebar');

?>






