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
                            <a class="btn btn-info" href="{{ url('datos') }}"> Volver</a> 
                        </div>
                    </div>
                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Usuario:</strong>
                            {{ $datos->name }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Usuario:</strong>
                            {{ $datos->Apellido}}
                        </div>
                        <div class="form-group">
                            <strong>Correo Usuario:</strong>
                            {{ $datos->email}}
                        </div>
                        <div class="form-group">
                            <strong>Edad Usuario:</strong>
                            {{ $datos->Edad }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion Usuario:</strong>
                            {{ $datos->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono Usuario:</strong>
                            {{ $datos->Telefono }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
