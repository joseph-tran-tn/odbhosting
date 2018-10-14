<?php
/************************************************
 * [ Sample Post Type ]
 ************************************************/
// function my_custom_sample_post_type() {
//   register_post_type('sample', array (
// 		'labels'									=> array (
// 			'name'									=> _x( 'Sample', 'post type general name' ),
// 			'singular_name'					=> _x( 'Sample', 'post type singular name' ),
// 			'add_new'								=> _x( '新しくSampleを書く', 'news' ),
// 			'add_new_item'					=> __( 'Sample記事を書く' ),
// 			'edit_item'							=> __( 'Sample記事を編集' ),
// 			'new_item'							=> __( '新しいSample記事' ),
// 			'view_item'							=> __( 'Sample記事を見る' ),
// 			'search_Sample'					=> __( 'Sample記事を探す' ),
// 			'not_found'							=> __( 'Sample記事はありません' ),
// 			'not_found_in_trash'		=> __( 'ゴミ箱にSample記事はありません' ),
// 			'parent_item_colon'			=> ''
// 	  ),
// 		'public'									=> true,
// 		'rewrite'									=> true,
// 		'show_ui'									=> true,
// 		'supports'								=> array ( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
// 		'query_var'								=> true,
// 		'menu_icon'								=> 'dashicons-format-chat',
// 		'taxonomies'							=> array ( 'post_tag' ),
// 		'has_archive'							=> true,
// 		'hierarchical'						=> false,
// 		'menu_position'						=> 5,
// 		'capability_type'					=> 'post',
// 		'show_in_admin_bar'				=> true,
// 		'publicly_queryable'			=> true,
//   ));
// }
// function create_cat_taxonomy () {
// 	register_taxonomy('samplecat', 'sample', array (
// 		'labels'									=> array (
// 			'name'									=> _x( 'newscat', 'post type general name' ),
// 			'menu_name'							=> __( 'カテゴリー' ),
// 			'edit_item'							=> __( 'Cat記事を編集' ),
// 			'all_items'							=> __( 'newscat' ),
// 			'parent_item'						=> __( 'Parent Cat' ),
// 			'add_new_item'					=> __( 'Cat記事を書く' ),
// 			'search_items'					=> __( 'newscat' ),
// 			'singular_name'					=> _x( 'newscat', 'post type singular name' ),
// 			'parent_item_colon'			=> __( 'Parent Cat:' ),
// 		),
// 		'show_ui'									=> true,
// 		'rewrite'									=> array ( 'slug' => 'samplecat' ),
// 		'query_var'								=> true,
// 		'has_archive'							=> true,
// 		'hierarchical'						=> true,
// 		'show_admin_column'				=> true,
// 	));
// }
// add_action ( 'init', 'my_custom_sample_post_type' );
// add_action ( 'init', 'create_cat_taxonomy', '0' );