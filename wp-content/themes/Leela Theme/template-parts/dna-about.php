<?php
// content-section.php
// Place this in your theme and include it in front-page or home template via get_template_part()

// Replace these with dynamic calls if you store them in ACF/options page
$about_title = "Leela Holdings — Building Businesses That Last";
$about_text  = "Leela Holdings is a diversified group that builds and operates businesses across technology, education, fashion, retail, and logistics. We partner with entrepreneurs, investors, and customers to deliver practical, scalable solutions that drive growth, trust and long-term value.";
$mission = "To create long-term value by building strong, customer-focused businesses across sectors.";
$vision  = "To be the leading diversified group known for innovation, integrity, and measurable impact.";

// metrics (replace numbers)
$metrics = [
  ['num' => 5,   'label' => 'Active brands'],
  ['num' => 10,  'label' => 'Years (combined)'],
  ['num' => 500, 'label' => 'Projects delivered'],
  ['num' => 8,   'label' => 'Cities']
];

// example news (replace with WP loop if required)
$news = [
  ['title'=>'Wear: new seasonal collection','excerpt'=>'Leela Wear launches a curated seasonal line focused on comfort and sustainability.','link'=>'#'],
  ['title'=>'Infotech expands team','excerpt'=>'Leela Infotech strengthens its engineering team to accelerate product delivery.','link'=>'#'],
  ['title'=>'Tests: new mock series','excerpt'=>'New comprehensive mock test series to help aspirants prepare better.','link'=>'#']
];
?>
<section id="leela-about" class="leela-about">
  <div class="container">
    <div class="about-grid">
      <div class="about-text">
        <h2><?php echo esc_html($about_title); ?></h2>
        <p><?php echo esc_html($about_text); ?></p>
        <div class="mission-vision">
          <div><h4>Mission</h4><p><?php echo esc_html($mission); ?></p></div>
          <div><h4>Vision</h4><p><?php echo esc_html($vision); ?></p></div>
        </div>
      </div>
      <div class="about-visual">
        <!-- Replace with an SVG or abstract image -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/leela-holdings-graphic.jpg" alt="Leela Holdings" />
      </div>
    </div>

    <!-- Values -->
    <div class="values row">
      <div class="value"><h5>Innovation</h5><p>We pursue new ideas with disciplined execution.</p></div>
      <div class="value"><h5>Customer-first</h5><p>Solutions built around real human needs.</p></div>
      <div class="value"><h5>Reliability</h5><p>We deliver on promises — on time, every time.</p></div>
      <div class="value"><h5>Sustainable Growth</h5><p>Profitable growth that benefits customers and communities.</p></div>
    </div>

    <!-- Metrics -->
    <div class="metrics row">
      <?php foreach($metrics as $m): ?>
        <div class="metric">
          <div class="metric-number" data-target="<?php echo esc_attr($m['num']); ?>">0</div>
          <div class="metric-label"><?php echo esc_html($m['label']); ?></div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- News -->
    <div class="news">
      <h3>Latest updates</h3>
      <div class="news-grid">
        <?php foreach($news as $n): ?>
          <article class="news-card">
            <h4><?php echo esc_html($n['title']); ?></h4>
            <p><?php echo esc_html($n['excerpt']); ?></p>
            <a href="<?php echo esc_url($n['link']); ?>" class="btn-link">Read more</a>
          </article>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- CTA -->
    <div class="group-cta">
      <h3>Looking to partner with Leela Holdings?</h3>
      <p>For partnerships, investor relations or careers — tell us about your interest.</p>
      <form id="group-contact" class="group-contact" method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
        <input type="hidden" name="action" value="leelah_group_contact">
        <input name="name" placeholder="Full name" required>
        <input name="email" type="email" placeholder="Email" required>
        <input name="phone" placeholder="Phone">
        <input name="organization" placeholder="Organization">
        <select name="inquiry_type">
          <option value="partner">Partner</option>
          <option value="investor">Investor</option>
          <option value="careers">Careers</option>
          <option value="press">Press</option>
        </select>
        <textarea name="message" placeholder="Tell us briefly"></textarea>
        <button type="submit" class="btn-primary">Submit</button>
      </form>
    </div>
  </div>
</section>
