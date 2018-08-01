<?php $__env->startSection('content'); ?>      
                    <div class="col-md-7 main">
        <div class=" content-top-1">
                <h1>Menus</h1>
    <hr>
    <div class="panel-body" style="padding: 0;">
        <table class="table table-striped custom-table">
            <thead>
            <tr>
                <th>Menu</th>
                
                
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                    <td><?php echo e($item->title); ?></td>
                    
                    
                    <td class="text-center">
                        <a class='btn btn-info btn-xs' href="<?php echo e(url('admin/'.$item->id.'/edit_menu')); ?>">
                            <span class="glyphicon glyphicon-edit"></span>
                            Edit
                        </a>
                        </td>

                     <td>   <form method="POST" action="/admin/delete-menu/<?php echo e($item->id); ?>">
										<?php echo e(csrf_field()); ?>

										<input name="_method" value="delete" type="hidden">
										<button class="btn btn-danger" type="submit">Delete</button>
									</form>
                    
                    </td>
                </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                    </table>
        


    </div>

        </div>
    </div>
    <div class="col-md-5 main">
        <div class="content-top-1">
            
    <div>
        <h1>Add Menu</h1>
        <hr>

        <form method="POST" action="/main-menu">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
    <label for="companyName">Name</label>
    <input class="form-control" placeholder="Name (English)" name="title" type="text">
</div>


<span class="form-g"></span>

<div class="form-group">
    <button type="submit" class="btn btn-success" style="width: 100%">Save</button>
</div>
        </form>
    </div>




        </div>



            
    <div>
        <h1>Submenu</h1>
        <hr>

        <form method="POST" action="/sub-menu">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
    <label for="companyName">Name</label>
    <input class="form-control" placeholder="Name (English)" name="title" type="text">
</div>
<b>Submenu Item</b>
          <select name="submenu" class="form-control">
                <option value="None">None</option>
                <?php $__currentLoopData = $sub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
                    <option value="<?php echo e($item->title); ?>"><?php echo e($item->title); ?></option>
                   
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </select>


<span class="form-g"></span>

<div class="form-group">
    <button type="submit" class="btn btn-success" style="width: 100%">Save</button>
</div>
        </form>





    </div>

                <div class="clearfix"> </div>
                <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>