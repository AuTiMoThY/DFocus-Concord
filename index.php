<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
	include_once 'dist/character_data.php';
?>
<title><?php echo $webTitle; ?></title>

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

<body class="index_page">

<?php
//app
  include_once INC_PATH.'header.php';
 ?>
<section class="banner" style="background-image: url('<?php path_au('img'); ?>banner-index.jpg')">
	<a href="javascript: txtmsg1();" class="index-banner hide_txt">more info</a>
</section>

<main class="">
	<section class="fullbg row1">
		<div class="wrapper xs">
			<div class="row1-cnt">
				<hgroup id="txtImg1" class="txtImg_title-title-index_row1">
					<h1 class="hidden">康和期貨經理事業，國內唯一專營期貨經理與期貨信託<br>滿足您資產配置及財務風險規劃的服務需求</h1>
				</hgroup>
				<!-- <p class="txt-2">康和期貨經理事業股份有限公司為康和證券集團成員，資本額3億，基於金融市場長期的發展趨勢，陸續設置期貨服務事業之相關部門，秉持專業、積極的服務態度，提供客戶健全、客制化的投資工具及多樣化的金融商品，滿足投資人資產配置及財務風險規劃的服務需求，替大型投資法人與一般自然人做完整之金融代工、商品設計、顧問輔導咨詢與期貨信託受益憑證發行服務，相關業務拓展至兩岸三地華人市場。 </p> -->
				<p class="txt-2 text-center">康和期貨經理事業/期貨信託事業為康和證券集團的成員。專營期貨與避險基金管理公司。<br>我們秉持專業、積極的服務態度，替國內外的法人機構與自然人提供健全、客製化的投資工具<br>及多元化的金融產品，滿足客戶資產配置與財務風險規劃的需求。 </p>
			</div>
		</div>
	</section>
	<!--  section.row2  康和期經三大事業體  START  -->
	<section id="futures" class="row2">
		<div class="wrapper">
			<hgroup>
				<h1 class="hide_txt txt_img-BusinessDivisons <?php isPhone('mobile_title'); ?> title-1" data-lang="en">Business Divisons</h1>
				<h2 class="hide_txt txt_img-BusinessDivisons <?php isPhone('mobile_title'); ?> title-2" data-lang="tw">康和期經三大事業體</h2>
			</hgroup>
			<div class="cnt">
				<ul class="futures-list cf">
					<li class="futures-item">
						<figure><a href="<?php webPageUrlAu('futures_managed'); ?>">
							<div class="futures-pic pic">
								<img src="<?php path_au('img'); ?>pic1.jpg" alt="">
							</div>
							<figcaption>
								<p class="futures-item-intro txt-2">期貨經理事業係指經營接受特定人委任，對委任人之委託交易資產，就有關期貨交易、期貨相關現貨商品或其他經主管機關核准項目之交易或投資為分析、判斷，並基於該分析、判斷，為委任人執行期貨交易之業務者</p>
							</figcaption>
						</a></figure>
						<p class="txt-ff1 txt-1">Futures Managed Account</p>
						<p class="txt-ff1 txt-1">期貨經理事業</p>
					</li>
					<li class="futures-item">
						<figure><a href="<?php webPageUrlAu('futures_fund'); ?>">
							<div class="futures-pic pic">
								<img src="<?php path_au('img'); ?>pic2.jpg" alt="">
							</div>
							<figcaption>
								<p class="futures-item-intro txt-2">國內期貨信託事業係以向不特定人或符合主管機關所定資格條件之人募集期貨信託基金發行受益憑證，並運用期貨信託基金從事交易或投資之事業。聚集更多的小額資金，配合專業穩健的研究投資團隊，為廣大投資人進行審慎與安全的期貨交易，提供一個可參與國內外期貨市場的管道。</p>
							</figcaption>
						</a></figure>
						<p class="txt-ff1 txt-1">Futures Fund</p>
						<p class="txt-ff1 txt-1">期貨信託事業</p>
					</li>
					<li class="futures-item">
						<figure><a href="<?php webPageUrlAu('futures_advisory'); ?>">
							<div class="futures-pic pic">
								<img src="<?php path_au('img'); ?>pic3.jpg" alt="">
							</div>
							<figcaption><p class="futures-item-intro txt-2">期貨顧問事業業務係以接受委任，對期貨交易、期貨信託基金、期貨相關現貨商品或其他經主管機關公告與核准項目之交易或投資有關事項提供研究分析意見或建議咨詢服務，與執行前款有關期貨交易或投資之出版品發行及舉辦講習者。</p></figcaption>
						</a></figure>
						<p class="txt-ff1 txt-1">Futures Advisory</p>
						<p class="txt-ff1 txt-1">期貨顧問事業</p>
					</li>
				</ul>

				<!-- <img src="<?php //path_au('img'); ?>index-row2.jpg" alt=""> -->
			</div>
		</div>
	</section><!--  / section.row2  康和期經三大事業體  END  !!  -->
	<!--  section.row3  堅強團隊  START  -->
	<section id="team" class="row3">
		<div class="wrapper small">
			<hgroup class="txtImg_title txtImg_title-title-team <?php isPhone('mobile_title-group'); ?>">
				<h1 class="hidden <?php isPhone('mobile_title'); ?> title-1" data-lang="en">Mangment Team</h1>
				<h2 class="hidden <?php isPhone('mobile_title'); ?> title-1" data-lang="tw">堅強團隊</h2>
			</hgroup>
		</div>
		<footer class="character-ft">
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
<!-- <div class="character-wrap">
	<ul class="cf character-list">
		<li class="character-item"><a href="character.php?character=6">
			<figure>
				<div class="character-pic pic index-character6">
					<img src="upload/character/character6.png" alt="" class="">
				</div>
				<figcaption>
					<div class="left">
						<span class="inner character-name">謝增泉</span>
					</div>
					<div class="right">
						<span class="inner character-title">全權委託協理<br>交易決定人</span>
					</div>
				</figcaption>
			</figure>
		</a></li>
		<li class="character-item"><a href="character.php?character=3">
			<figure>
				<div class="character-pic pic index-character3">
					<img src="upload/character/character3.png" alt="" class="">
				</div>
				<figcaption>
					<div class="left">
						<span class="inner character-name">林豪威</span>
					</div>
					<div class="right">
						<span class="inner character-title">投資長</span>
					</div>
				</figcaption>
			</figure>
		</a></li>
		<li class="character-item"><a href="character.php?character=1">
			<figure>
				<div class="character-pic pic index-character1">
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
		<li class="character-item"><a href="character.php?character=2">
			<figure>
				<div class="character-pic pic index-character2">
					<img src="upload/character/character2.png" alt="" class="">
				</div>
				<figcaption>
					<div class="left">
						<span class="inner character-name">林彥全</span>
					</div>
					<div class="right">
						<span class="inner character-title">首席投資顧問<br>總經理</span>
					</div>
				</figcaption>
			</figure>
		</a></li>
		<li class="character-item"><a href="character.php?character=4">
			<figure>
				<div class="character-pic pic index-character4">
					<img src="upload/character/character4.png" alt="" class="">
				</div>
				<figcaption>
					<div class="left">
						<span class="inner character-name">方琮櫻</span>
					</div>
					<div class="right">
						<span class="inner character-title">副總經理</span>
					</div>
				</figcaption>
			</figure>
		</a></li>
	</ul>
</div> -->
		<p class="txt-1">繼2014年多空成長成功募集後，2015年康和期經再度網羅業內菁英，完整不同投資人投資標的。
		<a href="about.php#teamProfile" class="txt-r1 link-1">認識我們的團隊</a>
		</p>
		<!-- <img src="<?php path_au('img'); ?>index-row3.jpg" alt=""> -->
	</section><!--  / section.row3  堅強團隊  END  !!  -->
	<!-- section.row4  市場消息  START  -->
	<section class="fullbg row4">
		<div class="wrapper">
			<hgroup class="txtImg_title-title-news <?php isPhone('mobile_title-group'); ?>">
				<h1 class="hidden <?php isPhone('mobile_title'); ?> title-1" data-lang="en">News & Updates</h1>
				<h2 class="hidden <?php isPhone('mobile_title'); ?> title-2" data-lang="tw">市場消息</h2>
			</hgroup>
			<div class="metro-wrap">
				<div class="metro-container">
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
				</div>
			</div>
		</div>
	</section><!-- / section.row4  END  !!-->
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
	$("#marquee_prev_btn").css({
		top: (charMarqueeH-100)/2
	});
	$("#marquee_next_btn").css({
		top: (charMarqueeH-100)/2
	});

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
