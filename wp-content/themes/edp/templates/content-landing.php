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
              <select class="form-control" name="" id="">
                 <option value="Sydney">Sydney</option>
               </select>
              <select class="form-control" name="" id="">
                 <option value="Sydney">Bondi Beach</option>
               </select>
              <select class="form-control" name="" id="">
                 <option value="Sydney">Restuarants</option>
               </select>
            </div>
          </form>

          <div class="listing mt-5">
            <span class="badge light">play</span>
            <h2>Name Place</h2>
            <small>00 Darlignton Street,Bondi Beach, NSw <br>Discription 0040</small>
          </div>
        </div>
        <div class="col-md-7">
          <div class="g-map">

          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
//Secret Foodies
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

      <div class="form-group">
        <input type="text" class="form-control" placeholder="INSERT YOUR EMAIL">
        <button class="btn btn-danger">subscribe</button>

      </div>
    </div>

  </section>