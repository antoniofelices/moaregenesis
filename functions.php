<?php
/**
 * Moare Genesis.
 *
 * This file adds functions to Moare Genesis Starter Theme.
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

// Add HTML5 markup structure.
add_theme_support( 'html5', array(
	'caption',
	'comment-form',
	'comment-list',
	'gallery',
	'search-form',
) );

/**
 * Remove wraps: header, primary menu.
 *
 * @since 	1.0.0
 */
add_theme_support( 'genesis-structural-wraps', array(
    // 'header',
    // 'menu-primary',
    'menu-secondary',
    'footer-widgets',
    'footer'
) );

// Add title-tag to Let WordPress Handle the Title Tag
add_theme_support( 'title-tag' );

// Add viewport meta tag for mobile browsers.
add_theme_support( 'genesis-responsive-viewport' );

// Add support for after entry widget.
add_theme_support( 'genesis-after-entry-widget-area' );

// Add support for 2-column footer widgets.
add_theme_support( 'genesis-footer-widgets', 2 );

// Scripts.
include_once( get_stylesheet_directory() . '/lib/scripts.php' );

// Custom fields.
include_once( get_stylesheet_directory() . '/lib/custom-fields.php' );

// Widgets areas.
include_once( get_stylesheet_directory() . '/lib/widgets-areas.php' );

// Menus.
include_once( get_stylesheet_directory() . '/lib/menus.php' );

// Custom.
include_once( get_stylesheet_directory() . '/lib/custom.php' );
