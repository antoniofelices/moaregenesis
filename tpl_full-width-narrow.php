<?php
/**
 * Moare Genesis.
 *
 * This file create template Full Width.
 *
 * Template Name: Full Width Narrow
 * Template Post Type: post, page, mycustom
 *
 * @package moaregenesis
 * @author  Antonio
 * @since 	1.0.2
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.10
 */

/**
* Commons
*
* @since 1.0.2
*/
add_action( 'genesis_meta', 'mg_tpl_full_width_narrow_layout' );
function mg_tpl_full_width_narrow_layout() {

	// Force full width content layout.
	add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

	remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

}

/**
 * Add body class.
 *
 * @since 1.0.2
 *
 * @param array $classes Current classes.
 * @return array $classes Updated class array.
 */
add_filter( 'body_class', 'mg_tpl_full_width_narrow_body_class' );
function mg_tpl_full_width_narrow_body_class( $classes ) {

	$classes[] = 'narrow';

	return $classes;

}

// Run the Genesis loop.
genesis();
