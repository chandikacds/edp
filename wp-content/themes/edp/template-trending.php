<?php
/**
 * Template Name: Trending Page Template
 */
?>
<div class="container">
      <div class="row">
       
      	<?php 
        
    global $active_city, $post;
    $posttype = $active_city;
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $slides_num = get_option('posts_per_page');
    $trending = new WP_Query(
        array(
            'post_type' => $posttype,
            'posts_per_page' => $slides_num,
            'paged' => $paged,
            'meta_key' => '_is_featured',
            'meta_value' => 'yes',
            'orderby' => 'date',
            'order' => 'DESC'
        )
    );

        if ($trending->have_posts()) : ?>
      		 <?php 

				while ( $trending->have_posts() ) : $trending->the_post();
                 	echo '<div class="col-md-4 mb-5">';
                        get_template_part( 'templates/content', 'post' );
                     echo '</div>';  
                    endwhile; ?>

      	<?php else : ?>
         <p class="message">
                  <?php _e( 'Sorry, no posts were found', 'themetext' ); ?>
                </p>
        <?php endif;?>
    </div>
    <?php ti_pagination($trending); ?>
</div>