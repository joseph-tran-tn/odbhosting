<!DOCTYPE html>
<html>
<head>
	<?php include TEMPLATEPATH . '/inc/head.php' ?>
</head>
<body id="promotePage" class="promotePage">
	<?php include TEMPLATEPATH . '/inc/header.php' ?>
	<main>
		<div class="mainHeader">
			<div class="mainHeader__title">KHUYẾN MÃI</div>
			<div class="mainHeader__subTitle">Sự hài lòng của quý khách hàng là tiêu chí hỗ trợ của ODB.vn</div>
		</div>

		<?php if(have_posts()) { while(have_posts()) { the_post(); ?>
			<?php
			$attachment = wp_get_attachment_url( get_post_thumbnail_id() );
			?>
			<section class="section01">
				<div class="section01__title title"><?php the_title() ?></div>
				<div class="container">
					<img src="<?php echo $attachment ?>" alt="" class="promoteIMG">
					<div class="content_promote"><?php the_content() ?></div>
				</div>
			</section>
		<?php } } ?>
	</main>
	<?php include TEMPLATEPATH . '/inc/footer.php' ?>
</body>
</html>