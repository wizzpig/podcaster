<?php
/* =======================================================================================
 
	 Customizer section: 'Hero Subscribe Buttons'
	 
     Description:
		This code is used by the Wordpress Customizer. These are only used in the hero section.

 ===================================================================================== */
 

	//Exit if accessed directly
    if ( ! defined( "ABSPATH")) {
        exit;
    }
    
    	// Add Podcaster Showcase Image Section  
    $wp_customize->add_section( 'showcase_cta_images' , array(
      'title'       => __( 'Hero Subscribe Buttons', 'podcaster' ),
      'description' => sprintf(__('Add your CTA images and links here, or put links to your Podcasts here... Ideal image size is 383px 182px.','podcaster')),
      'priority'    => 7
    ) ); 

    // Add Number of Images to show Settings       
     $wp_customize->add_setting('podcaster_img_display_id', array(
        'default'             => 'value3',
        'capability'          => 'edit_theme_options',
        'sanitize_callback'   => 'podcaster_sanitize_select' ,
        'type'                => 'option',
    ));

    // Add Number of Images to show Control       
    $wp_customize->add_control( 'podcaster_img_display_id', array(
        'settings'    => 'podcaster_img_display_id',
        'label'       => 'Number of Showcase Images to Display',
        'description' => __( 'Select from drop down. If just 1 image, use "Image1". If you want to use 2 images, use "Image 1" and "Image 2", etc' ),
        'section'     => 'showcase_cta_images',
        'priority'    => 10 ,
        'type'        => 'select',
        'choices'     => array(
        'value1'      => __( 'One' ),
        'value2'      => __( 'Two' ),
        'value3'      => __( 'Three' ),
        ),
    ));

    // Add Podcaster Showcase Image 1 Settings
    $wp_customize->add_setting('showcase_section_image_one', array(
      'default'   => get_bloginfo('template_directory').'/img/SC-Stitcher.png',
      'type'      => 'theme_mod'
    ));
      
    // Add Podcaster Showcase Image 1 Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_section_image_one', array(
      'label'     => __('Podcaster Section 1 Image', 'podcaster'),
      'section'   => 'showcase_cta_images',
      'settings'  => 'showcase_section_image_one',
      'priority'  => 20
    )));
      
    // Add Podcaster Showcase Image 1 URL Settings  
    $wp_customize->add_setting('image1_url', array(
      'default'   => _x('https://stitcher.com', 'podcaster'),
      'type'      => 'theme_mod'
    ));
      
    // Add Podcaster Showcase Image 1 URL Control 
    $wp_customize->add_control('image1_url', array(
      'label'     => __('Image 1 URL', 'podcaster'),
      'section'   => 'showcase_cta_images',
      'priority'  => 30
    ));
      
    // Add Podcaster Showcase Image 2 Settings
    $wp_customize->add_setting('showcase_section_image_two', array(
      'default'   => get_bloginfo('template_directory').'/img/SC-GooglePlay.png',
      'type'      => 'theme_mod'
    ));
      
    // Add Podcaster Showcase Image 2 Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_section_image_two', array(
      'label'     => __('Podcaster Section 2 Image', 'podcaster'),
      'section'   => 'showcase_cta_images',
      'settings'  => 'showcase_section_image_two',
      'priority'  => 40
    )));
      
    // Add Podcaster Showcase Image 2 URL Settings 
    $wp_customize->add_setting('image2_url', array(
      'default'   => _x('https://play.google.com', 'podcaster'),
      'type'      => 'theme_mod'
    ));
      
    // Add Podcaster Showcase Image 2 URL Control
    $wp_customize->add_control('image2_url', array(
      'label'     => __('Image 2 URL', 'podcaster'),
      'section'   => 'showcase_cta_images',
      'priority'  => 50
    ));
      
    // Add Podcaster Showcase Image 3 Settings
    $wp_customize->add_setting('showcase_section_image_three', array(
      'default'   => get_bloginfo('template_directory').'/img/SC-ApplePodcasts.png',
      'type'      => 'theme_mod'
    ));
      
    // Add Podcaster Showcase Image 3 Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_section_image_three', array(
      'label'   => __('Podcaster Section 3 Image', 'podcaster'),
      'section' => 'showcase_cta_images',
      'settings' => 'showcase_section_image_three',
      'priority'  => 60
    )));
      
    // Add Podcaster Showcase Image 3 URL Settings 
    $wp_customize->add_setting('image3_url', array(
      'default'   => _x('https://itunes.apple.com/us/genre/podcasts', 'podcaster'),
      'type'      => 'theme_mod'
    ));
      
    // Add Podcaster Showcase Image 3 URL Control
    $wp_customize->add_control('image3_url', array(
      'label'   => __('Image 3 URL', 'podcaster'),
      'section' => 'showcase_cta_images',
      'priority'  => 70
    ));