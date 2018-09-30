<?php
date_default_timezone_set ( 'Asia/Ho_Chi_Minh' );

// get protocol.
$protocol = empty($_SERVER["HTTPS"]) ? 'http://' : 'https://';

$url = $_SERVER['HTTP_HOST'].'/odbhosting/';
$app_url = $protocol.$_SERVER['HTTP_HOST'].'/demo/odbhosting/';

define('APP_URL', $app_url);
define('APP_PATH', dirname(__FILE__).'/');
define("APP_URL_SHORT", "//".$url);
define("APP_URL_HTTPS", "https://".$url);
define('APP_ASSETS', APP_URL.'assets/');