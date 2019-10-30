@extends('layouts.app')

@section('content')
<a href="/post" class="btn btn-success">Go Back</a>
    <h3>{{$post->title}}</h3>
    <div>
        {{$post->body}}
    </div>
    <small>Posted on {{$post->created_at}}</small>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Enter Here']) }}
        </div>
        <hr>
        {{ Form::submit('Comment', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection