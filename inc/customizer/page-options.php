<?php

/* =======================================================================================
 
	 Customizer section: 'Podcaster Page Options'
	 
     Description:
		This code is used by the Wordpress Customizer.

 ===================================================================================== */

	//Exit if accessed directly
    if ( ! defined( "ABSPATH")) {
        exit;
    }
error_log(print_r("Loaded Page Options", TRUE)); 
    // Add Podcaster Page Options
    $wp_customize->add_section('podcaster_page_options' , array(
      'title'     => 'Podcaster Page Options', 'podcaster',
      'priority'  => 1
    ));
      
     $wp_customize->add_setting('podcaster_select_setting_id', array(
        'default'             => 'value1',
        'capability'          => 'edit_theme_options',
        'sanitize_callback'   => 'podcaster_sanitize_select' ,
        'type'                => 'option',
    ));
      
    $wp_customize->add_control( 'podcaster_select_setting_id', array(
        'settings'     => 'podcaster_select_setting_id',
        'label'       => 'Homepage Layout:',
        'description' => 'Select the homepage layout you would like.',
        'section'     => 'podcaster_page_options',
        'type'        => 'select',
        'choices'     => array(
            'value1'  => 'Home Layout One',
            'value2'  => 'Home Layout Two',
            'value3'  => 'Home Layout Three',
        ),
    ));

    // Add Podcaster Archive Layout Setting
     $wp_customize->add_setting('podcaster_layout_setting_id', array(
        'default'             => 'standard',
        'capability'          => 'edit_theme_options',
        'sanitize_callback'   => 'podcaster_sanitize_select' ,
        'type'                => 'option',
    ));
      
    // Add Podcaster Archive Layout Control
    $wp_customize->add_control( 'podcaster_layout_setting_id', array(
        'settings'    => 'podcaster_layout_setting_id',
        'label'       => 'Select Episode Archive Layout:',
        'description' => 'Select the layout used on Episodes page.',
        'section'     => 'podcaster_page_options',
        'type'        => 'select',
        'choices'     => array(
            'standard'  => 'Standard Layout with Sidebar',
            'boxed'  => 'Full Width Boxed',
        ),
    ));

    // Add Podcaster Testimonials Setting
     $wp_customize->add_setting('podcaster_testimonials_setting_id', array(
        'default'             => 'value1',
        'capability'          => 'edit_theme_options',
        'type'                => 'option',
    ));

    // Add Podcaster Testimonials Control
    $wp_customize->add_control( 'podcaster_testimonials_setting_id', array(
        'settings'    => 'podcaster_testimonials_setting_id',
        'label'       => 'Homepage Testimonials Section',
        'description' => 'Show or hide Testimonials Section',
        'section'     => 'podcaster_page_options',
        'type'        => 'select',
        'choices'     => array(
            'value1'  => 'Hide Testimonials',
            'value2'  => 'Show Testimonials',
        ),
    ));
      
    // Add Podcaster Recent Posts Options Setting 
    $wp_customize->add_setting('recent_posts_text', array(
      'default'   => 'Latest Podcasts', 'podcaster',
      'type'      => 'theme_mod'
    ));
      
    // Add Podcaster Recent Posts Options Control
    $wp_customize->add_control('recent_posts_text', array(
      'label'       => 'Recent Posts Text', 'podcaster',
      'description' => 'Text to show above recent posts. (On Home Page Only)' ,
      'section'     => 'podcaster_page_options',
      'priority'    => 50
    ));

    // Add Podcaster Subscribe Text Options Setting 
    $wp_customize->add_setting('subscribe_text', array(
      'default'   => 'Subscribe', 'podcaster',
      'type'      => 'theme_mod'
    ));
      
    // Add Podcaster Subscribe Text Options Control
    $wp_customize->add_control('subscribe_text', array(
      'label'       => 'Subscribe Text', 'podcaster',
      'description' => 'Text to show above Subscribe Images.',
      'section'     => 'podcaster_page_options',
      'priority'    => 60
    ));
