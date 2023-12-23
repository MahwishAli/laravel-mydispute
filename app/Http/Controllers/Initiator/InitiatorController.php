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

    public function profile()
    {
        if(session()->has('loginId')){
            $initiator = Initiator::where('id', session()->get('loginId'))->first();
        }
        return view('initiator.profile', compact('initiator'))->with('role');
    }

    public function freeServices()
    {
        if(session()->has('loginId')){
            $initiator = Initiator::where('id', session()->get('loginId'))->first();
        }
        return view('initiator.free-services', compact('initiator'));
    }

    public function paidServices()
    {
        if(session()->has('loginId')){
            $initiator = Initiator::where('id', session()->get('loginId'))->first();
        }
        return view('initiator.paid-services', compact('initiator'));
    }

    public function draftServices()
    {
        if(session()->has('loginId')){
            $initiator = Initiator::where('id', session()->get('loginId'))->first();
        }
        return view('initiator.draft-services', compact('initiator'));
    }

    public function requirements()
    {
        if(session()->has('loginId')){
            $initiator = Initiator::where('id', session()->get('loginId'))->first();
        }
        return view('initiator.requirements', compact('initiator'));
    }

    public function shortlistedCon()
    {
        if(session()->has('loginId')){
            $initiator = Initiator::where('id', session()->get('loginId'))->first();
        }
        return view('initiator.shortlisted-consultant', compact('initiator'));
    }

    public function consultantApp()
    {
        if(session()->has('loginId')){
            $initiator = Initiator::where('id', session()->get('loginId'))->first();
        }
        return view('initiator.consultant-app', compact('initiator'));
    }

    public function reviews()
    {
        if(session()->has('loginId')){
            $initiator = Initiator::where('id', session()->get('loginId'))->first();
        }
        return view('initiator.consultant-review', compact('initiator'));
    }
}
