<?php

/**
 * Merge topic page
 *
 * @package bbPress
 * @subpackage SASS Bootstrap
 */

?>

<?php get_header(); ?>

	<div class="row-fluid">

		<div class="span9">

				<?php do_action( 'bbp_template_notices' ); ?>

				<?php while ( have_posts() ) the_post(); ?>

					<div id="bbp-edit-page" class="bbp-edit-page">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<div class="entry-content">

							<?php bbp_get_template_part( 'bbpress/form', 'topic-merge' ); ?>

						</div>
					</div><!-- #bbp-edit-page -->

		</div><!--/.span9-->

		<div class="span3">
			<?php get_sidebar(); ?>
		</div><!--/.span3-->

	</div><!--/.row-fluid-->

<?php get_footer(); ?>