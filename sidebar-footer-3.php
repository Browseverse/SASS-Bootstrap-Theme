<?php

/**
 * Sidebar Footer 3 Template
 *
 * @package WordPress
 * @subpackage SASS Bootstrap
 */

?>

<ul id="sidebar" class="unstyled">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
		<?php the_widget('WP_Widget_Pages',false,sassbs_default_widget_args()); ?>
	<?php endif; ?>
</ul>