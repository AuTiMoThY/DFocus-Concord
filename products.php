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

<body class="products_page">

<?php
//app
  include_once INC_PATH.'header.php';
 ?>
<section class="banner" style="background-image: url('<?php path_au('img'); ?>banner-chatroom.jpg')">
	
</section>

<main class="">
	<section class="row1 fullbg">
		<div class="bg"></div>
		<div class="wrapper">
			<div class="cnt">
				<map name="prodMap">
					<area shape="rect" coords="650, 340, 775, 382" href="products_cnt.php" alt="深入了解">
					<area shape="rect" coords="650, 790, 928, 832" href="products_cnt.php" alt="深入了解">
					<area shape="rect" coords="650, 1240, 775, 1282" href="products_cnt.php" alt="深入了解">
				</map>
				<img src="<?php path_au('img'); ?>prod-list.jpg" alt="" usemap="prodMap">
			</div>
		</div>
	</section>
	<section class="fullbg row2">
		<div class="bg"></div>
		<div class="wrapper">
			<div class="cnt">
				<map name="chatroomMap">
					<area shape="rect" coords="0, 221, 386, 477" href="chatroom_cnt.php" alt="課程內容">
					<area shape="rect" coords="405, 221, 791, 477" href="chatroom_cnt.php" alt="課程內容">
					<area shape="rect" coords="810, 221, 1196, 477" href="chatroom_cnt.php" alt="課程內容">
				</map>
				<img src="<?php path_au('img'); ?>chatroom-list.png" alt="" usemap="chatroomMap">
				<div style="margin-top: 2em;"><a href="chatroom.php" class="btn-getmore txt_img-morechatroom hide_txt">更多課程內容</a></div>
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
