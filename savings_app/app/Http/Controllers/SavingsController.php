<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\plans;
use App\funds;
use App\withdraws;
use App\MyHome;
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
            'name_of_plan' => 'required',
            'end_date' => 'required',
            'target_amount' => 'required',
            'brief_description' => 'required'
        ]);
        

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
        $plans = plans::where('user_id', auth()->user()->id)->get();
        return view('saving.add_money', compact('plans'));
    }
    
    public function add_money_store(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required',
            'select_plan' => 'required',
        ]);
        
        $plan = plans::where('id', $request->select_plan)->first();
        $new_balance = $plan->balance + $request->amount;
            if($new_balance > $plan->target_amount){
                return view('saving.error'); 
            }else{
                $plan->update(['balance' => $new_balance]);
                $fund = new funds;
                $fund->amount = $request->input('amount');
                $fund->user_id = auth()->user()->id;
                $fund->plan_id = $request->input('select_plan');
                $fund->save();

                return view('saving.add_money_submit')->with('fund', $fund);
            }
    }

    public function withdraw_create()
    {
        $plans = plans::where('user_id', auth()->user()->id)->get();
        return view('saving.withdraw', compact('plans'));
    }

    public function withdraw_money_store(Request $request)
    {
        $this->validate($request, [
            'select_plan' => 'required',
            'amount' => 'required',
            'reason_for_withdraw' => 'required'
        ]);
        
        $plan = plans::where('id', $request->select_plan)->first();
        $new_balance = $plan->balance - $request->amount;
            if($request->amount > $plan->balance){
                return view('saving.error_two'); 
            }else{
               $plan->update(['balance' => $new_balance]);
                $withdraw = new withdraws;
                $withdraw->plan_id = $request->input('select_plan');
                $withdraw->amount = $request->input('amount');
                $withdraw->reason_for_withdraw = $request->input('reason_for_withdraw');
                $withdraw->user_id = auth()->user()->id;
                $withdraw->save();

                return view('saving.withdraw_submit')->with('withdraw', $withdraw);
            }
    }

    public function myHome_create()
    {
        $plan=plans::all();
        return view('saving.myHome')->with('plan', $plan);
    }

    // public function error()
    // {
       
    // }
}
