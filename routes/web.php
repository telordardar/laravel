<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Aboutcontroller;

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

Route::get('/admin/students', function () {
    $students = [
        ['nis' => '2024001', 'name' => 'Azzam Aulawy',     'classroom' => 'XI PPLG 2'],
        ['nis' => '2024002', 'name' => 'Arham Abdurrahman',    'classroom' => 'XI PPLG 2'],
        ['nis' => '2024003', 'name' => 'Haidar Faiz',   'classroom' => 'XI PPLG 2'],
        ['nis' => '2024004', 'name' => 'Muhammad Rifki',  'classroom' => 'XI PPLG 2'],
        ['nis' => '2024005', 'name' => 'Danang Prasetyo',    'classroom' => 'XI PPLG 2'],
        ['nis' => '2024006', 'name' => 'Devo Gampang', 'classroom' => 'XI PPLG 2'],
        ['nis' => '2024007', 'name' => 'Bhisma Astain', 'classroom' => 'XI PPLG 2'],
        ['nis' => '2024008', 'name' => 'Jason Timothy',    'classroom' => 'XI PPLG 2'],
        ['nis' => '2024009', 'name' => 'Ananda Abdillah',    'classroom' => 'XI PPLG 2'],
        ['nis' => '2024010', 'name' => 'Nashwa Taufiq',  'classroom' => 'XI PPLG 2'],
    ];

    return view('admin.students', compact('students'));
})->name('admin.students');
