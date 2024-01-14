<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    public function index()
    {
        $ekskul = Extracurricular::get();
        return view('extracurricular',['ekskulList'=> $ekskul]);
    }
}
