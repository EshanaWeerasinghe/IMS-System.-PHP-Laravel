<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-8">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Marks List</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Marks</li>
            <li><i class="fa fa-file-text-o"></i>Marks List</li>
        </ol>
    </div>
</div>
<div class="panel col-lg-8">

    <div class="panel-body">
           <table  class="table table-bordered table-condensed table-striped" id="dept-info">
           <col width ="50">
             
               <thead>
               <th style="text-align:center">No</th>
               <th style="text-align:center">Index Number</th>
               <th style="text-align:center">Marks</th>             
               </thead>
               
               <tbody>
                   <?php $__currentLoopData = $marks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Key =>$ma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$Key); ?></td>                          
                            <td><?php echo e($ma->index_no); ?></td>
                            <td><?php echo e($ma->marks); ?></td>                                                                       
                        </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
           </table>       
        </div>
    
        <div class="footer">
        <?php echo e($marks->render()); ?>

        </div>
   </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#dept-info').DataTable({
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