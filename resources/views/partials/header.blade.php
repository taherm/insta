<header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
		<div class="c-navbar">
		<div class="container">
			<!-- BEGIN: BRAND -->
			<div class="c-navbar-wrapper clearfix">
				<div class="c-brand c-pull-left">
					<a href="/" class="c-logo">
						<img src="{{asset('/assets/base/img/layout/logos/familyfun-logo.jpg')}}" alt="JANGO" class="c-desktop-logo img-responsive">
						<img src="{{asset('/assets/base/img/layout/logos/familyfun-logo.jpg')}}" alt="JANGO" class="c-desktop-logo-inverse img-responsive">
						<img src="{{asset('/assets/base/img/layout/logos/familyfun-logo.jpg')}}" alt="JANGO" class="c-mobile-logo img-responsive">
					</a>
					<button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
					<span class="c-line"></span>
					<span class="c-line"></span>
					<span class="c-line"></span>
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
	<li class="c-active">
						<a href="/" class="c-link dropdown-toggle">Home<span class="c-arrow c-toggler"></span></a>
						</li>
	@foreach($cat as $item)
	@if($item->children->count() > 0)
						
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

				<li class="c-active">
						<a href="/about" class="c-link dropdown-toggle">About Us<span class="c-arrow c-toggler"></span></a>
						</li>
						<li class="c-active">
						<a href="/contact" class="c-link dropdown-toggle">Contact Us<span class="c-arrow c-toggler"></span></a>
						</li>
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
