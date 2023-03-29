<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        if(\Auth::user()->perm_activated == 1){
            $users = User::orderBy('name')->get();
        }else{
            $users = User::wherePermActivated(1)->orderBy('name')->get();
        }


        return view('members.index', [
            'users' => $users
        ]);
    }
}
