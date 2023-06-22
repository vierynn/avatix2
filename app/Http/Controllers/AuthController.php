<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;
use Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function signup()
    {
        return view('signup');
    }

    public function postLogin(Request $request)
    {
        var_dump("a");
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil
            return redirect()->intended('/home');
        } else {
            // Jika autentikasi gagal
            return back()->withErrors([
                'username' => 'Username atau password salah.',
            ]);
        }
    }

    public function postSignup(Request $request)
    {
        // var_dump($request);
        // Validasi input
        // $request->validate([
        //     'firstname' => 'required',
        //     'lastname' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'username' => 'required|unique:users',
        //     'password' => 'required|min:6',
        // ]);

        // Membuat user baru
        $user = new User();
        var_dump($request->input("firstname"));
        $user->profile_pic = "";
        $user->firstName = $request->input('firstname');
        $user->lastName = $request->input('lastname');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        // Setelah signup, langsung login
        Auth::login($user);

        return redirect('/login');
    }

    public function dashboard()
    {
        // Cek apakah user sudah login
        if (Auth::check()) {
            return view('dashboard');
        } else {
            return redirect('/');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
