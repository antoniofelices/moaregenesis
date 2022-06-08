<?php
/**
 * Moare Genesis.
 *
 * This file adds custom patterns for the Moare Genesis Starter Theme.
 *
 * @package moaregenesis
 * @author  Antonio
 * @since 	2.0.2
 * @license GPL-2.0+
 * @link    http://studiomoare.com/
 * @version 1.0.11
 */

add_action( 'init', 'mg_register_block_categories' );
function mg_register_block_categories() {

	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {

		register_block_pattern_category(
			'moarepatterns',
			array( 'label' => _x( 'Moare', 'Block pattern category', 'moaregenesis' ) )
		);

	}

}

add_action( 'init', 'mg_register_custom_patterns' );
function mg_register_custom_patterns() {

	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {

		register_block_pattern(
			'moaregenesis/example-00',
			array(
				'title'         => __( 'Lorem', 'moaregenesis' ),
				'description'   => _x( 'Lorem, ipsum, calar.', 'Block pattern description', 'moaregenesis' ),
				'categories'    => array( 'moarepatterns' ),
				'content'       => '',
			)
		);

		register_block_pattern(
			'moaregenesis/lead-parragraph-center',
			array(
				'title'         => __( 'Lead parragraph 00', 'moaregenesis' ),
				'description'   => _x( 'Parragraph with text center.', 'Block pattern description', 'moaregenesis' ),
				'categories'    => array( 'moarepatterns' ),
				'content'       => '<!-- wp:group {"align":"wide","className":"mg-pattern-paragraph-lead-00 "} --> <div class="wp-block-group alignwide mg-pattern-paragraph-lead-00"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.1"}},"fontSize":"x-large"} --> <p class="has-text-align-center has-x-large-font-size" style="line-height:1.1">Sam, ilitiunt, sitionem delisimin nihicia sum renes nobis dendia quos volorrore es dit quo te nullori berendae et porestiam cuptatesti tem fugitio eium ne volum quam ut moluptate sam aut mi, simusam fuga.</p> <!-- /wp:paragraph --></div> <!-- /wp:group -->',
			)
		);

		register_block_pattern(
			'moaregenesis/footer-00',
			array(
				'title'         => __( 'Footer 00', 'moaregenesis' ),
				'description'   => _x( 'Footer black, two lines width svg icon', 'Block pattern description', 'moaregenesis' ),
				'categories'    => array( 'moarepatterns' ),
				'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"96px","bottom":"96px"}}},"backgroundColor":"black","className":"mg-pattern-footer-00 "} --> <div class="wp-block-group alignfull mg-pattern-footer-00 has-black-background-color has-background" style="padding-top:96px;padding-bottom:96px"><!-- wp:columns {"className":"mb-0 wrap"} --> <div class="wp-block-columns mb-0 wrap"><!-- wp:column --> <div class="wp-block-column"><!-- wp:heading {"textColor":"white","className":"font-sans-serif ","fontSize":"medium"} --> <h2 class="font-sans-serif has-white-color has-text-color has-medium-font-size">Contacte</h2> <!-- /wp:heading --> <!-- wp:paragraph {"textColor":"white"} --> <p class="has-white-color has-text-color">nf@nf.com</p> <!-- /wp:paragraph --></div> <!-- /wp:column --> <!-- wp:column --> <div class="wp-block-column"><!-- wp:html --> <p><svg xmlns="http://www.w3.org/2000/svg" width="300" viewBox="0 0 32 32" class="aligncenter"><path fill="#ffffff" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path></svg></p> <!-- /wp:html --></div> <!-- /wp:column --> <!-- wp:column --> <div class="wp-block-column"><!-- wp:heading {"textAlign":"right","textColor":"white","className":"font-sans-serif ","fontSize":"medium"} --> <h2 class="has-text-align-right font-sans-serif has-white-color has-text-color has-medium-font-size">Segueix-nos</h2> <!-- /wp:heading --> <!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","openInNewTab":true,"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} --> <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://www.instagram.com","service":"instagram"} /--> <!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /--></ul> <!-- /wp:social-links --></div> <!-- /wp:column --></div> <!-- /wp:columns --></div> <!-- /wp:group -->',
			)
		);

		register_block_pattern(
			'moaregenesis/newsletter-00',
			array(
				'title'         => __( 'Newsletter 00', 'moaregenesis' ),
				'description'   => _x( 'Title + form to newsletter', 'Block pattern description', 'moaregenesis' ),
				'categories'    => array( 'moarepatterns' ),
				'content'       => '<!-- wp:columns {"verticalAlignment":"center","align":"full","style":{"spacing":{"margin":{"bottom":"0px","top":"0px"},"padding":{"top":"48px","bottom":"48px"}}},"backgroundColor":"gray","className":"mb-0 mg-pattern-newsletter-00 "} --> <div class="wp-block-columns alignfull are-vertically-aligned-center mb-0 mg-pattern-newsletter-00 has-gray-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:48px;padding-bottom:48px"><!-- wp:column {"verticalAlignment":"center"} --> <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"right","textColor":"white","className":"font-sans-serif my-0 ","fontSize":"x-large"} --> <p class="has-text-align-right font-sans-serif my-0 has-white-color has-text-color has-x-large-font-size"><strong>Newsletter</strong> subscriu-te</p> <!-- /wp:paragraph --></div> <!-- /wp:column --> <!-- wp:column {"verticalAlignment":"center"} --> <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph --> <p>Form</p> <!-- /wp:paragraph --></div> <!-- /wp:column --></div> <!-- /wp:columns -->',
			)
		);

		register_block_pattern(
			'moaregenesis/sub-footer-00',
			array(
				'title'         => __( 'Sub Footer 00', 'moaregenesis' ),
				'description'   => _x( 'Sub footer black, one line. Menu legal, license and random text', 'Block pattern description', 'moaregenesis' ),
				'categories'    => array( 'moarepatterns' ),
				'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"24px","bottom":"24px"}}},"backgroundColor":"black","className":"mg-pattern-sub-footer-00 "} --> <div class="wp-block-group alignfull mg-pattern-sub-footer-00 has-black-background-color has-background" style="padding-top:24px;padding-bottom:24px"><!-- wp:columns {"className":"mb-0 wrap"} --> <div class="wp-block-columns mb-0 wrap"><!-- wp:column {"verticalAlignment":"center"} --> <div class="wp-block-column is-vertically-aligned-center"><!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"font-sans-serif list-inline my-0 ","fontSize":"small"} --> <ul class="font-sans-serif list-inline my-0 has-white-color has-text-color has-link-color has-small-font-size"><li><a href="#">Política de privacitat</a></li><li><a href="#">Política de cookies</a></li></ul> <!-- /wp:list --></div> <!-- /wp:column --> <!-- wp:column --> <div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"my-0 font-sans-serif","fontSize":"small"} --> <p class="has-text-align-center my-0 font-sans-serif has-white-color has-text-color has-link-color has-small-font-size"><a href="https://creativecommons.org/licenses/by-nc-nd/4.0/">Creative Commons BY-NC-ND 4.0</a></p> <!-- /wp:paragraph --></div> <!-- /wp:column --> <!-- wp:column --> <div class="wp-block-column"><!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"my-0 font-sans-serif","fontSize":"small"} --> <p class="has-text-align-right my-0 font-sans-serif has-white-color has-text-color has-link-color has-small-font-size">Lorem ipsum lorem</p> <!-- /wp:paragraph --></div> <!-- /wp:column --></div> <!-- /wp:columns --></div> <!-- /wp:group -->',
			)
		);

		register_block_pattern(
			'moaregenesis/title-full-height-image',
			array(
				'title'         => __( 'Title full height image', 'moaregenesis' ),
				'description'   => _x( 'Two columns title with background and a full height image.', 'Block pattern description', 'moaregenesis' ),
				'categories'    => array( 'moarepatterns' ),
				'content'       => '<!-- wp:columns {"verticalAlignment":"center","align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"black","className":"mg-pattern-title-full-height-image"} --> <div class="wp-block-columns alignfull are-vertically-aligned-center mg-pattern-title-full-height-image has-black-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":"50vw"} --> <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50vw"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"right":"1.5rem","left":"1.5rem"}}},"textColor":"white","fontSize":"gigantic"} --> <h2 class="has-text-align-center has-white-color has-text-color has-gigantic-font-size" style="margin-right:1.5rem;margin-left:1.5rem">Lorem ipsum</h2> <!-- /wp:heading --></div> <!-- /wp:column --> <!-- wp:column {"verticalAlignment":"center","width":"50vw","className":"img-full-height ","layout":{"inherit":false}} --> <div class="wp-block-column is-vertically-aligned-center img-full-height" style="flex-basis:50vw"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"mb-0 "} --> <figure class="wp-block-image size-large mb-0"><img src="http://studiomoare.click/images/16-9/1920x1080.jpg" alt=""/></figure> <!-- /wp:image --></div> <!-- /wp:column --></div> <!-- /wp:columns -->',
			)
		);

	}

}
