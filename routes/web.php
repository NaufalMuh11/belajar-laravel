<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route ::get('/about', function(){
    return 'whatever';
});

Route:: get('/contact',function(){
    return view ('contact',['name' => 'cara Nomuh', 'phone' => '0812314292'] );
});

Route:: get('/product', function(){
    return 'product';
});

// Route:: get('/product/{id}', function($id){
//     return 'ini adalah product dengan id ' .$id;
// });

Route::get('/product/{id}', function($id){
    return view ('product.detail', ['id' => $id]);
});

// Route::redirect('/contact', '/about');
// Route:: view('/contact', 'contact', ['name' => 'cara Nomuh', 'phone' => '0812314292']);



Route::prefix('administrator')->group(function () {
    Route::get('/profil-admin', function(){
        return 'profil admin';
    });
    
    Route::get('/about-admin', function(){
        return 'about admin';
    });
    
    Route::get('/contact-admin', function(){
        return 'contact admin';
    });
    
    Route::get('/profil-admin2', function(){
        return 'profil admin2';
    });
    
    Route::get('/about-admin2', function(){
        return 'about admin2';
    });
    
    Route::get('/contact-admin2', function(){
        return 'contact admin24';
    });
});

//dafadfa