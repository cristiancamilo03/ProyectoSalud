<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<center>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Historial Clínico</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('historial') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                        <fieldset>

                        <!-- Form Name -->
                        <legend>Form Name</legend>

                        <!-- Text input-->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Historial Clinico</label>  
                        <div class="col-md-4">
                        <input id="textinput" name="imagenHistorial" type="file" placeholder="" class="form-control input-md">
                            
                        </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton"></label>
                            <div class="col-md-4">
                                <button id="singlebutton" name="singlebutton" class="btn btn-primary">Guardar</button>
                                <a class="btn btn-primary" href="{{ route('historial.index') }}"> Volver</a>
                            </div>
                            </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
</center>