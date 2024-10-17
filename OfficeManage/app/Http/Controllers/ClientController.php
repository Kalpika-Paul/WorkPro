<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Container\RewindableGenerator;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){

      
        $clients = Client::all();
        
         return view('admin.client.all',compact('clients'));
    }
    public function create(){
        return view('admin.client.create');
   }

   public function store(Request $request)
{
   
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:150',
        'address' => 'required|string|max:255',
        'meeting_time' => 'required|date|after_or_equal:today',  
    ]);

 
    $client = new Client();
    $client->name = $request->name;
    $client->email = $request->email;
    $client->phone = $request->phone;
    $client->address = $request->address;
    $client->meeting_time = $request->meeting_time;
    $client->about = $request->about;
    $client->save();

    return redirect()->route('admin.client.all');
}

   public function status(Client $client){

    if($client->status==1){

        $client->update(['status'=>0]);
    }
    else{

        $client->update(['status'=>1]);
    }
    return redirect()->back();

   }

   public function edit(Client $client)
   {

    return view('admin.client.edit',compact('client'));

   }
   public function update(Request $request, Client $client){

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:150',
        'address' => 'required|string|max:255',
        'meeting_time' => 'required|date|after_or_equal:today',  
    ]);

 
    
    $client->name = $request->name;
    $client->email = $request->email;
    $client->phone = $request->phone;
    $client->address = $request->address;
    $client->meeting_time = $request->meeting_time;
    $client->about = $request->about;
    $client->save();

    return redirect()->route('admin.client.all');

   }

public function destroy(Client $client){

    $client->delete();
    return redirect()->back();

}


public function getTotalClientCount()
    {
        $totalClients = Client::whereNotNull('id')->count(); // Count clients with valid IDs
        return view('admin.client.all', compact('totalClients')); // Pass the count to the view
    }

}
