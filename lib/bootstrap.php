<?php
/**
 * Register Bootstrap Theme Options
 *
 * Sets up the theme options tab for Bootstrap
 * as well as the actual options.
 *
 * @uses apply_filters()
 */

function sassbs_register_options_page(){
	
	$thistab = array(
		"name" => "bootstrap_options",
		"title" => __("Bootstrap Options","sass-bootstrap"),
		'sections' => apply_filters('bootstrap-options-tabs',array(
			'plugins' => array(
				'name' => 'plugins',
				'title' => __( 'Plugins', 'sass-bootstrap' ),
				'description' => __( 'Select the Bootstrap plugins you\'d like enabled across the site.','sass-bootstrap' )
			)
		))
	);
	
	$options = array(
		'bootstrap_alert' => array(
			'tab' => $thistab['name'],
			"name" => "bootstrap_alert",
			"title" => "Alert Plugin",
			'description' => __( 'Alert plugin description', 'sass-bootstrap' ),
			'section' => 'plugins',
			'since' => '1.0',
	    "id" => "plugins",
	    "type" => "select",
	    "default" => "false",
	    "valid_options" => array(
	    	'false' => array(
	    		"name" => "false",
	    		"title" => __( 'Disabled', 'sass-bootstrap' )
	    	),
	    	'true' => array(
	    		"name" => "true",
	    		"title" => __( 'Enabled', 'sass-bootstrap' )
	    	)
	    )
		),
		'bootstrap_button' => array(
			'tab' => $thistab['name'],
			"name" => "bootstrap_button",
			"title" => "Button Plugin",
			'description' => __( 'Button plugin description', 'sass-bootstrap' ),
			'section' => 'plugins',
			'since' => '1.0',
		  "id" => "plugins",
		  "type" => "select",
		  "default" => "false",
		  "valid_options" => array(
		  	'false' => array(
		  		"name" => "false",
		  		"title" => __( 'Disabled', 'sass-bootstrap' )
		  	),
		  	'true' => array(
		  		"name" => "true",
		  		"title" => __( 'Enabled', 'sass-bootstrap' )
		  	)
		  )
		),
		'bootstrap_carousel' => array(
			'tab' => $thistab['name'],
			"name" => "bootstrap_carousel",
			"title" => "Carousel Plugin",
			'description' => __( 'Carousel plugin description', 'sass-bootstrap' ),
			'section' => 'plugins',
			'since' => '1.0',
		  "id" => "plugins",
		  "type" => "select",
		  "default" => "false",
		  "valid_options" => array(
		  	'false' => array(
		  		"name" => "false",
		  		"title" => __( 'Disabled', 'sass-bootstrap' )
		  	),
		  	'true' => array(
		  		"name" => "true",
		  		"title" => __( 'Enabled', 'sass-bootstrap' )
		  	)
		  )
		),
		'bootstrap_collapse' => array(
			'tab' => $thistab['name'],
			"name" => "bootstrap_collapse",
			"title" => "Collapse Plugin",
			'description' => __( 'Collapse plugin description', 'sass-bootstrap' ),
			'section' => 'plugins',
			'since' => '1.0',
		  "id" => "plugins",
		  "type" => "select",
		  "default" => "false",
		  "valid_options" => array(
		  	'false' => array(
		  		"name" => "false",
		  		"title" => __( 'Disabled', 'sass-bootstrap' )
		  	),
		  	'true' => array(
		  		"name" => "true",
		  		"title" => __( 'Enabled', 'sass-bootstrap' )
		  	)
		  )
		),
		'bootstrap_dropdown' => array(
			'tab' => $thistab['name'],
			"name" => "bootstrap_dropdown",
			"title" => "Dropdown Plugin",
			'description' => __( 'Dropdown plugin description', 'sass-bootstrap' ),
			'section' => 'plugins',
			'since' => '1.0',
		  "id" => "plugins",
		  "type" => "select",
		  "default" => "false",
		  "valid_options" => array(
		  	'false' => array(
		  		"name" => "false",
		  		"title" => __( 'Disabled', 'sass-bootstrap' )
		  	),
		  	'true' => array(
		  		"name" => "true",
		  		"title" => __( 'Enabled', 'sass-bootstrap' )
		  	)
		  )
		),
		'bootstrap_modal' => array(
			'tab' => $thistab['name'],
			"name" => "bootstrap_modal",
			"title" => "Modal Plugin",
			'description' => __( 'Modal plugin description', 'sass-bootstrap' ),
			'section' => 'plugins',
			'since' => '1.0',
		  "id" => "plugins",
		  "type" => "select",
		  "default" => "false",
		  "valid_options" => array(
		  	'false' => array(
		  		"name" => "false",
		  		"title" => __( 'Disabled', 'sass-bootstrap' )
		  	),
		  	'true' => array(
		  		"name" => "true",
		  		"title" => __( 'Enabled', 'sass-bootstrap' )
		  	)
		  )
		),
		'bootstrap_popover' => array(
			'tab' => $thistab['name'],
			"name" => "bootstrap_popover",
			"title" => "Popover Plugin",
			'description' => __( 'Popover plugin description', 'sass-bootstrap' ),
			'section' => 'plugins',
			'since' => '1.0',
		  "id" => "plugins",
		  "type" => "select",
		  "default" => "false",
		  "valid_options" => array(
		  	'false' => array(
		  		"name" => "false",
		  		"title" => __( 'Disabled', 'sass-bootstrap' )
		  	),
		  	'true' => array(
		  		"name" => "true",
		  		"title" => __( 'Enabled', 'sass-bootstrap' )
		  	)
		  )
		),
		'bootstrap_scrollspy' => array(
			'tab' => $thistab['name'],
			"name" => "bootstrap_scrollspy",
			"title" => "ScrollSpy Plugin",
			'description' => __( 'ScrollSpy plugin description', 'sass-bootstrap' ),
			'section' => 'plugins',
			'since' => '1.0',
		  "id" => "plugins",
		  "type" => "select",
		  "default" => "false",
		  "valid_options" => array(
		  	'false' => array(
		  		"name" => "false",
		  		"title" => __( 'Disabled', 'sass-bootstrap' )
		  	),
		  	'true' => array(
		  		"name" => "true",
		  		"title" => __( 'Enabled', 'sass-bootstrap' )
		  	)
		  )
		),
		'bootstrap_tab' => array(
			'tab' => $thistab['name'],
			"name" => "bootstrap_tab",
			"title" => "Tab Plugin",
			'description' => __( 'Tab plugin description', 'sass-bootstrap' ),
			'section' => 'plugins',
			'since' => '1.0',
		  "id" => "plugins",
		  "type" => "select",
		  "default" => "false",
		  "valid_options" => array(
		  	'false' => array(
		  		"name" => "false",
		  		"title" => __( 'Disabled', 'sass-bootstrap' )
		  	),
		  	'true' => array(
		  		"name" => "true",
		  		"title" => __( 'Enabled', 'sass-bootstrap' )
		  	)
		  )
		),
		'bootstrap_tooltip' => array(
			'tab' => $thistab['name'],
			"name" => "bootstrap_tooltip",
			"title" => "Tooltip Plugin",
			'description' => __( 'Tooltip plugin description', 'sass-bootstrap' ),
			'section' => 'plugins',
			'since' => '1.0',
		  "id" => "plugins",
		  "type" => "select",
		  "default" => "false",
		  "valid_options" => array(
		  	'false' => array(
		  		"name" => "false",
		  		"title" => __( 'Disabled', 'sass-bootstrap' )
		  	),
		  	'true' => array(
		  		"name" => "true",
		  		"title" => __( 'Enabled', 'sass-bootstrap' )
		  	)
		  )
		),
		'bootstrap_typeahead' => array(
			'tab' => $thistab['name'],
			"name" => "bootstrap_typeahead",
			"title" => "TypeAhead Plugin",
			'description' => __( 'TypeAhead plugin description', 'sass-bootstrap' ),
			'section' => 'plugins',
			'since' => '1.0',
		  "id" => "plugins",
		  "type" => "select",
		  "default" => "false",
		  "valid_options" => array(
		  	'false' => array(
		  		"name" => "false",
		  		"title" => __( 'Disabled', 'sass-bootstrap' )
		  	),
		  	'true' => array(
		  		"name" => "true",
		  		"title" => __( 'Enabled', 'sass-bootstrap' )
		  	)
		  )
		)
	);

	register_theme_options($options);
	register_theme_option_tab($thistab);

}

add_action('after_setup_theme','sassbs_register_options_page');

/**
 * Bootstrap Nav Class
 *
 * Builds the navbar CSS class.
 *
 * @uses apply_filters()
 *
 */
function sassbs_nav_class(){

	$default = 'navbar';

	$class .= 'class="';
	$class .= apply_filters('sassbs-nav-class',$default);
	$class .= '"';

	echo $class;

}

/**
 * Bootstrap Nav Class
 *
 * Builds the navbar CSS class.
 *
 * @uses apply_filters()
 *
 */
function sassbs_filter_nav_class($class){

	$up_options = upfw_get_options();

	if( isset( $up_options->bootstrap_nav_style ) ){
		$class .= " " . esc_html($up_options->bootstrap_nav_style);
	}

	return $class;

}

add_filter('sassbs-nav-class','sassbs_filter_nav_class');

/**
 * Filters Layout Sections for Bootstrap Tab
 *
 * Allows us to add tab section for layout.
 *
 * @arg $bootstrap_options_tabs		Bootstrap options tab
 * @uses array_merge()
 *
 */
function sassbs_add_nav_layout_options(){
	$nav_layout_option = array(
		'nav_layout' => array(
			'tab' => 'bootstrap_options',
			"name" => "nav_layout",
			"title" => "Nav Layout",
			'description' => __( 'Option for changing the navigation layout.', 'sass-bootstrap' ),
			'section' => 'layout',
			'since' => '1.0',
	    "id" => "layout",
	    "type" => "select",
	    "default" => "navbar",
	    "valid_options" => array(
				'navbar' => array(
					"name" => "navbar",
					"title" => __( 'Standard Top (Not Full Width)', 'sass-bootstrap' )
				),
				'navbar-fixed-top' => array(
					"name" => "navbar-fixed-top",
					"title" => __( 'Fixed Top (Full Width)', 'sass-bootstrap' )
				),
				'nav-fixed-bottom' => array(
					"name" => "nav-fixed-bottom",
					"title" => __( 'Fixed Bottom (Full Width)', 'sass-bootstrap' )
				)
	    )
		)
	);
	
	register_theme_options($nav_layout_option);
}

add_action('after_setup_theme','sassbs_add_nav_layout_options');

/**
 * Filters Layout Sections for Bootstrap Tab
 *
 * Allows us to add tab section for layout.
 *
 * @arg $bootstrap_options_tabs		Bootstrap options tab
 * @uses array_merge()
 *
 */
function sass_bs_register_layout_section($bootstrap_options_tabs){

	$layout_section = array(
		'layout' => array(
			'name' => 'layout',
			'title' => __( 'Layout', 'sass-bootstrap' ),
			'description' => __( 'Options to modify the layout of the Bootstrap theme.','sass-bootstrap' )
		)
	);

	return array_merge($bootstrap_options_tabs,$layout_section);	

}

add_filter('bootstrap-options-tabs','sass_bs_register_layout_section');

/**
 * Registers All Bootstrap plugins
 *
 * Registers scripts for theme to allow you to enqueue scripts
 * at a later time, as needed.
 *
 * @uses wp_register_script()
 * @uses get_template_directory_uri()
 *
 */
function sassbs_register_plugins(){
	
	wp_register_script('bootstrap_alert',get_template_directory_uri() . "/scripts/bootstrap-alert.js",false,THEME_VERSION);
	wp_register_script('bootstrap_button',get_template_directory_uri() . "/scripts/bootstrap-button.js",false,THEME_VERSION);
	wp_register_script('bootstrap_carousel',get_template_directory_uri() . "/scripts/bootstrap-carousel.js",false,THEME_VERSION);
	wp_register_script('bootstrap_collapse',get_template_directory_uri() . "/scripts/bootstrap-collapse.js",false,THEME_VERSION);
	wp_register_script('bootstrap_dropdown',get_template_directory_uri() . "/scripts/bootstrap-dropdown.js",false,THEME_VERSION);
	wp_register_script('bootstrap_modal',get_template_directory_uri() . "/scripts/bootstrap-modal.js",false,THEME_VERSION);
	wp_register_script('bootstrap_popover',get_template_directory_uri() . "/scripts/bootstrap-popover.js",false,THEME_VERSION);
	wp_register_script('bootstrap_scrollspy',get_template_directory_uri() . "/scripts/bootstrap-scrollspy.js",false,THEME_VERSION);
	wp_register_script('bootstrap_tab',get_template_directory_uri() . "/scripts/bootstrap-tab.js",false,THEME_VERSION);
	wp_register_script('bootstrap_tooltip',get_template_directory_uri() . "/scripts/bootstrap-tooltip.js",false,THEME_VERSION);
	wp_register_script('bootstrap_transition',get_template_directory_uri() . "/scripts/bootstrap-transition.js",false,THEME_VERSION);
	wp_register_script('bootstrap_typeahead',get_template_directory_uri() . "/scripts/bootstrap-typeahead.js",false,THEME_VERSION);
	
}

add_action('after_setup_theme','sassbs_register_plugins');

/**
 * Enqeues Bootstrap plugins as needed
 *
 * Checks to make sure each option is enabled
 * then enqueues the script if so.
 *
 * @uses upfw_get_options()
 * @uses wp_enqueue_script()
 *
 */
function sassbs_enqueue_plugins(){
	$up_options = upfw_get_options();
	
	if( $up_options->bootstrap_alert == 'true' )
		wp_enqueue_script('bootstrap_alert');
	
	if( $up_options->bootstrap_button == 'true' )
		wp_enqueue_script('bootstrap_button');
	
	if( $up_options->bootstrap_carousel == 'true' )
		wp_enqueue_script('bootstrap_carousel');
	
	if( $up_options->bootstrap_collapse == 'true' )
		wp_enqueue_script('bootstrap_collapse');
	
	if( $up_options->bootstrap_dropdown == 'true' )
		wp_enqueue_script('bootstrap_dropdown');
	
	if( $up_options->bootstrap_modal == 'true' )
		wp_enqueue_script('bootstrap_modal');
	
	if( $up_options->bootstrap_popover == 'true' )
		wp_enqueue_script('bootstrap_popover');
	
	if( $up_options->bootstrap_scrollspy == 'true' )
		wp_enqueue_script('bootstrap_scrollspy');
	
	if( $up_options->bootstrap_tab == 'true' )
		wp_enqueue_script('bootstrap_tab');
	
	if( $up_options->bootstrap_tooltip == 'true' )
		wp_enqueue_script('bootstrap_tooltip');
	
	if( $up_options->bootstrap_transition == 'true' )
		wp_enqueue_script('bootstrap_transition');
	
	if( $up_options->bootstrap_typeahead == 'true' )
		wp_enqueue_script('bootstrap_typeahead');
	
}

add_action('wp_enqueue_scripts','sassbs_enqueue_plugins');

/**
 * Creates Bootstrap Walker Nav Menu
 *
 * This class extends the base Walker_Nav_Menu to create
 * a Bootstrap-enabled Walker Nav.
 *
 * @class Bootstrap_Walker_Nav_Menu()
 * @extends Walker_Nav_Menu()
 *
 */
class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {
	
	function start_lvl( &$output, $depth ) {
		
		//In a child UL, add the 'dropdown-menu' class
		$indent = str_repeat( "\t", $depth );
		$output	   .= "\n$indent<ul class=\"dropdown-menu\">\n";
		
	}

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$li_attributes = '';
		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		
		//Add class and attribute to LI element that contains a submenu UL.
		if ($args->has_children){
			$classes[] 		= 'dropdown';
			$li_attributes .= 'data-dropdown="dropdown"';
		}
		$classes[] = 'menu-item-' . $item->ID;
		//If we are on the current page, add the active class to that menu item.
		$classes[] = ($item->current) ? 'active' : '';

		//Make sure you still add all of the WordPress classes.
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

		//Add attributes to link element.
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ($args->has_children) ? ' class="dropdown-toggle" data-toggle="dropdown"' : ''; 

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= ($args->has_children) ? ' <b class="caret"></b> ' : ''; 
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	//Overwrite display_element function to add has_children attribute. Not needed in >= Wordpress 3.4
	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
		
		if ( !$element )
			return;
		
		$id_field = $this->db_fields['id'];

		//display this element
		if ( is_array( $args[0] ) ) 
			$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
		else if ( is_object( $args[0] ) ) 
			$args[0]->has_children = ! empty( $children_elements[$element->$id_field] ); 
		$cb_args = array_merge( array(&$output, $element, $depth), $args);
		call_user_func_array(array(&$this, 'start_el'), $cb_args);

		$id = $element->$id_field;

		// descend only when the depth is right and there are childrens for this element
		if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {

			foreach( $children_elements[ $id ] as $child ){

				if ( !isset($newlevel) ) {
					$newlevel = true;
					//start the child delimiter
					$cb_args = array_merge( array(&$output, $depth), $args);
					call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
				}
				$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
			}
				unset( $children_elements[ $id ] );
		}

		if ( isset($newlevel) && $newlevel ){
			//end the child delimiter
			$cb_args = array_merge( array(&$output, $depth), $args);
			call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
		}

		//end this element
		$cb_args = array_merge( array(&$output, $element, $depth), $args);
		call_user_func_array(array(&$this, 'end_el'), $cb_args);
		
	}
	
}

function sassbs_bootstrap_breadcrumbs(){

  $delimiter = '<span class="divider">/</span>';
  $home = 'Home'; // text for the 'Home' link
  $before = '<li class="active">'; // tag before the current crumb
  $after = '</li>'; // tag after the current crumb

  if ( !is_home() && !is_front_page() || is_paged() ) {

    echo '<ul class="breadcrumb">';

    global $post;
    $homeLink = home_url();
    echo '<li><a href="' . $homeLink . '">' . $home . '</a></li> ' . $delimiter . ' ';

    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;

    } elseif ( is_day() ) {
      echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
      echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a></li> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;

    } elseif ( is_month() ) {
      echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;

    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;

    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<li><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li> ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        echo $before . get_the_title() . $after;
      }

    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;

    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<li><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li> ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;

    } elseif ( is_page() && !$post->post_parent ) {
      echo $before . get_the_title() . $after;

    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;

    } elseif ( is_search() ) {
      echo $before . 'Search results for "' . get_search_query() . '"' . $after;

    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;

    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;

    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }

    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }

    echo '</ul>';

  }
}

add_action('sassbs_after_header','sassbs_bootstrap_breadcrumbs');

if ( ! function_exists( 'sassbs_bootstrap_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own sassbs_bootstrap_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since SASS Bootstrap .4
 */
function sassbs_bootstrap_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'bootstrap' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'bootstrap' ), ' ' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer>
				<div class="comment-author vcard">
					<?php echo get_avatar( $comment, 40 ); ?>
					<?php printf( __( '%s <span class="says">says:</span>', 'bootstrap' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
				</div><!-- .comment-author .vcard -->
				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em><?php _e( 'Your comment is awaiting moderation.', 'bootstrap' ); ?></em>
					<br />
				<?php endif; ?>

				<div class="comment-meta commentmetadata">
					<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time pubdate datetime="<?php comment_time( 'c' ); ?>">
					<?php
						/* translators: 1: date, 2: time */
						printf( __( '%1$s at %2$s', 'bootstrap' ), get_comment_date(), get_comment_time() ); ?>
					</time></a>
					<?php edit_comment_link( __( '(Edit)', 'bootstrap' ), ' ' );
					?>
				</div><!-- .comment-meta .commentmetadata -->
			</footer>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif;

?>