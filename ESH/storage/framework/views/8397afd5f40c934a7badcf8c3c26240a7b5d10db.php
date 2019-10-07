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
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Course Unit Details</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Course Unit</li>
            <li><i class="fa fa-file-text-o"></i>Course Unit Details</li>
        </ol>
    </div>
</div>


<div class="row">
    <div class="col-lg-8">   


<div class="panel panel-default">
    <div class="panel-heading">
        <b><i class=" fa fa-university"></i>Student Course Unit Details</b>
    </div>
    <div class="panel-body" style="padding-bottom:4px;">
        
        <form action="<?php echo e(route('saveCourse')); ?>" method="post" id="frm-create-student" enctype="multipart/form-data">
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
       Course Unit Details
    </center></h2>

<table width="28%" class="table table-hover">   
  <tr>
    <td width="20%">Course Unit :</td>
    <td>  <div>
      <div class="col-md-10">
          <div class="form-group">
              
              <input type="text" style="width:90px;"  name="course_unit" id="course_unit" class="form-control" required>
           </div>
        </div>
    </div></td>
  </tr>
  
  
  <tr>
    <td>Year :</td>
    <td> <div class="col-sm-5">
            <div class="input-group">
                <select class="form-control"  name="year" id="year" class="form-control" style="color:black;" required>
                    <option value="">-----------</option>
                     <?php $__currentLoopData = $academics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($p->academic); ?>"><?php echo e($p->academic); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>              
            </div>
                </div>        
            </td>
    </tr>   
    
  <tr>
    <td>Title :</td>
    <td>  <div>
      <div class="col-md-10">
          <div class="form-group">            
              <input type="text"  name="title" id="title" class="form-control" required>
           </div>
        </div>
    </div></td> 
  </tr>
  
  <tr>
    <td>Level :</td>
    <td> <div class="col-sm-5">
            <div class="input-group">
                <select class="form-control"  name="level" id="level" class="form-control" style="color:black;" required>
                    <option value="">-----------</option>
                     <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($p->program); ?>"><?php echo e($p->program); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </select>              
                    </div>
                </div>        
            </td>
  </tr>
  
<tr>
    <td>Semester :</td>
    <td>   <div class="col-sm-6">
            <div class="input-group">
                <select class="form-control"  name="semester" id="semester" class="form-control" style="color:black;" required>
                     <option value="">----------</option>
                     <?php $__currentLoopData = $shift; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($shf->shift); ?>"><?php echo e($shf->shift); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                   
                 </select>
                    </div>
                </div>        
    </td>
</tr>
  
  <tr>
    <td>Evaluate in other semester :</td>
    <td>   <div class="col-sm-6">
            <div class="input-group">
                 <select class="form-control"  name="evaluate" id="evaluate" class="form-control" style="color:black;" required>
                     <option value="yes">Yes</option>
                     <option value="no">No</option>                                    
                    </select>                       
                    </div>
            </div>  
    </td>  
  </tr>
  
  <tr>
    <td>Department :</td>
    <td>   <div class="col-sm-10">
            <div class="input-group">
                <select class="form-control"  name="dept" id="dept" class="form-control" style="color:black;"required>
                    <option value="">-------------------------------------</option>
                    <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($dept->dept_name); ?>"><?php echo e($dept->dept_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- <option value="AG">Agricultural Technology</option>
                     <option value="ET">Environmental Technology</option>
                     <option value="IA">Instrumentation and Automation Technology</option>
                     <option value="ICT">Information & Communication Technology</option>
                     <option value="FOT">Faculty of Technology</option>    -->                   
                </select>                       
             </div>
           </div>        
    </td>
  </tr>
    
  <tr>
    <td>Subject :</td>
    <td>   <div class="col-sm-8">
            <div class="input-group">
                <select class="form-control" name="subject" id="subject" style="color:black;">
                    <option value="EN">EN</option>
                    <option value="AG">AG</option>
                    <option value="ET">ET</option>
                    <option value="IA">IA</option>
                    <option value="ICT">IC</option>
                    <option value="FT">FT</option>                                  
                    </select>                        
                    </div>
            </div>        
    </td> 
  </tr> 
  
  
  <tr>      
    <td>Lecturer :</td>
    <td>   <div class="col-sm-4">
            <div class="input-group">
                 <select class="form-control" name="lec" id="lec" style="color:black;">
                    <option value="">---------------------------</option>
                    <?php $__currentLoopData = $lecturer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($lec->lec_name); ?>"><?php echo e($lec->lec_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                       
                </select>                                   
                    </div>
                </div>        
    </td>
  </tr>
  
  <tr>
    <td>Co-ordinator :</td>
    <td>   <div class="col-sm-6">
            <div class="input-group">
                <input type="text"  name="coord" id="coord" class="form-control">
                        
                    </div>
                </div>        
    </td>
  </tr>
  
  <tr>
    <td>Description :</td>
    <td> <div class="col-sm-10">
            <textarea class="form-control rounded-0" name="description" id="description" rows="3"></textarea>
        </div>
    </td>
  </tr>
  
  <tr>
        <td>Medium :</td>
        <td> <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="english" id="english" value="1">
      <label class="form-check-label" for="english">English</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox"name="tamil" id="tamil" value="1">
      <label class="form-check-label" for="tamil">Tamil</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox"name="sinhala" id="sinhala" value="1">
      <label class="form-check-label" for="sinhala">Sinhala</label>
    </div>
    </td>
 </tr>
  
  <tr>
    <td width="20%">Credit Value :</td>
    <td>  <div>
      <div class="col-md-10">
          <div class="form-group">
              
              <input type="text" style="width:50px;"  name="credit" id="credit" class="form-control" required>
           </div>
        </div>
    </div></td>
  </tr>
   
  <tr>
    <td>Theory Hours :</td>
    <td>  <div>
      <div class="col-md-10">
          <div class="form-group">
             
              <input type="text" style="width:50px;"  name="theory" id="theory" class="form-control" required>
           </div>
        </div>
    </div></td>
  </tr>
  
   <tr>
    <td>Practical Hours :</td>
    <td>  <div>
      <div class="col-md-10">
          <div class="form-group">
             
              <input type="text" style="width:50px;" name="practical" id="practical" class="form-control" required>
           </div>
        </div>
    </div></td>
  </tr>
  
    <tr>
    <td>Academic Course :</td>
    <td>  <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="academic_course" id="academic_course" value="1">
        <label class="form-check-label" for="academic_course">Academic Course</label>
        </div>
    </td>
  </tr>
  
    <tr>
    <td>Show In Mark Book :</td>
    <td> <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="markbook" id="markbook" value="1">
        <label class="form-check-label" for="markbook">Show in Mark Book</label>
        </div>
    </td>
  </tr>
  
    <tr>
    <td>Status:</td>
        <td>   <div class="col-sm-3">
            <div class="input-group">
                <select class="form-control" name="sta" id="sta" style="color:black;">
                    <option value="Active">Active</option>
                                    
                    </select>
                        
                    </div>
                </div>        
       </td>   
  </tr>
  
        </table>
        </body>
        </html>
                                       
    </div>
    </div>
 <br>
</div>


    <div class="panel-footer">
    <button value="submit" onclick = "getConfirmation();" class="btn btn-default btn-save">Save Course<i class="fa fa-save"></i></button>
    
    </div>
   </form>
  </div>
 </div>
</div>
<?php echo $__env->make('class.classPopup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<?php echo $__env->make('script.scriptClassPopup', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script type ="text/javascript">
   $('#frm-mult-class #btn-go').addClass('hidden');
    $(document).on('click','#class-edit',function(e){       
        e.preventDefault();
        //showClassInfo();
        $('#class_id').val($(this).data('id'));
        $('.academic-detail p').text($(this).text());
        $('#choose-academic').modal('hide');
    
    })

    //------browse photo--------
    $('#browse_file').on('click',function(){
        $('#photo').click();
    })
    $('#photo').on('change',function(e){
        showFile(this,'#showPhoto');
    });
    $('#dob').datepicker({
       changeMonth:true,
       changeYear:true,
       dateFormat:'yy-mm-dd'
    });
    
    //====================================/
    function showFile(fileInput,img,showName){
        if(fileInput.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                $(img).attr('src',e.target.result);
            }
            reader.readAsDataURL(fileInput.files[0]);
        }
        $(showName).text(fileInput.files[0].name)
    };
    //-------------------------------------------------
    function MergeCommonRows(table){
      var firstColumnBrakes = [];
      $.each(table.find('th'),function(i){
          var previous = null,cellToExtend = null, rowspan = 1;
          table.find("td:nth-child("+ i +")").each(function(index,e){
               var jthis = $(this),content = jthis.text();
               if(previous == content && content !== "" && $.inArray(index,firstColumnBrakes)=== -1){
                  jthis.addClass('hidden');
                  cellToExtend.attr("rowspan", (rowspan = rowspan+1));
               }else{
                   if(i === 1) firstColumnBrakes.push(index);
                   rowspan = 1;
                   previous = content;
                   cellToExtend = jthis;
               }                    
           });         
      });
      $('td.hidden').remove();
  }
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