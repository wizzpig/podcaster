<?php 
/* --------------------------------------------------------------------------------------------

	This is the list with album art to the left layout. 

	-------------------------------------------------------------------------------------------- */
?>
        <section id="front-page-posts" class="container"><!-- Latest Posts -->
            <div id="pod" class="col-md-12">
                
                <?php
                    $args = array( 'numberposts' => 4, 'order'=> 'DEC', 'orderby' => 'date' );
                    $postslist = get_posts( $args );
                    foreach ($postslist as $post) :  setup_postdata($post); ?> 
                        <div id="recent-posts-container" class="container">   
                            <div id="latest-post-left" class="col-md-3">
                            	<div class="op_tumbnail">
                                    <a href="<?php the_permalink(); ?>">
	                                   <?php
                                        // Checks to see if post has a featured image. If not, returns default image.
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail();
                                        }
                                        else {
                                            echo '<img src="' . get_template_directory_uri()
                                                . '/img/coming_soon_image.jpg" />';
                                        }
                                        ?></a>
                                </div>
                            </div>
                       
                            <div id="latest-post-right" class="col-md-9">
                                <h3><a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                    </a>
                                </h3>
                                  <p class="blog-post-meta">
                                    <?php the_time('F j, Y g:i a'); ?>
                                     by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                       <?php the_author(); ?>
                                     </a>
                                  </p>
                                <div class="latest-post-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="op_player">
									<?php if( function_exists('the_powerpress_content') ){ 
									# this checks for and inserts the powerpress player
									?>
										<?php the_powerpress_content(); ?>
									<?php } ?>
								</div>

                            </div>
                        </div>
                <?php endforeach; ?>
            </div>
        </section><!-- Latest Posts -->