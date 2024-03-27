<?php

namespace App\Http\Controllers\Initiator;

use App\Initiator;
use App\ProfileDelete;
use App\Privacy;
use App\Guidance;
use App\Feedback;
use App\ApplyJobs;
use App\RequestDispute;
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
        // dd($initiator);
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
        
        // Dispatch the delayed soft deletion job
        // where('created_at', '<', Carbon::now()->subMinutes(20))->delete();
        DelayedInitiatorSoftDeletion::dispatch($initiator->id)->delay(now()->addMinutes(30));

        return response()->json(['success' => 'Request sent successfully! Your profile will be deleted']); 
    }

    public function privacyDetails(Request $request)
    {    
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'contact_details' => 'required',
            'unsubscribe' => 'nullable',
            'busy_status' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $initiator = Initiator::where('id', session()->get('loginId'))->first();
        $privacyDetail = Privacy::where('user_id', $initiator->id)->where('role_id', $initiator->role_id)->first();

        if($privacyDetail){
            $privacyDetail->update($request->all());
        }
        else{
            Privacy::create(array_merge($request->all(), [
                'user_id' => $initiator->id,
                'role_id' => $initiator->role_id,
            ]));
        }

        return response()->json(['success'=>'Privacy details updated successfully!']); 
    }

    public function guidance(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'query' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $initiator = Initiator::where('id', session()->get('loginId'))->first();
        Guidance::create(array_merge($request->all(), [
                'user_id' => $initiator->id,
            ]));

        return response()->json(['success'=>'Your query submitted successfully!']); ;

    }

    public function feedback(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'feedback' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $initiator = Initiator::where('id', session()->get('loginId'))->first();
        Feedback::create(array_merge($request->all(), [
                'user_id' => $initiator->id,
            ]));

        return response()->json(['success'=>'Your feedback submitted successfully!']); ;

    }

    public function freeServices()
    {
        if(session()->has('loginId')){
            $initiator = Initiator::where('id', session()->get('loginId'))->first();
        }
        $freeServices = RequestDispute::where('user_id', $initiator->id)->get();
        // dd($freeServices);
        return view('initiator.free-services', compact('initiator', 'freeServices'));
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
