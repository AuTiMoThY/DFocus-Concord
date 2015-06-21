<?php 


/**
* 
*/
class PageUrlAu {
	public $webPageBuild    = "javascript: alert('網頁建置中，敬請稍待!');";
	public $index           = "index.php";
	public $about           = "about.php";
	public $index_futures  = "index.php#futures";
	public $futures_managed  = "futures_managed.php";
	public $futures_fund     = "futures_fund.php";
	public $futures_advisory = "futures_advisory.php";
	public $products        = "products.php";
	public $news            = "news.php";
	public $service          = "service.php";

}
/**
* 
*/
class navAu extends PageUrlAu {

	function navListAu($headerOrFooter) {

		$Nav = array(
						'康和期經介紹' => $this->about,
						'康和期經事業' => $this->index_futures,
						'產品介紹'     => $this->products,
						'市場消息'     => $this->news,
						'客服中心'     => $this->service

						);
		$NavLen = 0;
		$NavLen ++;

		if ($headerOrFooter == 'headerNav') {
			foreach ($Nav as $item => $url) {

echo <<<_OUTPUT
<li class="main_nav-item nav-concord item$NavLen">
	<a href="$url">
		<span class="wrap"><span class="main_nav-icon"></span><span>$item</span></span>
	</a>
</li>
_OUTPUT;

				++$NavLen;
			}
		} elseif ($headerOrFooter == 'footerNav') {
			foreach ($Nav as $item => $url) {

echo <<<_OUTPUT
<li class="footer_nav-item nav-concord item$NavLen">
	<a href="$url">
		<span class="wrap"><span class="footer_nav-icon"></span><span>$item</span></span>
	</a>
</li>
_OUTPUT;

				++$NavLen;
			}
		}
	}
}

/**
* function
*/

function headerNavAu(){
	$navAu = new navAu();
	$navAu -> navListAu($headerOrFooter ='headerNav');

}

function footerNavAu(){
	$navAu = new navAu();
	$navAu -> navListAu($headerOrFooter ='footerNav');

}

function webPageUrlAu($url){
	$PageUrlAu = new PageUrlAu();
	echo $PageUrlAu->{$url};
}



 ?>