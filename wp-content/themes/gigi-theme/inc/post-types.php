<?php

// ADD POST TYPE
	add_action( 'init', 'create_post_type' );
	function create_post_type() {
		
		register_post_type('slideshow', array(
			'label' => __('Slideshow'),
			'singular_label' => __('Slide'),
			'public' => true,
			'show_ui' => true, // UI in admin panel
			'capability_type' => 'post',
			'hierarchical' => false,
			'has_archive' => true,
			'rewrite' => array("slug" => "slideshow"), // Permalinks format
			'supports' => array('title', 'thumbnail', 'editor')
		));
	}
?>