@extends('layouts.app')

@section('content')
    <form action="/add_money_submit">
        <label for="amount">Amount</label>
        <input type="number" name="amount" class="form-control">
        <br>
        <label for="select_plan">Select Plan</label>
        <select name="">
            <option value=""></option>
            <option value=""></option>
        </select>
        <br>
        <input type="submit" name="Submit" class="btn btn-primary">
    </form>
@endsection