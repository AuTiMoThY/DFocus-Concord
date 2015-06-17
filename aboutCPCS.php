<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>資產保護 | 康和期貨</title>

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

<body class="about_page aboutCPCS">

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
				<img src="<?php path_au('img'); ?>aboutCPCS-row1.jpg" alt="">
			</div>
		</div>
	</section>
	<section class="row2 fullbg">
		<div class="bg"></div>
		<div class="wrapper small">
			<div class="cnt">
				<img src="<?php path_au('img'); ?>aboutCPCS-row2.png" alt="">
			</div>
		</div>
		<div class="barbg"></div>
	</section>
	<section class="row3">
		<div class="wrapper">
			<img src="<?php path_au('img'); ?>aboutCPCS-row3.jpg" alt="">
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
