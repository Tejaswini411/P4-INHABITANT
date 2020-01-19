<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// echo get_page_template();
	if ( is_post_type_archive( 'product_type' ) ) {
        $classes[] = 'shop';
	}
	if ( is_home() ) {
        $classes[] = 'home';
	}
	if ( is_singular( 'product_type' ) ) {
        $classes[] = 'product';
	}
	
	if ( is_singular( 'page' ) ) {
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );
