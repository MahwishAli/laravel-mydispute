<?php

namespace App\Http\Controllers\Initiator;

use App\Initiator;
use App\ProfileDelete;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Jobs\DelayedInitiatorSoftDeletion;

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

        // Check if the current password is valid
        if (!Hash::check($request->get('current_password'), $initiator->password)) {
            return response()->json(['error' => 'Current Password does not match.'], 422);
        }

        // Check if the new password is the same as the current password
        if ($request->new_password == $request->current_password) {
            return response()->json(['samePassword' => 'Current password and new password cannot be the same.'], 422);
        }

        // Update the password
        $user =  Initiator::find($initiator->id);
        $user->password = Hash::make($request->new_password);
        $user->save();

        return response()->json(['success' => 'Password Changed Successfully!']); 
    }

    public function profileDelete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'reason' => 'required|string',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $initiator = Initiator::where('id', session()->get('loginId'))->first();

        // Create a ProfileDelete record
        $reason = ProfileDelete::create([
            'user_id' => $initiator->id,
            'reason' => $request->input('reason'),
        ]);
        
        // Soft delete the user
        // Dispatch the delayed soft deletion job
        DelayedInitiatorSoftDeletion::dispatch($initiator->id)->delay(now()->addHour());

        // $initiator->delete();

        return response()->json(['success' => 'Request sent successfully! Your profile will be deleted after 1 hour']); 
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
