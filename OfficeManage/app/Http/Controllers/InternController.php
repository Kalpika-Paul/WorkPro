<?php

namespace App\Http\Controllers;

use App\Models\Intern;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InternController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{

    $interns = Intern::all();
    return view('admin.intern.all', compact('interns')); // Pass both interns and count

}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.intern.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    
    $request->validate([
        'name' => 'required|string',
        'dept' => 'required|string',
        'supervisor' => 'required|string',
        'stipend' => 'nullable|numeric',
        'edu' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'address' => 'required|string',
        'start_date' => 'required|date|after_or_equal:today',
        'end_date' => 'required|date|after_or_equal:start_date',
        'status' => 'required|string',
    ]);

    $intern = new Intern();

   
    $intern->name = $request->name;
    $intern->dept = $request->dept;
    $intern->supervisor = $request->supervisor;
    $intern->stipend = $request->stipend;
    $intern->edu = $request->edu;
    $intern->email = $request->email;
    $intern->phone = $request->phone;
    $intern->address = $request->address;
    $intern->start_date = $request->start_date;
    $intern->end_date = $request->end_date;
    $intern->status = $request->status;
    $intern->save();

    return redirect()->route('admin.intern.all');
}
    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Intern $intern)
    {
        return view('admin.intern.edit',compact('intern'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Intern $intern)
{
    
    $request->validate([
        'name' => 'required|string',
        'dept' => 'required|string',
        'supervisor' => 'required|string',
        'stipend' => 'nullable|numeric',
        'edu' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'address' => 'required|string',
        'start_date' => 'required|date|after_or_equal:today',
        'end_date' => 'required|date|after_or_equal:start_date',
        'status' => 'required|string',
    ]);

    
    $intern->name = $request->name;
    $intern->dept = $request->dept;
    $intern->supervisor = $request->supervisor;
    $intern->stipend = $request->stipend;
    $intern->edu = $request->edu;
    $intern->email = $request->email;
    $intern->phone = $request->phone;
    $intern->address = $request->address;
    $intern->start_date = $request->start_date;
    $intern->end_date = $request->end_date;
    $intern->status = $request->status;
    $intern->save();

    return redirect()->route('admin.intern.all');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Intern $intern)
    {
        $intern->delete();
        return redirect()->back();
    }





    


}
