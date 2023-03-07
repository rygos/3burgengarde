<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthlyFeeController extends Controller
{
    public function index(){
        return view('monthly_fee.index');
    }

    public function add_payment($user_id, $month, $year){

        return view('monthly_fee.payment',[
            'user_id' => $user_id,
            'month' => $month,
            'year' => $year,
        ]);
    }

}
