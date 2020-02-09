<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...


// Register Custom Post Type
function custom_product_type() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Products', 'text_domain' ),
		'name_admin_bar'        => __( 'Product', 'text_domain' ),
		'archives'              => __( 'Product Archives', 'text_domain' ),
		'attributes'            => __( 'Product Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Product', 'text_domain' ),
		'all_items'             => __( 'All Products', 'text_domain' ),
		'add_new_item'          => __( 'Add New Product', 'text_domain' ),
		'add_new'               => __( 'Add New Product', 'text_domain' ),
		'new_item'              => __( 'New Product', 'text_domain' ),
		'edit_item'             => __( 'Edit Product', 'text_domain' ),
		'update_item'           => __( 'Update Product', 'text_domain' ),
		'view_item'             => __( 'View Product', 'text_domain' ),
		'view_items'            => __( 'View Products', 'text_domain' ),
		'search_items'          => __( 'Search Products', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Product', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Product', 'text_domain' ),
		'items_list'            => __( 'Items product', 'text_domain' ),
		'items_list_navigation' => __( 'Items product navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items Product', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Product', 'text_domain' ),
		'description'           => __( 'A product on the inhabitent store', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'taxonomies'            => array('product_type'),
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'template'				=>array(array( 'core/paragraph', array('placeholder' => 'Add Description...',) ),),
		'template_lock' 		=> 'all'
	);
	register_post_type( 'product_type', $args );

}
add_action( 'init', 'custom_product_type', 0 );





// Register Custom Post Type
function custom_adventure_type() {

	$labels = array(
		'name'                  => _x( 'Adventures', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Adventure', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Adventures', 'text_domain' ),
		'name_admin_bar'        => __( 'Adventure', 'text_domain' ),
		'archives'              => __( 'Adventure Archives', 'text_domain' ),
		'attributes'            => __( 'Adventure Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Adventure', 'text_domain' ),
		'all_items'             => __( 'All Adventures', 'text_domain' ),
		'add_new_item'          => __( 'Add New Adventure', 'text_domain' ),
		'add_new'               => __( 'Add New Adventure', 'text_domain' ),
		'new_item'              => __( 'New Adventure', 'text_domain' ),
		'edit_item'             => __( 'Edit Adventure', 'text_domain' ),
		'update_item'           => __( 'Update Adventure', 'text_domain' ),
		'view_item'             => __( 'View Adventure', 'text_domain' ),
		'view_items'            => __( 'View Adventures', 'text_domain' ),
		'search_items'          => __( 'Search Adventures', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Adventure', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Adventure', 'text_domain' ),
		'items_list'            => __( 'Items adventure', 'text_domain' ),
		'items_list_navigation' => __( 'Items adventure navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items Adventure', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Adventure', 'text_domain' ),
		'description'           => __( 'A adventure on the inhabitent store', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'taxonomies'            => array('adventure_type'),
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'template'				=>array(array( 'core/paragraph', array('placeholder' => 'Add Description...',) ),),
		'template_lock' 		=> 'all'
	);
	register_post_type( 'adventure_type', $args );

}
add_action( 'init', 'custom_adventure_type', 0 );