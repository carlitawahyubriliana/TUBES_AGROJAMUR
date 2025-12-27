<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // login
    public function showLogin()
    {
        return view('login');
    }
    
    // Proses login 
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        
        if ($user && password_verify($request->password, $user->password)) {
            Auth::login($user);
            
            if ($user->role == 'admin') {
                return redirect('/admin/dashboard');
            } else {
                return redirect('/');
            }
        }
        
        return back()->with('error', 'Email/password salah!');
    }
    
    // register
    public function showRegister()
    {
        return view('buatakun');
    }
    
    // Proses register 
    public function register(Request $request)
    {
        $user = new User();
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 'customer';
        $user->telepon = $request->telepon;
        $user->save();
        
        Auth::login($user);
        
        return redirect('/')->with('success', 'Akun berhasil dibuat!');
    }
    
    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
