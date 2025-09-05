<?php
/**
 * Main template file.
 * 
 * @package leelaHoldings
 */
get_header();
?>
<main id="main" class="site-main">
    <?php
      echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(244);
      echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(228);
      echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(222);
    
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content(); // shows content from the WordPress editor
        endwhile;
    endif;
    ?>
</main>

<?php
get_footer();