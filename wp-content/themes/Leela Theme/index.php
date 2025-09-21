<?php
/**
 * Main template file.
 * 
 * @package Leela
 */
get_header();
?>

<div id="primary">
    <main id="main" class="site-main mt-5 container" role="main">
    <div class="px-lg-5">
        <?php if( have_posts() ){     
         while ( have_posts() ) : the_post();  
         the_content();
    endwhile;
    }
    ?>
    <!-- next previous button start  -->
<section class="pb-lg-5 pb-4">
<?php
$current_url = home_url( add_query_arg( NULL, NULL ) );

$uiux  = "https://infotech.leelaholdings.in/services/ui-ux-design/";
$web   = "https://infotech.leelaholdings.in/services/web-development/";
$dm    = "https://infotech.leelaholdings.in/services/digital-marketing/";

echo '<div class="d-flex gap-4">';

if ($current_url == $uiux) {
    // On first page → only NEXT
    echo '<a href="' . $web . '" class="btn btn-primary">Next</a>';
} 
elseif ($current_url == $web) {
    // On second page → PREVIOUS + NEXT
    echo '<a href="' . $uiux . '" class="btn btn-primary">Previous</a>';
    echo '<a href="' . $dm . '" class="btn btn-primary">Next</a>';
} 
elseif ($current_url == $dm) {
    // On third page → only PREVIOUS
    echo '<a href="' . $web . '" class="btn btn-primary">Previous</a>';
}
echo '</div>'; ?>
</section>
<!-- next previous button end  -->
    </div>
    </div>


    


    </main>
</div>


<?php get_footer(); ?>