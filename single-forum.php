<?php

/**
 * Single Forum
 *
 * @package bbPress
 * @subpackage SASS Bootstrap
 */

?>

<?php get_header(); ?>

	<div class="row-fluid">

		<div class="span9">

				<?php do_action( 'bbp_template_notices' ); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php if ( bbp_user_can_view_forum() ) : ?>

						<div id="forum-<?php bbp_forum_id(); ?>" class="bbp-forum-content">
							<header class="page-header">
								<h1 class="entry-title"><?php bbp_forum_title(); ?></h1>
							</header>
							<div class="entry-content">

								<?php bbp_get_template_part( 'bbpress/content', 'single-forum' ); ?>

							</div>
						</div><!-- #forum-<?php bbp_forum_id(); ?> -->

					<?php else : // Forum exists, user no access ?>

						<?php bbp_get_template_part( 'bbpress/feedback', 'no-access' ); ?>

					<?php endif; ?>

				<?php endwhile; ?>

		</div><!--/.span9-->

		<div class="span3">
			<?php get_sidebar(); ?>
		</div><!--/.span3-->

	</div><!--/.row-fluid-->

<?php get_footer(); ?>
