<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package BEST AGH Krakow
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function best_agh_krakow_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'best_agh_krakow_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function best_agh_krakow_jetpack_setup
add_action( 'after_setup_theme', 'best_agh_krakow_jetpack_setup' );

function best_agh_krakow_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function best_agh_krakow_infinite_scroll_render