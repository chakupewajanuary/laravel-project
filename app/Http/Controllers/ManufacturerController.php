<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Manufacturer;
class ManufacturerController extends Controller
{
    
    public function productreg(){
        return view("jamani");
    }

    //am using Registration instead of store for default as laravel use for saving
    public function Registration(Request $request){
        $request->validate([
            'manufacturer_id' => 'required|string|unique:manufacturers,manufacturer_id',
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:100',
            'contact_info' => 'required|string',
            'password' => 'required|string',
        ]);
         // Create and save manufacturer record
         Manufacturer::create([
            'manufacturer_id' => $request->manufacturer_id,
            'name' => $request->name,
            'country' => $request->country,
            'contact_info' => $request->contact_info,
            'password' => Hash::make($request->password), // ✅ Bcrypt hashing applied
        ]);

        //  // Save manufacturer record
        //  Manufacturer::create($request->all());

        // Redirect with success message
        return redirect()->back()->with('success', 'Manufacturer registered successfully!');
    }

    public function index(){
        $manu=Manufacturer::get();
        return view('displayadmin',compact('manu'));
    }
    
    public function manuLogin(Request $request)
    {
        // Validate the credentials
        $request->validate([
            'manufacturer_id' => 'required|string',  // assuming 'username' is actually manufacturer_id
            'password' => 'required|string',
        ]);

        $manufacturer = Manufacturer::where('manufacturer_id', $request->manufacturer_id)->first();

        if ($manufacturer && Hash::check($request->password, $manufacturer->password)) {
            // Login successful
            session(['manufacturer_id' => $manufacturer->manufacturer_id]); // store manufacturer in session
            return redirect()->route('product.registration'); // redirect to product registration form
        } else {
            // Login failed
            return redirect()->back()->with('error', 'Invalid login credentials');
        }
    }
}
