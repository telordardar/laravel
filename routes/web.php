<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Aboutcontroller;
use App\Http\Controllers\ClassroomController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/admin/about', [Aboutcontroller::class, 'index']);

Route::get('/admin/student', [StudentController::class, 'index'])->name('admin.student');

Route::get('/admin/classroom', [ClassroomController::class, 'index'])->name('admin.classroom');

