<?php

namespace App\Http\Controllers\DashboardAgent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\DashboardAgent\AgentRequest;

use App\Models\User;

class AuthController extends Controller
{
    public function home()
    {
        return view('DashboardAgent.home');
    }
    public function password()
    {
        return view('DashboardAgent.password');
    }
    public function register()
    {
        return view('DashboardAgent.register');
    }
    public function formLogin()
    {
        return view('DashboardAgent.formLogin');
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

        
        
        return redirect()->route('agent.index');
    }
    /*Dashboard*/
    public function index()
    {
        return view('DashboardAgent.index');
    }
    public function suport()
    {
        return view('DashboardAgent.suport');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('agent.auth.formLogin');
    }
    /**/
    public function store(AgentRequest $request){
        User::create(array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => (Hash::make($request->password)),
            'user_id' => 2,
            'type_user' => 2,
            'number_phone' => $request->number_phone,
            'pix' =>  $request->pix,
            'category' => $request->category,
            'limit' => $request->limit,
            'status' => $request->status
        ));


        return redirect()->back()->withSuccess('Cadastrado com sucesso!');
    }
}
