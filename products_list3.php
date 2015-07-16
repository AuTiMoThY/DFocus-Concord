<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
	include_once 'dist/chatroom_data.php';

$shownum = 6;

$p = isset($_GET["p"]) ? $p = $_GET["p"] : $p = 1;
$start = ($p-1)*$shownum;

// 總資料筆數
$total = count($chatroom);

// 總頁數
$maxPage = $total > 0 ? ceil($total/$shownum) : 1;

if ($p>$maxPage || $p<1 || !is_int($p*1) || !isset($_GET["p"])) {
	$p = 1;
	header("Location: products_list3.php?p={$p}");
}
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


<?php
//app
  include_once INC_PATH.'social.php';
 ?>

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="products_page">

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
			<header class="txtImg_title-title-chatroom chatroom <?php isPhone('mobile_title-group'); ?>">
				<h1 class="hidden <?php isPhone('mobile_title'); ?> title-1" data-lang="en">Advisory Chat Room</h1>
				<h2 class="hidden <?php isPhone('mobile_title'); ?> title-2" data-lang="tw">康和期顧相談室</h2>
			</header>
		</div>
	</section>
	<section class="fullbg row2">
		<div class="bg" style="position: relative;height: auto; padding-bottom:0;">
		<div class="wrapper">

			<div class="cnt">
				<ul class="chatroom-list cf">
				<?php 
					// foreach ($chatroom as $key => $value) {
						for ($i=$start; $i < $start+$shownum; $i++) { 
							if ($chatroom[$i]['index']!='') {
				?>
					<li class="chatroom-item">
						<div class="chatroom-during txt-3">
							<?php
								echo $chatroom[$i]['start_time']." ~ ";
								echo $chatroom[$i]['end_time'];
							?>
						</div>
						<div class="chatroom-pic pic">
							<img src="<?php echo $chatroom[$i]['pic']; ?>" alt="">
							<a href="chatroom_cnt.php?id=<?php echo $chatroom[$i]['index']; ?>" class="btn btn-gochatroomCnt txt-2_1">課程內容</a>
						</div>
						<div class="chatroom-block">
							<div class="chatroom-title txt-1_1">
								<?php echo $chatroom[$i]['title']; ?>
							</div>
							<div class="chatroom-lecturer txt-1_4">
								<span class="chatroom-block-label">講師：</span>
								<span class="chatroom-block-cnt"><?php echo $chatroom[$i]['lecturer']; ?></span>
							</div>
							<?php if ($chatroom[$i]['guests']!="") { ?>
							<div class="chatroom-guests txt-1_4">
								<span class="chatroom-block-label">嘉賓：</span>
								<span class="chatroom-block-cnt"><?php echo $chatroom[$i]['guests']; ?></span>
							</div>
							<?php } ?>
							<div class="chatroom-date txt-1_4">
								<span class="chatroom-block-label">日期：</span>
								<span class="chatroom-block-cnt"><?php echo $chatroom[$i]['date']; ?></span>
							</div>
							<div class="chatroom-time txt-1_4">
								<span class="chatroom-block-label">時間：</span>
								<span class="chatroom-block-cnt"><?php echo $chatroom[$i]['time']; ?></span>
							</div>
							<div class="chatroom-time txt-1_4">
								<span class="chatroom-block-label">地點：</span>
								<span class="chatroom-block-cnt"><?php echo $chatroom[$i]['addr']; ?></span>
							</div>
							<div class="chatroom-money txt-1_4">
								<span class="chatroom-block-label">費用：</span>
								<span class="chatroom-block-cnt"><?php echo $chatroom[$i]['money']; ?></span>
							</div>
						</div>
					</li>
				<?php
							}
						}
					// }
				 ?>
<!--`				HTML
 					<li class="chatroom-item">
						<div class="chatroom-during txt-3">
							6<span class="txt-3_1">月</span>3<span class="txt-3_1">日</span> ~ 
							6<span class="txt-3_1">月</span>3<span class="txt-3_1">日</span>
						</div>
						<div class="chatroom-pic pic">
							<img src="<?php //path_au('temp'); ?>tem-chat1.jpg" alt="">
							<a href="chatroom_cnt.php" class="btn btn-gochatroomCnt txt-2_1">課程內容</a>
						</div>
						<div class="chatroom-block">
							<div class="chatroom-title txt-1_1">
								台灣期貨市場新亮點 - 銀行保險業避險增益時代來臨
							</div>
							<div class="chatroom-lecturer txt-1_4">
								<span class="chatroom-block-label">講師：</span>
								<span class="chatroom-block-cnt">汪濟平、楊朝舜</span>
							</div>
							<div class="chatroom-guests txt-1_4">
								<span class="chatroom-block-label">嘉賓：</span>
								<span class="chatroom-block-cnt">吳紹綱（Raymond Wu）、吳冠宏（Ryan, Mr.NTD）</span>
							</div>
							<div class="chatroom-date txt-1_4">
								<span class="chatroom-block-label">日期：</span>
								<span class="chatroom-block-cnt">2015/06/03(週三)</span>
							</div>
							<div class="chatroom-time txt-1_4">
								<span class="chatroom-block-label">時間：</span>
								<span class="chatroom-block-cnt">15:00~18:00</span>
							</div>
							<div class="chatroom-time txt-1_4">
								<span class="chatroom-block-label">地點：</span>
								<span class="chatroom-block-cnt">台北市羅斯福路四段85號(集思台大會議中心B1蘇格拉底廳)</span>
							</div>
							<div class="chatroom-money txt-1_4">
								<span class="chatroom-block-label">費用：</span>
								<span class="chatroom-block-cnt">免費報名</span>
							</div>
						</div>
					</li>
					<li class="chatroom-item">
						<div class="chatroom-during txt-3">
							6<span class="txt-3_1">月</span>3<span class="txt-3_1">日</span> ~ 
							6<span class="txt-3_1">月</span>3<span class="txt-3_1">日</span>
						</div>
						<div class="chatroom-pic pic">
							<img src="<?php //path_au('temp'); ?>tem-chat1.jpg" alt="">
							<a href="chatroom_cnt.php" class="btn btn-gochatroomCnt txt-2_1">課程內容</a>
						</div>
						<div class="chatroom-block">
							<div class="chatroom-title txt-1_1">
								台灣期貨市場新亮點 - 銀行保險業避險增益時代來臨
							</div>
							<div class="chatroom-lecturer txt-1_4">
								<span class="chatroom-block-label">講師：</span>
								<span class="chatroom-block-cnt">汪濟平、楊朝舜</span>
							</div>
							<div class="chatroom-guests txt-1_4">
								<span class="chatroom-block-label">嘉賓：</span>
								<span class="chatroom-block-cnt">吳紹綱（Raymond Wu）、吳冠宏（Ryan, Mr.NTD）</span>
							</div>
							<div class="chatroom-date txt-1_4">
								<span class="chatroom-block-label">日期：</span>
								<span class="chatroom-block-cnt">2015/06/03(週三)</span>
							</div>
							<div class="chatroom-time txt-1_4">
								<span class="chatroom-block-label">時間：</span>
								<span class="chatroom-block-cnt">15:00~18:00</span>
							</div>
							<div class="chatroom-time txt-1_4">
								<span class="chatroom-block-label">地點：</span>
								<span class="chatroom-block-cnt">台北市羅斯福路四段85號(集思台大會議中心B1蘇格拉底廳)</span>
							</div>
							<div class="chatroom-money txt-1_4">
								<span class="chatroom-block-label">費用：</span>
								<span class="chatroom-block-cnt">免費報名</span>
							</div>
						</div>
					</li>
					<li class="chatroom-item">
						<div class="chatroom-during txt-3">
							6<span class="txt-3_1">月</span>3<span class="txt-3_1">日</span> ~ 
							6<span class="txt-3_1">月</span>3<span class="txt-3_1">日</span>
						</div>
						<div class="chatroom-pic pic">
							<img src="<?php //path_au('temp'); ?>tem-chat1.jpg" alt="">
							<a href="chatroom_cnt.php" class="btn btn-gochatroomCnt txt-2_1">課程內容</a>
						</div>
						<div class="chatroom-block">
							<div class="chatroom-title txt-1_1">
								台灣期貨市場新亮點 - 銀行保險業避險增益時代來臨
							</div>
							<div class="chatroom-lecturer txt-1_4">
								<span class="chatroom-block-label">講師：</span>
								<span class="chatroom-block-cnt">汪濟平、楊朝舜</span>
							</div>
							<div class="chatroom-guests txt-1_4">
								<span class="chatroom-block-label">嘉賓：</span>
								<span class="chatroom-block-cnt">吳紹綱（Raymond Wu）、吳冠宏（Ryan, Mr.NTD）</span>
							</div>
							<div class="chatroom-date txt-1_4">
								<span class="chatroom-block-label">日期：</span>
								<span class="chatroom-block-cnt">2015/06/03(週三)</span>
							</div>
							<div class="chatroom-time txt-1_4">
								<span class="chatroom-block-label">時間：</span>
								<span class="chatroom-block-cnt">15:00~18:00</span>
							</div>
							<div class="chatroom-time txt-1_4">
								<span class="chatroom-block-label">地點：</span>
								<span class="chatroom-block-cnt">台北市羅斯福路四段85號(集思台大會議中心B1蘇格拉底廳)</span>
							</div>
							<div class="chatroom-money txt-1_4">
								<span class="chatroom-block-label">費用：</span>
								<span class="chatroom-block-cnt">免費報名</span>
							</div>
						</div>
					</li>
					<li class="chatroom-item">
						<div class="chatroom-during txt-3">
							6<span class="txt-3_1">月</span>3<span class="txt-3_1">日</span> ~ 
							6<span class="txt-3_1">月</span>3<span class="txt-3_1">日</span>
						</div>
						<div class="chatroom-pic pic">
							<img src="<?php //path_au('temp'); ?>tem-chat1.jpg" alt="">
							<a href="chatroom_cnt.php" class="btn btn-gochatroomCnt txt-2_1">課程內容</a>
						</div>
						<div class="chatroom-block">
							<div class="chatroom-title txt-1_1">
								台灣期貨市場新亮點 - 銀行保險業避險增益時代來臨
							</div>
							<div class="chatroom-lecturer txt-1_4">
								<span class="chatroom-block-label">講師：</span>
								<span class="chatroom-block-cnt">汪濟平、楊朝舜</span>
							</div>
							<div class="chatroom-guests txt-1_4">
								<span class="chatroom-block-label">嘉賓：</span>
								<span class="chatroom-block-cnt">吳紹綱（Raymond Wu）、吳冠宏（Ryan, Mr.NTD）</span>
							</div>
							<div class="chatroom-date txt-1_4">
								<span class="chatroom-block-label">日期：</span>
								<span class="chatroom-block-cnt">2015/06/03(週三)</span>
							</div>
							<div class="chatroom-time txt-1_4">
								<span class="chatroom-block-label">時間：</span>
								<span class="chatroom-block-cnt">15:00~18:00</span>
							</div>
							<div class="chatroom-time txt-1_4">
								<span class="chatroom-block-label">地點：</span>
								<span class="chatroom-block-cnt">台北市羅斯福路四段85號(集思台大會議中心B1蘇格拉底廳)</span>
							</div>
							<div class="chatroom-money txt-1_4">
								<span class="chatroom-block-label">費用：</span>
								<span class="chatroom-block-cnt">免費報名</span>
							</div>
						</div>
					</li>
					<li class="chatroom-item">
						<div class="chatroom-during txt-3">
							6<span class="txt-3_1">月</span>3<span class="txt-3_1">日</span> ~ 
							6<span class="txt-3_1">月</span>3<span class="txt-3_1">日</span>
						</div>
						<div class="chatroom-pic pic">
							<img src="<?php //path_au('temp'); ?>tem-chat1.jpg" alt="">
							<a href="chatroom_cnt.php" class="btn btn-gochatroomCnt txt-2_1">課程內容</a>
						</div>
						<div class="chatroom-block">
							<div class="chatroom-title txt-1_1">
								台灣期貨市場新亮點 - 銀行保險業避險增益時代來臨
							</div>
							<div class="chatroom-lecturer txt-1_4">
								<span class="chatroom-block-label">講師：</span>
								<span class="chatroom-block-cnt">汪濟平、楊朝舜</span>
							</div>
							<div class="chatroom-guests txt-1_4">
								<span class="chatroom-block-label">嘉賓：</span>
								<span class="chatroom-block-cnt">吳紹綱（Raymond Wu）、吳冠宏（Ryan, Mr.NTD）</span>
							</div>
							<div class="chatroom-date txt-1_4">
								<span class="chatroom-block-label">日期：</span>
								<span class="chatroom-block-cnt">2015/06/03(週三)</span>
							</div>
							<div class="chatroom-time txt-1_4">
								<span class="chatroom-block-label">時間：</span>
								<span class="chatroom-block-cnt">15:00~18:00</span>
							</div>
							<div class="chatroom-time txt-1_4">
								<span class="chatroom-block-label">地點：</span>
								<span class="chatroom-block-cnt">台北市羅斯福路四段85號(集思台大會議中心B1蘇格拉底廳)</span>
							</div>
							<div class="chatroom-money txt-1_4">
								<span class="chatroom-block-label">費用：</span>
								<span class="chatroom-block-cnt">免費報名</span>
							</div>
						</div>
					</li> -->
				</ul>
<div class="pages_btn">
	<ul>
	<?php 
		if ($p>1) {
			$prevPage = $p-1;
			echo "<li class=\"prev\"><a href=\"products_list3.php?p={$prevPage}\"><i class=\"icon ib\"></i><span class=\"txt ib\">上一頁</span></a></li><!-- 在第一頁時不顯示 -->";
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
			echo "<li class=\"number\"><a href=\"products_list3.php?p={$i}\">{$i}</a></li>";
		}
		echo "&nbsp;&nbsp;&nbsp;";
	}


		if ($p<$maxPage) {
			$nextPage = $p+1;
			echo "<li class=\"next\"><a href=\"products_list3.php?p={$nextPage}\"><span class=\"txt ib\">下一頁</span><i class=\"icon ib\"></i></a></li>";
		}
	 ?>
		<!-- <li class="prev"><a href="#"><i class="icon ib"></i><span class="txt ib">上一頁</span></a></li>-->
		<!-- 在第一頁時不顯示  -->
<!-- 		<li class="number active"><a href="#">1</a></li>
		<li class="number"><a href="#">2</a></li>
		<li class="number"><a href="#">3</a></li>
		<li class="number"><a href="#">4</a></li>
		<li class="number"><a href="#">5</a></li> -->
		<!-- <li class="next"><a href="#"><span class="txt ib">下一頁</span><i class="icon ib"></i></a></li> -->
		<!-- 在最後一頁時不顯示 -->
	</ul>
</div>
		<div class="" style="margin: 1em auto 5em;">
			<a href="products.php" class="txt_img-goback btn-getmore hide_txt link-2">回產品介紹</a>
		</div>
			</div>
		</div><!-- /.wrapper  END  !! -->
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
