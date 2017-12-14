<?php 
/* --------------------------------------------------------------------------------------------

	This is the grid view layout. 

	-------------------------------------------------------------------------------------------- */
?>
    <div class="container">

        <?php
        $args = array( 'numberposts' => 3, 'order'=> 'DEC', 'orderby' => 'date' );
        $postslist = get_posts( $args );
        foreach ($postslist as $post) :  setup_postdata($post); ?>

        <div class="col-md-4">
            <div class="single-blog-item">
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
        <?php endforeach; ?>

    </div>