<?php
include( TEMPLATEPATH . '/libs/head.php' );
?>
</head>
<body id="about">
<!-- header Part ==================================================
================================================== -->
<?php include( TEMPLATEPATH . '/libs/header.php' ) ?>
<!-- header Part ==================================================
================================================== -->
<div class="mainImg"><h2>BFI THUMB (CROP AND RESIZE)</h2></div>
<div class="container">
	<?php
	$attachment = wp_get_attachment_image_src(11, 'full');
	?>
	<p class="taC"><img src="<?php echo $attachment[0] ?>" alt=""></p>
	<?php
	$params = array (
		'width' => 400, // Kich thuoc resize width cua hinh
		'height' => 400, // Kich thuoc resize height cua hinh
		'crop_width' => 300, // Crop width cua hinh goc
		'crop_height' => 300, // Crop height cua hinh goc
		'crop_only' => true,
		'crop_x' => 120, // Position X crop, co the dung: center, 10%. Default la center.
		'crop_y' => 0, // Position Y crop, co the dung: center, 20%. Default la center.
	);
	$thumb = bfi_thumb( $attachment[0], $params );
	?>
<pre style="background: #000; padding: 10px; margin: 10px 0;"><code style="color: #aaa;">include( TEMPLATEPATH . '/inc/BFI_Thumb.php' );
$attachment = wp_get_attachment_image_src(11, 'full');
$params = array (
	'width' => 400, // Kich thuoc resize width cua hinh
	'height' => 400, // Kich thuoc resize height cua hinh
	'crop_width' => 300, // Crop width cua hinh goc
	'crop_height' => 300, // Crop height cua hinh goc
	'crop_only' => true,
	'crop_x' => 120, // Position X crop
	'crop_y' => 0, // Position Y crop
);
$thumb = bfi_thumb( $attachment[0], $params );</code></pre>
	<p class="taC"><img src="<?php echo $thumb ?>" alt=""></p>
</div>
<!--Footer ==================================================
================================================== -->
<?php include( TEMPLATEPATH . '/libs/footer.php' ); ?>
</body>
</html>