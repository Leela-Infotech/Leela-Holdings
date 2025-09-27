<?php
// Story section about us
// Place this in your theme and include it in front-page or home template via get_template_part()

// Replace these with dynamic calls if you store them in ACF/options page


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

?>
<section class="services-container">
<div class="container">
<div class="row py-5 text-white">
  <div class="about-section col-lg-6 col-md-12">
    <div class="p-3">
      <h2 class="section-title mb-3 fw-bold">Future Vision / Roadmap</h2>
      <p class="lead">
        Leela Holdings is a diversified group that builds and operates businesses across technology, education,
        fashion, retail, and logistics. We partner with entrepreneurs, investors, and customers to deliver practical,
        scalable solutions that drive growth, trust and long-term value.
      </p>
    </div>
    <div class="p-3">
      <h2 class="section-title mb-3 fw-bold">Leadership / Team</h2>
      <p class="lead">
        Behind every venture at Leela Holdings is a team of passionate leaders and innovators. Our leadership brings together expertise from diverse industries—education, technology, fashion, logistics, and retail—uniting under one vision: to deliver meaningful growth with integrity. We believe success comes not just from what we build, but from the people who make it possible.
      </p>
    </div>
  </div>

   <div class="about-swiper col-lg-6 col-md-12">
    <swiper-container class="mySwiper"
        space-between="30"
        centered-slides="true" 
        slides-per-view="1"
        autoplay-delay="2500" 
        autoplay-disable-on-interaction="false"
        autoplay-pause-on-mouse-enter="true">
        
        <?php foreach ($services as $service): ?>
          <swiper-slide>
            <div class="service-card h-100 w-100 bg-white" data-tilt>
              <div class="text-center mb-3 d-flex justify-content-center">
                <img src="<?php echo esc_url($service['icon']); ?>" 
                     alt="<?php echo esc_attr($service['title']); ?> Icon" 
                     class="services-logo" 
                     style="width:80px; height:80px; object-fit:cover;">
              </div>
              <h2><?php echo esc_html($service['title']); ?></h2>
              <p><?php echo esc_html($service['description']); ?></p>
              <a href="<?php echo esc_url($service['button_link']); ?>" 
                 class="btn btn-success" 
                 target="_blank">
                <?php echo esc_html($service['button_text']); ?>
              </a>
            </div>
          </swiper-slide>
        <?php endforeach; ?>
    </swiper-container>
  </div>
</div>
</div>
</section>

