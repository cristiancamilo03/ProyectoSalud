<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class estadoUsuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->Estado=='1'){
            return $next($request);
            return redirect('historial');
        }else{
            Auth::logout();
            return redirect()->route('login.form')->with('mensaje' , "No se puede iniciar sesion porque estas inactivo, contactate con el administrador");

        }
    }
}
