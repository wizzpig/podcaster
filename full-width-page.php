<?php
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage podcaster
 * @since Podcaster 1.0
 */
?>

<?php get_header(); ?>

    <div id="full-width-row" class="row">
        <div class="col-sm-12">
            <div class="full-width-content">
            <h1><?php the_title(); ?></h1>
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php else : ?>
            <p><?php __('No Posts Found'); ?></p>
            <?php endif; ?>
            </div><!-- /.blog-main -->
        </div>
        <div class="clear"></div>
    </div>
</div> <!-- /main content area -->

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
