<?php
/*
 * @package Leela infotech
*/

get_header();
?>

<main class="error-404 not-found justify-content-center d-flex  flex-column" style="text-align:center; padding: 80px 20px;">
    <h1 style="font-size:3rem; color:#111;">404 – Page Not Found</h1>
    <p style="font-size:1.2rem; margin:20px auto; max-width:600px; color:#555;">
        Looks like this page doesn’t exist. Don’t worry—we build better websites than this error! 🚀  
    </p>

    <div style="margin-top:30px;">
        <a href="<?php echo home_url(); ?>" 
           style="background:#111; color:#fff; padding:12px 24px; border-radius:6px; text-decoration:none; margin:5px; display:inline-block;">
           Back to Home
        </a>

        <a href="<?php echo home_url('/contact'); ?>" 
           style="background:#f04e30; color:#fff; padding:12px 24px; border-radius:6px; text-decoration:none; margin:5px; display:inline-block;">
           Contact Us
        </a>
    </div>

    <div style="margin-top:40px; font-size:0.9rem; color:#888;">
        <p>Need a website that never lets visitors get lost? <strong>We can build it for you.</strong></p>
    </div>
</main>

<?php get_footer(); ?>
