<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (auth()->check()) {

            $userRole = auth()->user()->role; // Get the user's role

            // Handle role-specific logic
            if ($userRole === 'admin') {
                // Admin-specific logic
                return route('admin.dashboard');
            } elseif ($userRole === 'initiator') {
                // Initiator-specific logic
                return route('initiator.dashboard');
            } elseif ($userRole === 'consultant') {
                // Consultant-specific logic
                return route('consultant.dashboard');
            }

            // Handle unknown roles or redirect to a default dashboard
            abort(404);
        }

        // User is not authenticated, redirect them back
        return redirect()->back();
    }
}
