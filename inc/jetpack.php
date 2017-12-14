<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package podcaster
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function podcaster_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'podcaster_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function podcaster_jetpack_setup
add_action( 'after_setup_theme', 'podcaster_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function podcaster_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function podcaster_infinite_scroll_render
