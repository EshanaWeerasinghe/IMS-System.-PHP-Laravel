@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-bg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> Degree List</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Student</li>
            <li><i class="fa fa-file-text-o"></i>Student List</li>
        </ol>
    </div>
</div>
<div class="panel panel-default">
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
           <table class="table table-bordered table-condensed table-striped" id="degree-info">
               <thead>
               <th>No</th>
               <th>Degree_Name</th>
               <th>Combination</th>
               </thead>
               <tbody>
                   @foreach($student_degree as $Key => $stu)
                        <tr>
                            <td>{{ ++$Key }}</td>
                            <td>{{ $stu->Degree_Name }}</td>
                            <td>{{ $stu->Combination }}</td>                          
                        </tr>
                   @endforeach
               </tbody>
           </table>
        
        </div>
        <div class="footer">
        {{ $student_degree->render() }}
        </div>
   </div>

@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#degree-info').DataTable({
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