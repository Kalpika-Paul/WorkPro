<?php

namespace App\Http\Controllers;

use App\Models\Intern;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller

    




{
    public function index()
    {
       
       
        return view('admin.dashboard' , );
    }
}


