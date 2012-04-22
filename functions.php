<?php

/**
 * Functions.php
 *
 * @package WordPress
 * @subpackage SASS Bootstrap
 */

/**
 * Assign theme folder name that you want to get information.
 * Make sure theme exist in wp-content/themes/ folder.
 */

$theme_name = 'sass-bootstrap'; 

/*
* Do not use get_stylesheet_uri() as $theme_filename,
* it will result in PHP fopen error if allow_url_fopen is set to Off in php.ini,
* which is what most shared hosting does. You can use get_stylesheet_directory()
* or get_template_directory() though, because they return local paths.
*/

$theme_data = get_theme_data( get_theme_root() . '/' . $theme_name . '/style.css' );

define('THEME_VERSION',$theme_data['Version']);

// Set up library path constants
define('LIBPATH', TEMPLATEPATH . '/lib/');
define('LIBURL', get_template_directory_uri() . '/lib/');

include_once(TEMPLATEPATH.'/admin/admin.php');

// Setup Theme
include_once(LIBPATH . 'setup.php');

// Utilities
include_once(LIBPATH . 'utils.php');

// BBPress integration
include_once(LIBPATH . 'bbpress.php');

// Bootstrap integration
include_once(LIBPATH . 'bootstrap.php');

?>
