<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-8">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> Lecturer List</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Lecturers</li>
            <li><i class="fa fa-file-text-o"></i>Lecturers List</li>
        </ol>
    </div>
</div>
<div class="panel col-lg-8">
<!--    <div class="panel-body">
        <form  method="GET" id="frm-search">
            <table>
                <tr>
                    <td>
                        <input type="search" name="search" class="form-control" value="<?php echo e(request('search')); ?>" placeholder="Search By ID or Name">  
                    </td>
                </tr>
            </table>
                    
             </form>
        </div>
    -->
    <div class="panel-body">
           <table  class="table table-bordered table-condensed table-striped" id="lec-info">
           <col width ="50">
  
           
               <thead>
               <th style="text-align:center">No</th>
               <th style="text-align:center">Title</th>
               <th style="text-align:center">Lecturer Name</th>
               <th style="text-align:center">Department</th>
               <th style="text-align:center">Designation</th>
              
               </thead>
               <tbody>
                   <?php $__currentLoopData = $lecturer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Key =>$stu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$Key); ?></td>
                            <td><?php echo e($stu->lec_title); ?></td>
                            <td><?php echo e($stu->lec_name); ?></td>
                            <td><?php echo e($stu->lec_dept); ?></td>
                            <td><?php echo e($stu->lec_designation); ?></td>
                            
                            
                                                  
                        </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
           </table>
        
        </div>
        <div class="footer">
        <?php echo e($lecturer->render()); ?>

        </div>
   </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#lec-info').DataTable({
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