<?php
/**
 * [ for rewrite - this is alway at bottom of page ]
 */
add_filter('post_type_link', 'custom_blog_permalink', 1, 3);
function custom_blog_permalink($post_link, $id = 0, $leavename) {
	if ( strpos('%post_id%', $post_link) === 'FALSE' ) return $post_link;
	$post = get_post($id);
	if ( is_wp_error($post)) return $post_link;
	$post_type = get_post_type_object($post->post_type);
	return home_url($post_type->rewrite['slug'].'/p'.$post->ID.'/');
}
function add_rewrites_init(){
	global $wp_rewrite;
	$postoj =  get_post_types( array(
		'public' => true,
	), 'object' );
	foreach ( $postoj as $key => $ar ) {
		$posttype = $ar->name;
		$slug = $ar->rewrite['slug'];
		$sgc = TEMPLATEVIEWSPATH . "/{$posttype}/single.php";
		$agr = TEMPLATEVIEWSPATH . "/{$posttype}/archive.php";
		if(@file_exists($sgc)){
			add_rewrite_rule($slug.'/p([0-9]+)?$', 'index.php?post_type='.$posttype.'&p=$matches[1]', 'top');
		}
		if(@file_exists($agr)){
			add_rewrite_rule($slug.'/([0-9]{4})/([0-9]{1,2})/?$', 'index.php?post_type='.$posttype.'&year=$matches[1]&monthnum=$matches[2]', 'top');
			add_rewrite_rule($slug.'/([0-9]{4})/([0-9]{1,2})/page/([0-9]{1,})/?$', 'index.php?post_type='.$posttype.'&year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]', 'top');
		}
	}
	$wp_rewrite->flush_rules(false);
}
add_action('init', 'add_rewrites_init');

/**
 * [ Use a template file for a specific url without creating a page ]
 */
add_filter('template_include', 'alive_template_redirect', 1, 1);
function alive_template_redirect($template) {
	global $wp_query, $current_url;
	$url_path = parse_url(trim(str_replace(get_option('home'), '', $current_url), '/'), PHP_URL_PATH);
	$arrayTemplate = array(
		TEMPLATEPATH . '/index.php',
		TEMPLATEPATH . '/404.php',
	);
	if(in_array($template, $arrayTemplate) && get_option('home') != $current_url && !empty($url_path)) {
	  $fileViewFile = TEMPLATEVIEWSPATH . '/' . $url_path;
	  $fileViewDir = $fileViewFile . '/index.php';
	  if( file_exists( $fileViewDir ) ) {
			$wp_query->is_404 = false;
			status_header(200);
			$template = $fileViewDir;
	  } else if( file_exists( $fileViewFile ) ) {
		  $wp_query->is_404 = false;
		  status_header(200);
		  $template = $fileViewFile;
	  }
	}
	return $template;
}