    <?php
 global $active_city;
    $posttype = $active_city;

    $slides_num = 3;
    $trending = new WP_Query(
        array(
            'post_type' => array($posttype),
            'posts_per_page' => $slides_num,
            'meta_key' => '_is_featured',
            'meta_value' => 'yes',
            'orderby' => 'date',
            'order' => 'DESC'
        )
    );



?>
    <?php if ( $trending->have_posts() ) { ?>

    <section class="trending mt-5">

    <div class="container">
<?php 
$countpost=1;
$total = $trending->post_count;

while ( $trending->have_posts() ) : $trending->the_post(); ?>

<?php if($countpost==1){ ?>
        <div class="row">
        <div class="col-md-12">
          <h3 class=" sub-heading pt-5 mb-4">Trending</h3>
        </div>
        <div class="col-md-5 align-items-end d-flex">
          <div class="post-title">
            <span class="badge danger">Play</span>
              <h2>"<a href="<?php the_permalink(); ?>" class="title text_overwrite_black" ><?php the_title(); ?></a>"</h2>
            <small><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="author text_overwrite_black" rel="author">
                                            <?php the_author_meta( 'display_name' ); ?>
                                        </a> | <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?></small>
          </div>
        </div>
        <div class="col-md-7">
          <div class="outer-div mb-4">
            <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg" />
            <div class="post food" style="background-image: url('<?php echo the_post_thumbnail_url('large'); ?>');">
              
            </div>
          </div>
        </div>

      </div>
<?php }else{ ?>

  

    <?php if($countpost==2){ ?>
      <div class="row mt-4">
        <div class="col-md-5">
          <?php  get_template_part( 'templates/content', 'post' ); ?>
        </div>
<?php } ?>
<?php if($countpost==3){ ?>
        <div class="col-md-7">
          <?php  get_template_part( 'templates/content', 'post_large' ); ?>
        </div>
       </div>
        <?php } ?>

        <?php if($total==2){ ?>
        </div>
        <?php } ?>
     

<?php } ?>

 <?php $countpost++; endwhile; ?>
      

      

      <div class="row">
        <div class="col-md-12 text-center mt-5 mb-5">
          <a href="<?php echo home_url().'/trending' ?>" class="btn btn-outline-secondary">View all</a>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<?php
//Essential Guides
    $_num = 6;
    $essential = new WP_Query(
        array(
            'post_type' => array($posttype),
            'posts_per_page' => $_num,
            'meta_key' => 'baz_essential_guide_add',
            'meta_value' => '1',
            'orderby' => 'date',
            'order' => 'DESC'
        )
    );
?>
<?php if ( $essential->have_posts() ) { ?>
  <section class="guid mt-5">

    <div class="container">

      <div class="row mt-4">
        <div class="col-md-12 mb-4">
          <h3 class=" sub-heading line pt-5">Essential Guides</h3>
        </div>
     </div>

      <div class="row mt-5">
<?php while ( $essential->have_posts() ) : $essential->the_post(); ?>
         <div class="col-md-4 mb-5">
            <?php  get_template_part( 'templates/content', 'post' ); ?>
        </div>

       <?php endwhile; ?>
       
      </div>

      <div class="row">
        <div class="col-md-12 text-center mt-5 mb-5">
         <a href="<?php echo home_url().'/essential-guides' ?>" class="btn btn-outline-secondary">View all</a>
        </div>
      </div>
    </div>
  </section>

<?php } ?>

  <section class="latest-news mt-5">

    <div class="container">

      <div class="row mt-4 ">
        <div class="col-md-12">
          <h3 class=" sub-heading line pt-5 mb-4">latest news</h3>
        </div>
      </div>
        <?php
               $maxpost = 5;
                $recent_posts = new WP_Query(
                    array(
                        'post_type' => array($posttype, 'post'),
                        'posts_per_page' => $maxpost,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    )
                );

            ?>
        <?php if ( $recent_posts->have_posts() ) { ?>

         <?php 
         $recent_key = 0;
         while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
            <?php if($recent_key==0){ ?>
                    <div class="row mt-4">
                      <div class="col-md-5">
                        <?php  get_template_part( 'templates/content', 'post' ); ?>
                      </div>
              <?php } ?>
              <?php if($recent_key==1){ ?>
                      <div class="col-md-7">
                        <?php  get_template_part( 'templates/content', 'post_large' ); ?>
                      </div>
                  </div>
                      <?php } ?>

                      <?php if($recent_key==2){ ?>
                    <div class="row mt-4">
                      <div class="col-md-4">
                        <?php  get_template_part( 'templates/content', 'post' ); ?>
                      </div>
              <?php } ?>
              <?php if($recent_key==3){ ?>
                      <div class="col-md-4">
                        <?php  get_template_part( 'templates/content', 'post_large' ); ?>
                      </div>
                  
                      <?php } ?>
                      <?php if($recent_key==4){ ?>
                      <div class="col-md-4">
                        <?php  get_template_part( 'templates/content', 'post_large' ); ?>
                      </div>
                  </div>
                      <?php } ?>


                     <?php $recent_key++; endwhile; 


}
                     ?>
                    

          

      

      

      <div class="row">
        <div class="col-md-12 text-center mt-5 mb-5">
          <a href="<?php echo home_url().'/latest-news' ?>" class="btn btn-outline-secondary">View all</a>
        </div>
      </div>
    </div>
  </section>

  <section class="map">
    <div class="container">

<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>

  
    <script>
    jQuery( document ).ready(function() {
        var map;
        var bounds
        var locationCount;
        var infoWindow = null;
        // The array of locations to mark on the map.
        // Add as many locations as necessary.
        
        // Init the map
        function init(locations) {
            // Customize look of the map.
            // https://www.mapbuildr.com/
            var mapOptions = {
                zoom: 14,
                zoomControl: true,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.SMALL,
                },
                disableDoubleClickZoom: true,
                mapTypeControl: false,
                panControl: false,
                scaleControl: false,
                scrollwheel: false,
                streetViewControl: false,
                draggable : true,
                overviewMapControl: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [{
                    featureType: 'all',
                    stylers: [
                        {saturation: -100},
                        {gamma: 0.50}
                    ]
                }]
            }
            var mapElement = document.getElementById('map');
            map = new google.maps.Map(mapElement, mapOptions);
            // OPTIONAL: Set listener to tell when map is idle
            // Can be useful during dev
            google.maps.event.addListener(map, "idle", function(){
                // console.log("map is idle");
            });
            var geocoder = new google.maps.Geocoder();
            bounds = new google.maps.LatLngBounds();
            locationCount = 0;
            // Init InfoWindow and leave it
            // for use when user clicks marker
            infoWindow = new google.maps.InfoWindow( { content: "Loading content..." } );
            // Loop through locations and set markers
            for (i = 0; i < locations.length; i++) {

              //show postdata
              locationsdata = locations[i];

              //var category_slug = locationsdata.category_slug;
              //var category_slug = category_slug.split(',');

              var postdiv = '<div class="listing mt-5">'+locationsdata.cat_html+'<h2><a href="'+locationsdata.posturl+'" target="_blank" class="text_overblue_pink" >'+locationsdata.placename+'</a></h2><small address="marker'+i+'" class="show_me_in_map" style="cursor: url('+locationsdata.iconlink+'), auto;">'+locationsdata.address+'</small></div>';
              jQuery("#locatioposts").append(postdiv);


                
                var address = locationsdata.address;
                //Get latitude and longitude from address
                geocoder.geocode( {'address': address}, onGeocodeComplete(i,locations));
            }
            // Re-center map on window resize
            google.maps.event.addDomListener(window, 'resize', function() {
                var center = map.getCenter();
                google.maps.event.trigger(map, "resize");
                map.setCenter(center);
            });
        } // END init()
        // Triggered as the geocode callback
        function onGeocodeComplete(i,locations) {
          //alert(i);
            // Callback function for geocode on response from Google.
            // We wrap it in 'onGeocodeComplete' so we can send the
            // location index through to the marker to establish
            // content.
            var geocodeCallBack = function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    // The HTML content for the InfoWindow.
                    // Includes a form to allow the user to
                    // get directions.
                    postdate = locations[i];
                    var windowContent = '<div style="max-width: 200px" class="info_content">' + '<a href="'+postdate.posturl+'" class="text_overblue_pink" target="_blank" ><h6>'+postdate.eventtitle+'</h6></a>' + '<p><a href="'+postdate.posturl+'" ><img style="width: 100%" src="'+postdate.image_thumb+'" ></a></p><p>'+postdate.address+'</p>' + '</div>';

                    // Create the marker for the location
                    // We use 'html' key to attach the
                    // InfoWindow content to the marker.
                    var marker = new google.maps.Marker({
                        icon: postdate.iconlink,
                        position: results[0].geometry.location,
                        map: map,
                        html: windowContent,
                        animation: google.maps.Animation.DROP,
                        title: 'marker'+i
                    });
                    // Set event to display the InfoWindow anchored
                    // to the marker when the marker is clicked.
                    google.maps.event.addListener( marker, 'click', function() {
                        // Updates the InfoWindow content with
                        // the HTML held in the marker ('this').
                        infoWindow.setContent(this.html);
                        infoWindow.open(map, this);
                    });
                    // Add this marker to the map bounds
                    extendBounds(results[0].geometry.location, locations );
                } else {
                    console.log('Location geocoding has failed: ' + google.maps.GeocoderStatus);
                }
            } // END geocodeCallBack()
            return geocodeCallBack;
        } // END onGeocodeComplete()
        // Establishes the bounds for all the markers
        // then centers and zooms the map to show all.
        function extendBounds(latlng, locations) {
            ++locationCount;
            bounds.extend(latlng);
            if (locationCount == locations.length) {
                map.fitBounds(bounds);
            }
        } // END extendBounds()
        
        

//after chnage
        jQuery('body').delegate('.search_sub_show_result', 'click', function(){

       // 
       jQuery("#locatioposts").html("");
       var maintag = jQuery("#maintag").val();
       var suburb = jQuery("#suburb").val();

          var  method ="post";
          var  url ="loadMapData";
           jQuery.ajax({
                  type: method,
                  url: ajaxurl,
                  data: {
                    'action':url,
                    'maintag': maintag,
                    'suburb': suburb

                  },
                  success:function(response) {
                    var post_obj = JSON.parse(response);
                  
                    jQuery("#locatioposts").html("");
                    init(post_obj);

                  },
                  error: function(errorThrown){
                      console.log(errorThrown);
                  }
                });
        

      });

        
    }); // END $(window).load
</script>
 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLlSGvx3MwtTjoeWbNdCjnRV5rEfWssCs&sensor=false&extension=.js"></script>


      <div class="row">
        <div class="col-md-12">
          <div class="ad mt-5 mb-5">

          </div>
        </div>

        <div class="col-md-5">
          <h2 class="mb-4">Directory Selection We can use this space to create a little!
</h2>
          <form action="">
            <div class="form-group">
              <!-- <select class="form-control" name="" id="">
                 <option value="Sydney">Sydney</option>
               </select> -->
                <?php
                 global $maintags;
                 

                 $suburblist = loadsuburb();
                 
                ?>
               
              <select class="form-control" name="maintag" id="maintag">
                <?php foreach ($maintags as $keytag => $valuetag) {
                   echo '<option value="'.$keytag.'">'.$valuetag.'</option>';
                 } ?>
                 </select>
              <select class="form-control" name="suburb" id="suburb">
                 <?php
                  foreach ($suburblist as $keysuburb => $valuesuburb) {
                   echo '<option value="'.$keysuburb.'">'.$valuesuburb.'</option>';
                 }
                 ?>
               </select>
               <button class="btn btn-outline-secondary search_sub_show_result" type="button">Search</button> 
            </div>
          </form>
          <div id="locatioposts">
            
          </div>
          
        </div>
        <div class="col-md-7">
           <div id="map"></div>
        </div>
      </div>
    </div>
  </section>

  <?php
//Secret Foodies//
    $_num = 3;
    $secret = new WP_Query(
        array(
            'post_type' => array($posttype),
            'posts_per_page' => $_num,
            'meta_key' => 'baz_secret_foodies_add',
            'meta_value' => '1',
            'orderby' => 'date',
            'order' => 'DESC'
        )
    );
?>
<?php if ( $secret->have_posts() ) { ?>
  <section class="guid mt-5">

    <div class="container">

      <div class="row mt-4">
        <div class="col-md-12">
          <h3 class=" sub-heading line pt-5">Secret Foodies</h3>
        </div>

      </div>

      <div class="row mt-4">
        <div class="col-md-12">
          <div class="post plan mb-4">
            <a href="<?php echo home_url().'/secret-foodies' ?>" class="btn btn-outline-white">View all</a>
          </div>
        </div>
        <?php while ( $secret->have_posts() ) : $secret->the_post(); ?>
        <div class="col-md-4">
            <?php  get_template_part( 'templates/content', 'post' ); ?>
        </div>
        <?php endwhile; ?>
        
      </div>

    </div>
  </section>
<?php } ?>
  <section class="insta">

    <div class="container">

      <div class="row mt-4">
        <div class="col-md-12">
          <h3 class=" sub-heading line pt-5">Instagram</h3>
        </div>

      </div>

      
       <?php dynamic_sidebar('sidebar-footer'); ?>
    
    </div>

  </section>


  <section class="newsletter p-5 mt-4">

    <div class="container">

      <h1 class="pt-5">Newsletter</h1>
      <p>Discover and Enjoy New Places</p>

      <?php echo do_shortcode('[mc4wp_form id="35847"]'); ?>
    </div>

  </section>