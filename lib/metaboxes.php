<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if ( file_exists(get_template_directory() . '/cmb2/init.php' ) ) {
	require_once get_template_directory() . '/cmb2/init.php';
} elseif ( file_exists( get_template_directory() . '/CMB2/init.php' ) ) {
	require_once get_template_directory() . '/CMB2/init.php';
}

add_action( 'cmb2_admin_init', 'lecture_register_writter_metabox' );
function lecture_register_writter_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_lecture_writter_';

	$cmb_lecture_writter = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Writter Informations', 'lecture' ),
		'object_types'  => array( 'writter', )
	) );
	
	$cmb_lecture_writter->add_field( array(
			'name' => __( 'Date de naissance', 'lecture' ),
			'id'   => $prefix . 'naissance',
			'type' => 'text'
	) );	
	
	$cmb_lecture_writter->add_field( array(
			'name' => __( 'Activités principales', 'lecture' ),
			'id'   => $prefix . 'activite',
			'type' => 'text'
	) );

	$cmb_lecture_writter->add_field( array(
			'name' => __( 'Distinctions', 'lecture' ),
			'id'   => $prefix . 'distinction',
			'type' => 'text'
	) );

	$cmb_lecture_writter->add_field( array(
			'name' => __( 'Thématiques abordés', 'lecture' ),
			'id'   => $prefix . 'thematique',
			'type' => 'text'
	) );

}



add_action( 'cmb2_admin_init', 'lecture_register_book_metabox' );
function lecture_register_book_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_lecture_book_';

	$cmb_lecture_book_informations = new_cmb2_box( array(
			'id'            => $prefix . 'metabox',
			'title'         => __( 'Book Informations', 'lecture' ),
			'object_types'  => array( 'book', )
	) );
	
	$cmb_lecture_book_informations->add_field( array(
			'name' => __( 'Genre', 'lecture' ),
			'desc' => __('Genre of the book', 'lecture'),
			'id'   => $prefix . 'genre_book',
			'type' => 'taxonomy_select',
			'taxonomy' => 'lecture_genre'
	) );

	$cmb_lecture_book_informations->add_field( array(
			'name' => __( 'Writter', 'lecture' ),
			'desc' => __('Writter of the book', 'lecture'),
			'id'   => $prefix . 'writter_book',
			'type' => 'select',
			'options' => 'get_writters_array'
	) );

	$cmb_lecture_book_informations->add_field( array(
			'name' => __( 'Origin language', 'lecture' ),
			'desc' => __('Origin language of the book', 'lecture'),
			'id'   => $prefix . 'language_book',
			'type' => 'taxonomy_select',
			'taxonomy' => 'lecture_language'
	) );	

	$cmb_lecture_book_informations->add_field( array(
			'name' => __( 'Number of pages', 'lecture' ),
			'desc' => __('Number of pages of the book'),
			'id'   => $prefix . 'pages_book',
			'type' => 'text'
	) );

	$cmb_lecture_book_informations->add_field( array(
			'name' => __( 'Saga', 'lecture' ),
			'desc' => __('Saga ? Quel tome parmi la saga ? Taille de la saga ?'),
			'id'   => $prefix . 'saga_book',
			'type' => 'text'
	) );

}
