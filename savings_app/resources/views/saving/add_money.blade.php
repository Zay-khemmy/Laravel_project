@extends('layouts.new_app')

@section('content')
    <h1 style="text-align:center;">ADD MONEY</h1>
    <br>
        <form action="/add_money_submit" method="POST">
            {{ csrf_field() }}
            <label for="amount"><h5>AMOUNT</h5></label>
            <input type="number" name="amount" placeholder="₦" class="form-control">
            <br>
                <label for="select_plan"><h5>SELECT PLAN</h5></label>
                    <select name="select_plan" class="form-control" placeholder="select here">
                        @foreach($plans as $plan)
                            <option value="{{$plan->id}}">{{$plan->name}}</option>
                        @endforeach
                    </select>
            <br>
            <input type="submit" name="Submit" class="btn btn-primary">
        </form>
@endsection