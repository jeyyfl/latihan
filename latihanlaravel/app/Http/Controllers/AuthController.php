<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Memanggil model User bawaan Laravel
use Illuminate\Support\Facades\Hash; // Untuk mengenkripsi password
use Illuminate\Support\Facades\Auth; // Fitur Auth bawaan Laravel

class AuthController extends Controller
{
    // 1. Menampilkan halaman form register
    public function showRegister()
    {
        return view('auth.register');
    }

    // 2. Memproses data register ke database
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users', // email harus unik (tidak boleh sama)
            'password' => 'required|min:6'
        ]);

        // Simpan user baru ke database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password) // Enkripsi password agar aman
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    // 3. Menampilkan halaman form login
    public function showLogin()
    {
        return view('auth.login');
    }

    // 4. Memproses pengecekan login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Cek apakah email dan password cocok di database
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/flights')->with('success', 'Selamat datang! Anda berhasil login.');
        }

        // Jika salah, kembalikan ke form login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ]);
    }

    // 5. Memproses logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Anda berhasil logout!');
    }
}