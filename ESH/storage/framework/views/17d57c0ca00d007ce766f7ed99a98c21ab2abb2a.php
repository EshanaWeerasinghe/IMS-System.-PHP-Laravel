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
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> Student Registration</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Student</li>
            <li><i class="fa fa-file-text-o"></i>Create Student</li>
        </ol>
    </div>
</div>


<div class="row">
<div class="col-lg-12">
    
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">           
            <a data-toggle="collapse" data-parent="#accodion" href="#collapse1"
               style="text-decoration: none;">Choose Academic</a>
               <a href="#" class="pull-right" id="show-class-info"><i class="fa fa-plus"></i></a>
        </div>
        <div id="collapse1" class="panel-collapse collapse in">
            <div class="panel-body academic-detail"><p></p></div>
        </div>
    </div>    
</div>


<div class="panel panel-default">
    <div class="panel-heading">
        <b><i class=" fa fa-apple"></i>Student Information</b>
    </div>
    <div class="panel-body" style="padding-bottom:4px;">
        
        <form action="<?php echo e(route('postStudentRegister')); ?>" method="post" id="frm-create-student" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <input type="hidden" name="class_id" id="class_id">
            <input type="hidden" name="user_id" id="user_id" value="<?php echo e(Auth::id()); ?>">
            <input type="hidden" name="dateregistered" id="dateregistered" value="<?php echo e(date('Y-m-d')); ?>">           
            <div class="row">
            <div class="col-lg-9 col-md-20 col-sm-9">
                                                             
 
  <div>
      <div class="col-md-4">
          <div class="form-group">
              <label for="regno">
                   Reg. No. 
              </label>
              <input type="text"  name="Reg_no" id="regno" class="form-control" required>
           </div>
        </div>
    </div>

 
  <div>
      <div class="col-md-4">
          <div class="form-group">
              <label for="initials">
                   Name with Initials
              </label>
              <input type="text"  name="initials" id="initials" class="form-control" required>
           </div>
           </div>           
</div>


<div class="col-md-4">
    <div class="form-group">
        <label for="alindex"> A/L Index</label>
        <input type="text" name="al_index" id="alindex" class="form-control">
    </div>
</div>

               
 
  <div>
      <div class="col-md-4">
          <div class="form-group">
              <label for="fullname">
                  Full Name
              </label>
              <input type="text"  name="full_name" id="full_name" class="form-control" required>
           </div>
           </div>          
</div>  
                                 
  
  <div class="form-group">
      <div class="col-md-4">
          <div class="form-group">
              <label for="firstname">
                  First Name
              </label>
              <input type="text"  name="first_name" id="firstname" class="form-control" required>
           </div>
      </div>
                      
 
  <div>
      <div class="col-md-4">
          <div class="form-group">
              <label for="lastname">
                  Last Name
              </label>
              <input type="text"  name="last_name" id="last_name" class="form-control" required>
           </div>
      </div>          
</div>


<div>
      <div class="col-md-4">
          <div class="form-group">
              <label for="nationalcard">
                National identity card
              </label>
              <input type="text"  name="national_card" id="nationalcard" class="form-control" required>
           </div>
           </div>          
</div>


<div class="col-sm-4">
        <label for="program">Level</label>
            <div class="input-group">
                <select class="form-control" name="Level" id="level">
                    <option value="">----------</option>
                        <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($p->program); ?>"><?php echo e($p->program); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                        </select>
                     <div class="input-group-addon">
        <span class="fa fa-plus" id="add-more-program"></span>
                    </div>
                </div>
            </div>   


<div class="col-md-4">
    <div class="ugccourse">
        <label for="ugccourse">UGC Course</label>
        <input type="text" name="ugc_course" id="ugccourse" class="form-control">
    </div>
</div>

<p>&nbsp;</p>
                                
     <div class="col-sm-4">
        <label for="program">Combination</label>
            <div class="input-group">
                <select class="form-control" name="combination" id="combination">
                    <option value="">----------</option>
                        <?php $__currentLoopData = $combination; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($p->combination); ?>"><?php echo e($p->combination); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                        </select>
                     <div class="input-group-addon">
        <span class="fa fa-plus" id="add-more-program"></span>
                    </div>
                </div>
            </div>   





<div class="col-sm-4">
        <label for="program">Degree</label>
            <div class="input-group">
                <select class="form-control" name="Degree_Name" id="Degree_Name">
                    <option value="">----------</option>
                        <?php $__currentLoopData = $Degree_Name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($p->Degree_Name); ?>"><?php echo e($p->Degree_Name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </select>
                     <div class="input-group-addon">
        <span class="fa fa-plus" id="add-more-program"></span>
                    </div>
                </div>
            </div>   


<div class="col-md-4">
    <div class="form-group">
        <label for="degreetype"> Degree Type</label>
        <input type="text" name="degree_type" id="degreetype" class="form-control">
    </div>
</div>

    


<div class="col-md-4">
    <div class="form-group">
        <label for="studentcategory">Student Category</label>
        <input type="text" name="student_category" id="studentcategory" class="form-control">
        
    </div>
</div>


<div class="col-md-4">
    <div class="form-group">
        <label for="admissionyear"> Admission App. Year</label>
        <input type="text" name="admission_year" id="admissionyear" class="form-control">
    </div>
</div>


   <div class="col-md-4">
        <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control">
        </div>
    </div>
</div>
  

<div class="col-md-4">
    <div class="form-group">
        <label for="phone">Mobile Phone</label>
        <input type="text" name="phone" id="phone" class="form-control">
        
    </div>
</div>


<div class="col-md-4">
    <div class="form-group">
        <label for="landphone">Land Phone</label>
        <input type="text" name="land_phone" id="landphone" class="form-control">
        
    </div>
</div>


<div class="col-md-4">
    <div class="form-group">
        <label for="nationality"> Nationality</label>
        <input type="text" name="nationality" id="nationality" class="form-control">
    </div>
</div>


<div class="col-md-4">
    <div class="form-group">
        <label for="ctizenship"> Citizenship</label>
        <input type="text" name="ctizenship" id="national_card" class="form-control">
    </div>
</div>


<div class="col-md-4">
    <div class="form-group">
        <label for="school_town">School Town</label>
        <input type="text" name="school_town" id="national_card" class="form-control">
    </div>
</div>


<div class="col-md-4">
    <div class="form-group">
        <label for="z_score"> Z-Score</label>
        <input type="text" name="z_score" id="z_score" class="form-control">
    </div>
</div>

<!--
<div class="col-md-4">
    <div class="form-group">
        <label for="passport">Passport</label>
        <input type="text" name="passport" id="passport" class="form-control">      
    </div>
</div>-->




<div class="task">
<div class="col-lg-3 col-md-3 col-sm-3">
    <div class="form-group form-group-login">
      <div align="right"></div>
      <table style="margin:40 auto;">
        <thead>
          <tr class="info">
            <th class="student-id">0000<?php echo e(sprintf('%05',$student_id)); ?></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="photo"> <?php echo Html::image('photo/images.png',null,['class'=>'student-photo','id'=>'showPhoto']); ?>

              <input type="file" name="photo" id="photo" accept="image/x-png,image/png,image/
                               jpg,image/jpeg" />
            </td>
          </tr>
          <tr>
            <td style="text-align:center;background: #ddd;"><input type="button" name="browse_file" id="browse_file" class="form-control btn-browse
                               "value="Browse" />
            </td>
          </tr>
        </tbody>
      </table>
    </div>
</div>
    
</div>


<div class="col-md-4">
    <div class="form-group">
        <fieldset>
            <legend>Gender</legend>
            <table style="width:100%;margin-top:-20px;">
                <td>
                    <label>
                        <input type="radio" name="sex" id="sex" value="0" required>
                        Male
                    </label>        
                    </td>
                    <td>
                       <label>
                        <input type="radio" name="sex" id="sex" value="1" required>
                        Female
                    </label> 
                    </td>             
            </table>
        </fieldset>
    </div>
    </div>




<div class="col-md-4">
    <div class="form-group">
        <fieldset>
            <legend>Status</legend>
            <table style="width:100%;margin-top:-14px;">
<!--            <tr style="border-bottom: 1px solid #ccc;">-->
            <td height="24">
            <label>
            <input type="radio" name="status" id="status" value="0" required checked>
                Single
                </label>      
                </td>
                <td>
                  <label>
                <input type="radio" name="status" id="status" value="1" required checked>
                Married
                </label>  
                </td>
                </tr>
            </table>
        </fieldset>
    </div> 
</div>


  </div>
  </div>
   <br>
   


<div class="panel-heading" style="margin-top: -20px;">
    <b> <i class="fa fa-apple"></i>Other Informations</b>    
</div>
<div class="panel-body" style="padding-bottom: 10px;margin-top:0;">
<div class="row">
    <div class="col-md-3">
      <div class="form-group">
        <label for="hometown">Home Town</label>
        <input type="text" name="hometown" id="hometown" class="form-control">        
            </div>  
        </div> 
    <div class="col-md-3">
      <div class="form-group">
        <label for="paddress">Permanent Address</label>
        <input type="text" name="p_address" id="paddress" class="form-control">        
            </div>  
        </div> 
    
     <div class="col-md-3">
      <div class="form-group">
        <label for="preferredaddress">Preferred Address</label>
        <input type="text" name="preferred_address" id="preferredaddress" class="form-control">        
            </div>  
        </div> 
    
    <div class="col-md-3">
      <div class="form-group">
        <label for="tempory_address">Temporary Address</label>
        <input type="text" name="tempory_address" id="tempory_address" class="form-control">        
            </div>  
        </div> 
    
    <div class="col-md-3">
      <div class="form-group">
        <label for="foreign_student">Foreign Student</label>
        <input type="text" name="foreign_student" id="foreign_student" class="form-control">        
            </div>  
        </div> 
       
     <div class="col-md-3">
      <div class="form-group">
        <label for="ctizenship">Citizenship</label>
        <input type="text" name="ctizenship" id="ctizenship" class="form-control">        
            </div>  
        </div> 
       
    
        <div class="col-md-3">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control">        
            </div>  
        </div> 
    
    
        
       <div class="col-md-3">
      <div class="form-group">
        <label for="studentstatus">Student Status</label>
        <input type="text" name="student_status" id="studentstatus" class="form-control">        
            </div>  
        </div> 
</div>




    <div class="panel-footer">
    <button value="submit" onclick = "getConfirmation();" class="btn btn-default btn-save">Save<i class="fa fa-save"></i></button>
    
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
    
//    $('#add-more-combination').on('click',function(e){
//        $('#combination-show').modal('show');
//    })
    
//    //============================================
//    $('#academic_id').on('change',function(e){
//            showClassInfo();
//        })
//         //===========================================
//         $('#level_id').on('change',function(e){
//            showClassInfo();
//        })
//         //===========================================
//          $('#shift_id').on('change',function(e){
//            showClassInfo();
//        })
//         //===========================================
//        $('#time_id').on('change',function(e){
//            showClassInfo();
//        })
//         //===========================================
//           $('#batch_id').on('change',function(e){
//            showClassInfo();
//        })
//         //===========================================
//            $('#group_id').on('change',function(e){
//            showClassInfo();
//        })
//        //=============================================
//        $("#frm-view-class #program_id").on('change',function(e){
//           var program_id = $(this).val();
//           var level = $('#level_id')
//           $(level).empty();
//            $.get("<?php echo e(route('showLevel')); ?>",{program_id:program_id},function(data){
//                         
//                $(level).append($('<option/>',{
//                  value : data.level_id,
//                   text  : data.level
//                }))
//               
//               })
//               showClassInfo($('#academic_id').val());
//           })
//        //=============================================
////         $("frm-create-class #program_id").on('change',function(e){
////             var program_id = $(this).val();
////             var level = $('#level_id')y
////             $(level).empty();
////             $.get("<?php echo e(route('showLevel')); ?>",{program_id:program_id},function(data){
////                 $.each(data,function(i,l){
////                     $(level).append($("<option/>",{
////                         value : l.level_id,
////                         text  : l.level
////                     }))
////                 })
////                 showClassInfo($('#academic_id').val(),program_id);
////             })            
////         })   
//        //=============================================
//    $('#show-class-info').on('click',function(e){
//        e.preventDefault();
//        showClassInfo();
//        $('#choose-academic').modal('show');
//    })
//    //==================================================
//      function showClassInfo()       
//         {              
//             var data = $('#frm-view-class').serialize();                     
//             $.get("<?php echo e(route('showClassInformation')); ?>" ,data,function(data){
//                 $('#add-class-info').empty().append(data);
//                 $('td#hidden').addClass('hidden');
//                 $('th#hidden').addClass('hidden');
//               MergeCommonRows($('#table-class-info'));
//             })       
//         }
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
</script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>