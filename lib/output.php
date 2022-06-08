<?php
/**
 * Moare Genesis.
 *
 * This file adds the required CSS to the front end to the Moare Genesis Starter Theme.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since 	1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 2.0.2
 */

/**
 * Checks the settings for the link color, and accent color.
 * If any of these value are set the appropriate CSS is output.
 *
 * @since 1.0.7
 */
add_action( 'wp_enqueue_scripts', 'mg_inline_css' );
function mg_inline_css() {

	$appearance = genesis_get_config( 'appearance' );

	$color_link   = get_theme_mod( 'mg_link_color', $appearance['default-colors']['link'] );
	$color_accent = get_theme_mod( 'mg_accent_color', $appearance['default-colors']['accent'] );

	$css = '';

	$css .= ( $appearance['default-colors']['link'] !== $color_link ) ? sprintf(
		'

		body a,
		body .entry-title a:focus,
		body .entry-title a:hover,
		body .genesis-nav-menu a:focus,
		body .genesis-nav-menu a:hover,
		body .genesis-nav-menu .current-menu-item > a,
		body .genesis-nav-menu .sub-menu .current-menu-item > a:focus,
		body .genesis-nav-menu .sub-menu .current-menu-item > a:hover,
		body .menu-toggle:focus,
		body .menu-toggle:hover,
		body .sub-menu-toggle:focus,
		body .sub-menu-toggle:hover {
			color: %s;
		}

		',
		$color_link
	) : '';

	$css .= ( $appearance['default-colors']['accent'] !== $color_accent ) ? sprintf(
		'
		
		body button:focus,
		body button:hover,
		body input[type="button"]:focus,
		body input[type="button"]:hover,
		body input[type="reset"]:focus,
		body input[type="reset"]:hover,
		body input[type="submit"]:focus,
		body input[type="submit"]:hover,
		body input[type="reset"]:focus,
		body input[type="reset"]:hover,
		body input[type="submit"]:focus,
		body input[type="submit"]:hover,
		body .site-container div.wpforms-container-full .wpforms-form input[type="submit"]:focus,
		body .site-container div.wpforms-container-full .wpforms-form input[type="submit"]:hover,
		body .site-container div.wpforms-container-full .wpforms-form button[type="submit"]:focus,
		body .site-container div.wpforms-container-full .wpforms-form button[type="submit"]:hover,
		body .button:focus,
		body .button:hover {
			background-color: %1$s;
			color: %2$s;
		}

		@media only screen and (min-width: 960px) {
			body .genesis-nav-menu > .menu-highlight > a:hover,
			body .genesis-nav-menu > .menu-highlight > a:focus,
			body .genesis-nav-menu > .menu-highlight.current-menu-item > a {
				background-color: %1$s;
				color: %2$s;
			}
		}
		',
		$color_accent,
		mg_color_contrast( $color_accent )
	) : '';

	if ( $css ) {
		wp_add_inline_style( genesis_get_theme_handle(), $css );
	}

}
