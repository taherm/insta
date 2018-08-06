@extends('layouts.master') @section('content')

<div class="c-layout-page">
	<div class="c-content-box c-size-md c-bg-white c-overflow-hide">
		<div class="container">
			<div class="row">
				@foreach($images as $image)
				<div class="col-md-4">
					<img class="img-thumbnail img-responsive" src="{{asset($image->getimageThumbnailUrl())}}" alt="">
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection