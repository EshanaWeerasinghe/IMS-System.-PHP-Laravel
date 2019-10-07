<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-bg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> TimeTable</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>TimeTable</li>
            <li><i class="fa fa-file-text-o"></i>TimeTable</li>
        </ol>
    </div>
</div>
<div class="panel panel-default">

       <div class="panel-body">
           <table class="table table-bordered table-condensed table-striped" id="timetable-info">
               <thead>
               <th>No</th>
               <th>Year</th>
               <th>Semester</th>
               <th>Day</th>
               <th>Time</th>
               <th>Course Code</th>
               <th>Course Name</th>
               <th>Lecture Hall</th>             
              
                             
               </thead>
               <tbody>
                   <?php $__currentLoopData = $timetable; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Key => $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$Key); ?></td>
                            <td><?php echo e($t->year); ?></td>
                            <td><?php echo e($t->semester); ?></td>
                            <td><?php echo e($t->day); ?></td>
                            <td><?php echo e($t->time); ?></td>
                            <td><?php echo e($t->course_code); ?></td> 
                            <td><?php echo e($t->course_name); ?></td>
                            <td><?php echo e($t->lec_hall); ?></td>                                                      
                        </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
           </table>
        
        </div>
        <div class="footer">
        <?php echo e($timetable -> render()); ?>

        </div>
   </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#timetable-info').DataTable({
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