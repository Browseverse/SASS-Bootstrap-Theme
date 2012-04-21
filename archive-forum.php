<?php

/**
 * bbPress - Forum Archive
 *
 * @package bbPress
 * @subpackage SASS Bootstrap
 */

?>

<?php get_header(); ?>

	<div class="row-fluid">

		<div class="span9">

				<?php do_action( 'bbp_template_notices' ); ?>

				<div id="forum-front" class="bbp-forum-front">

					<h1 class="entry-title"><?php bbp_forum_archive_title(); ?></h1>
					<div class="entry-content">

						<?php bbp_get_template_part( 'bbpress/content', 'archive-forum' ); ?>

					</div>
				</div><!-- #forum-front -->

		</div><!--/.span9-->

		<div class="span3">
			<?php get_sidebar(); ?>
		</div><!--/.span3-->

	</div><!--/.row-fluid-->

<?php get_footer(); ?>
