<?php

namespace App\Http\Controllers\Initiator;

use App\Initiator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InitiatorController extends Controller
{
    public function dashboard()
    {
        if(session()->has('loginId')){
            $initiator = Initiator::where('id', session()->get('loginId'))->first();
        }
        return view('initiator.dashboard', compact('initiator'))->with('role');
    }
}
