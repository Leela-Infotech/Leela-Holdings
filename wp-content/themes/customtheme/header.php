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
    <title>Home</title>
    <?php wp_head(); ?>
    <style>
        /* Swiper css start*/
 html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #000;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #fff;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      height: 400px;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #444;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    /* swiper css end  */
    </style>
</head>
<body <?php body_class(); ?>>
    <?php if(function_exists('wp_body_open')){
    wp_body_open(); 
    } ?>

    <div id="page" class="site">
    <header id="masthead" class="site_header">
    <?php get_template_part( '/template-parts/header/nav'); ?>
    <main>
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/banner.png" alt="">
</div>
      <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/banner2.png" alt="">
      </div>
    </div>

    <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->
    <!-- <div class="swiper-pagination"></div> -->
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
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
    });
  </script>
    </main>
    </header>
    <div id="content" class="site-content"></div>
    </div>
