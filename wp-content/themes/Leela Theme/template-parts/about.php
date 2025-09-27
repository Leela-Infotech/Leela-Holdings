<?php
// content-section.php
// Place this in your theme and include it in front-page or home template via get_template_part()

// Replace these with dynamic calls if you store them in ACF/options page
?>
<section id="about-leela" class="content-section py-5 bg-light">
  <div class="container">
    <!-- About -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-6">
        <h2 class="section-title mb-3">Leela Holdings — Building Businesses That Last</h2>
        <p class="lead">
          Leela Holdings is a diversified group that builds and operates businesses across technology, education,
          fashion, retail, and logistics. We partner with entrepreneurs, investors, and customers to deliver practical,
          scalable solutions that drive growth, trust and long-term value.
        </p>
        <div class="mt-4">
          <h5 class="fw-bold">Mission</h5>
          <p>To create long-term value by building strong, customer-focused businesses across sectors.</p>
          <h5 class="fw-bold mt-3">Vision</h5>
          <p>To be the leading diversified group known for innovation, integrity, and measurable impact.</p>
        </div>
      </div>
      <div class="col-lg-6 text-center">
        <img src="https://leelaholdings.in/wp-content/uploads/2025/09/Frame-1-scaled.png"
          class="img-fluid rounded shadow" alt="Leela Holdings overview">
      </div>
    </div>
  </div>

  <section class="services-container p-lg-5 p-2">
    <div class="container">
      <!-- Values display none -->
      <div class="row text-center m-lg-5 rounded p-5 bg-white d-none">
        <h3 class="section-subtitle mb-4">Our Core Values</h3>
        <div class="col-md-3 mb-4">
          <div class="value-card p-4 h-100 shadow-sm rounded">
            <i class="bi bi-lightbulb display-5 text-primary mb-3"></i>
            <h5 class="fw-bold">Innovation</h5>
            <p class="small">We pursue new ideas with disciplined execution.</p>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="value-card p-4 h-100 shadow-sm rounded">
            <i class="bi bi-people display-5 text-success mb-3"></i>
            <h5 class="fw-bold">Customer-first</h5>
            <p class="small">Solutions built around real human needs.</p>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="value-card p-4 h-100 shadow-sm rounded">
            <i class="bi bi-shield-check display-5 text-danger mb-3"></i>
            <h5 class="fw-bold">Reliability</h5>
            <p class="small">We deliver on promises — on time, every time.</p>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="value-card p-4 h-100 shadow-sm rounded">
            <i class="bi bi-graph-up-arrow display-5 text-warning mb-3"></i>
            <h5 class="fw-bold">Sustainable Growth</h5>
            <p class="small">Profitable growth that benefits customers and communities.</p>
          </div>
        </div>
      </div>

      <!-- Metrics -->
      <div class="row text-center m-lg-5 p-5 rounded bg-white gap-5 justify-content-center">
        <div class="col-lg-2 col-md-6 shadow p-5 value-card">
          <div class="metric">
            <h2 class="counter fw-bold text-primary" data-target="5">0</h2>
            <p class="mb-0">Active Brands</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 shadow p-5 value-card">
          <div class="metric">
            <h2 class="counter fw-bold text-success" data-target="10">0</h2>
            <p class="mb-0">Years of Experience</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 shadow p-5 value-card">
          <div class="metric">
            <h2 class="counter fw-bold text-danger" data-target="500">0</h2>
            <p class="mb-0">Projects Delivered</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 shadow p-5 value-card">
          <div class="metric">
            <h2 class="counter fw-bold text-warning" data-target="8">0</h2>
            <p class="mb-0">Cities of Operation</p>
          </div>
        </div>
      </div>

      <!-- News -->
     <section class="news m-lg-5 p-5 bg-white rounded d-lg-block d-none">
  <h2 class="section-subtitle text-center mb-4">Latest Updates</h2>
  <div class="row">
    <?php
      $latest_posts = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC'
      ));

      if ($latest_posts->have_posts()) :
        while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
          <div class="col-md-4 mb-4">
            <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
              <div class="card value-card h-100 shadow">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title"><?php the_title(); ?></h5>
                  <p class="card-text flex-grow-1">
                    <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?> <span class="font-weight-bold">....</span>
                  </p>
                </div>
              </div>
            </a>
          </div>
        <?php endwhile;
        wp_reset_postdata();
      else : ?>
        <p>No updates available right now.</p>
      <?php endif; ?>
  </div>

  <div class="view-all text-center mt-4">
    <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="btn btn-secondary">
      View All Updates
    </a>
  </div>
</section>


    </div>
  </section>
</section>