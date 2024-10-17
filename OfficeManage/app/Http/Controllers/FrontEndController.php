<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FrontEndController extends Controller
{
    public function index(){
        $this->employeeAuthCheck();  // Call your custom authentication check
        return view('frontend.dashboard');
    }

    public function employeeAuthCheck(){
        // Check if the user is authenticated using Laravel's Auth facade
        if (Auth::check()) {
            return;  // User is authenticated, proceed
        } else {
            return redirect()->route('frontend.login')->send();  // Redirect to login if not authenticated
        }
    }
    

}
