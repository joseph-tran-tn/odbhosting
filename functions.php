<?php
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);

define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);
add_filter( 'automatic_updater_disabled', '__return_true' );
add_filter( 'auto_update_core', '__return_false' );
add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'xmlrpc_enabled', '__return_false' );
remove_action( 'wp_head', 'rsd_link' );
function disable_self_trackback( &$links ) {
  foreach ( $links as $l => $link )
    if ( 0 === strpos( $link, get_option( 'home' ) ) )
    unset($links[$l]);
}
add_action( 'pre_ping', 'disable_self_trackback' );
function remove_core_updates(){
    global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates');
add_filter('pre_site_transient_update_plugins','remove_core_updates');
add_filter('pre_site_transient_update_themes','remove_core_updates');
function disable_wp_head_default() {
  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
  remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
  remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
  remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
  remove_action( 'wp_head', 'index_rel_link' ); // index link
  remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
  remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
  remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
  remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
  remove_action( 'wp_head', 'wp_resource_hints', 2 );
  remove_action( 'wp_head', 'rest_output_link_wp_head' );
  remove_action( 'wp_head', 'wp_shortlink_wp_head'); // remove linkn rel shortlink
  add_filter('show_admin_bar', '__return_false');
}
add_action( 'init', 'disable_wp_head_default' );

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