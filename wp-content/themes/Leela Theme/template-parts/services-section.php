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
        'description' => 'A web development division under Leela Holdings dedicated to empowering small businesses and entrepreneurs with professional, responsive websites. Our expert developers deliver custom solutions to showcase your services, sell products, and grow your online presence.',
        'button_text' => 'Discover Leela Infotech',
        'button_link' => 'https://infotech.leelaholdings.in'
    ],
    [
        'icon' => '/wp-content/uploads/2025/09/tshirt.png',
        'title' => 'Leela Wear',
        'description' => 'A fast-growing clothing and lifestyle initiative focused on delivering trendy, affordable fashion items within 10–30 minutes across our service locations. Our goal is to combine style, convenience, and quality for a superior shopping experience.',
        'button_text' => 'Discover Leela Wear',
        'button_link' => 'https://wear.leelaholdings.in'
    ],
    [
        'icon' => '/wp-content/uploads/2025/09/transport.png',
        'title' => 'Leela Transport',
        'description' => 'Leela Transport is dedicated to safe, reliable, and efficient transportation services. From personal logistics to business deliveries, we ensure timely and secure movement of goods, helping individuals and businesses stay connected and productive.',
        'button_text' => 'Discover Leela Transport',
        'button_link' => 'https://transport.leelaholdings.in'
    ],
    [
        'icon' => '/wp-content/uploads/2025/09/retail.png',
        'title' => 'Leela Retail',
        'description' => 'Leela Retail is our one-stop solution for shopping everyday essentials and lifestyle products. We focus on providing a seamless shopping experience with a wide range of quality items, quick delivery, and customer satisfaction at the heart of everything we do.',
        'button_text' => 'Discover Leela Retail',
        'button_link' => 'https://retail.leelaholdings.in'
    ]
];

if(is_front_page()){
    $heading="Brands Under Leela Holdings";
    $paragraph="From web development to fashion, explore our diverse ventures.";
}else{
    $heading="Services We Provide";
    $paragraph="Explore the range of solutions we offer to help your business grow and succeed.";
}
?>

<main class="bg-white py-5" id="leela-brands">
    <div class="container text-center shadow p-5">

        <h1 class="mb-2"><?php echo $heading; ?></h1>
        <p class="mb-5"><?php echo $paragraph; ?></p>

        <div class="row g-4 justify-content-center services-grid">

            <?php foreach ($services as $index => $service) : ?>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center <?php echo ($index > 0) ? 'd-none d-md-block' : ''; ?>">
                <div class="service-card h-100 w-100" data-tilt>
                    <div class="text-center mb-3">
                        <img src="<?php echo esc_url(home_url($service['icon'])); ?>" alt="<?php echo esc_attr($service['title']); ?> Icon" class="services-logo" style="width:80px; height:80px; object-fit:cover;">
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
