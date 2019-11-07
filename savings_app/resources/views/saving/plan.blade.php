@extends('layouts.new_app')

@section('content')
    <h1 style="text-align:center;">Create a form</h1>
    <br>
    <form action="/Submit" method="GET">
            {{ csrf_field() }}
        <label><h5>NAME OF PLAN</h5></label>
            <input type="text" name="name_of_plan" placeholder="Enter Here" class="form-control">
        <br>
        <label><h5>BRIEF DESCRIPTION</h5></label>
            <textarea name="brief_description" cols="50" rows="10" class="form-control"></textarea>
        <br>
        <label><h5>END DATE OF PLAN</h5></label>
            <input type="text" name="end_date" class="form-control" id = "datepicker-3">
        <br>
        <label><h5>TARGET AMOUNT</h5></label>
            <input type="number" name="target_amount" placeholder="₦" class="form-control">
        <br>
        <label><h5>BALANCE</h5></label>
            <input type="number" name="balance" placeholder="₦" class="form-control">
        <br>
            <input type="submit" name="Submit" class="btn btn-primary">
    </form>
@endsection