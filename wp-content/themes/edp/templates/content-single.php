<?php while (have_posts()) : the_post(); ?>
 
<?php get_template_part('templates/entry-meta'); ?>
<div class="post-review">
            
                        <div class="post-body">
                           <!-- <div class="outer-div mb-4">
                                <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg">
                                <div class="post travel">
                                  

                                </div>
                            </div> -->
                               <?php the_content(); ?>
                        </div>
                    </div>
<?php endwhile; ?>