@extends('layouts.master') @section('content')
<!-- END: HEADER -->
<!-- END: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->

<!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
<!-- BEGIN: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->

<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">
	<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
	<div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold">
		<div class="container">
			<div class="c-page-title c-pull-left">
				<h3 class="c-font-uppercase c-font-sbold">{{$name}}</h3>
				<h4 class="">Page Sub Title Goes Here</h4>
			</div>
			<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
				<li>
					<a href="#">Pages</a>
				</li>
				<li>/</li>
				<li>
					<a href="page-fullwidth-gallery.html">Full Width Gallery</a>
				</li>
				<li>/</li>
				<li class="c-state_active">Jango Components</li>

			</ul>
		</div>
	</div>
	<!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
	<!-- BEGIN: PAGE CONTENT -->
	<div class="c-content-box c-size-md c-bg-white c-overflow-hide">


		<div class="container">
			<div class="row">

				@foreach($images as $image)
				<div class="col-md-4">
					<a href="{{asset($image->link)}}">
						<img class="img-thumbnail img-responsive" src="{{asset('/uploads/'.$image->url)}}" alt=""> </a>
				</div>



				@endforeach
			</div>


		</div>

	</div>


</div>
<!-- END: PAGE CONTENT -->
</div>
<!-- END: PAGE CONTAINER -->
@endsection