<?php /* Template Name: Chính sách riêng tư */ ?>
<!DOCTYPE html>
<html>
<head>
	<?php include TEMPLATEPATH . '/inc/head.php' ?>
</head>
<body id="privacyPage" class="privacyPage">
	<?php include TEMPLATEPATH . '/inc/header.php' ?>
	<main>
		<div class="mainHeader">
			<div class="mainHeader__title"><?php the_title() ?></div>
		</div>
		<section class="section01">
			<div class="container">
				<div class="text">
					<?php echo $post->post_content ?>
				</div>
			</div>
		</section>
	</main>
	<?php include TEMPLATEPATH . '/inc/footer.php' ?>
</body>
</html>