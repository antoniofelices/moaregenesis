<?php
/**
 * Moare Genesis.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since   1.0.7
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 2.0.2
 */

/**
 * Genesis responsive menus settings. (Requires Genesis 3.0+.)
 */
return [
	'script' => [
		'mainMenu'         => __( '<span class="screen-reader-text">Menu</span>' ),
		'menuIconClass'    => '',
		'menuClasses'      => [
			// 'combine' => [
			// 	'.nav-primary',
			// 	'.nav-lang'
			// ],
			'others' => [
				'.nav-primary'
			],
		],
	],
	'extras' => [
		'media_query_width' => '1200px',
	],
];
