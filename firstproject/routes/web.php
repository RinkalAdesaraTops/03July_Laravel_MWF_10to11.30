<?php

use App\Http\Controllers\EmpController;
use Illuminate\Support\Facades\Route;

Route::get('/emp',array(EmpController::class,'index'))->name('emp');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return view('home');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/contact',function(){
    return view('contact');
});
