 <div class="mega-wrapper">
                <ul class="">
<?php 

$menu_name = 'main_menu';

if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {

    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

    $menu_items = wp_get_nav_menu_items($menu->term_id);

        $numofperant = 0;
        foreach ( (array) $menu_items as $key => $menu_item ) {



          if($numofperant == 0){ ?>


            <li class="post-nav-link has-menu">
                    <div class="menu-tile">
                      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.jpg">
                      <div class="caption bottom">
                        <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg">
                        <span class="badge"><?php echo $menu_item->title; ?></span>
                      </div>
                    </div>


         <?php }else if($menu_item->menu_item_parent == 0){ 

                 if($numofperant == 3){

                    echo '</li>';
                    brake; 
                    
                  }else{
                    if($numofperant < 3){
          ?>


                </li>
                <li class="post-nav-link has-menu">
                    <div class="menu-tile">
                      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.jpg">
                      <div class="caption bottom">
                        <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg">
                        <span class="badge"><?php echo $menu_item->title; ?></span>
                      </div>
                    </div>
        <?php }} } else{ ?>

                <ul class="m-dropdown-menu row">

                      <li class="col-md-3">
                        <ul class="links">

                          <li><a href="#">Cafes</a></li>
                          <li><a href="#">Restaurants</a></li>
                          <li><a href="#">Pubs</a></li>
                          <li><a href="#">Cafes</a></li>
                          <li><a href="#">Restaurants</a></li>
                          <li><a href="#">Pubs</a></li>
                        </ul>
                      </li>

                      <li class="col-md-3">
                        <div class="outer-div mb-4">
                          <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg">
                          <div class="post travel">


                          </div>
                        </div>
                        <div class="post-title">
                          <span class="badge danger">Travel</span>
                          <h4>"Lorem ipsum dolor sit amet, consectetur"</h4>
                          <small>kaddy oconner | 5 mints ago</small>
                        </div>
                      </li>
                      <li class="col-md-3">
                        <div class="outer-div mb-4">
                          <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg">
                          <div class="post drink">


                          </div>
                        </div>
                        <div class="post-title">
                          <span class="badge danger">Travel</span>
                          <h4>"Lorem ipsum dolor sit amet, consectetur"</h4>
                          <small>kaddy oconner | 5 mints ago</small>
                        </div>
                      </li>
                      <li class="col-md-3">
                        <div class="outer-div mb-4">
                          <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg">
                          <div class="post travel">


                          </div>
                        </div>
                        <div class="post-title">
                          <span class="badge danger">Travel</span>
                          <h4>"Lorem ipsum dolor sit amet, consectetur"</h4>
                          <small>kaddy oconner | 5 mints ago</small>
                        </div>
                      </li>
                    </ul>

       <?php  }

       if($menu_item->menu_item_parent == 0){ 
                  
          $numofperant++;  

          }

       


          //var_dump($menu_item->menu_item_parent);

           // $title = $menu_item->title;
            //$url = $menu_item->url;
            //$menu_list .= '<li><a href="#' . $url . '">' . $title . '</a></li>';
        }
      }


//echo $menu_list;
?>

                      
                  <li class="post-nav-link">
                    <div class="menu-tile">
                      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide4.jpg">
                      <div class="caption bottom">
                        <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg">
                        <span class="badge">Travel</span>
                      </div>
                    </div>
                  </li>


                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>