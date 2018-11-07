<?php
//本体のアップデート通知を非表示
add_filter('pre_site_transient_update_core', create_function('$a', "return  null;"));
//プラグイン更新通知を非表示
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );

include_once( TEMPLATEPATH . '/app_config.php' );
require_once( TEMPLATEPATH . '/inc/post-type/create-post-type.php' );
require_once( TEMPLATEPATH . '/inc/post-type/image-size.php' );
require_once( TEMPLATEPATH . '/inc/BFI_Thumb.php' );
include_once( TEMPLATEPATH . '/inc/rewrite-url.php' );
include_once( TEMPLATEPATH . '/inc/global-functions.php' );
include_once( TEMPLATEPATH . '/inc/ajax.php' );

/**
 * [ define constant ]
 */
define('TEMPLATEVIEWSPATH', TEMPLATEPATH . '/views');
define('THEME_DIR', get_template_directory_uri());

/**
 * [ Theme Suport ]
 */
add_theme_support( 'post-thumbnails' );

/**
 * [ Change some stuffs in Admin Appearance ]
 * - Change login Logo Admin
 * - Remove Footer Admin (wordpress copyright)
 * - Link for logo
 * - Title for logo
 */
function custom_login_logo() {
		echo '<style type="text/css">h1 a { background: url('.get_bloginfo('template_directory').'/images/logo.png) 50% 50% no-repeat !important; width:100% !important;}</style>';
}
add_action('login_head', 'custom_login_logo');
function remove_footer_admin () {
    echo '<span id="footer-thankyou">Developed by <a href="http://trantuananh.info" target="_blank">ANHTN</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');
function new_wp_login_url() {
	return home_url();
}
add_filter('login_headerurl', 'new_wp_login_url');
function new_wp_login_title() {
	return get_option('blogname');
}
add_filter('login_headertitle', 'new_wp_login_title');

/**
 * [ Load custom scripts, stylesheets in Admin ]
 */
function load_custom_wp_admin_scripts () {
	// Stylesheets
	wp_register_style( 'custom_wp_admin_css', THEME_DIR . '/admin.scripts.alive.css', false, '1.0.0' );
	// JavaScripts
	wp_enqueue_script( 'script-name', THEME_DIR . '/admin.scripts.alive.js', array('jquery'), '3.3.5', true );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_scripts' );

/**
 * [ Timthumb CropCropimg ]
 */
function thumbCrop( $img = '', $w = false, $h = false , $zc = 1, $a = false, $cc = false ) {
	$h  = ($h)  ? "&amp;h=$h"   : "";
	$w  = ($w)  ? "&amp;w=$w"   : "";
	$a  = ($a)  ? "&amp;a=$a"   : "";
	$cc = ($cc) ? "&amp;cc=$cc" : "";	
	$img = str_replace(get_bloginfo('url'), '', $img);
	return THEME_DIR . "/inc/timthumb.php?src={$img}{$h}{$w}&amp;zc={$zc}{$a}{$cc}";
}

/**
 * [ reset paging (posts_per_page => 1) ]
 */
$option_posts_per_page = get_option( 'posts_per_page' );
add_action( 'init', 'my_modify_posts_per_page', 0);
function my_option_posts_per_page() {
	return;
}
function my_modify_posts_per_page() {
	add_filter( 'option_posts_per_page', 'my_option_posts_per_page' );
}

/**
 * [ Get Archive Year Month ]
 */
function wp_post_type_archive( $post_type = "post", $home_url = "", $havecount = false ) {
	global $wpdb;
	if($home_url == "") $home_url  = home_url("/");
	$html = '';
	$txtCount = "";
	$posttype = get_post_type_object($post_type);
	$slug = $posttype->rewrite['slug'];
	$years = $wpdb->get_col($wpdb->prepare("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = %s ORDER BY post_date DESC", $post_type));
	foreach($years as $year) :
		if($havecount) :
			$count = $wpdb->get_col($wpdb->prepare("SELECT COUNT(*) countpost FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = '%s' and YEAR(post_date) = '%s'", $post_type, $year));
			$txtCount = '('.$count[0].')';
		endif;
		$html .= '<li id="year'.$year.'"><a href="javascript:void(0);" class="dropdown">'.$year.'年 '.$txtCount.'</a><ul class="sub">';
		$months = $wpdb->get_col($wpdb->prepare("SELECT DISTINCT MONTH(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = '%s' AND YEAR(post_date) = '%s' ORDER BY post_date DESC", $post_type, $year));
		foreach($months as $month) :
			if($havecount) :
				$count = $wpdb->get_col($wpdb->prepare("SELECT COUNT(*) countpost FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = '%s' and YEAR(post_date) = '%s' and MONTH(post_date) = '%s'", $post_type, $year, $month));
				$txtCount = '('.$count[0].')';
			endif;
			$html .= '<li><a href="'.$home_url.$slug."/".$year.'/'.$month.'">'.$month.'月 '.$txtCount.'</a></li>';
		endforeach;
		$html .= '</ul></li>';
	endforeach;
	return $html;
}

/**
 * Let's stop WordPress re-ordering my categories/taxonomies when I select them
 */
function stop_reordering_my_categories($args) {
  $args['checked_ontop'] = false;
  return $args;
}
add_filter('wp_terms_checklist_args','stop_reordering_my_categories');

function numF($num) {
	return number_format($num, 0, ',', '.');
}