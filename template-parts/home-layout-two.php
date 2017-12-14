<?php 
/* --------------------------------------------------------------------------------------------

	This is the text list layout. 

	-------------------------------------------------------------------------------------------- */
?>
        <section id="front-page-posts" class="container"><!-- Latest Posts -->
            <div id="pod" class="col-md-12">
                <?php
                    $args = array( 'numberposts' => get_option( 'posts_per_page' ), 'order'=> 'DEC', 'orderby' => 'date' );
                    $postslist = get_posts( $args );
                    foreach ($postslist as $post) :  setup_postdata($post); 
                ?> 
                    <div id="recent-posts-container" class="container">   
                        <div id="latest-post-center" class="col-md-12">
                            <h3><a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                                </a>
                            </h3>

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






