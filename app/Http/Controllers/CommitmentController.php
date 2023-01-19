<?php

namespace App\Http\Controllers;

use App\Models\CalendarCommitment;
use Illuminate\Http\Request;

class CommitmentController extends Controller
{
    public function set_commitment(Request $request){
        $c = CalendarCommitment::whereUserId(\Auth::user()->id)->where('calendar_id', $request->get('calendar_id'))->first();
        if($c){
            $c->status = $request->get('status');
            $c->save();
        }else{
            $cn = new CalendarCommitment;
            $cn->status = $request->get('status');
            $cn->calendar_id = $request->get('calendar_id');
            $cn->user_id = \Auth::id();
            $cn->save();
        }

        return redirect()->back();
    }
}
