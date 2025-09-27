
<div class="container mb-5">
    <h2>Core Team</h2>
    <p>Meet the passionate individuals who drive Leela Holdings forward. Our Core Team combines expertise, creativity, and dedication to ensure that every venture thrives and delivers meaningful impact.</p>
  <div class="row g-4">

    <?php
    // Array of team members
    $team_members = [
      [
        'name' => 'Atul Chambyal',
        'designation' => 'Founder & Visionary',
        'image' => 'https://leelaholdings.in/wp-content/uploads/2025/09/dummy-boy.png',
        'desc' => 'Atul laid the foundation of Leela Holdings with the belief that businesses should inspire, innovate, and make lives better.'
      ],
      [
        'name' => 'Aditi',
        'designation' => 'HR & System Control',
        'image' => 'https://leelaholdings.in/wp-content/uploads/2025/09/dummy-girl.png',
        'desc' => 'Driving organizational culture and systems, Aditi ensures smooth operations and a people-first workplace.'
      ],
      [
        'name' => 'Adarsh',
        'designation' => 'SEO & UI/UX Designer',
        'image' => 'https://leelaholdings.in/wp-content/uploads/2025/09/dummy-boy.png',
        'desc' => 'A creative problem solver, Adarsh strengthens our digital presence through search optimization and user-friendly designs.'
      ],
      [
        'name' => 'Akhil',
        'designation' => 'Front-End Developer',
        'image' => 'https://leelaholdings.in/wp-content/uploads/2025/09/dummy-boy.png',
        'desc' => 'With a passion for clean code and functionality, Akhil brings ideas to life through modern web development.'
      ],
      [
        'name' => 'Akriti',
        'designation' => 'Operations (WordPress Specialist)',
        'image' => 'https://leelaholdings.in/wp-content/uploads/2025/09/dummy-girl.png',
        'desc' => 'From handling WordPress operations to ensuring efficient workflows, Akriti is the backbone of our digital execution.'
      ]
    ];

    // Loop through each member
    foreach ($team_members as $member) {
      ?>
      <div class="col-md-4">
        <div class="team-card text-center">
          <div class="team-img">
            <img src="<?php echo $member['image']; ?>" class="img-fluid rounded" alt="<?php echo $member['name']; ?>">
          </div>
          <h5 class="mt-3 mb-1"><?php echo $member['name']; ?></h5>
          <div class="designation">
            <?php echo $member['designation']; ?> <span class="toggle-icon"></span>
          </div>
          <p class="team-desc">
            <?php echo $member['desc']; ?>
          </p>
        </div>
      </div>
      <?php
    }
    ?>
    
  </div>
</div>
