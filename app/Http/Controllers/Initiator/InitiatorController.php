<?php

namespace App\Http\Controllers\Initiator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InitiatorController extends Controller
{
    public function dashboard(){
        return view("dashboard");
    }
}
