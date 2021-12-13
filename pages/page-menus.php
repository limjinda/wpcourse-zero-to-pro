<?php 
  /* Template Name: Menus */ 
  $beverages = new WP_Query( array(
    'post_type' => 'product',
    'orderby'   => 'date',
    'tax_query' => array( 
      array( 
        'taxonomy' => 'product_category',
        'field'    => 'slug',
        'terms'    => 'beverages'
      )
    )
  ));
  $breakfast = new WP_Query( array(
    'post_type' => 'product',
    'orderby'   => 'date',
    'tax_query' => array( 
      array( 
        'taxonomy' => 'product_category',
        'field'    => 'slug',
        'terms'    => 'breakfast'
      )
    )
  ));
  $kids = new WP_Query( array(
    'post_type' => 'product',
    'orderby'   => 'date',
    'tax_query' => array( 
      array( 
        'taxonomy' => 'product_category',
        'field'    => 'slug',
        'terms'    => 'kids-menu'
      )
    )
  ));
?>

<?php get_header(); ?>

<div class="menu-wrapper">
  
  <!-- slider -->
  <?php get_template_part('views/slider') ?>
  
  <!-- search -->
  <section class="menu-searchbox">
    <div class="container">
      <?php get_search_form(); ?>
    </div>
  </section>

  <!-- content -->
  <section class="menu-content">
    <div class="container">
      <div class="row">
        <!-- sidebar -->
        
        <div class="col-lg-4 col-xl-3">
          <div class="sidebar-wrapper">
            <div class="sidebar-item">
              <ul>
                <li><a href="#beverages">เมนูเครื่องดื่ม</a></li>
                <li><a href="#breakfast">อาหารเช้า</a></li>
                <li><a href="#kids">เมนูคุณหนู</a></li>
              </ul>
            </div>
            <p>บอกให้รู้เอาไว้ว่า ราคาและสินค้าอาจ แตกต่างกันในบางสาขา</p>
          </div>
        </div>

        <!-- menu items -->
        <div class="col-lg-8 col-xl-9">
          <div class="menu-content-wrapper">

            <!-- drink -->
            <div class="menu-type" id="beverages">
              <h3>เมนูเครื่องดื่ม</h3>
              <p>* เครื่องดื่มร้อนและเครื่องดื่ม Nitro มีจำหน่ายในขนาด Short (8 oz.) ในราคาที่ถูกกว่าขนาด Tall (12 oz.) 15 บาท</p>
              <div class="menu-slider">
                <?php if ($beverages->have_posts()) : ?>
                  <?php while($beverages->have_posts()) : $beverages->the_post(); ?>
                    <div class="menu-item">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="menu-image" />
                      <p class="menu-name"><?php the_title(); ?></p>
                      <p class="menu-description"><?php the_content(); ?></p>
                      <div class="menu-action">
                        <div class="row">
                          <!-- stock -->
                          <div class="col-6">
                            <p class="menu-stock"><?php the_field('stock_status'); ?></p>
                          </div>
                          <!-- price -->
                          <div class="col-6">
                            <p class="menu-price"><?php the_field('price'); ?> บาท</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>

            <!-- breakfast -->
            <div class="menu-type" id="breakfast">
              <h3>อาหารเช้า</h3>
              <div class="menu-slider">
                <?php if ($breakfast->have_posts()) : ?>
                  <?php while($breakfast->have_posts()) : $breakfast->the_post(); ?>
                    <div class="menu-item">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="menu-image" />
                      <p class="menu-name"><?php the_title(); ?></p>
                      <p class="menu-description"><?php the_content(); ?></p>
                      <div class="menu-action">
                        <div class="row">
                          <!-- stock -->
                          <div class="col-6">
                            <p class="menu-stock"><?php the_field('stock_status'); ?></p>
                          </div>
                          <!-- price -->
                          <div class="col-6">
                            <p class="menu-price"><?php the_field('price'); ?> บาท</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>

            <!-- kido -->
            <div class="menu-type" id="kids">
              <h3>เมนูคุณหนู</h3>
              <div class="menu-slider">
                <?php if ($kids->have_posts()) : ?>
                  <?php while($kids->have_posts()) : $kids->the_post(); ?>
                    <div class="menu-item">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="menu-image" />
                      <p class="menu-name"><?php the_title(); ?></p>
                      <p class="menu-description"><?php the_content(); ?></p>
                      <div class="menu-action">
                        <div class="row">
                          <!-- stock -->
                          <div class="col-6">
                            <p class="menu-stock"><?php the_field('stock_status'); ?></p>
                          </div>
                          <!-- price -->
                          <div class="col-6">
                            <p class="menu-price"><?php the_field('price'); ?> บาท</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>