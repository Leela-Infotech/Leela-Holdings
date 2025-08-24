<?php
/**
 * Theme Functions.
 * 
 * @package leelaHoldings
 */




function leelaHoldings_enqueue_scripts(){
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css', 'all') );
}

add_action ('wp_enqueue_scripts', 'leelaHoldings_enqueue_scripts' );


?>
