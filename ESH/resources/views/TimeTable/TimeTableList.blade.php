@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-bg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> TimeTable</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>TimeTable</li>
            <li><i class="fa fa-file-text-o"></i>TimeTable</li>
        </ol>
    </div>
</div>
<div class="panel panel-default">

       <div class="panel-body">
           <table class="table table-bordered table-condensed table-striped" id="timetable-info">
               <thead>
               <th>No</th>
               <th>Year</th>
               <th>Semester</th>
               <th>Day</th>
               <th>Time</th>
               <th>Course Code</th>
               <th>Course Name</th>
               <th>Lecture Hall</th>             
              
                             
               </thead>
               <tbody>
                   @foreach($timetable as $Key => $t)
                        <tr>
                            <td>{{ ++$Key }}</td>
                            <td>{{ $t->year }}</td>
                            <td>{{ $t->semester}}</td>
                            <td>{{ $t->day}}</td>
                            <td>{{ $t->time}}</td>
                            <td>{{ $t->course_code }}</td> 
                            <td>{{ $t->course_name }}</td>
                            <td>{{ $t->lec_hall }}</td>                                                      
                        </tr>
                   @endforeach
               </tbody>
           </table>
        
        </div>
        <div class="footer">
        {{ $timetable -> render() }}
        </div>
   </div>

@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#timetable-info').DataTable({
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