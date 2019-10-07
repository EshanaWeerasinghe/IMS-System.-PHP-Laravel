@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-8">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Exam Registration</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Exam Registration</li>
            <li><i class="fa fa-file-text-o"></i>Exam RegistList</li>
        </ol>
    </div>
</div>
<div class="panel col-lg-8">
    
    <div class="panel-body">
        @foreach($students as $Key =>$c)
      <h1 style="text-align: center; font-size: 30px;">Courses Allocated  for year {{$c->Level}}</h1>
                               
       @endforeach
           <table class="table table-bordered table-condensed table-striped" id="course-info">
           <col width ="50"> 
               <thead>
               <th style="text-align:center">No</th>
               <th style="text-align:center">Full Name</th>  
               <th style="text-align:center">Initials</th> 
               <th style="text-align:center">Level</th>
               <th style="text-align:center">Degree</th> 
               <th style="text-align:center">Address</th>                           
               </thead>
               <tbody>
                   @foreach($students as $Key =>$c)
                        <tr>
                            <td>{{ ++$Key }}</td>
                            <td>{{ $c->full_name }}</td> 
                            <td>{{ $c->initials }}</td>
                            <td>{{ $c->Level }}</td>
                            <td>{{ $c->Degree_Name }}</td> 
                            <td>{{ $c->p_address }}</td>                                                                                           
                        </tr>         
                                               
                            <p>{{ ++$Key }}</p>
                            <p><b>Full Name:</b>   {{ $c->full_name }}</p> 
                            <p><b>Initials:</b>    {{ $c->initials }}</p>
                            <p><b>Level:</b>       {{ $c->Level }}</p>
                            <p><b>Degree Name:</b> {{ $c->Degree_Name }}</p> 
                            <p><b>Address:</b>     {{ $c->p_address }}</p>  
                                                            
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