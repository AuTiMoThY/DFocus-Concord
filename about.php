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
			<hgroup class="txtImg_title-title-team">
				<h1 class="hidden" data-lang="en">Mangment Team</h1>
				<h2 class="hidden" data-lang="tw">堅強團隊</h2>
			</hgroup>
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
				<ul class="character-list cf">
					<li class="character-item"><a href="character.php?character=1">
						<figure>
							<div class="character-pic pic about-character1">
								<img src="upload/character/character1.png" alt="" class="">
							</div>
							<figcaption>
								<div class="left">
									<span class="inner character-name">葉一豐</span>
								</div>
								<div class="right">
									<span class="inner character-title">董事長</span>
								</div>
							</figcaption>
						</figure>
					</a></li>
<?php
$aboutCharacter = array(
	array('index'=> '2', 'name'=> '林彥全', 'title'=>'首席投資顧問<br>總經理'),
	array('index'=> '3', 'name'=> '林豪威', 'title'=>'投資長'),
	array('index'=> '4', 'name'=> '方琮櫻', 'title'=>'副總經理'),
	array('index'=> '5', 'name'=> '高昊岑', 'title'=>'信託事業部<br>協理'),
	array('index'=> '6', 'name'=> '謝增泉', 'title'=>'全權委託協理<br>交易決定人'),
	array('index'=> '7', 'name'=> '張資政', 'title'=>'交易室主管'),
	array('index'=> '8', 'name'=> '簡士傑', 'title'=>'基金事務主管<br>經理'),
	array('index'=> '9', 'name'=> '簡祥全', 'title'=>'風險管理室'),
	array('index'=> '10', 'name'=> '廖又瑨', 'title'=>'專案經理'),
	array('index'=> '11', 'name'=> '許蕙蘭', 'title'=>'襄理'),
);
foreach ($aboutCharacter as $key => $value) {
?>
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
<?php
}
?>

				</ul>
				<!-- <a href="character.php"><img src="<?php //path_au('img'); ?>about-row4.png" alt=""></a> -->
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
