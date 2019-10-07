<?php $__env->startSection('content'); ?>
<style type="text/css">
    .student-photo{
        height: 160px;
        padding-left: 1px;
        padding-right: 1px;
        border: 1px solid #ccc;
        background: #eee;
        width: 140px;
        margin: 0 auto;
    }
    .photo>input[type='file']{
        display: none;
    }
    
    .photo{
        width: 30px;
        height: 30px;
        border-radius: 100%;
    }
    .student-id{
        background-repeat:repeat-x;
        border-color: #ccc;
        padding: 5px;
        text-align: center;
        background: #eee;
        border-bottom: 1px solid #ccc;
        
    }
    
    .task{
        padding:56px;
        right-align:50px;
    }
    
     
    .btn-browse{
        border-color: #ccc;
        padding: 5px;
        text-align: center;
        background: #eee;
        border: none;
        border-top:1px solid #ccc;
    }
    
    fieldset{
        margin-top: 5px;
    }
    
    fieldset legend{
        display: block;
        width: 100%;
        padding: 0;
        font-size: 15px;
        line-height: inherit;
        color: #797979;
        border: 0;
        border-bottom: 1px solid #e5e5e5;
    }
</style>


<div class="row">
    <div class="col-lg-8">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Passports Details</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
            
            <li><i class="fa fa-file-text-o"></i>Department Details</li>
        </ol>
    </div>
</div>


<div class="row">
    <div class="col-lg-8">   


<div class="panel panel-default">
    <div class="panel-heading">
        <b><i class=" fa fa-university"></i>Passport Details</b>
    </div>
    <div class="panel-body" style="padding-bottom:4px;">
        
<!----------------------------------------------------------------------------->
<!-- Added Details -->
<!--<div class="container">
    <br />
    <?php if(\Session::has('success')): ?>
      <div class="alert alert-success">
        <p><?php echo e(\Session::get('success')); ?></p>
      </div><br />
     <?php endif; ?>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Passport Office</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      <?php $__currentLoopData = $passports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $passport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php 
        $date=date('Y-m-d', $passport['date']);
         ?>
      <tr>
        <td><?php echo e($passport['id']); ?></td>
        <td><?php echo e($passport['name']); ?></td>
        <td><?php echo e($date); ?></td>
        <td><?php echo e($passport['email']); ?></td>
        <td><?php echo e($passport['number']); ?></td>
        <td><?php echo e($passport['office']); ?></td>
        
        <td><a href="" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  </div>-->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<script type ="text/javascript">
   
  function getConfirmation() {
               var retVal = confirm("Do you want to Save?");
               if( retVal === true ) {
                 
                  return true;
               } else {
                 
                 return false;
               }
           }
</script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>