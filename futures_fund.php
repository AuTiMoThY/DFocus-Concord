<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>期貨信託事業 | <?php echo $webTitle; ?></title>

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

<body class="about_page futures">

<?php
//app
  include_once INC_PATH.'header.php';
 ?>
  <div id="bannerTrigger"></div>
<section id="pageBanner" class="banner" style="background-image: url('<?php path_au('img'); ?>banner-futures.jpg')">
	
</section>

<main class="">
	<header class="cnt_title">
		<div class="wrapper small">
			<hgroup class="txtImg_title-title-futures2">
				<h1 class="hidden" data-lang="en">Futures Fund</h1>
				<h2 class="hidden" data-lang="tw">期貨信託事業</h2>
			</hgroup>
		</div>
	</header>
	<section class="row1">
		<div class="wrapper small">
			<div class="cnt editorDF">
				<img src="<?php path_au('temp'); ?>tem6.jpg" alt="">
			</div>
		</div>
	</section>
	<section class="fullbg row2">
		<div class="bg"></div>
		<div class="wrapper">
			<div class="cnt">
				<ul class="futures-list cf">
					<li class="futures-item">
						<figure><a href="<?php webPageUrlAu('futures_managed'); ?>">
							<div class="futures-pic pic">
								<img src="<?php path_au('img'); ?>pic1_1.jpg" alt="">
							</div>
						</a></figure>
						<p class="txt-ff1 txt-1 text-center">Futures Managed Account</p>
						<p class="txt-ff1 txt-1 text-center">期貨經理事業</p>
					</li>
					<li class="futures-item">
						<figure><a href="<?php webPageUrlAu('futures_fund'); ?>">
							<div class="futures-pic pic">
								<img src="<?php path_au('img'); ?>pic2_1.jpg" alt="">
							</div>
						</a></figure>
						<p class="txt-ff1 txt-1 text-center">Futures Fund</p>
						<p class="txt-ff1 txt-1 text-center">期貨信託事業</p>
					</li>
					<li class="futures-item">
						<figure><a href="<?php webPageUrlAu('futures_advisory'); ?>">
							<div class="futures-pic pic">
								<img src="<?php path_au('img'); ?>pic3_1.jpg" alt="">
							</div>
						</a></figure>
						<p class="txt-ff1 txt-1 text-center">Futures Advisory</p>
						<p class="txt-ff1 txt-1 text-center">期貨顧問事業</p>
					</li>
				</ul>
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
