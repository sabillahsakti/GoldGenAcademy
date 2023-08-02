<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InfoAkunController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/layout', function () {
    return view('layout.master');
});

Route::get('/homedashboard', function () {
    return view('dashboard.index');
});


Route::get('/layout', function () {
    return view('dashboard.layouts.master');
});
Route::get('/layout', function () {
    return view('dashboard.layouts.baster');
});
Route::prefix('dashboard')->group(function (){
    Route::get('/courses', [DashboardController::class, 'courses'])->name('dashboard.courses');
    Route::delete('/courses/{id}', [DashboardController::class, 'deletecourses'])->name('delete.courses');
    Route::get('/courses/{id}', [DashboardController::class, 'editcourses'])->name('edit.courses');
    Route::get('/create', [DashboardController::class, 'create'])->name('create');
    Route::put('/courses/{id}', [DashboardController::class, 'updatecourses'])->name('update.courses');
    Route::get('/orders', [DashboardController::class, 'orders'])->name('dashboard.orders');
    Route::get('/users', [DashboardController::class, 'user'])->name('dashboard.users');
    Route::delete('/users/{id}', [DashboardController::class, 'deleteusers'])->name('delete.users');
    Route::post('/logout', [DashboardController::class, 'logoutadmin'])->name('logout.admin');
    Route::get('/certificates', [DashboardController::class, 'certificates'])->name('dashboard.certificates');
    Route::get('/users/create', [DashboardController::class, 'createusers'])->name('create.users');
    Route::get('/users/add', [DashboardController::class, 'addusers'])->name('add.users');
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

Route::get('/viewdashboard', [AuthController::class, 'viewdashboard']);
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::match(['get', 'post'], '/courses/{id}/purchase', [CourseController::class, 'purchase'])->name('courses.purchase');
Route::post('/courses/confirmation', [CourseController::class, 'confirmation'])->name('courses.confirmation');
Route::get('/confirmation/thankyou', [CourseController::class, 'confirmationThankYou'])->name('confirmation.thankyou');
Route::post('/courses/{id}/payment-confirmation', [CourseController::class, 'paymentConfirmation'])->name('payment.confirmation');


Route::get('/dashboard', [CourseController::class, 'viewdashboard'])->name('index')->middleware(['auth']);

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/submit-recommendation', [RecommendationController::class, 'submit'])->name('submit.recommendation');

Route::get('/account', [InfoAkunController::class, 'showAccountInfo']);
Route::get('/myCourses', [AuthController::class, 'myCourses'])->name('myCourses');
Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('changePasswordForm');
Route::post('/change-password', [AuthController::class, 'changePassword'])->name('changePassword');

Route::get('/certificate/{courseId}', [CertificateController::class, 'showCertificate'])->middleware('auth')->name('certificate');
Route::get('/download-certificate/{courseId}', [CertificateController::class, 'downloadCertificate'])->middleware('auth')->name('downloadCertificate');

Route::get('/dashboard/orders/{id}/edit', [DashboardController::class, 'editOrder'])->name('edit.orders');
Route::put('/dashboard/orders/{id}', [DashboardController::class, 'updateOrder'])->name('update.orders');
Route::delete('/dashboard/orders/{id}', [DashboardController::class, 'deleteOrder'])->name('delete.courses');