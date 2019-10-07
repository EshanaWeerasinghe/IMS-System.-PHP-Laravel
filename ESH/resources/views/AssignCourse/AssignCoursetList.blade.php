@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-8">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Assign Courses List</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Assign Courses</li>
            <li><i class="fa fa-file-text-o"></i>Assign Courses List</li>
        </ol>
    </div>
</div>
<div class="panel col-lg-8">
    
    
    <div class="panel-body">
           <table class="table table-bordered table-condensed table-striped" id="course-info">
           <col width ="50">
               <thead>
               <th style="text-align:center; width:15px;">No</th>
               <th style="text-align:center">Year</th>
               <th style="text-align:center">Semester</th>
               <th style="text-align:center">Course Code</th>
               <th style="text-align:center">Course</th>
               <th style="text-align:center">Lecturer</th>
               <th style="text-align:center;width: 100px">Action</th>
               </thead>
               <tbody>
                   @foreach($assign_course as $Key =>$c)
                        <tr>
                            <td>{{ ++$Key }}</td>
                            <td>{{ $c->year }}</td>
                            <td>{{ $c->semester}}</td>
                            <td>{{ $c->Ccode }}</td>
                            <td>{{ $c->Course }}</td>
                            <td>{{ $c->Lecturer }}</td>
                             <td>
                                <a id="de_ed" class="btn btn-sm btn-success"   href="{{route('editAssign',$c->assignc_id)}}">Edit</a>
                                <a id="de_de" class="btn btn-sm btn-danger" onclick="getConfirmation();"  href="{{route('deleteAssign',$c->assignc_id)}}">Delete</a>     
                            </td>                           
                        </tr>
                   @endforeach
               </tbody>
           </table>      
        </div>
        <div class="footer">
        {{ $assign_course->render() }}
        </div>
   </div>

@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#course-info').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
            
        })
    })
    
    function getConfirmation() {
               var retVal = confirm("Do you want to Delete?");
               if( retVal === true ) {
                 
                  return true;
               } 
               else {
                 
                 return false;
               }
           }   
</script>
@endsection