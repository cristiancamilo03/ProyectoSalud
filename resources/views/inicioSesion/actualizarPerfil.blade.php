@extends('layouts.navbar')

@section('header')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<center>
<section class="content container-fluid" style="margin: 40px 0">
    <div class="">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Actualizar Personal de Salud</span>
                </div>
                <div class="card-body">
                <form method="POST" action="{{ url('perfil/' . $datos->idDat) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Nombre</label>  
                        <div class="col-md-4">
                        <input value="{{ Auth::user()->name }}" id="textinput" name="nombreDat" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Apellido</label>  
                        <div class="col-md-4">
                        <input value="{{ $datos->Apellido }}" id="textinput" name="apellidoDat" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Edad</label>  
                        <div class="col-md-4">
                        <input value="{{ $datos->Edad }}" id="textinput" name="edadDat" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                                                <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Email</label>  
                        <div class="col-md-4">
                        <input value="{{ Auth::user()->email }}" id="textinput" name="emailDat" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Dirección</label>  
                        <div class="col-md-4">
                        <input value="{{$datos->Direccion}}" id="textinput" name="direccionDat" type="text" placeholder="" class="form-control input-md" >
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Teléfono</label>  
                        <div class="col-md-4">
                        <input value="{{ $datos->Telefono }}" id="textinput" name="telefonoDat" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Firma</label>  
                            <div class="col-md-4">
                            <input value="{{ $datos->Telefono }}" id="textinput" name="firmaUsuario" type="file" placeholder="" class="form-control input-md">
                                
                            </div>
                            </div>
                        <!-- Text input-->
                        
                        </div>
                            <div class="form-group">
                            <label class="col-md-4 control-label" for="selectbasic">Estado Historial</label>
                            <div class="col-md-4">
                                <select id="selectbasic" name="estadoHistorial" class="form-control">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                                </select>
                            </div>
                            </div>
                        <!-- Button -->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton"></label>
                        <div class="col-md-4">
                            <button id="singlebutton" name="singlebutton" class="btn btn-info" style="margin: 20px">Actualizar</button>
                            <a class="btn btn-info" href="{{ route('historial.index') }}" style="margin: 20px"> Volver</a>
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