<?php
/**
 * Moare Genesis.
 *
 * This file adds menus for the Moare Genesis Starter Theme.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since 	1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.7
 */

// Reduce the secondary navigation menu to one level depth.
add_filter( 'wp_nav_menu_args', 'mg_secondary_menu_args' );
function mg_secondary_menu_args( $args ) {

	if ( 'secondary' === $args['theme_location'] ) {
		$args['depth'] = 1;
	}

	return $args;

}
