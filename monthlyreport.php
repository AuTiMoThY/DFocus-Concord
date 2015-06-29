<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>投資月報 | <?php echo $webTitle; ?></title>

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
			<header class="txtImg_title-title-monthlyreport cnt_title <?php isPhone('mobile_title-group'); ?>">
				<h1 class="hidden <?php isPhone('mobile_title'); ?> title-1" data-lang="en">Monthly Report</h1>
				<h2 class="hidden <?php isPhone('mobile_title'); ?> title-2" data-lang="tw">投資月報</h2>
			</header>
		</div>
	</section>
	<section class="fullbg row2 monthlyreport-wrap serviceCnt-wrap">
		<div class="bg"></div>
		<div class="wrapper">
			<div class="monthlyreport-container serviceCnt-container">
				<div class="row1 cf">
					<div class="col-2">
						<span class="txt-1">分類</span>
						<select name="" id="" class="monthlyreport-select">
							<option value="">所有</option>
							<option value="">2015 年 Q1</option>
							<option value="">2014 年 Q4</option>
							<option value="">2014 年 Q3</option>
							<option value="">2014 年 Q2</option>
							<option value="">2014 年 Q1</option>
						</select>
					</div>
					<div class="col-2">
						<span class="txt-1">搜尋</span>
						<form action="" class="art_search-form cf">
							<input type="text" name="" id="" class="art_search-input frm__field left" placeholder="輸入關鍵字...">
							<input type="button" name="" id="" class="art_search-btn frm__btn left" value="search" onclick="">
						</form>
					</div>
				</div>
				<ul class="art_search-list monthlyreport-list">
					<li class="art_search-item monthlyreport-item cf">
						<div class="news-pic pic left">
							<img src="<?php path_au('temp'); ?>tem-pdt1.jpg" alt="">
						</div>
						<div class="news-intro left">
							<hgroup class="cnt_title">
								<h1 class="txt-1_1">康和多空成長期貨信託基金</h1>
								<p class="txt-1_4">Concord Dream Futures Trust Fund</p>
							</hgroup>
							<div class="monthlyreport-time">
								<span class="txt-4 txt-ff1"><span class="txt-5">5</span>月</span>
								<span class="txt-1">2015 / Q1 / MAY</span>
							</div>
							<div class="news-link">
								<a href="" class="txt-r1">http://www.concordmanagedfutures.com/what-we-do/investment-management/</a>
							</div>
						</div>
					</li>

					<li class="art_search-item monthlyreport-item cf">
						<div class="news-pic pic left">
							<img src="<?php path_au('temp'); ?>tem-pdt1.jpg" alt="">
						</div>
						<div class="news-intro left">
							<hgroup class="cnt_title">
								<h1 class="txt-1_1">康和多空成長期貨信託基金</h1>
								<p class="txt-1_4">Concord Dream Futures Trust Fund</p>
							</hgroup>
							<div class="monthlyreport-time">
								<span class="txt-4 txt-ff1"><span class="txt-5">4</span>月</span>
								<span class="txt-1">2015 / Q1 / MAY</span>
							</div>
							<div class="news-link">
								<a href="" class="txt-r1">http://www.concordmanagedfutures.com/what-we-do/investment-management/</a>
							</div>
						</div>
					</li>

					<li class="art_search-item monthlyreport-item cf">
						<div class="news-pic pic left">
							<img src="<?php path_au('temp'); ?>tem-pdt1.jpg" alt="">
						</div>
						<div class="news-intro left">
							<hgroup class="cnt_title">
								<h1 class="txt-1_1">康和多空成長期貨信託基金</h1>
								<p class="txt-1_4">Concord Dream Futures Trust Fund</p>
							</hgroup>
							<div class="monthlyreport-time">
								<span class="txt-4 txt-ff1"><span class="txt-5">3</span>月</span>
								<span class="txt-1">2015 / Q1 / MAY</span>
							</div>
							<div class="news-link">
								<a href="" class="txt-r1">http://www.concordmanagedfutures.com/what-we-do/investment-management/</a>
							</div>
						</div>
					</li>

				</ul>


			</div>

		</div>
<div class="pages_btn">
	<ul>
		<li class="prev"><a href="#"><i class="icon ib"></i><span class="txt ib">上一頁</span></a></li><!-- 在第一頁時不顯示 -->
		<li class="number active"><a href="#">1</a></li>
		<li class="number"><a href="#">2</a></li>
		<li class="number"><a href="#">3</a></li>
		<li class="number"><a href="#">4</a></li>
		<li class="number"><a href="#">5</a></li>
		<li class="next"><a href="#"><span class="txt ib">下一頁</span><i class="icon ib"></i></a></li><!-- 在最後一頁時不顯示 -->
	</ul>
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

<?php
// -------------------------------
// google analytics
// -------------------------------
  include_once INC_PATH.'ga.php';
 ?>

</body>
</html>
