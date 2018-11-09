<?php
/*
Plugin Name: PDG Metaboxes
Description: Setup metaboxes for the site
*/
/********************* META BOX DEFINITIONS ***********************/



/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'rw_';

global $meta_boxes;

$meta_boxes = array();

//Home page meta boxes//////////////////////////////////////////////////////////////////////////////////
	
$slug = 'cds_';


//settings

$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'setting-meta',
	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => __( 'Theme setting', 'rwmb' ),
	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'page'),
	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',
	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',
	// Auto save: true, false (default). Optional.
	'autosave' => true,
	
	// Register this meta box for posts matched below conditions
	'include' => array('slug'  => array( 'setting' ),),
	// List of meta fields
	'fields' => array(

				  array(
						   'name'  => esc_html__( 'Number of project & News Items in home:', 'rwmb' ),
						   'id'    => $prefix.$slug."number_items",
						   'type'    => 'text',
						   'clone' => false,
												 

						),
				  
				   
				   
					
					
					
));



$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'homepagemange-meta',
	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => __( 'Home Page Content', 'rwmb' ),
	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'page'),
	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',
	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',
	// Auto save: true, false (default). Optional.
	'autosave' => true,
	
	// Register this meta box for posts matched below conditions
	'include' => array('ID'  => array( 7 ),),
		// List of meta fields
	'fields' => array(

				array(
					    'type' => 'heading',
					    'name' => 'Section 1',
					    'desc' => '',
					),
				  array(
						   'name'  => esc_html__( 'Main Title:', 'rwmb' ),
						   'id'    => $prefix.$slug."home_title",
						   'type'    => 'textarea',
						   'clone' => false,
												 

						),
				  array(
						   'name'  => esc_html__( 'Main Description:', 'rwmb' ),
						   'id'    => $prefix.$slug."home_description",
						   'type'    => 'textarea',
						   'clone' => false,
												 

						),
				  array(
					    'type' => 'heading',
					    'name' => 'Section 2',
					    'desc' => '',
					),
				  array(
						   'name'  => esc_html__( 'Main Title:', 'rwmb' ),
						   'id'    => $prefix.$slug."sec2_main_title",
						   'type'    => 'text',
						   'clone' => false,
												 

						),
				   array(
						   'name'  => esc_html__( 'Sub Title 1 :', 'rwmb' ),
						   'id'    => $prefix.$slug."sec2_sub1_title",
						   'type'    => 'text',
						   'clone' => false,
												 

						),
				   array(
						   'name'  => esc_html__( 'Sub Title 2:', 'rwmb' ),
						   'id'    => $prefix.$slug."sec2_sub2_title",
						   'type'    => 'text',
						   'clone' => false,
												 

						),
				  array(
						   'name'  => esc_html__( 'Main Description:', 'rwmb' ),
						   'id'    => $prefix.$slug."sec2_description",
						   'type'    => 'textarea',
						   'clone' => false,
												 

						),
				   array(
					    'type' => 'heading',
					    'name' => 'Section 3',
					    'desc' => '',
					),
				    array(
						   'name'  => esc_html__( 'Main Title:', 'rwmb' ),
						   'id'    => $prefix.$slug."sec3_main_title",
						   'type'    => 'textarea',
						   'clone' => false,
												 

						),
				   array(
						   'name'  => esc_html__( 'Sub Title 1 :', 'rwmb' ),
						   'id'    => $prefix.$slug."sec3_sub1_title",
						   'type'    => 'textarea',
						   'clone' => false,
												 

						),
				     array(
					    'type' => 'heading',
					    'name' => 'Section 3 block1',
					    'desc' => '',
					),

				     array(
						   'name'  => esc_html__( 'Main Title:', 'rwmb' ),
						   'id'    => $prefix.$slug."sec3_block1_main_title",
						   'type'    => 'text',
						   'clone' => false,
												 

						),
				   array(
						   'name'  => esc_html__( 'Sub Title 1 :', 'rwmb' ),
						   'id'    => $prefix.$slug."sec3_block1_sub1_title",
						   'type'    => 'textarea',
						   'clone' => false,
												 

						),
				   array(
					    'type' => 'heading',
					    'name' => 'Section 3 block2',
					    'desc' => '',
					),

				     array(
						   'name'  => esc_html__( 'Main Title:', 'rwmb' ),
						   'id'    => $prefix.$slug."sec3_block2_main_title",
						   'type'    => 'text',
						   'clone' => false,
												 

						),
				   array(
						   'name'  => esc_html__( 'Sub Title 1 :', 'rwmb' ),
						   'id'    => $prefix.$slug."sec3_block2_sub1_title",
						   'type'    => 'textarea',
						   'clone' => false,
												 

						),
				    array(
					    'type' => 'heading',
					    'name' => 'Section 3 block3',
					    'desc' => '',
					),

				     array(
						   'name'  => esc_html__( 'Main Title:', 'rwmb' ),
						   'id'    => $prefix.$slug."sec3_block3_main_title",
						   'type'    => 'text',
						   'clone' => false,
												 

						),
				   array(
						   'name'  => esc_html__( 'Sub Title 1 :', 'rwmb' ),
						   'id'    => $prefix.$slug."sec3_block3_sub1_title",
						   'type'    => 'textarea',
						   'clone' => false,
												 

						),

									 
				   
				   
					
					
					
));

//any post

$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'anypost-meta',
	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => __( 'Show In Home page', 'rwmb' ),
	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'post','page','cds_projects','cds_prodcuts'),
	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',
	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',
	// Auto save: true, false (default). Optional.
	'autosave' => true,
	
	// Register this meta box for posts matched below conditions
	//'include' => array('ID'  => array( 7 ),),
	'exclude' => array('ID'  => array( 7 ),),
	// List of meta fields
	'fields' => array(

				 
				  array(
					'name' => __( 'Include this content on home page', 'rwmb' ),
					'id'    => $prefix.$slug."homepage_include",
					'type' => 'checkbox',
					// Value can be 0 or 1
					'std'  => 0,
				),
				  array(
						   'name'  => esc_html__( 'Main Banner (Dimensions 1200 px x 440 px)', 'rwmb' ),
						   'id'    => $prefix.$slug."page_banner",
						   'type'             => 'image',
						   'clone' => false,
												 

						),

				   array(
					    'type' => 'heading',
					    'name' => 'Featured this post',
					    'desc' => '',
					),
				   array(
					'name' => __( 'Add this item as Featured', 'rwmb' ),
					'id'    => $prefix.$slug."featured_post",
					'type' => 'checkbox',
					// Value can be 0 or 1
					'std'  => 0,
				),
				    array(
						   'name'  => esc_html__( 'Featured Banner (Dimensions 562 px x 283 px)', 'rwmb' ),
						   'id'    => $prefix.$slug."featured_banner",
						   'type'             => 'image',
						   'clone' => false,
												 

						),
				  
				   
				   
					
					
					
));


//Our Team
$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'ourteam-meta',
	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => __( 'Our Team Additional Information', 'rwmb' ),
	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'cds_team'),
	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',
	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',
	// Auto save: true, false (default). Optional.
	'autosave' => true,
	
	// Register this meta box for posts matched below conditions
	//'include' => array('ID'  => array( 7 ),),
	// List of meta fields
	'fields' => array(

				 
				  array(
					'name' => __( 'This team member no longer work for CDS', 'rwmb' ),
					'id'    => $prefix.$slug."no_longer_work",
					'type' => 'checkbox',
					// Value can be 0 or 1
					'std'  => 0,
				),
				  array(
						   'name'  => esc_html__( 'Designation', 'rwmb' ),
						   'id'    => $prefix.$slug."member_designation",
						   'type'  => 'text',
						   'clone' => false,
												 

						),
				  array(
						   'name'  => esc_html__( 'Phone', 'rwmb' ),
						   'id'    => $prefix.$slug."link_phone",
						   'type'  => 'text',
						   'clone' => false,
												 

						),
				   array(
					    'type' => 'heading',
					    'name' => 'Links',
					    'desc' => '',
					),
				   array(
						   'name'  => esc_html__( 'Twitter', 'rwmb' ),
						   'id'    => $prefix.$slug."link_twitter",
						   'type'  => 'text',
						   'clone' => false,
												 

						),
				   array(
						   'name'  => esc_html__( 'Facebook', 'rwmb' ),
						   'id'    => $prefix.$slug."link_facebook",
						   'type'  => 'text',
						   'clone' => false,
												 

						),
				   array(
						   'name'  => esc_html__( 'Goole Plus', 'rwmb' ),
						   'id'    => $prefix.$slug."link_googlplus",
						   'type'  => 'text',
						   'clone' => false,
												 

						),
				   array(
						   'name'  => esc_html__( 'Linkedin', 'rwmb' ),
						   'id'    => $prefix.$slug."link_linkedin",
						   'type'  => 'text',
						   'clone' => false,
												 

						),
				   
				  
				  
				  
				   
				   
					
					
					
));


$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'featured-meta',
	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => __( 'Featured this post', 'rwmb' ),
	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'post','page','cds_projects'),
	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',
	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',
	// Auto save: true, false (default). Optional.
	'autosave' => true,
	
	// Register this meta box for posts matched below conditions
	//'include' => array('ID'  => array( 7 ),),
	'exclude' => array('ID'  => array( 7 ),),
	// List of meta fields
	'fields' => array(

				 			 
				   array(
					'name' => __( 'Add this item as Featured', 'rwmb' ),
					'id'    => $prefix.$slug."featured_post",
					'type' => 'checkbox',
					// Value can be 0 or 1
					'std'  => 0,
				),
				  
				   
				   
					
					
					
));


//contact-us



$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'contactus-meta',
	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => __( 'Contact Us page Content', 'rwmb' ),
	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'page'),
	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',
	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',
	// Auto save: true, false (default). Optional.
	'autosave' => true,
	
	// Register this meta box for posts matched below conditions
	//'include' => array('ID'  => array( 7 ),),
	'include' => array('slug'  => array( 'contact-us' ),),
	// List of meta fields
	'fields' => array(

				 			 
				   array(
						   'name'  => esc_html__( 'Address', 'rwmb' ),
						   'id'    => $prefix.$slug."contact_address",
						   'type'    => 'textarea',
						   'clone' => false,
												 

						),
				   array(
						   'name'  => esc_html__( 'Email', 'rwmb' ),
						   'id'    => $prefix.$slug."contact_email",
						   'type'    => 'text',
						   'clone' => false,
												 

						),
				   array(
						   'name'  => esc_html__( 'Phone', 'rwmb' ),
						   'id'    => $prefix.$slug."contact_phone",
						   'type'    => 'text',
						   'clone' => false,
												 

						),
				   array(
						   'name'  => esc_html__( 'Find Our Location', 'rwmb' ),
						   'id'    => $prefix.$slug."contact_map",
						   'type'    => 'textarea',
						   'clone' => false,
												 

						),
				  
				  
				   
				   
					
					
					
));

//Careers

$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'careers-meta',
	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => __( 'Careers Page Content', 'rwmb' ),
	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'cds_careers'),
	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',
	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',
	// Auto save: true, false (default). Optional.
	'autosave' => true,
	
	// Register this meta box for posts matched below conditions
	//'include' => array('ID'  => array( 7 ),),
	//'include' => array('slug'  => array( 'contact-us' ),),
	// List of meta fields
	'fields' => array(

				 	

				   array(
					'name' => __( 'Current Opportunities', 'rwmb' ),
					'id'    => $prefix.$slug."current_opportunities",
					'type' => 'checkbox',
					// Value can be 0 or 1
					'std'  => 1,
				),		 
				   array(
				            'name'   => 'Job Type', // Optional
				            'id'     => $prefix.$slug.'jobstype',
				            'type'   => 'group',
				            // List of sub-fields
				            'fields' => array(
				                array(
				                    'name' => 'Full Time',
				                    'id'    => $prefix.$slug."fultime",
				                    'type' => 'checkbox',
									// Value can be 0 or 1
									'std'  => 1,
				                ),
				                array(
				                    'name' => 'Part Time',
				                    'id'    => $prefix.$slug."parttime",
				                    'type' => 'checkbox',
									// Value can be 0 or 1
									'std'  => 0,
				                ),
				                // Other sub-fields here
				            ),
				        ),
				   array(
						   'name'  => esc_html__( 'Location', 'rwmb' ),
						   'id'    => $prefix.$slug."job_Location",
						   'type'    => 'text',
						   'clone' => false,
												 

						),
				   array(
						   'name'  => esc_html__( 'Closing Date', 'rwmb' ),
						   'id'    => $prefix.$slug."clocsing_date",
						   'type'    => 'date',
						   'clone' => false,
												 

						),
					array(
					    'type' => 'heading',
					    'name' => 'Other Information',
					    'desc' => '',
					),

				   array(
						   'name'  => esc_html__( 'What you will be responsible for', 'rwmb' ),
						   'id'    => $prefix.$slug."responsible",
						   'type'    => 'wysiwyg',
						   'clone' => false,
												 

						),
				    array(
						   'name'  => esc_html__( 'What you need to have to apply for this position', 'rwmb' ),
						   'id'    => $prefix.$slug."applyfor",
						   'type'    => 'wysiwyg',
						   'clone' => false,
												 

						),
				    array(
						   'name'  => esc_html__( 'Why you should join Colombo Design Center', 'rwmb' ),
						   'id'    => $prefix.$slug."whyjoin",
						   'type'    => 'wysiwyg',
						   'clone' => false,
												 

						),
				  
				  
				   
				   
					
					
					
));



/*

$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'project-meta',
	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => __( 'Project Content', 'rwmb' ),
	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'cds_projects'),
	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',
	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',
	// Auto save: true, false (default). Optional.
	'autosave' => true,
	
	// List of meta fields
	'fields' => array(

			array(
						   'name'  => esc_html__( 'Main Banner:', 'rwmb' ),
						   'id'    => $prefix.$slug."page_banner",
						   'type'             => 'image',
						   'clone' => false,
												 

						),
			
					
					
					
));
*/


/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function rw_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) ) {
		foreach ( $meta_boxes as $meta_box ) {
			if ( isset( $meta_box['only_on'] ) && ! rw_maybe_include( $meta_box['only_on'] ) ) {
				continue;
			}

			new RW_Meta_Box( $meta_box );
		}
	}
}

add_action( 'admin_init', 'rw_register_meta_boxes' );

/**
 * Check if meta boxes is included
 *
 * @return bool
 */
function rw_maybe_include( $conditions ) {
	// Include in back-end only
	if ( ! defined( 'WP_ADMIN' ) || ! WP_ADMIN ) {
		return false;
	}

	// Always include for ajax
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
		return true;
	}

	if ( isset( $_GET['post'] ) ) {
		$post_id = $_GET['post'];
	}
	elseif ( isset( $_POST['post_ID'] ) ) {
		$post_id = $_POST['post_ID'];
	}
	else {
		$post_id = false;
	}

	$post_id = (int) $post_id;
	$post    = get_post( $post_id );

	foreach ( $conditions as $cond => $v ) {
		// Catch non-arrays too
		if ( ! is_array( $v ) ) {
			$v = array( $v );
		}

		switch ( $cond ) {
			case 'id':
				if ( in_array( $post_id, $v ) ) {
					return true;
				}
			break;
			case 'parent':
				$post_parent = $post->post_parent;
				if ( in_array( $post_parent, $v ) ) {
					return true;
				}
			break;
			case 'slug':
				$post_slug = (!empty( $post->post_name));
				if ( in_array( $post_slug, $v ) ) {
					return true;
				}
			break;
			case 'template':
				$template = get_post_meta( $post_id, '_wp_page_template', true );
				if ( in_array( $template, $v ) ) {
					return true;
				}
			break;
		}
	}

	// If no condition matched
	return false;
}
?>
