<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Student;

class ProgramController extends Controller
{
    //
    public function create()
    {
        $students = Student::all(); // Get all students
        return view('programs', compact('students'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'time' => 'required|string',
            'st_id' => 'required|exists:students,st_id', // Validate that student exists
        ]);

        Program::create($validated);

        return redirect()->route('programs.create')->with('success', 'Program created successfully!');
    }
}
