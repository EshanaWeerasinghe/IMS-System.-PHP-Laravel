<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-8">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Assign Courses List</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Assign Courses</li>
            <li><i class="fa fa-file-text-o"></i>Assign Courses List</li>
        </ol>
    </div>
</div>
<div class="panel col-lg-8">
    
    
    <div class="panel-body">
           <table class="table table-bordered table-condensed table-striped" id="course-info">
           <col width ="50">
               <thead>
               <th style="text-align:center; width:15px;">No</th>
               <th style="text-align:center">Year</th>
               <th style="text-align:center">Semester</th>
               <th style="text-align:center">Course Code</th>
               <th style="text-align:center">Course</th>
               <th style="text-align:center">Lecturer</th>
               <th style="text-align:center;width: 100px">Action</th>
               </thead>
               <tbody>
                   <?php $__currentLoopData = $assign_course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Key =>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$Key); ?></td>
                            <td><?php echo e($c->year); ?></td>
                            <td><?php echo e($c->semester); ?></td>
                            <td><?php echo e($c->Ccode); ?></td>
                            <td><?php echo e($c->Course); ?></td>
                            <td><?php echo e($c->Lecturer); ?></td>
                             <td>
                                <a id="de_ed" class="btn btn-sm btn-success"   href="<?php echo e(route('editAssign',$c->assignc_id)); ?>">Edit</a>
                                <a id="de_de" class="btn btn-sm btn-danger" onclick="getConfirmation();"  href="<?php echo e(route('deleteAssign',$c->assignc_id)); ?>">Delete</a>     
                            </td>                           
                        </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
           </table>      
        </div>
        <div class="footer">
        <?php echo e($assign_course->render()); ?>

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
    
    function getConfirmation() {
               var retVal = confirm("Do you want to Delete?");
               if( retVal === true ) {
                 
                  return true;
               } 
               else {
                 
                 return false;
               }
           }   
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>