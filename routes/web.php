<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;

// LOGIN
Route::get('/logGet', [loginController::class, 'showLoginForm']);   // Show form
Route::post('/logPost', [loginController::class, 'login']);         // Submit form

// REGISTER  
Route::get('/regGet', [registerController::class, 'showRegisterForm']); // Show form
Route::post('/regPost', [registerController::class, 'register']);       // Submit form

Route::get('/', function () {
    return view('login');
});


Route::get('/register', function () {
    return view('register');
});


Route::get('/admin', function () {
    return view('adminDashboard');
});


Route::get('/client', function () {
    return view('clientDashboard');
});
