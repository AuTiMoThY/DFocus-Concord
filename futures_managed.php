<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>期貨經理事業 | <?php echo $webTitle; ?></title>

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
			<hgroup class="txtImg_title-title-futures1 <?php isPhone('mobile_title-group'); ?>">
				<h1 class="hidden <?php isPhone('mobile_title'); ?> title-1" data-lang="en">Futures Managed Account</h1>
				<h2 class="hidden <?php isPhone('mobile_title'); ?> title-2" data-lang="tw">期貨經理事業</h2>
			</hgroup>
          </div>
     </header>
	<section class="row1" style="padding-top:0;">
		<div class="wrapper small">
			<div class="cnt" style="padding-top:0;">
				<div class="editorDF"  style="padding-left:0;padding-right:0;">
					<p>康和期經團隊融合海內外操作思維，研擬出最適合市場的策略模組。藉由馬可維茲(1952年)組合理論，利用報酬及風險的比例，以較低的風險得到更高的報酬為前提下，為期經事業不同客戶量身訂做商品，經由量化模型設計出低風險高報酬之商品，商品經由多重邏輯分散將更有助於降低非系統風險，且達到低風險高報酬之要求，利用低度相關的不同資產及投資策略納入投資組合，讓資產穩健增值追求絕對報酬以讓客戶資產穩定成長則是我們從未改變的任務。</p>
					<a href="javascript:alert('由後台圖文編輯器插入連結');"><img src="<?php path_au('temp'); ?>tem8.png" alt="期貨經理產品" class="temporary"></a>
				</div>
			</div>
		</div>
	</section>
	<!-- 聯絡表單 -->
	<section class="row futures-form">
		<form action="">
<div class="wrapper cf">
	<div class="col-6">
		<hgroup class="txtImg_title-title-contact <?php isPhone('mobile_title-group'); ?>">
			<h1 class="hidden <?php isPhone('mobile_title'); ?> title-1" data-lang="en">Contact <span class="title-2" data-lang="tw">聯絡我們</span></h1>
			<!-- <h2 class="hidden <?php //isPhone('mobile_title'); ?> title-2" data-lang="tw">聯絡我們</h2> -->
		</hgroup>
		<p style="line-height:2.1;">親愛的投資人您好，若您有基金交易相關問題，請利用本留言系統與我們聯繫，我們將指派專員為您服務，謝謝! </p>
		<ul class="cf">
			<li>
				<span class="input input--df input_required">
					<label class="frm__label col" for="c_name">大名：</label>
					<input class="frm__field col" type="text" name="c_name" id="c_name">
				</span>
			</li>
				<li>
					<span class="input input--df input_required">
						<label class="frm__label col" for="c_email">電子信箱：</label>
						<input class="frm__field col" type="text" name="c_email" id="c_email">
					</span>
				</li>
				<li>
					<span class="input input--df input_required">
						<label class="frm__label col" for="c_phone">聯絡電話：</label>
						<input class="frm__field col" type="text" name="c_phone" id="c_phone">
					</span>
				</li>
		</ul>
	</div>
	<div class="col-6">
		<ul>
			<li>
				<span class="input input--df input_required">
					<label class="frm__label col" for="c_category">問題類別：</label>
					<select name="" id="" class="frm__field col frm__select">
						<option value="0">你好我有期貨顧問事業的需求 ...</option>
						<option value="">選項2</option>
						<option value="">選項3</option>
						<option value="">選項4</option>
					</select>
				</span>
			</li>
			<li>
				<span class="input input--df input_required">
					<label class="frm__label col" for="c_msg">留言：</label>
					<textarea class="frm__field col" type="text" name="c_msg" id="c_msg"></textarea>
					<button type="button" class="contact-form-send">SEND</button>
				</span>
			</li>
		</ul>
	</div>
</div>
		</form>
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
