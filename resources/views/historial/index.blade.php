@extends('layouts.navbar')

@section('header')
    

<script src="https://kit.fontawesome.com/e0a1bf980c.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('historial.create') }}"<button class="btn btn-info">Crear Historial</button></a>
                    </div>
                    @if ( session("mesnaje_exito"))
                        <div>{{ session("mensaje_exito") }} </div>
                    @endif                   
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="historial" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
										<th>Idhistorial</th>
										<th>Nombre Paciente</th>
										<th>Apellido Paciente</th>
										<th>Edad Paciente</th>
										<th>Fecha Historial</th>
										<th>Descripcion Historial</th>
										<th>Direccion</th>
										<th>Telefono</th>
										<th>Firma Medico</th>
                                        <th>Estado Historial</th>
                                        <th></th>
                                        <th></th>
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
                                            <td>
                                                <a href="{{$historialclinico->FirmaPaciente}}"> Ver informe</a>
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="./js/historialDataTable.js"></script>
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    @endsection
