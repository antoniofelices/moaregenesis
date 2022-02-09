<?php
/**
 * Moare Genesis.
 * 
 * Appearance settings.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since 	1.0.7
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 2.0.0
 */

$mg_default_colors = [
	'link'   => '#0000ff',
	'accent' => '#8000ff',
];

$mg_link_color = get_theme_mod(
	'mg_link_color',
	$mg_default_colors['link']
);

$mg_accent_color = get_theme_mod(
	'mg_accent_color',
	$mg_default_colors['accent']
);

$mg_link_color_contrast   = mg_color_contrast( $mg_link_color );
$mg_link_color_brightness = mg_color_brightness( $mg_link_color, 35 );

return [
	'fonts-url'            => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700&display=swap',
	'content-width'        => 992,
	'button-bg'            => $mg_link_color,
	'button-color'         => $mg_link_color_contrast,
	'button-outline-hover' => $mg_link_color_brightness,
	'link-color'           => $mg_link_color,
	'default-colors'       => $mg_default_colors,
];
