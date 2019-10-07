@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-bg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> Course List</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Course</li>
            <li><i class="fa fa-file-text-o"></i>Course List</li>
        </ol>
    </div>
</div>
<div class="panel panel-default">

       <div class="panel-body">
           <table class="table table-bordered table-condensed table-striped" id="course-info">
               <thead>
               <th>No</th>
               <th>Course Unit</th>
               <th>Title</th>
               <th>Year</th>
               <th>Semester</th>
               <th>Level</th>
               <th>Subject</th>
               <th>Department</th>             
               <th>Lecture</th>
               <th>Coordinator</th>
               <th>Credit Values</th>
               <th>Academic Course</th>

               
               
               </thead>
               <tbody>
                   @foreach($student_course as $Key => $stu)
                        <tr>
                            <td>{{ ++$Key }}</td>
                            <td>{{ $stu->course_unit }}</td>
                            <td>{{ $stu->title}}</td>
                            <td>{{ $stu->year}}</td>
                            <td>{{ $stu->semester}}</td>
                            <td>{{ $stu->level }}</td> 
                            <td>{{ $stu->subject }}</td>
                            <td>{{ $stu->dept }}</td>                           
                            <td>{{ $stu->lec }}</td>
                            <td>{{ $stu->coord }}</td>
                            <td>{{ $stu->credit }}</td>                         
                            <td>{{ $stu->academic_course }}</td>
                        </tr>
                   @endforeach
               </tbody>
           </table>
        
        </div>
        <div class="footer">
        {{ $student_course -> render() }}
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