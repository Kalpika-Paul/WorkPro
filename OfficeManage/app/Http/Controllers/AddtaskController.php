<?php

namespace App\Http\Controllers;

use App\Models\Addtask;
use App\Models\Client;
use Illuminate\Http\Request;

class AddtaskController extends Controller
{

    
    public function index(){


    $addtasks = Addtask:: all();    
    $clients = Client::all();
    $totalTasks = Addtask::count(); // Count the total tasks
    return view('admin.addtask.addtask',compact('clients','addtasks','totalTasks'));
    }
    public function store(Request $request)
{
    // Add validation for the deadline (must be today or a future date)
    $request->validate([
        'taskName' => 'required|string|max:255',
       
        'dept' => 'required|string|max:255',
        'description' => 'required|string',
       
        'deadline' => 'required|date|after_or_equal:today', // Validation for deadline
       
    ]);

    // Create a new task and assign values from the request
    $addtask = new Addtask;
    $addtask->taskName = $request->taskName;
    $addtask->client_id = $request->client;
    $addtask->dept = $request->dept;
    $addtask->description = $request->description;
    $addtask->priority = $request->priority;
    $addtask->deadline = $request->deadline;
    $addtask->status = $request->status;

    // Save the task
    $addtask->save();

    // Redirect back
    return redirect()->back();
}


public function edit(Addtask $addtask){
    
$clients = Client::all();
return view('admin.addtask.edit', compact('addtask','clients'));

}

public function update(Request $request , Addtask $addtask){
    $request->validate([
        'taskName' => 'required|string|max:255',
       
        'dept' => 'required|string|max:255',
        'description' => 'required|string',
       
        'deadline' => 'required|date|after_or_equal:today', // Validation for deadline
       
    ]);

    // Create a new task and assign values from the request
  
    $addtask->taskName = $request->taskName;
    $addtask->client_id = $request->client;
    $addtask->dept = $request->dept;
    $addtask->description = $request->description;
    $addtask->priority = $request->priority;
    $addtask->deadline = $request->deadline;
    $addtask->status = $request->status;

    // Save the task
    $addtask->save();

    // Redirect back
    return redirect()->back();
    
}

public function destroy(Addtask $addtask){

$addtask->delete();
return redirect()->back();


}



}
