<?php

namespace App\Http\Controllers;

use App\Http\Requests\validacionesRequest;
use Illuminate\Http\Request;
use App\informeModel;



class informeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $historial = informeModel::all();
        return view('historial.informes')->with('historial' , $historial);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('historial.createInforme');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validacionesRequest $request)
    {
        $maxHistorial=informeModel::all()->max('CustomerId');

        //2. Crear el nuevo recurso
    

        $nuevoInforme = new informeModel();

        $nuevoInforme->nombre= $request->input("nombre");
        $nuevoInforme->edad= $request->input("edad");
        $nuevoInforme->fechaNac= $request->input("fechaInforme");
        $nuevoInforme->documento= $request->input("documentoInforme");
        $nuevoInforme->entidad= $request->input("entidadInforme");
        $nuevoInforme->direccion= $request->input("direccionInforme");
        $nuevoInforme->telefono= $request->input("telefonoPaciente");
        $nuevoInforme->diagnostico= $request->input("diagnostico");
        $nuevoInforme->cuidador= $request->input("cuidadorP");
        $nuevoInforme->conciencia= $request->input("conciencia");
        $nuevoInforme->estadoPiel= $request->input("estadoP");
        $nuevoInforme->drenajes= $request->input("drenaje");
        $nuevoInforme->venopuncion= $request->input("venopuncion");
        $nuevoInforme->alimentacion= $request->input("alimentacion");
        $nuevoInforme->deposicion= $request->input("deposición");
        $nuevoInforme->orina= $request->input("orina");
        $nuevoInforme->oxigeno= $request->input("oxigeno");
        $nuevoInforme->vomito= $request->input("vomito");
        $nuevoInforme->hemovac= $request->input("hemovac");
        $nuevoInforme->sonda= $request->input("sonda");
        $nuevoInforme->liquidoE= $request->input("liquidoE");
        $nuevoInforme->nombreMedicamento= $request->input("nombreM");
        $nuevoInforme->presentacion= $request->input("presentacion");
        $nuevoInforme->concentracion= $request->input("concentracion");
        $nuevoInforme->posologia= $request->input("posologia");
        $nuevoInforme->dilucion= $request->input("dilucion");
        $nuevoInforme->viaAdmon= $request->input("viaAdmon");
        $nuevoInforme->fecha= $request->input("fecha");
        $nuevoInforme->hora= $request->input("hora");
        $nuevoInforme->enfermero= $request->input("enfermero");
        $nuevoInforme->viaAdministracion= $request->input("viaAdministracion");
        $nuevoInforme->observaciones= $request->input("observaciones");
        $nuevoInforme->estado= "Activo";
        $nuevoInforme->save();
        return redirect("informes")->with('mensaje_exito' , "Informe Creado");
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
    public function edit($idInforme)
    {
        $informe = informeModel::find($idInforme);
        return view('historial.editInforme')->with('informe' , $informe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
