<?php


use WpTailwindCssThemeBoilerplate\AutoLoader;
use WpTailwindCssThemeBoilerplate\View;


/*
 * Set up our auto loading class and mapping our namespace to the app directory.
 *
 * The autoloader follows PSR4 autoloading standards so, provided StudlyCaps are used for class, file, and directory
 * names, any class placed within the app directory will be autoloaded.
 *
 * i.e; If a class named SomeClass is stored in app/SomeDir/SomeClass.php, there is no need to include/require that file
 * as the autoloader will handle that for you.
 */
require get_stylesheet_directory() . '/app/AutoLoader.php';
$loader = new AutoLoader();
$loader->register();
$loader->addNamespace( 'WpTailwindCssThemeBoilerplate', get_stylesheet_directory() . '/app' );

View::$view_dir = get_stylesheet_directory() . '/templates/views';

function add_custom_script_attr( $tag, $handle, $src ) {
    $scriptArr = array('app', 'slick');

    if (in_array($handle, $scriptArr)) {
    $tag = str_replace( 'src=', 'defer sync="false" src=', $tag );
    }
    return $tag;
}
function add_custom_style_attr( $tag, $handle, $src ) {
    $scriptArr = array('slick', 'wp-block-library', 'offcanvas');

    if (in_array($handle, $scriptArr)) {
    $tag = str_replace( 'href=', 'rel="preload" as="style" onload="this.onload=null;this.rel=\'stylesheet\'" defer sync="false" href=', $tag );
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'add_custom_script_attr', 10, 3 );
add_filter( 'style_loader_tag', 'add_custom_style_attr', 10, 3 );


require get_stylesheet_directory() . '/includes/scripts-and-styles.php';
// require get_stylesheet_directory() . '/includes/blocks.php';
// require get_stylesheet_directory() . '/includes/project_cpt.php';

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}


function register_my_menus() {
	register_nav_menus(
	  array(
		'header-menu' => __( 'Header Menu' ),
	  )
	);
  }
  add_action( 'init', 'register_my_menus' );



/**
 * Register Custom Navigation Walker
 */
 function register_navwalker(){
	require_once get_template_directory() . '/includes/nav_walker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


//remove cf7 styles
// add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );


// function remove_block_css(){
// 	wp_dequeue_style( 'wp-block-library' );
// 	}
// 	add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );