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
    <section class="content container-fluid">
        
        <div class="row">
            <div class="col-md-8">

                @includeif('partials.errors')

                <div class="card card-default " style="margin-left: 35%" >
                   
                    <div class="card-body justify-center" style="align-items: center">
                        <form method="POST" action="{{ url('historial') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                        <fieldset>

                        <!-- Form Name -->
                        <legend>Crear Historial Medico</legend>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Nombre</label>  
                        <div class="col-md-6">
                        <input id="textinput" name="nombrePaciente" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Apellido</label>  
                        <div class="col-md-6">
                        <input id="textinput" name="apellidoPaciente" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Edad</label>  
                        <div class="col-md-6">
                        <input id="textinput" name="edadPaciente" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Fecha Historial</label>  
                        <div class="col-md-6">
                        <input id="textinput" name="fechaHistorial" type="date" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Descripción</label>  
                        <div class="col-md-6">
                        <input id="textinput" name="descripcionHistorial" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Dirección</label>  
                        <div class="col-md-6">
                        <input id="textinput" name="direccionPaciente" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Teléfono</label>  
                        <div class="col-md-6">
                        <input id="textinput" name="telefonoPaciente" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="featured">Firma</label>  
                        <div class="col-md-6">
                        <input id="textinput" name="firmaPaciente" type="file" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic">Estado Historial</label>
                            <div class="col-md-6">
                                <select id="selectbasic" name="estadoHistorial" class="form-control">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                                </select>
                            </div>
                            </div>
                        <!-- Button -->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton"></label>
                        <div class="col-md-6">
                            <button id="singlebutton" name="singlebutton" class="btn btn-info" style="margin: 20px">Guardar</button>
                            <a class="btn btn-info" href="{{ route('historial.index') }}" style="margin: 20px"> Volver</a>
                        </div>
                        </div>

                        </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection