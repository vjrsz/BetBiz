<?php

namespace App\Http\Controllers\DashboardAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;
use App\Models\Match;
use App\Models\User;

class AuthController extends Controller
{
    public function home()
    {
        return view('DashboardAdmin.home');
    }
    public function password()
    {
        return view('DashboardAdmin.password');
    }
    public function register()
    {
        return view('DashboardAdmin.register');
    }
    public function formLogin()
    {
        return view('DashboardAdmin.formLogin');
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
        return redirect()->route('admin.index');
    }
    /*Dashboard*/
    public function index()
    {
        $quantity = (object) array(
            'client' => User::where('type_user', 3)->count(),
            'agent' => User::where('type_user', 2)->count(),
            'ticket' => Ticket::count(),
            'ticket_on' => Ticket::where('initial_date', '>=' , date("Y-m-d"))->where('status', 'pedding')->count(),

            'ticket_off' => Ticket::where('initial_date', '<' , date("Y-m-d"))->where('status', 'finished')->count(),

        );

        return view('DashboardAdmin.index', [
            'quantity' => $quantity,
        ]);
    }
    public function validateAgent()
    { 
        $agents = User::where('type_user', 2)->get();

        return view('DashboardAdmin.validateAgent', [
            'agents' => $agents,
        ]);
    }
    public function evolution()
    {
        return view('DashboardAdmin.evolution');
    }
    public function result()
    {
        return view('DashboardAdmin.result');
    }
    public function infoRound()
    {
        return view('DashboardAdmin.infoRound');
    }
    public function registerTicket()
    {   
        $tickets = Ticket::all();
        $matches = Match::all();
        return view('DashboardAdmin.registerTicket', [
            'tickets' => $tickets,
            'matches' => $matches
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.auth.formLogin');
    }
}
