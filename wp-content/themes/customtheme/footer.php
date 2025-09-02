<?php 
/**
 * Footer Template
 */
?>
<footer class="bg-black text-white text-center">
       <main class="d-flex flex-column">
         <div class="container py-5">
            <div class="row ">
                <div class="col-lg-2">
                    <h3>Travel</h3>
                   
                </div>
                  <div class="col-lg-2">
                    <h3>Our Offices</h3>
                    <?php
                    wp_nav_menu(array('
                    theme_location'=>'Office-menu',
                    'menu-class'=>'nav'))
                    ?>
                </div>
                  <div class="col-lg-2">
                    <h3>Our Activities</h3>
                    <?php
                    wp_nav_menu(array('
                    theme_location'=>'Activity-menu',
                    'menu-class'=>'nav'))
                    ?>
                </div>
                 <div class="col-lg-2">
                    <h3>Travel Blogs</h3>
                    <?php
                    wp_nav_menu(array('
                    theme_location'=>'Travel-Blog-menu',
                    'menu-class'=>'nav'))
                    ?>
                </div>
                 <div class="col-lg-2">
                    <h3>About Us</h3>
                    <?php
                    wp_nav_menu(array('
                    theme_location'=>'About-menu',
                    'menu-class'=>'nav'))
                    ?>
                </div>
                <div class="col-lg-2">Contact Us</div>
            </div>
        </div>
      
        <div class="bg-secondary text-center p-2">© 2025 Leela Infotech | Built by Atul Chambyal</div>
         </main>
    </footer>

<?php wp_footer(); ?>
    </body>
</html>
