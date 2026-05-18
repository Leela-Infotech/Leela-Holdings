<?php
/**
 * Services section Template
 * @package Leela infotech
 */

if (is_page(41)) {
  // Array of services
$complete_projects = [
    [
        'icons' => [
            '/wp-content/uploads/2025/10/leela-infotech.png',
            '/wp-content/uploads/2025/10/programming.png'
        ],
        'title' => 'Leela Infotech',
        'description' => 'The main digital hub showcasing our services, vision, and client focus.',
        'button_text' => 'Discover Leela Infotech',
        'button_link' => 'https://infotech.leelaholdings.in'
    ],
    [
       'icons' => [
            '/wp-content/uploads/2025/10/leela-holdings.png',
            '/wp-content/uploads/2025/10/programming.png'
        ],
        'title' => 'Leela Holdings',
        'description' => 'Corporate website for the parent company — elegant, professional, and strategic.',
        'button_text' => 'Discover Leela Holdings',
        'button_link' => 'https://leelaholdings.in'
    ],
];

$recent_projects = [
    [
        'icons' => [
          '/wp-content/uploads/2025/10/leela-retail.png',
          '/wp-content/uploads/2025/10/retail.png',
        ],
        'title' => 'Leela Retail',
        'description' => 'Currently under development — bringing retail solutions to life online.',
        'button_text' => 'Discover Leela Retail',
        'button_link' => 'https://retail.leelaholdings.in'
    ],
    [
        'icons' => [
          '/wp-content/uploads/2025/10/leela-wear.jpg',
          '/wp-content/uploads/2025/10/tshirt.png',
        ],
        'title' => 'Leela Wear',
        'description' => 'Fashion meets tech — an evolving e-commerce experience in progress.',
        'button_text' => 'Discover Leela Wear',
        'button_link' => 'https://wear.leelaholdings.in'
    ],
     [
        'icons' => [
          '/wp-content/uploads/2025/10/leela-transport.png',
          '/wp-content/uploads/2025/10/tshirt.png',
        ],
        'title' => 'Leela Transport',
        'description' => 'Innovative logistics platform under construction to simplify transport systems.',
        'button_text' => 'Discover Leela Transport',
        'button_link' => 'https://wear.leelaholdings.in'
    ],
     [
        'icons' => [
          '/wp-content/uploads/2025/10/leela-test.png',
          '/wp-content/uploads/2025/10/tshirt.png',
        ],
        'title' => 'Leela Test',
        'description' => 'Internal testing project for UI/UX optimization and performance trials.',
        'button_text' => 'Discover Leela Test',
        'button_link' => 'https://wear.leelaholdings.in'
    ],
];

$upcoming_projects = [
    [
        'icons' => [
          '/wp-content/uploads/2025/10/leela-portfolio.jpg',
          '/wp-content/uploads/2025/10/education.png',
        ],
        'title' => 'Founder Portfolio',
        'description' => 'Personal portfolio showcasing the vision and achievements of Leela Holdings founder.',
        'button_text' => 'Discover Portfolio',
        'button_link' => 'https://portfolio.leelaholdings.in'
    ],
    [
        'icons' => [
          '/wp-content/uploads/2025/10/gym.jpeg',
          '/wp-content/uploads/2025/10/education.png',
        ],
        'title' => 'Gym Website',
        'description' => 'Upcoming project — a sleek and energetic website for a fitness brand.',
        'button_text' => 'Discover Gym Site',
        'button_link' => 'https://gym.leelaholdings.in'
    ],
     [
        'icons' => [
          '/wp-content/uploads/2025/10/leela-clinic.png',
          '/wp-content/uploads/2025/10/education.png',
        ],
        'title' => 'Clinic Website',
        'description' => 'Upcoming medical website focusing on trust, simplicity, and accessibility.',
        'button_text' => 'Discover Clinic Site',
        'button_link' => 'https://clinic.leelaholdings.in'
    ],
];
?>

<section id="leela-brands" class="bg-white py-5">
  <div class="container text-center shadow p-md-5">

    <h1 class="mb-2">Our Projects</h1>
    <p class="mb-5">Explore the journey of Leela Holdings — from completed work to upcoming innovations.</p>

    <!-- Buttons -->
    <div class="projects-container d-md-flex justify-content-evenly align-items-center gap-3 mb-5">
      <button class="btn btn-primary w-100 rounded-0 project-btn" data-type="complete">Complete Projects</button>
      <button class="btn btn-primary w-100 rounded-0 project-btn" data-type="recent">Recent Projects</button>
      <button class="btn btn-primary w-100 rounded-0 project-btn" data-type="upcoming">Upcoming Projects</button>
    </div>

    <!-- Projects Grid -->
    <div class="row g-4 justify-content-center services-grid"></div>

  </div>
</section>

<script>
  const projectData = {
    siteUrl: "<?php echo esc_url(home_url()); ?>",
    allProjects: {
      complete: <?php echo json_encode($complete_projects); ?>,
      recent: <?php echo json_encode($recent_projects); ?>,
      upcoming: <?php echo json_encode($upcoming_projects); ?>,
    }
  };
</script>
 
<?php } else { ?>
 <main class="bg-white py-5">
    <div class="container">
      <div class="row g-4 justify-content-center services-grid">
        <div class="col-lg-4 col-md-6 d-flex justify-content-center">
          <div class="service-card h-100 w-100" data-tilt>
            <h2>UI/UX Design</h2>
            <p>Elevate Your User Experience with Leela infotech’s Expert UI/UX Design Services Crafting Intuitive and
              Engaging Digital Experiences for Your Audience At Leela infotech, we specialize in creating...</p>
            <a href="<?php echo esc_url(home_url('/services/ui-ux-design/')); ?>" class="btn" target="_blank">Read
              More</a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex justify-content-center d-none d-md-block">
          <div class="service-card h-100 w-100" data-tilt>
            <h2>Web Development</h2>
            <p>Unlock Your Online Potential with Leela infotech's Expert Web Development Services Crafting Customized
              Websites to Power Your Digital Presence At Leela infotech, we are passionate about building...</p>
            <a href="<?php echo esc_url(home_url('/services/web-development/')); ?>" class="btn" target="_blank">Read
              More</a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex justify-content-center d-none d-lg-block">
          <div class="service-card h-100 w-100" data-tilt>
            <h2>Digital Marketing</h2>
            <p>Boost Your Online Presence with Leela infotech's Expert SEO Services Maximizing Your Visibility and Driving
              Results in the Digital Landscape At Leela infotech, we understand the importance...</p>
            <a href="<?php echo esc_url(home_url('/services/digital-marketing/')); ?>" class="btn" target="_blank">Read
              More</a>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php } ?>