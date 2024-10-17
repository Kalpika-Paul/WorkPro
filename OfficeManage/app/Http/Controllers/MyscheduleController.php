<?php

namespace App\Http\Controllers;

use App\Models\Myschedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth for user authentication
use Carbon\Carbon; // Import Carbon for date handling

class MyscheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch schedules of the logged-in user, and filter for today's and upcoming dates
        $myschedules = Myschedule::where('user_id', Auth::id())
                                  ->where('date', '>=', Carbon::today()) // Only show today's and future schedules
                                  ->get();

        return view('frontend.myschedule.all', compact('myschedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.myschedule.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request to ensure the date is today or in the future
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'date' => 'required|date|after_or_equal:today', // Only allow today or future dates
            'description' => 'nullable|string',
        ]);
    
        // Create a new schedule for the authenticated user
        $myschedule = new Myschedule;
        $myschedule->title = $request->title;
        $myschedule->status = $request->status;
        $myschedule->type = $request->type;
        $myschedule->date = $request->date;
        $myschedule->description = $request->description;
        $myschedule->user_id = Auth::id(); // Store the ID of the authenticated user
        $myschedule->save();
    
        return redirect()->route('frontend.myschedule.all');
    }
    


   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Myschedule $myschedule)
    {
        // Ensure that only the owner of the schedule can edit it
        if ($myschedule->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('frontend.myschedule.edit', compact('myschedule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Myschedule $myschedule)
{
    // Ensure that only the owner of the schedule can update it
    if ($myschedule->user_id !== Auth::id()) {
        abort(403, 'Unauthorized action.');
    }

    // Validate the request to ensure the date is today or in the future
    $request->validate([
        'title' => 'required|string|max:255',
        'type' => 'required|string',
        'date' => 'required|date|after_or_equal:today', // Only allow today or future dates
        'description' => 'nullable|string',
    ]);

    // Update the schedule
    $myschedule->title = $request->title;
    $myschedule->status = $request->status;
    $myschedule->type = $request->type;
    $myschedule->date = $request->date;
    $myschedule->description = $request->description;
    $myschedule->save();

    return redirect()->route('frontend.myschedule.all');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Myschedule $myschedule)
    {
        // Ensure that only the owner of the schedule can delete it
        if ($myschedule->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $myschedule->delete();
        return redirect()->back();
    }
}
