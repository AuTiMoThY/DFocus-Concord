<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
	include_once 'dist/download_data.php';

$download1 = $download[0]; //開戶文件
$download2 = $download[1]; //交易文件
$download3 = $download[2]; //異動文件
$download4 = $download[3]; //公開資料

?>
<title>文件下載 | <?php echo $webTitle; ?></title>

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
			<hgroup class="txtImg_title-title-download">
				<h1 class="hidden" data-lang="en">Downloads</h1>
				<h2 class="hidden" data-lang="tw">文件下載</h2>
			</hgroup>
		</div>
	</section>
	<section class="fullbg row2 serviceCnt-wrap download-wrap">
		<div class="bg"></div>
		<div class="wrapper">
			<div id="infTab" class="download-container serviceCnt-container tab_block">
				<div class="row1">
				    <ul class="tabs cf">
				        <li> <a href="#tab1" id="" class="txt-2">開戶文件</a></li>
				        <li> <a href="#tab2" id="" class="txt-2">交易文件</a></li>
				        <li> <a href="#tab3" id="" class="txt-2">異動文件</a></li>
				        <li> <a href="#tab4" id="" class="txt-2">公開資料</a></li>
				    </ul>
				</div>
				<div class="row2 tab_container">
					<!--  #tab1 .tab_content  START  !!  -->
					<!-- 開戶文件 -->
					<div id="tab1" class="tab_content">
					   <section class="mod mod-tab_cnt">
					        <!-- 內容 -->
							<ul class="download-list cf">
								<?php // 套程式時，可將此區塊移除。
								foreach ($download1 as $key => $value) { ?>
								<li class="download-item"><a href="<?php echo $download1[$key]['url']; ?>" target="_blank">
									<div class="download-title"><?php echo $download1[$key]['title']; ?></div>
									<p class="txt-1_4"><?php echo $download1[$key]['txt']; ?></p>
									<i class="icon icon-download"></i>
								</a></li>
								<?php } ?>
<!-- 							HTML
								<li class="download-item"><a href="" target="_blank">
									<div class="download-title">定期定額懶人包</div>
									<p class="txt-1_4">定期定額開戶-全文件(壓縮檔)</p>
									<i class="icon icon-download"></i>
								</a></li>
								<li class="download-item"><a href="" target="_blank">
									<div class="download-title">定期定額懶人包</div>
									<p class="txt-1_4">定期定額開戶-全文件(壓縮檔)</p>
									<i class="icon icon-download"></i>
								</a></li>
								<li class="download-item"><a href="" target="_blank">
									<div class="download-title">定期定額懶人包</div>
									<p class="txt-1_4">定期定額開戶-全文件(壓縮檔)</p>
									<i class="icon icon-download"></i>
								</a></li> -->
							</ul>
					   </section>
					</div><!--  /#tab1 .tab_content  END  !!  -->

					<!--  #tab2 .tab_content  START  !!  -->
					<!-- 交易文件 -->
					<div id="tab2" class="tab_content">
					   <section class="mod mod-tab_cnt">
					        <!-- 內容 -->
							<ul class="download-list cf">
								<?php // 套程式時，可將此區塊移除。
								foreach ($download2 as $key => $value) { ?>
								<li class="download-item"><a href="<?php echo $download2[$key]['url']; ?>" target="_blank">
									<div class="download-title"><?php echo $download2[$key]['title']; ?></div>
									<p class="txt-1_4"><?php echo $download2[$key]['txt']; ?></p>
									<i class="icon icon-download"></i>
								</a></li>
								<?php } ?>
<!-- 							HTML
								<li class="download-item"><a href="" target="_blank">
									<div class="download-title">交易文件</div>
									<p class="txt-1_4">交易文件(壓縮檔)</p>
									<i class="icon icon-download"></i>
								</a></li> -->
							</ul>
					   </section>
					</div><!--  /#tab2 .tab_content  END  !!  -->

					<!--  #tab3 .tab_content  START  !!  -->
					<!-- 異動文件 -->
					<div id="tab3" class="tab_content">
					   <section class="mod mod-tab_cnt">
					        <!-- 內容 -->
							<ul class="download-list cf">
								<?php // 套程式時，可將此區塊移除。
								foreach ($download3 as $key => $value) { ?>
								<li class="download-item"><a href="<?php echo $download3[$key]['url']; ?>" target="_blank">
									<div class="download-title"><?php echo $download3[$key]['title']; ?></div>
									<p class="txt-1_4"><?php echo $download3[$key]['txt']; ?></p>
									<i class="icon icon-download"></i>
								</a></li>
								<?php } ?>
<!-- 							HTML
								<li class="download-item"><a href="" target="_blank">
									<div class="download-title">異動文件</div>
									<p class="txt-1_4">異動全文件(壓縮檔)</p>
									<i class="icon icon-download"></i>
								</a></li> -->
							</ul>
					   </section>
					</div><!--  /#tab3 .tab_content  END  !!  -->

					<!--  #tab4 .tab_content  START  !!  -->
					<!-- 公開資料 -->
					<div id="tab4" class="tab_content">
					   <section class="mod mod-tab_cnt">
					        <!-- 內容 -->
							<ul class="download-list cf">
								<?php // 套程式時，可將此區塊移除。
								foreach ($download4 as $key => $value) { ?>
								<li class="download-item"><a href="<?php echo $download4[$key]['url']; ?>" target="_blank">
									<div class="download-title"><?php echo $download4[$key]['title']; ?></div>
									<p class="txt-1_4"><?php echo $download4[$key]['txt']; ?></p>
									<i class="icon icon-download"></i>
								</a></li>
								<?php } ?>
<!-- 							HTML
								<li class="download-item"><a href="http://fm.concordfutures.com.tw/adimages/104Q1%E5%BA%B7%E5%92%8C%E5%A4%9A%E7%A9%BA%E6%88%90%E9%95%B7%E5%85%AC%E9%96%8B%E8%AA%AA%E6%98%8E%E6%9B%B8.pdf" target="_blank">
									<div class="download-title">康和多空成長期貨信託基金</div>
									<p class="txt-1_4">公開說明書(PDF)</p>
									<i class="icon icon-download"></i>
								</a></li> -->
							</ul>
					   </section>
					</div><!--  /#tab4 .tab_content  END  !!  -->
				</div>

			</div>

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
	
	$(".download-item").hover(function() {
		$(this).find(".icon-download").addClass('animated').addClass('flip');
	}, function() {
		$(this).find(".icon-download").removeClass('animated');
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
