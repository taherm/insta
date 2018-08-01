<?php $__env->startSection('content'); ?>
<div class="col-md-12 main">
        <div class="content-top-1">
            
    <div class="mTop10">
        <form method="POST" action="/admin/user-account">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <div class="form-group">
           
                
                <!-- The file input field used as target for the file upload widget -->
                <input id="text" type="text" name="account" class="cover form-control">
           </div>

        
        <div class="form-group">
            <input class="btn btn-primary form-control" type="submit" value="Enter">
        </div>

        </form>

    </div>

        </div>
    </div>

                <div class="clearfix"> </div>

<?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>