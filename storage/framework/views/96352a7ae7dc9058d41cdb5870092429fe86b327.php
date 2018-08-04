<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
<?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="c-layout-header-fixed c-layout-header-mobile-fixed">

	<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
	<!-- BEGIN: HEADER -->
	<?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php echo $__env->yieldContent('content'); ?>

	<a name="footer"></a>
	<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- END: LAYOUT/FOOTERS/FOOTER-6 -->

	<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
	<div class="c-layout-go2top">
		<i class="icon-arrow-up"></i>
	</div>

	<?php echo $__env->make('partials.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>


</html>