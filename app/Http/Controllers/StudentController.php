<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        // $student = Student::all(); // select * from students
        // return view('student',['studentList'=> $student]);
        
        $nilai = [9,8,7,6,5,4,3,2,10,2,9,3];

        $aa = collect($nilai)->map(function($value){
            return $value *2;
        })->all();
        dd($aa);
    }
}
