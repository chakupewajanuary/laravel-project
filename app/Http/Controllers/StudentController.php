<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function store(Request $request){
        $request->validate([
            'name'=> 'required|string|max:255',
            'email' => 'required|email|unique:salers,email',
            
        ]);
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);
    }
}
