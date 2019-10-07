@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="full-right">
            <h2>CRUD Resource</h2>
        </div>
    </div>
</div>


<table class="table table-bordered">
    <tr>
        <th with="80px">No</th>
        <th>Title</th>
        <th>Body</th>
        <th with="140px" class="text-center">

                <i class="glyphicon glyphicon-plus"></i>              
            </a>            
        </th>
    </tr>
    <?php $no=1; ?>
    @foreach ($post as $key => $value)
    <tr>
        <td>{{$no++}}</td>
        <td>{{$value->title}}</td>
        <td>{{$value->body}}</td>
        
        <td>
            <a class="btn btn-info btn-sm" href="{{route('posts.show',$value->id)}}">
                <i class="glyphicon glyphicon-th-large"></i></a>
                <a class="btn btn-primary btn-sm" href="{{route('posts.edit',$value->id)}}">
                    <i class="glyphicon glyphicon-pencil"></i>
                  {!! Form::open(['method'=> 'DELETE','route' => ['posts.destroy', $value->id],'style'=>'display']) !!} 
                  <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"></button>
                  <!! Form::close()!!}
                </a>
        </td>
    </tr>
    
    @endforeach
    
</table>
       
@endsection