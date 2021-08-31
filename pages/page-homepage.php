<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>
	<?php get_template_part('views/slider'); ?>
	<!-- feature -->
	<section class="feature-block">
		<div class="container">
			<h3>ENJOY SUMMER FLAVORS</h3>
			<div class="row">
				<!-- feature left -->
				<div class="col-md-6">
					<a href="#" class="large-image">
						<img src="<?php echo get_template_directory_uri() ?>/img/large.jpg" alt="feature 1" />
					</a>
				</div>
				<!-- feature right -->
				<div class="col-md-6">
					<div class="row">
						<!-- small feature -->
						<div class="col-6">
							<a href="#" class="small-image">
								<img src="<?php echo get_template_directory_uri() ?>/img/small1.jpg" alt="Small feature" />
							</a>
						</div>
						<!-- small feature -->
						<div class="col-6">
							<a href="#" class="small-image">
								<img src="<?php echo get_template_directory_uri() ?>/img/small2.jpg" alt="Small feature" />
							</a>
						</div>
						<!-- small feature -->
						<div class="col-6">
							<a href="#" class="small-image">
								<img src="<?php echo get_template_directory_uri() ?>/img/small3.jpg" alt="Small feature" />
							</a>
						</div>
						<!-- small feature -->
						<div class="col-6">
							<a href="#" class="small-image">
								<img src="<?php echo get_template_directory_uri() ?>/img/small4.jpg" alt="Small feature" />
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="feature-banner">
				<a href="#">
					<img src="<?php echo get_template_directory_uri() ?>/img/footer-banner.jpg" alt="Promotion banner" />
				</a>
			</div>
		</div>
	</section>
<?php get_footer(); ?>