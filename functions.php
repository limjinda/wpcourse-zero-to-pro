<?php 

function wp_theme_setup() {
	/**
	 * Load translation identity
	 * add default WordPress support for title, feed and enable post thumbnail in post/page.
	 */
	load_theme_textdomain( 'wp-theme-prototype' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	/**
	 * un comment these lines if you want to register your own image size
	 * it's effect when uploading new image.
	 */
	add_image_size( 'product', 400, 400, array('center', 'center') );

	/**
	 * Register menu 
	 * It will show up in Appearance > Menus
	 */
	register_nav_menus( array(
	 	'top'    => __( 'Top Navigation', 'wp-theme-prototype' ),
	 	'about' => __( 'About', 'wp-theme-prototype' ),
	 	'story' => __( 'Story', 'wp-theme-prototype' ),
	 	'sitemap' => __( 'Sitemap', 'wp-theme-prototype' ),
	 	'footer' => __( 'Footer Sitemap', 'wp-theme-prototype' ),
	 	'mobile_menu' => __( 'Mobile Navigation', 'wp-theme-prototype' ),
	));
	
	/**
	 * Enable html5 power for comment, gallery and caption element.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}
add_action( 'after_setup_theme', 'wp_theme_setup' );

function wp_theme_register_script() {
	/**
	 * Enqueue stylesheet that generated from gulp
	 * first is vendor, second is your style.css
	 */
	wp_enqueue_style('wp-vendor', get_theme_file_uri('/css/vendor/vendor.css'), array(), '1.0.0');
	wp_enqueue_style('wp-style', get_stylesheet_uri(), array(), '1.0.0');
	
	/**
	 * Register js script file(js/client.js) 
	 * dependency on jQuery, and place this before close body tag
	 */
	wp_register_script('wp-vendor', get_theme_file_uri('/js/vendor/vendor.js'), array('jquery'), '1.0.0', true);
	wp_register_script('wp-client', get_theme_file_uri('/js/complied.js'), array('jquery'), rand(1,99999), true);

	/**
	 * Uncomment if you want to pass an php variebles to js-script
	 * for example, you can use homeURL in main.js(its return root url).
	 */
	// $js_variables = array('homeURL' => home_url());
	// wp_localize_script( 'wp-client', 'themeVariables', $js_variables );
	wp_enqueue_script('wp-vendor');
	wp_enqueue_script('wp-client');
}
add_action('wp_enqueue_scripts', 'wp_theme_register_script');

add_filter( 'wpcf7_autop_or_not', '__return_false' );

function add_product_post_type () {
	$labels = array(
		'name'                 => 'Products',
		'singular_name'        => 'Product',
		'menu_name'            => 'Products',
		'name_admin_bar'       => 'Products',
		'add_new'              => 'Add new',
		'add_new_item'         => 'Add new Product',
		'new_item'             => 'New Product',
		'edit_item'            => 'Edit Product',
		'view_item'            => 'View Product',
		'all_items'            => 'All Products'
	);
	$args = array(
		'labels'              => $labels,
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'query_var'           => true,
		'rewrite'             => array( 'slug' => 'products' ),
		'capability_type'     => 'post',
		'has_archive'         => true,
		'hierarchical'        => false,
		'menu_position'       => 100,
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		'menu_icon'						=> 'dashicons-carrot'
	);
	register_post_type('product', $args);
}
add_action('init', 'add_product_post_type');

function add_product_taxonomy () {
	$args = array(
		'label'                 => 'Categories',
		'public'                => true,
		'hierarchical'          => true,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'rewrite'               => array('slug' => 'category'),
	);
	register_taxonomy( 'product_category', array('product'), $args );
}
add_action('init', 'add_product_taxonomy', 0);

?>
