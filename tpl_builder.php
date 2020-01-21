<?php
/**
 * Moare Genesis.
 *
 * This file create template builder.
 *
 * Template Name: Builder
 *
 * @package moaregenesis
 * @author  Antonio
 * @since 	1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.6
 */

/**
* Commons
*
* @since 1.0.4
*/
add_action( 'genesis_meta', 'mg_tpl_builder_layout' );
function mg_tpl_builder_layout() {

	// Force full width content layout.
	add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

	remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

}

/**
 * Add body class.
 *
 * @since 1.0.4
 *
 * @param array $classes Current classes.
 * @return array $classes Updated class array.
 */
add_filter( 'body_class', 'mg_tpl_builder_wrap_content_body_class' );
function mg_tpl_builder_wrap_content_body_class( $classes ) {

	$classes[] = 'builder';

	return $classes;

}

/**
 * Flexible content. Page about.
 *
 * @since  1.0.4
 */
add_action( 'genesis_entry_content', 'mg_tpl_builder_all_flexible_content' );
function mg_tpl_builder_all_flexible_content() {

	mg_cf_flexible_content();

}


// Run the Genesis loop.
genesis();
