<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>康和期經產品介紹 | <?php echo $webTitle; ?></title>

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

<body class="products_page">

<?php
//app
  include_once INC_PATH.'header.php';
 ?>

 <div id="bannerTrigger"></div>
<section id="pageBanner" class="banner" style="background-image: url('<?php path_au('img'); ?>banner-chatroom.jpg')">
	
</section>

<main class="">
	<section class="row1 fullbg">
		<div class="bg"></div>
		<div class="wrapper">
			<div class="cnt">
				<!-- 多空成長期貨信託基金 -->
				<div class="metro-row cf">
					<div class="metro-block-style1 pdt">
						<div class="news-pic pic left">
							<img src="<?php path_au('temp'); ?>tem-pdt1.jpg" alt="">
						</div>
						<div class="metro-art right">
							<hgroup>
								<h1 class="pdt-title txt-3">Futures Fund</h1>
								<h2 class="pdt-subtitle txt-4">多空成長期貨信託基金</h2>
							</hgroup>
							<p class="pdt-shrink_text">
<?php
//  此處示意 顯示內文前 100 個字，超果以...取代
$cnt0 = "由專業管理團隊替您考量資產配置、提高投資效率、結合交易策略降低市場風險，穩健增值，讓投資人不論面對多頭、空頭，景氣好與壞，都能掌握獲利契機，滿足投資需求，實踐人生夢想！";
$showCount = 100;
$content0 = strip_tags($cnt0);
$content = mb_substr($content0,0,$showCount,'UTF-8');
if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
echo $content;
?>
							</p>
							<a href="product_chart.php" class="btn btn-pdtMore txt-r1 link-3">深入了解</a>
						</div>
					</div><!-- /.metro-block-style1  END  !! -->
				</div><!-- /.metro-row  END  !! -->
				<!-- 國泰康和私募期開得盛信託基金 -->
				<div class="metro-row cf">
					<div class="metro-block-style1 pdt">
						<div class="news-pic pic left">
							<img src="<?php path_au('temp'); ?>tem-pdt2.jpg" alt="">
						</div>
						<div class="metro-art right">
							<hgroup>
								<h1 class="pdt-title txt-3"><!-- Cathay Concord Futures No.1 --></h1>
								<h2 class="pdt-subtitle txt-4">康和基金</h2>
							</hgroup>
							<p class="pdt-shrink_text">
<?php
//  此處示意 顯示內文前 100 個字，超果以...取代
$cnt0 = "僅限授權專業投資人登入";
$showCount = 100;
$content0 = strip_tags($cnt0);
$content = mb_substr($content0,0,$showCount,'UTF-8');
if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
echo $content;
?>
							</p>
							<a href="https://fm.concordfutures.com.tw/fundM/Login.aspx" class="btn btn-pdtMore txt-r1 link-3 btn2" target="_blank">僅限授權專業投資人登入</a>
						</div>
					</div><!-- /.metro-block-style1  END  !! -->
				</div><!-- /.metro-row  END  !! -->
		<div class="" style="margin: 1em auto 5em;">
			<a href="products.php" class="txt_img-goback btn-getmore hide_txt link-2">回產品介紹</a>
		</div>
			</div>
		</div>
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
