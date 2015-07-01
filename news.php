<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>市場消息 / 康和快訊 | <?php echo $webTitle; ?></title>

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

<body class="news_page list_page">

<?php
//app
  include_once INC_PATH.'header.php';
 ?>

 <div id="bannerTrigger"></div>
<section id="pageBanner" class="banner" style="background-image: url('<?php path_au('img'); ?>banner-news.jpg')">
	
</section>

<main class="">
	<section class="row1">
		<div class="wrapper">
			<h2 class="page_title txtImg_title-title-lu hide_txt <?php isPhone('mobile_title'); ?> title-1">Lastest Update</h2>
			<div class="metro-block-style1 cf ib">
				<div class="news-pic pic left">
					<img src="upload/news/news_051701.jpg" alt="">
				</div>
				<div class="metro-art right">
					<hgroup>
						<h1 class="news-title">周線連3黑 520魔咒下周上演周線連3黑 520魔咒下周上演周線連3黑 520魔咒下周上演周線連3黑 520魔咒下周上演?</h1>
						<p class="news-time">03月24日 2015</p>
					</hgroup>
					<p class="news-shrink_text">
<?php
//  此處示意 顯示內文前 77 個字，超果以...取代
$cnt0 = "美國升息議題牽動全球資本市場，18日美國公開市場操作委員會（FOMC）會議在即影響，台股期現貨周一走弱，外資進出也偏空。法人認為，最近資金持續往利率寬鬆的美國升息議題牽動全球資本市場，18日美國公開市場操作委員會（FOMC）會議在即影響，台股期現貨周一走弱，外資進出也偏空。法人認為，最近資金持續往利率寬鬆的";
$showCount = 77;
$content0 = strip_tags($cnt0);
$content = mb_substr($content0,0,$showCount,'UTF-8');
if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
echo $content;
?>
					</p>
					<a href="news_cnt.php" class="btn btn-black btn-more">繼續閱讀</a>
				</div>
			</div><!-- /.metro-block-style1  END  !! -->
		</div>
	</section>
	<section class="fullbg row2">
		<div class="bg"></div>
		<div class="wrapper">
			<header class="txtImg_title-title-news <?php isPhone('mobile_title-group'); ?>">
				<h1 class="hidden <?php isPhone('mobile_title'); ?> title-1" data-lang="en">News & Updates</h1>
				<h2 class="hidden <?php isPhone('mobile_title'); ?> title-2" data-lang="tw">市場消息</h2>
			</header>
			<div class="metro-wrap">
				<div class="metro-container cf">
					<div class="metro-block-style1 cf ib">
						<a href="news_cnt.php"></a>
						<div class="news-pic pic left">
							<img src="upload/news/news_051701.jpg" alt="">
						</div>
						<div class="metro-art right">
							<hgroup>
								<h1 class="news-title">周線連3黑 520魔咒下周上演?</h1>
								<p class="news-time">03月24日 2015</p>
							</hgroup>
							<p class="news-shrink_text">
<?php
     //  此處示意 顯示內文前 77 個字，超果以...取代
     $cnt0 = "美國升息議題牽動全球資本市場，18日美國公開市場操作委員會（FOMC）會議在即影響，台股期現貨周一走弱，外資進出也偏空。法人認為，最近資金持續往利率寬鬆的美國升息議題牽動全球資本市場，18日美國公開市場操作委員會（FOMC）會議在即影響，台股期現貨周一走弱，外資進出也偏空。法人認為，最近資金持續往利率寬鬆的";
     $showCount = 77;
     $content0 = strip_tags($cnt0);
     $content = mb_substr($content0,0,$showCount,'UTF-8');
     if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
     echo $content;
?>
							</p>
						</div>
					</div><!-- /.metro-block-style1  END  !! -->
					<div class="metro-block-video ib">
						<a href="news_cnt.php"></a>
						<div class="news-pic news-video pic">
							<img src="<?php path_au('temp'); ?>tem4.jpg" alt="">
						</div>
					</div><!-- /.metro-block-video  END  !! -->
					<div class="metro-block-single ib">
						<a href="news_cnt.php"></a>
						<div class="metro-art">
							<hgroup>
								<h1 class="news-title">工商時報│職場達人－林彥全打破偏見闖出期經一片天</h1>
								<p class="news-time">03月24日 2015</p>
							</hgroup>
							<p class="news-shrink_text">
<?php
     //  此處示意 顯示內文前 77 個字，超果以...取代
     $cnt0 = "「期貨很危險，是賭博、吸毒。」台灣不少投資人一提到期貨，仍舊抱持著這樣的觀念，康和期經首席投資顧問兼副總經理林彥全笑著說。接觸金融業將近20年，他認為「期貨很危險，是賭博、吸毒。」台灣不少投資人一提到期貨，仍舊抱持著這樣的觀念，康和期經首席投資顧問兼副總經理林彥全笑著說。接觸金融業將近20年，他認為";
     $showCount = 77;
     $content0 = strip_tags($cnt0);
     $content = mb_substr($content0,0,$showCount,'UTF-8');
     if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
     echo $content;
?>
							</p>
						</div>
					</div><!-- /.metro-block-single  END  !! -->
					<div class="metro-block-style1 cf ib">
						<a href="news_cnt.php"></a>
						<div class="news-pic pic left">
							<img src="<?php path_au('temp'); ?>tem5.jpg" alt="">
						</div>
						<div class="metro-art right">
							<hgroup>
								<h1 class="news-title">|工商時報|B7 期貨| 外資靠攏寬鬆區震盪</h1>
								<p class="news-time">03月24日 2015</p>
							</hgroup>
							<p class="news-shrink_text">
<?php
     //  此處示意 顯示內文前 77 個字，超果以...取代
     $cnt0 = "美國升息議題牽動全球資本市場，18日美國公開市場操作委員會（FOMC）會議在即影響，台股期現貨周一走弱，外資進出也偏空。法人認為，最近資金持續往利率寬鬆的美國升息議題牽動全球資本市場，18日美國公開市場操作委員會（FOMC）會議在即影響，台股期現貨周一走弱，外資進出也偏空。法人認為，最近資金持續往利率寬鬆的";
     $showCount = 77;
     $content0 = strip_tags($cnt0);
     $content = mb_substr($content0,0,$showCount,'UTF-8');
     if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
     echo $content;
?>
							</p>
						</div>
					</div><!-- /.metro-block-style1  END  !! -->
					<div class="metro-row cf">
						<div class="metro-block-style3 col">
							<a href="news_cnt.php"></a>
							<div class="news-pic pic">
								<img src="<?php path_au('temp'); ?>tem5.jpg" alt="">
							</div>
							<div class="metro-art">
								<hgroup>
									<h1 class="news-title">|工商時報|B7 期貨| 外資靠攏寬鬆區震盪</h1>
									<p class="news-time">03月24日 2015</p>
								</hgroup>
								<p class="news-shrink_text">
						<?php
						     //  此處示意 顯示內文前 77 個字，超果以...取代
						     $cnt0 = "美國升息議題牽動全球資本市場，18日美國公開市場操作委員會（FOMC）會議在即影響，台股期現貨周一走弱，外資進出也偏空。法人認為，最近資金持續往利率寬鬆的美國升息議題牽動全球資本市場，18日美國公開市場操作委員會（FOMC）會議在即影響，台股期現貨周一走弱，外資進出也偏空。法人認為，最近資金持續往利率寬鬆的";
						     $showCount = 77;
						     $content0 = strip_tags($cnt0);
						     $content = mb_substr($content0,0,$showCount,'UTF-8');
						     if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
						     echo $content;
						?>
								</p>
							</div>
						</div><!-- /.metro-block-style3  END  !! -->
						<div class="metro-col col">
							<div class="metro-block-style2 cf">
								<a href="news_cnt.php"></a>
								<div class="metro-art left">
									<hgroup>
										<h1 class="news-title">|工商時報|B7 期貨| 外資靠攏寬鬆區震盪</h1>
										<p class="news-time">03月24日 2015</p>
									</hgroup>
									<p class="news-shrink_text">
							<?php
							     //  此處示意 顯示內文前 77 個字，超果以...取代
							     $cnt0 = "美國升息議題牽動全球資本市場，18日美國公開市場操作委員會（FOMC）會議在即影響，台股期現貨周一走弱，外資進出也偏空。法人認為，最近資金持續往利率寬鬆的美國升息議題牽動全球資本市場，18日美國公開市場操作委員會（FOMC）會議在即影響，台股期現貨周一走弱，外資進出也偏空。法人認為，最近資金持續往利率寬鬆的";
							     $showCount = 77;
							     $content0 = strip_tags($cnt0);
							     $content = mb_substr($content0,0,$showCount,'UTF-8');
							     if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
							     echo $content;
							?>
									</p>
								</div>
								<div class="news-pic pic right">
									<img src="<?php path_au('temp'); ?>tem5.jpg" alt="">
								</div>
							</div><!-- /.metro-block-style2  END  !! -->
							<div class="metro-block-video ib">
								<a href="news_cnt.php"></a>
								<div class="news-pic news-video pic">
									<img src="<?php path_au('temp'); ?>tem4.jpg" alt="">
								</div>
							</div><!-- /.metro-block-video  END  !! -->
							<div class="metro-block-single ib">
								<a href="news_cnt.php"></a>
								<div class="metro-art">
									<hgroup>
										<h1 class="news-title">工商時報│職場達人－林彥全打破偏見闖出期經一片天</h1>
										<p class="news-time">03月24日 2015</p>
									</hgroup>
									<p class="news-shrink_text">
		<?php
		     //  此處示意 顯示內文前 77 個字，超果以...取代
		     $cnt0 = "「期貨很危險，是賭博、吸毒。」台灣不少投資人一提到期貨，仍舊抱持著這樣的觀念，康和期經首席投資顧問兼副總經理林彥全笑著說。接觸金融業將近20年，他認為「期貨很危險，是賭博、吸毒。」台灣不少投資人一提到期貨，仍舊抱持著這樣的觀念，康和期經首席投資顧問兼副總經理林彥全笑著說。接觸金融業將近20年，他認為";
		     $showCount = 77;
		     $content0 = strip_tags($cnt0);
		     $content = mb_substr($content0,0,$showCount,'UTF-8');
		     if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
		     echo $content;
		?>
									</p>
								</div>
							</div><!-- /.metro-block-single  END  !! -->
						</div>
					</div><!-- /.metro-row  END  !! -->
				</div>
			</div><!-- /.metro-wrap  END  !! -->

<div class="pages_btn">
	<ul>
		<li class="prev"><a href="#"><i class="icon ib"></i><span class="txt ib">上一頁</span></a></li><!-- 在第一頁時不顯示 -->
		<li class="number active"><a href="#">1</a></li>
		<li class="number"><a href="#">2</a></li>
		<li class="number"><a href="#">3</a></li>
		<li class="number"><a href="#">4</a></li>
		<li class="number"><a href="#">5</a></li>
		<li class="next"><a href="#"><span class="txt ib">下一頁</span><i class="icon ib"></i></a></li><!-- 在最後一頁時不顯示 -->
	</ul>
</div>
		</div>
	</section>
	<section class="row3">
		<div class="wrapper">
<iframe src="http://ec.cn.forexprostools.com?columns=exc_flags,exc_currency,exc_importance,exc_actual,exc_forecast,exc_previous&features=datepicker,timezone&countries=37,6,110,14,48,46,32,17,10,36,43,35,72,22,41,25,12,5,4,26,11,39,42&calType=day&timeZone=28&lang=6" width="636" height="467" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe><div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;"><span style="font-size: 11px;color: #333333;text-decoration: none;">实时财经日历由领先金融门户 <a href="http://cn.investing.com/" rel="nofollow" target="_blank" style="font-size: 11px;color: #06529D; font-weight: bold;" class="underline_link">Investing.com 中文站</a> 提供。</span></div>
			<footer class="share_bar cf">
				<div class="social_share left">
					<span class="txt-1">文章分享</span>
					<ul class="cf">
						<li><a href="javascript:void 0;" class="icon icon-rss"></a></li>
						<li><a href="javascript:void 0;" class="icon icon-fasebook"></a></li>
						<li><a href="javascript:void 0;" class="icon icon-googleplus"></a></li>
						<li><a href="javascript:void 0;" class="icon icon-twitter"></a></li>
						<li><a href="javascript:void 0;" class="icon icon-in"></a></li>
					</ul>
				</div>
				<div class="art_search right">
					<span class="txt-1">文章搜尋</span>
					<form action="" class="art_search-form cf">
						<input type="text" name="" id="" class="art_search-input frm__field left" placeholder="輸入關鍵字...">
						<input type="button" name="" id="" class="art_search-btn frm__btn left" value="search" onclick="location.href='news_search.php'">
					</form>
				</div>
			</footer>
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
