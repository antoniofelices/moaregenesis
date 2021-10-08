<?php
/**
 * Moare Genesis.
 *
 * This file adds block editor functions for the Moare Genesis Starter Theme.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since 	1.0.2
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.10
 */

add_action( 'after_setup_theme', 'mg_setup_theme_supported_features' );
function mg_setup_theme_supported_features() {

	add_theme_support( 'editor-color-palette', array(
		array(
			'name' => esc_attr__( 'brand primary', 'moaregenesis' ),
			'slug' => 'brand-primary',
			'color' => 'blue',
		),
		array(
			'name' => esc_attr__( 'brand secondary', 'moaregenesis' ),
			'slug' => 'brand-secondary',
			'color' => 'green',
		),
		array(
			'name' => esc_attr__( 'brand tertiary', 'moaregenesis' ),
			'slug' => 'brand-tertiary',
			'color' => 'red',
		),
		array(
			'name' => esc_attr__( 'gray dark', 'moaregenesis' ),
			'slug' => 'gray-dark',
			'color' => '#3d3d3d',
		),
		array(
			'name' => esc_attr__( 'gray', 'moaregenesis' ),
			'slug' => 'gray',
			'color' => '#8e8e8e',
		),
		array(
			'name' => esc_attr__( 'gray lighter', 'moaregenesis' ),
			'slug' => 'gray-lighter',
			'color' => '#e5e5e5',
		),
		array(
			'name' => esc_attr__( 'white', 'moaregenesis' ),
			'slug' => 'white',
			'color' => '#ffffff',
		),
		array(
			'name' => esc_attr__( 'black', 'moaregenesis' ),
			'slug' => 'black',
			'color' => '#000000',
		),
	) );

	add_theme_support( 'editor-font-sizes', array(
		array(
			'name' => esc_attr__( 'small', 'moaregenesis' ),
			'shortName' => __( 'S', 'moaregenesis' ),
			'size' => 12,
			'slug' => 'small'
		),
		array(
			'name' => esc_attr__( 'regular', 'moaregenesis' ),
			'shortName' => __( 'M', 'moaregenesis' ),
			'size' => 16,
			'slug' => 'regular'
		),
		array(
			'name' => esc_attr__( 'large', 'moaregenesis' ),
			'shortName' => __( 'L', 'moaregenesis' ),
			'size' => 21,
			'slug' => 'large'
		),
		array(
			'name' => esc_attr__( 'larger', 'moaregenesis' ),
			'shortName' => __( 'XL', 'moaregenesis' ),
			'size' => 37,
			'slug' => 'larger'
		)
	) );

	add_theme_support( 'align-wide' );

	add_theme_support( 'disable-custom-colors' );

	add_theme_support( 'responsive-embeds' );

}

/**
 * Enqueue block editor style
 */
add_action( 'enqueue_block_editor_assets', 'mg_block_editor_styles' );
function mg_block_editor_styles() {

	$appearance = genesis_get_config( 'appearance' );

	wp_enqueue_style(
		genesis_get_theme_handle() . '-fonts', $appearance['fonts-url'], [], genesis_get_theme_version(), null
	);

	wp_enqueue_style( 'mg-block-editor-styles', get_theme_file_uri( '/assets/stylesheets/editor-style-block.css' ), [], genesis_get_theme_version(), null );

}
