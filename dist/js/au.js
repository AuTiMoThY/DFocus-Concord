/*--------------------------------------*\
	Concord
			by DFocus AuTiMoThY
\*--------------------------------------*/
$(window).load(function(){


});

// init controller
var simplePinning = new ScrollMagic.Controller();
// var controller = new ScrollMagic.Controller();
var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onLeave", duration: "400"}});

function viewPortWidthHeight() {
  var wh = {};
  if(window.innerWidth) {
      wh.width = window.innerWidth;
      wh.height = window.innerHeight;
  }
  else if(document.documentElement.clientWidth) {
      wh.width = document.documentElement.clientWidth;
      wh.height = document.documentElement.clientHeight;
  }
  else if(document.body.clientWidth) {
      wh.width = document.body.clientWidth;
      wh.height = document.body.clientHeight;
  }
  return wh;
}

function resizeBlock (){
	var $body = $("body"),
		$indexPage = $("body.index_page"),
		viewPortWH = viewPortWidthHeight(),
		viewPortH = viewPortWH.height;

	// $footerWrap.height(viewPortH * 2 / 5);
	// $indexPage.css('height', viewPortH);
	// $slidesLi.css('height', viewPortH * 0.8);
}

function isActive($this, $thisClass) {
	if (!($this.hasClass('active'))) {
		$(".futures_bar-item").removeClass('active');
		$this.addClass('active');
	} else{
		// $thisClass.removeClass('active');
	};
}


$(window).on('resize', function () {
	resizeBlock();
});

$(function () {
	resizeBlock();

	// if (!/*@cc_on!@*/false) {
	// 	console.log('ie?');
	// 	$.material.init('#ftCtrl');
	// }else {

	// }
	if( userAgent.match(/(msie|MSIE)/) || userAgent.match(/(T|t)rident/)  ) {
		$(".loading .ip-loader .ip-inner").append('LOADING');
	}else {
		// console.log('not ie');
		$.material.init();
	}


	$.preload('dist/images/futures_bar-banner1.jpg',
	          'dist/images/futures_bar-banner2.jpg',
	          'dist/images/futures_bar-banner3.jpg'
	          );

	// var $win = $(window),
	// 	_moveSpeed = 1000,	// 移動的速度
	// 	number = 100;
	// var $header = $("#globalHeader");

	// $win.bind('scroll resize', function(){
	// 	var $this = $(this);
	// 	var MM = $this.scrollTop();

	// 	if(MM>=150){
	// 		$header.stop().animate({
	// 			top: 50
	// 		}, _moveSpeed, 'easeOutQuint');
	// 	}else {
	// 		$header.stop().animate({
	// 			top: 290
	// 		}, _moveSpeed, 'easeOutQuint');
	// 	};
	// }).scroll();
	var tween = TweenMax.to("#globalHeader", 0.3, {
		height: 50,
		ease: Power1.easeInOut
	});

	new ScrollMagic.Scene({
		triggerElement: "#globalHeader",
		offset: 0
	})
	.setTween(tween)
	.setPin("#globalHeader")
	.triggerHook(0)
	// .addIndicators({name: "2 (duration: 0)"}) // add indicators (requires plugin)
	.addTo(simplePinning);


	var bannerTween = TweenMax.to("#pageBanner", {
		backgroundPosition: "50% 50px",
		ease: Linear.easeNone
		// ease: Power1.easeInOut
	})
	// var bannerTween = new TimelineMax()
	// 	.to("#pageBanner", 0.5, {backgroundPosition: "50% 50px"})
	// 	.to("#pageBanner", 0.3, {backgroundPosition: "50% 100px"});

	// var bannerScene = new ScrollMagic.Scene({
	// 	triggerElement: "#bannerTrigger",
	// 	triggerHook: "onLeave",
	// 	offset: 50
	// 	// duration: 300
	// })
	// .setTween(bannerTween)
	// // .triggerHook(0)
	// .addIndicators({name: "2 (duration: 300)"}) // add indicators (requires plugin)
	// .addTo(controller);
	// 
	var bannerScene = new ScrollMagic.Scene({triggerElement: "#bannerTrigger", offset: 50})
				.setTween("#pageBanner", {backgroundPosition: "50% 200px",ease: Linear.easeNone})
				.addIndicators()
				.addTo(controller);
})
