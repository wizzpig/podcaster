<?php

//Exit if accessed directly
    if ( ! defined( "ABSPATH")) {
        exit;
    }

if ( ! function_exists( 'podcaster_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function podcaster_setup() {

	load_theme_textdomain( 'podcaster', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// Podcaster uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'podcaster' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

    add_theme_support( 'custom-logo' );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'podcaster_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}

add_filter( 'post_thumbnail_html', 'podcaster_post_image_html', 10, 3 );


    // Featured Image Link to Post
    function podcaster_post_image_html( $html, $post_id, $post_image_id ) {
        $html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_post_field( 'post_title', $post_id ) ) . '">' . $html . '</a>';
        return $html;
    }

    endif; // podcaster_setup
    add_action( 'after_setup_theme', 'podcaster_setup' );

    // Register Nav Walker class_alias
    require_once('wp_bootstrap_navwalker.php');

    // Register updater
    require_once('assets.php');

    // Customizer File
    require get_template_directory(). '/inc/customizer.php';

    // Implement the Custom Header feature.
    require get_template_directory() . '/inc/custom-header.php';

    // Implement the testiminials feature.
    require get_template_directory() . '/inc/testimonials.php';

    // Implement Podcaster Breadcrumbs.
    require get_template_directory() . '/podcaster-breadcrumbs.php';

    // Load Jetpack compatibility file.
    require get_template_directory() . '/inc/jetpack.php';

    // Theme Support
    function podcaster_theme_setup(){
    add_theme_support('post-thumbnails');

    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));
  }

add_action('after_setup_theme','podcaster_theme_setup');


// Podscaster Scripts
function podcaster_scripts() {

	wp_enqueue_script( 'firstheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
    wp_enqueue_script( 'firstheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
}

add_action( 'wp_enqueue_scripts', 'podcaster_scripts' );

// Widget Locations
function podcaster_init_widgets($id){
  register_sidebar(array(
    'name'  => 'Sidebar',
    'id'    => 'sidebar',
    'description' => __( 'Main Content Sidebar', 'podcaster' ),
    'before_widget' => '<div class="sidebar-module">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));

    // First footer widget area, located above the bottom footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'podcaster' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'podcaster' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Second Footer Widget Area, located above the bottom footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'podcaster' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'podcaster' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Third Footer Widget Area, located above the bottom footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'podcaster' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'The third footer widget area', 'podcaster' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Fourth Footer Widget Area, located above the bottom footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Fourth Footer Widget Area', 'podcaster' ),
        'id' => 'fourth-footer-widget-area',
        'description' => __( 'The fourth footer widget area', 'podcaster' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Add the PodcasterCustom Logo Feature
    add_theme_support( 'custom-logo', array(
    'height'      => 40,
    'width'       => 300,
    'flex-width' => true,
	) );
}
add_action('widgets_init', 'podcaster_init_widgets');

// Enable font size & font family selects in the editor
if ( ! function_exists( 'podcaster_mce_buttons' ) ) {
	function podcaster_mce_buttons( $buttons ) {
		array_unshift( $buttons, 'fontselect' ); // Add Font Select
		array_unshift( $buttons, 'fontsizeselect' ); // Add Font Size Select
		return $buttons;
	}
}
add_filter( 'mce_buttons_2', 'podcaster_mce_buttons' );

// Customize mce editor font sizes
if ( ! function_exists( 'podcaster_mce_text_sizes' ) ) {
	function podcaster_mce_text_sizes( $initArray ){
		$initArray['fontsize_formats'] = "9px 10px 12px 13px 14px 16px 18px 21px 24px 28px 32px 36px 48px 56px";
		return $initArray;
	}
}

add_filter( 'tiny_mce_before_init', 'podcaster_mce_text_sizes' );

/**
 * Get blog posts page URL.
 *
 * @return string The blog posts page URL.
 */
function podcaster_get_blog_posts_page_url() {
	// If front page is set to display a static page, get the URL of the posts page.
	if ( 'page' === get_option( 'show_on_front' ) ) {
		return get_permalink( get_option( 'page_for_posts' ) );
	}
	// The front page IS the posts page. Get its URL.
	return get_home_url();
}

// Function to change "posts" to "episodes" in the admin side menu
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Episodes';
    $submenu['edit.php'][5][0] = 'Episodes';
    $submenu['edit.php'][10][0] = 'Add Episode';
    $submenu['edit.php'][16][0] = 'Tags';
    echo '';
}
add_action( 'admin_menu', 'change_post_menu_label' );
// Function to change post object labels to "news"
function change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Episodes';
    $labels->singular_name = 'Episode';
    $labels->add_new = 'Add New Episode';
    $labels->add_new_item = 'Add Episode';
    $labels->edit_item = 'Edit Episode';
    $labels->new_item = 'Episode';
    $labels->view_item = 'View Episode';
    $labels->search_items = 'Search Episodes';
    $labels->not_found = 'No News Episodes found';
    $labels->not_found_in_trash = 'No Episodes found in Trash';
}
add_action( 'init', 'change_post_object_label' );

function pagination_bar() {
    global $wp_query;

    $total_pages = $wp_query->max_num_pages;

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}

function podcaster_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'podcaster_excerpt_more' );

add_filter('the_excerpt', 'do_shortcode');

function show_template() {
    if( is_super_admin() ){
        global $template;
        print_r($template);
    }
}

// Theme updater code for Github. Credit to Douglas Beck, UCF Web Communications.
// register the custom stylesheet header
add_action( 'extra_theme_headers', 'github_extra_theme_headers' );
function github_extra_theme_headers( $headers ) {
    $headers['Github Theme URI'] = 'Github Theme URI';
    return $headers;
}
add_filter('site_transient_update_themes', 'transient_update_themes_filter');
function transient_update_themes_filter($data){
	global $wp_version;
	$wp_34 = version_compare($wp_version, '3.4', '>=');
	$installed_themes = $wp_34 ? wp_get_themes() : get_themes();
	foreach ( (array) $installed_themes as $theme_title => $_theme ) {
		// the WP_Theme object is very different now...
		// This whole function should be refactored to not directly
		// rely on the $theme variable the way it does
		if($wp_34) {
			if(!$_theme->get('Github Theme URI')) {
				continue;
			} else {
				$theme = array(
					'Github Theme URI' => $_theme->get('Github Theme URI'),
					'Stylesheet'       => $_theme->stylesheet,
					'Version'          => $_theme->version
				);
			}
		} else {
			// get the Github URI header, skip if not set
			$theme = $_theme;
			if(isset($theme['Stylesheet Files'][0]) && is_readable($theme['Stylesheet Files'][0])){
				$stylesheet = $theme['Stylesheet Dir'] . '/style.css';

				$theme_data = get_theme_data($stylesheet);
				if(empty($theme_data['Github Theme URI'])){
					continue;
				} else {
					$theme['Github Theme URI'] = $theme_data['Github Theme URI'];
				}
			};
		}

		$theme_key = $theme['Stylesheet'];

		// Add Github Theme Updater to return $data and hook into admin
		remove_action( "after_theme_row_" . $theme['Stylesheet'], 'wp_theme_update_row');
		add_action( "after_theme_row_" . $theme['Stylesheet'], 'github_theme_update_row', 11, 2 );

		// Grab Github Tags
		preg_match(
			'/http(s)?:\/\/github.com\/(?<username>[\w-]+)\/(?<repo>[\w-]+)$/',
			$theme['Github Theme URI'],
			$matches);
		if(!isset($matches['username']) or !isset($matches['repo'])){
			$data->response[$theme_key]['error'] = 'Incorrect github project url.  Format should be (no trailing slash): <code style="background:#FFFBE4;">https://github.com/&lt;username&gt;/&lt;repo&gt;</code>';
			continue;
		}
		$url = sprintf('https://api.github.com/repos/%s/%s/tags', urlencode($matches['username']), urlencode($matches['repo']));

		$response = get_transient(md5($url)); // Note: WP transients fail if key is long than 45 characters
		if(empty($response)){
			$raw_response = wp_remote_get($url, array('sslverify' => false, 'timeout' => 10));
			if ( is_wp_error( $raw_response ) ){
				$data->response[$theme_key]['error'] = "Error response from " . $url;
				continue;
			}
			$response = json_decode($raw_response['body']);
			if(isset($response->message)){
				if(is_array($response->message)){
					$errors = '';
					foreach ( $response->message as $error) {
						$errors .= ' ' . $error;
					}
				} else {
					$errors = print_r($response->message, true);
				}
				$data->response[$theme_key]['error'] = sprintf('While <a href="%s">fetching tags</a> api error</a>: <span class="error">%s</span>', $url, $errors);
				continue;
			}

			if(count($response) == 0){
				$data->response[$theme_key]['error'] = "Github theme does not have any tags";
				continue;
			}

			//set cache, just 60 seconds
			set_transient(md5($url), $response, 30);
		}

		// Sort and get latest tag
    $tags = array_map(function($in_response){return $in_response->name;}, $response);
    usort($tags, "version_compare");


		// check for rollback
		if(isset($_GET['rollback'])){
			$data->response[$theme_key]['package'] =
				$theme['Github Theme URI'] . '/zipball/' . urlencode($_GET['rollback']);
			continue;
		}


		// check and generate download link
		$newest_tag = array_pop($tags);
    #error_log("After tags {".implode(", ",$tags)."}");
		if(version_compare($theme['Version'],  $newest_tag, '>=')){
			// up-to-date!
			$data->up_to_date[$theme_key]['rollback'] = $tags;
			continue;
		}


		// new update available, add to $data
		$download_link = $theme['Github Theme URI'] . '/zipball/' . $newest_tag;
		$update = array();
		$update['new_version'] = $newest_tag;
		$update['url']         = $theme['Github Theme URI'];
		$update['package']     = $download_link;
		$data->response[$theme_key] = $update;

    error_log("DL link: ".$download_link.", github URI: ".$theme['Github Theme URI']);


	}

	return $data;
}
add_filter('upgrader_source_selection', 'upgrader_source_selection_filter', 10, 3);
function upgrader_source_selection_filter($source, $remote_source=NULL, $upgrader=NULL){
	/*
		Github delivers zip files as <Username>-<TagName>-<Hash>.zip
		must rename this zip file to the accurate theme folder
	*/
  error_log("Source: ".$source." remote source:".$remote_source." theme:".$upgrader->skin->theme);
	if(isset($source, $remote_source, $upgrader->skin->theme)){
		$corrected_source = $remote_source . '/' . $upgrader->skin->theme . '/';
		if(@rename($source, $corrected_source)){
      return $corrected_source;
		} else {
			$upgrader->skin->feedback("Unable to rename downloaded theme.");
			return new WP_Error();
		}
	}
	return $source;
}
/*
   Function to address the issue that users in a standalone WordPress installation
   were receiving SSL errors and were unable to install themes.
   https://github.com/UCF/Theme-Updater/issues/3
*/
add_action('http_request_args', 'no_ssl_http_request_args', 10, 2);
function no_ssl_http_request_args($args, $url) {
	$args['sslverify'] = false;
	return $args;
}
