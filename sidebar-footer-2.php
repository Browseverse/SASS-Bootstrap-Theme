<?php

/**
 * Sidebar Footer 2 Template
 *
 * @package WordPress
 * @subpackage SASS Bootstrap
 */

?>

<ul id="sidebar" class="unstyled">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
		<?php the_widget('WP_Widget_Search',false,sassbs_default_widget_args()); ?>
	<?php endif; ?>
</ul>