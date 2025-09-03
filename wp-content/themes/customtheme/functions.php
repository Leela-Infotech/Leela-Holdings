<?php
/**
 * Theme Functions.
 * 
 * @package leelaHoldings
 */



function leelaHoldings_enqueue_scripts() {
    // Register styles 
    wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all' );
    wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all' );
  
    // Register scripts 
    wp_register_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);
   
    // Enqueue styles 
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');

    // Enqueue scripts 
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');

}
add_action( 'wp_enqueue_scripts', 'leelaHoldings_enqueue_scripts');





// Main Menus

function custom_theme_main_menu(){
    register_nav_menus(
        array('main-menu'=> __('Main Menu'),
        )
    );
}
add_action('init', 'custom_theme_main_menu');


// Enqueue Swiper styles and scripts
function mytheme_enqueue_swiper_assets() {
    // Theme stylesheet (style.css)
    wp_enqueue_style(
        'mytheme-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        '11.0.0'
    );

    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        '11.0.0',
        true
    );

    // Custom Swiper initialization
    wp_add_inline_script(
        'swiper-js',
        'var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
              delay: 3500,
              disableOnInteraction: false,
            },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
        });'
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_swiper_assets');





?>
