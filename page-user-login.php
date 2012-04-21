<?php

/**
 * Template Name: bbPress - User Login
 *
 * @package bbPress
 * @subpackage SASS Bootstrap
 */

// No logged in users
bbp_logged_in_redirect();

// Begin Template
get_header(); ?>

	<div class="row-fluid">

		<div class="span9">

				<?php do_action( 'bbp_template_notices' ); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<div id="bbp-login" class="bbp-login">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<div class="entry-content">

							<?php the_content(); ?>

							<?php bbp_breadcrumb(); ?>

							<?php bbp_get_template_part( 'bbpress/form', 'user-login' ); ?>

						</div>
					</div><!-- #bbp-login -->

				<?php endwhile; ?>

		</div><!--/.span9-->

		<div class="span3">
			<?php get_sidebar(); ?>
		</div><!--/.span3-->

	</div><!--/.row-fluid-->

<?php get_footer(); ?>
