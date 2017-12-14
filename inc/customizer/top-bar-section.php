<?php

/* =======================================================================================
 
	 Customizer section: 'Social Media'
	 
     Description:
		This code is used by the Wordpress Customizer.
		The top bar goes above the top menu and has social media icons in it.

 ===================================================================================== */

	//Exit if accessed directly
    if ( ! defined( "ABSPATH")) {
        exit;
    }
 
    // Add Top Bar Section
    $wp_customize->add_section( 'podcaster_top_bar', array(
        'title' => 'Social Media',
        'priority' => 11,
    ) );

    $wp_customize->add_setting('podcaster_topbar_setting_id', array(
        'default'             => 'value1',
        'capability'          => 'edit_theme_options',
        'type'                => 'option',
    ));

    $wp_customize->add_control( 'podcaster_topbar_setting', array(
    'settings' => 'podcaster_topbar_setting_id',
    'label'   => 'Social Media Top Bar',
    'description' => 'Show or hide the top social media bar',
    'section' => 'podcaster_top_bar',
    'type'    => 'select',
    'choices'    => array(
        'value1' => 'Hide Top Bar' ,
        'value2' => 'Show Top Bar' ,
        ),
    ));
      
    // Add FaceBook Link Setting
    $wp_customize->add_setting('pc_facebook_link', array(
      'default'   => 'https://www.facebook.com',
      'type'      => 'theme_mod'
    ));
      
    // Add FaceBook Link Control
    $wp_customize->add_control('pc_facebook_link', array(
      'label'   => 'Facebook Link',
      'section' => 'podcaster_top_bar',
      'priority'  => 10
    ));
      
    // Twitter Link Setting
    $wp_customize->add_setting('pc_twitter_link', array(
      'default'   => 'https://www.twitter.com',
      'type'      => 'theme_mod'
    ));
      
     // Twitter Link Control
    $wp_customize->add_control('pc_twitter_link', array(
      'label'   => 'Twitter Link',
      'section' => 'podcaster_top_bar',
      'priority'  => 20
    ));

    // YouTube Link Setting
    $wp_customize->add_setting('pc_youtube_link', array(
      'default'   => 'https://www.youtube.com',
      'type'      => 'theme_mod'
    ));
      
     // YouTube Link Control
    $wp_customize->add_control('pc_youtube_link', array(
      'label'   => 'YouTube',
      'section' => 'podcaster_top_bar',
      'priority'  => 30
    ));

    // Google+ Link Setting
    $wp_customize->add_setting('pc_google_link', array(
      'default'   => 'https://play.google.com',
      'type'      => 'theme_mod'
    ));
      
     // Google+ Link Control
    $wp_customize->add_control('pc_google_link', array(
      'label'   => 'Google+ Link',
      'section' => 'podcaster_top_bar',
      'priority'  => 40
    ));

    // Linkedin Link Setting
    $wp_customize->add_setting('pc_linkedin_link', array(
      'default'   => 'https://linkedin.com',
      'type'      => 'theme_mod'
    ));
      
     // Linkedin Link Control
    $wp_customize->add_control('pc_linkedin_link', array(
      'label'   => 'Linkedin Link',
      'section' => 'podcaster_top_bar',
      'priority'  => 50
    ));