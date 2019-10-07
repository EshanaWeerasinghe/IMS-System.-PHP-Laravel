@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {{!! Form::open(['route'=>'posts.store', 'method'=>'POST'])!!}}
            @include('post.form_master')
        {{!! form::close() !!}}
    </div>
</div>


@endsection