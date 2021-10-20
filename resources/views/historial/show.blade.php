@section('template_title')
    {{ $libro->name ?? 'Show Libro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Historial</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('historial.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Paciente:</strong>
                            {{ $historial->nombrePaciente }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Paciente:</strong>
                            {{ $historial->apellidoPaciente }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Historial:</strong>
                            {{ $historial->fechaHistorial }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion Historial:</strong>
                            {{ $historial->descripcionHistorial }}
                        </div>
                        <div class="form-group">
                            <strong>Firma Historial:</strong>
                            {{ $historial->firmaPacientes}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection