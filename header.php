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
    <style>@import url('https://fonts.googleapis.com/css?family=Raleway');</style>
    <style>@import url('https://fonts.googleapis.com/css?family=Cabin');</style>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <?php wp_head(); ?>
  </head>
  <body>
      
      <?php if (get_option('podcaster_topbar_setting_id') == 'value2') {get_template_part('template-parts/top-bar');}?>

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

                </div><!-- /.navbar-collapse 3-->
            </nav><!-- /.navbar navbar-inverse -->
        </div><!-- /.container -->
    </div>

    <div class="container">
        <div class="breadcrumb-single">
            <?php the_breadcrumb(); ?>
        </div>