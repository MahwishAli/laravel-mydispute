<?php

namespace App\Http\Controllers\Consultant;

use App\Consultant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ConsultantController extends Controller
{
    public function dashboard()
    {
        if(session()->has('loginId')){
            $consultant = Consultant::where('id', session()->get('loginId'))->first();
        }
        return view('consultant.dashboard', compact('consultant'))->with('role');
    }

    public function profile()
    {
        if(session()->has('loginId')){
            $consultant = Consultant::where('id', session()->get('loginId'))->first();
        }
        return view('consultant.profile', compact('consultant'));
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
        
        // Dispatch the delayed soft deletion job
        // where('created_at', '<', Carbon::now()->subMinutes(20))->delete();
        DelayedInitiatorSoftDeletion::dispatch($initiator->id)->delay(now()->addMinutes(30));

        return response()->json(['success' => 'Request sent successfully! Your profile will be deleted after 1 hour']); 
    }

    public function availableJobs()
    {
        return view('consultant.available-jobs');
    }

    public function jobsApplied()
    {
        return view('consultant.jobs-applied');
    }

    public function shortJobs()
    {
        return view('consultant.shortlisted-jobs');
    }

    public function messages()
    {
        return view('consultant.messages');
    }

    public function reviews()
    {
        return view('consultant.client-reviews');
    }
}
