<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
	include_once 'dist/news_data.php';

$shownum = 6;

$p = isset($_GET["p"]) ? $p = $_GET["p"] : $p = 1;
$start = ($p-1)*$shownum;

// 總資料筆數
$total = count($news);

// 總頁數
$maxPage = $total > 0 ? ceil($total/$shownum) : 1;

if ($p>$maxPage || $p<1 || !is_int($p*1) || !isset($_GET["p"])) {
	$p = 1;
	header("Location: news.php?p={$p}");
}

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
<?php 
// echo '$start:'.$start."<br>";
// echo '$total:'.$total."<br>";
// echo '$maxPage:'.$maxPage."<br>";
?>
	<section class="row1">
		<div class="wrapper">
			<h2 class="page_title txtImg_title-title-lu hide_txt <?php isPhone('mobile_title'); ?> title-1">Lastest Update</h2>
			<div class="metro-block-style1 cf ib">
				<div class="news-pic pic left">
				<?php 
					if ($news[0]['pic']=='') {
						echo "<img src=\"dist/images/news-cover.jpg\" alt=\"\">";
					}else{
						echo "<img src=\"{$news[0]['pic']}\" alt=\"\">";
					}
				?>
				</div>
<!-- 			HTML
				<div class="news-pic pic left">
					<img src="upload/news/news_051701.jpg" alt="">
				</div> -->
				<div class="metro-art right">
					<hgroup>
						<h1 class="news-title"><?php echo $news[0]['title']; ?></h1>
						<p class="news-time"><?php echo $news[0]['date']; ?></p>
					</hgroup>
					<p class="news-shrink_text">
<?php
//  此處示意 顯示內文前 77 個字，超果以...取代
$cnt0 = $news[0]['cnt'];
$showCount = 77;
$content0 = strip_tags($cnt0);
$content = mb_substr($content0,0,$showCount,'UTF-8');
if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
echo $content;
?>
					</p>
					<a href="news_cnt.php?id=<?php echo $news[0]['index']; ?>" class="btn btn-black btn-more">繼續閱讀</a>
				</div>
<!-- 			HTML
				<div class="metro-art right">
					<hgroup>
						<h1 class="news-title">周線連3黑 520魔咒下周上演周線連3黑 520魔咒下周上演周線連3黑 520魔咒下周上演周線連3黑 520魔咒下周上演?</h1>
						<p class="news-time">03月24日 2015</p>
					</hgroup>
					<p class="news-shrink_text">
<?php
// //  此處示意 顯示內文前 77 個字，超果以...取代
// $cnt0 = "美國升息議題牽動全球資本市場，18日美國公開市場操作委員會（FOMC）會議在即影響，台股期現貨周一走弱，外資進出也偏空。法人認為，最近資金持續往利率寬鬆的美國升息議題牽動全球資本市場，18日美國公開市場操作委員會（FOMC）會議在即影響，台股期現貨周一走弱，外資進出也偏空。法人認為，最近資金持續往利率寬鬆的";
// $showCount = 77;
// $content0 = strip_tags($cnt0);
// $content = mb_substr($content0,0,$showCount,'UTF-8');
// if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
// echo $content;
?>
					</p>
					<a href="news_cnt.php" class="btn btn-black btn-more">繼續閱讀</a>
				</div>
 -->
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
						<a href="news_cnt.php?id=<?php echo $news[$start+1]['index']; ?>"></a>
						<div class="news-pic pic left">
						<?php 
							if ($news[$start+1]['pic']=='') {
								echo "<img src=\"dist/images/news-cover.jpg\" alt=\"\">";
							}else{
								echo "<img src=\"{$news[$start+1]['pic']}\" alt=\"\">";
							}
						?>
						</div>
						<div class="metro-art right">
							<hgroup>
								<h1 class="news-title"><?php echo $news[$start+1]['title']; ?></h1>
								<p class="news-time"><?php echo $news[$start+1]['date']; ?></p>
							</hgroup>
							<p class="news-shrink_text">
<?php
     //  此處示意 顯示內文前 77 個字，超果以...取代
     $cnt0 = $news[$start+1]['cnt'];
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
						<a href="news_cnt.php?id=<?php echo $news[$start+2]['index']; ?>"></a>
						<div class="metro-art">
							<hgroup>
								<h1 class="news-title"><?php echo $news[$start+2]['title']; ?></h1>
								<p class="news-time"><?php echo $news[$start+2]['date']; ?></p>
							</hgroup>
							<p class="news-shrink_text">
<?php
     //  此處示意 顯示內文前 77 個字，超果以...取代
     $cnt0 = $news[$start+2]['cnt'];
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
						<a href="news_cnt.php?id=<?php echo $news[$start+3]['index']; ?>"></a>
						<div class="news-pic pic left">
						<?php 
							if ($news[$start+3]['pic']=='') {
								echo "<img src=\"dist/images/news-cover.jpg\" alt=\"\">";
							}else{
								echo "<img src=\"{$news[$start+3]['pic']}\" alt=\"\">";
							}
						?>
						</div>
						<div class="metro-art right">
							<hgroup>
								<h1 class="news-title"><?php echo $news[$start+3]['title']; ?></h1>
								<p class="news-time"><?php echo $news[$start+3]['date']; ?></p>
							</hgroup>
							<p class="news-shrink_text">
<?php
     //  此處示意 顯示內文前 77 個字，超果以...取代
     $cnt0 = $news[$start+3]['cnt'];
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
							<a href="news_cnt.php?id=<?php echo $news[$start+4]['index']; ?>"></a>
							<div class="news-pic pic">
							<?php 
								if ($news[$start+4]['pic']=='') {
									echo "<img src=\"dist/images/news-cover.jpg\" alt=\"\">";
								}else{
									echo "<img src=\"{$news[$start+4]['pic']}\" alt=\"\">";
								}
							?>
							</div>
							<div class="metro-art">
								<hgroup>
									<h1 class="news-title"><?php echo $news[$start+4]['title']; ?></h1>
									<p class="news-time"><?php echo $news[$start+4]['date']; ?></p>
								</hgroup>
								<p class="news-shrink_text">
						<?php
						     //  此處示意 顯示內文前 77 個字，超果以...取代
						     $cnt0 = $news[$start+4]['cnt'];
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
								<a href="news_cnt.php?id=<?php echo $news[$start+5]['index']; ?>"></a>
								<div class="metro-art left">
									<hgroup>
										<h1 class="news-title"><?php echo $news[$start+5]['title']; ?></h1>
										<p class="news-time"><?php echo $news[$start+5]['date']; ?></p>
									</hgroup>
									<p class="news-shrink_text">
							<?php
							     //  此處示意 顯示內文前 77 個字，超果以...取代
							     $cnt0 = $news[$start+5]['cnt'];
							     $showCount = 77;
							     $content0 = strip_tags($cnt0);
							     $content = mb_substr($content0,0,$showCount,'UTF-8');
							     if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
							     echo $content;
							?>
									</p>
								</div>
								<div class="news-pic pic right">
								<?php 
									if ($news[$start+5]['pic']=='') {
										echo "<img src=\"dist/images/news-cover.jpg\" alt=\"\">";
									}else{
										echo "<img src=\"{$news[$start+5]['pic']}\" alt=\"\">";
									}
								?>
								</div>
							</div><!-- /.metro-block-style2  END  !! -->
							<div class="metro-block-video ib">
								<a href="news_cnt.php"></a>
								<div class="news-pic news-video pic">
								<?php 
									if ($news[$start+6]['pic']=='') {
										echo "<img src=\"dist/images/news-cover.jpg\" alt=\"\">";
									}else{
										echo "<img src=\"{$news[$start+6]['pic']}\" alt=\"\">";
									}
								?>
								</div>
							</div><!-- /.metro-block-video  END  !! -->
							<div class="metro-block-single ib">
								<a href="news_cnt.php?id=<?php echo $news[$start+6]['index']; ?>"></a>
								<div class="metro-art">
									<hgroup>
										<h1 class="news-title"><?php echo $news[$start+6]['title']; ?></h1>
										<p class="news-time"><?php echo $news[$start+6]['date']; ?></p>
									</hgroup>
									<p class="news-shrink_text">
		<?php
		     //  此處示意 顯示內文前 77 個字，超果以...取代
		     $cnt0 = $news[$start+6]['cnt'];
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


<!--        HTML
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
     // //  此處示意 顯示內文前 77 個字，超果以...取代
     // $cnt0 = "美國升息議題牽動全球資本市場，18日美國公開市場操作委員會（FOMC）會議在即影響，台股期現貨周一走弱，外資進出也偏空。法人認為，最近資金持續往利率寬鬆的美國升息議題牽動全球資本市場，18日美國公開市場操作委員會（FOMC）會議在即影響，台股期現貨周一走弱，外資進出也偏空。法人認為，最近資金持續往利率寬鬆的";
     // $showCount = 77;
     // $content0 = strip_tags($cnt0);
     // $content = mb_substr($content0,0,$showCount,'UTF-8');
     // if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
     // echo $content;
?>
							</p>
						</div>
					</div><!-- /.metro-block-style1  END  !! --
					<div class="metro-block-video ib">
						<a href="news_cnt.php"></a>
						<div class="news-pic news-video pic">
							<img src="<?php //path_au('temp'); ?>tem4.jpg" alt="">
						</div>
					</div><!-- /.metro-block-video  END  !! --
					<div class="metro-block-single ib">
						<a href="news_cnt.php"></a>
						<div class="metro-art">
							<hgroup>
								<h1 class="news-title">工商時報│職場達人－林彥全打破偏見闖出期經一片天</h1>
								<p class="news-time">03月24日 2015</p>
							</hgroup>
							<p class="news-shrink_text">
<?php
     // //  此處示意 顯示內文前 77 個字，超果以...取代
     // $cnt0 = "「期貨很危險，是賭博、吸毒。」台灣不少投資人一提到期貨，仍舊抱持著這樣的觀念，康和期經首席投資顧問兼副總經理林彥全笑著說。接觸金融業將近20年，他認為「期貨很危險，是賭博、吸毒。」台灣不少投資人一提到期貨，仍舊抱持著這樣的觀念，康和期經首席投資顧問兼副總經理林彥全笑著說。接觸金融業將近20年，他認為";
     // $showCount = 77;
     // $content0 = strip_tags($cnt0);
     // $content = mb_substr($content0,0,$showCount,'UTF-8');
     // if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
     // echo $content;
?>
							</p>
						</div>
					</div><!-- /.metro-block-single  END  !! --
					<div class="metro-block-style1 cf ib">
						<a href="news_cnt.php"></a>
						<div class="news-pic pic left">
							<img src="<?php //path_au('temp'); ?>tem5.jpg" alt="">
						</div>
						<div class="metro-art right">
							<hgroup>
								<h1 class="news-title">|工商時報|B7 期貨| 外資靠攏寬鬆區震盪</h1>
								<p class="news-time">03月24日 2015</p>
							</hgroup>
							<p class="news-shrink_text">
<?php
     // //  此處示意 顯示內文前 77 個字，超果以...取代
     // $cnt0 = "美國升息議題牽動全球資本市場，18日美國公開市場操作委員會（FOMC）會議在即影響，台股期現貨周一走弱，外資進出也偏空。法人認為，最近資金持續往利率寬鬆的美國升息議題牽動全球資本市場，18日美國公開市場操作委員會（FOMC）會議在即影響，台股期現貨周一走弱，外資進出也偏空。法人認為，最近資金持續往利率寬鬆的";
     // $showCount = 77;
     // $content0 = strip_tags($cnt0);
     // $content = mb_substr($content0,0,$showCount,'UTF-8');
     // if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
     // echo $content;
?>
							</p>
						</div>
					</div><!-- /.metro-block-style1  END  !! --
					<div class="metro-row cf">
						<div class="metro-block-style3 col">
							<a href="news_cnt.php"></a>
							<div class="news-pic pic">
								<img src="<?php //path_au('temp'); ?>tem5.jpg" alt="">
							</div>
							<div class="metro-art">
								<hgroup>
									<h1 class="news-title">|工商時報|B7 期貨| 外資靠攏寬鬆區震盪</h1>
									<p class="news-time">03月24日 2015</p>
								</hgroup>
								<p class="news-shrink_text">
						<?php
						     //  此處示意 顯示內文前 77 個字，超果以...取代
						     // $cnt0 = "美國升息議題牽動全球資本市場，18日美國公開市場操作委員會（FOMC）會議在即影響，台股期現貨周一走弱，外資進出也偏空。法人認為，最近資金持續往利率寬鬆的美國升息議題牽動全球資本市場，18日美國公開市場操作委員會（FOMC）會議在即影響，台股期現貨周一走弱，外資進出也偏空。法人認為，最近資金持續往利率寬鬆的";
						     // $showCount = 77;
						     // $content0 = strip_tags($cnt0);
						     // $content = mb_substr($content0,0,$showCount,'UTF-8');
						     // if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
						     // echo $content;
						?>
								</p>
							</div>
						</div><!-- /.metro-block-style3  END  !! --
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
							     // //  此處示意 顯示內文前 77 個字，超果以...取代
							     // $cnt0 = "美國升息議題牽動全球資本市場，18日美國公開市場操作委員會（FOMC）會議在即影響，台股期現貨周一走弱，外資進出也偏空。法人認為，最近資金持續往利率寬鬆的美國升息議題牽動全球資本市場，18日美國公開市場操作委員會（FOMC）會議在即影響，台股期現貨周一走弱，外資進出也偏空。法人認為，最近資金持續往利率寬鬆的";
							     // $showCount = 77;
							     // $content0 = strip_tags($cnt0);
							     // $content = mb_substr($content0,0,$showCount,'UTF-8');
							     // if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
							     // echo $content;
							?>
									</p>
								</div>
								<div class="news-pic pic right">
									<img src="<?php //path_au('temp'); ?>tem5.jpg" alt="">
								</div>
							</div><!-- /.metro-block-style2  END  !! --
							<div class="metro-block-video ib">
								<a href="news_cnt.php"></a>
								<div class="news-pic news-video pic">
									<img src="<?php //path_au('temp'); ?>tem4.jpg" alt="">
								</div>
							</div><!-- /.metro-block-video  END  !! --
							<div class="metro-block-single ib">
								<a href="news_cnt.php"></a>
								<div class="metro-art">
									<hgroup>
										<h1 class="news-title">工商時報│職場達人－林彥全打破偏見闖出期經一片天</h1>
										<p class="news-time">03月24日 2015</p>
									</hgroup>
									<p class="news-shrink_text">
		<?php
		     // //  此處示意 顯示內文前 77 個字，超果以...取代
		     // $cnt0 = "「期貨很危險，是賭博、吸毒。」台灣不少投資人一提到期貨，仍舊抱持著這樣的觀念，康和期經首席投資顧問兼副總經理林彥全笑著說。接觸金融業將近20年，他認為「期貨很危險，是賭博、吸毒。」台灣不少投資人一提到期貨，仍舊抱持著這樣的觀念，康和期經首席投資顧問兼副總經理林彥全笑著說。接觸金融業將近20年，他認為";
		     // $showCount = 77;
		     // $content0 = strip_tags($cnt0);
		     // $content = mb_substr($content0,0,$showCount,'UTF-8');
		     // if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
		     // echo $content;
		?>
									</p>
								</div>
							</div><!-- /.metro-block-single  END  !! --
						</div>
					</div><!-- /.metro-row  END  !! --
				</div>
			</div><!-- /.metro-wrap  END  !! --
-->
<div class="pages_btn">
	<ul>
	<?php 
		if ($p>1) {
			$prevPage = $p-1;
			echo "<li class=\"prev\"><a href=\"news.php?p={$prevPage}\"><i class=\"icon ib\"></i><span class=\"txt ib\">上一頁</span></a></li><!-- 在第一頁時不顯示 -->";
		}

	// 頁碼
	$end = $p+2 <= $maxPage ? $p+2 : $maxPage;
	$start = $end-4 >= 1 ? $end-4 : 1;
	if ($end - $start < 4) {
		$end = $start+4 <= $maxPage ? $start+4 : $maxPage;
	}
	for ($i=$start; $i <= $end ; $i++) { 
		if ($i == $p) {
			echo "<li class=\"number active\"><a href=\"javascript:void 0;\">{$i}</a></li>";
		}else {
			echo "<li class=\"number\"><a href=\"news.php?p={$i}\">{$i}</a></li>";
		}
	}


		if ($p<$maxPage) {
			$nextPage = $p+1;
			echo "<li class=\"next\"><a href=\"news.php?p={$nextPage}\"><span class=\"txt ib\">下一頁</span><i class=\"icon ib\"></i></a></li>";
		}
	 ?>
	</ul>
</div>
<!--   HTML
<div class="pages_btn">
	<ul>
		<li class="prev"><a href="#"><i class="icon ib"></i><span class="txt ib">上一頁</span></a></li>
		<!-- 在第一頁時不顯示 --
		<li class="number active"><a href="#">1</a></li>
		<li class="number"><a href="#">2</a></li>
		<li class="number"><a href="#">3</a></li>
		<li class="number"><a href="#">4</a></li>
		<li class="number"><a href="#">5</a></li>
		<li class="next"><a href="#"><span class="txt ib">下一頁</span><i class="icon ib"></i></a></li>
		<!-- 在最後一頁時不顯示 --
	</ul>
</div>
 -->
		</div>
	</section>
	<section class="row3">
		<div class="wrapper">
			<header class="txtImg_title-title-cale <?php //isPhone('mobile_title-group'); ?>">
				<!-- <h1 class="hidden <?php //isPhone('mobile_title'); ?> title-1" data-lang="en">News & Updates</h1> -->
				<h2 class="mobile_title title-2" data-lang="tw">今日國際財經日曆</h2>
			</header>
<div class="iframe-rwd economic_Calendar">
	<iframe src="http://ec.cn.forexprostools.com?columns=exc_flags,exc_currency,exc_importance,exc_actual,exc_forecast,exc_previous&features=datepicker,timezone&countries=37,6,110,14,48,46,32,17,10,36,43,35,72,22,41,25,12,5,4,26,11,39,42&calType=day&timeZone=86&lang=6" width="636" height="467" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>
	<div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;"><span style="font-size: 11px;color: #333333;text-decoration: none;">实时财经日历由领先金融门户 <a href="http://cn.investing.com/" rel="nofollow" target="_blank" style="font-size: 11px;color: #06529D; font-weight: bold;" class="underline_link">Investing.com 中文站</a> 提供。</span></div>
</div>
<p>免責聲明:康和快訊所提供新聞及今日國際財經日曆內容僅提供一般交易資訊，不能依此作為交易依據。康和期經提供最準確的內容服務投資人，但由於大量的資料和消息來源皆出自於官方，康和期經不會為這些資料的準確性承擔任何責任。即時經濟日曆也有可能在未事先通知的情況下作出修改.還請投資人注意風險.
</p>
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
