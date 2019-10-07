@extends('layouts.master')
@section('content')

<style type="text/css">
    .student-photo{
        height: 160px;
        padding-left: 1px;
        padding-right: 1px;
        border: 1px solid #ccc;
        background: #eee;
        width: 140px;
        margin: 0 auto;
    }
    .photo>input[type='file']{
        display: none;
    }
    
    .photo{
        width: 30px;
        height: 30px;
        border-radius: 100%;
    }
    .student-id{
        background-repeat:repeat-x;
        border-color: #ccc;
        padding: 5px;
        text-align: center;
        background: #eee;
        border-bottom: 1px solid #ccc;
        
    }
    
    .task{
        padding:56px;
        right-align:50px;
    }
     
    .btn-browse{
        border-color: #ccc;
        padding: 5px;
        text-align: center;
        background: #eee;
        border: none;
        border-top:1px solid #ccc;
    }
    
    fieldset{
        margin-top: 5px;
    }
    
    fieldset legend{
        display: block;
        width: 100%;
        padding: 0;
        font-size: 15px;
        line-height: inherit;
        color: #797979;
        border: 0;
        border-bottom: 1px solid #e5e5e5;
    }
</style>

{{-----------------------------}}
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Upload Student Data</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Upload</li>
            <li><i class="fa fa-file-text-o"></i>Upload Student Data</li>
        </ol>
    </div>
</div>
<div class="panel panel-default">
            <div class="panel-heading">        
            </div>
    <div class="panel-body" style="padding-bottom:4px;">
                
        <div class="row">
            <div class="col-lg-3">
                <h3 class="page-header"><i class="fa fa-upload" style="color:black"></i> Upload Student Data</h3>
            </div>
        </div>
    </div>
    
  
    
    <center>
        <form action="/insert" method="post">
            <table>
                <tr>
                    {{ csrf_field() }}
                    <td>First Name:</td>
                    <td><input type="text" name="firstName"></td>
                </tr>
                
                 <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="lastName"></td>
                </tr>
                
                <tr>
                    <td>Mobile:</td>
                    <td><input type="text" name="mobile"></td>
                </tr>
                
                <tr>
                    <td><input type="submit" name="submit" value="Add"></td>
                </tr>
            </table>
        </form>
    </center>
                       
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin-left:200px;
  margin-right:300px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

@endsection