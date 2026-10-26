<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Pastikan Model Student di-import

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Student';

        // Mengambil semua data dari tabel students di database
        $student = Student::all();

        // Menambahkan $title ke dalam compact agar bisa dipanggil di Blade
        return view('admin.student', compact('title', 'student'));
    }
}
