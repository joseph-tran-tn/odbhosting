<?php /* Template Name: Quy định sử dụng */ ?>
<!DOCTYPE html>
<html>
<head>
	<?php include TEMPLATEPATH . '/inc/head.php' ?>
</head>
<body id="termsPage" class="termsPage">
	<?php include TEMPLATEPATH . '/inc/header.php' ?>
	<main>
		<div class="mainHeader">
			<div class="mainHeader__title"><?php the_title() ?></div>
			<div class="mainHeader__subTitle"> khách hàng sử dụng dịch vụ của ODB.VN đồng nghĩa với việc khách hàng hoàn toàn đồng ý với các quy định <br>đi kèm hợp đồng và các quy định sau:</div>
		</div>
		<section class="section01">
			<div class="container">
				<ul class="listTerms">
					<?php
					$block = get_field('block');
					foreach ($block as $key => $value) { ?>
						<li class="<?php echo ($key == 0) ? 'active' : '' ?>">
							<div class="listTerms__title"><?php echo $key + 1 ?> <?php echo $value['title'] ?></div>
							<div class="listTerms__text"><?php echo $value['content'] ?></div>
						</li>
					<?php } ?>
				</ul>
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