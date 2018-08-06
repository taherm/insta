 <?php $__env->startSection('content'); ?>

<div class="c-layout-page">
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
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>