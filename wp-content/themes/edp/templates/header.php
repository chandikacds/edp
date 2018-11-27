<?php global $active_city; ?>
<header>
    <div class="container">
      <nav class="navbar navbar-expand-md pr-0">

        <div class="navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a <?php echo ($active_city == 'base_sydney') ? "class='nav-link active'" : "class='nav-link'"; ?> href="" id="base_sydney"><span class="view">Sydney</span><span class="mobi-hide">Syd</span></a>
             
            </li>
            <li class="nav-item">
              <a <?php echo ($active_city == 'base_melbourne') ? "class='nav-link active'" : "class='nav-link'"; ?> id="base_melbourne" href=""><span class="view">Melbourne</span><span class="mobi-hide">MEL</span></a>
            </li>


          </ul>
           

          <form class="form-inline my-2 my-lg-0" role="search" method="get" class="searchform group" action="<?php echo home_url( '/' ); ?>">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
            <button class="btn btn-primary" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/search.svg" alt=""></button>
          </form>
          <ul class="navbar-nav social">
            <li class="nav-item">
              <a class="nav-link active" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fb.svg" alt=""></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.svg" alt=""></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/you.svg" alt=""></a>
            </li>


          </ul>
        </div>
      </nav>
    </div>

  </header>
  <section class="home-slider">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12 pr-0 p0-mobi">
          <aside class="d-flex pt-3">
            <nav class="navbar navbar-expand-md flex-column align-items-start">
              <a href="<?php echo home_url(); ?>" ><img class="logo img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/EatDrinkPlay.png" alt=""> </a>
              <button class="navbar-toggler pl-0" type="button" data-toggle="collapse" data-target="#primary-nav" aria-controls="primary-nav"
                aria-expanded="false" aria-label="Toggle navigation">
             <img class="toggler" src="<?php echo get_template_directory_uri(); ?>/assets/img/menu.svg" />
           </button>
              <img class="logo-mobi" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-mobi.jpg" alt="">

              <div class="collapse navbar-collapse flex-column align-items-start" id="primary-nav">

            <?php
              if (has_nav_menu('main_menu')) :
                wp_nav_menu(['theme_location' => 'main_menu', 'menu_class' => 'navbar-nav flex-column']);
              endif;
              ?>
              <ul class="navbar-nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link" href=""><span class="sign">Ms Darlinghurst</span></a>
                  </li>

                </ul>
        </div>
            </nav>

          </aside>
        </div>
        <?php if(is_front_page()){ ?>

          <?php
    /** 
     * Home page soider
     * 
    **/
    //get from setting

    global $active_city;
    $posttype = $active_city;

    $slides_num = 3;
    $ti_posts_slider = new WP_Query(
        array(
            'post_type' => $posttype,
            'posts_per_page' => $slides_num,
            'meta_key' => 'baz_homepage_slider_add',
            'meta_value' => '1',
            'orderby' => 'date',
            'order' => 'DESC'
        )
    );
  // var_dump($ti_posts_slider);
    ?>


        <div class="col-md-8 col-lg-9  col-sm-12 p-0">
          <div class="pt-2 pr-2 slider-wrapper">
            <?php if ( $ti_posts_slider->have_posts() ) { ?>
            <div id="slider" class="flexslider">
              <ul class="slides">
          <?php while ( $ti_posts_slider->have_posts() ) : $ti_posts_slider->the_post(); ?>
                <li>
                  <!-- <img src="<?php //echo get_template_directory_uri(); ?>/assets/img/slide1.jpg" /> -->
                  <?php
                  the_post_thumbnail( 'edp-slider-mainimge' ); 

                  ?>
                  <div class="caption">
                    <a href="<?php the_permalink(); ?>" > <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg" /></a>
                    <?php 
                    $categories = get_the_category();
                    $catarray = array();
                    foreach ($categories as $key => $valuecat) {

                      $name = '<a href="'.home_url().'/category/'.$valuecat->slug.'" >'.$valuecat->name.'</a>';
                      echo '<span class="badge">'.$name.'</span>';
                    }

                   
                    ?>
                    
                    <h4><a href="<?php the_permalink(); ?>" class="title" ><?php the_title(); ?></a></h4>
                    <small><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="author" rel="author">
                                            <?php the_author_meta( 'display_name' ); ?>
                                        </a> | <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?></small>
                  </div>
                </li>
               <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>
                <!-- items mirrored twice, total of 12 -->
              </ul>
            </div>
           <?php } ?> 
            <div id="carousel" class="flexslider">
              <ul class="slides">
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.jpg" />
                  <div class="caption bottom">
                    <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg" />
                    <span class="badge">SECRET FOODIES</span>
                  </div>

                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide2.jpg" />
                  <div class="caption bottom">
                    <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg" />
                    <span class="badge">Eat</span>
                  </div>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide3.jpg" />
                  <div class="caption bottom">
                    <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg" />
                    <span class="badge">Drink</span>
                  </div>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide4.jpg" />
                  <div class="caption bottom">
                    <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" />
                    <span class="badge">play</span>
                  </div>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide5.jpg" />
                  <div class="caption bottom">
                    <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/eat.svg" />
                    <span class="badge">SECRET FOODIES</span>
                  </div>
                </li>

                <!-- items mirrored twice, total of 12 -->
              </ul>
            </div>

          </div>
        </div>
      <?php }else{ ?>

<div class="col-md-8 col-lg-9  col-sm-12 p-0">
                    <div class="pt-2 pr-2 slider-wrapper">
                        <div id="slider" class="flexslider">
                          <div class="singlepost_mainimg">
                         <?php
                          the_post_thumbnail( 'edp-slider-mainimge' ); 

                          ?>
                          </div>       
                                
                        </div>

                    </div>
                </div>

     <?php } ?>
      </div>

    </div>
  </section>
  <?php if(!is_front_page() && !is_archive()){ ?>
  <section class="review pt-5">
  <div class="container">
    <div class="row">
                <div class="col-md-12">
                    <h1 class="text-left mb-4">
                      <?php if(is_search()){
                        echo 'SEARCH RESULTS FOR: "'.$_REQUEST['s'].' "';
                      }else{
                        the_title();
                      }

                      ?>
                    </h1>
                </div>

                
            </div>
  </div>
  <?php } ?>