<?php
if (session_status() == PHP_SESSION_NONE) session_start();
if(!empty($_SESSION['statusFlag'])) unset($_SESSION['statusFlag']);
else header('location: '.APP_URL);

unset($_SESSION['ses_gtime_step2']);
unset($_SESSION['ses_from_step2']);
unset($_SESSION['ses_step3_user']);
unset($_SESSION['ses_step3_admin']);

include( TEMPLATEPATH . '/libs/head.php' );
?>
<meta http-equiv="refresh" content="15; url=<?php echo APP_URL ?>">
<script type="text/javascript">
history.pushState({ page: 1 }, "title 1", "#noback");
window.onhashchange = function (event) {
	window.location.hash = "#noback";
};
</script>
<link type="text/css" rel="stylesheet" href="<?php echo APP_ASSETS; ?>css/contact.css">
</head>
<body id="contact">
	<!--Header-->
	<?php include( TEMPLATEPATH . "/libs/header.php") ?>
	<!--/Header-->
	<div class="mainImg"><h2>CONTACT<span>お問い合わせ</span></h2></div>
	<div class="container clearfix">
		<p class="taC t30b0"><img src="<?php echo APP_ASSETS ?>images/form/img_step03.png" width="630" height="39" alt=""></p>
		<div class="containerIndexThx">
			<p class="t20b20 fz18"><strong>送信が完了いたしました。</strong></p>
			<p class="mt20 t20b20 fz14">
				お問い合わせありがとうございます。<br>後日、担当よりご連絡させていただきます。<br />3日以内に弊社より連絡がない場合はお手数ですが、再送信もしくは直接ご連絡くださいますようお願い致します。<br>
			</p>
			<p class="t20b0"><a href="<?php echo APP_URL;?>">←TOPへ戻る</a></p>
		</div>
	</div>
	<!--Footer ==================================================
	================================================== -->
	<?php include( TEMPLATEPATH . '/libs/footer.php') ?>
	<!-- End Document
	================================================== -->
</body>
</html>