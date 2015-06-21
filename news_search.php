<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>文章搜尋 | 康和期貨</title>

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

<body class="news_page">

<?php
//app
  include_once INC_PATH.'header.php';
 ?>
<section class="banner" style="background-image: url('<?php path_au('img'); ?>banner-news.jpg')">
	
</section>

<main class="">
	<section class="row1">
		<div class="wrapper small">
			<header class="txtImg_title-title-search cnt_title">
				<h1 class="hidden" data-lang="en">Search</h1>
				<h2 class="hidden" data-lang="tw">文章搜尋</h2>
			</header>
		</div>
	</section>
	<section class="fullbg row2 art_search-wrap">
		<div class="bg"></div>
		<div class="wrapper">
			<div class="art_search-container">
				<span class="txt-1">文章搜尋</span>
				<form action="" class="art_search-form cf">
					<input type="text" name="" id="" class="art_search-input frm__field left" placeholder="輸入關鍵字...">
					<input type="button" name="" id="" class="art_search-btn frm__btn left" value="search" onclick="location.href='news_search.php'">
				</form>
				<p class="text-center">約有 20 項結果</p>
				<ul class="art_search-list">
					<li class="art_search-item cf">
						<div class="news-pic pic left">
							<img src="upload/news/news_051701.jpg" alt="">
						</div>
						<div class="news-intro left">
							<hgroup class="cnt_title">
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
							<div class="news-link">
								<a href="" class="txt-r1">http://www.concordmanagedfutures.com/what-we-do/investment-management/</a>
							</div>
						</div>
					</li>
					<li class="art_search-item cf">
						<div class="news-pic pic left">
							<img src="upload/news/news_051701.jpg" alt="">
						</div>
						<div class="news-intro left">
							<hgroup class="cnt_title">
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
							<div class="news-link">
								<a href="" class="txt-r1">http://www.concordmanagedfutures.com/what-we-do/investment-management/</a>
							</div>
						</div>
					</li>
					<li class="art_search-item cf">
						<div class="news-pic pic left">
							<img src="upload/news/news_051701.jpg" alt="">
						</div>
						<div class="news-intro left">
							<hgroup class="cnt_title">
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
							<div class="news-link">
								<a href="" class="txt-r1">http://www.concordmanagedfutures.com/what-we-do/investment-management/</a>
							</div>
						</div>
					</li>
					<li class="art_search-item cf">
						<div class="news-pic pic left">
							<img src="upload/news/news_051701.jpg" alt="">
						</div>
						<div class="news-intro left">
							<hgroup class="cnt_title">
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
							<div class="news-link">
								<a href="" class="txt-r1">http://www.concordmanagedfutures.com/what-we-do/investment-management/</a>
							</div>
						</div>
					</li>
					<li class="art_search-item cf">
						<div class="news-pic pic left">
							<img src="upload/news/news_051701.jpg" alt="">
						</div>
						<div class="news-intro left">
							<hgroup class="cnt_title">
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
							<div class="news-link">
								<a href="" class="txt-r1">http://www.concordmanagedfutures.com/what-we-do/investment-management/</a>
							</div>
						</div>
					</li>
				</ul>

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
