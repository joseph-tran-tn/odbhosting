<?php
/**
 * [ For rewrite URL ]
 * how to use
 * URL: http://abc.com/sp/blog/title-of-single
 * $title = $_GET['args'];
 * or http://abc.com/sp/blog/page/2
 * $paged = $args['page'];
 * @return [array]
 */
function getArrUrl ( $var ) {
	$nvar = array ();
	$na = explode("/", $var);
	for($i = 0; $i < count($na) - 1; $i += 4) {
		$nvar["$na[$i]"] = $na[$i+1];
	}
	return $nvar;
}
if(!empty($_GET['args'])) $args = getArrUrl($_GET['args']);


/**
 * [ Cut String ]
 * @return [string]
 */
function cutString($str, $len, $moreStr = "...") {		
	$mystr = "";
	$str = strip_tags($str);
	$str = preg_replace('/\r\n|\n|\r/','',$str);
	if(mb_strlen($str) > $len) {
		$newstr = mb_substr($str,0,$len);			
		$mystr = $newstr.$moreStr;
	} else $mystr = $str;
	return $mystr;			
}


/**
 * [ get image from content ]
 * @return [string]
 */
function get_first_image($cnt, $noimg = true) {
	$first_img = '';
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $cnt, $matches);
	for($i=0;$i<=10;$i++) {
		$first_img = $matches[1][$i];
    $ext = substr( $first_img, -3);
    if($ext == 'jpg' || $ext == 'png') {
      return $first_img;
      break;
    }
  }
	if(empty($first_img) || $first_img == "") {
		if($noimg) $first_img = APP_ASSETS . "img/common/other/img_nophoto.jpg";
		else return false;
	}  
	return $first_img;
}


/**
 * [ catch image from $post->post_content  ]
 * @return [string]
 */
function catch_that_image($noimg = true) {
	global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  if(!empty($matches[1][0])) $first_img = $matches[1][0];
  if(empty($first_img) || $first_img == "") {
  	if($noimg) $first_img = APP_ASSETS . "img/common/other/img_nophoto.jpg";
  	else return false;
  }
  return $first_img;
}


/**
 * [ get Current URL ]
 * @return [string]
 */
function curPageURL() {
  $pageURL = 'http';
  if (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
  $pageURL .= "://";
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
  return $pageURL;
}
$current_url = curPageURL();
