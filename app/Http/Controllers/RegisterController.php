<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;


class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }
    
    public function actionregister(Request $request)
    {
        $existingUser = User::where('name', $request->name)->first();
       
        if ($existingUser) {
            return redirect('/register')->withInput()->withErrors(['name' => 'Username sudah terdaftar. Silakan pilih username lain.']);
        }
        $request->validate([
            'name' => 'required|unique:users',
            'password' => 'required',
        ]);
        $user = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'role' => 'tamu', // Menetapkan nilai "mahasiswa" pada kolom "role"
        ]);

        if ($user) {
            Session::flash('register_success', 'Anda telah berhasil register. Silakan login menggunakan username dan password yang telah Anda daftarkan.');
            return redirect('/login');
        } else {
            return redirect('/register')->withInput()->with('error', 'Register Gagal. Silakan coba lagi.');
        }
    }
}