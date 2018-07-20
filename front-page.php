<?php
/**
 * Moare Genesis.
 *
 * This file adds functions for the Moare Genesis Starter Theme front page.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since 	1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.1
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
 * Opening wrap.
 *
 * @since 	1.0.0
 */
add_action( 'mg_front_page_content_area', 'mg_front_page_open' );
function mg_front_page_open() {

	echo '<div class="content-sidebar-wrap">';
	echo '<main id="genesis-content" class="content">';

}

/**
 * Main example
 *
 * @since 	1.0.0
 */
add_action( 'mg_front_page_content_area', 'mg_front_page_main_example' );
function mg_front_page_main_example() {

}

/**
 * Closing wrap.
 *
 * @since 	1.0.0
 */
add_action( 'mg_front_page_content_area', 'mg_front_page_close' );
function mg_front_page_close() {

	echo '</main>';
	echo '</div>';

}

get_header();
do_action( 'mg_front_page_content_area' );
get_footer();
