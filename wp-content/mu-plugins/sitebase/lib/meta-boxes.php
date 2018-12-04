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
$prefix = 'baz_';

global $meta_boxes;

$meta_boxes = array();

//Home page meta boxes//////////////////////////////////////////////////////////////////////////////////
	
$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'post-options-meta',
	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => __( 'Post Options', 'rwmb' ),
	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'post','base_sydney', 'base_melbourne'),
	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'side',
	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',
	// Auto save: true, false (default). Optional.
	'autosave' => true,
	// List of meta fields
	'fields' => array(
			// Check box
			array(
				'name'    => __( 'Homepage Slider', 'rwmb' ),
				'id'      => "{$prefix}homepage_slider_add",
				'type' => 'checkbox',
				// Value can be 0 or 1
				'std'  => 0,
			),
			// Check box
			array(
				'name'    => __( 'Homepage Box 1', 'rwmb' ),
				'id'      => "{$prefix}box_one_add",
				'type' => 'checkbox',
				// Value can be 0 or 1
				'std'  => 0,
			),
			// Check box
			array(
				'name'    => __( 'Homepage Box 2', 'rwmb' ),
				'id'      => "{$prefix}box_two_add",
				'type' => 'checkbox',
				// Value can be 0 or 1
				'std'  => 0,
			),
			// Check box
			array(
				'name'    => __( 'Featured Post', 'rwmb' ),
				'id'      => "{$prefix}featured_post_add",
				'type' => 'checkbox',
				// Value can be 0 or 1
				'std'  => 0,
			),
			// Check box
			array(
				'name'    => __( 'Category Slider', 'rwmb' ),
				'id'      => "{$prefix}category_slider_add",
				'type' => 'checkbox',
				// Value can be 0 or 1
				'std'  => 0,
			),
			// Check box
			array(
				'name'    => __( 'Essential Guide', 'rwmb' ),
				'id'      => "{$prefix}essential_guide_add",
				'type' => 'checkbox',
				// Value can be 0 or 1
				'std'  => 0,
			),
			// Check box
			array(
				'name'    => __( 'Secret Foodies', 'rwmb' ),
				'id'      => "{$prefix}secret_foodies_add",
				'type' => 'checkbox',
				// Value can be 0 or 1
				'std'  => 0,
			),
			
	),

);


$day_list = array();
$day_list["SUN"] = "Sunday";
$day_list["MON"] = "Monday";
$day_list["TUE"] = "Tuesday";
$day_list["WED"] = "Wednesday";
$day_list["THU"] = "Thursday";
$day_list["FRI"] = "Friday";
$day_list["SAT"] = "Saturday";

$prefixnew = 'field_prefix_';
$slug = "opening_hours";
//Meta box contact page meta box
$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'opening-hours-meta',
	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => __( 'Opening Hours', 'rwmb' ),
	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array(  'base_sydney','base_melbourne','post' ),
	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',
	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',
	// Auto save: true, false (default). Optional.
	'autosave' => true,
	// Register this meta box for posts matched below conditions
	//'include' => array('ID'  => array( 33 ),),
	// List of meta fields
	'fields' => array(
        // Group
        array(
            'name' => '', // Optional
            'id' => 'ph_id',
            'type' => 'group',
			'clone' => true,
			'sort_clone' => true,
			'collapsible' => true,
			'group_title' => 'Day {#}',
	    // List of sub-fields
	    'fields' => array(
			array(
						   'name'  => esc_html__( 'Choose Day:', 'your-prefix' ),
						   'id'    => "{$prefixnew}{$slug}_name",
						   'type'    => 'select',
						    // Options of autocomplete, in format 'value' => 'Label'
						    'options' => $day_list,
												 

						),
			array(
							'name'       => esc_html__( 'Start time', 'your-prefix' ),
							'id'    => "{$prefixnew}{$slug}_from_time",
							'type'       => 'time',
							// jQuery datetime picker options.
							// For date options, see here http://api.jqueryui.com/datepicker
							// For time options, see here http://trentrichardson.com/examples/timepicker/
							'js_options' => array(
								'stepMinute' => 15,
								'stepSecond' => 10,
								'timeFormat' => 'hh:mm tt',
							),
						),
					array(
							'name'       => esc_html__( 'End time', 'your-prefix' ),
							'id'         => "{$prefixnew}{$slug}_to_time",
							'type'       => 'time',
							// jQuery datetime picker options.
							// For date options, see here http://api.jqueryui.com/datepicker
							// For time options, see here http://trentrichardson.com/examples/timepicker/
							'js_options' => array(
								'stepMinute' => 15,
								'stepSecond' => 10,
								'timeFormat' => 'hh:mm tt',
							),
						),
			
                // Other sub-fields here
            ),
        ),
    ),

	);


$slug = "the_details";
//Meta box contact page meta box
$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'the-details-meta',
	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => __( 'The Details', 'rwmb' ),
	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array(  'base_sydney','base_melbourne','post' ),
	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',
	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',
	// Auto save: true, false (default). Optional.
	'autosave' => true,
	// Register this meta box for posts matched below conditions
	//'include' => array('ID'  => array( 33 ),),
	// List of meta fields
	'fields' => array(
        // Group
        array(
            'name' => '', // Optional
            'id' => 'td_id',
            'type' => 'group',
			'clone' => true,
			'sort_clone' => true,
			'collapsible' => true,
			'group_title' => 'Details {#}',
	    // List of sub-fields
	    'fields' => array(

	    	 array(
        		'name'  => esc_html__( 'Heading', 'rwmb' ),
        		//'label_description' => esc_html__( 'e.g Membership benefits explained', 'rwmb' ),
        		'id'    => "{$prefixnew}{$slug}_heading",
        		'desc'  => esc_html__( 'Enter the text you want show link', 'rwmb' ),
        		'type'  => 'text',
        		'std'   => esc_html__( '', 'rwmb' ),
	        	),
		
				 array(
        		'name'  => esc_html__( 'Link text', 'rwmb' ),
        		//'label_description' => esc_html__( 'e.g Membership benefits explained', 'rwmb' ),
        		'id'    => "{$prefixnew}{$slug}_text",
        		'desc'  => esc_html__( 'Enter the text you want show link', 'rwmb' ),
        		'type'  => 'text',
        		'std'   => esc_html__( '', 'rwmb' ),
        		'clone' => true,
	        	),
	        array(
        		'name'  => esc_html__( 'URL', 'rwmb' ),
        		//'label_description' => esc_html__( 'e.g Membership benefits explained', 'rwmb' ),
        		'id'    => "{$prefixnew}{$slug}_url",
        		'desc'  => esc_html__( 'Enter the URL as per the link name above', 'rwmb' ),
        		'type'  => 'text',
        		'std'   => esc_html__( '', 'rwmb' ),
        		'clone' => true,
	        	),
			
                // Other sub-fields here
            ),
        ),
    ),

	);

$slug = "venue";
$prefix = "rw_";

$county_list = array();
$county_list['au']="Australia";

$citylist = array();
$citylist['Sydney'] = 'Sydney';
$citylist['Melbourne'] = 'Melbourne';



$args = array( 'post_type' => 'base_venue','orderby' => 'post_title', 'order'=> 'ASC', 'posts_per_page' => -1 );
$allproject = get_posts( $args );


$venu_list = array();
foreach ($allproject as $key => $post) {
 
    $post_id = $post->ID;
    $venu_list[$post_id]=$post->post_title;
    
}


$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'venue-meta',
	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => __( 'Venue Information', 'rwmb' ),
	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'base_sydney','base_melbourne','post',),
	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',
	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',
	// Auto save: true, false (default). Optional.
	'autosave' => true,
	'geo' => array(
    'componentRestrictions' => array(
        'country' => 'au',
    )
),
	// Register this meta box for posts matched below conditions
	//'include' => array('ID'  => array( 4 ),),
	// List of meta fields
	'fields' => array(

				  array(
						   'name'  => esc_html__( 'Use Saved Venue:', 'your-prefix' ),
						   'id'    => "{$prefix}{$slug}_name",
						   'type'    => 'autocomplete',
						    // Options of autocomplete, in format 'value' => 'Label'
						    'options' => $venu_list,
												 

						),
				  array(
						'name'  => esc_html__( 'Or New Venue Name:', 'your-prefix' ),
						'id'    => "{$prefix}{$slug}_newname",
						//'desc'  => esc_html__( 'Enter the Phone', 'your-prefix' ),
						'type'  => 'text',
						'clone' => false,
					),

				  array(
						'name'  => esc_html__( 'Name ID:', 'your-prefix' ),
						'id'    => "{$prefix}{$slug}_name_id",
						//'desc'  => esc_html__( 'Enter the Phone', 'your-prefix' ),
						'type'  => 'hidden',
						'clone' => false,
					),
					

					array(
						'name'  => esc_html__( 'Address:', 'your-prefix' ),
						'id'    => "{$prefix}{$slug}_address",
						//'desc'  => esc_html__( 'Enter the Email', 'your-prefix' ),
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => esc_html__( 'Suburb:', 'your-prefix' ),
						'id'    => "{$prefix}{$slug}_suburb",
						//'desc'  => esc_html__( 'Enter the Email', 'your-prefix' ),
						'type'  => 'text',
						'clone' => false,
					),
					 	
					 array(
						'name'  => esc_html__( 'City:', 'your-prefix' ),
						'id'    => "{$prefix}{$slug}_city",
						//'desc'  => esc_html__( 'Enter the Phone', 'your-prefix' ),
						'type'            => 'select',
						    // Array of 'value' => 'Label' pairs
						'options'         => $citylist,
					),
					
					  array(
						   'name'  => esc_html__( 'Contry:', 'your-prefix' ),
						   'id'    => "{$prefix}{$slug}_country",
						   //'desc'  => esc_html__( 'Select the Project status', 'your-prefix' ),
						    'type'            => 'select',
						    // Array of 'value' => 'Label' pairs
						    'options'         => $county_list,
						    // Allow to select multiple value?
						    'multiple'        => false,
						    // Placeholder text
						   // 'placeholder'     => 'Select an Item',
						    // Display "Select All / None" button?
						    'select_all_none' => true,
						 

						),
					  
					    array(
						'name'  => esc_html__( 'State or Province:', 'your-prefix' ),
						'id'    => "{$prefix}{$slug}_state",
						//'desc'  => esc_html__( 'Enter the Phone', 'your-prefix' ),
						'type'  => 'text',
						'clone' => false,
					),
					    array(
						'name'  => esc_html__( 'Postal Code:', 'your-prefix' ),
						'id'    => "{$prefix}{$slug}_postcode",
						//'desc'  => esc_html__( 'Enter the Phone', 'your-prefix' ),
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => esc_html__( 'Phone:', 'your-prefix' ),
						'id'    => "{$prefix}{$slug}_phone",
						//'desc'  => esc_html__( 'Enter the Phone', 'your-prefix' ),
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => esc_html__( 'Website:', 'your-prefix' ),
						'id'    => "{$prefix}{$slug}_website",
						//'desc'  => esc_html__( 'Enter the Phone', 'your-prefix' ),
						'type'  => 'text',
						'clone' => false,
					),
					
					
					
					
));



$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'realvenue-meta',
	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => __( 'Venue Information', 'rwmb' ),
	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'base_venue'),
	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',
	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',
	// Auto save: true, false (default). Optional.
	'autosave' => true,
	'geo' => array(
    'componentRestrictions' => array(
        'country' => 'au',
    )
),
	// Register this meta box for posts matched below conditions
	//'include' => array('ID'  => array( 4 ),),
	// List of meta fields
	'fields' => array(

				 
					array(
						'name'  => esc_html__( 'Address:', 'your-prefix' ),
						'id'    => "{$prefix}{$slug}_address",
						//'desc'  => esc_html__( 'Enter the Email', 'your-prefix' ),
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => esc_html__( 'Suburb:', 'your-prefix' ),
						'id'    => "{$prefix}{$slug}_suburb",
						//'desc'  => esc_html__( 'Enter the Email', 'your-prefix' ),
						'type'  => 'text',
						'clone' => false,
					),
					 	
					 array(
						'name'  => esc_html__( 'City:', 'your-prefix' ),
						'id'    => "{$prefix}{$slug}_city",
						//'desc'  => esc_html__( 'Enter the Phone', 'your-prefix' ),
						'type'            => 'select',
						    // Array of 'value' => 'Label' pairs
						'options'         => $citylist,
					),
					
					  array(
						   'name'  => esc_html__( 'Contry:', 'your-prefix' ),
						   'id'    => "{$prefix}{$slug}_country",
						   //'desc'  => esc_html__( 'Select the Project status', 'your-prefix' ),
						    'type'            => 'select',
						    // Array of 'value' => 'Label' pairs
						    'options'         => $county_list,
						    // Allow to select multiple value?
						    'multiple'        => false,
						    // Placeholder text
						   // 'placeholder'     => 'Select an Item',
						    // Display "Select All / None" button?
						    'select_all_none' => true,
						 

						),
					  
					    array(
						'name'  => esc_html__( 'State or Province:', 'your-prefix' ),
						'id'    => "{$prefix}{$slug}_state",
						//'desc'  => esc_html__( 'Enter the Phone', 'your-prefix' ),
						'type'  => 'text',
						'clone' => false,
					),
					    array(
						'name'  => esc_html__( 'Postal Code:', 'your-prefix' ),
						'id'    => "{$prefix}{$slug}_postcode",
						//'desc'  => esc_html__( 'Enter the Phone', 'your-prefix' ),
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => esc_html__( 'Phone:', 'your-prefix' ),
						'id'    => "{$prefix}{$slug}_phone",
						//'desc'  => esc_html__( 'Enter the Phone', 'your-prefix' ),
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => esc_html__( 'Website:', 'your-prefix' ),
						'id'    => "{$prefix}{$slug}_website",
						//'desc'  => esc_html__( 'Enter the Phone', 'your-prefix' ),
						'type'  => 'text',
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
