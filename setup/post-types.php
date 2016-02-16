<?php

/**
 * Define custom field prefix
 */
define( 'CPT_PREFIX', 'bac_' );

//////////////////////
// Sample Post Type //
//////////////////////

register_via_cpt_core(
	array(
		'Sample Post Type', // Singular
		'Sample Post Types', // Plural
		'sample-post-type' // Slug
	),
	array(
		'menu_icon' 	=> 'dashicons-clipboard',
		'supports' 		=> array( 'title', 'editor', 'thumbnail', 'excerpt', ),
		'taxonomies' 	=> array( 'category', 'sample_taxonomy' ),
		/* Uncomment the following to hide on front-end */
		// 'publicly_queryable' => false, // Don't allow url querying of this post type
		// 'exclude_from_search' => true, // Don't include posts in wordpress search
	)
);

add_action( 'cmb2_admin_init', 'sample_post_type_metabox' );

function sample_post_type_metabox(){

	$prefix = CPT_PREFIX . 'sample_post_type_';

	$cmb2 = new_cmb2_box( array(
		'id' 						=> $prefix . 'fields',
		'title' 				=> 'Sample Post Type Fields',
		'object_types' 	=> array( 'sample-post-type', ),
	) );

	$cmb2->add_field( array(
		'id' 			=> $prefix . 'subtitle',
		'name' 		=> 'Subtitle',
		'desc' 		=> 'Add an option subtitle to this post',
		'type' 		=> 'text',
	) );

	$cmb2->add_field( array(
		'id' 				=> $prefix . 'icon',
		'name' 			=> 'Icon',
		'desc' 			=> 'Icon for this post',
		'type' 			=> 'file',
		'options' 	=> array(
			'url' => false
		)
	) );

}