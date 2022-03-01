<?php
/**
 * Energy Security functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Energy_Security
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function energy_security_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Energy Security, use a find and replace
		* to change 'energy-security' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'energy-security', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'energy-security' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'energy_security_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'energy_security_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function energy_security_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'energy_security_content_width', 640 );
}
add_action( 'after_setup_theme', 'energy_security_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function energy_security_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'energy-security' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'energy-security' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'energy_security_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function energy_security_scripts() {
	wp_enqueue_style( 'energy-security-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5');
	// wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css', array(), '5');
	// wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css', array(), '5');
	wp_style_add_data( 'energy-security-style', 'rtl', 'replace' );

	wp_enqueue_script( 'energy-security-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'energy_security_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}









/*
	Custom Stylesheets and JS
*/
function ct_register_styles(){

	$version = wp_get_theme()->get('version');
	wp_enqueue_style('ct_style_bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" ,  array() , "5.1.3", "all");
	wp_enqueue_style('ct_style_fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" ,  array() , "5.14.0", "all");
	wp_enqueue_style('ct_style_google_fonts_api', "https://fonts.googleapis.com" ,  array() , "1", "all");
	wp_enqueue_style('ct_style_gstatic', "https://fonts.gstatic.com" ,  array() , "1", "all");
	wp_enqueue_style('ct_style_fonts_roboto', "https://fonts.googleapis.com/css2?family=Roboto:wght@100;500;700;900&display=swap" ,  array() , "1", "all");
	wp_enqueue_style('ct_style_fonts_poppins', "https://fonts.googleapis.com/css2?family=Poppins:wght@100;500;700;900&display=swap" ,  array() , "1", "all");
	wp_enqueue_style('ct_style_fonts_lato', "https://fonts.googleapis.com/css2?family=Lato:wght@100;200;300;400;500;700;900&display=swap" ,  array() , "1", "all");
	wp_enqueue_style('ct_style_owl_carousal_css', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" ,  array() , "2.3.4", "all");
	wp_enqueue_style('ct_style_owl_carousal_min_css', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" ,  array() , "2.3.4", "all");
	wp_enqueue_style('ct_style_css', get_template_directory_uri()."/css/style.css" ,  array() , $version, "all");

}

add_action('wp_enqueue_scripts', 'ct_register_styles');

// javascript
function ct_register_javascript(){
	wp_enqueue_script('ct-script-bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(),"5.1.3",true);
	wp_enqueue_script('ct-script-jquery',"https://code.jquery.com/jquery-3.6.0.min.js", array(), "3.6.0",true);
	wp_enqueue_script( 'ct-script-owl-carousal', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array() , "2.3.4", true );
	wp_enqueue_script('ct-main-js', get_template_directory_uri()."/js/main.js" , array() , "1.0", true); 
}

add_action('wp_enqueue_scripts', 'ct_register_javascript');

// menus register
function custom_menu(){
	$locations = array(
		'primary' => 'Primary Menu'
	);
	 register_nav_menus($locations);
}
add_action( 'init','custom_menu' );

// blog post regster
function custom_theme_support(){
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','custom_theme_support');

/* Top Bar Customizer */
require_once(get_theme_file_path('/inc/page-customizers/top-bar-customizer.php'));

/*	Main Logo Customizer  */
require_once(get_theme_file_path('/inc/page-customizers/main-logo-customizer.php'));

/*	Homepage Customizer  */
require_once(get_theme_file_path('/inc/page-customizers/home-page-customizer.php'));

/*	About Page Customizer  */
require_once(get_theme_file_path('/inc/page-customizers/about-page-customizer.php'));

/*	Contact Page Customizer  */
// require_once(get_theme_file_path('/inc/page-customizers/contact-page-customizer.php'));





