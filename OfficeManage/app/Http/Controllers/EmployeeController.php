<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('admin.employee.all',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       

        $employee = new Employee();

        $employee->name = $request->name;
        $employee->desi = $request->desi;
        $employee->dept = $request->dept;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->joining = $request->joining;
        $employee->status = $request->status;
        $employee->save();

        return redirect()->route('admin.employee.all');
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('admin.employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {


        $employee->name = $request->name;
        $employee->desi = $request->desi;
        $employee->dept = $request->dept;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->joining = $request->joining;
        $employee->status = $request->status;
        $employee->save();

        return redirect()->route('admin.employee.all');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->back();

    }


    public function attendence(){
        $attendances = Attendance::all();
        return view('admin.employee.attendence',compact('attendances'));
    }
    public function regemp(){
        $users = User::all();
        return view('admin.employee.regemp',compact('users'));
    }

    

}

