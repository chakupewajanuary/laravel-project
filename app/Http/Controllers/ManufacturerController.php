<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Manufacturer;
class ManufacturerController extends Controller
{
    

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
}
