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
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Subject Details</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
            
            <li><i class="fa fa-file-text-o"></i>Subject Details</li>
        </ol>
    </div>
</div>


<div class="row">
    <div class="col-lg-8">   


<div class="panel panel-default">
    <div class="panel-heading">
        <b><i class=" fa fa-university"></i>Subject Details</b>
    </div>
    <div class="panel-body" style="padding-bottom:4px;">
        
        <form action="<?php echo e(route('saveSubject')); ?>" method="post" id="frm-create-student" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <input type="hidden" name="class_id" id="class_id">
            <input type="hidden" name="user_id" id="user_id" value="<?php echo e(Auth::id()); ?>">
            <input type="hidden" name="dateregistered" id="dateregistered" value="<?php echo e(date('Y-m-d')); ?>">           
            <div class="row">
            <div class="col-lg-9 col-md-20 col-sm-9">
                      
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin-left:200px;
  margin-right:300px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

    <h2><center>
      Subject Details
    </center></h2>

<table width="28%" class="table table-hover">  
<!--  <tr>
    <td width="20%">Course Unit :</td>
    <td>  <div>
      <div class="col-md-10">
          <div class="form-group">
              
              <input type="text" style="width:90px;"  name="Degree_Name" id="Degree_Name" class="form-control" required>
           </div>
        </div>
    </div></td>
  </tr>-->
    
    <tr>
    <td>Subject Code</td>
    <td>  <div>
      <div class="col-md-10">
          <div class="form-group">            
              <input type="text"  name="sub_code" id="sub_code" class="form-control" required style="width: 50px">
           </div>
        </div>
    </div></td> 
  </tr>
   <tr>
    <td>Subject Name</td>
    <td>  <div>
      <div class="col-md-10">
          <div class="form-group">            
              <input type="text"  name="sub_name" id="sub_name" class="form-control" required>
           </div>
        </div>
    </div></td> 
  </tr>
  
  
    
        </table>
        </body>
        </html>
                                       
    </div>
    </div>
 <br>
</div>


    <div class="panel-footer">
    <button value="submit" onclick = "getConfirmation();" class="btn btn-default btn-save">Save Subject <i class="fa fa-save"></i></button>
    
    </div>
   </form>
  </div>
 </div>
</div>

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