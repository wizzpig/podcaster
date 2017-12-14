<?php

/* =======================================================================================
 
	 Customizer section: 'Podcaster Font Colors'

     Description:
		This code is used by the Wordpress Customizer. 

 ===================================================================================== */

	//Exit if accessed directly
    if ( ! defined( "ABSPATH")) {
        exit;
    }  
    
    // Add Podcaster Font Color
    $wp_customize->add_section( 'podcaster_font_colors', array(
        'title' => 'Podcaster Font Colors',
        'priority' => 9,
    ) );

    // link color setting
    $wp_customize->add_setting( 'link_color', array(
        'default' => '#333333'
    ) );

    // add link color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
        'label' => 'Link Color',
        'section' => 'podcaster_font_colors',
        'settings' => 'link_color',
    ) ) );
      
    // link hover color setting
    $wp_customize->add_setting( 'link_color_hover', array(
        'default' => '#1e73be'
    ) );

    // add link hover color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color_hover', array(
        'label' => 'Link Color Hover',
        'section' => 'podcaster_font_colors',
        'settings' => 'link_color_hover',
    ) ) );
      
    // H1 color setting
    $wp_customize->add_setting( 'h1_color', array(
        'default' => '#333333'
    ) );

    // add H1 color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h1_color', array(
        'label' => 'H1 Color',
        'section' => 'podcaster_font_colors',
        'settings' => 'h1_color',
    ) ) );
      
    // H2 color setting
    $wp_customize->add_setting( 'h2_color', array(
        'default' => '#333333'
    ) );

    // H2 color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h2_color', array(
        'label' => 'H2 Color',
        'section' => 'podcaster_font_colors',
        'settings' => 'h2_color',
    ) ) );

    // H3 color setting      
    $wp_customize->add_setting( 'h3_color', array(
    'default' => '#333333'
    ));
      
    // H3 color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h3_color', array(
        'label' => 'H3 Color',
        'section' => 'podcaster_font_colors',
        'settings' => 'h3_color',
    ) ) );

    // H4 color setting      
    $wp_customize->add_setting( 'h4_color', array(
    'default' => '#333333'
    ));
      
    // H3 color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h4_color', array(
        'label' => 'H4 Color',
        'section' => 'podcaster_font_colors',
        'settings' => 'h4_color',
    ) ) );
      
    // Body color setting
    $wp_customize->add_setting( 'p_color', array(
        'default' => '#333333'
    ) );

    // add body color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'p_color', array(
        'label' => 'Body Color',
        'section' => 'podcaster_font_colors',
        'settings' => 'p_color',
    ) ) );

    // Footer Text Color Settings
    $wp_customize->add_setting( 'footer_text_color', array(
        'default' => '#ffffff'
    ) );

    // Footer Text Color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text_color', array(
        'label' => 'Footer Widget Text Color',
        'section' => 'podcaster_font_colors',
        'settings' => 'footer_text_color',
    ) ) );

    // Footer text color setting
    $wp_customize->add_setting( 'footer_copy_color', array(
        'default' => '#ffffff'
    ) );

    // Footer text color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_copy_color', array(
        'label' => 'Footer Copyright Color',
        'section' => 'podcaster_font_colors',
        'settings' => 'footer_copy_color',
    ))); 
