 <?php $__env->startSection('content'); ?>
<div class="c-layout-page">
	<div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold">
		<div class="container">
			<div class="c-page-title c-pull-left">
				<h3 class="c-font-uppercase c-font-sbold"><?php echo e($name); ?></h3>
				<h4 class="">Category : <?php echo e($name); ?></h4>
			</div>
			<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
				<li>
					<a href="/">Home</a>
				</li>
				<li>/</li>
				<li>
					<a href="#"><p style="text-transform: uppercase;"><?php echo e($name); ?></p></a>
				</li>
				</ul>
		</div>
	</div>
	<div class="c-content-box c-size-md c-bg-white c-overflow-hide">
		<div class="container">
			<div class="row">
				<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-4">
					<a href="<?php echo e(asset($image->link)); ?>">
						<img class="img-thumbnail img-responsive" src="<?php echo e(asset('/uploads/'.$image->url)); ?>" alt=""> </a>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>