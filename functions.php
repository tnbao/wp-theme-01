<?php

function load_stylesheets() {
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/resources/css/bootstrap.min.css', array(), 1, 'all' );
	wp_enqueue_style( 'bootstrap' );

	wp_register_style( 'font-awesome', get_template_directory_uri() . '/resources/css/font-awesome.min.css', array(), 1, 'all' );
	wp_enqueue_style( 'font-awesome' );

	wp_register_style( 'elegant-icons', get_template_directory_uri() . '/resources/css/elegant-icons.css', array(), 1, 'all' );
	wp_enqueue_style( 'elegant-icons' );

	wp_register_style( 'nice-select', get_template_directory_uri() . '/resources/css/nice-select.css', array(), 1, 'all' );
	wp_enqueue_style( 'nice-select' );

	wp_register_style( 'jquery-ui', get_template_directory_uri() . '/resources/css/jquery-ui.min.css', array(), 1, 'all' );
	wp_enqueue_style( 'jquery-ui' );

	wp_register_style( 'owl.carousel', get_template_directory_uri() . '/resources/css/owl.carousel.min.css', array(), 1, 'all' );
	wp_enqueue_style( 'owl.carousel' );

	wp_register_style( 'slicknav', get_template_directory_uri() . '/resources/css/slicknav.min.css', array(), 1, 'all' );
	wp_enqueue_style( 'slicknav' );

	wp_register_style( 'style', get_template_directory_uri() . '/resources/css/style.css', array(), 1, 'all' );
	wp_enqueue_style( 'style' );

	wp_register_style( 'app', get_template_directory_uri() . '/dist/css/app.css', array(), 1, 'all' );
	wp_enqueue_style( 'app' );
}

add_action( 'wp_enqueue_scripts', 'load_stylesheets' );

function load_js() {
	wp_register_script( 'jquery', get_template_directory_uri() . '/resources/js/jquery-3.3.1.min.js', array(), 1, 1 );
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'bootstrap', get_template_directory_uri() . '/resources/js/bootstrap.min.js', array(), 1, 1 );
	wp_enqueue_script( 'bootstrap' );

	wp_register_script( 'jquery.nice-select', get_template_directory_uri() . '/resources/js/jquery.nice-select.min.js', array(), 1, 1 );
	wp_enqueue_script( 'jquery.nice-select' );

	wp_register_script( 'jquery-ui', get_template_directory_uri() . '/resources/js/jquery-ui.min.js', array(), 1, 1 );
	wp_enqueue_script( 'jquery-ui' );

	wp_register_script( 'jquery.slicknav', get_template_directory_uri() . '/resources/js/jquery.slicknav.js', array(), 1, 1 );
	wp_enqueue_script( 'jquery.slicknav' );

	wp_register_script( 'mixitup', get_template_directory_uri() . '/resources/js/mixitup.min.js', array(), 1, 1 );
	wp_enqueue_script( 'mixitup' );

	wp_register_script( 'owl.carousel', get_template_directory_uri() . '/resources/js/owl.carousel.min.js', array(), 1, 1 );
	wp_enqueue_script( 'owl.carousel' );

	wp_register_script( 'main', get_template_directory_uri() . '/resources/js/main.js', array(), 1, 1 );
	wp_enqueue_script( 'main' );

	wp_register_script( 'app', get_template_directory_uri() . '/src/js/app.js', array(), 1, 1 );
	wp_enqueue_script( 'app' );
}

add_action( 'wp_enqueue_scripts', 'load_js' );

// Theme options
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'widgets' );

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

function wpdocs_theme_setup() {
	add_image_size( 'post_thumbnail_small', 70 ); // 70 pixels wide (and unlimited height)
	add_image_size( 'post_thumbnail_large', 360, 360, true );
	add_image_size( 'blog_body_img', 750);
	add_image_size( 'product_thumbnail', 270, 270, true ); // (cropped)
}

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );

/**
 * Return the no-image.png if the post has no thumbnail.
 *
 * @param string $html Post thumbnail HTML.
 * @param int $post_id Post ID.
 * @param int $post_image_id Post image ID.
 *
 * @return string Filtered post image HTML.
 */
function wpdocs_post_image_html( $html, $post_id, $post_image_id ) {
	if ( ! has_post_thumbnail( $post_id ) ) {
		$noImageSrc = get_bloginfo( 'template_directory' ) . '/src/img/no-image.png';

		return '<img src="' . $noImageSrc . '" width="70" alt="">';
	}

	return $html;
}

add_filter( 'post_thumbnail_html', 'wpdocs_post_image_html', 10, 3 );

// Register Sidebars
function my_sidebars() {
  register_sidebar(
    array(
      'name' => 'Page Sidebar',
      'id' => 'page-sidebar',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Blog Sidebar',
      'id' => 'blog-sidebar',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );
}

add_action('widgets_init', 'my_sidebars');

function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

function my_woocommerce_wrapper_start() {
  echo '<section><div class="container"><div class="row"><div class="col-lg-12">';
}

function my_woocommerce_wrapper_end() {
  echo '</div></div></div></section>';
}

add_action('woocommerce_before_main_content', 'my_woocommerce_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_woocommerce_wrapper_end', 10);
