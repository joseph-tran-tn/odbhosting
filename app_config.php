<?php
// get protocol.
$url = $_SERVER['HTTP_HOST'].'/';
$protocol = empty($_SERVER["HTTPS"]) ? 'http://' : 'https://';

// get host.
$app_url = $protocol.$_SERVER['HTTP_HOST'].'/';

if($_SERVER['SERVER_ADDR'] == '127.0.0.1') define('ENVIRONMENT', 'dev');
else define('ENVIRONMENT', 'production');

define('APP_URL', $app_url);
define('APP_PATH', dirname(__FILE__).'/');
define("APP_URL_SHORT", "//".$url);
define("APP_URL_HTTPS", "https://".$url);
if(defined('ABSPATH')) define('APP_ASSETS', APP_URL . 'app/wp-content/themes/maxhost/assets/');
else define('APP_ASSETS', APP_URL . 'app/wp-content/themes/maxhost/assets/');
define('APP_PATH_WP', dirname(__FILE__).'/wp/');
define("APP_SP_URL",  APP_URL."sp/");
define("APP_SP_PATH", APP_PATH."sp/");

define('GOOGLE_MAP_API_KEY', '');
define('GOOGLE_RECAPTCHA_KEY_API', '');
define('GOOGLE_RECAPTCHA_KEY_SECRET', '');