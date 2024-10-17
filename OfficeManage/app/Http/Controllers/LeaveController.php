<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaveController extends Controller
{
    public function index(){

        $leaves = Leave::all();

        return view('admin.leave.leave',compact( 'leaves'));
    }

    public function make(){
        return view('frontend.leave');
    }
    

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'start_date' => 'required|date|after_or_equal:' . date('Y-m-d'),
            'end_date' => 'required|date|after_or_equal:start_date',
            'reason' => 'required|string|max:255',
            // Add any other validations needed
        ], [
            'start_date.after_or_equal' => 'The start date cannot be in the past.',
            'end_date.after_or_equal' => 'The end date cannot be earlier than the start date.',
        ]);
    
        // Create a new leave application
        $leave = new Leave();
        $leave->user_id = Auth::id();
        $leave->type = $request->type;
        $leave->start_date = $request->start_date;
        $leave->end_date = $request->end_date;
        $leave->reason = $request->reason;
        $leave->status = 'pending'; // Default status
        if ($leave->save()) {
            return redirect()->back()->with('success', 'Leave application submitted successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to submit leave application. Please try again.');
        }
    }
    
    public function destroy(Leave $leave){
        $leave->delete();
        return redirect()->back();
    }
    
    public function apdec()
{
    // Retrieve all approved leaves sorted by creation date (latest first)
    $leaves = Leave::orderBy('created_at', 'desc')->get();
    
    return view('admin.leave.approvedleave', compact('leaves'));
}

    

public function leaveapproval()
{
    $leaves = Leave::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
    return view('frontend.leaveapproval', compact('leaves'));
}


public function approve(Leave $leave)
{
    // No need for findOrFail, $leave is already an instance of Leave
    $leave->status = 'approved';
    $leave->save();

    return redirect()->back()->with('success', 'Leave request approved successfully.');
}

public function decline(Leave $leave)
{
    // No need for findOrFail, $leave is already an instance of Leave
    $leave->status = 'declined';
    $leave->save();

    return redirect()->back()->with('success', 'Leave request declined successfully.');
}



}
