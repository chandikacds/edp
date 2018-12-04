<?php
add_action('wp_head', 'myplugin_ajaxurl');

function myplugin_ajaxurl() {

   echo '<script type="text/javascript">
           var ajaxurl = "' . admin_url('admin-ajax.php') . '";
         </script>';
}


//for google map

$maintags = array('cafes'=>'Cafes','restaurants'=>'Restaurants','bars'=>'Bars','pubs'=>'Pubs','cool-sht'=>'Cool Sht','music-festivals'=>'Music Festivals');

function loadsuburb(){
  global $active_city;

    if( $active_city == 'base_sydney'){
        $loadcity = 'Sydney';
    }else{
      $loadcity = 'Melbourne';
    }


    $suburblist = new WP_Query(
        array(
            'post_type' => array($active_city),
            'posts_per_page' => -1,
            'meta_query' => array(
				    array(
				        'key' => 'rw_venue_suburb',
				        'value'   => array(''),
				        'compare' => 'NOT IN'
				    )
				),
            'orderby' => 'title',
            'order' => 'ASC'
        )
    );
$suburbary = array();
$suburbary[""]="Select";
while ( $suburblist->have_posts() ) : $suburblist->the_post();
  //var_dump(get_the_ID());
  $pid = get_the_ID();
  $suburb=get_post_meta($pid, 'rw_venue_suburb', true);

    if(!empty($suburb)){
    	if(!isset($suburbary[$suburb])){
    		$suburbary[$suburb] = $suburb;
    	}

      
    }
  endwhile;
    return $suburbary;


}

function loadMapData(){
	global $active_city;
	$suburb = $_POST['suburb'];
	$tax_slug = $_POST['maintag'];

	if($tax_slug == 'cafes'){
		$icon = 'https://www.sitchu.com.au/static/cms/img/map-markers/cafe.svg';
	}else if($tax_slug == 'restaurants'){
		$icon = 'https://www.sitchu.com.au/static/cms/img/map-markers/restaurant.svg';
	}else if($tax_slug == 'bars'){
		$icon = 'https://www.sitchu.com.au/static/cms/img/map-markers/bars-pubs-clubs.svg';
	}else if($tax_slug == 'pubs'){
		$icon = 'https://www.sitchu.com.au/static/cms/img/map-markers/bars-pubs-clubs.svg';
	}else if($tax_slug == 'cool-sht'){
		$icon = 'https://www.sitchu.com.au/static/cms/img/map-markers/quick-bites.svg';
	}else if($tax_slug == 'music-festivals'){
		$icon = 'https://www.sitchu.com.au/static/cms/img/map-markers/cafe.svg';
	}else{
		$icon = 'https://www.sitchu.com.au/static/cms/img/map-markers/cafe.svg';
	}
	//https://www.sitchu.com.au/static/cms/img/map-markers/quick-bites.svg
	//rw_venue_name_id
//get all venue list
if(!empty($suburb)){
	 $postblist = new WP_Query(
        array(
            'post_type' => array($active_city),
            'posts_per_page' => -1,
             'meta_key' => 'rw_venue_suburb',
             'tax_query' => array(
		        array(
		            'taxonomy' => 'category',
		            'field' => 'slug',
		            'terms' => $tax_slug
		        )
		     ),
             'meta_value' => $suburb,
           /* 'meta_query' => array(
				    array(
				        'key' => 'rw_venue_suburb',
				        'value'   => $suburb,
				        'compare' => 'LIKE'
				    )
				), */
			'status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC'
        )
    );
}else{
	 $postblist = new WP_Query(
        array(
            'post_type' => array($active_city),
            'posts_per_page' => -1,
             'tax_query' => array(
		        array(
		            'taxonomy' => 'category',
		            'field' => 'slug',
		            'terms' => $tax_slug
		        )
		     ),
		     'meta_query' => array(
				    array(
				        'key' => 'rw_venue_name',
				        'value'   => array(''),
				        'compare' => 'NOT IN'
				    )
				),
            
			'status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC'
        )
    );
}
	
			

$listofpost = array();	
while ( $postblist->have_posts() ) : $postblist->the_post();
 // var_dump(get_the_ID());
	$pid = get_the_ID();

	$categories = get_the_category($pid);
    $catarray = array();
    $slug = array();
    $name = array();
    $cat_html = '';
    foreach ($categories as $key => $valuecat) {
    	$slug[] = $valuecat->slug;
    	$name[] = $valuecat->name;
    	$cat_html .= '<a href="'.home_url().'/category/'.$valuecat->slug.'"><span class="badge light mr-1">'.$valuecat->name.'</span></a>';
    }

    $new_venue_id = get_post_meta($pid, 'rw_venue_name', ture);
    $rw_venue_address = get_post_meta($new_venue_id, 'rw_venue_address', ture);
    $rw_venue_suburb = get_post_meta($new_venue_id, 'rw_venue_suburb', ture);
    $locatinname = get_the_title($new_venue_id);
	
	if(!empty($rw_venue_address)){
		$singlerecord = array();
	$singlerecord['pid'] = $pid;
	$singlerecord['posturl'] = get_the_permalink($pid);
	$singlerecord['eventtitle'] = get_the_title($pid);
	$singlerecord['image_thumb'] = get_the_post_thumbnail_url($pid, 'thumbnail');
	$singlerecord['image_mid'] = get_the_post_thumbnail_url($pid, 'medium');;
	$singlerecord['image_full'] = get_the_post_thumbnail_url($pid, 'full');;
	$singlerecord['authorurl'] = get_author_posts_url( get_the_author_meta($pid, 'ID' ) );
	$singlerecord['authorname'] = get_the_author_meta( $pid, 'display_name' );
	$singlerecord['placename'] = $locatinname;
	$singlerecord['address'] = $rw_venue_address;
	$singlerecord['suburb'] = $rw_venue_suburb;
	$singlerecord['iconlink'] = $icon;
	$singlerecord['category_slug'] = implode(',', $slug);
	$singlerecord['category_name'] = implode(',', $name);
	$singlerecord['cat_html'] = $cat_html;
  
	$listofpost[] = $singlerecord;
	}
	

   
  endwhile;

echo json_encode($listofpost);

	die();
}


add_action( 'wp_ajax_loadMapData', 'loadMapData' );
//if not for login user
add_action('wp_ajax_nopriv_loadMapData', 'loadMapData');

?>