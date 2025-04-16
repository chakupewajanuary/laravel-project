<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Request;
use App\Models\Saler;

class SalerController extends Controller
{

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:salers,email',
            'address' => 'required|string',
            'phone' => 'required|string',
        ]);

        // Create a new Saler record
        Saler::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Saler registered successfully!');
    }

    
    public function index(){
    // Fetch all records from the salers table
    $salers = Saler::all();
    

    // Pass the data to the Blade view
    // return view('salers.index', compact('salers'));
    return view('dis', compact('salers'));
    }

    //for trial to add 
    public function addlist(){
        return view('saler');
    }
    
}
