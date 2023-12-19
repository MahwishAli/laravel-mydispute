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
}
