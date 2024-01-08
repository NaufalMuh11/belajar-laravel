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

        // QUERY BUILDER
        // $student = DB::table('students')->get();
        // dd($student);
        // DB::table('students')->insert([
        //     'name'=> 'query builder',
        //     'gender'=> 'L',
        //     'nis'=> '0201021',
        //     'class_id'=> 1
        // ]);
            // DB::table('students')->where('id',30)->update([
            //     'name'=> 'query builder 2',
            //     'class_id'=> 3
            // ]);
        // DB::table('students')->where('id',30)->delete();


        //ELOQUENTa
        // $student= Student::all(); 
        // dd($student);
        // Student::create([
        //     'name'=> 'query builder',
        //     'gender'=> 'P',
        //     'nis'=> '0201022',
        //     'class_id'=> 1
        // ]);
        // Student::find(26)->update([
        //     'name'=> 'eloquent 1',
        //     'class_id'=>3
        // ]);
        Student::find(26)->delete();
    }
}
