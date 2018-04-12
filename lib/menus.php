<?php
/**
 * Moare Genesis.
 *
 * This file adds menus to Moare Genesis Starter Theme.
 *
 * @package moare-genesis
 * @author  Antonio
 * @since 	1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.0
 */

// Reduce the secondary navigation menu to one level depth.
add_filter( 'wp_nav_menu_args', 'mg_secondary_menu_args' );
function mg_secondary_menu_args( $args ) {

	if ( 'secondary' != $args['theme_location'] ) {
		return $args;
	}

	$args['depth'] = 1;

	return $args;

}
