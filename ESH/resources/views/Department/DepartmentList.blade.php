@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-8">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> Department List</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Department</li>
            <li><i class="fa fa-file-text-o"></i>Department List</li>
        </ol>
    </div>
</div>
<div class="panel col-lg-8">
<!--    <div class="panel-body">
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
    -->
    <div class="panel-body">
           <table  class="table table-bordered table-condensed table-striped" id="dept-info">
           <col width ="50">
  
           
               <thead>
               <th style="text-align:center">No</th>
               <th style="text-align:center">Department Name</th>
               <th style="text-align:center">Degree</th>
               <th style="text-align:center">Head of Department</th>
               <th style="text-align:center;width: 100px">Action</th>
               
              
               </thead>
               <tbody>
                   @foreach($department as $Key =>$stu)
                        <tr>
                            <td>{{ ++$Key }}</td>                      
                            <td>{{ $stu->dept_name }}</td>
                            <td>{{ $stu->degree }}</td>
                            <td>{{ $stu->hod }}</td>
                            <td>
                                <a class="btn btn-sm btn-success" href="{{route('editDept',$stu->dept_id)}}">Edit</a>
                                <a class="btn btn-sm btn-danger" onclick="getConfirmation();"  href="{{route('delete',$stu->dept_id)}}">Delete</a>                                  
                            </td>
                                                              
                        </tr>
                   @endforeach
               </tbody>
           </table>
        
        </div>
        <div class="footer">
        {{ $department->render() }}
        </div>
   </div>

@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#dept-info').DataTable({
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