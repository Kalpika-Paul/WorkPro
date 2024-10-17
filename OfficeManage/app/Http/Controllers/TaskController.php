<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
         return view('admin.task.all',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $task = new Task();

   // Validation rules
   $validator = Validator::make($request->all(), [
    'name' => 'required|string|max:255',
    'des' => 'nullable|string',
    'deadline' => 'required|date|after_or_equal:today', // Validation for the deadline
    'dept' => 'required|string|max:255',
]);

if ($validator->fails()) {
    return redirect()->back()->withErrors($validator)->withInput();
}

$task = new Task();
$task->name = $request->name;
$task->des = $request->des;
$task->deadline = $request->deadline;
$task->dept = $request->dept;
$task->save();

return redirect()->route('admin.task.all');


    }

    /**
     * Display the specified resource.
     */
    public function status(Task $task)
    {
        if($task->status==1){
            $task->update(['status'=>0]);
        }

        else{
            $task->update(['status'=>1]);
        }
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
       
        return view('admin.task.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'des' => 'nullable|string',
            'deadline' => 'required|date|after_or_equal:today', // Validation for the deadline
            'dept' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $task->name = $request->name;
        $task->des = $request->des;
        $task->deadline = $request->deadline;
        $task->dept = $request->dept;
        $task->save();

        return redirect()->route('admin.task.all');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->back();
    }
}
