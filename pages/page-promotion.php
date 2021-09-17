<?php 
  /* Template Name: Promotion */ 
  $promotions = new WP_Query( array(
    'category_name' => 'Promotion',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
  ));
?>

<?php get_header(); ?>

<div class="promotion-wrapper">
  <div class="container">
    <!-- promotion banner -->
    <section class="main-promotion-banner">
      <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="<?php the_title()?>" />
    </section>
    <!-- content -->
    <section class="main-promotion-content">
      <article class="page-content">
        <?php if (have_posts()): ?>
          <?php while(have_posts()): the_post();?>
            <?php the_content(); ?>
          <?php endwhile; ?>  
        <?php endif; ?>
      </article>
    </section>
    <!-- share -->
    <section class="main-promotion-sharing-center">
      <p>Share to your friends</p>
      <ul class="sharing-list">
        <li>
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/img/icon-facebook.png" alt="" />
          </a>
        </li>
        <li>
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/img/icon-twitter.png" alt="" />
          </a>
        </li>
        <li>
          <a href="#">
            <img src="<?php echo get_template_directory_uri() ?>/img/icon-line.png" alt="" />
          </a>
        </li>
      </ul>
    </section>
    <section class="main-promotion-related">
      <div class="row">
        <!-- banner1 -->
        <?php if ($promotions->have_posts()) : ?>
          <?php while ($promotions->have_posts()): $promotions->the_post(); ?>
            <div class="col-md-4">
              <div class="related-item">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                </a>
                <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                <p><?php echo get_the_date(); ?></p>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </section>
  </div>
</div>

<?php get_footer(); ?>