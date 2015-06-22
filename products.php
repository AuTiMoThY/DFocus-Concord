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
				<!-- 多空成長期貨信託基金 -->
				<div class="metro-row cf">
					<div class="metro-block-style1 pdt">
						<div class="news-pic pic left">
							<img src="<?php path_au('temp'); ?>tem-pdt1.jpg" alt="">
						</div>
						<div class="metro-art right">
							<hgroup>
								<h1 class="pdt-title txt-3">Futures Fund</h1>
								<h2 class="pdt-subtitle txt-4">多空成長期貨信託基金</h2>
							</hgroup>
							<p class="pdt-shrink_text">
<?php
//  此處示意 顯示內文前 100 個字，超果以...取代
$cnt0 = "由專業管理團隊替您考量資產配置、提高投資效率、結合交易策略降低市場風險，穩健增值，讓投資人不論面對多頭、空頭，景氣好與壞，都能掌握獲利契機，滿足投資需求，實踐人生夢想！";
$showCount = 100;
$content0 = strip_tags($cnt0);
$content = mb_substr($content0,0,$showCount,'UTF-8');
if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
echo $content;
?>
							</p>
							<a href="products_cnt.php" class="btn btn-pdtMore txt-r1 link-3">深入了解</a>
						</div>
					</div><!-- /.metro-block-style1  END  !! -->
				</div><!-- /.metro-row  END  !! -->
				<!-- 國泰康和私募期開得盛信託基金 -->
				<div class="metro-row cf">
					<div class="metro-block-style1 pdt">
						<div class="news-pic pic left">
							<img src="<?php path_au('temp'); ?>tem-pdt2.jpg" alt="">
						</div>
						<div class="metro-art right">
							<hgroup>
								<h1 class="pdt-title txt-3">Cathay Concord Futures No.1</h1>
								<h2 class="pdt-subtitle txt-4">國泰康和私募期開得盛信託基金</h2>
							</hgroup>
							<p class="pdt-shrink_text">
<?php
//  此處示意 顯示內文前 100 個字，超果以...取代
$cnt0 = "僅限受權專業投資人登入";
$showCount = 100;
$content0 = strip_tags($cnt0);
$content = mb_substr($content0,0,$showCount,'UTF-8');
if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
echo $content;
?>
							</p>
							<a href="products_cnt.php" class="btn btn-pdtMore txt-r1 link-3 btn2">僅限受權專業投資人登入</a>
						</div>
					</div><!-- /.metro-block-style1  END  !! -->
				</div><!-- /.metro-row  END  !! -->
				<!-- 康和期經VIP全權委託 -->
				<div class="metro-row cf">
					<div class="metro-block-style1 pdt">
						<div class="news-pic pic left">
							<img src="<?php path_au('temp'); ?>tem-pdt3.jpg" alt="">
						</div>
						<div class="metro-art right">
							<hgroup>
								<h1 class="pdt-title txt-3">Futures Trust Fund</h1>
								<h2 class="pdt-subtitle txt-4">康和期經VIP全權委託</h2>
							</hgroup>
							<p class="pdt-shrink_text">
<?php
//  此處示意 顯示內文前 100 個字，超果以...取代
$cnt0 = "由專業管理團隊替您考量資產配置、提高投資效率、結合交易策略降低市場風險，穩健增值，讓投資人不論面對多頭、空頭，景氣好與壞，都能掌握獲利契機，滿足投資需求，實踐人生夢想！";
$showCount = 100;
$content0 = strip_tags($cnt0);
$content = mb_substr($content0,0,$showCount,'UTF-8');
if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
echo $content;
?>
							</p>
							<a href="products_cnt.php" class="btn btn-pdtMore txt-r1 link-3">深入了解</a>
						</div>
					</div><!-- /.metro-block-style1  END  !! -->
				</div><!-- /.metro-row  END  !! -->
			</div>
		</div>
	</section>
	<section class="fullbg row2">
		<div class="bg"></div>
		<div class="wrapper">
			<header class="txtImg_title-title-chatroom chatroom">
				<h1 class="hidden" data-lang="en">Advisory Chat Room</h1>
				<h2 class="hidden" data-lang="tw">康和期顧相談室</h2>
			</header>
			<div class="cnt">
				<ul class="chatroom-list cf">
					<li class="chatroom-item">
						<div class="chatroom-during txt-3">
							6<span class="txt-3_1">月</span>3<span class="txt-3_1">日</span> ~ 
							6<span class="txt-3_1">月</span>3<span class="txt-3_1">日</span>
						</div>
						<div class="chatroom-pic pic">
							<img src="<?php path_au('temp'); ?>tem-chat1.jpg" alt="">
							<a href="chatroom_cnt.php" class="btn btn-gochatroomCnt txt-2_1">課程內容</a>
						</div>
						<div class="chatroom-block">
							<div class="chatroom-title txt-1_1">
								台灣期貨市場新亮點 - 銀行保險業避險增益時代來臨
							</div>
							<div class="chatroom-lecturer txt-1_4">
								講師：汪濟平、楊朝舜
							</div>
							<div class="chatroom-guests txt-1_4">
								嘉賓：吳紹綱（Raymond Wu）、吳冠宏（Ryan, Mr.NTD）
							</div>
							<div class="chatroom-date txt-1_4">
								日期：2015/06/03(週三)
							</div>
							<div class="chatroom-time txt-1_4">
								時間：15:00~18:00
							</div>
							<div class="chatroom-money txt-1_4">
								費用：免費報名
							</div>
						</div>
					</li>
					<li class="chatroom-item">
						<div class="chatroom-during txt-3">
							6<span class="txt-3_1">月</span>3<span class="txt-3_1">日</span> ~ 
							6<span class="txt-3_1">月</span>3<span class="txt-3_1">日</span>
						</div>
						<div class="chatroom-pic pic">
							<img src="<?php path_au('temp'); ?>tem-chat1.jpg" alt="">
							<a href="chatroom_cnt.php" class="btn btn-gochatroomCnt txt-2_1">課程內容</a>
						</div>
						<div class="chatroom-block">
							<div class="chatroom-title txt-1_1">
								台灣期貨市場新亮點 - 銀行保險業避險增益時代來臨
							</div>
							<div class="chatroom-lecturer txt-1_4">
								講師：汪濟平、楊朝舜
							</div>
							<div class="chatroom-guests txt-1_4">
								嘉賓：吳紹綱（Raymond Wu）、吳冠宏（Ryan, Mr.NTD）
							</div>
							<div class="chatroom-date txt-1_4">
								日期：2015/06/03(週三)
							</div>
							<div class="chatroom-time txt-1_4">
								時間：15:00~18:00
							</div>
							<div class="chatroom-money txt-1_4">
								費用：免費報名
							</div>
						</div>
					</li>
					<li class="chatroom-item">
						<div class="chatroom-during txt-3">
							6<span class="txt-3_1">月</span>3<span class="txt-3_1">日</span> ~ 
							6<span class="txt-3_1">月</span>3<span class="txt-3_1">日</span>
						</div>
						<div class="chatroom-pic pic">
							<img src="<?php path_au('temp'); ?>tem-chat1.jpg" alt="">
							<a href="chatroom_cnt.php" class="btn btn-gochatroomCnt txt-2_1">課程內容</a>
						</div>
						<div class="chatroom-block">
							<div class="chatroom-title txt-1_1">
								台灣期貨市場新亮點 - 銀行保險業避險增益時代來臨
							</div>
							<div class="chatroom-lecturer txt-1_4">
								講師：汪濟平、楊朝舜
							</div>
							<div class="chatroom-guests txt-1_4">
								嘉賓：吳紹綱（Raymond Wu）、吳冠宏（Ryan, Mr.NTD）
							</div>
							<div class="chatroom-date txt-1_4">
								日期：2015/06/03(週三)
							</div>
							<div class="chatroom-time txt-1_4">
								時間：15:00~18:00
							</div>
							<div class="chatroom-money txt-1_4">
								費用：免費報名
							</div>
						</div>
					</li>
				</ul>
				<div style="margin-top: 2em;"><a href="chatroom.php" class="btn-getmore txt_img-morechatroom hide_txt link-2">更多課程內容</a></div>
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
