<?php
/**
 * thezero functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package thezero
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', time() );
}

if ( ! function_exists( 'thezero_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function thezero_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on thezero, use a find and replace
		 * to change 'thezero' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'thezero', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'thezero' ),
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
				'thezero_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for post-formats
		add_theme_support( 'post-formats', array('image', 'gallery', 'audio', 'video') );

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
				'height'      => 100,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
				'header-text' => array('site-title', 'site-description'),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'thezero_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function thezero_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'thezero_content_width', 640 );
}
add_action( 'after_setup_theme', 'thezero_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function thezero_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'thezero' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'thezero' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
		);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Instagram', 'thezero' ),
			'id'            => 'instagram',
			'description'   => esc_html__( 'Add instragram image here.', 'thezero' ),
			'before_widget' => '<ul class="widget-instagram">',
			'after_widget'  => '</ul>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer: Copyright', 'thezero' ),
			'id'            => 'copyright',
			'description'   => esc_html__( 'Add copyright here.', 'thezero' ),
			'before_widget' => '<ul class="widget-instagram">',
			'after_widget'  => '</ul>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}
add_action( 'widgets_init', 'thezero_widgets_init' );

function thezero_protected_title_format() {
	return "%s";
}
add_filter('protected_title_format', 'thezero_protected_title_format');

function thezero_the_excerpt($excerpt){
	if( !post_password_required() ) {
		return $excerpt;
	}else {
		echo get_the_password_form();
	}
}
add_filter('the_excerpt', 'thezero_the_excerpt');

/**
 * Enqueue scripts and styles.
 */
function thezero_scripts() {
	wp_enqueue_style( 'thezero-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'thezero-style', 'rtl', 'replace' );

	wp_enqueue_style('all', get_theme_file_uri('/assets/css/all.css'), array(), _S_VERSION );
	wp_enqueue_style('elegant-font-icons', get_theme_file_uri('/assets/css/elegant-font-icons.css'), array(), _S_VERSION );
	wp_enqueue_style('bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css'), array(), _S_VERSION );
	wp_enqueue_style('owl-carousel', get_theme_file_uri('/assets/css/owl.carousel.css'), array(), _S_VERSION );
	wp_enqueue_style('custom', get_theme_file_uri('/assets/css/custom.css'), array(), _S_VERSION );
	wp_enqueue_style('style', get_theme_file_uri('/assets/css/style.css'), array(), _S_VERSION );

	

	wp_enqueue_script( 'thezero-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array("jquery"), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array("jquery"), _S_VERSION, true );
	wp_enqueue_script( 'ajax', get_template_directory_uri() . '/assets/js/ajax-contact.js', array("jquery"), _S_VERSION, true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array("jquery"), _S_VERSION, true );
	wp_enqueue_script( 'switch', get_template_directory_uri() . '/assets/js/switch.js', array("jquery"), _S_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array("jquery"), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'thezero_scripts' );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Customizer additions
*/
require get_template_directory() . '/inc/plugin-installer.php';

function my_share_buttons() {
	$url = urlencode(get_the_permalink()); /*Getting the current post link*/
	$title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); /* Get the post title*/
	$media = urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));
	include(locate_template('/template-parts/share.php', false, false));
}


require get_template_directory() . '/inc/better-comments.php';