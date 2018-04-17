<?php
/**
 * Moare Genesis.
 *
 * This file adds custom functions to Moare Genesis Starter Theme.
 *
 * @package moare-genesis
 * @author  Antonio
 * @since 	1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.0
 */

/**
 * Header: reposition primary menu navigation, add widget area
 *
 * @since 	1.0.0
 */
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'mg_all_custom_header', 10 );
function mg_all_custom_header(){

	// Site title
	echo '<div class="title-area">';
	do_action( 'genesis_site_title' );
	echo '</div>';

	// Site navbar
	if ( ! genesis_nav_menu_supported( 'primary' ) ){

		return;

	} else{

		genesis_nav_menu( array(
			'theme_location' => 'primary',
			'menu_class'     => 'menu genesis-nav-menu',
		) );

	}

}

/**
 * Custom Footer. All.
 *
 * @since 	1.0.0
 */
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );
add_action( 'genesis_footer', 'mg_all_custom_footer' );
function mg_all_custom_footer() {

	echo '<footer class="site-footer">';

	echo '<div class="mg-main-footer"><div class="wrap">';
	genesis_widget_area( 'footer', array(
		'before' => '<section>',
		'after' => '</section>',
	) );
	echo "</div></div>";

	echo '<div class="mg-sub-footer"><div class="wrap">';
	genesis_widget_area( 'subfooter', array(
		'before' => '<section>',
		'after' => '</section>',
	) );
	echo "</div></div>";

	echo "</footer>";

}

/**
 * Remove post-meta. All.
 *
 * @since 	1.0.0
 */
// add_action ( 'genesis_before_loop', 'mg_all_remove_post_info' );
function mg_all_remove_post_info() {

	remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
	remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

}
