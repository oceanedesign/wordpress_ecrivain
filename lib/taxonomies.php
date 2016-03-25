<?php
function lecture_genre_taxonomy() {

	$labels = array(
			'name'                       => _x( 'Genres', 'Taxonomy General Name', 'lecture' ),
			'singular_name'              => _x( 'Genre', 'Taxonomy Singular Name', 'lecture' ),
			'menu_name'                  => __( 'Genres', 'lecture' ),
			'all_items'                  => __( 'All Genres', 'lecture' ),
			'parent_item'                => __( 'Parent Genres', 'lecture' ),
			'parent_item_colon'          => __( 'Parent Genres:', 'lecture' ),
			'new_item_name'              => __( 'New Genre Name', 'lecture' ),
			'add_new_item'               => __( 'Add New Genre', 'lecture' ),
			'edit_item'                  => __( 'Edit Genre', 'lecture' ),
			'update_item'                => __( 'Update Genre', 'lecture' ),
			'view_item'                  => __( 'View Item', 'lecture' ),
			'separate_items_with_commas' => __( 'Separate Genres with commas', 'lecture' ),
			'add_or_remove_items'        => __( 'Add or remove Genres', 'lecture' ),
			'choose_from_most_used'      => __( 'Choose from the most used Genre', 'lecture' ),
			'popular_items'              => __( 'Popular Genres', 'lecture' ),
			'search_items'               => __( 'Search Genres', 'lecture' ),
			'not_found'                  => __( 'Not Genres Found', 'lecture' ),
			'no_terms'                   => __( 'No items', 'lecture' ),
			'items_list'                 => __( 'Items list', 'lecture' ),
			'items_list_navigation'      => __( 'Items list navigation', 'lecture' ),
	);
	$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
	);
	register_taxonomy( 'lecture_genre', array( 'writter' ), $args );

}
add_action( 'init', 'lecture_genre_taxonomy', 0 );

function lecture_language_taxonomy() {

	$labels = array(
			'name'                       => _x( 'Origin languages', 'Taxonomy General Name', 'lecture' ),
			'singular_name'              => _x( 'Origin language', 'Taxonomy Singular Name', 'lecture' ),
			'menu_name'                  => __( 'Origin languages', 'lecture' ),
			'all_items'                  => __( 'All Origin languages', 'lecture' ),
			'parent_item'                => __( 'Parent Origin languages', 'lecture' ),
			'parent_item_colon'          => __( 'Parent Origin languages:', 'lecture' ),
			'new_item_name'              => __( 'New Origin language Name', 'lecture' ),
			'add_new_item'               => __( 'Add New Origin language', 'lecture' ),
			'edit_item'                  => __( 'Edit Origin language', 'lecture' ),
			'update_item'                => __( 'Update Origin language', 'lecture' ),
			'view_item'                  => __( 'View Item', 'lecture' ),
			'separate_items_with_commas' => __( 'Separate Origin languages with commas', 'lecture' ),
			'add_or_remove_items'        => __( 'Add or remove Origin languages', 'lecture' ),
			'choose_from_most_used'      => __( 'Choose from the most used Origin language', 'lecture' ),
			'popular_items'              => __( 'Popular Origin languages', 'lecture' ),
			'search_items'               => __( 'Search Origin languages', 'lecture' ),
			'not_found'                  => __( 'Not Origin languages Found', 'lecture' ),
			'no_terms'                   => __( 'No items', 'lecture' ),
			'items_list'                 => __( 'Items list', 'lecture' ),
			'items_list_navigation'      => __( 'Items list navigation', 'lecture' ),
	);
	$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
	);
	register_taxonomy( 'lecture_language', array( 'writter' ), $args );

}
add_action( 'init', 'lecture_language_taxonomy', 0 );

function lecture_date_taxonomy() {

	$labels = array(
			'name'                       => _x( 'Release dates', 'Taxonomy General Name', 'lecture' ),
			'singular_name'              => _x( 'Release date', 'Taxonomy Singular Name', 'lecture' ),
			'menu_name'                  => __( 'Release dates', 'lecture' ),
			'all_items'                  => __( 'All Release dates', 'lecture' ),
			'parent_item'                => __( 'Parent Release dates', 'lecture' ),
			'parent_item_colon'          => __( 'Parent Release dates:', 'lecture' ),
			'new_item_name'              => __( 'New Release date Name', 'lecture' ),
			'add_new_item'               => __( 'Add New Release date', 'lecture' ),
			'edit_item'                  => __( 'Edit Release date', 'lecture' ),
			'update_item'                => __( 'Update Release date', 'lecture' ),
			'view_item'                  => __( 'View Item', 'lecture' ),
			'separate_items_with_commas' => __( 'Separate Release dates with commas', 'lecture' ),
			'add_or_remove_items'        => __( 'Add or remove Release dates', 'lecture' ),
			'choose_from_most_used'      => __( 'Choose from the most used Release date', 'lecture' ),
			'popular_items'              => __( 'Popular Release dates', 'lecture' ),
			'search_items'               => __( 'Search Release dates', 'lecture' ),
			'not_found'                  => __( 'Not Release dates Found', 'lecture' ),
			'no_terms'                   => __( 'No items', 'lecture' ),
			'items_list'                 => __( 'Items list', 'lecture' ),
			'items_list_navigation'      => __( 'Items list navigation', 'lecture' ),
	);
	$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
	);
	register_taxonomy( 'lecture_date', array( 'book' ), $args );

}
add_action( 'init', 'lecture_date_taxonomy', 0 );