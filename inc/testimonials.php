<?php

//Exit if accessed directly
    if ( ! defined( "ABSPATH")) {
        exit;
    }
 
 
function create_posttype() {
  $args = array(
    'labels' => array(
      'name' => __('Testimonials'),
      'singular_name' => __('Testimonials'),
      'all_items' => __('All Testimonials'),
      'add_new_item' => __('Add New Testimonial'),
      'edit_item' => __('Edit Testimonial'),
      'view_item' => __('View Testimonial')
    ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'testimonials'),
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'capability_type' => 'page',
    'supports' => array('title', 'editor', 'thumbnail'),
    'exclude_from_search' => true,
    'menu_position' => 80,
    'has_archive' => true,
    'menu_icon' => 'dashicons-format-status'
    );
  register_post_type('testimonials', $args);
}

add_action( 'init', 'create_posttype');
    
function podcaster_testimonial_metabox(){
    add_meta_box( 'testimonial-details', 'Testimonial Details', 'my_meta_box_cb', 'testimonials', 'normal', 'default');
}
function my_meta_box_cb($post){
    $values = get_post_custom( $post->ID );
    $client_name = isset( $values['client_name'] ) ? esc_attr( $values['client_name'][0] ) : "";
    $company = isset( $values['company'] ) ? esc_attr( $values['company'][0] ) : "";
    wp_nonce_field( 'testimonial_details_nonce_action', 'testimonial_details_nonce' );
    $html = '';
    $html .= '<label>Client Name</label>';
    $html .= '<input type="text" name="client_name" id="client_name" style="margin-top:15px; margin-left:9px; margin-bottom:10px;" value="'. $client_name .'" /><br/>';
    $html .= '<label>Company</label>';
    $html .= '<input type="text" name="company" id="company" style="margin-left:25px; margin-bottom:15px;" value="'. $company .'" />';
    echo $html;
}
function my_save_meta_box($post_id){
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
 
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['testimonial_details_nonce'] ) || !wp_verify_nonce( $_POST['testimonial_details_nonce'], 'testimonial_details_nonce_action' ) ) return;
 
    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;
 
    if(isset( $_POST['client_name'] ) )
        update_post_meta( $post_id, 'client_name', $_POST['client_name']);
 
    if(isset( $_POST['company'] ) )
        update_post_meta( $post_id, 'company', $_POST['company']);
}
add_action( 'add_meta_boxes', 'podcaster_testimonial_metabox' );
add_action( 'save_post', 'my_save_meta_box' );