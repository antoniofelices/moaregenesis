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
 * @version 2.0.2
 */

/**
 * Custom pager.
 *
 * @since 1.0.0
 */
function mg_custom_pager() {

	$previouspost = get_previous_post();
	$nextpost = get_next_post();

	if( $previouspost || $nextpost ){

		echo '<div class="pager">';

			echo '<h2 class="screen-reader-text">'. esc_html__( 'Post navigation', 'moaregenesis' ) .'</h2>';

			if ( !empty( $previouspost ) ):

			?>

				<a href="<?php echo esc_url( get_permalink( $previouspost->ID ) ); ?>"><span><?php $previouspost->post_title; ?></span></a>

			<?php

			endif;

			if ( !empty( $nextpost ) ):

			?>

				<a href="<?php echo esc_url( get_permalink( $nextpost->ID ) ); ?>"><span><?php $nextpost->post_title; ?></span></a>

			<?php

			endif;

		echo '</div>';

	}

}

/**
 * Secondary query.
 *
 * @since 1.0.0
 */
function mg_secondary_queries_cpt( $post_type, $sub_title ) {

	$args = array(
		'post_type' => $post_type,
		'posts_per_page' => 3,
	);

	$secondary_queries = new WP_Query( $args );

	if ( $secondary_queries->have_posts() ) :

		?>

		<section class="related-content mb-featured-content">
			<div class="wrap">
				<h3 class="sub-title"><?php echo $sub_title; ?></h3>
				<div class="container-grid">
					<?php

					while ( $secondary_queries->have_posts() ) : $secondary_queries->the_post();

					?>

					<article class="entry">
						<?php
						if ( has_post_thumbnail() ) {

							?>

							<a href="<?php echo esc_url( get_permalink() ); ?>" class="entry-image-link"><?php the_post_thumbnail( 'large' ); ?></a>

							<?php

						}
						?>
						<header class="entry-header">
							<?php the_title( '<h4 class="entry-title" itemprop="headline"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>
						</header>
						<div class="entry-content" itemprop="text">
							<?php the_excerpt(); ?>
						</div>
						<footer class="entry-footer">
							<a href="<?php the_permalink(); ?>" rel="bookmark"><span><?php _e( 'Read more', 'moaregenesis' ) ?></span></a>
						</footer>
					</article>

					<?php

					endwhile;

					?>
				</div>
			</div>
		</section>

		<?php

	endif;

	$secondary_queries = null;
	wp_reset_postdata();

}

/**
 * Secondary query.
 *
 * @since 1.0.0
 */
function mg_secondary_queries_tax( $post_type, $post_taxonomy, $slug ) {

	$args = array(
		'post_type' => $post_type,
		'posts_per_page' => 3,
		'tax_query' => array(
			array(
				'taxonomy' => $post_taxonomy,
				'field' => 'slug',
				'terms' => $slug,
				'operator' => 'IN'
			)
		)
	);

	$secondary_queries = new WP_Query( $args );

	if ( $secondary_queries->have_posts() ) :

		?>

		<section class="related-content mb-featured-content">
			<div class="wrap">
				<h3 class="sub-title"><?php esc_html_e( 'Related news', 'moaregenesis' ); ?></h3>
				<div class="container-grid">
					<?php

					while ( $secondary_queries->have_posts() ) : $secondary_queries->the_post();

					?>

					<article class="entry">
						<?php
						if ( has_post_thumbnail() ) {

							?>

							<a href="<?php echo esc_url( get_permalink() ); ?>" class="entry-image-link"><?php the_post_thumbnail( 'large' ); ?></a>

							<?php

						}
						?>
						<header class="entry-header">
							<?php the_title( '<h4 class="entry-title" itemprop="headline"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>
						</header>
						<div class="entry-content" itemprop="text">
							<?php the_excerpt(); ?>
						</div>
						<footer class="entry-footer">
							<a href="<?php the_permalink(); ?>" rel="bookmark"><span><?php _e( 'Read more', 'moaregenesis' ) ?></span></a>
						</footer>
					</article>

					<?php

					endwhile;

					?>
				</div>
			</div>
		</section>

		<?php

	endif;

	$secondary_queries = null;
	wp_reset_postdata();

}