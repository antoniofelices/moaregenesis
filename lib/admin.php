<?php
/**
 * Moare Genesis.
 *
 * This file customize backend the Moare Genesis Starter Theme.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since 	1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.7
 */

/**
 * Genesis: remove layouts. All.
 *
 * @since 	1.0.6
 */
// genesis_unregister_layout( 'full-width-content' );
// genesis_unregister_layout( 'content-sidebar' );
// genesis_unregister_layout( 'sidebar-content' );
// genesis_unregister_layout( 'content-sidebar-sidebar' );
// genesis_unregister_layout( 'sidebar-sidebar-content' );
// genesis_unregister_layout( 'sidebar-content-sidebar' );

/**
 * Genesis: remove metaboxes. Pages and post.
 *
 * @since 	1.0.6
 */
add_action( 'admin_menu' , 'mg_remove_genesis_metaboxes' );
function mg_remove_genesis_metaboxes() {

	$things_to_remove = array(
		'genesis_inpost_scripts_box',
		'genesis_inpost_seo_box',
		'genesis_inpost_layout_box',
	);
	$types = array( 'post', 'page' );

	foreach ( $things_to_remove as $value ) {

		remove_meta_box( $value, $types, 'normal' );

	}

}
