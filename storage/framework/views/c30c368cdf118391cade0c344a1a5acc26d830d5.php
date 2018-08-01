  
  <?php $__env->startSection('content'); ?>           
                    <div class="col-md-7 main">
        <div class=" content-top-1">
                <h1> Menu : <?php echo e($serv->title); ?> </h1>
    <hr>
   
        </div>
    </div>
    <div class="col-md-5 main">
        <div class="content-top-1">
            
    <div>
        <h1>Edit Menu</h1>
        <hr>
        <form method="POST" action="/admin_edit/<?php echo e($serv->id); ?>">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
    <label for="companyName">Title</label>
    <input class="form-control" placeholder="" name="title" type="text">
</div>




<div class="form-group">
    <button type="submit" class="btn btn-success" style="width: 100%">Save</button>
</div>        </form>
    </div>


        </div>
    </div>

                <div class="clearfix"> </div>

                <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>