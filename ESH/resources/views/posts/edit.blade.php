@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {!!Form::model($post,['route'=>['posts.update',$posts->id],'method'=>'PATCH']) !!}
        @include('posts.form_master')
        {!! From::close() !!}
    </div>
</div>

@endsection