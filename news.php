<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>市場消息 / 康和快訊 | 康和期貨</title>

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

<body class="news_page">

<?php
//app
  include_once INC_PATH.'header.php';
 ?>
<section class="banner" style="background-image: url('<?php path_au('img'); ?>banner-news.jpg')">
	
</section>

<main class="">
	<section class="row1">
		<div class="wrapper">
			<map name="goNewsCnt">
				<area shape="rect" coords="443, 329, 568, 569" href="news_cnt.php" alt="繼續閱讀">
			</map>
			<div class="cnt">
				<img src="<?php path_au('img'); ?>news-row1.jpg" alt="" usemap="goNewsCnt">
			</div>
		</div>
	</section>
	<section class="fullbg row2">
		<div class="bg"></div>
		<div class="wrapper">
			<div class="cnt">
				<img src="<?php path_au('img'); ?>news-row2.png" alt="" class="temporary">
			</div>
			<div class="" style="margin: 1em auto 5em;">
				<!-- <a href="chatroom.php" class="txt_img-goChatList btn-getmore hide_txt"></a> -->
			</div>
		</div>
	</section>
	<section class="row3">
		<div class="wrapper">
			<map name="row3Map">
				<area shape="rect" coords="812, 45, 1190, 86" href="news_search.php" alt="文章搜尋">
			</map>
			<img src="<?php path_au('img'); ?>news-row3.jpg" alt="" class="temporary" usemap="row3Map">
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
