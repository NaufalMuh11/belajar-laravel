<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ExtracurricularController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'name' => 'Muh11',
        'role' => 'admin',
        'buah' => ['pisang','durian', 'jeruk','lengkeng']
    ]);
});

Route::get('/students',[StudentController::class,'index']);
Route::get('/student/{id}',[StudentController::class,'show']);

Route::get('/class',[ClassController::class,'index']);

Route::get('/extracurricular',[ExtracurricularController::class,'index']);

Route::get('/teacher',[TeacherController::class,'index']);