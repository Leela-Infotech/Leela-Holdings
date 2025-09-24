<?php 
/**
 * Header Navigation Template
 * @package Leela infotech
 */

$site_logo =[
       "url"  => "/images/logo/leelaholdings.svg",
       "alt" => "Leela Infotech Logo", 
       "class" => "img-logo"
     ];
?>
      
     <nav class="navbar navbar-expand-lg bg-body-tertiary position-fixed w-100 z-3 top-0">
  <div class="container">
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/' . $site_logo["url"]) ?>" alt="<?php echo esc_attr($site_logo["alt"]); ?>"  class="<?php echo esc_attr($site_logo["class"]); ?>">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'menu_class'     => 'navbar-nav ms-auto', // Bootstrap nav styling
          'container'      => false,
        ));
      ?>
    </div>
      </div>
</nav>