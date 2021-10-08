<?php
/**
 * Moare Genesis.
 *
 * This file adds the Customizer additions to the Moare Genesis Starter Theme.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since   1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.10
 */

/**
 * Registers settings and controls with the Customizer.
 *
 * @since 1.0.7
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */ 
add_action( 'customize_register', 'mg_customizer_register' );
function mg_customizer_register( $wp_customize ) {

	$appearance = genesis_get_config( 'appearance' );

	$wp_customize->add_setting(
		'mg_link_color',
		[
			'default'           => $appearance['default-colors']['link'],
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'mg_link_color',
			[
				'description' => __( 'Change the color of post info links and button blocks, the hover color of linked titles and menu items, and more.', 'moaregenesis' ),
				'label'       => __( 'Link Color', 'moaregenesis' ),
				'section'     => 'colors',
				'settings'    => 'mg_link_color',
			]
		)
	);

	$wp_customize->add_setting(
		'mg_accent_color',
		[
			'default'           => $appearance['default-colors']['accent'],
			'sanitize_callback' => 'sanitize_hex_color',
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'mg_accent_color',
			[
				'description' => __( 'Change the default hover color for button links, menu buttons, and submit buttons. The button block uses the Link Color.', 'moaregenesis' ),
				'label'       => __( 'Accent Color', 'moaregenesis' ),
				'section'     => 'colors',
				'settings'    => 'mg_accent_color',
			]
		)
	);

}
