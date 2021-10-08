<?php
/**
 * Moare Genesis.
 *
 * This file adds functions for the Moare Genesis Starter Theme.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since 	1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.10
 */

// Start the engine.
require_once get_template_directory() . '/lib/init.php';

// Set Localization.
add_action( 'after_setup_theme', 'mg_localization_setup' );
function mg_localization_setup(){

	load_child_theme_textdomain( 'moaregenesis', get_stylesheet_directory() . '/languages' );

}

/**
 * Add desired theme supports.
 * See config file at `config/theme-supports.php`.
 *
 * @since 1.0.7
 */
add_action( 'after_setup_theme', 'mg_theme_support', 9 );
function mg_theme_support() {

	$theme_supports = genesis_get_config( 'theme-supports' );

	foreach ( $theme_supports as $feature => $args ) {
		add_theme_support( $feature, $args );
	}

	// If use single elements, comment this and add elements at `config/theme-supports.php`
	remove_theme_support( 'genesis-structural-wraps' );

}

/** 
 * Enable the block-based widget editor
 * 
 * @since 1.0.10
 */

// add_filter( 'use_widgets_block_editor', '__return_true' );

// Registers the responsive menus.
if ( function_exists( 'genesis_register_responsive_menus' ) ) {

	genesis_register_responsive_menus( genesis_get_config( 'responsive-menus' ) );
	
}

// Scripts.
include_once( get_stylesheet_directory() . '/lib/scripts.php' );

// Block editor.
include_once( get_stylesheet_directory() . '/lib/block-editor.php' );

// Adds helper functions.
include_once( get_stylesheet_directory() . '/lib/helper-functions.php' );

// Adds image upload and color select to Customizer.
include_once( get_stylesheet_directory() . '/lib/customize.php' );

// Includes Customizer CSS.
include_once( get_stylesheet_directory() . '/lib/output.php' );

// Custom fields.
include_once( get_stylesheet_directory() . '/lib/custom-fields.php' );

// Widgets areas.
include_once( get_stylesheet_directory() . '/lib/widgets-areas.php' );

// Menus.
include_once( get_stylesheet_directory() . '/lib/menus.php' );

// Grid.
include_once( get_stylesheet_directory() . '/lib/grid.php' );

// Admin.
include_once( get_stylesheet_directory() . '/lib/admin.php' );

// Custom functions.
include_once( get_stylesheet_directory() . '/lib/custom-functions.php' );

// Custom.
include_once( get_stylesheet_directory() . '/lib/custom.php' );
