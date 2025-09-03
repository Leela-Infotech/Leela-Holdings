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


// Footer Menus called
function custom_theme_footer_menus(){
    register_nav_menus(
    array(
            'footer-travel'      => __('Footer Travel'),
            'footer-offices'     => __('Footer Offices'),
            'footer-activities'  => __('Footer Activities'),
            'footer-blogs'       => __('Footer Blogs'),
            'footer-about'       => __('Footer About'),
            'footer-contact'     => __('Footer Contact'),
        )
    );
}
add_action('init', 'custom_theme_footer_menus');


// Get the Footer Settings page ID
function get_footer_settings_id() {
    $page = get_page_by_path('footer-settings'); // slug-based lookup
    return $page ? (int) $page->ID : 43;
}

// Get a specific footer field (e.g., facebook-icon)
function get_footer_field($field_name) {
    // Avoid fatal if ACF is inactive
    if ( ! function_exists('get_field') ) {
        return null;
    }

    $footer_id = get_footer_settings_id();
    return $footer_id ? get_field($field_name, $footer_id) : null;
}




?>
