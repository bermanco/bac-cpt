<?php
/**
 * Modifications to the WordPress admin area
 */

/**
 * Modify the admin menu (left hand navigation)
 */
function modify_admin_menu(){
	// Remove the "Posts" menu item
	remove_menu_page('edit.php');
}

add_action('admin_menu', 'modify_admin_menu');

/**
 * Modify the admin bar (top of page navigation)
 */
function modify_admin_bar(){
	global $wp_admin_bar;

	/* Update the functionality of the default "New" node */
	// $new_content_node = $wp_admin_bar->get_node('new-content');
	// $new_content_node->href = admin_url('post-new.php?post_type=blog');
	// $wp_admin_bar->add_node($new_content_node);

	// Remove 'new post' node
	$wp_admin_bar->remove_menu('new-post');
}

add_action('admin_bar_menu', 'modify_admin_bar', 80);