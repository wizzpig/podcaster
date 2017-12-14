<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

    <?php wp_head(); ?>
    <style>
      .showcase{
        background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase-one.jpg'); ?>) no-repeat center center;
      }
    </style>
  </head>
  <body>

    <div class="header-wrap">
        <div id="header" class="container">
            <nav class="navbar navbar-inverse">
                
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php the_custom_logo(); ?></a> 
                    
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-3">
                
                    <?php
                        wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'navbar navbar-inverse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                        );
                    ?>
                    <ul class="nav navbar-nav navbar-right">
                </div><!-- /.navbar-collapse 3-->
            </nav><!-- /.navbar navbar-inverse -->
        </div><!-- /.container -->
    </div>

    <div id="showcase-container" class="container">
        <section class="showcase">
            <h1><?php echo get_theme_mod('showcase_heading', 'Podcaster Theme'); ?></h1>
            <p><?php echo get_theme_mod('showcase_text', 'Welcome to Podcaster, a simple podcasting theme brought to you by Launchapod.com'); ?></p>
        <?php if (get_option('podcaster_subscribe_img_display_id') == 'value1') {get_template_part('template-parts/subscribe-one');} ?>    
        <?php if (get_option('podcaster_subscribe_img_display_id') == 'value2') {get_template_part('template-parts/subscribe-two');} ?>
        <?php if (get_option('podcaster_subscribe_img_display_id') == 'value3') {get_template_part('template-parts/subscribe-three');} ?>
        <?php if (get_option('podcaster_subscribe_img_display_id') == 'value4') {get_template_part('template-parts/subscribe-four');} ?>
        </section>
    </div>
      
    <div id="full-width-container" class="container">
        <div id="front-page-container" class="container">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
        <div class="blog-post-front-page">
            <?php the_content(); ?>
        </div><!-- /.blog-post -->
        <?php endwhile; ?>
        <?php else : ?>
        <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>
        </div>
    </div>
    
    <div class="latest-posts">
    <h2><?php echo get_theme_mod('recent_posts_text', 'Latest Podcasts'); ?></h2>
    <br />
    </div> 
      
        <?php if (get_option('podcaster_select_setting_id') == 'value1') {get_template_part('template-parts/home-layout-one');} ?>
        <?php if (get_option('podcaster_select_setting_id') == 'value2') {get_template_part('template-parts/home-layout-two');} ?>
        <?php if (get_option('podcaster_select_setting_id') == 'value3') {get_template_part('template-parts/home-layout-three');} ?>
        <?php if (get_option('podcaster_testimonials_setting_id') == 'value2') {get_template_part('template-parts/testimonial-home-page');} ?>
    
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

    <div class="full-width-container">
        <div class="callout-light text-center">
            <h2>All - <b>Past</b> - Episodes <?php echo '<a href="' . get_permalink( get_option( 'page_for_posts' ) ) . '"class="btn btn-primary">Take Me There!</a>'; ?></h2>
        </div>
    </div> 
      
<?php get_footer(); ?>
