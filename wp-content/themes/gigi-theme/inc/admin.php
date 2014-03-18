<?php 


// Change "Posts" label to "Products"
	function change_post_menu_label() {
		global $menu;
		global $submenu;
		$menu[5][0] = 'Products';
		$submenu['edit.php'][5][0] = 'Products';
		$submenu['edit.php'][10][0] = 'Add Product';
		$submenu['edit.php'][16][0] = 'Product Tags';
		echo '';
	}
	function change_post_object_label() {
		global $wp_post_types;
		$labels = &$wp_post_types['post']->labels;
		$labels->name = 'Products';
		$labels->singular_name = 'Products';
		$labels->add_new = 'Add Product';
		$labels->add_new_item = 'Add Product';
		$labels->edit_item = 'Edit Product';
		$labels->new_item = 'Product';
		$labels->view_item = 'View Products';
		$labels->search_items = 'Search Products';
		$labels->not_found = 'No Products found';
		$labels->not_found_in_trash = 'No products found in Trash';
	}
	add_action( 'init', 'change_post_object_label' );
	add_action( 'admin_menu', 'change_post_menu_label' );
	

// Remove unnecessary menu items from admin view
	function remove_menus() {
		global $menu;
	    $restricted = array(__('Links'), __('Comments'), __('Media'));
	    end ($menu);
	    while (prev($menu)){
	    	$value = explode(' ',$menu[key($menu)][0]);
	        if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	        }
	}
	add_action('admin_menu', 'remove_menus');