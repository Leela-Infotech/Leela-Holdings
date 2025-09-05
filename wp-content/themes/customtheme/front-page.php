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
      echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(188);
      echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(244);
      echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(228);
      echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(222);
      echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(214);
    ?>
</main>

<?php
get_footer();