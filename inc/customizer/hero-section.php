<?php
/* =======================================================================================
 
	Customizer section: 'Hero Section'

     Description:
		This code is used by the Wordpress Customizer.

 ===================================================================================== */
 
	//Exit if accessed directly
    if ( ! defined( "ABSPATH")) {
        exit;
    }
    
    // Showcase Section
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->add_section('showcase', array(
      'title'   => 'Hero Section', 'podcaster',
      'description' => 'Configure top section here with podcast name and tag line and background image.','podcaster',
      'priority'    => 6
    ));

    $wp_customize->add_setting('showcase_image', array(
      'default'   => get_bloginfo('template_directory').'/img/showcase-one.jpg',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label'   => 'Hero Section Background Image',
      'section' => 'showcase',
      'settings' => 'showcase_image',
      'priority'  => 10
    )));
      
    // Showcase Background Color  
    $wp_customize->add_setting( 'showcase_bg_color', array(
        'default' => '#484848'
    ));
      
    // Showcase Background Color
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'showcase_bg_color', array(
        'label' => 'Hero Section Background Color',
        'section' => 'showcase',
        'description' => 'Used if no background image is selected.',
        'settings' => 'showcase_bg_color',
        'priority'  => 15
    ) ) );

    $wp_customize->add_setting('showcase_heading', array(
      'default'   => 'Podcaster',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
      'label'   => 'Podcast Name',
      'section' => 'showcase',
      'priority'  => 2
    ));

    $wp_customize->add_setting('showcase_text', array(
      'default'   => 'Welcome to Podcaster, a podcasting theme by Launch A Pod.',
      'type'      => 'theme_mod'
    ));
      
    $wp_customize->add_control('showcase_text', array(
      'label'   => 'Podcast Sub Title', 
      'section' => 'showcase',
      'priority'  => 4
    ));

    // Showcase Header Color  
    $wp_customize->add_setting( 'showcase_header', array(
        'default' => '#ffffff'
    ));
      
    // Showcase Header Color
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'showcase_header', array(
        'label' => 'Name Color',
        'section' => 'showcase',
        'settings' => 'showcase_header',
    ) ) );
      
    // Showcase Text Color  
    $wp_customize->add_setting( 'showcase_copy', array(
        'default' => '#ffffff'
    ));
      
    // Showcase Text Color
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'showcase_copy', array(
        'label' => 'Showcase Text Color',
        'section' => 'showcase',
        'settings' => 'showcase_copy',
    ) ) );
