<?php get_header(); ?>

Archive.php

    <div id="archive" class="row">
        <div class="container">
            <h1>Category: <?php the_category(', '); ?></h1>
                <div class="row">
                    <?php if(have_posts()) ;?>

                    <?php while(have_posts()) : the_post(); ?>
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
                    <?php endwhile; ?>
                </div>
        </div>
    </div>

    <div class="podcaster-pagination">
    <?php pagination_bar(); ?>
    </div  >
</div>

    <div class="latest-posts">
        <style>
        .latest-posts{
        background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase-one.jpg'); ?>);
        /* Set a specific height */

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }
        </style>
        <h2><?php echo get_theme_mod('subscribe_text', 'Subscribe'); ?></h2>
        where all your dreams are
    <br />
    </div> 

    <div id="cta-section" class="container">
        <div class="row-fluid">
            <div id="sub-box-content" class="col-xs-3">
                <a href="<?php echo get_theme_mod('subscribe_image_one', 'https://www.apple.com/itunes/podcasts/'); ?>" ><img src="<?php echo get_theme_mod( 'subscribe_image_one' , get_template_directory_uri().'/img/Sub-ApplePodcast.png' ); ?>"></a>
            </div>
            <div id="sub-box-content" class="col-xs-3">
                <a href="<?php echo get_theme_mod('subscribe_image_two', 'https://play.google.com/'); ?>" ><img src="<?php echo get_theme_mod( 'subscribe_image_two' , get_template_directory_uri().'/img/Sub-GooglePlay.png' ); ?>"></a>
            </div>
            <div id="sub-box-content" class="col-xs-3">
                <a href="<?php echo get_theme_mod('subscribe_image_three', 'https://stitcher.com/'); ?>" ><img src="<?php echo get_theme_mod( 'subscribe_image_three' , get_template_directory_uri().'/img/Sub-Stitcher.png' ); ?>"></a>
            </div>
             <div id="sub-box-content" class="col-xs-3">
                <a href="<?php echo get_theme_mod('subscribe_image_four', 'https://overcast.fm/'); ?>" ><img src="<?php echo get_theme_mod( 'subscribe_image_four' , get_template_directory_uri().'/img/Sub-OverCastFM.png' ); ?>"></a>
            </div>
       </div>
    </div>

<?php get_footer(); ?>



