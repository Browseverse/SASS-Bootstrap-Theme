<?php 

/**
 *  Output which template WP is using
 *
 * @global 	$template		the current theme template being used
 *
 */

function sassbs_show_template() {
	if( current_user_can('edit_theme_options') ):
		global $template;
		echo "<!-- \n***************************\n***\n*** Template Path: $template \n***\n***************************\n-->\n";
	endif;
}

add_action('wp_footer', 'sassbs_show_template');