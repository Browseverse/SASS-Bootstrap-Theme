<?php

/**
 * Category View
 *
 * @package WordPress
 * @subpackage SASS Bootstrap
 */

?>

<?php get_header(); ?>

	<div class="row-fluid">

		<div class="span9">

			<?php get_template_part('content','archive'); ?>	

		</div><!--/.span9-->

		<div class="span3">
			<?php get_sidebar(); ?>
		</div><!--/.span3-->

	</div><!--/.row-fluid-->

<?php get_footer(); ?>