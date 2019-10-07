<?php $__env->startSection('title','Student Exam'); ?>
<?php $__env->startSection('content'); ?>
 <?php echo Charts::assets(); ?>

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Student Exam Enroll</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                <li><i class="icon_document_alt"></i>Reports</li>
                <li><i class="fa fa-file-text-o"></i>Student Exam</li>
            </ol>           
        </div>
    </div>

<div class="panel panel-default">
    
    <div class="panel-body" style="padding-bottom:4px;">
    <?php echo $chart->render(); ?>    
    </div>    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>