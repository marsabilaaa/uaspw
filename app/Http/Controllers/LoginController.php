<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
class LoginController extends Controller
{

    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $user = new User();
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        if (Auth::Attempt($data)) {
            $user =Auth::user();
            if($user->role === 'tamu' ) {
            return redirect('home');
            }else{
            return redirect('home');
            
            }
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/')->with('message', 'Anda telah berhasil keluar. Sampai jumpa lagi!');
    }
}