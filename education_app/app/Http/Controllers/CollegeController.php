<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;

class CollegeController extends Controller
{
    public function index(){
        $colleges = College::all();
        return view('colleges.index', compact('colleges'));
    }

    //Show the form to create a new college
    public function create(){
        return view('colleges.create');
    }

    //Store the new college
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255|unique:colleges',
            'address' => 'required|string|max:255',
        ]);

        College::create($request->all());
        return redirect()->route('colleges.index')->with('success', 'College added successfully');
    }

    //Show the form to edit a college
    public function edit($id){
        $college = College::findOrFail($id);
        return view('colleges.edit', compact('college'));
    }

    //Update a college
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255|unique:colleges,name,' . $id,
            'address' => 'required|string|max:255' . $id,
        ]);

        $college = College::findOrFail($id);
        $college->update($request->all());
        return redirect()->route('colleges.index')->with('success', 'College updated successfully');
    }

    //Delete a college
    public function destroy($id){
        $college = College::findOrFail($id)->delete();
        return redirect()->route('colleges.index')->with('success', 'College deleted successfully');
    }
}
