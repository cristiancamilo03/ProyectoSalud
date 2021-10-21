<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DatosPersonales;


class DatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usuarios.index')->with('datos' , DatosPersonales::all());
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosusu = new DatosPersonales();
        $datosusu->name = $request->input('nombreUsu');
        $datosusu->Apellido = $request->input('apellidoUsu');
        $datosusu->email = $request->input('email');
        $datosusu->password = $request->input('password');
        $datosusu->Edad = $request->input('edadUsu');
        $datosusu->Direccion = $request->input('direccionUsu');
        $datosusu->Telefono = $request->input('telefonoUsu');
        $datosusu->Estado = $request->input('estadoUsuario');
        $datosusu->save();
        echo "Usuario Guardado";
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DatosPersonales $datos)
    {
        return view('usuarios.edit')->with('usuarios' , $datos);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DatosPersonales $datos)
    {
        $datos->Nombre = $request->input('nombrePaciente');
        $datos->Apellido = $request->input('apellidoPaciente');
        $datos->Edad = $request->input('edadPaciente');
        $datos->Direccion = $request->input('fechaHistorial');
        $datos->Telefono = $request->input('descripcionHistorial');
        $datos->Firma = $request->input('direccionHistorial');
        $datos->save();
        echo "Historial Actualizado";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
