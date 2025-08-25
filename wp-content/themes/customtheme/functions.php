<?php
/**
 * Theme Functions.
 * 
 * @package leelaHoldings
 */



function leelaHoldings_enqueue_scripts() {
    wp_enqueue_style( 'style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all' );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);

/**
 * IF WE WANT TO ADD STYLES TO DIFFERNET PAGES AND WANT THE CSS TO WORK ON DIFFERENT PAGES 
 * 
 *  wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all' );
    if (is_page(4)){
        wp_enqueue_style(' style-css');
    }
 * 
 */
   
}
add_action( 'wp_enqueue_scripts', 'leelaHoldings_enqueue_scripts');
?>
