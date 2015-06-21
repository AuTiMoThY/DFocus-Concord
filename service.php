<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>客服中心 | 康和期貨</title>

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

<body class="service_page">

<?php
//app
  include_once INC_PATH.'header.php';
 ?>
<section id="bigBanner" >
	<div class="banner" style="background-image: url('<?php path_au('img'); ?>banner-service.jpg')"></div>
</section>

<main class="">
	<section class="row1">
		<div class="wrapper small">
			<div class="cnt">
				<map name="serviceLinksMap">
					<area shape="rect" coords="0, 0, 589, 286" href="monthlyreport.php" alt="投資月報">
					<area shape="rect" coords="610, 0, 1200, 286" href="download.php" alt="文件下載">
					<area shape="rect" coords="0, 309, 589, 595" href="saleschannel.php" alt="銷售機構">
					<area shape="rect" coords="610, 309, 1200, 595" href="qa.php" alt="常見問題">
				</map>
				<img src="<?php path_au('img'); ?>service-row1.jpg" alt="" usemap="serviceLinksMap">
			</div>
		</div>
	</section>
	<section class="row2 fullbg map">
		<img src="<?php path_au('img'); ?>map.jpg" alt="">
	</section>
	<section class="row3">
		<div class="wrapper">
			<img src="<?php path_au('img'); ?>service-row3.jpg" alt="">
		</div>
	</section>
	<section id="siteMap" class="fullbg row4">
		<div class="bg"></div>
		<div class="wrapper">
			<div class="cnt">
				<img src="<?php path_au('img'); ?>siteMap.png" alt="">
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
