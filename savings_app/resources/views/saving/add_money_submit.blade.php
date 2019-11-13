@extends('layouts.new_app')

@section('content')
    <div class="container">
        <p>Your have successfuly added {{$fund->amount}}</p>
    <br>
        <a href="/home" class="btn btn-primary">Go Back</a>
    </div>
@endsection