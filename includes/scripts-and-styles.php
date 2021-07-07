<?php


use WpTailwindCssThemeBoilerplate\AssetResolver;


add_action( 'wp_enqueue_scripts', function () {

	// registers scripts and stylesheets
	wp_register_style( 'app', AssetResolver::resolve( 'css/app.css' ), [], false );
	
	wp_register_script( 'app', AssetResolver::resolve( 'js/app.js' ), [], false, true );

	//slick slider
	wp_register_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css', [], false );
	wp_register_script( 'slick', get_template_directory_uri() . '/assets/slick/slick.min.js', [], false, true );

	wp_register_script( 'offcanvas', get_template_directory_uri() . '/build/js/offcanvas.js', [], false, true );

	// enqueue global assets
	wp_enqueue_script( 'jquery' );

	//load third party
	wp_enqueue_style( 'slick' );
	wp_enqueue_script( 'slick' );

	//load custom
	wp_enqueue_style( 'app' );
	wp_enqueue_script( 'app' );

	wp_enqueue_style( 'vendor' );
	wp_enqueue_script( 'offcanvas' );

} );