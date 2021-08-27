<?php
$post_type = get_query_var('post_type');
$postoj =  get_post_types( '', 'object' );
$postTypeObj = $postoj[$post_type];
include_once( TEMPLATEPATH . "/views/{$post_type}/single.php" );
?>