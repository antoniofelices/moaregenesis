<?php
/**
 * Moare Genesis.
 *
 * This file adds custom taxonomy patterns for the Moare Genesis Starter Theme.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since   2.0.2
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 2.0.5
 */

add_action( 'init', 'mg_register_block_categories' );
function mg_register_block_categories() {

	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {

		register_block_pattern_category(
			'moarepatterns',
			array( 'label' => _x( 'Moare', 'Block pattern category', 'moaregenesis' ) )
		);

	}

}
