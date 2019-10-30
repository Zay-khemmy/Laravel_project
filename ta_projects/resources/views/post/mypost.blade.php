@extends('layouts.app')

@section('content')
    <h3>Posts</h3>
    @foreach($post as $posts)
        <div class="card">
        <h3><a href="/post/{{$posts->id}}">{{$posts->title}}</a></h3>
        <small>Written on {{$posts->created_at}}</small>
        </div>
    @endforeach
@endsection