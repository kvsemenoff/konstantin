﻿<!doctype html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KW REAL ESTATE - Business volume</title>

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="libs/wow/animate.css">
	<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/style.css">

</head>
<body class="ah-transakvolbody">
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/owl.carousel/owl.carousel.js"></script>
	<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="libs/wow/wow.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>

	<script>
    	new WOW().init();
    </script>

	<script src="js/responsiveTabs.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/common.js"></script>

	<?php require_once('includes/header5.php'); ?>
	
<div class="clearfix"></div>

<section class="ah-transakvol">
    <div class="container">
	    <div class="row">
		    <div class="col-md-12 col-sm-12 col-xs-12">
				<div class="az-col">
					<div class="ah-arr ah-arr1" id="anim"></div>
					<div class="az-arrow"></div>
				</div>
				<div class="az-col">
					<div class="ah-arr ah-arr2" id="anim2"></div>
					<div class="az-arrow"></div>
					<div class="ah-transleft">
						<span class="ah-transakvol-title">2014</span>
						<span class="ah-transakvol-text">40 MIO.<br>EURO</span>
					</div>
				</div>
				<div class="az-col">
					<div class="ah-arr ah-arr3" id="anim3"></div>
					<div class="az-arrow"></div>
				</div>
				<div class="az-col">
					<div class="ah-arr ah-arr4" id="anim4"></div>
					<div class="az-arrow"></div>
					<div class="ah-transright">
						<span class="ah-transakvol-title">2015</span>
						<span class="ah-transakvol-text">50 MIO.<br>EURO</span>
					</div>
				</div>
				<div class="az-col">
					<div class="ah-arr ah-arr5" id="anim5"></div>
					<div class="az-arrow"></div>
				</div>
				<div class="az-col">
					<div class="ah-arr ah-arr6" id="anim6"></div>
					<div class="az-arrow"></div>
					<div class="ah-transrightright">
						<span class="ah-transakvol-title">2016</span>
						<span class="ah-transakvol-text">68 MIO.<br>EURO</span>
					</div>
				</div>
				<div class="az-col">
					<div class="ah-arr ah-arr7" id="anim7"></div>
					<div class="az-arrow"></div>
				</div>
				<div class="clearfix"></div>
		    </div>
	    </div>
    </div>
</section>
<script>
	var az_deg = function(a, b){
		return Math.atan(a/b)/Math.PI*180;
	};
	$(document).ready(function(){
		var start = 200;
		var h1 = 300;
		var h2 = 380;
		var h3 = 480;
		var h4 = 550;
		var w1 = $('.az-col').width();
		


		$( window ).resize(function() {
			w1 = $('.az-col').width();
		  $('.ah-arr1').css({
			'bottom' : start + 'px',
			'left' : '0px',
			'transform': 'skewY(' + -az_deg(h1-start, w1) + 'deg)',
			'-webkit-transform': 'skewY(' + -az_deg(h1-start, w1) + 'deg)'
		});
		$('.ah-arr2').css({
			'bottom' : h1 + 'px',
			'left' : '0px',
		});
		$('.ah-arr3').css({
			'bottom' : h1 + 'px',
			'left' : '0px',
			'transform': 'skewY(' + -az_deg(h2-h1, w1) + 'deg)',
			'-webkit-transform': 'skewY(' + -az_deg(h2-h1, w1) + 'deg)'
		});
		$('.ah-arr4').css({
			'bottom' : h2 + 'px',
			'left' : '0px',
		});
		$('.ah-arr5').css({
			'bottom' : h2 + 'px',
			'left' : '0px',
			'transform': 'skewY(' + -az_deg(h3-h2, w1) + 'deg)',
			'-webkit-transform': 'skewY(' + -az_deg(h3-h2, w1) + 'deg)'
		});
		$('.ah-arr6').css({
			'bottom' : h3 + 'px',
			'left' : '0px',
		});
		$('.ah-arr7').css({
			'bottom' : h3 + 'px',
			'left' : '0px',
			'transform': 'skewY(' + -az_deg(h4-h3, w1) + 'deg)',
			'-webkit-transform': 'skewY(' + -az_deg(h4-h3, w1) + 'deg)'
		});
		});
		
		$('.ah-arr1').css({
			'bottom' : start + 'px',
			'left' : '0px',
			'transform': 'skewY(' + -az_deg(h1-start, w1) + 'deg)',
			'-webkit-transform': 'skewY(' + -az_deg(h1-start, w1) + 'deg)'
		});
		$('.ah-arr2').css({
			'bottom' : h1 + 'px',
			'left' : '0px',
		});
		$('.ah-arr3').css({
			'bottom' : h1 + 'px',
			'left' : '0px',
			'transform': 'skewY(' + -az_deg(h2-h1, w1) + 'deg)',
			'-webkit-transform': 'skewY(' + -az_deg(h2-h1, w1) + 'deg)'
		});
		$('.ah-arr4').css({
			'bottom' : h2 + 'px',
			'left' : '0px',
		});
		$('.ah-arr5').css({
			'bottom' : h2 + 'px',
			'left' : '0px',
			'transform': 'skewY(' + -az_deg(h3-h2, w1) + 'deg)',
			'-webkit-transform': 'skewY(' + -az_deg(h3-h2, w1) + 'deg)'
		});
		$('.ah-arr6').css({
			'bottom' : h3 + 'px',
			'left' : '0px',
		});
		$('.ah-arr7').css({
			'bottom' : h3 + 'px',
			'left' : '0px',
			'transform': 'skewY(' + -az_deg(h4-h3, w1) + 'deg)',
			'-webkit-transform': 'skewY(' + -az_deg(h4-h3, w1) + 'deg)'
		});
		// var az_arrow = $('.az-arrow');
		// az_arrow.css('display', 'none');
		// var anim0 = document.getElementById("anim1");
		// anim.addEventListener("animationstart", function(){
		// 	az_arrow.eq(0).css({
		// 		'bottom' : start + 'px',
		// 		'display': 'block',
		// 		'left' :  '0px',
		// 		'transform': 'translate(-15px, 5px) rotate(' + -az_deg(h1-start, w1) + 'deg)',
		// 		'transform-origin': '50% 50%',
		// 	});
		// 	$('.az-arrow').eq(0).animate({
		// 		'bottom' : h1 + 'px',
		// 		'left' : w1 + 'px',
		// 	}, 1000, 'linear');
		// }, false);
		// anim.addEventListener("animationend", function(){
		// 	az_arrow.eq(0).css('display', 'none');
		// }, false);

		// var anim1 = document.getElementById("anim1");
		// anim1.addEventListener("animationstart", function(){
		// 	$('.az-arrow').eq(1).css({
		// 		'bottom' : h1 + 'px',
		// 		'display': 'block',
		// 		'left' :  '0px',
		// 		'transform': 'translate(-15px, 5px)',
		// 		'transform-origin': '50% 50%',
		// 	});
		// 	$('.az-arrow').eq(1).animate({
		// 		'bottom' : h1 + 'px',
		// 		'left' : w1 + 'px',
		// 	}, 1000, 'linear');
		// }, false);
		// anim1.addEventListener("animationend", function(){
		// 	az_arrow.eq(1).css('display', 'none');
		// }, false);
		// var az_arrow = $('.az-arrow');
		// az_arrow.css('display', 'none');
		// setInterval(function(){
		// 	for(var i = 0; i<az_arrow.length; i++){
		// 		// if(az_arrow.eq(i).width() > 0){
		// 			alert(az_arrow.eq(i).width());
		// 		// }
		// 	}
		// }, 1000);
		$('.az-arrow').css('display', 'none');
		var anim = document.getElementById("anim");
		anim.addEventListener("animationstart", function(){
			w1 = $('.az-col').width();
			$('.az-arrow').eq(0).css({
				'bottom' : start + 'px',
				'display': 'block',
				'left' :  '0px',
				'transform': 'translate(-5px, 5px) rotate(' + -az_deg(h1-start, w1) + 'deg)',
				'transform-origin': '20% 50%',
				'-webkit-transform': 'translate(-5px, 5px) rotate(' + -az_deg(h1-start, w1) + 'deg)',
				'-webkit-transform-origin': '20% 50%',
			});
			$('.az-arrow').eq(0).animate({
				'bottom' : h1 + 'px',
				'left' : w1 + 'px',
			}, 2000, 'linear');
		}, false);
		anim.addEventListener("animationend", function(){
			$('.az-arrow').eq(0).css('display', 'none');
		}, false);
		anim.addEventListener("webkitAnimationStart", function(){
			w1 = $('.az-col').width();
			$('.az-arrow').eq(0).css({
				'bottom' : start + 'px',
				'display': 'block',
				'left' :  '0px',
				'transform': 'translate(-5px, 5px) rotate(' + -az_deg(h1-start, w1) + 'deg)',
				'transform-origin': '20% 50%',
				'-webkit-transform': 'translate(-5px, 5px) rotate(' + -az_deg(h1-start, w1) + 'deg)',
				'-webkit-transform-origin': '20% 50%',
			});
			$('.az-arrow').eq(0).animate({
				'bottom' : h1 + 'px',
				'left' : w1 + 'px',
			}, 2000, 'linear');
		}, false);
		anim.addEventListener("webkitAnimationEnd", function(){
			$('.az-arrow').eq(0).css('display', 'none');
		}, false);

		var anim2 = document.getElementById("anim2");
		anim2.addEventListener("animationstart", function(){
			w1 = $('.az-col').width();
			$('.az-arrow').eq(1).css({
				'bottom' : h1 + 'px',
				'display': 'block',
				'left' :  '0px',
				'transform': 'translate(-5px, 5px)',
				'transform-origin': '20% 50%',
				'-webkit-transform': 'translate(-5px, 5px)',
				'-webkit-transform-origin': '20% 50%',
			});
			$('.az-arrow').eq(1).animate({
				'bottom' : h1 + 'px',
				'left' : w1 + 'px',
			}, 2000, 'linear');
		}, false);
		anim2.addEventListener("animationend", function(){
			$('.az-arrow').eq(1).css('display', 'none');
		}, false);
		anim2.addEventListener("webkitAnimationStart", function(){
			w1 = $('.az-col').width();
			$('.az-arrow').eq(1).css({
				'bottom' : h1 + 'px',
				'display': 'block',
				'left' :  '0px',
				'transform': 'translate(-5px, 5px)',
				'transform-origin': '20% 50%',
				'-webkit-transform': 'translate(-5px, 5px)',
				'-webkit-transform-origin': '20% 50%',
			});
			$('.az-arrow').eq(1).animate({
				'bottom' : h1 + 'px',
				'left' : w1 + 'px',
			}, 2000, 'linear');
		}, false);
		anim2.addEventListener("webkitAnimationEnd", function(){
			$('.az-arrow').eq(1).css('display', 'none');
		}, false);

		var anim3 = document.getElementById("anim3");
		anim3.addEventListener("animationstart", function(){
			w1 = $('.az-col').width();
			$('.az-arrow').eq(2).css({
				'bottom' : h1 + 'px',
				'display': 'block',
				'left' :  '0px',
				'transform': 'translate(-5px, 5px) rotate(' + -az_deg(h2-h1, w1) + 'deg)',
				'transform-origin': '20% 50%',
				'-webkit-transform': 'translate(-5px, 5px) rotate(' + -az_deg(h2-h1, w1) + 'deg)',
				'-webkit-transform-origin': '20% 50%',
			});
			$('.az-arrow').eq(2).animate({
				'bottom' : h2 + 'px',
				'left' : w1 + 'px',
			}, 2000, 'linear');
		}, false);
		anim3.addEventListener("animationend", function(){
			$('.az-arrow').eq(2).css('display', 'none');
		}, false);
		anim3.addEventListener("webkitAnimationStart", function(){
			w1 = $('.az-col').width();
			$('.az-arrow').eq(2).css({
				'bottom' : h1 + 'px',
				'display': 'block',
				'left' :  '0px',
				'transform': 'translate(-5px, 5px) rotate(' + -az_deg(h2-h1, w1) + 'deg)',
				'transform-origin': '20% 50%',
				'-webkit-transform': 'translate(-5px, 5px) rotate(' + -az_deg(h2-h1, w1) + 'deg)',
				'-webkit-transform-origin': '20% 50%',
			});
			$('.az-arrow').eq(2).animate({
				'bottom' : h2 + 'px',
				'left' : w1 + 'px',
			}, 2000, 'linear');
		}, false);
		anim3.addEventListener("webkitAnimationEnd", function(){
			$('.az-arrow').eq(2).css('display', 'none');
		}, false);

		var anim4 = document.getElementById("anim4");
		anim4.addEventListener("animationstart", function(){
			w1 = $('.az-col').width();
			$('.az-arrow').eq(3).css({
				'bottom' : h2 + 'px',
				'display': 'block',
				'left' :  '0px',
				'transform': 'translate(-5px, 5px)',
				'transform-origin': '20% 50%',
				'-webkit-transform': 'translate(-5px, 5px)',
				'-webkit-transform-origin': '20% 50%',
			});
			$('.az-arrow').eq(3).animate({
				'bottom' : h2 + 'px',
				'left' : w1 + 'px',
			}, 2000, 'linear');
		}, false);
		anim4.addEventListener("animationend", function(){
			$('.az-arrow').eq(3).css('display', 'none');
		}, false);
		anim4.addEventListener("webkitAnimationStart", function(){
			w1 = $('.az-col').width();
			$('.az-arrow').eq(3).css({
				'bottom' : h2 + 'px',
				'display': 'block',
				'left' :  '0px',
				'transform': 'translate(-5px, 5px)',
				'transform-origin': '20% 50%',
				'-webkit-transform': 'translate(-5px, 5px)',
				'-webkit-transform-origin': '20% 50%',
			});
			$('.az-arrow').eq(3).animate({
				'bottom' : h2 + 'px',
				'left' : w1 + 'px',
			}, 2000, 'linear');
		}, false);
		anim4.addEventListener("webkitAnimationEnd", function(){
			$('.az-arrow').eq(3).css('display', 'none');
		}, false);

		var anim5 = document.getElementById("anim5");
		anim5.addEventListener("animationstart", function(){
			w1 = $('.az-col').width();
			$('.az-arrow').eq(4).css({
				'bottom' : h2 + 'px',
				'display': 'block',
				'left' :  '0px',
				'transform': 'translate(-5px, 5px) rotate(' + -az_deg(h3-h2, w1) + 'deg)',
				'transform-origin': '20% 50%',
				'-webkit-transform': 'translate(-5px, 5px) rotate(' + -az_deg(h3-h2, w1) + 'deg)',
				'-webkit-transform-origin': '20% 50%',
			});
			$('.az-arrow').eq(4).animate({
				'bottom' : h3 + 'px',
				'left' : w1 + 'px',
			}, 2000, 'linear');
		}, false);
		anim5.addEventListener("animationend", function(){
			$('.az-arrow').eq(4).css('display', 'none');
		}, false);
		anim5.addEventListener("webkitAnimationStart", function(){
			w1 = $('.az-col').width();
			$('.az-arrow').eq(4).css({
				'bottom' : h2 + 'px',
				'display': 'block',
				'left' :  '0px',
				'transform': 'translate(-5px, 5px) rotate(' + -az_deg(h3-h2, w1) + 'deg)',
				'transform-origin': '20% 50%',
				'-webkit-transform': 'translate(-5px, 5px) rotate(' + -az_deg(h3-h2, w1) + 'deg)',
				'-webkit-transform-origin': '20% 50%',
			});
			$('.az-arrow').eq(4).animate({
				'bottom' : h3 + 'px',
				'left' : w1 + 'px',
			}, 2000, 'linear');
		}, false);
		anim5.addEventListener("webkitAnimationEnd", function(){
			$('.az-arrow').eq(4).css('display', 'none');
		}, false);

		var anim6 = document.getElementById("anim6");
		anim6.addEventListener("animationstart", function(){
			w1 = $('.az-col').width();
			$('.az-arrow').eq(5).css({
				'bottom' : h3 + 'px',
				'display': 'block',
				'left' :  '0px',
				'transform': 'translate(-5px, 5px)',
				'transform-origin': '20% 50%',
				'-webkit-transform': 'translate(-5px, 5px)',
				'-webkit-transform-origin': '20% 50%',
			});
			$('.az-arrow').eq(5).animate({
				'bottom' : h3 + 'px',
				'left' : w1 + 'px',
			}, 2000, 'linear');
		}, false);
		anim6.addEventListener("animationend", function(){
			$('.az-arrow').eq(5).css('display', 'none');
		}, false);
		anim6.addEventListener("webkitAnimationStart", function(){
			w1 = $('.az-col').width();
			$('.az-arrow').eq(5).css({
				'bottom' : h3 + 'px',
				'display': 'block',
				'left' :  '0px',
				'transform': 'translate(-5px, 5px)',
				'transform-origin': '20% 50%',
				'-webkit-transform': 'translate(-5px, 5px)',
				'-webkit-transform-origin': '20% 50%',
			});
			$('.az-arrow').eq(5).animate({
				'bottom' : h3 + 'px',
				'left' : w1 + 'px',
			}, 2000, 'linear');
		}, false);
		anim6.addEventListener("webkitAnimationEnd", function(){
			$('.az-arrow').eq(5).css('display', 'none');
		}, false);

		var anim7 = document.getElementById("anim7");
		anim7.addEventListener("animationstart", function(){
			w1 = $('.az-col').width();
			$('.az-arrow').eq(6).css({
				'bottom' : h3 + 'px',
				'display': 'block',
				'left' :  '0px',
				'transform': 'translate(-5px, 5px) rotate(' + -az_deg(h4-h3, w1) + 'deg)',
				'transform-origin': '20% 50%',
				'-webkit-transform': 'translate(-5px, 5px) rotate(' + -az_deg(h4-h3, w1) + 'deg)',
				'-webkit-transform-origin': '20% 50%',
			});
			$('.az-arrow').eq(6).animate({
				'bottom' : h4 + 'px',
				'left' : w1 + 'px',
			}, 2000, 'linear');
			// $( window ).resize(function() {
			// 	w1 = $('.az-col').width();
			// 	$('.az-arrow').eq(6).css({
			// 		'bottom' : h3 + 'px',
			// 		'display': 'block',
			// 		'left' :  '0px',
			// 		'transform': 'translate(-5px, 5px) rotate(' + -az_deg(h4-h3, w1) + 'deg)',
			// 		'transform-origin': '20% 50%',
			// 		'-webkit-transform': 'translate(-5px, 5px) rotate(' + -az_deg(h4-h3, w1) + 'deg)',
			// 		'-webkit-transform-origin': '20% 50%',
			// 	});
			// 	$('.az-arrow').eq(6).animate({
			// 		'bottom' : h4 + 'px',
			// 		'left' : w1 + 'px',
			// 	}, 2000, 'linear');
			// });
		}, false);
		anim7.addEventListener("webkitAnimationStart", function(){
			w1 = $('.az-col').width();
			$('.az-arrow').eq(6).css({
				'bottom' : h3 + 'px',
				'display': 'block',
				'left' :  '0px',
				'transform': 'translate(-5px, 5px) rotate(' + -az_deg(h4-h3, w1) + 'deg)',
				'transform-origin': '20% 50%',
				'-webkit-transform': 'translate(-5px, 5px) rotate(' + -az_deg(h4-h3, w1) + 'deg)',
				'-webkit-transform-origin': '20% 50%',
			});
			$('.az-arrow').eq(6).animate({
				'bottom' : h4 + 'px',
				'left' : w1 + 'px',
			}, 2000, 'linear');
			
		}, false);
		setTimeout(function(){
			$('.ah-transleft').animate({'height': (h1-30) + 'px', 'padding-top': '25px'}, 4000);
			$('.ah-transright').animate({'height': (h2-30) + 'px', 'padding-top': '25px'}, 6000);
			$('.ah-transrightright').animate({'height': (h3-30) + 'px', 'padding-top': '25px'}, 10000);

		}, 3000);
		setTimeout(function(){
			$( window ).resize(function() {
				w1 = $('.az-col').width();
				$('.az-arrow').eq(6).css({
					'bottom' : h3 + 'px',
					'display': 'block',
					'left' :  '0px',
					'transform': 'translate(-5px, 5px) rotate(' + -az_deg(h4-h3, w1) + 'deg)',
					'transform-origin': '20% 50%',
					'-webkit-transform': 'translate(-5px, 5px) rotate(' + -az_deg(h4-h3, w1) + 'deg)',
					'-webkit-transform-origin': '20% 50%',
				});
				$('.az-arrow').eq(6).css({
					'bottom' : h4 + 'px',
					'left' : w1 + 'px',
				}, 2000, 'linear');
			});
		}, 16000);
			// setTimeout(function(){
			// 	$('.az-arrow').eq(0).css('display', 'none');
			// 	$('.az-arrow').eq(1).css({
			// 		'bottom' : h1 + 'px',
			// 		'display': 'block',
			// 		'left' :  '0px',
			// 		'transform': 'translate(-5px, 5px)',
			// 		'transform-origin': '20% 50%',
			// 	});
			// 	$('.az-arrow').eq(1).animate({
			// 		'bottom' : h1 + 'px',
			// 		'left' : w1 + 'px',
			// 	}, 1000, 'linear');
			// 	setTimeout(function(){
			// 		$('.az-arrow').eq(1).css('display', 'none');
			// 		$('.az-arrow').eq(2).css({
			// 			'bottom' : h1 + 'px',
			// 			'display': 'block',
			// 			'left' :  '0px',
			// 			'transform': 'translate(-5px, 5px) rotate(' + -az_deg(h2-h1, w1) + 'deg)',
			// 			'transform-origin': '20% 50%',
			// 		});
			// 		$('.az-arrow').eq(2).animate({
			// 			'bottom' : h2 + 'px',
			// 			'left' : w1 + 'px',
			// 		}, 1000, 'linear');
			// 		setTimeout(function(){
			// 			$('.az-arrow').eq(2).css('display', 'none');
			// 			$('.az-arrow').eq(3).css({
			// 				'bottom' : h2 + 'px',
			// 				'display': 'block',
			// 				'left' :  '0px',
			// 				'transform': 'translate(-5px, 5px)',
			// 				'transform-origin': '20% 50%',
			// 			});
			// 			$('.az-arrow').eq(3).animate({
			// 				'bottom' : h2 + 'px',
			// 				'left' : w1 + 'px',
			// 			}, 1000, 'linear');
			// 			setTimeout(function(){
			// 				$('.az-arrow').eq(3).css('display', 'none');
			// 				$('.az-arrow').eq(4).css({
			// 					'bottom' : h2 + 'px',
			// 					'display': 'block',
			// 					'left' :  '0px',
			// 					'transform': 'translate(-5px, 5px) rotate(' + -az_deg(h3-h2, w1) + 'deg)',
			// 					'transform-origin': '20% 50%',
			// 				});
			// 				$('.az-arrow').eq(4).animate({
			// 					'bottom' : h3 + 'px',
			// 					'left' : w1 + 'px',
			// 				}, 1000, 'linear');
			// 			}, 1000);
			// 		}, 1000);
			// 	}, 1000);
			// }, 1000);

			// $('.ah-transleft').height(0);
			// $('.ah-transleft').animate({'height': (h1-50) + 'px'}, 1000);
			// $('.ah-transright').height(0);
			// setTimeout(function(){
			// 	$('.ah-transright').animate({'height': (h2-50) + 'px'}, 1500);
			// }, 1500);
		// }, false);
	});
	
</script>
<div class="clearfix"></div>


	<?php require_once('includes/footer.php'); ?>

	
</body>
</html>

