<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminController extends Controller
{
    //function for the register admin
    public function adminRegister(Request $request){
        //validation inputs or form
        $request->validate([
            'adminID'=>'required|string|unique:admins,adminID',
            'name'=>'required|string',
            'email'=>'required|unique:admins,email',
            'contactnumber'=>'required|string',
            'password'=>'required|string'
        ]);
        Admin::create([
            'adminID'=>$request->adminID,
            'name'=>$request->name,
            'email'=>$request->email,
            'contactnumber'=>$request->contactnumber,
            'password' => Hash::make($request->password),    
        ]);

        return redirect()->route('adminlogin');

    }
    // function to handle login
    public function login(Request $request)
    {
        // Validate input 
        $request->validate([
            'adminID' => 'required|string',
            'password' => 'required|string',
        ]);
    
        // Find customer by username
        $admin = Admin::where('adminID', $request->adminID)->first();
    
        // Verify password and login
        if ($admin && Hash::check($request->password, $admin->password)) {
            Auth::login($admin);
            return redirect()->route('manufacturer')->with('success', 'Login successful!');
        }
    
        return back()->withErrors(['username' => 'Invalid credentials']);
    }
    // public function getAdimn(){
    //     $data = Admin::get();
    //     return view('displayadmin', compact('data'));
    // }
    // public function getAdimn(){
    //     $data=Admin::get();
    //     return $data;
    //     return view('displayadmin',compact('data'));
        
    // }
    public function index(){
        $manu=Admin::get();
        return view('displayadmin',compact('manu'));
    }
    public function learn(Request $request){

         // Validate input 
         $request->validate([
            'adminID' => 'required|string',
            'password' => 'required|string',
        ]);
        $manu=Admin::get();
        
        if ($request->adminID===$manu->adminID && $request->password===$manu->password) {
            # code...
            return redirect()->route('manufacturer')->with('success', 'Login successful!');
        };
    }
    


}
