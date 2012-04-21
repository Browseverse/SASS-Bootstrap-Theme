<?php

/**
 * Single View
 *
 * @package WordPress
 * @subpackage SASS Bootstrap
 */

?>

<?php get_header(); ?>

	<div class="row">
	
		<div class="span9">
	
			<?php get_template_part('content','single'); ?>	
	
		</div><!--/.span9-->
	
		<div class="span3">
			<?php get_sidebar(); ?>
		</div><!--/.span3-->

	</div><!--/.row-->

<?php get_footer(); ?>