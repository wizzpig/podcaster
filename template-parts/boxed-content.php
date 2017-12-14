


                <div class="col-md-4">
                   <div id="single-blog-archive" class="single-blog-item">
                        <div class="blog-thumnail">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                        </div>
                        <div class="blog-content">
                             <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

                            <a href="<?php the_permalink(); ?>" class="more-btn">View More</a>
                        </div>
                            <span class="blog-date"><?php echo get_the_date(); ?></span>
                        </div>
                 </div>  



