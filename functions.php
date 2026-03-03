<?php
/**
 * Theme functions and definitions
 *
 * @package Pitomnik95-Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'pitomnik95_enqueue_assets' ) ) {
	/**
	 * Enqueue Theme Assets (CSS & JS)
	 *
	 * @return void
	 */
	function pitomnik95_enqueue_assets() {
		wp_enqueue_style( 'pitomnik95-theme-style', get_template_directory_uri() . '/style.css' );

		// Enqueue styles from the assets folder
		wp_enqueue_style( 'pitomnik95-themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css' );
		wp_enqueue_style( 'pitomnik95-icomoon', get_template_directory_uri() . '/assets/css/icomoon.css' );
		wp_enqueue_style( 'pitomnik95-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
		wp_enqueue_style( 'pitomnik95-animate', get_template_directory_uri() . '/assets/css/animate.css' );
		wp_enqueue_style( 'pitomnik95-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css' );
		wp_enqueue_style( 'pitomnik95-owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.css' );
		wp_enqueue_style( 'pitomnik95-slick', get_template_directory_uri() . '/assets/css/slick.css' );
		wp_enqueue_style( 'pitomnik95-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css' );
		wp_enqueue_style( 'pitomnik95-swiper', get_template_directory_uri() . '/assets/css/swiper.min.css' );
		wp_enqueue_style( 'pitomnik95-meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css' );
		wp_enqueue_style( 'pitomnik95-nice-select', get_template_directory_uri() . '/assets/css/nice-select.css' );
		wp_enqueue_style( 'pitomnik95-owl-transitions', get_template_directory_uri() . '/assets/css/owl.transitions.css' );
		wp_enqueue_style( 'pitomnik95-magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
		wp_enqueue_style( 'pitomnik95-fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.css' );
		wp_enqueue_style( 'pitomnik95-odometer', get_template_directory_uri() . '/assets/css/odometer-theme-default.css' );
		wp_enqueue_style( 'pitomnik95-style', get_template_directory_uri() . '/assets/css/style.css' );

		// Enqueue Font Awesome (from CDN)
		wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css' );

		// Enqueue scripts from the assets folder
		wp_enqueue_script( 'pitomnik95-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', ['pitomnik95-jquery'], null, true );
		wp_enqueue_script( 'pitomnik95-modernizr', get_template_directory_uri() . '/assets/js/modernizr.custom.js', [], null, true );
		wp_enqueue_script( 'pitomnik95-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', [], null, true );
		wp_enqueue_script( 'pitomnik95-our-plugin-bundle', get_template_directory_uri() . '/assets/js/our-plugin-bundle.js', '', null, true );
		wp_enqueue_script( 'pitomnik95-meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.min.js', ['pitomnik95-jquery'], null, true );
		wp_enqueue_script( 'pitomnik95-animation', get_template_directory_uri() . '/assets/js/animation.js', [], null, true );
		wp_enqueue_script( 'pitomnik95-main', get_template_directory_uri() . '/assets/js/main.js', [], null, true );
	
	}
	
}

add_action( 'wp_enqueue_scripts', 'pitomnik95_enqueue_assets' );


// Add theme support for title tags so we can use the <title> tag in the header
function custom_theme_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'custom_theme_setup');

// Disable/Prevent all image size variations (we don't need them)
add_filter( 'intermediate_image_sizes', function( $sizes ) {
	return array(); // Disable all custom sizes
} );

// REGISTER WIDGETS MENU
function my_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Default Sidebar', 'pitomnik95' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'pitomnik95' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );

// Register menus (used in header.php and footer.php)
function register_pitomnik95_menu() {
    register_nav_menus( array(
        'main-menu' => __( 'Main Menu', 'pitomnik95' ),
		'footer-menu' => __( 'Footer Menu', 'pitomnik95' ),
    ) );
}
add_action( 'init', 'register_pitomnik95_menu' );

// Make theme support WooCommerce (overriding default WooCommerce theme)
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

// Change a currency symbol
add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);

function change_existing_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'RUB': $currency_symbol = 'руб.'; break;
     }
     return $currency_symbol;
}

// Add Google Maps API key
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyDlVBC5gakEkLbAXgXhcT7TOqIFbWQmbG0';
    return $api;
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');



add_filter( 'sanitize_taxonomy_name', 'limit_taxonomy_slug_length', 10, 2 );

function limit_taxonomy_slug_length( $slug, $taxonomy ) {
    // Truncate the slug to 28 bytes max (not characters) using UTF-8 encoding
    return mb_strcut( $slug, 0, 28, 'UTF-8' );
}
