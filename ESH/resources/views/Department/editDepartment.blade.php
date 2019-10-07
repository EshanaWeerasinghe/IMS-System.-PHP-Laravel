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
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Department Details</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="{{route('dashboard')}}">Home</a></li>
            
            <li><i class="fa fa-file-text-o"></i>Department Details</li>
        </ol>
    </div>
</div>

{{---------------------------}}
<div class="row">
    <div class="col-lg-8">   
{{------------------------}}

<div class="panel panel-default">
    <div class="panel-heading">
        <b><i class=" fa fa-university"></i>Edit Department Details</b>
    </div>
    <div class="panel-body" style="padding-bottom:4px;">
        
        <form action="{{route('update')}}" method="post" id="frm-create-student" enctype="multipart/form-data">
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
      Department Details
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
    <td>Department Name</td>
    
    <input type="hidden" name ="dept_id" value="{{$dept->dept_id}}">
   <?php
   echo $dept->dept_id;
           ?>
    <td>  <div>
      <div class="col-md-10">
          <div class="form-group">            
              <input type="text"  name="dept_name" id="dept_name" class="form-control" value="{{$dept->dept_name}}">
           </div>
        </div>
    </div></td> 
  </tr>
   <tr>
    <td>Head of Department</td>
    <td>  <div>
      <div class="col-md-10">
          <div class="form-group">            
              <input type="text"  name="hod" id="hod" class="form-control" value ="{{$dept->hod}}">
           </div>
        </div>
    </div></td> 
  </tr>
  <tr>
    <td>Degree</td>
    <td>  <div>
      <div class="col-md-10">
          <div class="form-group">    
              <select class="form-control"  name="degree" id="degree" class="form-control" style="color:black; width: 500px;"required>
                   
                    
                    <option value="{{$dept->degree}}">{{$dept->degree}}</option>
                    
              </select>
              <!--<input type="text"  name="degree" id="degree" class="form-control" required>-->
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

{{---------Save Course------}}
    <div class="panel-footer">
        <button type="submit" onclick = "getConfirmation();" class="btn btn-default btn-save">Edit Department <i class="fa fa-save"></i></button>
    
    </div>
   </form>
  </div>
 </div>
</div>

@endsection
@section('script')

<script type ="text/javascript">
   
  function getConfirmation() {
               var retVal = confirm("Do you want to Edit?");
               if( retVal === true ) {
                 
                  return true;
               } else {
                 
                 return false;
               }
           }
</script>
 @endsection

