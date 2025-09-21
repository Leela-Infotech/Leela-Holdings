<?php
/**
 * Blogs file.
 * 
 * @package Leela infotech
 */
get_header();
?>

    
   <div class="container py-lg-5 py-2">
    <div class="content-area row" style="display: flex; gap: 20px;">
     <!-- Main Blog Content -->
    <main class="site-main col-lg-8 col-12">
       <?php if( have_posts() ){     
         while ( have_posts() ) : the_post();  
         the_content();
    endwhile;
    }
    ?>
    </main>

    <!-- Sidebar -->
    <div class="sidebar-wrapper col-lg-4 d-lg-block d-none" style="flex: 1;">
        <?php get_sidebar(); ?>
    </div>
   </div>
</div>
<?php get_footer('');
?>