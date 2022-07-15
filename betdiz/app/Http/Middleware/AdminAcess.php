<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAcess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check() && auth()->user()->type_user == 1){
            return $next($request);
        }
        return redirect(route('admin.auth.formLogin'))->withInput()->withErrors('Você não é um agente, tente outro tipo de úsuario');
    }
}
