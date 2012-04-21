<?php

/**
 * Single View
 *
 * @package WordPress
 * @subpackage SASS Bootstrap
 */

?>

<form class="searchform" action="<?php echo trailingslashit( get_bloginfo('url') ); ?>">
		<input type="text" name="s" class="search-query" value="<?php the_search_query(); ?>" placeholder="Search" />
		<button class="btn btn-primary" type="submit"><?php _e("Submit","sass-boostrap"); ?></button>
</form>