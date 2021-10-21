<?php

namespace App\Http\Controllers;

use App\DatosPersonales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class actualizarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inicioSesion.actualizarPerfil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($datos)
    {
        $datos = DatosPersonales::find($datos);
        return view('inicioSesion.actualizarPerfil')->with('datos' , $datos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idDat)
    {
        $dato = DatosPersonales::find($idDat);
        $dato->name = Auth::user()->name;
        $dato->Apellido = $request->input('apellidoDat');
        $dato->email = Auth::user()->email;
        $dato->Edad = $request->input('edadDat');
        $dato->Direccion = $request->input('direccionDat');
        $dato->Telefono = $request->input('telefonoDat');
        if($request->hasFile('firmaUsuario')){
            $file = $request->file('firmaUsuario');
            $destinationPath = 'images/firmas/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('firmaUsuario')->move($destinationPath, $filename);
            $dato->Firma= $destinationPath . $filename;
        }
        $dato->save();
        return redirect('datos')->with('mesnaje_exito' , "Perfil Actualizado Correctamente");
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
