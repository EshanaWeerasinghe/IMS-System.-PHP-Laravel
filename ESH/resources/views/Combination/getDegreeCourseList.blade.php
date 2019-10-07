@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-8">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Semester and Combination</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Semester and Combination</li>
            <li><i class="fa fa-file-text-o"></i>Courses according to Degree List</li>
        </ol>
    </div>
</div>
<div class="panel col-lg-8">
    
    <div class="panel-body">
        <h1 style="text-align: center; font-size: 30px; font-weight: bold">yy</h1>
           <table class="table table-bordered table-condensed table-striped" id="course-info">
           <col width ="50">
          
               <thead>
               <th style="text-align:center">No</th>
               <th style="text-align:center">Course Unit</th>
               <th style="text-align:center">Course Name</th>
               <th style="text-align:center">Combination</th>
               <th style="text-align:center">Degree</th>
               <th style="text-align:center">Degree Type</th>    
               <!--<th style="text-align:center">Course Unit</th> -->
                
                
               </thead>
               <tbody>
                   
                 <!--  @foreach($semester_combination as $Key =>$c)
                        <tr>
                            <td>{{ ++$Key }}</td>
                            <td>{{ $c->year}}</td>
                            <td>{{ $c->semester }}</td>
                            <td>{{ $c->combination }}</td>
                            <td>{{ $c->degree }}</td>
                            <td>{{ $c->degree_type }}</td>                                                                           
                        </tr>
                   @endforeach-->
               </tbody>
           </table>
        
        </div>
        <div class="footer">
       <!-- {{ $semester_combination->render() }} -->
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
</script>
@endsection