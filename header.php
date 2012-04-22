<?php

/**
 * Header Template
 *
 * @package WordPress
 * @subpackage SASS Bootstrap
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php sassbs_title(); ?></title>

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<?php do_action('sassbs_after_body_open'); ?>

	<div class="wrapper">

		<div class="container">

			<?php do_action('sassbs_before_header_nav'); ?>

			<div <?php sassbs_nav_class(); ?>>

				<div class="navbar-inner">

					<div class="container">

		        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		        </a>
	
						<?php do_action('sassbs_before_header_brand'); ?>
	
		        <a class="brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a>
	
						<?php do_action('sassbs_after_header_brand'); ?>
	
		        <div class="nav-collapse">
	
							<?php do_action('sassbs_before_header_menu'); ?>
	
							<?php wp_nav_menu(array(
							'theme_location' => 'header',
							'container' => false,
							'menu_class' => 'nav',
							'walker' => new Bootstrap_Walker_Nav_Menu()
							)); ?>
	
							<?php do_action('sassbs_after_header_menu'); ?>
	
		          <form class="navbar-search pull-right" action="<?php echo trailingslashit( get_bloginfo('url') ); ?>">
		          		<input type="text" name="s" class="search-query span2" value="<?php the_search_query(); ?>" placeholder="Search" />
		          </form>
	
							<?php do_action('sassbs_after_header_search'); ?>
	
		        </div><!-- /.nav-collapse -->

					</div><!--/.container-->

				</div><!--/.navbar-inner-->

			</div><!--/.navbar-->
			
			<?php do_action('sassbs_after_header_nav'); ?>