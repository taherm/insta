@extends('layouts.master') @section('content')
<div class="c-layout-page">
	<div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold">
		<div class="container">
			<div class="c-page-title c-pull-left">
				<h3 class="c-font-uppercase c-font-sbold">{{$name}}</h3>
				<h4 class="">Category : {{$name}}</h4>
			</div>
			<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
				<li>
					<a href="/">Home</a>
				</li>
				<li>/</li>
				<li>
					<a href="#"><p style="text-transform: uppercase;">{{$name}}</p></a>
				</li>
				</ul>
		</div>
	</div>
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
</div>
@endsection