<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>市場消息 / 康和快訊 | 康和期貨</title>

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
	<header class="cnt_title">
		<div class="wrapper small">
			<h2 class="title">
				<img src="<?php path_au('img'); ?>title-newsCnt.png" alt="" class="temporary">
			</h2>
			<p class="news-time">
				
			</p>
		</div>
	</header>
	<section class="fullbg row2">
		<div class="bg"></div>
		<div class="wrapper">
			<div class="cnt cf">
				<article class="editorDF">
					<!-- 圖文編輯器範圍 -->
					<img src="upload/news/news_051701.jpg" alt=""><br>
					<img src="upload/news/news_051702.jpg" alt=""><br>
					<img src="upload/news/news_051703.jpg" alt=""><br>
					<p>新聞分享：</p>
					<p>周線連3黑 520魔咒下周上演？</p>
					<p>台股本周失守季線且單周大跌112點，下周三就是520，但根據資料顯示，過去六年在520後台股是跌多漲少，恐不利下周表現，同時520當天剛好為台指期結算日，目前外資在期貨淨空單仍有1.79萬口，空方力道不可小覷。</p>
					<p>此外，台股周線連三黑、電子股五窮六絕尚未結束，台股下周還有重重難關要過。<br>
					康和期經總經理林彥全表示，台股遇到520通常不會有好表現，根據統計2008年至2014年520後一周加權指數上漲機率僅有13％，520後兩周上漲機率則是33％，顯示台股五月下旬走跌機率大。加上現階段期貨未平倉口數由5萬口大增至8萬口，預估接下來將有劇烈波段行情，其中外資期貨未平倉空高達1.79萬口，而520又正逢台指期結算，因此對五月看法保守。</p>
					<p>除了520魔咒外，華頓中小基金經理人葉時雙指出，周五電子股續跌，金融股止跌，但市場資金凌亂尚找不到上攻主流，對指數來說是壞事，若下周資金沒有回流佔權值最大的電子指數，則恐怕盤勢已盡。此外，6月漲跌幅將擴大至10％，對融資較高、股性活潑的股票來說是一大利空，預估在實施前會有賣壓出籠，進而衝擊台股。</p>
					<p>不過大展投顧策略長李政諺認為，從絕對金額來看，外資還是站在買方，昨日現貨買超7.21億，因此雖然盤是偏空，但指數要大跌情況機率不大，只不過在外資買盤力道縮減、內資撤離，且散戶觀望下，重整市場信心還需要一點時間。</p>
					<p>目前盤面主流難產，葉時雙認為，可以關注比較不受財報影響且有題材的族群，像是搭上未來趨勢的行動支付、產品面橫跨手機、WIFI和基地台的砷化鎵，及近年需求持續升溫的航太，雖然近期台股偏弱，但股價相對有撐。</p>
					<p>相關連結：<a href="http://money.chinatimes.com/news/news-content.aspx?id=20150516000138&cid=1203" target="_blank">http://money.chinatimes.com/news/news-content.aspx?id=20150516000138&cid=1203</a></p>
				</article>
				<!--<img src="<?php// path_au('img'); ?>news-cnt.jpg" alt="" class="temporary">-->
				<footer class="share_bar cf">
					<div class="social_share left" style="margin-top: 2.5em;">
						<img src="<?php path_au('img'); ?>share.jpg" alt="">
					</div>
				</footer>
			</div>
			<div class="" style="margin: 1em auto 5em;">
				<a href="news.php" class="txt_img-goback btn-getmore hide_txt"></a>
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
