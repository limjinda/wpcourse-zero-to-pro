<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="wrapper">
			<!-- header -->
			<header class="header">
				<div class="container">
					<div class="header-left">
						<a href="<?php echo home_url(); ?>" class="site-logo">
							<img src="<?php echo get_template_directory_uri() ?>/img/site-logo.png" alt="Logo" />
						</a>
						<?php wp_nav_menu(array(
							'theme_location' => 'top',
							'menu_class' => 'site-navigation',
							'container' => false
						)); ?>
					</div>
					<div class="header-right">
						<!-- mobile menu -->
						<a href="javascript:void(0)" class="mobile-show-menu">
							Menu
						</a>
						<!-- mobile menu -->
						<div class="right-navigation-menu">
							<a href="#">
								<img src="<?php echo get_template_directory_uri() ?>/img/icon-marker.png" alt="location" />
								Find a Store
							</a>
						</div>
					</div>
				</div>
				<!-- mobile menu -->
				<div class="mobile-menu-block">
					<div class="mobile-backdrop"></div>
					<a href="javascript:void(0)" class="mobile-close-menu">
						X
					</a>
					<?php wp_nav_menu(array(
						'theme_location' => 'mobile_menu',
						'menu_class' => 'mobile-navigation',
						'container' => false
					)); ?>
				</div>
				<!-- mobile menu -->
			</header>