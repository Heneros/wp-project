<?php

function wp_sixteen_scripts() {
	wp_enqueue_style( 'wp-sixteen-style', get_stylesheet_uri(), NULL, microtime());
	wp_enqueue_style('fonts', '//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap');
	wp_enqueue_style('bootstrap', get_template_directory_uri() .  '/css/bootstrap.min.css');
	wp_enqueue_style('owl', get_template_directory_uri() .  '/css/owl.css');
	wp_enqueue_style('fontawesome', get_template_directory_uri() .  '/css/fontawesome.css');
	wp_enqueue_style('flex-slider', get_template_directory_uri() .  '/css/flex-slider.css');


	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery/jquery.min.js', array(), '1.0.', true ); 
	wp_enqueue_script( 'main-custom', get_theme_file_uri('/js/custom.js'), '1.0' , NULL);
	wp_enqueue_script( 'accordions', get_template_directory_uri() . '/js/accordions.js', array(), '1.0.', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0.', true );

	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.js', array(), '1.0.', true );
	wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.js', array(), '1.0.', true );
	wp_enqueue_script( 'skiplink', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '1.0.', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array(), '1.0.', true ); 
}
add_action( 'wp_enqueue_scripts', 'wp_sixteen_scripts' );





function wp_sixteen_features(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Top-menu', 'wp-sixteen' ),
	) );

}
add_action('after_setup_theme', 'wp_sixteen_features');

add_theme_support('post-thumbnails');
set_post_thumbnail_size( 508, 233);
// 508 233









