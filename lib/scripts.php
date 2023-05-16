<?php
/**
 * Moare Genesis.
 *
 * This file adds scripts for the Moare Genesis Starter Theme.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since   1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 2.0.5
 */

// Enqueue Scripts and Styles.
add_action( 'wp_enqueue_scripts', 'mg_enqueue_scripts_styles' );
function mg_enqueue_scripts_styles() {

	wp_enqueue_style(
		'mainstyles',
		get_stylesheet_directory_uri() . "/assets/stylesheets/main.css",
		[],
		genesis_get_theme_version()
	);

	wp_enqueue_script(
		'mainscripts',
		get_stylesheet_directory_uri() . "/assets/js/main.js",
		array('jquery'),
		genesis_get_theme_version(),
		true
	);

}
