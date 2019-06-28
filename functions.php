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
 * @version 1.0.5
 */

// Start the engine.
include_once( get_template_directory() . '/lib/init.php' );

// Setup Theme.
include_once( get_stylesheet_directory() . '/lib/theme-defaults.php' );

// Set Localization (do not remove).
add_action( 'after_setup_theme', 'mg_localization_setup' );
function mg_localization_setup(){

	load_child_theme_textdomain( 'moaregenesis', get_stylesheet_directory() . '/languages' );

}

// Gutenberg.
include_once( get_stylesheet_directory() . '/lib/block-editor.php' );

// Child theme (do not remove).
define( 'CHILD_THEME_NAME', 'Moare Genesis' );
define( 'CHILD_THEME_URL', 'http://www.studiomoare.com/' );
define( 'CHILD_THEME_VERSION', '1.0.5' );

// Add HTML5 markup structure.
add_theme_support( 'html5', array(
	'caption',
	'comment-form',
	'comment-list',
	'gallery',
	'search-form',
) );

// Add Accessibility support.
// Have to use _accesibility.scss file
add_theme_support( 'genesis-accessibility', array(
	'404-page',
	'drop-down-menu',
	'headings',
	'search-form',
	'skip-links'
) );

/**
 * Remove wraps: header, primary menu.
 *
 * @since 	1.0.0
 */
// One by one
// add_theme_support( 'genesis-structural-wraps', array(
//     'header',
//     'menu-primary',
//     'menu-secondary',
//     'footer-widgets',
//     'footer'
// ) );

// All wraps
remove_theme_support( 'genesis-structural-wraps' );

/**
 * Add_theme_support custom logo.
 * Same values mg_all_custom_header()
 *
 * @since 	1.0.3
 */
add_theme_support( 'custom-logo', array(
	'height'      => 75,
	'width'       => 150,
	'flex-height' => false,
	'flex-width'  => false, )
);

// Add title-tag to Let WordPress Handle the Title Tag
add_theme_support( 'title-tag' );

// Add viewport meta tag for mobile browsers.
add_theme_support( 'genesis-responsive-viewport' );

// Add support for after entry widget.
add_theme_support( 'genesis-after-entry-widget-area' );

// Add support for 2-column footer widgets.
add_theme_support( 'genesis-footer-widgets', 3 );

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

// Custom.
include_once( get_stylesheet_directory() . '/lib/custom.php' );
