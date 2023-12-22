<?php

namespace App\Http\Controllers\Consultant;

use App\Consultant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
