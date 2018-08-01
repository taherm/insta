<?php $__env->startSection('content'); ?>
<!-- END: HEADER --><!-- END: LAYOUT/HEADERS/HEADER-1 -->
	<!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->

	<!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
	<!-- BEGIN: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
	
	<!-- BEGIN: PAGE CONTAINER -->
	<div class="c-layout-page">
		<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
<div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold">
	<div class="container">
		<div class="c-page-title c-pull-left">
			<h3 class="c-font-uppercase c-font-sbold"><?php echo e($name); ?></h3>
			<h4 class="">Page Sub Title Goes Here</h4>
		</div>
		<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
															<li><a href="#">Pages</a></li>
			<li>/</li>
															<li><a href="page-fullwidth-gallery.html">Full Width Gallery</a></li>
			<li>/</li>
															<li class="c-state_active">Jango Components</li>
									
		</ul>
	</div>
</div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
		<!-- BEGIN: PAGE CONTENT -->
		<div class="c-content-box c-size-md c-bg-white c-overflow-hide">
	    

	    <div id="grid-container" class="cbp">
		<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	        <div class="cbp-item identity logos">
	            <a class="cbp-caption cbp-lightbox">
	                <div class="cbp-caption-defaultWrap">
	               <a href="<?php echo e(asset($image->link)); ?>">     <img src="<?php echo e(asset('/uploads/'.$image->url)); ?>" alt=""> </a>




				   
	                </div>
	                
	            </a>
	        </div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	        
	    </div>

	   
</div>  
		<!-- END: PAGE CONTENT -->
	</div>
	<!-- END: PAGE CONTAINER -->
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>