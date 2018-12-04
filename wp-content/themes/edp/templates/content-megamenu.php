<?php 
global $active_city;
$menu_name = 'main_menu';

if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {

    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

    $menu_items = wp_get_nav_menu_items($menu->term_id);

        $numofperant = 0;
        $parentid = '';
        $array1 = array();
        $array2 = array();
        $array3 = array();
        foreach ( (array) $menu_items as $key => $menu_item ) {
        if($menu_item->menu_item_parent == 0){ 
            $numofperant++;
               
          // $numofperant++;
          //var_dump($menu_item->ID);

           // $title = $menu_item->title;
            //$url = $menu_item->url;
            //$menu_list .= '<li><a href="#' . $url . '">' . $title . '</a></li>';
        }
        if($numofperant <= 1){
            $array1[] = $menu_item;
          }
        if($numofperant == 2){
            $array2[] = $menu_item;
          }
          if($numofperant == 3){
            $array3[] = $menu_item;
          }


      }

      
        
      
}

//echo $menu_list;
?>
 <div class="mega-wrapper">
                <ul class="">
                  <li class="post-nav-link has-menu">
                    <div class="menu-tile">
                      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.jpg">
                      <a href="<?php echo $array1[0]->url; ?>" ><div class="caption bottom">
                        <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg">
                        <span class="badge text_overwrite_black"><?php echo $array1[0]->title; ?></span>
                      </div></a>
                    </div>

                    <ul class="m-dropdown-menu row">

                      <li class="col-md-3">
                        <ul class="links">
                          <?php
                            foreach ($array1 as $key1 => $value1) {
                              if($value1->menu_item_parent != 0){ 
                              echo '<li><a href="'.$value1->url.'">'.$value1->title.'</a></li>';
                               }else{
                                $cat1=$value1->ID;
                               }
                            }
                           ?>                          
                        
                        </ul>
                      </li>

                      <?php
                        $posttype = $active_city;
                          
                            $eat = new WP_Query(
                                array(
                                    'post_type' => array($posttype),
                                    'posts_per_page' => 3,
                                    'cat' => 5,
                                    'orderby' => 'date',
                                    'order' => 'DESC'
                                )
                            );
                      ?>
                      <?php while ( $eat->have_posts() ) : $eat->the_post(); ?>
                      <li class="col-md-3">
                        <?php get_template_part( 'templates/content', 'post_menu' ); ?>
                      </li>
                      <?php endwhile; ?>
                    </ul>

                  </li>
                  <li class="post-nav-link has-menu">
                    <div class="menu-tile">
                      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide2.jpg">
                      <a href="<?php echo $array2[0]->url; ?>" ><div class="caption bottom">
                        <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg">
                        <span class="badge text_overwrite_black"><?php echo $array2[0]->title; ?></span>
                      </div></a>
                    </div>
                    <ul class="m-dropdown-menu row">

                      <li class="col-md-3">
                        <ul class="links">
                          <?php
                            foreach ($array2 as $key2 => $value2) {
                              if($value2->menu_item_parent != 0){ 
                              echo '<li><a href="'.$value2->url.'">'.$value2->title.'</a></li>';
                               }else{
                                $cat2=$value2->ID;
                               }
                            }
                           ?>                          
                        
                        </ul>
                      </li>

                      <?php
                        $posttype = $active_city;
                          
                            $drink = new WP_Query(
                                array(
                                    'post_type' => array($posttype),
                                    'posts_per_page' => 3,
                                    'cat' => 4,
                                    'orderby' => 'date',
                                    'order' => 'DESC'
                                )
                            );
                      ?>
                      <?php while ( $drink->have_posts() ) : $drink->the_post(); ?>
                      <li class="col-md-3">
                        <?php get_template_part( 'templates/content', 'post_menu' ); ?>
                      </li>
                      <?php endwhile; ?>
                    </ul>
                  </li>
                  <li class="post-nav-link has-menu">
                    <div class="menu-tile">
                      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide3.jpg">
                      <a href="<?php echo $array3[0]->url; ?>" ><div class="caption bottom">
                        <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg">
                        <span class="badge text_overwrite_black"><?php echo $array3[0]->title; ?></span>
                      </div></a>
                    </div>
                     <ul class="m-dropdown-menu row">

                      <li class="col-md-3">
                        <ul class="links">
                          <?php
                            foreach ($array3 as $key3 => $value3) {
                              if($value3->menu_item_parent != 0){ 
                              echo '<li><a href="'.$value3->url.'">'.$value3->title.'</a></li>';
                               }else{
                                $cat3=$value3->ID;
                               }
                            }
                           ?>                          
                        
                        </ul>
                      </li>

                      <?php
                        $posttype = $active_city;
                          
                            $play = new WP_Query(
                                array(
                                    'post_type' => array($posttype),
                                    'posts_per_page' => 3,
                                    'cat' => 24,
                                    'orderby' => 'date',
                                    'order' => 'DESC'
                                )
                            );
                      ?>
                      <?php while ( $play->have_posts() ) : $play->the_post(); ?>
                      <li class="col-md-3">
                        <?php get_template_part( 'templates/content', 'post_menu' ); ?>
                      </li>
                      <?php endwhile; ?>
                    </ul>
                  </li>
                  <li class="post-nav-link">
                    <div class="menu-tile">
                      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide4.jpg">
                      <a href="<?php echo home_url(); ?>/category/play/travel/" ><div class="caption bottom">
                        <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg">
                        <span class="badge text_overwrite_black">Travel</span>
                      </div>
                    </a>
                    </div>
                  </li>


                  <!-- items mirrored twice, total of 12 -->
                </ul>
              </div>