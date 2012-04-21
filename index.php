<?php

/**
 * Index View
 *
 * @package WordPress
 * @subpackage SASS Bootstrap
 */

?>

<?php get_header(); ?>

	<div class="row-fluid">

		<div class="span9">

		<?php if( is_search() ): ?>
		<div class="page-header">
			<h1><?php printf( __("Search Results for: %s",'sass-bootstrap'), '<em>' . get_search_query() . '</em>' ); ?></h1>
		</div>
		<?php endif; ?>

			<?php get_template_part('content','index'); ?>	

		</div><!--/.span9-->

		<div class="span3">
			<?php get_sidebar(); ?>
		</div><!--/.span3-->

	</div><!--/.row-fluid-->

<?php get_footer(); ?>