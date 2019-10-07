@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-bg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> Student List</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Student</li>
            <li><i class="fa fa-file-text-o"></i>Student List</li>
        </ol>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <form  method="GET" id="frm-search">
            <table>
                <tr>
                    <td>
                        <input type="search" name="search" class="form-control" value="{{request('search')}}" placeholder="Search By ID or Name">  
                    </td>
                </tr>
            </table>                   
             </form>
        </div>
    
       <div class="panel-body">
           <table class="table table-bordered table-condensed table-striped" id="studentlist">
               <thead>
               <th>N<sup>0</sup></th> 
               <th>Registration No</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Full Name</th>
               <th>Sex</th>             
               <th>Action</th>
               </thead>
              <tbody>
                   @foreach($students as $Key =>$stu)
                        <tr>
                            <td>{{ ++$Key }}</td> 
                            <td> {{ $stu->Reg_no }}</td>
                            <td>{{ $stu->first_name }}</td>
                            <td>{{ $stu->last_name }}</td>
                            <td>{{ $stu->full_name }}</td>
                            <td>{{ $stu->Sex }}</td> 
                            <td>
                                <a id="de_ed" class="btn btn-sm btn-success" href="{{route('editStudent',$stu->student_id)}}">Edit</a>
                                <a id="de_de" class="btn btn-sm btn-danger" onclick="getConfirmation();"  href="{{route('deleteStudent',$stu->student_id)}}">Delete</a>      
                            </td>                                                            
                        </tr>
                   @endforeach
               </tbody>
           </table>
        
        </div>
        <div class="footer">
        {{ $students->render() }}
        </div>
   </div>

@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#studentlist').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
            
        })
    })
</script>
@endsection





