<?php
/**
 * Blogs file.
 * 
 * @package Leela infotech
 */
get_header();
?>

    
     <!-- Main Blog Content -->
    <main class="site-main col-lg-8 col-12">
       <?php if( have_posts() ){     
         while ( have_posts() ) : the_post();  
         the_content();
    endwhile;
    }
    ?>
    </main>

 
<?php get_footer('');
?>