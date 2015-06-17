<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>康和期經產品介紹 | 康和期貨</title>

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

<body class="chatroom_page prodCnt">

<?php
//app
  include_once INC_PATH.'header.php';
 ?>
<section class="banner" style="background-image: url('<?php path_au('img'); ?>banner-chatroom.jpg')">
	
</section>

<main class="">
	<section class="row1">
		<div class="wrapper small">
			<h2 class="title">
				<img src="<?php path_au('img'); ?>title-chatroom.png" alt="" class="temporary">
			</h2>
		</div>
	</section>
	<section class="fullbg row2">
		<div class="bg"></div>
		<div class="wrapper">
			<div class="cnt">
				<map name="chatroomMap">
					<area shape="rect" coords="0, 59, 387, 317" href="chatroom_cnt.php" alt="課程內容">
					<area shape="rect" coords="404, 59, 791, 317" href="chatroom_cnt.php" alt="課程內容">
					<area shape="rect" coords="811, 59, 1198, 317" href="chatroom_cnt.php" alt="課程內容">
					<area shape="rect" coords="0, 710, 387, 1027" href="chatroom_cnt.php" alt="課程內容">
					<area shape="rect" coords="404, 710, 791, 1027" href="chatroom_cnt.php" alt="課程內容">
					<area shape="rect" coords="811, 710, 1198, 1027" href="chatroom_cnt.php" alt="課程內容">
				</map>
				<img src="<?php path_au('img'); ?>chatroom-list2.png" alt="" class="temporary" usemap="chatroomMap">
			</div>
			<div class="" style="margin: 1em auto 5em;">
				<!-- <a href="products.php" class="txt_img-goProdList btn-getmore hide_txt"></a> -->
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
