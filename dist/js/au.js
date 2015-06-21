/*--------------------------------------*\
	Concord
			by DFocus AuTiMoThY
\*--------------------------------------*/
$(window).load(function(){


});

// init controller
var simplePinning = new ScrollMagic.Controller();

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


	$.preload();

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
	.addIndicators({name: "2 (duration: 0)"}) // add indicators (requires plugin)
	.addTo(simplePinning);

})
