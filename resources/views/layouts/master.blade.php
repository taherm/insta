<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
@include('partials.head')

<body class="c-layout-header-fixed c-layout-header-mobile-fixed">

	<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
	<!-- BEGIN: HEADER -->
	@include('partials.header') @yield('content')

	<a name="footer"></a>
	@include('partials.footer')
	<!-- END: LAYOUT/FOOTERS/FOOTER-6 -->

	<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
	<div class="c-layout-go2top">
		<i class="icon-arrow-up"></i>
	</div>

	@include('partials.scripts')
</body>


</html>