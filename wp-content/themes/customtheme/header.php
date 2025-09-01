<?php
/**
 * Header template
 * @package leelaHoldings
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php if(function_exists('wp_body_open')){
    wp_body_open(); 
    } ?>

    <div id="page" class="site">
    <header id="masthead" class="site_header">Header</header>
    <?php get_template_part( '/template-parts/header/nav.php'); ?>
    <div id="content" class="site-content"></div>
    </div>
