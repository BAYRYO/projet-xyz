<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function (){
    return view('app.home');
})->middleware('auth')->name('home');
Route::get('/login', function () {return view('auth.login');})->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
