<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/login', [AuthController::class, 'viewlogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'viewregister']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/dashboard', [CourseController::class, 'viewdashboard'])->name('index')->middleware(['auth']);

Route::get('logout', [AuthController::class, 'logout'])->name('logout');
