<style type="text/css">
    .academic-detail{
        white-space: nowrap;
        width: 400px;
    }
    
    #table-class-info{
        width: 100%;
    }

    table tbody > tr > td {
       vertical-align:middle;
    }

</style>

<table class="table-hover table-striped table-condensed table-bordered" id="table-class-info" >
    <thead>
        <tr>
            <th>Ac:Year</th>
            <th>Year</th>
            <th>Semester</th>
            <th>Status</th>
          
            <th>Academic Detail</th>
            <th id="hidden" >Action</th>          
            <th>
                <input type="checkbox" id="checkall">
            </th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($c->academic); ?></td>
            <td><?php echo e($c->program); ?></td>
            <td><?php echo e($c->shift); ?></td>
            <td><?php echo e($c->level); ?></td>
                           
            <td class="academic-detail">
                <a href="#" data-id="<?php echo e($c->class_id); ?>" id="class-edit">
         Academic Year:<?php echo e($c->academic); ?> / Level: <?php echo e($c->program); ?> / Semester: <?php echo e($c->shift); ?> / Status: <?php echo e($c->level); ?> / StartDate:<?php echo e(date("d-M-y",strtotime($c->start_date))); ?> / EndDate: <?php echo e(date("d-M-Y",strtotime($c->end_date))); ?>

         </a>
            </td>          
            <td style="vertical-align:middle;width:50px;">
                <button value="<?php echo e($c->class_id); ?>" class="btn btn-danger btn-sm del-class">Del</button>
            </td>
            <td>
                <input type="checkbox" name="chk[]" value="<?php echo e($c->class_id); ?>" class="chk">
            </td>
        </tr>     
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
 
