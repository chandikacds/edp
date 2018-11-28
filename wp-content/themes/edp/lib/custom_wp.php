<?php

//set defult COOKIE
$active_city = isset( $_COOKIE['USR_CITY'] ) ? $_COOKIE['USR_CITY'] : 'base_sydney';


/*filter category and tag posts according to city if a city is selected*/
add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
	global $active_city;
  if (!is_admin() &&(is_category() || is_tag() || is_archive() )) {
  //if ( !is_admin() && $query->is_home() ) {
  	if(isset($active_city))
  	{
  	   $usr_city = $active_city;
  	   $post_type = array('post', $usr_city,'nav_menu_item');
  	}
  	else {
  		$post_type = array('post', 'base_sydney','nav_menu_item');
  	}
  	//need to make an 'else' statement here to set the cookie in the begining
    $query->set('post_type',$post_type);
    $query->set( 'orderby', 'date' );
    $query->set( 'order', 'DESC' );
    return $query;
    }

    /* else if (!is_admin() && is_page_template( 'template-trending.php' ) ) {

     if(isset($active_city))
  	{
  	   $usr_city = $active_city;
  	   $post_type = array('post', $usr_city,'nav_menu_item');
  	}
  	else {
  		$post_type = array('post', 'base_sydney','nav_menu_item');
  	}
  	
    $query->set('post_type','base_sydney');
   // $query->set( 'meta_key', '_is_featured' );
    //$query->set( 'meta_value', 'yes' );
    $query->set( 'orderby', 'date' );
    $query->set( 'order', 'DESC' );
    return $query;

    } */
}


if ( ! function_exists( 'ti_pagination' ) ) :

function ti_pagination($postcustom=NULL) {

	global $post;

	if($postcustom){
		$GLOBALS['wp_query'] = $postcustom;
	}
	

	// Don't print empty markup if there's only one page.
	
		if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
				return;
			}


	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $GLOBALS['wp_query']->max_num_pages,
		'current'  => $paged,
		'mid_size' => 1,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => __( 'Previous', 'themetext' ),
		'next_text' => __( 'Next', 'themetext' ),
	) );

	if ( $links ) :

	?>
	<nav class="navigation paging-navigation" role="navigation">
		<div class="loop-pagination">
			<?php echo $links; ?>
		</div>
	</nav><!-- .navigation -->
	<?php
	endif;
}
endif;

//this is for populer post. this function call on single page

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);

    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);



?>