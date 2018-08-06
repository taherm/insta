<header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
	<div class="c-navbar">
		<div class="container">
			<div class="c-navbar-wrapper clearfix">
				<div class="c-brand c-pull-left">
					<a href="/" class="c-logo">
						<img src="<?php echo e(asset('/assets/base/img/layout/logos/familyfun-logo.jpg')); ?>" class="c-desktop-logo img-responsive">
						<img src="<?php echo e(asset('/assets/base/img/layout/logos/familyfun-logo.jpg')); ?>" class="c-desktop-logo-inverse img-responsive">
						<img src="<?php echo e(asset('/assets/base/img/layout/logos/familyfun-logo.jpg')); ?>" class="c-mobile-logo img-responsive">
					</a>
					<button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
						<span class="c-line"></span>
						<span class="c-line"></span>
						<span class="c-line"></span>
					</button>

				</div>
				<nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
					<ul class="nav navbar-nav c-theme-nav">
						<li class="c-active">
							<a href="/" class="c-link dropdown-toggle">Home
								<span class="c-arrow c-toggler"></span>
							</a>
						</li>
						<?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($item->children->count() > 0): ?>

						<li class="c-menu-type-classic">
							<a href="/" class="c-link dropdown-toggle"><?php echo e($item->title); ?>

								<span class="c-arrow c-toggler"></span>
							</a>
							<ul class="dropdown-menu c-menu-type-classic c-pull-left">
								<?php $__currentLoopData = $item->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li>
									<a href="<?php echo e(url('/menu/'.$submenu->title)); ?>"><?php echo e($submenu->title); ?></a>
								</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</li>
						<?php else: ?>
						<li class="c-active">
							<a href="/" class="c-link dropdown-toggle"><?php echo e($item->title); ?>

								<span class="c-arrow c-toggler"></span>
							</a>
						</li>
						<?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						<li class="c-active">
							<a href="/about" class="c-link dropdown-toggle">About Us
								<span class="c-arrow c-toggler"></span>
							</a>
						</li>
						<li class="c-active">
							<a href="/contact" class="c-link dropdown-toggle">Contact Us
								<span class="c-arrow c-toggler"></span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>