<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Authcontroller extends Controller
{
    public function login(){
        return view('frontend.login');
    }

   
    public function loginpost(Request $request) 
{
    // Validate the incoming request
    $request->validate([
        "email" => "required|email",
        "password" => "required|min:6",
        "dept" => "required"
    ]);

    // Retrieve email and password for authentication
    $credentials = $request->only("email", "password");

    // Attempt to authenticate the user
    if (Auth::attempt($credentials)) {
        // Authentication passed, get the authenticated user
        $user = Auth::user();

        // Check if the department matches
        if ($user->dept === $request->dept) {
            // Store the user data in the session
            session(['user' => $user]); // Store the user in session
            
            return redirect()->route('frontend.master')->with("success", "Login Successful");
        } else {
            Auth::logout(); // Log out if the department does not match
            return redirect()->route('frontend.login')->with("error", "Login Failed: Invalid department");
        }
    } else {
        // Authentication failed
        return redirect()->route('frontend.login')->with("error", "Login Failed: Invalid credentials");
    }
}

    
    
    
    public function register(){
       
        return view('frontend.register');
    }

   

    public function registerpost(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'joining' => 'required|date',
            'dept' => 'required|string|max:100',
            'designation' => 'required|string|max:100',
            'salary' => 'required|numeric|min:0',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'file' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048' // Validate file type and size
        ]);
    
        // Handle file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName(); // Create a unique file name
            $filePath = $file->storeAs('public/files', $fileName); // Store file in 'storage/app/public/files'
        } else {
            return redirect()->route('frontend.register')->with('error', 'File upload failed. Please try again.');
        }
    
        // Create a new user instance and assign properties
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->date_of_joining = $request->joining;
        $user->dept = $request->dept;
        $user->designation = $request->designation;
        $user->salary = $request->salary;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->file = $fileName; // Save the filename to the database
    
        // Attempt to save the user and redirect accordingly
        if ($user->save()) {
            return redirect()->route('frontend.master')->with('success', 'User created successfully.');
        } else {
            return redirect()->route('frontend.register')->with('error', 'Failed to create account. Please try again.');
        }
    }
    
    
    public function logout(){
        Session::flush();
        return redirect()->route('frontend.login');
    }

    public function delete(User $user){
        $user->delete();
        return redirect()->back();
     }

     public function getRegisteredUserCount()
{
    $registeredUserCount = User::whereNotNull('id')->count(); // Count users with valid IDs
    return view('admin.dashboard', compact('registeredUserCount')); // Pass the count to the view
}


     


}
