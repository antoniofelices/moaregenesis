<?php
/**
 * Moare Genesis.
 *
 * This file adds function to archive for the Moare Genesis Starter Theme.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since   1.0.11
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 2.0.4
 */


/**
 * Size thumbnail image.
 * Archives: all cpts and taxs.
 *
 * @since 2.0.3
 */
add_filter( 'genesis_pre_get_option_image_size', 'mg_cpts_and_tax_change_image_presence' );
function mg_cpts_and_tax_change_image_presence() {

	if ( is_post_type_archive() || is_tax() ) {

		return 'medium';

	}

}

/**
 * Remove align.
 * Archives: all cpts and taxs.
 *
 * @since 2.0.3
 */
add_filter( 'genesis_pre_get_option_image_alignment','mg_cpts_and_tax_change_image_align' );
function mg_cpts_and_tax_change_image_align() {

	if ( is_post_type_archive() || is_tax() ) {

		return 'alignnone';

	}

}

/**
 * Remove content, footer entry.
 * Archives: all cpts and taxs.
 *
 * @since 2.0.3
 */
add_action( 'genesis_before_entry', 'mg_cpts_and_tax_remove_content' );
function mg_cpts_and_tax_remove_content() {

	if ( is_post_type_archive() || is_tax() ) {

		remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
		remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
		remove_action( 'genesis_entry_footer', 'genesis_post_meta' );
		remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );

	}

}

// Run the Genesis loop.
genesis();
