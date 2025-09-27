<?php
/**
 * Template Name: Services Template
 * @package Leela Infotech
 */

get_header(); ?>

<main id="primary" class="site-main">

    <div class="container py-5">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>

    <!-- Services Section -->
    <?php get_template_part('template-parts/services-section');
     get_template_part('template-parts/CTA/a.php') ?>
</main>

<?php
get_footer();
