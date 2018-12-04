 <div class="outer-div mb-4">
                          <img class="ico" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg">
                          <a href="<?php the_permalink(); ?>" ><div class="post travel" style="background-image: url('<?php echo the_post_thumbnail_url('thumbnail'); ?>');">


                          </div></a>
                        </div>
                        <div class="post-title">
                           <?php $categories = get_the_category();
                                      $catarray = array();
                                      foreach ($categories as $key => $valuecat) {

                                        $name = '<a href="'.home_url().'/category/'.$valuecat->slug.'" class="text_overwrite_white" >'.$valuecat->name.'</a>';
                                        echo '<span class="badge danger">'.$name.'</span>';
                                      } ?>
                          <h4><a href="<?php the_permalink(); ?>" class="title text_overwrite_white" >"<?php the_title(); ?>"</a></h4>
                          <small><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="author text_overwrite_white" rel="author">
                                            <?php the_author_meta( 'display_name' ); ?>
                                        </a> | <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?></small>
                        </div>