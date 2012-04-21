<?php

/**
 * Primary Sidebar Template
 *
 * @package WordPress
 * @subpackage SASS Bootstrap
 */

?>

<div id="sidebar">

	<ul class="unstyled">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('primary-sidebar') ) : ?>
			<li id="search" class="widget">
				<h4><? _e("Search",'sassbs'); ?></h4>
				<?php get_search_form(); ?>
			</li>
		<?php endif; ?>
	</ul>

</div><!-- /#sidebar -->