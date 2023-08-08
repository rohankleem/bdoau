<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;



function add_sasdfsdtyles()
{

	//echo "HELLOOOOOOxxxxxxxxxxxx";

	global $stylesversion;
    global $scriptsversion;
    $stylesversion = "1";
    $scriptsversion = "1";

	wp_enqueue_style('styles-dist-main', get_stylesheet_directory_uri() . '/dist/main.bundle.css', array(), 1);

	wp_enqueue_script('sripts-dist-main', get_stylesheet_directory_uri() . '/dist/main.bundle.js', array(), 1, true);

}



if ( ! function_exists( 'buildiotheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various
	 * WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme
	 * hook, which runs before the init hook. The init hook is too late
	 * for some features, such as indicating support post thumbnails.
	 */
	function buildiotheme_setup() {

    /**
	 * Make theme available for translation.
	 * Translations can be placed in the /languages/ directory.
	 */
		load_theme_textdomain( 'buildiotheme', get_template_directory() . '/languages' );

		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus( array(
			'primary'   => __( 'Primary Menu', 'buildiotheme' ),
			'secondary' => __( 'Secondary Menu', 'buildiotheme' ),
		) );

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );

		//echo "HELLOOOOOO";

		//echo get_stylesheet_directory_uri() . '/dist/main.bundle.css' ;




	}
endif; // myfirsttheme_setup
add_action('after_setup_theme', 'buildiotheme_setup' );
add_action('wp_enqueue_scripts', 'add_sasdfsdtyles');
//echo "xxxxxxxxxxxxxxxxeeeeeeeeeeeeeeeeeeeeeee";




