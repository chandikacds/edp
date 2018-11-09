<?php
/*
Plugin Name: PDG Custom Post Types
Description: Set up custom post types for the site
*/
function posts_setup() {
//Register post type

function codex_custom_init() {
  
$sydney = array(
  'name' => 'Sydney',
  'singular_name' => 'Sydney post',
  'add_new' => 'Add New',
  'add_new_item' => 'Add New Sydney post',
  'edit_item' => 'Edit Sydney post',
  'new_item' => 'New Sydney post',
  'all_items' => 'All Sydney posts',
  'view_item' => 'View Sydney post',
  'search_items' => 'Search your Sydney posts',
  'not_found' =>  'No Sydney posts found',
  'not_found_in_trash' => 'No Sydney posts found in Trash', 
  'parent_item_colon' => '',
  'menu_name' => 'Sydney Posts'
);
  register_post_type(
    'base_sydney', array(
      'labels' => $sydney,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true, 
      'show_in_menu' => true, 
      'query_var' => true,
      'rewrite' => array( 'slug' => 'sydney' ),
      'capability_type' => 'post',
      'has_archive' => true, 
      'hierarchical' => false,
      'menu_position' => null,
      'menu_icon'=> 'dashicons-location',
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats' ),
      //'supports' => array( 'title','editor', 'thumbnail'),
      'taxonomies'=> array('post_tag', 'category')  ,  
      )
  );

//Melbourne Post Type////////////////
$melbourne = array(
  'name' => 'Melbourne Posts',
  'singular_name' => 'Melbourne post',
  'add_new' => 'Add New',
  'add_new_item' => 'Add New Melbourne post',
  'edit_item' => 'Edit Melbourne post',
  'new_item' => 'New Melbourne post',
  'all_items' => 'All Melbourne posts',
  'view_item' => 'View Melbourne post',
  'search_items' => 'Search your Melbourne post',
  'not_found' =>  'No Melbourne posts found',
  'not_found_in_trash' => 'No Melbourne posts found in Trash', 
  'parent_item_colon' => '',
  'menu_name' => 'Melbourne Posts'
);
  register_post_type(
    'base_melbourne', array(
      'labels' => $melbourne,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true, 
      'show_in_menu' => true, 
      'query_var' => true,
      'rewrite' => array( 'slug' => 'melbourne' ),
      'capability_type' => 'post',
      'has_archive' => true, 
      'hierarchical' => false,
      'menu_position' => null,
      'menu_icon'=> 'dashicons-location',
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats' ),
      //'supports' => array( 'title','editor', 'thumbnail'),
      'taxonomies'=> array('post_tag', 'category')    
      )
  );

  //Venue Post Type////////////////
$venues = array(
  'name' => 'Venues',
  'singular_name' => 'Venues',
  'add_new' => 'Add New',
  'add_new_item' => 'Venue Name',
  'edit_item' => 'Edit Venue',
  'new_item' => 'New Venue',
  'all_items' => 'All Venue',
  'view_item' => 'View Venue',
  'search_items' => 'Search your Venue',
  'not_found' =>  'No Melbourne posts found',
  'not_found_in_trash' => 'No Melbourne posts found in Trash', 
  'parent_item_colon' => '',
  'menu_name' => 'Venues'
);
  register_post_type(
    'base_venue', array(
      'labels' => $venues,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true, 
      'show_in_menu' => true, 
      'query_var' => true,
      'rewrite' => array( 'slug' => 'venues' ),
      'capability_type' => 'post',
      'has_archive' => true, 
      'hierarchical' => false,
      'menu_position' => null,
      'menu_icon'=> 'dashicons-location-alt',
      'supports' => array( 'title'),
      //'supports' => array( 'title','editor', 'thumbnail'),
    //'taxonomies'=> array('post_tag', 'category')    
      )
  );



}
add_action( 'init', 'codex_custom_init' );
}

add_action('after_setup_theme', 'posts_setup');


// hook into the init action and call create_types_taxonomies when it fires
add_action( 'init', 'create_types_taxonomies', 0 );

// create the taxonomy
function create_types_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Types', 'taxonomy general name' ),
		'singular_name'     => _x( 'type', 'taxonomy singular name' ),
		'search_items'      => __( 'Search type' ),
		'all_items'         => __( 'All types' ),
		'parent_item'       => __( 'Parent type' ),
		'parent_item_colon' => __( 'Parent type:' ),
		'edit_item'         => __( 'Edit type' ),
		'update_item'       => __( 'Update type' ),
		'add_new_item'      => __( 'Add New type' ),
		'new_item_name'     => __( 'New type Name' ),
		'menu_name'         => __( 'Types' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'base_type', 'with_front' => false),
	);



	register_taxonomy( 'base_type', array( 'base_normal_members' ), $args );


  $labels = array(
		'name'              => _x( 'Project Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'type', 'taxonomy singular name' ),
		'search_items'      => __( 'Search type' ),
		'all_items'         => __( 'All Categories' ),
		'parent_item'       => __( 'Parent Category' ),
		'parent_item_colon' => __( 'Parent Category:' ),
		'edit_item'         => __( 'Edit Category' ),
		'update_item'       => __( 'Update Category' ),
		'add_new_item'      => __( 'Add New Category' ),
		'new_item_name'     => __( 'New Category' ),
		'menu_name'         => __( 'Project Categories' ),
	);

	$args = array(
		'hierarchical'      => true,
     'sort' => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'base_projects', 'with_front' => false),
	);



	register_taxonomy( 'base_projects', array('cds_projects' ), $args );
/*
  $args = array( 'post_type' => 'base_members','orderby' => 'post_title', 'order'=> 'ASC');
  $myposts = get_posts( $args );

   foreach ($myposts  as $post) {
     //var_dump($post); exit;
     wp_insert_term($post->post_title, 'base_product', array('slug' => str_replace(' ', '_', $post->post_title), 'parent'=> 0 ));
   }
*/

}


?>
