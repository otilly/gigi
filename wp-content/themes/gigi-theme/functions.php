<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
		register_sidebar(array(
    		'name' => 'Right Header',
    		'id'   => 'right-header',
    		'description'   => 'These are widgets for the header.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
	
    // Deregister unnecessary widgets
    function ms_unregister_widgets() {
        unregister_widget( 'WP_Widget_Pages' );
        unregister_widget( 'WP_Widget_Calendar' );
        unregister_widget( 'WP_Widget_Archives' );
        unregister_widget( 'WP_Widget_Links' );
        unregister_widget( 'WP_Widget_Categories' );
        unregister_widget( 'WP_Widget_Recent_Posts' );
        unregister_widget( 'WP_Widget_Recent_Comments' );
        unregister_widget( 'WP_Widget_Search' );
        unregister_widget( 'WP_Widget_Tag_Cloud' );
        unregister_widget( 'WP_Widget_RSS' );
        unregister_widget( 'WP_Widget_Meta' );
    }
    add_action( 'widgets_init', 'ms_unregister_widgets' );

    // widgets
    //require_once(TEMPLATEPATH . "/widgets/instagram_widget.php");
    // require_once(TEMPLATEPATH . "/widgets/sale_product.php");

	// WP MENUS
	add_theme_support( 'menus' );

    // WP MENUS
    register_nav_menu( 'primary', __( 'Primary Menu' ) );
    register_nav_menu( 'mobile', __( 'Mobile Menu' ) );
    register_nav_menu( 'footer', __( 'Footer Menu' ) );
    register_nav_menu( 'topright', __( 'Top Right' ) );
	
	// POST THUMBNAILS
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 50, 50, true );
		add_image_size( 'slide-thumbnail', 672, 378, true );
        add_image_size( 'catalog-thumbnail', 300, 222, true );
        add_image_size( 'single-thumbnail', 480, 355, true );
        add_image_size( 'page-thumbnail', 644, 290, true );
	}
	
	include('inc/post-types.php');
	include('inc/metabox/es-metabox.php');
	// include('inc/admin.php');

    // Woo Commerce
    remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
    remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

    add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
    add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

    function my_theme_wrapper_start() {
      echo '<section id="main">';
    }

    function my_theme_wrapper_end() {
      echo '</section>';
    }

    add_theme_support( 'woocommerce' );

	add_filter( 'woocommerce_available_shipping_methods', 'cj_woocommerce_available_shipping_methods' );

	function cj_woocommerce_available_shipping_methods( $available_methods ) {
		if ( isset( $available_methods['free_shipping'] ) ) {
			foreach ( $available_methods as $key => $value ) {
				if ( 'free_shipping' != $key ) {
					unset( $available_methods[ $key ] );
				}
			}
		}	

		return $available_methods;
	}
?>