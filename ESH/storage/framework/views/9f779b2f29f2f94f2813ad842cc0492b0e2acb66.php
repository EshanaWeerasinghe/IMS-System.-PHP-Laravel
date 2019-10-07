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
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>File Upload</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Course Unit</li>
            <li><i class="fa fa-file-text-o"></i>File Upload</li>
        </ol>
    </div>
</div>


<div class="row">
    <div class="col-lg-8">   


<div class="panel panel-default">
    <div class="panel-heading">
        <b><i class=" fa fa-university"></i>File Upload</b>
    </div>
    <div class="panel-body" style="padding-bottom:6px;">
        
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

    <h2>File Upload</h2>

<table width="28%" class="table table-hover">   

  <div style="padding: 10px" class="col-md-12"> 
        <form action="postImport" method="POST" enctype="multipart/form-data">
           <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="file" class="btn btn-default"  name="file" >
                <p style="color: red"><?php echo e($errors->first('file')); ?></p>
                <input class="btn btn-success" type="submit" name="upload" value="Upload">                       
        </form>   
        </div>
       
                            </table>
                    </body>
                </html>                                      
            </div>
        </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--<button type="button" align="right" class="btn btn-success btn-sm btn-update-class"> Search</button>-->

    <br>
</div>


    <div class="panel-footer">
      
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