<?php 

/**
 * Register custom post types and taxonomies
 *
 * Sets up our custom post types for themes and plugins and
 * creates a taxonomy called Platforms.
 *
 * @uses register_post_type()
 * @uses register_taxonomy()
 *
 */

function sassbs_register_post_types(){

  register_post_type( 'theme', array(
    'labels' => array(
      'name' => __('Themes'),
      'singular_name' => __('Theme')
      ),
    'public' => true,
    'capability_type' => 'post',
    'publicly_queryable' => true,
    'taxonomies' => array('post_tag','category'),
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'revisions'),
    'show_ui' => true,
    'menu_position' => 5,
    'rewrite' => array(
      'slug' => 'themes',
      'with_front' => false
      ),
    'has_archive' => true
  ) );
  
  $labels_location = array(
    'name' => _x( 'Platforms', 'taxonomy general name' ),
    'singular_name' => _x( 'Platform', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Platforms' ),
    'all_items' => __( 'All Platforms' ),
    'parent_item' => __( 'Parent Platform' ),
    'parent_item_colon' => __( 'Parent Platform:' ),
    'edit_item' => __( 'Edit Platform' ), 
    'update_item' => __( 'Update Platform' ),
    'add_new_item' => __( 'Add New Platform' ),
    'new_item_name' => __( 'New Location Platform' ),
  );

  register_taxonomy('platform',array('theme','plugin'), array(
    'hierarchical' => true,
    'labels' => $labels_location,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'platform' ),
  ));

  register_post_type( 'plugin', array(
    'labels' => array(
      'name' => __('Plugins'),
      'singular_name' => __('Plugin')
      ),
    'public' => true,
    'capability_type' => 'post',
    'publicly_queryable' => true,
    'taxonomies' => array('post_tag','category'),
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'revisions'),
    'show_ui' => true,
    'menu_position' => 5,
    'rewrite' => array(
      'slug' => 'plugins',
      'with_front' => false
      ),
    'has_archive' => true
  ) );

}

add_action('init','sassbs_register_post_types',1);

/**
 * Filter wp_nav_menu() to add additional links and other output
 *
 * @uses get_search_form()
 */

function sassbs_nav_menu_search($items) {
    $search = '<li class="pull-right">' . get_search_form() . '</li>';
    $items = $items.$search;
    return $items;
}

add_filter( 'wp_nav_menu_items', 'sassbs_nav_menu_search' );