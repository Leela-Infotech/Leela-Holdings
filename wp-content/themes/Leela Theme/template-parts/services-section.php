<?php
/**
 * Services section Template
 * @package Leela infotech
 */

// Array of services
$services = [
    [
        'icon' => '/wp-content/uploads/2025/09/education.png',
        'title' => 'Leela Tests',
        'description' => 'Our upcoming platform designed to help students excel in competitive exams such as SSC CGL, CHSL, SSB, and more. We provide structured MCQ test series, instant scoring, and detailed analytics to support effective preparation.',
        'button_text' => 'Discover Leela Tests',
        'button_link' => 'https://tests.leelaholdings.in'
    ],
    [
        'icon' => '/wp-content/uploads/2025/09/programming.png',
        'title' => 'Leela Infotech',
        'description' => 'A web development division under Leela Holdings dedicated to empowering small businesses and entrepreneurs with professional, responsive websites.',
        'button_text' => 'Discover Leela Infotech',
        'button_link' => 'https://infotech.leelaholdings.in'
    ],
    [
        'icon' => '/wp-content/uploads/2025/09/tshirt.png',
        'title' => 'Leela Wear',
        'description' => 'A fast-growing clothing and lifestyle initiative focused on delivering trendy, affordable fashion items within 10–30 minutes across our service locations.',
        'button_text' => 'Discover Leela Wear',
        'button_link' => 'https://wear.leelaholdings.in'
    ],
    [
        'icon' => '/wp-content/uploads/2025/09/transport.png',
        'title' => 'Leela Transport',
        'description' => 'Leela Transport provides reliable and efficient transportation and delivery services.',
        'button_text' => 'Discover Leela Transport',
        'button_link' => 'https://transport.leelaholdings.in'
    ],
    [
        'icon' => '/wp-content/uploads/2025/09/retail.png',
        'title' => 'Leela Retail',
        'description' => 'Leela Retail offers a wide range of quality everyday essentials with quick delivery.',
        'button_text' => 'Discover Leela Retail',
        'button_link' => 'https://retail.leelaholdings.in'
    ]
];

// Dynamic heading
$heading = is_front_page() ? "Brands Under Leela Holdings" : "Services We Provide";
$paragraph = is_front_page()
    ? "From web development to fashion, explore our diverse ventures."
    : "Explore the range of solutions we offer to help your business grow and succeed.";
?>

<section class="bg-white py-5" id="leela-brands">
    <div class="container text-start">
        <h1 class="mb-2"><?php echo esc_html($heading); ?></h1>
        <p class="mb-5"><?php echo esc_html($paragraph); ?></p>
    </div>

    <div class="container">
        <div class="row g-4 justify-content-center services-grid">

            <?php foreach ($services as $index => $service): ?>
                <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                    <div class="service-card h-100 w-100 p-4 shadow-sm" data-tilt>
                        <div class="text-center mb-3">
                            <img src="<?php echo esc_url(home_url($service['icon'])); ?>"
                                 alt="<?php echo esc_attr($service['title']); ?> Icon"
                                 style="width:80px;height:80px;object-fit:cover;">
                        </div>

                        <h2 class="h4"><?php echo esc_html($service['title']); ?></h2>
                        <p><?php echo esc_html($service['description']); ?></p>

                        <a href="<?php echo esc_url($service['button_link']); ?>" class="btn btn-success mt-2"
                           target="_blank">
                           <?php echo esc_html($service['button_text']); ?>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
