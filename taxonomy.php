<?php
$taxonomy = get_query_var('taxonomy');
$tax = get_taxonomies(array(
	'name'		=> $taxonomy,
	'public'		=> true,
),'name') ;
foreach ($tax[$taxonomy]->object_type as $key => $post_type) {
	include_once( TEMPLATEPATH . "/views/{$post_type}/taxonomy-{$taxonomy}.php" );
	exit();
}
?>