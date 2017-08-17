<?php
/**
 * Moare Genesis.
 *
 * This file adds functions to the Moare Genesis Starter Theme.
 *
 * @package moare-genesis
 * @author  Antonio
 * @since 	1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.0
 */

// Start the engine.
include_once( get_template_directory() . '/lib/init.php' );

// Setup Theme.
include_once( get_stylesheet_directory() . '/lib/theme-defaults.php' );

// Set Localization (do not remove).
add_action( 'after_setup_theme', 'mg_localization_setup' );
function mg_localization_setup(){

	load_child_theme_textdomain( 'moare-genesis', get_stylesheet_directory() . '/languages' );

}

// Child theme (do not remove).
define( 'CHILD_THEME_NAME', 'Moare Genesis' );
define( 'CHILD_THEME_URL', 'http://www.studiomoare.com/' );
define( 'CHILD_THEME_VERSION', '1.0.0' );


// Enqueue Scripts and Styles.
add_action( 'wp_enqueue_scripts', 'mg_enqueue_scripts_styles' );
function mg_enqueue_scripts_styles() {

	if ( WP_DEBUG || SCRIPT_DEBUG ){

		// styles
		wp_enqueue_style( 'moare-genesis-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700', array(), CHILD_THEME_VERSION );
		wp_enqueue_style( 'mainstyles', get_stylesheet_directory_uri() . '/assets/stylesheets/main.css', CHILD_THEME_VERSION, null );

		// js
		wp_enqueue_script( 'moare-genesis-responsive-menu', get_stylesheet_directory_uri() . "/assets/js/lib/responsive-menus.js", array( 'jquery' ), CHILD_THEME_VERSION, true );
		wp_enqueue_script( 'mainscripts', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), CHILD_THEME_VERSION, true );

	}else{

		// styles
		wp_enqueue_style( 'moare-genesis-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700', array(), CHILD_THEME_VERSION );
		wp_enqueue_style( 'mainstyles', get_stylesheet_directory_uri() . '/assets/stylesheets/main.min.css', CHILD_THEME_VERSION, null );

		// js
		wp_enqueue_script( 'mainscripts', get_stylesheet_directory_uri() . '/assets/js/main.min.js', array('jquery'), CHILD_THEME_VERSION, true );

	}

	wp_localize_script(
		'moare-genesis-responsive-menu',
		'genesis_responsive_menu',
		mg_responsive_menu_settings()
	);

}

// Define our responsive menu settings.
function mg_responsive_menu_settings() {

	$settings = array(
		'mainMenu'          => __( 'Menu', 'moare-genesis' ),
		'menuIconClass'     => 'dashicons-before dashicons-menu',
		'subMenu'           => __( 'Submenu', 'moare-genesis' ),
		'subMenuIconsClass' => 'dashicons-before dashicons-arrow-down-alt2',
		'menuClasses'       => array(
			'combine' => array(
				'.nav-primary',
				'.nav-header',
			),
			'others'  => array(),
		),
	);

	return $settings;

}

// Add HTML5 markup structure.
add_theme_support( 'html5', array( 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ) );

// Add title-tag to Let WordPress Handle the Title Tag
add_theme_support( 'title-tag' );

// Add viewport meta tag for mobile browsers.
add_theme_support( 'genesis-responsive-viewport' );

// Add support for after entry widget.
add_theme_support( 'genesis-after-entry-widget-area' );

// Add support for 2-column footer widgets.
add_theme_support( 'genesis-footer-widgets', 2 );

// Rename primary and secondary navigation menus.
add_theme_support( 'genesis-menus', array( 'primary' => __( 'After Header Menu', 'moare-genesis' ), 'secondary' => __( 'Footer Menu', 'moare-genesis' ) ) );

// Reduce the secondary navigation menu to one level depth.
add_filter( 'wp_nav_menu_args', 'mg_secondary_menu_args' );
function mg_secondary_menu_args( $args ) {

	if ( 'secondary' != $args['theme_location'] ) {
		return $args;
	}

	$args['depth'] = 1;

	return $args;

}

// Remove Emojis
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Register widget areas.
genesis_register_widget_area( array(
	'id'          => 'front-page-1',
	'name'        => __( 'Front Page 1', 'moare-genesis' ),
	'description' => __( 'This is the front page 1 section.', 'moare-genesis' ),
) );

add_action( 'genesis_after_header', 'mg_widgets_home' );
function mg_widgets_home() {

  	if ( is_home() ) {
		remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
	  	genesis_widget_area( 'front-page-1', array(
			'before' => '',
			'after' => '',
		)
		);
  	};

}
