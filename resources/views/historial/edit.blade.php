@extends('layouts.navbar')

@section('header')
<link rel="shortcut icon" href="../css/iconoG.ico" type="image/x-icon" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>GHC| Crear Historial</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">
        <link rel="stylesheet" href="css/navbar.css">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
<center>
<section class="content container-fluid" style="margin: 40px 0">
    <div class="">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Actualizar Historial Clínico</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('historial/' . $historial->idHistorial) }}">
                        @method('PUT')
                        @csrf
                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Nombre</label>  
                        <div class="col-md-4">
                        <input value="{{ $historial->NombrePaciente }}" id="textinput" name="nombrePaciente" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Apellido</label>  
                        <div class="col-md-4">
                        <input value="{{$historial->ApellidoPaciente}}" id="textinput" name="apellidoPaciente" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Edad</label>  
                        <div class="col-md-4">
                        <input value="{{ $historial->EdadPaciente }}" id="textinput" name="edadPaciente" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Fecha Historial</label>  
                        <div class="col-md-4">
                        <input value="{{$historial->FechaHistorial}}" id="textinput" name="fechaHistorial" type="date" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Descripción</label>  
                        <div class="col-md-4">
                        <input value="{{ $historial->DescripcionHistorial }}" value="{{$historial->descripcionHistorial}}" id="textinput" name="descripcionHistorial" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Dirección</label>  
                        <div class="col-md-4">
                        <input value="{{ $historial->Direccion }}"  name="direccionPaciente" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Teléfono</label>  
                        <div class="col-md-4">
                        <input value="{{ $historial->Telefono }}" id="textinput" name="telefonoPaciente" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Firma</label>  
                        <div class="col-md-4">
                        <input value="{{$historial->FirmaPaciente}}" id="textinput" name="firmaPaciente" type="file" placeholder="" class="form-control input-md" disabled>
                            
                        </div>
                        </div>
                        
                            <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic">Estado Historial</label>
                            <div class="col-md-4">
                                <select id="selectbasic" name="estadoHistorial" class="form-control" value="{{$historial->estadoHistorial}}">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                                </select>
                            </div>
                            </div>
                        <!-- Button -->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton"></label>
                        <div class="col-md-4">
                            <button style="margin-top: 30px;" id="singlebutton" name="singlebutton" class="btn btn-info">Actualizar</button>
                            <a class="btn btn-info" style="margin-top: 30px;" href="{{ route('historial.index') }}"> Volver</a>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</center>

@endsection