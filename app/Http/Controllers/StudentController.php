<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        // $student = Student::all(); // select * from students
        $student = Student::get();
        return view('student',['studentList'=> $student]);
    }

    public function show($id){
        $student = Student::with(['class.homeroomTeacher','extracurriculars'])
            ->findOrFail($id);
        return view('student-detail',['student'=>$student]);
    }
}
