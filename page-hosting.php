<?php /* Template Name: Hosting */ ?>
<!DOCTYPE html>
<html>
<head>
	<?php include TEMPLATEPATH . '/inc/head.php' ?>
</head>
<body id="hostingPage" class="hostingPage">
	<?php include TEMPLATEPATH . '/inc/header.php' ?>
	<main>
		<div class="mainHeader">
			<div class="mainHeader__title">ĐẠI LÝ HOSTING</div>
			<div class="mainHeader__subTitle">Giúp quý khách cung cấp dịch vụ hosting ổ định chất lượng cao dưới danh nghĩa công ty <br>của quý khách hàng với giá của riêng mình</div>
		</div>

		<section class="section01">
			<div class="section01__title title">GIỚI THIỆU DỊCH VỤ ĐẠI LÝ HOSTING</div>
			<div class="section01__subTitle subTitle">ODB cung cấp Hosting không giới hạn băng thông, chống DDOS. Hosting giá rẻ chất lượng sử dụng ổ cứng SSD <br>
và công nghệ Litespeed + CloudLinux tăng tốc website của bạn gấp nhiều lần</div>
			<div class="container">
				<div class="clearfix section01__intro">
					<div class="section01__intro__img">
						<img src="<?php echo APP_ASSETS ?>img/hosting/img01.png" alt="">
					</div>
					<div class="section01__intro__text">ODB.vn cung cấp dịch vụ SSD Hosting giá rẻ chất lượng cao. Tích hợp các công nghệ mạnh nhất, tối ưu nhất với hệ thống tường lửa bảo vệ website mạnh mẽ nhất.<br><br>
					Website của bạn sẽ nhanh gấp nhiều lần, bảo mật không lo bị tấn công khi sử dụng SSD Hosting tại ODB.vn!<br><br>
					Hosting tại ODB.vn sử dụng ổ cứng SSD, Tích hợp tính năng tự động cản lọc DDOS và bật tắt cản lọc tại giao diện cPanel. Hỗ trợ IPv6, công nghệ web server Litespeed + Nginx</div>

					<div class="odbHosting">
						<ul>
							<?php
							$accordion_01 = get_field('accordion_01');
							foreach ($accordion_01 as $key => $value) {
								?>
								<li class="<?php echo ($key == 0) ? 'active' : '' ?>">
									<div class="odbHosting__title"><?php echo $value['title'] ?></div>
									<div class="odbHosting__text" style="<?php echo ($key == 0) ? 'display: block' : '' ?>"><?php echo $value['content'] ?></div>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="sectionPriceTable">
			<div class="container">
				<div class="sectionPriceTable__title title">BẢNG GIÁ DỊCH VỤ WEB HOSTING GIÁ RẺ</div>
				<div class="sectionPriceTable__subTitle subTitle">Hosting giá rẻ không giới hạn băng thông, tối ưu phù hợp với website của bạn</div>
			</div>
			<div class="bgPink">
				<div class="container">
					<div class="hostingTabs">
						<ul>
							<li class="active"><a href="#hostingCanhan">Hosting cá nhân</a></li>
							<li><a href="#hostingDoanhnghiep">Hosting doanh nghiệp</a></li>
						</ul>
					</div>
					<?php $group_pricetable = get_field('group_pricetable'); ?>
					<div class="listHosting">
						<ul id="hostingCanhan">
							<?php
							foreach ($group_pricetable['canhan'] as $key => $value) {
								?>
								<li>
									<div class="eachHosting">
										<div class="eachHosting__name"><?php echo $value['name'] ?></div>
										<div class="eachHosting__price">
											<strong><?php echo numF($value['price']) ?></strong><span>/tháng</span>
										</div>
										<div class="eachHosting__features">
											<?php echo nl2br($value['text']) ?>
										</div>
										<div class="eachHosting__button">
											<a href="<?php echo $value['link'] ?>"><span>ĐĂNG KÝ</span></a>
										</div>
									</div>
								</li>
							<?php } ?>
						</ul>
						<ul id="hostingDoanhnghiep" style="display: none;">
							<?php
							foreach ($group_pricetable['doanhnghiep'] as $key => $value) {
								?>
								<li>
									<div class="eachHosting">
										<div class="eachHosting__name"><?php echo $value['name'] ?></div>
										<div class="eachHosting__price">
											<strong><?php echo numF($value['price']) ?></strong><span>/tháng</span>
										</div>
										<div class="eachHosting__features">
											<?php echo nl2br($value['text']) ?>
										</div>
										<div class="eachHosting__button">
											<a href="<?php echo $value['link'] ?>"><span>ĐĂNG KÝ</span></a>
										</div>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
					<div class="bgPink__text">Thanh toán theo 6 tháng giảm ngay 3%, theo 1 năm giảm 5%, theo 2 năm giảm 10%, theo 3 năm giảm 15%</div>
				</div>
			</div>
		</section>
		<section class="sectionProfesional">
			<div class="container">
				<div class="sectionProfesional__title title">CHUYÊN NGHIỆP, UY TÍN, BẢO MẬT VÀ KHÁC BIỆT</div>
				<div class="sectionProfesional__tabContent clearfix">
					<?php $accordion_02 = get_field('accordion_02') ?>
					<div class="sectionProfesional__tabContent__tabs">
						<ul>
							<?php foreach ($accordion_02 as $key => $value) { ?>
								<li class="<?php echo ($key == 0) ? 'active' : '' ?>"><a href="#pro0<?php echo $key ?>"><?php echo $value['title'] ?></a></li>
							<?php } ?>
						</ul>
					</div>
					<div class="sectionProfesional__tabContent__contents">
						<ul>
							<?php foreach ($accordion_02 as $key => $value) { ?>
								<li id="pro0<?php echo $key ?>" style="<?php echo ($key == 0) ? 'display:block' : '' ?>">
									<div class="sectionProfesional__tabContent__contents__title"><?php echo $value['title'] ?></div>
									<div class="sectionProfesional__tabContent__contents__text"><?php echo nl2br($value['content']) ?></div>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="sectionCMS">
			<div class="container">
				<div class="sectionCMS__title title">HOSTING DÀNH RIÊNG CHO CÁC MÃ NGUỒN</div>
				<div class="cms">
					<ul class="cms__list clearfix">
						<li class="cms__item">
							<div class="cms__inner">
								<div class="cms__img"><img src="<?php echo APP_ASSETS ?>img/hosting/cms01.jpg"></div>
								<div class="cms__info">
									<div class="cms__info__title">WordPress Hosting</div>
									<div class="cms__info__text">WordPress Hosting là dịch vụ SSD hosting dành riêng cho mã nguồn website WordPress. Hosting cho WordPress đã được ODB.vn tích hợp những tính năng CAO CẤP mà các nhà cung cấp khác không có, đặt biệt là công nghệ Litespeed Cache giúp tăng tốc website của bạn gấp 20 lần</div>
								</div>
							</div>
						</li>
						<li class="cms__item">
							<div class="cms__inner">
								<div class="cms__img"><img src="<?php echo APP_ASSETS ?>img/hosting/cms02.jpg"></div>
								<div class="cms__info">
									<div class="cms__info__title">XenForo Hosting</div>
									<div class="cms__info__text">XenForo Hosting là dịch vụ SSD hosting dành riêng cho mã nguồn diễn đàn XenForo. Hosting cho XenForo tại ODB.vn được tối ưu dành riêng cho XenForo. Đặt biệt tích hợp công nghệ LiteSpeed Cache (LSCXF) giúp tăng tốc truy cập diễn đàn lên gấp nhiều lần.</div>
								</div>
							</div>
						</li>
						<li class="cms__item">
							<div class="cms__inner">
								<div class="cms__img"><img src="<?php echo APP_ASSETS ?>img/hosting/cms03.jpg"></div>
								<div class="cms__info">
									<div class="cms__info__title">NukeViet Hosting</div>
									<div class="cms__info__text">Nukeviet Hosting là dịch vụ SSD hosting dành riêng cho mã nguồn website Nukeviet CMS. 123HOST là nhà cung cấp hosting duy nhất tích hợp công nghệ 123HOST LSCache để tăng tốc website Nukeviet. Đồng thời cũng là nhà cung cấp đầu tiên đạt chứng nhận hosting tương thích với Nukeviet 4.x</div>
								</div>
							</div>
						</li>
						<li class="cms__item">
							<div class="cms__inner">
								<div class="cms__img"><img src="<?php echo APP_ASSETS ?>img/hosting/cms04.jpg"></div>
								<div class="cms__info">
									<div class="cms__info__title">OpenCart Hosting</div>
									<div class="cms__info__text">Website bán hàng Opencart cần các cấu hình tối ưu để tăng tốc truy cập, chịu tải cao và đặt biệt là bảo mật thông tin khách hàng và đơn hàng. Hãy để 123HOST bảo vệ và vận hành “của hàng online” của bạn. Mọi vấn đề của website hãy để chúng tôi thực hiện, bạn chỉ cần bán hàng!</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="sectionTech">
			<div class="container">
				<div class="sectionTech__title title">CHUYÊN HIỆU NĂNG ỔN ĐỊNH VÀ TIỆN LỢI</div>
				<ul class="techList clearfix">
					<li>
						<div class="techList__inner">
							<div class="img"><img src="<?php echo APP_ASSETS ?>img/hosting/ico01.png" alt=""></div>
							<div class="text">Không giới hạn<br>băng thông</div>
						</div>
					</li>
					<li>
						<div class="techList__inner">
							<div class="img"><img src="<?php echo APP_ASSETS ?>img/hosting/ico02.png" alt=""></div>
							<div class="text">Không giới hạn<br>sub/Packed Domain</div>
						</div>
					</li>
					<li>
						<div class="techList__inner">
							<div class="img"><img src="<?php echo APP_ASSETS ?>img/hosting/ico03.png" alt=""></div>
							<div class="text">Softtalulous<br>cài web 1 click</div>
						</div>
					</li>
					<li>
						<div class="techList__inner">
							<div class="img"><img src="<?php echo APP_ASSETS ?>img/hosting/ico04.png" alt=""></div>
							<div class="text">Cam kết 99%<br>ổn định</div>
						</div>
					</li>
					<li>
						<div class="techList__inner">
							<div class="img"><img src="<?php echo APP_ASSETS ?>img/hosting/ico05.png" alt=""></div>
							<div class="text">Free bakup<br>hằng ngày</div>
						</div>
					</li>
					<li>
						<div class="techList__inner">
							<div class="img"><img src="<?php echo APP_ASSETS ?>img/hosting/ico06.png" alt=""></div>
							<div class="text">DDOS<br>Protection</div>
						</div>
					</li>
					<li>
						<div class="techList__inner">
							<div class="img"><img src="<?php echo APP_ASSETS ?>img/hosting/ico07.png" alt=""></div>
							<div class="text">NGINX + LITESPEED<br>nhanh gấp 6 lần</div>
						</div>
					</li>
					<li>
						<div class="techList__inner">
							<div class="img"><img src="<?php echo APP_ASSETS ?>img/hosting/ico08.png" alt=""></div>
							<div class="text">Hỗ trợ<br>24/7/365</div>
						</div>
					</li>
				</ul>
				<div class="btnArea">
					<a href=""><span>Xem tất cả công nghệ của ODB.VN</span></a>
				</div>
			</div>
		</section>
		<section class="sectionfaq">
			<div class="sectionfaq__title title">NHẬN XÉT CỦA KHÁCH HÀNG VỀ DỊCH VỤ CỦA ODB</div>
			<div class="customerTalk">
				<div class="container">
					<ul>
						<li>
							<div class="eachTalk">
								<div class="eachTalk__img"><img src="<?php echo APP_ASSETS ?>img/talk01.png" alt=""></div>
								<div class="eachTalk__name"><strong>CEO công ty YoungWorld</strong> <span>h2shop.com</span></div>
								<div class="eachTalk__talk"> ODB.vn có dịch vụ rất nhiệt tình, chuyên môn cao, phản hồi nhanh. Nhìn chung tôi rất hài lòng với dịch vụ của công ty.</div>
							</div>
						</li>
						<li>
							<div class="eachTalk">
								<div class="eachTalk__img"><img src="<?php echo APP_ASSETS ?>img/talk02.png" alt=""></div>
								<div class="eachTalk__name"><strong>Nguyễn Thanh Đàm</strong> <span>oto-hui.com</span></div>
								<div class="eachTalk__talk">Nếu phải dùng từ ngữ để nhận xét về dịch vụ của ODB.vn thì tôi chỉ có thể dùng từ xuất sắc và rất hài lòng.</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="faqContent">
				<div class="container">
					<div class="faqContent__title title">FAQ - CÁC CÂU HỎI THƯỜNG GẶP</div>
					<ul>
						<li>
							<div class="question">TÔI MUỐN CHUYỂN DỮ LIỆU TỪ NHÀ CUNG CẤP KHÁC VỀ ODB THÌ PHẢI LÀ SAO?</div>
							<div class="answer">Quý khách chỉ cần đăng ký hosting và thanh toán, hãy để việc chuyển dữ liệu cho ODB.vn. Yên tâm vì việc chuyển dữ liệu là hoàn toàn miễn phí và không gây ra downtime!</div>
						</li>
						<li>
							<div class="question">LÀM SAO TÔI CÓ THỂ THANH TOÁN CHO ODB?</div>
							<div class="answer">Quý khách có thể chuyển khoản ngân hàng, thanh toán online ngay qua Onepay, Bảo Kim hoặc Paypal, hoặc cũng có thể đến tại văn phòng của ODB.vn. Hãy chọn hình thức thanh toán tiện lợi nhất cho mình tại đây.</div>
						</li>
						<li>
							<div class="question">KHI TÔI CẦN TƯ VẤN KỸ THUẬT, TÔI LIÊN HỆ THẾ NÀO?</div>
							<div class="answer">ODB.vn cung cấp rất nhiều phương thức hỗ trợ khách hàng. Hỗ trợ quý khách là niềm vinh hạnh của chúng tôi.<br>Xem các kênh hỗ trợ tại đây</div>
						</li>
						<li>
							<div class="question">TÔI ĐANG SỬ DỤNG VÀ MUỐN GIA HẠN HOSTING, TÔI PHẢI LÀM SAO?</div>
							<div class="answer">Trước khi hết hạn hosting 7 ngày, hóa đơn sẽ được tạo và gởi thông báo về email cho quý khách. Quý khách chỉ cần thanh toán hóa đơn và dịch vụ sẽ được gia hạn.</div>
						</li>
						<li>
							<div class="question">TÔI MUỐN XUẤT HÓA ĐƠN KÈM HỢP ĐỒNG CÓ ĐƯỢC KHÔNG?</div>
							<div class="answer">Tất nhiên là được. Nếu quý khách yêu cầu, hóa đơn và hợp đồng sẽ được xuất và gởi qua đường bưu điện. Hãy liên hệ phòng kế toán để được xuất hóa đơn, các kênh liên hệ tại đây</div>
						</li>
						<li>
							<div class="question">TÔI CÓ THỂ CHẠY NHIỀU WEBSITE KHÁC NHAU TRÊN 1 HOSTING KHÔNG?</div>
							<div class="answer">Nếu website dạng domain con (subdomain), quý khách có thể tạo không giới hạn. Nếu website với tên miền chính khác nhau (addon domain), số lượng website cho phép phụ thuộc vào tham số Addon domain trên bảng giá.</div>
						</li>
						<li>
							<div class="question">ODB.vn CÓ CHÍNH SÁCH HOÀN TIỀN HAY KHÔNG?</div>
							<div class="answer">ODB.vn cung cấp hosting giá rẻ đồng thời chúng tôi tự tin chất lượng dịch vụ của mình, vì vậy nếu trong vòng 30 ngày sử dụng, nếu quý khách không hài lòng, chúng tôi sẽ hoàn tiền 100%. Xem cụ thể chính sách hoàn tiền tại đây.</div>
						</li>
						<li>
							<div class="question">TÔI MUỐN NÂNG CẤP HOSTING LÊN GÓI CAO HƠN, TÔI PHẢI LÀM SAO?</div>
							<div class="answer">Bạn có thể tự nâng cấp gói hosting của mình thông qua giao diện trung tâm khánh hàng client.ODB.vn. Xem hướng dẫn nâng cấp/hạ cấp hosting tại đây.</div>
						</li>
					</ul>
				</div>
			</div>
		</section>
	</main>
	<?php include TEMPLATEPATH . '/inc/footer.php' ?>
	<script>
		$(".odbHosting__title").click(function(){
			$(".odbHosting__text").slideUp();
			if(!$(this).parent().hasClass('active')) {
				$(".odbHosting li").removeClass('active');
				$(this).parent().addClass('active');
				$(this).next().slideDown();
			} else {
				$(".odbHosting li").removeClass('active');
				$(this).parent().removeClass('active');
				$(this).next().slideUp();
			}
			return false;
		})
		$(".hostingTabs a").click(function(){
			$(this).parents('.hostingTabs').find('li').removeClass('active');
			$(this).parent().addClass('active');
			var href = $(this).attr('href');
			$(".listHosting ul").hide();
			$(href).show();
			return false;
		})
		$(".sectionProfesional__tabContent__tabs a").click(function(){
			$(this).parents('.sectionProfesional__tabContent__tabs').find('li').removeClass('active');
			$(this).parent().addClass('active');
			var href = $(this).attr('href');
			$(".sectionProfesional__tabContent__contents li").hide();
			$(href).show();
			return false;
		})
	</script>
</body>
</html>