<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\DashboardClient\AuthController as ClientController;
use App\Http\Controllers\DashboardAgent\AuthController as AgentController;
use App\Http\Controllers\DashboardAdmin\AuthController as AdminController;
use App\Http\Controllers\DashboardAdmin\TicketController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['as' => 'web.'], function () {
    Route::controller(WebController::class)->group(function () {
        Route::get('/', function(){
            return redirect('dashboard/client/entrar');
        })->name('login');
        Route::get('/gerar', 'gerar')->name('gerar');

    });
});

// Dashboard Cliente
Route::group(['prefix' => 'dashboard/cliente', 'as' => 'client.'], function () {
    Route::controller(ClientController::class)->group(function () {
        Route::name('auth.')->group(function () {
            Route::get('/entrar', 'formLogin')->name('formLogin');
            Route::post('/entrar', 'login')->name('login');
            Route::post('/sair', 'logout')->name('logout');
            Route::get('/recuperar-senha', 'password')->name('password');
            Route::get('/registrar', 'register')->name('register');  
        });
    });

    Route::middleware('client')->group(function () {
        Route::controller(ClientController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/tabela-premiacoes', 'table')->name('table');
            Route::get('/bolas-divididas', 'balls')->name('balls');
            Route::get('/fale-conosco', 'contact')->name('contact');
            Route::get('/sair', 'logout')->name('logout');
        });
    });
});

// Dashboard Agente
Route::group(['prefix' => 'dashboard/agente', 'as' => 'agent.'], function () {
    Route::controller(AgentController::class)->group(function () {
        Route::name('auth.')->group(function () {
            Route::get('/entrar', 'formLogin')->name('formLogin');
            Route::post('/entrar', 'login')->name('login');
            Route::post('/sair', 'logout')->name('logout');
            Route::get('/recuperar-senha', 'password')->name('password');
            Route::get('/registrar', 'register')->name('register');  
            Route::post('/registrar/store', 'store')->name('register.store');  
        });
    });

    Route::middleware('agent')->group(function () {
        Route::controller(AgentController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/suporte-cliente', 'suport')->name('suport');
            Route::get('/sair', 'logout')->name('logout');
        });
    });
});

// Dashboard Admin
Route::group(['prefix' => 'dashboard/admin', 'as' => 'admin.'], function () {
    Route::controller(AdminController::class)->group(function () {
        Route::name('auth.')->group(function () {
            Route::get('/entrar', 'formLogin')->name('formLogin');
            Route::post('/entrar', 'login')->name('login');
            Route::post('/sair', 'logout')->name('logout');
        });
    });

    Route::middleware('admin')->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/validar-agente', 'validateAgent')->name('validateAgent');
            Route::get('/evolucao', 'evolution')->name('evolution');
            Route::get('/resultados', 'result')->name('result');
            Route::get('/informacao-rodada', 'infoRound')->name('infoRound');
            Route::get('/cadastrar-bilhete', 'registerTicket')->name('registerTicket');
            Route::get('/sair', 'logout')->name('logout');
        });

        Route::controller(TicketController::class)->group(function () {
            Route::name('ticket.')->group(function () {
                Route::post('/ticket-store', 'store')->name('store');
                Route::get('/ticket-search', 'search')->name('search');
                Route::delete('/ticket-delete/{ticket_id}', 'destroy')->name('destroy');
            });

        });
    });
});