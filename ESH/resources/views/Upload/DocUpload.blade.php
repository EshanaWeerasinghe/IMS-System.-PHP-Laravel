@extends('layouts.master')
@section('content')
<?php
use Illuminate\Support\Facades\Input;
?>
<style type="text/css">
    .help-block{
        color: red;
    }
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

 <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">

{{-----------------------------}}
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

{{---------------------------}}
<div class="row">
    <div class="col-lg-8">   
{{------------------------}}

<div class="panel panel-default">
    <div class="panel-heading">
        <b><i class=" fa fa-university"></i>File Upload</b>
    </div>
    <div class="panel-body" style="padding-bottom:6px;">
        
       
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

    <h2></h2>

<table width="28%" class="table table-hover">   

  <div class="container">
  <h2>File Upload</h2>
  &nbsp;
   {!! Form::open(array('url'=>'insertfile','method'=>'POST','class'=>'form-horizontal','files'=>true)) !!}
   
    <div class="form-group">
        <label class="control-label col-sm-2" for="title" style="font-weight: bolder">Title:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control file_title_c" name="file_title" id="file_title_id" placeholder="Enter Title" value="{{Input::old('file_title')}}">
            
             @if($errors->has('file_title')) <p class = "help-block">{{ $errors->first('file_title') }}</p> 
             @endif
    </div>
    </div>
  &nbsp;
    <div class="form-group">
        <label class="control-label col-sm-2" for="title" style="font-weight: bolder">Upload:</label>
        <div class="col-sm-10">
            <input type="file" name="filenam" class="filename">
            @if($errors->has('filenam')) <p class = "help-block">{{ $errors->first('filenam') }}</p> 
             @endif
    </div>
    </div>
  &nbsp;
     <div class="form-group">
         <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default">Submit</button>
         </div>
     </div>
   {!! Form::close() !!}
</div>
    <script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>
       
                            </table>
                                                        
            </div>
        </div>
           
<!--<button type="button" align="right" class="btn btn-success btn-sm btn-update-class"> Search</button>-->

    <br>
</div>

{{---------Save Course------}}
    <div class="panel-footer">
      
    </div>
   </form>
  </div>
 </div>
</div>
@include('class.classPopup')
@endsection
@section('script')
@include('script.scriptClassPopup')
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
 @endsection