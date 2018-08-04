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
	<script src="{{asset('/assets/base/js/jquery.colorbox.js')}}"></script>
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


		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>