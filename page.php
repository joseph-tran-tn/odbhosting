<!DOCTYPE html>
<html>
<head>
	<?php include TEMPLATEPATH . '/inc/head.php' ?>
</head>
<body id="pagePage" class="pagePage">
	<?php include TEMPLATEPATH . '/inc/header.php' ?>
	<main>
		<div class="mainHeader">
			<div class="mainHeader__title"><?php the_title() ?></div>
		</div>
		<section class="section01">
			<div class="container">
				<div class="text content-cms">
					<?php echo $post->post_content ?>
				</div>
			</div>
		</section>
	</main>
	<?php include TEMPLATEPATH . '/inc/footer.php' ?>
	<script>
		$(".listTerms li").click(function(){
			$(this).toggleClass('active');
			return false;
		})
	</script>
</body>
</html>