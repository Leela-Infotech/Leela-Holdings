<?php
/*
 * Banner Template
 * @package Leela infotech
 */

// Image paths (relative to root)
$images = [
      [
        "url" => '/wp-content/uploads/2025/09/parent-banner-scaled.jpg',
        "alt" => "Leela Holdings Banner",
        "class" => "my-img h-100",
        "title" => "Leela Holdings",
        "description" => "A diversified group in technology, education, retail, and logistics — building businesses that last.",
        "button" => "Explore Our Brands",
        "button_link" => "#leela-brands"
    ],
      [
        "url" => '/wp-content/uploads/2025/09/tests-scaled.jpg',
        "alt" => "Second Image",
        "class" => "my-img h-100",
        "title" => "Leela Tests",
        "description" => "Prepare smarter, succeed faster.",
        "button" => "Discover Leela Tests",
        "button_link" => "https://tests.leelaholdings.in"
    ],
    [
        "url" => '/wp-content/uploads/2025/09/infotech-scaled.jpg',
        "alt" => "First Image",
        "class" => "my-img h-100",
        "title" => "Leela Infotech",
        "description" => "Professional websites for your business.",
        "button" => "Discover Leela Infotech",
        "button_link" => "https://infotech.leelaholdings.in"

    ],
    [
        "url" => '/wp-content/uploads/2025/09/wear-scaled.jpg',
        "alt" => "Third Image",
        "class" => "my-img h-100",
        "title" => "Leela Wear",
        "description" => "Trendy fashion delivered to your doorstep",
        "button" => "Discover Leela Wear",
        "button_link" => "https://wear.leelaholdings.in"
    ],
       [
        "url" => '/wp-content/uploads/2025/09/transport-scaled.jpg',
        "alt" => "Fourth Image",
        "class" => "my-img h-100",
        "title" => "Leela Transport",
        "description" => "Fast & reliable transport services",
        "button" => "Discover Leela Transport",
        "button_link" => "https://transport.leelaholdings.in"
       ],
          [
        "url" => '/wp-content/uploads/2025/09/retail-scaled.jpg',
        "alt" => "Fifth Image", 
        "class" => "my-img h-100",
        "title" => "Leela Retail",
        "description" => "Shop your essentials with ease",
        "button" => "Discover Leela Retail",
        "button_link" => "https://retail.leelaholdings.in"
    ]

];
?>
<?php if (is_front_page()) { ?>
    <div class="header-background">
        <swiper-container class="mySwiper" space-between="30" centered-slides="true" autoplay-delay="2200"
            autoplay-disable-on-interaction="true">

            <?php foreach ($images as $img): ?>
                <swiper-slide>
                    <img src="<?php echo esc_url( home_url( $img['url'] ) ); ?>" alt="<?php echo $img["alt"]; ?>"
                        class="<?php echo $img["class"]; ?>" style="width:100%; height:auto;">

                    <div class="position-absolute w-100 h-100 bg-diagonal-tech d-flex text-start align-items-center">
                        <div class="container text-white">
                            <h1 class="h1"><?php echo $img["title"]; ?></h1>
                            <p class="mb-3"><?php echo $img["description"]; ?></p>
                            <a href="<?php echo esc_url($img['button_link']); ?>" class="btn-primary"> <?php echo $img["button"] ?></a>
                        </div>
                    </div>
                </swiper-slide>
            <?php endforeach; ?>
        </swiper-container>
    </div>
<?php } else if (is_home()) { ?>
                <div class="container text-black mt-5">
                    <h1 class="h1 p-3">
                    <?php echo get_the_title(get_option('page_for_posts', true)); ?>
                    </h1>
                </div>
<?php } else if(is_single() || (is_archive())){ ?>
 <section class="header-background small-height">
            <div class="w-100 h-100 bg-black d-flex text-center align-items-center">
                <div class="container text-white">
                    <h1 class="h1"><?php the_title(); ?></h1>
                </div>
            </div>
        </section>
<?php }else{ ?>

        <section class="header-background small-height">
            <div class="w-100 h-100 bg-black d-flex text-center align-items-center">
                <div class="container text-white">
                    <h1 class="font-h1-xl"><?php the_title(); ?></h1>
                </div>
            </div>
        </section>
<?php } ?>