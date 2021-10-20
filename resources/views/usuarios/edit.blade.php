<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<center>
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Actualizar Personal de Salud</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('datos/' . $datos->idDat) }}">
                        @method('PUT')
                        @csrf
                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Nombre</label>  
                        <div class="col-md-4">
                        <input value="{{ $datos->Nombre }}" id="textinput" name="nombrePaciente" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Apellido</label>  
                        <div class="col-md-4">
                        <input value="{{$datos->Apellido}}" id="textinput" name="apellidoPaciente" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Edad</label>  
                        <div class="col-md-4">
                        <input value="{{ $datos->Edad }}" id="textinput" name="edadPaciente" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Dirección</label>  
                        <div class="col-md-4">
                        <input value="{{$datos->Direccion}}" id="textinput" name="fechaHistorial" type="date" placeholder="" class="form-control input-md" disabled>
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Telefono</label>  
                        <div class="col-md-4">
                        <input value="{{ $datos->Telefono }}" value="{{$historial->descripcionHistorial}}" id="textinput" name="descripcionHistorial" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Firma</label>  
                        <div class="col-md-4">
                        <input value="{{ $datos->Firma }}"  name="direccionPaciente" type="text" placeholder="" class="form-control input-md">
                            
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
                        <input value="{{$historial->FirmaPaciente}}" id="textinput" name="firmaPaciente" type="text" placeholder="" class="form-control input-md">
                            
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
                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Actualizar</button>
                            <a class="btn btn-primary" href="{{ route('historial.index') }}"> Volver</a>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</center>