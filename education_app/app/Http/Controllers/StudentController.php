<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(Request $request){
        $query = Student::query();

        //Filtering by College
        if($request->has('college_id') && $request->college_id != ''){
            $query->where('college_id', $request->college_id);
        }

        //Sort by Name
        $sortOrder = $request->has('sort') && $request->sort == 'desc' ? 'desc' : 'asc';
        $query->orderBy('name', $sortOrder);

        $students = $query->get();
        $colleges = College::all();
        return view('students.index', compact('students', 'colleges', 'sortOrder'));
    }

    //Create a new student
    public function create(){
        $colleges = College::all();
        return view('students.create', compact('colleges'));
    }

    //Store the new student
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students',
            'college_id' => 'required|exists:colleges,id',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student added successfully');
    }

    //Edit a student
    public function edit($id){
        $student = Student::findOrFail($id);
        $colleges = College::all();
        return view('students.edit', compact('student', 'colleges'));
    }

    //Update a student
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $id,
            'college_id' => 'required|exists:colleges,id',
        ]);

        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    //Delete a student
    public function destroy($id){
        $student = Student::findOrFail($id)->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }
}
