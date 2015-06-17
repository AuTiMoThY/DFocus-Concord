<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
	include_once 'dist/character_data.php';

	$get_character = isset($_GET['character']) ? $_GET['character'] : 1;

	$character_index = $aboutCharacter[$get_character-1]['index'];
	$character_name = $aboutCharacter[$get_character-1]['name'];
	$character_title = $aboutCharacter[$get_character-1]['title'];
	$character_col1 = $aboutCharacter[$get_character-1]['col1'];
	$character_col2 = $aboutCharacter[$get_character-1]['col2'];
?>
<title>康和期貨團隊 - <?php echo $character_name."  ".$character_title; ?> | 康和期貨</title>

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

<body class="character_page">

<?php
//app
  include_once INC_PATH.'header.php';
 ?>
<section class="banner" style="background-image: url('dist/character/banner-char<?php echo strip_tags($get_character); ?>.jpg')">
	
</section>

<main class="character-cnt_page">
	<section class="fullbg row1">
		<div class="wrapper small">
			<div class="col col-1">
				<div class="editorDF"><?php echo $character_col1; ?></div>
			</div>
			<div class="col col-2">
				<div class="editorDF"><?php echo $character_col2; ?></div>
			</div>
			<!-- <img src="<?php //path_au('img'); ?>char_cnt1.jpg" alt="" class="temporary"> -->
		</div>
	</section>
	<footer>
		<img src="<?php path_au('img'); ?>char_footer.jpg" alt="" class="temporary">
	</footer>

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
