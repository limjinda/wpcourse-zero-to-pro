      <!-- footer -->
      <footer class="footer">
				<div class="sitemap">
					<div class="container">
						<div class="row">
							<!-- footer 1 -->
							<div class="col-3">
								<h4>About Starbugs</h4>
								<?php wp_nav_menu(array(
									'theme_location' => 'about',
									'menu_class' => 'sitemap-link',
									'container' => false
								)); ?>
							</div>
							<!-- footer 2 -->
							<div class="col-3">
								<h4>Drink at Home</h4>
								<?php wp_nav_menu(array(
									'theme_location' => 'story',
									'menu_class' => 'sitemap-link',
									'container' => false
								)); ?>
							</div>
							<!-- footer 3 -->
							<div class="col-3">
								<?php wp_nav_menu(array(
									'theme_location' => 'sitemap',
									'menu_class' => 'sitemap-link',
									'container' => false
								)); ?>
							</div>
							<!-- footer 4 -->
							<div class="col-3">
								<ul class="footer-social-links">
									<li>
										<a href="#">
											<img src="<?php echo get_template_directory_uri() ?>/img/icon-facebook.png" alt="facebook" />
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo get_template_directory_uri() ?>/img/icon-twitter.png" alt="twitter" />
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo get_template_directory_uri() ?>/img/icon-line.png" alt="line" />
										</a>
									</li>
								</ul>
								<p>This is a demo website that built for WordPress theme development, Zero to Pro course.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="copyright">
					<div class="container">
						<div class="row">
							<!-- copyright 1 -->
							<div class="col-6">
								<?php wp_nav_menu(array(
									'theme_location' => 'footer',
									'menu_class' => 'copyright-link',
									'container' => false
								)); ?>
							</div>
							<!-- copyright 2 -->
							<div class="col-6">
								<p class="copyright-text">Starbugs.com | WordPress Theme for Zero to Pro Course.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>