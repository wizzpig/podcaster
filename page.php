<?php get_header(); ?>

    <div class="row">
        <div class="col-sm-8">
            <div class="page-title">
                <div class="the-title">
                    <?php the_title( '<h1>', '</h1>' ); ?>
                </div>
            </div>

        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>

        <div class="blog-post">
            <?php the_content(); ?>
        </div><!-- /.blog-post -->
        <?php endwhile; ?>
        <?php else : ?>
        <p><?php __('No Page Found'); ?></p>
        <?php endif; ?>
        </div><!-- /.blog-main -->


<?php get_sidebar(); ?>
        
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
    <br />
    </div> 

        <?php if (get_option('podcaster_subscribe_img_display_id') == 'value1') {get_template_part('template-parts/subscribe-one');} ?>    
        <?php if (get_option('podcaster_subscribe_img_display_id') == 'value2') {get_template_part('template-parts/subscribe-two');} ?>
        <?php if (get_option('podcaster_subscribe_img_display_id') == 'value3') {get_template_part('template-parts/subscribe-three');} ?>
        <?php if (get_option('podcaster_subscribe_img_display_id') == 'value4') {get_template_part('template-parts/subscribe-four');} ?>
<?php get_footer(); ?>
