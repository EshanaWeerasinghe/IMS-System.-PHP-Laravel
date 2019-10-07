<?php $__env->startSection('title','Students List'); ?>
<?php $__env->startSection('content'); ?>

 <?php echo Charts::assets(); ?>

    <div class="row">
    <div class="col-lg-12">
        <h3 class="page-header" ><i class="fa fa-file-text-o"></i>Student List</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Student List</li>
            <li><i class="fa fa-file-text-o"></i>Manage</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <section class="panel panel-default">
            <header class="panel-heading">Students List Upload                
            </header>
    </div>
</div>

 <div class="panel-heading">Import and Export Data Into Excel ore CSV</div>
<div class="pannel-body">
         <?php echo Form::open(array('route' => 
         'product.import','method'=>'POST','files' =>'true')); ?>

         <div class="row">
             <div class="col-xs-10 col-sm-10 col-md-10">
              <?php if(Session::has('success')): ?>
                <div class="alert atert-success"><?php echo e(Session::get('message')); ?></div>
              <?php if(Session::has('warnning')): ?>
                <div class="alert alert-warnning"><?php echo e(Session::get('message')); ?></div>
              <?php endif; ?>
              <div class="form-group">
                <?php echo Form::lable('sample_file','Select File to
                Import:'['class'=>'col-md-3]); ?>

                <div class="col-md-9">
                <?php echo Form::file('studentsupload', array('class' => 'form-control')); ?>

                <?php echo $errors->first('studentsupload', '<p class="alert alert-danger">
                    ::message</p>'); ?>

                </div>   
              </div>
             </div>
             <div class="col-xs-2 col-sm-2 col-md-2 rexr-center">
             <?php echo Form::submit('upload' ,['class'=>'btn btn-success']); ?> 
            </div>                           
        </div>    
         <?php echo Form::close(); ?>

    </div>
          
<?php $__env->stopSection(); ?>-->



                                
                                 
 
 
 
 
 
 
 
 




<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>