<?php 
  $sliders = explode(',', ot_get_option('sliders'));
  $mobile_sliders = explode(',', ot_get_option('mobile_sliders'));
?>

<!-- slider -->
<section class="slider-block">
  <?php foreach ($sliders as $image) { ?>
    <div class="slide-item">
      <img src="<?php echo wp_get_attachment_url($image); ?>" alt="Slider - image 1" />
    </div>
  <? } ?>
</section>

<!-- mobile slider -->
<section class="mobile-slider-block">
  <?php foreach ($mobile_sliders as $image) { ?>
    <div class="slide-item">
      <img src="<?php echo wp_get_attachment_url($image); ?>" alt="Slider - image 1" />
    </div>
  <? } ?>
</section>