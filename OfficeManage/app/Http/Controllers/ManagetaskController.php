<?php

namespace App\Http\Controllers;

use App\Models\Addtask;
use App\Models\Allwork;
use App\Models\Metask;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagetaskController extends Controller
{
    public function index()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Retrieve tasks filtered by the user's department
        $tasks = Allwork::whereHas('addtask', function ($query) use ($user) {
            $query->where('dept', $user->dept);
        })
        ->whereHas('team', function ($query) use ($user) {
            $query->where('dept', $user->dept);
        })
        ->get();

        return view('frontend.managework.all', compact('tasks'));
    }

    public function create()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Filter tasks based on the user's department
        $addtasks = Addtask::where('dept', $user->dept)->get();

        // Filter users based on the user's department
        $users = User::where('dept', $user->dept)->get();

        // Filter teams based on the user's department
        $teams = Team::where('dept', $user->dept)->get();

        // Pass the filtered tasks and users to the view
        return view('frontend.managework.create', compact('addtasks', 'users', 'teams'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'task_id' => 'required|exists:addtasks,id',
            'assigned_team' => 'required|exists:teams,id',
            'status' => 'required|string',
            'due_date' => 'required|date|after_or_equal:today', // Allow today and future dates
            'dependencies' => 'nullable|string',
        ]);

        // Create a new Allwork instance and assign values
        $allwork = new Allwork();
        $allwork->task_id = $request->task_id;
        $allwork->assigned_team = $request->assigned_team;
        $allwork->status = $request->status;
        $allwork->due_date = $request->due_date;
        $allwork->dependencies = $request->dependencies;

        // Save the task to the database
        $allwork->save();

        // Redirect to the route that lists all tasks or another appropriate page
        return redirect()->route('frontend.managework.all')->with('success', 'Task added successfully!');
    }
    public function edit(Allwork $allwork){
        $user = Auth::user();

        // Filter tasks based on the user's department
        $addtasks = Addtask::where('dept', $user->dept)->get();

        // Filter users based on the user's department
        $users = User::where('dept', $user->dept)->get();

        // Filter teams based on the user's department
        $teams = Team::where('dept', $user->dept)->get();
      
       return view('frontend.managework.edit',compact('allwork','addtasks', 'users', 'teams'));
    }

    public function update(Request $request,Allwork $allwork){
        $request->validate([
            'task_id' => 'required|exists:addtasks,id',
            'assigned_team' => 'required|exists:teams,id',
            'status' => 'required|string',
            'due_date' => 'required|date|after_or_equal:today', // Allow today and future dates
            'dependencies' => 'nullable|string',
        ]);

        $allwork->task_id = $request->task_id;
        $allwork->assigned_team = $request->assigned_team;
        $allwork->status = $request->status;
        $allwork->due_date = $request->due_date;
        $allwork->dependencies = $request->dependencies;

        // Save the task to the database
        $allwork->save();
      return redirect()->route(route: 'frontend.managework.all');
     }
 

    public function destroy(Allwork $allwork){

        $allwork->delete();
        return redirect()->back();

    }

}
