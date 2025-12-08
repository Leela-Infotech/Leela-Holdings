<?php
/**
 * Main template file.
 * 
 * @package leelaHoldings
 */
get_header();
?>
   <main id="main" class="site-main">
  <div class="container-fluid p-0">
    <?php 
      get_template_part('template-parts/services-section');
      get_template_part('template-parts/about');
    ?>
  </div>

  <!-- Front-page contact form start -->
<section class="bg-white text-black py-5">
  <div class="container">
    <!-- Partnership CTA  -->
    <h2 class="h1 pt-5">Looking to partner with Leela Holdings?</h2>
    <p class="text-12">For partnerships, investor relations or careers — tell us about your interest.</p>
    <h2 class="h1 pt-5">Connect with us?</h2>
    <p class="text-12">Fill the details & Our Project Manager will get in touch with you within several hours.</p>
    <!-- Partnership CTA -->
    <h2 class="h1 pt-5">Looking to partner with Leela Holdings?</h2>
    <p class="text-12">For partnerships, investor relations or careers — tell us about your interest.</p>
    <?php 
      echo do_shortcode('[wpforms id="282" title="false"]');
    ?>
    
  </div>
</section>
  <!-- Front-page contact form end -->

<?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            the_content(); // Elementor content
        }
    }
?>
</main>

<?php get_footer(); ?>
