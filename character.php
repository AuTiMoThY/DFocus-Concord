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
 <div id="bannerTrigger"></div>
<section id="pageBanner" class="banner" style="background-image: url('upload/character/banner-char<?php echo strip_tags($get_character); ?>.jpg')">
	
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
	<footer class="character-ft">
		<h2 class="txtImg_title-title-MemberProfile hide_txt"></h2>
		<div id="charMarquee" class="character-caroul">
			<ul class="character-caroul-list cf">
			<?php foreach ($aboutCharacter as $key => $value) { ?>
				<li class="character-item"><a href="character.php?character=<?php echo $aboutCharacter[$key]['index'];?>">
					<figure>
						<div class="character-pic pic about-character<?php echo $aboutCharacter[$key]['index'];?>">
							<img src="upload/character/character<?php echo $aboutCharacter[$key]['index'];?>.png" alt="" class="">
						</div>
						<figcaption>
							<div class="left">
								<span class="inner character-name"><?php echo $aboutCharacter[$key]['name'];?></span>
							</div>
							<div class="right">
								<span class="inner character-title"><?php echo $aboutCharacter[$key]['title'];?></span>
							</div>
						</figcaption>
					</figure>
				</a></li>
				<?php } ?>
			</ul>
		</div>
		<div class="character-caroul-ctrl">
			<div id="marquee_prev_btn" class="btn btn-faq-tabs-prev faq-tabs-btn">
				<i class="fa fa-caret-left"></i>
			</div>
			<div id="marquee_next_btn" class="btn btn-faq-tabs-next faq-tabs-btn">
				<i class="fa fa-caret-right"></i>
			</div>
		</div>
	</footer>
		<img src="<?php path_au('img'); ?>char_footer.jpg" alt="" class="temporary">

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
<script>
$(function() {
	var $charMarquee = $("#charMarquee");
	var charMarqueeH = $charMarquee.outerHeight();
	console.log(charMarqueeH);

     var dis = $('.character-item').outerHeight();
     $("#charMarquee").scrollbox({
               // distance: dis,
               speed: 60,
               direction: 'h'
          })
     $('#marquee_prev_btn').click(function () {
          $('#charMarquee').trigger('backward');
     });
     $('#marquee_next_btn').click(function () {
          $('#charMarquee').trigger('forward');
     });
});
</script>
<?php
// -------------------------------
// google analytics
// -------------------------------
  include_once INC_PATH.'ga.php';
 ?>

</body>
</html>
