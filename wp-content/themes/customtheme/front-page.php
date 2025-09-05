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
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content(); // shows content from the WordPress editor
        endwhile;
    endif;
    ?>
</main>

<?php
get_footer();