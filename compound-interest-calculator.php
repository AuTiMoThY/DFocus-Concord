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
	<section class="row1">
		<div class="wrapper small">
			<hgroup>
				<!-- <h1 class="pdt-title txt-3 text-center">Futures Fund</h1> -->
				<h2 class="pdt-subtitle txt-4 text-center">複利計算機</h2>
			</hgroup>
		</div>
	</section>
	<section class="">
		<div class="wrapper">
<div>
  <iframe src="http://widgets.calculatestuff.com/?token=f5ba8ec41415" frameborder="0" width="100%" height="500" scrolling="no" style="border:none;" id="f5ba8ec41415"></iframe>
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
<p class="txt-1_4" style="margin-top: 3em;margin-bottom: 3em;line-height: 2.3;">康和期經財富計算機就不同投資結果的可能性提供的預測或其他資料屬假設性質，僅為歷史資料模擬投資組合之結果並供說明使用，不代表投資組合之實際報酬率及未來績效保證，不同時間進行模擬操作，其結果亦可能不同。<br>
康和期經財富計算機所載或產生的任何資料並非亦不應視為或依賴為康和期經就任何個別基金或投資策略的投資或合適性而提供的投資意見、研究、建議或推薦。該等資料亦不構成對任何人投資於任何基金的邀約或邀請。康和期經計劃工具的設計是提供使用者在諮詢財富管理顧問意見時使用，不應依賴作投資決定的主要基礎。進行任何投資前，您應諮詢您的財富管理顧問。您應向您的財富管理顧問查詢任何您擬投資的策略及／或任何產品在您的所有情況下是否適合您。只有使用者及其相關的財富管理顧問方充分了解其情況，以作出符合情況的投資決定。<br>
康和期經投資計劃工具不保證帶來未來收益或防止本金虧損，亦不保證根據康和期經財富計算機建立的投資策略將會取得成功。根據康和期經財富計算機提供的資料所作出有關基金投資或落實資產配置的任何決定，僅為使用者經諮詢財富管理顧問後作出的決定。進行投資前，應仔細考慮基金的投資目標、風險因素，以及收費與開支。本文件及其他資料載於有關基金的公開說明書。相關產品資料概要可於康和期經網站（<a href="http://fm.concordfutures.com.tw/" class="tdu" target="_blank">http://fm.concordfutures.com.tw/</a>）索取。進行投資前，請詳閱基金公開說明書，特別是風險因素。本文所述的任何意見反映我們截至本文日期的判斷，可能因其後的狀況而改變。<br>
投資涉及風險，包括可能損失本金。過往業績並不代表將來的表現。<br>
所示資料僅為提供資料及說明用途，可予更改，並不代表實際帳戶。康和期經財富計算機所建立的分析的有效性部份取決於使用者按假設例子使用工具時輸入資料的準確性。實際投資結果可能不同。<br>
投資價值及收益可能波動，而且不獲保證。匯率變動可能導致投資價值升跌。投資人可能無法取回投資金額。個別股價／數據並不代表基金回報。<br>
康和期經財富計算機按「現狀」基礎提供。就工具（及任何其使用所引致的後果）而言，康和期經明確就所有的法定或其他保證作出免責（明示或暗示），包括但不限於所有保證或適銷性、特定目的或用途的合適性、準確性、完整性、原創性及／或非侵犯行為。在任何情況下，康和期經概不就任何與工具有關的索償、損毀、義務、責任或虧損負責，包括但不限於任何直接、間接、特別、附帶的、懲罰性及／或相應損失（包括損失利潤或本金）的任何責任。<br>
與康和期經財富計算機有關的基金僅為有關投資策略的可能產品例子，由康和期貨經理事業股份有限公司管理或擔任總代理機構。</p>
		</div>
	</section>

	<section id="" class="fullbg row4">
		<div class="bg"></div>
		<div class="wrapper">
			<a href="javascript:history.go(-1);" class="btn btn-goback2 link-2 txt-1">回上一頁</a>
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
