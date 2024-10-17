<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AttendanceController extends Controller
{
    public function index()
    {
        return view('frontend.employee.attendance');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'date' => [
                'required',
                'date',
                'date_format:Y-m-d',
                function ($attribute, $value, $fail) {
                    if ($value !== date('Y-m-d')) {
                        $fail('The ' . $attribute . ' must be today\'s date.');
                    }
                },
            ],
        ]);
    
        // Get authenticated user and their department
        $user = Auth::user();
        $dept = $user->dept; 
    
        Log::info('User department:', ['department' => $dept]);
    
        // Check if attendance for the user already exists for today
        $existingAttendance = Attendance::where('emp_id', $user->id)
            ->where('date', $request->date)
            ->first();
    
        if ($existingAttendance) {
            // If attendance already exists, redirect back with an error message
            return redirect()->back()->with('error', 'You have already submitted your attendance for today.');
        }
    
        // Create new attendance record
        $attendance = new Attendance();
        $attendance->emp_id = $user->id; // Use authenticated user's ID
        $attendance->dept = $dept; 
        $attendance->date = $request->date;
    
        // Check if department is null
        if (!$attendance->dept) {
            return redirect()->back()->with('error', 'Department cannot be null.');
        }
    
        // Save the attendance and return a success message
        if ($attendance->save()) {
            return redirect()->back()->with('success', 'Attendance recorded successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to record attendance. Please try again.');
        }
    }
    public function showTodayAttendanceCount()
    {
      
        $today = date('Y-m-d');

        $todayAttendanceCount = Attendance::where('date', $today)->count();

        return view('frontend.employee.today-attendance', compact('todayAttendanceCount'));
    }
}
