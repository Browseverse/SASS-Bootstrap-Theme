<?php

/**
 * Output Page Title
 *
 * Check for the existence of SEO plugins and if not, output
 * the correct page title.
 *
 * @uses class_exists()
 * @uses wp_title()
 * @uses is_front_page()
 * @uses get_bloginfo()
 *
 */
function sassbs_title(){

	$sep = "-";

	if( class_exists('All_in_One_SEO_Pack') || class_exists('Yoast_SEO') ){
		wp_title();
	} elseif( is_front_page() ) {
		echo get_bloginfo('title') . " {$sep} " . get_bloginfo('description');
	} else {
		wp_title($sep,true,"right");
		echo get_bloginfo('title');
	}

}

/**
 * Activate post thumbnails
 *
 * This adds theme support for post thumbnails and must be called before the init hook
 *
 * @uses add_theme_support()
 *
 */
function sassbs_post_thumbnails(){
  add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme','sassbs_post_thumbnails');

/**
 * Set up theme
 *
 * Register image sizes, queue up scripts, register menus
 *
 * @uses add_filter()
 * @uses add_image_size()
 * @uses register_nav_menu()
 * @uses register_sidebar()
 *
 */
function sassbs_init(){

  register_nav_menu('header','Header Menu');

	$standard_sidebar = array(
		'name'          => __('Primary Sidebar'),
		'id'            => "primary-sidebar",
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>' );

  register_sidebar($standard_sidebar);

  $footer_sidebar_1 = array(
  	'name'          => __('Footer 1'),
  	'id'            => "footer-1",
  	'before_widget' => '<li id="%1$s" class="widget %2$s">',
  	'after_widget'  => '</li>',
  	'before_title'  => '<h4>',
  	'after_title'   => '</h4>' );

	register_sidebar($footer_sidebar_1);

  $footer_sidebar_2 = array(
  	'name'          => __('Footer 2'),
  	'id'            => "footer-2",
  	'before_widget' => '<li id="%1$s" class="widget %2$s">',
  	'after_widget'  => '</li>',
  	'before_title'  => '<h4>',
  	'after_title'   => '</h4>' );

	register_sidebar($footer_sidebar_2);

  $footer_sidebar_3 = array(
  	'name'          => __('Footer 3'),
  	'id'            => "footer-3",
  	'before_widget' => '<li id="%1$s" class="widget %2$s">',
  	'after_widget'  => '</li>',
  	'before_title'  => '<h4>',
  	'after_title'   => '</h4>' );

	register_sidebar($footer_sidebar_3);

}

add_action('init','sassbs_init',1);

/**
 * Set up theme scripts/styles
 *
 * Enqeues scripts/styles that are required by our theme
 *
 * @uses wp_enqueue_script()
 * @uses wp_enqueue_style()
 *
 */
function sassbs_init_scripts(){

	wp_enqueue_script('bootstrap',get_template_directory_uri() . "/scripts/bootstrap.js",false,THEME_VERSION);
	wp_enqueue_style('sass-bootstrap',get_template_directory_uri() . "/style.css",false,THEME_VERSION);

}

add_action('wp_enqueue_scripts','sassbs_init_scripts');

/**
 * Add comment reply features to theme
 *
 * Enqeues scripts/styles that are required by our theme
 *
 * @uses wp_enqueue_script()
 * @uses is_single()
 * @uses is_page()
 */
function sassbs_comment_reply(){

	if ( is_singular() && get_option( 'thread_comments' ) )
	    wp_enqueue_script('comment-reply');

}

add_action('wp_head','sassbs_comment_reply');

/**
 * Returns widget markup as an array
 *
 * @return arguments for the_widget() to display the proper markup
 */
function sassbs_default_widget_args(){
	return array(
		'before_widget' => '<li class="widget">',
		'after_widget' => "</li>",
		'before_title' => "<h4>",
		'after_title' => "</h4>"
	);
}