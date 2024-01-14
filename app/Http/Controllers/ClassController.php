<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassController extends Controller
{
    public function index()
    {
        // $class = ClassRoom::all(); //Lazy Load

        $class = ClassRoom::with('students','homeroomTeacher')->get(); //Eager load
        return view('classroom', ['classList' => $class]);
    }
}
