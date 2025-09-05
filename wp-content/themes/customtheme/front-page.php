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
      echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(311);
    ?>
</main>

<?php
get_footer();