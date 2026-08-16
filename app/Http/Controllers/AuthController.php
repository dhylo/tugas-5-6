<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Untuk menamoilkan halaman register
    public function register() {
        return view('register');
    }

    // Proses Register
    public function prosesregister(Request $r) {
        // Validasi dulu
        $r->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|min:3'
        ]); 

        // Kemudian dibuatkan
        User::create([
            'name'      =>  $r->name,
            'email'     =>  $r->email,
            'password'  =>  Hash::make($r->password) // Hash adalah untuk menyamarkan password di database
        ]);

        return redirect()->route('login');
    }

    // Menampilkan halaman login
    public function login() {
        return view('login');
    }

    // Proses Login
    public function proseslogin(Request $r) {
        // Validasi
        $data= $r->validate([
                'email'=>'required',
                'password'=>'required|min:3'
            ]); // Variable $data berfungsi agar di cek di database

        // Mengecek apakah user ada di database ? (kondisi benar)
        if(Auth::attempt($data)) {
            // Jika ada, maka membuat session/kartu identitas
            $r->session()->regenerate();

            // Maka mengarah ke route yang bisa di kelola
            return redirect()->route('divisi.index');
        }

        // Jika gagal login
        return back()->withErrors(['email'=>'Email atau Password Salah']);
    }

    // Proses Logout
    public function logout(Request $r) {
        // Fungsi untuk keluar
        Auth::logout();

        // Jika kita keluar, maka meninaktifkan session/kartu identitas kita
        $r->session()->invalidate();

        return redirect()->route('login');
    }
}
