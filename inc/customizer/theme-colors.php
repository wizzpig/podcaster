<?php
/* =======================================================================================
 
	 Customizer section: 'Theme Colors'
	 
     Description:
		This code is used by the Wordpress Customizer.

 ===================================================================================== */
 
	//Exit if accessed directly
    if ( ! defined( "ABSPATH")) {
        exit;
    }

    // add new Podcaster Theme Color section
    $wp_customize->add_section( 'podcaster_theme_colors', array(
        'title' => __( 'Theme Colors', 'podcaster' ),
        'priority' => 7,
    ) );

/*=========================
     $wp_customize->add_setting('podcaster_skin', array(
        'default'             => 'light',
        'capability'          => 'edit_theme_options',
        'sanitize_callback'   => 'podcaster_sanitize_select' ,
        'type'                => 'option',
    ));
      
    $wp_customize->add_control( 'podcaster_skin', array(
        'settings' => 'podcaster_skin',
        'label'   => 'Podcaster Skin Color:',
        'description' => __( 'Select Dark or Light Skin Color' ),
        'section' => 'podcaster_theme_colors',
        'type'    => 'select',
        'choices'    => array(
            'light' => __( 'Light' ),
            'dark' => __( 'Dark' ),
        ),
    ));
 ================= */
      
    // Header Color Settings
    $wp_customize->add_setting( 'header_color', array(
        'default' => '#484848'
    ) );

    // Header Color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_color', array(
        'label' => 'Header Color',
        'section' => 'podcaster_theme_colors',
        'settings' => 'header_color',
    ) ) );  
      
    // Footer Widget Area Color Settings
    $wp_customize->add_setting( 'podcaster_widget_area_color', array(
        'default' => '#565656'
    ) );

    // Footer Widget Area Color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'podcaster_widget_area_color', array(
        'label' => 'Footer Widget Area Color',
        'section' => 'podcaster_theme_colors',
        'settings' => 'podcaster_widget_area_color',
    ) ) );

    // Bottom Footer Color Settings
    $wp_customize->add_setting( 'footer_color', array(
        'default' => '#383838'
    ) );

    // Bottom Footer Color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_color', array(
        'label' => 'Bottom Footer Color',
        'section' => 'podcaster_theme_colors',
        'settings' => 'footer_color',
    ) ) );

    // Main Content Area Color Settings
    $wp_customize->add_setting( 'podcaster_bg_color', array(
        'default' => '#ffffff'
    ) );

    // Main Content Area Color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'podcaster_bg_color', array(
        'label' => 'Main Content background Color',
        'section' => 'podcaster_theme_colors',
        'settings' => 'podcaster_bg_color',
    ) ) );
  
    // Block Quote Settings
    $wp_customize->add_setting( 'block_quote_highlight', array(
        'default' => '#1e73be'
    ) );

    // Block Quote control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'block_quote_highlight', array(
        'label' => 'Block Quote Highlight Color',
        'section' => 'podcaster_theme_colors',
        'settings' => 'block_quote_highlight',
    ) ) );
