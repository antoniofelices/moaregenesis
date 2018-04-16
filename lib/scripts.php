<?php
/**
 * Moare Genesis.
 *
 * This file adds scripts to Moare Genesis Starter Theme.
 *
 * @package moare-genesis
 * @author  Antonio
 * @since 	1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.0
 */

// Enqueue Scripts and Styles.
add_action( 'wp_enqueue_scripts', 'mg_enqueue_scripts_styles' );
function mg_enqueue_scripts_styles() {

	wp_enqueue_style( 'moare-genesis-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700', array(), CHILD_THEME_VERSION );

	$suffix = ( defined( 'WP_DEBUG' ) && WP_DEBUG ) ? '' : '.min';

	wp_enqueue_style( 'mainstyles', get_stylesheet_directory_uri() . "/assets/stylesheets/main{$suffix}.css", CHILD_THEME_VERSION, null );
	wp_enqueue_script( 'moare-genesis-responsive-menu', get_stylesheet_directory_uri() . "/assets/js/lib/responsive-menus{$suffix}.js", array( 'jquery' ), CHILD_THEME_VERSION, true );
	wp_enqueue_script( 'mainscripts', get_stylesheet_directory_uri() . "/assets/js/main{$suffix}.js", array('jquery'), CHILD_THEME_VERSION, true );

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
