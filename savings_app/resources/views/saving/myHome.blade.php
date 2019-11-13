@extends('layouts.new_app')

@section('content')
    <h1 style="text-align:center;">TABLE OF PLANS</h1>
    <br>
    <table class="table table-bordered">
        <tr>
            <th>PLAN NAME</th>
            <th>BALANCE</th>
            <th>TARGET AMOUNT</th>
            <th>TARGET DATE</th>
        </tr>
        @if(count($plan) > 0)
            @foreach($plan as $plans)
        <tr>
            <td>{{$plans->name}}</td>
            <td>{{$plans->balance}}</td>
            <td>{{$plans->target_amount}}</td>
            <td>{{$plans->end_date}}</td>
        </tr>
        @endforeach
        @else 
            <p>No data found</p>
        @endif
    </table>
    <div>
        <a href="/home" class="btn btn-primary">Go Back</a>
    </div>
@endsection