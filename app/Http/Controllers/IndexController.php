<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $cal = Calendar::whereOnlyAdmins(0)->where('public', 1)->whereDate('start_date', '>=', now())->orderBy('start_date')->limit(5)->get();

        return view('welcome', [
            'calendar' => $cal,
        ]);
    }
}
