<?php include 'config.php' ?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'inc/head.php' ?>
</head>
<body id="top" class="top">
	<?php include 'inc/header.php' ?>
	<div class="sliderTOP">
		<div class="sliderTOP__inner">
			<div class="sliderTOP__inner__item" style="background-image: url(<?php echo APP_ASSETS ?>img/bg.jpg)"></div>
		</div>
	</div>
	<div class="checkDomain">
		<div class="container">
			<form action="">
				<button class="buttonSearchDomain"><span>Kiểm tra</span></button>
				<div class="checkDomain__input">
					<input type="text" placeholder="TÊN MIỀN CỦA BẠN">
				</div>
				<div class="selectBoxs">
					<ul>
						<li><div class="innerSelect"><input type="checkbox" checked name="ext" value=".com" id="#com"> <label for="#com"> .com</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" checked name="ext" value=".net" id="#net"> <label for="#net"> .net</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".org" id="#org"> <label for="#org"> .org</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".biz" id="#biz"> <label for="#biz"> .biz</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".gov" id="#gov"> <label for="#gov"> .gov</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".me" id="#me"> <label for="#me"> .me</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".info" id="#info"> <label for="#info"> .info</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".mobi" id="#mobi"> <label for="#mobi"> .mobi</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".eu" id="#eu"> <label for="#eu"> .eu</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".co.uk" id="#co_uk"> <label for="#co_uk"> .co.uk</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".co" id="#co"> <label for="#co"> .co</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".us" id="#us"> <label for="#us"> .us</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".ca" id="#ca"> <label for="#ca"> .ca</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".land" id="#land"> <label for="#land"> .land</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".guru" id="#guru"> <label for="#guru"> .guru</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".edu" id="#edu"> <label for="#edu"> .edu</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".mil" id="#mil"> <label for="#mil"> .mil</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".ac.id" id="#ac_id"> <label for="#ac_id"> .ac.id</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".co.id" id="#co_id"> <label for="#co_id"> .co.id</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".so" id="#so"> <label for="#so"> .so</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".ph" id="#ph"> <label for="#ph"> .ph</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".pe" id="#pe"> <label for="#pe"> .pe</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".la" id="#la"> <label for="#la"> .la</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".ch" id="#ch"> <label for="#ch"> .ch</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".se" id="#se"> <label for="#se"> .se</label></div></li>
						<li><div class="innerSelect"><input type="checkbox" name="ext" value=".nl" id="#nl"> <label for="#nl"> .nl</label></div></li>
					</ul>
					<div class="selectBoxs__action">
						<a href="" class="selectBoxs__action__selectAll">Select All</a>
						<a href="" class="selectBoxs__action__reset">Reset</a>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="listDomain">
		<div class="container">
			<ul>
				<li>
					<div class="eachDomain">
						<div class="eachDomain__name">domainmau.vn</div>
						<div class="eachDomain__info">
							<div class="eachDomain__info__status">Domain Availabe</div>
							<div class="eachDomain__info__price">Giá: 870.000 Đ</div>
							<div class="eachDomain__info__button">
								<a href="" class="btnBuy">
									<i class="fa fa-shopping-cart"></i> <span>Mua ngay</span>
								</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="eachDomain">
						<div class="eachDomain__name">domainmau.vn</div>
						<div class="eachDomain__info">
							<div class="eachDomain__info__status">Domain Availabe</div>
							<div class="eachDomain__info__price">Giá: 870.000 Đ</div>
							<div class="eachDomain__info__button">
								<a href="" class="btnBuy">
									<i class="fa fa-shopping-cart"></i> <span>Mua ngay</span>
								</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="eachDomain eachDomain--unavailable">
						<div class="eachDomain__name">domainmau.vn</div>
						<div class="eachDomain__info">
							<div class="eachDomain__info__status">Domain Availabe</div>
							<div class="eachDomain__info__price">Giá: 870.000 Đ</div>
							<div class="eachDomain__info__button">
								<a href="" class="btnBuy">
									<i class="fa fa-exchange-alt"></i> <span>Đổi tên Domain</span>
								</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="eachDomain">
						<div class="eachDomain__name">domainmau.vn</div>
						<div class="eachDomain__info">
							<div class="eachDomain__info__status">Domain Availabe</div>
							<div class="eachDomain__info__price">Giá: 870.000 Đ</div>
							<div class="eachDomain__info__button">
								<a href="" class="btnBuy">
									<i class="fa fa-shopping-cart"></i> <span>Mua ngay</span>
								</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="eachDomain">
						<div class="eachDomain__name">domainmau.vn</div>
						<div class="eachDomain__info">
							<div class="eachDomain__info__status">Domain Availabe</div>
							<div class="eachDomain__info__price">Giá: 870.000 Đ</div>
							<div class="eachDomain__info__button">
								<a href="" class="btnBuy">
									<i class="fa fa-shopping-cart"></i> <span>Mua ngay</span>
								</a>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="listHosting">
		<div class="container">
			<div class="listHosting__title">NHÀ CUNG CẤP WEB HOSTING TỐT NHẤT VIỆT NAM</div>
			<div class="listHosting__subTitle">Website của bạn sẽ bảo mật, ổn định và nhanh gấp nhiều lần khi sử dụng hosting tại ODB.vn</div>
			<ul>
				<li>
					<div class="eachHosting">
						<div class="eachHosting__name">Hosting 1</div>
						<div class="eachHosting__price">
							<strong>35</strong><span>k/tháng</span>
						</div>
						<div class="eachHosting__features">
							<p>600MB Dung lượng</p>
							<p>Không giới hạn Băng thông</p>
							<p>Không giới hạn tài khoản Email24/7/365 Support</p>
							<p>Chống DDOS 2 lớp 99.9%</p>
							<p><img src="<?php echo APP_ASSETS ?>img/times.png" alt=""></p>
							<p><img src="<?php echo APP_ASSETS ?>img/times.png" alt=""></p>
							<p>Uptime</p>
						</div>
						<div class="eachHosting__button">
							<a href=""><span>ĐĂNG KÝ</span></a>
						</div>
					</div>
				</li>
				<li class="active">
					<div class="eachHosting">
						<div class="eachHosting__name">Hosting 2</div>
						<div class="eachHosting__price">
							<strong>100</strong><span>k/tháng</span>
						</div>
						<div class="eachHosting__features">
							<p>2GB Dung lượng</p>
							<p>Không giới hạn Băng thông</p>
							<p>Không giới hạn Tài khoản Email 24/7/365 Support</p>
							<p>Chống DDOS 2 lớp</p>
							<p>Bật tắt cản lọc DDOS</p>
							<p>Quét mã độc tại cPanel</p>
							<p>99.9% Uptime</p>
						</div>
						<div class="eachHosting__button">
							<a href=""><span>choose plan</span></a>
						</div>
					</div>
				</li>
				<li>
					<div class="eachHosting">
						<div class="eachHosting__name">Hosting 3</div>
						<div class="eachHosting__price">
							<strong>150</strong><span>k/tháng</span>
						</div>
						<div class="eachHosting__features">
							<p>3GB Dung lượng</p>
							<p>Không giới hạn Băng thông</p>
							<p>Không giới hạn Tài khoản Email 24/7/365 Support</p>
							<p>Chống DDOS 2 lớp</p>
							<p>Bật tắt cản lọc DDOS</p>
							<p>Quét mã độc tại cPanel</p>
							<p>99.9% Uptime</p>
						</div>
						<div class="eachHosting__button">
							<a href=""><span>ĐĂNG KÝ</span></a>
						</div>
					</div>
				</li>
				<li>
					<div class="eachHosting">
						<div class="eachHosting__name">Hosting 4</div>
						<div class="eachHosting__price">
							<strong>300</strong><span>k/tháng</span>
						</div>
						<div class="eachHosting__features">
							<p>9GB Dung lượng</p>
							<p>Không giới hạn Băng thông</p>
							<p>Không giới hạn Tài khoản Email 24/7/365 Support</p>
							<p>Chống DDOS 2 lớp</p>
							<p>Bật tắt cản lọc DDOS</p>
							<p>Quét mã độc tại cPanel</p>
							<p>99.9% Uptime</p>
						</div>
						<div class="eachHosting__button">
							<a href=""><span>ĐĂNG KÝ</span></a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="listWhy">
		<div class="container">
			<div class="listWhy__title">GIÚP WEBSITE CỦA BẠN NHANH HƠN VÀ ỔN ĐỊNH HƠN</div>
			<ul>
				<li>
					<div class="eachWhy">
						<div class="eachWhy__img">
							<img src="<?php echo APP_ASSETS ?>img/why01.png" alt="">
						</div>
						<div class="eachWhy__title">Hỗ trợ kỹ thuật 24/7</div>
						<div class="eachWhy__desc">Luôn hỗ trợ quý khách hàng dù bất cứ thời điểm nào, kể cả ngày lễ tết.</div>
					</div>
				</li>
				<li>
					<div class="eachWhy">
						<div class="eachWhy__img">
							<img src="<?php echo APP_ASSETS ?>img/why02.png" alt="">
						</div>
						<div class="eachWhy__title">Sao lưu hằng ngày</div>
						<div class="eachWhy__desc">Dữ liệu hệ thống hosting được đảm bảo và sao lưu hằng ngày</div>
					</div>
				</li>
				<li>
					<div class="eachWhy">
						<div class="eachWhy__img">
							<img src="<?php echo APP_ASSETS ?>img/why03.png" alt="">
						</div>
						<div class="eachWhy__title">Bảo mật chống tấn công 2 lớp</div>
						<div class="eachWhy__desc">Hệ thống mạng được bảo mật chống tấn công với 2 lớp tường lửa chuyên dụng</div>
				</li>
				<li>
					<div class="eachWhy">
						<div class="eachWhy__img">
							<img src="<?php echo APP_ASSETS ?>img/why04.png" alt="">
						</div>
						<div class="eachWhy__title">Công nghệ mới nhất</div>
						<div class="eachWhy__desc">Sử dụng công nghệ tối ưu và mới nhất như Nginx, Litespeed, PHP-FPM, PHP7</div>
				</li>
				<li>
					<div class="eachWhy">
						<div class="eachWhy__img">
							<img src="<?php echo APP_ASSETS ?>img/why05.png" alt="">
						</div>
						<div class="eachWhy__title">Không giới hạn băng thông</div>
						<div class="eachWhy__desc">Tất cả các gói Hosting và VPS đều không giới hạn băng thông</div>
				</li>
				<li>
					<div class="eachWhy">
						<div class="eachWhy__img">
							<img src="<?php echo APP_ASSETS ?>img/why06.png" alt="">
						</div>
						<div class="eachWhy__title">Giải pháp cho hệ thống lớn</div>
						<div class="eachWhy__desc">Nhiều kinh nghiệm tư vấn và triển khai hệ thống cho website online cao</div>
				</li>
				<li>
					<div class="eachWhy">
						<div class="eachWhy__img">
							<img src="<?php echo APP_ASSETS ?>img/why07.png" alt="">
						</div>
						<div class="eachWhy__title">Tất cả dùng ổ cứng SSD</div>
						<div class="eachWhy__desc">Tất cả hệ thống đều sử dụng ổ cứng SSD giúp đạt hiệu năng vượt trội</div>
				</li>
				<li>
					<div class="eachWhy">
						<div class="eachWhy__img">
							<img src="<?php echo APP_ASSETS ?>img/why08.png" alt="">
						</div>
						<div class="eachWhy__title">Datacenter tốt nhất Việt Nam</div>
						<div class="eachWhy__desc">Hệ thống đặt tại VDC2 và ViettelIDC, top 2 datacenter tốt nhất Việt Nam</div>
				</li>
				<li>
					<div class="eachWhy">
						<div class="eachWhy__img">
							<img src="<?php echo APP_ASSETS ?>img/why09.png" alt="">
						</div>
						<div class="eachWhy__title">30 ngày hoàn tiền</div>
						<div class="eachWhy__desc">Cam kết hoàn tiền trong vòng 30 ngày nếu khách hàng không hài lòng dịch vụ.</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="listServices">
		<div class="container">
			<div class="listServices__title">NHỮNG DỊCH VỤ NỔI BẬT</div>
			<div class="tabContent">
				<div class="listTab">
					<ul>
						<li><a href="#service01">Hosting</a></li>
						<li class="active"><a href="#service02">Tên miền</a></li>
						<li><a href="#service03">Thuê server</a></li>
						<li><a href="#service04">SSD VPS</a></li>
						<li><a href="#service05">Colocation</a></li>
					</ul>
				</div>
				<div class="listContent">
					<div class="listContent__eachContent" id="service01">
						<img src="<?php echo APP_ASSETS ?>img/service01.png" alt="">
						<div class="listContent__eachContent__right">
							<div class="listContent__eachContent__right__title">Nhà cung cấp hosting<br>tốt nhất tại Việt Nam.</div>
							<div class="listContent__eachContent__right__content">
								<p>Tất cả gói hosting đều không giới hạn băng thông. Công nghệ Nginx + Litespeed giúp tăng tốc website gấp 6 lần. Hệ thống tường lửa 2 lớp giúp website ổn định và bảo mật. Ngoài ra còn nhiều tính năng như tạo website chỉ với 3 bước với Softaculous, bật tắt chống tấn công với DDOS Protection, quét mã độc với Malware scanner.</p>
								<div class="taR"><a href="">Xem thêm >></a></div>
							</div>
						</div>
					</div>
					<div class="listContent__eachContent" id="service02" style="display: block;">
						<img src="<?php echo APP_ASSETS ?>img/service02.png" alt="">
						<div class="listContent__eachContent__right">
							<div class="listContent__eachContent__right__title">Nhà cung cấp hosting<br>tốt nhất tại Việt Nam.</div>
							<div class="listContent__eachContent__right__content">
								<p>Tất cả gói hosting đều không giới hạn băng thông. Công nghệ Nginx + Litespeed giúp tăng tốc website gấp 6 lần. Hệ thống tường lửa 2 lớp giúp website ổn định và bảo mật. Ngoài ra còn nhiều tính năng như tạo website chỉ với 3 bước với Softaculous, bật tắt chống tấn công với DDOS Protection, quét mã độc với Malware scanner.</p>
								<div class="taR"><a href="">Xem thêm >></a></div>
							</div>
						</div>
					</div>
					<div class="listContent__eachContent" id="service03">
						<img src="<?php echo APP_ASSETS ?>img/service03.png" alt="">
						<div class="listContent__eachContent__right">
							<div class="listContent__eachContent__right__title">Nhà cung cấp hosting<br>tốt nhất tại Việt Nam.</div>
							<div class="listContent__eachContent__right__content">
								<p>Tất cả gói hosting đều không giới hạn băng thông. Công nghệ Nginx + Litespeed giúp tăng tốc website gấp 6 lần. Hệ thống tường lửa 2 lớp giúp website ổn định và bảo mật. Ngoài ra còn nhiều tính năng như tạo website chỉ với 3 bước với Softaculous, bật tắt chống tấn công với DDOS Protection, quét mã độc với Malware scanner.</p>
								<div class="taR"><a href="">Xem thêm >></a></div>
							</div>
						</div>
					</div>
					<div class="listContent__eachContent" id="service04">
						<img src="<?php echo APP_ASSETS ?>img/service04.png" alt="">
						<div class="listContent__eachContent__right">
							<div class="listContent__eachContent__right__title">Nhà cung cấp hosting<br>tốt nhất tại Việt Nam.</div>
							<div class="listContent__eachContent__right__content">
								<p>Tất cả gói hosting đều không giới hạn băng thông. Công nghệ Nginx + Litespeed giúp tăng tốc website gấp 6 lần. Hệ thống tường lửa 2 lớp giúp website ổn định và bảo mật. Ngoài ra còn nhiều tính năng như tạo website chỉ với 3 bước với Softaculous, bật tắt chống tấn công với DDOS Protection, quét mã độc với Malware scanner.</p>
								<div class="taR"><a href="">Xem thêm >></a></div>
							</div>
						</div>
					</div>
					<div class="listContent__eachContent" id="service05">
						<img src="<?php echo APP_ASSETS ?>img/service05.png" alt="">
						<div class="listContent__eachContent__right">
							<div class="listContent__eachContent__right__title">Nhà cung cấp hosting<br>tốt nhất tại Việt Nam.</div>
							<div class="listContent__eachContent__right__content">
								<p>Tất cả gói hosting đều không giới hạn băng thông. Công nghệ Nginx + Litespeed giúp tăng tốc website gấp 6 lần. Hệ thống tường lửa 2 lớp giúp website ổn định và bảo mật. Ngoài ra còn nhiều tính năng như tạo website chỉ với 3 bước với Softaculous, bật tắt chống tấn công với DDOS Protection, quét mã độc với Malware scanner.</p>
								<div class="taR"><a href="">Xem thêm >></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<img src="<?php echo APP_ASSETS ?>img/icoMouse.png" alt="" class="icoMouse">

			<div class="viewVideo">
				<div class="viewVideo__title">XEM VIDEO ĐỂ BIẾT THÊM CHI TIẾT</div>
				<div class="viewVideo__subTitle">Đến với ODB.vn, chúng tôi sẽ giúp bạn có một ngôi nhà online hợp lý nhất!</div>
				<div class="viewVideo__video">
					<video src="<?php echo APP_ASSETS ?>video/video.mp4"></video>
				</div>
			</div>
		</div>
	</div>
	<div class="otherServices">
		<div class="container">
			<div class="otherServices__title">CÁC DỊCH VỤ KHÁC</div>
			<ul>
				<li>
					<div class="eachOtherService">
						<div class="eachOtherService__title">Dịch vụ<br>ĐẠI LÝ HOSTING</div>
						<div class="eachOtherService__img"><img src="<?php echo APP_ASSETS ?>img/otherService01.png" alt=""></div>
						<div class="eachOtherService__desc">Kinh doanh Hosting với thương hiệu riêng của bạn. Hãy để chất lượng ODb.vn đảm bảo</div>
						<div class="eachOtherService__button">
							<a href=""><span>Xem thêm</span></a>
						</div>
					</div>
				</li>
				<li class="active">
					<div class="eachOtherService">
						<div class="eachOtherService__title">Dịch vụ<br>ĐẠI LÝ KÝ QUỸ</div>
						<div class="eachOtherService__img"><img src="<?php echo APP_ASSETS ?>img/otherService02.png" alt=""></div>
						<div class="eachOtherService__desc">Chỉ cần ký quỹ, bạn sẽ được chiếc khấu giảm giá các dịch vụ lên đến 50%</div>
						<div class="eachOtherService__button">
							<a href=""><span>Xem thêm</span></a>
						</div>
					</div>
				</li>
				<li>
					<div class="eachOtherService">
						<div class="eachOtherService__title">Giới thiệu cho bạn bè<br>AFFILIATE</div>
						<div class="eachOtherService__img"><img src="<?php echo APP_ASSETS ?>img/otherService03.png" alt=""></div>
						<div class="eachOtherService__desc">Chỉ cần gởi link giới thiệu, bạn sẽ nhận được hoa hồng 25% trên mỗi đơn hàng</div>
						<div class="eachOtherService__button">
							<a href=""><span>Xem thêm</span></a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="customerTalk">
		<div class="container">
			<div class="customerTalk__title">KHÁCH HÀNG ĐÃ NÓI GÌ?  </div>
			<div class="customerTalk__subTitle">Đến với ODB.vn, chúng tôi sẽ giúp bạn có một ngôi nhà online hợp lý nhất!</div>
			<div class="logos"><img src="<?php echo APP_ASSETS ?>img/logos.png" alt=""></div>
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
	<?php include 'inc/footer.php' ?>
</body>
</html>