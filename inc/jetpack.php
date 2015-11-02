<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Rapid_Springs
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function rapid_springs_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'rapid_springs_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function rapid_springs_jetpack_setup
add_action( 'after_setup_theme', 'rapid_springs_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function rapid_springs_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function rapid_springs_infinite_scroll_render
