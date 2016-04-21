<?php

/**
 * Define custom field prefix
 */
// define( 'CPT_PREFIX', 'bac_' );

// add_action( 'cmb2_admin_init', 'sample_post_type_metabox' );

// function sample_post_type_metabox(){

// 	$prefix = CPT_PREFIX . 'sample_post_type_';

// 	$cmb2 = new_cmb2_box( array(
// 		'id' 						=> $prefix . 'fields',
// 		'title' 				=> 'Sample Post Type Fields',
// 		'object_types' 	=> array( 'sample-post-type', ),
// 	) );

// 	$cmb2->add_field( array(
// 		'id' 			=> $prefix . 'subtitle',
// 		'name' 		=> 'Subtitle',
// 		'desc' 		=> 'Add an option subtitle to this post',
// 		'type' 		=> 'text',
// 	) );

// 	$cmb2->add_field( array(
// 		'id' 				=> $prefix . 'icon',
// 		'name' 			=> 'Icon',
// 		'desc' 			=> 'Icon for this post',
// 		'type' 			=> 'file',
// 		'options' 	=> array(
// 			'url' => false
// 		)
// 	) );

// }