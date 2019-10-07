<?php $__env->startSection('content'); ?>
<?php echo $__env->make('semester.popup.academic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('semester.popup.program', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('semester.popup.level', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('semester.popup.shift', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('semester.popup.time', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('semester.popup.batch', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('semester.popup.group', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel panel-default">
            <header class="panel-heading">Manage Semesters
            </header>
            <form action="<?php echo e(route('createClass')); ?>" class="form-horizontal" id="frm-create-class" method="POST">
                <input type="hidden" name="active" id="active" value="1">               
                <input type="hidden" name="class_id" id="class_id">
                <div class="panel-body" style="border-bottom: 1px solid #ccc">
                    <div class="form-group">                       
                        <div class="col-sm-2">
                            <label for="academic-year">Academic year</label>
                            <div class="input-group">
                                <select class="form-control" name="academic_id" id="academic_id">                                   
                                    <?php $__currentLoopData = $academics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $y): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($y->academic_id); ?>"><?php echo e($y->academic); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-academic"></span>
                                </div>
                            </div>
                        </div>
                        
                                                        
                        <div class="col-sm-2">
                            <label for="program">Level</label>
                            <div class="input-group">
                                <select class="form-control" name="program_id" id="program_id">
                                  <option value="">----------</option>
                                    <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($p->program_id); ?>"><?php echo e($p->program); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-program"></span>
                                </div>
                            </div>
                        </div>        
                        
                          
                                                   
                          <div class="col-sm-2">
                            <label for="level">Status</label>
                            <div class="input-group">
                                <select class="form-control" name="level_id" id="level_id">
                                    
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-level"></span>
                                </div>
                            </div>
                        </div>        
                        
                          
                                                    
                          <div class="col-sm-2">
                            <label for="Shift">Semester</label>
                            <div class="input-group">
                                <select class="form-control" name="shift_id" id="add-more-shift_id">
                                    <?php $__currentLoopData = $shift; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($shf->shift_id); ?>"><?php echo e($shf->shift); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-shift"></span>
                                </div>
                            </div>
                        </div>        
                        
                          
                                                         
                          <div class="col-sm-2" style="display: none">
                            <label for="time">Time</label>
                            <div class="input-group">
                                <select class="form-control" name="time_id" id="time_id">
                                    <?php $__currentLoopData = $time; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($t->time_id); ?>"><?php echo e($t->time); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-time"></span>
                                </div>
                            </div>
                        </div>        
                        
                          
                          
                          <div class="col-sm-2" style="display: none">
                            <label for="batch">Batch</label>
                            <div class="input-group">
                                <select class="form-control" name="batch_id" id="batch_id">
                                    <?php $__currentLoopData = $batch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($b->batch_id); ?>"><?php echo e($b->batch); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-batch"></span>
                                </div>
                            </div>
                        </div>        
                        
                          
                          
                          <div class="col-sm-2" style="display: none">
                            <label for="group">Group</label>
                            <div class="input-group">
                                <select class="form-control" name="group_id" id="group_id">
                                    <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <option value="<?php echo e($b->group_id); ?>"><?php echo e($b->groups); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" id="add-more-group"></span>
                                </div>
                            </div>
                        </div>        
                        
                          
                          
                          <div class="col-sm-2">
                            <label for="startDate">Start Date</label>
                            <div class="input-group">
                                <input type="text" name="start_date" id="start_date" class="form-control" required>
                                        <div class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                </div>
                            </div>
                        </div>        
                        
                          
                          
                          <div class="col-sm-2">
                            <label for="endDate">End Date</label>
                            <div class="input-group">
                                <input type="text" name="end_date" id="end_date" class="form-control" required>                             
                                <div class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                </div>
                            </div>
                        </div>        
                        
                          
                  </div>
                               
                <div class="panel-footer">
                    <button type="submit" onclick="getConfirmation();" class="btn btn-default btn-sm">Create Semesters</button>
                    <button type="button" onclick="Warn();" class="btn btn-success btn-sm btn-update-class">Update Semesters</button>
                </div>
              </div>
            </form>
            
            
            <div class="panel panel-default">
                <div class="panel-heading">Class Information</div>
                <div class="panel-body" id="add-class-info">
                
            </div>
            </div>
            
        </section>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    showClassInfo();
        $('#start_date').datepicker({
            changeMonth:true,
            changeYear:true,
            dateFormat:'yy-mm-dd'
        });
        $('#academic_id').on('change',function(e){
            showClassInfo();
        })
         //===========================================
         $('#level_id').on('change',function(e){
            showClassInfo();
        })
         //===========================================
          $('#shift_id').on('change',function(e){
            showClassInfo();
        })
         //===========================================
        $('#time_id').on('change',function(e){
            showClassInfo();
        })
         //===========================================
           $('#batch_id').on('change',function(e){
            showClassInfo();
        })
         //===========================================
            $('#group_id').on('change',function(e){
            showClassInfo();
        })
         //===========================================      
        $('#end_date').datepicker({
            changeMonth:true,   
            changeYear:true,
            dateFormat:'yy-mm-dd'
        }); 
        //========================================================
        $('#frm-create-class').on('submit',function(e){
             e.preventDefault();
             var data = $(this).serialize();
             var url = $(this).attr('action');
             $.post(url,data,function(data){                   
                    showClassInfo(data.academic_id);
                 })
                   $(this).trigger('reset');
             })
         //=======================================================
         $('.btn-update-class').on('click',function(e){
             e.preventDefault();
             var data = $('#frm-create-class').serialize();
             $.post("<?php echo e(route('updateClassInfo')); ?>",data,function(data){
                 showClassInfo(data.academic_id);
             })
         })       
         //=======================================================
           $(document).on('click','#class-edit',function(data){
               var class_id = $(this).data('id');
               $.get("<?php echo e(route('editClass')); ?>",{class_id:class_id},function(data){
                      $('#academic_id').val(data.academic_id);
                      $('#level_id').val(data.level_id);
                      $('#shift_id').val(data.shift_id);
                      $('#time_id').val(data.time_id);
                      $('#group_id').val(data.group_id);
                      $('#batch_id').val(data.batch_id);
                      $('#start_date').val(data.start_date);
                      $('#end_date').val(data.end_date);
                      $('#class_id').val(data.class_id);                    
               })
           })    
         //=======================================================
           $(document).on('click','.del-class',function(e){
               class_id = $(this).val();
               $.post("<?php echo e(route('deleteClass')); ?>",{class_id:class_id},function(data){
                    showClassInfo($('#academic_id').val());
               })
           })    
         //=======================================================
         function showClassInfo()       
         {   
             var data = $('#frm-create-class').serialize();                     
             $.get("<?php echo e(route('showClassInformation')); ?>" ,data,function(data){
                 //console.log(data);
                 $('#add-class-info').empty().append(data);
               MergeCommonRows($('#table-class-info'));
             })       
         }
                   
        //========================================================
          $('#frm-group-create').on('submit',function(e){
             e.preventDefault();
             var data = $(this).serialize();
             $.post("<?php echo e(route('createGroup')); ?>",data,function(data){
                 $('#group_id').append($("<option/>",{
                     value : data.group_id,
                     text  : data.groups
                 }))
             })
             $(this).trigger('reset');
         })      
        //========================================================
         $('#add-more-group').on('click',function(e){
             $('#group-show').modal('show');            
         });
        //========================================================
          $('#frm-batch-create').on('submit',function(e){
             e.preventDefault();
             var data = $(this).serialize();
             $.post("<?php echo e(route('createBatch')); ?>",data,function(data){
                 $('#batch_id').append($("<option/>",{
                     value : data.batch_id,
                     text  : data.batch
                 }))
             })
             $(this).trigger('reset');
         })       
        //========================================================
        $('#add-more-batch').on('click',function(e){
             $('#batch-show').modal('show');            
         });
        //========================================================
         $('#frm-time-create').on('submit',function(e){
             e.preventDefault();
             var data = $(this).serialize();
             $.post("<?php echo e(route('createTime')); ?>",data,function(data){
                 $('#time_id').append($("<option/>",{
                     value : data.time_id,
                     text  : data.time
                 }))
                 console.log(data);
             })
             $(this).trigger('reset');
         })
        //======================================================
         $('#add-more-time').on('click',function(e){
             $('#time-show').modal('show');            
         });
        //======================================================
        $('#frm-shift-create').on('submit',function(e){
        e.preventDefault();
        var data = $(this).serialize();
        var shift=$('#shift_id');
        $.post("<?php echo e(route('createShift')); ?>",data,function(data){
            $(shift).append($("<option/>",{
                value : data.shift_id,
                text : data.shift
            }))
            //console.log(data)
        })
    })
        //=========================================================
        $('#add-more-shift').on('click',function(){
            $('#shift-show').modal('show');
        })
        //=========================================================
       $("#frm-create-class #program_id").on('change',function(e){
           var program_id = $(this).val();
           var level = $('#level_id')
           $(level).empty();
            $.get("<?php echo e(route('showLevel')); ?>",{program_id:program_id},function(data){
                         
                $(level).append($('<option/>',{
                  value : data.level_id,
                   text  : data.level
                }))
               
               })
               showClassInfo();
           })
              
//         $("#frm-create-class #program_id").on('change',function(e){
//           var program_id = $(this).val();
//           var level = $('#level_id')
//           $(level).empty();
//            $.get("<?php echo e(route('showLevel')); ?>",{program_id:program_id},function(data){
//               
//              $.each(data,function(i,l){
//                $(level).append($("<option/>",{
//                    //value  : 1.level_id,
//                    value  : l.level_id,
//                     text  : l.level
//                    
//                    }))
//               })
//              
//             })
//          })

      
        //============================================
         $('#add-more-level').on('click',function(){           
             var programs = $('#program_id option');
             var program = $('#frm-level-create').find('#program_id');
             $(program).empty();
             $.each(programs,function(i,pro){
                 $(program).append($("<option/>",{
                     value : $(pro).val(),
                     text  : $(pro).text(),                    
                 }))
             })            
             $('#level-show').modal('show');            
         });               
        //========================================//
         $('#frm-level-create').on('submit',function(e){
             e.preventDefault();
             var data = $(this).serialize();
             var url = $(this).attr('action');
             $.post(url,data,function(data){
                 $('#level_id').append($("<option/>",{
                     value : data.level_id,
                     text  : data.level
                 }))
             })
            $(this).trigger('reset');
         })       
        //========================================//
        $('#add-more-academic').on('click',function(){
            $('#academic-year-show').modal();
        })
        //========================================//
        $('.btn-save-academic').on('click',function(){
            var academic = $('#new-academic').val();
            $.post("<?php echo e(route('postInsertAcademic')); ?>",{academic:academic},function(data){
                  
                   
                   $('#academic_id').append($("<option/>",{
                       value:data.academic_id,
                       text: data.academic
                   }))
                   $('#new-academic').val("");
                
            })
        })    
    //========================================//
    $('#add-more-program').on('click',function(e){
        $('#program-show').modal();
               })
        $('.btn-save-program').on('click',function(){
            var program =$('#program').val();
            var description = $('#description').val();
            
             $.post("<?php echo e(route('postInsertProgram')); ?>",{program:program,description:description},function(data){
                $('#program_id').append($("<option/>",{
                    value:data.program_id,
                    text:data.program 
                 }))
                 $('#program').val("");
                 $('#description').val("");
             })
         })
    
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
               var retVal = confirm("Do you want to continue ?");
               if( retVal == true ) {
                 
                  return true;
               } else {
                 
                  return false;
               }
            }
            
    function Warn() {
        alert ("Do you want to update !");      
    }         
        
    </script>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>