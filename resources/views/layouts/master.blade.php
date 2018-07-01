<!DOCTYPE html>
<!-- 
Theme: JANGO - Ultimate Multipurpose HTML Theme Built With Twitter Bootstrap 3.3.7
Version: 2.0.1
Author: Themehats
Site: http://www.themehats.com
Purchase: http://themeforest.net/item/jango-responsive-multipurpose-html5-template/11987314?ref=themehats
Contact: support@themehats.com
Follow: http://www.twitter.com/themehats
-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"  >
<!--<![endif]-->
<!-- BEGIN HEAD -->

<!-- Mirrored from themehats.com/themes/jango/demos/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Mar 2018 15:46:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8"/>
	<title>JANGO | Ultimate Multipurpose Bootstrap HTML Theme - Default Home</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta content="" name="description"/>
	<meta content="" name="author"/>
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
	<link href="{{asset('/assets/plugins/socicon/socicon.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('/assets/plugins/bootstrap-social/bootstrap-social.css')}}" rel="stylesheet" type="text/css"/>		
	<link href="{{asset('/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('/assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('/assets/plugins/animate/animate.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->

			<!-- BEGIN: BASE PLUGINS  -->
			<link href="{{asset('/assets/plugins/revo-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
			<link href="{{asset('/assets/plugins/revo-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
			<link href="{{asset('/assets/plugins/revo-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>
			<link href="{{asset('/assets/plugins/cubeportfolio/css/cubeportfolio.min.css')}}" rel="stylesheet" type="text/css"/>
			<link href="{{asset('/assets/plugins/owl-carousel/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css"/>
			<link href="{{asset('/assets/plugins/fancybox/jquery.fancybox.css')}}" rel="stylesheet" type="text/css"/>
			<link href="{{asset('/assets/plugins/slider-for-bootstrap/css/slider.css')}}" rel="stylesheet" type="text/css"/>
				<!-- END: BASE PLUGINS -->
	
			<!-- BEGIN: PAGE STYLES -->
			<link href="{{asset('/assets/plugins/ilightbox/css/ilightbox.css')}}" rel="stylesheet" type="text/css"/>
				<!-- END: PAGE STYLES -->
	
    <!-- BEGIN THEME STYLES -->
	<link href="{{asset('/assets/demos/default/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('/assets/demos/default/css/components.css')}}" id="style_components" rel="stylesheet" type="text/css"/>
	<link href="{{asset('/assets/demos/default/css/themes/default.css')}}" rel="stylesheet" id="style_theme" type="text/css"/>
	<link href="{{asset('/assets/demos/default/css/custom.css')}}" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->

	<link rel="shortcut icon" href="favicon.ico"/>
</head><body class="c-layout-header-fixed c-layout-header-mobile-fixed"> 
		
	<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
		<div class="c-navbar">
		<div class="container">
			<!-- BEGIN: BRAND -->
			<div class="c-navbar-wrapper clearfix">
				<div class="c-brand c-pull-left">
					<a href="index.html" class="c-logo">
						<img src="{{asset('/assets/base/img/layout/logos/logo-3.png')}}" alt="JANGO" class="c-desktop-logo">
						<img src="{{asset('/assets/base/img/layout/logos/logo-3.png')}}" alt="JANGO" class="c-desktop-logo-inverse">
						<img src="{{asset('/assets/base/img/layout/logos/logo-3.png')}}" alt="JANGO" class="c-mobile-logo">
					</a>
					<button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
					<span class="c-line"></span>
					<span class="c-line"></span>
					<span class="c-line"></span>
					</button>
					<button class="c-topbar-toggler" type="button">
						<i class="fa fa-ellipsis-v"></i>
					</button>
					<button class="c-search-toggler" type="button">
						<i class="fa fa-search"></i>
					</button>
					<button class="c-cart-toggler" type="button">
						<i class="icon-handbag"></i> <span class="c-cart-number c-theme-bg">2</span>
					</button>
				</div>
				<!-- END: BRAND -->				
				<!-- BEGIN: QUICK SEARCH -->
				<form class="c-quick-search" action="#">
					<input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
					<span class="c-theme-link">&times;</span>
				</form>
				<!-- END: QUICK SEARCH -->	
				<!-- BEGIN: HOR NAV -->
				<!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
<!-- BEGIN: MEGA MENU -->
<!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
<nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
	<ul class="nav navbar-nav c-theme-nav"> 
	@foreach($cat as $item)
	@if($item->children->count() > 0)
						<li class="c-active">
						<a href="/" class="c-link dropdown-toggle">Home<span class="c-arrow c-toggler"></span></a>
						</li>
						<li class="c-menu-type-classic">
						<a href="/" class="c-link dropdown-toggle">{{$item->title}}<span class="c-arrow c-toggler"></span></a>
													<ul class="dropdown-menu c-menu-type-classic c-pull-left">
													@foreach($item->children as $submenu)
										            <li>
                									<a href="{{url('/menu/'.$submenu->title)}}">{{$submenu->title}}</a>
            										</li>
													@endforeach
													</ul>
						</li>
						@else
						<li class="c-active">
						<a href="/" class="c-link dropdown-toggle">{{$item->title}}<span class="c-arrow c-toggler"></span></a>
						</li>
						@endif
				@endforeach
	</ul>
</nav>
<!-- END: MEGA MENU --><!-- END: LAYOUT/HEADERS/MEGA-MENU -->
				<!-- END: HOR NAV -->		
			</div>			
			<!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
<!-- BEGIN: CART MENU -->
		</div>
	</div>
</header>

@yield('content')

<a name="footer"></a>
<footer class="c-layout-footer c-layout-footer-6 c-bg-grey-1">


	<div class="c-postfooter c-bg-dark-2">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 c-col">
					<p class="c-copyright c-font-grey">2015 &copy; JANGO
						<span class="c-font-grey-3">All Rights Reserved.</span>
					</p>
				</div>
							</div>
		</div>
	</div>

</footer>
<!-- END: LAYOUT/FOOTERS/FOOTER-6 -->

	<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
	<i class="icon-arrow-up"></i>
</div>

	<script src="{{asset('/assets/plugins/jquery.min.js')}}" type="text/javascript" ></script>
	<script src="{{asset('/assets/plugins/jquery-migrate.min.js')}}" type="text/javascript" ></script>
	<script src="{{asset('/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript" ></script>
	<script src="{{asset('/assets/plugins/jquery.easing.min.js')}}" type="text/javascript" ></script>
	<script src="{{asset('/assets/plugins/reveal-animate/wow.js')}}" type="text/javascript" ></script>
	<script src="{{asset('/assets/demos/default/js/scripts/reveal-animate/reveal-animate.js')}}" type="text/javascript" ></script>

	<!-- END: CORE PLUGINS -->

			<!-- BEGIN: LAYOUT PLUGINS -->
			<script src="{{asset('/assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('/assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('/assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('/assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('/assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('/assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('/assets/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('/assets/plugins/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('/assets/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('/assets/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('/assets/plugins/fancybox/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
			<script src="{{asset('/assets/plugins/smooth-scroll/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
			<script src="{{asset('/assets/plugins/typed/typed.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js')}}" type="text/javascript"></script>
			<script src="{{asset('/assets/plugins/js-cookie/js.cookie.js')}}" type="text/javascript"></script>
				<!-- END: LAYOUT PLUGINS -->
	
	<!-- BEGIN: THEME SCRIPTS -->
	<script src="{{asset('/assets/base/js/components.js')}}" type="text/javascript"></script>
	<script src="{{asset('/assets/base/js/components-shop.js')}}" type="text/javascript"></script>
	<script src="{{asset('/assets/base/js/app.js')}}" type="text/javascript"></script>
	
	<!-- END: THEME SCRIPTS -->
	<script src="{{asset('assets/demos/default/js/scripts/pages/fullwidth-gallery.js')}}" type="text/javascript"></script>
					
			<!-- BEGIN: PAGE SCRIPTS -->
								<script src="{{asset('/assets/demos/default/js/scripts/revo-slider/slider-4.js')}}" type="text/javascript"></script>
											<script src="{{asset('/assets/plugins/isotope/isotope.pkgd.min.js')}}" type="text/javascript"></script>
											<script src="{{asset('/assets/plugins/isotope/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
											<script src="{{asset('/assets/plugins/isotope/packery-mode.pkgd.min.js')}}" type="text/javascript"></script>
											<script src="{{asset('/assets/plugins/ilightbox/js/jquery.requestAnimationFrame.js')}}" type="text/javascript"></script>
											<script src="{{asset('/assets/plugins/ilightbox/js/jquery.mousewheel.js')}}" type="text/javascript"></script>
											<script src="{{asset('/assets/plugins/ilightbox/js/ilightbox.packed.js')}}" type="text/javascript"></script>
											<script src="{{asset('/assets/demos/default/js/scripts/pages/isotope-gallery.js')}}" type="text/javascript"></script>
											<script src="{{asset('/assets/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js')}}" type="text/javascript"></script>
							<!-- END: PAGE SCRIPTS -->
		<!-- END: LAYOUT/BASE/BOTTOM -->
    </body>
	

<!-- Mirrored from themehats.com/themes/jango/demos/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Mar 2018 15:58:27 GMT -->
</html>