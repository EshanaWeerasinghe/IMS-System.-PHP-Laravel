@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-md-12">
        <br/>
        <h3 align="center">Student Data</h3>
        <br/>
        @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        @endif
        <div align="right">
            <a href="{{route('student.create')}}" class="btn btn-primary">Add</a>
            <br/>
            <br/>
        </div>
        <table class="table table-bordered table-striped">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($students as $row)
            <tr>
                <td>{{$row[first_name]}}</td>
                <td>{{$row[last_name]}}</td>
                <td><a href="">Edit</a></td>            
            </tr>
            @endforeach
        </table>
    </div>    
</div>


@endsection