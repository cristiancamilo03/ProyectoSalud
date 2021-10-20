@extends('layouts.navbar')

@section('header')
    

<script src="https://kit.fontawesome.com/e0a1bf980c.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    @if ( session("mesnaje_exito"))
                        <div>{{ session("mensaje_exito") }} </div>
                    @endif                   
                    <a href="{{ route('historial.create') }}"<button class="btn btn-info">Crear Historial</button></a>
                    <div class="card-body">
                        <div class="table-responsive">                           
                            <table class="table table-striped table-hover" id="historial">
                                <thead class="thead">
                                    <tr>
										<th>Idhistorial</th>
										<th>Nombre Paciente</th>
										<th>Apellido Paciente</th>
										<th>Edad Paciente</th>
										<th>Fecha Historial</th>
										<th>Descripcion Historial</th>
										<th>Direccion</th>
										<th>Telefono</th>
										<th>Firma Paciente</th>
                                        <th>Estado Historial</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historial as $historialclinico)
                                        <tr>                                           
											<td>{{ $historialclinico->idHistorial }}</td>
											<td>{{ $historialclinico->NombrePaciente }}</td>
											<td>{{ $historialclinico->ApellidoPaciente }}</td>
											<td>{{ $historialclinico->EdadPaciente }}</td>
											<td>{{ $historialclinico->FechaHistorial }}</td>
											<td>{{ $historialclinico->DescripcionHistorial }}</td>
											<td>{{ $historialclinico->Direccion }}</td>
											<td>{{ $historialclinico->Telefono }}</td>
											<td>
                                            
                                                <img src="{{ $historialclinico->FirmaPaciente }}" class="img-fluid"width="120px" height="120px"  max-width="120px" max-height="120px">
                                                
                                            </td>
                                            <td>@if ($historialclinico->estadoHistorial == 0)
                                                    Inactivo
                                                @endif
                                                @if ($historialclinico->estadoHistorial == 1)
                                                    Activo
                                                @endif</td>
                                            <td>
                                                <a href="{{ url('historial/'. $historialclinico->idHistorial)}}">
                                                <i class="icono2 far fa-eye"></i>
                                                </a>
                                                
                                               
                                            </td>
                                            <td>
                                                <a href="{{ url('historial/'. $historialclinico->idHistorial . "/edit")}}">
                                                <i class="icono1 fas fa-pencil-alt"></i>
                                            </a>
                                            </td>
                                            <td>
                                                <a href="{{ url('pdf/'. $historialclinico->idHistorial)}}">
                                                <i class="icono3 far fa-file-pdf"></i>
                                                </a>
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
