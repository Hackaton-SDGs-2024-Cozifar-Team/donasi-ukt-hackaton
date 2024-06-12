<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('all-role.pages.login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }else{
            return back()->withErrors([
                'email' => 'Isi data dengan benar',
            ]);
        }
    }

    public function logout(Request $request){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/login');
    }

    public function register(){
        return view('all-role.pages.register');
    }

    public function addRegister(Request $request){
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required'],
            'confirm_password' => ['required'],
        ]);

        if ($credentials) {
            if($request->password === $request->confirm_password){
                 User::create([
                     'fullname' => $request->name,
                     'email' => $request->email,
                     'password' => Hash::make($request->password),
                 ]);
                 return redirect('/login');
            }else{
                return back()->withErrors([
                    'confirm_password' => 'Konfirmasi password tidak cocok',
                ]);
            }
         }else{
             return back()->withErrors([
                 'email' => 'Data wajib diisi',
             ]);
         }
    }
}