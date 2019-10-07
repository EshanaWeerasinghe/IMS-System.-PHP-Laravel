@extends('layouts.master')
@section('title','Student Exam')
@section('content')
 {!! Charts::assets() !!}
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Student Exam  Result</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                <li><i class="icon_document_alt"></i>Exams</li>
                <li><i class="fa fa-file-text-o"></i>Student Exams</li>
            </ol>           
        </div>
    </div>

<div class="pannel-body">
<a href="#" class="btn btn-danger">Delete All</a>
<a href="#"  class="btn btn-success">Import</a>
<div class="btn-group">
    <button type="button" class="btn btn-info">Export</button>
    <button type="button" class="btn btn-info dropdown-toggle"   data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only">Toggole Dropdown</span>
</button>   
    <ul class="dropdown-menu" role="menu" id="export-menu">
        <li id="export-to-excel"><a href="#">Export to Excel</a></li>
        <li class="divider"></li>
        <li><a href="#">Other</a></li>  
    </ul>
</div>

<div class="table-responsive">
    <table class="table table-hover table-striped table-condensed">
    <caption>Customer Information</caption>    
    <thead>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Subjet</th>
    <th>Marks</th>      
    </thead>   
    </table>      
</div>