<?php
/**
 * Template Name: Blank Template
 * @package Leela Infotech
 */

get_header(); ?>

<main id="primary" class="site-main">

<img src="https://leelaholdings.in/wp-content/uploads/2026/07/img1.jpg" width="100%" alt="main">

    <div class="">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>

    <!-- Services Section -->
    <!-- <?php 
    //  get_template_part('template-parts/CTA/c');
    //  get_template_part('template-parts/services_infotech');

      ?> -->
</main>

<?php
get_footer();