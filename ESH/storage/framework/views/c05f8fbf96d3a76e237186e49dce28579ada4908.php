<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-6">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> Lecture Hall List</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Lecture Hall</li>
            <li><i class="fa fa-file-text-o"></i>Lecture Hall List</li>
        </ol>
    </div>
</div>
<div class="panel col-lg-6">
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
           <table  class="table table-bordered table-condensed table-striped" id="hall-info">
           <col width ="50">
  
           
               <thead>
               <th style="text-align:center">No</th>
               <th style="text-align:center">Lecture Hall Name</th>
               <th style="text-align:center">Capacity</th>
               <th style="text-align:center;width: 100px">Action</th>
               
                 
               </thead>
               <tbody>
                   <?php $__currentLoopData = $lecture_halls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Key =>$stu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$Key); ?></td>
                            <td><?php echo e($stu->hall_name); ?></td>
                            <td style="text-align: center"><?php echo e($stu->capacity); ?></td>
                            <td>
                                <a class="btn btn-sm btn-success" href="<?php echo e(route('editlec',$stu->hall_id)); ?>">Edit</a>
                                <a class="btn btn-sm btn-danger" onclick="getConfirmation();"  href="">Delete</a>                                  
                            </td>
                            
                            
                                                  
                        </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
           </table>
        
        </div>
        <div class="footer">
        <?php echo e($lecture_halls->render()); ?>

        </div>
   </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#hall-info').DataTable({
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