<?php 
/**
 * Header Navigation Template
 * @package customtheme
 */
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand" href="https://leelaholdings.in/">
      <img src="/wp-content/uploads/2025/09/logo.png" width="200px" alt="" class="shadow-bg-btn border-radius-8">
    </a>

    <!-- Toggler Button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'menu_class'     => 'navbar-nav ms-auto', // Bootstrap nav styling
          'container'      => false,
        ));
      ?>
      <div class="btn">
    <div class="bg_Orange shadow-bg-btn-orange border-radius-50">
  <?php echo do_shortcode('[xoo_el_pop text="{pop}Login/Signup{/pop}" type="login" change_to_text="{logout}Logout/signout{/logout} {firstname}"]'); ?>
</div>
 </div>
    </div>
  </div>
</nav>