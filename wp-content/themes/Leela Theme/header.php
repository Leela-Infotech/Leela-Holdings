<?php
/**
 * Header template
 * @package leelaHoldings
 */

$url_favicon=get_template_directory_uri() . '/images/logo/favicon.ico';
$url_favicon_png=get_template_directory_uri() . '/images/logo/favicon.png';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo $url_favicon_png ?>" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo $url_favicon_png ?>" sizes="48x48">
    <link rel="shortcut icon" href="<?php echo $url_favicon ?>">
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php if(function_exists('wp_body_open')){
    wp_body_open(); 
    } ?>

    <div id="page" class="site">
    <header id="masthead" class="site_header">
    <?php get_template_part( '/template-parts/header/nav'); 
      // Hero Banner
if( ! is_404() ){
         get_template_part('/template-parts/header/hero-banner');
}
?>
    
    </header>
    </div>
