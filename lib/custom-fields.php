<?php
/**
 * Moare Genesis.
 *
 * This file adds custom fields for the Moare Genesis Starter Theme.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since 	1.0.0
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.5
 */

/**
 * Custom fields archive category newsletter.
 *
 * @since 1.0.0
 */
// add_action( 'genesis_before_entry_content', 'mg_cf' );
// function mg_cf(){
//
// 	if ( !function_exists( 'get_field' ) )
// 	return;
//
// 	if( get_field( 'customfield' ) ) :
// 		echo sprintf( '<li>%s: <span>%s</span></li>',
// 		esc_html__( 'Lorem', 'moaregenesis' ),
// 		esc_html( get_field( 'customfield' ) ) );
// 	endif;
//
// }

/**
 * Layout flexible content page
 * Have to use ACF plugin.
 *
 * @since 1.0.4
 */
function mg_cf_flexible_content() {

	if (
		!function_exists( 'get_field' ) ||
		!function_exists( 'the_field' ) ||
		!function_exists( 'have_rows' )
	)
	return;

	if( have_rows( 'crt_flexible_content' ) ):

		while ( have_rows( 'crt_flexible_content' ) ) : the_row();

		if( get_row_layout() == 'image_text' ) :

			echo '<section class="image-text builder"><div class="wrap"><div class="bg-image">';

			if( get_sub_field( 'image' ) ) :
				echo sprintf( '<img src="%s">',
				esc_url( get_sub_field( 'image' ) ) );
			endif;

			echo '</div>';

			echo '<div class="bg-text">';

			if( get_sub_field( 'title' ) ) :
				echo sprintf( '<h2>%s</h2>',
				esc_html( get_sub_field( 'title' ) ) );
			endif;

			if( get_sub_field( 'text' ) ) :
				echo sprintf( '<p>%s</p>',
				the_sub_field( 'text' ) );
			endif;

			echo '</div></div></section>';

			elseif( get_row_layout() == 'text_image' ) :

				echo '<section class="text-image builder"><div class="wrap"><div class="bg-text">';

				if( get_sub_field( 'title' ) ) :
					echo sprintf( '<h2>%s</h2>',
					esc_html( get_sub_field( 'title' ) ) );
				endif;

				if( get_sub_field( 'text' ) ) :
					echo sprintf( '<p>%s</p>',
					the_sub_field( 'text' ) );
				endif;

				echo '</div>';

				echo '<div class="bg-image">';

				if( get_sub_field( 'image' ) ) :
					echo sprintf( '<img src="%s">',
					esc_url( get_sub_field( 'image' ) ) );
				endif;

				echo '</div></div></section>';

			elseif( get_row_layout() == 'image_full_width' ) :

				echo '<section class="image-full-width builder"><div class="wrap">';

				$image = get_sub_field( 'image' );

				if( $image ) :
					echo sprintf( '<img src="%s" alt="%s">',
					$image['url'],
					$image['alt'] );
				endif;

				echo '</div></section>';

			elseif( get_row_layout() == 'text_full_width' ) :

				echo '<section class="text-full-width builder"><div class="wrap">';

				$text = get_sub_field( 'text' );

				if( $text ) :
					echo sprintf( '<p class="lead">%s</p>',
					esc_html( $text ) );
				endif;

				echo '</div></section>';

			elseif( get_row_layout() == 'grid' ) :

				echo '<section class="grid builder"><div class="wrap">';

				if( get_sub_field( 'title_section' ) ) :
					echo sprintf( '<h2 class="title-section">%s</h2>',
					esc_html( get_sub_field( 'title_section' ) ) );
				endif;

				if( have_rows( 'single_block' ) ):

					echo '<ul>';

					while ( have_rows( 'single_block' ) ) : the_row();

					$titlegrid = esc_html( get_sub_field( 'title' ) );
					$linkgrid = esc_url( get_sub_field( 'link' ) );
					$imagegrid = esc_url( get_sub_field( 'image_default' ) );

					if( $linkgrid && $titlegrid && $imagegrid ) :
						echo sprintf( '<li><a href="%s" style="background-image: url(%s);"><strong><span>%s</span></strong></a><h3><a href="%s"><span>%s</span></a></h3></li>',
						$linkgrid,
						$imagegrid,
						$titlegrid,
						$linkgrid,
						$titlegrid );
					endif;

					endwhile;

					echo '</ul>';

				endif;

				echo '</div></section>';

			elseif( get_row_layout() == 'featured' ) :

				echo '<section class="featured builder"><div class="wrap">';

				if( get_sub_field( 'title_section' ) ) :
					echo sprintf( '<h2 class="title-section">%s</h2>',
					esc_html( get_sub_field( 'title_section' ) ) );
				endif;

				if( have_rows( 'single_block' ) ):

					echo '<ul>';

					while ( have_rows( 'single_block' ) ) : the_row();

					$titlefeatured = esc_html( get_sub_field( 'title' ) );
					$textofeatured = esc_html( get_sub_field( 'texto' ) );
					$linkfeatured = esc_url( get_sub_field( 'link' ) );
					$imagefeatured = esc_url( get_sub_field( 'image_default' ) );

					if( $titlefeatured && $textofeatured && $linkfeatured && $imagefeatured ) {
						echo sprintf( '<li><a href="%s"><div class="bg-image"><img src="%s"></div><h3><span>%s</span></h3><div class="entry-featured-content">%s</div></a></li>',
						$linkfeatured,
						$imagefeatured,
						$titlefeatured,
						$textofeatured );
					} elseif( $titlefeatured && $textofeatured ) {
						echo sprintf( '<li><div><h3><span>%s</span></h3><div class="entry-featured-content">%s</div></div></li>',
						$titlefeatured,
						$textofeatured );
					} else {
						return;
					}

					endwhile;

					echo '</ul>';

				endif;

				echo '</div></section>';

			elseif( get_row_layout() == 'carousel' ) :

				echo '<section class="carousel builder"><div class="wrap">';

				if( have_rows( 'single_carousel' ) ):

					echo '<div class="flexslider"><ul class="slides">';

					while ( have_rows( 'single_carousel' ) ) : the_row();

					$title = esc_html( get_sub_field( 'title' ) );
					$content = esc_html( get_sub_field( 'content' ) );
					$link = esc_url( get_sub_field( 'link' ) );
					$image = esc_url( get_sub_field( 'image' ) );

					echo sprintf( '<li><div class="slider-content"><a href="%s"><img src="%s"></a><div class="text-content"><h2 class="title-section"><a href="%s">%s</a></h2><p>%s</p></div></div></li>',
					$link,
					$image,
					$link,
					$title,
					$content );

				endwhile;

				echo '</ul></div>';

			endif;

			echo '</div></section>';

		endif;

	endwhile;

	else :

		esc_html_e( 'Sorry no content', 'moaregenesis' );

	endif;

}
