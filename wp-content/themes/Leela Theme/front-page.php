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
  get_template_part('/template-parts/services-section');
  get_template_part('/template-parts/dna-about');

     ?>
  </div>

  <!-- Front-page contact form start -->
<section class="bg-white text-black py-5">
  <div class="container">
    <h2 class="h1 pt-5">Ready to build a stellar WordPress website?</h2>
    <p class="text-12">Fill the details & Our Project Manager will get in touch with you within several hours.</p>
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
            // 🔹 Required for Elementor content
            the_content();
        }
    }
    ?>
</main>

<?php get_footer(); ?>
