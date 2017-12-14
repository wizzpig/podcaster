<?php

/* =======================================================================================
 
	 Customizer section: 'Subscribe Buttons'
	 
     Description:
		This code is used by the Wordpress Customizer.

 ===================================================================================== */

	//Exit if accessed directly
    if ( ! defined( "ABSPATH")) {
        exit;
    }
error_log(print_r("Loaded Subscribe Buttons", TRUE)); 

    // Add Podcaster Page Options
    $wp_customize->add_section('podcaster_subscribe_buttons_options' , array(
      'title'     =>  __( 'Subscribe Buttons', 'podcaster' ),
      'priority'  => 4
    ));
      
    // Add Number of Images to show Settings       
     $wp_customize->add_setting('podcaster_subscribe_img_display_id', array(
        'default'             => 'value4',
        'capability'          => 'edit_theme_options',
        'sanitize_callback'   => 'podcaster_sanitize_select' ,
        'type'                => 'option',
    ));

    // Add Number of Images to show Control       
    $wp_customize->add_control( 'podcaster_subscribe_img_display_id', array(
        'settings'    => 'podcaster_subscribe_img_display_id',
        'label'       => 'Number of Subscribe Images to Display',
        'description' => 'Select from drop down. If just 1 image, use "Image1". If you want to use 2 images, use "Image 1" and "Image 2", etc',
        'section'     => 'podcaster_subscribe_buttons_options',
        'priority'    => 70 ,
        'type'        => 'select',
        'choices'     => array(
            'value1'  => 'One',
            'value2'  => 'Two',
            'value3'  => 'Three',
            'value4'  => 'Four',
        ),
    ));
      
    // Add Subscribe Image 1 Settings
    $wp_customize->add_setting('subscribe_image_one', array(
      'default'   => get_bloginfo('template_directory').'/img/Sub-ApplePodcast.png',
      'type'      => 'theme_mod'
    ));
      
    // Add Subscribe Image 1  Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'subscribe_image_one', array(
      'label'       => 'Subscribe Link Image 1', 'podcaster',
      'description' => 'Recommended image size is 200px X 200px',
      'section'     => 'podcaster_subscribe_buttons_options',
      'settings'    => 'subscribe_image_one',
      'priority'    => 80
    )));
      
    // Add Subscribe Image 1 URL Settings  
    $wp_customize->add_setting('subscribe_image1_url', array(
      'default'   => 'https://www.apple.com/itunes/podcasts/', 'podcaster',
      'type'      => 'theme_mod'
    ));
      
    // Add Subscribe Image 1 URL Control 
    $wp_customize->add_control('subscribe_image1_url', array(
      'label'       => 'Image 1 URL', 'podcaster',
      'description' => 'Enter the subscription link for Image 1',
      'section'     => 'podcaster_subscribe_buttons_options',
      'priority'    => 90
    ));
      
    // Add Subscribe Image 2 Settings
    $wp_customize->add_setting('subscribe_image_two', array(
      'default'   => get_bloginfo('template_directory').'/img/Sub-GooglePlay.png',
      'type'      => 'theme_mod'
    ));
      
    // Add Subscribe Image 2  Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'subscribe_image_two', array(
      'label'     => 'Subscribe Link Image 2', 'podcaster',
      'section'   => 'podcaster_subscribe_buttons_options',
      'settings'  => 'subscribe_image_two',
      'priority'  => 100
    )));
      
    // Add Subscribe Image 2 URL Settings  
    $wp_customize->add_setting('subscribe_image2_url', array(
      'default'   => 'https://play.google.com', 'podcaster',
      'type'      => 'theme_mod'
    ));
      
    // Add Subscribe Image 2 URL Control 
    $wp_customize->add_control('subscribe_image2_url', array(
      'label'     => 'Image 2 URL', 'podcaster',
      'section'   => 'podcaster_subscribe_buttons_options',
      'priority'  => 110
    ));
      
    // Add Subscribe Image 3 Settings
    $wp_customize->add_setting('subscribe_image_three', array(
      'default'   => get_bloginfo('template_directory').'/img/Sub-Stitcher.png',
      'type'      => 'theme_mod'
    ));
      
    // Add Subscribe Image 3  Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'subscribe_image_three', array(
      'label'     => 'Subscribe Link Image 3', 'podcaster',
      'section'   => 'podcaster_subscribe_buttons_options',
      'settings'  => 'subscribe_image_three',
      'priority'  => 120
    )));
      
    // Add Subscribe Image 3 URL Settings  
    $wp_customize->add_setting('subscribe_image3_url', array(
      'default'   => 'https://stitcher.com', 'podcaster',
      'type'      => 'theme_mod'
    ));
      
    // Add Subscribe Image 3 URL Control 
    $wp_customize->add_control('subscribe_image3_url', array(
      'label'     => 'Image 3 URL', 'podcaster',
      'section'   => 'podcaster_subscribe_buttons_options',
      'priority'  => 130
    ));
      
    // Add Subscribe Image 4 Settings
    $wp_customize->add_setting('subscribe_image_four', array(
      'default'   => get_bloginfo('template_directory').'/img/Sub-OverCastFM.png',
      'type'      => 'theme_mod'
    ));
      
    // Add Subscribe Image 4  Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'subscribe_image_four', array(
      'label'     => 'Subscribe Link Image 4', 'podcaster',
      'section'   => 'podcaster_subscribe_buttons_options',
      'settings'  => 'subscribe_image_four',
      'priority'  => 140
    )));
      
    // Add Subscribe Image 4 URL Settings  
    $wp_customize->add_setting('subscribe_image4_url', array(
      'default'   => 'https://overcast.fm/', 'podcaster',
      'type'      => 'theme_mod'
    ));
      
    // Add Subscribe Image 4 URL Control 
    $wp_customize->add_control('subscribe_image4_url', array(
      'label'      => 'Image 4 URL', 'podcaster',
      'section'    => 'podcaster_subscribe_buttons_options',
      'priority'   => 150
    ));