<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Datos Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-info" href="{{ route('usuarios.index') }}"> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Paciente:</strong>
                            {{ $datos->NombrePaciente }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Paciente:</strong>
                            {{ $datos->ApellidoPaciente }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Historial:</strong>
                            {{ $datos->FechaHistorial }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion Historial:</strong>
                            {{ $datos->DescripcionHistorial }}
                        </div>
                        <div class="form-group">
                            <strong>Firma Historial:</strong>
                            <img src="{{ $historial->FirmaPaciente}}" class="img-fluid"width="130px" height="130px"  max-width="130px" max-height="130px">
                        </div>
                        <div class="form-group">
                            <strong>Estado Historial:</strong>
                            @if ($historial->estadoHistorial == 0)
                                                    Inactivo
                                                @endif
                                                @if ($historial->estadoHistorial == 1)
                                                    Activo
                                                @endif</td>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
