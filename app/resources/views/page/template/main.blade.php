<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<title>@yield('title', 'Default') | La Trinidad</title>
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel="stylesheet" href="{{ asset('plugins/css/settings.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/css/font-awesome.min.css') }}">
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Muli' type='text/css' media='all'/>
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat' type='text/css' media='all'/>
	<link rel="stylesheet" href="{{ asset('plugins/css/elegant-icon.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/css/section.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/css/shop.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/css/preloader.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/css/skin-selector.css') }}">
</head>
<body data-spy="scroll">

	<!-- Preloader -->
	@include('page.template.partials.preload')

	<div id="wrapper" class="wide-wrap">
		<!-- Header -->
		<header id="header" class="header-container header-type-classic header-navbar-classic header-absolute header-transparent">
			@include('page.template.partials.nav')
		</header>

		<!-- Container -->
		<section>
			@yield('content')
		</section>

		<!-- Footer -->
		<footer>
			@include('page.template.partials.foot')
		</footer>
	</div>
	<script type='text/javascript' src="{{ asset('plugins/js/libs/jquery.js') }}"></script>
	<script type='text/javascript' src="{{ asset('plugins/js/libs/jquery-migrate.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('plugins/js/libs/jquery.themepunch.tools.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('plugins/js/libs/jquery.themepunch.revolution.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('plugins/js/libs/preloader.min.js') }}"></script>

	<script type='text/javascript' src="{{ asset('plugins/js/libs/easing.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('plugins/js/libs/imagesloaded.pkgd.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('plugins/js/libs/bootstrap.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('plugins/js/libs/superfish-1.7.4.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('plugins/js/libs/jquery.appear.min.js') }}"></script>

	<script type='text/javascript' src="{{ asset('plugins/js/libs/jquery.touchSwipe.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('plugins/js/libs/jquery.carouFredSel.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('plugins/js/libs/isotope.pkgd.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('plugins/js/libs/jquery.magnific-popup.min.js') }}"></script>
	<script type='text/javascript' src="{{ asset('plugins/js/libs/jquery.countTo.min.js') }}"></script>
	
	<script type='text/javascript' src="{{ asset('plugins/js/skin-selector.js') }}"></script>

	<script type='text/javascript' src="{{ asset('plugins/js/script.js') }}"></script>

	<script type="text/javascript">
    /******************************************
       -  PREPARE PLACEHOLDER FOR SLIDER   -
       ******************************************/


       var setREVStartSize = function() {
       	var   tpopt = new Object();
       	tpopt.startwidth = 1170;
       	tpopt.startheight = 700;
       	tpopt.container = jQuery('#revslider');
       	tpopt.fullScreen = "on";
       	tpopt.forceFullWidth="on";

       	tpopt.container.closest(".rev_slider_wrapper").css({height:tpopt.container.height()});tpopt.width=parseInt(tpopt.container.width(),0);tpopt.height=parseInt(tpopt.container.height(),0);tpopt.bw=tpopt.width/tpopt.startwidth;tpopt.bh=tpopt.height/tpopt.startheight;if(tpopt.bh>tpopt.bw)tpopt.bh=tpopt.bw;if(tpopt.bh<tpopt.bw)tpopt.bw=tpopt.bh;if(tpopt.bw<tpopt.bh)tpopt.bh=tpopt.bw;if(tpopt.bh>1){tpopt.bw=1;tpopt.bh=1}if(tpopt.bw>1){tpopt.bw=1;tpopt.bh=1}tpopt.height=Math.round(tpopt.startheight*(tpopt.width/tpopt.startwidth));if(tpopt.height>tpopt.startheight&&tpopt.autoHeight!="on")tpopt.height=tpopt.startheight;if(tpopt.fullScreen=="on"){tpopt.height=tpopt.bw*tpopt.startheight;var cow=tpopt.container.parent().width();var coh=jQuery(window).height();if(tpopt.fullScreenOffsetContainer!=undefined){try{var offcontainers=tpopt.fullScreenOffsetContainer.split(",");jQuery.each(offcontainers,function(e,t){coh=coh-jQuery(t).outerHeight(true);if(coh<tpopt.minFullScreenHeight)coh=tpopt.minFullScreenHeight})}catch(e){}}tpopt.container.parent().height(coh);tpopt.container.height(coh);tpopt.container.closest(".rev_slider_wrapper").height(coh);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);tpopt.container.css({height:"100%"});tpopt.height=coh;}else{tpopt.container.height(tpopt.height);tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);}
       };

       /* CALL PLACEHOLDER */
       setREVStartSize();


       var tpj=jQuery;
       tpj.noConflict();
       var revapi9;

       tpj(document).ready(function() {

       	if(tpj('#revslider').revolution == undefined){
       		revslider_showDoubleJqueryError('#revslider');
       	}else{
       		revapi9 = tpj('#revslider').show().revolution(
       		{  
       			dottedOverlay:"none",
       			delay:10000,
       			startwidth:1170,
       			startheight:700,
       			hideThumbs:200,

       			thumbWidth:100,
       			thumbHeight:50,
       			thumbAmount:2,


       			simplifyAll:"off",

       			navigationType:"bullet",
       			navigationArrows:"solo",
       			navigationStyle:"preview4",

       			touchenabled:"on",
       			onHoverStop:"off",
       			nextSlideOnWindowFocus:"off",

       			swipe_threshold: 0.7,
       			swipe_min_touches: 1,
       			drag_block_vertical: false,

       			parallax:"mouse",
       			parallaxBgFreeze:"on",
       			parallaxLevels:[7,4,3,2,5,4,3,2,1,0],


       			keyboardNavigation:"off",

       			navigationHAlign:"center",
       			navigationVAlign:"bottom",
       			navigationHOffset:0,
       			navigationVOffset:20,

       			soloArrowLeftHalign:"left",
       			soloArrowLeftValign:"center",
       			soloArrowLeftHOffset:20,
       			soloArrowLeftVOffset:0,

       			soloArrowRightHalign:"right",
       			soloArrowRightValign:"center",
       			soloArrowRightHOffset:20,
       			soloArrowRightVOffset:0,

       			shadow:0,
       			fullWidth:"off",
       			fullScreen:"on",

       			spinner:"spinner3",

       			stopLoop:"off",
       			stopAfterLoops:-1,
       			stopAtSlide:-1,

       			shuffle:"off",


       			forceFullWidth:"on",
       			fullScreenAlignForce:"off",
       			minFullScreenHeight:"400",

       			hideThumbsOnMobile:"off",
       			hideNavDelayOnMobile:1500,
       			hideBulletsOnMobile:"off",
       			hideArrowsOnMobile:"off",
       			hideThumbsUnderResolution:0,

       			fullScreenOffsetContainer: ".headerwrap, .headertopwrap",
       			fullScreenOffset: "",
       			hideSliderAtLimit:0,
       			hideCaptionAtLimit:0,
       			hideAllCaptionAtLilmit:0,
       			startWithSlide:0
       		});



       	}
       });   /*ready*/
   </script>
</body>
</html>