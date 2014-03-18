<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_es_';

	$meta_boxes[] = array(
		'id'         => 'slide_metabox',
		'title'      => 'Slide Metabox',
		'pages'      => array( 'slideshow', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			array(
				'name' => 'Subtitle',
				'desc' => 'Displayed under title in left of slideshow',
				'id'   => $prefix . 'subtitle',
				'type' => 'text',
			),
			array(
				'name' => 'Link',
				'desc' => 'Link to promotion or product page',
				'id'   => $prefix . 'link',
				'type' => 'text',
			),
			array(
				'name' => 'Video',
				'desc' => 'Check if this is a fullscreen video',
				'id'   => $prefix . 'video',
				'type' => 'checkbox',
			),
		),
	);

	$homePage = get_page_by_title('Home')->ID;
	$meta_boxes[] = array(
		'id'         => 'home_metabox',
		'title'      => 'Header Metabox',
		'pages'      => array( 'page', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'show_on'    => array( 'key' => 'id', 'value' => array( $homePage, ), ), // Specific post IDs to display this metabox
		'fields' => array(
			array(
				'name' => 'Header Message',
				'desc' => 'Displayed in the top left of the header',
				'id'   => $prefix . 'header_message',
				'type' => 'textarea_small',
			),
		)
	);

	// Add other metaboxes as needed

	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

}