<?php

/**
 * Topic Tag
 *
 * @package bbPress
 * @subpackage SASS Bootstrap
 */

?>

<?php get_header(); ?>

	<div class="row-fluid">

		<div class="span9">

				<?php do_action( 'bbp_template_notices' ); ?>

				<div id="topic-tag" class="bbp-topic-tag">
					<h1 class="entry-title"><?php printf( __( 'Topic Tag: %s', 'bbpress' ), '<span>' . bbp_get_topic_tag_name() . '</span>' ); ?></h1>

					<div class="entry-content">

						<?php bbp_breadcrumb(); ?>

						<?php bbp_topic_tag_description(); ?>

						<?php do_action( 'bbp_template_before_topic_tag' ); ?>

						<?php if ( bbp_has_topics() ) : ?>

							<?php bbp_get_template_part( 'bbpress/pagination', 'topics'    ); ?>

							<?php bbp_get_template_part( 'bbpress/loop',       'topics'    ); ?>

							<?php bbp_get_template_part( 'bbpress/pagination', 'topics'    ); ?>

						<?php else : ?>

							<?php bbp_get_template_part( 'bbpress/feedback',   'no-topics' ); ?>

						<?php endif; ?>

						<?php do_action( 'bbp_template_after_topic_tag' ); ?>

					</div>
				</div><!-- #topic-tag -->

		</div><!--/.span9-->

		<div class="span3">
			<?php get_sidebar(); ?>
		</div><!--/.span3-->

	</div><!--/.row-fluid-->

<?php get_footer(); ?>
