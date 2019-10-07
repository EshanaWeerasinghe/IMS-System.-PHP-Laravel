@extends('layouts.master')
@section('content')
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

{{-----------------------------}}
<div class="row">
    <div class="col-lg-8">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Degree Details</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Course Unit</li>
            <li><i class="fa fa-file-text-o"></i>Degree Details</li>
        </ol>
    </div>
</div>

{{---------------------------}}
<div class="row">
    <div class="col-lg-8">   
{{------------------------}}

<div class="panel panel-default">
    <div class="panel-heading">
        <b><i class=" fa fa-university"></i>Degree Details</b>
    </div>
    <div class="panel-body" style="padding-bottom:4px;">
        
        <form action="{{route('saveDegree')}}" method="post" id="frm-create-student" enctype="multipart/form-data">
            {!!csrf_field()!!}
            <input type="hidden" name="class_id" id="class_id">
            <input type="hidden" name="user_id" id="user_id" value="{{Auth::id()}}">
            <input type="hidden" name="dateregistered" id="dateregistered" value="{{date('Y-m-d')}}">           
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
      Degree Details
    </center></h2>

<table width="28%" class="table table-hover">  
  
<tr>
    <td>Degree</td>
        <td>  <div>
                <div class="col-md-10">
                    <div class="form-group">            
                        <input type="text"  name="Degree_Name" id="Degree_Name" class="form-control" required value="">
                     </div>
                </div>
    </div>
        </td> 
  </tr>
  
  <tr>
    <td>Combination</td>
    <td>        
     <select class="form-control" name="combination" id="combination" value="">
                    <option value="">----------</option>
                        @foreach($combination as $key => $p)
                        <option value="{{$p->combination}}">{{$p->combination}}</option>
                        @endforeach  
                        </select> 
    </td> 
  </tr>
  
<!--   <select class="form-control" name="combination" id="combination">
                    <option value="">----------</option>
                        @foreach($combination as $key => $p)
                        <option value="{{$p->combination}}">{{$p->combination}}</option>
                        @endforeach  
                        </select>-->
  
        </table>
        </body>
        </html>
  
    </div>
    </div>
 <br>
</div>

{{---------Save Course------}}
    <div class="panel-footer">
    <button value="submit" onclick = "getConfirmation();" class="btn btn-default btn-save">Save Degree<i class="fa fa-save"></i></button>
    
    
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