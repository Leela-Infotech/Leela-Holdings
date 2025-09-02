<?php 
/**
 * Footer Template
 */

$footer_images = [
    'mailbox' => [
        'src' => get_template_directory_uri() . '/images/icons/mailbox.png',
        'alt' => 'Mailbox Icon'
    ],
    'logo' => [
        'src' => get_template_directory_uri() . '/images/icons/logo.png',
        'alt' => 'Travel Logo'
    ],
    'phone' => [
        'src' => get_template_directory_uri() . '/images/icons/phone.png',
        'alt' => 'Phone Icon'
    ],
];
?>
<footer class="position-relative main-footer">
  <div class="mail-box-container w-100 rounded text-center container position-absolute">
        <div class="row">
          <div class="col-lg-8 col-md-8 p-4 text-start">
            <h5>SUBSCRIBE</h5>
            <H5>NEWSLETTER</H5>
            <div>
              <h6>The Travel</h6>
              <p>Get inspired! Receive travel discounts, tips and behind the scenes stories.</p>
            </div>
            <div class="row">
              <div class="col-8"><input type="email" class="w-100" style="height:38px"></div>
              <div class="col-4">
                <button class="btn bg-black text-white">Subscribe</button>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <img src="<?php echo esc_url( $footer_images['mailbox']['src'] ); ?>"
             alt="<?php echo esc_attr( $footer_images['mailbox']['alt'] ); ?>" class="img-fluid mb-3">
          </div>
        </div>
    </div>
<footer class="bg-black text-white text-center pt-5">
       <main class="d-flex flex-column">
         <div class="container py-5">
            <div class="row ">
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Travel</h5>

  <div class="footer-logos d-flex flex-wrap align-items-center gap-3">
    <?php
    for ( $i = 1; $i <= 4; $i++ ) {
        $img = lh_get_footer_setting( "footer_image_{$i}" );
        if ( $img && is_array( $img ) ) {
            // choose a WP size to keep things light: 'thumbnail', 'medium', etc.
            $src = !empty($img['sizes']['medium']) ? $img['sizes']['medium'] : $img['url'];
            $alt = !empty($img['alt']) ? $img['alt'] : "Footer image {$i}";
            echo '<img src="' . esc_url($src) . '" alt="' . esc_attr($alt) . '" class="footer-logo-img" loading="lazy">';
        }
    }
    ?>
  </div>

                   
                </div>
                  <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Our Offices</h5>
                    <?php
                     wp_nav_menu(array(
          'theme_location' => 'footer-offices',
          'menu_class'     => 'list-unstyled',
          'container'      => false
        ));
                    ?>
                </div>
                  <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Our Activities</h5>
                    <?php
                   wp_nav_menu(array(
          'theme_location' => 'footer-activities',
          'menu_class'     => 'list-unstyled',
          'container'      => false
        ));
                    ?>
                </div>
                 <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Travel Blogs</h5>
                    <?php
                    wp_nav_menu(array(
          'theme_location' => 'footer-blogs',
          'menu_class'     => 'list-unstyled',
          'container'      => false
        ));
                    ?>
                </div>
                 <div class="col-lg-2 col-md-6 mb-4">
                    <h5>About Us</h5>
                    <?php
                     wp_nav_menu(array(
          'theme_location' => 'footer-about',
          'menu_class'     => 'list-unstyled',
          'container'      => false
        ));
                    ?>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">Contact Us</div>
            </div>
        </div>
      
        <div class="bg-secondary text-center p-2">© 2025 Leela Infotech | Built by Atul Chambyal</div>
         </main>
    </footer>
 </footer>
<?php wp_footer(); ?>
    </body>
</html>
