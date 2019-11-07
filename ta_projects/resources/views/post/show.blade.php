@extends('layouts.app')

@section('content')
<a href="/post" class="btn btn-success">Go Back</a>
    <h3>{{$post->title}}</h3>
    <div>
        {{$post->body}}
    </div>
    <small>Posted on {{$post->created_at}}</small>
    <hr>
    <a href="/post/{{$post->id}}/edit" class="btn btn-info">Edit</a>
    {{-- @if(session()->has('success'))
        {{ session()->get('success') }}
    @endif --}}
    {{-- {!! Form::open(['action' => 'PostsController@destroy', 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!} --}}
    <hr>
        <form action="/comment" method="POST">
            {{ csrf_field() }}
        <div class="form-group">
        <input type="hidden" value="{{$post->id}}" name="post_id">
            {{ Form::textarea('comment', '', ['class' => 'form-control', 'placeholder' => 'Enter Comment Here']) }}
        </div>
        <hr>
        <button class="btn btn-primary">Comment</button>
    </form>
@endsection