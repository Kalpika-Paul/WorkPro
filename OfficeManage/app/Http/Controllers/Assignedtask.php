<?php

namespace App\Http\Controllers;

use App\Models\Addtask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Assignedtask extends Controller
{
    public function index()
    {
        // Get the logged-in user
        $user = Auth::user();

        // Fetch tasks where the department matches the logged-in user's department
        $addtasks = Addtask::where('dept', $user->dept)->get();

        // Return the view with the tasks
        return view('frontend.assignedtask.all', compact('addtasks'));
    }

}
