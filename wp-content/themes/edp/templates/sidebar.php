<?php //dynamic_sidebar('sidebar-primary'); ?>
                          

<?php 

      $post_id = get_the_ID();

       // $rw_venue_id = rwmb_meta( 'rw_venue_name',  'type=text', $post_id );
        $new_venue_id = get_post_meta($post_id, 'rw_venue_name');
        $rw_venue_id = $new_venue_id[0];

        if(isset($rw_venue_id)){

      ?>
  <div class="listing mb-4">
                        <?php  echo '<h2>'.get_the_title($rw_venue_id).'</h2>'; ?>
                        <p>
        <?php
$rw_venue_address = rwmb_meta( 'rw_venue_address',  'type=text', $rw_venue_id );
if(!empty($rw_venue_address)){
echo $rw_venue_address;
}
$rw_venue_city = rwmb_meta( 'rw_venue_city',  'type=text', $rw_venue_id );
if(!empty($rw_venue_city)){
echo '<br>'.$rw_venue_city;
}

$rw_venue_postcode = rwmb_meta( 'rw_venue_postcode',  'type=text', $rw_venue_id );
if(!empty($rw_venue_postcode)){
echo '<br>'.$rw_venue_postcode;
}

$rw_venue_state = rwmb_meta( 'rw_venue_state',  'type=text', $rw_venue_id );
if(!empty($rw_venue_state)){
echo '<br>'.$rw_venue_state;
}

                        ?>
                        </p>
<?php  $rw_venue_phone = rwmb_meta( 'rw_venue_phone',  'type=text', $rw_venue_id );
           if(!empty($rw_venue_phone)){
            echo '<h6>Contact</h6><p>'.$rw_venue_phone.'</p>';
           }

           $rw_venue_website = rwmb_meta( 'rw_venue_website',  'type=text', $rw_venue_id );
           if(!empty($rw_venue_website)){
            echo '<p><a href="'.$rw_venue_website.'" target="_blank">'.$rw_venue_website.'</a></p>';
           }

           ?>
            
            <?php
                 $group_values = rwmb_meta( 'ph_id' );

        if(!empty($group_values)){
           echo '<h6>Opening Hours</h6>';
          // echo '<div class="widget">';
           
            foreach ($group_values as $group_value) {
                        echo '<p><span>'.$group_value["field_prefix_opening_hours_name"].'</span><span  style="float: right;"> - '.$group_value["field_prefix_opening_hours_to_time"].'</span><span style="float: right;">'.$group_value["field_prefix_opening_hours_from_time"].'</span></p>';
                        }

                        //echo '</div>';
        }
            ?>  
            <h6>Has This Venue Closed?</h6>
            <button class="btn btn-outline-secondary mt-2">Let Us Know</button>        
                      

                        

                        
    </div>

   <?php
         if(!empty($rw_venue_address)){
              echo '<div class="g-map">';
           echo '<iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q='.$rw_venue_address.'&output=embed"></iframe>';

           echo "</div>";
           }
   ?>
<?php
         //The Details

        $group_values_td = rwmb_meta( 'td_id' );
    //var_dump( $group_values_td);
        if(!empty($group_values_td)){
     
            echo '<h6> The Details</h6>';
            foreach ($group_values_td as $group_value) {
               echo '<div class="widget mt-5">';
              echo '<h4>'.$group_value["field_prefix_the_details_heading"].'</h4>';

              
              foreach ($group_value["field_prefix_the_details_text"] as $key => $value) {
                echo '<p><a href="'.$group_value["field_prefix_the_details_url"][$key].'" >'.$value.'</a></p>';
              }
              //var_dump($group_value);
                      /*  echo '<p><span>'.$group_value["field_prefix_opening_hours_name"].'</span><span  style="float: right;"> - '.$group_value["field_prefix_opening_hours_to_time"].'</span><span style="float: right;">'.$group_value["field_prefix_opening_hours_from_time"].'</span></p>';

                        */

                      echo '</div>';
                        }

                        
        }
        ?>


<?php } ?>


                    <div class="popular-posts">
                        <h6>Popular posts</h6>

                        <div class="row">
                            <div class="col-md-5 pr-md-0">
                                <div class="outer-div mb-4">
                                    <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg">

                                    <div class="post food"></div>
                                </div>
                            </div>
                            <div class="col-md-7 pr-md-0">
                                <div class="post-title">
                                    <span class="badge danger">Travel</span>
                                    <h2>Lorem ipsum dolor sit amet, consectetur</h2>
                                    <small>kaddy oconner | 5 min ago</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5 pr-md-0">
                                <div class="outer-div mb-4">
                                    <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg">

                                    <div class="post food"></div>
                                </div>
                            </div>
                            <div class="col-md-7 pr-md-0">
                                <div class="post-title">
                                    <span class="badge danger">Travel</span>
                                    <h2>Lorem ipsum dolor sit amet, consectetur</h2>
                                    <small>kaddy oconner | 5 min ago</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5 pr-md-0">
                                <div class="outer-div mb-4">
                                    <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg">

                                    <div class="post drink"></div>
                                </div>
                            </div>
                            <div class="col-md-7 pr-md-0">
                                <div class="post-title">
                                    <span class="badge danger">Travel</span>
                                    <h2>Lorem ipsum dolor sit amet, consectetur</h2>
                                    <small>kaddy oconner | 5 min ago</small>
                                </div>
                            </div>
                        </div>




                    </div>

                    <img class="img-fluid mt-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.jpg">

