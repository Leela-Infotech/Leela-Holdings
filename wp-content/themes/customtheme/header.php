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
    <header>Header</header>
