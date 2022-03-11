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
// function energy_security_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Sidebar', 'energy-security' ),
// 			'id'            => 'sidebar-1',
// 			'description'   => esc_html__( 'Add widgets here.', 'energy-security' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'energy_security_widgets_init' );

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
	wp_enqueue_script('ct-script-jquery',"https://code.jquery.com/jquery-3.6.0.min.js", array(), "3.6.0",true);
	wp_enqueue_script('ct-script-bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(),"5.1.3",true);
	wp_enqueue_script( 'ct-script-owl-carousal', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array() , "2.3.4", true );
	wp_enqueue_script('ct-carousel-js', get_template_directory_uri()."/js/carousel-handler.js" , array() , "1.0", true); 
	wp_enqueue_script('ct-testimonials-js', get_template_directory_uri()."/js/reviews-handler.js" , array() , "1.0", true); 
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
require_once(get_theme_file_path('/inc/page-customizers/contact-page-customizer.php'));

/*  Service Page Customizer */
require_once(get_theme_file_path( '/inc/page-customizers/services-page-customizer.php'));

/*	Footer Customizer  */
require_once(get_theme_file_path('/inc/page-customizers/footer-customizer.php'));

function custom_excerpt_length($excerpt) {
    if (has_excerpt()) {
        $excerpt = wp_trim_words(get_the_excerpt(), apply_filters("excerpt_length", 50));
    }
    return $excerpt;
}
add_filter("the_excerpt", "custom_excerpt_length", 999);

// custom testimonial widget
function register_home_widget_area()
{
	register_sidebar(
		array(
			'id' => 'home-widget-area',
			'name' => esc_html__('Home Page Customer Reviews', 'theme-domain'),
			'description' => esc_html__('Add widget here', 'theme-domain'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
			'after_title' => '</h3></div>'
		)
	);
}
add_action('widgets_init', 'register_home_widget_area');


function customer_testimonials_register_widget()
{
	register_widget('customer_testimonial_widget_home');
}
add_action('widgets_init', 'customer_testimonials_register_widget');

class customer_testimonial_widget_home extends WP_Widget
{
	function __construct()
	{

		// Add Widget scripts
		add_action('admin_enqueue_scripts', array($this, 'scripts'));

		parent::__construct(
			'our_widget_home', // Base ID
			__('Customer Testimonials Home', 'text_domain'), // Name
			array('description' => __('Our Widget with media files', 'text_domain'),) // Args
		);
	}
	public function widget($args, $instance)
	{
		$count = 0;; ?>

<div class="customer-testimonial-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-7 ">
                <h2 class="white-head">Customer <span style="color: #999999;">Testimonials</span>
                </h2>
                <div class="topic-underline-two-clrs">
                    <div class="light-green-underline"></div>
                    <div class="dark-green-underline"></div>
                </div>
                <p class="home-p-white">
                    <?php echo $instance[count($instance) - 1]->testimonial_desc != null ? $instance[count($instance) - 1]->testimonial_desc : $instance[count($instance) - 1]->testimonial_desc ?>
                    <!-- <?php
					  if (isset($instance[count($instance) - 1]->testimonial_desc) && count($instance)>0) : ?>
					<p class="customer-testimonial-main-head">
						<?php echo $instance[count($instance) - 1]->testimonial_desc != null ? $instance[count($instance) - 1]->testimonial_desc : $instance[count($instance) - 1]->testimonial_desc ?>
					</p>
					<?php endif; ?> -->
                </p>
            </div>
            <div class="col-md-5 news-read-more">
                <a class="read-more" href=""><button class="btn wwd-btn wwd-btn-white"> Read more <i
                            class="fas fa-angle-double-right read-more-icon read-more-icon-white"></i></button></a>
            </div>
        </div>
        <div class="row g-4 testomonials-card-row">
            <?php foreach ($instance as $value) :
						if ($value->title != null) :
							if(! isset($value->scope_list_1)){
                                $value->scope_list_1=null;
                            }
                            if(! isset($value->scope_list_2)){
                                $value->scope_list_2=null;
                            }
                            if(! isset($value->scope_list_3)){
                                $value->scope_list_3=null;
                            }
                            if(! isset($value->scope_list_4)){
                                $value->scope_list_4=null;
                            }
                            if(! isset($value->scope_list_5)){
                                $value->scope_list_5=null;
                            }
                            if(! isset($value->scope_list_6)){
                                $value->scope_list_6=null;
                            }
					?>
            <div class="col-4">
                <div class="item item-test" id="id-123">
                    <div class="card-owl card-owl-1" data-bs-toggle="modal"
                        data-bs-target="<?php echo '#exampleModal' . $count; ?>">
                        <div class="card-content">
                            <div class="row g-2">
                                <div class="col-12 test-card-holder">
                                    <img class="card-img" src="<?php echo json_decode($value->sliders)[0]->url; ?>"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="person-sec">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="avatar-sec">
                                        <img src="<?php echo json_decode($value->profile)->url; ?>" class="avatar-image"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="col-md-10 person-details-sec">
                                    <h4 class="person-name-home"><?php echo $value->title; ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-ul">
                            <ul>
                                <?php if ($value->scope_list_1 != null) : ?>
                                <li><?php echo $value->scope_list_1; ?></li>
                                <?php endif; ?>
                                <?php if ($value->scope_list_2 != null) : ?>
                                <li><?php echo $value->scope_list_2; ?></li>
                                <?php endif; ?>
                                <?php if ($value->scope_list_3 != null) : ?>
                                <li><?php echo $value->scope_list_3; ?></li>
                                <?php endif; ?>
                                <?php if ($value->scope_list_4 != null) : ?>
                                <li><?php echo $value->scope_list_4; ?></li>
                                <?php endif; ?>
                                <?php if ($value->scope_list_5 != null) : ?>
                                <li><?php echo $value->scope_list_5; ?></li>
                                <?php endif; ?>
                                <?php if ($value->scope_list_6 != null) : ?>
                                <li><?php echo $value->scope_list_6; ?></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="<?php echo 'exampleModal' . $count; ?>" tabindex="-1"
                        data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <p class="cross-x">X</p>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="item">
                                        <div class="card-owl">
                                            <div class="card-content">
                                                <div class="row g-2">
                                                    <div class="col-12">
                                                        <div class="owl-carousel owl-theme testimonial-owl">
                                                            <?php foreach (json_decode($value->sliders) as $slider) : ?>
                                                            <div class="item"><img class="card-img"
                                                                    src="<?php echo $slider->url; ?>" alt="" /></div>
                                                            <?php endforeach; ?>
                                                            <!-- <div class="item"><img class="card-img" src="images/image 58 (1).png" alt="" /></div>
                                                    <div class="item"><img class="card-img" src="images/image 58 (1).png" alt="" /></div> -->
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="person-sec">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="avatar-sec">
                                                            <img src="<?php echo json_decode($value->profile)->url; ?>"
                                                                class="avatar-image" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <img src="http://esinetsolinfo.045d37c.netsolhost.com/wp-content/uploads/2022/02/image-5.png" alt="" />
                                                        <h4 class="person-name-home"><?php echo $value->title; ?></h4>
                                                        <p class="person-comment-home"><?php echo $value->sub_title; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5>Project Scope:</h5>
                                            <div class="test-modal-ul">
                                                <ul>
                                                    <?php if ($value->scope_list_1 != null) : ?>
                                                    <li><?php echo $value->scope_list_1; ?></li>
                                                    <?php endif; ?>
                                                    <?php if ($value->scope_list_2 != null) : ?>
                                                    <li><?php echo $value->scope_list_2; ?></li>
                                                    <?php endif; ?>
                                                    <?php if ($value->scope_list_3 != null) : ?>
                                                    <li><?php echo $value->scope_list_3; ?></li>
                                                    <?php endif; ?>
                                                    <?php if ($value->scope_list_4 != null) : ?>
                                                    <li><?php echo $value->scope_list_4; ?></li>
                                                    <?php endif; ?>
                                                    <?php if ($value->scope_list_5 != null) : ?>
                                                    <li><?php echo $value->scope_list_5; ?></li>
                                                    <?php endif; ?>
                                                    <?php if ($value->scope_list_6 != null) : ?>
                                                    <li><?php echo $value->scope_list_6; ?></li>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                            <p class="modal-person-text">
                                                <?php echo $value->description; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
							$count += 1;
						endif;
					endforeach; ?>
        </div>
    </div>
</div>
<?php
		// echo $args['after_widget'];
		ob_end_flush();
	}
	public function form($instance)
	{
		// var_dump($instance);
		$instanceCount = count($instance);
		if ($instanceCount == 0) {
			$obj = new stdClass;
			$obj->id = 0;
			$obj->title = null;
			$obj->sub_title = null;
			$obj->description = null;
			$obj->profile = null;
			$obj->scope_list_1 = null;
			$obj->scope_list_2 = null;
			$obj->scope_list_3 = null;
			$obj->scope_list_4 = null;
			$obj->scope_list_5 = null;
			$obj->scope_list_6 = null;
			$obj->sliders = null;
			$obj->testimonial_desc = null;
			$obj->is_new = null;
			$obj->is_delete = null;
			array_push($instance, $obj);
		}
		// $instance['is_new'] = null;
		// $instance['is_delete'] = null;
		; ?>

    <div style="display:grid;margin-top:10px;">
        <label style="margin-bottom:5px;">Testimonial Description</label>
        <textarea name="<?php echo $this->get_field_name('testimonial_desc'); ?>[<?php echo count($instance) - 1; ?>]"
            id="testimonial_desc" cols="30"
            rows="10"><?php echo esc_attr($instance[count($instance) == 1 ? count($instance) - 1 : count($instance) - 2]->testimonial_desc); ?></textarea>
    </div>

    <?php
		for ($fields_counter = 0; $fields_counter < count($instance); $fields_counter++) {
			$element = $instance[$fields_counter];
			if(! isset($instance[$fields_counter]->scope_list_1)){
				$instance[$fields_counter]->scope_list_1=null;
			}
			if(! isset($instance[$fields_counter]->scope_list_2)){
				$instance[$fields_counter]->scope_list_2=null;
			}
			if(! isset($instance[$fields_counter]->scope_list_3)){
				$instance[$fields_counter]->scope_list_3=null;
			}
			if(! isset($instance[$fields_counter]->scope_list_4)){
				$instance[$fields_counter]->scope_list_4=null;
			}
			if(! isset($instance[$fields_counter]->scope_list_5)){
				$instance[$fields_counter]->scope_list_5=null;
			}
			if(! isset($instance[$fields_counter]->scope_list_6)){
				$instance[$fields_counter]->scope_list_6=null;
			}
		?>
	<div style="border: 1px solid #dcdcde;border-radius: 5px;padding: 15px;margin-top: 15px;">
	<h3>Single Testimonial Details</h3>
    <div style="display:grid;margin-top:15px;">
        <label style="margin-bottom:5px;">Customer's Name <span style="color:#ed3f3f;">*(Required)</span></label>
        <input class="title-change" name="<?php echo $this->get_field_name('title'); ?>[<?php echo $fields_counter; ?>]"
            type="text" value="<?php echo esc_attr($instance[$fields_counter]->title); ?>">
    </div>

    <div style="display:grid;margin-top:15px;">
        <label style="margin-bottom:5px;">Customer's Feeling<span style="color:#ed3f3f;">*(Required)</span></label>
        <input class="widefat" name="<?php echo $this->get_field_name('sub_title'); ?>[<?php echo $fields_counter; ?>]"
            type="text" value="<?php echo esc_attr($instance[$fields_counter]->sub_title); ?>">
    </div>

    <div id="<?php echo 'fields' . 'profile_' . $fields_counter; ?>" style="display: grid;">
        <label style="margin-bottom:5px;">Customer Profile Image<span style="color:#ed3f3f;">*(<b>50x50 px</b>Image Required)</span></label>
        <?php
				$profile = json_decode($instance[$fields_counter]->profile);
				if (isset($profile)) {; ?>
        <img width="75" src="<?php echo esc_attr($profile->url); ?>" alt="Profile Image" style="margin-top:10px;">
        <?php }; ?>
    </div>
    <button style="margin-top:10px;" name="<?php echo 'fields' . 'profile_' . $fields_counter; ?>"
        data-id="<?php echo 'fields' . 'profile_' . $fields_counter; ?>" data-count="<?php echo $fields_counter; ?>"
        class="upload_image_button button button-primary">Upload Image</button>

    <div style="display:grid;margin-top:15px;">
        <label style="margin-bottom:5px;">Project Scope List <span style="color:#ed3f3f;">(<b>Required at least one</b>)</span></label>
        <input id="<?php echo 'fields' . '_scope_1' . $fields_counter; ?>"
            name="<?php echo $this->get_field_name('scope_list_1'); ?>[<?php echo $fields_counter; ?>]"
            class="form-control" value="<?php echo esc_attr($instance[$fields_counter]->scope_list_1); ?>"
            style="margin-bottom:5px;" />
        <input id="<?php echo 'fields' . '_scope_2' . $fields_counter; ?>"
            name="<?php echo $this->get_field_name('scope_list_2'); ?>[<?php echo $fields_counter; ?>]"
            class="form-control" value="<?php echo esc_attr($instance[$fields_counter]->scope_list_2); ?>"
            style="margin-bottom:5px;" />
        <input id="<?php echo 'fields' . '_scope_3' . $fields_counter; ?>"
            name="<?php echo $this->get_field_name('scope_list_3'); ?>[<?php echo $fields_counter; ?>]"
            class="form-control" value="<?php echo esc_attr($instance[$fields_counter]->scope_list_3); ?>"
            style="margin-bottom:5px;" />
        <input id="<?php echo 'fields' . '_scope_4' . $fields_counter; ?>"
            name="<?php echo $this->get_field_name('scope_list_4'); ?>[<?php echo $fields_counter; ?>]"
            class="form-control" value="<?php echo esc_attr($instance[$fields_counter]->scope_list_4); ?>"
            style="margin-bottom:5px;" />
        <input id="<?php echo 'fields' . '_scope_5' . $fields_counter; ?>"
            name="<?php echo $this->get_field_name('scope_list_5'); ?>[<?php echo $fields_counter; ?>]"
            class="form-control" value="<?php echo esc_attr($instance[$fields_counter]->scope_list_5); ?>"
            style="margin-bottom:5px;" />
        <input id="<?php echo 'fields' . '_scope_6' . $fields_counter; ?>"
            name="<?php echo $this->get_field_name('scope_list_6'); ?>[<?php echo $fields_counter; ?>]"
            class="form-control" value="<?php echo esc_attr($instance[$fields_counter]->scope_list_6); ?>"
            style="margin-bottom:5px;" />
    </div>

    <div style="display:grid;margin-top:10px;">
        <label style="margin-bottom:5px;">Customer's Comment<span style="color:#ed3f3f;">*(Required)</span></label>
        <input class="widefat"
            name="<?php echo $this->get_field_name('description'); ?>[<?php echo $fields_counter; ?>]" type="text"
            value="<?php echo esc_attr($instance[$fields_counter]->description); ?>">
    </div>

    <br>
    <label style="margin-bottom:5px; margin-top:15px;">Popup Slider Images<span style="color:#ed3f3f;">*(Required)</span></label>
    <div id="<?php echo 'fields' . 'slider_' . $fields_counter; ?>" style="margin-top:10px">
        <?php
				$element3 = json_decode($element->sliders);
				if (isset($element3)) {
					for ($x = 0; $x < count($element3); $x++) {; ?>
        <img src="<?php echo $element3[$x]->url; ?>" width="150px" alt="">


        <?php }
				}; ?>
    </div>
    <button style="margin-top:10px;" name="<?php echo 'fields' . 'slider_' . $fields_counter; ?>"
        data-id="<?php echo 'fields' . 'slider_' . $fields_counter; ?>" data-count="<?php echo $fields_counter; ?>"
        class="upload_slider_button button button-primary">Upload Slider Image</button>
		</div>
<input type="hidden" id="<?php echo 'fields' . 'profile_val_' . $fields_counter; ?>"
    name="<?php echo $this->get_field_name('profile'); ?>[<?php echo $fields_counter; ?>]"
    value="<?php echo esc_attr($instance[$fields_counter]->profile); ?>" />
<input type="hidden" id="<?php echo 'fields' . 'slider_val_' . $fields_counter; ?>"
    name="<?php echo $this->get_field_name('sliders'); ?>[<?php echo $fields_counter; ?>]"
    value="<?php echo esc_attr($instance[$fields_counter]->sliders); ?>" />
<input type="hidden" id="<?php echo 'fields' . 'id_val_' . $fields_counter; ?>"
    name="<?php echo $this->get_field_name('id'); ?>[<?php echo $fields_counter; ?>]"
    value="<?php echo $fields_counter; ?>" />
<?php
		}
		if(! isset($instance[count($instance)-1]->is_new)){
			$instance[count($instance)-1]->is_new=null;
		}
		if(! isset($instance[count($instance)-1]->is_delete)){
			$instance[count($instance)-1]->is_delete=null;
		}
		?>
<p>
    <input class="checkbox" type="checkbox" <?php checked($instance[count($instance)-1]->is_new, 'on'); ?>
        id="<?php echo $this->get_field_id('is_new'); ?>" name="<?php echo $this->get_field_name('is_new'); ?>" />
    <label for="<?php echo $this->get_field_id('is_new'); ?>">Add New Record</label>
</p>
<p>
    <input class="checkbox" type="checkbox" <?php checked($instance[count($instance)-1]->is_delete, 'on'); ?>
        id="<?php echo $this->get_field_id('is_delete'); ?>" name="<?php echo $this->get_field_name('is_delete'); ?>" />
    <label for="<?php echo $this->get_field_id('is_delete'); ?>">Delete Last Record</label>
</p>
<?php
	}
	public function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		if (strlen(end($new_instance['title'])) > 0 && strlen(end($new_instance['sub_title'])) > 0 && strlen(end($new_instance['description'])) > 0 && strlen(end($new_instance['profile'])) > 0 && strlen(end($new_instance['sliders'])) > 0) {

			$exists_ids = [];

			for ($i = 0; $i < count($instance); $i++) {
				for ($x = 0; $x < count($new_instance); $x++) {
					if ($new_instance['id'][$x] == $instance[$i]->id) {
						array_push($exists_ids, $new_instance['id'][$x]);
						$obj = new stdClass;
						if ($new_instance['id'][$x] != null) {
							$obj->id = $new_instance['id'][$x];
						}
						if ($new_instance['title'][$x] != null) {
							$obj->title = $new_instance['title'][$x];
						}
						if ($new_instance['sub_title'][$x] != null) {
							$obj->sub_title = $new_instance['sub_title'][$x];
						}
						if ($new_instance['description'][$x] != null) {
							$obj->description = $new_instance['description'][$x];
						}
						if ($new_instance['profile'][$x] != null) {
							$obj->profile = $new_instance['profile'][$x];
						}
						if ($new_instance['scope_list_1'][$x] != null) {
							$obj->scope_list_1 = $new_instance['scope_list_1'][$x];
						}
						if ($new_instance['scope_list_2'][$x] != null) {
							$obj->scope_list_2 = $new_instance['scope_list_2'][$x];
						}
						if ($new_instance['scope_list_3'][$x] != null) {
							$obj->scope_list_3 = $new_instance['scope_list_3'][$x];
						}
						if ($new_instance['scope_list_4'][$x] != null) {
							$obj->scope_list_4 = $new_instance['scope_list_4'][$x];
						}
						if ($new_instance['scope_list_5'][$x] != null) {
							$obj->scope_list_5 = $new_instance['scope_list_5'][$x];
						}
						if ($new_instance['scope_list_6'][$x] != null) {
							$obj->scope_list_6 = $new_instance['scope_list_6'][$x];
						}
						if ($new_instance['sliders'][$x] != null) {
							$obj->sliders = $new_instance['sliders'][$x];
						}
						if ($new_instance['testimonial_desc'][$x] != null) {
							$obj->testimonial_desc = $new_instance['testimonial_desc'][$x];
						} else {
							for ($z=0; $z <= count($new_instance); $z++) { 
								if(isset($new_instance['testimonial_desc'][$z])){
									$obj->testimonial_desc = $new_instance['testimonial_desc'][$z];
									break;
								}
							}
						}
						if ($new_instance['is_new'][$x] != null) {
							$obj->is_new = $new_instance['is_new'][$x];
						}
						if ($new_instance['is_delete'][$x] != null) {
							$obj->is_delete = $new_instance['is_delete'][$x];
						}
						$instance[$i] = $obj;
					}
				}
			}
			$result = array_diff($new_instance['id'], $exists_ids);

			if (count($result) > 0) {
				$obj = new stdClass;
				$obj->id = end($new_instance['id']);
				$obj->title = end($new_instance['title']);
				$obj->sub_title = end($new_instance['sub_title']);
				$obj->description = end($new_instance['description']);
				$obj->profile = end($new_instance['profile']);
				$obj->scope_list_1 = end($new_instance['scope_list_1']);
				$obj->scope_list_2 = end($new_instance['scope_list_2']);
				$obj->scope_list_3 = end($new_instance['scope_list_3']);
				$obj->scope_list_4 = end($new_instance['scope_list_4']);
				$obj->scope_list_5 = end($new_instance['scope_list_5']);
				$obj->scope_list_6 = end($new_instance['scope_list_6']);
				$obj->sliders = end($new_instance['sliders']);
				$obj->testimonial_desc = end($new_instance['testimonial_desc']);
				// die(var_dump(end($new_instance['testimonial_desc'])));
				if(end($new_instance['testimonial_desc']) == null){
					// die(var_dump($instance[(count($instance)-1)]->testimonial_desc));
					$obj->testimonial_desc = $instance[(count($instance)-1)]->testimonial_desc;
				}
				// $obj->is_new = end($new_instance['is_new']);
				// $obj->is_delete = end($new_instance['is_delete']);

				$instance[] = $obj;
			}
		}
		if ($new_instance['is_delete'] != null) {
			$instance[count($instance)-2]->testimonial_desc = $instance[count($instance)-1]->testimonial_desc;
			array_pop($instance);
		}
		// die(var_dump($new_instance['is_new']));
		if ($new_instance['is_new'] != null) {
			// die(var_dump('here'));
			$obj = new stdClass;
			$obj->id = count($new_instance['id']);
			$obj->title = null;
			$obj->sub_title = null;
			$obj->description = null;
			$obj->profile = null;
			$obj->scope_list_1 = null;
			$obj->scope_list_2 = null;
			$obj->scope_list_3 = null;
			$obj->scope_list_4 = null;
			$obj->scope_list_5 = null;
			$obj->scope_list_6 = null;
			$obj->sliders = null;
			$obj->testimonial_desc = null;
			$obj->is_new = null;
			$obj->is_delete = null;
			$instance[] = $obj;
			// unset($instance['is_new']);
		}
		return $instance;
	}
	public function scripts()
	{
		wp_enqueue_media();
		wp_enqueue_script('custom_testimonials', get_template_directory_uri() . '/js/customerTestimonial.js', array('jquery'), null, true);
	}
}


function register_review_widget_area()
{
	register_sidebar(
		array(
			'id' => 'review-widget-area',
			'name' => esc_html__('Reviews Page Customer Reviews', 'theme-domain'),
			'description' => esc_html__('Add widget here', 'theme-domain'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
			'after_title' => '</h3></div>'
		)
	);
}
add_action('widgets_init', 'register_review_widget_area');


function review_register_widget()
{
	register_widget('review_widget');
}
add_action('widgets_init', 'review_register_widget');
class review_widget extends WP_Widget
{
	function __construct()
	{

		// Add Widget scripts
		add_action('admin_enqueue_scripts', array($this, 'scripts'));

		parent::__construct(
			'our_widget', // Base ID
			__('All Customer Testimonials', 'text_domain'), // Name
			array('description' => __('Customer Testimonial Widget', 'text_domain'),) // Args
		);
	}
	public function widget($args, $instance)
	{
		$count = 0;
		$limit = 9;
		$initData = array_slice($instance, 0, $limit);; ?>
<script>
window.onload = function afterWebPageLoad() {
    const limit = 9;
    const offset = limit;
    const allData = `<?php echo json_encode($instance); ?>`;
    const data1 = allData.replace(/"{/g, '{');
    const data2 = data1.replace(/}"/g, '}');
    const data3 = data2.replace(/"\[/g, '[');
    const finalData = data3.replace(/\]"/g, ']');
    const parseData = JSON.parse(finalData);
    const sliceData = parseData.slice(offset);
    const elementsLength = document.querySelector('#pagination').querySelectorAll('.col-4').length;
    if (elementsLength == parseData.length) {
        // document.querySelector('#loadMore').remove();
        document.querySelector('#loadMore').style.opacity = 0.15;
        document.querySelector('#loadMore').style.pointerEvents = 'none';
        document.querySelector('#loadMore').style.cursor = 'default';
    }

    const initCarousals = (sliders) => {
        let sliderHtml = ``;
        sliders.forEach(element => {
            sliderHtml +=
            `<div class="item"><img class="card-img" src="${element.url}" alt="" /></div>`;
        });
        return sliderHtml;
    }

    const paginationFunc = () => {
        const elementsLength = document.querySelector('#pagination').querySelectorAll('.col-4').length;

        let valUrl = '';
        for (let index = elementsLength < limit ? sliceData.length : elementsLength - limit; index < sliceData
            .length; index++) {
            const element = sliceData[index];

            valUrl += `<div class="col-4">
								<div class="item item-test">
									<div class="card-owl" data-bs-toggle="modal" data-bs-target="${'#exampleModal'+index}">
										<div class="card-content">
											<div class="row g-2">
												<div class="col-12 test-card-holder">
													<img class="card-img" src="${element?.sliders[0].url || ''}" alt="" />
												</div>
											</div>
										</div>
										<div class="person-sec">
											<div class="row">
												<div class="col-md-2">
													<div class="avatar-sec">
														<img src="${element.profile.url || ''}" class="avatar-image" alt="" />
													</div>
												</div>
												<div class="col-md-10 person-details-sec">
													<h4 class="person-name-home">${element.title || ''}</h4>
												</div>
											</div>
										</div>
										<div class="testimonial-ul">
											<ul>
											${element.scope_list_1?'<li>'+element.scope_list_1+'</li>':''}
											${element.scope_list_2?'<li>'+element.scope_list_2+'</li>':''}
											${element.scope_list_3?'<li>'+element.scope_list_3+'</li>':''}
											${element.scope_list_4?'<li>'+element.scope_list_4+'</li>':''}
											${element.scope_list_5?'<li>'+element.scope_list_5+'</li>':''}
											${element.scope_list_6?'<li>'+element.scope_list_6+'</li>':''}
											</ul>
										</div>
									</div>
									<!-- Modal -->
									<div class="modal fade" id="${'exampleModal'+index}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
														<p class="cross-x">X</p>
													</button>
												</div>
												<div class="modal-body">
													<div class="item">
														<div class="card-owl">
															<div class="card-content">
																<div class="row g-2">
																	<div class="col-12">
																		<div class="owl-carousel owl-theme testimonial-owl">
																			${initCarousals(element.sliders)}
																			
																		</div>

																	</div>
																</div>
															</div>
															<div class="person-sec">
																<div class="row">
																	<div class="col-md-2">
																		<div class="avatar-sec">
																			<img src="${element.profile.url || ''}" class="avatar-image" alt="" />
																		</div>
																	</div>
																	<div class="col-md-8">
																		<img src="http://esinetsolinfo.045d37c.netsolhost.com/wp-content/uploads/2022/02/image-5.png" alt="" />
																		<h4 class="person-name-home">${element.title}</h4>
																		<p class="person-comment-home">${element.sub_title}</p>
																	</div>
																</div>
															</div>
															<h5>Project Scope:</h5>
															<div class="test-modal-ul">
																<ul>
																${element.scope_list_1?'<li>'+element.scope_list_1+'</li>':null}
																${element.scope_list_2?'<li>'+element.scope_list_2+'</li>':null}
																${element.scope_list_3?'<li>'+element.scope_list_3+'</li>':null}
																${element.scope_list_4?'<li>'+element.scope_list_4+'</li>':null}
																${element.scope_list_5?'<li>'+element.scope_list_5+'</li>':null}
																${element.scope_list_6?'<li>'+element.scope_list_6+'</li>':null}
																</ul>
															</div>
															<p class="modal-person-text">
																${element.description}
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>`

        }
        setTimeout(() => {
            document.querySelector('#pagination').insertAdjacentHTML("beforeend", valUrl);
            const lastElementsLength = document.querySelector('#pagination').querySelectorAll('.col-4')
                .length;
            if (lastElementsLength == parseData.length) {
                // document.querySelector('#loadMore').remove();
                document.querySelector('#loadMore').style.opacity = 0.15;
                document.querySelector('#loadMore').style.pointerEvents = 'none';
                document.querySelector('#loadMore').style.cursor = 'default';
            }
        }, 1000);

    }
    document.querySelector('#loadMore').addEventListener("click", paginationFunc);

}
</script>

<div class="container customer-testimonials-container-main">
    <div class="col-md-7">
        <h2 class="customer-testimonials-head">
            CUSTOMER <span style="color:#999999">TESTIMONIALS</span>
        </h2>
        <?php
					  if (isset($instance[count($instance) - 1]->testimonial_desc) && count($instance)>0) : ?>
        <p class="customer-testimonial-main-head">
            <?php echo $instance[count($instance) - 1]->testimonial_desc != null ? $instance[count($instance) - 1]->testimonial_desc : $instance[count($instance) - 1]->testimonial_desc ?>
        </p>
        <?php endif; ?>
    </div>
</div>
<div class="container customer-testimonials-container-page">
    <div class="col-md-12">
        <div class="row single-testimonial gx-4" id="pagination">
            <?php foreach ($initData as $value) :
						if ($value->title != null) :
							if (!isset($value->scope_list_1)) {
								$value->scope_list_1 = null;
							}
							if (!isset($value->scope_list_2)) {
								$value->scope_list_2 = null;
							}
							if (!isset($value->scope_list_3)) {
								$value->scope_list_3 = null;
							}
							if (!isset($value->scope_list_4)) {
								$value->scope_list_4 = null;
							}
							if (!isset($value->scope_list_5)) {
								$value->scope_list_5 = null;
							}
							if (!isset($value->scope_list_6)) {
								$value->scope_list_6 = null;
							}
					?>
            <div class="col-4">
                <div class="item item-test">
                    <div class="card-owl card-owl-2" data-bs-toggle="modal"
                        data-bs-target="<?php echo '#exampleModal' . $count; ?>">
                        <div class="card-content">
                            <div class="row g-2">
                                <div class="col-12 test-card-holder">
                                    <img class="card-img" src="<?php echo json_decode($value->sliders)[0]->url; ?>"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="person-sec">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="avatar-sec">
                                        <img src="<?php echo json_decode($value->profile)->url; ?>" class="avatar-image"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="col-md-10 person-details-sec">
                                    <h4 class="person-name-home"><?php echo $value->title; ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-ul">
                            <ul>
                                <?php if ($value->scope_list_1 != null) : ?>
                                <li><?php echo $value->scope_list_1; ?></li>
                                <?php endif; ?>
                                <?php if ($value->scope_list_2 != null) : ?>
                                <li><?php echo $value->scope_list_2; ?></li>
                                <?php endif; ?>
                                <?php if ($value->scope_list_3 != null) : ?>
                                <li><?php echo $value->scope_list_3; ?></li>
                                <?php endif; ?>
                                <?php if ($value->scope_list_4 != null) : ?>
                                <li><?php echo $value->scope_list_4; ?></li>
                                <?php endif; ?>
                                <?php if ($value->scope_list_5 != null) : ?>
                                <li><?php echo $value->scope_list_5; ?></li>
                                <?php endif; ?>
                                <?php if ($value->scope_list_6 != null) : ?>
                                <li><?php echo $value->scope_list_6; ?></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="<?php echo 'exampleModal' . $count; ?>" tabindex="-1"
                        data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <p class="cross-x">X</p>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="item">
                                        <div class="card-owl">
                                            <div class="card-content">
                                                <div class="row g-2">
                                                    <div class="col-12">
                                                        <div class="owl-carousel owl-theme testimonial-owl">
                                                            <?php foreach (json_decode($value->sliders) as $slider) : ?>
                                                            <div class="item"><img class="card-img"
                                                                    src="<?php echo $slider->url; ?>" alt="" /></div>
                                                            <?php endforeach; ?>
                                                            <!-- <div class="item"><img class="card-img" src="images/image 58 (1).png" alt="" /></div>
                                                    <div class="item"><img class="card-img" src="images/image 58 (1).png" alt="" /></div> -->
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="person-sec">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="avatar-sec">
                                                            <img src="<?php echo json_decode($value->profile)->url; ?>"
                                                                class="avatar-image" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <img src="http://esinetsolinfo.045d37c.netsolhost.com/wp-content/uploads/2022/02/image-5.png" alt="" />
                                                        <h4 class="person-name-home"><?php echo $value->title; ?></h4>
                                                        <p class="person-comment-home"><?php echo $value->sub_title; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5>Project Scope:</h5>
                                            <div class="test-modal-ul">
                                                <ul>
                                                    <?php if ($value->scope_list_1 != null) : ?>
                                                    <li><?php echo $value->scope_list_1; ?></li>
                                                    <?php endif; ?>
                                                    <?php if ($value->scope_list_2 != null) : ?>
                                                    <li><?php echo $value->scope_list_2; ?></li>
                                                    <?php endif; ?>
                                                    <?php if ($value->scope_list_3 != null) : ?>
                                                    <li><?php echo $value->scope_list_3; ?></li>
                                                    <?php endif; ?>
                                                    <?php if ($value->scope_list_4 != null) : ?>
                                                    <li><?php echo $value->scope_list_4; ?></li>
                                                    <?php endif; ?>
                                                    <?php if ($value->scope_list_5 != null) : ?>
                                                    <li><?php echo $value->scope_list_5; ?></li>
                                                    <?php endif; ?>
                                                    <?php if ($value->scope_list_6 != null) : ?>
                                                    <li><?php echo $value->scope_list_6; ?></li>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                            <p class="modal-person-text">
                                                <?php echo $value->description; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
							$count += 1;
						endif;
					endforeach; ?>
        </div>

    </div>
</div>

<div class="container text-center">
    <button id="loadMore" class="btn more-testimonials-btn">Load More</button>
</div>
<?php
		// echo $args['after_widget'];
		ob_end_flush();
	}
	public function form($instance)
	{
		// var_dump($instance);
		$instanceCount = count($instance);
		if ($instanceCount == 0) {
			$obj = new stdClass;
			$obj->id = 0;
			$obj->title = null;
			$obj->sub_title = null;
			$obj->description = null;
			$obj->profile = null;
			$obj->scope_list_1 = null;
			$obj->scope_list_2 = null;
			$obj->scope_list_3 = null;
			$obj->scope_list_4 = null;
			$obj->scope_list_5 = null;
			$obj->scope_list_6 = null;
			$obj->sliders = null;
			$obj->testimonial_desc = null;
			$obj->is_new = null;
			$obj->is_delete = null;
			array_push($instance, $obj);
		}
			// $instance['is_new'] = null;
			// $instance['is_delete'] = null;
		; ?>

<div style="display:grid;margin-top:15px;">
    <label>Testimonial Description :</label>
    <textarea name="<?php echo $this->get_field_name('testimonial_desc'); ?>[<?php echo count($instance) - 1; ?>]"
        id="testimonial_desc" cols="30" rows="10"
        style="margin-top:5px;"><?php echo esc_attr($instance[count($instance) == 1 ? count($instance) - 1 : count($instance) - 2]->testimonial_desc); ?></textarea>
</div>

<?php
		for ($fields_counter = 0; $fields_counter < count($instance); $fields_counter++) {
			$element = $instance[$fields_counter];
			if (!isset($instance[$fields_counter]->scope_list_1)) {
				$instance[$fields_counter]->scope_list_1 = null;
			}
			if (!isset($instance[$fields_counter]->scope_list_2)) {
				$instance[$fields_counter]->scope_list_2 = null;
			}
			if (!isset($instance[$fields_counter]->scope_list_3)) {
				$instance[$fields_counter]->scope_list_3 = null;
			}
			if (!isset($instance[$fields_counter]->scope_list_4)) {
				$instance[$fields_counter]->scope_list_4 = null;
			}
			if (!isset($instance[$fields_counter]->scope_list_5)) {
				$instance[$fields_counter]->scope_list_5 = null;
			}
			if (!isset($instance[$fields_counter]->scope_list_6)) {
				$instance[$fields_counter]->scope_list_6 = null;
			}
		?>
<div style="border: 1px solid #dcdcde;border-radius:5px;padding:15px;margin-top:15px">
    <h3>Single Testimonial Details</h3>
    <div style="display:grid;margin-top:15px;">
        <label>Customer's Name <span style="color:#ed3f3f">*(Required)</span>:</label>
        <input class="title-change" name="<?php echo $this->get_field_name('title'); ?>[<?php echo $fields_counter; ?>]"
            type="text" value="<?php echo esc_attr($instance[$fields_counter]->title); ?>" style="margin-top:5px;">
    </div>

    <div style="display:grid;margin-top:15px;">
        <label>Customer's Feeling <span style="color:#ed3f3f">*(Required)</span>:</label>
        <input class="widefat" name="<?php echo $this->get_field_name('sub_title'); ?>[<?php echo $fields_counter; ?>]"
            type="text" value="<?php echo esc_attr($instance[$fields_counter]->sub_title); ?>" style="margin-top:5px;">
    </div>

    <div style="display:grid;margin-top:15px;">
        <label>Customer Profile Image <span style="color:#ed3f3f">*(<b>50x50 px</b> Image Required)</span>:</label>
        <div id="<?php echo 'fields' . 'profile_' . $fields_counter; ?>">
            <?php
						$profile = json_decode($instance[$fields_counter]->profile);
						if (isset($profile)) {; ?>
            <img width="75" height="75" src="<?php echo esc_attr($profile->url); ?>" alt="Profile Image">
            <?php }; ?>
        </div>
        <button style="margin-top:10px;width:fit-content;" name="<?php echo 'fields' . 'profile_' . $fields_counter; ?>"
            data-id="<?php echo 'fields' . 'profile_' . $fields_counter; ?>" data-count="<?php echo $fields_counter; ?>"
            class="upload_image_button_2  button button-primary">Upload Image</button>
    </div>

    <div style="display:grid;margin-top:15px;">
        <label>Project Scope List <span style="color:#ed3f3f">(<b>Required at least one</b>)</span> :</label>
        <input id="<?php echo 'fields' . '_scope_1' . $fields_counter; ?>"
            name="<?php echo $this->get_field_name('scope_list_1'); ?>[<?php echo $fields_counter; ?>]"
            class="form-control" value="<?php echo esc_attr($instance[$fields_counter]->scope_list_1); ?>"
            style="margin-top:5px;" />
        <input id="<?php echo 'fields' . '_scope_2' . $fields_counter; ?>"
            name="<?php echo $this->get_field_name('scope_list_2'); ?>[<?php echo $fields_counter; ?>]"
            class="form-control" value="<?php echo esc_attr($instance[$fields_counter]->scope_list_2); ?>"
            style="margin-top:5px;" />
        <input id="<?php echo 'fields' . '_scope_3' . $fields_counter; ?>"
            name="<?php echo $this->get_field_name('scope_list_3'); ?>[<?php echo $fields_counter; ?>]"
            class="form-control" value="<?php echo esc_attr($instance[$fields_counter]->scope_list_3); ?>"
            style="margin-top:5px;" />
        <input id="<?php echo 'fields' . '_scope_4' . $fields_counter; ?>"
            name="<?php echo $this->get_field_name('scope_list_4'); ?>[<?php echo $fields_counter; ?>]"
            class="form-control" value="<?php echo esc_attr($instance[$fields_counter]->scope_list_4); ?>"
            style="margin-top:5px;" />
        <input id="<?php echo 'fields' . '_scope_5' . $fields_counter; ?>"
            name="<?php echo $this->get_field_name('scope_list_5'); ?>[<?php echo $fields_counter; ?>]"
            class="form-control" value="<?php echo esc_attr($instance[$fields_counter]->scope_list_5); ?>"
            style="margin-top:5px;" />
        <input id="<?php echo 'fields' . '_scope_6' . $fields_counter; ?>"
            name="<?php echo $this->get_field_name('scope_list_6'); ?>[<?php echo $fields_counter; ?>]"
            class="form-control" value="<?php echo esc_attr($instance[$fields_counter]->scope_list_6); ?>"
            style="margin-top:5px;" />
    </div>

    <div style="display:grid;margin-top:15px;">
        <label>Customer's Comment <span style="color:#ed3f3f">*(Required)</span>:</label>
        <input class="widefat"
            name="<?php echo $this->get_field_name('description'); ?>[<?php echo $fields_counter; ?>]" type="text"
            value="<?php echo esc_attr($instance[$fields_counter]->description); ?>" style="margin-top:5px;">
    </div>

    <div style="display:grid;margin-top:15px;">
        <label>Popup Slider Images <span style="color:#ed3f3f">*(Required)</span>:</label>
        <div id="<?php echo 'fields' . 'slider_' . $fields_counter; ?>">
            <?php
						$element3 = json_decode($element->sliders);
						if (isset($element3)) {
							for ($x = 0; $x < count($element3); $x++) {; ?>
            <img src="<?php echo $element3[$x]->url; ?>" width="150px" alt="" style="margin-top:5px;">


            <?php }
						}; ?>
        </div>
        <button style="margin-top:10px;width:fit-content;" name="<?php echo 'fields' . 'slider_' . $fields_counter; ?>"
            data-id="<?php echo 'fields' . 'slider_' . $fields_counter; ?>" data-count="<?php echo $fields_counter; ?>"
            class="upload_slider_button_2 button button-primary">Upload Slider Image</button>
    </div>
    <input type="hidden" id="<?php echo 'fields' . 'profile_val_' . $fields_counter; ?>"
        name="<?php echo $this->get_field_name('profile'); ?>[<?php echo $fields_counter; ?>]"
        value="<?php echo esc_attr($instance[$fields_counter]->profile); ?>" style="margin-top:5px;" />
    <input type="hidden" id="<?php echo 'fields' . 'slider_val_' . $fields_counter; ?>"
        name="<?php echo $this->get_field_name('sliders'); ?>[<?php echo $fields_counter; ?>]"
        value="<?php echo esc_attr($instance[$fields_counter]->sliders); ?>" style="margin-top:5px;" />
    <input type="hidden" id="<?php echo 'fields' . 'id_val_' . $fields_counter; ?>"
        name="<?php echo $this->get_field_name('id'); ?>[<?php echo $fields_counter; ?>]"
        value="<?php echo $fields_counter; ?>" style="margin-top:5px;" />
</div>

<?php
		}
		if (!isset($instance[count($instance) - 1]->is_new)) {
			$instance[count($instance) - 1]->is_new = null;
		}
		if (!isset($instance[count($instance) - 1]->is_delete)) {
			$instance[count($instance) - 1]->is_delete = null;
		}
		?>
<p>
    <input class="checkbox" type="checkbox" <?php checked($instance[count($instance) - 1]->is_new, 'on'); ?>
        id="<?php echo $this->get_field_id('is_new'); ?>" name="<?php echo $this->get_field_name('is_new'); ?>" />
    <label for="<?php echo $this->get_field_id('is_new'); ?>">Add New Record</label>
</p>
<p>
    <input class="checkbox" type="checkbox" <?php checked($instance[count($instance) - 1]->is_delete, 'on'); ?>
        id="<?php echo $this->get_field_id('is_delete'); ?>" name="<?php echo $this->get_field_name('is_delete'); ?>" />
    <label for="<?php echo $this->get_field_id('is_delete'); ?>">Delete Last Record</label>
</p>
<?php
	}
	public function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		if (strlen(end($new_instance['title'])) > 0 && strlen(end($new_instance['sub_title'])) > 0 && strlen(end($new_instance['description'])) > 0 && strlen(end($new_instance['profile'])) > 0 && strlen(end($new_instance['sliders'])) > 0) {

			$exists_ids = [];

			for ($i = 0; $i < count($instance); $i++) {
				for ($x = 0; $x < count($new_instance); $x++) {
					if ($new_instance['id'][$x] == $instance[$i]->id) {
						array_push($exists_ids, $new_instance['id'][$x]);
						$obj = new stdClass;
						if ($new_instance['id'][$x] != null) {
							$obj->id = $new_instance['id'][$x];
						}
						if ($new_instance['title'][$x] != null) {
							$obj->title = $new_instance['title'][$x];
						}
						if ($new_instance['sub_title'][$x] != null) {
							$obj->sub_title = $new_instance['sub_title'][$x];
						}
						if ($new_instance['description'][$x] != null) {
							$obj->description = $new_instance['description'][$x];
						}
						if ($new_instance['profile'][$x] != null) {
							$obj->profile = $new_instance['profile'][$x];
						}
						if ($new_instance['scope_list_1'][$x] != null) {
							$obj->scope_list_1 = $new_instance['scope_list_1'][$x];
						}
						if ($new_instance['scope_list_2'][$x] != null) {
							$obj->scope_list_2 = $new_instance['scope_list_2'][$x];
						}
						if ($new_instance['scope_list_3'][$x] != null) {
							$obj->scope_list_3 = $new_instance['scope_list_3'][$x];
						}
						if ($new_instance['scope_list_4'][$x] != null) {
							$obj->scope_list_4 = $new_instance['scope_list_4'][$x];
						}
						if ($new_instance['scope_list_5'][$x] != null) {
							$obj->scope_list_5 = $new_instance['scope_list_5'][$x];
						}
						if ($new_instance['scope_list_6'][$x] != null) {
							$obj->scope_list_6 = $new_instance['scope_list_6'][$x];
						}
						if ($new_instance['sliders'][$x] != null) {
							$obj->sliders = $new_instance['sliders'][$x];
						}
						if ($new_instance['testimonial_desc'][$x] != null) {
							$obj->testimonial_desc = $new_instance['testimonial_desc'][$x];
						} else {
							for ($z = 0; $z <= count($new_instance); $z++) {
								if (isset($new_instance['testimonial_desc'][$z])) {
									$obj->testimonial_desc = $new_instance['testimonial_desc'][$z];
									break;
								}
							}
						}
						if ($new_instance['is_new'][$x] != null) {
							$obj->is_new = $new_instance['is_new'][$x];
						}
						if ($new_instance['is_delete'][$x] != null) {
							$obj->is_delete = $new_instance['is_delete'][$x];
						}
						$instance[$i] = $obj;
					}
				}
			}
			$result = array_diff($new_instance['id'], $exists_ids);

			if (count($result) > 0) {
				$obj = new stdClass;
				$obj->id = end($new_instance['id']);
				$obj->title = end($new_instance['title']);
				$obj->sub_title = end($new_instance['sub_title']);
				$obj->description = end($new_instance['description']);
				$obj->profile = end($new_instance['profile']);
				$obj->scope_list_1 = end($new_instance['scope_list_1']);
				$obj->scope_list_2 = end($new_instance['scope_list_2']);
				$obj->scope_list_3 = end($new_instance['scope_list_3']);
				$obj->scope_list_4 = end($new_instance['scope_list_4']);
				$obj->scope_list_5 = end($new_instance['scope_list_5']);
				$obj->scope_list_6 = end($new_instance['scope_list_6']);
				$obj->sliders = end($new_instance['sliders']);
				$obj->testimonial_desc = end($new_instance['testimonial_desc']);
				// die(var_dump(end($new_instance['testimonial_desc'])));
				if (end($new_instance['testimonial_desc']) == null) {
					// die(var_dump($instance[(count($instance)-1)]->testimonial_desc));
					$obj->testimonial_desc = $instance[(count($instance) - 1)]->testimonial_desc;
				}
				// $obj->is_new = end($new_instance['is_new']);
				// $obj->is_delete = end($new_instance['is_delete']);

				$instance[] = $obj;
			}
		}
		if ($new_instance['is_delete'] != null) {
			$instance[count($instance) - 2]->testimonial_desc = $instance[count($instance) - 1]->testimonial_desc;
			array_pop($instance);
		}
		// die(var_dump($new_instance['is_new']));
		if ($new_instance['is_new'] != null) {
			// die(var_dump('here'));
			$obj = new stdClass;
			$obj->id = count($new_instance['id']);
			$obj->title = null;
			$obj->sub_title = null;
			$obj->description = null;
			$obj->profile = null;
			$obj->scope_list_1 = null;
			$obj->scope_list_2 = null;
			$obj->scope_list_3 = null;
			$obj->scope_list_4 = null;
			$obj->scope_list_5 = null;
			$obj->scope_list_6 = null;
			$obj->sliders = null;
			$obj->testimonial_desc = null;
			$obj->is_new = null;
			$obj->is_delete = null;
			$instance[] = $obj;
			// unset($instance['is_new']);
		}
		return $instance;
	}
	public function scripts()
	{
		wp_enqueue_media();
		wp_enqueue_script('reviews', get_template_directory_uri() . '/js/reviews.js', array('jquery'), null, true);
	}
}






function currentYear( $atts ){
    return date('Y');
}
add_shortcode( 'year', 'currentYear' );