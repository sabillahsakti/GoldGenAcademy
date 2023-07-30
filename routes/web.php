<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RecommendationController;
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

Route::get('/recommendation', function () {
    return view('recommendation');
});

Route::get('/login', [AuthController::class, 'viewlogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'viewregister']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::match(['get', 'post'], '/courses/{id}/purchase', [CourseController::class, 'purchase'])->name('courses.purchase');
Route::post('/courses/confirmation', [CourseController::class, 'confirmation'])->name('courses.confirmation');
Route::get('/confirmation/thankyou', [CourseController::class, 'confirmationThankYou'])->name('confirmation.thankyou');
Route::post('/courses/{id}/payment-confirmation', [CourseController::class, 'paymentConfirmation'])->name('payment.confirmation');


Route::get('/dashboard', [CourseController::class, 'viewdashboard'])->name('index')->middleware(['auth']);

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/submit-recommendation', [RecommendationController::class, 'submit'])->name('submit.recommendation');