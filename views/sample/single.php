<?php
$title_sg = get_the_title();
$ogimg = catch_that_image();
$desPage = mb_substr(preg_replace('/\r\n|\n|\r/','',strip_tags($post->post_content)),0,120);
include( TEMPLATEPATH . '/libs/head.php');
?>
</head>
<body id="top">
		<?php include( TEMPLATEPATH . '/libs/header.php'); ?>
	<div id="container">
		<div class="clearfix">
			<div id="mainContent">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content();?>
				<?php endwhile; endif; ?>
				<!-- /#maincontent -->
			</div>
		</div>
		<!-- /#container -->
	</div>
	<!-- Footer -->
	<?php include( TEMPLATEPATH . '/libs/footer.php'); ?>
<!-- End Document -->
</body>
</html>
