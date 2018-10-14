<?php
/**
 * [$rA Return Array JSON type]
 */
$rA = array ();
$rA['html'] = $rA['message'] = '';
$rA['status'] = 0;

/**
 * [BACK-END] [ Toggle True/False in Admin Column ]
 */
if(!empty($_POST['ajax_changeRecommend'])) {
	$id_pro = $_POST['ajax_changeRecommend'];
	$on = $_POST['ajax_from'];
	if( function_exists('acf_add_options_page') ) {
		if($on == 1) update_field('recommend', false, $id_pro);
		else update_field('recommend', true, $id_pro);
	}
	$rA['status'] = 1;
	die(json_encode($rA));
}

/**
 * [FRONT-END] [ Toggle Add Favourite ]
 */
if(!empty($_POST['ajax_addFav'])) {
	$postID = intval($_POST['ajax_addFav']);
	$count_favorite = get_field('count_favorite', $postID);
	$getCookieFav = array ();
	if(!empty($_COOKIE['fav'])) $getCookieFav = unserialize($_COOKIE['fav']);
	if(in_array($postID, $getCookieFav)) {
		unset($getCookieFav[array_search($postID, $getCookieFav)]);
		$count_favorite--;
	} else {
		$getCookieFav[] = $postID;
		$count_favorite++;
	}
	update_field('count_favorite', $count_favorite, $postID);
	$rA['count_favorite'] = $count_favorite;
	$rA['total_favorite'] = count($getCookieFav);
	saveCookie('fav', serialize($getCookieFav));
	die(json_encode($rA));
}