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
<section id="bannerSlider" class="banner flexslider" >
	<ul class="slides">
		<li class="banner" style="background-image: url('<?php path_au('img'); ?>banner-index1.jpg')"><a href="products_list1.php" class="index-banner hide_txt">more info</a></li>
		<li class="banner" style="background-image: url('<?php path_au('img'); ?>banner-index2.jpg')"><a href="products_list1.php" class="index-banner hide_txt">more info</a></li>
		<li class="banner" style="background-image: url('<?php path_au('img'); ?>banner-index3.jpg')"><a href="products_list1.php" class="index-banner hide_txt">more info</a></li>
		<li class="banner" style="background-image: url('<?php path_au('img'); ?>banner-index4.jpg')"><a href="products_list1.php" class="index-banner hide_txt">more info</a></li>
	</ul>
	
</section>

<main class="">
	<section id="netAssetValueBar" class="fullbg row0 net_asset_value">
		<div class="wrapper cf">
			<div class="col-3 txt-6">Today's Net Asset Value</div>
			<div class="col-3">
				<label for="" class="net_asset_value-label col ">
					<span class="net_asset_value-label-bg"></span>
					<span class="net_asset_value-label-cnt txt-6_1">基金淨值日</span>
				</label>
				<div class="net_asset_value-txt col txt-6">2015 / 07 / 01</div>
			</div>
			<div class="col-3">
				<label for="" class="net_asset_value-label col ">
					<span class="net_asset_value-label-bg"></span>
					<span class="net_asset_value-label-cnt txt-6_1">最新淨值</span>
				</label>
				<div class="net_asset_value-txt col txt-6">10.190</div>
				<button type="button" id="netAssetValueBtn" class="btn btn-more">
					more
				</button>
			</div>
		</div>
		<div id="netAssetValuePanel" class="net_asset_value-history">
			<div class="wrapper">
<ul class="cf">
	<li> <span class="date">2015/06/30</span><span class="num">10.158</span> </li>
	<li> <span class="date">2015/06/29</span><span class="num">10.125</span> </li>
	<li> <span class="date">2015/06/26</span><span class="num">10.223</span> </li>
	<li> <span class="date">2015/06/25</span><span class="num">10.225</span> </li>
	<li> <span class="date">2015/06/24</span><span class="num">10.199</span> </li>
	<li> <span class="date">2015/06/23</span><span class="num">10.198</span> </li>
	<li> <span class="date">2015/06/22</span><span class="num">10.161</span> </li>
	<li> <span class="date">2015/06/18</span><span class="num">10.169</span> </li>
	<li> <span class="date">2015/06/17</span><span class="num">10.174</span> </li>
	<li> <span class="date">2015/06/16</span><span class="num">10.179</span> </li>
	<li> <span class="date">2015/06/15</span><span class="num">10.210</span> </li>
	<li> <span class="date">2015/06/12</span><span class="num">10.240</span> </li>
	<li> <span class="date">2015/06/11</span><span class="num">10.221</span> </li>
	<li> <span class="date">2015/06/10</span><span class="num">10.219</span> </li>
	<li> <span class="date">2015/06/09</span><span class="num">10.251</span> </li>
</ul>
			</div>
		</div>
	</section>
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
								<!-- <p class="futures-item-intro txt-2">期貨經理事業係指經營接受特定人委任，對委任人之委託交易資產，就有關期貨交易、期貨相關現貨商品或其他經主管機關核准項目之交易或投資為分析、判斷，並基於該分析、判斷，為委任人執行期貨交易之業務者</p> -->
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
								<!-- <p class="futures-item-intro txt-2">國內期貨信託事業係以向不特定人或符合主管機關所定資格條件之人募集期貨信託基金發行受益憑證，並運用期貨信託基金從事交易或投資之事業。聚集更多的小額資金，配合專業穩健的研究投資團隊，為廣大投資人進行審慎與安全的期貨交易，提供一個可參與國內外期貨市場的管道。</p> -->
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
							<figcaption>
								<!-- <p class="futures-item-intro txt-2">期貨顧問事業業務係以接受委任，對期貨交易、期貨信託基金、期貨相關現貨商品或其他經主管機關公告與核准項目之交易或投資有關事項提供研究分析意見或建議咨詢服務，與執行前款有關期貨交易或投資之出版品發行及舉辦講習者。</p> -->
							</figcaption>
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
				<h1 class="hidden <?php isPhone('mobile_title'); ?> title-1" data-lang="en">Managment Team</h1>
				<h2 class="hidden <?php isPhone('mobile_title'); ?> title-1" data-lang="tw">經營團隊</h2>
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
		<!-- <a href="about.php#teamProfile" class="txt-r1 link-1">認識我們的團隊</a> -->
		</p>
		<!-- <img src="<?php //path_au('img'); ?>index-row3.jpg" alt=""> -->
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
							<!-- 此為圖文新聞預設圖片。若無上傳圖片時，顯示預設圖片 -->
							<img src="dist/images/news-cover.jpg" alt="">
						</div>
						<div class="metro-art right">
							<hgroup>
								<h1 class="news-title">股票期貨贏家－蘋果助勢 可成股期可加碼?</h1>
								<p class="news-time">06月30日 2015</p>
							</hgroup>
							<p class="news-shrink_text">
<?php
     //  此處示意 顯示內文前 77 個字，超果以...取代
     $cnt0 = "機殼廠可成（2474）昨（25）日開高拉回震盪，雖然小漲0.4％，不過卻收了一根小黑k。康和期經表示，從基本面來看，下半年還有蘋果新品iPhone 6s要出貨，營運動能可望在第四季強勁回溫，加上技術線型來看，仍屬多頭格局，因此只要股價拉回至月線，都可以逢低加碼。就產品來看，可成吃下大部份iPhone及iPad機殼的產能，雖然今年上半年面臨大客戶機種轉換空窗期，股價不容易出現較大幅度的上漲，但隨著下半年蘋果將發表新機的拉貨需求，營收成長動能將在今年第四季強勁回升。且可成第一季EPS 6元，較市場預估略低，主要為認列匯損所致，而毛利率維持46.6％，符合市場預期。目前可成在NB的主要客戶有蘋果和Dell，手機部分有HTC、RIM、Moto等，至於平板客戶則以非蘋果品牌廠為主，從過去的產線走勢可以發現，NB與手持機殼，主要包括手機與平板，都呈現穩定成長，尤其是手機部分呈現高速成長，NB部分也表現不弱，隨一體成型筆電的滲透率提高，可望持續成長。可成自五月初創下8月年股價新高後拉回，期間雖然有跌落月線之下，而季線發揮下檔支撐功能，昨日盤中回測季線重拾漲勢，收盤再創近";
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
								<h1 class="news-title">台指選擇權－權值股撐盤 台股等轉機</h1>
								<p class="news-time">06月18日 2015</p>
							</hgroup>
							<p class="news-shrink_text">
<?php
     //  此處示意 顯示內文前 77 個字，超果以...取代
     $cnt0 = "昨日6月分台指期結算，雖然集中市場成交量持續低，不過仍可以看到部分權值股撐盤，台股現貨最後收9,189點。康和期經總經理林彥全指出，本周有許多重量級的國際消息待公布，只要能安然度過，下周台股就可以等待轉機。林彥全表示，加權指數大盤量能本周均量持續低迷，電子期貨部分仍持續抗跌，金融與電子持續輪動，然而，傳產弱勢不變，觀察台指期近遠月價差，6、7月價差從周二的170點縮減為120點左右，且摩根價差也由於6月29日台積電除息將會影響大盤將近39點左右，因此以提前反應至2.4大點，由於在近日大盤權值撐盤架構下，當日填息表現將會有效帶動近期弱勢大盤士氣。";
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
							<!-- 此為圖文新聞預設圖片。若無上傳圖片時，顯示預設圖片 -->
							<img src="dist/images/news-cover.jpg" alt="">
						</div>
						<div class="metro-art right">
							<hgroup>
								<h1 class="news-title">期貨－外資1.48萬口空單 結算壓力重</h1>
								<p class="news-time">06月18日 2015</p>
							</hgroup>
							<p class="news-shrink_text">
<?php
     //  此處示意 顯示內文前 77 個字，超果以...取代
     $cnt0 = "周三台指期將進行結算，且外資期貨未平倉淨空單還有1.48萬口，整體籌碼依舊偏空。不過觀察到近幾日大盤量能卻大幅萎縮，法人認為，在這樣的情況下，多空都難有表現，除非發生希臘真的退出歐元區的大利空，否則預估行情會在9,400～9,200間震盪。此外，集中市場已經第四日成交量低於千億元，昨日更是僅剩751億元，創今年2月以來新低量，凱基期貨分析師陳雙吉指出，台股無量就無行情，目前看來多空力道都不強，因此預估結算前台指期會在9,200點的鐵板，及選擇權買權最看好的9,400點之間震盪。";
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
$(window).load(function() {
	$("#bannerSlider").flexslider({
		animation      : "fade",
		controlNav     : true,
		directionNav   : false,
		slideshowSpeed : 5000
	})
});
$(function() {
	var $charMarquee = $("#charMarquee");
	var charMarqueeH = $charMarquee.outerHeight();
	var charLength = $("#charMarquee li").length;
	console.log(charLength);
	$("#marquee_prev_btn").css({
		top: (charMarqueeH-100)/2
	});
	$("#marquee_next_btn").css({
		top: (charMarqueeH-100)/2
	});
	if (charLength<=5) {
		$(".character-caroul-ctrl").hide();
		$("ul.character-caroul-list").css({
			width: 'auto',
			display: 'table',
			margin: 'auto'
		});
	};

 //     var dis = $('.character-item').outerHeight();
 //     $("#charMarquee").scrollbox({
 //               // distance: dis,
 //               speed: 60,
 //               direction: 'h'
 //          })
 //     $('#marquee_prev_btn').click(function () {
 //          $('#charMarquee').trigger('backward');
 //     });
 //     $('#marquee_next_btn').click(function () {
 //          $('#charMarquee').trigger('forward');
 //     });

     // $("#netAssetValuePanel").hide();
    $("#netAssetValueBtn").click(function() {
    	isOpen($("#netAssetValueBar"), $("#netAssetValueBar.open"));
    	$("#netAssetValuePanel").slideToggle(400);
    });
    // $("#netAssetValueBar")
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
