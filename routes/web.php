<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});
Route::post('/upload',[HomeController::class,'upload']);
Route::get('/show',[HomeController::class,'show']);
Route::get('/delete/{id}',[HomeController::class,'delete']);