<?php
/**
 * Modifications to the WordPress admin area
 */

/**
 * Modify the admin menu (left hand navigation)
 */
function bac_modify_admin_menu(){
	// Remove the "Posts" menu item
	remove_menu_page('edit.php');
}

add_action('admin_menu', 'bac_modify_admin_menu');

/**
 * Modify the admin bar (top of page navigation)
 */
function bac_modify_admin_bar(){
	global $wp_admin_bar;

	/* Update the functionality of the default "New" node */
	// $new_content_node = $wp_admin_bar->get_node('new-content');
	// $new_content_node->href = admin_url('post-new.php?post_type=blog');
	// $wp_admin_bar->add_node($new_content_node);

	// Remove 'new post' node
	$wp_admin_bar->remove_menu('new-post');
}

add_action('admin_bar_menu', 'bac_modify_admin_bar', 80);

/**
 * Modify the Dashboard
 */
function bac_modify_dashboard(){
	// Remove the "Quick Draft" widget
	remove_meta_box('dashboard_quick_press','dashboard','side');
	// Remove the "WordPress News" widget
	remove_meta_box('dashboard_primary','dashboard','side');
}

add_action('wp_dashboard_setup', 'bac_modify_dashboard');

/**
 * Modify standard "Posts" post type
 */
function bac_modify_posts($args, $post_type){
	if ('post' == $post_type){
		$args['show_in_nav_menus'] = false;
	}
	return $args;
}
add_filter('register_post_type_args', 'bac_modify_posts', 10, 2);