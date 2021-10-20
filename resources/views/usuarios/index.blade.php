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
                    <a href="{{ route('datos.create') }}"<button class="btn btn-primary">Crear Historial</button></a>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
										<th>idDat</th>
										<th>Nombre Usuario</th>
										<th>Apellido Usuario</th>
										<th>Edad Usuario</th>
										<th>Direccion de residencia</th>
										<th>Telefono usuario</th>
                                        <th>Firma Usuario</th>
                                        <th>Estado Usuario</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datos as $dato)
                                        <tr>                                           
											<td>{{ $dato->idDat }}</td>
											<td>{{ $dato->Nombre }}</td>
											<td>{{ $dato->Apellido }}</td>
											<td>{{ $dato->Edad }}</td>
											<td>{{ $dato->Direccion }}</td>
											<td>{{ $dato->Telefono }}</td>
                                            <td>{{ $dato->Firma }}</td>
                                            <td>@if ($dato->Estado == 0)
                                                Inactivo
                                            @endif
                                            @if ($dato->Estado == 1)
                                                Activo
                                            @endif</td>
                                            <td>
                                                <a href="{{ url('datos/'. $dato->idDat)}}">
                                                <i class="icono2 far fa-eye"></i>
                                                </a>  
                                            </td>
                                            <td>
                                                <a href="{{ url('datos/'. $dato->idDat . "/edit")}}">
                                                <i class="icono1 fas fa-pencil-alt"></i>
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

