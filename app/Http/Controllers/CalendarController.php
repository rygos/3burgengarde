<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index($year = 'NULL'){
        if($year == 'NULL'){
            $year = Carbon::now()->year;
        }

        if(\Auth::user()->perm_admin or \Auth::user()->perm_calendar){
            $data = Calendar::whereYear('start_date', now()->year)->orderBy('start_date')->get();
        }else{
            $data = Calendar::whereOnlyAdmins(1)->whereYear('start_date', $year)->orderBy('start_date')->get();
        }

        $first = Calendar::orderBy('start_date')->first();
        $last = Calendar::orderBy('start_date', 'desc')->first();

        return view('calendar.index', [
            'year' => $year,
            'data' => $data,
            'first' => $first,
            'last' => $last,
        ]);
    }

    public function view($id){
        $item = Calendar::whereId($id)->first();

        return view('calendar.view', [
            'item' => $item,
        ]);
    }

    public function edit($id){
        $item = Calendar::whereId($id)->first();

        return view('calendar.edit', [
            'item' => $item,
        ]);
    }

    public function update(Request $request){
        $i = Calendar::whereId($request->get('id'))->first();
        $i->title = $request->get('title');
        $i->start_date = $request->get('start_date');
        $i->description = $request->get('description');
        $i->private_description = $request->get('private_description');
        $i->date_type = $request->get('date_type');
        $i->public = $request->get('public');
        $i->only_active_members = $request->get('only_active_members');
        $i->only_admins = $request->get('only_admins');
        $i->save();

        return redirect()->back();
    }

    public function add(){

    }

    public function store(Request $request){

    }

}
