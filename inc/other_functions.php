<?php 

function picnic_add_scripts() {
	wp_enqueue_style( 'picnic-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), _S_VERSION );

	wp_enqueue_script( 'picnic-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'picnic-custom', get_template_directory_uri() . '/js/formpage.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'picnic_add_scripts' );




/*
* Creating a function to create our CPT
*/
  
function custom_post_type() {
  
    $labels = array(
        'name'                => _x( 'Bookings', 'Post Type General Name', 'picnic' ),
        'singular_name'       => _x( 'Booking', 'Post Type Singular Name', 'picnic' ),
        'menu_name'           => __( 'Bookings', 'picnic' ),
        'parent_item_colon'   => __( 'Parent Booking', 'picnic' ),
        'all_items'           => __( 'All Bookings', 'picnic' ),
        'view_item'           => __( 'View Booking', 'picnic' ),
        'add_new_item'        => __( 'Add New Booking', 'picnic' ),
        'add_new'             => __( 'Add New', 'picnic' ),
        'edit_item'           => __( 'Edit Booking', 'picnic' ),
        'update_item'         => __( 'Update Booking', 'picnic' ),
        'search_items'        => __( 'Search Booking', 'picnic' ),
        'not_found'           => __( 'Not Found', 'picnic' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'picnic' ),
    );
      
      
    $args = array(
        'label'               => __( 'Bookings', 'picnic' ),
        'menu_icon'			  => 'dashicons-building',
        'description'         => __( 'Booking news and reviews', 'picnic' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'custom-fields' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
  
    );
      
    register_post_type( 'bookings', $args );
}
  

  
add_action( 'init', 'custom_post_type', 0 );

