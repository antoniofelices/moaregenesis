<?php
/**
 * Moare Genesis.
 *
 * This file adds custom functions for the Moare Genesis Starter Theme.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since   1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 2.0.5
 */

/**
 * Header: reposition primary menu navigation, add widget area
 * All.
 *
 * @since 1.0.0
 */
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'mg_all_custom_header', 10 );
function mg_all_custom_header() {

	?>

	<div>
		<div class="title-area">

		<?php
			// Site title
			do_action( 'genesis_site_title' );
		?>

		</div>

		<div class="menus-container">

		<?php
			// Site navbar
			if ( ! genesis_nav_menu_supported( 'primary' ) ){

				return;

			} else {

				genesis_nav_menu( array(
					'theme_location' => 'primary',
					'menu_class'     => 'menu genesis-nav-menu',
				) );

			}
		?>

		</div>
	</div>

	<?php

}

/**
 * Custom Footer.
 * All.
 *
 * @since 1.0.0
 */
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );
add_action( 'genesis_footer', 'mg_all_custom_footer' );
function mg_all_custom_footer() {

	?>

	<footer class="site-footer">
		<div class="mg-main-footer">
			<?php

			genesis_widget_area( 'footer', array(
				'before' => '',
				'after' => '',
			) );

			?>
		</div>
	</footer>

	<?php
}

/**
 * Remove post-meta.
 * All.
 *
 * @since 1.0.0
 */
// add_action ( 'genesis_before_loop', 'mg_all_remove_post_info' );
function mg_all_remove_post_info() {

	remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
	remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

}

/**
 * Change layout default to full width.
 * All.
 *
 * @since 2.0.2
 */
add_action( 'genesis_meta', 'mg_all_layout_default_full_width' );
function mg_all_layout_default_full_width() {

	// Force full width content layout.
	add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

	remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

}

/**
 * Add body class.
 * Archives.
 *
 * @since 1.0.11
 *
 * @param array $classes Current classes.
 * @return array $classes Updated class array.
 */
add_filter( 'body_class', 'mg_archives_add_class_wrap_to_body_class' );
function mg_archives_add_class_wrap_to_body_class( $classes ) {

	if ( is_archive() ) {

		$classes[] = 'wrap-content';

	}

	return $classes;

}

/**
 * Add body class.
 * Singulars.
 * Error page.
 *
 * @since 2.0.1
 *
 * @param array $classes Current classes.
 * @return array $classes Updated class array.
 */
add_filter( 'body_class', 'mg_singulars_error_page_add_class_narrow_content_to_body_class' );
function mg_singulars_error_page_add_class_narrow_content_to_body_class( $classes ) {

	if ( is_singular() || is_404() ) {

		$classes[] = 'narrow-content';

	}

	return $classes;

}

/**
 * Load all items.
 * Archives: cpts and tax.
 *
 * @since 1.0.4
 */
add_action( 'pre_get_posts', 'mg_pre_get_posts_cpts_and_tax' );
function mg_pre_get_posts_cpts_and_tax( $query ){

	if ( $query->is_main_query() && !is_admin() ) {

		if ( $query->is_tax() || $query->is_post_type_archive() ) {

			$query->set( 'posts_per_page', 99 );

		}

	}

}

/**
 * Reposition thumbnail image.
 * Archives: default templates.
 * Have to put here, not at archive.php
 *
 * @since 1.0.0
 */
add_action( 'genesis_before_entry', 'mg_archives_reposition_thumbnail_image' );
function mg_archives_reposition_thumbnail_image() {

	if (
		is_author() ||
		is_category() ||
		is_date() ||
		is_home() ||
		is_tag() ||
		is_post_type_archive() ||
		is_tax() ||
		is_search()
	) {

		// Reposition image
		remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
		add_action( 'genesis_entry_header', 'genesis_do_post_image', 1 );

	}

}
