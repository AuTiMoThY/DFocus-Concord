<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';

?>
<title>康和期經產品介紹 | <?php echo $webTitle; ?></title>

<?php
// -------------------------------
// SEO
// CSS
// Script in the HEAD
// -------------------------------
  include_once INC_PATH.'head.php';
 ?>

<link rel="stylesheet" href="amstockchart/amcharts/style.css" type="text/css">
<script src="amstockchart/amcharts/amcharts.js" type="text/javascript"></script>
<script src="amstockchart/amcharts/serial.js" type="text/javascript"></script>
<script src="amstockchart/amcharts/amstock.js" type="text/javascript"></script>
<script>
AmCharts.loadJSON = function(url) {
  // create the request
  if (window.XMLHttpRequest) {
    // IE7+, Firefox, Chrome, Opera, Safari
    var request = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    var request = new ActiveXObject('Microsoft.XMLHTTP');
  }

  // load it
  // the last "false" parameter ensures that our code will wait before the
  // data is loaded
  request.open('GET', url, false);
  request.send();

  // parse adn return the output
  return eval(request.responseText);
};
</script>
<?php
//app
  include_once INC_PATH.'social.php';
 ?>

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="products_page prodCnt">

<?php
//app
  include_once INC_PATH.'header.php';
 ?>

 <div id="bannerTrigger"></div>
<section id="pageBanner" class="banner" style="background-image: url('<?php path_au('img'); ?>banner-chatroom.jpg')">
	
</section>

<main class="">
	<section class="row1">
		<div class="wrapper small">
			<hgroup>
				<h1 class="pdt-title txt-3 text-center">Futures Trust Fund</h1>
				<h2 class="pdt-subtitle txt-4 text-center">多空成長期貨信託基金</h2>
			</hgroup>
		</div>
	</section>
	<section class="fullbg row2">
		<div class="bg"></div>
		<div class="wrapper">
			<div id="" class="faq-container serviceCnt-container tab_block cf">
				<div class="row1 cf">
					<div id="tabsMarquee" class="faq-tabs-wrap left">
						<ul class="tabs faq-tabs cf">
						    <li> <a href="products_cnt.php?products=0" id="" class="txt-2" title="多空成長期貨信託基金">多空成長期貨信託基金</a></li>
						    <li> <a href="https://fm.concordfutures.com.tw/fundM/Login.aspx" id="" class="txt-2" title="康和期經特定投資人園地" target="_blank">康和期經特定投資人園地</a></li>
						    <li> <a href="javascript:alert('第三項產品連結');" id="" class="txt-2" title="基金產品三">基金產品三</a></li>
						    <li> <a href="javascript:alert('第四項產品連結');" id="" class="txt-2" title="基金產品四">基金產品四</a></li>
						    <li> <a href="javascript:alert('第五項產品連結');" id="" class="txt-2" title="基金產品五">基金產品五</a></li>
						    <li> <a href="javascript:alert('第六項產品連結');" id="" class="txt-2" title="基金產品六">基金產品六</a></li>
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
			</div>
			<div class="cnt editorDF">
				<div id="chartdiv" style="width:90%; height:600px; margin:auto;"></div>
				<div class="net_asset_value-cnt cf">
					<div class="col-2">
						<table class="table1">
							<tr>
								<th>日期</th>
								<th>淨值</th>
							</tr>
							<tr>
								<td>2015-07-01</td>
								<td>10.190</td>
							</tr>
							<tr>
								<td>2015-06-30</td>
								<td>10.158</td>
							</tr>
							<tr>
								<td>2015-06-29</td>
								<td>10.125</td>
							</tr>
							<tr>
								<td>2015-06-26</td>
								<td>10.223</td>
							</tr>
							<tr>
								<td>2015-06-25</td>
								<td>10.225</td>
							</tr>
							<tr>
								<td>2015-06-24</td>
								<td>10.199</td>
							</tr>
							<tr>
								<td>2015-06-23</td>
								<td>10.198</td>
							</tr>
							<tr>
								<td>2015-06-22</td>
								<td>10.161</td>
							</tr>
						</table>
						<table class="table1-1">
							<tr>
								<th>日期</th>
								<th>淨值</th>
							</tr>
							<tr>
								<td>2015-06-18</td>
								<td>10.169</td>
							</tr>
							<tr>
								<td>2015-06-17</td>
								<td>10.174</td>
							</tr>
							<tr>
								<td>2015-06-16</td>
								<td>10.179</td>
							</tr>
							<tr>
								<td>2015-06-15</td>
								<td>10.210</td>
							</tr>
							<tr>
								<td>2015-06-12</td>
								<td>10.240</td>
							</tr>
							<tr>
								<td>2015-06-11</td>
								<td>10.221</td>
							</tr>
							<tr>
								<td>2015-06-10</td>
								<td>10.219</td>
							</tr>
							<tr>
								<td>2015-06-09</td>
								<td>10.251</td>
							</tr>
						</table>
					</div>
					<div class="col-2">
						<table class="table2">
							<tr>
								<th colspan="2">康和多空成長期貨信託基金小檔案</th>
							</tr>
							<tr>
								<td>基金型態</td>
								<td>開放式一般型期貨信託基金</td>
							</tr>
							<tr>
								<td>投資地區</td>
								<td>全球期貨交易國內有價證劵</td>
							</tr>
							<tr>
								<td>保管銀行</td>
								<td>永豐商業銀行</td>
							</tr>
							<tr>
								<td>計價幣別</td>
								<td>新台幣</td>
							</tr>
							<tr>
								<td>申購淨值計算日</td>
								<td>T日</td>
							</tr>
							<tr>
								<td>買回淨值計算日</td>
								<td>T+1營業日</td>
							</tr>
							<tr>
								<td>買回價金計算日</td>
								<td>T+5營業日</td>
							</tr>
							<tr>
								<td>基金經理人</td>
								<td>林豪威</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="" style="margin: 1em auto 5em;">
				<a href="products.php" class="txt_img-goProdList btn-getmore hide_txt"></a>
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
<script>

$(function() {
	var tabs = $("ul.tabs");
	var tabsH = $("ul.tabs").height();
	// var tabsH2 = tabsH*-1;
	tabs.css({'top': '0'});
	var tabsPrev = $("#marquee_prev_btn");
	var tabsNext = $("#marquee_next_btn");
	var pos = 40;

	tabsPrev.click(function() {
		if (tabs.css('top') == tabsH/2*-1+"px") {
			console.log('yoyo');
			// return false;
		}else {
			tabs.css({
				top: "-=40"
			});
		};
	});
	tabsNext.click(function() {
		if (tabs.css('top') == 0+"px") {
			console.log('yoyo');
			// return false;
		}else {
			tabs.css({
				top: "+=40"
			});
		};
	});

});



AmCharts.ready(function() {
    var chart = new AmCharts.AmStockChart();
    chart.pathToImages = "amstockchart/amcharts/images/";
	chart.dateFormat = "YYYY-MM-DD";
	chart.addClassNames = true;
	chart.categoryField = "year";

	//	撈資料可參考:
	//	1.amstockchart\tutorial_assets_external-data
	//	2.http://www.amcharts.com/tutorials/using-php-to-hook-up-charts-to-mysql-data-base/
	var chartData = AmCharts.loadJSON('dist/product_chart_data.php');

    var dataSet = new AmCharts.DataSet();
    dataSet.color = "#c3c3c3";
    dataSet.dataProvider = chartData;
    dataSet.fieldMappings = [{fromField:"val", toField:"value"},{fromField:"dateCol", toField:"dateCol"}];
    dataSet.categoryField = "date";
    dataSet.dateFormat = "YYYY-MM-DD";
    chart.dataSets = [dataSet];

	// PANELS ///////////////////////////////////////////
	// first stock panel
	var stockPanel1 = new AmCharts.StockPanel();
	stockPanel1.showCategoryAxis = false;
	stockPanel1.title = "淨值走勢圖";
	stockPanel1.percentHeight = 70;

	// graph of first stock panel
	var graph1 = new AmCharts.StockGraph();
	graph1.valueField = "value";
	graph1.type = "smoothedLine";
	graph1.title = "每日淨值";
	graph1.fillAlphas = 0.8;
	graph1.lineThickness = 2;
	graph1.dateFormat = "YYYY-MM-DD";
	graph1.stackable = false;
	graph1.bullet = "round";
	graph1.bulletBorderColor = "#CE7077";
	graph1.bulletBorderAlpha = 1;
	graph1.bulletBorderThickness = 3;
	graph1.balloonText = "[[dateCol]]:<div style='margin-bottom:30px;text-shadow: 2px 2px rgba(0, 0, 0, 0.1); font-weight:200;font-size:30px; color:#000'>[[value]]</div>";
	graph1.comparable = true;
	graph1.compareField = "value";
	graph1.compareGraphBalloonText = "淨值:<b>[[value]]</b>";
	graph1.compareGraphBullet =  "round";
	stockPanel1.addStockGraph(graph1);

	// create stock legend
	var stockLegend1 = new AmCharts.StockLegend();
	stockLegend1.valueTextRegular = "[[value]]";
	// stockLegend1.markerType = "none";
	stockLegend1.periodValueTextComparing =  "[[percents.value.close]]%";
	stockLegend1.periodValueTextRegular =  "[[value]]";
	stockPanel1.stockLegend = stockLegend1;

	// set panels to the chart
	chart.panels = [stockPanel1];

	var categoryAxis = new AmCharts.CategoryAxis();
	categoryAxis.gridAlpha = 0.07;
	categoryAxis.axisColor = "#DADADA";
	categoryAxis.startOnAxis = true;
	categoryAxis.tickLength = 0;
	categoryAxis.parseDates = true;
	categoryAxis.minPeriod = "YYYY-MM-DD";
	chart.chartCategoryAxis = categoryAxis;



    var panelsSettings = new AmCharts.PanelsSettings();
    panelsSettings.startDuration = 1;
    chart.panelsSettings = panelsSettings;


    var chartCursor = new AmCharts.ChartCursor();
	chartCursor.cursorAlpha = 1;
	chartCursor.zoomable = false;
	chartCursor.cursorColor = "#FFFFFF";
	chartCursor.categoryBalloonColor = "#8d83c8";
	chartCursor.fullWidth = true;
	chartCursor.categoryBalloonDateFormat = "YYYY";
	chartCursor.balloonPointerOrientation = "vertical";
	chart.chartCursor = chartCursor;


    var chartCursorSettings = new AmCharts.ChartCursorSettings();
    chartCursorSettings.valueBalloonsEnabled = true;
    chartCursorSettings.categoryBalloonDateFormats = [{period:"YYYY", format:"YYYY"}, {period:"MM", format:"YYYY-MM"}, {period:"WW", format:"YYYY-MM-DD"}, {period:"DD", format:"YYYY-MM-DD"}, {period:"hh", format:"JJ:NN"}, {period:"mm", format:"JJ:NN"}, {period:"ss", format:"JJ:NN:SS"}, {period:"fff", format:"JJ:NN:SS"}]
    // fullWidth = true;
    chart.chartCursorSettings = chartCursorSettings;

	// OTHER SETTINGS ////////////////////////////////////
	var scrollbarSettings = new AmCharts.ChartScrollbarSettings();
	scrollbarSettings.graph = graph1;
	scrollbarSettings.color = "#000";
	scrollbarSettings.updateOnReleaseOnly = true;
	// scrollbarSettings.position = "top";
	chart.chartScrollbarSettings = scrollbarSettings;

    // 
    var periodSelector = new AmCharts.PeriodSelector();
    periodSelector.periods = [{period:"MM", count:1, label:"1 month"},
                              {period:"YYYY", count:1, label:"1 year"},
                              {period:"YTD", label:"YTD"},
                              {period:"MAX", label:"MAX"}];
	periodSelector.dateFormat = "YYYY-MM-DD";
    chart.periodSelector = periodSelector;


    chart.write("chartdiv");
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
