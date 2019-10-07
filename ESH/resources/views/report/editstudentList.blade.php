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
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> Student Edit</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Student</li>
            <li><i class="fa fa-file-text-o"></i>Edit Student</li>
        </ol>
    </div>
</div>

{{------------------------}}
<div class="panel panel-default">
    <div class="panel-heading">
        <b><i class=" fa fa-apple"></i>Student Information</b>
    </div>
    <div class="panel-body" style="padding-bottom:4px;">   
        <form action="{{route('UpdateStudentList')}}" method="post" id="frm-create-student" enctype="multipart/form-data">
            {!!csrf_field()!!}
            <input type="hidden" name="class_id" id="class_id">
            <input type="hidden" name="user_id" id="user_id" value="{{Auth::id()}}">
            <input type="hidden" name="dateregistered" id="dateregistered" value="{{date('Y-m-d')}}">           
            <div class="row">
            <div class="col-lg-9 col-md-20 col-sm-9">
                
                                                             
{{------- Reg.No. ------}} 
  <div>
      <div class="col-md-4">
          <div class="form-group">
              <label for="regno">
                   Reg. No. 
              </label>
             <input type="text"  name="Reg_no" id="Reg_no" class="form-control" value ="{{$students->Reg_no}}">
           </div>
        </div>
    </div>

{{-------Name With Initials-------}} 
  <div>
      <div class="col-md-4">
          <div class="form-group">
              <label for="initials">
                   Name with Initials
              </label>
            <input type="text"  name="initials" id="initials" class="form-control" value ="{{$students->initials}}">
           </div>
           </div>           
</div>

{{--------A/L Index---------}}
<div class="col-md-4">
    <div class="form-group">
        <label for="alindex"> A/L Index</label>
    <input type="text"  name="al_index" id="al_index" class="form-control" value ="{{$students->al_index}}">
    </div>
</div>

{{-------Full Name-------}} 
  <div>
      <div class="col-md-4">
          <div class="form-group">
              <label for="fullname">
                  Full Name
              </label>
            <input type="text"  name="full_name" id="full_name" class="form-control" value ="{{$students->full_name}}">
           </div>
           </div>          
</div>  
                                 
{{-------First Name-------}}  
  <div class="form-group">
      <div class="col-md-4">
          <div class="form-group">
              <label for="firstname">
                  First Name
              </label>
        <input type="text"  name="first_name" id="first_name" class="form-control" value ="{{$students->first_name}}">
           </div>
      </div>
                      
{{-------Last Name-------}} 
  <div>
      <div class="col-md-4">
          <div class="form-group">
              <label for="lastname">
                  Last Name
              </label>
            <input type="text"  name="last_name" id="last_name" class="form-control" value ="{{$students->last_name}}">
           </div>
      </div>          
</div>

{{-----------NIC-----------}}
<div>
      <div class="col-md-4">
          <div class="form-group">
              <label for="nationalcard">
                National identity card
              </label>
            <input type="text"  name="national_card" id="national_card" class="form-control" value ="{{$students->national_card}}">
           </div>
           </div>          
</div>

{{--------Level----------}}
<div class="col-sm-4">
        <label for="program">Level</label>
        <input type="hidden" name ="student_id" value="{{$students->student_id}}">
            <div class="input-group">
                <select class="form-control" name="Level" id="level">
                        @foreach($programs as $key => $p)
                        <option value="{{$p->program}}">{{$p->program}}</option>
                        @endforeach  
                        </select>
                     <div class="input-group-addon">
        <span class="fa fa-plus" id="add-more-program"></span>
                    </div>
                </div>
            </div>   

{{--------UGC Course---------}}
<div class="col-md-4">
    <div class="ugccourse">
        <label for="ugccourse">UGC Course</label>
    <input type="text"  name="ugc_course" id="ugc_course" class="form-control" value ="{{$students->ugc_course}}">
    </div>
</div>

<p>&nbsp;</p>
{{--------Combination----------}}
<div class="col-sm-4">
        <label for="program">Combination</label>
        <input type="hidden" name ="student_id" value="{{$students->student_id}}">
            <div class="input-group">
                <select class="form-control" name="combination" id="combination">
                        @foreach($programs as $key => $p)
                        <option value="{{$p->combination}}">{{$p->combination}}</option>
                        @endforeach  
                        </select>
                     <div class="input-group-addon">
        <span class="fa fa-plus" id="add-more-program"></span>
                    </div>
                </div>
            </div>    


{{--------Degree Type---------}}
<div class="col-md-4">
    <div class="form-group">
        <label for="degreetype"> Degree Type</label>
      <input type="text"  name="degree_type" id="degree_type" class="form-control" value ="{{$students->degree_type}}">
    </div>
</div>


{{--------Degree Name---------}}
<div class="col-md-4">
    <div class="form-group">
        <label for="degreetype"> Degree Name</label>
      <input type="text"  name="Degree_Name" id="Degree_Name" class="form-control" value ="{{$students->Degree_Name}}">
    </div>
</div>


{{---------Student Category---------}}
<div class="col-md-4">
    <div class="form-group">
        <label for="studentcategory">Student Category</label>
    <input type="text"  name="student_category" id="student_category" class="form-control" value ="{{$students->student_category}}">
        
    </div>
</div>

{{--------Admission App. Year----------}}
<div class="col-md-4">
    <div class="form-group">
        <label for="admissionyear"> Admission App. Year</label>
    <input type="text"  name="admission_year" id="admission_year" class="form-control" value ="{{$students->admission_year}}">
    </div>
</div>

{{---------Email---------}}
   <div class="col-md-4">
        <div class="form-group">
        <label for="email">Email</label>
   <input type="text"  name="email" id="email" class="form-control" value ="{{$students->email}}">
        </div>
    </div>
</div>
  
{{---------Mobile phone---------}}
<div class="col-md-4">
    <div class="form-group">
        <label for="phone">Mobile Phone</label>
    <input type="text"  name="phone" id="phone" class="form-control" value ="{{$students->phone}}">
        
    </div>
</div>

{{---------Land Phone---------}}
<div class="col-md-4">
    <div class="form-group">
        <label for="landphone">Land Phone</label>
    <input type="text"  name="land_phone" id="land_phone" class="form-control" value ="{{$students->land_phone}}">
        
    </div>
</div>

{{--------Nationality----------}}
<div class="col-md-4">
    <div class="form-group">
        <label for="nationality"> Nationality</label>
       <input type="text"  name="nationality" id="nationality" class="form-control" value ="{{$students->nationality}}">
    </div>
</div>

{{--------Citizenship----------}}
<div class="col-md-4">
    <div class="form-group">
        <label for="ctizenship"> Citizenship</label>
        <input type="text"  name="ctizenship" id="ctizenship" class="form-control" value ="{{$students->ctizenship}}">
    </div>
</div>

{{--------School Town----------}}
<div class="col-md-4">
    <div class="form-group">
        <label for="school_town">School Town</label>
        <input type="text"  name="school_town" id="school_town" class="form-control" value ="{{$students->school_town}}">
    </div>
</div>

{{--------Z-Score----------}}
<div class="col-md-4">
    <div class="form-group">
        <label for="z_score"> Z-Score</label>
       <input type="text"  name="z_score" id="z_score" class="form-control" value ="{{$students->z_score}}">
    </div>
</div>

{{---------Passport---------}}
<div class="col-md-4">
    <div class="form-group">
        <label for="passport">Passport</label>
       <input type="text"  name="passport" id="passport" class="form-control" value ="{{$students->passport}}">
    </div>
</div>


{{----------Gender--------}}
<div class="col-md-4">
    <div class="form-group">
        <fieldset>
            <legend>Gender</legend>
            <table style="width:100%;margin-top:-20px;">
                <td> 
                    <input type="radio" id="sex" name="sex" value="1" @if($students->sex ==  1) checked="checked" @endif />Female
                </td>
                <td>
                    <input type="radio" id="sex" name="sex" value="0" @if($students->sex ==  0) checked="checked" @endif />Male      
                </td>
                              
            </table>
        </fieldset>
    </div>
    </div>  


{{--------Status-------}}
<div class="col-md-4">
    <div class="form-group">
        <fieldset>
            <legend>Status</legend>
            <table style="width:100%;margin-top:-20px;">
                <td> 
                    <input type="radio" id="status" name="status" value="1" @if($students->status ==  1) checked="checked" @endif />Married
                </td>
                <td>
                    <input type="radio" id="status" name="status" value="0" @if($students->status ==  0) checked="checked" @endif />Single      
                </td>
                              
            </table>
        </fieldset>
    </div>
    </div>  


  </div>
  </div>
   <br>
   
{{--------Address---------}}

<div class="panel-heading" style="margin-top: -20px;">
    <b> <i class="fa fa-apple"></i>Other Informations</b>    
</div>
<div class="panel-body" style="padding-bottom: 10px;margin-top:0;">
<div class="row">
    <div class="col-md-3">
      <div class="form-group">
        <label for="hometown">Home Town</label>
       <input type="text"  name="hometown" id="hometown" class="form-control" value ="{{$students->hometown}}">      
            </div>  
        </div> 
    <div class="col-md-3">
      <div class="form-group">
        <label for="paddress">Permanent Address</label>
      <input type="text"  name="preferred_address" id="preferred_address" class="form-control" value ="{{$students->preferred_address}}">      
            </div>  
        </div> 
    
     <div class="col-md-3">
      <div class="form-group">
        <label for="preferredaddress">Preferred Address</label>
       <input type="text"  name="preferred_address" id="preferred_address" class="form-control" value ="{{$students->preferred_address}}">       
            </div>  
        </div> 
    
    <div class="col-md-3">
      <div class="form-group">
        <label for="tempory_address">Temporary Address</label>
        <input type="text"  name="tempory_address" id="tempory_address" class="form-control" value ="{{$students->tempory_address}}">
            </div>  
        </div> 
    
    <div class="col-md-3">
      <div class="form-group">
        <label for="foreign_student">Foreign Student</label>
        <input type="text"  name="foreign_student" id="foreign_student" class="form-control" value ="{{$students->foreign_student}}">        
            </div>  
        </div> 
       
     <div class="col-md-3">
      <div class="form-group">
        <label for="ctizenship">Citizenship</label>
        <input type="text"  name="ctizenship" id="ctizenship" class="form-control" value ="{{$students->ctizenship}}">
            </div>  
        </div> 
       
        <div class="col-md-3">
      <div class="form-group">
        <label for="username">Username</label>
       <input type="text"  name="username" id="username" class="form-control" value ="{{$students->username}}">     
            </div>  
        </div> 
    
            
       <div class="col-md-3">
      <div class="form-group">
        <label for="studentstatus">Student Status</label>
       <input type="text"  name="student_status" id="student_status" class="form-control" value ="{{$students->student_status}}">   
            </div>  
        </div> 
</div>


{{---------Address------}}

    <div class="panel-footer">
    <button value="submit" onclick = "getConfirmation();" class="btn btn-default btn-save">Update<i class="fa fa-save"></i></button>
    
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