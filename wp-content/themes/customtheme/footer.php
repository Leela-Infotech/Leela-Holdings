<?php 
/**
 * Footer Template
 */
?>
<footer class="bg-black text-white text-center">
       <main class="d-flex flex-column">
         <div class="container py-5">
            <div class="row ">
                <div class="col-lg-2">Travel
                    <?php
                    wp_nav_menu(array('
                    theme_location'=>'Travel-menu',
                    'menu-class'=>'nav'))
                    ?>
                </div>
                <div class="col-lg-2">Our Offices</div>
                <div class="col-lg-2">Our Activities</div>
                <div class="col-lg-2">Travel Blogs</div>
                <div class="col-lg-2">About Us</div>
                <div class="col-lg-2">Contact Us</div>
            </div>
        </div>
      
        <div class="bg-secondary text-center p-2">© 2025 Leela Infotech | Built by Atul Chambyal</div>
         </main>
    </footer>

<?php wp_footer(); ?>
    </body>
</html>
