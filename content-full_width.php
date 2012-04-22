<?php

/**
 * Content Template
 *
 * @package WordPress
 * @subpackage SASS Bootstrap
 */

?>

			<?php if( have_posts() ): ?>

				<?php while( have_posts() ): the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_content(); ?>

					</article><!--/.hentry-->

					<?php endwhile; ?>

			<?php else: ?>

			<article class="no-posts">

				<h1><?php _e('No Posts Found.','sassbs'); ?></h1>

				<p><?php printf( _e('Please <a href="%s">visit the homepage</a>.','sassbs'), get_bloginfo('url') ); ?></p>

			</article><!--/.no-posts-->

			<?php endif; ?>