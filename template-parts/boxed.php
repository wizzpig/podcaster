    <div id="archive" class="row">
        <div class="container">
            <h1><?php the_title(); ?></h1>
                <div class="row">
                    <?php if(have_posts()) ;?>

                    <?php while(have_posts()) : the_post(); ?>
                        <div class="col-md-4">
                            <div class="single-blog-item">
                                <div class="blog-thumnail">
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
                                <div class="blog-content">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <a href="<?php the_permalink(); ?>" class="more-btn">View More</a>
                                </div>
                                <span class="blog-date"><?php echo get_the_date(); ?></span>
                            </div>
                        </div>  
                    <?php endwhile; ?>
                </div>
        </div>
    </div>

    <div class="podcaster-pagination">
    <?php pagination_bar(); ?>
    </div  >
</div>

