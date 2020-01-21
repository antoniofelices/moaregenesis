<?php
/**
 * Moare Genesis.
 *
 * This file adds custom functions for the Moare Genesis Starter Theme.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since 	1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.6
 */

/**
 * Header: reposition primary menu navigation, add widget area
 *
 * @since 	1.0.0
 */
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'mg_all_custom_header', 10 );
function mg_all_custom_header(){

	?>

	<div>
		<div class="title-area">

		<?php

		// Site title
		if( function_exists( 'the_custom_logo' ) ) {

			if( has_custom_logo() ) {

				the_custom_logo();

			} else {

				do_action( 'genesis_site_title' );

			}

		}

		?>

		</div>

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

	<?php

}

/**
 * Custom Footer. All.
 *
 * @since 	1.0.0
 */
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );
add_action( 'genesis_footer', 'mg_all_custom_footer' );
function mg_all_custom_footer() {

	?>

	<footer class="site-footer">
		<div class="mg-main-footer">
			<div class="wrap">
				<?php

				genesis_widget_area( 'footer', array(
					'before' => '',
					'after' => '',
				) );

				?>
			</div>
		</div>
		<div class="mg-sub-footer">
			<div class="wrap">
				<?php

				genesis_widget_area( 'subfooter', array(
					'before' => '',
					'after' => '',
				) );

				?>
			</div>
		</div>
	</footer>

	<?php
}

/**
 * Load all items. Archives cpts and tax.
 *
 * @since 	1.0.4
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
 * Remove post-meta. All.
 *
 * @since 	1.0.0
 */
// add_action ( 'genesis_before_loop', 'mg_all_remove_post_info' );
function mg_all_remove_post_info() {

	remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
	remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

}

/**
 * Pager: custom pager. All.
 *
 * @since 1.0.0
 */
function mg_custom_pager(){

	$previouspost = get_previous_post();
	$nextpost = get_next_post();

	if( $previouspost || $nextpost ){

		echo '<div class="pager">';

			echo '<h2 class="screen-reader-text">'. esc_html__( 'Post navigation', 'moaregenesis' ) .'</h2>';

			if ( !empty( $previouspost ) ):

			?>

				<a href="<?php echo esc_url( get_permalink( $previouspost->ID ) ); ?>"><span><?php esc_html_e( $previouspost->post_title, 'moaregenesis' ); ?></span></a>

			<?php

			endif;

			if ( !empty( $nextpost ) ):

			?>

				<a href="<?php echo esc_url( get_permalink( $nextpost->ID ) ); ?>"><span><?php esc_html_e( $nextpost->post_title, 'moaregenesis' ); ?></span></a>

			<?php

			endif;

		echo '</div>';

	}

}
