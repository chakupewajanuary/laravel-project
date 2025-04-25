<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            'password'=>bcrypt($request->password),    
        ]);

        return redirect()->route('manufacturer');

    }


}
