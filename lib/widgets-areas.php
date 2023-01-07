<?php
/**
 * Moare Genesis.
 *
 * This file adds widgets areas for the Moare Genesis Starter Theme.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since   1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 2.0.3
 */

// Unregister widget areas.
unregister_sidebar( 'header-right' );
unregister_sidebar( 'sidebar-alt' );

// Only if use sidebar-alt, reposition this inside content-sidebar-wrap
// remove_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt' );
// add_action( 'genesis_after_content', 'genesis_get_sidebar_alt' );

// Register widget areas.
genesis_register_widget_area( array(
	'id'          => 'footer',
	'name'        => __( 'Footer', 'moaregenesis' ),
	'description' => __( 'Widget area to footer section.', 'moaregenesis' ),
) );
