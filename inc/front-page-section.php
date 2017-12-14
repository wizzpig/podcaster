<?php
            <div class="col-md-12">
                <div class="latest-posts">
                    <h2>The Latest From <?php bloginfo( 'name' ); ?></h2>
                    <br />
                </div>
                <?php query_posts('showposts=5'); if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div id="latest-post-left" class="col-md-4">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                              <p class="blog-post-meta">
                                <?php the_time('F j, Y g:i a'); ?>
                                 by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                   <?php the_author(); ?>
                                 </a>
                              </p>
                    <?php the_content(); ?>
                    <p><?php the_tags(); ?></p>
                </div>
                <?php endwhile;?>
                <?php else : ?>

                <h1>Nothing found</h1>
                <p>Sorry about that!</p>

                <?php endif; wp_reset_query(); ?>
            </div>
            
?>