<?php 
/**
 * Services section Template
 * @package Leela infotech
 */

// Array of services
$services = [
    [
        'icon' => get_template_directory_uri() . '/images/services-images/education.png',
        'title' => 'Leela Tests',
        'description' => 'Our upcoming platform designed to help students excel in competitive exams such as SSC CGL, CHSL, SSB, and more. We provide structured MCQ test series, instant scoring, and detailed analytics to support effective preparation.',
        'button_text' => 'Explore Leela Tests',
        'button_link' => home_url('#')
    ],
    [
        'icon' => get_template_directory_uri() . '/images/services-images/programming.png',
        'title' => 'Leela Infotech',
        'description' => 'A web development division under Leela Holdings dedicated to empowering small businesses and entrepreneurs with professional, responsive websites. Our expert developers deliver custom solutions to showcase your services, sell products, and grow your online presence.',
        'button_text' => 'Visit Leela Infotech',
        'button_link' => 'https://infotech.leelaholdings.in'
    ],
    [
        'icon' => get_template_directory_uri() . '/images/services-images/tshirt.png',
        'title' => 'Leela Wear',
        'description' => 'A fast-growing clothing and lifestyle initiative focused on delivering trendy, affordable fashion items within 10–30 minutes across our service locations. Our goal is to combine style, convenience, and quality for a superior shopping experience.',
        'button_text' => 'Discover Leela Wear',
        'button_link' => home_url('#')
    ]
];
?>

<main class="bg-white py-5">
    <div class="container text-center">
        <h1 class="mb-2">Brands Under Leela Holdings</h1>
        <p class="mb-5">From web development to fashion, explore our diverse ventures.</p>

        <div class="row g-4 justify-content-center services-grid">

            <?php foreach ($services as $index => $service) : ?>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center <?php echo ($index > 0) ? 'd-none d-md-block' : ''; ?>">
                <div class="service-card h-100 w-100" data-tilt>
                    <div class="text-center mb-3">
                        <img src="<?php echo esc_url($service['icon']); ?>" alt="<?php echo esc_attr($service['title']); ?> Icon" class="rounded-circle border border-3 border-success" style="width:80px; height:80px; object-fit:cover;">
                    </div>
                    <h2><?php echo esc_html($service['title']); ?></h2>
                    <p><?php echo esc_html($service['description']); ?></p>
                    <a href="<?php echo esc_url($service['button_link']); ?>" class="btn btn-success" target="_blank">
                        <?php echo esc_html($service['button_text']); ?>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</main>
