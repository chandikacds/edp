<div class="col-md-9">
                                <div class="post-review-header mb-4">
                            <div class="d-flex align-items-center">
                                <div class="avatar mr-4">
                                    <?php

                                    $author_id=$post->post_author;
                                       
                                    ?>
                                    <img class="img-fluid" src="<?php echo esc_url( get_avatar_url( $author_id ) ); ?>" alt="">
                                </div>
                                <div class="author">
                                    <h4><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="author" rel="author">
                                            <?php the_author_meta( 'display_name' ); ?>
                                        </a></h4>
                                    <span><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?></span>

                                </div>
                            </div>
                             <?php 
                    $categories = get_the_category();
                    $catarray = array();
                    foreach ($categories as $key => $valuecat) {

                      $name = '<a href="'.home_url().'/category/'.$valuecat->slug.'" >'.$valuecat->name.'</a>';
                      echo '<span class="badge danger">'.$name.'</span>';
                    }

                   
                    ?>
                            <span class="shares">
                               <span class="value">324</span>
                            <small>Shares</small>
                            </span>

                        </div>
                </div>