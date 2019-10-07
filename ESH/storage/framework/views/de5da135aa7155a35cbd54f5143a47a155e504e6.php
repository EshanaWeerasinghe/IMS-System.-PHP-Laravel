<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-8">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Exam Registration</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Exam Registration</li>
            <li><i class="fa fa-file-text-o"></i>Exam Registration List</li>
        </ol>
    </div>
</div>
<div class="panel col-lg-8">
    
    <div class="panel-body">
        <h1 style="text-align: center; font-size: 30px;">Courses Allocated for <?php echo e($degree); ?> for year <?php echo e($year); ?></h1>
           <table class="table table-bordered table-condensed table-striped" id="course-info">
           <col width ="50">
          
               <thead>
               <th style="text-align:center">No</th>
               <th style="text-align:center">Course Unit</th>
               <th style="text-align:center">Course Name</th>
               
               <!--<th style="text-align:center">Course Unit</th> -->
                
                
               </thead>
               <tbody>
                   <?php $__currentLoopData = $semester_combination; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Key =>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$Key); ?></td>
                            <td><?php echo e($c->course_code); ?></td>
                            <td><?php echo e($c->course_name); ?></td>
                                                                                             
                        </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
           </table>
        
        </div>
        <div class="footer">
        <?php echo e($semester_combination->render()); ?>

        </div>
   </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#course-info').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
            
        })
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>