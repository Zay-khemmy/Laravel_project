@extends('layouts.new_app')

@section('content')
    <div class="container">
        <p>Your withdrawal of {{$withdraw->amount}} was Successful</p>
    <br>
        <a href="/home" class="btn btn-primary">Go Back</a>
    </div>
@endsection