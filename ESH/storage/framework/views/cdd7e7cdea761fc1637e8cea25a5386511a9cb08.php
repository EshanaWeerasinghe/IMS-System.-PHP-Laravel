<?php $__env->startSection('title','Student Report'); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
    caption{
        height:50px;     
        font-size: 20px;
        font-weight:bold;
    }
</style>


<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Degree List</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Reports</li>
            <li><i class="fa fa-file-text-o"></i>Degree List</li>
        </ol>           
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading">
        <b><i class="fa fa-apple"></i> Degree Information </b>
        <a href="#" class="pull-right" id="show-class-info"><i class="fa fa-plus"></i></a>
    </div>
    <div class="panel-body" style="padding-bottom:4px;">
        <p style="text-align: center; font-size: 30px;font-weight:bold;  ">Degree List</p>
        <div class="show-student-info">          
           
        </div>
    </div>    
</div>
<?php echo $__env->make('class.classPopup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<?php echo $__env->make('script.scriptClassPopup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script type="text/javascript">
  $(document).on('click','#btn-go',function(e){       
        e.preventDefault();
        data = $('#frm-multi-class').serialize();
        $.get("<?php echo e(route('showStudentInfoMultiClass')); ?>" ,data,function(data){
                  $('.show-student-info').empty().append(data);
            })    
        })
    //--------------------------check all-------------------------
    $(document).on('click', '#checkall',function(){
        $(':checkbox.chk').prop('checked',this.checked);
    })
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>