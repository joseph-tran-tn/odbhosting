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

		<section class="section01">
			<div class="section01__title title">ODB.vn LUÔN <i class="fa fa-heart"></i> KHÁCH HÀNG CỦA MÌNH!</div>
			<div class="section01__subTitle subTitle">Với các chương trình khuyến mãi hàng tháng, ODB.vn luôn muốn hỗ trợ tối đa cho khách hàng của mình, <br>
giúp cho khách hàng có được dịch vụ tốt nhất với giá cả hợp lý nhât</div>
			<div class="container">
				<?php
				$param = array(
					'post_type' => 'promotion',
					'posts_per_page' => 6,
					'paged' => 1,
				);
				$promotion = new WP_Query($param);
				if($promotion->have_posts()) { ?>
					<div class="promotionList clearfix">
						<?php while($promotion->have_posts()) {
							$promotion->the_post();
							$attachment = wp_get_attachment_url( get_post_thumbnail_id() );
							?>
							<div class="promotionList__item">
								<div class="promotionList__inner">
									<a href="<?php echo get_the_permalink() ?>">
										<div class="promotionList__inner__title"><?php echo $post->post_title ?></div>
										<div class="promotionList__inner__img">
											<img src="<?php echo thumbCrop($attachment, 370, 200) ?>" alt="">
										</div>
										<div class="promotionList__inner__text"><?php echo $post->post_excerpt ?></div>
									</a>
									<div class="promotionList__inner__button">
										<a href="<?php echo get_the_permalink() ?>">XEM NGAY</a>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
	</main>
	<?php include TEMPLATEPATH . '/inc/footer.php' ?>
	<script>
		$(".promotionList__inner__title").matchHeight();
	</script>
</body>
</html>