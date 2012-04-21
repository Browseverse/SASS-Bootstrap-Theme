<?php

/**
 * 404 Template
 *
 * @package WordPress
 * @subpackage SASS Bootstrap
 */

?>

<?php get_header(); ?>

			  <div class="jumbotron masthead">
			  	<div class="row-fluid">
			  		<div class="span12">
			  			<div class="page-header">
				  			<h1><?php _e("404: Page Not Found",'sassbs'); ?></h1>
				  		</div>
				  		<p><?php printf( __("The page you were looking for cannot be found. Search our website below or <a href=\"%s\">visit the homepage</a>.",'sassbs'), get_bloginfo('url') ); ?></p>
				  		<br>
				  		<p><?php get_search_form(); ?></p>
			  		</div>
			  	</div>
			  </div>

<?php get_footer(); ?>