<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
session_start();

class AdminController extends Controller
{
    

    public function login(){
        return view('admin.lr.login');
    }

    
    public function show_dashboard(Request $request)
    {
        $email = $request->email;
        $role = strtolower($request->role); // Convert role input to lowercase
        $password = md5($request->password);
    
        // Fetch the matching record while ensuring case-insensitive role comparison
        $result = Admin::where('email', $email)
            ->where('password', $password)
            ->whereRaw('LOWER(role) = ?', [$role]) // for case-insensitive matching whereraw is used
            ->first();
    
        if ($result) {
            //Session will store user info
            Session::put('id', $result->id);
            Session::put('name', $result->name);
            Session::put('role', $result->role);
    
            return redirect()->route('admin.master');
        } else {
            Session::put('message', 'Email or password invalid');
            return redirect()->route('admin.lr.login');
        }
    }

    
    
    
}

   



