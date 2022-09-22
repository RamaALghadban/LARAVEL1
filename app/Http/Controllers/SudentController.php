<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SudentController extends Controller
{
        public function change()
        {
            $student = Student::all();
            return $student;
        }
        public function show($name)
        {
        $student = Student::where('name',$name)->get();
        return $student;
        }
        public function destroy($name)
        {
        Student::where('name',$name)->delete();
        return "Student is Delete ";
        }
        public function store(Request $request)
    {
        Student::create([
            'name' => $request->name,
            'name' => $request->name,
            'name' => $request->name,
            'name' => $request->name,
        ]);
    }
}
