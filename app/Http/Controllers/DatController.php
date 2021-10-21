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
    public function show($idDat)
    {
        $datos = DatosPersonales::find($idDat);
        return view('usuarios.show')->with('datos' , $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idDat)
    {
        $datos = DatosPersonales::find($idDat);
        return view('usuarios.edit')->with('datos' , $datos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DatosPersonales $id)
    {

        $dato = DatosPersonales::all();
        $dato->name = $request->input('nombreDat');
        $dato->Apellido = $request->input('apellidoDat');
        $dato->email = $request->input('emailDat');
        $dato->Edad = $request->input('edadDat');
        $dato->Direccion = $request->input('direccionDat');
        $dato->Telefono = $request->input('descripcionDat');
        $dato->save();
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
