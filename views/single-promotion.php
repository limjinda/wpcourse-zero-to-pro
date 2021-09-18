<?php 
  get_header(); 
  $related = new WP_Query( array(
    'category_name' => 'promotion',
    'posts_per_page' => 4,
    'orderby' => 'rand',
    'post__not_in' => array(get_the_ID())
  ));
?>

<div class="single-wrapper">
  <div class="container">
    <!-- breadcrumb -->
    <ul class="single-breadcrumb-list">
      <li><a href="#">Home</a></li>
      <li>Promotion</li>
    </ul>

    <!-- content -->
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <section class="single-content-block">
          <div class="row">
            <!-- cover -->
            <div class="col-12">
              <div class="single-promotion-image">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
              </div>
            </div>
            <!-- description -->
            <div class="col-12">
              <article class="single-main-content page-content">
                <h1 class="single-promotion-title"><?php the_title(); ?></h1>
                <div class="single-promotion-content">
                  <?php the_content(); ?>
                </div>
              </article>
            </div>
          </div>
        </section>
      <?php endwhile; ?>
    <?php endif; ?>
    <!-- related -->
    <section class="single-related-block">
      <h3>Other Promotions</h3>
      <?php if ($related->have_posts()) : ?>
        <div class="row">
        <?php while($related->have_posts()) : $related->the_post(); ?>
          <div class="col-6 col-md-4">
            <div class="related-item">
              <a href="<?php the_permalink(); ?>" class="releated-image" title="<?php the_title(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>" />
              </a>
              <p class="related-name">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <?php the_title(); ?>
                </a>
              </p>
            </div>
          </div>
        <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </section>
  </div>
</div>

<?php get_footer(); ?>