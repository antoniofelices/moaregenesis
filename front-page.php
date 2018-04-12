<?php
/**
 * Radio Nikosia.
 *
 * This file adds functions to the Radio Nikosia front page.
 *
 * @package radio-nikosia
 * @author  Antonio
 * @since 	1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.0
 */

/**
 * Commons
 *
 * @since 	1.0.0
 */
add_action( 'genesis_meta', 'mg_front_page_meta' );
function mg_front_page_meta() {

	// Force full width content layout.
	add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

	// Remove the default Genesis loop.
	remove_action( 'genesis_loop', 'genesis_do_loop' );

}

/**
 * Add accessibility
 *
 * @since  1.0.0
 */
add_filter( 'genesis_attr_site-inner', 'mg_site_inner_attr' );
function mg_site_inner_attr( $attributes ) {

	$attributes['id'] = 'genesis-content';

	$attributes = wp_parse_args( $attributes, genesis_attributes_entry( array() ) );

	return $attributes;
}


/**
 * Main example
 *
 * @since 	1.0.0
 */
add_action( 'mg_content_area_front_page', 'mg_front_page_main_example' );
function mg_front_page_main_example() {

}

get_header();
do_action( 'mg_content_area_front_page' );
get_footer();
