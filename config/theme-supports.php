<?php
/**
 * Moare Genesis.
 *
 * Theme supports.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since 	1.0.7
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.7
 */

return [
	'genesis-custom-logo'             => [
		'height'      => 75,
		'width'       => 150,
		'flex-height' => false,
		'flex-width'  => false,
	],
	'html5'                           => [
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'navigation-widgets',
		'search-form',
		'script',
		'style',
	],
	'genesis-accessibility'           => [
		'404-page',
		'drop-down-menu',
		'headings',
		'search-form',
		'skip-links',
	],
	'genesis-after-entry-widget-area' => '',
	'genesis-menus'                   => [
		'primary'   => __( 'Main Menu', 'moaregenesis' ),
		'subfooter' => __( 'Sub Footer Menu', 'moaregenesis' ),
	],
	// 'genesis-footer-widgets'          => 3,
	// 'genesis-structural-wraps'        => [
	//		'header',
	//		'menu-primary',
	//		'menu-secondary',
	//		'footer-widgets',
	//		'footer'
	// ]
];