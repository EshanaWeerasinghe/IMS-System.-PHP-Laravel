<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-bg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> Course List</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Course</li>
            <li><i class="fa fa-file-text-o"></i>Course List</li>
        </ol>
    </div>
</div>
<div class="panel panel-default">

       <div class="panel-body">
           <table class="table table-bordered table-condensed table-striped" id="course-info">
               <thead>
               <th>No</th>
               <th>Course Unit</th>
               <th>Title</th>
               <th>Year</th>
               <th>Semester</th>
               <th>Level</th>
               <th>Subject</th>
               <th>Department</th>             
               <th>Lecture</th>
               <th>Coordinator</th>
               <th>Credit Values</th>
               <th>Academic Course</th>

               
               
               </thead>
               <tbody>
                   <?php $__currentLoopData = $student_course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Key => $stu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$Key); ?></td>
                            <td><?php echo e($stu->course_unit); ?></td>
                            <td><?php echo e($stu->title); ?></td>
                            <td><?php echo e($stu->year); ?></td>
                            <td><?php echo e($stu->semester); ?></td>
                            <td><?php echo e($stu->level); ?></td> 
                            <td><?php echo e($stu->subject); ?></td>
                            <td><?php echo e($stu->dept); ?></td>                           
                            <td><?php echo e($stu->lec); ?></td>
                            <td><?php echo e($stu->coord); ?></td>
                            <td><?php echo e($stu->credit); ?></td>                         
                            <td><?php echo e($stu->academic_course); ?></td>
                        </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
           </table>
        
        </div>
        <div class="footer">
        <?php echo e($student_course -> render()); ?>

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