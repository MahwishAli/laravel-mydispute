<?php

namespace App\Http\Controllers\Initiator;

use App\Initiator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required|string',
            'new_password' => 'required|confirmed|min:8|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $initiator = Initiator::where('id', session()->get('loginId'))->first();
        // $auth = Auth::user();
 
        // // The passwords matches
        if (!Hash::check($request->get('current_password'), $initiator->password)) 
        {
            return response()->json('error', "Current Password is Invalid");
        }
 
        // // Current password and new password same
        // if (strcmp($request->get('current_password'), $request->new_password) == 0) 
        // {
        //     return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        // }
 
        // $user =  User::find($auth->id);
        // $user->password =  Hash::make($request->new_password);
        // $user->save();
        // return back()->with('success', "Password Changed Successfully");
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
