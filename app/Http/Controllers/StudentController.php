<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Group;

class StudentController extends Controller
{
    public function index(){
        $students = Student::paginate(10);

        $groups = Group::all();

        return view('students.index',compact('students','groups'));
    }

    public function destroy(Student $student){
        $student -> delete();
        return redirect()->back();
    }

    public function store (Request $request, Student $student)
    {
        $data = $request -> validate([
            'fname'=>'string',
            'lname'=>'string',
            'age'=>'integer',
            'group_id' => ''
        ]);
        $student->create($data);
        return redirect()->back();
    }

    public function show(Student $student){
        $groups = Group::all();

        return view('students.show',compact('student','groups'));
    }

    public function update(Request $request, Student $student){
        $data = $request -> validate([
            'fname'=>'string',
            'lname'=>'string',
            'age'=>'integer',
            'group_id' => ''
        ]);
        $student->update($data);
        return redirect()->back();
    }
}
