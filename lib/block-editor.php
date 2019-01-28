<?php
/**
 * Moare Genesis.
 *
 * This file adds gutenberg functions for the Moare Genesis Starter Theme.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since 	1.0.2
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.4
 */

add_action( 'after_setup_theme', 'mg_setup_theme_supported_features' );
function mg_setup_theme_supported_features() {

  add_theme_support( 'editor-color-palette', array(
    array(
      'name' => __( 'brand primary', 'moaregenesis' ),
      'slug' => 'brand-primary',
      'color' => 'blue',
    ),
    array(
      'name' => __( 'brand secondary', 'moaregenesis' ),
      'slug' => 'brand-secondary',
      'color' => 'black',
    ),
    array(
      'name' => __( 'brand tertiary', 'moaregenesis' ),
      'slug' => 'brand-tertiary',
      'color' => 'blue',
    ),
    array(
      'name' => __( 'gray dark', 'moaregenesis' ),
      'slug' => 'gray-dark',
      'color' => '#3d3d3d',
    ),
    array(
      'name' => __( 'gray', 'moaregenesis' ),
      'slug' => 'gray',
      'color' => '#8e8e8e',
    ),
    array(
      'name' => __( 'gray lighter', 'moaregenesis' ),
      'slug' => 'gray-lighter',
      'color' => '#e5e5e5',
    ),
    array(
      'name' => __( 'white', 'moaregenesis' ),
      'slug' => 'white',
      'color' => '#ffffff',
    ),
    array(
      'name' => __( 'black', 'moaregenesis' ),
      'slug' => 'black',
      'color' => '#000000',
    ),
  ) );

  add_theme_support( 'editor-font-sizes', array(
    array(
      'name' => __( 'small', 'moaregenesis' ),
      'shortName' => __( 'S', 'moaregenesis' ),
      'size' => 12,
      'slug' => 'small'
    ),
    array(
      'name' => __( 'regular', 'moaregenesis' ),
      'shortName' => __( 'M', 'moaregenesis' ),
      'size' => 16,
      'slug' => 'regular'
    ),
    array(
      'name' => __( 'large', 'moaregenesis' ),
      'shortName' => __( 'L', 'moaregenesis' ),
      'size' => 21,
      'slug' => 'large'
    ),
    array(
      'name' => __( 'larger', 'moaregenesis' ),
      'shortName' => __( 'XL', 'moaregenesis' ),
      'size' => 37,
      'slug' => 'larger'
    )
  ) );

  add_theme_support( 'align-wide' );

  add_theme_support( 'disable-custom-colors' );

}

/**
 * Enqueue block editor style
 */
add_action( 'enqueue_block_editor_assets', 'mg_block_editor_styles' );
function mg_block_editor_styles() {
    wp_enqueue_style( 'mg-block-editor-styles', get_theme_file_uri( '/assets/stylesheets/style-editor.css' ), false, CHILD_THEME_VERSION, 'all' );
}
