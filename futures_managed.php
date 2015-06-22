<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>期貨經理事業 | 康和期貨</title>

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
               <h2 class="title">
					<img src="<?php path_au('img'); ?>title-futures_managed.jpg" alt="">
               </h2>
               <p class="news-time">
                   
               </p>
          </div>
     </header>
	<section class="row1">
		<div class="wrapper small">
			<div class="cnt">
				<img src="<?php path_au('temp'); ?>tem2.jpg" alt="" class="temporary">
			</div>
		</div>
	</section>
	<section class="fullbg row2">
		<div class="bg"></div>
		<div class="wrapper">
			<div class="cnt">
				<map name="futuresMap">
					<area shape="rect" coords="0, 0, 387, 363" href="futures_managed.php" alt="期貨經理事業">
					<area shape="rect" coords="405, 0, 792, 363" href="futures_fund.php" alt="期貨經理事業">
					<area shape="rect" coords="811, 0, 1198, 363" href="futures_advisory.php" alt="期貨經理事業">
				</map>
				<img src="<?php path_au('img'); ?>futures_managed-row2.png" alt="" usemap="futuresMap">
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
