<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;



function do_enqueue()
{

	//echo "HELLOOOOOOxxxxxxxxxxxx";

	global $stylesversion;
    global $scriptsversion;
    $stylesversion = "1";
    $scriptsversion = "1";

	wp_enqueue_style('styles-dist-main', get_stylesheet_directory_uri() . '/dist/main.bundle.css?ver=' . $stylesversion, array(), 1);
	wp_enqueue_script('scripts-dist-main', get_stylesheet_directory_uri() . '/dist/main.bundle.js?ver=' . $scriptsversion, array(), 1, true);

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
add_action('wp_enqueue_scripts', 'do_enqueue');


function custom_excerpt_length($length) {
    return 20; // Adjust the number of words you want in the excerpt
}
add_filter('excerpt_length', 'custom_excerpt_length');

function custom_excerpt_more($more) {
	return ' <a href="' . get_permalink() . '">more...</a>'; // Remove the default "[...]" at the end of the excerpt
}
add_filter('excerpt_more', 'custom_excerpt_more');



function sc_get_content_substr($content, $length = 50)
{

    $content = wp_strip_all_tags($content, true);

    $content =  substr($content, 0, $length);


    return $content;
}

