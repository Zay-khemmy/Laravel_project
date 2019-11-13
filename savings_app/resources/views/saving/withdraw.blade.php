@extends('layouts.new_app')

@section('content')
    <h1 style="text-align:center;">WITHDRAW MONEY</h1>
    <br>
        <form action="/withdraw_submit" method="GET">
            {{ csrf_field() }}
            <label for="select_plan"><h5>SELECT PLAN</h5></label>
                <select name="select_plan" class="form-control" placeholder="select here">
                    @foreach($plans as $plan)
                        <option value="{{$plan->id}}">{{$plan->name}}</option>
                    @endforeach
                </select>
                <br>
                <label for="amount"><h5>AMOUNT</h5></label>
                    <input type="number" name="amount" placeholder="₦" class="form-control">
                <br>
                <label for="reason_for_withdrawal"><h5>REASON FOR WITHDRAWAL</h5></label>
                    <textarea name="reason_for_withdraw" cols="30" rows="10" class="form-control"></textarea>
                <br>
                <input type="submit" name="Submit" class="btn btn-primary">
        </form>
@endsection