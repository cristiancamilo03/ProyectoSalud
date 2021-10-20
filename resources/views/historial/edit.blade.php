
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Actualizar Historialclinico</span>
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
                        <label class="col-md-4 control-label" for="textinput">Descripcion</label>  
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
                        <input value="{{$historial->FirmaPaciente}}" id="textinput" name="firmaPaciente" type="text" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton"></label>
                        <div class="col-md-4">
                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Actualizar</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
