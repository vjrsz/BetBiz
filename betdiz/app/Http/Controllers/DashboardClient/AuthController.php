<?php

namespace App\Http\Controllers\DashboardClient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function home()
    {
        return view('DashboardClient.home');
    }
    public function password()
    {
        return view('DashboardClient.password');
    }
    public function register()
    {
        return view('DashboardClient.register');
    }
    public function formLogin()
    {
        return view('DashboardClient.formLogin');
    }
    public function login(Request $request)
    {
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->withInput()->withErrors('Email inválido.');
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (!Auth::attempt($credentials)) {
            return redirect()->back()->withInput()->withErrors('Email ou senha inválidos.');
        }

        
        
        return redirect()->route('client.index');
    }
    /*Dashboard*/
    public function index()
    {
        return view('DashboardClient.index');
    }
    public function table()
    {
        return view('DashboardClient.table');
    }
    public function balls()
    {
        return view('DashboardClient.balls');
    }
    public function contact()
    {
        return view('DashboardClient.contact');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('client.auth.formLogin');
    }
}
