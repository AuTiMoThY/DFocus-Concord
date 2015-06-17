<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>康和期貨</title>

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

<body class="index_page">

<?php
//app
  include_once INC_PATH.'header.php';
 ?>
<section class="banner" style="background-image: url('<?php path_au('img'); ?>banner-index.jpg')">
	
</section>

<main class="">
	<section class="fullbg row1">
		<div class="wrapper"></div>
	</section>
	<section class="row2">
		<div class="wrapper">
			<hgroup>
				<h1 class="hide_txt txt_img-BusinessDivisons" data-lang="en">Business Divisons</h1>
				<h2 class="hide_txt txt_img-BusinessDivisons" data-lang="tw">康和期經三大事業體</h2>
			</hgroup>
			<div class="cnt">
				<img src="<?php path_au('img'); ?>index-row2.jpg" alt="">
			</div>
		</div>
	</section>
	<section id="team" class="row3">
		<div class="wrapper small">
			<h2 class="title">
				<img src="<?php path_au('img'); ?>title-team.png" alt="" class="temporary">
			</h2>
		</div>
		<img src="<?php path_au('img'); ?>index-row3.jpg" alt="">
		<a href="about.php#teamProfile"><img src="<?php path_au('img'); ?>txt-goteam.png" alt="" class="temporary" style="margin-top: 2em;"></a>
	</section>
	<section class="fullbg row4">
		<img src="<?php path_au('img'); ?>index-row4.jpg" alt="">
		<div class="wrapper"></div>
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
