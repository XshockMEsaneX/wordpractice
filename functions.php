<?php

function load_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/assets/vendor/bootstrap/css/bootstrap.min.css', false );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri(). '/assets/vendor/bootstrap/js/bootstrap.min.js', array( 'jquery' ) );
	wp_enqueue_style( 'theme', get_template_directory_uri(). '/assets/css/theme.css', 'bootstrap' );
	wp_enqueue_script( 'theme', get_template_directory_uri(). '/assets/js/theme.js', array( 'jquery', 'bootstrap' ) );
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

function practice_customizer_register( $wp_customize ) {
	$wp_customize->add_section( 'header_colors', array(
		'title' => __('Colors', 'practice' ),
		'description' => 'Modify theme colors'
	));
	$wp_customize->add_section( 'background_colors', array(
		'default' => '#ffffff',
	));
}

add_action( 'customize_register', 'practice_customizer_register' );

?>