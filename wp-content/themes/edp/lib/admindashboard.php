<?php
//get all venue details

function get_venu_info(){
$post_id = $_REQUEST['datastr'];

$out_put = array();
$out_put['rw_venue_address'] = rwmb_meta( 'rw_venue_address',  'type=text', $post_id );
$out_put['rw_venue_city'] = rwmb_meta( 'rw_venue_city',  'type=text', $post_id );
$out_put['rw_venue_suburb'] = rwmb_meta( 'rw_venue_suburb',  'type=text', $post_id );
$out_put['rw_venue_state'] = rwmb_meta( 'rw_venue_state',  'type=text', $post_id );
$out_put['rw_venue_postcode'] = rwmb_meta( 'rw_venue_postcode',  'type=text', $post_id );
$out_put['rw_venue_phone'] = rwmb_meta( 'rw_venue_phone',  'type=text', $post_id );
$out_put['rw_venue_website'] = rwmb_meta( 'rw_venue_website',  'type=text', $post_id );
echo json_encode($out_put);

die();

}

add_action( 'wp_ajax_get_venu_info', 'get_venu_info' );

if(isset($_POST["post_type"])){
if($_POST["post_type"] == 'base_melbourne' || $_POST["post_type"] == 'base_sydney'){


if(!empty($_POST["rw_venue_newname"])){

  global $current_user;

  $post_id = $_POST["post_ID"];
  $rw_venue_address = $_POST["rw_venue_address"];
  $rw_venue_city = $_POST["rw_venue_city"];
  $rw_venue_suburb = $_POST["rw_venue_suburb"];
  $rw_venue_postcode = $_POST["rw_venue_postcode"];
  $rw_venue_state = $_POST["rw_venue_state"];
  $rw_venue_phone = $_POST["rw_venue_phone"];
  $rw_venue_website = $_POST["rw_venue_website"];

$rw_venue_newname = rwmb_meta( 'rw_venue_newname',  'type=text', $post_id );

if($rw_venue_newname != $_POST["rw_venue_newname"]){

  $new_post = array(
    'post_title'    => $_POST["rw_venue_newname"],
    'post_content'  => "",
    'post_status'   => 'publish',
    'post_type'     => 'base_venue',
    'author'        =>  $current_user->ID
    );


     $pid=wp_insert_post($new_post);


     add_post_meta($post_id, 'rw_venue_name', $pid);
     add_post_meta($pid, 'rw_venue_suburb', $rw_venue_suburb );
     add_post_meta($pid, 'rw_venue_address', $rw_venue_address);
     add_post_meta($pid, 'rw_venue_city', $rw_venue_city);
     add_post_meta($pid, 'rw_venue_postcode', $rw_venue_postcode);
     add_post_meta($pid, 'rw_venue_state', $rw_venue_state);
     add_post_meta($pid, 'rw_venue_phone', $rw_venue_phone);
     add_post_meta($pid, 'rw_venue_website', $rw_venue_website);
 

   
}


}


}

}

?>