<?php
/* =======================================================================================
 
	 Customizer section: 'Navigation Menu Colors'

     Description:
		This code is used by the Wordpress Customizer. 

 ===================================================================================== */

	//Exit if accessed directly
    if ( ! defined( "ABSPATH")) {
        exit;
    }
     
   // add new Podcaster Menu Color Section
    $wp_customize->add_section( 'podcaster_menu_colors', array(
        'title' => __( 'Navigation Menu Colors', 'podcaster' ),
        'priority' => 10,
    ) ); 
      
    // Link Color
    $wp_customize->add_setting( 'menu_link_color', array(
        'default' => '#ffffff'
    ) );

    // Link Color 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_link_color', array(
        'label' => 'Link Color',
        'section' => 'podcaster_menu_colors',
        'settings' => 'menu_link_color',
    ) ) );
      
    // Link Color Hover
    $wp_customize->add_setting( 'menu_link_color_hover', array(
        'default' => '#ffffff'
    ) );

    // Link Color Hover
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_link_color_hover', array(
        'label' => 'Link Color Hover',
        'section' => 'podcaster_menu_colors',
        'settings' => 'menu_link_color_hover',
    ) ) );
    
    // Link Active Background Color
    $wp_customize->add_setting( 'active_background', array(
        'default' => '#1e73be'
    ) );

    // Link Active Background Color 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'active_background', array(
        'label' => 'Link Active Background',
        'section' => 'podcaster_menu_colors',
        'settings' => 'active_background',
    ) ) );
      
    // Link hover Background Color
    $wp_customize->add_setting( 'hover_background', array(
        'default' => '#1e73be'
    ) );

    // Link Active Background Color 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hover_background', array(
        'label' => 'Link Hover Background',
        'section' => 'podcaster_menu_colors',
        'settings' => 'hover_background',
    ) ) ); 
