<?php

/**
 * Sidebar Footer 1 Template
 *
 * @package WordPress
 * @subpackage SASS Bootstrap
 */

?>

<ul id="sidebar" class="unstyled">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
		<?php the_widget('WP_Widget_Meta',false,sassbs_default_widget_args()); ?>
	<?php endif; ?>
</ul>