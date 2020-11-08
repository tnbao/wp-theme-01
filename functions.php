<?php

function load_stylesheets() {
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1, 'all' );
	wp_enqueue_style( 'bootstrap' );

	wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), 1, 'all' );
	wp_enqueue_style( 'font-awesome' );

	wp_register_style( 'elegant-icons', get_template_directory_uri() . '/css/elegant-icons.css', array(), 1, 'all' );
	wp_enqueue_style( 'elegant-icons' );

	wp_register_style( 'nice-select', get_template_directory_uri() . '/css/nice-select.css', array(), 1, 'all' );
	wp_enqueue_style( 'nice-select' );

	wp_register_style( 'jquery-ui', get_template_directory_uri() . '/css/jquery-ui.min.css', array(), 1, 'all' );
	wp_enqueue_style( 'jquery-ui' );

	wp_register_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), 1, 'all' );
	wp_enqueue_style( 'owl.carousel' );

	wp_register_style( 'slicknav', get_template_directory_uri() . '/css/slicknav.min.css', array(), 1, 'all' );
	wp_enqueue_style( 'slicknav' );

	wp_register_style( 'style', get_template_directory_uri() . '/css/style.css', array(), 1, 'all' );
	wp_enqueue_style( 'style' );

	wp_register_style( 'custom-style', get_template_directory_uri() . '/custom-style.css', array(), 1, 'all' );
	wp_enqueue_style( 'custom-style' );
}

add_action( 'wp_enqueue_scripts', 'load_stylesheets' );

function load_js() {
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), 1, 1 );
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), 1, 1 );
	wp_enqueue_script( 'bootstrap' );

	wp_register_script( 'jquery.nice-select', get_template_directory_uri() . '/js/jquery.nice-select.min.js', array(), 1, 1 );
	wp_enqueue_script( 'jquery.nice-select' );

	wp_register_script( 'jquery-ui', get_template_directory_uri() . '/js/jquery-ui.min.js', array(), 1, 1 );
	wp_enqueue_script( 'jquery-ui' );

	wp_register_script( 'jquery.slicknav', get_template_directory_uri() . '/js/jquery.slicknav.js', array(), 1, 1 );
	wp_enqueue_script( 'jquery.slicknav' );

	wp_register_script( 'mixitup', get_template_directory_uri() . '/js/mixitup.min.js', array(), 1, 1 );
	wp_enqueue_script( 'mixitup' );

	wp_register_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), 1, 1 );
	wp_enqueue_script( 'owl.carousel' );

	wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array(), 1, 1 );
	wp_enqueue_script( 'main' );
}

add_action( 'wp_enqueue_scripts', 'load_js' );

// Menu support
add_theme_support( 'menus' );

// Register menus
register_nav_menus(
	array(
		'top-menu' => __( 'Top Menu', 'theme' )
	)
);

// Custom sub-menu class
function my_nav_menu_submenu_css_class( $classes ) {
	$classes[] = 'header__menu__dropdown';

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'my_nav_menu_submenu_css_class' );

// Custom active menu class
function active_nav_class( $classes, $item ) {
	if ( in_array( 'current-menu-item', $classes ) ) {
		$classes[] = 'active';
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'active_nav_class', 10, 2 );
