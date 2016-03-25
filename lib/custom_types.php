<?php
function lecture_writter_type() {

	$labels = array(
		'name'                  => _x( 'Writters', 'Post Type General Name', 'lecture' ),
		'singular_name'         => _x( 'Writter', 'Post Type Singular Name', 'lecture' ),
		'menu_name'             => __( 'Writters', 'lecture' ),
		'name_admin_bar'        => __( 'Writter', 'lecture' ),
		'archives'              => __( 'All Archives Writter', 'lecture' ),
		'parent_item_colon'     => __( 'Parent Writter:', 'lecture' ),
		'all_items'             => __( 'All Writters', 'lecture' ),
		'add_new_item'          => __( 'Add New Writter', 'lecture' ),
		'add_new'               => __( 'Add New', 'lecture' ),
		'new_item'              => __( 'New Item', 'lecture' ),
		'edit_item'             => __( 'Edit Writter', 'lecture' ),
		'update_item'           => __( 'Update Writter', 'lecture' ),
		'view_item'             => __( 'View Writter', 'lecture' ),
		'search_items'          => __( 'Search Writter', 'lecture' ),
		'not_found'             => __( 'Not writter found', 'lecture' ),
		'not_found_in_trash'    => __( 'Not writter found in Trash', 'lecture' ),
		'featured_image'        => __( 'Featured Image', 'lecture' ),
		'set_featured_image'    => __( 'Set featured image', 'lecture' ),
		'remove_featured_image' => __( 'Remove featured image', 'lecture' ),
		'use_featured_image'    => __( 'Use as featured image', 'lecture' ),
		'insert_into_item'      => __( 'Insert into item', 'lecture' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'lecture' ),
		'items_list'            => __( 'Items list', 'lecture' ),
		'items_list_navigation' => __( 'Items list navigation', 'lecture' ),
		'filter_items_list'     => __( 'Filter items list', 'lecture' ),
	);
	$args = array(
		'label'                 => __( 'writter', 'lecture' ),
		'description'           => __( 'writter Label', 'lecture' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'writter', $args );

}
add_action( 'init', 'lecture_writter_type', 0 );

function lecture_book_type() {

	$labels = array(
			'name'                  => _x( 'Books', 'Post Type General Name', 'lecture' ),
			'singular_name'         => _x( 'Book', 'Post Type Singular Name', 'lecture' ),
			'menu_name'             => __( 'Books', 'lecture' ),
			'name_admin_bar'        => __( 'Book', 'lecture' ),
			'archives'              => __( 'All Archives Book', 'lecture' ),
			'parent_item_colon'     => __( 'Parent Book:', 'lecture' ),
			'all_items'             => __( 'All Books', 'lecture' ),
			'add_new_item'          => __( 'Add New Book', 'lecture' ),
			'add_new'               => __( 'Add New', 'lecture' ),
			'new_item'              => __( 'New Item', 'lecture' ),
			'edit_item'             => __( 'Edit Book', 'lecture' ),
			'update_item'           => __( 'Update Book', 'lecture' ),
			'view_item'             => __( 'View Book', 'lecture' ),
			'search_items'          => __( 'Search Book', 'lecture' ),
			'not_found'             => __( 'Not Book found', 'lecture' ),
			'not_found_in_trash'    => __( 'Not book found in Trash', 'lecture' ),
			'featured_image'        => __( 'Featured Image', 'lecture' ),
			'set_featured_image'    => __( 'Set featured image', 'lecture' ),
			'remove_featured_image' => __( 'Remove featured image', 'lecture' ),
			'use_featured_image'    => __( 'Use as featured image', 'lecture' ),
			'insert_into_item'      => __( 'Insert into item', 'lecture' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'lecture' ),
			'items_list'            => __( 'Items list', 'lecture' ),
			'items_list_navigation' => __( 'Items list navigation', 'lecture' ),
			'filter_items_list'     => __( 'Filter items list', 'lecture' ),
	);
	$args = array(
			'label'                 => __( 'book', 'lecture' ),
			'description'           => __( 'writter book', 'lecture' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-book-alt',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
	);
	register_post_type( 'book', $args );

}
add_action( 'init', 'lecture_book_type', 0 );