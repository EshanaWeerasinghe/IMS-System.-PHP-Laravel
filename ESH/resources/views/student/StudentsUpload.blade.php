@extends('layouts.master')
@section('title','Students List')
@section('content')

 {!! Charts::assets() !!}
    <div class="row">
    <div class="col-lg-12">
        <h3 class="page-header" ><i class="fa fa-file-text-o"></i>Student List</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Student List</li>
            <li><i class="fa fa-file-text-o"></i>Manage</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <section class="panel panel-default">
            <header class="panel-heading">Students List Upload                
            </header>
    </div>
</div>

 <div class="panel-heading">Import and Export Data Into Excel ore CSV</div>
<div class="pannel-body">
         {!! Form::open(array('route' => 
         'product.import','method'=>'POST','files' =>'true')) !!}
         <div class="row">
             <div class="col-xs-10 col-sm-10 col-md-10">
              @if (Session::has('success'))
                <div class="alert atert-success">{{ Session::get('message') }}</div>
              @if (Session::has('warnning'))
                <div class="alert alert-warnning">{{ Session::get('message') }}</div>
              @endif
              <div class="form-group">
                {!! Form::lable('sample_file','Select File to
                Import:'['class'=>'col-md-3]) !!}
                <div class="col-md-9">
                {!! Form::file('studentsupload', array('class' => 'form-control')) !!}
                {!! $errors->first('studentsupload', '<p class="alert alert-danger">
                    ::message</p>') !!}
                </div>   
              </div>
             </div>
             <div class="col-xs-2 col-sm-2 col-md-2 rexr-center">
             {!! Form::submit('upload' ,['class'=>'btn btn-success']) !!} 
            </div>                           
        </div>    
         {!! Form::close() !!}
    </div>
          
@endsection-->



                                
                                 
 
 
 
 
 
 
 
 



