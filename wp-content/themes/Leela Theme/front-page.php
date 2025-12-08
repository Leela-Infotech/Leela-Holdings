<?php
/**
 * Main template file.
 * 
 * @package leelaHoldings
 */
get_header();
?>


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
