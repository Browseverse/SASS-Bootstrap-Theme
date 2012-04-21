<?php

/**
 * User Profile
 *
 * @package bbPress
 * @subpackage SASS Bootstrap
 */

?>

<?php get_header(); ?>

	<div class="row-fluid">

		<div class="span9">

				<div id="bbp-user-<?php bbp_current_user_id(); ?>" class="bbp-single-user">
					<div class="entry-content">

						<?php bbp_get_template_part( 'bbpress/content', 'single-user' ); ?>

					</div><!-- .entry-content -->
				</div><!-- #bbp-user-<?php bbp_current_user_id(); ?> -->

		</div><!--/.span9-->

		<div class="span3">
			<?php get_sidebar(); ?>
		</div><!--/.span3-->

	</div><!--/.row-fluid-->

<?php get_footer(); ?>
