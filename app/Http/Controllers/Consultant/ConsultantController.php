<?php

namespace App\Http\Controllers\Consultant;

use App\Consultant;
use App\ProfileDelete;
use App\Privacy;
use App\Shortlisted;
use App\RequestDispute;
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

        $consultant = Consultant::where('id', session()->get('loginId'))->first();

        // Check if the current password is valid
        if (!Hash::check($request->get('current_password'), $consultant->password)) {
            return response()->json(['error' => 'Current Password does not match.'], 422);
        }

        // Check if the new password is the same as the current password
        if ($request->new_password == $request->current_password) {
            return response()->json(['samePassword' => 'Current password and new password cannot be the same.'], 422);
        }

        // Update the password
        $user =  Consultant::find($consultant->id);
        $user->password = Hash::make($request->new_password);
        $user->save();

        return response()->json(['success' => 'Password Changed Successfully!']); 
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

        $consultant = Consultant::where('id', session()->get('loginId'))->first();
        $privacyDetail = Privacy::where('user_id', $consultant->id)->where('role_id', $consultant->role_id)->first();

        if($privacyDetail){
            $privacyDetail->update($request->all());
        }
        else{
            Privacy::create(array_merge($request->all(), [
                'user_id' => $consultant->id,
                'role_id' => $consultant->role_id,
            ]));
        }

        return response()->json(['success'=>'Privacy details updated successfully!']); 
    }

    public function profileDelete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'reason' => 'required|string',
        ]);
        
        if($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $consultant = Consultant::where('id', session()->get('loginId'))->first();

        // Create a ProfileDelete record
        $reason = ProfileDelete::create([
            'user_id' => $consultant->id,
            'reason' => $request->input('reason'),
        ]);

        // Soft delete the user
        $consultant->delete();

        // if(session()->has('loginId')) {
        //     session()->pull('loginId');
        //     return response()->json(['success' => 'Request sent successfully! Your profile will be deleted']);
        // }
        return response()->json(['success' => 'Request sent successfully! Your profile will be deleted']);

    }

    public function availableJobs()
    {
        $industries = ['Retail','Technology','Healthcare','Manufacturing','Finance','Real Estate','Entertainment','Hospitality',
                'Automotive','Telecommunications','Energy','Agriculture','Pharmaceuticals','Education','Consulting'];
        $data = RequestDispute::all();

        return view('consultant.available-jobs', compact('data'));
    }
    
    public function saveJobs($id)
    {
        $consultant = Consultant::where('id', session()->get('loginId'))->first();

        $shortlisted = Shortlisted::create([
            'user_id' => $consultant->id,
            'request_id' => $id,
        ]);

        return response()->json(['success' => 'Shortlisted']);

    }  

    public function viewDetails($id)
    {
        $data = RequestDispute::where('id', $id)->first();

        return view('consultant.view-details', compact('data'));
    }

    public function jobsApplied()
    {
        return view('consultant.jobs-applied');
    }

    public function shortJobs()
    {
        $shortlisted = Shortlisted::with('user')->with('request')->get();
        // dd($shortlisted);
        return view('consultant.shortlisted-jobs', compact('shortlisted'));
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
