<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\plans;
use DB;

class SavingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $plan = plans::all();
        return view('saving.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('saving.plan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            // 'name' => 'required',
            // 'end_date' => 'required',
            'target_amount' => 'required',
            'balance' => 'required',
            // 'brief description' => 'required'
        ]);
        // dd($request->all());
        // dd($request->input('name'));
        // Create a post
        $plan = new plans;
        $plan->name = $request->input('name_of_plan');
        $plan->end_date = $request->input('end_date');
        $plan->target_amount = $request->input('target_amount');
        $plan->user_id = auth()->user()->id;
        $plan->balance = $request->input('balance');
        $plan->brief_desc = $request->input('brief_description');
        $plan->save();

        return view('saving.Submit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function create_fund()
    {
        return view('saving.add_money');
    }
    
    public function add_money_store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'target_amount' => 'required',
            'brief description' => 'required'
        ]);
        return '123';

        // $fund = new funds;
        // $fund->amount = $request->input('amount');
        // $fund->select_plan = $request->input('select_plan');
        // $fund->user_id = auth()->user()->id;
        // $fund->plan_id = 
        // $plan->target_amount = $request->input('target_amount');
    }
}
