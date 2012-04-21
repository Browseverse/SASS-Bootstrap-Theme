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

					<?php if( is_singular() ): ?>
					<header class="page-header">
						<h1><?php the_title(); ?></h1>
					</header>
					<?php else: ?>
					<header>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</header>
					<?php endif;?>

					<p class="meta"><?php printf( __('Posted by %1$s on %2$s'), get_the_author_link(), get_the_time('F jS, Y') ); ?></p>

					<?php the_content(); ?>

					<div id="comments">
						<?php comments_template(); ?>
					</div>

					</article><!--/.hentry-->

					<?php endwhile; ?>

			<?php else: ?>

			<article class="no-posts">

				<h1><?php _e('No Posts Found.','sassbs'); ?></h1>

				<p><?php printf( _e('Please <a href="%s">visit the homepage</a>.','sassbs'), get_bloginfo('url') ); ?></p>

			</article><!--/.no-posts-->

			<?php endif; ?>