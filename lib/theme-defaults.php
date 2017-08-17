<?php
/**
 * Moare Genesis.
 *
 * This file adds the default theme settings to the Moare Genesis Theme.
 *
 * @package moare-genesis
 * @author  Antonio
 * @since 	1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.0
 */

add_filter( 'genesis_theme_settings_defaults', 'mg_theme_defaults' );
/**
* Updates theme settings on reset.
*
* @since 2.2.3
*/
function mg_theme_defaults( $defaults ) {

	$defaults['blog_cat_num']              = 6;
	$defaults['content_archive']           = 'full';
	$defaults['content_archive_limit']     = 0;
	$defaults['content_archive_thumbnail'] = 0;
	$defaults['posts_nav']                 = 'numeric';
	$defaults['site_layout']               = 'content-sidebar';

	return $defaults;

}

add_action( 'after_switch_theme', 'mg_theme_setting_defaults' );
/**
* Updates theme settings on activation.
*
* @since 2.2.3
*/
function mg_theme_setting_defaults() {

	if ( function_exists( 'genesis_update_settings' ) ) {

		genesis_update_settings( array(
			'blog_cat_num'              => 6,
			'content_archive'           => 'full',
			'content_archive_limit'     => 0,
			'content_archive_thumbnail' => 0,
			'posts_nav'                 => 'numeric',
			'site_layout'               => 'content-sidebar',
		) );

	}

	update_option( 'posts_per_page', 6 );

}
