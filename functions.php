<?php

// Allows support for menus
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

// Tells WordPress we have a specific menu set up
function register_theme_menus() {

	// List of menus on site. Specific menu areas.
	register_nav_menus(
		array(
			'primary-menu' => _( 'Primary Menu' )
		)
	);
}

// Hooks into function when page is initialized
add_action( 'init', 'register_theme_menus');

// Created function for enqueuing theme styles. 'wpt' is the namespace.
function wpt_theme_styles() {

	// Enqueues style. get_template_directory_uri is theme directory. foundation_css is shorthand for the file
	wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.css' );
	//wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'googlefont_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

// add_action tells wordpress when to enqueue styles
// wp_enqueue_scripts is a hook that tells wordpress what styles, scripts to load
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

// Created function for enqueuing theme scripts. 'wpt' is the namespace.
function wpt_theme_js() {

	// Enqueues a script. 
	// Third paramater is array of dependents. 
	// Fourth parameter is version. 
	// Final paramater is true/false to put script in footer
	wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false );
	wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true );
}

add_action( 'wp_enqueue_scripts', 'wpt_theme_js');
?>