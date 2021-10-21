<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class inicioController extends Controller
{
    //accion para mostrar el formulario de login
    public function form(){
        return view('inicioSesion.login');
    }

    //verificar si el usuario esta registrado en la db
    public function login(Request $request)
    {

         if(Auth::attempt([
             'email' => $request->input('correoUsuario'),
             'password' => $request->input('contraseñaUsuario')
             ])){
            //Usuario autenticado
            return redirect()->route('historial.index');
        }else {
            //Usuario no autenticado
                return view('inicioSesion.login')->with('mensaje', "Usuario no reconocido");
             }  

    }

    //acciones para cerrar sesion
    public function logout()
    {
        Auth::logout();
        //Redirigir al login
        return redirect('login')->with('mensaje' , "Sesion cerrada con exito");
    }
}
