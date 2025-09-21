<?php
/*
 * Banner Template
 * @package Leela infotech
 */

// Base URL of your site
$base_url = "https://infotech.leelaholdings.in";

// Image paths (relative to root)
$images = [
    [
        "url" => "/wp-content/uploads/2025/09/workers-scaled.jpg",
        "alt" => "First Image",
        "class" => "my-img h-100",
        "title" => "Empathy in Every Line of Code",
        "description" => "We listen first then build software that fits your narrative.",
        "button" => "Click Here"
    ],

    [
        "url" => "/wp-content/uploads/2025/09/workers-scaled.jpg",
        "alt" => "Second Image",
        "class" => "my-img h-100",
        "title" => "Your Goals, Engineered for Growth",
        "description" => "Strategy, design, and code that drive measurable outcomes.",
        "button" => "Click Here"
    ],

    [
        "url" => "/wp-content/uploads/2025/09/workers-scaled.jpg",
        "alt" => "Third Image",
        "class" => "my-img h-100",
        "title" => "From Idea to Impact",
        "description" => "Design, development & mobile app expertise—all aiming for tangible results.",
        "button" => "Click Here"
    ]

];
?>
<?php if (is_front_page()) { ?>
    <div class="header-background">
        <swiper-container class="mySwiper" space-between="30" centered-slides="true" autoplay-delay="2200"
            autoplay-disable-on-interaction="true">

            <?php foreach ($images as $img): ?>
                <swiper-slide>
                    <img src="<?php echo $base_url . $img["url"]; ?>" alt="<?php echo $img["alt"]; ?>"
                        class="<?php echo $img["class"]; ?>" style="width:100%; height:auto;">

                    <div class="position-absolute w-100 h-100 bg-diagonal-tech d-flex text-start align-items-center">
                        <div class="container text-white">
                            <h1 class="h1"><?php echo $img["title"]; ?></h1>
                            <p class="mb-3"><?php echo $img["description"]; ?></p>
                            <a href="/contact/" class="btn-primary"> <?php echo $img["button"] ?></a>
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