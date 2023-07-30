<?php
/**
 * yutnaya-tema functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package yutnaya-tema
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
function yutnaya_tema_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on yutnaya-tema, use a find and replace
		* to change 'yutnaya-tema' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'yutnaya-tema', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'yutnaya-tema' ),
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
			'yutnaya_tema_custom_background_args',
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
add_action( 'after_setup_theme', 'yutnaya_tema_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function yutnaya_tema_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'yutnaya_tema_content_width', 640 );
}
add_action( 'after_setup_theme', 'yutnaya_tema_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function yutnaya_tema_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'yutnaya-tema' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'yutnaya-tema' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'yutnaya_tema_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function yutnaya_tema_scripts() {
	wp_enqueue_style( 'yutnaya-tema-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'yutnaya-tema-style', 'rtl', 'replace' );

	wp_enqueue_script( 'yutnaya-tema-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'yutnaya_tema_scripts' );

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


// Регистрация кастомных стилей и скриптов
// Без необходимости сбрасывать кеш
function enqueue_versioned_script( $handle, $src = false, $deps = array(), $in_footer = false ) {
	wp_enqueue_script( $handle, get_template_directory_uri() . $src, $deps, filemtime( get_template_directory() . $src ), $in_footer );
}
function enqueue_versioned_style( $handle, $src = false, $deps = array(), $media = 'all' ) {
	wp_enqueue_style( $handle, get_template_directory_uri() . $src, $deps = array(), filemtime( get_template_directory() . $src ), $media );
}
// Функция регистрации
function register_custom_data() {


	// Внешние плагины
	wp_enqueue_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), false, false );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/custom-css/bootstrap.min.css', array(), false, false  );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/custom-js/bootstrap.bundle.min.js', array(), false, true );
	wp_enqueue_script( 'fslightbox', get_template_directory_uri() . '/custom-js/plugins/fslightbox.js', array(), false, false );

	wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/custom-js/plugins/owlcarousel/owl.carousel.min.js', array(), false, false );
	wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/custom-js/plugins/owlcarousel/assets/owl.carousel.min.css', array(), false, 'all' );

    enqueue_versioned_script( 'custom-scripts', '/custom-js/index.js', array('jQuery'), true );
    enqueue_versioned_style( 'custom-styles', '/custom-css/index.css' );
}
add_action( 'wp_enqueue_scripts', 'register_custom_data' );




// Кастомные .php
require_once( dirname(__FILE__) . '/custom-php/custom-filters.php');
// Компоненты
	// Общие
require( dirname(__FILE__) . '/components/sign_up_for_a_tour.php');
require( dirname(__FILE__) . '/components/useful_information.php');
require( dirname(__FILE__) . '/components/address_map.php');
require( dirname(__FILE__) . '/components/photo_gallery.php');
require( dirname(__FILE__) . '/components/how_to_register_in_pansion.php');
require( dirname(__FILE__) . '/components/food_at_the_pansion/food_at_the_pansion.php');
require( dirname(__FILE__) . '/components/we_are_trusted.php');
require( dirname(__FILE__) . '/components/comfortable_living_conditions.php');
require( dirname(__FILE__) . '/components/schedule_of_our_guests.php');
require( dirname(__FILE__) . '/components/cost_of_accommodation/cost_of_accommodation.php');
require( dirname(__FILE__) . '/components/text_on_gray_background.php');
require( dirname(__FILE__) . '/components/transportation_to_pansion.php');
require( dirname(__FILE__) . '/components/services_in_our_pansion.php');
require( dirname(__FILE__) . '/components/network_of_pansions_is.php');
require( dirname(__FILE__) . '/components/pansions_for_elders.php');
require( dirname(__FILE__) . '/components/flag_gerb_banner.php');
require( dirname(__FILE__) . '/components/banner_with_skew_form.php');
require( dirname(__FILE__) . '/components/how_to_get_to_pansions.php');
	// Пансионаты
require( dirname(__FILE__) . '/components/pansion_location.php');
require( dirname(__FILE__) . '/components/additional_services.php');
require( dirname(__FILE__) . '/components/form_with_advantages.php');
require( dirname(__FILE__) . '/components/pansion_facilities/pansion_facilities.php');
require( dirname(__FILE__) . '/components/pansion_about.php');
require( dirname(__FILE__) . '/components/pansion_navbar.php');
require( dirname(__FILE__) . '/components/breadcrumbs.php');
require( dirname(__FILE__) . '/components/pansion_intro/pansion_intro.php');


/**
 * Фикс пагинации для блога
 *
 *
 * @param object $query
 */
function yutnaya_tema_modify_home_category_query( $query ) {

    if ( is_admin() || ! $query->is_main_query() ) {
        return false;
    }

    if ( $query->is_home() || $query->is_category() ) {
        $query->set( 'posts_per_page', 15 );
    }
}
add_action( 'pre_get_posts', 'yutnaya_tema_modify_home_category_query' );

//отключение ненужных скриптов
//remove_action( 'wp-footer', 'wp-polyfill-js', 20 );
//wp_dequeue_script( 'wp-polyfill-js' );
//remove_action( 'wp_footer', 'wp_print_footer_scripts', 20 );
