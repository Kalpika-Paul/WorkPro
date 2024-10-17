<?php

namespace App\Http\Controllers;

use App\Models\Addtask; 
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function business(){
        // Fetch tasks where the department is 'Business'
        $addtasks = Addtask::where('dept', 'Business')->get();
        return view('admin.business.all', compact('addtasks'));
    }

    public function design(){
        // Fetch tasks where the department is 'Design'
        $addtasks = Addtask::where('dept', 'Design')->get();
        return view('admin.design.all', compact('addtasks'));
    }

    public function web(){
        // Fetch tasks where the department is 'Web Development'
        $addtasks = Addtask::where('dept', 'Web Development')->get();
        return view('admin.web.all', compact('addtasks'));
    }

    public function app(){
        // Fetch tasks where the department is 'App Development'
        $addtasks = Addtask::where('dept', 'App Development')->get();
        return view('admin.app.all', compact('addtasks'));
    }

    public function digital(){
        // Fetch tasks where the department is 'Digital Marketing'
        $addtasks = Addtask::where('dept', 'Digital Marketing')->get();
        return view('admin.digital.all', compact('addtasks'));
    }
}
