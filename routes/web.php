<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CertificateController;

use Illuminate\Support\Facades\Route;

Route::get('/layout', function () {
    return view('layout.master');
});


Route::get('/', function () {
    return view('index');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/courses', function () {
    return view('courses');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/testimoni', function () {
    return view('testimoni');
});


Route::get('/recommendation', function () {
    return view('recommendation');
});

Route::get('/myCourses', function () {
    return view('myCourses');
});

Route::get('/login', [AuthController::class, 'viewlogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'viewregister']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::match(['get', 'post'], '/courses/{id}/purchase', [CourseController::class, 'purchase'])->name('courses.purchase');
Route::post('/courses/confirmation', [CourseController::class, 'confirmation'])->name('courses.confirmation');
Route::get('/confirmation/thankyou', [CourseController::class, 'confirmationThankYou'])->name('confirmation.thankyou');
Route::post('/courses/{id}/payment-confirmation', [CourseController::class, 'paymentConfirmation'])->name('payment.confirmation');


Route::get('/dashboard', [CourseController::class, 'viewdashboard'])->name('index')->middleware(['auth']);

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/submit-recommendation', [RecommendationController::class, 'submit'])->name('submit.recommendation');

Route::get('/myCourses', [AuthController::class, 'myCourses'])->name('myCourses');

Route::get('/certificate/{courseId}', [CertificateController::class, 'showCertificate'])->middleware('auth')->name('certificate');
Route::get('/download-certificate/{courseId}', [CertificateController::class, 'downloadCertificate'])->middleware('auth')->name('downloadCertificate');