<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>銷售機構 | <?php echo $webTitle; ?></title>

<?php
// -------------------------------
// SEO
// CSS
// Script in the HEAD
// -------------------------------
  include_once INC_PATH.'head.php';
 ?>


<?php
//app
  include_once INC_PATH.'social.php';
 ?>

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="service_page serviceCnt">

<?php
//app
  include_once INC_PATH.'header.php';
 ?>

 <div id="bannerTrigger"></div>
<section id="pageBanner" class="banner" style="background-image: url('<?php path_au('img'); ?>banner-service.jpg')">
	
</section>

<main class="">
	<section class="row1">
		<div class="wrapper small">
			<h2 class="title">
				<img src="<?php path_au('img'); ?>title-saleschannel.png" alt="" class="temporary">
			</h2>
		</div>
	</section>
	<section class="fullbg row2 serviceCnt-wrap sales-wrap">
		<div class="bg"></div>
		<div class="wrapper">
			<div class="sales-container serviceCnt-container cf">
				<div class="row1 left">
					<h3 class="txtImg_title-title-sales1 hide_txt">銀行</h3>
					<ul class="sales-list cf">
						<li class="sales-item"><a href="#">
							<div class="sales-title">上海商業儲蓄銀行</div>
							<p class="txt-1_4">(02)2818-0282</p>
							<i class="icon icon-sales"></i>
						</a></li>
						<li class="sales-item"><a href="#">
							<div class="sales-title">日盛商業銀行</div>
							<p class="txt-1_4">0800-060-888／(02)2923-889</p>
							<i class="icon icon-sales"></i>
						</a></li>
						<li class="sales-item"><a href="#">
							<div class="sales-title">永豐商業銀行</div>
							<p class="txt-1_4">(02)2505-9999</p>
							<i class="icon icon-sales"></i>
						</a></li>
						<li class="sales-item"><a href="#">
							<div class="sales-title">台中商業銀行</div>
							<p class="txt-1_4">0800-005-999</p>
							<i class="icon icon-sales"></i>
						</a></li>
						<li class="sales-item"><a href="#">
							<div class="sales-title">國泰世華商業銀行</div>
							<p class="txt-1_4">0800-818-001／(02)2383-1000</p>
							<i class="icon icon-sales"></i>
						</a></li>
						<li class="sales-item"><a href="#">
							<div class="sales-title">華南商業銀行</div>
							<p class="txt-1_4">(02)2181-0101</p>
							<i class="icon icon-sales"></i>
						</a></li>
					</ul>
				</div>
				<div class="row2 left">
					<h3 class="txtImg_title-title-sales2 hide_txt">證券 ／期貨</h3>
					<ul class="cf">
						<li class="sales-item"><a href="#">
							<div class="sales-title">康和證券</div>
							<p class="txt-1_4">0800-886-016</p>
							<i class="icon icon-sales"></i>
						</a></li>
						<li class="sales-item"><a href="#">
							<div class="sales-title">康和期貨</div>
							<p class="txt-1_4">(02)2717-1339</p>
							<i class="icon icon-sales"></i>
						</a></li>
						<li class="sales-item"><a href="#">
							<div class="sales-title">永豐期貨</div>
							<p class="txt-1_4">(02)2381-1799</p>
							<i class="icon icon-sales"></i>
						</a></li>
						<li class="sales-item"><a href="#">
							<div class="sales-title">富邦期貨</div>
							<p class="txt-1_4">(02)2388-2626</p>
							<i class="icon icon-sales"></i>
						</a></li>
						<li class="sales-item"><a href="#">
							<div class="sales-title">群益期貨</div>
							<p class="txt-1_4">(02)2700-2888</p>
							<i class="icon icon-sales"></i>
						</a></li>
					</ul>
				</div>
			</div>


		</div>
<div class="" style="display: table; margin: auto; width: 134px;"><a href="service.php" class="txt_img-goService hide_txt btn-goService btn link-2">回客服中心</a></div>
	</section>

</main>

<?php
//app
  include_once INC_PATH.'footer.php';
 ?>

<?php
// -------------------------------
// Script in the FOOT
// -------------------------------
  include_once INC_PATH.'scriptfoot.php';
 ?>
<script>
$(function() {
	
	$(".sales-item").hover(function() {
		$(this).find(".icon-sales").addClass('animated').addClass('flip');
	}, function() {
		$(this).find(".icon-sales").removeClass('animated');
	});

});
</script>
<?php
// -------------------------------
// google analytics
// -------------------------------
  include_once INC_PATH.'ga.php';
 ?>

</body>
</html>
