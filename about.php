<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>康和期經介紹 | 康和期貨</title>

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

<body class="about_page">

<?php
//app
  include_once INC_PATH.'header.php';
 ?>
<section class="banner" style="background-image: url('<?php path_au('img'); ?>banner-aboutCPCS.jpg')">
	
</section>

<main class="">
	<section class="row1">
		<div class="wrapper small">
			<div class="cnt">
				<img src="<?php path_au('img'); ?>about-row1.jpg" alt="">
			</div>
		</div>
	</section>
	<section class="row2 fullbg">
		<map name="gofutures">
			<area shape="rect" coords="877, 605, 1042, 643" href="futures_fund.php" alt="期貨顧問事業">
		</map>
		<img src="<?php path_au('img'); ?>about-row2.jpg" alt="" usemap="#gofutures">
	</section>
	<section id="capitalPreservation" class="row3">
		<div class="wrapper small">
			<img src="<?php path_au('img'); ?>about-row3.jpg" alt="">
			<div class="" style="margin-top: 2em;"><a href="aboutCPCS.php" class="txt_img-getmore btn-getmore hide_txt">進一步了解</a></div>
		</div>
	</section>
	<section id="teamProfile" class="fullbg row4">
		<div class="bg"></div>
		<div class="wrapper">
			<div class="cnt">
				<a href="character.php"><img src="<?php path_au('img'); ?>about-row4.png" alt=""></a>
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
