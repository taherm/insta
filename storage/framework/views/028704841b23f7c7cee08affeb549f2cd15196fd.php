 <?php $__env->startSection('content'); ?>
<!-- END: HEADER -->
<!-- END: LAYOUT/HEADERS/HEADER-1 -->


<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">
	<!-- BEGIN: PAGE CONTENT -->
	<!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-4 -->


	<!-- BEGIN: CONTENT/FEATURES/FEATURES-1 -->

	<!-- END: CONTENT/FEATURES/FEATURES-1 -->

	<!-- BEGIN: CONTENT/MISC/WHY-CHOOSE-US-1 -->

	<!-- END: CONTENT/MISC/WHY-CHOOSE-US-1 -->

	<!-- BEGIN: CONTENT/TILES/TILE-3 -->





	<div class="c-content-box c-size-md c-bg-white c-overflow-hide">


		<div class="container">

			<div class="row">
				<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-4">

					<img class="img-thumbnail img-responsive" src="<?php echo e(asset($image->getimageThumbnailUrl())); ?>" alt="">
					
				</div>


				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>

		</div>


	</div>










	<!-- BEGIN: CONTENT/FEATURES/FEATURES-11 -->


	<!-- BEGIN: CONTENT/BARS/BAR-5 -->

	<!-- BEGIN: CONTENT/MISC/LATEST-ITEMS-1 -->
</div>
<!-- END: PAGE CONTAINER -->

<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>