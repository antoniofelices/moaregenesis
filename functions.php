<?php
/**
 * Moare Genesis.
 *
 * This file adds functions for the Moare Genesis Starter Theme.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since   1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 2.0.4
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
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since 2.0.0
 *
 * @return void
 */
add_action( 'after_setup_theme', 'mg_setup_theme_supported_features' );
function mg_setup_theme_supported_features() {

	// Add support for other block styles.
	// add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/stylesheets/editor-style-block.css' );

}

/**
 * Enable the block-based widget editor
 *
 * @since 1.0.10
 */
add_filter( 'use_widgets_block_editor', '__return_true' );

/**
 * Registers the responsive menus.
 *
 * @since 1.0.10
 */
if ( function_exists( 'genesis_register_responsive_menus' ) ) {

	genesis_register_responsive_menus( genesis_get_config( 'responsive-menus' ) );

}

// Scripts.
include_once( get_stylesheet_directory() . '/lib/scripts.php' );

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

// Patterns.
include_once( get_stylesheet_directory() . '/lib/patterns.php' );

// Custom functions.
include_once( get_stylesheet_directory() . '/lib/custom-functions.php' );

// Custom.
include_once( get_stylesheet_directory() . '/lib/custom.php' );
