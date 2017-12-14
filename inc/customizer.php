<?php

/**
 * Podcaster Customizer functionality
 *
 * @package WordPress
 * @subpackage Podcaster
 * @since Podcaster 0.1.0
 */

//Exit if accessed directly
    if ( ! defined( "ABSPATH")) {
        exit;
    }

    function podcaster_customize_register($wp_customize)
    {
	  
		// Menu Section
		require get_template_directory(). '/inc/customizer/menu.php';
	  
		// Showcase Section
		require get_template_directory(). '/inc/customizer/hero-section.php';
	  
		// General Theme Colors Section
		require get_template_directory(). '/inc/customizer/theme-colors.php';
	  
		// Font Colors Section
		require get_template_directory(). '/inc/customizer/font-colors.php';
	  
		// Page Options Section
		require get_template_directory(). '/inc/customizer/page-options.php';
	  
		// Top Bar Section
		require get_template_directory(). '/inc/customizer/top-bar-section.php';
	  
		// Subscribe Buttons Section
		require get_template_directory(). '/inc/customizer/subscribe_buttons.php';        
	 
		// Remove core sections
		$wp_customize->remove_section( 'colors' );
	  
		// Remove core sections
		$wp_customize->remove_section( 'background_image' );
	  
		// Remove core sections
		$wp_customize->remove_section( 'header_image' );

	  }

  add_action('customize_register', 'podcaster_customize_register');

    function podcaster_sanitize_select( $input, $setting ) {

		// Ensure input is a slug.
		$input = sanitize_key( $input );

		// Get list of choices from the control associated with the setting.
		$choices = $setting->manager->get_control( $setting->id )->choices;

		// If the input is a valid key, return it; otherwise, return the default.
		return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
	}
      
    function podcaster_sanitize_url( $url ) {
		return esc_url_raw( $url );
	}
      
    function podcaster_sanitize_image( $image, $setting ) {
		/*
		 * Array of valid image file types.
		 *
		 * The array includes image mime types that are included in wp_get_mime_types()
		 */
		$mimes = array(
			'jpg|jpeg|jpe' => 'image/jpeg',
			'gif'          => 'image/gif',
			'png'          => 'image/png',
			'bmp'          => 'image/bmp',
			'tif|tiff'     => 'image/tiff',
			'ico'          => 'image/x-icon'
		);
		// Return an array with file extension and mime_type.
		$file = wp_check_filetype( $image, $mimes );
		// If $image has a valid mime_type, return it; otherwise, return the default.
		return ( $file['ext'] ? $image : $setting->default );
	}

function podaster_customizer_head_styles() {
    
	$link_color = get_theme_mod( 'link_color' ); 
	if ( $link_color != '#333333' ) :?> <style type="text/css"> a {color: <?php echo $link_color; ?>; }</style> <?php endif;
    
    $h1_color = get_theme_mod( 'h1_color' ); 
	if ( $h1_color != '#333333' ) :?> <style type="text/css"> h1 {color: <?php echo $h1_color; ?>; }</style> <?php endif;
    
    $h2_color = get_theme_mod( 'h2_color' ); 
	if ( $h2_color != '#333333' ) :?> <style type="text/css"> h2 {color: <?php echo $h2_color; ?>; }</style> <?php endif;
    
    $h3_color = get_theme_mod( 'h3_color' ); 
	if ( $h3_color != '#333333' ) :?> <style type="text/css"> h3 {color: <?php echo $h3_color; ?>; }</style> <?php endif;
    
    $h4_color = get_theme_mod( 'h4_color' ); 
	if ( $h4_color != '#333333' ) :?> <style type="text/css"> h4 {color: <?php echo $h4_color; ?>; }</style> <?php endif;
    
    $p_color = get_theme_mod( 'p_color' ); 
	if ( $h2_color != '#333333' ) :?> <style type="text/css"> p {color: <?php echo $p_color; ?>; }</style> <?php endif;
    
    $link_color_hover = get_theme_mod( 'link_color_hover' ); 
	if ( $link_color_hover != '#1e73be' ) :?> <style type="text/css"> a:hover {color: <?php echo $link_color_hover; ?>; }</style> <?php endif;
    
    $showcase_header = get_theme_mod( 'showcase_header' ); 
	if ( $showcase_header != '#ffffff' ) :?> <style type="text/css"> .showcase h1 {color: <?php echo $showcase_header; ?>; }</style> <?php endif;
    
    $showcase_copy = get_theme_mod( 'showcase_copy' ); 
	if ( $showcase_copy != '#ffffff' ) :?> <style type="text/css"> .showcase p {color: <?php echo $showcase_copy; ?>; }</style> <?php endif;
    
    $footer_color = get_theme_mod( 'footer_color' ); 
	if ( $footer_color != '#383838' ) :?><style type="text/css"> .blog-footer {background-color: <?php echo $footer_color; ?>; }</style> <?php endif;
    
    $header_color = get_theme_mod( 'header_color' ); 
	if ( $header_color != '#484848' ) :?> <style type="text/css"> .header-wrap {background-color: <?php echo $header_color; ?>; } .navbar-inverse{background-color: <?php echo $header_color; ?>; }</style> <?php endif;
    
    $footer_copy_color = get_theme_mod( 'footer_copy_color' ); 
	if ( $footer_copy_color != '#ffffff' ) :?> <style type="text/css"> p.footer-copyright {color: <?php echo $footer_copy_color; ?>; }</style> <?php endif;
    
    $footer_text_color = get_theme_mod( 'footer_text_color' ); 
	if ( $footer_text_color != '#ffffff' ) :?> <style type="text/css"> div#widget-area a {color: <?php echo $footer_text_color; ?>; } div#widget-area h3.widget-title {color: <?php echo $footer_text_color; ?>; } div#widget-area span.rpwwt-post-title {color: <?php echo $footer_text_color; ?>; }</style> <?php endif;
    
    $active_background = get_theme_mod( 'active_background' ); 
	if ( $active_background != '#1e73be' ) :?><style type="text/css"> .navbar-inverse .navbar-nav > .active > a {background-color: <?php echo $active_background; ?>;}</style> <?php endif;
    
    $hover_background = get_theme_mod( 'hover_background' ); 
	if ( $hover_background != '#1e73be' ) :?> <style type="text/css"> .nav > li:hover {background-color: <?php echo $hover_background; ?>; } </style> <?php endif;
    
    $menu_link_color = get_theme_mod( 'menu_link_color' ); 
	if ( $menu_link_color != '#ffffff' ) :?> <style type="text/css"> .navbar-inverse .navbar-nav > li > a {color: <?php echo $menu_link_color; ?>; }</style> <?php endif;
    
    $menu_link_color_hover = get_theme_mod( 'menu_link_color_hover' ); 
	if ( $menu_link_color_hover != '#ffffff' ) :?> <style type="text/css"> .navbar-inverse .navbar-nav > li > a:hover {color: <?php echo $menu_link_color_hover; ?>; }</style> <?php endif;
    
    $block_quote_highlight = get_theme_mod( 'block_quote_highlight' ); 
	if ( $block_quote_highlight != '#1e73be' ) :?> <style type="text/css"> blockquote {border-left: 5px solid <?php echo $block_quote_highlight; ?>; }</style> <?php endif;
    
    $showcase_button_color = get_theme_mod( 'showcase_button_color' ); 
	if ( $showcase_button_color != '#1e73be' ) :?> <style type="text/css"> .btn-primary {background-color: <?php echo $showcase_button_color; ?>; ?> }</style> <?php endif;
    
    $showcase_button_font_color = get_theme_mod( 'showcase_button_font_color' ); 
	if ( $showcase_button_font_color != '#ffffff' ) :?> <style type="text/css"> .btn-primary {color: <?php echo $showcase_button_font_color; ?>; ?> }</style> <?php endif;
    
    $showcase_button_color_hover = get_theme_mod( 'showcase_button_color_hover' ); 
	if ( $showcase_button_color_hover != '#ffffff' ) :?> <style type="text/css"> .btn-primary:hover {background-color: <?php echo $showcase_button_color_hover; ?>; ?> }</style> <?php endif;

    $showcase_button_font_hover = get_theme_mod( 'showcase_button_font_hover' ); 
	if ( $showcase_button_font_hover != '#1e73be' ) :?> <style type="text/css"> .btn-primary:hover {color: <?php echo $showcase_button_font_hover; ?>; ?> }</style> <?php endif;
    
    $podcaster_widget_area_color = get_theme_mod( 'podcaster_widget_area_color' ); 
	if ( $podcaster_widget_area_color != '#565656' ) :?> <style type="text/css"> footer {background-color: <?php echo $podcaster_widget_area_color; ?>; ?> }</style> <?php endif;
    
    $showcase_bg_color = get_theme_mod( 'showcase_bg_color' ); 
	if ( $showcase_bg_color != '#484848' ) :?> <style type="text/css"> div#showcase-container {background-color: <?php echo $showcase_bg_color; ?>; ?> }</style> <?php endif;
    
    $sm_bg_color = get_theme_mod( 'sm_bg_color' ); 
	if ( $sm_bg_color != '#484848' ) :?> <style type="text/css"> .social-circle a {background-color: <?php echo $sm_bg_color; ?>; ?> }</style> <?php endif;
    
    $podcaster_bg_color = get_theme_mod( 'podcaster_bg_color' ); 
	if ( $podcaster_bg_color != '#ffffff' ) :?> <style type="text/css"> body {background-color: <?php echo $podcaster_bg_color; ?>; ?> }</style> <?php endif;
    
}
add_action( 'wp_head', 'podaster_customizer_head_styles' );