<?php
/**
 * Main template file.
 * 
 * @package Leela
 */
get_header();
?>

<div class="container blog-page py-5">
  <?php if ( have_posts() ) : ?>
    <div class="row g-4">
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-md-4">
          <article <?php post_class('card h-100 shadow-sm'); ?>>
            
            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
              </a>
            <?php endif; ?>

            <div class="card-body d-flex flex-column">
              <h2 class="card-title fs-5">
                <a href="<?php the_permalink(); ?>" class="stretched-link text-decoration-none text-dark">
                  <?php the_title(); ?>
                </a>
              </h2>

              <p class="card-text small text-muted mb-2">
                <?php echo get_the_date(); ?> | <?php the_author(); ?>
              </p>

              <p class="card-text flex-grow-1">
                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
              </p>
            </div>
          </article>
        </div>
      <?php endwhile; ?>
    </div>

    <div class="pagination mt-4">
      <?php the_posts_pagination([
        'prev_text' => __('« Prev'),
        'next_text' => __('Next »'),
      ]); ?>
    </div>
  <?php else : ?>
    <p>No posts found.</p>
  <?php endif; ?>
</div>



<?php get_footer(); ?>