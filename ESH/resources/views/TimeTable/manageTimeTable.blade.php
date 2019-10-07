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
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>TimeTable Details</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>TimeTable</li>
            <li><i class="fa fa-file-text-o"></i>TimeTable Details</li>
        </ol>
    </div>
</div>

{{---------------------------}}
<div class="row">
    <div class="col-lg-8">   
{{------------------------}}

<div class="panel panel-default">
    <div class="panel-heading">
        <b><i class=" fa fa-university"></i>TimeTable Details</b>
    </div>
    <div class="panel-body" style="padding-bottom:4px;">
        
        <form action="{{route('saveTimetable')}}" method="post" id="frm-create-student" enctype="multipart/form-data">
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
       Time Table Details
    </center></h2>

<table width="28%" class="table table-hover">   
  
  <tr>
    <td>Year :</td>
    <td> <div class="col-sm-5">
            <div class="input-group">
                <select class="form-control"  name="year" id="year" class="form-control" style="color:black;" required>
                    <option value="">-----------</option>
                     @foreach($academics as $key => $p)
                     <option value="{{$p->academic}}">{{$p->academic}}</option>
                    @endforeach
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
                     @foreach($shift as $shf)
                     <option value="{{ $shf->shift}}">{{$shf->shift}}</option>
                     @endforeach                   
                 </select>
                    </div>
                </div>        
    </td>
</tr>
<tr>
    <td>Day :</td>
    <td>   <div class="col-sm-6">
            <div class="input-group">
                 <select class="form-control"  name="day" id="day" class="form-control" style="color:black;" required>
                     <option value="">-------</option>
                     <option value="Monday">Monday</option>
                     <option value="Tuesday">Tuesday</option>
                     <option value="Wednesday">Wednesday</option>
                     <option value="Thursday">Thursday</option>
                     <option value="Friday">Friday</option>                                     
                    </select>                       
                    </div>
            </div>  
    </td>  
  </tr>
  
  <tr>
    <td>Time :</td>
    <td>   <div class="col-sm-10">
            <div class="input-group">
                <select class="form-control"  name="time" id="time" class="form-control" style="color:black;"required>
                    <option value="">--------------------------</option>
                    @foreach($time as $t)
                    <option value="{{$t->time}}">{{$t->time}}</option>
                    @endforeach
                                   
                </select>                       
             </div>
           </div>        
    </td>
  </tr>
  
  
  <tr>
    <td width="20%">Course Code :</td>
    <td>  <div>
      <div class="col-md-10">
          <div class="form-group">
               <select class="form-control"  name="course_code" id="course_code" class="form-control" style="color:black; width: 110px;"required>
              
               <option value="">----------</option>
                    @foreach($course as $c)
                    <option value="{{$c->course_unit}}">{{$c->course_unit}}</option>
                    @endforeach
                       </select>   
             
           </div>
        </div>
    </div></td>
  </tr>
     
      <tr>
    <td>Title:</td>
    <td>  <div>
      <div class="col-md-10">
          <div class="form-group">   
              <select class="form-control"  name="course_name" id="course_name" class="form-control" style="color:black; width: 500px;"required>
              
               <option value="">-----------------------------------</option>
                    @foreach($course as $c)
                    <option value="{{$c->title}}">{{$c->title}}</option>
                    @endforeach
                       </select>  
          
           </div>
        </div>
    </div></td> 
  </tr>
  
  <tr>
    <td>Lecture Hall</td>
    <td>  <div>
      <div class="col-md-10">
          <div class="form-group">
              <select class="form-control"  name="lec_hall" id="lec_hall" class="form-control" style="color:black; width: 150px;"required>
              
               <option value="">---------------------</option>
                    @foreach($lecture_hall as $lec)
                    <option value="{{$lec->hall_name}}">{{$lec->hall_name}}</option>
                    @endforeach
                       </select>  
            <!--  <input type="text"  name="lec_hall" id="lec_hall" class="form-control" required style="width: 200px"> -->
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

{{---------Save Timetable-----}}
    <div class="panel-footer">
    <button value="submit" onclick = "getConfirmation();" class="btn btn-default btn-save">Save Time Table<i class="fa fa-save"></i></button>
    
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