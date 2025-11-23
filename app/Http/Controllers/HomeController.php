<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // Halaman utama (publik)
    public function index()
    {
        // Jika user sudah login, arahkan ke dashboard
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }

        // Jika belum login, tampilkan halaman publik
        return view('home');
    }

    // Halaman dashboard (setelah login)
    public function dashboard()
    {
        $user = Auth::user();

        // Bisa juga kirim data dinamis ke view
        return view('admin.dashboard', compact('user'));
    }
}
