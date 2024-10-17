<?php

namespace App\Http\Controllers;

use App\Models\Addtask;
use App\Models\Attendance;
use App\Models\Client;
use App\Models\Intern;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
class SuperadminController extends Controller
{
    public function index()
    {
        $this->adminauthcheck(); 
    
        // Count registered users
        $registeredUserCount = User::count(); 
    
        // Count total clients
        $totalClients = Client::count(); // Add this line to count clients
        $totalTasks = Addtask::count();
        // Get today's date
        $today = date('Y-m-d');
    
        // Count today's attendance
        $todayAttendanceCount = Attendance::where('date', $today)->count();
        $totalInterns = Intern::whereNotNull('id')->count(); 
        // Pass the counts to the view
        return view('admin.dashboard', compact('registeredUserCount', 'todayAttendanceCount', 'totalClients','totalInterns','totalTasks'));
    }
    

    
   

    public function logout(){
        Session::flush();
        return redirect()->route('admin.lr.login');
    }

    public function adminauthcheck(){
        $id = Session::get('id');
        Log::info('Session ID: ' . $id);
        if($id){
            return;
        } else {
            Log::info('Session expired or not set. Redirecting to login.');
            return redirect()->route('admin.lr.login')->send();
        }
    }
    
}
