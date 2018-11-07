<?php
/************************************************
 * [ Promotion Post Type ]
 ************************************************/
function my_custom_promotion_post_type() {
  register_post_type('promotion', array (
		'labels'									=> array (
			'name' 									=> _x('Promotion', 'plural'),
			'singular_name' 				=> _x('Promotion', 'singular'),
			'menu_name' 						=> _x('Promotion', 'admin menu'),
			'name_admin_bar' 				=> _x('Promotion', 'admin bar'),
			'add_new' 							=> _x('Add New', 'add new'),
			'add_new_item' 					=> __('Add New Promotion'),
			'new_item' 							=> __('New Promotion'),
			'edit_item' 						=> __('Edit Promotion'),
			'view_item' 						=> __('View Promotion'),
			'all_items' 						=> __('All Promotion'),
			'search_items' 					=> __('Search Promotion'),
			'not_found' 						=> __('No Promotion found.'),
			'parent_item_colon'			=> ''
	  ),
		'public'									=> true,
		'rewrite'									=> true,
		'show_ui'									=> true,
		'supports'								=> array ( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
		'query_var'								=> true,
		'menu_icon'								=> 'dashicons-megaphone',
		'taxonomies'							=> array ( 'post_tag' ),
		'has_archive'							=> true,
		'hierarchical'						=> false,
		'menu_position'						=> 5,
		'capability_type'					=> 'post',
		'show_in_admin_bar'				=> true,
		'publicly_queryable'			=> true,
  ));
}
// function create_cat_taxonomy () {
// 	register_taxonomy('promotioncat', 'promotion', array (
// 		'labels'									=> array (
// 			'name'              		=> _x( 'Genres', 'taxonomy general name', 'textdomain' ),
// 			'singular_name'     		=> _x( 'Genre', 'taxonomy singular name', 'textdomain' ),
// 			'search_items'      		=> __( 'Search Genres', 'textdomain' ),
// 			'all_items'         		=> __( 'All Genres', 'textdomain' ),
// 			'parent_item'       		=> __( 'Parent Genre', 'textdomain' ),
// 			'parent_item_colon' 		=> __( 'Parent Genre:', 'textdomain' ),
// 			'edit_item'         		=> __( 'Edit Genre', 'textdomain' ),
// 			'update_item'       		=> __( 'Update Genre', 'textdomain' ),
// 			'add_new_item'      		=> __( 'Add New Genre', 'textdomain' ),
// 			'new_item_name'     		=> __( 'New Genre Name', 'textdomain' ),
// 			'menu_name'         		=> __( 'Genre', 'textdomain' ),
// 		),
// 		'show_ui'									=> true,
// 		'rewrite'									=> array ( 'slug' => 'samplecat' ),
// 		'query_var'								=> true,
// 		'has_archive'							=> true,
// 		'hierarchical'						=> true,
// 		'show_admin_column'				=> true,
// 	));
// }
add_action ( 'init', 'my_custom_promotion_post_type' );
// add_action ( 'init', 'create_cat_taxonomy', '0' );