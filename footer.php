<?php

/**
 * Footer Template
 *
 * @package WordPress
 * @subpackage SASS Bootstrap
 */

?>

		<?php do_action('sassbs_before_footer_open'); ?>

		<footer id="footer">

			<div class="row row-fluid">

				<?php do_action('sassbs_before_footer_content'); ?>

			  <p class="pull-right">&copy; <?php bloginfo('title'); ?> <?php echo date('Y'); ?><br><a href="#"><?php _e("Back to top",'sassbs'); ?></a></p>
			  <p class="pull-right"></p>
	
				<div class="span3">
					<?php get_sidebar('footer-1'); ?>
				</div>

				<div class="span3">
					<?php get_sidebar('footer-2'); ?>
				</div>

				<div class="span3">
					<?php get_sidebar('footer-3'); ?>
				</div>

				<?php do_action('sassbs_after_footer_content'); ?>

			</div><!--/.row-->

		</footer><!--/#footer-->

		<?php do_action('sassbs_after_footer_close'); ?>

	</div><!--/.container-->

</div><!--/.wrapper-->

<?php wp_footer(); ?>

</body>
</html>