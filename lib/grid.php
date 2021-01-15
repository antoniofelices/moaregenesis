<?php
/**
 * Moare Genesis.
 *
 * This file adds grid layout for the Moare Genesis Starter Theme.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since 	1.0.1
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.9
 */

/**
 * Force full width layout.
 * Archives: post type archives, custom taxonomies.
 *
 * @since 	1.0.1
 */
add_action( 'genesis_meta', 'mg_full_width_layout_archives' );
function mg_full_width_layout_archives() {

	if( is_post_type_archive() || is_tax() ){

		add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

	}

}

/**
 * Defines layout 2 width entries body class.
 * Archives: post type archives, custom taxonomies.
 *
 * @since 1.0.1
 *
 * @param array $classes Current classes.
 * @return array $classes Updated class array.
 */
add_filter( 'body_class', 'mg_width_entry_class' );
function mg_width_entry_class( $classes ) {

	if ( is_post_type_archive() ) {
		$classes[] = 'width-2-entries';
	}

	if ( is_tax() ) {
		$classes[] = 'width-3-entries';
	}

	return $classes;

}
