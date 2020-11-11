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



add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);

function filter_nav_menu_link_attributes($atts, $item, $args){
	if($args->menu === 'menu-header'){
		$atts['class'] = 'nav-link';
		if($item->current){
		$atts['class'] .= ' nav-link active';
		}

	}; 
return $atts;
}
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function wp_sixteen_features(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('menus');

}
add_action('after_setup_theme', 'wp_sixteen_features');

add_theme_support('post-thumbnails');
set_post_thumbnail_size( 508, 233);









