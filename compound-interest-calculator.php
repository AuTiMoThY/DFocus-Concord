<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title>投資報酬率計算機 | <?php echo $webTitle; ?></title>

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
<body class="about_page aboutCPCS">

<?php
//app
  include_once INC_PATH.'header.php';
 ?>
<div id="bannerTrigger"></div>
<section id="pageBanner" class="banner" style="background-image: url('<?php path_au('img'); ?>banner-aboutCPCS.jpg')">
	
</section>

<main class="">
	<section class="row">
		<div class="wrapper">
			<div>
			  <iframe src="http://widgets.calculatestuff.com/?token=cb3c3e7c1401" frameborder="0" width="100%" height="500" scrolling="no" style="border:none;" id="cb3c3e7c1401"></iframe>
			  <script type="text/javascript">
			    (function() {
			      var s = document.createElement("script");
			      s.type = "text/javascript";
			      s.async = true;
			      s.src="http://cdn.calculatestuff.com/resizer.js";
			      (document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(s);
			    })();
			   </script>
			</div>
		</div>
	</section>


	<section class="row3 cp_computer">
		<div class="wrapper cf">
			<div class="col-2">
				<div class="row1">
					<div class="cp_computer-pic1 pic">
						<img src="<?php path_au('img'); ?>cp-pic1.jpg" alt="">
					</div>
				</div>
				<div class="row2 cp_computer-intro">
					<div class="content">
						<h3 class="txtImg_title-title-cpComputer2 hide_txt <?php isPhone('mobile_title'); ?> title-2">投資報酬率計算機</h3>
						<p class="txt-1_3">這個投資報酬率計算機(持有期間報酬率計算機)目的是幫你計算一個投資的投資報酬率，或說持有期間報酬率。它有四個變數可以輸入，然後計算機會算出這段期間的投資報酬率 (持有期間報酬率)，你需要輸入原始投資金額，最後取出的贖回金額，期間所有領回的利息或現金股息，以及以年計算的投資期間，計算機會算出投資期間的年化報酬率。<br>這個投資報酬率計算機的假設是，期間所有領回的利息或現金股息是平均於每年領回，例如投資期間十年，合計領回100萬元，則計算的方式是假定每年都平均地領回10萬元的利息或現金股息，如果實際上不是平均地領回，則本計算機的結果只能當作參考，領回的速度比平均值越快，則表示該投資的實際投資報酬率會比本計算機的結果還要略好。<br>如果是用來做投資計畫的評估時，則當投資報酬率計算機所得的結果，報酬率低於取得的資金成本時，則該投資計畫就不值得去做，如果高於資金機會成本時，還應該衡量投資期限的長短，以及可能的失敗風險，來決定投資計畫的報酬率是否有足夠的風險溢價來投資。</p>
						<a href="compound-interest-calculator.php" class="btn btn-goComputer txt-1 link-2">投資報酬計算機</a>
						<!-- <a href="http://www.pjhuang.tw/72rule/annuity_rate.php" class="btn btn-goComputer txt-1 link-2" target="_blank">投資報酬計算機</a> -->
						<!-- <div class="cp_computer-pic1 pic" style="width: 590px; height:485px;">
							<iframe src="http://www.pjhuang.tw/72rule/annuity_rate.php" frameborder="0" style="width:100%; height: 100%;"></iframe>
						</div> -->
					</div>
				</div>
				<div class="row3">
					<div class="cp_computer-pic3 pic">
						<img src="<?php path_au('img'); ?>cp-pic3.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="col-2">
				<div class="row1 cp_computer-intro">
					<div class="content">
						<h3 class="txtImg_title-title-cpComputer1 hide_txt <?php isPhone('mobile_title'); ?> title-2">讓我們撐起您的資產保護傘</h3>
						<p class="txt-1_3">在企業主中，可投資資產規模越大，年齡也隨之增長，1億元以上資產的大型企業主絕大多數是45歲以上的人士。在高凈值人群的財富目標中，“財富傳承”和“子女教育”已經成為繼“財富的繼續積累”和“追求高品質生活”之后的第三大目標。當資產愈多，分散投資的重要性就更大，快來試算您的投資目標，讓我們撐起您的資產保護傘。</p>
						<a href="computer1.php" class="btn btn-goComputer txt-1 link-2">理財規劃試算器</a>
						<!-- <a href="http://www.moneydj.com/funddj/yb/yp503003.djhtm" class="btn btn-goComputer txt-1 link-2" target="_blank">理財規劃試算器</a> -->
					</div>
				</div>
				<div class="row2">
					<div class="cp_computer-pic1 pic" >
						<img src="<?php path_au('img'); ?>cp-pic2.jpg" alt="">
					</div>
				</div>
				<div class="row3 cp_computer-intro">
					<div class="content">
						<h3 class="txtImg_title-title-cpComputer3 hide_txt <?php isPhone('mobile_title'); ?> title-2">定期定額，小錢也能立大功</h3>
						<p class="txt-1_3">單筆投資和定期定額並不是二選一，也沒有那一個比較好，應該互相搭配，相輔相成，更能早日達到理財目標。 您應該看自己的風險／報酬偏好度及願意付出的投資額度而定。<br>
						投資基金已將投資風險分散，「定期定額投資」確實能進一步降低投資風險，雖然報酬率在多頭市場時比不上單筆投資，但必須提醒您的是，一般人實在很難精確掌握買賣時點、在最低點買進，最高點賣出。<br>因此如果採定期定額投資，就不必考慮進場時點，節省花費在投資判斷的心力上，因此非常適合以中長期獲利為目標、為累積子女教育基金、退休金的投資人。<br>對剛起步的投資人而言，對市場及投資理財都不甚了解，從定期定額入門不失為一個好方法。一方面無須耗費精神判斷時點，一方面又可有效分散風險，追求較穩健的長期獲利. 現在就開始計畫您的定期定額吧。</p>
						<a href="computer2.php" class="btn btn-goComputer txt-1 link-2">定期定額試算器</a>
						<!-- <a href="http://www.moneydj.com/funddj/yb/yp503002.djhtm" class="btn btn-goComputer txt-1 link-2" target="_blank">定期定額試算器</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="" class="fullbg row4">
		<div class="bg"></div>
		<div class="wrapper">
			<a href="about.php" class="btn btn-goback2 link-2 txt-1">回事業介紹</a>
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
