<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   

    public function index()
    {
        // Get the currently authenticated user
        $user = Auth::user();
    
        // Retrieve teams that belong to the same department as the authenticated user
        $teams = Team::where('dept', $user->dept)->get();
    
        // Pass the filtered teams to the view
        return view('frontend.teams.teamcreate', compact('teams'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $team = new Team();
    
        $team->team_name = $request->team_name;
        $team->team_members = $request->team_members;
    
        // Get the authenticated user's department and assign it to the team
        $team->dept = Auth::user()->dept;
    
        $team->save();
    
        return redirect()->back();
    }
    

    /**
     * Display the specified resource.
     */
   
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {

        return view('frontend.teams.edit', compact('team'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        $team->team_name = $request->team_name;
        $team->team_members = $request->team_members;
    
        // Ensure the team is still associated with the correct department
        $team->dept = Auth::user()->dept;
    
        $team->save();
    
        return redirect()->route('frontend.teams.teamcreate');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->back();
    }
}
