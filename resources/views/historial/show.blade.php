@extends('layouts.navbar')

@section('header')
<link rel="shortcut icon" href="../css/iconoG.ico" type="image/x-icon" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<center>    
<section class="content container-fluid" style="margin: 40px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Historial</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-info" href="{{ route('historial.index') }}"> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Paciente:</strong>
                            {{ $historial->NombrePaciente }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Paciente:</strong>
                            {{ $historial->ApellidoPaciente }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Historial:</strong>
                            {{ $historial->FechaHistorial }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion Historial:</strong>
                            {{ $historial->DescripcionHistorial }}
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
    </center>
@endsection