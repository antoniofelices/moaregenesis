<?php
/**
 * Moare Genesis.
 *
 * This file adds widgets areas to Moare Genesis Starter Theme.
 *
 * @package moare-genesis
 * @author  Antonio
 * @since 	1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.0
 */

// Unregister widget areas.
unregister_sidebar( 'header-right' );
unregister_sidebar( 'sidebar-alt' );

// Register widget areas.
genesis_register_widget_area( array(
	'id'          => 'footer',
	'name'        => __( 'Footer', 'moare-genesis' ),
	'description' => __( 'Widget area to  footer section.', 'moare-genesis' ),
) );

genesis_register_widget_area( array(
	'id'          => 'subfooter',
	'name'        => __( 'Sub Footer', 'rnk' ),
	'description' => __( 'Widget area to sub footer section.', 'moare-genesis' ),
) );
