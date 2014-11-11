<?php

function load_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/assets/vendor/bootstrap/css/bootstrap.min.css', false );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri(). '/assets/vendor/bootstrap/js/bootstrap.min.js', array( 'jquery' ) );
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

?>