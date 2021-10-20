<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\historialModel;
use App\config\filesystems;
class historialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Mostrar la variable flash "mensaje_exito" si exixte
        echo session('mensaje_exito');//Session sirve para tener accesos a cualquier variable
        return view('historial.index')->with('historial' , historialModel::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('historial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maxHistorial=historialModel::all()->max('CustomerId');

        //2. Crear el nuevo recurso
       
        

        $nuevoHistorial = new historialModel();

        if($request->hasFile('firmaPaciente')){
            $file = $request->file('firmaPaciente');
            $destinationPath = 'images/featureds/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('firmaPaciente')->move($destinationPath, $filename);
            $nuevoHistorial->FirmaPaciente= $destinationPath . $filename;
        }

        $nuevoHistorial->NombrePaciente= $request->input("nombrePaciente");
        $nuevoHistorial->ApellidoPaciente= $request->input("apellidoPaciente");
        $nuevoHistorial->EdadPaciente= $request->input("edadPaciente");
        $nuevoHistorial->FechaHistorial= $request->input("fechaHistorial");
        $nuevoHistorial->DescripcionHistorial= $request->input("descripcionHistorial");
        $nuevoHistorial->Direccion= $request->input("direccionPaciente");
        $nuevoHistorial->Telefono= $request->input("telefonoPaciente");
       
        $nuevoHistorial->save();
        return redirect("historial")->with('mensaje_exito' , "Historial Creado");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function show(historialModel $historial)
    {
        return view('historial.show')->with('historial' , $historial);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function edit(historialModel $historial)
    {

        //1.

        //Mostrar el formulario de actualizar recurso: Cliente
        return view('historial.edit')->with('historial' , $historial);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, historialModel $historial)
    {
        

        $historial->NombrePaciente = $request->input('nombrePaciente');
        $historial->ApellidoPaciente = $request->input('apellidoPaciente');
        $historial->EdadPaciente = $request->input('edadPaciente');
        $historial->FechaHistorial = $request->input('fechaHistorial');
        $historial->DescripcionHistorial = $request->input('descripcionHistorial');
        $historial->Direccion = $request->input('direccionHistorial');
        $historial->Telefono = $request->input('telefonoHistorial');
        $historial->FirmaPaciente = $request->input('firma');

        $historial->save();
        echo "Historial Actualizado";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function destroy(historialModel $historial)
    {
        $historial =historialModel::find($historial)->delete();
        return redirect()->route('historial.index')
            ->with('success', 'Historialclinico deleted successfully');
    }

    public function habilitar($id){
        $historial = historialModel::find($id);
        switch($historial->habilitado){
            case null:
                $historial->habilitado=1;
                $historial->save();
                $mensaje_exito = 'Historial Habilitado';
                break;
            case 1:
                $historial->habilitado=2;
                $historial->save();
                $mensaje_exito = 'Historial Desactivado';
                break;
            case 2:
                $historial->habilitado=1;
                $historial->save();
                $mensaje_exito = 'Historial Activado';
                break;
        }
        return redirect('historiales')->with('mensaje_exito', $mensaje_exito);
    }


}
