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
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Assign Course Details</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Assign Course</li>
            <li><i class="fa fa-file-text-o"></i>Assign Course Details</li>
        </ol>
    </div>
</div>

{{---------------------------}}
<div class="row">
    <div class="col-lg-8">   
{{------------------------}}


<div class="panel panel-default">
    <div class="panel-heading">
        <b><i class=" fa fa-university"></i>Assign Course</b>
    </div>
    
    
    <div class="panel-body" style="padding-bottom:6px;">
        <form action="{{route('saveAssignCourse')}}" method="post" id="frm-create-student" enctype="multipart/form-data">
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
            Assign Course   
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
    <td>Course Code :</td>
    <td>   <div class="col-sm-7">
            <div class="input-group">
                <select class="form-control"  name="Ccode" id="Ccode" class="form-control" style="color:black;"required>  
                <option value="">--------------------</option>   
                @foreach($student_course as $cou)
                 <option value="{{$cou->course_unit}}">{{$cou->course_unit}}</option>
                @endforeach
                </select>                       
             </div>
           </div>        
    </td>
  </tr> 
  
  
  <tr>
    <td>Course :</td>
    <td>   <div class="col-sm-7">
            <div class="input-group">
                <select class="form-control"  name="Course" id="Course" class="form-control" style="color:black; width: 400px;"required>
                <option value="">-------------------------</option>
                @foreach($student_course as $cou)
                 <option value="{{$cou->title}}">{{$cou->title}}</option>
                @endforeach  
                </select>                       
             </div>
           </div>        
    </td>
  </tr> 
      
  
    <tr>      
    <td>Lecturer :</td>
    <td>   <div class="col-sm-4">
            <div class="input-group">
                 <select class="form-control" name="Lecturer" id="Lecturer" style="color:black; width: 200px;">
                    <option value="">---------------------------</option>
                    @foreach($lecturer as $lec)
                    <option value="{{$lec->lec_name}}">{{$lec->lec_name}}</option>
                    @endforeach                                                                    
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
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
   {{---------Save Course------}}
    <div class="panel-footer">
    <button value="submit" onclick = "getConfirmation();" class="btn btn-default btn-save">Save<i class="fa fa-save"></i></button>
    </div>
   </form>
  </div>
 </div>
</div>

@endsection
@section('script')

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
 @endsection