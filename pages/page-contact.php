<?php /* Template Name: Contact Us */ ?>
<?php get_header(); ?>

<div class="contact-wrapper">
  <!-- header -->
  <section class="contact-header">
    <div class="container">
      <h1>CONTACT US</h1>
      <p>
        Hi, welcome to Starbugs.<br/> 
        What can we do for you?
      </p>
    </div>
  </section>
  
  <!-- content -->
  <section class="contact-content">
    <article class="page-content">
      <div class="container">
        <?php if (have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </article>
  </section>

  <!-- contact form -->
  <section class="contact-form">
    <div class="container">
      <h3>Contact Form</h3>
      <p>We will get back to you as soon as possible</p>
      <?php echo do_shortcode('[contact-form-7 id="60" title="Contact Us Form"]') ?>
    </div>
  </section>
</div>

<?php get_footer(); ?>