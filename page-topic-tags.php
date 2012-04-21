<?php

/**
 * Template Name: bbPress - Topic Tags
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

					<div id="bbp-topic-tags" class="bbp-topic-tags">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<div class="entry-content">

							<?php get_the_content() ? the_content() : _e( '<p>This is a collection of tags that are currently popular on our forums.</p>', 'bbpress' ); ?>

							<?php bbp_breadcrumb(); ?>

							<div id="bbp-topic-hot-tags">

								<?php wp_tag_cloud( array( 'smallest' => 9, 'largest' => 38, 'number' => 80, 'taxonomy' => bbp_get_topic_tag_tax_id() ) ); ?>

							</div>

						</div>
					</div><!-- #bbp-topic-tags -->

				<?php endwhile; ?>

		</div><!--/.span9-->

		<div class="span3">
			<?php get_sidebar(); ?>
		</div><!--/.span3-->

	</div><!--/.row-fluid-->

<?php get_footer(); ?>
