<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>期貨信託事業 | <?php echo $webTitle; ?></title>

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
			<hgroup class="txtImg_title-title-futures2 <?php isPhone('mobile_title-group'); ?>">
				<h1 class="hidden <?php isPhone('mobile_title'); ?> title-1" data-lang="en">Futures Fund</h1>
				<h2 class="hidden <?php isPhone('mobile_title'); ?> title-2" data-lang="tw">期貨信託事業</h2>
			</hgroup>
		</div>
	</header>
	<section class="row1" style="padding-top:0;">
		<div class="wrapper small">
			<div class="cnt" style="padding-top:0;">
				<div class="editorDF" style="padding-left:0;padding-right:0;">
					<p>避險基金在全球專業法人機構佔據了重要的位子，每年規模穩定成長，其重要性可見一斑。康和期經更於2011年7月，與亞洲前五大知名組合基金承接主權基金和多國退休基金之資產管理公司 Gen2 展騰投資攜手合作，發行海外首檔聯名基金，創下台灣資產管理新歷史，並為台灣金融市場帶來重要意義。</p>
					<img src="dist/images/temp/tem9.jpg" alt="康和期貨時間軸" class="temporary" style="margin:0.8em 0;">
					<p>另外，康和CTA持續發展兩岸三地顧問產業，目前擔任大陸國元期貨，廣發期貨，海通期貨及申銀萬國、銀河資本、華西村資產管理公司、華榮資產管理公司、匯富天下等期貨等專門機構簽訂顧問訓練合作約，擔邀多家知名金融機構CTA專業投資顧問，並受上海金融最高學府交通大學及中國金融期貨交易所、金融工程師學會、歐洲EUREX交易所、中國北京證監會等產、官、學界邀請擔任專業講師與交流，康和期經也於2012年首宗取得台灣中央銀行海外基金境外委任許可，接受海外避險基金委任，創下台灣期貨資產管理新歷史，2013年更朝國際化資產管理公司邁進，正式成立期貨信託事業，發行台灣首檔公募期貨信託避險基金。同時也成為台灣資本額最高、資產淨值最高之期經業者，康和期經所創下的紀錄如下。</p>
					<hr>
					<img src="dist/images/temp/tem10.jpg" alt="康和期貨時間軸" class="temporary" style="margin-bottom:1.2em;">
					<img src="dist/images/temp/tem11.jpg" alt="康和期貨時間軸" class="temporary" style="margin:0.8em 0;">
					<p>康和多空成長基金為國內第一檔百分之百國人所開發的期貨信託基金，在國內期貨市場期貨信託基金佔比本就為少數情況下，又僅此一檔徹頭至尾前、中、後台皆為國人自行開發及操作，也因此，康和期經了解，對於擁有期貨市場標榜指標性角色，康和期經擁有責無旁貸的使命感必須背負。康和期經除了已將國際行之有年的CTA制度成功導入國內，在今年多空成長更將國際CPO多重經理人概念導入，多重經理人在國際型期貨基金架構下除了更能平滑績效以外，多重經理人加上多重策略在績效上更能有效避免系統性風險.</p>
				</div><!-- /.editorDF  END  !! -->
				<ul class="cf futures_fund-link">
					<li class="col-6" style="padding-right:1.2em;"><a href="product_chart.php">
						<figure>
							<div class="pic"><img src="dist/images/pic4.jpg" alt=""></div>
							<figcaption class="txt-2_1 text-center">對不特定人募集之基金(公募基金)</figcaption>
						</figure>
					</a></li>
					<li class="col-6" style="padding-left:1.2em;"><a href="https://fm.concordfutures.com.tw/fundM/Login.aspx">
						<figure>
							<div class="pic"><img src="dist/images/pic5.jpg" alt=""></div>
							<figcaption class="txt-2_1 text-center">康和期經特定投資人園地</figcaption>
						</figure>
					</a></li>
				</ul>
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
								<option value="0">請選擇問題類別 ...</option>
								<option value="1">你好，我有期貨經理事業的需求 ...</option>
								<option value="2">你好，我有期貨信託的需求 ...</option>
								<option value="3">你好，我有期貨顧問事業的需求 ...</option>
								<option value="4">你好，我有其它問題</option>
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
