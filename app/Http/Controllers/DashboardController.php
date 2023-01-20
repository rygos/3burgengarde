<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        if(\Auth::user()->perm_admin or \Auth::user()->perm_calendar){
            $data = Calendar::whereYear('start_date', '>=', now())->orderBy('start_date')->limit(5)->get();
        }else{
            $data = Calendar::whereOnlyAdmins(0)->whereYear('start_date', '>=', now())->orderBy('start_date')->limit(5)->get();
        }

        return view('dashboard', [
            'calendar' => $data,
        ]);
    }
}
