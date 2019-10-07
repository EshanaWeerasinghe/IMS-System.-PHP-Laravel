<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-sm-12">
        <div class="full-right">
            <h2>CRUD Resource</h2>
        </div>
    </div>
</div>


<table class="table table-bordered">
    <tr>
        <th with="80px">No</th>
        <th>Title</th>
        <th>Body</th>
        <th with="140px" class="text-center">

                <i class="glyphicon glyphicon-plus"></i>              
            </a>            
        </th>
    </tr>
    <?php $no=1; ?>
    <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($no++); ?></td>
        <td><?php echo e($value->title); ?></td>
        <td><?php echo e($value->body); ?></td>
        
        <td>
            <a class="btn btn-info btn-sm" href="<?php echo e(route('posts.show',$value->id)); ?>">
                <i class="glyphicon glyphicon-th-large"></i></a>
                <a class="btn btn-primary btn-sm" href="<?php echo e(route('posts.edit',$value->id)); ?>">
                    <i class="glyphicon glyphicon-pencil"></i>
                  <?php echo Form::open(['method'=> 'DELETE','route' => ['posts.destroy', $value->id],'style'=>'display']); ?> 
                  <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"></button>
                  <!! Form::close()!!}
                </a>
        </td>
    </tr>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</table>
       
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>