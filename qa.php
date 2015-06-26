<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>常見問題 | <?php echo $webTitle; ?></title>

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

<body class="service_page serviceCnt">

<?php
//app
  include_once INC_PATH.'header.php';
 ?>
 <div id="bannerTrigger"></div>
<section id="pageBanner" class="banner" style="background-image: url('<?php path_au('img'); ?>banner-service.jpg')">
	
</section>

<main class="">
	<section class="row1">
		<div class="wrapper small">
			<h2 class="title">
				<img src="<?php path_au('img'); ?>title-qa.png" alt="" class="temporary">
			</h2>
		</div>
	</section>
	<section class="fullbg row2 serviceCnt-wrap faq-wrap">
		<div class="bg"></div>
		<div class="wrapper">
			<div id="infTab" class="faq-container serviceCnt-container tab_block cf">
				<div class="row1 cf">
					<div id="tabsMarquee" class="faq-tabs-wrap left">
						<ul class="tabs faq-tabs cf">
						    <li> <a href="#tab1" id="" class="txt-2">開戶說明</a></li>
						    <li> <a href="#tab2" id="" class="txt-2">基金交易</a></li>
						    <li> <a href="#tab3" id="" class="txt-2">異動項目</a></li>
						    <li> <a href="#tab4" id="" class="txt-2">基金知識</a></li>
						    <li> <a href="#tab5" id="" class="txt-2">其他問題</a></li>
						    <li> <a href="#tab6" id="" class="txt-2">自訂問題1</a></li>
						</ul>
					</div>
				    <div class="faq-tabs-change right">
				    	<div id="marquee_prev_btn" class="btn btn-faq-tabs-prev faq-tabs-btn left">
				    		<i class="fa fa-caret-down"></i>
				    	</div>
				    	<div id="marquee_next_btn" class="btn btn-faq-tabs-next faq-tabs-btn left">
				    		<i class="fa fa-caret-up"></i>
				    	</div>
				    </div>
				</div>
				<div class="row2 tab_container">
					<!--  #tab1 .tab_content  START  !!  -->
					<div id="tab1" class="tab_content">
					   <section class="mod mod-tab_cnt">
					        <!-- 內容 -->
							<ul class="faq-list cf">
								<li class="faq-item">
									<h3 class="faq-item-q">
										<span class="col">Q 01：</span>
										<span class="col">開戶需準備哪些文件？開戶需準備哪些文件？開戶需準備哪些文件？開戶需準備哪些文件？開戶需準備哪些文件？</span>
										<i class="fa fa-caret-down"></i>
									</h3>
									<div class="faq-item-a">
									<!-- 圖文編輯器 -->
										<p>只要填妥相關表格以及檢附應附文件即可辦理，並無身分限制。<br>
											身分證、第二證件、印鑑、存摺封面影本。<br>
											開戶書上一共有4個原留印鑑處，2個親簽處。</p>
										<p>非本國國人(無台灣身分證或居留證)或非本國企業(無台灣營業登記)無法申購基金。如為本國企業、</p>
										<p>本國國人在境外設置分公司(營登在台灣) 或外派人員(有台灣身分證明)可透過以下方式申購 :<br>
											(1)至官網下載開戶資料，填妥後郵寄回官網上之地址。<br>
											(2) 來電客服專線02-3765-3688。如辦理定期定額，需先填開戶約定書後，再加填「定期定額申請書」。</p>
										<p>A、開戶契約文件<br>
											B、身分證正反面影本(或外國人有效居留証影本)<br>
											C、第二證件影本：健保卡、駕照（擇一提供）<br>
											A、受益人印鑑<br>
											B、受益人買回匯款帳戶存摺封面影本。<br>
											C、七十歲以上受益人</p>
										<p>備　註<br>
										● 開戶契約文件：<br>
										1.勾選同意開戶暨傳真交易約定條款<br>
										2.勾選是否同意適合度分析表評估結果<br>
										3.受益人原留印鑑<br>
										●存摺封面影本：<br>
										如無摺需檢附以茲證明之文件<br>
										●七十歲以上受益人：<br>
										加填「70歲以上受益人主動開戶聲明書」<br>
										未滿20歲之未成年人<br>
										A、開戶契約文件<br>
										B、身分證正反面影本（若無，請檢附戶口名簿或近三個月之戶籍謄本影本）。<br>
										C、第二證件影本：健保卡、駕照（擇一提供）。<br>
										D、法定代理人雙方之身份證正反面影本及第二證件影本。</p>
									</div>
								</li>
								<li class="faq-item">
									<h3 class="faq-item-q">
										<span class="col">Q 02：</span>
										<span class="col">如何開戶？</span>
										<i class="fa fa-caret-down"></i>
									</h3>
									<div class="faq-item-a">
									<!-- 圖文編輯器 -->
										<p>請洽官網下載填妥開戶約定書後，將開戶約定書交至康和期貨經理事業基金事務部或郵寄正本至康和期貨經理事業。開戶文件須為正本不可傳真開戶。康和期經基金事務部收到開戶正本，會主動和客戶通知。</p>
									</div>
								</li>
								<li class="faq-item">
									<h3 class="faq-item-q">
										<span class="col">Q 03：</span>
										<span class="col">我想幫我子女準備教育基金，我可以幫我子女代為開戶嗎？</span>
										<i class="fa fa-caret-down"></i>
									</h3>
									<div class="faq-item-a">
									<!-- 圖文編輯器 -->
										<p>如子女未成年，基金商品適合度分析表由法定代理人之經驗填寫。父母為未成年子女之法定代理人，對於未成年子女之權利義務，依民法規定，除法律另有規定外，由父母共同行使或負擔。因此，為善盡公司義務，以及確保父母雙方的權利義務，需同時留存父母親雙方證件資料以及印鑑章。</p>
									</div>
								</li>
								<li class="faq-item">
									<h3 class="faq-item-q">
										<span class="col">Q 04：</span>
										<span class="col">開戶作業流程？</span>
										<i class="fa fa-caret-down"></i>
									</h3>
									<div class="faq-item-a">
									<!-- 圖文編輯器 -->
										<p>若您的開戶文件沒有問題，一般的開戶審核作業大約在3個工作天內，若您於開戶時有指定自動扣款帳戶（意即有附上「全國性繳費(稅)業務授權轉帳扣款申請書」），因該文件需經銀行核印，作業時間依各銀行實際作業而定，一般約需15~20個工作天。  </p>
									</div>
								</li>
							</ul>
					   </section>
					</div><!--  /#tab1 .tab_content  END  !!  -->

					<!--  #tab2 .tab_content  START  !!  -->
					<div id="tab2" class="tab_content">
					   <section class="mod mod-tab_cnt">
					        <!-- 內容 -->
							<ul class="faq-list cf">
								<li class="faq-item">
									<h3 class="faq-item-q">
										<span class="col">Q 01：</span>
										<span class="col">基金交易問題1</span>
										<i class="fa fa-caret-down"></i>
									</h3>
									<div class="faq-item-a">
									<!-- 圖文編輯器 -->
										<p>基金交易回答1</p>
									</div>
								</li>
								<li class="faq-item">
									<h3 class="faq-item-q">
										<span class="col">Q 02：</span>
										<span class="col">基金交易問題2</span>
										<i class="fa fa-caret-down"></i>
									</h3>
									<div class="faq-item-a">
									<!-- 圖文編輯器 -->
										<p>基金交易回答2</p>
									</div>
								</li>
								<li class="faq-item">
									<h3 class="faq-item-q">
										<span class="col">Q 03：</span>
										<span class="col">基金交易問題3</span>
										<i class="fa fa-caret-down"></i>
									</h3>
									<div class="faq-item-a">
									<!-- 圖文編輯器 -->
										<p>基金交易回答3</p>
									</div>
								</li>
							</ul>
					   </section>
					</div><!--  /#tab2 .tab_content  END  !!  -->

					<!--  #tab3 .tab_content  START  !!  -->
					<div id="tab3" class="tab_content">
					   <section class="mod mod-tab_cnt">
					        <!-- 內容 -->
							<ul class="faq-list cf">
								<li class="faq-item">
									<h3 class="faq-item-q">
										<span class="col">Q 01：</span>
										<span class="col">異動項目問題1</span>
										<i class="fa fa-caret-down"></i>
									</h3>
									<div class="faq-item-a">
									<!-- 圖文編輯器 -->
										<p>異動項目回答1</p>
									</div>
								</li>
								<li class="faq-item">
									<h3 class="faq-item-q">
										<span class="col">Q 02：</span>
										<span class="col">異動項目問題2</span>
										<i class="fa fa-caret-down"></i>
									</h3>
									<div class="faq-item-a">
									<!-- 圖文編輯器 -->
										<p>異動項目回答2</p>
									</div>
								</li>
								<li class="faq-item">
									<h3 class="faq-item-q">
										<span class="col">Q 03：</span>
										<span class="col">異動項目問題3</span>
										<i class="fa fa-caret-down"></i>
									</h3>
									<div class="faq-item-a">
									<!-- 圖文編輯器 -->
										<p>異動項目回答3</p>
									</div>
								</li>
							</ul>
					   </section>
					</div><!--  /#tab3 .tab_content  END  !!  -->

					<!--  #tab4 .tab_content  START  !!  -->
					<div id="tab4" class="tab_content">
					   <section class="mod mod-tab_cnt">
					        <!-- 內容 -->
							<ul class="faq-list cf">
								<li class="faq-item">
									<h3 class="faq-item-q">
										<span class="col">Q 01：</span>
										<span class="col">基金知識問題1</span>
										<i class="fa fa-caret-down"></i>
									</h3>
									<div class="faq-item-a">
									<!-- 圖文編輯器 -->
										<p>基金知識回答1</p>
									</div>
								</li>
								<li class="faq-item">
									<h3 class="faq-item-q">
										<span class="col">Q 02：</span>
										<span class="col">基金知識問題2</span>
										<i class="fa fa-caret-down"></i>
									</h3>
									<div class="faq-item-a">
									<!-- 圖文編輯器 -->
										<p>基金知識回答2</p>
									</div>
								</li>
								<li class="faq-item">
									<h3 class="faq-item-q">
										<span class="col">Q 03：</span>
										<span class="col">基金知識問題3</span>
										<i class="fa fa-caret-down"></i>
									</h3>
									<div class="faq-item-a">
									<!-- 圖文編輯器 -->
										<p>基金知識回答3</p>
									</div>
								</li>
							</ul>
					   </section>
					</div><!--  /#tab4 .tab_content  END  !!  -->
					<!--  #tab5 .tab_content  START  !!  -->
					<div id="tab5" class="tab_content">
					   <section class="mod mod-tab_cnt">
					        <!-- 內容 -->
							<ul class="faq-list cf">
								<li class="faq-item">
									<h3 class="faq-item-q">
										<span class="col">Q 01：</span>
										<span class="col">其他問題問題1</span>
										<i class="fa fa-caret-down"></i>
									</h3>
									<div class="faq-item-a">
									<!-- 圖文編輯器 -->
										<p>其他問題回答1</p>
									</div>
								</li>
								<li class="faq-item">
									<h3 class="faq-item-q">
										<span class="col">Q 02：</span>
										<span class="col">其他問題問題2</span>
										<i class="fa fa-caret-down"></i>
									</h3>
									<div class="faq-item-a">
									<!-- 圖文編輯器 -->
										<p>其他問題回答2</p>
									</div>
								</li>
								<li class="faq-item">
									<h3 class="faq-item-q">
										<span class="col">Q 03：</span>
										<span class="col">其他問題問題3</span>
										<i class="fa fa-caret-down"></i>
									</h3>
									<div class="faq-item-a">
									<!-- 圖文編輯器 -->
										<p>其他問題回答3</p>
									</div>
								</li>
							</ul>
					   </section>
					</div><!--  /#tab5 .tab_content  END  !!  -->
					<!--  #tab6 .tab_content  START  !!  -->
					<div id="tab6" class="tab_content">
					   <section class="mod mod-tab_cnt">
					        <!-- 內容 -->
							<ul class="faq-list cf">
								<li class="faq-item">
									<h3 class="faq-item-q">
										<span class="col">Q 01：</span>
										<span class="col">自訂問題1問題1</span>
										<i class="fa fa-caret-down"></i>
									</h3>
									<div class="faq-item-a">
									<!-- 圖文編輯器 -->
										<p>自訂問題1回答1</p>
									</div>
								</li>
								<li class="faq-item">
									<h3 class="faq-item-q">
										<span class="col">Q 02：</span>
										<span class="col">自訂問題1問題2</span>
										<i class="fa fa-caret-down"></i>
									</h3>
									<div class="faq-item-a">
									<!-- 圖文編輯器 -->
										<p>自訂問題1回答2</p>
									</div>
								</li>
								<li class="faq-item">
									<h3 class="faq-item-q">
										<span class="col">Q 03：</span>
										<span class="col">自訂問題1問題3</span>
										<i class="fa fa-caret-down"></i>
									</h3>
									<div class="faq-item-a">
									<!-- 圖文編輯器 -->
										<p>自訂問題1回答3</p>
									</div>
								</li>
							</ul>
					   </section>
					</div><!--  /#tab6 .tab_content  END  !!  -->
				</div>

			</div>
<!-- 			<div class="" style="margin: 1em auto 5em;">
				<img src="<?php //path_au('img'); ?>pageNum.png" alt="" class="temporary">
			</div> -->
		</div>
<div class="" style="display: table; margin: auto; width: 134px;"><a href="service.php" class="txt_img-goService hide_txt btn-goService btn link-2">回客服中心</a></div>
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
<script>
$(function() {

function AnimateRotate(el, speed, d){
    var elem = el, dur = speed;

    $({deg: 0}).animate({deg: d}, {
        duration: dur,
        step: function(now){
            elem.css({
                 transform: "rotate(" + now + "deg)"
            });
        }
    });
}

	var tabs = $("ul.tabs");
	var tabsH = $("ul.tabs").height();
	// var tabsH2 = tabsH*-1;
	tabs.css('top', '0');
	var tabsPrev = $(".btn-faq-tabs-prev");
	var tabsNext = $(".btn-faq-tabs-next");
	var pos = 40;

	tabsPrev.click(function(event) {
		if (tabs.css('top') == tabsH/2*-1+"px") {
			console.log('yoyo');
			// return false;
		}else {
			tabs.css({
				top: "-=40"
			});
		};
	});
	tabsNext.click(function(event) {
		if (tabs.css('top') == 0+"px") {
			console.log('yoyo');
			// return false;
		}else {
			tabs.css({
				top: "+=40"
			});
		};
	});

	$(".faq-item-a").hide();

	$(".faq-item-q").click(function() {


		$('.faq-item-a').slideUp('600');

		if (!$(this).parent(".faq-item").hasClass('open')) {
			$(".faq-item").removeClass('open');
			$(this).parent(".faq-item").addClass('open');
			$(this).next('.faq-item-a').slideDown('600');
		}else {
			$(".faq-item").removeClass('open');
			
		};

		if ($(this).parent(".faq-item").hasClass('open')) {
			AnimateRotate($(this).children("i.fa"), 300, 180);
		}else {
			AnimateRotate($(this).children("i.fa"), 300, 0);
		};


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
