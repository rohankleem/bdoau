<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

//turn off errors and warnings////
//ini_set('display_errors','Off');
// ini_set('error_reporting', E_ALL );
define('WP_DEBUG_DISPLAY', false);
//////////////////////////////////

require_once(__DIR__ . '/../vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

define('DB_NAME', 			$_ENV['DB_NAME']);
define('DB_USER', 			$_ENV['DB_USER']);
define('DB_PASSWORD', 		$_ENV['DB_PASSWORD']);
define('DB_HOST', 			$_ENV['DB_HOST']);
define('DB_CHARSET', 		$_ENV['DB_CHARSET']);
define('DB_COLLATE', 		'');

define('AUTH_KEY',         	$_ENV['AUTH_KEY']);
define('SECURE_AUTH_KEY',  	$_ENV['SECURE_AUTH_KEY']);
define('LOGGED_IN_KEY',    	$_ENV['LOGGED_IN_KEY']);
define('NONCE_KEY',        	$_ENV['NONCE_KEY']);
define('AUTH_SALT',        	$_ENV['AUTH_SALT']);
define('SECURE_AUTH_SALT', 	$_ENV['SECURE_AUTH_SALT']);
define('LOGGED_IN_SALT',   	$_ENV['LOGGED_IN_SALT']);
define('NONCE_SALT',       	$_ENV['NONCE_SALT']);

define('WP_DEBUG',			$_ENV['WP_DEBUG']);
define('WP_DEBUG_LOG',		$_ENV['WP_DEBUG_LOG']);
define('WP_HOME', 			$_ENV['WP_HOME']);
define('WP_SITEURL', 		$_ENV['WP_SITEURL']);

define ('DEFAULT_LISTING_IMAGE', 'wp-content/themes/steelchief/img/img-default-location.jpg');

$table_prefix = $_ENV['TABLE_PREFIX'];

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

date_default_timezone_set("Australia/Melbourne");
