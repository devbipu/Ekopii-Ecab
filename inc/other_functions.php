<?php 

function picnic_add_scripts() {
	wp_enqueue_style( 'picnic-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), _S_VERSION );

	wp_enqueue_script( 'picnic-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'picnic-custom', get_template_directory_uri() . '/js/formpage.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'picnic_add_scripts' );